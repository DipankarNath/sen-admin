<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class DashboardModel extends CI_Model
    {
        function __construct()
        {
            // Call the Model constructor
            parent::__construct();
        }
        //we will use the select function
        public function selectAll()
        {
            //data is retrive from this query
            $query = $this->db->get('product');
//            $result=$query->result();

            return $query;
        }
        function edit_product_by_id($pr_id)
        {
            $this->db->select('*');
            $this->db->where('Id', $pr_id);
            $query = $this->db->get('product');
            return $query;
        }
    }
