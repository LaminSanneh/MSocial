<?php

use Illuminate\Database\Seeder;
use \Faker\Factory as Faker;
use App\Entities\User;

class SeedUsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('users')->truncate();

        $users = [];
        for ($i=0; $i < 100; $i++) {
          $username = $faker->userName;
          $users[] = [
              'username' => $username,
              'first_name' => $faker->firstName,
              'last_name' => $faker->lastName,
              'username' => $username,
              'email' => $faker->email,
              'avatar' => $faker->imageUrl(640, 480, 'people', true),
              'password' => bcrypt($username)
          ];
        }

        User::insert($users);
    }
}
