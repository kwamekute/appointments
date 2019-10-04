
<?php
/**
* Utils Model
* @author Eric Mensah
* 9/22/2019		
*/
class Utils extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function extractFullName(array $array,$prefix='')
    {

        $name ="";
        $name .= empty($array[$prefix.'first_name'])?'':$array[$prefix.'first_name'].' ';
        $name .= empty($array[$prefix.'middle_name'])?'':$array[$prefix.'middle_name'].' ';
        $name .= empty($array[$prefix.'last_name'])?'':$array[$prefix.'last_name'];

        return trim($name);
    }

    public function getRowByUserId($table,$id)
    {
    	return 
    		$this->db->select('*')
    				->from($table)
    				->where('id',$id)
    				->get()
    				->row_array();
    }
}

