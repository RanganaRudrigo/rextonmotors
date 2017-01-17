<?php

/**
 * Created by PhpStorm.
 * User: ITMart-6
 * Date: 1/16/2017
 * Time: 1:43 PM
 */
class Services extends Front_Controller
{

    function __construct(){
        parent::__construct();

        $this->load->model('Service_model', 'service');

        $this->load->helper("url");
        $this->load->library('pagination');
    }


    function index(){
        $this->view('services');
    }


    function service_index(){


        $d['total_count'] = $this->service->count_by([]);
        $d['count'] = $this->service->count_by([]);
//        $d['one_category'] = $this->category->get($CategoryId);
        $d['category_list'] = $this->service->order_by("Order", "ASC")->get_all();

//    p($this->db->last_query());

//        ============================================================================
        $config["base_url"] = base_url() . "Services";
        $config["total_rows"] = $this->service->count_by([]);

        $config["per_page"] = 9;
        $config["uri_segment"] = 2;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);

        $config["use_page_numbers"] = TRUE;
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $config["num_tag_open"] ='<li  >';
        $config["num_tag_close"] ='</li>';
        $config["next_tag_open"] ='<li  >';
        $config["next_tag_close"] ='</li>';

        $config["prev_tag_open"] ='<li  >';
        $config["prev_tag_close"] ='</li>';

//        $config['next_link'] = 'Next';
        $config['next_link'] = '<span aria-hidden="true">&raquo;</span>';
//        $config['prev_link'] = 'Previous';
        $config['prev_link'] = '<span aria-hidden="true">&laquo;</span>';


        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;


//        $this->db->join('brand','product.BrandId=brand.BrandId');
//        $this->db->join('category','product.CategoryId=category.CategoryID');
//        $this->db->select("product.*,brand.BrandTitle,category.CategoryTitle");


        $d['pages']=round($choice);
        $d['products'] = $this->service->order_by("Order", "ASC")->limit($config["per_page"],($page-1)*9)->get_all();

//        $d["products"] = $this->product->order_by("Order", "ASC")->limit($config["per_page"],($page-1)*16)->get_many_by(['CategoryId'=>$CategoryId]);
        $d["links"] = $this->pagination->create_links();


        $d['link'] = "";
//        p(($page));

//        p($this->db->last_query());
//        p($this->uri->segment(2));
//        p($CategoryId);

//        $this->view('product',$d);
        $this->view('services',$d);
//        $this->view('all_product');



    }

    function detail($ProductId)
    {

//        p($ProductId);

        $d['details']=$this->service->get_by(['ServiceId' => $ProductId]);
//        p($this->db->last_query());
        $d['related_products'] = $this->service->limit(4)->order_by("Order", "RANDOM")->get_all();
//        $d['related_products'] = $this->service->limit(4)->order_by('rand()');
//        p($this->db->last_query());


//        $d['one_sub_category'] = $this->subcategory->get($d['details']->SubCategoryId);
//        $d['one_category'] = $this->category->get($d['details']->CategoryId);

//        p($this->db->last_query());

//        $d['main_cate']=' <li><a href="'.base_url('Products/').url_title($d['one_category']->CategoryTitle).'/'.$d['one_category']->CategoryId .'"> '.$d['one_category']->CategoryTitle.' </a></li>';

//        if($d['details']->SubCategoryTitle != null){
//            $d['main_cate_sub']=' <li><a href="'.base_url('Product/').url_title($d['one_category']->CategoryTitle).'/'.url_title($d['one_sub_category']->SubCategoryTitle) .'/'.$d['one_sub_category']->SubCategoryId.'"> '.$d['one_sub_category']->SubCategoryTitle.' </a></li>';
//        }else{
//            $d['main_cate_sub']=' ';
//        }






//        p($this->db->last_query());
//
//
////        p($d['one_category']);
//        p($d['details']);

        $this->view('service_detail', $d);
//        $this->view('detail');


    }

}