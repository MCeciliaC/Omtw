<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     public function run()
     {
  // USERS
       DB::table('users')->insert([
             'id' => 1,
             'name' => "admin",
             'email' => 'admin@hotmail.com',
             'password' => bcrypt('12345678'),
             'avatar' => 'imgperfil/1.jpg',
             'created_at' => date('Y-m-d H:m:s'),
             'updated_at' => date('Y-m-d H:m:s')
         ]);
         DB::table('users')->insert([
           'id' => 2,
           'name' => "ceci",
           'email' => 'ccy_009@hotmail.com',
           'password' => bcrypt('12345678'),
           'created_at' => date('Y-m-d H:m:s'),
           'updated_at' => date('Y-m-d H:m:s')
           ]);

           DB::table('users')->insert([
                 'id' => 3,
                 'name' => "pablo",
                 'email' => 'pablo@hotmail.com',
                 'password' => bcrypt('12345678'),
                 'created_at' => date('Y-m-d H:m:s'),
                 'updated_at' => date('Y-m-d H:m:s')
             ]);
           // CATEGORY
         DB::table('category')->insert([
           'id' => 1,
           'name' => "Ciencia",
         ]);
         DB::table('category')->insert([
           'id' => 2,
           'name' => "Geografía",
         ]);
         DB::table('category')->insert([
           'id' => 3,
           'name' => "Deportes",
         ]);
         DB::table('category')->insert([
           'id' => 4,
           'name' => "Arte",
         ]);
         DB::table('category')->insert([
           'id' => 5,
           'name' => "Entretenimiento",
         ]);
  // QUESTIONS
       DB::table('questions')->insert([
             'id' => 1,
             'text' => "El agua hierve a 95 grados",
             'value' => '0',
             'category_id' => '1'
         ]);
       DB::table('questions')->insert([
             'id' => 2,
             'text' => "El componente mínimo que compone los seres vivos es la célula",
             'value' => '1',
             'category_id' => '1'
         ]);
       DB::table('questions')->insert([
             'id' => 3,
             'text' => "India tiene mas habitantes que EEUU",
             'value' => '1',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 4,
             'text' => "La capital mas al norte del planeta, es Reikiavik",
             'value' => '1',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 5,
             'text' => "Actualmente hay 1500 volcanes activos en todo el mundo",
             'value' => '1',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 6,
             'text' => "El monte Everest se encuentra en la frontera de China y Nepal",
             'value' => '1',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 7,
             'text' => "El estrecho de Gibraltar separa España y Marruecos",
             'value' => '1',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 8,
             'text' => "Serbia no tiene acceso al Mar Mediterráneo",
             'value' => '1',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 9,
             'text' => "Riga es la capital de Estonia",
             'value' => '0',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 10,
             'text' => "Hay 6 océanos en todo el mundo",
             'value' => '0',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 11,
             'text' => "El mundo, posee 5 continentes",
             'value' => '0',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 12,
             'text' => "El río mas largo del mundo es el Amazonas",
             'value' => '0',
             'category_id' => '2'
         ]);
       DB::table('questions')->insert([
             'id' => 13,
             'text' => "El Desierto de Gobi, se encuenta en África",
             'value' => '0',
             'category_id' => '2'
         ]);
         DB::table('questions')->insert([
          'id' => 14,
          'text' => "El cruce de un asno y una yegua, se llama mulo",
          'value' => '1',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
          'id' => 15,
          'text' => "El tomate es una fruta",
          'value' => '1',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
          'id' => 16,
          'text' => "0,001 gramos es lo mismo que 1000 microgramos",
          'value' => '1',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
          'id' => 17,
          'text' => "Los electrones son particulas con carga negativa",
          'value' => '1',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
          'id' => 18,
          'text' => "El Sol es una estrella",
          'value' => '1',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
          'id' => 19,
          'text' => "La principal función de los globulos rojos, es coagular la sangre",
          'value' => '0',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
          'id' => 20,
          'text' => "La radiación infrarroja, produce quemaduras en la piel",
          'value' => '0',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
          'id' => 21,
          'text' => "Los cromosomas estan formados por ARN",
          'value' => '0',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
          'id' => 22,
          'text' => "La luz viaja a 30000 km/s",
          'value' => '0',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
          'id' => 23,
          'text' => "La Ballena respira por las branquias",
          'value' => '0',
          'category_id' => '1'
          ]);
         DB::table('questions')->insert([
             'id' => 24,
             'text' => "Slatan Ibrahimovic fue el primer sueco en jugar en Barcelona de España",
             'value' => '0',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 25,
             'text' => "El tenis de mesa se invento en Corea del Sur",
             'value' => '0',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 26,
             'text' => "El mundial de futbol del 2002 fue ganado por Italia",
             'value' => '0',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 27,
             'text' => "Richard Petty fue un corredor de F1",
             'value' => '0',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 28,
             'text' => "El estadio de fútbol con mayor capacidad de LatinoAmérica, es el Maracaná de Brasil",
             'value' => '0',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 29,
             'text' => "El giro de Italia, es una competencia de ciclismo",
             'value' => '1',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 30,
             'text' => "Un tiro libre en el Basket, vale 1 punto",
             'value' => '1',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 31,
             'text' => "El Jeet Kune Do fue inventado por Bruce Lee",
             'value' => '1',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 32,
             'text' => "Un Equipo de rubgy esta compuesto por 15 jugadores",
             'value' => '1',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 33,
             'text' => "La Selección Argentina de fútbol, jugo 4 finales del mundo",
             'value' => '1',
             'category_id' => '3'
         ]);
         DB::table('questions')->insert([
             'id' => 34,
             'text' => "Sherlock Holmes vivía en el 221B de Baker Street",
             'value' => '1',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 35,
             'text' => "'El túnel' fue escrito por Ernesto Sábato",
             'value' => '1',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 36,
             'text' => "Una prosopografía describe el físico de una persona",
             'value' => '1',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 37,
             'text' => "Sócrates dijo: 'Solo se que no se nada'",
             'value' => '1',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 38,
             'text' => "Diego Rivera estaba casado con Frida Kahlo",
             'value' => '1',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 39,
             'text' => "El libro 11 minutos fue escrito por Pablo Neruda",
             'value' => '0',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 40,
             'text' => "Un saxofón esta hecho de cobre",
             'value' => '0',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 41,
             'text' => "Steve Vai es el guitarrista de la banda 'Chickenfoot'",
             'value' => '0',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 42,
             'text' => "El museo Domus, está ubicado en San Sebastián",
             'value' => '0',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 43,
             'text' => "La canción 'Maldito Duende', es de la banda española Barón Rojo",
             'value' => '0',
             'category_id' => '4'
         ]);
         DB::table('questions')->insert([
             'id' => 44,
             'text' => "Twitter se fundó en el año 2005",
             'value' => '0',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
             'id' => 45,
             'text' => "John Lennon nació en Londres",
             'value' => '0',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
             'id' => 46,
             'text' => "El disco de 2008 'HardCandy' es de Britney Spears",
             'value' => '0',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
             'id' => 47,
             'text' => "La serie Friends tiene 265 capitulos",
             'value' => '0',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
             'id' => 48,
             'text' => "Jafar es un personaje del Rey León",
             'value' => '0',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
             'id' => 49,
             'text' => "Vivir mi vida, es interpretada por Marc Anthony",
             'value' => '1',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
             'id' => 50,
             'text' => "La canción 'Un mundo ideal' es de Aladdin",
             'value' => '1',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
             'id' => 51,
             'text' => "La mascota de la firma SEGA es Sonic",
             'value' => '1',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
             'id' => 52,
             'text' => "Pinocho se estrenó en 1940",
             'value' => '1',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
             'id' => 53,
             'text' => "En la serie Mad Men, el protagonista es un publicista",
             'value' => '1',
             'category_id' => '5'
         ]);
         DB::table('questions')->insert([
            'id' => 54,
            'text' => "La principal función del intestino grueso es la absorción de nutrientes",
            'value' => '0',
            'category_id' => '1'
        ]);
         DB::table('questions')->insert([
            'id' => 55,
            'text' => "La sublimación, es el paso del estado gaseoso al estado sólido",
            'value' => '0',
            'category_id' => '1'
        ]);
         DB::table('questions')->insert([
            'id' => 56,
            'text' => "La bilis es segregada por el páncreas",
            'value' => '0',
            'category_id' => '1'
        ]);
         DB::table('questions')->insert([
            'id' => 57,
            'text' => "La sacarina se saca del azúcar",
            'value' => '0',
            'category_id' => '1'
        ]);
         DB::table('questions')->insert([
            'id' => 58,
            'text' => "Un icosaedro tiene 24 caras",
            'value' => '0',
            'category_id' => '1'
        ]);
        DB::table('questions')->insert([
            'id' => 59,
            'text' => "Se denomina calostro, a la primer leche materna",
            'value' => '1',
            'category_id' => '1'
        ]);
        DB::table('questions')->insert([
            'id' => 60,
            'text' => "El hueso más pequeño del cuerpo humano, es el estribo",
            'value' => '1',
            'category_id' => '1'
        ]);
        DB::table('questions')->insert([
            'id' => 61,
            'text' => "El estudio de los peces se denomina ictiología",
            'value' => '1',
            'category_id' => '1'
        ]);
        DB::table('questions')->insert([
            'id' => 62,
            'text' => "La leche se transforma en yogurt por una bacteria",
            'value' => '1',
            'category_id' => '1'
        ]);
        DB::table('questions')->insert([
            'id' => 63,
            'text' => "El nivel mas alto del mar se denomina Pleamar",
            'value' => '1',
            'category_id' => '1'
        ]);
        DB::table('questions')->insert([
            'id' => 64,
            'text' => "Argentina limita con 6 paises",
            'value' => '0',
            'category_id' => '2'
        ]);
        DB::table('questions')->insert([
            'id' => 65,
            'text' => "Zurich es la capital de Suiza",
            'value' => '0',
            'category_id' => '2'
        ]);
        DB::table('questions')->insert([
            'id' => 66,
            'text' => "El rio Segura, desemboca en el mar Cantábrico",
            'value' => '0',
            'category_id' => '2'
        ]);
        DB::table('questions')->insert([
            'id' => 67,
            'text' => "Los Angeles, es la capital de California",
            'value' => '0',
            'category_id' => '2'
        ]);
        DB::table('questions')->insert([
            'id' => 68,
            'text' => "Pyongyang es la capital de Corea del Sur",
            'value' => '0',
            'category_id' => '2'
        ]);
        DB::table('questions')->insert([
            'id' => 69,
            'text' => "El inglés, es el idioma oficial de Ghana",
            'value' => '1',
            'category_id' => '2'
        ]);
        DB::table('questions')->insert([
            'id' => 70,
            'text' => "Las torres Petronas, se encuentran en Malasia",
            'value' => '1',
            'category_id' => '2'
        ]);
        DB::table('questions')->insert([
            'id' => 71,
            'text' => "Chad no tiene salida a la costa",
            'value' => '1',
            'category_id' => '2'
        ]);
        DB::table('questions')->insert([
            'id' => 72,
            'text' => "La bandera de China tiene 5 estrellas",
            'value' => '1',
            'category_id' => '2'
        ]);
        DB::table('questions')->insert([
            'id' => 73,
            'text' => "Luxemburgo, es la capital de Luxemburgo",
            'value' => '1',
            'category_id' => '2'
        ]);
        DB::table('questions')->insert([
            'id' => 74,
            'text' => "Fernando Alonso ganó 4 mundiales consecutivos de F1",
            'value' => '0',
            'category_id' => '3'
        ]);
        DB::table('questions')->insert([
            'id' => 75,
            'text' => "Joe Di Maggio se dedicaba al Boxeo",
            'value' => '0',
            'category_id' => '3'
        ]);
        DB::table('questions')->insert([
            'id' => 76,
            'text' => "Una baraja inglesa tiene 50 naipes",
            'value' => '0',
            'category_id' => '3'
        ]);
        DB::table('questions')->insert([
            'id' => 77,
            'text' => "Brasil fue subcampeón en el mundial de fútbol Corea-Japon de 2002",
            'value' => '0',
            'category_id' => '3'
        ]);
        DB::table('questions')->insert([
            'id' => 78,
            'text' => "Fernando Hierro es el jugador con mayor presencias en la Selección Española",
            'value' => '0',
            'category_id' => '3'
        ]);
        DB::table('questions')->insert([
            'id' => 79,
            'text' => "La última prueba de un Decatlón son los 1500 metros",
            'value' => '1',
            'category_id' => '3'
        ]);
        DB::table('questions')->insert([
            'id' => 80,
            'text' => "La MLB es la liga de Baseball",
            'value' => '1',
            'category_id' => '3'
        ]);
        DB::table('questions')->insert([
            'id' => 81,
            'text' => "Los JJ.OO de 2016 se realizaron en Río",
            'value' => '1',
            'category_id' => '3'
        ]);
        DB::table('questions')->insert([
            'id' => 82,
            'text' => "El Sumo es el deporte nacional de Japón",
            'value' => '1',
            'category_id' => '3'
        ]);
        DB::table('questions')->insert([
            'id' => 83,
            'text' => "En golf, 1 yarda son 0.914 metros",
            'value' => '1',
            'category_id' => '3'
        ]);
        DB::table('questions')->insert([
            'id' => 84,
            'text' => "El libro 'Crimen y Castigo' fue escrito por Tolstoi",
            'value' => '0',
            'category_id' => '4'
        ]);
        DB::table('questions')->insert([
            'id' => 85,
            'text' => "Ikebana y Papiroflexia, son sinónimos",
            'value' => '0',
            'category_id' => '4'
        ]);
        DB::table('questions')->insert([
            'id' => 86,
            'text' => "El Corán posee 120 capítulos",
            'value' => '0',
            'category_id' => '4'
        ]);
        DB::table('questions')->insert([
            'id' => 87,
            'text' => "La tragedia de Mac Beth fue inspirada en el Rey de Irlanda",
            'value' => '0',
            'category_id' => '4'
        ]);
        DB::table('questions')->insert([
            'id' => 88,
            'text' => "'Las Meninas' fueron pintadas por Monet",
            'value' => '0',
            'category_id' => '4'
        ]);
        DB::table('questions')->insert([
            'id' => 89,
            'text' => "'El escarabajo de oro' fue una obra de Edgar Allan Poe",
            'value' => '1',
            'category_id' => '4'
        ]);
        DB::table('questions')->insert([
            'id' => 90,
            'text' => "La obra 'El Capital' fue escrita por Karl Marx",
            'value' => '1',
            'category_id' => '4'
        ]);
        DB::table('questions')->insert([
            'id' => 91,
            'text' => "La obra musical 'Las cuatro estaciones' fue escrita por Vivaldi",
            'value' => '1',
            'category_id' => '4'
        ]);
        DB::table('questions')->insert([
            'id' => 92,
            'text' => "La casa de Hansel y Gretel era de chocolate",
            'value' => '1',
            'category_id' => '4'
        ]);
        DB::table('questions')->insert([
            'id' => 93,
            'text' => "'El David' de Miguel Ángel se encuentra en Florencia",
            'value' => '1',
            'category_id' => '4'
        ]);
        DB::table('questions')->insert([
            'id' => 94,
            'text' => "Carlos Regazzoni es un importante pintor argentino",
            'value' => '0',
            'category_id' => '5'
        ]);
        DB::table('questions')->insert([
            'id' => 95,
            'text' => "El juego 'Preguntados', tiene 5 categorías",
            'value' => '0',
            'category_id' => '5'
        ]);
        DB::table('questions')->insert([
            'id' => 96,
            'text' => "La saga de 'El Padrino' esta compuesta por 4 partes",
            'value' => '0',
            'category_id' => '5'
        ]);
        DB::table('questions')->insert([
            'id' => 97,
            'text' => "La canción 'Firework' pertence a Taylor Swift",
            'value' => '0',
            'category_id' => '5'
        ]);
        DB::table('questions')->insert([
            'id' => 98,
            'text' => "Mario y Luigi Bros eran primos ",
            'value' => '0',
            'category_id' => '5'
        ]);
        DB::table('questions')->insert([
            'id' => 99,
            'text' => "Saúl Hudson fue guitarrista de los Guns 'n Roses",
            'value' => '1',
            'category_id' => '5'
        ]);
        DB::table('questions')->insert([
            'id' => 100,
            'text' => "Pete Townshend es el guitarrista de la banda 'The Who'",
            'value' => '1',
            'category_id' => '5'
        ]);
        DB::table('questions')->insert([
            'id' => 101,
            'text' => "El dibujito animado 'Jay-Jay' es un avioncito",
            'value' => '1',
            'category_id' => '5'
        ]);
        DB::table('questions')->insert([
            'id' => 102,
            'text' => "Los Simpsons son la mejor serie animada de la historia",
            'value' => '1',
            'category_id' => '5'
        ]);
        DB::table('questions')->insert([
            'id' => 103,
            'text' => "El tema 'Roxanne' pertence a la banda 'The Police'",
            'value' => '1',
            'category_id' => '5'
        ]);
        DB::table('questions')->insert([
            'id' => 104,
            'text' => "Hoy entregamos el proyecto y se sale fuerte!!",
            'value' => '1',
            'category_id' => '5'
        ]);

        //  LEVELS
        DB::table('levels')->insert([
          'id' => 1,
          'time' => 60,
          'score' => 50,
        ]);
        DB::table('levels')->insert([
            'id' => 2,
            'time' => 40,
            'score' => 100,
        ]);
  }
}
