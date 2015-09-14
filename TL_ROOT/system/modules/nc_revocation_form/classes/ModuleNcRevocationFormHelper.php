<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
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

namespace NC;


/**
 * Helper class for hook callbacks.
 *
 * @package   NC Contact Form
 * @author    Marcel Mathias Nolte
 * @copyright Marcel Mathias Nolte 2015
 */
class ModuleNcRevocationFormHelper extends \Backend
{
	
	protected static $objInstance = false;
	
	
	/**
	 * Get a singleton instance
	 * @return NC\ModuleNcRevocationFormHelper
	 */
	public static function getInstance()
	{
		if (self::$objInstance === false) {
			self::$objInstance = new ModuleNcRevocationFormHelper();
		}
		return self::$objInstance;
	}
	
	
	/**
	 * Get the amount of unread revocations
	 * @return string
	 */
	public function getUnreadCount()
	{
		return $this->Database->prepare("SELECT COUNT(*) as count FROM tl_nc_revocation_form WHERE messageRead=''")->execute()->next()->count;
	}
	
	
	/**
	 * Import the back end user object
	 */
	public function __construct()
	{
		parent::__construct();
		$this->import('BackendUser', 'User');
	}
	

	/**
	 * Get the label for the notification center
	 * @param int
	 * @return string
	 */
	public function getNotificationLabel($intId)
	{
		$objResult = $this->Database->prepare("SELECT * FROM tl_nc_revocation_form WHERE id=?")->execute($intId);
		if ($objResult->next()) {
			$token = array();
			foreach ($objResult->row() as $key => $value) {
				$token['###' . $key . '###'] = $value;
			}
			return strtr($GLOBALS['TL_LANG']['MSC']['NOTIFICATION']['ncRevocationForm'], $token);
		}
		return '--- item not found ---';
	}


	/**
	 * Mark a message read or unread
	 *
	 * @param integer       $intId
	 * @param boolean       $blnRead
	 * @param DataContainer $dc
	 */
	public function toggleRead($intId, $blnRead, DataContainer $dc=null)
	{
		/*if (!$this->User->hasAccess('tl_nc_revocation_form::messageRead', 'alexf'))
		{
			$this->log('Not enough permissions to mark message ID "'.$intId.'" read/unread', __METHOD__, TL_ERROR);
			$this->redirect('contao/main.php?act=error');
		}*/ // doesn't work !?
		if (is_array($GLOBALS['TL_DCA']['tl_nc_revocation_form']['fields']['messageRead']['save_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_nc_revocation_form']['fields']['messageRead']['save_callback'] as $callback)
			{
				if (is_array($callback))
				{
					$this->import($callback[0]);
					$blnRead = $this->$callback[0]->$callback[1]($blnRead, ($dc ?: $this));
				}
				elseif (is_callable($callback))
				{
					$blnRead = $callback($blnRead, ($dc ?: $this));
				}
			}
		}
		$this->Database->prepare("UPDATE tl_nc_revocation_form SET messageRead='" . ($blnRead ? '1' : '') . "' WHERE id=?")->execute($intId);
		if ($this->Database->tableExists('tl_nc_notifications')) {
			if ($blnRead) {
				$this->Database->prepare("DELETE FROM tl_nc_notifications WHERE source=? AND sid=?")->execute('tl_nc_revocation_form', $intId);
			} else {
				$tstamp = $this->Database->prepare("SELECT tstamp FROM tl_nc_revocation_form WHERE id=?")->execute($intId)->next()->tstamp;
				$this->Database->prepare("INSERT INTO tl_nc_notifications (tstamp, sid, source, href) VALUES (?, ?, ?, ?)")->execute($tstamp, $intId, 'tl_nc_revocation_form', 'main.php?do=ncRevocationForm&act=show&id=' . $intId);
			}
		}
	}
}