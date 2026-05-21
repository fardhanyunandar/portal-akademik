<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    public function run(): void
    {
        Department::create([
            'code'        => 'PPL',
            'name'        => 'Pengembangan Perangkat Lunak',
            'description' => 'Jurusan yang berfokus pada pengembangan perangkat lunak dan aplikasi.',
            'status'      => 'active',
        ]);

        Department::create([
            'code'        => 'DM',
            'name'        => 'Digital Marketing',
            'description' => 'Jurusan yang berfokus pada pemasaran digital dan media sosial.',
            'status'      => 'active',
        ]);
    }
}