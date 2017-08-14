<?php
/**
 * Created by PhpStorm.
 * User: dipan
 * Date: 14-08-2017
 * Time: 13:02
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function page($page = 'Stats')
    {
        if (!file_exists(APPPATH.'views/partial/'.$page.'.php')) {
            show_404();
        }
        $data['page'] = 'partial/'.$page;
        $this->load->view('common/Dashboard', $data);
    }
}