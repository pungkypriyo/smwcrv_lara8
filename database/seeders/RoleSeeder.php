<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat data untuk role manager.
        $vRole = [
            [
                'role_name' => 'SysAdmin',
                'role_description' => 'Superdooper Administrator',
            ],
            [
                'role_name' => 'Supervisor',
                'role_description' => 'Rule untuk pengoperasian manupulasi data penuh.',
            ],
            [
                'role_name' => 'Operator',
                'role_description' => 'Rule untuk pengoperasian meliputi entry data tanpa menghapus.',
            ],
            [
                'role_name' => 'Basic',
                'role_description' => 'Rule untuk pengguna yang merupakan member.',
            ],
        ];

        foreach ($vRole as $cKey => $cVal) {
            Role::create($cVal);
        }
    }
}
