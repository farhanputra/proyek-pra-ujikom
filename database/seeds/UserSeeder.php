<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat role admin
        $adminRole = newRole();
        $adminRole->name="admin";
        $adminRole->display_name="Admin";
        $adminRole->save();
        
        //membuat role member
        $memberRole = newRole();
        $memberRole->name="member";
        $memberRole->display_name="Member";
        $memberRole->save();

        //membuat sample admin
        $admin = newUser();
        $admin->name='Admin';
        $admin->email='admin@gmail.com';
        $admin->password=bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        //membuat semple member
        $member = newUser();
        $member->name="Sample Member";
        $member->email='member@gmail.com';
        $member->password=bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($memberRole);
    }
}
