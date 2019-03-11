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
        // $this->call(UsersTableSeeder::class);
    	\App\Models\User::create([
    		'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'status' => 1,
            'role' => 'Admin',
            'email_verified_at' => now(),
    	]);
    	\App\Models\User::create([
    		'name' => 'entitie',
            'email' => 'entitie@e.com',
            'password' => Hash::make('admin'),
            'status' => 1,
            'role' => 'Entidade',
            'email_verified_at' => now(),
    	]);
    	\App\Models\User::create([
    		'name' => 'dce',
            'email' => 'dce@d.com',
            'password' => Hash::make('admin'),
            'status' => 1,
            'role' => 'DCE',
            'email_verified_at' => now(),
    	]);

         \App\Models\Institution::create([ // ID:1 -PARAÍSO - TO

            'name' => 'IFTO - Campus Paraíso do Tocantins',

            'description' => 'Instituto Federal do Tocantins - Campus Paraíso',

            'email' => 'paraiso@ifto.edu.br',

            'phone' => '63 3361-0300',

            'site' => 'http://portal.ifto.edu.br/paraiso/',

            'status' => '1',

            'street' => 'BR 153, KM 480',

            'number' => 'sn',

            'sector' => 'Parque Agroindustrial',

            'city' => 'Paraíso do Tocantins - TO',

            'complement' => 'IFTO',



        ]);



        \App\Models\Institution::create([ // ID:2 PALMAS - TO

            'name' => 'IFTO - Campus Palmas',

            'description' => 'Instituto Federal do Tocantins - Campus Palmas',

            'email' => 'palmas@ifto.edu.br',

            'phone' => '63 3236-4000',

            'site' => 'http://portal.ifto.edu.br/paraiso/',

            'status' => '1',

            'street' => 'Quadra 310 Su, Lo 5',

            'number' => 'sn',

            'sector' => 'Plano Diretor Sul',

            'city' => 'Palmas - TO',

            'complement' => 'IFTO',



        ]);



        \App\Models\Institution::create([ // ID:3 ARAGUAÍNA - TO

            'name' => 'IFTO - Campus Araguaína',

            'description' => 'Instituto Federal do Tocantins - Campus Araguaína',

            'email' => 'araguaina@ifto.edu.br',

            'phone' => '63 3411-0300',

            'site' => 'http://portal.ifto.edu.br/araguaina',

            'status' => '1',

            'street' => 'Av. Amazonas, esquina com a Av. Paraguai, Quadra 56, Lote 01',

            'number' => 'sn',

            'sector' => 'Cimba Araguaína',

            'city' => 'Araguaína - TO',

            'complement' => 'IFTO',



        ]);



        \App\Models\Institution::create([ // ID:4 COLINAS - TO

            'name' => 'IFTO - Campus Colinas',

            'description' => 'Instituto Federal do Tocantins - Campus Colinas do Tocantins',

            'email' => 'colinas@ifto.edu.br',

            'phone' => '63 99972-2908',

            'site' => 'http://portal.ifto.edu.br/colinas',

            'status' => '1',

            'street' => 'Avenida Bernardo Sayão, Lote 29B, Chácara Raio de Sol',

            'number' => 'sn',

            'sector' => 'Santa Maria',

            'city' => 'Colinas do Tocantins - TO',

            'complement' => 'IFTO',



        ]);



        \App\Models\Institution::create([ // ID:5 DIANÓPOLIS - TO

            'name' => 'IFTO - Campus Dianópolis',

            'description' => 'Instituto Federal do Tocantins - Campus Dianópolis',

            'email' => 'dianopolis@ifto.edu.br',

            'phone' => '63 99969-4268',

            'site' => 'http://portal.ifto.edu.br/dianopolis',

            'status' => '1',

            'street' => 'Rodovia TO 040 - Km 349',

            'number' => 'sn',

            'sector' => 'Loteamento Rio Palmeira - Lote 1',

            'city' => 'Dianópolis - TO',

            'complement' => 'IFTO',



        ]);



        \App\Models\Institution::create([ // ID:6 GURUPI - TO

            'name' => 'IFTO - Campus Gurupi',

            'description' => 'Instituto Federal do Tocantins - Campus Gurupi',

            'email' => 'gurupi@ifto.edu.br',

            'phone' => '63 3311-5400',

            'site' => 'http://portal.ifto.edu.br/gurupi',

            'status' => '1',

            'street' => 'Alameda Madrid',

            'number' => '545',

            'sector' => 'Jardim Sevilha',

            'city' => 'Gurupi - TO',

            'complement' => 'IFTO',



        ]);



        \App\Models\Institution::create([ // ID:7 PORTO NACIONAL - TO

            'name' => 'IFTO - Campus Porto Nacional',

            'description' => 'Instituto Federal do Tocantins - Campus Gurupi',

            'email' => 'portonacional@ifto.edu.br',

            'phone' => '63 3363-9700',

            'site' => 'http://portal.ifto.edu.br/porto',

            'status' => '1',

            'street' => 'Avenida Tocantins, A.I. - Loteamento Mãe Dedé',

            'number' => 'sn',

            'sector' => 'Jardim América',

            'city' => 'Porto Nacional - TO',

            'complement' => 'IFTO',



        ]);

        \App\Models\Institution::create([ // ID:8 ARAGUATINS - TO

            'name' => 'IFTO - Campus Araguatins',

            'description' => 'Instituto Federal do Tocantins - Campus Araguatins',

            'email' => 'araguatins@ifto.edu.br',

            'phone' => '63 3474-4800',

            'site' => 'http://www.ifto.edu.br/araguatins',

            'status' => '1',

            'street' => 'Povoado Santa Teresa - Km 05',

            'number' => 'sn',

            'sector' => 'Zona Rural',

            'city' => 'Araguatins - TO',

            'complement' => 'IFTO',

        ]);



        \App\Models\Institution::create([ // ID:9 Formoso do Araguaia - TO

            'name' => 'IFTO - Campus Avançado Formoso do Araguaia',

            'description' => 'Instituto Federal do Tocantins - Campus Avançado Formoso do Araguaia',

            'email' => 'formoso@ifto.edu.br',

            'phone' => '63 3474-4800',

            'site' => 'http://www.ifto.edu.br/formoso',

            'status' => '1',

            'street' => 'Rua do Açude/Lago Municipal',

            'number' => 'sn',

            'sector' => 'Centro',

            'city' => 'Formoso do Araguaia - TO',

            'complement' => 'IFTO',

        ]);



        \App\Models\Institution::create([ // ID:10 Lagoa da Confusão

            'name' => 'IFTO - Campus Avançado Lagoa da Confusão',

            'description' => 'Instituto Federal do Tocantins - Campus Avançado Lagoa da Confusão',

            'email' => 'lagoadaconfusao@ifto.edu.br',

            'phone' => '63 3364-1571',

            'site' => 'http://www.ifto.edu.br/lagoa',

            'status' => '1',

            'street' => 'Rua João Maximino de Alencar',

            'number' => '728',

            'sector' => 'Centro',

            'city' => 'Lagoa da Confusão - TO',

            'complement' => 'IFTO',

        ]);

        \App\Models\Institution::create([ // ID:11 Pedro Afonso
            'name' => 'IFTO - Campus Avançado Pedro Afonso',
            'description' => 'Instituto Federal do Tocantins - Campus Avançado Pedro Afonso',
            'email' => 'pedroafonso@ifto.edu.br',
            'phone' => '63 3466-1633',
            'site' => 'http://www.ifto.edu.br/pedroafonso',
            'status' => '1',
            'street' => 'Rua Ceará',
            'number' => '1441',
            'sector' => 'Setor Zacarias Campelo ',
            'city' => 'Pedro Afonso - TO',
            'complement' => 'IFTO',

        ]);

        \App\Models\Institution::create([ // ID:12 Reitoria
            'name' => 'IFTO - Reitoria',
            'description' => 'Instituto Federal do Tocantins - Reitoria',
            'email' => 'reitoria@ifto.edu.br',
            'phone' => '63 3229-2200',
            'site' => 'http://www.ifto.edu.br/reitoria',
            'status' => '1',
            'street' => 'Avenida Joaquim Teotônio Segurado, Quadra 202 sul, ACSU-SE 20, Conjunto 1, Lote 8',
            'number' => '1441',
            'sector' => 'Plano Diretor Sul',
            'city' => 'Palmas - TO',
            'complement' => 'IFTO',

        ]);
    }
}
