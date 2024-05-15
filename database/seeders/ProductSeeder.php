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
            'name' => 'Cat Blue Buffalo Bundle 48',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Blue Buffalo Tastefuls Natural Flaked Wet Cat Food Bundle, Flaked Chicken and Tuna 5.5-oz cans (48 Count- 24 of Each Flavor)',
            'image' => 'cat-blue-buffalo-bundle-48',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 5,
            'supplier_id' => 1,
        ]);

        # Blue Buffalo 2:
        Product::create([
            'name' => 'Cat Blue Buffalo Bundle 72',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Blue Buffalo Tastefuls Natural Kitten Food Bundle, Dry Cat Food and Wet Cat Food, Chicken (7-lb Dry Food + 3oz cans 24 ct)',
            'image' => 'cat-blue-buffalo-bundle-72',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 5,
            'supplier_id' => 1,
        ]);

        # Blue Buffalo 3:
        Product::create([
            'name' => 'Cat Blue Buffalo Promise',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Blue Buffalo Tastefuls Kitten Food With DHA Dry Cat Food Made in the USA with Natural Ingredients, Chicken Recipe, 7-lb. Bag',
            'image' => 'cat-blue-buffalo-promise',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 5,
            'supplier_id' => 1,
        ]);

        # Blue Buffalo 4:
        Product::create([
            'name' => 'Cat Blue Buffalo Tastefuls',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Blue Buffalo Tastefuls Kitten Food With DHA Dry Cat Food Made in the USA with Natural Ingredients, Chicken Recipe, 7-lb. Bag',
            'image' => 'cat-blue-buffalo-taste-full',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 5,
            'supplier_id' => 1,
        ]);

        #Iams 1:
        Product::create([
            'name' => 'Cat IAMS PROACTIVE Orangle',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'IAMS PROACTIVE HEALTH Adult Healthy Dry Cat Food with Chicken Cat Kibble, 22 lb. Bag',
            'image' => 'cat-iams-proactive-orangle',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 2,
            'supplier_id' => 1,
        ]);

        #Iams 2:
        Product::create([
            'name' => 'Cat IAMS PROACTIVE Orangle Purple',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'IAMS PROACTIVE HEALTH Adult Healthy Dry Cat Food with Chicken Cat Kibble, 22 lb. Bag',
            'image' => 'cat-iams-proactive-purple',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 2,
            'supplier_id' => 1,
        ]);

        #MeoMix 1:
        Product::create([
            'name' => 'Cat Meow Mix Tasty',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Meow Mix Tasty Layers Swirled Paté Wet Cat Food Variety Pack, 2.75 Oz - 12 Count (Pack of 4)',
            'image' => 'cat-meow-mix-tasty',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 3,
            'supplier_id' => 1,
        ]);

        #Purina 1:
        Product::create([
            'name' => 'Cat Purina Fancy Feast Gems',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Fancy Feast Gems Cat Food Mousse With Chicken and a Halo of Savory Gravy Cat Food - (Pack of 8) 4 oz. Boxes',
            'image' => 'cat-purina-fancy-feast-gems',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 6,
            'supplier_id' => 1,
        ]);

        #Purina 2:
        Product::create([
            'name' => 'Cat Purina Fancy Feast Grain',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Fancy Feast Poultry and Beef Feast Classic Pate Collection Grain Free Wet Cat Food Variety Pack - (Pack of 24) 3 oz. Cans',
            'image' => 'cat-purina-fancy-feast-grain',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 6,
            'supplier_id' => 1,
        ]);

        #Purina 3:
        Product::create([
            'name' => 'Cat Purina Fancy Feast Grilled',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Purina Fancy Feast Grilled Wet Cat Food Seafood Collection in Wet Cat Food Variety Pack - (Pack of 24) 3 oz. Cans',
            'image' => 'cat-purina-fancy-feast-grilled',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 6,
            'supplier_id' => 1,
        ]);

        #Rachael Ray 1:
        Product::create([
            'name' => 'Cat Rachael Ray Nutrish Brown Rice',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Rachael Ray Nutrish Premium Natural Dry Cat Food, Real Chicken & Brown Rice Recipe, 6 Pounds (Packaging May Vary)',
            'image' => 'cat-rachael-ray-nutrish-brown-rice',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 4,
            'supplier_id' => 1,
        ]);

        #Rachael Ray 2:
        Product::create([
            'name' => 'Cat Rachael Ray Nutrish Indoor Complete',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Rachael Ray Nutrish Indoor Complete Premium Natural Dry Cat Food, Chicken with Lentils & Salmon Recipe, 14 Pounds (Packaging May Vary)',
            'image' => 'cat-rachael-ray-nutrish-indoor-complete',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 4,
            'supplier_id' => 1,
        ]);

        #Rachael Ray 3:
        Product::create([
            'name' => 'Cat Rachael Ray Nutrish Real Chicken',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Rachael Ray Nutrish Indoor Complete Premium Natural Dry Cat Food, Chicken with Lentils & Salmon Recipe, 14 Pounds (Packaging May Vary)',
            'image' => 'cat-rachael-ray-nutrish-real-chicken',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 4,
            'supplier_id' => 1,
        ]);

        #Rachael Ray 4:
        Product::create([
            'name' => 'Cat Rachael Ray Nutrish Real Salmon',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Rachael Ray Nutrish Premium Natural Dry Cat Food, Real Salmon & Brown Rice Recipe, 3 Pounds (Packaging May Vary)',
            'image' => 'cat-rachael-ray-nutrish-real-salmon',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 4,
            'supplier_id' => 1,
        ]);

        #Wellness 1:
        Product::create([
            'name' => 'Cat Wellness Complete Health',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Wellness Complete Health Natural Dry Cat Food with Wholesome Grains, Made in USA with Real Meat (Adult Cat, Chicken & Chicken Meal Recipe, 5-Pound Bag)',
            'image' => 'cat-wellness-complete-health',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 7,
            'supplier_id' => 1,
        ]);

        #Wellness 2:
        Product::create([
            'name' => 'Cat Wellness CORE Signature',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Wellness CORE Signature Selects, Wet Cat Food, Cat Food Wet in Sauce, Grain Free Cat Food, High Meat Content, Flaked Selection Mix, 8 x 79 g',
            'image' => 'cat-wellness-core-signature',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 7,
            'supplier_id' => 1,
        ]);

        #Wellness 3:
        Product::create([
            'name' => 'Cat Wellness CORE Tiny',
            'category_id' => 3,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Wellness CORE Tiny Tasters Wet Kitten Food, Complete & Balanced Natural Pet Food, Made with Real Meat, 1.75-Ounce Pouch, 12 Pack (Kitten, Minced Chicken in Gravy)',
            'image' => 'cat-wellness-core-tiny',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 7,
            'supplier_id' => 1,
        ]);


    #Dog Foods:
        # Blue Buffalo 1:
        Product::create([
            'name' => 'Dog Blue Buffalo Basics Skin & Stomach',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Blue Buffalo Basics Skin & Stomach Care, Natural Adult Dry Dog Food, Salmon & Potato 24-lb',
            'image' => 'dog-blue-buffalo-basic-skin-stomatch',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 5,
            'supplier_id' => 1,
        ]);

        # Blue Buffalo 2:
        Product::create([
            'name' => 'Dog Blue Buffalo Life Protection',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Blue Buffalo Life Protection Formula Natural Adult Dry Dog Food, Chicken and Brown Rice 30-lb',
            'image' => 'dog-blue-buffalo-life-protection',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 5,
            'supplier_id' => 1,
        ]);

        # Blue Buffalo 3:
        Product::create([
            'name' => 'Dog Blue Buffalo Formula',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Blue Buffalo Life Protection Formula Natural Adult Dry Dog Food, Chicken and Brown Rice 30-lb',
            'image' => 'dog-blue-buffalo-formula',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 5,
            'supplier_id' => 1,
        ]);

        # Hill Science 1:
        Product::create([
            'name' => 'Dog Hills Science Diet Adult 7',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Hills Science Diet Dry Dog Food, Adult 7+ for Senior Dogs, Chicken Meal, Barley & Rice Recipe, 33 lb. Bag',
            'image' => 'dog-hills-science-diet-adult-7',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 15,
            'supplier_id' => 1,
        ]);

        # Hill Science 2:
        Product::create([
            'name' => 'Dog Hills Science Diet Adult Light',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Hills Science Diet Dry Dog Food, Adult, Light for Healthy Weight & Weight Management, 15 lb. Bag',
            'image' => 'dog-hills-science-diet-adult-light',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 15,
            'supplier_id' => 1,
        ]);

        # Hill Science 3:
        Product::create([
            'name' => 'Dog Hills Science Diet Adult Sensitive',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Hills Pet Nutrition Science Diet Dry Dog Food, Adult, Sensitive Stomach & Skin, Chicken Recipe, 30 lb. Bag',
            'image' => 'dog-hills-science-diet-adult-sensitive',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 15,
            'supplier_id' => 1,
        ]);

        # Iam 1:
        Product::create([
            'name' => 'Dog IAMS Adult Minichunks',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'IAMS Proactive Health Minichunks Adult Dry Dog Food with Real Chicken and Whole Grains, 30 lb. Bag',
            'image' => 'dog-iams-adult-minichunks',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 2,
            'supplier_id' => 1,
        ]);

        # Iam 2:
        Product::create([
            'name' => 'Dog IAMS Adult Senior',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'IAMS Healthy Aging Adult Dry Dog Food for Mature and Senior Dogs with Real Chicken, 29.1 lb. Bag',
            'image' => 'dog-iams-adult-senior',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 2,
            'supplier_id' => 1,
        ]);

        # Instinct 1:
        Product::create([
            'name' => 'Dog Instinct Raw Boost Mixers',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Instinct Raw Boost Mixers Freeze Dried Raw Dog Food Topper, Grain Free Freeze Dried Dog Food Topper 6 Ounce (Pack of 1)',
            'image' => 'dog-instinct-raw-boost-mixers',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 9,
            'supplier_id' => 1,
        ]);

        # Rachael Ray 1:
        Product::create([
            'name' => 'Dog Instinct Raw Boost Mixers',
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
            'name' => 'Dog Rachael Ray Meal Brown',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Rachael Ray Nutrish Premium Natural Dry Dog Food, Real Beef, Pea, & Brown Rice Recipe, 6 Pound Bag (Packaging May Vary)',
            'image' => 'dog-rachael-ray-meal-brown',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 4,
            'supplier_id' => 1,
        ]);

        # Rachael Ray 3:
        Product::create([
            'name' => 'Dog Rachael Ray Peak Beef',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Rachael Ray Nutrish PEAK Natural Dry Dog Food, Open Prairie Recipe with Beef, Venison & Lamb, 4 Pound Bag, Grain Free (Packaging May Vary)',
            'image' => 'dog-rachael-ray-peak-beef',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 4,
            'supplier_id' => 1,
        ]);

        # Rachael Ray 4:
        Product::create([
            'name' => 'Dog Rachael Ray Soup Bones',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Rachael Ray Nutrish Soup Bones Dog Treats, Beef & Barley Flavor, 6 Bones',
            'image' => 'dog-rachael-ray-soup-bones',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 4,
            'supplier_id' => 1,
        ]);

        # Rachael Ray 5:
        Product::create([
            'name' => 'Dog Rachael Ray Sweet Potato',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Rachael Ray Nutrish Zero Grain Dry Dog Food, Salmon & Sweet Potato Recipe, 23 Pounds',
            'image' => 'dog-rachael-ray-sweet-potato',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 4,
            'supplier_id' => 1,
        ]);

        # Royal Canin 1:
        Product::create([
            'name' => 'Dog Royal Canin Health Nutrition Puppy',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Royal Canin Small Puppy Dry Dog Food, 13 lb bag',
            'image' => 'dog-royal-canin-health-nutritoin-puppy',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 8,
            'supplier_id' => 1,
        ]);

        # Royal Canin 2:
        Product::create([
            'name' => 'Dog Royal Canin Small Indoor Puppy',
            'category_id' => 4,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Royal Canin Size Health Nutrition Small Indoor Puppy Dry Dog Food, 2.5 lb bag',
            'image' => 'dog-royal-canin-small-indoor-puppy',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 8,
            'supplier_id' => 1,
        ]);

    # Pharmacy
        #Pharmacy 1:
        Product::create([
            'name' => 'Dental Fresh Advanced Plaque and Tartar Water Additive for Dogs',
            'category_id' => 6,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Dental Fresh Advanced Plaque and Tartar Water Additive for Dogs (17 Oz.)
                                – Dog Teeth Cleaning Formula Targets Plaque & Tartar Build-Up, Eliminates Bad Breath, Whitens Teeth, Improves Oral Health',
            'image' => '1',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 2:
        Product::create([
            'name' => 'Bioglass Animal Microchip Pet Transponder',
            'category_id' => 6,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => '1.25*7/1.4*8/2*12mm Bioglass Animal Microchip Pet Transponder for Dog Implants Identification with Syringe',
            'image' => '2',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 3:
        Product::create([
            'name' => 'Bladder Control Supplement for Dogs',
            'category_id' => 6,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Bladder Control Supplement for Dogs - Helps Reduce Dog Urinary Incontinence - 90 Chewable Tablets',
            'image' => '3',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 4:
        Product::create([
            'name' => 'K9 Advantix II Large Dog',
            'category_id' => 6,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'K9 Advantix II Large Dog Vet-Recommended Flea, Tick & Mosquito Treatment & Prevention | Dogs 21 - 55 lbs. | 4-Mo Supply',
            'image' => '4',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 5:
        Product::create([
            'name' => 'L-Lysine HCL 100 g',
            'category_id' => 6,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'L-Lysine HCL 100 g – Supplementary Food for Dogs and Cats – Use in Pets with Weakened Immune System – No Added Cereals',
            'image' => '5',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 6:
        Product::create([
            'name' => 'Sentry 3 Count Fiproguard Plus for Cats',
            'category_id' => 6,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Sentry 3 Count Fiproguard Plus for Cats Squeeze-On over, 1.5-Pound',
            'image' => '6',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 7:
        Product::create([
            'name' => 'Comfort Zone Cat Calming Diffuser Refill',
            'category_id' => 6,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => '6 Refills | Comfort Zone Cat Calming Diffuser Refill (Value Pack) for a Calm Home |
                                Veterinarian Recommend | De-Stress Your Cat and Reduce Spraying, Scratching, & Other Problematic Behaviors',
            'image' => '7',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 8:
        Product::create([
            'name' => 'Dog Breath Freshener',
            'category_id' => 6,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Dog Breath Freshener: Eliminate Bad Breath and Prevent Oral Disease in Dogs and Cats -
                                Teeth Cleaning Spray with Aloe Vera - Plaque and Tartar Remover, Oral Hygiene for Pets (Pack of 1)',
            'image' => '8',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 9:
        Product::create([
            'name' => 'Nutri-Vet 1001035 Bladder Control Liver Chewables',
            'category_id' => 6,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Nutri-Vet 1001035 Bladder Control Liver Chewables for Dogs - 90 Count',
            'image' => '9',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 10:
        Product::create([
            'name' => 'Palmers for Pets',
            'category_id' => 6,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Palmers for Pets Cocoa Butter Fragrance Free Intensive Paw Repair Swivel Stick for Dogs |
                                Cocoa Butter Paw Balm with Vitamin E, Peppermint Oil and Shea Butter for Rough & Dry Pads -0.5 oz (FF15588)',
            'image' => '10',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 11:
        Product::create([
            'name' => 'FELIWAY Optimum',
            'category_id' => 6,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'FELIWAY Optimum, Enhanced Calming Pheromone 30-day Refill – 6 Pack',
            'image' => '11',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 12:
        Product::create([
            'name' => 'Davis EML02 EarMed Mite Lotion',
            'category_id' => 6,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Davis EML02 EarMed Mite Lotion for Pets, 2 oz',
            'image' => '12',
            'quantity' => 12,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

        #Pharmacy 13:
        Product::create([
            'name' => 'Nutri-Vet Eye Rinse for Cats',
            'category_id' => 6,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Nutri-Vet Eye Rinse for Cats | Gentle Formula Removes Debris | Helps Reduce Irritation and Prevent Tear Stains | 4oz',
            'image' => '13',
            'quantity' => 12,
            'product_status_id' => 1,
            'brand_id' => 14,
            'supplier_id' => 3,
        ]);

    # Pet Toy
        #Dog Rope Toy 1:
        Product::create([
            'name' => 'Pet Toys Rope Colored',
            'category_id' => 5,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Wholesale Pet Toys Rope Colored Double Knot Cotton Dog Chew String for Dog Teeth Grinding',
            'image' => 'dog-rope-toy',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 13,
            'supplier_id' => 2,
        ]);

        #Doggy Man 1:
        Product::create([
            'name' => 'Doggyman and Papé Pretend Unicorn',
            'category_id' => 5,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Doggyman and Papé Pretend Unicorn',
            'image' => 'doggyman-pape',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 16,
            'supplier_id' => 2,
        ]);

        #Doggy Man 2:
        Product::create([
            'name' => 'Doggyman Henyapie',
            'category_id' => 5,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Doggyman Henyapie Rabbit',
            'image' => 'doggyman-henyapie',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 16,
            'supplier_id' => 2,
        ]);

        #Doggy Man 3:
        Product::create([
            'name' => 'Doggyman Henyapi Sheep',
            'category_id' => 5,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'Doggyman Henyapi Sheep',
            'image' => 'doggyman-sheep',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 16,
            'supplier_id' => 2,
        ]);

        #Doggy Man 4:
        Product::create([
            'name' => 'CattyMan Nyan Dent Cotton Toothpaste Loops',
            'category_id' => 5,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'CattyMan Nyan Dent Cotton Toothpaste Loops x 3',
            'image' => 'doggyman-catty',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 16,
            'supplier_id' => 2,
        ]);

        #Doggy Man 5:
        Product::create([
            'name' => 'CattyMan Cat toy box',
            'category_id' => 5,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'CattyMan Cat toy box - Chiffon flower rattle',
            'image' => 'doggy-man',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 16,
            'supplier_id' => 2,
        ]);

    # Plastic Bowl:
        #Plastic Bowl 1:
        Product::create([
            'name' => 'Plastic Bowl',
            'category_id' => 5,
            'animal_id' => 1,
            'price' => 100.50,
            'description' => 'Maneki Neko Cats Bowl Face Dog Bowls Double Single Pet Feeder Round Kitten Food Dish Lucky Cat Salver Bamboo Fiber Puppy Plate',
            'image' => 'plastic-bowl',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 12,
            'supplier_id' => 2,
        ]);

        #Plastic Bowl 2:
        // Product::create([
        //     'name' => 'plastic-bowl',
        //     'category_id' => 5,
        //     'animal_id' => 1,
        //     'price' => 100.50,
        //     'description' => 'BOBO Plastic Bowl 3141Z plastic dog and cat bowl',
        //     'image' => '2.png',
        //     'quantity' => 10,
        //     'product_status_id' => 1,
        //     'brand_id' => 12,
        //     'supplier_id' => 2,
        // ]);

        #Plastic Bowl 3:
        // Product::create([
        //     'name' => 'plastic-bowl',
        //     'category_id' => 5,
        //     'animal_id' => 2,
        //     'price' => 100.50,
        //     'description' => 'BOBO Plastic Bowl 3141Z plastic dog and cat bowl',
        //     'image' => '3.png',
        //     'quantity' => 10,
        //     'product_status_id' => 1,
        //     'brand_id' => 12,
        //     'supplier_id' => 2,
        // ]);

    # Rope Ball:
        #Rope Ball 1:
        Product::create([
            'name' => 'Rope Ball',
            'category_id' => 5,
            'animal_id' => 2,
            'price' => 100.50,
            'description' => 'BOBO rope ball dog and cat toy',
            'image' => 'rope-ball',
            'quantity' => 10,
            'product_status_id' => 1,
            'brand_id' => 12,
            'supplier_id' => 2,
        ]);
    }
}
