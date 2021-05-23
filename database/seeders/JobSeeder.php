<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Job::truncate();
        \App\Models\Job::unguard();

        $faker = \Faker\Factory::create();

        \App\Models\User::all()->each(function ($user) use ($faker) {
            foreach (range(1, 5) as $i) {
                $status = "QUEUED";

                if($i == 4){
                    $status = 'PROCESSING';
                }elseif ($i == 5){
                    $status = 'COMPLETE';
                }

                \App\Models\Job::create([
                    'user_id' => $user->getKey(),
                    'title' => $faker->sentence,
                    'status' => $status
                ]);
            }
        });
    }
}
