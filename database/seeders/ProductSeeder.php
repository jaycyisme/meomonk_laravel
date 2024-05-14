<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

    # Cat Food:
        # Blue Buffalo 1:
        Product::create([
            'name' => 'cat-blue-buffalo-bundle-48',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Blue Buffalo Tastefuls Natural Flaked Wet Cat Food Bundle, Flaked Chicken and Tuna 5.5-oz cans (48 Count- 24 of Each Flavor)',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 5,
            'supplier_id' => 1,
        ]);

        # Blue Buffalo 2:
        Product::create([
            'name' => 'cat-blue-buffalo-72',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Blue Buffalo Tastefuls Natural Kitten Food Bundle, Dry Cat Food and Wet Cat Food, Chicken (7-lb Dry Food + 3oz cans 24 ct)',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 5,
            'supplier_id' => 1,
        ]);

        # Blue Buffalo 3:
        Product::create([
            'name' => 'cat-blue-buffalo-promise',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Blue Buffalo Tastefuls Kitten Food With DHA Dry Cat Food Made in the USA with Natural Ingredients, Chicken Recipe, 7-lb. Bag',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 5,
            'supplier_id' => 1,
        ]);

        # Blue Buffalo 4:
        Product::create([
            'name' => 'cat-blue-buffalo-taste-full',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Blue Buffalo Tastefuls Kitten Food With DHA Dry Cat Food Made in the USA with Natural Ingredients, Chicken Recipe, 7-lb. Bag',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 5,
            'supplier_id' => 1,
        ]);

        #Iams 1:
        Product::create([
            'name' => 'cat-iams-proactive-orangle',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'IAMS PROACTIVE HEALTH Adult Healthy Dry Cat Food with Chicken Cat Kibble, 22 lb. Bag',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 2,
            'supplier_id' => 1,
        ]);

        #Iams 2:
        Product::create([
            'name' => 'cat-iams-proactive-purple',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'IAMS PROACTIVE HEALTH Adult Healthy Dry Cat Food with Chicken Cat Kibble, 22 lb. Bag',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 2,
            'supplier_id' => 1,
        ]);

        #MeoMix 1:
        Product::create([
            'name' => 'cat-meow-mix-tasty',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Meow Mix Tasty Layers Swirled Paté Wet Cat Food Variety Pack, 2.75 Oz - 12 Count (Pack of 4)',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 3,
            'supplier_id' => 1,
        ]);

        #Purina 1:
        Product::create([
            'name' => 'cat-purina-fancy-feast-gems',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Fancy Feast Gems Cat Food Mousse With Chicken and a Halo of Savory Gravy Cat Food - (Pack of 8) 4 oz. Boxes',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 6,
            'supplier_id' => 1,
        ]);

        #Purina 2:
        Product::create([
            'name' => 'cat-purina-fancy-feast-grain',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Fancy Feast Poultry and Beef Feast Classic Pate Collection Grain Free Wet Cat Food Variety Pack - (Pack of 24) 3 oz. Cans',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 6,
            'supplier_id' => 1,
        ]);

        #Purina 3:
        Product::create([
            'name' => 'cat-purina-fancy-feast-grilled',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Purina Fancy Feast Grilled Wet Cat Food Seafood Collection in Wet Cat Food Variety Pack - (Pack of 24) 3 oz. Cans',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 6,
            'supplier_id' => 1,
        ]);

        #Rachael Ray 1:
        Product::create([
            'name' => 'cat-rachael-ray-nutrish-brown-rice',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Rachael Ray Nutrish Premium Natural Dry Cat Food, Real Chicken & Brown Rice Recipe, 6 Pounds (Packaging May Vary)',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 4,
            'supplier_id' => 1,
        ]);

        #Rachael Ray 2:
        Product::create([
            'name' => 'cat-rachael-ray-nutrish-indoor-complete',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Rachael Ray Nutrish Indoor Complete Premium Natural Dry Cat Food, Chicken with Lentils & Salmon Recipe, 14 Pounds (Packaging May Vary)',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 4,
            'supplier_id' => 1,
        ]);

        #Rachael Ray 3:
        Product::create([
            'name' => 'cat-rachael-ray-nutrish-real-chicken',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Rachael Ray Nutrish Indoor Complete Premium Natural Dry Cat Food, Chicken with Lentils & Salmon Recipe, 14 Pounds (Packaging May Vary)',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 4,
            'supplier_id' => 1,
        ]);

        #Rachael Ray 4:
        Product::create([
            'name' => 'cat-rachael-ray-nutrish-real-salmon',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Rachael Ray Nutrish Premium Natural Dry Cat Food, Real Salmon & Brown Rice Recipe, 3 Pounds (Packaging May Vary)',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 4,
            'supplier_id' => 1,
        ]);

        #Wellness 1:
        Product::create([
            'name' => 'cat-wellness-complete-health',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'RWellness Complete Health Natural Dry Cat Food with Wholesome Grains, Made in USA with Real Meat (Adult Cat, Chicken & Chicken Meal Recipe, 5-Pound Bag)',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 7,
            'supplier_id' => 1,
        ]);

        #Wellness 2:
        Product::create([
            'name' => 'cat-wellness-core-signature',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Wellness CORE Signature Selects, Wet Cat Food, Cat Food Wet in Sauce, Grain Free Cat Food, High Meat Content, Flaked Selection Mix, 8 x 79 g',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 7,
            'supplier_id' => 1,
        ]);

        #Wellness 3:
        Product::create([
            'name' => 'cat-wellness-core-tiny',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Wellness CORE Tiny Tasters Wet Kitten Food, Complete & Balanced Natural Pet Food, Made with Real Meat, 1.75-Ounce Pouch, 12 Pack (Kitten, Minced Chicken in Gravy)',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 7,
            'supplier_id' => 1,
        ]);


    #Dog Foods:
        # Blue Buffalo 1:
        Product::create([
            'name' => 'dog-blue-buffalo-basic-skin-stomatch',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Blue Buffalo Basics Skin & Stomach Care, Natural Adult Dry Dog Food, Salmon & Potato 24-lb',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 5,
            'supplier_id' => 1,
        ]);

        # Blue Buffalo 2:
        Product::create([
            'name' => 'dog-blue-buffalo-life-protection',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Blue Buffalo Life Protection Formula Natural Adult Dry Dog Food, Chicken and Brown Rice 30-lb',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 5,
            'supplier_id' => 1,
        ]);

        # Blue Buffalo 3:
        Product::create([
            'name' => 'dog-blue-buffalo-formula',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Blue Buffalo Life Protection Formula Natural Adult Dry Dog Food, Chicken and Brown Rice 30-lb',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 5,
            'supplier_id' => 1,
        ]);

        # Hill Science 1:
        Product::create([
            'name' => 'dog-hills-science-diet-adult-7',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Hills Science Diet Dry Dog Food, Adult 7+ for Senior Dogs, Chicken Meal, Barley & Rice Recipe, 33 lb. Bag',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 15,
            'supplier_id' => 1,
        ]);

        # Hill Science 2:
        Product::create([
            'name' => 'dog-hills-science-diet-adult-light',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Hills Science Diet Dry Dog Food, Adult, Light for Healthy Weight & Weight Management, 15 lb. Bag',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 15,
            'supplier_id' => 1,
        ]);

        # Hill Science 3:
        Product::create([
            'name' => 'dog-hills-science-diet-adult-sensitive',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Hills Pet Nutrition Science Diet Dry Dog Food, Adult, Sensitive Stomach & Skin, Chicken Recipe, 30 lb. Bag',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 15,
            'supplier_id' => 1,
        ]);

        # Iam 1:
        Product::create([
            'name' => 'dog-iams-adult-minichunks',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'IAMS Proactive Health Minichunks Adult Dry Dog Food with Real Chicken and Whole Grains, 30 lb. Bag',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 2,
            'supplier_id' => 1,
        ]);

        # Iam 2:
        Product::create([
            'name' => 'dog-iams-adult-senior',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'IAMS Healthy Aging Adult Dry Dog Food for Mature and Senior Dogs with Real Chicken, 29.1 lb. Bag',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 2,
            'supplier_id' => 1,
        ]);

        # Instinct 1:
        Product::create([
            'name' => 'dog-instinct-raw-boost-mixers',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Instinct Raw Boost Mixers Freeze Dried Raw Dog Food Topper, Grain Free Freeze Dried Dog Food Topper 6 Ounce (Pack of 1)',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 9,
            'supplier_id' => 1,
        ]);

        # Rachael Ray 1:
        Product::create([
            'name' => 'dog-instinct-raw-boost-mixers',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Instinct Raw Boost Mixers Freeze Dried Raw Dog Food Topper, Grain Free Freeze Dried Dog Food Topper 6 Ounce (Pack of 1)',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 4,
            'supplier_id' => 1,
        ]);

        # Rachael Ray 2:
        Product::create([
            'name' => 'dog-rachael-ray-meal-brown',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Rachael Ray Nutrish Premium Natural Dry Dog Food, Real Beef, Pea, & Brown Rice Recipe, 6 Pound Bag (Packaging May Vary)',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 4,
            'supplier_id' => 1,
        ]);

        # Rachael Ray 3:
        Product::create([
            'name' => 'dog-rachael-ray-peak-beef',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Rachael Ray Nutrish PEAK Natural Dry Dog Food, Open Prairie Recipe with Beef, Venison & Lamb, 4 Pound Bag, Grain Free (Packaging May Vary)',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 4,
            'supplier_id' => 1,
        ]);

        # Rachael Ray 4:
        Product::create([
            'name' => 'dog-rachael-ray-soup-bones',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Rachael Ray Nutrish Soup Bones Dog Treats, Beef & Barley Flavor, 6 Bones',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 4,
            'supplier_id' => 1,
        ]);

        # Rachael Ray 5:
        Product::create([
            'name' => 'dog-rachael-ray-sweet-potato',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Rachael Ray Nutrish Zero Grain Dry Dog Food, Salmon & Sweet Potato Recipe, 23 Pounds',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 4,
            'supplier_id' => 1,
        ]);

        # Royal Canin 1:
        Product::create([
            'name' => 'dog-royal-canin-health-nutritoin-puppy',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Royal Canin Small Puppy Dry Dog Food, 13 lb bag',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 8,
            'supplier_id' => 1,
        ]);

        # Royal Canin 2:
        Product::create([
            'name' => 'dog-royal-canin-small-indoor-puppy',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Royal Canin Size Health Nutrition Small Indoor Puppy Dry Dog Food, 2.5 lb bag',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 8,
            'supplier_id' => 1,
        ]);

    # Pharmacy
        #Pharmacy 1:
        Product::create([
            'name' => '1',
            'category_id' => 6,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Dental Fresh Advanced Plaque and Tartar Water Additive for Dogs (17 Oz.)
                                – Dog Teeth Cleaning Formula Targets Plaque & Tartar Build-Up, Eliminates Bad Breath, Whitens Teeth, Improves Oral Health',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 2:
        Product::create([
            'name' => '2',
            'category_id' => 6,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => '1.25*7/1.4*8/2*12mm Bioglass Animal Microchip Pet Transponder for Dog Implants Identification with Syringe',
            'image' => '2.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 3:
        Product::create([
            'name' => '3',
            'category_id' => 6,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Bladder Control Supplement for Dogs - Helps Reduce Dog Urinary Incontinence - 90 Chewable Tablets',
            'image' => '3.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 4:
        Product::create([
            'name' => '4',
            'category_id' => 6,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'K9 Advantix II Large Dog Vet-Recommended Flea, Tick & Mosquito Treatment & Prevention | Dogs 21 - 55 lbs. | 4-Mo Supply',
            'image' => '4.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 5:
        Product::create([
            'name' => '5',
            'category_id' => 6,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'L-Lysine HCL 100 g – Supplementary Food for Dogs and Cats – Use in Pets with Weakened Immune System – No Added Cereals',
            'image' => '5.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 6:
        Product::create([
            'name' => '6',
            'category_id' => 6,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Sentry 3 Count Fiproguard Plus for Cats Squeeze-On over, 1.5-Pound',
            'image' => '6.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 7:
        Product::create([
            'name' => '7',
            'category_id' => 6,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => '6 Refills | Comfort Zone Cat Calming Diffuser Refill (Value Pack) for a Calm Home |
                                Veterinarian Recommend | De-Stress Your Cat and Reduce Spraying, Scratching, & Other Problematic Behaviors',
            'image' => '7.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 8:
        Product::create([
            'name' => '8',
            'category_id' => 6,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Dog Breath Freshener: Eliminate Bad Breath and Prevent Oral Disease in Dogs and Cats -
                                Teeth Cleaning Spray with Aloe Vera - Plaque and Tartar Remover, Oral Hygiene for Pets (Pack of 1)',
            'image' => '8.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 9:
        Product::create([
            'name' => '9',
            'category_id' => 6,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Nutri-Vet 1001035 Bladder Control Liver Chewables for Dogs - 90 Count',
            'image' => '9.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 10:
        Product::create([
            'name' => '10',
            'category_id' => 6,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Palmers for Pets Cocoa Butter Fragrance Free Intensive Paw Repair Swivel Stick for Dogs |
                                Cocoa Butter Paw Balm with Vitamin E, Peppermint Oil and Shea Butter for Rough & Dry Pads -0.5 oz (FF15588)',
            'image' => '10.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 11:
        Product::create([
            'name' => '11',
            'category_id' => 6,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'FELIWAY Optimum, Enhanced Calming Pheromone 30-day Refill – 6 Pack',
            'image' => '11.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 12:
        Product::create([
            'name' => '12',
            'category_id' => 6,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Davis EML02 EarMed Mite Lotion for Pets, 2 oz',
            'image' => '12.png',
            'quantity' => 12,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 13:
        Product::create([
            'name' => '13',
            'category_id' => 6,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Nutri-Vet Eye Rinse for Cats | Gentle Formula Removes Debris | Helps Reduce Irritation and Prevent Tear Stains | 4oz',
            'image' => '13.png',
            'quantity' => 12,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

    # Pet Toy
        #Dog Rope Toy 1:
        Product::create([
            'name' => 'dog-rope-toy',
            'category_id' => 5,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Wholesale Pet Toys Rope Colored Double Knot Cotton Dog Chew String for Dog Teeth Grinding',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 13,
            'supplier_id' => 2,
        ]);

        #Doggy Man 1:
        Product::create([
            'name' => 'doggy-man',
            'category_id' => 5,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Doggyman and Papé Pretend Unicorn',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 16,
            'supplier_id' => 2,
        ]);

        #Doggy Man 2:
        Product::create([
            'name' => 'doggy-man',
            'category_id' => 5,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Doggyman Henyapie Rabbit',
            'image' => '2.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 16,
            'supplier_id' => 2,
        ]);

        #Doggy Man 3:
        Product::create([
            'name' => 'doggy-man',
            'category_id' => 5,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Doggyman Henyapi Sheep',
            'image' => '3.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 16,
            'supplier_id' => 2,
        ]);

        #Doggy Man 4:
        Product::create([
            'name' => 'doggy-man',
            'category_id' => 5,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'CattyMan Nyan Dent Cotton Toothpaste Loops x 3',
            'image' => '4.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 16,
            'supplier_id' => 2,
        ]);

        #Doggy Man 5:
        Product::create([
            'name' => 'doggy-man',
            'category_id' => 5,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'CattyMan Cat toy box - Chiffon flower rattle',
            'image' => '5.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 16,
            'supplier_id' => 2,
        ]);

    # Plastic Bowl:
        #Plastic Bowl 1:
        Product::create([
            'name' => 'plastic-bowl',
            'category_id' => 5,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Maneki Neko Cats Bowl Face Dog Bowls Double Single Pet Feeder Round Kitten Food Dish Lucky Cat Salver Bamboo Fiber Puppy Plate',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 12,
            'supplier_id' => 2,
        ]);

        #Plastic Bowl 2:
        Product::create([
            'name' => 'plastic-bowl',
            'category_id' => 5,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'BOBO Plastic Bowl 3141Z plastic dog and cat bowl',
            'image' => '2.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 12,
            'supplier_id' => 2,
        ]);

        #Plastic Bowl 3:
        Product::create([
            'name' => 'plastic-bowl',
            'category_id' => 5,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'BOBO Plastic Bowl 3141Z plastic dog and cat bowl',
            'image' => '3.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 12,
            'supplier_id' => 2,
        ]);

    # Rope Ball:
        #Rope Ball 1:
        Product::create([
            'name' => 'rope-ball',
            'category_id' => 5,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'BOBO rope ball dog and cat toy',
            'image' => '1.png',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 12,
            'supplier_id' => 2,
        ]);
    }
}
