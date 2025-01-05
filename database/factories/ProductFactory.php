<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Branch;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $products = [
                'Roti Gandum', 'Croissant', 'Bagel', 'Donat', 
                'Teh Hijau Lipton', 'Air Mineral Evian', 'Susu Almond', 'Susu Kedelai', 
                'Jus Apel', 'Jus Jeruk', 'Minuman Cokelat', 'Teh Earl Grey', 
                'Granola Bar', 'Biskuit Oreo', 'Wafer Tango', 'Cookies Chips Ahoy', 
                'Popcorn', 'Cokelat KitKat', 'Cokelat Toblerone', 'Permen Yupi', 'Permen Kopiko', 
                'Keripik Kentang Lay\'s', 'Keripik Singkong', 'Kacang Almond', 'Kacang Mete', 
                'Teh Lemon', 'Kopi Hitam', 'Kopi Espresso', 'Cokelat Bubuk', 
                'Beras Putih', 'Beras Merah', 'Gula Aren', 'Minyak Zaitun', 
                'Bumbu Kari', 'Bumbu Spaghetti', 'Selai Kacang', 'Selai Nutella', 
                'Sambal Terasi', 'Kecap Asin', 'Minyak Wijen', 'Tepung Tapioka', 
                'Jamur Kering', 'Madu Hutan', 'Kecap Inggris', 'Teh Chamomile', 
                'Sabun Cuci Tangan Dettol', 'Pembersih Kaca Windex', 'Sabun Cuci Piring Sunlight', 
                'Shampoo Sunsilk', 'Pasta Gigi Sensodyne', 'Mouthwash Listerine', 
                'Lotion Vaseline', 'Tisu Basah', 'Disinfektan Spray', 'Kain Lap', 
                'Kabel USB', 'Adaptor Charger', 'Lampu Bohlam', 'Kantong Kertas', 'Wadah Makanan Plastik'

        ];
        

        return [
            'branch_id' => Branch::inRandomOrder()->first()->id, 
            'name' => $this->faker->randomElement($products),
            'price' => $this->faker->numberBetween(10, 50), 
            'stock' => $this->faker->numberBetween(0, 125), 
            'stock_min' => $this->faker->numberBetween(10, 100), 
        ];
    }
}
