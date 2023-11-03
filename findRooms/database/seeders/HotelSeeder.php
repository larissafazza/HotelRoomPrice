<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotels')->insert([
            [
                'name' => 'Malibu Palace',
                'location' => 'Forte Street, 525, Cabo Frio, Rio de Janeiro, Brazil',
                'image_url' => asset('images/malibu.jpg'),
                'website' => 'https://www.malibupalace.com.br/',
                'phone' => '+552226431955'
            ],
            [
                'name' => 'Dragonfly Inn',
                'location' => 'Oak Tree Lane, 214, Stars Hollow, Connecticut, United States',
                'image_url' => asset('images/dragonfly.jpg'),
                'website' => 'https://www.dragonflyinn.com/',
                'phone' => '+18179997469'
            ],
            [
                'name' => 'Victory Hotel',
                'location' => 'Eugênio do Nascimento Street, 310, Juiz de Fora, Minas Gerais, Brazil',
                'image_url' => asset('images/victory.jpg'),
                'website' => 'https://www.victoryhoteis.com/',
                'phone' => '+553232491851'
            ],
            [
                'name' => 'Wine and Books Lisboa Hotel',
                'location' => 'Travessa da Memória, 56, Lisboa, Ajuda, Portugal',
                'image_url' => asset('images/wineandbooks.jpg'),
                'website' => 'https://lisboa.winebookshotels.com/en/',
                'phone' => '+351211566250'
            ],
            [
                'name' => 'Copacabana Palace',
                'location' => 'Atlântica Avenue, 1702, Rio de Janeiro, Rio de Janeiro, Brazil',
                'image_url' => asset('images/copacabana.jpg'),
                'website' => 'https://www.belmond.com/hotels/south-america/brazil/rio-de-janeiro/belmond-copacabana-palace/?utm_source=local_search&utm_medium=link&utm_campaign=google_business',
                'phone' => '+55212548-7070'
            ],
            [
                'name' => 'Ibis Budget Afonso Pena',
                'location' => 'Rio Grande do Norte Street, 784, Belo Horizonte, Minas Gerais, Brazil',
                'image_url' => asset('images/ibis.jpg'),
                'website' => 'https://all.accor.com/hotel/8527/index.pt-br.shtml?utm_campaign=seo+maps&utm_medium=seo+maps&utm_source=google+Maps',
                'phone' => '+553121084750'
            ],
            [
                'name' => 'Hotel Ciudad de Burgos',
                'location' => 'N-I, km 249, 09199 Rubena, Burgos, Spain',
                'image_url' => asset('images/malibu.jpg'),
                'website' => 'https://www.hotelciudaddeburgos.com/pt/?utm_source=%20googlemybusiness_ficha%20&utm_medium=organic&utm_content=bur&utm_campaign=googlemybusiness',
                'phone' => '+34947431041'
            ],
        ]);
    }
}
