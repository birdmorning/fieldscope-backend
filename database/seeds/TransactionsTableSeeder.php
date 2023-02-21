<?php

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transactions')->delete();
        
        \DB::table('transactions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'sender_id' => 1,
                'receiver_id' => 0,
                'admin_id' => 1,
                'transaction_type' => 'credit',
                'transaction_mode' => 'default',
                'transaction_head' => 'signup',
                'amount' => '12.50',
                'gateway_request' => '{"amount":"12.50","currency":"usd","source":null,"customer":"cus_FxYsyhKSLmerhG","description":"Charge for subscription Per month\\/Paid Monthly","transfer_group":null}',
                'gateway_response' => '{"code":200,"message":"Transactions completed successfully","data":{"charge":{"id":"ch_1FRdkRDXq7Bh852M35ymMnNa","object":"charge","amount":1250,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_1FRdkSDXq7Bh852MtM8lsniP","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"44444","state":null},"email":null,"name":null,"phone":null},"captured":true,"created":1570622071,"currency":"usd","customer":"cus_FxYsyhKSLmerhG","description":"Charge for subscription Per month\\/Paid Monthly","destination":null,"dispute":null,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":6,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1FRdkNDXq7Bh852MIhM82QLS","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":"pass"},"country":"US","exp_month":4,"exp_year":2044,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","installments":null,"last4":"4242","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/acct_1F1yLkDXq7Bh852M\\/ch_1FRdkRDXq7Bh852M35ymMnNa\\/rcpt_FxYslpsipy36gsSto1ToCHOooTpDh1K","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_1FRdkRDXq7Bh852M35ymMnNa\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1FRdkNDXq7Bh852MIhM82QLS","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"44444","address_zip_check":"pass","brand":"Visa","country":"US","customer":"cus_FxYsyhKSLmerhG","cvc_check":"pass","dynamic_last4":null,"exp_month":4,"exp_year":2044,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}}}',
                'gateway_type' => 'stripe',
                'created_at' => '2019-10-09 14:54:28',
                'updated_at' => '2019-10-09 14:54:28',
            ),
            1 => 
            array (
                'id' => 2,
                'sender_id' => 3,
                'receiver_id' => 0,
                'admin_id' => 1,
                'transaction_type' => 'credit',
                'transaction_mode' => 'default',
                'transaction_head' => 'signup',
                'amount' => '12.50',
                'gateway_request' => '{"amount":"12.50","currency":"usd","source":null,"customer":"cus_FxbDMXPCTQ19sz","description":"Charge for subscription Per month\\/Paid Monthly","transfer_group":null}',
                'gateway_response' => '{"code":200,"message":"Transactions completed successfully","data":{"charge":{"id":"ch_1FRg0wDXq7Bh852MVPT46nvi","object":"charge","amount":1250,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_1FRg0wDXq7Bh852M3lAh2pVj","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"42424","state":null},"email":null,"name":null,"phone":null},"captured":true,"created":1570630782,"currency":"usd","customer":"cus_FxbDMXPCTQ19sz","description":"Charge for subscription Per month\\/Paid Monthly","destination":null,"dispute":null,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":58,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1FRg0uDXq7Bh852MIgkvIgAe","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":"pass"},"country":"US","exp_month":4,"exp_year":2024,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","installments":null,"last4":"4242","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/acct_1F1yLkDXq7Bh852M\\/ch_1FRg0wDXq7Bh852MVPT46nvi\\/rcpt_FxbDywwrK0b4UHYx2hXyAZSoR5x2cwZ","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_1FRg0wDXq7Bh852MVPT46nvi\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1FRg0uDXq7Bh852MIgkvIgAe","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"42424","address_zip_check":"pass","brand":"Visa","country":"US","customer":"cus_FxbDMXPCTQ19sz","cvc_check":"pass","dynamic_last4":null,"exp_month":4,"exp_year":2024,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}}}',
                'gateway_type' => 'stripe',
                'created_at' => '2019-10-09 17:19:39',
                'updated_at' => '2019-10-09 17:19:39',
            ),
            2 => 
            array (
                'id' => 3,
                'sender_id' => 8,
                'receiver_id' => 0,
                'admin_id' => 1,
                'transaction_type' => 'credit',
                'transaction_mode' => 'default',
                'transaction_head' => 'signup',
                'amount' => '14.50',
                'gateway_request' => '{"amount":"14.50","currency":"usd","source":null,"customer":"cus_FzT9PWBklXfW66","description":"Charge for subscription Per month\\/Paid Monthly","transfer_group":null}',
                'gateway_response' => '{"code":200,"message":"Transactions completed successfully","data":{"charge":{"id":"ch_1FTUCuDXq7Bh852M4UuJcZFO","object":"charge","amount":1450,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_1FTUCuDXq7Bh852ME3VS9LI6","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"66030","state":null},"email":null,"name":null,"phone":null},"captured":true,"created":1571062052,"currency":"usd","customer":"cus_FzT9PWBklXfW66","description":"Charge for subscription Per month\\/Paid Monthly","destination":null,"dispute":null,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":54,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1FTUCrDXq7Bh852MBzRQCI5C","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":"pass"},"country":"US","exp_month":10,"exp_year":2023,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","installments":null,"last4":"4242","network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/acct_1F1yLkDXq7Bh852M\\/ch_1FTUCuDXq7Bh852M4UuJcZFO\\/rcpt_FzT9iijnjKKBtefg9hQ32eIOwd0VswX","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_1FTUCuDXq7Bh852M4UuJcZFO\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1FTUCrDXq7Bh852MBzRQCI5C","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"66030","address_zip_check":"pass","brand":"Visa","country":"US","customer":"cus_FzT9PWBklXfW66","cvc_check":"pass","dynamic_last4":null,"exp_month":10,"exp_year":2023,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}}}',
                'gateway_type' => 'stripe',
                'created_at' => '2019-10-14 17:07:30',
                'updated_at' => '2019-10-14 17:07:30',
            ),
            3 => 
            array (
                'id' => 4,
                'sender_id' => 13,
                'receiver_id' => 0,
                'admin_id' => 1,
                'transaction_type' => 'credit',
                'transaction_mode' => 'default',
                'transaction_head' => 'signup',
                'amount' => '14.50',
                'gateway_request' => '{"amount":"14.50","currency":"usd","source":null,"customer":"cus_G4Y72amX8Z1Nil","description":"Charge for subscription Per month\\/Paid Monthly","transfer_group":null}',
                'gateway_response' => '{"code":200,"message":"Transactions completed successfully","data":{"charge":{"id":"ch_1FYP1TDXq7Bh852MdR71ZyO4","object":"charge","amount":1450,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_1FYP1TDXq7Bh852Mw9RqJ6G7","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"12345","state":null},"email":null,"name":null,"phone":null},"captured":true,"created":1572233763,"currency":"usd","customer":"cus_G4Y72amX8Z1Nil","description":"Charge for subscription Per month\\/Paid Monthly","destination":null,"dispute":null,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":41,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1FYP1RDXq7Bh852M2CU6R2Ms","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":"pass"},"country":"US","exp_month":12,"exp_year":2023,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","installments":null,"last4":"4242","network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/acct_1F1yLkDXq7Bh852M\\/ch_1FYP1TDXq7Bh852MdR71ZyO4\\/rcpt_G4Y7VJY0KFhLXSkx3yUXrszMUAIPtYr","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_1FYP1TDXq7Bh852MdR71ZyO4\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1FYP1RDXq7Bh852M2CU6R2Ms","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"12345","address_zip_check":"pass","brand":"Visa","country":"US","customer":"cus_G4Y72amX8Z1Nil","cvc_check":"pass","dynamic_last4":null,"exp_month":12,"exp_year":2023,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}}}',
                'gateway_type' => 'stripe',
                'created_at' => '2019-10-28 07:36:01',
                'updated_at' => '2019-10-28 07:36:01',
            ),
            4 => 
            array (
                'id' => 5,
                'sender_id' => 16,
                'receiver_id' => 0,
                'admin_id' => 1,
                'transaction_type' => 'credit',
                'transaction_mode' => 'default',
                'transaction_head' => 'signup',
                'amount' => '12.50',
                'gateway_request' => '{"amount":"12.50","currency":"usd","source":null,"customer":"cus_G8oDFDC97BoGEM","description":"Charge for subscription Per month\\/Paid Monthly","transfer_group":null}',
                'gateway_response' => '{"code":200,"message":"Transactions completed successfully","data":{"charge":{"id":"ch_1FcWbRDXq7Bh852MWCxMsRP6","object":"charge","amount":1250,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_1FcWbRDXq7Bh852MIEaRhTIW","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"42424","state":null},"email":null,"name":null,"phone":null},"captured":true,"created":1573216213,"currency":"usd","customer":"cus_G8oDFDC97BoGEM","description":"Charge for subscription Per month\\/Paid Monthly","destination":null,"dispute":null,"disputed":false,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":58,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1FcWbODXq7Bh852MZS84xLvC","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":"pass"},"country":"US","exp_month":4,"exp_year":2024,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","installments":null,"last4":"4242","network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/acct_1F1yLkDXq7Bh852M\\/ch_1FcWbRDXq7Bh852MWCxMsRP6\\/rcpt_G8oDizZp57dIB1vgC8gEzi5D3BwneB7","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_1FcWbRDXq7Bh852MWCxMsRP6\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1FcWbODXq7Bh852MZS84xLvC","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"42424","address_zip_check":"pass","brand":"Visa","country":"US","customer":"cus_G8oDFDC97BoGEM","cvc_check":"pass","dynamic_last4":null,"exp_month":4,"exp_year":2024,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}}}',
                'gateway_type' => 'stripe',
                'created_at' => '2019-11-08 16:30:10',
                'updated_at' => '2019-11-08 16:30:10',
            ),
            5 => 
            array (
                'id' => 6,
                'sender_id' => 18,
                'receiver_id' => 0,
                'admin_id' => 1,
                'transaction_type' => 'credit',
                'transaction_mode' => 'default',
                'transaction_head' => 'signup',
                'amount' => '12.50',
                'gateway_request' => '{"amount":"12.50","currency":"usd","source":null,"customer":"cus_GAF5QEhjSepbF7","description":"Charge for subscription Per month\\/Paid Monthly","transfer_group":null}',
                'gateway_response' => '{"code":200,"message":"Transactions completed successfully","data":{"charge":{"id":"ch_1Fdub9DXq7Bh852Mz0Jlw4rF","object":"charge","amount":1250,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_1FdubADXq7Bh852MTHmuPbXV","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"42422","state":null},"email":null,"name":null,"phone":null},"captured":true,"created":1573546779,"currency":"usd","customer":"cus_GAF5QEhjSepbF7","description":"Charge for subscription Per month\\/Paid Monthly","destination":null,"dispute":null,"disputed":false,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":33,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1Fdub6DXq7Bh852Mu7CHyYPv","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":"pass"},"country":"US","exp_month":4,"exp_year":2024,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","installments":null,"last4":"4242","network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/acct_1F1yLkDXq7Bh852M\\/ch_1Fdub9DXq7Bh852Mz0Jlw4rF\\/rcpt_GAF5nSAOrkAigsg07rSXzS6Om9NBQAU","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_1Fdub9DXq7Bh852Mz0Jlw4rF\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1Fdub6DXq7Bh852Mu7CHyYPv","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"42422","address_zip_check":"pass","brand":"Visa","country":"US","customer":"cus_GAF5QEhjSepbF7","cvc_check":"pass","dynamic_last4":null,"exp_month":4,"exp_year":2024,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}}}',
                'gateway_type' => 'stripe',
                'created_at' => '2019-11-12 12:19:38',
                'updated_at' => '2019-11-12 12:19:38',
            ),
            6 => 
            array (
                'id' => 7,
                'sender_id' => 20,
                'receiver_id' => 0,
                'admin_id' => 1,
                'transaction_type' => 'credit',
                'transaction_mode' => 'default',
                'transaction_head' => 'signup',
                'amount' => '12.50',
                'gateway_request' => '{"amount":"12.50","currency":"usd","source":null,"customer":"cus_GAc18WfCdqvWNc","description":"Charge for subscription Per month\\/Paid Monthly","transfer_group":null}',
                'gateway_response' => '{"code":200,"message":"Transactions completed successfully","data":{"charge":{"id":"ch_1FeGnrDXq7Bh852MwR0zCwCe","object":"charge","amount":1250,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_1FeGnrDXq7Bh852MeDKUW9sm","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"42424","state":null},"email":null,"name":null,"phone":null},"captured":true,"created":1573632135,"currency":"usd","customer":"cus_GAc18WfCdqvWNc","description":"Charge for subscription Per month\\/Paid Monthly","destination":null,"dispute":null,"disputed":false,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":27,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1FeGnoDXq7Bh852M5DwJe64E","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":"pass"},"country":"US","exp_month":4,"exp_year":2024,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","installments":null,"last4":"4242","network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/acct_1F1yLkDXq7Bh852M\\/ch_1FeGnrDXq7Bh852MwR0zCwCe\\/rcpt_GAc1mNcactpslTK318w52T2l4DmeSJ8","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_1FeGnrDXq7Bh852MwR0zCwCe\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1FeGnoDXq7Bh852M5DwJe64E","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"42424","address_zip_check":"pass","brand":"Visa","country":"US","customer":"cus_GAc18WfCdqvWNc","cvc_check":"pass","dynamic_last4":null,"exp_month":4,"exp_year":2024,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}}}',
                'gateway_type' => 'stripe',
                'created_at' => '2019-11-13 12:02:13',
                'updated_at' => '2019-11-13 12:02:13',
            ),
            7 => 
            array (
                'id' => 8,
                'sender_id' => 22,
                'receiver_id' => 0,
                'admin_id' => 1,
                'transaction_type' => 'credit',
                'transaction_mode' => 'default',
                'transaction_head' => 'signup',
                'amount' => '14.50',
                'gateway_request' => '{"amount":"14.50","currency":"usd","source":null,"customer":"cus_GAk00xygiRQpk5","description":"Charge for subscription Per month\\/Paid Monthly","transfer_group":null}',
                'gateway_response' => '{"code":200,"message":"Transactions completed successfully","data":{"charge":{"id":"ch_1FeOWjDXq7Bh852MKjxaRYnM","object":"charge","amount":1450,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_1FeOWkDXq7Bh852Mglh734wd","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"66062","state":null},"email":null,"name":null,"phone":null},"captured":true,"created":1573661825,"currency":"usd","customer":"cus_GAk00xygiRQpk5","description":"Charge for subscription Per month\\/Paid Monthly","destination":null,"dispute":null,"disputed":false,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":8,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1FeOWhDXq7Bh852Mqu6AZp9O","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":"pass"},"country":"US","exp_month":10,"exp_year":2023,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","installments":null,"last4":"4242","network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/acct_1F1yLkDXq7Bh852M\\/ch_1FeOWjDXq7Bh852MKjxaRYnM\\/rcpt_GAk0nL8ppNFsNngRi6OXHVnZaQPeWeH","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_1FeOWjDXq7Bh852MKjxaRYnM\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1FeOWhDXq7Bh852Mqu6AZp9O","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"66062","address_zip_check":"pass","brand":"Visa","country":"US","customer":"cus_GAk00xygiRQpk5","cvc_check":"pass","dynamic_last4":null,"exp_month":10,"exp_year":2023,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}}}',
                'gateway_type' => 'stripe',
                'created_at' => '2019-11-13 20:17:02',
                'updated_at' => '2019-11-13 20:17:02',
            ),
            8 => 
            array (
                'id' => 9,
                'sender_id' => 31,
                'receiver_id' => 0,
                'admin_id' => 1,
                'transaction_type' => 'credit',
                'transaction_mode' => 'default',
                'transaction_head' => 'signup',
                'amount' => '12.50',
                'gateway_request' => '{"amount":"12.50","currency":"usd","source":null,"customer":"cus_GWPF4XOs3OpTtF","description":"Charge for subscription Per month\\/Paid Monthly","transfer_group":null}',
                'gateway_response' => '{"code":200,"message":"Transactions completed successfully","data":{"charge":{"id":"ch_1FzMQwDXq7Bh852MpRyIsnWl","object":"charge","amount":1250,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_1FzMQxDXq7Bh852MhqZ4BzYi","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"42424","state":null},"email":null,"name":null,"phone":null},"captured":true,"created":1578658666,"currency":"usd","customer":"cus_GWPF4XOs3OpTtF","description":"Charge for subscription Per month\\/Paid Monthly","destination":null,"dispute":null,"disputed":false,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":38,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1FzMQuDXq7Bh852MltQR1ajp","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":"pass"},"country":"US","exp_month":4,"exp_year":2024,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","installments":null,"last4":"4242","network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/acct_1F1yLkDXq7Bh852M\\/ch_1FzMQwDXq7Bh852MpRyIsnWl\\/rcpt_GWPFyokeFCBcK3iqMRCkIkwU7wHEvoH","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_1FzMQwDXq7Bh852MpRyIsnWl\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1FzMQuDXq7Bh852MltQR1ajp","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"42424","address_zip_check":"pass","brand":"Visa","country":"US","customer":"cus_GWPF4XOs3OpTtF","cvc_check":"pass","dynamic_last4":null,"exp_month":4,"exp_year":2024,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}}}',
                'gateway_type' => 'stripe',
                'created_at' => '2020-01-10 16:17:44',
                'updated_at' => '2020-01-10 16:17:44',
            ),
            9 => 
            array (
                'id' => 10,
                'sender_id' => 32,
                'receiver_id' => 0,
                'admin_id' => 1,
                'transaction_type' => 'credit',
                'transaction_mode' => 'default',
                'transaction_head' => 'signup',
                'amount' => '12.50',
                'gateway_request' => '{"amount":"12.50","currency":"usd","source":null,"customer":"cus_GWPHpKrDPTuYVe","description":"Charge for subscription Per month\\/Paid Monthly","transfer_group":null}',
                'gateway_response' => '{"code":200,"message":"Transactions completed successfully","data":{"charge":{"id":"ch_1FzMSTDXq7Bh852M5008JsVJ","object":"charge","amount":1250,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_1FzMSTDXq7Bh852M6L4rYsHZ","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"42424","state":null},"email":null,"name":null,"phone":null},"captured":true,"created":1578658761,"currency":"usd","customer":"cus_GWPHpKrDPTuYVe","description":"Charge for subscription Per month\\/Paid Monthly","destination":null,"dispute":null,"disputed":false,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":60,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1FzMSRDXq7Bh852McRuwwNWr","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":"pass"},"country":"US","exp_month":4,"exp_year":2024,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","installments":null,"last4":"4242","network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/acct_1F1yLkDXq7Bh852M\\/ch_1FzMSTDXq7Bh852M5008JsVJ\\/rcpt_GWPH4x2WG4tgW68FzFH3ss6JDOfI8B5","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_1FzMSTDXq7Bh852M5008JsVJ\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1FzMSRDXq7Bh852McRuwwNWr","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"42424","address_zip_check":"pass","brand":"Visa","country":"US","customer":"cus_GWPHpKrDPTuYVe","cvc_check":"pass","dynamic_last4":null,"exp_month":4,"exp_year":2024,"fingerprint":"SvYDx34oIcRpACAU","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}}}',
                'gateway_type' => 'stripe',
                'created_at' => '2020-01-10 16:19:19',
                'updated_at' => '2020-01-10 16:19:19',
            ),
            10 => 
            array (
                'id' => 11,
                'sender_id' => 36,
                'receiver_id' => 0,
                'admin_id' => 1,
                'transaction_type' => 'credit',
                'transaction_mode' => 'default',
                'transaction_head' => 'signup',
                'amount' => '150.00',
                'gateway_request' => '{"amount":"150.00","currency":"usd","source":null,"customer":"cus_H47xw3fkcWFFT2","description":"Charge for subscription Per month\\/Paid Annually","transfer_group":null}',
                'gateway_response' => '{"code":200,"message":"Transactions completed successfully","data":{"charge":{"id":"ch_1GVzi1CjVbAYf7EUYa8re46S","object":"charge","amount":15000,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_1GVzi1CjVbAYf7EUqKyZspqE","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"42424","state":null},"email":null,"name":null,"phone":null},"calculated_statement_descriptor":"Stripe","captured":true,"created":1586436137,"currency":"usd","customer":"cus_H47xw3fkcWFFT2","description":"Charge for subscription Per month\\/Paid Annually","destination":null,"dispute":null,"disputed":false,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":29,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1GVzhyCjVbAYf7EUSRYISota","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":"pass"},"country":"US","exp_month":4,"exp_year":2024,"fingerprint":"goJYtV2C2AwWZw9b","funding":"credit","installments":null,"last4":"4242","network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/acct_1FdwdYCjVbAYf7EU\\/ch_1GVzi1CjVbAYf7EUYa8re46S\\/rcpt_H47xjCZmV3cPIeQryyv25g07ZBINb7k","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_1GVzi1CjVbAYf7EUYa8re46S\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1GVzhyCjVbAYf7EUSRYISota","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"42424","address_zip_check":"pass","brand":"Visa","country":"US","customer":"cus_H47xw3fkcWFFT2","cvc_check":"pass","dynamic_last4":null,"exp_month":4,"exp_year":2024,"fingerprint":"goJYtV2C2AwWZw9b","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}}}',
                'gateway_type' => 'stripe',
                'created_at' => '2020-04-09 12:42:17',
                'updated_at' => '2020-04-09 12:42:17',
            ),
            11 => 
            array (
                'id' => 12,
                'sender_id' => 36,
                'receiver_id' => 0,
                'admin_id' => 1,
                'transaction_type' => 'credit',
                'transaction_mode' => 'default',
                'transaction_head' => 'user',
                'amount' => '2.00',
                'gateway_request' => '{"amount":2,"currency":"usd","source":null,"customer":"cus_H47xw3fkcWFFT2","description":"Charge for adding inspector via plan 2"}',
                'gateway_response' => '{"code":200,"message":"Transactions completed successfully","data":{"charge":{"id":"ch_1GVzvzCjVbAYf7EU2cX4Q5vv","object":"charge","amount":200,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_1GVzvzCjVbAYf7EUi0GDfjGj","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"42424","state":null},"email":null,"name":null,"phone":null},"calculated_statement_descriptor":"Stripe","captured":true,"created":1586437003,"currency":"usd","customer":"cus_H47xw3fkcWFFT2","description":"Charge for adding inspector via plan 2","destination":null,"dispute":null,"disputed":false,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":34,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1GVzhyCjVbAYf7EUSRYISota","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":null},"country":"US","exp_month":4,"exp_year":2024,"fingerprint":"goJYtV2C2AwWZw9b","funding":"credit","installments":null,"last4":"4242","network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/acct_1FdwdYCjVbAYf7EU\\/ch_1GVzvzCjVbAYf7EU2cX4Q5vv\\/rcpt_H48CK19zUI4hIsWWfObrIxL38TqEm3l","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_1GVzvzCjVbAYf7EU2cX4Q5vv\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1GVzhyCjVbAYf7EUSRYISota","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"42424","address_zip_check":"pass","brand":"Visa","country":"US","customer":"cus_H47xw3fkcWFFT2","cvc_check":null,"dynamic_last4":null,"exp_month":4,"exp_year":2024,"fingerprint":"goJYtV2C2AwWZw9b","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}}}',
                'gateway_type' => 'stripe',
                'created_at' => '2020-04-09 12:56:43',
                'updated_at' => '2020-04-09 12:56:43',
            ),
            12 => 
            array (
                'id' => 13,
                'sender_id' => 36,
                'receiver_id' => 0,
                'admin_id' => 1,
                'transaction_type' => 'credit',
                'transaction_mode' => 'default',
                'transaction_head' => 'resubscribe',
                'amount' => '14.50',
                'gateway_request' => '{"amount":"14.50","currency":"usd","source":null,"customer":"cus_H47xw3fkcWFFT2","description":"Resubscribe with plan Per month\\/Paid Monthly"}',
                'gateway_response' => '{"code":200,"message":"Transactions completed successfully","data":{"charge":{"id":"ch_1GXnJgCjVbAYf7EUEiYBPN03","object":"charge","amount":1450,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_1GXnJgCjVbAYf7EUYE3c31x9","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"42424","state":null},"email":null,"name":null,"phone":null},"calculated_statement_descriptor":"Stripe","captured":true,"created":1586865156,"currency":"usd","customer":"cus_H47xw3fkcWFFT2","description":"Resubscribe with plan Per month\\/Paid Monthly","destination":null,"dispute":null,"disputed":false,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":58,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1GVzhyCjVbAYf7EUSRYISota","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":null},"country":"US","exp_month":4,"exp_year":2024,"fingerprint":"goJYtV2C2AwWZw9b","funding":"credit","installments":null,"last4":"4242","network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/acct_1FdwdYCjVbAYf7EU\\/ch_1GXnJgCjVbAYf7EUEiYBPN03\\/rcpt_H5zICuCPS6jA7UqVVQK95WdpUMK6WbO","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_1GXnJgCjVbAYf7EUEiYBPN03\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1GVzhyCjVbAYf7EUSRYISota","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"42424","address_zip_check":"pass","brand":"Visa","country":"US","customer":"cus_H47xw3fkcWFFT2","cvc_check":null,"dynamic_last4":null,"exp_month":4,"exp_year":2024,"fingerprint":"goJYtV2C2AwWZw9b","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}}}',
                'gateway_type' => 'stripe',
                'created_at' => '2020-04-14 11:52:35',
                'updated_at' => '2020-04-14 11:52:35',
            ),
            13 => 
            array (
                'id' => 14,
                'sender_id' => 36,
                'receiver_id' => 0,
                'admin_id' => 1,
                'transaction_type' => 'credit',
                'transaction_mode' => 'default',
                'transaction_head' => 'resubscribe',
                'amount' => '150.00',
                'gateway_request' => '{"amount":"150.00","currency":"usd","source":null,"customer":"cus_H47xw3fkcWFFT2","description":"Resubscribe with plan Per month\\/Paid Annually"}',
                'gateway_response' => '{"code":200,"message":"Transactions completed successfully","data":{"charge":{"id":"ch_1GXqXKCjVbAYf7EUSdbC68SS","object":"charge","amount":15000,"amount_refunded":0,"application":null,"application_fee":null,"application_fee_amount":null,"balance_transaction":"txn_1GXqXKCjVbAYf7EUAWZu6icu","billing_details":{"address":{"city":null,"country":null,"line1":null,"line2":null,"postal_code":"42424","state":null},"email":null,"name":null,"phone":null},"calculated_statement_descriptor":"Stripe","captured":true,"created":1586877534,"currency":"usd","customer":"cus_H47xw3fkcWFFT2","description":"Resubscribe with plan Per month\\/Paid Annually","destination":null,"dispute":null,"disputed":false,"failure_code":null,"failure_message":null,"fraud_details":[],"invoice":null,"livemode":false,"metadata":[],"on_behalf_of":null,"order":null,"outcome":{"network_status":"approved_by_network","reason":null,"risk_level":"normal","risk_score":7,"seller_message":"Payment complete.","type":"authorized"},"paid":true,"payment_intent":null,"payment_method":"card_1GVzhyCjVbAYf7EUSRYISota","payment_method_details":{"card":{"brand":"visa","checks":{"address_line1_check":null,"address_postal_code_check":"pass","cvc_check":null},"country":"US","exp_month":4,"exp_year":2024,"fingerprint":"goJYtV2C2AwWZw9b","funding":"credit","installments":null,"last4":"4242","network":"visa","three_d_secure":null,"wallet":null},"type":"card"},"receipt_email":null,"receipt_number":null,"receipt_url":"https:\\/\\/pay.stripe.com\\/receipts\\/acct_1FdwdYCjVbAYf7EU\\/ch_1GXqXKCjVbAYf7EUSdbC68SS\\/rcpt_H62cqKs5Oztz9U2x0omJlfC8W8WbLNX","refunded":false,"refunds":{"object":"list","data":[],"has_more":false,"total_count":0,"url":"\\/v1\\/charges\\/ch_1GXqXKCjVbAYf7EUSdbC68SS\\/refunds"},"review":null,"shipping":null,"source":{"id":"card_1GVzhyCjVbAYf7EUSRYISota","object":"card","address_city":null,"address_country":null,"address_line1":null,"address_line1_check":null,"address_line2":null,"address_state":null,"address_zip":"42424","address_zip_check":"pass","brand":"Visa","country":"US","customer":"cus_H47xw3fkcWFFT2","cvc_check":null,"dynamic_last4":null,"exp_month":4,"exp_year":2024,"fingerprint":"goJYtV2C2AwWZw9b","funding":"credit","last4":"4242","metadata":[],"name":null,"tokenization_method":null},"source_transfer":null,"statement_descriptor":null,"statement_descriptor_suffix":null,"status":"succeeded","transfer_data":null,"transfer_group":null}}}',
                'gateway_type' => 'stripe',
                'created_at' => '2020-04-14 15:18:53',
                'updated_at' => '2020-04-14 15:18:53',
            ),
        ));
        
        
    }
}