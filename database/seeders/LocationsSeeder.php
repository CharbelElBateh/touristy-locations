<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ["Kadisha Valley", "Jeita Grotto", "Beirut", "Tripoli", 
                "Beiteddine Palace", "Sidon", "Baalbek", "Cedars of God",
                "Byblos", "Baatara Gorge Waterfall"];

        $descriptions = [
            "The Monastery of St. Simon and the hidden Church Saint Antoine of Padova are scenic destinations in the valley as well. Two aces up Lebanon’s sleeves – deep-rooted culture and magnificent landscapes – are indeed represented in the Kadisha Valley.",
            "Bringing your lunch during your visit isn’t necessary; near the cave chambers entrance, a restaurant serves traditional Lebanese dishes to satisfy your cravings.",
            "Downtown Beirut is the most popular area, as this district is home to the famed Beirut Souks and the Roman Baths, a complex of ruins that dates back to the 1st century AD. While the souks represent old Beirut, the city’s new face is apparent at Zaituna Bay, where upscale restaurants, yachts, and skyscrapers dominate the view. Beirut is a cosmopolitan place, worth spending at least a couple of days.",
            "The nearby Taynal Mosque is another superb example of Tripoli’s gorgeous architecture. This 14th-century mosque has vivid green domes, and the stone structure is particularly imposing on the inside.
            Furthermore, Tripoli is praised for its souks, medieval market quarters where the fragrance of spices penetrate the nostrils and bargain prices await around any corner.",
            "As a visitor, you can stroll around the courtyard and savour the views of the former palace. While Beiteddine Palace still functions as the summer residence of Lebanon’s president, the complex is mostly accessible. Inside the palace, rooms and halls with striking Arab and baroque ornaments await.",
            "One of the oldest excavated sites in Sidon is the Temple of Eshmun, where the Phoenician god Eshmun was worshipped starting from the 7th century BC. Keep in mind that only a few walls and carved stone blocks are visible at the grounds.",
            "Continue walking to the Temple of Jupiter, which dates back to the 1st century AD and was actually the largest temple in the Roman world. Nowadays, only 6 standing columns remain, but this place’s remarkable history makes it more than worth visiting.",
            "Seeing a forest with these massive trees truly is an unforgettable experience. The area measures 10 hectares and is recognized as a cultural heritage site by UNESCO.",
            "Sit down to soak up the atmosphere in the Roman theatre, or be in awe when walking in the narrow streets of the Old Souk. This maze of market stalls and artisan shops is one of Lebanon’s most charming versions. Byblos has decent beaches, perfect for swimming, sunbathing or watching the Mediterranean sunset.",
            "The different levels and the vibrant limestone walls surrounding the waterfalls make for a marvellous scene. Walking trails get you close to this marvel of nature, and, with extra care required, you can even follow a narrow path behind the falls. March to April is the best period to visit when the melted snow from the mountains enhances the force of Baatara Gorge Waterfall."
        ];

        for($i = 0; $i < 10; $i++){
            Location::create([
                'name' => $names[$i],
                'description' => $descriptions[$i],
                'image' => "uploads/" . ($i + 1) . ".png"
            ]);
        }
    }
}
