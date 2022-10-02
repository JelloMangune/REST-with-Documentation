<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'title' => 'Luffy Hoodie',
            'description' => 'ONE PIECE Luffy Hoodie 3D Jacket: Post Timeskip',
            'currency' => 'PHP',
            'price' => 389.50,
            'brand' => 'Uniqlo',
            'category' => 'clothing',
            'image' => 'https://lzd-img-global.slatic.net/g/shop/9ebaa38f100e6dd8085490a15aa69b59.jpeg_2200x2200q80.jpg_.webp'
        ]);

        DB::table('products')->insert([
            'title' => 'One Piece Manga',
            'description' => 'One Piece, Vol. 99 (Paperback)',
            'currency' => 'PHP',
            'price' => 549.00,
            'brand' => 'Fully Booked',
            'category' => 'book',
            'image' => 'https://kbimages1-a.akamaihd.net/1d978cea-9b4e-4aba-aca5-f091c48b8915/1200/1200/False/one-piece-vol-99.jpg'
        ]);

        DB::table('products')->insert([
            'title' => 'Luffy Figurine',
            'description' => 'One Piece Action Figure Luffy Model: 16-33cm Anime Action Figures',
            'currency' => 'PHP',
            'price' => 1299.99,
            'brand' => 'Banpresto',
            'category' => 'toy',
            'image' => 'https://lzd-img-global.slatic.net/g/p/9cbf7539cdc75a4a71f1de1dff1b1f01.jpg_2200x2200q80.jpg_.webp'
        ]);

        DB::table('products')->insert([
            'title' => 'Zoro Sword',
            'description' => 'Roronoa Zoro Wooden Sword Samurai (140cm)',
            'currency' => 'PHP',
            'price' => 579.00,
            'brand' => 'Hickory',
            'category' => 'accessory',
            'image' => 'https://lzd-img-global.slatic.net/g/p/dad7315bb26c997743af65649b09deab.jpg_2200x2200q80.jpg_.webp'
        ]);

        DB::table('products')->insert([
            'title' => 'Luffy Straw Hat',
            'description' => 'Luffy Straw Hat Multifunctional Anime Cartoon Character Cosplay Sun Hat for Adults',
            'currency' => 'PHP',
            'price' => 304.00,
            'brand' => 'OEM',
            'category' => 'costume',
            'image' => 'https://lzd-img-global.slatic.net/g/p/fe538a1ccc68fdad1fe4790a7a38de09.jpg_2200x2200q80.jpg_.webp'
        ]);

    }
}
