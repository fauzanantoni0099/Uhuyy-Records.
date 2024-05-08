<?php

use Illuminate\Database\Seeder;
use App\Artist;
use App\Album;
use App\Testimonial;
use App\Song;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Artist::class, 20)->create();
        factory(Album::class, 20)->create();
        factory(Testimonial::class, 20)->create();
        factory(Song::class, 20)->create();
//        factory(User::class, 1)->create();

//        $albums = factory(Album::class, 10)->create();
////        $albums->each(function ($album) {
////            $album->images()->save(factory(Image::class)->make());
////        });

//        User::factory(User::class, 1)->create([
//            'name' => 'Ahmad Fauzan Antoni',
//            'email' => 'fauzanantoniahmad@gmail.com',
//            'password' => bcrypt('Antonifauzan99'),
//        ]);

    }
}
