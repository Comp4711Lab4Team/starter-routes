<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wise extends Application
{

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Returns the second row's right author's quote
	 */
	public function index()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		// get the last author's quote, to pass on to our view
		$record = $this->quotes->get(6);                
		
		$this->data = array_merge($this->data, $record);

		$this->render();
	}

    /**
	 * Returns the second row's right author's quote
	 */
        public function bingo()
	{
		// this is the view we want shown
		$this->data['pagebody'] = 'justone';

		// get the last author's quote, to pass on to our view
		$record = $this->quotes->get(6);                
		
		$this->data = array_merge($this->data, $record);

		$this->render();
	}
}