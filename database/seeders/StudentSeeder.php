<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'ncin' => '12234567',
            'name' => 'Sahli Amani',
            'email' => 'sahli@amani@gmail.com',
            'phone' => '57667668',
            'address' => 'Adresse de Amani',
        ]);

        Student::create([
            'ncin' => Str::random(8),
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'phone' => Str::random(10),
            'address' => Str::random(10),
        ]);
    }
}
