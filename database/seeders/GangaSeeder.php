<?php

namespace Database\Seeders;

use App\Models\Ganga;
use Illuminate\Database\Seeder;

class GangaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ganga::factory()->count(60)->create();
    }
}
