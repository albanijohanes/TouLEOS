<?php

use App\role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create roles
        $customerRole = role::create(['nama' => 'Customer']);
        $porterRole = role::create(['nama' => 'Porter']);
        $merchantRole = role::create(['nama' => 'Merchant']);

        // Create users
        $customer = User::create([
            'nama' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('password'),
            'role_id' => $customerRole->id,
        ]);

        $porter = User::create([
            'nama' => 'Jane Porter',
            'email' => 'jane@example.com',
            'password' => Hash::make('password'),
            'role_id' => $porterRole->id,
        ]);

        $merchant = User::create([
            'nama' => 'Mike Merchant',
            'email' => 'mike@example.com',
            'password' => Hash::make('password'),
            'role_id' => $merchantRole->id,
        ]);
    }
}
