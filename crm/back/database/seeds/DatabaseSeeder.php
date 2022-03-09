<?php

use App\User;
use App\Product;
use App\Category;
use App\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Transaction::truncate();
        User::truncate();
        Product::truncate();
        Category::truncate();
        DB::table('category_product')->truncate();

        $cuantosUsuarios = 1000;
        $cuantasCategorias = 30;
        $cuantosProductos = 1000;
        $cuantasTransacciones = 1000;

        Transaction::flushEventListeners();
        User::flushEventListeners();
        Product::flushEventListeners();
        Category::flushEventListeners();

        factory(User::class, $cuantosUsuarios)->create();
        factory(Category::class, $cuantasCategorias)->create();

        factory(Product::class, $cuantosProductos)->create()->each(
            function($prod){
                $categorias = Category::all()->random(mt_rand(1,3))->pluck('id');
                $prod->categories()->attach($categorias);
            }
        );

        factory(Transaction::class, $cuantasTransacciones)->create();
    }
}
