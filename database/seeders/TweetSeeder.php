<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tweets')->insert([
            'name'=> 'Roberto Sasso',
            'handle'=> '@robsax96',
            'image'=> 'https://media.licdn.com/dms/image/D4D03AQECk0Layd6ttA/profile-displayphoto-shrink_800_800/0/1697020693639?e=1705536000&v=beta&t=E1TI4t6irvyijgpg77La83N0sds8KcpZprhUjAX0jC8',
            'tweet'=> 'Quanto è bello programmare',
            'file'=> '/videos/prova.mp4',
            'is_video'=> true,
            'comments'=> '37',
            'retweets'=> '54',
            'likes'=> '96',
            'analytics'=> '93',
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
        ]);
        DB::table('tweets')->insert([
            'name' => 'Andre Carpenter',
            'handle' => '@andrecarpenter',
            'image' => '/pics/io1.jpeg',
            'tweet' => "Do you wanna learn Javascript? I'm gonna make a Udemy tutorial to show you all how easy it is.",
            'file' => '/pics/Code.png',
            'is_video' => false,
            'comments' => '83',
            'retweets' => '59',
            'likes' => '62',
            'analytics' => '66',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('tweets')->insert([
            'name' => 'Avis Glover',
            'image' => '/pics/io2.jpeg',
            'handle' => '@avisglover',
            'tweet' => "I've never seen ANYONE play guitar as good as this!!! Many guitarists neglect the theory side of things because it's perceived as boring, pretentious, or even just a complete f*ing mystery. It's true that some musicians, especially those with natural abilities like perfect pitch or an especially good ear, can excel without much background theory. But do not underestimate the power of this knowledge in developing you as a musician",
            'file' => '/pics/PlayGuitar.png',
            'is_video' => false,
            'comments' => '94',
            'retweets' => '29',
            'likes' => '33',
            'analytics' => '89',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
