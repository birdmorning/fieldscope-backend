<?php

use Illuminate\Database\Seeder;

class MailTemplateTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mail_template')->delete();
        
        \DB::table('mail_template')->insert(array (
            0 => 
            array (
                'id' => 1,
                'identifier' => 'user_forgot_password',
                'subject' => 'Forgot Password Recovery Email',
                'type' => 'admin',
                'hint' => 'User forgot password email',
                'body' => '<p>Hello [USER_NAME],</p><br><p>A request has been made to recover password for your account. </p><p>Please follow below link to confirm your email and generate new password for your account :</p><br><a href="[CONFIRMATION_LINK]">[CONFIRMATION_LINK]</a><br><p>In case you have not requested new password for your account, please ignore this email.</p><br><p>Thank you,</p><p>[APP_NAME]</p>',
                'wildcards' => '[USER_NAME],[CONFIRMATION_LINK],[USER_LINK],[APP_NAME]',
                'from' => '',
                'created_at' => NULL,
                'updated_at' => '2018-12-04 13:23:41',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'identifier' => 'admin_contact_us',
                'subject' => 'Contact us form Query',
                'type' => 'admin',
                'hint' => 'Contact us form Query',
                'body' => '<p>Hello,</p><p>A query has been made from contact us form by [USER_NAME] . </p><p>Query detail:</p><br>Name: [USER_NAME]&nbsp;<br> 
Email: [EMAIL]&nbsp;<br> 
Mobile No: [MOBILE_NO]&nbsp;<br> 
Subject: [SUBJECT]&nbsp;<br> 
<p>Message: [MESSAGE] </p><p><br></p><p>Thank you,</p><p>[APP_NAME]</p>',
                'wildcards' => '[USER_NAME],[EMAIL],[MOBILE_NO],[SUBJECT],[MESSAGE],[APP_NAME]',
                'from' => '',
                'created_at' => NULL,
                'updated_at' => '2018-12-04 13:23:06',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'identifier' => 'foreclosure_letter_1',
                'subject' => 'Foreclosure Letter 1',
                'type' => 'user_marketing',
                'hint' => 'Foreclosure Letter 1',
                'body' => '<p>Hello [USER_NAME],</p><br><p>A request has been made to recover password for your account. </p><p>Please follow below link to confirm your email and generate new password for your account :</p><br><a href="\\&quot;[CONFIRMATION_LINK]\\&quot;">[CONFIRMATION_LINK]</a><br><p>In case you have not requested new password for your account, please ignore this email.</p><br><p>You can always change your password by login here : <a href="\\&quot;[USER_LINK]\\&quot;">[USER_LINK]</a></p><br><p>Thank you,</p><p>[APP_NAME]</p>',
                'wildcards' => '[USER_NAME],[CONFIRMATION_LINK],[USER_LINK],[APP_NAME]',
                'from' => '',
                'created_at' => '2019-01-21 18:23:06',
                'updated_at' => '2019-01-21 18:23:06',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'identifier' => 'foreclosure_letter_2',
                'subject' => 'Foreclosure Letter 2',
                'type' => 'user_marketing',
                'hint' => 'Foreclosure Letter 2',
                'body' => '<p>Hello [USER_NAME],</p><br><p>A request has been made to recover password for your account. </p><p>Please follow below link to confirm your email and generate new password for your account :</p><br><a href="\\&quot;[CONFIRMATION_LINK]\\&quot;">[CONFIRMATION_LINK]</a><br><p>In case you have not requested new password for your account, please ignore this email.</p><br><p>You can always change your password by login here : <a href="\\&quot;[USER_LINK]\\&quot;">[USER_LINK]</a></p><br><p>Thank you,</p><p>[APP_NAME]</p>',
                'wildcards' => '[USER_NAME],[CONFIRMATION_LINK],[USER_LINK],[APP_NAME]',
                'from' => '',
                'created_at' => '2019-01-21 18:23:06',
                'updated_at' => '2019-01-21 18:23:06',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'identifier' => 'foreclosure_card',
                'subject' => 'Foreclosure Card',
                'type' => 'user_marketing',
                'hint' => 'Foreclosure Card',
                'body' => '<p>Hello [USER_NAME],</p><br><p>A request has been made to recover password for your account. </p><p>Please follow below link to confirm your email and generate new password for your account :</p><br><a href="\\&quot;[CONFIRMATION_LINK]\\&quot;">[CONFIRMATION_LINK]</a><br><p>In case you have not requested new password for your account, please ignore this email.</p><br><p>You can always change your password by login here : <a href="\\&quot;[USER_LINK]\\&quot;">[USER_LINK]</a></p><br><p>Thank you,</p><p>[APP_NAME]</p>',
                'wildcards' => '[USER_NAME],[CONFIRMATION_LINK],[USER_LINK],[APP_NAME]',
                'from' => '',
                'created_at' => '2019-01-21 18:23:06',
                'updated_at' => '2019-01-21 18:23:06',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'identifier' => 'probate_letter_1',
                'subject' => 'Probate Letter 1',
                'type' => 'user_marketing',
                'hint' => 'Probate Letter 1',
                'body' => '<p>Hello [USER_NAME],</p><br><p>A request has been made to recover password for your account. </p><p>Please follow below link to confirm your email and generate new password for your account :</p><br><a href="\\&quot;[CONFIRMATION_LINK]\\&quot;">[CONFIRMATION_LINK]</a><br><p>In case you have not requested new password for your account, please ignore this email.</p><br><p>You can always change your password by login here : <a href="\\&quot;[USER_LINK]\\&quot;">[USER_LINK]</a></p><br><p>Thank you,</p><p>[APP_NAME]</p>',
                'wildcards' => '[USER_NAME],[CONFIRMATION_LINK],[USER_LINK],[APP_NAME]',
                'from' => '',
                'created_at' => '2019-01-21 18:23:06',
                'updated_at' => '2019-01-21 18:23:06',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'identifier' => 'probate_letter_2',
                'subject' => 'Probate Letter 2',
                'type' => 'user_marketing',
                'hint' => 'Probate Letter 2',
                'body' => '<p>Hello [USER_NAME],</p><br><p>A request has been made to recover password for your account. </p><p>Please follow below link to confirm your email and generate new password for your account :</p><br><a href="\\&quot;[CONFIRMATION_LINK]\\&quot;">[CONFIRMATION_LINK]</a><br><p>In case you have not requested new password for your account, please ignore this email.</p><br><p>You can always change your password by login here : <a href="\\&quot;[USER_LINK]\\&quot;">[USER_LINK]</a></p><br><p>Thank you,</p><p>[APP_NAME]</p>',
                'wildcards' => '[USER_NAME],[CONFIRMATION_LINK],[USER_LINK],[APP_NAME]',
                'from' => '',
                'created_at' => '2019-01-21 18:23:06',
                'updated_at' => '2019-01-21 18:23:06',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'identifier' => 'probate_card',
                'subject' => 'Probate Card',
                'type' => 'user_marketing',
                'hint' => 'Probate Card',
                'body' => '<p>Hello [USER_NAME],</p><br><p>A request has been made to recover password for your account. </p><p>Please follow below link to confirm your email and generate new password for your account :</p><br><a href="\\&quot;[CONFIRMATION_LINK]\\&quot;">[CONFIRMATION_LINK]</a><br><p>In case you have not requested new password for your account, please ignore this email.</p><br><p>You can always change your password by login here : <a href="\\&quot;[USER_LINK]\\&quot;">[USER_LINK]</a></p><br><p>Thank you,</p><p>[APP_NAME]</p>',
                'wildcards' => '[USER_NAME],[CONFIRMATION_LINK],[USER_LINK],[APP_NAME]',
                'from' => '',
                'created_at' => '2019-01-21 18:23:06',
                'updated_at' => '2019-01-21 18:23:06',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'identifier' => 'send_monthly',
                'subject' => 'Send Monthly',
                'type' => 'user_marketing',
                'hint' => 'Send Monthly',
                'body' => '<p>Hello [USER_NAME],</p><br><p>A request has been made to recover password for your account. </p><p>Please follow below link to confirm your email and generate new password for your account :</p><br><a href="\\&quot;[CONFIRMATION_LINK]\\&quot;">[CONFIRMATION_LINK]</a><br><p>In case you have not requested new password for your account, please ignore this email.</p><br><p>You can always change your password by login here : <a href="\\&quot;[USER_LINK]\\&quot;">[USER_LINK]</a></p><br><p>Thank you,</p><p>[APP_NAME]</p>',
                'wildcards' => '[USER_NAME],[CONFIRMATION_LINK],[USER_LINK],[APP_NAME]',
                'from' => '',
                'created_at' => '2019-01-21 18:23:06',
                'updated_at' => '2019-01-21 18:23:06',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'identifier' => 'user_marketing',
                'subject' => 'Send Monthly',
                'type' => 'user_marketing',
                'hint' => 'Send Monthly',
                'body' => '<p>cajlshc vdbcnxbkbckd kdbkacbnadkhsac nvbsdnbncbsn                </p><p><br></p>',
                'wildcards' => '[USER_NAME],[CONFIRMATION_LINK],[USER_LINK],[APP_NAME]',
                'from' => '',
                'created_at' => '2019-02-26 20:30:27',
                'updated_at' => '2019-02-26 20:32:08',
                'deleted_at' => '2019-02-26 20:32:16',
            ),
        ));
        
        
    }
}