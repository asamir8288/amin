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
class Portfolio extends My_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['portfolios'] = PortfoliosTable::getAll();
        $this->template->write_view('content', 'backend/portfolio/list_all_portfolios', $this->data);
        $this->template->render();
    }

    public function add_edit_portfolio($portfolio_id = '') {
        $this->data['categories'] = PortfolioCategoriesTable::getAllCategories();
        $this->data['roles'] = PortfolioRolesTable::getAllRoles();
        
        if ($portfolio_id) {
            $this->data['data'] = PortfoliosTable::getOne($portfolio_id);
            
            $this->data['page_title'] = 'Edit Portfolio';
            $this->data['submit_url'] = 'admin/portfolio/add_edit_portfolio/' . $portfolio_id;
            $this->data['btn_text'] = 'Update';
        } else {
            $this->data['page_title'] = 'Add Portfolio';
            $this->data['submit_url'] = 'admin/portfolio/add_edit_portfolio';
            $this->data['btn_text'] = 'Add';
        }

        if ($this->input->post('submit')) {
            $p = new Portfolios();
            
            if($portfolio_id){
                $_POST['portfolio_id'] = $portfolio_id;
                $errors = $p->updatePortfolio($_POST);
            }  else {
               $errors = $p->add_portfolio($_POST); 
            }            

            if ($errors['error_flag']) {
                $this->data['errors'] = $errors;
                $this->data['data'] = $_POST;
                $this->template->write_view('content', 'backend/portfolio/add_edit_portfolio', $this->data);
                $this->template->render();
            } else {

                $this->session->set_flashdata('message', array('type' => 'success',
                    'body' => ($portfolio_id) ? 'Your portfolio has been updated successfully.' : 'Your portfolio has been added successfully.')
                );
                redirect('admin/portfolio');
            }
        } else {

            $this->template->write_view('content', 'backend/portfolio/add_edit_portfolio', $this->data);
            $this->template->render();
        }
    }
    
    public function delete_portfolio($portfolio_id) {
        if($portfolio_id){
            $p = new Portfolios();
            $p->deletePortfolio($portfolio_id);
            
            redirect('admin/portfolio');
        }else{
            redirect('admin/portfolio');
        }
    }

}
