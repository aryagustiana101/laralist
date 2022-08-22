<?php

namespace Database\Seeders;

use App\Helpers\Constant;
use App\Models\ListHeader;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lists = [
            [
                "header" => [
                    "user_id" => 1,
                    "list_type_id" => Constant::LIST_TYPE['basic'],
                    "name" => "Movie List",
                ],
                "body" => [
                    [
                        "title" => "The Shawshank Redemption",
                    ],
                    [
                        "title" => "The Godfather",
                    ],
                    [
                        "title" => "Star Wars",
                    ]
                ]
            ],
            [
                "header" => [
                    "user_id" => 1,
                    "list_type_id" => Constant::LIST_TYPE['todo'],
                    "name" => "Exam Practice Todo List",
                    "all_completed" => false,
                ],
                "body" => [
                    [
                        "title" => "Learn Algebra",
                        "completed" => false,
                    ],
                    [
                        "title" => "Learn Calculus",
                        "completed" => true,
                    ],
                    [
                        "title" => "Read about Civil War",
                        "completed" => false,
                    ]
                ]
            ],
            [
                "header" => [
                    "user_id" => 1,
                    "list_type_id" => Constant::LIST_TYPE['goal'],
                    "name" => "My 2022 Goal List",
                    "all_completed" => false,
                    "range_start_time" => "2022-01-01",
                    "range_end_time" => "2022-12-31",
                ],
                "body" => [
                    [
                        "title" => "Familiar with MERN stack",
                        "completed" => true,
                    ],
                    [
                        "title" => "Have more confidence in myself",
                        "completed" => false,
                    ],
                    [
                        "title" => "Gather money for future savings",
                        "completed" => false,
                    ],
                    [
                        "title" => "Be a better person than before",
                        "completed" => false,
                    ],
                ]
            ],
            [
                "header" => [
                    "user_id" => 1,
                    "list_type_id" => Constant::LIST_TYPE['task'],
                    "name" => "Week 1 Task List",
                    "all_completed" => false,
                ],
                "body" => [
                    [
                        "title" => "Finish exam book",
                        "start_time" => now(),
                        "end_time" => now()->addDays(1),
                        "completed" => true,
                    ],
                    [
                        "title" => "Make a plan for next week",
                        "start_time" => now(),
                        "end_time" => now()->addDays(2),
                        "completed" => false,
                    ],
                    [
                        "title" => "Do science paper",
                        "start_time" => now(),
                        "end_time" => now()->addDays(3),
                        "completed" => false,
                    ],
                    [
                        "title" => "Buy groceries",
                        "start_time" => now(),
                        "end_time" => now()->addHours(6),
                        "completed" => false,
                    ],
                ]
            ],
        ];

        foreach ($lists as $list) {
            $header = ListHeader::create($list['header']);
            foreach ($list['body'] as $body) {
                $header->body()->create($body);
            }
        }
    }
}
