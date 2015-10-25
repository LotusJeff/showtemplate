<?php
/**
 *
 * @package Show Template Event Locations
 * @copyright (c) 2015 Jeff Cocking LotusJeff
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 *  https://github.com/LotusJeff/showtemplate
 *
 */

namespace lotusjeff\showtemplate\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Event listener
 */
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	/**
	 * Constructor
	 *
	 * @param \phpbb\config\config        $config             Config object
	 * @param \phpbb\template\template    $template           Template object
	 * @param \phpbb\user                 $user               User object
	 * @access public
	 */
	public function __construct(\phpbb\config\config $config, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->config = $config;
		$this->template = $template;
		$this->user = $user;
	}

	/**
	 * Assign functions defined in this class to event listeners in the core
	 *
	 * @return array
	 * @static
	 * @access public
	 */
	static public function getSubscribedEvents()
	{
		return array(
			'core.page_header'					=> 'lotusjeff_showtemplate_set_tpl_data',
		);
	}

	/**
	 * Set Fancybox template data
	 *
	 * @return null
	 * @access public
	 */
	public function lotusjeff_showtemplate_set_tpl_data()
	{
		$this->template->assign_vars(array(
			'S_LOTUSJEFF_SHOWTEMPLATE_NULL'	=> null,
		));
	}
}
