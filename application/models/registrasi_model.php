<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Model pendaftaran NLC
 */

class registrasi_model extends CI_Model{
    private  $table_member;
    
    public function __construct() {
        parent::__construct();
        $this->table_member     =   'member';
    }
    
    
    /*
     * Menambahkan member
     */
    function add_member($data){
        $this->db->insert($this->table_member, $data);
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    /*
     * Menampilkan seluruh member
     */
    function select_member()
    {
        $SQL    =   $this->db->get($this->table_member);
        if($SQL->num_rows() > 0)
        {
            foreach ($SQL->result() as $row) {
                $data[] =   $row;
            }
            return $data;
        }
        else
        {
            return null;
        }
    }
    
    function select_member_status($status)
    {   
        $this->db->where('status', $status); 
        $SQL    =   $this->db->get($this->table_member);
        if($SQL->num_rows() > 0)
        {
            foreach ($SQL->result() as $row) {
                $data[] =   $row;
            }
            return $data;
        }
        else
        {
            return null;
        }
    }
    
    function select_member_query($status, $name)
    {   
        $SQL = "select * from member where (status = '$status') and nama like '%$name%'";
        $query = $this->db->query($SQL);
        if($this->db->affected_rows() > 0)
        {
            foreach ($query->result() as $row) {
                $data[] =   $row;
            }
            return $data;
        }
        else
        {
            return null;
        }
    }
    
    function login_member($username,$password)
    {
       $SQL = "select * from member where username = '$username' and password_member = ?";
        $query = $this->db->query($SQL, $password);
        if($this->db->affected_rows() == 1)
        {
            foreach($query->result() as $row)
            {
                return $row;
    
            }
        }
        else
        {
            return null;
        }
    }
    
    function select_one_member($username)
    {
        $SQL = "select * from member where username = ?";
        $query = $this->db->query($SQL, $username);
        if($this->db->affected_rows() == 1)
        {
            foreach($query->result() as $row)
            {
                return $row;
    
            }
        }
        else
        {
            return null;
        }
    }
    
    function select_1_member($id_member)
    {
        $SQL = "select * from member where  id_member = ?";
        $query = $this->db->query($SQL, $id_member);
        if($this->db->affected_rows() == 1)
        {
            foreach($query->result() as $row)
            {
                return $row;
    
            }
        }
        else
        {
            return null;
        }
    }
    
    /*
     * Menghitung jumlah member yang mendfatar
     */
    function count_member()
    {
        $SQL    =   $this->db->get($this->table_member);
        $jumlah =   $SQL->num_rows();
        return $jumlah;
    }
     
    
    
    /*
     * Mengubah informasi member
     */
    function update_member($id_member, $data)
    {
        $this->db->where('id_member', $id_member);
        $this->db->update($this->table_member, $data);
        if($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
    
    /*
     * Menghapus member
     */
    function delete_member($id_member)
    {
        //menghapus tim
        $this->db->where('id_member', $id_member);
        $this->db->delete($this->table_member);
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    function getLastId()
    {
        $SQL    =   $this->db->get($this->table_member);
        if($SQL->num_rows() > 0)
        {
            foreach ($SQL->result() as $row) {
                $data =   $row;
            }
            return $data;
        }
        else
        {
            return null;
        }
    }
    /*
     * Generate kode member
     */
    function generateMember()
    {      
        $format =   'ME';
        $data = $this->getLastId();
        $id = $data->id_member;
        $id = str_replace('ME', '', $id);
        $id = (int)$id + 1;
        if ($id < 10) $id = '000'.$id;
        else if($id < 100) $id = '00'.$id;
        else if($id < 1000) $id = '0'.$id;
        $kode    =   $format . $id;
        return $kode;
    }
    
    
    /*
     * digunakan untuk menampilkan member sesuai status
     */
    public function list_status($status)
    {
        $SQL    =   "SELECT * FROM member P WHERE status = ?";
        $query  =   $this->db->query($SQL, $status);

        if($query->num_rows() > 0)
        {
            foreach($query->result() as $row)
            {
                $data[] =   $row;
            }
            return $data;
        }
        else
            return null;
        return null;
    }
     
    //new 
    public function update_status($id_team, $status)
    {
        //update status
        $SQL = "UPDATE member set status = $status where id_member = ?";
        $query = $this->db->query($SQL, $id_team);
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

?>
