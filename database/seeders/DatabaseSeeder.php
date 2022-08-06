<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use App\Models\Skill;
use App\Models\About;
use App\Models\Profilelink;
use App\Models\Education;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Type::truncate();
        Project::truncate();
        Skill::truncate();
        About::truncate();
        Profilelink::truncate();
        Education::truncate();
        
        User::factory()->count(2)->create();
        Type::factory()->count(3)->create(); // 'Type' is a foregin key that belongs to 'Project' table, so is listed above 'Projects'
        Project::factory()->count(10)->create();
        Skill::factory()->count(10)->create();
        About::factory()->count(2)->create();
        Profilelink::factory()->count(2)->create();
        Education::factory()->count(4)->create();

    }
}
