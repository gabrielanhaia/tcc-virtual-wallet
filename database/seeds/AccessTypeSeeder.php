<?php

use App\AccessType;
use Illuminate\Database\Seeder;

class AccessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['student', 'teacher', 'admin', 'developer'];

        foreach ($types as $type) {
            AccessType::create(['type' => $type]);
        }
    }
}
