<?php

namespace Database\Seeders;

use App\Models\Vocabulary;
use Illuminate\Database\Seeder;

class VocabularySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Vocabulary::create([
            'name' => 'Ente',
            'description' => 'Ente utilizzatore',
        ]);
    }
}
