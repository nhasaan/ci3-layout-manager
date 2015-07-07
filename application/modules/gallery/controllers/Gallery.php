<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Gallery controller of
 * gallery module
 */
class Gallery extends Base_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('gallery_model', 'gallery_m');

        $assets = array(
            'css' => array( 
                array( 'url' => 'bootstrap.min.css', 'order' => 0),
                array( 'url' => 'gallery.css', 'order' => 1),
                array( 'url' => 'portfolio.css', 'order' => 3),
                array( 'url' => 'style-shop.css', 'in_footer' => FALSE, 'order' => 2, 'is_cached' => FALSE),
                array( 'url' => 'style-layer-slider.css', 'in_footer' => TRUE, 'order' => 4),
                ),
            'js' => array(
                array( 'url' => 'jquery.min.js', 'order' => 0),
                array( 'url' => 'bootstrap.min.js', 'order' => 1),
                array( 'url' => 'mysite.js', 'order' => 3),
                array( 'url' => 'mysite1.js', 'order' => 2),
                array( 'url' => 'mysite2.js', 'in_footer' => FALSE, 'order' => 4),
                ),
            'style' => array(
                array( 'url' => 'mysite1.js'),
                ),
            'script' => array(
                array( 'url' => 'mysite2.js'),
                ),
            );
        $this->theme->enQueueAssets($assets);
    }


    /**
     * [index description]
     * @return [type] [description]
     */
    public function index()
    {
        $this->theme->set('page_title', 'CI3LOCAL :: Gallery list');
        $this->theme->set('page_panel', 'Userpanel');
        $this->theme->set('page_header', 'Galleries');
        $this->theme->set('page_name', 'gallery');

        $this->gallery_m->db->select('*');
        $this->gallery_m->db->order_by('updated_at', 'DESC');
        $this->gallery_m->db->where('is_active', 1);
        $this->gallery_m->db->where('user_id', $this->session->user_id);
        $this->theme->set('gallery_list', $this->gallery_m->get_all());

        $this->theme->buffer('content', 'gallery/list_gallery');
        $this->theme->render();
    }

    /**
     * [edit description]
     * @return [type] [description]
     */
    public function edit()
    {
        //echo json_encode($this->input->post('userId'));
        echo json_encode($this->gallery_m->get($this->input->post('itemId')));
        exit;
    }

    /**
     * [delete description]
     * @return [type] [description]
     */
    public function delete()
    {
        //echo json_encode($this->input->post('userId'));
        if($this->gallery_m->delete($this->input->post('itemId'))) {
            $msg[] = 'Delete success';
            $this->session->set_flashdata('msg_delete', $this->lang->line('msg_success_delete'));
            $msg['refresh'] = TRUE;
        } else {
            $msg[] = 'Can\'t delete now';
            $msg['refresh'] = FALSE;
        }
        echo json_encode($msg);
        exit;
    }

    /**
     * [save description]
     * @return [type] [description]
     */
    public function save()
    {
        $submit = $this->input->post('btn_gallery');
        $msg = array();

        if (isset($submit) && $this->input->post() != '') {
            
            $itemId = $this->input->post('itemId');

            if ($this->input->post('title') != '') {
                $title = $this->input->post('title');

                if (strlen($title) < 5) {
                    $msg['error']['title_min_char'] = 'Title must be at least 5 character';
                } else {
                    $data['title'] = $this->input->post('title');
                }
                
            } else {
                $msg['error']['title'] = 'Title is required';
            }

            if ($this->input->post('brief') != '') {
                $data['brief'] = $this->input->post('brief');
            }

            if ($this->input->post('is_active') != '') {
                $data['is_active'] = $this->input->post('is_active');
            } else {
                $data['is_active'] = 0;
            }

            // echo json_encode($data); exit;

            if ( !empty($data['title']) ) {

                // save on add or update
                if ($this->input->post('itemId') != '') {

                    if ($this->gallery_m->update($itemId, $data)) {
                        $msg['success']['update'] = 'Update Success!';
                        $this->session->set_flashdata('msg_update', $this->lang->line('msg_success_update'));
                    }else {
                        $msg['error']['update'] = 'Can\'t update now!';
                    }
                    
                } else {
                    $data['user_id'] = $this->session->userdata('user_id');
                    
                    if ($this->gallery_m->insert($data)) {
                        $msg['success']['insert'] = 'Insert Success!';
                        $this->session->set_flashdata('msg_insert', $this->lang->line('msg_success_insert'));
                    } else {
                        $msg['error']['insert'] = 'Can\'t insert now!';
                    }
                }
            }

            if (!empty($msg)) {
                echo json_encode($msg);
            }

        }

        exit;
    }
}