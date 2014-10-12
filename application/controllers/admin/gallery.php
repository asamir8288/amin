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
class Gallery extends My_Controller {
    function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->data['galleries'] = GalleriesTable::getAllGalleries();
        $this->template->write_view('content', 'backend/gallery/list_all_gallery', $this->data);
        $this->template->render();
    }
    
    public function add_edit_gallery($gallery_id = '') {
        $this->data['categories'] = GalleryCategoriesTable::getAllCategories();
        
        if ($gallery_id) {
            $this->data['data'] = GalleriesTable::getOne($gallery_id);
            
            $this->data['page_title'] = 'Edit Gallery';
            $this->data['submit_url'] = 'admin/gallery/add_edit_gallery/' . $gallery_id;
            $this->data['btn_text'] = 'Update';
        } else {
            $this->data['page_title'] = 'Add Gallery';
            $this->data['submit_url'] = 'admin/gallery/add_edit_gallery';
            $this->data['btn_text'] = 'Add';
        }

        if ($this->input->post('submit')) {
            $g = new Galleries();
            
            if($gallery_id){
                $_POST['gallery_id'] = $gallery_id;
                $errors = $g->updateGallery($_POST);
            }  else {
               $errors = $g->addGallery($_POST); 
            }            

            if ($errors['error_flag']) {
                $this->data['errors'] = $errors;
                $this->data['data'] = $_POST;
                $this->template->write_view('content', 'backend/gallery/add_edit_gallery', $this->data);
                $this->template->render();
            } else {

                $this->session->set_flashdata('message', array('type' => 'success',
                    'body' => ($gallery_id) ? 'Your gallery has been updated successfully.' : 'Your gallery has been added successfully.')
                );
                redirect('admin/gallery');
            }
        } else {

            $this->template->write_view('content', 'backend/gallery/add_edit_gallery', $this->data);
            $this->template->render();
        }
    }
    
    public function delete_gallery($gallery_id) {
        if($gallery_id){
            
            $g =new Galleries();
            $g->deleteGallery($gallery_id);
            
            redirect('admin/gallery');
        }else{
            redirect('admin/gallery');
        }
    }
}
