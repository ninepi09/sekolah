<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create([
            'name' => 'superadmin',
        ]);

        Role::create([
            'name' => 'admin',
        ]);

        Role::create([
            'name' => 'siswa',
        ]);
        
        Role::create([
            'name' => 'guru',
        ]);
    }
}
