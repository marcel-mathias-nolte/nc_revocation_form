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
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_template']                      = array('Form template', 'Choose the form template to use.');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_use_feuser']                    = array('Use frontend user data', 'Use the data of the currently signed in frontend user to pre-fill the fields.');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_admin']                    = array('Send an email to the website administrator', 'Whether an email should be send to the website administrator or not.');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_admin_original_sender']    = array('Use the submitted data as email sender', 'Wheter to use the submitted name and email address as email sender.');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_admin_address']            = array('Email recipients', 'Comma seperated list of email recipients.');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_admin_subject']            = array('Email subject', 'The email subject. Placeholders are replaced (see default subject)');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_admin_subject']['default'] = "A new revovation was submitted via the form on ###domain###.";
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_admin_text']               = array('Email text', 'The email contents. Placeholders are replaced (see default text)');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_admin_text']['default']    = "\n\nA new revovation was send via the form on ###domain###:\n\nGoods: ###goods###\n\nOrder date: ###orderDate###\n\nDelivery date: ###shippingDate###\n\nEmail address: ###email###\n\nSalutaion: ###gender###\n\nFirst name: ###firstname###\n\nLast name: ###lastname###\n\nStreet: ###street###\n\nPostal code: ###postal###\n\nCity: ###city###\n\nPhone number: ###phone###\n\nTime: ###date### (via IP ###ip###)\n\n";
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_user']                     = array('Send an email to the website user', 'Whether an email should be send to the website user or not.');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_user_original_sender']     = array('Use the submitted data as email sender', 'Wheter to use the submitted name and email address as email sender.');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_user_subject']             = array('Email subject', 'The email subject. Placeholders are replaced (see default subject)');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_user_subject']['default']  = "We recieved your revovation request via the form on ###domain###.";
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_user_text']                = array('Email text', 'The email contents. Placeholders are replaced (see default text)');
$GLOBALS['TL_LANG']['tl_module']['nc_revocation_form_mail_user_text']['default']     = "\n\nHi ###firstname###,\n\nwe recieved your revocation. Please read the revocation policy on ###domain### as guide on how to proceed. We will contact you additionally about further processing.\n\nThe following data were submitted:\n\nGoods: ###goods###\n\nOrder date: ###orderDate###\n\nDelivery date: ###shippingDate###\n\nEmail address: ###email###\n\nSalutaion: ###gender###\n\nFirst name: ###firstname###\n\nLast name: ###lastname###\n\nStreet: ###street###\n\nPostal code: ###postal###\n\nCity: ###city###\n\nPhone number: ###phone###\n\nTime: ###date### (via IP ###ip###)\n\n";