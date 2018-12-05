<?php 
class ControllerExtensionModuleCategoryImage extends Controller{
	public function index($setting){
		$this->load->language('extension/module/category_image');
		$this->load->model('catalog/category');
		$data['categories'] = array();
		if( $setting['category'] ){
			foreach( $setting['category'] as $category_id ){
				$category = $this->model_catalog_category->getCategory($category_id);
				$data['categories'][] = array(
					'category_id' 	=> $category_id,
					'name'			=> $category['name'],
					'href' 			=> $this->url->link('product/category','path=' . $category_id)

				);
			}
		}
		return $this->load->view('extension/module/category_image', $data);
	}
 }
