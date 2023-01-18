<?php

namespace App\Imports;

use App\Models\JadwalPelajaran;
use Maatwebsite\Excel\Concerns\ToModel;

class JadwalPelajaranImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new JadwalPelajaran([
            'hari'      => $row['1'],
            'nama'     => $row['2'], 
        ]);
    }
}