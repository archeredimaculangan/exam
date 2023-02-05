<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class AddRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = Role::create([
                'name'  => 'Manager',
                'code'  =>  'manager'
        ]);

        $developer = Role::create([
            'name'  => 'Web Developer',
            'code'  =>  'developer'
        ]);

        $designer = Role::create([
            'name'  => 'Web Designer',
            'code'  =>  'designer'
        ]);
    }
}
