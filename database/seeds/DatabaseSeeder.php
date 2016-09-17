<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->call('TebleUserSeeder');
    }
}

class TebleUserSeeder extends Seeder
{
    public function run()
    {
        $usuarios = User::get();

        if($usuarios->count() == 0) {
            User::create(array(
                'email' => 'admin@mail.com',
                'password' => Hash::make('admin'),
                'name'  => 'System Admin',
                'type'  => 'admin'
            ));
        }
    }
}