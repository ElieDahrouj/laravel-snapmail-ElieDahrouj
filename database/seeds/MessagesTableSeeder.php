<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Message;
class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 10; $i++) {
            $message = new Message();
            $message->message = $faker->paragraph(1);
            $message->photo_url= "default.jpg";
            $message->code = sha1(\Illuminate\Support\Str::random(30));
            $message->save();
        }
    }
}
