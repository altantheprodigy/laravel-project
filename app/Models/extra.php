<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class extra 
{
    private static $extra = [
        [
            "id" => 1,
            "nama" => "Futsal",
            "nama_pembina" => "AanGanz",
            "desc" => "extracurricular yang bergerak di bidang olahraga Futsal"
        ],

        [
            "id" => 2,
            "nama" => "Basket",
            "nama_pembina" => "Deka",
            "desc" => "extracurricular yang bergerak di bidang olahraga Basket"
        ],

        [
            "id" => 3,
            "nama" => "Band",
            "nama_pembina" => "PanduJago",
            "desc" => "extracurricular yang bergerak di bidang seni Musik"
        ],

        [
            "id" => 4,
            "nama" => "Rohis",
            "nama_pembina" => "Arya",
            "desc" => "extracurricular yang bergerak di bidang Keagamaan"
        ],

        [
            "id" => 5,
            "nama" => "PMR",
            "nama_pembina" => "Dansihh",
            "desc" => "extracurricular yang bergerak di bidang Kesehatan"
        ]
    ];

    public static function all()
    {
        return self::$extra;
    }
}
