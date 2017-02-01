<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: PeiLei
 * Date: 01/02/2017
 * Time: 12:30 PM
 */
class Bingo extends Application
{
    function __construct()
    {
        parent::__construct();
    }

    /**
     * This is the index path choosing the fifth quote
     */
    function index() {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        $record = $this->quotes->get(5);

        $this->data = array_merge($this->data, $record);

        $this->render();

    }

}