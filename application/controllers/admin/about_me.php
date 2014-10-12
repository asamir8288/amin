<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of about_me
 *
 * @author Asamir
 */
class About_me extends My_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $page_id = 'about-me';
        $this->data['submit_url'] = 'admin/about_me/index';

        $this->data['data'] = StaticPagesTable::getOne($page_id);

        if ($this->input->post('submit')) {
            $sp = new StaticPages();
            $errors = $sp->updatePage($page_id, $this->input->post('content'));

            if ($errors['error_flag']) {
                $this->data['errors'] = $errors;
                $this->data['data'] = $_POST;
                $this->template->write_view('content', 'backend/about_me', $this->data);
                $this->template->render();
            } else {
                $this->session->set_flashdata('message', array('type' => 'success',
                    'body' => 'About me has been updated successfully.')
                );
                redirect('admin/about_me');
            }
        } else {

            $this->template->write_view('content', 'backend/about_me', $this->data);
            $this->template->render();
        }
    }

}
