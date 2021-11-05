<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'oppo Mobile',
                'price'=>'20000',
                'description'=>'A smartphone with 4gb ram and much more feature',
                'category'=>'mobile',
                'gallery'=>'https://images.unsplash.com/photo-1523206489230-c012c64b2b48?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80'
            ],
            [
                'name'=>'samsung Tv',
                'price'=>'15000',
                'description'=>'A smartphone with good and much more feature',
                'category'=>'mobile',
                'gallery'=>'https://images.unsplash.com/photo-1593305841991-05c297ba4575?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=757&q=80'
            ],
            [
                'name'=>'LG Mobile',
                'price'=>'30000',
                'description'=>'A smartphone with 4gb ram and much more feature',
                'category'=>'mobile',
                'gallery'=>'https://images.unsplash.com/photo-1580910051074-3eb694886505?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=465&q=80'
            ]
            ]);
    }
}
