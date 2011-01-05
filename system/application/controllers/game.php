<?php

class Game extends Controller {
  function __construct() {
    parent::Controller();
    $this->load->helper('url');
  }
	function Game()
	{
		parent::Controller();	
	}
	
	function index()
	{
	  $this->loadLayout('game.html');
	}
	
	function account() {
	  $this->loadLayout('account.html');
	}

	function home() {
	  $this->loadLayout('home.html');
	}
	
	function login() {
	  $this->loadLayout('login.html');
	}	

	function loadLayout($viewName) {
	  $this->load->view('header.html');
		$this->load->view($viewName);
		$this->load->view('footer.html');
	}
}
