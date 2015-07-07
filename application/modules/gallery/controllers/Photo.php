<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Photo controller of
 * gallery module
 */
class Photo extends Base_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('gallery_model', 'gallery_m');
        $this->load->model('photo_model', 'photo_m');
        
        $this->layout->set('page_js', array('assets/js/gallery.js'));
        $this->layout->set('username', $this->session->userdata('username'), true);
    }


    /**
     * [index description]
     * @return [type] [description]
     */
    public function index()
    {
        $this->layout->set('page_title', 'Delizia :: Image list');
        $this->layout->set('page_panel', 'Userpanel');
        $this->layout->set('page_header', 'Album images');
        $this->layout->set('page_name', 'userpanel');

        $this->album->db->select('*');
        $this->album->db->order_by('updated_at', 'DESC');
        $this->album->db->where('is_active', 1);
        $this->album->db->where('user_id', $this->session->userdata('user_id'));
        $this->layout->set('photo_list', $this->photo_m->get_all());

        $this->layout->buffer('content', 'gallery/list_photo');
        $this->layout->render();
    }

    /**
     * [edit description]
     * @return [type] [description]
     */
    public function edit()
    {
        //echo json_encode($this->input->post('userId'));
        echo json_encode($this->album_photo->get($this->input->post('itemId')));
        exit;
    }

    /**
     * [delete description]
     * @return [type] [description]
     */
    public function delete()
    {
        //echo json_encode($this->input->post('userId'));
        if($this->album_photo->delete($this->input->post('itemId'))) {
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
        $submit = $this->input->post('btn_album');
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

                    if ($this->album_photo->update($itemId, $data)) {
                        $msg['success']['update'] = 'Update Success!';
                        $this->session->set_flashdata('msg_update', $this->lang->line('msg_success_update'));
                    }else {
                        $msg['error']['update'] = 'Can\'t update now!';
                    }
                    
                } else {
                    $data['user_id'] = $this->session->userdata('user_id');
                    
                    if ($this->album_photo->insert($data)) {
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