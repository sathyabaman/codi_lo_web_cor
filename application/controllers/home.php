<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {


    function __construct() {
        parent::__construct();
      
      //session, url, satabase is set in auto load in the config
      
        $this->load->model('Home_model', 'home');
        $this->load->library('pagination');

    }

    function index(){
      redirect('home/most_recent/');
    }


    function most_recent(){
    $recent_images= $this->home->get_most_recent_images();
    $image['recent_images']=$recent_images;

    $this->load->view('home',$image );
    
    }

    function most_popular(){

    $popular_images= $this->home->get_most_popular_images();
    $image['recent_images']=$popular_images;

    $this->load->view('popular',$image );


    }


    function upload_image(){
     $data['country']  = $this->home->get_country_list();
     $data['category'] = $this->home->get_category_list();
     $data['language'] = $this->home->get_language_list();

     $this->load->view('upload_image', $data);
    }



    function do_upload() {


        $imagdata['user_country_id']   =$this->input->post('country');
        $imagdata['language_id']       =$this->input->post('language');
        $imagdata['category_id']       =$this->input->post('category');

if($imagdata['user_country_id']==0 || $imagdata['language_id']==0 ||$imagdata['category_id']==0){
    $message = "Make Sure you select the Country, Language and the Category for the image, form the drop down boxes below. Thank you!...";
    $this->session->set_userdata('error_message', $message);
    redirect('/home/upload_image');
}else{
        $config['upload_path'] = './assets/uploaded_image/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '6000';
        $config['file_name'] = 'lolcorps_'.md5(time());
        $config['overwrite'] = false;
       // $config['max_width']  = '1024';
       // $config['max_height']  = '768';

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('image')) {
                $error = array('error' => $this->upload->display_errors());
                $message = $error;
                $this->session->set_userdata('error_message', $message);
                redirect('/home/upload_image');
        }else {
                 $data = array('upload_data' => $this->upload->data());

                 $imagdata['user_id']           =0;
                 $imagdata['username']          =$this->input->post('username');
                 $imagdata['title']             =$this->input->post('title');
                 $imagdata['image']             =$data["upload_data"]["file_name"];
                 $imagdata['description']       =$this->input->post('description');
                 $imagdata['image_size']        =$data["upload_data"]["file_size"];
                 $imagdata['user_country_id']   =$this->input->post('country');
                 $imagdata['language_id']       =$this->input->post('language');
                 $imagdata['category_id']       =$this->input->post('category');

                 $this->home->add_one_to_category($imagdata['category_id'] );
                 $result = $this->home->add_image($imagdata);

                 $message = "Your Image has been Uploaded Sucessfully. We will review your image and publish it within 2 Hours. <br/>Thank you!..";
                 $this->session->set_userdata('sucess_message', $message);
                 redirect('/home/upload_image');
        }

     }
        

    }



}
?>