<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jabatan extends Model
{
    protected $table = 'jabatan';
    protected $fillable = ['nama_jabatan'];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }

    public function subJabatans()
    {
        return $this->hasMany(SubJabatan::class);
    }
}
