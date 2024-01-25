<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        "id","nama"
    ];

    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
