<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          $user =  [
                        [
                            'name' => 'admin',
                            'email' => 'admin@gmail.com',
                            'password' =>  Hash::make('123456'),
                        ]
                    ];


        foreach ($user as $key => $value) {
            
            $user = User::where('name', $value['name'])->first();
           
            if (empty($user)) {
                User::create($value);
            }
        }
    }
}
