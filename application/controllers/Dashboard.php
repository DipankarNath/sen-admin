<?php
/**
 * Created by PhpStorm.
 * User: dipan
 * Date: 14-08-2017
 * Time: 13:02
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
    }

    public function page($page = 'Stats')
    {
        if (!file_exists(APPPATH.'views/partial/'.$page.'.php')) {
            show_404();
        }
        $data['page'] = 'partial/'.$page;
        $this->load->view('common/Dashboard', $data);
    }

    public function addVehicle()
    {

        $this->load->library('form_validation');

        $this->form_validation->set_rules('vehicleName', 'Name of the Vehicle', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('vehicleDescr', 'Vehicle Description', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('maker', 'Maker', 'trim');
        $this->form_validation->set_rules('displace', 'Displacement', 'trim');
        $this->form_validation->set_rules('fuel', 'Fuel', 'trim');
        $this->form_validation->set_rules('capacity', 'Capacity', 'trim');
        $this->form_validation->set_rules('inspection', 'Vehicle inspection crack', 'trim');
        $this->form_validation->set_rules('inspecRecord', 'Inspection record', 'trim');
        $this->form_validation->set_rules('spdCon', 'Speed ​​control device', 'trim');
        $this->form_validation->set_rules('exhust', 'Exhaust gas regulation', 'trim');
        $this->form_validation->set_rules('totalWeig', 'Vehicle total weight', 'trim');
        $this->form_validation->set_rules('modelYear', 'Model year', 'trim');
        $this->form_validation->set_rules('model', 'Model', 'trim');
        $this->form_validation->set_rules('shape', 'Shape', 'trim');
        $this->form_validation->set_rules('color', 'Body color', 'trim');
        $this->form_validation->set_rules('dimension', 'Body dimensions', 'trim');
        $this->form_validation->set_rules('vehicleWeight', 'Vehicle weight', 'trim');
        $this->form_validation->set_rules('mileage', 'Mileage', 'trim');
        $this->form_validation->set_rules('elephantManufacturer', 'Elephant manufacturer', 'trim');
        $this->form_validation->set_rules('packageDimen', 'Package dimensions', 'trim');
        $this->form_validation->set_rules('maxLoadCap', 'Maximum loading capacity', 'trim');
        $this->form_validation->set_rules('primeMover', 'Prime mover', 'trim');
        $this->form_validation->set_rules('mission', 'Mission', 'trim');


        if ($this->form_validation->run() == FALSE)
        {
            $this->session->set_flashdata('addFromValErr', 'Err in from validation');
//            $data['page'] = 'partial/AddVehicle';
//            $this->load->view('common/Dashboard', $data);
            redirect(base_url().'Dashboard/page/AddVehicle');
        }
        else
        {
            $this->session->set_flashdata('addFromSucc', 'Succ in from validation');
//            $data['page'] = 'partial/AddVehicle';
//            $this->load->view('common/Dashboard', $data);
            redirect(base_url().'Dashboard/page/AddVehicle');
        }
    }

    public function addVehicleImg()
    {
        $data = array();
        if (!empty($_FILES)) {
            $cpt = count ( $_FILES ['userFiles'] ['name'] );
//            $data['msg'] = $_FILES['userFiles']['name'];
            print_r($cpt); exit;
//            $config['upload_path']          = base_url().'assets/images/vcImg/';
//            $config['allowed_types']        = 'gif|jpg|png';
//            $config['max_size']             = 2048;
////            $config['max_width']            = 1024;
////            $config['max_height']           = 768;
//
//            $this->load->library('upload', $config);
//
//            if ( ! $this->upload->do_upload('userfile'))
//            {
//                $error = array('error' => $this->upload->display_errors());
//
//                $this->load->view('upload_form', $error);
//            }
//            else
//            {
//                $data = array('upload_data' => $this->upload->data());
//
//                $this->load->view('upload_success', $data);
//            }
        } else {
            $data['msg'] = "THere";
            print_r($data); exit;
        }
    }

    public function view()
    {
        //load the database
       // $this->load->database();
        //load the model
        $this->load->model('DashboardModel');
        //load the method of model
        $data['vehicleData']=$this->DashboardModel->selectAll();
        //return the data in view
        $data['page'] = 'partial/ViewVehicle';
        $this->load->view('common/Dashboard', $data);
//        $this->load->view('ViewVehicle', $data);
    }
}