<?php

use App\User;
use App\AccessType;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::get();

        if($users->count() == 0) {
            $adminAccess = AccessType::where('type', 'admin')->first();

            User::create([
                'name'  => 'System Admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('admin'),
                'access_type_id' => $adminAccess->id,
            ]);
        }
    }
}
