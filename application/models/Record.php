<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Record extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }
    function catat($slug,$exported)
    {
    	$this->db->insert($slug,$exported);
    }
    function frame($slug,$exported)
    {
    	$this->db->select('id');
        $this->db->from($slug);
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get();
        $row = $query->row()->id;
        $exported['id_record'] = $row;
    	$this->db->insert('frame',$exported);
    }
    function getkey($slug)
    {
        $this->db->select('*');
        $this->db->from($slug);
        $this->db->limit(1);
        $query = $this->db->get();
        return $query->row_array();
    }
}