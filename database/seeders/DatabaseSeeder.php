<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Categories;
use App\Models\Orders;
use App\Models\Product;
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
        Categories::factory(100)->create();
        Product::factory(1000)->create();
        Orders::factory(50)-create();
       for( $i=1; $i<=50;$i++){
        $random = random_int(1,10);
        $products = Product::all()->random($random);
        $grand_total = 0;
        foreach ($products as $p){
            $qty = random_int(1,10);
            $grand_total+= $qty*$p->price;
            DB::table("order_products")->insert([
               "order_id"=>$i,
                "product_id"=>$p->id,
                "qty"=>$qty,
                "price"=>$p->price
            ]);
        }
       }
        Student::factory(20)->create();
    }

}
