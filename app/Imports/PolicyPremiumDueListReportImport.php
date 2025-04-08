<?php

namespace App\Imports;

use App\Models\PolicyPremiumDueListReport;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class PolicyPremiumDueListReportImport implements ToCollection
{
    private $headingRow = 0;

    public function collection(Collection $rows)
    {
        $this->headingRow = $this->findHeadingRow($rows, 'Month Year');

        foreach ($rows as $index => $row) {
            if ($index <= $this->headingRow || $this->isInvalidRow($row)) {
                continue;
            }

            $rowData = $this->mapRowToHeaders($row, $rows[$this->headingRow]);

            if ($this->isValidRow($rowData)) {
                $monthYear = $this->truncate($rowData['Month Year'] ?? null, 255);

                if (empty($monthYear)) {
                    Log::error("Skipping row due to missing 'Month_year': " . json_encode($rowData));
                    continue; // Skip rows where 'Month_year' is missing
                }

                PolicyPremiumDueListReport::create([
                    'Month_year'        => $monthYear,
                    'Dates'             => $this->truncate($rowData['Dates'] ?? null, 255),
                    'Servicing_agent'   => $rowData['Servicing Agent'] ?? null,
                    'Owner'             => $rowData['Owner'] ?? null,
                    'Policy_insured'    => $rowData['Policy Insured'] ?? null,
                    'Policy_number'     => $rowData['Policy Number'] ?? null,
                    'Contract_status'   => $rowData['Contract Status'] ?? null,
                    'Premium_status'    => $rowData['Premium Status'] ?? null,
                    'Mode'              => $rowData['Mode'] ?? null,
                    'Plan_code'         => $rowData['Plan Code'] ?? null,
                    'Plan_description'  => $rowData['Plan Description'] ?? null,
                    'Effectivity_date'  => $this->formatDate($rowData['Effectivity Date'] ?? null), 
                    'Currency'          => $rowData['Currency'] ?? null,
                    'Sum_assured'       => $this->cleanNumber($rowData['Sum Assured'] ?? 0),
                    'Modal_premium'     => $this->cleanNumber($rowData['Modal Premium'] ?? 0),
                    'Due_date'          => $this->formatDate($rowData['Due Date'] ?? null),
                    'API'               => $this->cleanNumber($rowData['API'] ?? 0),
                    'created_at'        => now(),
                    'updated_at'        => now(),
                ]);
            }
        }
    }

    private function findHeadingRow(Collection $rows, $headerName)
    {
        foreach ($rows as $index => $row) {
            if (in_array($headerName, $row->toArray())) {
                return $index;
            }
        }
        return 0;
    }

    private function mapRowToHeaders($row, $headerRow)
    {
        $mappedRow = [];
        foreach ($headerRow as $key => $header) {
            $mappedRow[trim($header)] = $row[$key] ?? null;
        }
        return $mappedRow;
    }

    private function isValidRow($row)
    {
        return isset($row['Policy Number']) && !empty($row['Policy Number']);
    }

    private function isInvalidRow($row)
    {
        $text = implode('', $row->toArray());
        return str_contains($text, 'Note:') || str_contains($text, 'Disclaimer');
    }

    private function cleanNumber($value)
    {
        return is_numeric(str_replace(',', '', $value)) ? str_replace(',', '', $value) : 0;
    }

    private function truncate($value, $length)
    {
        return $value ? substr(trim($value), 0, $length) : null;
    }

    private function formatDate($value)
{
    if (!$value) {
        return 'UNKNOWN'; // 🔹 Default value if the date is null
    }

    if (is_numeric($value)) {
        return Carbon::createFromDate(1899, 12, 30)->addDays($value)->toDateString();
    }

    try {
        return Carbon::parse($value)->toDateString();
    } catch (\Exception $e) {
        Log::error("Invalid date format: {$value}");
        return 'UNKNOWN'; // 🔹 Ensures it never returns NULL
    }
}
}
