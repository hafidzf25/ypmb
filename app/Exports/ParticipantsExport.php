<?php
namespace App\Exports;

use App\Models\PartisipanSeminar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ParticipantsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        // Get all participants along with their user details
        return PartisipanSeminar::with('user')->get()->map(function ($participant) {
            return [
                'name' => $participant->user->name,
                'email' => $participant->user->email,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Name',
            'Email',
        ];
    }
}
