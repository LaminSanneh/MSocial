<?php

use Illuminate\Database\Seeder;
use \Faker\Factory as Faker;
use App\Entities\Status;
use App\Entities\User;

class SeedStatusesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('statuses')->truncate();

        $statusses = [];
        $userIds = User::all('id')->toArray();

        for ($i=0; $i < 100; $i++) {

            $content = $faker->realText;
            $content .= $faker->imageUrl();

          $statusses[] = [
              'content' => $content,
              'owner_id' => $userIds[array_rand($userIds)]['id']
          ];
        }

        Status::insert($statusses);
    }
}
