<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SesiUjian extends Model
{
    use HasFactory;
    protected $table = 'sesi_ujian';
    protected $fillable = [
            'user_id',
            'peraturan_id',
            'tgl',
            'jam',
            'id_soal_1',
            'id_soal_2',
            'id_soal_3',
            'id_soal_4',
            'id_soal_5',
            'id_soal_6',
            'id_soal_7',
            'id_soal_8',
            'id_soal_9',
            'id_soal_10',
            'id_soal_11',
            'id_soal_12',
            'id_soal_13',
            'id_soal_14',
            'id_soal_15',
            'id_soal_16',
            'id_soal_17',
            'id_soal_18',
            'id_soal_19',
            'id_soal_20',
            'nilai',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function peraturan() {
        return $this->belongsTo(Peraturan::class);
    }

    public function soal() {
        return $this->belongsTo(BankSoal::class);
    }
}
