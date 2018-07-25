<?php
class Registrasi_M extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
	}

	function get_pengajuan()
    {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $query = $this->db->get();        
        return $query->result();
    }

	function insert($id)
    {
        return $this->db->insert('tbl_pengajuan_surat_perintah_jalan',$id);
    }

    function delete($id)
    {
        $this->db->delete('tbl_pengajuan_surat_perintah_jalan', array('id_pengajuan'=>$id));
    }
}