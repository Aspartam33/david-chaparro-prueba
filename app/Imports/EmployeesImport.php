<?php

namespace App\Imports;

use App\Employee;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;

use Maatwebsite\Excel\Concerns\WithStartRow;
class EmployeesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function startRow(): int
    {
        return 3;
    }
    public function transformDate($value, $format = 'Y-m-d')
    {
        try {
            return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
        } catch (\ErrorException $e) {
            return \Carbon\Carbon::createFromFormat($format, $value);
        }
    }
    public function model(array $row)
    {
        
        return new Employee([
            //
            
            'name'     => $row['0'] ?? "",
            'surname'    => $row['1'] ?? "", 
            'nationality'    => $row['2'] ?? "",
            'hiring_date'    => $this->transformDate($row['3']),
            'gender'    => $row['4'] ?? "",
        ]);
    }
   
}
