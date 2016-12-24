<?php

class Signin extends CI_Controller
{
	public function login()
	{
		if(isset($_REQUEST['email']) && isset($_REQUEST['password']))
		{

          	$user['vchr_email'] = $this->input->get_post('email');
          	$user['vchr_password']= $this->input->get_post('password');
          	$this->load->model('SigninModal');
          	$result = $this->SigninModal->sgnmodal($user);
          	$msg[] = $result;

          	// $msg = array("ResponseCode"=>"200","msg"=>"Success");
        }
        else
        {
        	$msg = array("ResponseCode"=>"404","message"=>"No data received");
        }
        echo json_encode($msg);
	}

}
?>

