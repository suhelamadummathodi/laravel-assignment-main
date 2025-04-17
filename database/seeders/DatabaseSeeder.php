<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ObjectType;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        $types = ['Schedules', 'Parents', 'Students'];

        foreach ($types as $type) {
            ObjectType::firstOrCreate(['name' => $type]);
        }
        $this->call([
            FranchiseSeeder::class,
            ScheduleSeeder::class,
            ParentSeeder::class,
            StudentSeeder::class,
        ]);
    }
}
