<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: dipan
 * Date: 14-08-2017
 * Time: 23:29
 */
class DashboardModel extends CI_Model{ 

    public function addVehicle($vFormData){
        if($this->db->insert('product', $vFormData)){
            $lastDataId = $this->db->insert_id();
            return $lastDataId;
        } else {
            return false;
        }

    }
    public function insert_leadImg($leadImgData){
        if($this->db->insert('images', $leadImgData)){
            return true;
        } else {
            return false;
        }
    }
    public function insert_otherImg($dataInfo){
        if($this->db->insert('images', $dataInfo)){
            return true;
        } else {
            return false;
        }

    }
    public function editVehicle($vFormData){

        $this->db->where('Id', $vFormData['Id']);
        if($this->db->update('product', $vFormData)){
            $lastDataId = $this->db->insert_id();

            return $lastDataId;
        } else {
            return false;
        }

    }
    public function selectAll()
          {
              //data is retrive from this query
              $query = $this->db->get('product');
              return $query;
          }
    public function editid($pr_id)
    {
        $this->db->select('*');
        $this->db->where('Id', $pr_id);
        //$this->db->query("    ");
        $query = $this->db->get('product');
        return $query;
    }
    public function remove($pr_id)
    {
        $this->db->select('*');
        $this->db->where('Id', $pr_id);        
        $query = $this->db->get('product');
        $data = $query->result_array();
        return $query;
    }
    public function removeStat($data,$pr_id,$status)
    {
        extract($data);
        if($status == 0){
            $this->db->where('Id', $pr_id);  
            $this->db->update($table_name, array('Status' => 1)); 
            return true;
        }
        else{
            $this->db->where('Id', $pr_id);  
            $this->db->update($table_name, array('Status' => 0)); 
            return true;
        }  
        
    }
    public function getimage()
    {
        $pr_id = $this->uri->segment('3'); 
        $query = $this->db->query("select * from images where Lead =1 and Prod_Id='.$pr_id.'");
        $result=$query->result();
        return $result;
       
    }
}

