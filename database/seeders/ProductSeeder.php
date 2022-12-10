<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'code' => 'jXuZv536fQ',
            'name' => 'Juego de Herramientas Makita E-10899',
            'description' => 'Set de herramientas manuales de 76 piezas con llave de carraca 3/8”, destornillador manual de 1/4", alicates de punta de aguja de 150mm, martillo de 180mm.',
            'price' => 79900,
            'measure' => 'Única',
            'stock' => 8,
            'category_id' => 1,
            'image_path' => 'https://http2.mlstatic.com/D_NQ_NP_802627-MLC50631526827_072022-O.webp'
        ]);

        Product::create([
            'code' => 'RWBYyEnfbz',
            'name' => 'Taladro percutor inalámbrico de 13mm Makita',
            'description' => 'Su mandril de 13 mm te permitirá manipular fácilmente la herramienta de manera segura. Versatilidad y eficiencia',
            'price' => 140000,
            'measure' => 'Estándar',
            'stock' => 16,
            'category_id' => 1,
            'image_path' => 'https://http2.mlstatic.com/D_NQ_NP_865513-MLA47522410499_092021-O.webp'
        ]);


        Product::create([
            'code' => 'erJ24zqgLL',
            'name' => 'Martillo Geologico Estwing 22 Oz',
            'description' => 'Martillo geologico Estwing, 22 Oz
            Original, fabricado en EEUU.
            Pesa en total 960 gr (peso de la cabeza 22 Oz), mide 33 cm de largo.
            Fabricado en una pieza de acero, sin uniones. Alta resistencia y durabilidad.',
            'price' => 79990,
            'measure' => '33CM',
            'stock' => 5,
            'category_id' => 2,
            'image_path' => 'https://http2.mlstatic.com/D_NQ_NP_675745-MLC51656971156_092022-O.webp'
        ]);

        Product::create([
            'code' => '6N6eYkm8xA',
            'name' => 'Kit Eléctrico Cautín 220v 60w Regulable 7 Pcs',
            'description' => 'El kit Incluye:
            Cautin soldador x 1, Mutitester digital x1, Bomba desoldadora x 1, Puntas de soldador diferentes x 5 , Tubo de alambre de estaño x 1 ySoporte de soldador x 1.',
            'price' => 15990,
            'measure' => 'Única',
            'stock' => 12,
            'category_id' => 3,
            'image_path' => 'https://http2.mlstatic.com/D_NQ_NP_708676-MLC41777941465_052020-O.webp'
        ]);

        Product::create([
            'code' => 'bJpkdft7iF',
            'name' => 'Multímetro Digital Profesional UT89X',
            'description' => 'La serie UT89X también tiene las funciones del multímetro tradicional para medir corriente y voltaje, resistencia, condensador y frecuencia.',
            'price' => 32990,
            'measure' => 'Única',
            'stock' => 30,
            'category_id' => 3,
            'image_path' => 'https://cdn.shopify.com/s/files/1/0100/8985/7105/products/multimetro-digital-profesional-nct-ut89x-525755_800x.jpg?v=1668220298'
        ]);

        Product::create([
            'code' => 'TSEqavuwQq',
            'name' => 'Guantes De Uso Guantes De Corte Comfort Par 3m M Grip Goma',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio eius temporibus quas amet quo rem molestias reiciendis esse ipsam sequi eum totam nisi fugit voluptas cum, eligendi, laudantium culpa perferendis!',
            'price' => 14990,
            'measure' => 'Estándar',
            'stock' => 20,
            'category_id' => 6,
            'image_path' => 'https://http2.mlstatic.com/D_NQ_NP_636527-CBT51104078984_082022-O.webp'
        ]);


        Product::create([
            'code' => 'Hz3pfjHEY7',
            'name' => 'Zapato de Seguridad Hombre Quebec 670',
            'description' => 'Zapato de seguridad de horna normal con un material de cuero',
            'price' => 33500,
            'measure' => '43',
            'stock' => 4,
            'category_id' => 4,
            'image_path' => 'https://falabella.scene7.com/is/image/Falabella/7945256_1?wid=800&hei=800&qlt=70'
        ]);


        Product::create([
            'code' => 'tLzYTj8DAR',
            'name' => 'Torno Mecanico Paralelo 1 metro FI-1340AZJ',
            'description' => 'Accesorios standard* Plato universal* Plato de 4 garras* Luneta fija y móvil* Plato liso* Centros fijos* Cono adaptador husillo* Lámpara* Bomba refrigeración* Freno de Pedal* Herramientas
            Este equipo requiere Instalación o Puesta en marcha.',
            'price' => 7000000,
            'measure' => '1M',
            'stock' => 3,
            'category_id' => 8,
            'image_path' => 'https://aco.cl/imagenes/productos/048606.jpg'
        ]);
    }
}
