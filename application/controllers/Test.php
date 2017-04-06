<?php

class Test extends CI_Controller
{

	public function create() {
		$form_data = $this->input->post();
		if (0 != count($form_data)) {
			$this->load->model(array('MY_Model'));
			$this->MY_Model->insert($form_data['product']);
			$data['list'] = $this->MY_Model->get_all();
			$this->load->view('test/test');
			# code...
		} else {
			$this->load->view('test/new');
		}
	}

	public function view() {
		if (!file_exists('application/views/test/test.php')) {
			show_404();
		}

		$this->load->model(array('MY_Model'));
		$data['list'] = $this->MY_Model->get_all();

		$data['title'] = 'This is a Test';
		
		$this->load->view('test/test', $data);
	}
}

?>