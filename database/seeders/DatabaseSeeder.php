<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
        \DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 0,
            'phone' => '',
            'address' =>'',
            'password' => bcrypt('admin'),
            'created_at' => Carbon::now()
        ]);
        \DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'role' => 2,
            'phone' => '',
            'address' =>'',
            'password' => bcrypt('user'),
            'created_at' => Carbon::now()
        ]);
        \DB::table('users')->insert([
            'name' => 'employee',
            'email' => 'employee@gmail.com',
            'role' => 1,
            'phone' => '',
            'address' =>'',
            'password' => bcrypt('user'),
            'created_at' => Carbon::now()
        ]);

        \DB::table('category')->insert([
            'category'=> 'quần'
        ]);
        \DB::table('category')->insert([
            'category' =>'áo'
        ]);

        \DB::table('supplier')->insert([
            'supplier'=>'A',
            'phone'=>0,
            'address'=>''
        ]);
        \DB::table('supplier')->insert([
            'supplier'=>'B',
            'phone'=>0,
            'address'=>''
        ]);

        \DB::table('product')->insert([
            'name'=> "alsdf",
            'quantity' => 1,
            'category_id'=> 1,
            'supplier_id' => 1,
            'in_price' => 12000,
            'out_price'=>13000,
            'note'=> ''
        ]);
        \DB::table('product')->insert([
            'name'=> "aldfsdfdsfsdf",
            'quantity' => 2,
            'category_id'=> 1,
            'supplier_id' => 2,
            'in_price' => 12000,
            'out_price'=>13000,
            'note'=> ''
        ]);

        \DB::table('bill')->insert([
            'user_id'=> 2,
            'total' => 1000000,
            'created_at' => Carbon::now()
        ]);

        \DB::table('detail_bill')->insert([
            'bill_id'=> 1,
            'product_id' => 1,
            'quantity' => 5,
            'price' => 10000,
            'total' => 50000
        ]);
        \DB::table('detail_bill')->insert([
            'bill_id'=> 1,
            'product_id' => 2,
            'quantity' => 7,
            'price' => 1000,
            'total' => 5000
        ]);

        \DB::table('bill')->insert([
            'user_id'=> 2,
            'total' => 1000000,
            'created_at' => Carbon::now()
        ]);

        \DB::table('detail_bill')->insert([
            'bill_id'=> 2,
            'product_id' => 1,
            'quantity' => 5,
            'price' => 10000,
            'total' => 50000
        ]);
        \DB::table('detail_bill')->insert([
            'bill_id'=> 2,
            'product_id' => 2,
            'quantity' => 3,
            'price' => 100000,
            'total' => 500000
        ]);
    }
}
