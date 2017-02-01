<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Last extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Returns the bottom line right most person't quote info
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		// get the last quote, to pass on to our view
		$record = $this->quotes->get(6);                
		
		$this->data = array_merge($this->data, $record);

		$this->render();
	}

}