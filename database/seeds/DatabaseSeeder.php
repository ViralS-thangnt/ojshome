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
        DB::table('users')->delete();

        //Administrator
        User::create([
                'username'          =>  'admin',
                'password'          =>  sha1('12345678'),
                'email'             =>  'quandt@naida.bz',
                'actor_no'          =>  ADMIN,
              ]);

        //Author
        User::create([
                'username'          =>  'author_demo',
                'password'          =>  sha1('12345678'),
                'email'             =>  'author_demo@naida.bz',
                'actor_no'          =>  AUTHOR,
              ]);

        //Managing Editor
        User::create([
                'username'          =>  'managing_editor',
                'password'          =>  sha1('12345678'),
                'email'             =>  'managing_editor@naida.bz',
                'actor_no'          =>  MANAGING_EDITOR,
              ]);

        //Screening Editor
        User::create([
                'username'          =>  'screening_editor',
                'password'          =>  sha1('12345678'),
                'email'             =>  'screening_editor@naida.bz',
                'actor_no'          =>  SCREENING_EDITOR,
              ]);

        //Section Editor
        User::create([
                'username'          =>  'section_editor',
                'password'          =>  sha1('12345678'),
                'email'             =>  'section_editor@naida.bz',
                'actor_no'          =>  SECTION_EDITOR,
              ]);

        //Reviewer
        User::create([
                'username'          =>  'reviewer',
                'password'          =>  sha1('12345678'),
                'email'             =>  'reviewer@naida.bz',
                'actor_no'          =>  REVIEWER,
              ]);

      //Chief Editor
      User::create([
              'username'          =>  'chief_editor',
              'password'          =>  sha1('12345678'),
              'email'             =>  'chief@naida.bz',
              'actor_no'          =>  CHIEF_EDITOR,
            ]);

      //Copy Editor
      User::create([
              'username'          =>  'copy_editor',
              'password'          =>  sha1('12345678'),
              'email'             =>  'copy_editor@naida.bz',
              'actor_no'          =>  COPY_EDITOR,
            ]);

      //Layout Editor
      User::create([
              'username'          =>  'layout_editor',
              'password'          =>  sha1('12345678'),
              'email'             =>  'layout_editor@naida.bz',
              'actor_no'          =>  LAYOUT_EDITOR,
            ]);

      //Production Editor
      User::create([
              'username'          =>  'production_editor',
              'password'          =>  sha1('12345678'),
              'email'             =>  'production_editor@naida.bz',
              'actor_no'          =>  PRODUCTION_EDITOR,
            ]);
    }
}
