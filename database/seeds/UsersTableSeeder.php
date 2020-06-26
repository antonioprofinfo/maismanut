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
    //     DB::table('users')->insert([

    //         'name'=> 'Antonio',
    //         'email'=> 'abc@def',
    //         'email_verified_at'=> now(),
    //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
    //         'remember_token' => 'tokentoken',
    //     ]);

        //Cria usuarios fakes
        //factory(\App\User::class, 10)->create();

        factory(\App\User::class, 40)->create()->each(function($user){
            $user->pessoa()->save(factory(\App\Pessoa::class)->make());

        });

    }
}
