<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $student =  [
                        [
                            'name' => 'name1',
                            'email' => 'email1@gmail.com',
                            'password' => '123456',
                            'discription' => 'discription',
                        ],
                        [
                            'name' => 'name2',
                            'email' => 'email2@gmail.com',
                            'password' => '123456',
                            'discription' => 'discription',
                        ],
                        [
                            'name' => 'name3',
                            'email' => 'email3@gmail.com',
                            'password' => '123456',
                            'discription' => 'discription',
                        ],
                        [
                            'name' => 'name4',
                            'email' => 'email3@gmail.com',
                            'password' => '123456',
                            'discription' => 'discription',
                        ],
                        [
                            'name' => 'name5',
                            'email' => 'email5@gmail.com',
                            'password' => '123456',
                            'discription' => 'discription',
                        ]
                    ];


        foreach ($student as $key => $value) {
            
            $student = Student::where('name', $value['name'])->first();
           
            if (empty($student)) {
                Student::create($value);
            }
        }

    }
}