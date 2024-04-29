<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userdata = [
            [
                'name' => 'Mas Operator',
                'email' => 'operator@gmail.com',
                'role' => 'operator',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Mas Keuangan',
                'email' => 'keuangan@gmail.com',
                'role' => 'keuangan',
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Mas Marketing',
                'email' => 'marketing@gmail.com',
                'role' => 'marketing',
                'password' => bcrypt('123456')
            ],
        ];

        foreach($userdata as $val){
            User::create($val);
        }
    }
}
