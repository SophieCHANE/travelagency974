<?php

use Illuminate\Database\Seeder;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = App\User::create([
            'name' => 'Admin',
            'first_name' => 'Admin',
            'email' => 'admin@test.re',
            'password' => bcrypt('123456')
        ]);
        
        
        $admin->assignRole('admin');
        
    }
}
