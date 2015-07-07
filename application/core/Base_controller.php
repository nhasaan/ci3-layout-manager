<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Base_controller definations
 * Load the theme and asset manager, langs
 */

class Base_controller extends MX_Controller {

    public $ajax_controller = false;

    public function __construct()
    {
        parent::__construct();
        
        //$lang = $this->lang_model->get('is_active', 1)->lang;
        //$lang = 'english';

        //$this->lang->load('page', $lang);
        //$this->load->helper('language');

        // Don't allow non-ajax requests to ajax controllers
        if ($this->ajax_controller and !$this->input->is_ajax_request())
        {
            exit;
        }

        $this->load->module('theme');
    }

    /**
     * Retrieve child items from list of items matching item ID.
     *
     * Matches against the items parameter against the item ID. Also matches all
     * children for the same to retrieve all children of a item. Does not make any
     * SQL queries to get the children.
     *
     * @since 1.0 by Nazmul Hasan
     * @param int   $item_id    Item ID.
     * @param array $items      List of items' objects.
     * @return array List of item children.
     */
    public function get_item_children( $item_id, $items ) {
        $item_list = array();
        foreach ( (array) $items as $item ) {
            if ( $item->parent_id == $item_id ) {
                $item_list[] = $item;
                if ( $children = $this->get_item_children( $item->id, $items ) ) {
                    $item_list = array_merge( $item_list, $children );
                }

            }
        }
        return $item_list;
    }

    /**
     * [create_slug Regular expression function that replaces spaces between words with hyphens.]
     * @param  [type] $string [description]
     * @return [type]         [description]
     */
    public function create_slug($str)
    {   
        #convert case to lower
        $str = strtolower($str);

        #remove special characters
        $str = preg_replace('/[^a-zA-Z0-9]/i',' ', $str);

        #remove white space characters from both side
        $str = trim($str);

        #remove double or more space repeats between words chunk
        $str = preg_replace('/\s+/', ' ', $str);

        #fill spaces with hyphens
        $str = preg_replace('/\s+/', '-', $str);

        return $str;
    }

}