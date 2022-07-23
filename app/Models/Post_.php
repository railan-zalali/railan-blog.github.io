<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
            [
                "title" => "Judul Post Pertama",
                "slug" => "judul-post-pertama",
                "author"=> "Railan",
                "body"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, eum ad sed quis et vitae cupiditate voluptas blanditiis! Facere culpa totam voluptate aliquid ducimus architecto tenetur blanditiis? Adipisci optio nemo provident architecto, doloremque nesciunt omnis repellat quidem dignissimos iusto minima consequatur velit libero similique id impedit veniam dolores cupiditate magnam facilis vel cum facere? Voluptatem totam fugiat maiores ea, hic veritatis velit eveniet repudiandae ipsum, quis fugit excepturi vitae repellat reiciendis perspiciatis quidem praesentium exercitationem atque! Repellat consequatur tempore ea."
            ],
            [
                "title" => "Judul Post Kedua",
                "slug" => "judul-post-kedua",
                "author"=> "Abdul",
                "body"  => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora magnam beatae veniam impedit suscipit similique distinctio voluptas commodi ad blanditiis. Amet officiis fugiat sint alias earum ullam, eius at labore ex optio odit maxime cum? Natus magnam ducimus laboriosam alias quia ipsum quidem sapiente labore quas, qui, provident odio, autem dignissimos! Eos sint harum, ab libero inventore voluptatibus nostrum magni ea repellat, itaque reiciendis vero. Dolorum ipsa pariatur distinctio repellendus reiciendis, doloremque ut? Quas soluta, expedita corporis officiis placeat ipsa blanditiis cumque! Necessitatibus maiores sunt voluptas quaerat. Officiis perferendis asperiores dicta natus voluptatum quasi accusamus atque ab? Et ipsum sed voluptate. Facere atque provident vitae modi, ex ratione enim obcaecati voluptatibus! Eum tenetur odio amet tempore consequatur veniam sint officiis in repellat ipsam quibusdam, ea minus debitis quisquam voluptatum libero placeat error fugit repudiandae exercitationem fugiat iure. Deserunt excepturi eum, quae libero voluptates nam at, eius deleniti, delectus explicabo doloribus corporis! Odit molestias possimus, fugiat ut dolorum iste, quae reprehenderit cum quibusdam tempore assumenda ipsum nulla porro. Recusandae, velit eligendi tempore molestias voluptatibus maxime illo maiores atque mollitia suscipit reprehenderit. Aut quisquam suscipit quo velit recusandae incidunt, autem unde libero tenetur. Nam ad excepturi obcaecati nostrum facilis dignissimos repellat atque!"
            ],
        ];

        public static function all(){
            return collect(self::$blog_posts);
        }

        public static function find($slug){
            $posts = static::all();
            // $post = [];
            // foreach($posts as $p){
            //     if($p["slug"]===$slug){
            //         $post = $p;
            //     }
            // }
            return $posts->firstWhere('slug', $slug);
        }
}
