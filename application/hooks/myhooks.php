<?php 
/**
*  
*/
class MyHooks 
{
	protected $_ci; 
	function __construct()
	{
		$this->_ci = get_instance();

	}
	function set_lang()
	{
		$hL = $this->_ci->session->userdata('user_lang');
		$selected_lang = ($hL != null) ? $this->_ci->session('user_lang') : 'english';
		$this->_ci->lang->load($selected_lang.'_lang', $selected_lang);
	}
}
?>