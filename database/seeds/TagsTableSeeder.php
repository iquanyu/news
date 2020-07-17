<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            [
                'name'        => '比特币',
                'slug'        => 'bitcoin',
            ],
            [
                'name'        => '李沁',
                'slug'        => 'liqin',
            ],
            [
                'name'        => 'PHP',
                'slug'        => 'php',
            ],
            [
                'name'        => 'uzi',
                'slug'        => 'uzi',
            ],
            [
                'name'        => '地下城',
                'slug'        => 'dnf',
            ],
            [
                'name'        => '英雄联盟',
                'slug'        => 'lol',
            ],
        ];

        DB::table('tags')->insert($tags);
    }
}
