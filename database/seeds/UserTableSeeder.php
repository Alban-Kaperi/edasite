<?php
use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $writer = new User();
        $writer->name = 'writer';
        $writer->email = 'writer@gmail.com';
        $writer->password = bcrypt('writer');
        $writer->save();
        $writer->assignRole('writer');


        $moderator = new User();
        $moderator->name = 'moderator';
        $moderator->email = 'moderator@gmail.com';
        $moderator->password = bcrypt('moderator');
        $moderator->save();
        $moderator->assignRole('moderator');

        $superadmin = new User();
        $superadmin->name = 'super-admin';
        $superadmin->email = 'super-admin@gmail.com';
        $superadmin->password = bcrypt('superadmin');
        $superadmin->save();
        $superadmin->assignRole('super-admin');
    }
}

