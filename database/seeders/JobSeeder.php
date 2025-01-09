<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\user;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobListings = include database_path('seeders/Data/job_listings.php');

        $userIds = User::pluck('id')->toArray();

        foreach($jobListings as &$listing){
            $listing['user_id'] = $userIds[array_rand($userIds)];

            // time stamps
        $listing['created_at'] = now();
        $listing['updated_at'] = now();
        }

         //insert job listings
    DB::table('job_listings')->insert($jobListings);
    echo 'Jobs created successfully';
    }

   
}
