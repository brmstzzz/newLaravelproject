<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\ProgramStudi;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim',
        'nama',
        'tempat_lahir',
        'tgl_lahir',
        'jenis_kelamin',
        'program_studi_id'
    ];

    public function programStudi()
    {
        return $this->belongsTo(ProgramStudi::class, 'program_studi_id');
    }

    protected function jenisKelamin(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value === 'L' ? 'Laki-Laki' : 'Perempuan',
        );
    }
}