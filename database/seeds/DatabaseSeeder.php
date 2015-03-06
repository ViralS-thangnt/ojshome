<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
//use DB;
use App\User;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');
    }
}

class UserTableSeeder extends Seeder
{
    public function run()
    {
        //clear database
        //DB::table('users')->delete();

        User::create([
                'username'          =>  'admin',
                'password'          =>  sha1('admin1234'),
                'email'             =>  'quandt@naida.bz',
                'per_no'            =>  implode(',', Constant::actor(ADMIN)),
              ]);
    }
}
