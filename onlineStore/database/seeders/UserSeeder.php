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
        //Usuario admin
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@onlinestore.com',
            'password' => Hash::make('admin')
        ]);

        //Asginar rol a admin
        $admin->assignRole('admin');


        //Usuario Editor
        $editor = User::create([
            'name' => 'editor',
            'email' => 'editor@onlinestore.com',
            'password' => Hash::make('editor')
        ]);

        $editor->assignRole('editor');

    }
}
