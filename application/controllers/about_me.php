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
class About_me extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['page_title'] = 'About me';
        $page_id = 'about-me';

        $this->data['data'] = StaticPagesTable::getOne($page_id);
        
        $this->template->write_view('content', 'frontend/about_me', $this->data);
        $this->template->render();
    }

}
