<?php
	class SigninModal extends CI_Model
		{
			public function sgnmodal($user)
			{
				$result=$this->db->select('*')
						         ->from('user_details')
						         ->where($user)
						         ->get();
				if($result->num_rows()==1)
				{
					$row=$result->result_array();
					$row[0]["ResponseCode"]="200";
					$row[0]["msg"]="Success";


				}
				else
				{
					$result = $this->db->select('*')
									   ->from('user_details')
					                   ->where('vchr_email',$user['vchr_email'])
					                   ->get();
					if($result->num_rows()==1)
					{
						$row=$result->result_array();
						$row[0]["ResponseCode"]="500";
						$row[0]["msg"]="Password error";

					}
					else
						$row = array("ResponseCode"=>"404","msg"=>"user not found");
				}
				/*$msg = array("name"=>$user['vchr_email'],"password"=>$user['vchr_password']);
				return $msg;*/
				return $row;

			}


		}
?>