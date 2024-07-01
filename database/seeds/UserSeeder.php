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
        //初期データ作成
        User::create([
            'username' => 'demo松本',
            'mail' =>'demomatsumoto@example.com',
            'password' => bcrypt('demo'),
        ]);
    }
}
