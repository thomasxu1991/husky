<?php

use Illuminate\Database\Seeder;
use App\Config;

class ConfigTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('configs')->delete();
        Config::create([
            'k'=>'menuList',
            'v'=>json_encode([
                [
                    'name'=>'主页',
                    'url'=>'\/',
                    'child'=>[
                    ]
                ],
                [
                    'name'=>'技术相关',
                    'url'=>'\/tec',
                    'child'=>[
                        [
                            'name'=>'PHP',
                            'url'=>'PHP',
                            'child'=>[]
                        ],
                        [
                            'name'=>'Python',
                            'url'=>'Python',
                            'child'=>[]
                        ]
                    ]
                ]
            ],JSON_UNESCAPED_UNICODE)
        ]);
	}

}
