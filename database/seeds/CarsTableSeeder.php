<?php

use App\Cars;
use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('cars')->insert([
            'make' => Str::random(10),
            'model' => Str::random(10),
            'year' => Str::random(4),
        ]); */
       factory(App\Cars::class, 50)->create()->each(function ($cars) {
            // $user->posts()->save(factory(App\Post::class)->make());
       });
    }
}
