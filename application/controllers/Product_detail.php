<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Product_detail extends CI_Controller {
    public function index(){
          
  
    $data['title'] = "Đây là trang chi tiết sản phẩm Samsung Galaxy S8";
    $data['product'] = array(
                 "name" => 'Samsung Galaxy S8 Edge',
                 "price"  => '18.400.000 VNĐ',
                 "catalog"  => 'Samsung',
                 "desc" => 'Galaxy S8 hứa hẹn sẽ mang đến cho hãng công nghệ Hàn Quốc nhiều chiến tích vẻ vang hơn nữa, khi nó gần như hoàn hảo về mọi khía cạnh, từ thiết kế, màn hình, hiệu năng, tính năng đến camera'
      );
    $this->load->view('index/product/product_detail',$data);
    }
 
}