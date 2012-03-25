<?php


	function worldview_init() 
	{
		global $CONFIG;
		
                $item = new ElggMenuItem('worldview', elgg_echo('On the Web'), 'worldview/ontheweb');
                elgg_register_menu_item('site', $item);                
                
                elgg_extend_view('css/elgg', 'worldview/css');
		elgg_extend_view('js/elgg', 'worldview/instantsearch');
                elgg_register_page_handler('worldview','worldview_page_handler');	
	}


	function worldview_page_handler($page) 
	{

		global $CONFIG;
		if (!isset($page[0])) {
		      forward();
		}

		$base_dir = elgg_get_plugins_path() . 'worldview/pages/worldview';

		switch ($page[0]) {

			case 'ontheweb':
				include "$base_dir/ontheweb.php";
				break;
			default:
				include "$base_dir/ontheweb.php";
				break;
		}

		
	}
	elgg_register_event_handler('init','system','worldview_init');
?>