
<?php
  Class User_details extends CI_Model{

    /* function __construct()
     {
         parent::__construct();
         

     }*/

     public function insertRow($table, $data){
	  	$this->db->insert($table, $data);
	  	return  $this->db->insert_id();
	}

	public function auth_user()
	{

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->db->where('email = "'.$email.'"');
		$res = $this->db->get('User_details')->result();
		//var_dump($res);
		if($res){
			//echo $res[0]->password;
			if ($password == $res[0]->password){       
				/*if($result[0]->status != 'active') {
					return 'not_varified';
				}
				return $result; */
				//$_SESSION['name'] = $res[0]->name;
				$this->session->set_userdata('user_id',$res[0]->user_id);
				$this->session->set_userdata('email',$res[0]->email);
				$this->session->set_userdata('user_name',$res[0]->name);
			return $res;
		}
		else return 'fail';
	}
		else{
			return false;
		}
	}

	public function updateRow($table, $col, $colVal, $data) {
  		$this->db->where($col,$colVal);
		$this->db->update($table,$data);
		return true;
  	}


  }



?>