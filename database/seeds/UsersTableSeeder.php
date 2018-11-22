<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        DB::table('users')->truncate();
        App\User::create([
        	'username' => 'Badman',
        	'account_type'=>'1',
        	'pass_word' => bcrypt('12345678')
        ]);
    
    }
}
