<?php
	defined('SYSPATH') or die('No direct script access.');

	class Controller_index extends Controller_DefaultTemplate{

		public function action_index(){
            $this->template->title = 'Livei.com';
            $this->template->meta_keywords = 'livei Toolbar';
            $this->template->meta_description = 'Livei Trial';
            $this->template->meta_copywrite = 'livei.com';
            $this->template->leftbamboo = View::factory('pages/toolbar');
            $this->template->styles = array('assets/css/main.css' => 'screen');
            //$this->template->scripts = array();

		}

	}
?>