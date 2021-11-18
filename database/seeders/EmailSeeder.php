<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //création du email type activation_account
        DB::table('emailtype')->insert([
            "id" => 1,
            "name" => "activation_account"
        ]);

        //création du email type reset_email
        DB::table('emailtype')->insert([
            "id" => 2,
            "name" => "reset_email"
        ]);

        //création du email type reset_password
        DB::table('emailtype')->insert([
            "id" => 3,
            "name" => "reset_password",
        ]);

        //création du email template activation_account fr
        DB::table("emailtemplate")->insert([
            "id" => 1,
            "email_type_id" => 1,
            "language" => "fr",
            "object" => "Activation de votre compte",
            "description" => "<p><span style='font-size: 13.5pt;'>Votre compte pour le centre  de beauté  de l'entreprise SPECTRA BEAUTE a &eacute;t&eacute; enregistr&eacute; avec succ&egrave;s, <br />Pour pouvoir vous connecter veuillez activer votre compte en cliquant sur le lien ci-dessous&nbsp;</span></p>",
            "link_name" => "<h3><span style='color: #2dc26b;'>Cliquez pour activer votre compte chez SPECTRA BEAUTE</span></h3>",
            "signature" => "<p><strong><span style=\"font-size: 13.5pt; font-family: 'Nunito',serif; mso-fareast-font-family: 'Times New Roman'; mso-bidi-font-family: 'Segoe UI'; mso-ansi-language: FR; mso-fareast-language: FR; mso-bidi-language: AR-SA;\">Cordialement, <br />L'&eacute;quipe Recrutement de SPECTRA BEAUTE&nbsp;</span></strong></p>",
            "created_at" => "2020-12-16 09:15:39",
            "updated_at" => "2020-12-16 17:29:18",
        ]);


         //création du email template reset_email fr
         DB::table("emailtemplate")->insert([
            "id" => 2,
            "email_type_id" => 2,
            "language" => "fr",
            "object" => "Modification de votre compte",
            "description" => '<p><span style="font-size: 13.5pt; font-family: \'Nunito\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Segoe UI\'; mso-ansi-language: FR; mso-fareast-language: FR; mso-bidi-language: AR-SA;">Votre adresse email pour le compte du centre de beauté  de l\'entreprise <strong>SPECTRA BEAUTE </strong>est sur le point d\'&ecirc;tre modifi&eacute;e.<br />Votre nouvelle adresse sera&nbsp;</span></p>',
            "link_name" => "<h3><span style=\"color: #169179;\">Confirmer votre demande en cliquant sur le pr&eacute;sent lien</span></h3>",
            "signature" => '<p><strong><span style="font-size: 13.5pt; font-family: \'Nunito\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Segoe UI\'; mso-ansi-language: FR; mso-fareast-language: FR; mso-bidi-language: AR-SA;">Cordialement, <br />L\' &eacute;quipe Recrutement de SPECTRA BEAUTE&nbsp;</span></strong></p>',
            "created_at" => "2020-12-16 12:43:34",
            "updated_at" => "2020-12-18 09:18:22",
        ]);

        //création du email template reset_password fr
        DB::table("emailtemplate")->insert([
            "id" => 3,
            "email_type_id" => 3,
            "language" => "fr",
            "object" => "Réinitialisation de votre compte",
            "description" => '<p>Pour r&eacute;initialiser votre compte, cliquez sur le lien suivant&nbsp;</p>',
            "link_name" => "<h3><span style=\"color: #2dc26b;\">Cliquez pour r&eacute;initialiser votre compte</span></h3>",
            "signature" => '<p><strong><span style="font-size: 13.5pt; font-family: \'Nunito\',serif; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Segoe UI\'; mso-ansi-language: FR; mso-fareast-language: FR; mso-bidi-language: AR-SA;">Cordialement,&nbsp;<br />L\' &eacute;quipe Recrutement de SPECTRA BEAUTE&nbsp;</span></strong></p>',
            "created_at" => "2020-12-16 16:21:45",
            "updated_at" => "2020-12-16 17:29:59",
        ]);

        //création du email template reset_password en
        DB::table("emailtemplate")->insert([
            "id" => 4,
            "email_type_id" => 3,
            "language" => "en",
            "object" => "Reset Your account password",
            "description" => '<p>To reset your account, click on the following link</p>',
            "link_name" => "<h3><span style=\"color: #169179;\"><strong>Click to reset your account</strong></span></h3>",
            "signature" => '<h4><strong>Regards,</strong></h4>
            <h4><strong>The SPECTRA BEAUTE recruitment team</strong></h4>',
            "created_at" => "2020-12-16 16:42:49",
            "updated_at" => "2020-12-16 17:29:01",
        ]);
    }
}
