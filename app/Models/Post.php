<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'nim', 'nama', 'jenis_kelamin', 'alamat'
    ];

    protected $casts = [
        'nim' => 'integer', // Memastikan nim berupa integer
    ];

    // Membuat mutator untuk mengubah jenis kelamin menjadi lowercase sebelum disimpan
    public function setJenisKelaminAttribute($value)
    {
        $this->attributes['jenis_kelamin'] = strtolower($value);
    }
}
