<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Collections\FromCollection;

class UsersExport implements FromCollection
{
    public function collection()
    {
        return User::all();
    }
}
