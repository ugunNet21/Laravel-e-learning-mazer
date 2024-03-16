<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    public function run(): void
    {
        $role = [
            [
                'name'          => 'Admin',
                'guard_name'    => 'web'

            ],
            [
                'name'          => 'Super Admin',
                'guard_name'    => 'web'
            ],
            [
                'name'          => 'Guru',
                'guard_name'    => 'web'
            ],
            [
                'name'          => 'Staf',
                'guard_name'    => 'web'
            ],
            [
                'name'          => 'Murid',
                'guard_name'    => 'web'
            ],
            [
                'name'          => 'Orang Tua',
                'guard_name'    => 'web'
            ],
            [
                'name'          => 'Kepala Sekolah',
                'guard_name'    => 'web'
            ],
            [
                'name'          => 'Guest',
                'guard_name'    => 'web'
            ],

        ];

        foreach ($role as $value) {
            $existingRole = Role::where('name', $value['name'])->where('guard_name', $value['guard_name'])->first();

            if (!$existingRole) {
                Role::create($value);
                $this->command->info('Data Role '.$value['name'].' has been saved.');
            } else {
                $this->command->info('Role '.$value['name'].' already exists with ID: '.$existingRole->id);
            }
        }
    }
}
