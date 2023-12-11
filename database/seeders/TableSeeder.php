<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Table;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Table::factory(10)->create();


        // Create specific records with custom attributes
        Table::create([
            'name' => 'John Doe',
            'course' => 'Mathematics',
            'grade' => 'A',
        ]);

        Table::create([
            'name' => 'Jane Smith',
            'course' => 'Science',
            'grade' => 'B+',
        ]);


        // $data = [
        //     [
        //         'name' => 'John Doe',
        //         'course' => 'Mathematics',
        //         'grade' => 'A',
        //     ],
        //     [
        //         'name' => 'Jane Smith',
        //         'course' => 'Science',
        //         'grade' => 'B+',
        //     ],
        //     // Add more data entries as needed
        // ];
        // foreach ($data as $entry) {
        //     DB::table('Table')->insert($entry);
        // }
    }
}
