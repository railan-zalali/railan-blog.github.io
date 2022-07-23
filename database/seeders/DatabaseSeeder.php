<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		// User::factory(5)->create();

		// User::create([
		// 	'name' => 'Railan Abdul Zalali',
		// 	'email' => 'railanzalali56@gmail.com',
		// 	'password' => bcrypt('12345')
		// ]);
		// User::create([
		// 	'name' => 'Maman',
		// 	'email' => 'maman56@gmail.com',
		// 	'password' => bcrypt('12345')
		// ]);

		User::factory(3)->create();


		Category::create([
			'name' => 'Web Programming',
			'slug' => 'web-programming'
		]);
		Category::create([
			'name' => 'Web Design',
			'slug' => 'web-design'
		]);
		Category::create([
			'name' => 'Personal',
			'slug' => 'personal'
		]);

		Post::factory(20)->create();
		// Post::create([
		// 	'title' => 'Judul Pertama',
		// 	'slug' => 'judul-pertama',
		// 	'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat ea tenetur facere asperiores officiis dolore, iure cupiditate possimus magnam, deserunt harum ipsa cumque aperiam fugiat nulla quasi adipisci, aspernatur error doloremque.',
		// 	'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat ea tenetur facere asperiores officiis dolore, iure cupiditate possimus magnam, deserunt harum ipsa cumque aperiam fugiat nulla quasi adipisci, aspernatur error doloremque. Cupiditate inventore, distinctio porro nulla consequatur culpa delectus, consectetur soluta eaque adipisci recusandae a ratione! Nisi dicta ducimus provident dolorem adipisci aperiam beatae atque, modi, vitae quod numquam molestiae perspiciatis possimus temporibus corporis vel eum fugiat quo. Veniam labore saepe aliquid nesciunt suscipit possimus natus ipsam vitae cumque dolor sequi numquam, unde corrupti ex. Dicta magnam, earum, omnis nihil sed quis labore sequi repellat, autem repellendus vero repudiandae optio!.',
		// 	'category_id' => 1,
		// 	'user_id' => 1
		// ]);
		// Post::create([
		// 	'title' => 'Judul Ke Dua',
		// 	'slug' => 'judul-ke-dua',
		// 	'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat ea tenetur facere asperiores officiis dolore, iure cupiditate possimus magnam, deserunt harum ipsa cumque aperiam fugiat nulla quasi adipisci, aspernatur error doloremque.',
		// 	'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat ea tenetur facere asperiores officiis dolore, iure cupiditate possimus magnam, deserunt harum ipsa cumque aperiam fugiat nulla quasi adipisci, aspernatur error doloremque. Cupiditate inventore, distinctio porro nulla consequatur culpa delectus, consectetur soluta eaque adipisci recusandae a ratione! Nisi dicta ducimus provident dolorem adipisci aperiam beatae atque, modi, vitae quod numquam molestiae perspiciatis possimus temporibus corporis vel eum fugiat quo. Veniam labore saepe aliquid nesciunt suscipit possimus natus ipsam vitae cumque dolor sequi numquam, unde corrupti ex. Dicta magnam, earum, omnis nihil sed quis labore sequi repellat, autem repellendus vero repudiandae optio!.',
		// 	'category_id' => 1,
		// 	'user_id' => 1
		// ]);
		// Post::create([
		// 	'title' => 'Judul Ke Tiga',
		// 	'slug' => 'judul-ke-tiga',
		// 	'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat ea tenetur facere asperiores officiis dolore, iure cupiditate possimus magnam, deserunt harum ipsa cumque aperiam fugiat nulla quasi adipisci, aspernatur error doloremque.',
		// 	'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat ea tenetur facere asperiores officiis dolore, iure cupiditate possimus magnam, deserunt harum ipsa cumque aperiam fugiat nulla quasi adipisci, aspernatur error doloremque. Cupiditate inventore, distinctio porro nulla consequatur culpa delectus, consectetur soluta eaque adipisci recusandae a ratione! Nisi dicta ducimus provident dolorem adipisci aperiam beatae atque, modi, vitae quod numquam molestiae perspiciatis possimus temporibus corporis vel eum fugiat quo. Veniam labore saepe aliquid nesciunt suscipit possimus natus ipsam vitae cumque dolor sequi numquam, unde corrupti ex. Dicta magnam, earum, omnis nihil sed quis labore sequi repellat, autem repellendus vero repudiandae optio!.',
		// 	'category_id' => 2,
		// 	'user_id' => 2
		// ]);
		// Post::create([
		// 	'title' => 'Judul Ke Empat',
		// 	'slug' => 'judul-ke-empat',
		// 	'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat ea tenetur facere asperiores officiis dolore, iure cupiditate possimus magnam, deserunt harum ipsa cumque aperiam fugiat nulla quasi adipisci, aspernatur error doloremque.',
		// 	'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat ea tenetur facere asperiores officiis dolore, iure cupiditate possimus magnam, deserunt harum ipsa cumque aperiam fugiat nulla quasi adipisci, aspernatur error doloremque. Cupiditate inventore, distinctio porro nulla consequatur culpa delectus, consectetur soluta eaque adipisci recusandae a ratione! Nisi dicta ducimus provident dolorem adipisci aperiam beatae atque, modi, vitae quod numquam molestiae perspiciatis possimus temporibus corporis vel eum fugiat quo. Veniam labore saepe aliquid nesciunt suscipit possimus natus ipsam vitae cumque dolor sequi numquam, unde corrupti ex. Dicta magnam, earum, omnis nihil sed quis labore sequi repellat, autem repellendus vero repudiandae optio!.',
		// 	'category_id' => 2,
		// 	'user_id' => 2
		// ]);

	}
}
