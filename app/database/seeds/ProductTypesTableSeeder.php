<?php


class ProductTypesTableSeeder extends Seeder {

	public function run() {
		

		ProductType::create(['name' => 'Pole', 'slug' => 'pole', 'shippingPrice' => 2000]);
		ProductType::create(['name' => 'Head', 'slug' => 'head', 'shippingPrice' => 1000]);
		ProductType::create(['name' => 'Shrinker', 'slug' => 'shrinker', 'shippingPrice' => 600]);
		ProductType::create(['name' => 'Extra', 'slug' => 'extra', 'shippingPrice' => 600]);
		ProductType::create(['name' => 'Apparel', 'slug' => 'apparel', 'shippingPrice' => 600]);

		
		
	}

}