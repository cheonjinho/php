<?php

class Test_Controller extends CI_Controller
{
	public function view() {
		if (!file_exists('application/views/test/test.php')) {
			show_404();
		}
		$data['title'] = 'This is a Test';

		$this->load->view('test/test', $data);
	}
}