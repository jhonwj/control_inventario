<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class producto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(('producto'))->insert([
            [
                "IdMarca" => 3,
                "IdCategoria" => 1,
                "IdModelo" => 10,
                "Codigo" => "AM9767",
                "Nombre" => "Polarized sunglasses with UV protection.",
                "PrecioC" => 36.34,
                "PrecioV" => 84.02,
                "Estado" => false
            ],
            [
                "IdMarca" => 6,
                "IdCategoria" => 9,
                "IdModelo" => 4,
                "Codigo" => "SA4317",
                "Nombre" => "Color-changing LED lights for home decoration with remote.",
                "PrecioC" => 35.53,
                "PrecioV" => 23.05,
                "Estado" => false
            ],
            [
                "IdMarca" => 10,
                "IdCategoria" => 1,
                "IdModelo" => 5,
                "Codigo" => "SK9544",
                "Nombre" => "A warm and stylish puffer coat perfect for winter weather.",
                "PrecioC" => 30.77,
                "PrecioV" => 91.85,
                "Estado" => true
            ],
            [
                "IdMarca" => 9,
                "IdCategoria" => 7,
                "IdModelo" => 5,
                "Codigo" => "NZ1689",
                "Nombre" => "Specialized attachment for removing pet hair from surfaces.",
                "PrecioC" => 56.77,
                "PrecioV" => 61.57,
                "Estado" => true
            ],
            [
                "IdMarca" => 7,
                "IdCategoria" => 2,
                "IdModelo" => 2,
                "Codigo" => "AA6559",
                "Nombre" => "Professional-grade nail care set for manicures and pedicures.",
                "PrecioC" => 39.11,
                "PrecioV" => 67.6,
                "Estado" => true
            ],
            [
                "IdMarca" => 10,
                "IdCategoria" => 5,
                "IdModelo" => 6,
                "Codigo" => "AZ9034",
                "Nombre" => "Crispy chips made from taro root, a wonderful snack.",
                "PrecioC" => 36.35,
                "PrecioV" => 95.76,
                "Estado" => false
            ],
            [
                "IdMarca" => 4,
                "IdCategoria" => 9,
                "IdModelo" => 9,
                "Codigo" => "AM6592",
                "Nombre" => "3D model puzzle kit for creative builders.",
                "PrecioC" => 59.61,
                "PrecioV" => 58.99,
                "Estado" => false
            ],
            [
                "IdMarca" => 6,
                "IdCategoria" => 8,
                "IdModelo" => 3,
                "Codigo" => "ET3891",
                "Nombre" => "Bluetooth speakers with excellent sound quality.",
                "PrecioC" => 26.13,
                "PrecioV" => 80.1,
                "Estado" => false
            ],
            [
                "IdMarca" => 8,
                "IdCategoria" => 10,
                "IdModelo" => 4,
                "Codigo" => "AV3034",
                "Nombre" => "Silicone oven mitts for safe handling of hot cookware.",
                "PrecioC" => 67.54,
                "PrecioV" => 53.34,
                "Estado" => true
            ],
            [
                "IdMarca" => 5,
                "IdCategoria" => 5,
                "IdModelo" => 8,
                "Codigo" => "AC1444",
                "Nombre" => "Durable yoga strap for deeper stretches.",
                "PrecioC" => 78.53,
                "PrecioV" => 19.19,
                "Estado" => false
            ],
            [
                "IdMarca" => 4,
                "IdCategoria" => 7,
                "IdModelo" => 3,
                "Codigo" => "AA1730",
                "Nombre" => "Non-contact thermometer for quick and easy temperature readings.",
                "PrecioC" => 2.17,
                "PrecioV" => 92.06,
                "Estado" => false
            ],
            [
                "IdMarca" => 10,
                "IdCategoria" => 9,
                "IdModelo" => 10,
                "Codigo" => "UA7888",
                "Nombre" => "A mix of tropical fruits for a refreshing snack or dessert.",
                "PrecioC" => 6.23,
                "PrecioV" => 15.84,
                "Estado" => false
            ],
            [
                "IdMarca" => 8,
                "IdCategoria" => 3,
                "IdModelo" => 7,
                "Codigo" => "NH7162",
                "Nombre" => "Accurate stopwatch for timing events and workouts.",
                "PrecioC" => 53.33,
                "PrecioV" => 80.52,
                "Estado" => true
            ],
            [
                "IdMarca" => 6,
                "IdCategoria" => 10,
                "IdModelo" => 3,
                "Codigo" => "SK1448",
                "Nombre" => "Electric foot massager with heat settings.",
                "PrecioC" => 5.87,
                "PrecioV" => 49.5,
                "Estado" => true
            ],
            [
                "IdMarca" => 5,
                "IdCategoria" => 10,
                "IdModelo" => 1,
                "Codigo" => "IB9593",
                "Nombre" => "Freshly roasted coffee beans with rich flavor.",
                "PrecioC" => 13.24,
                "PrecioV" => 18.38,
                "Estado" => true
            ],
            [
                "IdMarca" => 9,
                "IdCategoria" => 10,
                "IdModelo" => 1,
                "Codigo" => "AA1405",
                "Nombre" => "Durable non-stick frying pan for easy cooking and cleaning.",
                "PrecioC" => 38.49,
                "PrecioV" => 39.54,
                "Estado" => false
            ],
            [
                "IdMarca" => 4,
                "IdCategoria" => 8,
                "IdModelo" => 7,
                "Codigo" => "AZ8339",
                "Nombre" => "Rechargeable hand warmer for cold weather comfort.",
                "PrecioC" => 82.63,
                "PrecioV" => 66.59,
                "Estado" => false
            ],
            [
                "IdMarca" => 7,
                "IdCategoria" => 5,
                "IdModelo" => 9,
                "Codigo" => "AV4884",
                "Nombre" => "Set of resistance bands for home workouts.",
                "PrecioC" => 98.9,
                "PrecioV" => 92.48,
                "Estado" => false
            ],
            [
                "IdMarca" => 4,
                "IdCategoria" => 7,
                "IdModelo" => 3,
                "Codigo" => "IB2065",
                "Nombre" => "A classic soup combining tomatoes and basil, great with grilled cheese sandwiches.",
                "PrecioC" => 18.11,
                "PrecioV" => 73.75,
                "Estado" => true
            ],
            [
                "IdMarca" => 5,
                "IdCategoria" => 9,
                "IdModelo" => 3,
                "Codigo" => "KL8406",
                "Nombre" => "Stainless steel travel mug with spill-proof lid.",
                "PrecioC" => 21.4,
                "PrecioV" => 60.67,
                "Estado" => false
            ],
            [
                "IdMarca" => 5,
                "IdCategoria" => 2,
                "IdModelo" => 5,
                "Codigo" => "LA6180",
                "Nombre" => "Rich vegetable stock for cooking soups and stews.",
                "PrecioC" => 33.56,
                "PrecioV" => 53.35,
                "Estado" => true
            ],
            [
                "IdMarca" => 2,
                "IdCategoria" => 3,
                "IdModelo" => 2,
                "Codigo" => "ET6441",
                "Nombre" => "Instant hot water dispenser for tea and cooking.",
                "PrecioC" => 77.75,
                "PrecioV" => 25.18,
                "Estado" => false
            ],
            [
                "IdMarca" => 9,
                "IdCategoria" => 4,
                "IdModelo" => 2,
                "Codigo" => "AM1317",
                "Nombre" => "Savory potato chips with a hint of maple sweetness and crispy bacon flavor.",
                "PrecioC" => 66.01,
                "PrecioV" => 50.33,
                "Estado" => true
            ],
            [
                "IdMarca" => 7,
                "IdCategoria" => 3,
                "IdModelo" => 7,
                "Codigo" => "DL9341",
                "Nombre" => "Convenient charging stand for smartphones and devices.",
                "PrecioC" => 71.2,
                "PrecioV" => 26.49,
                "Estado" => true
            ],
            [
                "IdMarca" => 2,
                "IdCategoria" => 5,
                "IdModelo" => 8,
                "Codigo" => "UA8526",
                "Nombre" => "Portable case to organize and protect jewelry on trips.",
                "PrecioC" => 15.44,
                "PrecioV" => 50.4,
                "Estado" => false
            ],
            [
                "IdMarca" => 3,
                "IdCategoria" => 2,
                "IdModelo" => 3,
                "Codigo" => "EK1649",
                "Nombre" => "Refreshing cranberry juice with no added sugar.",
                "PrecioC" => 39.53,
                "PrecioV" => 95.66,
                "Estado" => false
            ],
            [
                "IdMarca" => 5,
                "IdCategoria" => 2,
                "IdModelo" => 2,
                "Codigo" => "BA4260",
                "Nombre" => "Soft, cuddly toy that interacts with children.",
                "PrecioC" => 4.7,
                "PrecioV" => 85.57,
                "Estado" => true
            ],
            [
                "IdMarca" => 1,
                "IdCategoria" => 9,
                "IdModelo" => 2,
                "Codigo" => "LH2132",
                "Nombre" => "Upgrade your phone photography with this lens kit that includes wide-angle and macro lenses.",
                "PrecioC" => 56.08,
                "PrecioV" => 89.19,
                "Estado" => false
            ],
            [
                "IdMarca" => 7,
                "IdCategoria" => 6,
                "IdModelo" => 10,
                "Codigo" => "LA3981",
                "Nombre" => "Stylish black leather jacket featuring a zip-up front and multiple pockets.",
                "PrecioC" => 67.62,
                "PrecioV" => 96.74,
                "Estado" => false
            ],
            [
                "IdMarca" => 4,
                "IdCategoria" => 9,
                "IdModelo" => 2,
                "Codigo" => "KL7951",
                "Nombre" => "Complete kit for starting your own organic garden.",
                "PrecioC" => 53.79,
                "PrecioV" => 33.08,
                "Estado" => false
            ],
            [
                "IdMarca" => 8,
                "IdCategoria" => 5,
                "IdModelo" => 6,
                "Codigo" => "KE9981",
                "Nombre" => "Programmable pet feeder for scheduled meals.",
                "PrecioC" => 41.43,
                "PrecioV" => 18.73,
                "Estado" => false
            ],
            [
                "IdMarca" => 5,
                "IdCategoria" => 10,
                "IdModelo" => 4,
                "Codigo" => "AI9507",
                "Nombre" => "Sweet corn roasted to perfection for a delightful side.",
                "PrecioC" => 36.56,
                "PrecioV" => 40.86,
                "Estado" => true
            ],
            [
                "IdMarca" => 3,
                "IdCategoria" => 8,
                "IdModelo" => 10,
                "Codigo" => "AV9505",
                "Nombre" => "Sleek and protective sleeve for laptops and tablets.",
                "PrecioC" => 48.6,
                "PrecioV" => 20.91,
                "Estado" => false
            ],
            [
                "IdMarca" => 5,
                "IdCategoria" => 4,
                "IdModelo" => 10,
                "Codigo" => "SQ8339",
                "Nombre" => "Crispy chicken nuggets for quick meals.",
                "PrecioC" => 49.68,
                "PrecioV" => 12.23,
                "Estado" => true
            ],
            [
                "IdMarca" => 9,
                "IdCategoria" => 1,
                "IdModelo" => 3,
                "Codigo" => "UA4288",
                "Nombre" => "Beautiful leather-bound journal for writing and sketching.",
                "PrecioC" => 65.62,
                "PrecioV" => 62.89,
                "Estado" => true
            ],
            [
                "IdMarca" => 9,
                "IdCategoria" => 10,
                "IdModelo" => 2,
                "Codigo" => "AM6618",
                "Nombre" => "Delicious pasta shells filled with spinach and cheese",
                "PrecioC" => 16.14,
                "PrecioV" => 69.35,
                "Estado" => false
            ],
            [
                "IdMarca" => 4,
                "IdCategoria" => 5,
                "IdModelo" => 1,
                "Codigo" => "AF7177",
                "Nombre" => "Eco-friendly bamboo cutting board for food prep.",
                "PrecioC" => 37.4,
                "PrecioV" => 71.55,
                "Estado" => true
            ],
            [
                "IdMarca" => 1,
                "IdCategoria" => 7,
                "IdModelo" => 4,
                "Codigo" => "SQ4430",
                "Nombre" => "Decadent brownies made without gluten, rich and chocolatey.",
                "PrecioC" => 51.61,
                "PrecioV" => 6.85,
                "Estado" => false
            ],
            [
                "IdMarca" => 1,
                "IdCategoria" => 3,
                "IdModelo" => 6,
                "Codigo" => "KL7951",
                "Nombre" => "Versatile multi-cooker for pressure cooking and slow cooking.",
                "PrecioC" => 61.77,
                "PrecioV" => 48.29,
                "Estado" => true
            ],
            [
                "IdMarca" => 4,
                "IdCategoria" => 2,
                "IdModelo" => 9,
                "Codigo" => "KE5891",
                "Nombre" => "Baking mix to create your favorite Samoa-style cookies at home.",
                "PrecioC" => 82.97,
                "PrecioV" => 97.13,
                "Estado" => false
            ],
            [
                "IdMarca" => 6,
                "IdCategoria" => 2,
                "IdModelo" => 2,
                "Codigo" => "SA7375",
                "Nombre" => "A sweet and spicy salsa made with mangoes and a hint of chili, great with chips or grilled chicken.",
                "PrecioC" => 45.06,
                "PrecioV" => 6.5,
                "Estado" => false
            ],
            [
                "IdMarca" => 10,
                "IdCategoria" => 2,
                "IdModelo" => 9,
                "Codigo" => "AM2164",
                "Nombre" => "Crunchy and nutritious almonds, perfect for snacking.",
                "PrecioC" => 1.2,
                "PrecioV" => 62.21,
                "Estado" => true
            ],
            [
                "IdMarca" => 1,
                "IdCategoria" => 4,
                "IdModelo" => 6,
                "Codigo" => "QR9986",
                "Nombre" => "High-quality whey protein powder for muscle recovery.",
                "PrecioC" => 89.85,
                "PrecioV" => 38.4,
                "Estado" => true
            ],
            [
                "IdMarca" => 10,
                "IdCategoria" => 10,
                "IdModelo" => 9,
                "Codigo" => "AF5955",
                "Nombre" => "Classic marinara sauce for pasta, pizza, or dipping.",
                "PrecioC" => 17.01,
                "PrecioV" => 44.1,
                "Estado" => false
            ],
            [
                "IdMarca" => 4,
                "IdCategoria" => 4,
                "IdModelo" => 3,
                "Codigo" => "SK7231",
                "Nombre" => "Automatic water fountain for pets with filtration.",
                "PrecioC" => 67.19,
                "PrecioV" => 61.42,
                "Estado" => false
            ],
            [
                "IdMarca" => 10,
                "IdCategoria" => 9,
                "IdModelo" => 5,
                "Codigo" => "QR4663",
                "Nombre" => "Instant-read thermometer for accurate cooking temperatures.",
                "PrecioC" => 3.25,
                "PrecioV" => 47.79,
                "Estado" => true
            ],
            [
                "IdMarca" => 6,
                "IdCategoria" => 10,
                "IdModelo" => 2,
                "Codigo" => "SA2979",
                "Nombre" => "Versatile chair that easily folds up for carrying.",
                "PrecioC" => 18.69,
                "PrecioV" => 46.38,
                "Estado" => false
            ],
            [
                "IdMarca" => 2,
                "IdCategoria" => 1,
                "IdModelo" => 9,
                "Codigo" => "AF6433",
                "Nombre" => "Tangy vinaigrette with orange and ginger flavors.",
                "PrecioC" => 28.65,
                "PrecioV" => 66.21,
                "Estado" => false
            ],
            [
                "IdMarca" => 7,
                "IdCategoria" => 5,
                "IdModelo" => 8,
                "Codigo" => "AI6362",
                "Nombre" => "Creamy yogurt with probiotics, available in various flavors.",
                "PrecioC" => 67.99,
                "PrecioV" => 98.07,
                "Estado" => false
            ],
            [
                "IdMarca" => 5,
                "IdCategoria" => 4,
                "IdModelo" => 2,
                "Codigo" => "EK1205",
                "Nombre" => "Quick-cooking ramen noodles made with organic wheat.",
                "PrecioC" => 98.11,
                "PrecioV" => 15.61,
                "Estado" => false
            ],
            [
                "IdMarca" => 9,
                "IdCategoria" => 5,
                "IdModelo" => 9,
                "Codigo" => "IB1120",
                "Nombre" => "Insulated pitcher to keep beverages cold or hot.",
                "PrecioC" => 62.42,
                "PrecioV" => 67.62,
                "Estado" => false
            ],
            [
                "IdMarca" => 7,
                "IdCategoria" => 6,
                "IdModelo" => 3,
                "Codigo" => "SA4429",
                "Nombre" => "Tangy salsa made from tomatillos and peppers.",
                "PrecioC" => 33.05,
                "PrecioV" => 48.6,
                "Estado" => false
            ],
            [
                "IdMarca" => 5,
                "IdCategoria" => 10,
                "IdModelo" => 4,
                "Codigo" => "SQ2554",
                "Nombre" => "Set of three aromatic candles with various scents.",
                "PrecioC" => 32.88,
                "PrecioV" => 4.34,
                "Estado" => true
            ],
            [
                "IdMarca" => 3,
                "IdCategoria" => 3,
                "IdModelo" => 10,
                "Codigo" => "WN9434",
                "Nombre" => "Space-saving crates for easy organization at home or while traveling.",
                "PrecioC" => 45.03,
                "PrecioV" => 34.38,
                "Estado" => false
            ],
            [
                "IdMarca" => 3,
                "IdCategoria" => 10,
                "IdModelo" => 9,
                "Codigo" => "SA9869",
                "Nombre" => "Portable and lightweight umbrella for protection from rain.",
                "PrecioC" => 42.32,
                "PrecioV" => 36.85,
                "Estado" => false
            ],
            [
                "IdMarca" => 7,
                "IdCategoria" => 3,
                "IdModelo" => 9,
                "Codigo" => "AZ7819",
                "Nombre" => "Soft and breathable pillowcase for body pillows.",
                "PrecioC" => 33.02,
                "PrecioV" => 67.92,
                "Estado" => true
            ],
            [
                "IdMarca" => 4,
                "IdCategoria" => 8,
                "IdModelo" => 4,
                "Codigo" => "AF3476",
                "Nombre" => "Premium olive oil infused with herbs for enhanced flavor.",
                "PrecioC" => 39.49,
                "PrecioV" => 14.81,
                "Estado" => false
            ],
            [
                "IdMarca" => 6,
                "IdCategoria" => 2,
                "IdModelo" => 3,
                "Codigo" => "ET5903",
                "Nombre" => "Powerful blender for smoothies and soups.",
                "PrecioC" => 84.48,
                "PrecioV" => 29.15,
                "Estado" => true
            ],
            [
                "IdMarca" => 4,
                "IdCategoria" => 3,
                "IdModelo" => 6,
                "Codigo" => "KL1814",
                "Nombre" => "Quick boiling kettle for small kitchens and dorms.",
                "PrecioC" => 71.75,
                "PrecioV" => 31.96,
                "Estado" => true
            ],
            [
                "IdMarca" => 9,
                "IdCategoria" => 7,
                "IdModelo" => 10,
                "Codigo" => "SA3782",
                "Nombre" => "Crunchy peanuts coated in honey, perfect for snacking.",
                "PrecioC" => 35.28,
                "PrecioV" => 8.23,
                "Estado" => true
            ],
            [
                "IdMarca" => 6,
                "IdCategoria" => 4,
                "IdModelo" => 3,
                "Codigo" => "BA8137",
                "Nombre" => "Complete set to brew coffee with different methods.",
                "PrecioC" => 31.57,
                "PrecioV" => 79.0,
                "Estado" => true
            ],
            [
                "IdMarca" => 1,
                "IdCategoria" => 10,
                "IdModelo" => 9,
                "Codigo" => "QR4584",
                "Nombre" => "Soft and breathable pillowcase for body pillows.",
                "PrecioC" => 71.99,
                "PrecioV" => 51.72,
                "Estado" => true
            ],
            [
                "IdMarca" => 3,
                "IdCategoria" => 2,
                "IdModelo" => 10,
                "Codigo" => "AF6433",
                "Nombre" => "Organic rolled oats, great for breakfast or baking.",
                "PrecioC" => 81.16,
                "PrecioV" => 9.33,
                "Estado" => true
            ],
            [
                "IdMarca" => 1,
                "IdCategoria" => 4,
                "IdModelo" => 5,
                "Codigo" => "AV3031",
                "Nombre" => "Frozen pizza rolls stuffed with spinach and cheese, perfect for snacking.",
                "PrecioC" => 39.37,
                "PrecioV" => 35.26,
                "Estado" => false
            ],
            [
                "IdMarca" => 8,
                "IdCategoria" => 3,
                "IdModelo" => 9,
                "Codigo" => "AZ1133",
                "Nombre" => "Multi-functional gloves for planting and digging without tools.",
                "PrecioC" => 95.9,
                "PrecioV" => 54.8,
                "Estado" => false
            ],
            [
                "IdMarca" => 2,
                "IdCategoria" => 6,
                "IdModelo" => 4,
                "Codigo" => "AC6622",
                "Nombre" => "Compact digital camera with 20MP resolution.",
                "PrecioC" => 88.74,
                "PrecioV" => 79.89,
                "Estado" => true
            ],
            [
                "IdMarca" => 4,
                "IdCategoria" => 4,
                "IdModelo" => 8,
                "Codigo" => "AM9401",
                "Nombre" => "Classic wooden building blocks for toddlers.",
                "PrecioC" => 90.33,
                "PrecioV" => 44.87,
                "Estado" => false
            ],
            [
                "IdMarca" => 1,
                "IdCategoria" => 9,
                "IdModelo" => 4,
                "Codigo" => "BA6160",
                "Nombre" => "Sweet and nutty filling for delicious homemade pecan pie.",
                "PrecioC" => 86.68,
                "PrecioV" => 79.63,
                "Estado" => true
            ],
            [
                "IdMarca" => 5,
                "IdCategoria" => 2,
                "IdModelo" => 5,
                "Codigo" => "IB4654",
                "Nombre" => "Moist and flavorful muffins packed with fall spices and pumpkin puree.",
                "PrecioC" => 20.92,
                "PrecioV" => 42.4,
                "Estado" => true
            ],
            [
                "IdMarca" => 4,
                "IdCategoria" => 4,
                "IdModelo" => 3,
                "Codigo" => "QF1885",
                "Nombre" => "Lightweight backpack with an insulated water reservoir for hydration on the go.",
                "PrecioC" => 10.81,
                "PrecioV" => 37.98,
                "Estado" => true
            ],
            [
                "IdMarca" => 7,
                "IdCategoria" => 10,
                "IdModelo" => 7,
                "Codigo" => "NZ7772",
                "Nombre" => "Space-saving rack to store and organize spices conveniently.",
                "PrecioC" => 28.41,
                "PrecioV" => 55.19,
                "Estado" => false
            ],
            [
                "IdMarca" => 8,
                "IdCategoria" => 9,
                "IdModelo" => 3,
                "Codigo" => "IB9868",
                "Nombre" => "Savory and chewy beef jerky with teriyaki flavor.",
                "PrecioC" => 63.73,
                "PrecioV" => 14.6,
                "Estado" => false
            ],
            [
                "IdMarca" => 6,
                "IdCategoria" => 9,
                "IdModelo" => 3,
                "Codigo" => "EK1651",
                "Nombre" => "Fragrant fried rice with authentic Thai basil and veggies.",
                "PrecioC" => 4.02,
                "PrecioV" => 51.07,
                "Estado" => true
            ],
            [
                "IdMarca" => 2,
                "IdCategoria" => 4,
                "IdModelo" => 3,
                "Codigo" => "DL2968",
                "Nombre" => "Stabilizing gimbal for smooth video recording.",
                "PrecioC" => 57.53,
                "PrecioV" => 47.21,
                "Estado" => true
            ],
            [
                "IdMarca" => 4,
                "IdCategoria" => 4,
                "IdModelo" => 1,
                "Codigo" => "AM2109",
                "Nombre" => "Stylish bar stools with adjustable height and swivel features.",
                "PrecioC" => 71.08,
                "PrecioV" => 60.22,
                "Estado" => false
            ],
            [
                "IdMarca" => 6,
                "IdCategoria" => 5,
                "IdModelo" => 8,
                "Codigo" => "IB2915",
                "Nombre" => "Multi-function pressure cooker that can sauté, steam, and slow cook.",
                "PrecioC" => 78.04,
                "PrecioV" => 89.32,
                "Estado" => true
            ],
            [
                "IdMarca" => 8,
                "IdCategoria" => 1,
                "IdModelo" => 6,
                "Codigo" => "SK7263",
                "Nombre" => "Heated stool cover for extra comfort during winter.",
                "PrecioC" => 36.11,
                "PrecioV" => 32.03,
                "Estado" => false
            ],
            [
                "IdMarca" => 3,
                "IdCategoria" => 1,
                "IdModelo" => 9,
                "Codigo" => "UA9619",
                "Nombre" => "Sweet and spicy salsa made with fresh peaches.",
                "PrecioC" => 36.84,
                "PrecioV" => 74.65,
                "Estado" => false
            ],
            [
                "IdMarca" => 2,
                "IdCategoria" => 8,
                "IdModelo" => 10,
                "Codigo" => "QF7187",
                "Nombre" => "Eco-friendly meal prep containers for healthy eating.",
                "PrecioC" => 38.12,
                "PrecioV" => 99.04,
                "Estado" => true
            ],
            [
                "IdMarca" => 7,
                "IdCategoria" => 7,
                "IdModelo" => 4,
                "Codigo" => "LA4273",
                "Nombre" => "Personal massager for muscle recovery.",
                "PrecioC" => 32.79,
                "PrecioV" => 37.96,
                "Estado" => true
            ],
            [
                "IdMarca" => 1,
                "IdCategoria" => 5,
                "IdModelo" => 3,
                "Codigo" => "AC8541",
                "Nombre" => "Gluten-free almond flour, perfect for baking.",
                "PrecioC" => 53.97,
                "PrecioV" => 48.49,
                "Estado" => true
            ],
            [
                "IdMarca" => 3,
                "IdCategoria" => 7,
                "IdModelo" => 5,
                "Codigo" => "EK6878",
                "Nombre" => "Durable cable for connecting devices with high-definition video.",
                "PrecioC" => 52.8,
                "PrecioV" => 49.13,
                "Estado" => false
            ],
            [
                "IdMarca" => 10,
                "IdCategoria" => 6,
                "IdModelo" => 8,
                "Codigo" => "KE5316",
                "Nombre" => "A classic soup combining tomatoes and basil, great with grilled cheese sandwiches.",
                "PrecioC" => 93.28,
                "PrecioV" => 39.7,
                "Estado" => true
            ],
            [
                "IdMarca" => 1,
                "IdCategoria" => 2,
                "IdModelo" => 1,
                "Codigo" => "AA4623",
                "Nombre" => "Spacious 2-person camping tent with waterproof cover.",
                "PrecioC" => 54.68,
                "PrecioV" => 19.71,
                "Estado" => true
            ],
            [
                "IdMarca" => 2,
                "IdCategoria" => 9,
                "IdModelo" => 7,
                "Codigo" => "QR9037",
                "Nombre" => "Instant mix for creamy vanilla pudding.",
                "PrecioC" => 66.2,
                "PrecioV" => 82.76,
                "Estado" => true
            ],
            [
                "IdMarca" => 8,
                "IdCategoria" => 2,
                "IdModelo" => 5,
                "Codigo" => "LA3551",
                "Nombre" => "Automatically cooks eggs to your desired level.",
                "PrecioC" => 22.47,
                "PrecioV" => 72.55,
                "Estado" => true
            ],
            [
                "IdMarca" => 8,
                "IdCategoria" => 10,
                "IdModelo" => 10,
                "Codigo" => "AZ8084",
                "Nombre" => "Portable chess set with magnetic pieces for travel.",
                "PrecioC" => 93.44,
                "PrecioV" => 43.05,
                "Estado" => true
            ],
            [
                "IdMarca" => 8,
                "IdCategoria" => 4,
                "IdModelo" => 1,
                "Codigo" => "AI5614",
                "Nombre" => "Frozen stir-fry mix with chicken, veggies, and teriyaki sauce.",
                "PrecioC" => 6.42,
                "PrecioV" => 1.76,
                "Estado" => false
            ],
            [
                "IdMarca" => 7,
                "IdCategoria" => 5,
                "IdModelo" => 7,
                "Codigo" => "LA9846",
                "Nombre" => "Fun gardening tools designed specifically for kids.",
                "PrecioC" => 90.33,
                "PrecioV" => 14.72,
                "Estado" => false
            ],
            [
                "IdMarca" => 9,
                "IdCategoria" => 6,
                "IdModelo" => 6,
                "Codigo" => "AI5694",
                "Nombre" => "Tangy and sweet balsamic dressing, perfect for salads.",
                "PrecioC" => 47.59,
                "PrecioV" => 97.13,
                "Estado" => false
            ],
            [
                "IdMarca" => 6,
                "IdCategoria" => 6,
                "IdModelo" => 6,
                "Codigo" => "KL6990",
                "Nombre" => "Wild-caught salmon filets, perfect for grilling or baking.",
                "PrecioC" => 72.0,
                "PrecioV" => 61.72,
                "Estado" => false
            ],
            [
                "IdMarca" => 4,
                "IdCategoria" => 9,
                "IdModelo" => 2,
                "Codigo" => "AZ6191",
                "Nombre" => "Soft flannel shirt with a timeless plaid pattern, perfect for layering.",
                "PrecioC" => 70.63,
                "PrecioV" => 0.11,
                "Estado" => true
            ],
            [
                "IdMarca" => 10,
                "IdCategoria" => 5,
                "IdModelo" => 5,
                "Codigo" => "UA3568",
                "Nombre" => "Compact digital camera with 20MP resolution.",
                "PrecioC" => 92.94,
                "PrecioV" => 93.41,
                "Estado" => true
            ],
            [
                "IdMarca" => 10,
                "IdCategoria" => 3,
                "IdModelo" => 10,
                "Codigo" => "SQ3780",
                "Nombre" => "Creamy cheese with a spicy kick, perfect for sandwiches.",
                "PrecioC" => 25.78,
                "PrecioV" => 19.16,
                "Estado" => false
            ],
            [
                "IdMarca" => 5,
                "IdCategoria" => 3,
                "IdModelo" => 8,
                "Codigo" => "NH9438",
                "Nombre" => "Variety pack of craft supplies for kids' projects.",
                "PrecioC" => 3.03,
                "PrecioV" => 64.65,
                "Estado" => false
            ],
            [
                "IdMarca" => 3,
                "IdCategoria" => 10,
                "IdModelo" => 8,
                "Codigo" => "SA1505",
                "Nombre" => "A nutritious salad with kale, quinoa, and a zesty lemon dressing.",
                "PrecioC" => 7.85,
                "PrecioV" => 62.99,
                "Estado" => false
            ],
            [
                "IdMarca" => 9,
                "IdCategoria" => 10,
                "IdModelo" => 8,
                "Codigo" => "BA4142",
                "Nombre" => "Retro arcade machine for classic gaming.",
                "PrecioC" => 31.89,
                "PrecioV" => 13.77,
                "Estado" => false
            ],
            [
                "IdMarca" => 6,
                "IdCategoria" => 8,
                "IdModelo" => 7,
                "Codigo" => "AI2948",
                "Nombre" => "Moist and flavorful muffins packed with fall spices and pumpkin puree.",
                "PrecioC" => 85.39,
                "PrecioV" => 92.45,
                "Estado" => true
            ],
            [
                "IdMarca" => 10,
                "IdCategoria" => 6,
                "IdModelo" => 1,
                "Codigo" => "ET6157",
                "Nombre" => "Versatile electric skillet for stir-frying and searing.",
                "PrecioC" => 1.54,
                "PrecioV" => 11.76,
                "Estado" => false
            ],
            [
                "IdMarca" => 3,
                "IdCategoria" => 5,
                "IdModelo" => 7,
                "Codigo" => "AV7494",
                "Nombre" => "Portable mixer bottle for smoothies and protein shakes.",
                "PrecioC" => 52.53,
                "PrecioV" => 10.58,
                "Estado" => true
            ]
        ]);
    }
}
