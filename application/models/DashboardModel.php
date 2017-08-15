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
    }
