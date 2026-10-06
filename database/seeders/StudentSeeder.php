<?php
// CLEZIEL T. BARUEL

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'student_number' => '2026-0001',
                'first_name' => 'Juan',
                'last_name' => 'Dela Cruz',
                'program' => 'BS Information Technology',
                'year_level' => 1,
                'email' => 'juan.delacruz@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_number' => '2026-0002',
                'first_name' => 'Maria',
                'last_name' => 'Santos',
                'program' => 'BS Computer Science',
                'year_level' => 2,
                'email' => 'maria.santos@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_number' => '2026-0003',
                'first_name' => 'Carlos',
                'last_name' => 'Reyes',
                'program' => 'BS Information Systems',
                'year_level' => 3,
                'email' => 'carlos.reyes@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_number' => '2026-0004',
                'first_name' => 'Ana',
                'last_name' => 'Garcia',
                'program' => 'BS Information Technology',
                'year_level' => 4,
                'email' => 'ana.garcia@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_number' => '2026-0005',
                'first_name' => 'Mark',
                'last_name' => 'Torres',
                'program' => 'BS Business Administration',
                'year_level' => 1,
                'email' => 'mark.torres@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_number' => '2026-0006',
                'first_name' => 'Sofia',
                'last_name' => 'Ramos',
                'program' => 'BS Accountancy',
                'year_level' => 2,
                'email' => 'sofia.ramos@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_number' => '2026-0007',
                'first_name' => 'Daniel',
                'last_name' => 'Mendoza',
                'program' => 'BS Computer Science',
                'year_level' => 3,
                'email' => 'daniel.mendoza@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_number' => '2026-0008',
                'first_name' => 'Angela',
                'last_name' => 'Flores',
                'program' => 'BS Psychology',
                'year_level' => 4,
                'email' => 'angela.flores@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_number' => '2026-0009',
                'first_name' => 'Kevin',
                'last_name' => 'Navarro',
                'program' => 'BS Information Systems',
                'year_level' => 2,
                'email' => 'kevin.navarro@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'student_number' => '2026-0010',
                'first_name' => 'Liza',
                'last_name' => 'Villanueva',
                'program' => 'BS Education',
                'year_level' => 3,
                'email' => 'liza.villanueva@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}