<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of portfolio
 *
 * @author Asamir
 */
class Portfolio extends CI_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index(){
        if($this->input->post('submit')){
            
            $category_id = $this->input->post('category_id');
            $role_id = $this->input->post('role_id');
            $from = $this->input->post('from');
            $to = $this->input->post('to');
            
            $this->data['filters'] = $_POST;
            
            $this->data['porfolios'] = PortfoliosTable::getPortfoliosByFilters($category_id, $role_id, $from, $to);                        
            
        }else{
            $this->data['porfolios'] = PortfoliosTable::getAll();
        }
        
        $this->data['page_title'] = 'Portfolio';        
        $this->data['submit_url'] = 'portfolio/index';
        $this->data['categories'] = PortfolioCategoriesTable::getAllCategories();
        $this->data['roles'] = PortfolioRolesTable::getAllRoles();
        
        $this->template->write_view('content', 'frontend/portfolio', $this->data);
        $this->template->render();
    }
}
