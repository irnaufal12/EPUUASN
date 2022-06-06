<?php

namespace Database\Factories;

use App\Models\BankSoal;
use App\Models\SesiUjian;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Peraturan;
use App\Models\User;
use Carbon\Carbon;

class SesiUjianFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SesiUjian::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id = Peraturan::inRandomOrder()->first()->id;
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'peraturan_id' => $id,
            'tgl' => Carbon::now()->format('Y-m-d'),
            'jam' => Carbon::now()->format('H:i:s'),
            'id_soal_1' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_2' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_3' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_4' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_5' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_6' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_7' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_8' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_9' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_10' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_11' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_12' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_13' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_14' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_15' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_16' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_17' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_18' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_19' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
            'id_soal_20' => BankSoal::where('peraturan_id', $id)->inRandomOrder()->take(20)->distinct()->first(),
        ];
    }
}
