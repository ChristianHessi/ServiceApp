<?php

namespace App\Exports;

// use App\Invoice;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ServicesExport implements FromArray, WithHeadings, ShouldAutoSize, WithEvents
{
    protected $services;

    public function __construct($collection)
    {
        $this->services = $collection;
    }

    public function array(): array
    {
        return $this->services;
    }

    public function headings(): array
    {
        return ["Date de prestation", "Code", "Technicien", "Client", "Service", "Prix"];
    }

    public function registerEvents(): array
    {
        return [
            // Handle by a closure.
            AfterSheet::class => function(AfterSheet $event) {

                // last column as letter value (e.g., D)
                $last_column = Coordinate::stringFromColumnIndex(count($this->services));

                // dd($last_column);

                // calculate last row + 1 (total results + header rows + column headings row + new row)
                $last_row = count($this->services) + 2 + 1 + 1;

                // set up a style array for cell formatting
                $style_text_center = [
                    'alignment' => [
                        'horizontal' => Alignment::HORIZONTAL_CENTER
                    ]
                ];

                // at row 1, insert 2 rows
                $event->sheet->insertNewRowBefore(1, 2);

                // merge cells for full-width
                $event->sheet->mergeCells(sprintf('A1:%s1',$last_column));
                $event->sheet->mergeCells(sprintf('A2:%s2',$last_column));
                $event->sheet->mergeCells(sprintf('A%d:%s%d',$last_row,$last_column,$last_row));

                // assign cell values
                $event->sheet->setCellValue('A1','RAPPORT SUR LES PRESTATIONS EFFECTUEES');
                // $event->sheet->setCellValue('A2','SECURITY CLASSIFICATION - UNCLASSIFIED [Generator: Admin]');
                // $event->sheet->setCellValue(sprintf('A%d',$last_row),'SECURITY CLASSIFICATION - UNCLASSIFIED [Generated: ...]');

                // assign cell styles
                $event->sheet->getStyle('A1:A2')->applyFromArray($style_text_center);
                $event->sheet->getStyle(sprintf('A%d',$last_row))->applyFromArray($style_text_center);
            },
        ];
    }
}
