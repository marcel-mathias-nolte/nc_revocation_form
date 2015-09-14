<?php 

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2015 Leo Feyer
 * 
 * @package   NC Revocation Form
 * @author    Marcel Mathias Nolte
 * @copyright Marcel Mathias Nolte 2015
 * @website	  https://www.noltecomputer.com
 * @license   <marcel.nolte@noltecomputer.de> wrote this file. As long as you retain this notice you
 *            can do whatever you want with this stuff. If we meet some day, and you think this stuff 
 *            is worth it, you can buy me a beer in return. Meanwhile you can provide a link to my
 *            homepage, if you want, or send me a postcard. Be creative! Marcel Mathias Nolte
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_template']                      = array('Formulartemplate', 'Verwendetes Formulartemplate auswählen.');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_use_feuser']                    = array('Daten des angemeldeten Frontend-Benutzers übernehmen', 'Die Daten des derzeit im Frontend angemeldeten Benutzers übernehmen, um die Felder vor-auszufüllen.');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_admin']                    = array('Den Website-Administrator per E-Mail benachrichtigen', 'Ob der Website-Administrator per E-Mail benachrichtigt werden soll');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_admin_original_sender']    = array('Die übermittelten Daten als Absender benutzen', 'Ob der übermittelte Name und die übermittelte E-Mail-Adresse als Absender der E-Mail genutzt werden sollen.');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_admin_address']            = array('E-Mail-Empfänger', 'Kommagetrennte Liste der E-Mail-Empfänger.');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_admin_subject']            = array('Email subject', 'The email subject. Placeholders are replaced (see default subject)');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_admin_subject']['default'] = "Ein neuer Widerruf wurde über das Formular auf ###domain### übermittelt.";
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_admin_text']               = array('E-Mail-Text', 'Der Inhalt der E-Mail. Platzhalter werden ersetzt (siehe Standard-Text)');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_admin_text']['default']    = "\n\nEin neuer Widerruf wurde über das Formular auf ###domain### übermittelt:\n\nWaren: ###goods###\n\nKaufdatum: ###orderDate###\n\nLieferdatum: ###shippingDate###\n\nE-Mail-Adresse: ###email###\n\nAnrede: ###gender###\n\nVorname: ###firstname###\n\nNachname: ###lastname###\n\nStraße: ###street###\n\nPLZ: ###postal###\n\nOrt: ###city###\n\nTelefonnummer: ###phone###\n\nZeitpunkt: ###date### (von IP ###ip###)\n\n";
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_user']                     = array('Den Website-Nutzer per E-Mail benachrichtigen', 'Ob der Website-Nutzer per E-Mail benachrichtigt werden soll');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_user_original_sender']     = array('Die übermittelten Daten als Absender benutzen', 'Ob der übermittelte Name und die übermittelte E-Mail-Adresse als Absender der E-Mail genutzt werden sollen.');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_user_subject']             = array('Email subject', 'The email subject. Placeholders are replaced (see default subject)');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_user_subject']['default']  = "Ihr Widerruf wurde auf ###domain### ist bei uns eingegangen.";
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_user_text']                = array('E-Mail-Text', 'Der Inhalt der E-Mail. Platzhalter werden ersetzt (siehe Standard-Text)');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_user_text']['default']     = "\n\nSehr geehrte/r ###gender### ###lastname###,\n\nwir haben von Ihnen einen Widerruf erhalten. Die weitere Verfahrensweise entnehmen Sie bitte der Widerrufsbelehrung auf ###domain###. Wir werden uns getrennt zu dieser Eingangsbestätigung bei Ihnen melden.\n\nFolgende Daten wurden an uns übermittelt:\n\nWaren: ###goods###\n\nKaufdatum: ###orderDate###\n\nLieferdatum: ###shippingDate###\n\nE-Mail-Adresse: ###email###\n\nAnrede: ###gender###\n\nVorname: ###firstname###\n\nNachname: ###lastname###\n\nStraße: ###street###\n\nPLZ: ###postal###\n\nOrt: ###city###\n\nTelefonnummer: ###phone###\n\nZeitpunkt: ###date### (von IP ###ip###)\n\n";