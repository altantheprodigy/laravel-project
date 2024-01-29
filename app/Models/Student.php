<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kelas;

class Student extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $fillable = [
        "nis","nama","kelas_id","tgl_lahir","alamat"
    ];

// Student.php
public function kelas()
{
    return $this->belongsTo(Kelas::class, 'kelas_id');
}

}
