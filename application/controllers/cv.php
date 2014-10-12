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
class Cv extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['page_title'] = 'My CV';
        $page_id = 'my_cv';

        $this->data['data'] = StaticPagesTable::getOne($page_id);
        
        $this->template->write_view('content', 'frontend/my_cv', $this->data);
        $this->template->render();
    }

}
