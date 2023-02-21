<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_id' => 14,
                'name' => 'Victoria',
                'code' => 'VI',
                'adm1_code' => 'AS07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'country_id' => 14,
                'name' => 'Tasmania',
                'code' => 'TS',
                'adm1_code' => 'AS06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'country_id' => 14,
                'name' => 'Queensland',
                'code' => 'QL',
                'adm1_code' => 'AS04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'country_id' => 14,
                'name' => 'New South Wales',
                'code' => 'NS',
                'adm1_code' => 'AS02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'country_id' => 14,
                'name' => 'South Australia',
                'code' => 'SA',
                'adm1_code' => 'AS05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'country_id' => 14,
                'name' => 'Western Australia',
                'code' => 'WA',
                'adm1_code' => 'AS08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'country_id' => 14,
                'name' => 'Northern Territory',
                'code' => 'NT',
                'adm1_code' => 'AS03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'country_id' => 33,
                'name' => 'Acre',
                'code' => 'AC',
                'adm1_code' => 'BR01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 10,
                'country_id' => 33,
                'name' => 'Amapá',
                'code' => 'AP',
                'adm1_code' => 'BR03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 11,
                'country_id' => 33,
                'name' => 'Bahia',
                'code' => 'BA',
                'adm1_code' => 'BR05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 12,
                'country_id' => 33,
                'name' => 'Goiás',
                'code' => 'GO',
                'adm1_code' => 'BR10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'country_id' => 33,
                'name' => 'Piauí',
                'code' => 'PI',
                'adm1_code' => 'BR20',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 14,
                'country_id' => 33,
                'name' => 'Ceará',
                'code' => 'CE',
                'adm1_code' => 'BR06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 15,
                'country_id' => 33,
                'name' => 'Paraná',
                'code' => 'PR',
                'adm1_code' => 'BR18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 16,
                'country_id' => 33,
                'name' => 'Alagoas',
                'code' => 'AL',
                'adm1_code' => 'BR02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 17,
                'country_id' => 33,
                'name' => 'Paraíba',
                'code' => 'PB',
                'adm1_code' => 'BR17',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 18,
                'country_id' => 33,
                'name' => 'Roraima',
                'code' => 'RR',
                'adm1_code' => 'BR25',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 19,
                'country_id' => 33,
                'name' => 'Sergipe',
                'code' => 'SE',
                'adm1_code' => 'BR28',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 20,
                'country_id' => 33,
                'name' => 'Amazonas',
                'code' => 'AM',
                'adm1_code' => 'BR04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 21,
                'country_id' => 33,
                'name' => 'Maranhão',
                'code' => 'MA',
                'adm1_code' => 'BR13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 22,
                'country_id' => 33,
                'name' => 'Rondônia',
                'code' => 'RO',
                'adm1_code' => 'BR24',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 24,
                'country_id' => 33,
                'name' => 'São Paulo',
                'code' => 'SP',
                'adm1_code' => 'BR27',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 25,
                'country_id' => 33,
                'name' => 'Tocantins',
                'code' => 'TO',
                'adm1_code' => 'BR31',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 26,
                'country_id' => 33,
                'name' => 'Mato Grosso',
                'code' => 'MT',
                'adm1_code' => 'BR14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 27,
                'country_id' => 33,
                'name' => 'Minas Gerais',
                'code' => 'MG',
                'adm1_code' => 'BR15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 28,
                'country_id' => 33,
                'name' => 'Espírito Santo',
                'code' => 'ES',
                'adm1_code' => 'BR08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 29,
                'country_id' => 33,
                'name' => 'Rio de Janeiro',
                'code' => 'RJ',
                'adm1_code' => 'BR21',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 30,
                'country_id' => 33,
                'name' => 'Santa Catarina',
                'code' => 'SC',
                'adm1_code' => 'BR26',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 32,
                'country_id' => 33,
                'name' => 'Rio Grande do Sul',
                'code' => 'RS',
                'adm1_code' => 'BR23',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 33,
                'country_id' => 33,
                'name' => 'Mato Grosso do Sul',
                'code' => 'MS',
                'adm1_code' => 'BR11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 34,
                'country_id' => 33,
                'name' => 'Rio Grande do Norte',
                'code' => 'RN',
                'adm1_code' => 'BR22',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 35,
                'country_id' => 43,
                'name' => 'Quebec',
                'code' => 'QC',
                'adm1_code' => 'CA10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 36,
                'country_id' => 43,
                'name' => 'Alberta',
                'code' => 'AB',
                'adm1_code' => 'CA01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 37,
                'country_id' => 43,
                'name' => 'Ontario',
                'code' => 'ON',
                'adm1_code' => 'CA08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 38,
                'country_id' => 43,
                'name' => 'Manitoba',
                'code' => 'MB',
                'adm1_code' => 'CA03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 39,
                'country_id' => 43,
                'name' => 'Nova Scotia',
                'code' => 'NS',
                'adm1_code' => 'CA07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 40,
                'country_id' => 43,
                'name' => 'Saskatchewan',
                'code' => 'SK',
                'adm1_code' => 'CA11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 41,
                'country_id' => 43,
                'name' => 'Newfoundland and Labrador',
                'code' => 'NF',
                'adm1_code' => 'CA05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 42,
                'country_id' => 43,
                'name' => 'New Brunswick',
                'code' => 'NB',
                'adm1_code' => 'CA04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 43,
                'country_id' => 43,
                'name' => 'British Columbia',
                'code' => 'BC',
                'adm1_code' => 'CA02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 45,
                'country_id' => 43,
                'name' => 'Prince Edward Island',
                'code' => 'PE',
                'adm1_code' => 'CA09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 46,
                'country_id' => 43,
                'name' => 'Northwest Territories',
                'code' => 'NT',
                'adm1_code' => 'CA13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 49,
                'country_id' => 114,
                'name' => 'Bali',
                'code' => 'BA',
                'adm1_code' => 'ID02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 56,
                'country_id' => 159,
                'name' => 'Sonora',
                'code' => 'SO',
                'adm1_code' => 'MX26',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 59,
                'country_id' => 159,
                'name' => 'Jalisco',
                'code' => 'JA',
                'adm1_code' => 'MX14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 60,
                'country_id' => 159,
                'name' => 'Hidalgo',
                'code' => 'HI',
                'adm1_code' => 'MX13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 61,
                'country_id' => 159,
                'name' => 'Morelos',
                'code' => 'MR',
                'adm1_code' => 'MX17',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 62,
                'country_id' => 159,
                'name' => 'Chiapas',
                'code' => 'CP',
                'adm1_code' => 'MX05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 63,
                'country_id' => 159,
                'name' => 'Tabasco',
                'code' => 'TB',
                'adm1_code' => 'MX27',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 66,
                'country_id' => 159,
                'name' => 'Guerrero',
                'code' => 'GR',
                'adm1_code' => 'MX12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 69,
                'country_id' => 159,
                'name' => 'Nuevo Leon',
                'code' => 'NL',
                'adm1_code' => 'MX19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 70,
                'country_id' => 159,
                'name' => 'Tamaulipas',
                'code' => 'TM',
                'adm1_code' => 'MX28',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 71,
                'country_id' => 159,
                'name' => 'Guanajuato',
                'code' => 'GJ',
                'adm1_code' => 'MX11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 72,
                'country_id' => 159,
                'name' => 'Quintana Roo',
                'code' => 'QR',
                'adm1_code' => 'MX23',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 73,
                'country_id' => 159,
                'name' => 'Baja California',
                'code' => 'BN',
                'adm1_code' => 'MX02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 74,
                'country_id' => 159,
                'name' => 'Baja California Sur',
                'code' => 'BS',
                'adm1_code' => 'MX03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 75,
                'country_id' => 165,
                'name' => 'Tov',
                'code' => 'TO',
                'adm1_code' => 'MG18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 76,
                'country_id' => 165,
                'name' => 'Uvs',
                'code' => 'UV',
                'adm1_code' => 'MG19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 80,
                'country_id' => 165,
                'name' => 'Dornod',
                'code' => 'DD',
                'adm1_code' => 'MG06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 81,
                'country_id' => 165,
                'name' => 'Hovsgol',
                'code' => 'HG',
                'adm1_code' => 'MG13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 82,
                'country_id' => 165,
                'name' => 'Selenge',
                'code' => 'SL',
                'adm1_code' => 'MG16',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 86,
                'country_id' => 165,
                'name' => 'Suhbaatar',
                'code' => 'SB',
                'adm1_code' => 'MG17',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 91,
                'country_id' => 203,
                'name' => 'Komi',
                'code' => 'KO',
                'adm1_code' => 'RS34',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 105,
                'country_id' => 203,
                'name' => 'Dagestan',
                'code' => 'DA',
                'adm1_code' => 'RS17',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 106,
                'country_id' => 203,
                'name' => 'Mariy-El',
                'code' => 'ME',
                'adm1_code' => 'RS45',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 110,
                'country_id' => 203,
                'name' => 'Tatarstan',
                'code' => 'TT',
                'adm1_code' => 'RS73',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 122,
                'country_id' => 254,
                'name' => 'Alabama',
                'code' => 'AL',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 123,
                'country_id' => 254,
                'name' => 'Alaska',
                'code' => 'AK',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 124,
                'country_id' => 254,
                'name' => 'Arizona',
                'code' => 'AZ',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 125,
                'country_id' => 254,
                'name' => 'Arkansas',
                'code' => 'AR',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 126,
                'country_id' => 254,
                'name' => 'California',
                'code' => 'CA',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 127,
                'country_id' => 254,
                'name' => 'Colorado',
                'code' => 'CO',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 128,
                'country_id' => 254,
                'name' => 'Connecticut',
                'code' => 'CT',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 129,
                'country_id' => 254,
                'name' => 'Delaware',
                'code' => 'DE',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 130,
                'country_id' => 254,
                'name' => 'District of Columbia',
                'code' => 'DC',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 131,
                'country_id' => 254,
                'name' => 'Florida',
                'code' => 'FL',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 133,
                'country_id' => 254,
                'name' => 'Hawaii',
                'code' => 'HI',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 134,
                'country_id' => 254,
                'name' => 'Idaho',
                'code' => 'ID',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 135,
                'country_id' => 254,
                'name' => 'Illinois',
                'code' => 'IL',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 136,
                'country_id' => 254,
                'name' => 'Indiana',
                'code' => 'IN',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 137,
                'country_id' => 254,
                'name' => 'Iowa',
                'code' => 'IA',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 138,
                'country_id' => 254,
                'name' => 'Kansas',
                'code' => 'KS',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 139,
                'country_id' => 254,
                'name' => 'Kentucky',
                'code' => 'KY',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 140,
                'country_id' => 254,
                'name' => 'Louisiana',
                'code' => 'LA',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 141,
                'country_id' => 254,
                'name' => 'Maine',
                'code' => 'ME',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 142,
                'country_id' => 254,
                'name' => 'Maryland',
                'code' => 'MD',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 143,
                'country_id' => 254,
                'name' => 'Massachusetts',
                'code' => 'MA',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 144,
                'country_id' => 254,
                'name' => 'Michigan',
                'code' => 'MI',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 145,
                'country_id' => 254,
                'name' => 'Minnesota',
                'code' => 'MN',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 146,
                'country_id' => 254,
                'name' => 'Mississippi',
                'code' => 'MS',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 147,
                'country_id' => 254,
                'name' => 'Missouri',
                'code' => 'MO',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 148,
                'country_id' => 254,
                'name' => 'Montana',
                'code' => 'MT',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 149,
                'country_id' => 254,
                'name' => 'Nebraska',
                'code' => 'NE',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 150,
                'country_id' => 254,
                'name' => 'Nevada',
                'code' => 'NV',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 151,
                'country_id' => 254,
                'name' => 'New Hampshire',
                'code' => 'NH',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 152,
                'country_id' => 254,
                'name' => 'New Jersey',
                'code' => 'NJ',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 153,
                'country_id' => 254,
                'name' => 'New Mexico',
                'code' => 'NM',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 154,
                'country_id' => 254,
                'name' => 'New York',
                'code' => 'NY',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 155,
                'country_id' => 254,
                'name' => 'North Carolina',
                'code' => 'NC',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 156,
                'country_id' => 254,
                'name' => 'North Dakota',
                'code' => 'ND',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 157,
                'country_id' => 254,
                'name' => 'Ohio',
                'code' => 'OH',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 158,
                'country_id' => 254,
                'name' => 'Oklahoma',
                'code' => 'OK',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 159,
                'country_id' => 254,
                'name' => 'Oregon',
                'code' => 'OR',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 160,
                'country_id' => 254,
                'name' => 'Pennsylvania',
                'code' => 'PA',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 161,
                'country_id' => 254,
                'name' => 'Rhode Island',
                'code' => 'RI',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 162,
                'country_id' => 254,
                'name' => 'South Carolina',
                'code' => 'SC',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 163,
                'country_id' => 254,
                'name' => 'South Dakota',
                'code' => 'SD',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 164,
                'country_id' => 254,
                'name' => 'Tennessee',
                'code' => 'TN',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 165,
                'country_id' => 254,
                'name' => 'Texas',
                'code' => 'TX',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 166,
                'country_id' => 254,
                'name' => 'Utah',
                'code' => 'UT',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 167,
                'country_id' => 254,
                'name' => 'Virginia',
                'code' => 'VA',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 168,
                'country_id' => 254,
                'name' => 'Washington',
                'code' => 'WA',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 169,
                'country_id' => 254,
                'name' => 'West Virginia',
                'code' => 'WV',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 170,
                'country_id' => 254,
                'name' => 'Wisconsin',
                'code' => 'WI',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 171,
                'country_id' => 254,
                'name' => 'Wyoming',
                'code' => 'WY',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 172,
                'country_id' => 254,
                'name' => 'Vermont',
                'code' => 'VT',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 174,
                'country_id' => 14,
                'name' => 'Australian Capital Territory',
                'code' => 'CT',
                'adm1_code' => 'AS01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 189,
                'country_id' => 114,
                'name' => 'Papua',
                'code' => 'IJ',
                'adm1_code' => 'ID09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 193,
                'country_id' => 165,
                'name' => 'Bulgan',
                'code' => 'BU',
                'adm1_code' => 'MG21',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 194,
                'country_id' => 165,
                'name' => 'Hovd',
                'code' => 'HD',
                'adm1_code' => 'MG12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 196,
                'country_id' => 159,
                'name' => 'Chihuahua',
                'code' => 'CH',
                'adm1_code' => 'MX06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 197,
                'country_id' => 159,
                'name' => 'Colima',
                'code' => 'CL',
                'adm1_code' => 'MX08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 198,
                'country_id' => 159,
                'name' => 'Durango',
                'code' => 'DU',
                'adm1_code' => 'MX10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 201,
                'country_id' => 159,
                'name' => 'Oaxaca',
                'code' => 'OA',
                'adm1_code' => 'MX20',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 203,
                'country_id' => 159,
                'name' => 'San Luis Potosi',
                'code' => 'SL',
                'adm1_code' => 'MX24',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 204,
                'country_id' => 159,
                'name' => 'Tlaxcala',
                'code' => 'TL',
                'adm1_code' => 'MX29',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 206,
                'country_id' => 159,
                'name' => 'Zacatecas',
                'code' => 'ZA',
                'adm1_code' => 'MX32',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 592,
                'country_id' => 55,
                'name' => 'Democratic Republic of the Congo',
                'code' => 'CD',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 593,
                'country_id' => 56,
                'name' => 'Republic of the Congo',
                'code' => 'CG',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 620,
                'country_id' => 83,
                'name' => 'Metropolitan France',
                'code' => 'FX',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 669,
                'country_id' => 132,
                'name' => 'North Korea',
                'code' => 'KP',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 670,
                'country_id' => 133,
                'name' => 'South Korea',
                'code' => 'KR',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 683,
                'country_id' => 146,
                'name' => 'The Former Yugoslav Republic of Macedonia',
                'code' => 'MK',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 690,
                'country_id' => 153,
                'name' => 'Isle of Man',
                'code' => 'IM',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 697,
                'country_id' => 160,
                'name' => 'Federated States of Micronesia',
                'code' => 'FM',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 712,
                'country_id' => 175,
                'name' => 'The Netherlands',
                'code' => 'NL',
                'adm1_code' => NULL,
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 815,
                'country_id' => 43,
                'name' => 'Yukon Territory',
                'code' => 'YT',
                'adm1_code' => 'CA12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 816,
                'country_id' => 9,
                'name' => 'Barbuda',
                'code' => 'BB',
                'adm1_code' => 'AC01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 817,
                'country_id' => 9,
                'name' => 'Saint George',
                'code' => 'GE',
                'adm1_code' => 'AC03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 818,
                'country_id' => 9,
                'name' => 'Saint John',
                'code' => 'JO',
                'adm1_code' => 'AC04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 819,
                'country_id' => 9,
                'name' => 'Saint Mary',
                'code' => 'MA',
                'adm1_code' => 'AC05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 820,
                'country_id' => 9,
                'name' => 'Saint Paul',
                'code' => 'PA',
                'adm1_code' => 'AC06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 821,
                'country_id' => 9,
                'name' => 'Saint Peter',
                'code' => 'PE',
                'adm1_code' => 'AC07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 822,
                'country_id' => 9,
                'name' => 'Saint Philip',
                'code' => 'PH',
                'adm1_code' => 'AC08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 823,
                'country_id' => 1,
                'name' => 'Badakhshan',
                'code' => 'BD',
                'adm1_code' => 'AF01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 824,
                'country_id' => 1,
                'name' => 'Badghis',
                'code' => 'BG',
                'adm1_code' => 'AF02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 825,
                'country_id' => 1,
                'name' => 'Baghlan',
                'code' => 'BL',
                'adm1_code' => 'AF03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 827,
                'country_id' => 1,
                'name' => 'Bamian',
                'code' => 'BM',
                'adm1_code' => 'AF05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 828,
                'country_id' => 1,
                'name' => 'Farah',
                'code' => 'FH',
                'adm1_code' => 'AF06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 829,
                'country_id' => 1,
                'name' => 'Faryab',
                'code' => 'FB',
                'adm1_code' => 'AF07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 830,
                'country_id' => 1,
                'name' => 'Ghazni',
                'code' => 'GZ',
                'adm1_code' => 'AF08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 831,
                'country_id' => 1,
                'name' => 'Ghowr',
                'code' => 'GR',
                'adm1_code' => 'AF09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 832,
                'country_id' => 1,
                'name' => 'Helmand',
                'code' => 'HM',
                'adm1_code' => 'AF10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 833,
                'country_id' => 1,
                'name' => 'Herat',
                'code' => 'HR',
                'adm1_code' => 'AF11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 835,
                'country_id' => 1,
                'name' => 'Kabol',
                'code' => 'KB',
                'adm1_code' => 'AF13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 836,
                'country_id' => 1,
                'name' => 'Kapisa',
                'code' => 'KP',
                'adm1_code' => 'AF14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 837,
                'country_id' => 1,
                'name' => 'Konar',
                'code' => 'KR',
                'adm1_code' => 'AF15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 838,
                'country_id' => 1,
                'name' => 'Laghman',
                'code' => 'LA',
                'adm1_code' => 'AF16',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 839,
                'country_id' => 1,
                'name' => 'Lowgar',
                'code' => 'LW',
                'adm1_code' => 'AF17',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 840,
                'country_id' => 1,
                'name' => 'Nangarhar',
                'code' => 'NG',
                'adm1_code' => 'AF18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 841,
                'country_id' => 1,
                'name' => 'Nimruz',
                'code' => 'NM',
                'adm1_code' => 'AF19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 842,
                'country_id' => 1,
                'name' => 'Oruzgan',
                'code' => 'OR',
                'adm1_code' => 'AF20',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 843,
                'country_id' => 1,
                'name' => 'Paktia',
                'code' => 'PT',
                'adm1_code' => 'AF21',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 844,
                'country_id' => 1,
                'name' => 'Parvan',
                'code' => 'PR',
                'adm1_code' => 'AF22',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 845,
                'country_id' => 1,
                'name' => 'Kandahar',
                'code' => 'KD',
                'adm1_code' => 'AF23',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 846,
                'country_id' => 1,
                'name' => 'Kondoz',
                'code' => 'KZ',
                'adm1_code' => 'AF24',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 848,
                'country_id' => 1,
                'name' => 'Takhar',
                'code' => 'TK',
                'adm1_code' => 'AF26',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 849,
                'country_id' => 1,
                'name' => 'Vardak',
                'code' => 'VR',
                'adm1_code' => 'AF27',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 850,
                'country_id' => 1,
                'name' => 'Zabol',
                'code' => 'ZB',
                'adm1_code' => 'AF28',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 851,
                'country_id' => 1,
                'name' => 'Paktika',
                'code' => 'PK',
                'adm1_code' => 'AF29',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 852,
                'country_id' => 1,
                'name' => 'Balkh',
                'code' => 'BK',
                'adm1_code' => 'AF30',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 853,
                'country_id' => 1,
                'name' => 'Jowzjan',
                'code' => 'JW',
                'adm1_code' => 'AF31',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 854,
                'country_id' => 1,
                'name' => 'Samangan',
                'code' => 'SM',
                'adm1_code' => 'AF32',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 855,
                'country_id' => 1,
                'name' => 'Sare Pol',
                'code' => 'SP',
                'adm1_code' => 'AF33',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 856,
                'country_id' => 3,
                'name' => 'Alger',
                'code' => 'AL',
                'adm1_code' => 'AG01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 857,
                'country_id' => 3,
                'name' => 'Batna',
                'code' => 'BT',
                'adm1_code' => 'AG03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 858,
                'country_id' => 3,
                'name' => 'Constantine',
                'code' => 'CO',
                'adm1_code' => 'AG04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 859,
                'country_id' => 3,
                'name' => 'Medea',
                'code' => 'MD',
                'adm1_code' => 'AG06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 860,
                'country_id' => 3,
                'name' => 'Mostaganem',
                'code' => 'MG',
                'adm1_code' => 'AG07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 861,
                'country_id' => 3,
                'name' => 'Oran',
                'code' => 'OR',
                'adm1_code' => 'AG09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 862,
                'country_id' => 3,
                'name' => 'Saida',
                'code' => 'SD',
                'adm1_code' => 'AG10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 863,
                'country_id' => 3,
                'name' => 'Setif',
                'code' => 'SF',
                'adm1_code' => 'AG12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 864,
                'country_id' => 3,
                'name' => 'Tiaret',
                'code' => 'TR',
                'adm1_code' => 'AG13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 865,
                'country_id' => 3,
                'name' => 'Tizi Ouzou',
                'code' => 'TO',
                'adm1_code' => 'AG14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 866,
                'country_id' => 3,
                'name' => 'Tlemcen',
                'code' => 'TL',
                'adm1_code' => 'AG15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 867,
                'country_id' => 3,
                'name' => 'Bejaia',
                'code' => 'BJ',
                'adm1_code' => 'AG18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 868,
                'country_id' => 3,
                'name' => 'Biskra',
                'code' => 'BS',
                'adm1_code' => 'AG19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 869,
                'country_id' => 3,
                'name' => 'Blida',
                'code' => 'BL',
                'adm1_code' => 'AG20',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 870,
                'country_id' => 3,
                'name' => 'Bouira',
                'code' => 'BU',
                'adm1_code' => 'AG21',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 871,
                'country_id' => 3,
                'name' => 'Djelfa',
                'code' => 'DJ',
                'adm1_code' => 'AG22',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 872,
                'country_id' => 3,
                'name' => 'Guelma',
                'code' => 'GL',
                'adm1_code' => 'AG23',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 873,
                'country_id' => 3,
                'name' => 'Jijel',
                'code' => 'JJ',
                'adm1_code' => 'AG24',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 874,
                'country_id' => 3,
                'name' => 'Laghouat',
                'code' => 'LG',
                'adm1_code' => 'AG25',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 875,
                'country_id' => 3,
                'name' => 'Mascara',
                'code' => 'MC',
                'adm1_code' => 'AG26',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 876,
                'country_id' => 3,
                'name' => 'M\'Sila',
                'code' => 'MS',
                'adm1_code' => 'AG27',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 877,
                'country_id' => 3,
                'name' => 'Oum el Bouaghi',
                'code' => 'OB',
                'adm1_code' => 'AG29',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 878,
                'country_id' => 3,
                'name' => 'Sidi Bel Abbes',
                'code' => 'SB',
                'adm1_code' => 'AG30',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 879,
                'country_id' => 3,
                'name' => 'Skikda',
                'code' => 'SK',
                'adm1_code' => 'AG31',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 880,
                'country_id' => 3,
                'name' => 'Tebessa',
                'code' => 'TB',
                'adm1_code' => 'AG33',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 881,
                'country_id' => 3,
                'name' => 'Adrar',
                'code' => 'AR',
                'adm1_code' => 'AG34',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 882,
                'country_id' => 3,
                'name' => 'Ain Defla',
                'code' => 'AD',
                'adm1_code' => 'AG35',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 883,
                'country_id' => 3,
                'name' => 'Ain Temouchent',
                'code' => 'AT',
                'adm1_code' => 'AG36',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 884,
                'country_id' => 3,
                'name' => 'Annaba',
                'code' => 'AN',
                'adm1_code' => 'AG37',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 885,
                'country_id' => 3,
                'name' => 'Bechar',
                'code' => 'BC',
                'adm1_code' => 'AG38',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 886,
                'country_id' => 3,
                'name' => 'Bordj Bou Arreridj',
                'code' => 'BB',
                'adm1_code' => 'AG39',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 887,
                'country_id' => 3,
                'name' => 'Boumerdes',
                'code' => 'BM',
                'adm1_code' => 'AG40',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 888,
                'country_id' => 3,
                'name' => 'Chlef',
                'code' => 'CH',
                'adm1_code' => 'AG41',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 889,
                'country_id' => 3,
                'name' => 'El Bayadh',
                'code' => 'EB',
                'adm1_code' => 'AG42',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 890,
                'country_id' => 3,
                'name' => 'El Oued',
                'code' => 'EO',
                'adm1_code' => 'AG43',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 891,
                'country_id' => 3,
                'name' => 'El Tarf',
                'code' => 'ET',
                'adm1_code' => 'AG44',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 892,
                'country_id' => 3,
                'name' => 'Ghardaia',
                'code' => 'GR',
                'adm1_code' => 'AG45',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 893,
                'country_id' => 3,
                'name' => 'Illizi',
                'code' => 'IL',
                'adm1_code' => 'AG46',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 894,
                'country_id' => 3,
                'name' => 'Khenchela',
                'code' => 'KH',
                'adm1_code' => 'AG47',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 895,
                'country_id' => 3,
                'name' => 'Mila',
                'code' => 'ML',
                'adm1_code' => 'AG48',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 896,
                'country_id' => 3,
                'name' => 'Naama',
                'code' => 'NA',
                'adm1_code' => 'AG49',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 897,
                'country_id' => 3,
                'name' => 'Ouargla',
                'code' => 'OG',
                'adm1_code' => 'AG50',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 898,
                'country_id' => 3,
                'name' => 'Relizane',
                'code' => 'RE',
                'adm1_code' => 'AG51',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 899,
                'country_id' => 3,
                'name' => 'Souk Ahras',
                'code' => 'SA',
                'adm1_code' => 'AG52',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 900,
                'country_id' => 3,
                'name' => 'Tamanghasset',
                'code' => 'TM',
                'adm1_code' => 'AG53',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 901,
                'country_id' => 3,
                'name' => 'Tindouf',
                'code' => 'TN',
                'adm1_code' => 'AG54',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 902,
                'country_id' => 3,
                'name' => 'Tipaza',
                'code' => 'TP',
                'adm1_code' => 'AG55',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 903,
                'country_id' => 3,
                'name' => 'Tissemsilt',
                'code' => 'TS',
                'adm1_code' => 'AG56',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 904,
                'country_id' => 16,
                'name' => 'Abseron',
                'code' => 'AR',
                'adm1_code' => 'AJ01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 905,
                'country_id' => 16,
                'name' => 'Agcabadi',
                'code' => 'AC',
                'adm1_code' => 'AJ02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 906,
                'country_id' => 16,
                'name' => 'Agdam',
                'code' => 'AM',
                'adm1_code' => 'AJ03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 907,
                'country_id' => 16,
                'name' => 'Agdas',
                'code' => 'AS',
                'adm1_code' => 'AJ04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 908,
                'country_id' => 16,
                'name' => 'Agstafa',
                'code' => 'AF',
                'adm1_code' => 'AJ05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 909,
                'country_id' => 16,
                'name' => 'Agsu',
                'code' => 'AU',
                'adm1_code' => 'AJ06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 910,
                'country_id' => 16,
                'name' => 'Ali Bayramli',
                'code' => 'AB',
                'adm1_code' => 'AJ07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 911,
                'country_id' => 16,
                'name' => 'Astara',
                'code' => 'AA',
                'adm1_code' => 'AJ08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 912,
                'country_id' => 16,
                'name' => 'Baki',
                'code' => 'BA',
                'adm1_code' => 'AJ09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 913,
                'country_id' => 16,
                'name' => 'Balakan',
                'code' => 'BL',
                'adm1_code' => 'AJ10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 914,
                'country_id' => 16,
                'name' => 'Barda',
                'code' => 'BR',
                'adm1_code' => 'AJ11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 915,
                'country_id' => 16,
                'name' => 'Beylaqan',
                'code' => 'BQ',
                'adm1_code' => 'AJ12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 916,
                'country_id' => 16,
                'name' => 'Bilasuvar',
                'code' => 'BS',
                'adm1_code' => 'AJ13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 917,
                'country_id' => 16,
                'name' => 'Cabrayil',
                'code' => 'CB',
                'adm1_code' => 'AJ14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 918,
                'country_id' => 16,
                'name' => 'Calilabad',
                'code' => 'CL',
                'adm1_code' => 'AJ15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 919,
                'country_id' => 16,
                'name' => 'Daskasan',
                'code' => 'DS',
                'adm1_code' => 'AJ16',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 920,
                'country_id' => 16,
                'name' => 'Davaci',
                'code' => 'DV',
                'adm1_code' => 'AJ17',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 921,
                'country_id' => 16,
                'name' => 'Fuzuli',
                'code' => 'FU',
                'adm1_code' => 'AJ18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 922,
                'country_id' => 16,
                'name' => 'Gadabay',
                'code' => 'GD',
                'adm1_code' => 'AJ19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 923,
                'country_id' => 16,
                'name' => 'Ganca',
                'code' => 'GA',
                'adm1_code' => 'AJ20',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 924,
                'country_id' => 16,
                'name' => 'Goranboy',
                'code' => 'GR',
                'adm1_code' => 'AJ21',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 925,
                'country_id' => 16,
                'name' => 'Goycay',
                'code' => 'GY',
                'adm1_code' => 'AJ22',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 926,
                'country_id' => 16,
                'name' => 'Haciqabul',
                'code' => 'HA',
                'adm1_code' => 'AJ23',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 927,
                'country_id' => 16,
                'name' => 'Imisli',
                'code' => 'IM',
                'adm1_code' => 'AJ24',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 928,
                'country_id' => 16,
                'name' => 'Ismayilli',
                'code' => 'IS',
                'adm1_code' => 'AJ25',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 929,
                'country_id' => 16,
                'name' => 'Kalbacar',
                'code' => 'KA',
                'adm1_code' => 'AJ26',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 930,
                'country_id' => 16,
                'name' => 'Kurdamir',
                'code' => 'KU',
                'adm1_code' => 'AJ27',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 931,
                'country_id' => 16,
                'name' => 'Lacin',
                'code' => 'LC',
                'adm1_code' => 'AJ28',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 932,
                'country_id' => 16,
                'name' => 'Lankaran',
                'code' => 'LA',
                'adm1_code' => 'AJ30',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 934,
                'country_id' => 16,
                'name' => 'Lerik',
                'code' => 'LE',
                'adm1_code' => 'AJ31',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 935,
                'country_id' => 16,
                'name' => 'Masalli',
                'code' => 'MA',
                'adm1_code' => 'AJ32',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 936,
                'country_id' => 16,
                'name' => 'Mingacevir',
                'code' => 'MI',
                'adm1_code' => 'AJ33',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 937,
                'country_id' => 16,
                'name' => 'Naftalan',
                'code' => 'NA',
                'adm1_code' => 'AJ34',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 938,
                'country_id' => 16,
                'name' => 'Naxcivan',
                'code' => 'NX',
                'adm1_code' => 'AJ35',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 939,
                'country_id' => 16,
                'name' => 'Neftcala',
                'code' => 'NE',
                'adm1_code' => 'AJ36',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 940,
                'country_id' => 16,
                'name' => 'Oguz',
                'code' => 'OG',
                'adm1_code' => 'AJ37',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 941,
                'country_id' => 16,
                'name' => 'Qabala',
                'code' => 'QA',
                'adm1_code' => 'AJ38',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 942,
                'country_id' => 16,
                'name' => 'Qax',
                'code' => 'QX',
                'adm1_code' => 'AJ39',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 943,
                'country_id' => 16,
                'name' => 'Qazax',
                'code' => 'QZ',
                'adm1_code' => 'AJ40',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 944,
                'country_id' => 16,
                'name' => 'Qobustan',
                'code' => 'QO',
                'adm1_code' => 'AJ41',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 945,
                'country_id' => 16,
                'name' => 'Quba',
                'code' => 'QB',
                'adm1_code' => 'AJ42',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 946,
                'country_id' => 16,
                'name' => 'Qubadli',
                'code' => 'QD',
                'adm1_code' => 'AJ43',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 947,
                'country_id' => 16,
                'name' => 'Qusar',
                'code' => 'QR',
                'adm1_code' => 'AJ44',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 948,
                'country_id' => 16,
                'name' => 'Saatli',
                'code' => 'ST',
                'adm1_code' => 'AJ45',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 949,
                'country_id' => 16,
                'name' => 'Sabirabad',
                'code' => 'SB',
                'adm1_code' => 'AJ46',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 950,
                'country_id' => 16,
                'name' => 'Saki',
                'code' => 'SA',
                'adm1_code' => 'AJ48',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 952,
                'country_id' => 16,
                'name' => 'Salyan',
                'code' => 'SL',
                'adm1_code' => 'AJ49',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 953,
                'country_id' => 16,
                'name' => 'Samaxi',
                'code' => 'SI',
                'adm1_code' => 'AJ50',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 954,
                'country_id' => 16,
                'name' => 'Samkir',
                'code' => 'SM',
                'adm1_code' => 'AJ51',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 955,
                'country_id' => 16,
                'name' => 'Samux',
                'code' => 'SX',
                'adm1_code' => 'AJ52',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 956,
                'country_id' => 16,
                'name' => 'Siyazan',
                'code' => 'SY',
                'adm1_code' => 'AJ53',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 957,
                'country_id' => 16,
                'name' => 'Sumqayit',
                'code' => 'SQ',
                'adm1_code' => 'AJ54',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 958,
                'country_id' => 16,
                'name' => 'Susa',
                'code' => 'SS',
                'adm1_code' => 'AJ56',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 960,
                'country_id' => 16,
                'name' => 'Tartar',
                'code' => 'TA',
                'adm1_code' => 'AJ57',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 961,
                'country_id' => 16,
                'name' => 'Tovuz',
                'code' => 'TO',
                'adm1_code' => 'AJ58',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 962,
                'country_id' => 16,
                'name' => 'Ucar',
                'code' => 'UC',
                'adm1_code' => 'AJ59',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 963,
                'country_id' => 16,
                'name' => 'Xacmaz',
                'code' => 'XZ',
                'adm1_code' => 'AJ60',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 964,
                'country_id' => 16,
                'name' => 'Xankandi',
                'code' => 'XA',
                'adm1_code' => 'AJ61',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 965,
                'country_id' => 16,
                'name' => 'Xanlar',
                'code' => 'XR',
                'adm1_code' => 'AJ62',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 966,
                'country_id' => 16,
                'name' => 'Xizi',
                'code' => 'XI',
                'adm1_code' => 'AJ63',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 967,
                'country_id' => 16,
                'name' => 'Xocali',
                'code' => 'XC',
                'adm1_code' => 'AJ64',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 968,
                'country_id' => 16,
                'name' => 'Xocavand',
                'code' => 'XD',
                'adm1_code' => 'AJ65',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 969,
                'country_id' => 16,
                'name' => 'Yardimli',
                'code' => 'YR',
                'adm1_code' => 'AJ66',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 970,
                'country_id' => 16,
                'name' => 'Yevlax',
                'code' => 'YE',
                'adm1_code' => 'AJ68',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 972,
                'country_id' => 16,
                'name' => 'Zangilan',
                'code' => 'ZG',
                'adm1_code' => 'AJ69',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 973,
                'country_id' => 16,
                'name' => 'Zaqatala',
                'code' => 'ZQ',
                'adm1_code' => 'AJ70',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 974,
                'country_id' => 16,
                'name' => 'Zardab',
                'code' => 'ZR',
                'adm1_code' => 'AJ71',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 975,
                'country_id' => 2,
                'name' => 'Berat',
                'code' => 'BR',
                'adm1_code' => 'AL01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 976,
                'country_id' => 2,
                'name' => 'Diber',
                'code' => 'DI',
                'adm1_code' => 'AL02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 977,
                'country_id' => 2,
                'name' => 'Durres',
                'code' => 'DR',
                'adm1_code' => 'AL03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 978,
                'country_id' => 2,
                'name' => 'Elbasan',
                'code' => 'EL',
                'adm1_code' => 'AL04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 979,
                'country_id' => 2,
                'name' => 'Fier',
                'code' => 'FR',
                'adm1_code' => 'AL05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 980,
                'country_id' => 2,
                'name' => 'Gjirokaster',
                'code' => 'GJ',
                'adm1_code' => 'AL06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 981,
                'country_id' => 2,
                'name' => 'Gramsh',
                'code' => 'GR',
                'adm1_code' => 'AL07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 982,
                'country_id' => 2,
                'name' => 'Kolonje',
                'code' => 'ER',
                'adm1_code' => 'AL08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 983,
                'country_id' => 2,
                'name' => 'Korce',
                'code' => 'KO',
                'adm1_code' => 'AL09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 984,
                'country_id' => 2,
                'name' => 'Kruje',
                'code' => 'KR',
                'adm1_code' => 'AL10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 985,
                'country_id' => 2,
                'name' => 'Kukes',
                'code' => 'KU',
                'adm1_code' => 'AL11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 986,
                'country_id' => 2,
                'name' => 'Lezhe',
                'code' => 'LE',
                'adm1_code' => 'AL12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 987,
                'country_id' => 2,
                'name' => 'Librazhd',
                'code' => 'LB',
                'adm1_code' => 'AL13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 988,
                'country_id' => 2,
                'name' => 'Lushnje',
                'code' => 'LU',
                'adm1_code' => 'AL14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 989,
                'country_id' => 2,
                'name' => 'Mat',
                'code' => 'MT',
                'adm1_code' => 'AL15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 990,
                'country_id' => 2,
                'name' => 'Mirdite',
                'code' => 'MR',
                'adm1_code' => 'AL16',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 991,
                'country_id' => 2,
                'name' => 'Permet',
                'code' => 'PR',
                'adm1_code' => 'AL17',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 992,
                'country_id' => 2,
                'name' => 'Pogradec',
                'code' => 'PG',
                'adm1_code' => 'AL18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 993,
                'country_id' => 2,
                'name' => 'Puke',
                'code' => 'PU',
                'adm1_code' => 'AL19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 994,
                'country_id' => 2,
                'name' => 'Sarande',
                'code' => 'SR',
                'adm1_code' => 'AL20',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 995,
                'country_id' => 2,
                'name' => 'Shkoder',
                'code' => 'SH',
                'adm1_code' => 'AL21',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 996,
                'country_id' => 2,
                'name' => 'Skrapar',
                'code' => 'SK',
                'adm1_code' => 'AL22',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 997,
                'country_id' => 2,
                'name' => 'Tepelene',
                'code' => 'TE',
                'adm1_code' => 'AL23',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 998,
                'country_id' => 2,
                'name' => 'Tropoje',
                'code' => 'TP',
                'adm1_code' => 'AL26',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 999,
                'country_id' => 2,
                'name' => 'Vlore',
                'code' => 'VL',
                'adm1_code' => 'AL27',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1000,
                'country_id' => 2,
                'name' => 'Tiran',
                'code' => 'TI',
                'adm1_code' => 'AL28',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1001,
                'country_id' => 2,
                'name' => 'Bulqize',
                'code' => 'BU',
                'adm1_code' => 'AL29',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1002,
                'country_id' => 2,
                'name' => 'Delvine',
                'code' => 'DL',
                'adm1_code' => 'AL30',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1003,
                'country_id' => 2,
                'name' => 'Devoll',
                'code' => 'DV',
                'adm1_code' => 'AL31',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1004,
                'country_id' => 2,
                'name' => 'Has',
                'code' => 'HA',
                'adm1_code' => 'AL32',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1005,
                'country_id' => 2,
                'name' => 'Kavaje',
                'code' => 'KA',
                'adm1_code' => 'AL33',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1006,
                'country_id' => 2,
                'name' => 'Kucove',
                'code' => 'KC',
                'adm1_code' => 'AL34',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1007,
                'country_id' => 2,
                'name' => 'Kurbin',
                'code' => 'KB',
                'adm1_code' => 'AL35',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1008,
                'country_id' => 2,
                'name' => 'Malesi e Madhe',
                'code' => 'MM',
                'adm1_code' => 'AL36',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1009,
                'country_id' => 2,
                'name' => 'Mallakaster',
                'code' => 'MK',
                'adm1_code' => 'AL37',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1010,
                'country_id' => 2,
                'name' => 'Peqin',
                'code' => 'PQ',
                'adm1_code' => 'AL38',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1011,
                'country_id' => 2,
                'name' => 'Tirane',
                'code' => 'TR',
                'adm1_code' => 'AL39',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1012,
                'country_id' => 11,
                'name' => 'Aragatsotn',
                'code' => 'AG',
                'adm1_code' => 'AM01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1013,
                'country_id' => 11,
                'name' => 'Ararat',
                'code' => 'AR',
                'adm1_code' => 'AM02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1014,
                'country_id' => 11,
                'name' => 'Armavir',
                'code' => 'AV',
                'adm1_code' => 'AM03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1015,
                'country_id' => 11,
                'name' => 'Geghark\'unik\'',
                'code' => 'GR',
                'adm1_code' => 'AM04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1016,
                'country_id' => 11,
                'name' => 'Kotayk\'',
                'code' => 'KT',
                'adm1_code' => 'AM05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1017,
                'country_id' => 11,
                'name' => 'Lorri',
                'code' => 'LO',
                'adm1_code' => 'AM06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1018,
                'country_id' => 11,
                'name' => 'Shirak',
                'code' => 'SH',
                'adm1_code' => 'AM07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1019,
                'country_id' => 11,
                'name' => 'Syunik\'',
                'code' => 'SU',
                'adm1_code' => 'AM08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1020,
                'country_id' => 11,
                'name' => 'Tavush',
                'code' => 'TV',
                'adm1_code' => 'AM09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 1021,
                'country_id' => 11,
                'name' => 'Vayots\' Dzor',
                'code' => 'VD',
                'adm1_code' => 'AM10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 1022,
                'country_id' => 11,
                'name' => 'Yerevan',
                'code' => 'ER',
                'adm1_code' => 'AM11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 1023,
                'country_id' => 5,
                'name' => 'Andorra la Vella',
                'code' => 'AN',
                'adm1_code' => 'AN07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 1024,
                'country_id' => 5,
                'name' => 'Canillo',
                'code' => 'CA',
                'adm1_code' => 'AN02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 1025,
                'country_id' => 5,
                'name' => 'Encamp',
                'code' => 'EN',
                'adm1_code' => 'AN03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 1026,
                'country_id' => 5,
                'name' => 'La Massana',
                'code' => 'MA',
                'adm1_code' => 'AN04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 1027,
                'country_id' => 5,
                'name' => 'Ordino',
                'code' => 'OR',
                'adm1_code' => 'AN05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 1028,
                'country_id' => 5,
                'name' => 'Sant Julia de Loria',
                'code' => 'JL',
                'adm1_code' => 'AN06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 1029,
                'country_id' => 6,
                'name' => 'Benguela',
                'code' => 'BG',
                'adm1_code' => 'AO01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 1030,
                'country_id' => 6,
                'name' => 'Bie',
                'code' => 'BI',
                'adm1_code' => 'AO02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 1031,
                'country_id' => 6,
                'name' => 'Cabinda',
                'code' => 'CB',
                'adm1_code' => 'AO03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 1032,
                'country_id' => 6,
                'name' => 'Cuando Cubango',
                'code' => 'CC',
                'adm1_code' => 'AO04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 1033,
                'country_id' => 6,
                'name' => 'Cuanza Norte',
                'code' => 'CN',
                'adm1_code' => 'AO05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 1034,
                'country_id' => 6,
                'name' => 'Cuanza Sul',
                'code' => 'CS',
                'adm1_code' => 'AO06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 1035,
                'country_id' => 6,
                'name' => 'Cunene',
                'code' => 'CU',
                'adm1_code' => 'AO07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 1036,
                'country_id' => 6,
                'name' => 'Huambo',
                'code' => 'HM',
                'adm1_code' => 'AO08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 1037,
                'country_id' => 6,
                'name' => 'Huila',
                'code' => 'HL',
                'adm1_code' => 'AO09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 1038,
                'country_id' => 6,
                'name' => 'Luanda',
                'code' => 'LU',
                'adm1_code' => 'AO10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 1039,
                'country_id' => 6,
                'name' => 'Malanje',
                'code' => 'ML',
                'adm1_code' => 'AO12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 1040,
                'country_id' => 6,
                'name' => 'Namibe',
                'code' => 'NA',
                'adm1_code' => 'AO13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 1041,
                'country_id' => 6,
                'name' => 'Moxico',
                'code' => 'MX',
                'adm1_code' => 'AO14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 1046,
                'country_id' => 6,
                'name' => 'Uige',
                'code' => 'UI',
                'adm1_code' => 'AO15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 1048,
                'country_id' => 6,
                'name' => 'Lunda Norte',
                'code' => 'LN',
                'adm1_code' => 'AO17',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 1049,
                'country_id' => 6,
                'name' => 'Lunda Sul',
                'code' => 'LS',
                'adm1_code' => 'AO18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 1050,
                'country_id' => 6,
                'name' => 'Bengo',
                'code' => 'BO',
                'adm1_code' => 'AO19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 1051,
                'country_id' => 10,
                'name' => 'Buenos Aires',
                'code' => 'BA',
                'adm1_code' => 'AR01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 1052,
                'country_id' => 10,
                'name' => 'Catamarca',
                'code' => 'CT',
                'adm1_code' => 'AR02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 1053,
                'country_id' => 10,
                'name' => 'Chaco',
                'code' => 'CC',
                'adm1_code' => 'AR03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 1054,
                'country_id' => 10,
                'name' => 'Chubut',
                'code' => 'CH',
                'adm1_code' => 'AR04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 1055,
                'country_id' => 10,
                'name' => 'Cordoba',
                'code' => 'CB',
                'adm1_code' => 'AR05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 1056,
                'country_id' => 10,
                'name' => 'Corrientes',
                'code' => 'CN',
                'adm1_code' => 'AR06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 1057,
                'country_id' => 10,
                'name' => 'Distrito Federal',
                'code' => 'DF',
                'adm1_code' => 'AR07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 1058,
                'country_id' => 10,
                'name' => 'Entre Rios',
                'code' => 'ER',
                'adm1_code' => 'AR08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 1059,
                'country_id' => 10,
                'name' => 'Formosa',
                'code' => 'FM',
                'adm1_code' => 'AR09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 1060,
                'country_id' => 10,
                'name' => 'Jujuy',
                'code' => 'JY',
                'adm1_code' => 'AR10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 1061,
                'country_id' => 10,
                'name' => 'La Pampa',
                'code' => 'LP',
                'adm1_code' => 'AR11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 1062,
                'country_id' => 10,
                'name' => 'La Rioja',
                'code' => 'LR',
                'adm1_code' => 'AR12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 1063,
                'country_id' => 10,
                'name' => 'Mendoza',
                'code' => 'MZ',
                'adm1_code' => 'AR13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 1064,
                'country_id' => 10,
                'name' => 'Misiones',
                'code' => 'MN',
                'adm1_code' => 'AR14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 1065,
                'country_id' => 10,
                'name' => 'Neuquen',
                'code' => 'NQ',
                'adm1_code' => 'AR15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 1066,
                'country_id' => 10,
                'name' => 'Rio Negro',
                'code' => 'RN',
                'adm1_code' => 'AR16',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 1067,
                'country_id' => 10,
                'name' => 'Salta',
                'code' => 'SA',
                'adm1_code' => 'AR17',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 1068,
                'country_id' => 10,
                'name' => 'San Juan',
                'code' => 'SJ',
                'adm1_code' => 'AR18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 1069,
                'country_id' => 10,
                'name' => 'San Luis',
                'code' => 'SL',
                'adm1_code' => 'AR19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 1070,
                'country_id' => 10,
                'name' => 'Santa Cruz',
                'code' => 'SC',
                'adm1_code' => 'AR20',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 1071,
                'country_id' => 10,
                'name' => 'Santa Fe',
                'code' => 'SF',
                'adm1_code' => 'AR21',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 1072,
                'country_id' => 10,
                'name' => 'Santiago del Estero',
                'code' => 'SE',
                'adm1_code' => 'AR22',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 1073,
                'country_id' => 10,
                'name' => 'Antartida e Islas del Atlan Tierra del Fuego',
                'code' => 'TF',
                'adm1_code' => 'AR23',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 1074,
                'country_id' => 10,
                'name' => 'Tucuman',
                'code' => 'TM',
                'adm1_code' => 'AR24',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 1075,
                'country_id' => 15,
                'name' => 'Burgenland',
                'code' => 'BU',
                'adm1_code' => 'AU01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 1076,
                'country_id' => 15,
                'name' => 'Karnten',
                'code' => 'KA',
                'adm1_code' => 'AU02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 1077,
                'country_id' => 15,
                'name' => 'Niederosterreich',
                'code' => 'NO',
                'adm1_code' => 'AU03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 1078,
                'country_id' => 15,
                'name' => 'Oberosterreich',
                'code' => 'OO',
                'adm1_code' => 'AU04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 1079,
                'country_id' => 15,
                'name' => 'Salzburg',
                'code' => 'SZ',
                'adm1_code' => 'AU05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 1080,
                'country_id' => 15,
                'name' => 'Steiermark',
                'code' => 'ST',
                'adm1_code' => 'AU06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 1081,
                'country_id' => 15,
                'name' => 'Tirol',
                'code' => 'TR',
                'adm1_code' => 'AU07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 1082,
                'country_id' => 15,
                'name' => 'Vorarlberg',
                'code' => 'VO',
                'adm1_code' => 'AU08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 1083,
                'country_id' => 15,
                'name' => 'Wien',
                'code' => 'WI',
                'adm1_code' => 'AU09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 1084,
                'country_id' => 18,
                'name' => 'Al Hadd',
                'code' => 'HD',
                'adm1_code' => 'BA01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 1085,
                'country_id' => 18,
                'name' => 'Al Manamah',
                'code' => 'MN',
                'adm1_code' => 'BA02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 1086,
                'country_id' => 18,
                'name' => 'Al Muharraq',
                'code' => 'MQ',
                'adm1_code' => 'BA03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 1087,
                'country_id' => 18,
                'name' => 'Jidd Hafs',
                'code' => 'JH',
                'adm1_code' => 'BA05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 1088,
                'country_id' => 18,
                'name' => 'Sitrah',
                'code' => 'ST',
                'adm1_code' => 'BA06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 1090,
                'country_id' => 18,
                'name' => 'Al Mintaqah al Gharbiyah',
                'code' => 'MG',
                'adm1_code' => 'BA08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 1091,
                'country_id' => 18,
                'name' => 'Mintaqat Juzur Hawar',
                'code' => 'MJ',
                'adm1_code' => 'BA09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 1092,
                'country_id' => 18,
                'name' => 'Al Mintaqah ash Shamaliyah',
                'code' => 'MS',
                'adm1_code' => 'BA10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 1093,
                'country_id' => 18,
                'name' => 'Al Mintaqah al Wusta',
                'code' => 'MW',
                'adm1_code' => 'BA11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 1094,
                'country_id' => 18,
                'name' => 'Madinat Isa',
                'code' => 'MI',
                'adm1_code' => 'BA12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 1096,
                'country_id' => 18,
                'name' => 'Madinat Hamad',
                'code' => 'MH',
                'adm1_code' => 'BA14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 1097,
                'country_id' => 21,
                'name' => 'Christ Church',
                'code' => 'CC',
                'adm1_code' => 'BB01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 1098,
                'country_id' => 21,
                'name' => 'Saint Andrew',
                'code' => 'AN',
                'adm1_code' => 'BB02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 1099,
                'country_id' => 21,
                'name' => 'Saint George',
                'code' => 'GE',
                'adm1_code' => 'BB03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 1100,
                'country_id' => 21,
                'name' => 'Saint James',
                'code' => 'JM',
                'adm1_code' => 'BB04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 1101,
                'country_id' => 21,
                'name' => 'Saint John',
                'code' => 'JN',
                'adm1_code' => 'BB05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 1102,
                'country_id' => 21,
                'name' => 'Saint Joseph',
                'code' => 'JS',
                'adm1_code' => 'BB06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 1103,
                'country_id' => 21,
                'name' => 'Saint Lucy',
                'code' => 'LU',
                'adm1_code' => 'BB07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 1104,
                'country_id' => 21,
                'name' => 'Saint Michael',
                'code' => 'MI',
                'adm1_code' => 'BB08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 1105,
                'country_id' => 21,
                'name' => 'Saint Peter',
                'code' => 'PE',
                'adm1_code' => 'BB09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 1106,
                'country_id' => 21,
                'name' => 'Saint Philip',
                'code' => 'PH',
                'adm1_code' => 'BB10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 1107,
                'country_id' => 21,
                'name' => 'Saint Thomas',
                'code' => 'TH',
                'adm1_code' => 'BB11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 1108,
                'country_id' => 31,
                'name' => 'Central',
                'code' => 'CE',
                'adm1_code' => 'BC01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 1109,
                'country_id' => 31,
                'name' => 'Chobe',
                'code' => 'CH',
                'adm1_code' => 'BC02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 1110,
                'country_id' => 31,
                'name' => 'Ghanzi',
                'code' => 'GH',
                'adm1_code' => 'BC03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 1111,
                'country_id' => 31,
                'name' => 'Kgalagadi',
                'code' => 'KG',
                'adm1_code' => 'BC04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 1112,
                'country_id' => 31,
                'name' => 'Kgatleng',
                'code' => 'KL',
                'adm1_code' => 'BC05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 1113,
                'country_id' => 31,
                'name' => 'Kweneng',
                'code' => 'KW',
                'adm1_code' => 'BC06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 1114,
                'country_id' => 31,
                'name' => 'Ngamiland',
                'code' => 'NG',
                'adm1_code' => 'BC07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 1115,
                'country_id' => 31,
                'name' => 'NorthEast',
                'code' => 'NE',
                'adm1_code' => 'BC08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 1116,
                'country_id' => 31,
                'name' => 'SouthEast',
                'code' => 'SE',
                'adm1_code' => 'BC09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 1117,
                'country_id' => 31,
                'name' => 'Southern',
                'code' => 'SO',
                'adm1_code' => 'BC10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 1118,
                'country_id' => 27,
                'name' => 'Devonshire',
                'code' => 'DE',
                'adm1_code' => 'BD01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 1119,
                'country_id' => 27,
                'name' => 'Hamilton Municipality',
                'code' => 'HC',
                'adm1_code' => 'BD03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 1121,
                'country_id' => 27,
                'name' => 'Paget',
                'code' => 'PA',
                'adm1_code' => 'BD04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 1122,
                'country_id' => 27,
                'name' => 'Pembroke',
                'code' => 'PE',
                'adm1_code' => 'BD05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 1123,
                'country_id' => 27,
                'name' => 'Saint George',
                'code' => 'SG',
                'adm1_code' => 'BD06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 1124,
                'country_id' => 27,
                'name' => 'Saint George\'s',
                'code' => 'SC',
                'adm1_code' => 'BD07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 1125,
                'country_id' => 27,
                'name' => 'Sandys',
                'code' => 'SA',
                'adm1_code' => 'BD08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 1126,
                'country_id' => 27,
                'name' => 'Smiths',
                'code' => 'SM',
                'adm1_code' => 'BD09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 1127,
                'country_id' => 27,
                'name' => 'Southampton',
                'code' => 'SO',
                'adm1_code' => 'BD10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 1128,
                'country_id' => 27,
                'name' => 'Warwick',
                'code' => 'WA',
                'adm1_code' => 'BD11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 1129,
                'country_id' => 24,
                'name' => 'Antwerpen',
                'code' => 'AN',
                'adm1_code' => 'BE01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 1131,
                'country_id' => 24,
                'name' => 'Hainaut',
                'code' => 'HT',
                'adm1_code' => 'BE03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 1132,
                'country_id' => 24,
                'name' => 'Liege',
                'code' => 'LG',
                'adm1_code' => 'BE04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 1133,
                'country_id' => 24,
                'name' => 'Limburg',
                'code' => 'LI',
                'adm1_code' => 'BE05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 1135,
                'country_id' => 24,
                'name' => 'Namur',
                'code' => 'NA',
                'adm1_code' => 'BE07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 1136,
                'country_id' => 24,
                'name' => 'Oost-Vlaanderen',
                'code' => 'OV',
                'adm1_code' => 'BE08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 1137,
                'country_id' => 24,
                'name' => 'West-Vlaanderen',
                'code' => 'WV',
                'adm1_code' => 'BE09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 1138,
                'country_id' => 17,
                'name' => 'Bimini',
                'code' => 'BI',
                'adm1_code' => 'BF05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 1139,
                'country_id' => 17,
                'name' => 'Cat Island',
                'code' => 'CI',
                'adm1_code' => 'BF06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 1140,
                'country_id' => 17,
                'name' => 'Exuma',
                'code' => 'EX',
                'adm1_code' => 'BF10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 1143,
                'country_id' => 17,
                'name' => 'Inagua',
                'code' => 'IN',
                'adm1_code' => 'BF13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 1144,
                'country_id' => 17,
                'name' => 'Long Island',
                'code' => 'LI',
                'adm1_code' => 'BF15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 1145,
                'country_id' => 17,
                'name' => 'Mayaguana',
                'code' => 'MG',
                'adm1_code' => 'BF16',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 1146,
                'country_id' => 17,
                'name' => 'Ragged Island',
                'code' => 'RI',
                'adm1_code' => 'BF18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 1147,
                'country_id' => 17,
                'name' => 'Harbour Island',
                'code' => 'HI',
                'adm1_code' => 'BF22',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 1148,
                'country_id' => 17,
                'name' => 'New Providence',
                'code' => 'NP',
                'adm1_code' => 'BF23',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 1149,
                'country_id' => 17,
                'name' => 'Acklins and Crooked Islands',
                'code' => 'AC',
                'adm1_code' => 'BF24',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 1150,
                'country_id' => 17,
                'name' => 'Freeport',
                'code' => 'FP',
                'adm1_code' => 'BF25',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 1151,
                'country_id' => 17,
                'name' => 'Fresh Creek',
                'code' => 'FC',
                'adm1_code' => 'BF26',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 1152,
                'country_id' => 17,
                'name' => 'Governor\'s Harbour',
                'code' => 'GH',
                'adm1_code' => 'BF27',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 1153,
                'country_id' => 17,
                'name' => 'Green Turtle Cay',
                'code' => 'GT',
                'adm1_code' => 'BF28',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 1154,
                'country_id' => 17,
                'name' => 'High Rock',
                'code' => 'HR',
                'adm1_code' => 'BF29',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 1155,
                'country_id' => 17,
                'name' => 'Kemps Bay',
                'code' => 'KB',
                'adm1_code' => 'BF30',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 1156,
                'country_id' => 17,
                'name' => 'Marsh Harbour',
                'code' => 'MH',
                'adm1_code' => 'BF31',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 1157,
                'country_id' => 17,
                'name' => 'Nichollstown and Berry Islands',
                'code' => 'NB',
                'adm1_code' => 'BF32',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 1158,
                'country_id' => 17,
                'name' => 'Rock Sound',
                'code' => 'RS',
                'adm1_code' => 'BF33',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 1159,
                'country_id' => 17,
                'name' => 'Sandy Point',
                'code' => 'SP',
                'adm1_code' => 'BF34',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 1160,
                'country_id' => 17,
                'name' => 'San Salvador and Rum Cay',
                'code' => 'SR',
                'adm1_code' => 'BF35',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 1161,
                'country_id' => 20,
                'name' => 'Chittagong',
                'code' => 'CG',
                'adm1_code' => 'BG80',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 1162,
                'country_id' => 20,
                'name' => 'Dhaka',
                'code' => 'DA',
                'adm1_code' => 'BG81',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 1163,
                'country_id' => 20,
                'name' => 'Khulna',
                'code' => 'KH',
                'adm1_code' => 'BG82',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 1164,
                'country_id' => 20,
                'name' => 'Rajshahi',
                'code' => 'RJ',
                'adm1_code' => 'BG83',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 1166,
                'country_id' => 25,
                'name' => 'Cayo',
                'code' => 'CY',
                'adm1_code' => 'BH02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 1167,
                'country_id' => 25,
                'name' => 'Corozal',
                'code' => 'CZ',
                'adm1_code' => 'BH03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 1168,
                'country_id' => 25,
                'name' => 'Orange Walk',
                'code' => 'OW',
                'adm1_code' => 'BH04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 1169,
                'country_id' => 25,
                'name' => 'Stann Creek',
                'code' => 'SC',
                'adm1_code' => 'BH05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 1170,
                'country_id' => 25,
                'name' => 'Toledo',
                'code' => 'TO',
                'adm1_code' => 'BH06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 1171,
                'country_id' => 29,
                'name' => 'Chuquisaca',
                'code' => 'CQ',
                'adm1_code' => 'BL01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 1172,
                'country_id' => 29,
                'name' => 'Cochabamba',
                'code' => 'CB',
                'adm1_code' => 'BL02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 1173,
                'country_id' => 29,
                'name' => 'El Beni',
                'code' => 'EB',
                'adm1_code' => 'BL03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 1174,
                'country_id' => 29,
                'name' => 'La Paz',
                'code' => 'LP',
                'adm1_code' => 'BL04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 1175,
                'country_id' => 29,
                'name' => 'Oruro',
                'code' => 'OR',
                'adm1_code' => 'BL05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 1176,
                'country_id' => 29,
                'name' => 'Pando',
                'code' => 'PA',
                'adm1_code' => 'BL06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 1177,
                'country_id' => 29,
                'name' => 'Potosi',
                'code' => 'PO',
                'adm1_code' => 'BL07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 1178,
                'country_id' => 29,
                'name' => 'Santa Cruz',
                'code' => 'SC',
                'adm1_code' => 'BL08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 1179,
                'country_id' => 29,
                'name' => 'Tarija',
                'code' => 'TR',
                'adm1_code' => 'BL09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 1180,
                'country_id' => 39,
                'name' => 'Rakhine State',
                'code' => 'RA',
                'adm1_code' => 'BM01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 1181,
                'country_id' => 39,
                'name' => 'Chin State',
                'code' => 'CH',
                'adm1_code' => 'BM02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 1182,
                'country_id' => 39,
                'name' => 'Ayeyarwady',
                'code' => 'AY',
                'adm1_code' => 'BM03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 1183,
                'country_id' => 39,
                'name' => 'Kachin State',
                'code' => 'KC',
                'adm1_code' => 'BM04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 1184,
                'country_id' => 39,
                'name' => 'Kayin State',
                'code' => 'KN',
                'adm1_code' => 'BM05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 1185,
                'country_id' => 39,
                'name' => 'Kayah State',
                'code' => 'KH',
                'adm1_code' => 'BM06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 1187,
                'country_id' => 39,
                'name' => 'Mandalay',
                'code' => 'MD',
                'adm1_code' => 'BM08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 1189,
                'country_id' => 39,
                'name' => 'Sagaing',
                'code' => 'SA',
                'adm1_code' => 'BM10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 1190,
                'country_id' => 39,
                'name' => 'Shan State',
                'code' => 'SH',
                'adm1_code' => 'BM11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 1191,
                'country_id' => 39,
                'name' => 'Tanintharyi',
                'code' => 'TN',
                'adm1_code' => 'BM12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 1192,
                'country_id' => 39,
                'name' => 'Mon State',
                'code' => 'MO',
                'adm1_code' => 'BM13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 1194,
                'country_id' => 39,
                'name' => 'Magway',
                'code' => 'MG',
                'adm1_code' => 'BM15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 1195,
                'country_id' => 39,
                'name' => 'Bago',
                'code' => 'BA',
                'adm1_code' => 'BM16',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 1196,
                'country_id' => 39,
                'name' => 'Yangon',
                'code' => 'YA',
                'adm1_code' => 'BM17',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 1197,
                'country_id' => 26,
                'name' => 'Atakora',
                'code' => 'AK',
                'adm1_code' => 'BN01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 1198,
                'country_id' => 26,
                'name' => 'Atlantique',
                'code' => 'AQ',
                'adm1_code' => 'BN02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 1199,
                'country_id' => 26,
                'name' => 'Borgou',
                'code' => 'BO',
                'adm1_code' => 'BN03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1200,
                'country_id' => 26,
                'name' => 'Mono',
                'code' => 'MO',
                'adm1_code' => 'BN04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1201,
                'country_id' => 26,
                'name' => 'Oueme',
                'code' => 'OU',
                'adm1_code' => 'BN05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1202,
                'country_id' => 26,
                'name' => 'Zou',
                'code' => 'ZO',
                'adm1_code' => 'BN06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1203,
                'country_id' => 23,
                'name' => 'Brestskaya Voblasts\'',
                'code' => 'BR',
                'adm1_code' => 'BO01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1204,
                'country_id' => 23,
                'name' => 'Homyel\'skaya Voblasts\'',
                'code' => 'HO',
                'adm1_code' => 'BO02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1205,
                'country_id' => 23,
                'name' => 'Hrodzyenskaya Voblasts\'',
                'code' => 'HR',
                'adm1_code' => 'BO03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1206,
                'country_id' => 23,
                'name' => 'Minsk',
                'code' => 'HM',
                'adm1_code' => 'BO04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1207,
                'country_id' => 23,
                'name' => 'Minskaya Voblasts\'',
                'code' => 'MI',
                'adm1_code' => 'BO05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1208,
                'country_id' => 23,
                'name' => 'Mahilyowskaya Voblasts\'',
                'code' => 'MA',
                'adm1_code' => 'BO06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1209,
                'country_id' => 23,
                'name' => 'Vitsyebskaya Voblasts\'',
                'code' => 'VI',
                'adm1_code' => 'BO07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1210,
                'country_id' => 222,
                'name' => 'Malaita',
                'code' => 'ML',
                'adm1_code' => 'BP03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1211,
                'country_id' => 222,
                'name' => 'Western',
                'code' => 'WE',
                'adm1_code' => 'BP04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1212,
                'country_id' => 222,
                'name' => 'Central',
                'code' => 'CN',
                'adm1_code' => 'BP05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1213,
                'country_id' => 222,
                'name' => 'Guadalcanal',
                'code' => 'GC',
                'adm1_code' => 'BP06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1214,
                'country_id' => 222,
                'name' => 'Isabel',
                'code' => 'IS',
                'adm1_code' => 'BP07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1215,
                'country_id' => 222,
                'name' => 'Makira',
                'code' => 'MK',
                'adm1_code' => 'BP08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1216,
                'country_id' => 222,
                'name' => 'Temotu',
                'code' => 'TE',
                'adm1_code' => 'BP09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1217,
                'country_id' => 33,
                'name' => 'Distrito Federal',
                'code' => 'DF',
                'adm1_code' => 'BR07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1219,
                'country_id' => 33,
                'name' => 'Paro',
                'code' => 'PA',
                'adm1_code' => 'BR16',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1220,
                'country_id' => 33,
                'name' => 'Pernambuco',
                'code' => 'PE',
                'adm1_code' => 'BR19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1221,
                'country_id' => 28,
                'name' => 'Bumthang',
                'code' => 'BU',
                'adm1_code' => 'BT05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1222,
                'country_id' => 28,
                'name' => 'Chhukha',
                'code' => 'CK',
                'adm1_code' => 'BT06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1223,
                'country_id' => 28,
                'name' => 'Chirang',
                'code' => 'CR',
                'adm1_code' => 'BT07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1224,
                'country_id' => 28,
                'name' => 'Daga',
                'code' => 'DA',
                'adm1_code' => 'BT08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1225,
                'country_id' => 28,
                'name' => 'Geylegphug',
                'code' => 'GE',
                'adm1_code' => 'BT09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1226,
                'country_id' => 28,
                'name' => 'Ha',
                'code' => 'HA',
                'adm1_code' => 'BT10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1227,
                'country_id' => 28,
                'name' => 'Lhuntshi',
                'code' => 'LH',
                'adm1_code' => 'BT11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1228,
                'country_id' => 28,
                'name' => 'Mongar',
                'code' => 'MO',
                'adm1_code' => 'BT12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1229,
                'country_id' => 28,
                'name' => 'Paro',
                'code' => 'PR',
                'adm1_code' => 'BT13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1230,
                'country_id' => 28,
                'name' => 'Pemagatsel',
                'code' => 'PM',
                'adm1_code' => 'BT14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1231,
                'country_id' => 28,
                'name' => 'Punakha',
                'code' => 'PN',
                'adm1_code' => 'BT15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1232,
                'country_id' => 28,
                'name' => 'Samchi',
                'code' => 'SM',
                'adm1_code' => 'BT16',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1233,
                'country_id' => 28,
                'name' => 'Samdrup',
                'code' => 'SJ',
                'adm1_code' => 'BT17',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1234,
                'country_id' => 28,
                'name' => 'Shemgang',
                'code' => 'SG',
                'adm1_code' => 'BT18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1235,
                'country_id' => 28,
                'name' => 'Tashigang',
                'code' => 'TA',
                'adm1_code' => 'BT19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1236,
                'country_id' => 28,
                'name' => 'Thimphu',
                'code' => 'TM',
                'adm1_code' => 'BT20',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1237,
                'country_id' => 28,
                'name' => 'Tongsa',
                'code' => 'TO',
                'adm1_code' => 'BT21',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1238,
                'country_id' => 28,
                'name' => 'Wangdi Phodrang',
                'code' => 'WP',
                'adm1_code' => 'BT22',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1239,
                'country_id' => 37,
                'name' => 'Burgas',
                'code' => 'BR',
                'adm1_code' => 'BU39',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1240,
                'country_id' => 37,
                'name' => 'Sofiya-Grad',
                'code' => 'SG',
                'adm1_code' => 'BU42',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1241,
                'country_id' => 37,
                'name' => 'Khaskovo',
                'code' => 'KK',
                'adm1_code' => 'BU43',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1242,
                'country_id' => 37,
                'name' => 'Lovech',
                'code' => 'LV',
                'adm1_code' => 'BU46',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1243,
                'country_id' => 37,
                'name' => 'Montana',
                'code' => 'MT',
                'adm1_code' => 'BU47',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1244,
                'country_id' => 37,
                'name' => 'Plovdiv',
                'code' => 'PD',
                'adm1_code' => 'BU51',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1245,
                'country_id' => 37,
                'name' => 'Razgrad',
                'code' => 'RG',
                'adm1_code' => 'BU52',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1246,
                'country_id' => 37,
                'name' => 'Sofiya',
                'code' => 'SF',
                'adm1_code' => 'BU58',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1247,
                'country_id' => 37,
                'name' => 'Varna',
                'code' => 'VN',
                'adm1_code' => 'BU61',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1248,
                'country_id' => 36,
                'name' => 'Belait',
                'code' => 'BE',
                'adm1_code' => 'BX01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1249,
                'country_id' => 36,
                'name' => 'Brunei and Muara',
                'code' => 'BM',
                'adm1_code' => 'BX02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1250,
                'country_id' => 36,
                'name' => 'Temburong',
                'code' => 'TE',
                'adm1_code' => 'BX03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1251,
                'country_id' => 36,
                'name' => 'Tutong',
                'code' => 'TU',
                'adm1_code' => 'BX04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1252,
                'country_id' => 40,
                'name' => 'Bujumbura',
                'code' => 'BU',
                'adm1_code' => 'BY02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1253,
                'country_id' => 40,
                'name' => 'Muramvya',
                'code' => 'MV',
                'adm1_code' => 'BY22',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1254,
                'country_id' => 40,
                'name' => 'Bubanza',
                'code' => 'BB',
                'adm1_code' => 'BY09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1255,
                'country_id' => 40,
                'name' => 'Bururi',
                'code' => 'BR',
                'adm1_code' => 'BY10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1256,
                'country_id' => 40,
                'name' => 'Cankuzo',
                'code' => 'CA',
                'adm1_code' => 'BY11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1257,
                'country_id' => 40,
                'name' => 'Cibitoke',
                'code' => 'CI',
                'adm1_code' => 'BY12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1258,
                'country_id' => 40,
                'name' => 'Gitega',
                'code' => 'GI',
                'adm1_code' => 'BY13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1259,
                'country_id' => 40,
                'name' => 'Karuzi',
                'code' => 'KR',
                'adm1_code' => 'BY14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1260,
                'country_id' => 40,
                'name' => 'Kayanza',
                'code' => 'KY',
                'adm1_code' => 'BY15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1261,
                'country_id' => 40,
                'name' => 'Kirundo',
                'code' => 'KI',
                'adm1_code' => 'BY16',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1262,
                'country_id' => 40,
                'name' => 'Makamba',
                'code' => 'MA',
                'adm1_code' => 'BY17',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1263,
                'country_id' => 40,
                'name' => 'Muyinga',
                'code' => 'MY',
                'adm1_code' => 'BY18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1264,
                'country_id' => 40,
                'name' => 'Ngozi',
                'code' => 'NG',
                'adm1_code' => 'BY19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1265,
                'country_id' => 40,
                'name' => 'Rutana',
                'code' => 'RT',
                'adm1_code' => 'BY20',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1266,
                'country_id' => 40,
                'name' => 'Ruyigi',
                'code' => 'RY',
                'adm1_code' => 'BY21',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1267,
                'country_id' => 41,
                'name' => 'Batdambang',
                'code' => 'BA',
                'adm1_code' => 'CB29',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1268,
                'country_id' => 41,
                'name' => 'Kampong Cham',
                'code' => 'KM',
                'adm1_code' => 'CB02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1269,
                'country_id' => 41,
                'name' => 'Kampong Chhnang',
                'code' => 'KG',
                'adm1_code' => 'CB03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1270,
                'country_id' => 41,
                'name' => 'Kampong Spoe',
                'code' => 'KS',
                'adm1_code' => 'CB04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1271,
                'country_id' => 41,
                'name' => 'Kampong Thum',
                'code' => 'KT',
                'adm1_code' => 'CB05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1272,
                'country_id' => 41,
                'name' => 'Kampot',
                'code' => 'KP',
                'adm1_code' => 'CB21',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1273,
                'country_id' => 41,
                'name' => 'Kandal',
                'code' => 'KN',
                'adm1_code' => 'CB07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1274,
                'country_id' => 41,
                'name' => 'Kaoh Kong',
                'code' => 'KK',
                'adm1_code' => 'CB08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1275,
                'country_id' => 41,
                'name' => 'Krachen',
                'code' => 'KR',
                'adm1_code' => 'CB09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1276,
                'country_id' => 41,
                'name' => 'Mondol Kiri',
                'code' => 'MK',
                'adm1_code' => 'CB10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1277,
                'country_id' => 41,
                'name' => 'Phnum Penh',
                'code' => 'PP',
                'adm1_code' => 'CB22',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1278,
                'country_id' => 41,
                'name' => 'Pouthisat',
                'code' => 'PO',
                'adm1_code' => 'CB12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1279,
                'country_id' => 41,
                'name' => 'Preah Vihear',
                'code' => 'PH',
                'adm1_code' => 'CB13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1280,
                'country_id' => 41,
                'name' => 'Prey Veng',
                'code' => 'PY',
                'adm1_code' => 'CB14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1283,
                'country_id' => 41,
                'name' => 'Stoeng Treng',
                'code' => 'ST',
                'adm1_code' => 'CB17',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1284,
                'country_id' => 41,
                'name' => 'Svay Rieng',
                'code' => 'SR',
                'adm1_code' => 'CB18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1285,
                'country_id' => 41,
                'name' => 'Takev',
                'code' => 'TA',
                'adm1_code' => 'CB19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1286,
                'country_id' => 41,
                'name' => 'Rotanah Kiri',
                'code' => 'RO',
                'adm1_code' => 'CB23',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1287,
                'country_id' => 41,
                'name' => 'Siem Reab',
                'code' => 'SI',
                'adm1_code' => 'CB24',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1288,
                'country_id' => 41,
                'name' => 'Banteay Mean Cheay',
                'code' => 'OM',
                'adm1_code' => 'CB25',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1289,
                'country_id' => 41,
                'name' => 'Keb',
                'code' => 'KB',
                'adm1_code' => 'CB26',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1290,
                'country_id' => 41,
                'name' => 'Otdar Mean Cheay',
                'code' => 'OC',
                'adm1_code' => 'CB27',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1291,
                'country_id' => 41,
                'name' => 'Preah Seihanu',
                'code' => 'KA',
                'adm1_code' => 'CB28',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1292,
                'country_id' => 47,
                'name' => 'Batha',
                'code' => 'BA',
                'adm1_code' => 'CD01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1293,
                'country_id' => 47,
                'name' => 'Biltine',
                'code' => 'BI',
                'adm1_code' => 'CD02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1294,
                'country_id' => 47,
                'name' => 'Borkou-Ennedi-Tibesti',
                'code' => 'BT',
                'adm1_code' => 'CD03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1295,
                'country_id' => 47,
                'name' => 'ChariBaguirmi',
                'code' => 'CB',
                'adm1_code' => 'CD04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1296,
                'country_id' => 47,
                'name' => 'Guera',
                'code' => 'GR',
                'adm1_code' => 'CD05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1297,
                'country_id' => 47,
                'name' => 'Kanem',
                'code' => 'KA',
                'adm1_code' => 'CD06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1298,
                'country_id' => 47,
                'name' => 'Lac',
                'code' => 'LC',
                'adm1_code' => 'CD07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1299,
                'country_id' => 47,
                'name' => 'Logone Occidental',
                'code' => 'LO',
                'adm1_code' => 'CD08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1300,
                'country_id' => 47,
                'name' => 'Logone Oriental',
                'code' => 'LR',
                'adm1_code' => 'CD09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1301,
                'country_id' => 47,
                'name' => 'Mayo-Kebbi',
                'code' => 'MK',
                'adm1_code' => 'CD10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1302,
                'country_id' => 47,
                'name' => 'Moyen-Chari',
                'code' => 'MC',
                'adm1_code' => 'CD11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1303,
                'country_id' => 47,
                'name' => 'Ouaddai',
                'code' => 'OD',
                'adm1_code' => 'CD12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1304,
                'country_id' => 47,
                'name' => 'Salamat',
                'code' => 'SA',
                'adm1_code' => 'CD13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1305,
                'country_id' => 47,
                'name' => 'Tandjile',
                'code' => 'TA',
                'adm1_code' => 'CD14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1306,
                'country_id' => 228,
                'name' => 'Central',
                'code' => 'CE',
                'adm1_code' => 'CE29',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1307,
                'country_id' => 228,
                'name' => 'North Central',
                'code' => 'NC',
                'adm1_code' => 'CE30',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1308,
                'country_id' => 228,
                'name' => 'North Eastern',
                'code' => 'NE',
                'adm1_code' => 'CE31',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1309,
                'country_id' => 228,
                'name' => 'North Western',
                'code' => 'NW',
                'adm1_code' => 'CE32',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1310,
                'country_id' => 228,
                'name' => 'Sabaragamuwa',
                'code' => 'SA',
                'adm1_code' => 'CE33',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1311,
                'country_id' => 228,
                'name' => 'Southern',
                'code' => 'SO',
                'adm1_code' => 'CE34',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1312,
                'country_id' => 228,
                'name' => 'Uva',
                'code' => 'UV',
                'adm1_code' => 'CE35',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1313,
                'country_id' => 228,
                'name' => 'Western',
                'code' => 'WE',
                'adm1_code' => 'CE36',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1314,
                'country_id' => 56,
                'name' => 'Bouenza',
                'code' => 'BO',
                'adm1_code' => 'CF01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1315,
                'country_id' => 56,
                'name' => 'Cuvette',
                'code' => 'CU',
                'adm1_code' => 'CF03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1316,
                'country_id' => 56,
                'name' => 'Kouilou',
                'code' => 'KO',
                'adm1_code' => 'CF04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1317,
                'country_id' => 56,
                'name' => 'Lekoumou',
                'code' => 'LE',
                'adm1_code' => 'CF05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1318,
                'country_id' => 56,
                'name' => 'Likouala',
                'code' => 'LI',
                'adm1_code' => 'CF06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1319,
                'country_id' => 56,
                'name' => 'Niari',
                'code' => 'NI',
                'adm1_code' => 'CF07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1320,
                'country_id' => 56,
                'name' => 'Plateaux',
                'code' => 'PL',
                'adm1_code' => 'CF08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1321,
                'country_id' => 56,
                'name' => 'Sangha',
                'code' => 'SA',
                'adm1_code' => 'CF10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1322,
                'country_id' => 56,
                'name' => 'Pool',
                'code' => 'PO',
                'adm1_code' => 'CF11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1323,
                'country_id' => 56,
                'name' => 'Brazzaville',
                'code' => 'BR',
                'adm1_code' => 'CF12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1324,
                'country_id' => 55,
                'name' => 'Bandundu',
                'code' => 'BN',
                'adm1_code' => 'CG01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1325,
                'country_id' => 55,
                'name' => 'Equateur',
                'code' => 'EQ',
                'adm1_code' => 'CG02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1326,
                'country_id' => 55,
                'name' => 'Kasai-Occidental',
                'code' => 'KC',
                'adm1_code' => 'CG03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1327,
                'country_id' => 55,
                'name' => 'Kasai-Oriental',
                'code' => 'KR',
                'adm1_code' => 'CG04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1328,
                'country_id' => 55,
                'name' => 'Katanga',
                'code' => 'KT',
                'adm1_code' => 'CG05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1329,
                'country_id' => 55,
                'name' => 'Kinshasa',
                'code' => 'KN',
                'adm1_code' => 'CG06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1331,
                'country_id' => 55,
                'name' => 'Bas-Congo',
                'code' => 'BC',
                'adm1_code' => 'CG08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1332,
                'country_id' => 55,
                'name' => 'Orientale',
                'code' => 'HC',
                'adm1_code' => 'CG09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1333,
                'country_id' => 49,
                'name' => 'Anhui',
                'code' => 'AH',
                'adm1_code' => 'CH01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1334,
                'country_id' => 49,
                'name' => 'Zhejiang',
                'code' => 'ZJ',
                'adm1_code' => 'CH02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1335,
                'country_id' => 49,
                'name' => 'Jiangxi',
                'code' => 'JX',
                'adm1_code' => 'CH03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1336,
                'country_id' => 49,
                'name' => 'Jiangsu',
                'code' => 'JS',
                'adm1_code' => 'CH04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1337,
                'country_id' => 49,
                'name' => 'Jilin',
                'code' => 'JL',
                'adm1_code' => 'CH05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1338,
                'country_id' => 49,
                'name' => 'Qinghai',
                'code' => 'QH',
                'adm1_code' => 'CH06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1339,
                'country_id' => 49,
                'name' => 'Fujian',
                'code' => 'FJ',
                'adm1_code' => 'CH07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1340,
                'country_id' => 49,
                'name' => 'Heilongjiang',
                'code' => 'HL',
                'adm1_code' => 'CH08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1341,
                'country_id' => 49,
                'name' => 'Henan',
                'code' => 'HE',
                'adm1_code' => 'CH09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1342,
                'country_id' => 49,
                'name' => 'Hebei',
                'code' => 'HB',
                'adm1_code' => 'CH10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1343,
                'country_id' => 49,
                'name' => 'Hunan',
                'code' => 'HN',
                'adm1_code' => 'CH11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1344,
                'country_id' => 49,
                'name' => 'Hubei',
                'code' => 'HU',
                'adm1_code' => 'CH12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1345,
                'country_id' => 49,
                'name' => 'Xinjiang',
                'code' => 'XJ',
                'adm1_code' => 'CH13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1346,
                'country_id' => 49,
                'name' => 'Xizang',
                'code' => 'XZ',
                'adm1_code' => 'CH14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1347,
                'country_id' => 49,
                'name' => 'Gansu',
                'code' => 'GS',
                'adm1_code' => 'CH15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1348,
                'country_id' => 49,
                'name' => 'Guangxi',
                'code' => 'GX',
                'adm1_code' => 'CH16',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1349,
                'country_id' => 49,
                'name' => 'Guizhou',
                'code' => 'GZ',
                'adm1_code' => 'CH18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1350,
                'country_id' => 49,
                'name' => 'Liaoning',
                'code' => 'LN',
                'adm1_code' => 'CH19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1351,
                'country_id' => 49,
                'name' => 'Nei Mongol',
                'code' => 'NM',
                'adm1_code' => 'CH20',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1352,
                'country_id' => 49,
                'name' => 'Ningxia',
                'code' => 'NX',
                'adm1_code' => 'CH21',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1353,
                'country_id' => 49,
                'name' => 'Beijing',
                'code' => 'BJ',
                'adm1_code' => 'CH22',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1354,
                'country_id' => 49,
                'name' => 'Shanghai',
                'code' => 'SH',
                'adm1_code' => 'CH23',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1355,
                'country_id' => 49,
                'name' => 'Shanxi',
                'code' => 'SX',
                'adm1_code' => 'CH24',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1356,
                'country_id' => 49,
                'name' => 'Shandong',
                'code' => 'SD',
                'adm1_code' => 'CH25',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1357,
                'country_id' => 49,
                'name' => 'Shaanxi',
                'code' => 'SA',
                'adm1_code' => 'CH26',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1358,
                'country_id' => 49,
                'name' => 'Sichuan',
                'code' => 'SC',
                'adm1_code' => 'CH32',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1359,
                'country_id' => 49,
                'name' => 'Tianjin',
                'code' => 'TJ',
                'adm1_code' => 'CH28',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1360,
                'country_id' => 49,
                'name' => 'Yunnan',
                'code' => 'YN',
                'adm1_code' => 'CH29',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1361,
                'country_id' => 49,
                'name' => 'Guangdong',
                'code' => 'GD',
                'adm1_code' => 'CH30',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1362,
                'country_id' => 49,
                'name' => 'Hainan',
                'code' => 'HA',
                'adm1_code' => 'CH31',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1363,
                'country_id' => 49,
                'name' => 'Chongqing',
                'code' => 'CQ',
                'adm1_code' => 'CH33',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1364,
                'country_id' => 48,
                'name' => 'Valparaiso',
                'code' => 'VS',
                'adm1_code' => 'CI01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1365,
                'country_id' => 48,
                'name' => 'Aisen del General Carlos Ibanez del Campo',
                'code' => 'AI',
                'adm1_code' => 'CI02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1366,
                'country_id' => 48,
                'name' => 'Antofagasta',
                'code' => 'AN',
                'adm1_code' => 'CI03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1367,
                'country_id' => 48,
                'name' => 'Araucania',
                'code' => 'AR',
                'adm1_code' => 'CI04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1368,
                'country_id' => 48,
                'name' => 'Atacama',
                'code' => 'AT',
                'adm1_code' => 'CI05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1369,
                'country_id' => 48,
                'name' => 'Bio-Bio',
                'code' => 'BI',
                'adm1_code' => 'CI06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1370,
                'country_id' => 48,
                'name' => 'Coquimbo',
                'code' => 'CO',
                'adm1_code' => 'CI07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1371,
                'country_id' => 48,
                'name' => 'Libertador General Bernardo O\'Higgins',
                'code' => 'LI',
                'adm1_code' => 'CI08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1372,
                'country_id' => 48,
                'name' => 'Los Lagos',
                'code' => 'LL',
                'adm1_code' => 'CI09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1373,
                'country_id' => 48,
                'name' => 'Magallanes y de la Antartica Chilena',
                'code' => 'MA',
                'adm1_code' => 'CI10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1374,
                'country_id' => 48,
                'name' => 'Maule',
                'code' => 'ML',
                'adm1_code' => 'CI11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1375,
                'country_id' => 48,
                'name' => 'Region Metropolitana',
                'code' => 'RM',
                'adm1_code' => 'CI12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1376,
                'country_id' => 48,
                'name' => 'Tarapaca',
                'code' => 'TA',
                'adm1_code' => 'CI13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1377,
                'country_id' => 45,
                'name' => 'Creek',
                'code' => 'CR',
                'adm1_code' => 'CJ01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1378,
                'country_id' => 45,
                'name' => 'Eastern',
                'code' => 'EA',
                'adm1_code' => 'CJ02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1379,
                'country_id' => 45,
                'name' => 'Midland',
                'code' => 'MI',
                'adm1_code' => 'CJ03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1380,
                'country_id' => 45,
                'name' => 'South Town',
                'code' => 'SO',
                'adm1_code' => 'CJ04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1381,
                'country_id' => 45,
                'name' => 'Spot Bay',
                'code' => 'SP',
                'adm1_code' => 'CJ05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1382,
                'country_id' => 45,
                'name' => 'Stake Bay',
                'code' => 'ST',
                'adm1_code' => 'CJ06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1383,
                'country_id' => 45,
                'name' => 'West End',
                'code' => 'WD',
                'adm1_code' => 'CJ07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1384,
                'country_id' => 45,
                'name' => 'Western',
                'code' => 'WN',
                'adm1_code' => 'CJ08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1385,
                'country_id' => 42,
                'name' => 'Est',
                'code' => 'ES',
                'adm1_code' => 'CM04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1386,
                'country_id' => 42,
                'name' => 'Littoral',
                'code' => 'LT',
                'adm1_code' => 'CM05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1387,
                'country_id' => 42,
                'name' => 'NordOuest',
                'code' => 'NW',
                'adm1_code' => 'CM07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1388,
                'country_id' => 42,
                'name' => 'Ouest',
                'code' => 'OU',
                'adm1_code' => 'CM08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1389,
                'country_id' => 42,
                'name' => 'SudOuest',
                'code' => 'SW',
                'adm1_code' => 'CM09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1390,
                'country_id' => 42,
                'name' => 'Adamaoua',
                'code' => 'AD',
                'adm1_code' => 'CM10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1391,
                'country_id' => 42,
                'name' => 'Centre',
                'code' => 'CE',
                'adm1_code' => 'CM11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1392,
                'country_id' => 42,
                'name' => 'ExtremeNord',
                'code' => 'EN',
                'adm1_code' => 'CM12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1393,
                'country_id' => 42,
                'name' => 'Nord',
                'code' => 'NO',
                'adm1_code' => 'CM13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1394,
                'country_id' => 42,
                'name' => 'Sud',
                'code' => 'SU',
                'adm1_code' => 'CM14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1395,
                'country_id' => 54,
                'name' => 'Anjouan',
                'code' => 'AN',
                'adm1_code' => 'CN01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1396,
                'country_id' => 54,
                'name' => 'Grande Comore',
                'code' => 'GC',
                'adm1_code' => 'CN02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1397,
                'country_id' => 54,
                'name' => 'Moheli',
                'code' => 'MO',
                'adm1_code' => 'CN03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1398,
                'country_id' => 53,
                'name' => 'Amazonas',
                'code' => 'AM',
                'adm1_code' => 'CO01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1399,
                'country_id' => 53,
                'name' => 'Antioquia',
                'code' => 'AN',
                'adm1_code' => 'CO02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1400,
                'country_id' => 53,
                'name' => 'Arauca',
                'code' => 'AR',
                'adm1_code' => 'CO03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1401,
                'country_id' => 53,
                'name' => 'Atlantico',
                'code' => 'AT',
                'adm1_code' => 'CO04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1402,
                'country_id' => 53,
                'name' => 'Caqueta',
                'code' => 'CQ',
                'adm1_code' => 'CO08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1403,
                'country_id' => 53,
                'name' => 'Cauca',
                'code' => 'CA',
                'adm1_code' => 'CO09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1404,
                'country_id' => 53,
                'name' => 'Cesar',
                'code' => 'CE',
                'adm1_code' => 'CO10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1405,
                'country_id' => 53,
                'name' => 'Choco',
                'code' => 'CH',
                'adm1_code' => 'CO11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1406,
                'country_id' => 53,
                'name' => 'Cordoba',
                'code' => 'CR',
                'adm1_code' => 'CO12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1408,
                'country_id' => 53,
                'name' => 'Guaviare',
                'code' => 'GV',
                'adm1_code' => 'CO14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1409,
                'country_id' => 53,
                'name' => 'Guainia',
                'code' => 'GN',
                'adm1_code' => 'CO15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1410,
                'country_id' => 53,
                'name' => 'Huila',
                'code' => 'HU',
                'adm1_code' => 'CO16',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1411,
                'country_id' => 53,
                'name' => 'La Guajira',
                'code' => 'LG',
                'adm1_code' => 'CO17',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1412,
                'country_id' => 53,
                'name' => 'Meta',
                'code' => 'ME',
                'adm1_code' => 'CO19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1413,
                'country_id' => 53,
                'name' => 'Narino',
                'code' => 'NA',
                'adm1_code' => 'CO20',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1414,
                'country_id' => 53,
                'name' => 'Norte de Santander',
                'code' => 'NS',
                'adm1_code' => 'CO21',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1415,
                'country_id' => 53,
                'name' => 'Putumayo',
                'code' => 'PU',
                'adm1_code' => 'CO22',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1416,
                'country_id' => 53,
                'name' => 'Quindio',
                'code' => 'QD',
                'adm1_code' => 'CO23',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1417,
                'country_id' => 53,
                'name' => 'Risaralda',
                'code' => 'RI',
                'adm1_code' => 'CO24',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1418,
                'country_id' => 53,
                'name' => 'San Andres y Providencia',
                'code' => 'SA',
                'adm1_code' => 'CO25',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1419,
                'country_id' => 53,
                'name' => 'Santander',
                'code' => 'ST',
                'adm1_code' => 'CO26',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1420,
                'country_id' => 53,
                'name' => 'Sucre',
                'code' => 'SU',
                'adm1_code' => 'CO27',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1421,
                'country_id' => 53,
                'name' => 'Tolima',
                'code' => 'TO',
                'adm1_code' => 'CO28',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1422,
                'country_id' => 53,
                'name' => 'Valle del Cauca',
                'code' => 'VC',
                'adm1_code' => 'CO29',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1423,
                'country_id' => 53,
                'name' => 'Vaupes',
                'code' => 'VP',
                'adm1_code' => 'CO30',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1424,
                'country_id' => 53,
                'name' => 'Vichada',
                'code' => 'VD',
                'adm1_code' => 'CO31',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1425,
                'country_id' => 53,
                'name' => 'Casanare',
                'code' => 'CS',
                'adm1_code' => 'CO32',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1426,
                'country_id' => 53,
                'name' => 'Cundinamarca',
                'code' => 'CU',
                'adm1_code' => 'CO33',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1427,
                'country_id' => 53,
                'name' => 'Distrito Capital',
                'code' => 'DC',
                'adm1_code' => 'CO34',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1428,
                'country_id' => 53,
                'name' => 'Bolivar',
                'code' => 'BL',
                'adm1_code' => 'CO35',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1429,
                'country_id' => 53,
                'name' => 'Boyaca',
                'code' => 'BY',
                'adm1_code' => 'CO36',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1430,
                'country_id' => 53,
                'name' => 'Caldas',
                'code' => 'CL',
                'adm1_code' => 'CO37',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1431,
                'country_id' => 53,
                'name' => 'Magdalena',
                'code' => 'MA',
                'adm1_code' => 'CO38',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1432,
                'country_id' => 59,
                'name' => 'Alajuela',
                'code' => 'AL',
                'adm1_code' => 'CS01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1433,
                'country_id' => 59,
                'name' => 'Cartago',
                'code' => 'CA',
                'adm1_code' => 'CS02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1434,
                'country_id' => 59,
                'name' => 'Guanacaste',
                'code' => 'GU',
                'adm1_code' => 'CS03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1435,
                'country_id' => 59,
                'name' => 'Heredia',
                'code' => 'HE',
                'adm1_code' => 'CS04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1436,
                'country_id' => 59,
                'name' => 'Limon',
                'code' => 'LI',
                'adm1_code' => 'CS06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1437,
                'country_id' => 59,
                'name' => 'Puntarenas',
                'code' => 'PU',
                'adm1_code' => 'CS07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1438,
                'country_id' => 59,
                'name' => 'San Jose',
                'code' => 'SJ',
                'adm1_code' => 'CS08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1439,
                'country_id' => 46,
                'name' => 'Bamingui-Bangoran',
                'code' => 'BB',
                'adm1_code' => 'CT01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1440,
                'country_id' => 46,
                'name' => 'Basse-Kotto',
                'code' => 'BK',
                'adm1_code' => 'CT02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1441,
                'country_id' => 46,
                'name' => 'Haute-Kotto',
                'code' => 'HK',
                'adm1_code' => 'CT03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1442,
                'country_id' => 46,
                'name' => 'Haute-Sangha',
                'code' => 'HS',
                'adm1_code' => 'CT04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1443,
                'country_id' => 46,
                'name' => 'Haut-Mbomou',
                'code' => 'HM',
                'adm1_code' => 'CT05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1444,
                'country_id' => 46,
                'name' => 'Kemo-Gribingui',
                'code' => 'KG',
                'adm1_code' => 'CT06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1445,
                'country_id' => 46,
                'name' => 'Lobaye',
                'code' => 'LB',
                'adm1_code' => 'CT07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1446,
                'country_id' => 46,
                'name' => 'Mbomou',
                'code' => 'MB',
                'adm1_code' => 'CT08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1447,
                'country_id' => 46,
                'name' => 'Nana-Mambere',
                'code' => 'NM',
                'adm1_code' => 'CT09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1448,
                'country_id' => 46,
                'name' => 'Ouaka',
                'code' => 'UK',
                'adm1_code' => 'CT11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1449,
                'country_id' => 46,
                'name' => 'Ouham',
                'code' => 'AC',
                'adm1_code' => 'CT12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1450,
                'country_id' => 46,
                'name' => 'Ouham-Pende',
                'code' => 'OP',
                'adm1_code' => 'CT13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1451,
                'country_id' => 46,
                'name' => 'Vakaga',
                'code' => 'VK',
                'adm1_code' => 'CT14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1452,
                'country_id' => 46,
                'name' => 'Gribingui',
                'code' => 'KB',
                'adm1_code' => 'CT15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1453,
                'country_id' => 46,
                'name' => 'Sangha',
                'code' => 'SE',
                'adm1_code' => 'CT16',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1454,
                'country_id' => 46,
                'name' => 'Ombella-Mpoko',
                'code' => 'MP',
                'adm1_code' => 'CT17',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1455,
                'country_id' => 46,
                'name' => 'Bangui',
                'code' => 'BG',
                'adm1_code' => 'CT18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1456,
                'country_id' => 62,
                'name' => 'Pinar del Rio',
                'code' => 'PR',
                'adm1_code' => 'CU01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1457,
                'country_id' => 62,
                'name' => 'Ciudad de La Habana',
                'code' => 'CH',
                'adm1_code' => 'CU02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1458,
                'country_id' => 62,
                'name' => 'Matanzas',
                'code' => 'MA',
                'adm1_code' => 'CU03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1459,
                'country_id' => 62,
                'name' => 'Isla de la Juventud',
                'code' => 'IJ',
                'adm1_code' => 'CU04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1460,
                'country_id' => 62,
                'name' => 'Camaguey',
                'code' => 'CM',
                'adm1_code' => 'CU05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1461,
                'country_id' => 62,
                'name' => 'Ciego de Avila',
                'code' => 'CA',
                'adm1_code' => 'CU07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1462,
                'country_id' => 62,
                'name' => 'Cienfuegos',
                'code' => 'CF',
                'adm1_code' => 'CU08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1463,
                'country_id' => 62,
                'name' => 'Granma',
                'code' => 'GR',
                'adm1_code' => 'CU09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1464,
                'country_id' => 62,
                'name' => 'Guantanamo',
                'code' => 'GU',
                'adm1_code' => 'CU10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1465,
                'country_id' => 62,
                'name' => 'La Habana',
                'code' => 'LH',
                'adm1_code' => 'CU11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1466,
                'country_id' => 62,
                'name' => 'Holguin',
                'code' => 'HO',
                'adm1_code' => 'CU12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1467,
                'country_id' => 62,
                'name' => 'Las Tunas',
                'code' => 'LT',
                'adm1_code' => 'CU13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1468,
                'country_id' => 62,
                'name' => 'Sancti Spiritus',
                'code' => 'SS',
                'adm1_code' => 'CU14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1469,
                'country_id' => 62,
                'name' => 'Santiago de Cuba',
                'code' => 'SC',
                'adm1_code' => 'CU15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1470,
                'country_id' => 62,
                'name' => 'Villa Clara',
                'code' => 'VC',
                'adm1_code' => 'CU16',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1471,
                'country_id' => 44,
                'name' => 'Boa Vista',
                'code' => 'BV',
                'adm1_code' => 'CV01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1472,
                'country_id' => 44,
                'name' => 'Brava',
                'code' => 'BR',
                'adm1_code' => 'CV02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1473,
                'country_id' => 44,
                'name' => 'Calheta de São Miguel',
                'code' => 'SM',
                'adm1_code' => 'CV03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1474,
                'country_id' => 44,
                'name' => 'Maio',
                'code' => 'MA',
                'adm1_code' => 'CV04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1475,
                'country_id' => 44,
                'name' => 'Paul',
                'code' => 'PA',
                'adm1_code' => 'CV05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1476,
                'country_id' => 44,
                'name' => 'Praia',
                'code' => 'PI',
                'adm1_code' => 'CV06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1477,
                'country_id' => 44,
                'name' => 'Ribeira Grande',
                'code' => 'RG',
                'adm1_code' => 'CV07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1478,
                'country_id' => 44,
                'name' => 'Sal',
                'code' => 'SL',
                'adm1_code' => 'CV08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1479,
                'country_id' => 44,
                'name' => 'Santa Catarina',
                'code' => 'SC',
                'adm1_code' => 'CV09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1480,
                'country_id' => 44,
                'name' => 'Sao Nicolau',
                'code' => 'SN',
                'adm1_code' => 'CV10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1481,
                'country_id' => 44,
                'name' => 'Sao Vicente',
                'code' => 'SV',
                'adm1_code' => 'CV11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1482,
                'country_id' => 44,
                'name' => 'Tarrafal',
                'code' => 'TF',
                'adm1_code' => 'CV12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1483,
                'country_id' => 63,
                'name' => 'Famagusta',
                'code' => 'FA',
                'adm1_code' => 'CY01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1484,
                'country_id' => 63,
                'name' => 'Kyrenia',
                'code' => 'KY',
                'adm1_code' => 'CY02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1485,
                'country_id' => 63,
                'name' => 'Larnaca',
                'code' => 'LA',
                'adm1_code' => 'CY03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1486,
                'country_id' => 63,
                'name' => 'Nicosia',
                'code' => 'NI',
                'adm1_code' => 'CY04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1487,
                'country_id' => 63,
                'name' => 'Limassol',
                'code' => 'LI',
                'adm1_code' => 'CY05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1488,
                'country_id' => 63,
                'name' => 'Paphos',
                'code' => 'PA',
                'adm1_code' => 'CY06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1489,
                'country_id' => 65,
                'name' => 'Arhus',
                'code' => 'AR',
                'adm1_code' => 'DA01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1490,
                'country_id' => 65,
                'name' => 'Bornholm',
                'code' => 'BO',
                'adm1_code' => 'DA02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1491,
                'country_id' => 65,
                'name' => 'Frederiksborg',
                'code' => 'FR',
                'adm1_code' => 'DA03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1492,
                'country_id' => 65,
                'name' => 'Fyn',
                'code' => 'FY',
                'adm1_code' => 'DA04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1493,
                'country_id' => 65,
                'name' => 'Kobenhavn',
                'code' => 'SK',
                'adm1_code' => 'DA06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1494,
                'country_id' => 65,
                'name' => 'Nordjylland',
                'code' => 'NJ',
                'adm1_code' => 'DA07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1495,
                'country_id' => 65,
                'name' => 'Ribe',
                'code' => 'RB',
                'adm1_code' => 'DA08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1496,
                'country_id' => 65,
                'name' => 'Ringkobing',
                'code' => 'RK',
                'adm1_code' => 'DA09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1497,
                'country_id' => 65,
                'name' => 'Roskilde',
                'code' => 'RS',
                'adm1_code' => 'DA10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1498,
                'country_id' => 65,
                'name' => 'Sonderjylland',
                'code' => 'SJ',
                'adm1_code' => 'DA11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1499,
                'country_id' => 65,
                'name' => 'Storstrom',
                'code' => 'ST',
                'adm1_code' => 'DA12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1500,
                'country_id' => 65,
                'name' => 'Vejle',
                'code' => 'VJ',
                'adm1_code' => 'DA13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1501,
                'country_id' => 65,
                'name' => 'Vestsjalland',
                'code' => 'VS',
                'adm1_code' => 'DA14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1502,
                'country_id' => 65,
                'name' => 'Viborg',
                'code' => 'VB',
                'adm1_code' => 'DA15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1503,
                'country_id' => 65,
                'name' => 'Fredericksberg',
                'code' => 'SF',
                'adm1_code' => 'DA16',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1504,
                'country_id' => 66,
                'name' => '\'Ali Sabih',
                'code' => 'AS',
                'adm1_code' => 'DJ01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1505,
                'country_id' => 66,
                'name' => 'Dikhil',
                'code' => 'DI',
                'adm1_code' => 'DJ02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1507,
                'country_id' => 66,
                'name' => 'Obock',
                'code' => 'OB',
                'adm1_code' => 'DJ04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1508,
                'country_id' => 66,
                'name' => 'Tadjoura',
                'code' => 'TA',
                'adm1_code' => 'DJ05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1509,
                'country_id' => 67,
                'name' => 'Saint Andrew',
                'code' => 'AN',
                'adm1_code' => 'DO02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1510,
                'country_id' => 67,
                'name' => 'Saint David',
                'code' => 'DA',
                'adm1_code' => 'DO03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1511,
                'country_id' => 67,
                'name' => 'Saint George',
                'code' => 'GO',
                'adm1_code' => 'DO04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1512,
                'country_id' => 67,
                'name' => 'Saint John',
                'code' => 'JN',
                'adm1_code' => 'DO05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1513,
                'country_id' => 67,
                'name' => 'Saint Joseph',
                'code' => 'JH',
                'adm1_code' => 'DO06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1514,
                'country_id' => 67,
                'name' => 'Saint Luke',
                'code' => 'LU',
                'adm1_code' => 'DO07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1515,
                'country_id' => 67,
                'name' => 'Saint Mark',
                'code' => 'MA',
                'adm1_code' => 'DO08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1516,
                'country_id' => 67,
                'name' => 'Saint Patrick',
                'code' => 'PK',
                'adm1_code' => 'DO09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1517,
                'country_id' => 67,
                'name' => 'Saint Paul',
                'code' => 'PL',
                'adm1_code' => 'DO10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1518,
                'country_id' => 67,
                'name' => 'Saint Peter',
                'code' => 'PR',
                'adm1_code' => 'DO11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1519,
                'country_id' => 68,
                'name' => 'Azua',
                'code' => 'AZ',
                'adm1_code' => 'DR01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1520,
                'country_id' => 68,
                'name' => 'Baoruco',
                'code' => 'BR',
                'adm1_code' => 'DR02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1521,
                'country_id' => 68,
                'name' => 'Barahona',
                'code' => 'BH',
                'adm1_code' => 'DR03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1522,
                'country_id' => 68,
                'name' => 'Dajabon',
                'code' => 'DA',
                'adm1_code' => 'DR04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1523,
                'country_id' => 68,
                'name' => 'Distrito Nacional',
                'code' => 'DN',
                'adm1_code' => 'DR05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1524,
                'country_id' => 68,
                'name' => 'Duarte',
                'code' => 'DU',
                'adm1_code' => 'DR06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1525,
                'country_id' => 68,
                'name' => 'Espaillat',
                'code' => 'ES',
                'adm1_code' => 'DR08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1526,
                'country_id' => 68,
                'name' => 'Independencia',
                'code' => 'IN',
                'adm1_code' => 'DR09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1527,
                'country_id' => 68,
                'name' => 'La Altagracia',
                'code' => 'AL',
                'adm1_code' => 'DR10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1528,
                'country_id' => 68,
                'name' => 'Elias Pina',
                'code' => 'EP',
                'adm1_code' => 'DR11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1529,
                'country_id' => 68,
                'name' => 'La Romana',
                'code' => 'RO',
                'adm1_code' => 'DR12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1530,
                'country_id' => 68,
                'name' => 'Maria Trinidad Sanchez',
                'code' => 'MT',
                'adm1_code' => 'DR14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1531,
                'country_id' => 68,
                'name' => 'Monte Cristi',
                'code' => 'MC',
                'adm1_code' => 'DR15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1532,
                'country_id' => 68,
                'name' => 'Pedernales',
                'code' => 'PN',
                'adm1_code' => 'DR16',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1533,
                'country_id' => 68,
                'name' => 'Peravia',
                'code' => 'PR',
                'adm1_code' => 'DR17',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1534,
                'country_id' => 68,
                'name' => 'Puerto Plata',
                'code' => 'PP',
                'adm1_code' => 'DR18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1535,
                'country_id' => 68,
                'name' => 'Salcedo',
                'code' => 'SC',
                'adm1_code' => 'DR19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1536,
                'country_id' => 68,
                'name' => 'Samana',
                'code' => 'SM',
                'adm1_code' => 'DR20',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1537,
                'country_id' => 68,
                'name' => 'Sanchez Ramirez',
                'code' => 'SZ',
                'adm1_code' => 'DR21',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1538,
                'country_id' => 68,
                'name' => 'San Juan',
                'code' => 'JU',
                'adm1_code' => 'DR23',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1539,
                'country_id' => 68,
                'name' => 'San Pedro de Macoris',
                'code' => 'PM',
                'adm1_code' => 'DR24',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1540,
                'country_id' => 68,
                'name' => 'Santiago',
                'code' => 'ST',
                'adm1_code' => 'DR25',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1541,
                'country_id' => 68,
                'name' => 'Santiago Rodriguez',
                'code' => 'SR',
                'adm1_code' => 'DR26',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1542,
                'country_id' => 68,
                'name' => 'Valverde',
                'code' => 'VA',
                'adm1_code' => 'DR27',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            335 => 
            array (
                'id' => 1543,
                'country_id' => 68,
                'name' => 'El Seibo',
                'code' => 'SE',
                'adm1_code' => 'DR28',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            336 => 
            array (
                'id' => 1544,
                'country_id' => 68,
                'name' => 'Hato Mayor',
                'code' => 'HM',
                'adm1_code' => 'DR29',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            337 => 
            array (
                'id' => 1545,
                'country_id' => 68,
                'name' => 'La Vega',
                'code' => 'VE',
                'adm1_code' => 'DR30',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            338 => 
            array (
                'id' => 1546,
                'country_id' => 68,
                'name' => 'Monsenor Nouel',
                'code' => 'MN',
                'adm1_code' => 'DR31',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            339 => 
            array (
                'id' => 1547,
                'country_id' => 68,
                'name' => 'Monte Plata',
                'code' => 'MP',
                'adm1_code' => 'DR32',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            340 => 
            array (
                'id' => 1548,
                'country_id' => 68,
                'name' => 'San Cristobal',
                'code' => 'CR',
                'adm1_code' => 'DR33',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            341 => 
            array (
                'id' => 1549,
                'country_id' => 70,
                'name' => 'Galapagos',
                'code' => 'GA',
                'adm1_code' => 'EC01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            342 => 
            array (
                'id' => 1550,
                'country_id' => 70,
                'name' => 'Azuay',
                'code' => 'AZ',
                'adm1_code' => 'EC02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            343 => 
            array (
                'id' => 1551,
                'country_id' => 70,
                'name' => 'Bolivar',
                'code' => 'BO',
                'adm1_code' => 'EC03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            344 => 
            array (
                'id' => 1552,
                'country_id' => 70,
                'name' => 'Canar',
                'code' => 'CN',
                'adm1_code' => 'EC04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            345 => 
            array (
                'id' => 1553,
                'country_id' => 70,
                'name' => 'Carchi',
                'code' => 'CR',
                'adm1_code' => 'EC05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            346 => 
            array (
                'id' => 1554,
                'country_id' => 70,
                'name' => 'Chimborazo',
                'code' => 'CB',
                'adm1_code' => 'EC06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            347 => 
            array (
                'id' => 1555,
                'country_id' => 70,
                'name' => 'Cotopaxi',
                'code' => 'CT',
                'adm1_code' => 'EC07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            348 => 
            array (
                'id' => 1556,
                'country_id' => 70,
                'name' => 'El Oro',
                'code' => 'EO',
                'adm1_code' => 'EC08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            349 => 
            array (
                'id' => 1557,
                'country_id' => 70,
                'name' => 'Esmeraldas',
                'code' => 'ES',
                'adm1_code' => 'EC09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            350 => 
            array (
                'id' => 1558,
                'country_id' => 70,
                'name' => 'Guayas',
                'code' => 'GU',
                'adm1_code' => 'EC10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            351 => 
            array (
                'id' => 1559,
                'country_id' => 70,
                'name' => 'Imbabura',
                'code' => 'IM',
                'adm1_code' => 'EC11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            352 => 
            array (
                'id' => 1560,
                'country_id' => 70,
                'name' => 'Loja',
                'code' => 'LJ',
                'adm1_code' => 'EC12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            353 => 
            array (
                'id' => 1561,
                'country_id' => 70,
                'name' => 'Los Rios',
                'code' => 'LR',
                'adm1_code' => 'EC13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            354 => 
            array (
                'id' => 1562,
                'country_id' => 70,
                'name' => 'Manabi',
                'code' => 'MN',
                'adm1_code' => 'EC14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            355 => 
            array (
                'id' => 1563,
                'country_id' => 70,
                'name' => 'Morona-Santiago',
                'code' => 'MS',
                'adm1_code' => 'EC15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            356 => 
            array (
                'id' => 1564,
                'country_id' => 70,
                'name' => 'Pastaza',
                'code' => 'PA',
                'adm1_code' => 'EC17',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            357 => 
            array (
                'id' => 1565,
                'country_id' => 70,
                'name' => 'Pichincha',
                'code' => 'PI',
                'adm1_code' => 'EC18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            358 => 
            array (
                'id' => 1566,
                'country_id' => 70,
                'name' => 'Tungurahua',
                'code' => 'TU',
                'adm1_code' => 'EC19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            359 => 
            array (
                'id' => 1567,
                'country_id' => 70,
                'name' => 'Zamora-Chinchipe',
                'code' => 'ZC',
                'adm1_code' => 'EC20',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            360 => 
            array (
                'id' => 1568,
                'country_id' => 70,
                'name' => 'Napo',
                'code' => 'NA',
                'adm1_code' => 'EC23',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            361 => 
            array (
                'id' => 1569,
                'country_id' => 70,
                'name' => 'Sucumbios',
                'code' => 'SU',
                'adm1_code' => 'EC22',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            362 => 
            array (
                'id' => 1570,
                'country_id' => 71,
                'name' => 'Ad Daqahliyah',
                'code' => 'DQ',
                'adm1_code' => 'EG01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            363 => 
            array (
                'id' => 1571,
                'country_id' => 71,
                'name' => 'Al Bahr al Ahmar',
                'code' => 'BA',
                'adm1_code' => 'EG02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            364 => 
            array (
                'id' => 1572,
                'country_id' => 71,
                'name' => 'Al Buhayrah',
                'code' => 'BH',
                'adm1_code' => 'EG03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            365 => 
            array (
                'id' => 1573,
                'country_id' => 71,
                'name' => 'Al Fayyum',
                'code' => 'FY',
                'adm1_code' => 'EG04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            366 => 
            array (
                'id' => 1574,
                'country_id' => 71,
                'name' => 'Al Gharbiyah',
                'code' => 'GH',
                'adm1_code' => 'EG05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            367 => 
            array (
                'id' => 1575,
                'country_id' => 71,
                'name' => 'Al Iskandariyah',
                'code' => 'IK',
                'adm1_code' => 'EG06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            368 => 
            array (
                'id' => 1576,
                'country_id' => 71,
                'name' => 'Al Isma\'iliyah',
                'code' => 'IS',
                'adm1_code' => 'EG07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            369 => 
            array (
                'id' => 1577,
                'country_id' => 71,
                'name' => 'Al Jizah',
                'code' => 'JZ',
                'adm1_code' => 'EG08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            370 => 
            array (
                'id' => 1578,
                'country_id' => 71,
                'name' => 'Al Minufiyah',
                'code' => 'MF',
                'adm1_code' => 'EG09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            371 => 
            array (
                'id' => 1579,
                'country_id' => 71,
                'name' => 'Al Minya',
                'code' => 'MN',
                'adm1_code' => 'EG10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            372 => 
            array (
                'id' => 1580,
                'country_id' => 71,
                'name' => 'Al Qahirah',
                'code' => 'QH',
                'adm1_code' => 'EG11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            373 => 
            array (
                'id' => 1581,
                'country_id' => 71,
                'name' => 'Al Qaly¯biyah',
                'code' => 'QL',
                'adm1_code' => 'EG12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            374 => 
            array (
                'id' => 1582,
                'country_id' => 71,
                'name' => 'Al Wadi al Jadid',
                'code' => 'WJ',
                'adm1_code' => 'EG13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            375 => 
            array (
                'id' => 1583,
                'country_id' => 71,
                'name' => 'Ash Sharqiyah',
                'code' => 'SQ',
                'adm1_code' => 'EG14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            376 => 
            array (
                'id' => 1584,
                'country_id' => 71,
                'name' => 'As Suways',
                'code' => 'SW',
                'adm1_code' => 'EG15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            377 => 
            array (
                'id' => 1585,
                'country_id' => 71,
                'name' => 'Aswan',
                'code' => 'AN',
                'adm1_code' => 'EG16',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            378 => 
            array (
                'id' => 1586,
                'country_id' => 71,
                'name' => 'Asyut',
                'code' => 'AT',
                'adm1_code' => 'EG17',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            379 => 
            array (
                'id' => 1587,
                'country_id' => 71,
                'name' => 'Bani Suwayf',
                'code' => 'BN',
                'adm1_code' => 'EG18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            380 => 
            array (
                'id' => 1588,
                'country_id' => 71,
                'name' => 'Bur Sa\'id',
                'code' => 'BS',
                'adm1_code' => 'EG19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            381 => 
            array (
                'id' => 1589,
                'country_id' => 71,
                'name' => 'Dumyat',
                'code' => 'DT',
                'adm1_code' => 'EG20',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            382 => 
            array (
                'id' => 1590,
                'country_id' => 71,
                'name' => 'Kafr ash Shaykh',
                'code' => 'KS',
                'adm1_code' => 'EG21',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            383 => 
            array (
                'id' => 1591,
                'country_id' => 71,
                'name' => 'Matruh',
                'code' => 'MT',
                'adm1_code' => 'EG22',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            384 => 
            array (
                'id' => 1592,
                'country_id' => 71,
                'name' => 'Qina',
                'code' => 'QN',
                'adm1_code' => 'EG23',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            385 => 
            array (
                'id' => 1593,
                'country_id' => 71,
                'name' => 'Suhaj',
                'code' => 'SJ',
                'adm1_code' => 'EG24',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            386 => 
            array (
                'id' => 1594,
                'country_id' => 71,
                'name' => 'Janub Sina\'',
                'code' => 'JS',
                'adm1_code' => 'EG26',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            387 => 
            array (
                'id' => 1595,
                'country_id' => 71,
                'name' => 'Shamal Sina\'',
                'code' => 'SS',
                'adm1_code' => 'EG27',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            388 => 
            array (
                'id' => 1596,
                'country_id' => 117,
                'name' => 'Carlow',
                'code' => 'CW',
                'adm1_code' => 'EI01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            389 => 
            array (
                'id' => 1597,
                'country_id' => 117,
                'name' => 'Cavan',
                'code' => 'CN',
                'adm1_code' => 'EI02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            390 => 
            array (
                'id' => 1598,
                'country_id' => 117,
                'name' => 'Clare',
                'code' => 'CE',
                'adm1_code' => 'EI03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            391 => 
            array (
                'id' => 1599,
                'country_id' => 117,
                'name' => 'Cork',
                'code' => 'CK',
                'adm1_code' => 'EI04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            392 => 
            array (
                'id' => 1600,
                'country_id' => 117,
                'name' => 'Donegal',
                'code' => 'DL',
                'adm1_code' => 'EI06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            393 => 
            array (
                'id' => 1601,
                'country_id' => 117,
                'name' => 'Dublin',
                'code' => 'DN',
                'adm1_code' => 'EI07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            394 => 
            array (
                'id' => 1602,
                'country_id' => 117,
                'name' => 'Galway',
                'code' => 'GY',
                'adm1_code' => 'EI10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            395 => 
            array (
                'id' => 1603,
                'country_id' => 117,
                'name' => 'Kerry',
                'code' => 'KY',
                'adm1_code' => 'EI11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            396 => 
            array (
                'id' => 1604,
                'country_id' => 117,
                'name' => 'Kildare',
                'code' => 'KE',
                'adm1_code' => 'EI12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            397 => 
            array (
                'id' => 1605,
                'country_id' => 117,
                'name' => 'Kilkenny',
                'code' => 'KK',
                'adm1_code' => 'EI13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            398 => 
            array (
                'id' => 1606,
                'country_id' => 117,
                'name' => 'Leitrim',
                'code' => 'LM',
                'adm1_code' => 'EI14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            399 => 
            array (
                'id' => 1607,
                'country_id' => 117,
                'name' => 'Laois',
                'code' => 'LS',
                'adm1_code' => 'EI15',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            400 => 
            array (
                'id' => 1608,
                'country_id' => 117,
                'name' => 'Limerick',
                'code' => 'LK',
                'adm1_code' => 'EI16',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            401 => 
            array (
                'id' => 1609,
                'country_id' => 117,
                'name' => 'Longford',
                'code' => 'LD',
                'adm1_code' => 'EI18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            402 => 
            array (
                'id' => 1610,
                'country_id' => 117,
                'name' => 'Louth',
                'code' => 'LH',
                'adm1_code' => 'EI19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            403 => 
            array (
                'id' => 1611,
                'country_id' => 117,
                'name' => 'Mayo',
                'code' => 'MO',
                'adm1_code' => 'EI20',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            404 => 
            array (
                'id' => 1612,
                'country_id' => 117,
                'name' => 'Meath',
                'code' => 'MH',
                'adm1_code' => 'EI21',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            405 => 
            array (
                'id' => 1613,
                'country_id' => 117,
                'name' => 'Monaghan',
                'code' => 'MN',
                'adm1_code' => 'EI22',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            406 => 
            array (
                'id' => 1614,
                'country_id' => 117,
                'name' => 'Offaly',
                'code' => 'OY',
                'adm1_code' => 'EI23',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            407 => 
            array (
                'id' => 1615,
                'country_id' => 117,
                'name' => 'Roscommon',
                'code' => 'RN',
                'adm1_code' => 'EI24',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            408 => 
            array (
                'id' => 1616,
                'country_id' => 117,
                'name' => 'Sligo',
                'code' => 'SO',
                'adm1_code' => 'EI25',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            409 => 
            array (
                'id' => 1617,
                'country_id' => 117,
                'name' => 'Tipperary',
                'code' => 'TY',
                'adm1_code' => 'EI26',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            410 => 
            array (
                'id' => 1618,
                'country_id' => 117,
                'name' => 'Waterford',
                'code' => 'WD',
                'adm1_code' => 'EI27',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            411 => 
            array (
                'id' => 1619,
                'country_id' => 117,
                'name' => 'Westmeath',
                'code' => 'WH',
                'adm1_code' => 'EI29',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            412 => 
            array (
                'id' => 1620,
                'country_id' => 117,
                'name' => 'Wexford',
                'code' => 'WX',
                'adm1_code' => 'EI30',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            413 => 
            array (
                'id' => 1621,
                'country_id' => 117,
                'name' => 'Wicklow',
                'code' => 'WW',
                'adm1_code' => 'EI31',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            414 => 
            array (
                'id' => 1622,
                'country_id' => 73,
                'name' => 'Annobon',
                'code' => 'AN',
                'adm1_code' => 'EK03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            415 => 
            array (
                'id' => 1623,
                'country_id' => 73,
                'name' => 'Bioko Norte',
                'code' => 'BN',
                'adm1_code' => 'EK04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            416 => 
            array (
                'id' => 1624,
                'country_id' => 73,
                'name' => 'Bioko Sur',
                'code' => 'BS',
                'adm1_code' => 'EK05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            417 => 
            array (
                'id' => 1625,
                'country_id' => 73,
                'name' => 'Centro Sur',
                'code' => 'CS',
                'adm1_code' => 'EK06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            418 => 
            array (
                'id' => 1626,
                'country_id' => 73,
                'name' => 'Kie-Ntem',
                'code' => 'KN',
                'adm1_code' => 'EK07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            419 => 
            array (
                'id' => 1627,
                'country_id' => 73,
                'name' => 'Litoral',
                'code' => 'LI',
                'adm1_code' => 'EK08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            420 => 
            array (
                'id' => 1628,
                'country_id' => 73,
                'name' => 'Wele-Nzas',
                'code' => 'WN',
                'adm1_code' => 'EK09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            421 => 
            array (
                'id' => 1629,
                'country_id' => 75,
                'name' => 'Harjumaa',
                'code' => 'HA',
                'adm1_code' => 'EN01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            422 => 
            array (
                'id' => 1630,
                'country_id' => 75,
                'name' => 'Hiiumaa',
                'code' => 'HI',
                'adm1_code' => 'EN02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            423 => 
            array (
                'id' => 1631,
                'country_id' => 75,
                'name' => 'Ida-Virumaa',
                'code' => 'IV',
                'adm1_code' => 'EN03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            424 => 
            array (
                'id' => 1632,
                'country_id' => 75,
                'name' => 'Jarvamaa',
                'code' => 'JR',
                'adm1_code' => 'EN04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            425 => 
            array (
                'id' => 1633,
                'country_id' => 75,
                'name' => 'Jogevamaa',
                'code' => 'JN',
                'adm1_code' => 'EN05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            426 => 
            array (
                'id' => 1634,
                'country_id' => 75,
                'name' => 'Laanemaa',
                'code' => 'LN',
                'adm1_code' => 'EN07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            427 => 
            array (
                'id' => 1635,
                'country_id' => 75,
                'name' => 'Laane-Virumaa',
                'code' => 'LV',
                'adm1_code' => 'EN08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            428 => 
            array (
                'id' => 1636,
                'country_id' => 75,
                'name' => 'Parnumaa',
                'code' => 'PR',
                'adm1_code' => 'EN11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            429 => 
            array (
                'id' => 1637,
                'country_id' => 75,
                'name' => 'Polvamaa',
                'code' => 'PL',
                'adm1_code' => 'EN12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            430 => 
            array (
                'id' => 1638,
                'country_id' => 75,
                'name' => 'Raplamaa',
                'code' => 'RA',
                'adm1_code' => 'EN13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            431 => 
            array (
                'id' => 1639,
                'country_id' => 75,
                'name' => 'Saaremaa',
                'code' => 'SA',
                'adm1_code' => 'EN14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            432 => 
            array (
                'id' => 1640,
                'country_id' => 75,
                'name' => 'Tartumaa',
                'code' => 'TA',
                'adm1_code' => 'EN18',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            433 => 
            array (
                'id' => 1641,
                'country_id' => 75,
                'name' => 'Valgamaa',
                'code' => 'VG',
                'adm1_code' => 'EN19',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            434 => 
            array (
                'id' => 1642,
                'country_id' => 75,
                'name' => 'Viljandimaa',
                'code' => 'VD',
                'adm1_code' => 'EN20',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            435 => 
            array (
                'id' => 1643,
                'country_id' => 75,
                'name' => 'Vorumaa',
                'code' => 'VR',
                'adm1_code' => 'EN21',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            436 => 
            array (
                'id' => 1644,
                'country_id' => 72,
                'name' => 'Ahuachapan',
                'code' => 'AH',
                'adm1_code' => 'ES01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            437 => 
            array (
                'id' => 1645,
                'country_id' => 72,
                'name' => 'Cabanas',
                'code' => 'CA',
                'adm1_code' => 'ES02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            438 => 
            array (
                'id' => 1646,
                'country_id' => 72,
                'name' => 'Chalatenango',
                'code' => 'CH',
                'adm1_code' => 'ES03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            439 => 
            array (
                'id' => 1647,
                'country_id' => 72,
                'name' => 'Cuscatlan',
                'code' => 'CU',
                'adm1_code' => 'ES04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            440 => 
            array (
                'id' => 1648,
                'country_id' => 72,
                'name' => 'La Libertad',
                'code' => 'LI',
                'adm1_code' => 'ES05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            441 => 
            array (
                'id' => 1649,
                'country_id' => 72,
                'name' => 'La Paz',
                'code' => 'PA',
                'adm1_code' => 'ES06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            442 => 
            array (
                'id' => 1650,
                'country_id' => 72,
                'name' => 'La Union',
                'code' => 'UN',
                'adm1_code' => 'ES07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            443 => 
            array (
                'id' => 1651,
                'country_id' => 72,
                'name' => 'Morazan',
                'code' => 'MO',
                'adm1_code' => 'ES08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            444 => 
            array (
                'id' => 1652,
                'country_id' => 72,
                'name' => 'San Miguel',
                'code' => 'SM',
                'adm1_code' => 'ES09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            445 => 
            array (
                'id' => 1653,
                'country_id' => 72,
                'name' => 'San Salvador',
                'code' => 'SS',
                'adm1_code' => 'ES10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            446 => 
            array (
                'id' => 1654,
                'country_id' => 72,
                'name' => 'Santa Ana',
                'code' => 'SA',
                'adm1_code' => 'ES11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            447 => 
            array (
                'id' => 1655,
                'country_id' => 72,
                'name' => 'San Vicente',
                'code' => 'SI',
                'adm1_code' => 'ES12',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            448 => 
            array (
                'id' => 1656,
                'country_id' => 72,
                'name' => 'Sonsonate',
                'code' => 'SO',
                'adm1_code' => 'ES13',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            449 => 
            array (
                'id' => 1657,
                'country_id' => 72,
                'name' => 'Usulutan',
                'code' => 'US',
                'adm1_code' => 'ES14',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            450 => 
            array (
                'id' => 1687,
                'country_id' => 76,
                'name' => 'Harari People',
                'code' => 'HA',
                'adm1_code' => 'ET50',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            451 => 
            array (
                'id' => 1688,
                'country_id' => 76,
                'name' => 'Gambela Peoples',
                'code' => 'GA',
                'adm1_code' => 'ET49',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            452 => 
            array (
                'id' => 1690,
                'country_id' => 76,
                'name' => 'Benshangul-Gumaz',
                'code' => 'BE',
                'adm1_code' => 'ET47',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            453 => 
            array (
                'id' => 1691,
                'country_id' => 76,
                'name' => 'Tigray',
                'code' => 'TI',
                'adm1_code' => 'ET53',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            454 => 
            array (
                'id' => 1692,
                'country_id' => 76,
                'name' => 'Amhara',
                'code' => 'AM',
                'adm1_code' => 'ET46',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            455 => 
            array (
                'id' => 1693,
                'country_id' => 76,
                'name' => 'Afar',
                'code' => 'AF',
                'adm1_code' => 'ET45',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            456 => 
            array (
                'id' => 1694,
                'country_id' => 76,
                'name' => 'Oromia',
                'code' => 'OR',
                'adm1_code' => 'ET51',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            457 => 
            array (
                'id' => 1695,
                'country_id' => 76,
                'name' => 'Somali',
                'code' => 'SO',
                'adm1_code' => 'ET52',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            458 => 
            array (
                'id' => 1696,
                'country_id' => 76,
                'name' => 'Addis Ababa',
                'code' => 'AA',
                'adm1_code' => 'ET44',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            459 => 
            array (
                'id' => 1697,
                'country_id' => 76,
                'name' => 'Southern Nations',
                'code' => 'SN',
                'adm1_code' => 'ET54',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            460 => 
            array (
                'id' => 1746,
                'country_id' => 64,
                'name' => 'Hlavni Mesto Praha',
                'code' => 'PR',
                'adm1_code' => 'EZ52',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            461 => 
            array (
                'id' => 1772,
                'country_id' => 81,
                'name' => 'Ahvenanmaa',
                'code' => 'AV',
                'adm1_code' => 'FI01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            462 => 
            array (
                'id' => 1777,
                'country_id' => 81,
                'name' => 'Lappi',
                'code' => 'LP',
                'adm1_code' => 'FI06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            463 => 
            array (
                'id' => 1779,
                'country_id' => 81,
                'name' => 'Oulu Laani',
                'code' => 'OU',
                'adm1_code' => 'FI08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            464 => 
            array (
                'id' => 1784,
                'country_id' => 80,
                'name' => 'Central',
                'code' => 'CE',
                'adm1_code' => 'FJ01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            465 => 
            array (
                'id' => 1785,
                'country_id' => 80,
                'name' => 'Eastern',
                'code' => 'EA',
                'adm1_code' => 'FJ02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            466 => 
            array (
                'id' => 1786,
                'country_id' => 80,
                'name' => 'Northern',
                'code' => 'NO',
                'adm1_code' => 'FJ03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            467 => 
            array (
                'id' => 1787,
                'country_id' => 80,
                'name' => 'Rotuma',
                'code' => 'RO',
                'adm1_code' => 'FJ04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            468 => 
            array (
                'id' => 1788,
                'country_id' => 80,
                'name' => 'Western',
                'code' => 'WE',
                'adm1_code' => 'FJ05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            469 => 
            array (
                'id' => 1789,
                'country_id' => 160,
                'name' => 'Kosrae',
                'code' => 'KO',
                'adm1_code' => 'FM01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            470 => 
            array (
                'id' => 1790,
                'country_id' => 160,
                'name' => 'Pohnpei',
                'code' => 'PO',
                'adm1_code' => 'FM02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            471 => 
            array (
                'id' => 1791,
                'country_id' => 160,
                'name' => 'Chuuk',
                'code' => 'CH',
                'adm1_code' => 'FM03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            472 => 
            array (
                'id' => 1792,
                'country_id' => 160,
                'name' => 'Yap',
                'code' => 'YA',
                'adm1_code' => 'FM04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            473 => 
            array (
                'id' => 1793,
                'country_id' => 82,
                'name' => 'Aquitaine',
                'code' => 'AQ',
                'adm1_code' => 'FR97',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            474 => 
            array (
                'id' => 1794,
                'country_id' => 82,
                'name' => 'Auvergne',
                'code' => 'AU',
                'adm1_code' => 'FR98',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            475 => 
            array (
                'id' => 1795,
                'country_id' => 82,
                'name' => 'Basse-Normandie',
                'code' => 'BA',
                'adm1_code' => 'FR99',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            476 => 
            array (
                'id' => 1796,
                'country_id' => 82,
                'name' => 'Bourgogne',
                'code' => 'BO',
                'adm1_code' => 'FRA1',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            477 => 
            array (
                'id' => 1797,
                'country_id' => 82,
                'name' => 'Bretagne',
                'code' => 'BR',
                'adm1_code' => 'FRA2',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            478 => 
            array (
                'id' => 1798,
                'country_id' => 82,
                'name' => 'Centre',
                'code' => 'CE',
                'adm1_code' => 'FRA3',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            479 => 
            array (
                'id' => 1799,
                'country_id' => 82,
                'name' => 'Champagne-Ardenne',
                'code' => 'CH',
                'adm1_code' => 'FRA4',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            480 => 
            array (
                'id' => 1800,
                'country_id' => 82,
                'name' => 'Corse',
                'code' => 'CO',
                'adm1_code' => 'FRA5',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            481 => 
            array (
                'id' => 1801,
                'country_id' => 82,
                'name' => 'Franche-Comte',
                'code' => 'FC',
                'adm1_code' => 'FRA6',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            482 => 
            array (
                'id' => 1802,
                'country_id' => 82,
                'name' => 'Haute-Normandie',
                'code' => 'HA',
                'adm1_code' => 'FRA7',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            483 => 
            array (
                'id' => 1803,
                'country_id' => 82,
                'name' => 'Ile-De-France',
                'code' => 'IL',
                'adm1_code' => 'FRA8',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            484 => 
            array (
                'id' => 1804,
                'country_id' => 82,
                'name' => 'Languedoc-Roussillon',
                'code' => 'LA',
                'adm1_code' => 'FRA9',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            485 => 
            array (
                'id' => 1805,
                'country_id' => 82,
                'name' => 'Limousin',
                'code' => 'LI',
                'adm1_code' => 'FRB1',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            486 => 
            array (
                'id' => 1806,
                'country_id' => 82,
                'name' => 'Lorraine',
                'code' => 'LO',
                'adm1_code' => 'FRB2',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            487 => 
            array (
                'id' => 1807,
                'country_id' => 82,
                'name' => 'Midi-Pyrenees',
                'code' => 'MI',
                'adm1_code' => 'FRB3',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            488 => 
            array (
                'id' => 1808,
                'country_id' => 82,
                'name' => 'Nord-Pas-de-Calais',
                'code' => 'NO',
                'adm1_code' => 'FRB4',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            489 => 
            array (
                'id' => 1809,
                'country_id' => 82,
                'name' => 'Pays de la Loire',
                'code' => 'PA',
                'adm1_code' => 'FRB5',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            490 => 
            array (
                'id' => 1810,
                'country_id' => 82,
                'name' => 'Picardie',
                'code' => 'PI',
                'adm1_code' => 'FRB6',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            491 => 
            array (
                'id' => 1811,
                'country_id' => 82,
                'name' => 'Poitou-Charentes',
                'code' => 'PO',
                'adm1_code' => 'FRB7',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            492 => 
            array (
                'id' => 1812,
                'country_id' => 82,
                'name' => 'Provence-Alpes-Cote d\'Azur',
                'code' => 'PR',
                'adm1_code' => 'FRB8',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            493 => 
            array (
                'id' => 1813,
                'country_id' => 82,
                'name' => 'Rhone-Alpes',
                'code' => 'RH',
                'adm1_code' => 'FRB9',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            494 => 
            array (
                'id' => 1814,
                'country_id' => 82,
                'name' => 'Alsace',
                'code' => 'AL',
                'adm1_code' => 'FRC1',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            495 => 
            array (
                'id' => 1815,
                'country_id' => 88,
                'name' => 'Banjul',
                'code' => 'BJ',
                'adm1_code' => 'GA01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            496 => 
            array (
                'id' => 1816,
                'country_id' => 88,
                'name' => 'Lower River',
                'code' => 'LR',
                'adm1_code' => 'GA02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            497 => 
            array (
                'id' => 1817,
                'country_id' => 88,
                'name' => 'MacCarthy Island',
                'code' => 'MC',
                'adm1_code' => 'GA03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1818,
                'country_id' => 88,
                'name' => 'Upper River',
                'code' => 'UR',
                'adm1_code' => 'GA04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1819,
                'country_id' => 88,
                'name' => 'Western',
                'code' => 'WE',
                'adm1_code' => 'GA05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1820,
                'country_id' => 88,
                'name' => 'North Bank',
                'code' => 'NB',
                'adm1_code' => 'GA07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1821,
                'country_id' => 87,
                'name' => 'Estuaire',
                'code' => 'ES',
                'adm1_code' => 'GB01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1822,
                'country_id' => 87,
                'name' => 'Haut-Ogooue',
                'code' => 'HO',
                'adm1_code' => 'GB02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1823,
                'country_id' => 87,
                'name' => 'Moyen-Ogooue',
                'code' => 'MO',
                'adm1_code' => 'GB03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1824,
                'country_id' => 87,
                'name' => 'Ngounie',
                'code' => 'NG',
                'adm1_code' => 'GB04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1825,
                'country_id' => 87,
                'name' => 'Nyanga',
                'code' => 'NY',
                'adm1_code' => 'GB05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1826,
                'country_id' => 87,
                'name' => 'Ogooue-Ivindo',
                'code' => 'OI',
                'adm1_code' => 'GB06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1827,
                'country_id' => 87,
                'name' => 'Ogooue-Lolo',
                'code' => 'OL',
                'adm1_code' => 'GB07',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1828,
                'country_id' => 87,
                'name' => 'Ogooue-Maritime',
                'code' => 'OM',
                'adm1_code' => 'GB08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1829,
                'country_id' => 87,
                'name' => 'Woleu-Ntem',
                'code' => 'WN',
                'adm1_code' => 'GB09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1831,
                'country_id' => 90,
                'name' => 'Abkhazia',
                'code' => 'AB',
                'adm1_code' => 'GG02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1833,
                'country_id' => 90,
                'name' => 'Ajaria',
                'code' => 'AJ',
                'adm1_code' => 'GG04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1879,
                'country_id' => 90,
                'name' => 'T\'bilisi',
                'code' => 'TB',
                'adm1_code' => 'GG51',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1893,
                'country_id' => 92,
                'name' => 'Greater Accra',
                'code' => 'AA',
                'adm1_code' => 'GH01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1894,
                'country_id' => 92,
                'name' => 'Ashanti',
                'code' => 'AH',
                'adm1_code' => 'GH02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1895,
                'country_id' => 92,
                'name' => 'Brong-Ahafo',
                'code' => 'BA',
                'adm1_code' => 'GH03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1896,
                'country_id' => 92,
                'name' => 'Central',
                'code' => 'CP',
                'adm1_code' => 'GH04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1897,
                'country_id' => 92,
                'name' => 'Eastern',
                'code' => 'EP',
                'adm1_code' => 'GH05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1898,
                'country_id' => 92,
                'name' => 'Northern',
                'code' => 'NP',
                'adm1_code' => 'GH06',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1899,
                'country_id' => 92,
                'name' => 'Volta',
                'code' => 'TV',
                'adm1_code' => 'GH08',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1900,
                'country_id' => 92,
                'name' => 'Western',
                'code' => 'WP',
                'adm1_code' => 'GH09',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1901,
                'country_id' => 92,
                'name' => 'Upper East',
                'code' => 'UE',
                'adm1_code' => 'GH10',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1902,
                'country_id' => 92,
                'name' => 'Upper West',
                'code' => 'UW',
                'adm1_code' => 'GH11',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1903,
                'country_id' => 97,
                'name' => 'Saint Andrew',
                'code' => 'AN',
                'adm1_code' => 'GJ01',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1904,
                'country_id' => 97,
                'name' => 'Saint David',
                'code' => 'DA',
                'adm1_code' => 'GJ02',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1905,
                'country_id' => 97,
                'name' => 'Saint George',
                'code' => 'GE',
                'adm1_code' => 'GJ03',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1906,
                'country_id' => 97,
                'name' => 'Saint John',
                'code' => 'JO',
                'adm1_code' => 'GJ04',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1907,
                'country_id' => 97,
                'name' => 'Saint Mark',
                'code' => 'MA',
                'adm1_code' => 'GJ05',
                'created_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}