<?php 
	if (!defined('BASEPATH')) exit('Điều hướng không cho phép');
	/**
	* 
	*/
	class Home extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function index($value = '')
		{
			//tạo mảng để truyền biến trong view
			$data = array('key' => $value);
			//CI sẽ tạo ra trên các view một biến tên là $key và có giá trị là $value
			//Load view
			$this->load->view('home_View',$data);
		}
	}
 ?>