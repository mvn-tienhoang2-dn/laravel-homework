<?php

namespace Database\Seeders;

use App\Models\UserT;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;


// require_once '/path/to/Faker/src/autoload.php';
//composer dump-autoload

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserT::factory()
            ->count(10)
            ->create();
    }
}
