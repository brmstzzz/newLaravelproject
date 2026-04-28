<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;
use App\Models\Mahasiswa;

class ProgramStudi extends Model
{
    use HasFactory;

    protected $table = 'program_studi';

    protected $fillable = [
        'nama_prodi',
        'fakultas',
        'jenjang'
    ];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }

    protected function fakultas(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Str::title($value),
        );
    }
}