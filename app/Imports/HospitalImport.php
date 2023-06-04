<?php

namespace App\Imports;

use App\Hospital;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;


class HospitalImport implements ToModel, WithHeadingRow   
{
    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        try{
            if(!array_filter($row)) {
                return null;
             } 
            return new Hospital([
                'category_id' => $row['category_id'],
                'name' => $row['name'],
                'name_ar' => $row['name_ar'],
                'contract_date' => $row['contract_date'],
                'expiry_date' => $row['expiry_date'],
                'cr_no' => $row['cr_no'],
                'place' => $row['place'],
                'place_ar' => $row['place_ar'],
                'contact1' => $row['contact1'],
                'contact2' => $row['contact2'],
                'email' => $row['email'],
                'address' => $row['address'],
                'address_ar' => $row['address_ar'],
                'website' => $row['website'],
                'description' => $row['description'],
                'description_ar' => $row['description_ar'],
                'comment' => $row['comment'],
                'status' => $row['status'],
                'on_off' => $row['on_off'],

            ]);
        } catch(Exception $e){
            dd($e);
        }
    }
}
