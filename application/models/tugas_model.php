<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Model pendaftaran NLC
 */

class tugas_model extends CI_Model{
    private  $table_tugas;
    
    public function __construct() {
        parent::__construct();
        $this->table_tugas     =   'tugas';
    }
    
    
    /*
     * Menambahkan member
     */
    function add_tugas($data){
        $this->db->insert($this->table_tugas, $data);
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
    function select_tugas()
    {
        $SQL    =   $this->db->get($this->table_tugas);
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
    
    
    function select_tugas_kategori($kategori)
    {   
        $this->db->where('kategori', $kategori); 
        $SQL    =   $this->db->get($this->table_tugas);
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
    
    function select_tugas_subkategori($kategori, $subketegori)
    {   
        $this->db->where('kategori', $kategori); 
        $this->db->where('subkategori', $subkategori);
        $SQL    =   $this->db->get($this->table_tugas);
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
    
    function select_tugas_status($status)
    {   
        $this->db->where('status', $status); 
        $SQL    =   $this->db->get($this->table_tugas);
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
    
    
    function select_one_tugas($id_tugas)
    {
        $SQL = "select * from tugas where id_tugas = ?";
        $query = $this->db->query($SQL, $id_tugas);
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
    
    
    
    
    function count_tugas()
    {
        $SQL    =   $this->db->get($this->table_tugas);
        $jumlah =   $SQL->num_rows();
        return $jumlah;
    }
     
    
    
    
    function update_tugas($id_tugas, $data)
    {
        $this->db->where('id_tugas', $id_tugas);
        $this->db->update($this->table_tugas, $data);
        if($this->db->affected_rows() > 0)
            return true;
        else
            return false;
    }
    
    
    function delete_tugas($id_tugas)
    {
        //menghapus tim
        $this->db->where('id_tugas', $id_tugas);
        $this->db->delete($this->table_tugas);
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
