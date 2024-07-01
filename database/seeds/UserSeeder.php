<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //初期データ
        User::create([
        'username' => '松本demo',
        'mail' => 'demomatsumoto@example.com',
        'password' => bcrypt('demo'),
        ]);
    }
}
