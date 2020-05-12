<?php

class Loginmhs_model extends CI_Model
{
    private $_table = "products";

    public $user_id;
    public $nim;
    public $name;
    public $password;
    public $email;
    public $role;

    public function rules()
    {
        return [
            ['field' => 'full_name',
            'label' => 'Name',
            'rules' => 'required'],
			
            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_length[3]'],
            
            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email']
        ];
    }

    

    public function doLogin(){
		$post = $this->input->postt();

        $this->db->where('nim', $post["nim"])
                ->or_where('username', $post["email"]);
        $user = $this->db->get($this->_table)->row();

        if($user){
            $isPasswordTrue = password_verify($post["password"], $user->password);
            $isMhs = $user->role == "mhs";
            if($isPasswordTrue && $isMhs){ 
                $this->session->set_userdata(['user_logged' => $Mhs]);
                $this->_updateLastLogin($user->user_id);
                return true;
            }
		}
		return false;
    }

    public function isNotLogin(){
        return $this->session->userdata('user_logged') === null;
    }

    private function _updateLastLogin($user_id){
        $sql = "UPDATE {$this->_table} SET last_login=now() WHERE user_id={$user_id}";
        $this->db->query($sql);
    }

}
