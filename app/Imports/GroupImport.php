<?php

namespace App\Imports;

use App\Card;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class GroupImport implements ToModel, WithHeadingRow, WithValidation   
{
     /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }

    public function rules(): array
    {
        return [
            'cr_no' => Rule::unique('cards', 'cpr_no'), // Table name, field in your db
        ];
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

            if (!($row['img'] == null)) {
                $image = $row['img'];
                $file_name = $image->getClientOriginalName();
    
                $card->img = $file_name;
                // move pic
                $imageName = $row['img']->getClientOriginalName();
                $row['img']->move(public_path('customer_img/' . $row['cr_no']), $imageName);
            }
    
            $date_s = Carbon::createFromFormat('Y-m-d', Date::excelToDateTimeObject($row['date'])->format('Y-m-d'));
            if ($row['period'] == '3Months') {
                $date = 3;
                $date_s = $date_s->addMonth($date);
            } elseif ($row['period'] == '4Months') {
                $date = 4;
                $date_s = $date_s->addMonth($date)->toDateString();
            } elseif ($row['period'] == '5Months') {
                $date = 5;
                $date_s = $date_s->addMonth($date)->toDateString();
            } elseif ($row['period'] == '1Year') {
                $date = 1;
                $date_s = $date_s->addYear($date)->toDateString();
            } elseif ($row['period'] == '2Years') {
                $date = 2;
                $date_s = $date_s->addYear($date)->toDateString();
            } elseif ($row['period'] == '5Years') {
                $date = 5;
                $date_s = $date_s->addYear($date)->toDateString();
            }
    
             return new Card([
                'name' => $row['name'],
                'cpr_no' => $row['cr_no'],
                'mobile' => $row['mobile'],
                'phone' => $row['phone'],
                'price' => $row['price'],
                'card_type_id' => $row['card_type_id'],
                'payment_method' => $row['payment_method'],
                'contact_method' => $row['contact_method'],
                'package_type' => $row['package_type'],
                'comment' => $row['comment'],
                'period' => $row['period'],
                'agent_id' => $row['agent_id'],
                'status' => $row['status'],
                'first_issue_date' => Date::excelToDateTimeObject($row['first_issue_date'])->format('Y-m-d'),
                'date' => Date::excelToDateTimeObject($row['date'])->format('Y-m-d'),
                'email' => $row['email'],
                'father_id' => $row['father_id'],
                'expiry' => $date_s,
                'img' => $row['img'],
                'group_company' => 1,
            ]);
       }catch(Exception $e){
            dd($e);
       }
    }
    
    // public function rules(): array
    // {
    //     return [
    //         'email' => 'nullable|email',
    //         'cr_no' => ['required', 'string', 'unique|users:email'],
    //         'phone' => 'nullable|max:15',
    //     ];
    // }
}
