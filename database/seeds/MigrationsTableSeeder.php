<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '2020_03_16_063435_create_admin_table',
                'batch' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '2020_03_16_063435_create_admin_group_table',
                'batch' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '2020_03_16_063435_create_admin_group_relation_table',
                'batch' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2020_03_16_063435_create_api_user_table',
                'batch' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2020_03_16_063435_create_category_table',
                'batch' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2020_03_16_063435_create_cities_table',
                'batch' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2020_03_16_063435_create_cms_apicustom_table',
                'batch' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'migration' => '2020_03_16_063435_create_cms_apikey_table',
                'batch' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'migration' => '2020_03_16_063435_create_cms_content_table',
                'batch' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'migration' => '2020_03_16_063435_create_cms_dashboard_table',
                'batch' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'migration' => '2020_03_16_063435_create_cms_email_queues_table',
                'batch' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'migration' => '2020_03_16_063435_create_cms_email_templates_table',
                'batch' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'migration' => '2020_03_16_063435_create_cms_logs_table',
                'batch' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'migration' => '2020_03_16_063435_create_cms_menus_table',
                'batch' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'migration' => '2020_03_16_063435_create_cms_menus_privileges_table',
                'batch' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'migration' => '2020_03_16_063435_create_cms_moduls_table',
                'batch' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'migration' => '2020_03_16_063435_create_cms_notifications_table',
                'batch' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'migration' => '2020_03_16_063435_create_cms_privileges_table',
                'batch' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'migration' => '2020_03_16_063435_create_cms_privileges_roles_table',
                'batch' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'migration' => '2020_03_16_063435_create_cms_settings_table',
                'batch' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'migration' => '2020_03_16_063435_create_cms_statistic_components_table',
                'batch' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'migration' => '2020_03_16_063435_create_cms_statistics_table',
                'batch' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'migration' => '2020_03_16_063435_create_cms_users_table',
                'batch' => 0,
            ),
            23 => 
            array (
                'id' => 24,
                'migration' => '2020_03_16_063435_create_company_table',
                'batch' => 0,
            ),
            24 => 
            array (
                'id' => 25,
                'migration' => '2020_03_16_063435_create_company_group_table',
                'batch' => 0,
            ),
            25 => 
            array (
                'id' => 26,
                'migration' => '2020_03_16_063435_create_company_group_category_table',
                'batch' => 0,
            ),
            26 => 
            array (
                'id' => 27,
                'migration' => '2020_03_16_063435_create_company_subscription_relation_table',
                'batch' => 0,
            ),
            27 => 
            array (
                'id' => 28,
                'migration' => '2020_03_16_063435_create_countries_table',
                'batch' => 0,
            ),
            28 => 
            array (
                'id' => 29,
                'migration' => '2020_03_16_063435_create_crm_table',
                'batch' => 0,
            ),
            29 => 
            array (
                'id' => 30,
                'migration' => '2020_03_16_063435_create_faq_table',
                'batch' => 0,
            ),
            30 => 
            array (
                'id' => 31,
                'migration' => '2020_03_16_063435_create_mail_template_table',
                'batch' => 0,
            ),
            31 => 
            array (
                'id' => 32,
                'migration' => '2020_03_16_063435_create_media_table',
                'batch' => 0,
            ),
            32 => 
            array (
                'id' => 33,
                'migration' => '2020_03_16_063435_create_media_tag_table',
                'batch' => 0,
            ),
            33 => 
            array (
                'id' => 34,
                'migration' => '2020_03_16_063435_create_module_table',
                'batch' => 0,
            ),
            34 => 
            array (
                'id' => 35,
                'migration' => '2020_03_16_063435_create_notification_table',
                'batch' => 0,
            ),
            35 => 
            array (
                'id' => 36,
                'migration' => '2020_03_16_063435_create_notification_identifier_table',
                'batch' => 0,
            ),
            36 => 
            array (
                'id' => 37,
                'migration' => '2020_03_16_063435_create_project_table',
                'batch' => 0,
            ),
            37 => 
            array (
                'id' => 38,
                'migration' => '2020_03_16_063435_create_project_media_table',
                'batch' => 0,
            ),
            38 => 
            array (
                'id' => 39,
                'migration' => '2020_03_16_063435_create_project_media_tag_table',
                'batch' => 0,
            ),
            39 => 
            array (
                'id' => 40,
                'migration' => '2020_03_16_063435_create_project_query_table',
                'batch' => 0,
            ),
            40 => 
            array (
                'id' => 41,
                'migration' => '2020_03_16_063435_create_query_table',
                'batch' => 0,
            ),
            41 => 
            array (
                'id' => 42,
                'migration' => '2020_03_16_063435_create_query_tag_table',
                'batch' => 0,
            ),
            42 => 
            array (
                'id' => 43,
                'migration' => '2020_03_16_063435_create_setting_table',
                'batch' => 0,
            ),
            43 => 
            array (
                'id' => 44,
                'migration' => '2020_03_16_063435_create_states_table',
                'batch' => 0,
            ),
            44 => 
            array (
                'id' => 45,
                'migration' => '2020_03_16_063435_create_status_table',
                'batch' => 0,
            ),
            45 => 
            array (
                'id' => 46,
                'migration' => '2020_03_16_063435_create_subscription_table',
                'batch' => 0,
            ),
            46 => 
            array (
                'id' => 47,
                'migration' => '2020_03_16_063435_create_tag_table',
                'batch' => 0,
            ),
            47 => 
            array (
                'id' => 48,
                'migration' => '2020_03_16_063435_create_template_fields_table',
                'batch' => 0,
            ),
            48 => 
            array (
                'id' => 49,
                'migration' => '2020_03_16_063435_create_testimonials_table',
                'batch' => 0,
            ),
            49 => 
            array (
                'id' => 50,
                'migration' => '2020_03_16_063435_create_transactions_table',
                'batch' => 0,
            ),
            50 => 
            array (
                'id' => 51,
                'migration' => '2020_03_16_063435_create_type_table',
                'batch' => 0,
            ),
            51 => 
            array (
                'id' => 52,
                'migration' => '2020_03_16_063435_create_user_table',
                'batch' => 0,
            ),
            52 => 
            array (
                'id' => 53,
                'migration' => '2020_03_16_063435_create_user_commission_table',
                'batch' => 0,
            ),
            53 => 
            array (
                'id' => 54,
                'migration' => '2020_03_16_063435_create_user_group_table',
                'batch' => 0,
            ),
            54 => 
            array (
                'id' => 55,
                'migration' => '2020_03_16_063435_create_user_setting_table',
                'batch' => 0,
            ),
            55 => 
            array (
                'id' => 56,
                'migration' => '2020_03_16_063435_create_user_stripe_card_table',
                'batch' => 0,
            ),
            56 => 
            array (
                'id' => 57,
                'migration' => '2020_03_16_063435_create_user_training_script_table',
                'batch' => 0,
            ),
            57 => 
            array (
                'id' => 58,
                'migration' => '2020_03_20_111035_create_admin_table',
                'batch' => 0,
            ),
            58 => 
            array (
                'id' => 59,
                'migration' => '2020_03_20_111035_create_admin_group_table',
                'batch' => 0,
            ),
            59 => 
            array (
                'id' => 60,
                'migration' => '2020_03_20_111035_create_admin_group_relation_table',
                'batch' => 0,
            ),
            60 => 
            array (
                'id' => 61,
                'migration' => '2020_03_20_111035_create_api_user_table',
                'batch' => 0,
            ),
            61 => 
            array (
                'id' => 62,
                'migration' => '2020_03_20_111035_create_category_table',
                'batch' => 0,
            ),
            62 => 
            array (
                'id' => 63,
                'migration' => '2020_03_20_111035_create_cities_table',
                'batch' => 0,
            ),
            63 => 
            array (
                'id' => 64,
                'migration' => '2020_03_20_111035_create_cms_apicustom_table',
                'batch' => 0,
            ),
            64 => 
            array (
                'id' => 65,
                'migration' => '2020_03_20_111035_create_cms_apikey_table',
                'batch' => 0,
            ),
            65 => 
            array (
                'id' => 66,
                'migration' => '2020_03_20_111035_create_cms_content_table',
                'batch' => 0,
            ),
            66 => 
            array (
                'id' => 67,
                'migration' => '2020_03_20_111035_create_cms_dashboard_table',
                'batch' => 0,
            ),
            67 => 
            array (
                'id' => 68,
                'migration' => '2020_03_20_111035_create_cms_email_queues_table',
                'batch' => 0,
            ),
            68 => 
            array (
                'id' => 69,
                'migration' => '2020_03_20_111035_create_cms_email_templates_table',
                'batch' => 0,
            ),
            69 => 
            array (
                'id' => 70,
                'migration' => '2020_03_20_111035_create_cms_logs_table',
                'batch' => 0,
            ),
            70 => 
            array (
                'id' => 71,
                'migration' => '2020_03_20_111035_create_cms_menus_table',
                'batch' => 0,
            ),
            71 => 
            array (
                'id' => 72,
                'migration' => '2020_03_20_111035_create_cms_menus_privileges_table',
                'batch' => 0,
            ),
            72 => 
            array (
                'id' => 73,
                'migration' => '2020_03_20_111035_create_cms_moduls_table',
                'batch' => 0,
            ),
            73 => 
            array (
                'id' => 74,
                'migration' => '2020_03_20_111035_create_cms_notifications_table',
                'batch' => 0,
            ),
            74 => 
            array (
                'id' => 75,
                'migration' => '2020_03_20_111035_create_cms_privileges_table',
                'batch' => 0,
            ),
            75 => 
            array (
                'id' => 76,
                'migration' => '2020_03_20_111035_create_cms_privileges_roles_table',
                'batch' => 0,
            ),
            76 => 
            array (
                'id' => 77,
                'migration' => '2020_03_20_111035_create_cms_settings_table',
                'batch' => 0,
            ),
            77 => 
            array (
                'id' => 78,
                'migration' => '2020_03_20_111035_create_cms_statistic_components_table',
                'batch' => 0,
            ),
            78 => 
            array (
                'id' => 79,
                'migration' => '2020_03_20_111035_create_cms_statistics_table',
                'batch' => 0,
            ),
            79 => 
            array (
                'id' => 80,
                'migration' => '2020_03_20_111035_create_cms_users_table',
                'batch' => 0,
            ),
            80 => 
            array (
                'id' => 81,
                'migration' => '2020_03_20_111035_create_company_table',
                'batch' => 0,
            ),
            81 => 
            array (
                'id' => 82,
                'migration' => '2020_03_20_111035_create_company_group_table',
                'batch' => 0,
            ),
            82 => 
            array (
                'id' => 83,
                'migration' => '2020_03_20_111035_create_company_group_category_table',
                'batch' => 0,
            ),
            83 => 
            array (
                'id' => 84,
                'migration' => '2020_03_20_111035_create_company_subscription_relation_table',
                'batch' => 0,
            ),
            84 => 
            array (
                'id' => 85,
                'migration' => '2020_03_20_111035_create_countries_table',
                'batch' => 0,
            ),
            85 => 
            array (
                'id' => 86,
                'migration' => '2020_03_20_111035_create_crm_table',
                'batch' => 0,
            ),
            86 => 
            array (
                'id' => 87,
                'migration' => '2020_03_20_111035_create_faq_table',
                'batch' => 0,
            ),
            87 => 
            array (
                'id' => 88,
                'migration' => '2020_03_20_111035_create_mail_template_table',
                'batch' => 0,
            ),
            88 => 
            array (
                'id' => 89,
                'migration' => '2020_03_20_111035_create_media_table',
                'batch' => 0,
            ),
            89 => 
            array (
                'id' => 90,
                'migration' => '2020_03_20_111035_create_media_tag_table',
                'batch' => 0,
            ),
            90 => 
            array (
                'id' => 91,
                'migration' => '2020_03_20_111035_create_module_table',
                'batch' => 0,
            ),
            91 => 
            array (
                'id' => 92,
                'migration' => '2020_03_20_111035_create_notification_table',
                'batch' => 0,
            ),
            92 => 
            array (
                'id' => 93,
                'migration' => '2020_03_20_111035_create_notification_identifier_table',
                'batch' => 0,
            ),
            93 => 
            array (
                'id' => 94,
                'migration' => '2020_03_20_111035_create_project_table',
                'batch' => 0,
            ),
            94 => 
            array (
                'id' => 95,
                'migration' => '2020_03_20_111035_create_project_media_table',
                'batch' => 0,
            ),
            95 => 
            array (
                'id' => 96,
                'migration' => '2020_03_20_111035_create_project_media_tag_table',
                'batch' => 0,
            ),
            96 => 
            array (
                'id' => 97,
                'migration' => '2020_03_20_111035_create_project_query_table',
                'batch' => 0,
            ),
            97 => 
            array (
                'id' => 98,
                'migration' => '2020_03_20_111035_create_query_table',
                'batch' => 0,
            ),
            98 => 
            array (
                'id' => 99,
                'migration' => '2020_03_20_111035_create_query_tag_table',
                'batch' => 0,
            ),
            99 => 
            array (
                'id' => 100,
                'migration' => '2020_03_20_111035_create_setting_table',
                'batch' => 0,
            ),
            100 => 
            array (
                'id' => 101,
                'migration' => '2020_03_20_111035_create_states_table',
                'batch' => 0,
            ),
            101 => 
            array (
                'id' => 102,
                'migration' => '2020_03_20_111035_create_status_table',
                'batch' => 0,
            ),
            102 => 
            array (
                'id' => 103,
                'migration' => '2020_03_20_111035_create_subscription_table',
                'batch' => 0,
            ),
            103 => 
            array (
                'id' => 104,
                'migration' => '2020_03_20_111035_create_tag_table',
                'batch' => 0,
            ),
            104 => 
            array (
                'id' => 105,
                'migration' => '2020_03_20_111035_create_template_fields_table',
                'batch' => 0,
            ),
            105 => 
            array (
                'id' => 106,
                'migration' => '2020_03_20_111035_create_testimonials_table',
                'batch' => 0,
            ),
            106 => 
            array (
                'id' => 107,
                'migration' => '2020_03_20_111035_create_transactions_table',
                'batch' => 0,
            ),
            107 => 
            array (
                'id' => 108,
                'migration' => '2020_03_20_111035_create_type_table',
                'batch' => 0,
            ),
            108 => 
            array (
                'id' => 109,
                'migration' => '2020_03_20_111035_create_user_table',
                'batch' => 0,
            ),
            109 => 
            array (
                'id' => 110,
                'migration' => '2020_03_20_111035_create_user_commission_table',
                'batch' => 0,
            ),
            110 => 
            array (
                'id' => 111,
                'migration' => '2020_03_20_111035_create_user_group_table',
                'batch' => 0,
            ),
            111 => 
            array (
                'id' => 112,
                'migration' => '2020_03_20_111035_create_user_setting_table',
                'batch' => 0,
            ),
            112 => 
            array (
                'id' => 113,
                'migration' => '2020_03_20_111035_create_user_stripe_card_table',
                'batch' => 0,
            ),
            113 => 
            array (
                'id' => 114,
                'migration' => '2020_03_20_111035_create_user_training_script_table',
                'batch' => 0,
            ),
            114 => 
            array (
                'id' => 115,
                'migration' => '2020_03_20_115328_create_admin_table',
                'batch' => 0,
            ),
            115 => 
            array (
                'id' => 116,
                'migration' => '2020_03_20_115328_create_admin_group_table',
                'batch' => 0,
            ),
            116 => 
            array (
                'id' => 117,
                'migration' => '2020_03_20_115328_create_admin_group_relation_table',
                'batch' => 0,
            ),
            117 => 
            array (
                'id' => 118,
                'migration' => '2020_03_20_115328_create_api_user_table',
                'batch' => 0,
            ),
            118 => 
            array (
                'id' => 119,
                'migration' => '2020_03_20_115328_create_category_table',
                'batch' => 0,
            ),
            119 => 
            array (
                'id' => 120,
                'migration' => '2020_03_20_115328_create_cities_table',
                'batch' => 0,
            ),
            120 => 
            array (
                'id' => 121,
                'migration' => '2020_03_20_115328_create_cms_apicustom_table',
                'batch' => 0,
            ),
            121 => 
            array (
                'id' => 122,
                'migration' => '2020_03_20_115328_create_cms_apikey_table',
                'batch' => 0,
            ),
            122 => 
            array (
                'id' => 123,
                'migration' => '2020_03_20_115328_create_cms_content_table',
                'batch' => 0,
            ),
            123 => 
            array (
                'id' => 124,
                'migration' => '2020_03_20_115328_create_cms_dashboard_table',
                'batch' => 0,
            ),
            124 => 
            array (
                'id' => 125,
                'migration' => '2020_03_20_115328_create_cms_email_queues_table',
                'batch' => 0,
            ),
            125 => 
            array (
                'id' => 126,
                'migration' => '2020_03_20_115328_create_cms_email_templates_table',
                'batch' => 0,
            ),
            126 => 
            array (
                'id' => 127,
                'migration' => '2020_03_20_115328_create_cms_logs_table',
                'batch' => 0,
            ),
            127 => 
            array (
                'id' => 128,
                'migration' => '2020_03_20_115328_create_cms_menus_table',
                'batch' => 0,
            ),
            128 => 
            array (
                'id' => 129,
                'migration' => '2020_03_20_115328_create_cms_menus_privileges_table',
                'batch' => 0,
            ),
            129 => 
            array (
                'id' => 130,
                'migration' => '2020_03_20_115328_create_cms_moduls_table',
                'batch' => 0,
            ),
            130 => 
            array (
                'id' => 131,
                'migration' => '2020_03_20_115328_create_cms_notifications_table',
                'batch' => 0,
            ),
            131 => 
            array (
                'id' => 132,
                'migration' => '2020_03_20_115328_create_cms_privileges_table',
                'batch' => 0,
            ),
            132 => 
            array (
                'id' => 133,
                'migration' => '2020_03_20_115328_create_cms_privileges_roles_table',
                'batch' => 0,
            ),
            133 => 
            array (
                'id' => 134,
                'migration' => '2020_03_20_115328_create_cms_settings_table',
                'batch' => 0,
            ),
            134 => 
            array (
                'id' => 135,
                'migration' => '2020_03_20_115328_create_cms_statistic_components_table',
                'batch' => 0,
            ),
            135 => 
            array (
                'id' => 136,
                'migration' => '2020_03_20_115328_create_cms_statistics_table',
                'batch' => 0,
            ),
            136 => 
            array (
                'id' => 137,
                'migration' => '2020_03_20_115328_create_cms_users_table',
                'batch' => 0,
            ),
            137 => 
            array (
                'id' => 138,
                'migration' => '2020_03_20_115328_create_company_table',
                'batch' => 0,
            ),
            138 => 
            array (
                'id' => 139,
                'migration' => '2020_03_20_115328_create_company_group_table',
                'batch' => 0,
            ),
            139 => 
            array (
                'id' => 140,
                'migration' => '2020_03_20_115328_create_company_group_category_table',
                'batch' => 0,
            ),
            140 => 
            array (
                'id' => 141,
                'migration' => '2020_03_20_115328_create_company_subscription_relation_table',
                'batch' => 0,
            ),
            141 => 
            array (
                'id' => 142,
                'migration' => '2020_03_20_115328_create_countries_table',
                'batch' => 0,
            ),
            142 => 
            array (
                'id' => 143,
                'migration' => '2020_03_20_115328_create_crm_table',
                'batch' => 0,
            ),
            143 => 
            array (
                'id' => 144,
                'migration' => '2020_03_20_115328_create_faq_table',
                'batch' => 0,
            ),
            144 => 
            array (
                'id' => 145,
                'migration' => '2020_03_20_115328_create_mail_template_table',
                'batch' => 0,
            ),
            145 => 
            array (
                'id' => 146,
                'migration' => '2020_03_20_115328_create_media_table',
                'batch' => 0,
            ),
            146 => 
            array (
                'id' => 147,
                'migration' => '2020_03_20_115328_create_media_tag_table',
                'batch' => 0,
            ),
            147 => 
            array (
                'id' => 148,
                'migration' => '2020_03_20_115328_create_module_table',
                'batch' => 0,
            ),
            148 => 
            array (
                'id' => 149,
                'migration' => '2020_03_20_115328_create_notification_table',
                'batch' => 0,
            ),
            149 => 
            array (
                'id' => 150,
                'migration' => '2020_03_20_115328_create_notification_identifier_table',
                'batch' => 0,
            ),
            150 => 
            array (
                'id' => 151,
                'migration' => '2020_03_20_115328_create_project_table',
                'batch' => 0,
            ),
            151 => 
            array (
                'id' => 152,
                'migration' => '2020_03_20_115328_create_project_media_table',
                'batch' => 0,
            ),
            152 => 
            array (
                'id' => 153,
                'migration' => '2020_03_20_115328_create_project_media_tag_table',
                'batch' => 0,
            ),
            153 => 
            array (
                'id' => 154,
                'migration' => '2020_03_20_115328_create_project_query_table',
                'batch' => 0,
            ),
            154 => 
            array (
                'id' => 155,
                'migration' => '2020_03_20_115328_create_query_table',
                'batch' => 0,
            ),
            155 => 
            array (
                'id' => 156,
                'migration' => '2020_03_20_115328_create_query_tag_table',
                'batch' => 0,
            ),
            156 => 
            array (
                'id' => 157,
                'migration' => '2020_03_20_115328_create_setting_table',
                'batch' => 0,
            ),
            157 => 
            array (
                'id' => 158,
                'migration' => '2020_03_20_115328_create_states_table',
                'batch' => 0,
            ),
            158 => 
            array (
                'id' => 159,
                'migration' => '2020_03_20_115328_create_status_table',
                'batch' => 0,
            ),
            159 => 
            array (
                'id' => 160,
                'migration' => '2020_03_20_115328_create_subscription_table',
                'batch' => 0,
            ),
            160 => 
            array (
                'id' => 161,
                'migration' => '2020_03_20_115328_create_tag_table',
                'batch' => 0,
            ),
            161 => 
            array (
                'id' => 162,
                'migration' => '2020_03_20_115328_create_template_fields_table',
                'batch' => 0,
            ),
            162 => 
            array (
                'id' => 163,
                'migration' => '2020_03_20_115328_create_testimonials_table',
                'batch' => 0,
            ),
            163 => 
            array (
                'id' => 164,
                'migration' => '2020_03_20_115328_create_transactions_table',
                'batch' => 0,
            ),
            164 => 
            array (
                'id' => 165,
                'migration' => '2020_03_20_115328_create_type_table',
                'batch' => 0,
            ),
            165 => 
            array (
                'id' => 166,
                'migration' => '2020_03_20_115328_create_user_table',
                'batch' => 0,
            ),
            166 => 
            array (
                'id' => 167,
                'migration' => '2020_03_20_115328_create_user_commission_table',
                'batch' => 0,
            ),
            167 => 
            array (
                'id' => 168,
                'migration' => '2020_03_20_115328_create_user_group_table',
                'batch' => 0,
            ),
            168 => 
            array (
                'id' => 169,
                'migration' => '2020_03_20_115328_create_user_setting_table',
                'batch' => 0,
            ),
            169 => 
            array (
                'id' => 170,
                'migration' => '2020_03_20_115328_create_user_stripe_card_table',
                'batch' => 0,
            ),
            170 => 
            array (
                'id' => 171,
                'migration' => '2020_03_20_115328_create_user_training_script_table',
                'batch' => 0,
            ),
            171 => 
            array (
                'id' => 172,
                'migration' => '2020_04_14_161035_create_admin_table',
                'batch' => 0,
            ),
            172 => 
            array (
                'id' => 173,
                'migration' => '2020_04_14_161035_create_admin_group_table',
                'batch' => 0,
            ),
            173 => 
            array (
                'id' => 174,
                'migration' => '2020_04_14_161035_create_admin_group_relation_table',
                'batch' => 0,
            ),
            174 => 
            array (
                'id' => 175,
                'migration' => '2020_04_14_161035_create_api_user_table',
                'batch' => 0,
            ),
            175 => 
            array (
                'id' => 176,
                'migration' => '2020_04_14_161035_create_category_table',
                'batch' => 0,
            ),
            176 => 
            array (
                'id' => 177,
                'migration' => '2020_04_14_161035_create_cities_table',
                'batch' => 0,
            ),
            177 => 
            array (
                'id' => 178,
                'migration' => '2020_04_14_161035_create_cms_apicustom_table',
                'batch' => 0,
            ),
            178 => 
            array (
                'id' => 179,
                'migration' => '2020_04_14_161035_create_cms_apikey_table',
                'batch' => 0,
            ),
            179 => 
            array (
                'id' => 180,
                'migration' => '2020_04_14_161035_create_cms_content_table',
                'batch' => 0,
            ),
            180 => 
            array (
                'id' => 181,
                'migration' => '2020_04_14_161035_create_cms_dashboard_table',
                'batch' => 0,
            ),
            181 => 
            array (
                'id' => 182,
                'migration' => '2020_04_14_161035_create_cms_email_queues_table',
                'batch' => 0,
            ),
            182 => 
            array (
                'id' => 183,
                'migration' => '2020_04_14_161035_create_cms_email_templates_table',
                'batch' => 0,
            ),
            183 => 
            array (
                'id' => 184,
                'migration' => '2020_04_14_161035_create_cms_logs_table',
                'batch' => 0,
            ),
            184 => 
            array (
                'id' => 185,
                'migration' => '2020_04_14_161035_create_cms_menus_table',
                'batch' => 0,
            ),
            185 => 
            array (
                'id' => 186,
                'migration' => '2020_04_14_161035_create_cms_menus_privileges_table',
                'batch' => 0,
            ),
            186 => 
            array (
                'id' => 187,
                'migration' => '2020_04_14_161035_create_cms_moduls_table',
                'batch' => 0,
            ),
            187 => 
            array (
                'id' => 188,
                'migration' => '2020_04_14_161035_create_cms_notifications_table',
                'batch' => 0,
            ),
            188 => 
            array (
                'id' => 189,
                'migration' => '2020_04_14_161035_create_cms_privileges_table',
                'batch' => 0,
            ),
            189 => 
            array (
                'id' => 190,
                'migration' => '2020_04_14_161035_create_cms_privileges_roles_table',
                'batch' => 0,
            ),
            190 => 
            array (
                'id' => 191,
                'migration' => '2020_04_14_161035_create_cms_settings_table',
                'batch' => 0,
            ),
            191 => 
            array (
                'id' => 192,
                'migration' => '2020_04_14_161035_create_cms_statistic_components_table',
                'batch' => 0,
            ),
            192 => 
            array (
                'id' => 193,
                'migration' => '2020_04_14_161035_create_cms_statistics_table',
                'batch' => 0,
            ),
            193 => 
            array (
                'id' => 194,
                'migration' => '2020_04_14_161035_create_cms_users_table',
                'batch' => 0,
            ),
            194 => 
            array (
                'id' => 195,
                'migration' => '2020_04_14_161035_create_company_table',
                'batch' => 0,
            ),
            195 => 
            array (
                'id' => 196,
                'migration' => '2020_04_14_161035_create_company_group_table',
                'batch' => 0,
            ),
            196 => 
            array (
                'id' => 197,
                'migration' => '2020_04_14_161035_create_company_group_category_table',
                'batch' => 0,
            ),
            197 => 
            array (
                'id' => 198,
                'migration' => '2020_04_14_161035_create_company_subscription_relation_table',
                'batch' => 0,
            ),
            198 => 
            array (
                'id' => 199,
                'migration' => '2020_04_14_161035_create_countries_table',
                'batch' => 0,
            ),
            199 => 
            array (
                'id' => 200,
                'migration' => '2020_04_14_161035_create_crm_table',
                'batch' => 0,
            ),
            200 => 
            array (
                'id' => 201,
                'migration' => '2020_04_14_161035_create_faq_table',
                'batch' => 0,
            ),
            201 => 
            array (
                'id' => 202,
                'migration' => '2020_04_14_161035_create_mail_template_table',
                'batch' => 0,
            ),
            202 => 
            array (
                'id' => 203,
                'migration' => '2020_04_14_161035_create_media_table',
                'batch' => 0,
            ),
            203 => 
            array (
                'id' => 204,
                'migration' => '2020_04_14_161035_create_media_tag_table',
                'batch' => 0,
            ),
            204 => 
            array (
                'id' => 205,
                'migration' => '2020_04_14_161035_create_module_table',
                'batch' => 0,
            ),
            205 => 
            array (
                'id' => 206,
                'migration' => '2020_04_14_161035_create_notification_table',
                'batch' => 0,
            ),
            206 => 
            array (
                'id' => 207,
                'migration' => '2020_04_14_161035_create_notification_identifier_table',
                'batch' => 0,
            ),
            207 => 
            array (
                'id' => 208,
                'migration' => '2020_04_14_161035_create_project_table',
                'batch' => 0,
            ),
            208 => 
            array (
                'id' => 209,
                'migration' => '2020_04_14_161035_create_project_media_table',
                'batch' => 0,
            ),
            209 => 
            array (
                'id' => 210,
                'migration' => '2020_04_14_161035_create_project_media_tag_table',
                'batch' => 0,
            ),
            210 => 
            array (
                'id' => 211,
                'migration' => '2020_04_14_161035_create_project_query_table',
                'batch' => 0,
            ),
            211 => 
            array (
                'id' => 212,
                'migration' => '2020_04_14_161035_create_query_table',
                'batch' => 0,
            ),
            212 => 
            array (
                'id' => 213,
                'migration' => '2020_04_14_161035_create_query_tag_table',
                'batch' => 0,
            ),
            213 => 
            array (
                'id' => 214,
                'migration' => '2020_04_14_161035_create_request_calendar_table',
                'batch' => 0,
            ),
            214 => 
            array (
                'id' => 215,
                'migration' => '2020_04_14_161035_create_setting_table',
                'batch' => 0,
            ),
            215 => 
            array (
                'id' => 216,
                'migration' => '2020_04_14_161035_create_states_table',
                'batch' => 0,
            ),
            216 => 
            array (
                'id' => 217,
                'migration' => '2020_04_14_161035_create_status_table',
                'batch' => 0,
            ),
            217 => 
            array (
                'id' => 218,
                'migration' => '2020_04_14_161035_create_subscription_table',
                'batch' => 0,
            ),
            218 => 
            array (
                'id' => 219,
                'migration' => '2020_04_14_161035_create_tag_table',
                'batch' => 0,
            ),
            219 => 
            array (
                'id' => 220,
                'migration' => '2020_04_14_161035_create_template_fields_table',
                'batch' => 0,
            ),
            220 => 
            array (
                'id' => 221,
                'migration' => '2020_04_14_161035_create_testimonials_table',
                'batch' => 0,
            ),
            221 => 
            array (
                'id' => 222,
                'migration' => '2020_04_14_161035_create_transactions_table',
                'batch' => 0,
            ),
            222 => 
            array (
                'id' => 223,
                'migration' => '2020_04_14_161035_create_type_table',
                'batch' => 0,
            ),
            223 => 
            array (
                'id' => 224,
                'migration' => '2020_04_14_161035_create_user_table',
                'batch' => 0,
            ),
            224 => 
            array (
                'id' => 225,
                'migration' => '2020_04_14_161035_create_user_commission_table',
                'batch' => 0,
            ),
            225 => 
            array (
                'id' => 226,
                'migration' => '2020_04_14_161035_create_user_group_table',
                'batch' => 0,
            ),
            226 => 
            array (
                'id' => 227,
                'migration' => '2020_04_14_161035_create_user_setting_table',
                'batch' => 0,
            ),
            227 => 
            array (
                'id' => 228,
                'migration' => '2020_04_14_161035_create_user_stripe_card_table',
                'batch' => 0,
            ),
            228 => 
            array (
                'id' => 229,
                'migration' => '2020_04_14_161035_create_user_training_script_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}