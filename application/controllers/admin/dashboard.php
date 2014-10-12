<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dashboard
 *
 * @author Asamir
 */
class Dashboard extends My_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->data['page_title'] = 'Dashboard';
        
        $this->template->write_view('content', 'backend/dashboard', $this->data);
        $this->template->render();
    }
}
