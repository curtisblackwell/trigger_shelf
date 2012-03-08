<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2003 - 2011, EllisLab, Inc.
 * @license		http://expressionengine.com/user_guide/license.html
 * @link		http://expressionengine.com
 * @since		Version 2.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Trigger Shelf Accessory
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Accessory
 * @author		Curtis Blackwell
 * @link		http://curtisblackwell.com
 */

require_once(PATH_THIRD . 'trigger_shelf/config.php');

class Trigger_shelf_acc {

	public $name			= TRIGGER_SHELF_NAME;
	public $id				= 'trigger_shelf';
	public $version			= TRIGGER_SHELF_V;
	public $description		= 'Trigger Shelf makes Parse19\'s Trigger accessible via a keyboard shortcut.';
	public $sections		= array();

	/**
     * Constructor
     */
    function __construct()
    {
        $this->EE =& get_instance();
    }

	/**
	 * Set Sections
	 */
	public function set_sections()
	{
		$EE =& get_instance();


		$this->EE->cp->load_package_js('jquery.hotkeys.min');
		$this->EE->cp->load_package_js('trigger_shelf.min');
		$this->sections['Trigger Shelf'] = $EE->load->view('reference', '', TRUE);

	}

	// ----------------------------------------------------------------

}

/* End of file acc.trigger_shelf.php */
/* Location: /system/expressionengine/third_party/trigger_shelf/acc.trigger_shelf.php */