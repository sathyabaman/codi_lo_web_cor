<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class admin404500_corps extends CI_Controller {


    function __construct() {
        parent::__construct();
      
      //session, url, satabase is set in auto load in the config
      
        $this->load->model('Admin_model', 'admin');
        $this->load->library('pagination');
    }


    function index(){
    
        redirect('/admin404500_corps/login/');
        
    }

    function login(){

        $login['user'] =$this->input->post('user');
        $login['passwrd'] =$this->input->post('password');
        if($this->session->userdata('is_loged_in')){
             redirect('/admin404500_corps/home/');
        }else{
                 if($login['user']==false || $login['passwrd']==false){
                    $this->load->view('admin/admin_login');
                }else{
                    $login['passwrd']=md5($login['passwrd']);
                    $total = $this->admin->admin_login($login);
                    if($total==1){
                        $this->admin->set_login_session($login);
                        if($this->session->userdata('is_loged_in')){
                            redirect('/admin404500_corps/home/');
                        }else{
                            $this->load->view('admin_login');
                        }
                    }else{
                        $this->load->view('admin/admin_login');
                    }
                }
            }

    }

    function home(){

        if($this->session->userdata('is_loged_in')){
            $this->load->view('admin/admin_home');
        }else{
            $this->load->view('admin/admin_login');
        }

    }


    function image_approval(){
        $unapproved_images['images_approval'] = $this->admin->get_unapproved_images();
        $this->load->view('admin/admin_image_approval', $unapproved_images);
    }


    function reported_image(){
        $unapproved_images['images_reports'] = $this->admin->get_reported_images();
        $this->load->view('admin/admin_Reported_images', $unapproved_images);

    }


    function deactivate_reported_iamge($id){
        $this->admin->deactivate_report_image($id);
        $this->admin->remove_reported_frm_admin($id);
        redirect('/admin404500_corps/reported_image/');

    }

    function delete_reported_image($id){
        $this->admin->delete_report_image($id);
        $this->admin->remove_reported_frm_admin($id);
        redirect('/admin404500_corps/reported_image/');
    }






    function approve_iamge($id){
       $this->admin->approve_image($id);
       redirect('/admin404500_corps/image_approval/');
    }

    function deactivate_iamge($id){
        $this->admin->deactivate_image($id);
        redirect('/admin404500_corps/image_approval/');

    }

    function delete_image($id){
        $this->admin->delete_image($id);
        redirect('/admin404500_corps/image_approval/');
    }


    function logout(){

        $this->admin->session_log_out();
        redirect('/admin404500_corps/login/');
    }



}
?>