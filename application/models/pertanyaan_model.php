<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Model pendaftaran NLC
 */

class pertanyaan_model extends CI_Model{
    private  $table_pertanyaan;
    
    public function __construct() {
        parent::__construct();
        $this->table_pertanyaan     =   'pertanyaan';
    }
    
    
    /*
     * Menambahkan member
     */
    function add_pertanyaan($data){
        $this->db->insert($this->table_pertanyaan, $data);
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
    function select_pertanyaan()
    {
        $SQL    =   $this->db->get($this->table_pertanyaan);
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
    
    function select_pertanyaan_status($status)
    {   
        $this->db->where('status', $status); 
        $SQL    =   $this->db->get($this->table_pertanyaan);
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
  
  
    
    /*
     * Menghitung jumlah pertanyaan yang telah disimpan
     */
    function count_pertanyaan()
    {
        $SQL    =   $this->db->get($this->table_pertanyaan);
        $jumlah =   $SQL->num_rows();
        return $jumlah;
    }
     
    
    
    /*
     * Mengubah informasi member
     */
    function update_pertanyaan($id_pertanyaan, $data)
    {
        $this->db->where('id_pertanyaan', $id_pertanyaan);
        $this->db->update($this->table_pertanyaan, $data);
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
        $this->db->where('member', $id_member);
        $this->db->delete($this->table_team_temp);
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
     * Generate kode member
     */
    function generatePertanyaan()
    {
        $nlc_format =   'PE';
        $jumlah =   $this->count_pertanyaan() + 1;
        if ($jumlah < 10) $jumlah = '000'.$jumlah;
        else if($jumlah < 100) $jumlah = '00'.$jumlah;
        else if($jumlah < 1000) $jumlah = '0'.$jumlah;
        $kodeNLC    =   $nlc_format.$jumlah;
        return $kodeNLC;
    }
    
    
    /*
     * digunakan untuk menampilkan member sesuai status
     */
    public function pertanyaan_status($status)
    {
        $SQL    =   "SELECT * FROM pertanyaan,member WHERE pertanyaan.status = ? and pertanyaan.id_member = member.id_member";
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
     
    public function pertanyaan()
    {
        $SQL    =   "SELECT m.nama, p.id_pertanyaan, p.status, p.pertanyaan, p.jawaban, p.tanggal FROM pertanyaan p,member m WHERE p.id_member = m.id_member";
        $query  =   $this->db->query($SQL);

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
    //update status bisa dibaca
    public function update_status($idpertanyaan, $status)
    {
        //update status
        $SQL = "UPDATE pertanyaan set status = $status where id_pertanyaan = ?";
        $query = $this->db->query($SQL, $idpertanyaan);
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public function pertanyaan_member($id_member)
    {
        $this->db->where('id_member', $id_member); 
        $SQL    =   $this->db->get($this->table_pertanyaan);
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
    
    public function pertanyaan_id($id_pertanyaan)
    {
        $this->db->where('ID_Pertanyaan', $id_pertanyaan); 
        $SQL    =   $this->db->get($this->table_pertanyaan);
        if($SQL->num_rows() == 1)
        {
            foreach($SQL->result() as $row)
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
