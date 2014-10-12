<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cv
 *
 * @author Asamir
 */
class Contact_us extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['page_title'] = 'Contact Us';
        $page_id = 'contact_us';

        $this->data['data'] = StaticPagesTable::getOne($page_id);
        
        $this->template->write_view('content', 'frontend/contact_us', $this->data);
        $this->template->render();
    }

}
