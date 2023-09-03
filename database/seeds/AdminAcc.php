<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminAcc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'BeRsAmA2023TouLEOS',
            'username' => 'BeRsAmA2023TouLEOS',
            'password' => Hash::make('APFJpfnapf1230918230'),
            'jk' => 'Laki-laki',
            'role' => 'admin',
            'no_hp' => '082190220486',
        ]);
    }
}
