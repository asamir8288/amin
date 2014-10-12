<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of gallery
 *
 * @author Asamir
 */
class Gallery extends CI_Controller {
    
    var $data = array();
    
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->data['page_title'] = 'Gallery';
        $this->template->add_js('layout/fancy/jquery.mousewheel-3.0.6.pack.js');
        $this->template->add_js('layout/fancy/jquery.fancybox.js?v=2.1.5');
        
        $this->template->add_css('layout/fancy/jquery.fancybox.css?v=2.1.5');
        
        $this->data['galleries'] = GalleriesTable::getAllGalleries();
        
        $this->template->write_view('content', 'frontend/gallery', $this->data);
        $this->template->render();
    }
}
