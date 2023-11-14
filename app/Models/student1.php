<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students 
{
    private static $students = [
        [
            "nama" => "Altan",
            "id" => 1,
            "nis" => "7080",
            "kelas" => "11 PPLG 1",
            "alamat" => "Kudus",
        ],

        [
            "nama" => "Calvin",
            "id" => 2,
            "nis" => "7090",
            "kelas" => "11 PPLG 1",
            "alamat" => "Jember",

        ],

        [
            "nama" => "Pandu",
            "id" => 3,
            "nis" => "7070",
            "kelas" => "11 PPLG 1",
            "alamat" => "Kudus",

        ],

        [
            "nama" => "Zidni",
            "id" => 4,
            "nis" => 7060,
            "kelas" => "11 PPLG 1",
            "alamat" => "Kudus",

        ],

        [
            "nama" => "Fuad",
            "id" => 5,
            "nis" => "7050",
            "kelas" => "11 PPLG 1",
            "alamat" => "Kudus",

        ]
        ];
        
       
        

    public static function all()
    {
        return self::$students;
    }
}
