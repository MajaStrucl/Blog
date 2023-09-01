<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

//        User::truncate();
//        Category::truncate();
//        Post::truncate();

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        $users = User::factory(2)->create();

        Post::factory(10)->create([
            'user_id' => $user->id
        ]);

        Post::factory(15)->create([
            'user_id' => $users[1]->id
        ]);

        Post::factory(10)->create(['category_id' => 1]);

        Comment::factory(10)->create(['post_id' => 31]);


//        $user = User::factory()->create();

//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//        $hobbies = Category::create([
//            'name' => 'Hobbies',
//            'slug' => 'hobbies'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $personal->id,
//            'title' => 'My Family Post',
//            'slug' => 'my-family-post',
//            'excerpt' => 'Lorem ipsum dolor sit amet.',
//            'body' => '<p>Lorem ipsum dolor sit amet. Et nemo excepturi eum voluptas labore et inventore tenetur et nostrum fugiat. Et sint praesentium aut eveniet dolores qui omnis deserunt qui ullam consectetur aut labore quaerat non nobis dignissimos. Quo reprehenderit asperiores ut voluptas omnis ea maiores rerum qui voluptatum accusantium? 33 porro magnam quo dolore dolores sit iusto reiciendis et officiis quia hic voluptatem totam id tempore quas.
//                        Et voluptates deleniti a nisi obcaecati eos nihil autem eos voluptatibus dolores id nihil repudiandae ex repellat inventore. Non quia placeat est consequatur natus qui ducimus quidem At suscipit enim qui reiciendis voluptatem.
//                        Ea quibusdam quae est quod earum est nesciunt magni in commodi illo aut dignissimos exercitationem aut quis repudiandae ut nostrum error. Non adipisci natus sit nulla eaque et doloremque error aut saepe corrupti non earum facilis. Et voluptate consequatur aut dolorem sint sit quaerat alias. Aut blanditiis quam ut voluptatem nihil quo blanditiis dolores.</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My Work Post',
//            'slug' => 'my-work-post',
//            'excerpt' => 'Lorem ipsum dolor sit amet.',
//            'body' => '<p>Lorem ipsum dolor sit amet. Et nemo excepturi eum voluptas labore et inventore tenetur et nostrum fugiat. Et sint praesentium aut eveniet dolores qui omnis deserunt qui ullam consectetur aut labore quaerat non nobis dignissimos. Quo reprehenderit asperiores ut voluptas omnis ea maiores rerum qui voluptatum accusantium? 33 porro magnam quo dolore dolores sit iusto reiciendis et officiis quia hic voluptatem totam id tempore quas.
//                        Et voluptates deleniti a nisi obcaecati eos nihil autem eos voluptatibus dolores id nihil repudiandae ex repellat inventore. Non quia placeat est consequatur natus qui ducimus quidem At suscipit enim qui reiciendis voluptatem.
//                        Ea quibusdam quae est quod earum est nesciunt magni in commodi illo aut dignissimos exercitationem aut quis repudiandae ut nostrum error. Non adipisci natus sit nulla eaque et doloremque error aut saepe corrupti non earum facilis. Et voluptate consequatur aut dolorem sint sit quaerat alias. Aut blanditiis quam ut voluptatem nihil quo blanditiis dolores.</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $hobbies->id,
//            'title' => 'My Hobby Post',
//            'slug' => 'my-hobby-post',
//            'excerpt' => 'Lorem ipsum dolor sit amet.',
//            'body' => '<p>Lorem ipsum dolor sit amet. Et nemo excepturi eum voluptas labore et inventore tenetur et nostrum fugiat. Et sint praesentium aut eveniet dolores qui omnis deserunt qui ullam consectetur aut labore quaerat non nobis dignissimos. Quo reprehenderit asperiores ut voluptas omnis ea maiores rerum qui voluptatum accusantium? 33 porro magnam quo dolore dolores sit iusto reiciendis et officiis quia hic voluptatem totam id tempore quas.
//                        Et voluptates deleniti a nisi obcaecati eos nihil autem eos voluptatibus dolores id nihil repudiandae ex repellat inventore. Non quia placeat est consequatur natus qui ducimus quidem At suscipit enim qui reiciendis voluptatem.
//                        Ea quibusdam quae est quod earum est nesciunt magni in commodi illo aut dignissimos exercitationem aut quis repudiandae ut nostrum error. Non adipisci natus sit nulla eaque et doloremque error aut saepe corrupti non earum facilis. Et voluptate consequatur aut dolorem sint sit quaerat alias. Aut blanditiis quam ut voluptatem nihil quo blanditiis dolores.</p>'
//        ]);
    }
}
