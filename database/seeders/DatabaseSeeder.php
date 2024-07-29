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
            ['tipo_usuario' => 'cliente'],
            ['tipo_usuario' => 'admin']
        ]);


        DB::table('tipo_marcas')->insert([
            ['nombre' => 'Nike'],
            ['nombre' => 'Adidas'],
            ['nombre' => 'Puma'],
        ]);

        DB::table('domicilios')->insert([
            [
                'direccion' => 'Av de Mayo',
                'altura' => 623,
                'piso' => 2,
                'nroDepto' => 'B',
            ],
          
            [
                'direccion' => 'Av. Rivadavia',
                'altura' => 2096,
                'piso' => 10,
                'nroDepto' => 'A',
            ],
            [
                'direccion' => 'Carabobo',
                'altura' => 782,
                'piso' => 6,
                'nroDepto' => 'G',
            ],
        ]);



        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => '12345678',
            'fk_tipo_usuario' => '1',
            'fk_domicilio' => '1',
        ]);

        DB::table('tipo_talles')->insert([
            ['nombre_talle' => 'S'],
            ['nombre_talle' => 'M'],
            ['nombre_talle' => 'L'],
            ['nombre_talle' => 'XL'],
        ]);

        DB::table('equipos')->insert([
            ['nombre' => 'Arsenal'],
            ['nombre' => 'Atlético de Madrid'],
            ['nombre' => 'Barcelona'],
            ['nombre' => 'Bayern Munich'],
            ['nombre' => 'Benfica'],
            ['nombre' => 'Borussia Dortmund'],
            ['nombre' => 'Chelsea'],
            ['nombre' => 'Inter de Milán'],
            ['nombre' => 'Juventus'],
            ['nombre' => 'Liverpool'],
            ['nombre' => 'Manchester United'],
            ['nombre' => 'Milan'],
            ['nombre' => 'PSG'],
            ['nombre' => 'Real Madrid'],
            ['nombre' => 'Tottenham'],
        ]);

        DB::table('camisetas')->insert([
            [
                'fk_tipo_marca' => '1', // Nike
                'fk_equipo' => '1', // Arsenal
                'nombre' => 'Camiseta Titular Arsenal "24',
                'precio' => 89999,
                'Descripcion' => 'Revive la pasión del fútbol con la camiseta titular del Arsenal para la temporada 2024. Este diseño emblemático celebra el orgullo y la tradición del equipo con un estilo moderno y elegante. La camiseta está confeccionada con materiales de alta calidad que garantizan comodidad y durabilidad durante cada partido.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fk_tipo_marca' => '1', // Nike
                'fk_equipo' => '2', // Atlético de Madrid
                'nombre' => 'Camiseta Titular Atlético de Madrid "24',
                'precio' => 89999,
                'Descripcion' => 'Vístete como los colchoneros con la camiseta titular del Atlético de Madrid para la temporada 2024. Con un diseño distintivo que refleja la pasión del equipo, esta camiseta está hecha con materiales de primera calidad para proporcionar un ajuste cómodo y soporte durante los partidos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fk_tipo_marca' => '1', // Nike
                'fk_equipo' => '3', // Barcelona
                'nombre' => 'Camiseta Titular Barcelona "24',
                'precio' => 89999,
                'Descripcion' => 'La camiseta titular del Barcelona para la temporada 2024 combina la tradición del club con un toque moderno. Hecha con tecnología de vanguardia, esta camiseta asegura confort y rendimiento en cada partido.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fk_tipo_marca' => '2', // Adidas
                'fk_equipo' => '4', // Bayern Munich
                'nombre' => 'Camiseta Titular Bayern Munich "24',
                'precio' => 89999,
                'Descripcion' => 'La camiseta titular del Bayern Munich para la temporada 2024 destaca por su diseño audaz y su tecnología avanzada. Ideal para mostrar tu apoyo al gigante alemán con estilo y comodidad.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fk_tipo_marca' => '2', // Adidas
                'fk_equipo' => '5', // Benfica
                'nombre' => 'Camiseta Titular Benfica "24',
                'precio' => 89999,
                'Descripcion' => 'La camiseta titular del Benfica para la temporada 2024 ofrece un diseño clásico con un toque moderno. Confeccionada con materiales de alta calidad, proporciona comodidad y estilo a los aficionados.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fk_tipo_marca' => '3', // Puma
                'fk_equipo' => '6', // Borussia Dortmund
                'nombre' => 'Camiseta Titular Borussia Dortmund "24',
                'precio' => 89999,
                'Descripcion' => 'Destaca con la camiseta titular del Borussia Dortmund para la temporada 2024. Con un diseño vibrante y tecnología de vanguardia, esta camiseta te asegura comodidad y estilo mientras apoyas a tu equipo.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fk_tipo_marca' => '1', // Nike
                'fk_equipo' => '7', // Chelsea
                'nombre' => 'Camiseta Titular Chelsea "24',
                'precio' => 89999,
                'Descripcion' => 'La camiseta titular del Chelsea para la temporada 2024 combina innovación y tradición. Fabricada con materiales de alta tecnología para garantizar el mejor rendimiento en el campo.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fk_tipo_marca' => '1', // Nike
                'fk_equipo' => '8', // Inter de Milán
                'nombre' => 'Camiseta Titular Inter de Milán "24',
                'precio' => 89999,
                'Descripcion' => 'La camiseta titular del Inter de Milán para la temporada 2024 refleja el orgullo y la historia del club. Diseñada para ofrecer máximo confort y un ajuste perfecto.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fk_tipo_marca' => '2', // Adidas
                'fk_equipo' => '9', // Juventus
                'nombre' => 'Camiseta Titular Juventus "24',
                'precio' => 89999,
                'Descripcion' => 'La camiseta titular de la Juventus para la temporada 2024 ofrece un diseño elegante y moderno. Hecha con materiales premium para asegurar comodidad y estilo tanto dentro como fuera del campo.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fk_tipo_marca' => '1', // Nike
                'fk_equipo' => '10', // Liverpool
                'nombre' => 'Camiseta Titular Liverpool "24',
                'precio' => 89999,
                'Descripcion' => 'La camiseta titular del Liverpool para la temporada 2024 destaca por su diseño icónico y su confort excepcional. Ideal para los aficionados que desean apoyar a su equipo con estilo.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fk_tipo_marca' => '2', // Adidas
                'fk_equipo' => '11', // Manchester United
                'nombre' => 'Camiseta Titular Manchester United "24',
                'precio' => 89999,
                'Descripcion' => 'La camiseta titular del Manchester United para la temporada 2024 combina el estilo clásico del club con tecnología moderna. Diseñada para ofrecer el mejor rendimiento y comodidad.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fk_tipo_marca' => '3', // Puma
                'fk_equipo' => '12', // Milan
                'nombre' => 'Camiseta Titular Milan "24',
                'precio' => 89999,
                'Descripcion' => 'La camiseta titular del Milan para la temporada 2024 ofrece un diseño distintivo y materiales de alta calidad para garantizar confort y un ajuste perfecto.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fk_tipo_marca' => '1', // Nike
                'fk_equipo' => '13', // PSG
                'nombre' => 'Camiseta Titular PSG "24',
                'precio' => 89999,
                'Descripcion' => 'La camiseta titular del PSG para la temporada 2024 destaca por su diseño elegante y su tecnología de alto rendimiento. Perfecta para mostrar tu apoyo al equipo francés con estilo.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fk_tipo_marca' => '2', // Adidas
                'fk_equipo' => '14', // Real Madrid
                'nombre' => 'Camiseta Titular Real Madrid "24',
                'precio' => 89999,
                'Descripcion' => 'La camiseta titular del Real Madrid para la temporada 2024 combina tradición y modernidad. Confeccionada con materiales premium, ofrece comodidad y un estilo inigualable.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'fk_tipo_marca' => '1', // Nike
                'fk_equipo' => '15', // Tottenham
                'nombre' => 'Camiseta Titular Tottenham "24',
                'precio' => 89999,
                'Descripcion' => 'La camiseta titular del Tottenham para la temporada 2024 presenta un diseño moderno y elegante. Hecha con materiales de alta calidad para asegurar un ajuste cómodo y duradero.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('imagencamisetas')->insert([
      
            [
                'url_img' => 'imagenes/atletico-madrid1.png',
                'fk_camiseta' => 2,
            ],
            [
                'url_img' => 'imagenes/barcelona1.png',
                'fk_camiseta' => 3,
            ],
            [
                'url_img' => 'imagenes/bayern-munich1.png',
                'fk_camiseta' => 4,
            ],
            [
                'url_img' => 'imagenes/benfica1.png',
                'fk_camiseta' => 5,
            ],
            [
                'url_img' => 'imagenes/borussia-dortmund1.png',
                'fk_camiseta' => 6,
            ],
            [
                'url_img' => 'imagenes/chelsea1.png',
                'fk_camiseta' => 7,
            ],
            [
                'url_img' => 'imagenes/inter1.png',
                'fk_camiseta' => 8,
            ],
            [
                'url_img' => 'imagenes/juventus1.png',
                'fk_camiseta' => 9,
            ],
            [
                'url_img' => 'imagenes/liverpool1.png',
                'fk_camiseta' => 10,
            ],
            [
                'url_img' => 'imagenes/manchester-united1.png',
                'fk_camiseta' => 11,
            ],
            [
                'url_img' => 'imagenes/psg1.png',
                'fk_camiseta' => 13,
            ],
            [
                'url_img' => 'imagenes/real-madrid1.png',
                'fk_camiseta' => 14,
            ],
       
        ]);
    }

    

}
