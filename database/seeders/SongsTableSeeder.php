<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('songs')->insert([
            ['title' => 'Nothing else matters', 'singer' => 'Metallica'],
            ['title' => 'Thunderstruck', 'singer' => 'AC/DC'],
            ['title' => 'Living on a prayer', 'singer' => 'Bon Jovi'],
            ['title' => 'Back in black', 'singer' => 'AC/DC'],
            ['title' => 'Ace of spades', 'singer' => 'Motorhead'],

        ]);
    }

}
