<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		Category::factory()->createMany([
			['name' => 'Сканеры'],
			['name' => 'Плоттеры'],
			['name' => 'Принтеры'],
			['name' => 'Ламинаторы'],
			['name' => 'Фальцовщики'],
			['name' => 'Термопрессы'],
			['name' => 'Брошюровщики'],
			['name' => 'Уничтожители'],
			['name' => 'Расходные материалы'],
			['name' => 'Материалы для печати'],
		]);
	}
}
