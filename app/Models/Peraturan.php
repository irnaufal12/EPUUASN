<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peraturan extends Model
{
    use HasFactory;
    protected $table = 'peraturan';
    protected $fillable = [
        'no_peraturan',
        'tentang',
        'tgl_ditetapkan',
        'tgl_diundangkan',
    ];

    public function peraturan() {
        return $this->hasMany(Peraturan::class);
    }
}
