<?php
/**
* User Model
* @author Eric Mensah
* 9/22/2019		
*/
class User_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function getFullName()
    {
        if (!isset($this->session->user_sess)) return '';

        $result = $this->db->select('*')
                        ->from($this->session->user_sess['type'])
                        ->where('user_id',$this->session->user_sess['id'])
                        ->get()
                        ->row_array();

        $name ="";
        $name .= empty($result['first_name'])?'':$result['first_name'].' ';
        $name .= empty($result['middle_name'])?'':$result['middle_name'].' ';
        $name .= empty($result['last_name'])?'':$result['last_name'];

        return trim($name);
    }
    

    public function updatePersonalInfo() 
    {
        $data = filter_input_array(INPUT_POST);
        unset($data['person_info']);
        $this->db->set($data);
        $this->db->where('id', $this->session->user_sses['id']);

        if ($this->db->update('users')) 
        {
            $this->timelineChangePersonalInfo();
            return TRUE;
        }
        return FALSE;
    }
    public function updateUserName()
    {

        $UserName = filter_input(INPUT_POST, 'username');
        if($this->userauth->userNameExist($UserName)){return '-1';}
        $Old_UserName = $this->session->login_user['username'];

        $this->db->set('username',$UserName);
        $this->db->where('id',$this->session->login_user['id']);
        if($this->db->update('user'))
        {
            $this->auth_model->logout();
            return '1';
        }
        return '0';
    }
    public function updatePassword(){
        $opass = filter_input(INPUT_POST, 'cpassword');
        $user = $this->session->login_user;
        if(!$this->userauth->verifyPassword($opass, $user['password'])){return -2; }

        $password = filter_input(INPUT_POST, 'npassword');
        $cpassword = filter_input(INPUT_POST, 'cnpassword');

// check for missmatch password
        if($password !== $cpassword){ return -1; }

        $data['password'] = $this->encrypt->encode($password);

        $this->db->set($data);
        $this->db->where('id', $user['id']);
//run query
        $query = $this->db->update('user');
        if($query){
            $this->timeLineUserPassword();
            $this->userauth->authOut();
            return TRUE;
        }
        return FALSE;
    }

    public function uploadImage()
    {
        $config['upload_path']          = 'uploads/img/'.$type.'/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 10000;

        $config['file_name']            = 'IMG-'.$id.'-'.date('d').date('m').substr(date('Y'),2,2).'-'.date('i').date('s');

        $this->load->library('upload', $config);
        if($this->upload->do_upload('file')){
            $this->db->where('id',$id);
            if($this->db->update('users',['img_url'=>$this->upload->data('file_name')])){
                $query = $this->db->get_where('user',['id'=>$id]);
                $this->auth_model->updateSess($query->row_array());
                $this->timeLineChangePhoto(base_url('uploads/img/'.$type.'/'.$this->upload->data('file_name')));
                return TRUE;
            }
        }
        return FALSE;
    }
    public function generateLink($to_email) 
    {
        $url= site_url('api/password_reset?key=');
        return $url.urlencode($this->encrypt->encode($to_email));
    }

    public function sendEmail($user_id,$to_email,$firstname)
    {
        if(is_null($to_email) || empty($to_email)) return FALSE;

        $site_email = 'info@codewrite.org'; 
        $site_name = 'TOYOTA APPOINTMENT SYS';

        $link = $this->generateLink($to_email);

//insert statement
        $data = array('user_id'=>$user_id,'link' => $link);
        $inserted = $this->db->insert('password_reset', $data);

        if($inserted)
        {
            $data['first_name']=$firstname; $data['link'] = $link;

            $message = $this->load->view('email_html/password_reset',$data,TRUE);
            $this->email->from($site_email,$site_name)
            ->to($to_email)
            ->subject('Password Reset')
            ->message($message);

            if($this->email->send()) return $to_email;

            $where = array('user_id' => $user_id);
            $this->db_query->deleteLastInserted('password_reset',$where);
        }

        return FALSE;
    }
}
