<?php

include_once APPPATH . "modules/admin/core/MY_Controller.php";

class Subcategory extends MY_Controller
{
    var $page = "subcategory";
    var $img_width = 400;
    var $img_height = 400;

    function __construct()
    {
        parent::__construct();
        $this->load->model('Subcategory_model', 'model');
        $this->load->model('Category_model', 'category');
//        $this->load->model('Brand_model', 'brand');
        $this->controller = get_class();
    }

    function create()
    {
        $this->obj = $this->model->get_all_fields();
        $d = [
            'page' => "$this->page/form",
            'obj' => $this->obj
        ];
        $this->_form($d);
    }

    function _form(&$d, $_id = 0)
    {


        $this->form_validation->set_rules("form[CategoryId]", "Category", "required");
        $this->form_validation->set_rules("form[SubCategoryTitle]", "Sub Category Title", "required");
//        $this->form_validation->set_rules("form[BrandId]", "Brand Name", "required");
//        $this->form_validation->set_rules("form[ProductTitle]","Product Name","required");
//        $this->form_validation->set_rules("form[ModelNumber]", "Model Number", "required");
//        $this->form_validation->set_rules("form[SerialNumber]","Serial Number","required");
//        $this->form_validation->set_rules("form[PriceRangeTo]", "Price Range (To)", "required");
//        $this->form_validation->set_rules("form[PriceRangeFrom]", "Price Range (From)", "required");
//        $this->form_validation->set_rules("form[Color]", "Color", "required");

        if ($this->form_validation->run()) {

            $post = $this->input->post('form');
            $post['MoreImage'] = json_encode($this->input->post('image'));
            $this->db->trans_begin();
            if ($_id) {

                $this->model->update($_id, $post);

            } else {
                //  p( $post);exit;
                $this->model->insert($post);

            }

            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> ' . (!$_id ? "Creation." : "Update.") . ' Failure !!! </strong>']);
            } else {
                $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Sub Category Successfully ' . (!$_id ? "Created." : "Updated.") . '</strong>']);
                $this->db->trans_commit();
            }

            redirect(current_url());
        }

        $d['categories'] = $this->category->get_all();
//        $d['brands'] = $this->brand->get_all();


        $this->view($d);
    }

    function edit($_id = 0)
    {
        if ($_id) {
            $d = [
                'page' => "$this->page/form",
                'obj' => $this->model->get($_id)
            ];


            $this->_form($d, $_id);
        } else {
            $this->index();
        }
    }

    function index()
    {
        $d = [
            'page' => "$this->page/index",
            'records' => $this->model->join('category')
                ->fields("{$this->model->table()}.* , CategoryTitle   ")
                ->get_all()
//            'records' => $this->model->limit(18)->get_all()
        ];
        $this->view($d);
    }

    function delete($_id = 0)
    {
        $this->model->delete($_id);
        redirect(base_url("admin/$this->controller"));
    }

    function rearrange()
    {

        $d = [
            'page' => "$this->page/rearrange",
            'records' => $this->model->join('category')
                ->fields("{$this->model->table()}.* , CategoryTitle   ")->order_by("Order", "ASC")
                ->get_all()
//            'records' => $this->model->limit(18)->get_all()
        ];
//        $d = [
//            'page' => "$this->page/rearrange",
//            'record' => $this->model->order_by("Order", "ASC")->get_all()
//        ];
//        p($this->db->last_query());
        $this->_form($d);

    }


}