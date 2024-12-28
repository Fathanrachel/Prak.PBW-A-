<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'M Rachel Fathan I',
            'email' => 'racheltambunan10@gmail.com',
            'password' => bcrypt('user1234'),
            'email_verified_at' => now()
        ]);

        User::factory(10)->create();
        
        collect([
            ['name' => 'admin'],
            ['name' => 'partner'],
        ])->each(fn($role) => Role::create($role));

        $user = User::find(2);

        $user->assignRole(Role::find(1));
        $user->assignRole(Role::find(2));
    }
}
