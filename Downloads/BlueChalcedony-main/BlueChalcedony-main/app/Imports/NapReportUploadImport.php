<?php

namespace App\Imports;

use App\Models\NapReportUpload;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use Carbon\Carbon;

class NapReportUploadImport implements ToCollection
{
    private $headingRow = 0;

    public function collection(Collection $rows)
    {
        $this->headingRow = $this->findHeadingRow($rows, 'UM');

        foreach ($rows as $index => $row) {
            if ($index <= $this->headingRow || $this->isInvalidRow($row)) {
                continue;
            }

            $rowData = $this->mapRowToHeaders($row, $rows[$this->headingRow]);

            if ($this->isValidRow($rowData)) {
                NapReportUpload::create([
                    'UM'                  => $this->truncate($rowData['UM'] ?? null, 255),
                    'AG'                  => $this->truncate($rowData['AG'] ?? null, 255),
                    'Policy_number'       => $rowData['Policy Number'] ?? null,
                    'Account_type'        => $rowData['Account Type'] ?? null,
                    'Contract_type_code'  => $rowData['Contract Type Code'] ?? null,
                    'Type_desc'           => $rowData['Type Desc'] ?? null,
                    'Transaction_date'    => $this->formatDate($rowData['Transaction Date'] ?? null),
                    'Temp_receipt_date'   => $this->formatDate($rowData['Temp Receipt Date'] ?? null),
                    'Agent_code'          => $rowData['Agent Code'] ?? null,
                    'Agent_name'          => $rowData['Agent Name'] ?? null,
                    'SUCode'              => $rowData['SUCode'] ?? null,
                    'Branch_name'         => $rowData['Branch Name'] ?? null,
                    'API'                 => $this->cleanNumber($rowData['API'] ?? 0),
                    'CCCredit'            => $this->cleanNumber($rowData['CCCredit'] ?? 0),
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
            $mappedRow[$header] = $row[$key] ?? null;
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
            return null;
        }

        // Check if the value is a numeric Excel date (e.g., 45000 means 2023-03-15)
        if (is_numeric($value)) {
            return Carbon::createFromDate(1899, 12, 30)->addDays($value)->toDateString();
        }

        // Attempt to parse text-based date formats
        try {
            return Carbon::parse($value)->toDateString();
        } catch (\Exception $e) {
            return null; // Return null if parsing fails
        }
    }

    

}
