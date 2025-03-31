<?php

namespace App\Imports;

use App\Models\IssuedReport;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Collection;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class IssuedReportImport implements ToCollection
{
    private $headingRow = 0;

    public function collection(Collection $rows)
    {
        // Determine the heading row by searching for a specific header name
        $this->headingRow = $this->findHeadingRow($rows, 'Policy Number');

        foreach ($rows as $index => $row) {
            // Skip rows before the heading row
            if ($index <= $this->headingRow) {
                continue;
            }

            // Map the row data to the corresponding headers
            $rowData = $this->mapRowToHeaders($row, $rows[$this->headingRow]);

            // Validate and process the row
            if ($this->isValidRow($rowData)) {
                IssuedReport::create([
                    'UM'                => $rowData['UM'] ?? null,
                    'AG'                => $rowData['AG'] ?? null,
                    'Policy_number'     => $rowData['Policy Number'] ?? null,
                    'Plan_code'         => $rowData['Plan Code'] ?? null,
                    'Currency'          => $rowData['Currency'] ?? null,
                    'Client_name'       => $rowData['Client Name'] ?? null,
                    'First_issued_date' => $this->formatDate($rowData['First Issue Date'] ?? null),
                    'Mode'              => $rowData['Mode'] ?? null,
                    'Modal_premium'     => $this->cleanNumber($rowData['Modal Premium'] ?? null),
                    'Sum_assured'       => $this->cleanNumber($rowData['Sum Assured'] ?? null),
                    'API'               => $this->cleanNumber($rowData['API'] ?? null),
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
        return 0; // Default to the first row if not found
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
        return isset($row['Policy Number']) && is_numeric($row['Policy Number']);
    }

    private function formatDate($date)
    {
        if (is_numeric($date)) {
            // Date is in Excel serialized format
            return Date::excelToDateTimeObject($date)->format('M-d-y');
        } elseif (strtotime($date) !== false) {
            // Date is in a standard string format
            return date('Y-m-d', strtotime($date));
        }
        return null;
    }

    private function cleanNumber($value)
    {
        return $value ? str_replace(',', '', $value) : null;
    }
}
