<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name'        => '商业',
                'description' => '商业新闻资讯',
                'slug'        => 'business',
            ],
            [
                'name'        => '娱乐',
                'description' => '娱乐圈新闻资讯',
                'slug'        => 'entertainment',
            ],
            [
                'name'        => '体育',
                'description' => '体育新闻资讯',
                'slug'        => 'sports',
            ],
            [
                'name'        => '电竞',
                'description' => '电竞游戏赛事新闻资讯',
                'slug'        => 'games',
            ],
            [
                'name'        => '技术',
                'description' => '开发技巧、推荐扩展包等',
                'slug'        => 'technology',
            ],
        ];

        DB::table('categories')->insert($categories);
    }
}
