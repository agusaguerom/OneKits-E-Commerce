<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('tipo_usuarios')->insert([
            ['tipo_usuario' => 'admin'],
            ['tipo_usuario' => 'cliente']
        ]);

        DB::table('domicilios')->insert([
            ['direccion' => 'Av Belgrano', 'altura' => 123, 'piso' => 1, 'nroDepto' => 'A'],
            ['direccion' => 'Avenida Siempre Viva', 'altura' => 742, 'piso' => 2, 'nroDepto' => 'B'],

        ]);
        DB::table('equipos')->insert([
            ['nombre' => 'Real Madrid'],
            ['nombre' => 'FC Barcelona'],
            ['nombre' => 'Manchester United'],
            ['nombre' => 'Liverpool FC'],
            ['nombre' => 'Bayern Munich'],
            ['nombre' => 'Paris Saint-Germain'],
            ['nombre' => 'Juventus'],
            ['nombre' => 'Chelsea FC'],
            ['nombre' => 'AC Milan'],
            ['nombre' => 'Arsenal FC'],
            ['nombre' => 'Atletico Madrid'],
            ['nombre' => 'Inter Milan'],
            ['nombre' => 'Tottenham Hotspur'],
            ['nombre' => 'Borussia Dortmund'],
            ['nombre' => 'Benfica'],

        ]);

        DB::table('tipo_talles')->insert([
            ['nombre_talle' => 'S'],
            ['nombre_talle' => 'M'],
            ['nombre_talle' => 'L'],
            ['nombre_talle' => 'XL'],
        ]);


        DB::table('tipo_marcas')->insert([
            ['nombre' => 'Nike'],
            ['nombre' => 'Adidas'],
            ['nombre' => 'Puma'],
            ['nombre' => 'Under Armour'],
            ['nombre' => 'New Balance'],
            ['nombre' => 'Kappa'],
            ['nombre' => 'Umbro'],
            ['nombre' => 'Reebok'],
     
        ]);

        DB::table('camisetas')->insert([
            [
                'fk_tipo_marca' => 2, // Adidas
                'fk_equipo' => 1, // Real Madrid
                'nombre' => 'Camiseta Titular Real Madrid 2024',
                'precio' => 89,
                'descripcion' => 'La camiseta titular del Real Madrid para la temporada 2024. Fabricada con tecnología Dri-FIT para mantenerte seco y cómodo. Con un diseño elegante en blanco con detalles dorados, es una prenda ideal tanto para los partidos como para el uso diario.'
            ],
            [
                'fk_tipo_marca' => 1, // Nike
                'fk_equipo' => 2, // FC Barcelona
                'nombre' => 'Camiseta Titular FC Barcelona 2024',
                'precio' => 85,
                'descripcion' => 'La camiseta titular del FC Barcelona para la temporada 2024, diseñada por Adidas. Con el característico color azulgrana y el escudo del club en el pecho, esta camiseta es perfecta para mostrar tu apoyo al equipo. Hecha de material Climalite para mantenerte fresco y seco.'
            ],
            [
                'fk_tipo_marca' => 2, // Adidas
                'fk_equipo' => 3, // Manchester United
                'nombre' => 'Camiseta Titular Manchester United 2024',
                'precio' => 92,
                'descripcion' => 'Camiseta titular del Manchester United para la temporada 2024. Diseñada por Puma, presenta un acabado en rojo intenso y el escudo del club bordado. Ideal para los fanáticos del equipo, esta camiseta ofrece una comodidad excepcional gracias a la tecnología de ventilación avanzada.'
            ],
            [
                'fk_tipo_marca' => 1, // Nike
                'fk_equipo' => 4, // Liverpool FC
                'nombre' => 'Camiseta Titular Liverpool FC 2024',
                'precio' => 90,
                'descripcion' => 'La camiseta titular del Liverpool FC para 2024, creada por Under Armour. Con un diseño en rojo clásico y detalles en blanco, esta camiseta proporciona comodidad y estilo. Hecha con tecnología HeatGear para mantenerte fresco durante el juego.'
            ],
            [
                'fk_tipo_marca' => 2, // Adidas
                'fk_equipo' => 5, // Bayern Munich
                'nombre' => 'Camiseta Titular Bayern Munich 2024',
                'precio' => 95,
                'descripcion' => 'Camiseta titular del Bayern Munich para la temporada 2024, fabricada por New Balance. Con un vibrante color rojo y detalles dorados, esta camiseta combina elegancia y funcionalidad. Ideal para los apasionados del club bávaro.'
            ],
            [
                'fk_tipo_marca' =>  1, // Nike
                'fk_equipo' => 6, // Paris Saint-Germain
                'nombre' => 'Camiseta Titular Paris Saint-Germain 2024',
                'precio' => 88,
                'descripcion' => 'La camiseta titular del Paris Saint-Germain para la temporada 2024, diseñada por Kappa. Con un elegante diseño en azul oscuro y detalles en rojo, es perfecta para los seguidores del PSG. Hecha con materiales de alta calidad para mayor durabilidad.'
            ],
            [
                'fk_tipo_marca' => 2, // Adidas
                'fk_equipo' => 7, // Juventus
                'nombre' => 'Camiseta Titular Juventus 2024',
                'precio' => 87,
                'descripcion' => 'Camiseta titular de la Juventus para 2024, fabricada por Umbro. Con un diseño clásico en blanco y negro a rayas, esta camiseta ofrece una comodidad inigualable y un look auténtico para los seguidores del club italiano.'
            ],
            [
                'fk_tipo_marca' => 1, // Nike
                'fk_equipo' => 8, // Chelsea FC
                'nombre' => 'Camiseta Titular Chelsea FC 2024',
                'precio' => 93,
                'descripcion' => 'Camiseta titular del Chelsea FC para la temporada 2024, diseñada por Reebok. Con un vibrante color azul y detalles en blanco, esta camiseta está hecha de material ligero y transpirable, ideal para cualquier fanático del club londinense.'
            ],
            [
                'fk_tipo_marca' => 3, // Puma
                'fk_equipo' => 9, // AC Milan
                'nombre' => 'Camiseta Titular AC Milan 2024',
                'precio' => 91,
                'descripcion' => 'La camiseta titular del AC Milan para 2024, fabricada por Nike. Con un diseño en rojo y negro a rayas verticales, esta camiseta es un clásico que refleja la historia y el estilo del club italiano. Ideal para mostrar tu apoyo en cualquier ocasión.'
            ],
            [
                'fk_tipo_marca' => 2, // Adidas
                'fk_equipo' => 10, // Arsenal FC
                'nombre' => 'Camiseta Titular Arsenal FC 2024',
                'precio' => 86,
                'descripcion' => 'Camiseta titular del Arsenal FC para la temporada 2024, creada por Adidas. Con el característico color rojo y detalles en blanco, esta camiseta está hecha con materiales que aseguran comodidad y estilo para los fanáticos del club londinense.'
            ],
            [
                'fk_tipo_marca' => 1, // Nike
                'fk_equipo' => 11, // Atletico Madrid
                'nombre' => 'Camiseta Titular Atletico Madrid 2024',
                'precio' => 89,
                'descripcion' => 'La camiseta titular del Atlético de Madrid para la temporada 2024, diseñada por Puma. Con un diseño en rojo y blanco, esta camiseta ofrece una gran comodidad y un estilo inconfundible, perfecto para los seguidores del club español.'
            ],
            [
                'fk_tipo_marca' => 1, //Nike
                'fk_equipo' => 12, // Inter Milan
                'nombre' => 'Camiseta Titular Inter Milan 2024',
                'precio' => 92,
                'descripcion' => 'Camiseta titular del Inter de Milán para 2024, fabricada por Under Armour. Con un diseño en azul y negro, esta camiseta combina elegancia y tecnología avanzada para proporcionar una gran comodidad y estilo.'
            ],
            [
                'fk_tipo_marca' => 1, //Nike
                'fk_equipo' => 13, // Tottenham Hotspur
                'nombre' => 'Camiseta Titular Tottenham Hotspur 2024',
                'precio' => 87,
                'descripcion' => 'La camiseta titular del Tottenham Hotspur para la temporada 2024, diseñada por New Balance. Con un diseño en blanco con detalles en azul, esta camiseta está fabricada con materiales ligeros y duraderos, ideal para los fanáticos del equipo londinense.'
            ],
            [
                'fk_tipo_marca' => 3, //Puma
                'fk_equipo' => 14, // Borussia Dortmund
                'nombre' => 'Camiseta Titular Borussia Dortmund 2024',
                'precio' => 90,
                'descripcion' => 'Camiseta titular del Borussia Dortmund para la temporada 2024, creada por Kappa. Con un diseño amarillo brillante y detalles en negro, esta camiseta es perfecta para mostrar tu pasión por el club alemán, hecha con materiales que aseguran confort y durabilidad.'
            ],
            [
                'fk_tipo_marca' => 2, // Adidas
                'fk_equipo' => 15, // Benfica
                'nombre' => 'Camiseta Titular Benfica 2024',
                'precio' => 84,
                'descripcion' => 'Camiseta titular del Benfica para 2024, diseñada por Umbro. Con un diseño en rojo con detalles en blanco, esta camiseta es ideal para los seguidores del club portugués, hecha con tejidos transpirables y confortables para el uso diario.'
            ],
        ]);
        DB::table('camiseta_talle_stock')->insert([
            // Camiseta 1: Real Madrid 2024
            ['fk_camiseta' => 1, 'fk_tipo_talle' => 1, 'stock' => 50], // Talle S
            ['fk_camiseta' => 1, 'fk_tipo_talle' => 2, 'stock' => 45], // Talle M
            ['fk_camiseta' => 1, 'fk_tipo_talle' => 3, 'stock' => 40], // Talle L

            // Camiseta 2: FC Barcelona 2024
            ['fk_camiseta' => 2, 'fk_tipo_talle' => 1, 'stock' => 55], // Talle S
            ['fk_camiseta' => 2, 'fk_tipo_talle' => 2, 'stock' => 50], // Talle M
            ['fk_camiseta' => 2, 'fk_tipo_talle' => 3, 'stock' => 42], // Talle L

            // Camiseta 3: Manchester United 2024
            ['fk_camiseta' => 3, 'fk_tipo_talle' => 1, 'stock' => 48], // Talle S
            ['fk_camiseta' => 3, 'fk_tipo_talle' => 2, 'stock' => 44], // Talle M
            ['fk_camiseta' => 3, 'fk_tipo_talle' => 3, 'stock' => 37], // Talle L

            // Camiseta 4: Liverpool FC 2024
            ['fk_camiseta' => 4, 'fk_tipo_talle' => 1, 'stock' => 53], // Talle S
            ['fk_camiseta' => 4, 'fk_tipo_talle' => 2, 'stock' => 49], // Talle M
            ['fk_camiseta' => 4, 'fk_tipo_talle' => 3, 'stock' => 41], // Talle L

            // Camiseta 5: Bayern Munich 2024
            ['fk_camiseta' => 5, 'fk_tipo_talle' => 1, 'stock' => 46], // Talle S
            ['fk_camiseta' => 5, 'fk_tipo_talle' => 2, 'stock' => 43], // Talle M
            ['fk_camiseta' => 5, 'fk_tipo_talle' => 3, 'stock' => 35], // Talle L

            // Camiseta 6: Paris Saint-Germain 2024
            ['fk_camiseta' => 6, 'fk_tipo_talle' => 1, 'stock' => 50], // Talle S
            ['fk_camiseta' => 6, 'fk_tipo_talle' => 2, 'stock' => 47], // Talle M
            ['fk_camiseta' => 6, 'fk_tipo_talle' => 3, 'stock' => 40], // Talle L

            // Camiseta 7: Juventus 2024
            ['fk_camiseta' => 7, 'fk_tipo_talle' => 1, 'stock' => 52], // Talle S
            ['fk_camiseta' => 7, 'fk_tipo_talle' => 2, 'stock' => 46], // Talle M
            ['fk_camiseta' => 7, 'fk_tipo_talle' => 3, 'stock' => 38], // Talle L

            // Camiseta 8: Chelsea FC 2024
            ['fk_camiseta' => 8, 'fk_tipo_talle' => 1, 'stock' => 54], // Talle S
            ['fk_camiseta' => 8, 'fk_tipo_talle' => 2, 'stock' => 48], // Talle M
            ['fk_camiseta' => 8, 'fk_tipo_talle' => 3, 'stock' => 42], // Talle L

            // Camiseta 9: AC Milan 2024
            ['fk_camiseta' => 9, 'fk_tipo_talle' => 1, 'stock' => 49], // Talle S
            ['fk_camiseta' => 9, 'fk_tipo_talle' => 2, 'stock' => 45], // Talle M
            ['fk_camiseta' => 9, 'fk_tipo_talle' => 3, 'stock' => 39], // Talle L

            // Camiseta 10: Arsenal FC 2024
            ['fk_camiseta' => 10, 'fk_tipo_talle' => 1, 'stock' => 51], // Talle S
            ['fk_camiseta' => 10, 'fk_tipo_talle' => 2, 'stock' => 44], // Talle M
            ['fk_camiseta' => 10, 'fk_tipo_talle' => 3, 'stock' => 36], // Talle L

            // Camiseta 11: Atletico Madrid 2024
            ['fk_camiseta' => 11, 'fk_tipo_talle' => 1, 'stock' => 47], // Talle S
            ['fk_camiseta' => 11, 'fk_tipo_talle' => 2, 'stock' => 43], // Talle M
            ['fk_camiseta' => 11, 'fk_tipo_talle' => 3, 'stock' => 34], // Talle L

            // Camiseta 12: Inter Milan 2024
            ['fk_camiseta' => 12, 'fk_tipo_talle' => 1, 'stock' => 50], // Talle S
            ['fk_camiseta' => 12, 'fk_tipo_talle' => 2, 'stock' => 47], // Talle M
            ['fk_camiseta' => 12, 'fk_tipo_talle' => 3, 'stock' => 39], // Talle L

            // Camiseta 13: Tottenham Hotspur 2024
            ['fk_camiseta' => 13, 'fk_tipo_talle' => 1, 'stock' => 55], // Talle S
            ['fk_camiseta' => 13, 'fk_tipo_talle' => 2, 'stock' => 49], // Talle M
            ['fk_camiseta' => 13, 'fk_tipo_talle' => 3, 'stock' => 43], // Talle L

            // Camiseta 14: Borussia Dortmund 2024
            ['fk_camiseta' => 14, 'fk_tipo_talle' => 1, 'stock' => 51], // Talle S
            ['fk_camiseta' => 14, 'fk_tipo_talle' => 2, 'stock' => 48], // Talle M
            ['fk_camiseta' => 14, 'fk_tipo_talle' => 3, 'stock' => 40], // Talle L

            // Camiseta 15: Benfica 2024
            ['fk_camiseta' => 15, 'fk_tipo_talle' => 1, 'stock' => 53], // Talle S
            ['fk_camiseta' => 15, 'fk_tipo_talle' => 2, 'stock' => 46], // Talle M
            ['fk_camiseta' => 15, 'fk_tipo_talle' => 3, 'stock' => 38], // Talle L
        ]);

        DB::table('imagenes')->insert([
            // Real Madrid
            ['url_imagen' => 'camisetas/real-madrid1.png', 'fk_camisetas' => 1],
            ['url_imagen' => 'camisetas/real-madrid2.png', 'fk_camisetas' => 1],
            
            // FC Barcelona
            ['url_imagen' => 'camisetas/barcelona1.png', 'fk_camisetas' => 2],
            ['url_imagen' => 'camisetas/barcelona2.png', 'fk_camisetas' => 2],
            
            // Manchester United
            ['url_imagen' => 'camisetas/manchester-united1.png', 'fk_camisetas' => 3],
            ['url_imagen' => 'camisetas/manchester-united2.png', 'fk_camisetas' => 3],
            
            // Liverpool FC
            ['url_imagen' => 'camisetas/liverpool1.png', 'fk_camisetas' => 4],
            ['url_imagen' => 'camisetas/liverpool2.png', 'fk_camisetas' => 4],
            
            // Bayern Munich
            ['url_imagen' => 'camisetas/bayern-munich1.png', 'fk_camisetas' => 5],
            ['url_imagen' => 'camisetas/bayern-munich2.png', 'fk_camisetas' => 5],
            
            // Paris Saint-Germain
            ['url_imagen' => 'camisetas/psg1.png', 'fk_camisetas' => 6],
            ['url_imagen' => 'camisetas/psg2.png', 'fk_camisetas' => 6],
            
            // Juventus
            ['url_imagen' => 'camisetas/juventus1.png', 'fk_camisetas' => 7],
            ['url_imagen' => 'camisetas/juventus2.png', 'fk_camisetas' => 7],
            
            // Chelsea FC
            ['url_imagen' => 'camisetas/chelsea1.png', 'fk_camisetas' => 8],
            ['url_imagen' => 'camisetas/chelsea2.png', 'fk_camisetas' => 8],
            
            // AC Milan
            ['url_imagen' => 'camisetas/milan1.png', 'fk_camisetas' => 9],
            ['url_imagen' => 'camisetas/milan2.png', 'fk_camisetas' => 9],
            
            // Arsenal FC
            ['url_imagen' => 'camisetas/arsenal1.png', 'fk_camisetas' => 10],
            ['url_imagen' => 'camisetas/arsenal2.png', 'fk_camisetas' => 10],
            
            // Atletico Madrid
            ['url_imagen' => 'camisetas/atletico-madrid1.png', 'fk_camisetas' => 11],
            ['url_imagen' => 'camisetas/atletico-madrid2.png', 'fk_camisetas' => 11],
            
            // Inter Milan
            ['url_imagen' => 'camisetas/inter1.png', 'fk_camisetas' => 12],
            ['url_imagen' => 'camisetas/inter2.png', 'fk_camisetas' => 12],
            
            // Borussia Dortmund
            ['url_imagen' => 'camisetas/borussia-dortmund1.png', 'fk_camisetas' => 14],
            ['url_imagen' => 'camisetas/borussia-dortmund2.png', 'fk_camisetas' => 14],
            
            // Benfica
            ['url_imagen' => 'camisetas/benfica1.png', 'fk_camisetas' => 15],
            ['url_imagen' => 'camisetas/benfica2.png', 'fk_camisetas' => 15],
            
            // Tottenham Hotspur
            ['url_imagen' => 'camisetas/tottenham1.png', 'fk_camisetas' => 13],
            ['url_imagen' => 'camisetas/tottenham2.png', 'fk_camisetas' => 13],
        ]);

        User::factory()->create([
            'name' => 'admin',
            'email' => 'test@example.com',
            'password' => 'adminadmin',
            'fk_tipo_usuario' => 1,
            'fk_domicilio' => 1
        ]);
        
        User::factory()->create([
            'name' => 'Jose Gomez',
            'email' => 'joseg23@gmail.com',
            'password' => '12345678',
            'fk_tipo_usuario' => 2,
            'fk_domicilio' => 2
        ]);

     
    }
}
