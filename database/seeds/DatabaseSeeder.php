<?php

use App\Merchant;
use App\Porter;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $userPorter = User::create([
            'nama'      => 'Erick Kalumata',
            'username'  => 'erick',
            'role'      => 'porter',
            'jk'        => 'Laki-laki',
            'no_hp'     => '08123456789',
            'password'  => Hash::make('erick'),
        ]);

        $userMerchant = User::create([
            'nama'      => 'Roma Mantiri',
            'username'  => 'roma',
            'no_hp'     => '08123456789',
            'jk'        => 'Laki-laki',
            'role'      => 'merchant',
            'password'  => Hash::make('roma'),
        ]);

        User::create([
            'nama' => 'Admin',
            'username' => 'admintouleos',
            'password' => Hash::make('admintouleos'),
            'jk' => 'Laki-laki',
            'role' => 'admin',
            'no_hp' => '082190220486',
        ]);

        User::create([
            'nama'      => 'Christian Soewoeh',
            'username'  => 'chris',
            'role'      => 'customer',
            'jk'        => 'Laki-laki',
            'no_hp'     => '08123456789',
            'password'  => Hash::make('mner'),
        ]);

        Porter::create([
            'user_id'   => $userPorter->id,
            'email'     => 'erickkalumata106@student.unsrat.ac.id',
            'alamat'    => 'aaifhaofhaoffsa',
            'skkb'      => 'afhaofhaofhaowfa',
            'ktp'       => 'afnawofaowfnaf',
            'porter_id' => $this->generatePorterCode(),
            'status'    => 'approved',
        ]);

        Merchant::create([
            'user_id'   => $userMerchant->id,
            'email'     => 'romamantiri106@student.unsrat.ac.id',
            'alamat'    => 'aaifhaofhaoffsa',
            'siup'      => 'dasdadad',
            'ktp'       => 'asdadsada',
            'status'    => 'approved',
        ]);
    }
    protected function generatePorterCode(){
        $porter_id = strtoupper(Str::random(3)) . str_pad(rand(10,99), 2, '0', STR_PAD_LEFT);

        while(Porter::where('porter_id', $porter_id)->exists()){
            $porter_id = strtoupper(Str::random(3)) . str_pad(rand(10,99), 2, '0', STR_PAD_LEFT);
        }

        return $porter_id;
    }
}
