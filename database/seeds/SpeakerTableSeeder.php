<?php

use Illuminate\Database\Seeder;

class SpeakerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('speakers')->truncate();
    	DB::table('speakers')->insert([
    			'name' => 'Prof. Carlos Alán Sánchez Durán',
    			'role' => 'Cuerpo directivo de escuelas Telesecundarias del Estado de Hidalgo',
    			'title' => 'Telesecundaria, una docencia en favor de personas exitosas',
    			'bloq' => 1,
    			'name_photograph' => 'foto.jpg',
    			'facebook' => 'facebook.com',
    			'twitter' => 'twitter.com',
    			'start' => '9:00:00',
    			'finish' => '9:15:00',
    		]);
    	DB::table('speakers')->insert([
    			'name' => 'Lic. Esteban Moctezuma Barragán',
    			'role' => 'Director de Fundación Azteca',
    			'title' => 'Música e impacto social y cultural',
    			'bloq' => 1,
    			'name_photograph' => 'esteban_moctezuma_barragán.jpg',
    			'facebook' => 'facebook.com',
    			'twitter' => 'twitter.com',
    			'start' => '09:15:00',
    			'finish' => '09:30:00',
    		]);
    	DB::table('speakers')->insert([
                'name' => 'Mtro. Aurelio Nuño Mayer',
                'role' => 'Secretario de Educación Pública',
                'title' => 'Liderazgo y Educación',
                'bloq' => 1,
                'name_photograph' => 'aurelio_nuño_mayer.jpg',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'start' => '09:30:00',
                'finish' => '09:45:00',
            ]);
        DB::table('speakers')->insert([
                'name' => 'Dra. Rebeca Grynspan Mayufis',
                'role' => 'Secretaria General, SEGIB',
                'title' => 'Mujer y emprendimiento',
                'bloq' => 1,
                'name_photograph' => 'rebeca_grynspan.jpg',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'start' => '09:45:00',
                'finish' => '10:00:00',
            ]);
        DB::table('speakers')->insert([
                'name' => 'Lic. Otto Granados Roldán',
                'role' => 'Subsecretario de Planeación, Evaluación y Coordinación SEP',
                'title' => 'Innovación, una apuesta por la educación',
                'bloq' => 1,
                'name_photograph' => 'foto.jpg',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'start' => '10:00:00',
                'finish' => '10:15:00',
            ]);
        DB::table('speakers')->insert([
                'name' => 'Dr. José Luis López Aguirre',
                'role' => 'Profesor Investigador de la Universidad Panamericana y representante del consejo editorial de NOTIMEX',
                'title' => 'Seminario de comunidades Virtuales y Medios Sociales Online',
                'bloq' => 2,
                'name_photograph' => 'jose_luis_lopez_aguirre.jpg',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'start' => '10:15:00',
                'finish' => '10:30:00',
            ]);
        DB::table('speakers')->insert([
                'name' => 'Mtra. Marinela Servitje de Lerdo de Tejada',
                'role' => 'Directora de Fundación Siete Colores',
                'title' => 'Toca, juega y aprende: museos a la inversa',
                'bloq' => 2,
                'name_photograph' => 'marinela_servitje.jpg',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'start' => '10:30:00',
                'finish' => '10:45:00',
            ]);
        DB::table('speakers')->insert([
                'name' => 'Lic. Enrique Bustamante Martínez',
                'role' => 'Presidente de la Academia Mexicana de la Comunicación',
                'title' => 'Comunicación, periodismo digital , educación y tecnología',
                'bloq' => 2,
                'name_photograph' => 'enrique_bustamante_martinez.jpg',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'start' => '10:45:00',
                'finish' => '11:00:00',
            ]);
        DB::table('speakers')->insert([
                'name' => 'Dr. Alejandro Gustavo Piscitelli',
                'role' => 'Docente en el ILCE Divulgador científico',
                'title' => 'Lectautores en la era VUCA: Narrando futuros',
                'bloq' => 2,
                'name_photograph' => 'alejandro_piscitelli.jpg',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'start' => '11:00:00',
                'finish' => '11:15:00',
            ]);
        DB::table('speakers')->insert([
                'name' => 'Arq. Juan Carlos Baumgartner',
                'role' => 'Director del Despacho de arquitectos, Space',
                'title' => '“El diseño de la felicidad”',
                'bloq' => 2,
                'name_photograph' => 'juan_carlos_baumgartner.jpg',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'start' => '11:15:00',
                'finish' => '11:30:00',
            ]);
        DB::table('speakers')->insert([
                'name' => 'Mtra. Alejandra Alicia Lebrija Hirschfeld',
                'role' => 'Presidenta Ejecutiva, Fundación Televisa',
                'title' => 'Responsabilidad Social',
                'bloq' => 2,
                'name_photograph' => 'alejandra_alicia_lebrija.jpg',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'start' => '11:30:00',
                'finish' => '11:45:00',
            ]);
        DB::table('speakers')->insert([
                'name' => 'Mtro. José Carreño Carlón',
                'role' => 'Director General, Fondo de Cultura Económica',
                'title' => 'Lectura y comunicación “El vicio de leer”',
                'bloq' => 2,
                'name_photograph' => 'jose_carreno_carlon.jpg',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'start' => '11:45:00:00',
                'finish' => '12:00:00',
            ]);
        DB::table('speakers')->insert([
                'name' => 'Mtro. Javier Treviño Cantú',
                'role' => 'Subsecretario de Educación Básica, SEP',
                'title' => 'Modelos educativos para una educación de calidad',
                'bloq' => 2,
                'name_photograph' => 'javier_treviño_cantu.jpg',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'start' => '12:00:00',
                'finish' => '12:15:00',
            ]);
        DB::table('speakers')->insert([
                'name' => 'Mtra. Mónica Aspe Bernal',
                'role' => 'Subsecretaría de Comunicaciones y Transportes',
                'title' => 'Tecnología, Innovación  y comunicación',
                'bloq' => 2,
                'name_photograph' => 'monica_aspe.jpg',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'start' => '12:15:00',
                'finish' => '12:30:00',
            ]);
        DB::table('speakers')->insert([
                'name' => 'Entrenador Sergio Ramírez Zúñiga',
                'role' => 'Entrenador del equipo de basquetbol triqui',
                'title' => 'Deporte y trabajo en equipo. “Trabajo en equipo para salir de las montañas”',
                'bloq' => 2,
                'name_photograph' => 'sergio _zuniga.jpg',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'start' => '12:30:00',
                'finish' => '12:45:00',
            ]);
        DB::table('speakers')->insert([
                'name' => 'Dr. Rubén Edel Navarro',
                'role' => 'Docente Investigador Universidad Veracruzana',
                'title' => '“Profesión mata Innovación...Pare de Sufrir". De-formación profesional y sus efectos paradigmáticos”',
                'bloq' => 3,
                'name_photograph' => 'ruben_edel_navarro.jpg',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'start' => '12:45:00',
                'finish' => '13:00:00',
            ]);
        DB::table('speakers')->insert([
                'name' => 'Mtra. Mariana Maggio',
                'role' => 'Gerente de Alianzas para el Acceso Tecnológico para Microsoft en el Cono Sur',
                'title' => 'Didáctica, innovación, Tecnología',
                'bloq' => 3,
                'name_photograph' => 'mariana_maggio.jpg',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'start' => '13:00:00',
                'finish' => '13:15:00',
            ]);
        DB::table('speakers')->insert([
                'name' => 'Lic. José Gordon Steiner',
                'role' => 'Divulgador científico',
                'title' => 'Mapas de literatura en la comunicación de la ciencia',
                'bloq' => 3,
                'name_photograph' => 'jose_gordon.jpg',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'start' => '13:15:00',
                'finish' => '13:30:00',
            ]);
        DB::table('speakers')->insert([
                'name' => 'Lic. Jorge Fernando Negrete Pacheco',
                'role' => 'Asociación Mexicana de Derecho a la información Presidente de la AMEDI',
                'title' => 'Gobernanza económica y economía de datos',
                'bloq' => 3,
                'name_photograph' => 'jorge_fernando_negrete.jpg',
                'facebook' => 'facebook.com|',
                'twitter' => 'twitter.com',
                'start' => '13:30:00',
                'finish' => '13:45:00',
            ]);
        DB::table('speakers')->insert([
                'name' => 'Mtro. Ariel Schwartzman Faerman',
                'role' => 'Coach en Mindfulness',
                'title' => 'El Zen de la administración del tiempo',
                'bloq' => 3,
                'name_photograph' => 'foto.jpg',
                'facebook' => 'facebook.com',
                'twitter' => 'twitter.com',
                'start' => '13:45:00',
                'finish' => '14:00:00',
            ]);
    }
}
