<?php

namespace App\Exports;

use App\Models\MainModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class ApplicantListExport implements FromCollection,WithHeadings,ShouldAutoSize,WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings():array{
        return[
            'firstname',
            'lastname',
            'middlename',
            'birthday',
            'age',
            'birthplace',
            'gender',
            'email',
            'phonenumber',
            'address',
            'postalcode',
            'agreement'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
     
        return collect(MainModel::getList());
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
   
                $event->sheet->getDelegate()->getStyle('A1:M1')
                                ->getFont()
                                ->setBold(true);
   
            },
        ];
    }
}