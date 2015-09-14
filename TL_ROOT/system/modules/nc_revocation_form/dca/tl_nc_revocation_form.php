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
 * Table tl_nc_revocation_form
 */
$GLOBALS['TL_DCA']['tl_nc_revocation_form'] = array
(

	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
		'closed'                      => true,
		'notEditable'                 => true,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		)
	),

	// List
	'list' => array
	(
        'sorting' => array
        (
            'mode'                    => 2,
			'fields'                  => array('tstamp DESC'),
			'panelLayout'             => 'filter;search,limit'
        ),
        'label' => array
        (
			'fields'                  => array('id'),
            'label_callback'          => array('tl_nc_revocation_form', 'getLabel')
        ),
        'global_operations'           => array(),
        'operations' => array
        (
			'markMessageRead' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_nc_revocation_form']['markMessageRead'],
				'icon'                => 'system/modules/nc_revocation_form/assets/unread.png',
				'attributes'          => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleNcRevocationFormRead(this,%s)"',
				'button_callback'     => array('tl_nc_revocation_form', 'getReadIcon')
			),
            'delete' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_nc_revocation_form']['delete'],
                'href'                => 'act=delete',
                'icon'                => 'delete.gif',
                'attributes'          => 'onclick="if (!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\')) return false; Backend.getScrollOffset();"'
            ),
            'show' => array
            (
                'label'               => &$GLOBALS['TL_LANG']['tl_nc_revocation_form']['show'],
                'href'                => 'act=show',
                'icon'                => 'show.gif'
            )
        )
	),

	// Palettes
	'palettes' => array
	(
		'default'                     => '{personal_legend},goods,orderDate,shippingDate,email,gender,firstname,lastname,street,postal,city,phone;{data_legend:hide},date,ip'
	),


	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'",
			'filter'                  => true,
			'sorting'                 => true,
			'flag'                    => 6
		),
		'goods' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_nc_revocation_form']['goods'],
			'exclude'                 => true,
			'inputType'               => 'textarea',
			'eval'                    => array('style'=>'height:60px;', 'feEditable'=>true, 'feViewable'=>true, 'tl_class'=>'clr'),
			'sql'                     => "mediumtext NULL"
		),
		'orderDate' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_nc_revocation_form']['orderDate'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'rgxp'=>'date', 'datepicker'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(11) NOT NULL default ''"
		),
		'shippingDate' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_nc_revocation_form']['shippingDate'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'rgxp'=>'date', 'datepicker'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50 wizard'),
			'sql'                     => "varchar(11) NOT NULL default ''"
		),
		'email' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_nc_revocation_form']['email'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'rgxp'=>'email', 'decodeEntities'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'gender' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_nc_revocation_form']['gender'],
			'exclude'                 => true,
			'inputType'               => 'select',
			'options'                 => array('male', 'female'),
			'reference'               => &$GLOBALS['TL_LANG']['tl_nc_revocation_form']['gender'],
			'eval'                    => array('includeBlankOption'=>true, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'firstname' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_nc_revocation_form']['firstname'],
			'exclude'                 => true,
			'search'                  => true,
			'flag'                    => 1,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'lastname' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_nc_revocation_form']['lastname'],
			'exclude'                 => true,
			'search'                  => true,
			'flag'                    => 1,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'street' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_nc_revocation_form']['street'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'address', 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'postal' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_nc_revocation_form']['postal'],
			'exclude'                 => true,
			'filter'                  => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>32, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'address', 'tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'city' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_nc_revocation_form']['city'],
			'exclude'                 => true,
			'filter'                  => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'address', 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'phone' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_nc_revocation_form']['phone'],
			'exclude'                 => true,
			'search'                  => true,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>false, 'maxlength'=>64, 'rgxp'=>'phone', 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'contact', 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'date' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_nc_revocation_form']['date'],
			'exclude'                 => true,
			'search'                  => true,
			'flag'                    => 1,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>17, 'tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'ip' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_nc_revocation_form']['ip'],
			'exclude'                 => true,
			'search'                  => true,
			'flag'                    => 1,
			'inputType'               => 'text',
			'eval'                    => array('mandatory'=>true, 'maxlength'=>15, 'tl_class'=>'w50'),
			'sql'                     => "varchar(32) NOT NULL default ''"
		),
		'messageRead' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_nc_revocation_form']['messageRead'],
			'exclude'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('tl_class'=>'clr'),
			'sql'                     => "char(1) NOT NULL default ''"
		)
	)
);


/**
 * Class tl_nc_revocation_form
 *
 * Provide miscellaneous methods that are used by the data configuration array.
 * @package   NC Revocation Form
 * @author    Marcel Mathias Nolte
 * @copyright Marcel Mathias Nolte 2015
 */
class tl_nc_revocation_form extends Backend
{

	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}
	

	/**
	 * Return the item label
	 * @return array
	 */
	public function getLabel($arrRow)
	{
		$token = array(
			'###fmt###' => !$arrRow['messageRead'] ? 'strong' : 'i'
		);
		foreach ($arrRow as $key => $value) {
			$token['###' . $key . '###'] = $value;
		}
		return strtr($GLOBALS['TL_LANG']['tl_nc_revocation_form']['label'], $token);
	}


	/**
	 * Return the "toggle read" button
	 *
	 * @param array  $row
	 * @param string $href
	 * @param string $label
	 * @param string $title
	 * @param string $icon
	 * @param string $attributes
	 *
	 * @return string
	 */
	public function getReadIcon($row, $href, $label, $title, $icon, $attributes)
	{
		if (!$this->User->hasAccess('tl_nc_revocation_form::messageRead', 'alexf'))
		{
			return '';
		}
		$href .= '&amp;item='.$row['id'].'&amp;read_state='.$row['messageRead'];
		if ($row['messageRead'])
		{
			$icon = 'system/modules/nc_revocation_form/assets/read.png';
		}
		return '<a href="'.$this->addToUrl($href).'" title="'.specialchars($title).'"'.$attributes.'>'.Image::getHtml($icon, $label).'</a> ';
	}
}