<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;


use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    //    truncate tables
    DB::table('job_listings')->truncate();
    DB::table('users')->truncate();

    $this->call(RandomUserSeeder::class);
    $this->call(JobSeeder::class);
    }
}
