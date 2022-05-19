<?php

use Illuminate\Database\Seeder;
use App\User;


class UserSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Luciano Nascimento',
            'email' => 'lucianosantosti@hotmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
