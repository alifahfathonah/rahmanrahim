<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Model pendaftaran NLC
 */

class Sekolah_model extends CI_Model{
    private  $table_jawab;
    
    public function __construct() {
        parent::__construct();
        $this->table_jawab    =   'jawab';
        
    }
    
    /*
     * Menambahkan member
     */
    function add_jawab($data){
        $this->db->insert($this->table_jawab, $data);
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
    function select_jawab()
    {
        $SQL    =   $this->db->get($this->table_jawab);
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
    
    function update_jawab($id_jawaban, $data)
    {
        $this->db->where('id_jawaban', $id_jawaban);
        $this->db->update($this->table_jawab, $data);
        if($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
    
    
    function delete_jawab($id_jawaban)
    {
        //menghapus tim
        $this->db->where('id_jawaban', $id_jawaban);
        $this->db->delete($this->table_jawab);
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    function select_jawaban_tugas($username, $tugas_id)
    {   
        $SQL = "select * from jawab where username = '$username' and tugas_id = '$tugas_id' and trash = 'n' and parent = 0";
        $query = $this->db->query($SQL);
        if($this->db->affected_rows() > 0)
        {
            foreach ($query->result() as $row) {
                $data =   $row;
            }
            return $data;
        }
        else
        {
            return null;
        }
    }
    
    function select_one_jawaban($id_jawaban)
    {
        $SQL = "select * from jawab where id_jawaban = ?";
        $query = $this->db->query($SQL, $id_jawaban);
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
}

?>
