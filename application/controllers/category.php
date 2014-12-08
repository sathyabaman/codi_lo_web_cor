<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category extends CI_Controller {


    function __construct() {
        parent::__construct();
      
      //session, url, satabase is set in auto load in the config
        $this->load->model('Category_model', 'category');
        $this->load->library('pagination');
    }


    function index(){
    $category['cate_list'] = $this->category->get_all_categories();
    $this->load->view('all_categories', $category);
    }

    function animal(){
        $result['category'] = $this->category->get_single_category(1);
        $result['cate_name']= $this->category->get_single_category_name(1);
        $this->load->view('view_category', $result);
    }

    function american(){
        $result['category'] = $this->category->get_single_category(2);
        $result['cate_name']= $this->category->get_single_category_name(2);
        $this->load->view('view_category', $result);
    }

    function beautiful_animal(){
        $result['category'] = $this->category->get_single_category(3);
        $result['cate_name']= $this->category->get_single_category_name(3);
        $this->load->view('view_category', $result);
    }

    function cartoon(){
        $result['category'] = $this->category->get_single_category(4);
        $result['cate_name']= $this->category->get_single_category_name(4);
        $this->load->view('view_category', $result);
    }

    function comics(){
        $result['category'] = $this->category->get_single_category(5);
        $result['cate_name']= $this->category->get_single_category_name(5);
        $this->load->view('view_category', $result);
    }

    function computer_devices(){
        $result['category'] = $this->category->get_single_category(6);
        $result['cate_name']= $this->category->get_single_category_name(6);
        $this->load->view('view_category', $result);
    }

    function computing_tools(){
        $result['category'] = $this->category->get_single_category(7);
        $result['cate_name']= $this->category->get_single_category_name(7);
        $this->load->view('view_category', $result);
    }

    function cool(){
        $result['category'] = $this->category->get_single_category(8);
        $result['cate_name']= $this->category->get_single_category_name(8);
        $this->load->view('view_category', $result);
    }

    function cricket(){
        $result['category'] = $this->category->get_single_category(9);
        $result['cate_name']= $this->category->get_single_category_name(9);
        $this->load->view('view_category', $result);
    }

    function cute_feelings(){
        $result['category'] = $this->category->get_single_category(10);
        $result['cate_name']= $this->category->get_single_category_name(10);
        $this->load->view('view_category', $result);
    }
    function deep_thinking(){
        $result['category'] = $this->category->get_single_category(11);
        $result['cate_name']= $this->category->get_single_category_name(11);
        $this->load->view('view_category', $result);
    }

    function education(){
        $result['category'] = $this->category->get_single_category(12);
        $result['cate_name']= $this->category->get_single_category_name(12);
        $this->load->view('view_category', $result);
    }

    function english_jokes(){
        $result['category'] = $this->category->get_single_category(13);
        $result['cate_name']= $this->category->get_single_category_name(13);
        $this->load->view('view_category', $result);
    }

    function exam_time(){
        $result['category'] = $this->category->get_single_category(14);
        $result['cate_name']= $this->category->get_single_category_name(14);
        $this->load->view('view_category', $result);
    }

    function facebook_comments(){
        $result['category'] = $this->category->get_single_category(15);
        $result['cate_name']= $this->category->get_single_category_name(15);
        $this->load->view('view_category', $result);
    }

    function fashion(){
        $result['category'] = $this->category->get_single_category(16);
        $result['cate_name']= $this->category->get_single_category_name(16);
        $this->load->view('view_category', $result);
    }

    function fashion_show(){
        $result['category'] = $this->category->get_single_category(17);
        $result['cate_name']= $this->category->get_single_category_name(17);
        $this->load->view('view_category', $result);
    }

    function football(){
        $result['category'] = $this->category->get_single_category(18);
        $result['cate_name']= $this->category->get_single_category_name(18);
        $this->load->view('view_category', $result);
    }

    function i_hate_job(){
        $result['category'] = $this->category->get_single_category(19);
        $result['cate_name']= $this->category->get_single_category_name(19);
        $this->load->view('view_category', $result);
    }

    function it_fun(){
        $result['category'] = $this->category->get_single_category(20);
        $result['cate_name']= $this->category->get_single_category_name(20);
        $this->load->view('view_category', $result);
    }

    function kids(){
        $result['category'] = $this->category->get_single_category(21);
        $result['cate_name']= $this->category->get_single_category_name(21);
        $this->load->view('view_category', $result);
    }

    function ladies(){
        $result['category'] = $this->category->get_single_category(22);
        $result['cate_name']= $this->category->get_single_category_name(22);
        $this->load->view('view_category', $result);
    }

    function life(){
        $result['category'] = $this->category->get_single_category(23);
        $result['cate_name']= $this->category->get_single_category_name(23);
        $this->load->view('view_category', $result);
    }

    function love(){
        $result['category'] = $this->category->get_single_category(24);
        $result['cate_name']= $this->category->get_single_category_name(24);
        $this->load->view('view_category', $result);
    }

    function movies(){
        $result['category'] = $this->category->get_single_category(25);
        $result['cate_name']= $this->category->get_single_category_name(25);
        $this->load->view('view_category', $result);
    }

    function games(){
        $result['category'] = $this->category->get_single_category(26);
        $result['cate_name']= $this->category->get_single_category_name(26);
        $this->load->view('view_category', $result);
    }

    function tattoos(){
        $result['category'] = $this->category->get_single_category(27);
        $result['cate_name']= $this->category->get_single_category_name(27);
        $this->load->view('view_category', $result);
    }

    function olympics(){
        $result['category'] = $this->category->get_single_category(28);
        $result['cate_name']= $this->category->get_single_category_name(28);
        $this->load->view('view_category', $result);
    }

    function party(){
        $result['category'] = $this->category->get_single_category(29);
        $result['cate_name']= $this->category->get_single_category_name(29);
        $this->load->view('view_category', $result);
    }

    function programmer(){
        $result['category'] = $this->category->get_single_category(30);
        $result['cate_name']= $this->category->get_single_category_name(30);
        $this->load->view('view_category', $result);
    }

    function programmers_trolls(){
        $result['category'] = $this->category->get_single_category(31);
        $result['cate_name']= $this->category->get_single_category_name(31);
        $this->load->view('view_category', $result);
    }

    function programming_jokes(){
        $result['category'] = $this->category->get_single_category(32);
        $result['cate_name']= $this->category->get_single_category_name(32);
        $this->load->view('view_category', $result);
    }

    function puzzles(){
        $result['category'] = $this->category->get_single_category(33);
        $result['cate_name']= $this->category->get_single_category_name(33);
        $this->load->view('view_category', $result);
    }

    function quotes(){
        $result['category'] = $this->category->get_single_category(34);
        $result['cate_name']= $this->category->get_single_category_name(34);
        $this->load->view('view_category', $result);
    }

    function road_art(){
        $result['category'] = $this->category->get_single_category(35);
        $result['cate_name']= $this->category->get_single_category_name(35);
        $this->load->view('view_category', $result);
    }

    function shopping(){
        $result['category'] = $this->category->get_single_category(36);
        $result['cate_name']= $this->category->get_single_category_name(36);
        $this->load->view('view_category', $result);
    }

    function sports_world(){
        $result['category'] = $this->category->get_single_category(37);
        $result['cate_name']= $this->category->get_single_category_name(37);
        $this->load->view('view_category', $result);
    }

    function student_life(){
        $result['category'] = $this->category->get_single_category(38);
        $result['cate_name']= $this->category->get_single_category_name(38);
        $this->load->view('view_category', $result);
    }

    function technology(){
        $result['category'] = $this->category->get_single_category(39);
        $result['cate_name']= $this->category->get_single_category_name(39);
        $this->load->view('view_category', $result);
    }

    function celebrity(){
        $result['category'] = $this->category->get_single_category(40);
        $result['cate_name']= $this->category->get_single_category_name(40);
        $this->load->view('view_category', $result);
    }


    function total_fail(){
        $result['category'] = $this->category->get_single_category(41);
        $result['cate_name']= $this->category->get_single_category_name(41);
        $this->load->view('view_category', $result);
    }    

    function troll_comics(){
        $result['category'] = $this->category->get_single_category(42);
        $result['cate_name']= $this->category->get_single_category_name(42);
        $this->load->view('view_category', $result);
    }

    function trolling(){
        $result['category'] = $this->category->get_single_category(43);
        $result['cate_name']= $this->category->get_single_category_name(43);
        $this->load->view('view_category', $result);
    }

    function true_love(){
        $result['category'] = $this->category->get_single_category(44);
        $result['cate_name']= $this->category->get_single_category_name(44);
        $this->load->view('view_category', $result);
    }        

    function tv_drama(){
        $result['category'] = $this->category->get_single_category(45);
        $result['cate_name']= $this->category->get_single_category_name(45);
        $this->load->view('view_category', $result);
    }

    function other(){
        $result['category'] = $this->category->get_single_category(46);
        $result['cate_name']= $this->category->get_single_category_name(46);
        $this->load->view('view_category', $result);
    }

    function men_vs_women(){
        $result['category'] = $this->category->get_single_category(47);
        $result['cate_name']= $this->category->get_single_category_name(47);
        $this->load->view('view_category', $result);
    } 

    function google(){
        $result['category'] = $this->category->get_single_category(48);
        $result['cate_name']= $this->category->get_single_category_name(48);
        $this->load->view('view_category', $result);
    }

    function politics(){
        $result['category'] = $this->category->get_single_category(49);
        $result['cate_name']= $this->category->get_single_category_name(49);
        $this->load->view('view_category', $result);
    }

    function bussiness(){
        $result['category'] = $this->category->get_single_category(50);
        $result['cate_name']= $this->category->get_single_category_name(50);
        $this->load->view('view_category', $result);
    }       

}
?>