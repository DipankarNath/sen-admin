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

}