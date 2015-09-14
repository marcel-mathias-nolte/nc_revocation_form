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
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['goods']            = array('Waren', 'Bitte geben Sie die Waren/Leistungen ein, um die es sich handelt.');
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['orderDate']        = array('Kaufdatum', 'Bitte geben Sie das Kaufdatum ein.');
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['shippingDate']     = array('Lieferdatum', 'Bitte geben Sie das Lieferdatum ein.');
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['email']            = array('E-Mail-Adresse', 'Bitte geben Sie eine gültige E-Mail-Adresse ein.');
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['gender']           = array('Anrede', 'Bitte wählen Sie eine Anrede aus.');
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['gender']['male']   = 'Herr';
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['gender']['female'] = 'Frau';
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['firstname']        = array('Vorname', 'Bitte geben Sie den Vornamen ein.');
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['lastname']         = array('Nachname', 'Bitte geben Sie den Nachnamen ein.');
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['street']           = array('Straße', 'Bitte geben Sie den Straßennamen und die Hausnummer ein.');
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['postal']           = array('Postleitzahl', 'Bitte geben Sie die Postleitzahl ein.');
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['city']             = array('Ort', 'Bitte geben Sie den Namen des Ortes ein.');
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['phone']            = array('Telefonnummer', 'Bitte geben Sie die Telefonnummer ein.');
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['date']             = array('Datum', '');
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['ip']               = array('IP-Adresse', '');
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['messageRead']      = array('Nachricht gelesen', 'Ob die Nachricht gelesen wurde.');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['personal_legend']  = 'Persönliche Daten';
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['data_legend']      = 'Metadaten';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['markMessageRead']  = array('Widerruf als (un-)gelesen markieren', 'Widerruf ID %s als (un-)gelesen markieren');
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['show']             = array('Antrag anzeigen', 'Antrag ID %s anzeigen');
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['delete']           = array('Antrag löschen', 'Antrag ID %s löschen');


/**
 * Frontend
 */
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['submit']           = 'Widerruf übermitteln';


/**
 * Label
 */
$GLOBALS['TL_LANG']['tl_nc_revocation_form']['label']            = '<###fmt###>###lastname###, ###firstname### &lt;###email###&gt; am ###date### <span style="color:#b3b3b3; padding-left:3px;">[###id###]</span></###fmt###>';