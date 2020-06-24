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
        DB::table('users')->insert([

            'email'=> 'abc@def',
            'email_verified_at'=> Now(),
            'password' => abc123
        ]);
      

        //factory(\App\User::Class, 10)->create()->each(function($user){
       // $user->user()->save(factory(\App\User::class)->make());
       //});
    }
}
