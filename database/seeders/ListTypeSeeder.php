<?php

namespace Database\Seeders;

use App\Models\ListType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ListTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listTypes = ["basic", "todo", "goal", "task"];

        foreach ($listTypes as $listType) {
            ListType::create([
                "name" => $listType
            ]);
        }
    }
}
