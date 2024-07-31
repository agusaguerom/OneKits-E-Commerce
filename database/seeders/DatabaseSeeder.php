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
            'fk_tipo_usuario' => '2',
            'fk_domicilio' => '1',
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'adminadmin',
            'fk_tipo_usuario' => '2',
            'fk_domicilio' => '2',
        ]);
        User::factory()->create([
            'name' => 'Juan Cruz',
            'email' => 'juanCz@gmail.com',
            'password' => '11223344',
            'fk_tipo_usuario' => '1',
            'fk_domicilio' => '3',
        ]);

        DB::table('tipo_talles')->insert([
            ['nombre_talle' => 'S'],
            ['nombre_talle' => 'M'],
            ['nombre_talle' => 'L'],
            ['nombre_talle' => 'XL'],
        ]);
        DB::table('talle_calzados')->insert([
            ['nombre_talle' => '39'],
            ['nombre_talle' => '41'],
            ['nombre_talle' => '43'],
            ['nombre_talle' => '44'],
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
                'url_img' => 'imagenes/arsenal1.png',
                'fk_camiseta' => 1,
            ],
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
                'url_img' => 'imagenes/milan1.png',
                'fk_camiseta' => 12,
            ],
            [
                'url_img' => 'imagenes/tottenham1.png',
                'fk_camiseta' => 15,
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
       
        ]
    
    );
    DB::table('botines')->insert([
        // 1-Nike 2-Adidas 3-Puma
        [
            'fk_tipo_marca' => '1',
            'nombre' => 'Botines Nike Zoom Mercurial',
            'precio' => 157999,
            'Descripcion' => 'Material exterior: tejido Vaporposite+, combina una malla de rejilla con agarre y un material de primera calidad para un control óptimo. Tejido FlyKnit envuelve el tobillo con una tela suave elástica. Tapones de tres estrellas que proporcionan tracción multidireccional en cada paso. Plantilla acolchada. Unidad Zoom Air de 3/4 de longitud se encuentra en la suela exterior y proporciona un nivel adicional de amortiguación elástica debajo del pie que te ayuda a moverte más rápido en el campo. Tipo de cancha: césped corto y ligeramente húmedos. Tipo de ajuste: cordones.',
        ],
        [
            'fk_tipo_marca' => '1',
            'nombre' => 'Botines Nike Phantom',
            'precio' => 154999,
            'Descripcion' => 'Material exterior: sintético. Tipo de ajuste: cordones asimétricos. Para uso en canchas de césped corto ligeramente mojados. El patrón de tracción Nike Cyclone 360 te ayuda a realizar movimientos más rápidos y seguros (ayuda a reducir la tracción rotacional). Plantilla acolchada. Textura micromoldeada que funciona con Gripknit: un material pegajoso que brinda un toque excepcional a la pelota.',
        ],
        [
            'fk_tipo_marca' => '2',
            'nombre' => 'Botines Adidas Predator Elite',
            'precio' => 155000,
            'Descripcion' => 'Material exterior: superior HybridTouch 2.0 con elementos Strikeskin. Tipo de ajuste: cordones. Ajuste regular. Lengüeta plegable con correa. Suela para terreno firme Controlframe 2.0. Contiene al menos un 20% de contenido reciclado. Origen: importado.',
        ],
        [
            'fk_tipo_marca' => '2',
            'nombre' => 'Botines Adidas Predator 94',
            'precio' => 120999,
            'Descripcion' => 'Material exterior: cuero sintético Fusionskin. Ajuste clásico. Tipo de ajuste: cordones. Suela para terreno firme Controlframe 2.0.',
        ],
        [
            'fk_tipo_marca' => '2',
            'nombre' => 'Botines Adidas X Crazyfast',
            'precio' => 149999,
            'Descripcion' => 'Ajuste clásico. Tipo de ajuste: cordones. Aeropacity Speedskin. Cuello en tejido adidas Primeknit. Refuerzo de talón en carbono. Suela Speedframe liviana. Contienen al menos un 20% de material reciclado.',
        ],
        [
            'fk_tipo_marca' => '2',
            'nombre' => 'Botines Adidas X Crazyfast Messi',
            'precio' => 176999,
            'Descripcion' => 'Material exterior: tejido Aeropacity Speedskin y tejido PRIMEKNIT en la zona del tobillo. Horma clásica. Tipo de ajuste: cordones. Suela Speedframe, proporciona mayor impulso y dinamismo. Luce 3 estrellas doradas en el talón, su famoso número 10 y la inscripción "G.O.A.T." Tipo de cancha: terreno firme. La parte superior contiene al menos un 50% de material reciclado.',
        ],
        [
            'fk_tipo_marca' => '3',
            'nombre' => 'Botines Future FG/AG',
            'precio' => 132999,
            'Descripcion' => 'Empeine suave altamente técnico. Zonas Advanced Creator para proporcionar un tacto superior en las zonas de contacto claves. Suela exterior con Dynamic Motion System que aporta sujeción y libertad de movimiento. Configuración de remaches avanzada para mejorar la tracción multidireccional. Aptos para usar en superficies naturales firmes y pasto artificial. Logotipo PUMA Cat en la puntera. Logotipo PUMA Cat en el talón. Estilo PUMA juvenil: recomendado para niños más grandes de 8 a 16 años.',
        ],
        [
            'fk_tipo_marca' => '3',
            'nombre' => 'Botines Borussia G',
            'precio' => 124999,
            'Descripcion' => 'Empeine de material sintético de alta calidad para un ajuste perfecto. Zonas de tracción específicas para mejorar el rendimiento en campo. Suela con tecnología de soporte para estabilidad y confort. Diseño de remaches optimizado para tracción en superficies firmes y césped artificial. Logotipo PUMA en el lateral y en la puntera. Diseño elegante y deportivo, ideal para jugadores que buscan un equilibrio entre estilo y funcionalidad.',
        ],
    ]);
    

    DB::table('imagenbotins')->insert([
      
        [
            'url_img' => 'imagenes/nikezoom.png',
            'fk_botin' => 1,
        ],
        [
            'url_img' => 'imagenes/nikephantom.png',
            'fk_botin' => 2,
        ],
        [
            'url_img' => 'imagenes/adidaspredator.png',
            'fk_botin' => 3,
        ],
        [
            'url_img' => 'imagenes/adidascrazyfast.png',
            'fk_botin' => 4,
        ],
        [
            'url_img' => 'imagenes/adidascrazyfast2.png',
            'fk_botin' => 5,
        ],
        [
            'url_img' => 'imagenes/adidaspredator94.png',
            'fk_botin' => 6,
        ],
        [
            'url_img' => 'imagenes/pumafuture.png',
            'fk_botin' => 7,
        ],
        [
            'url_img' => 'imagenes/pumaborussia.png',
            'fk_botin' => 8,
        ],
        ]);
        
    }

    

}
