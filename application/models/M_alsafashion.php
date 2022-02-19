<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_alsafashion extends CI_Model {

	function read(){
		$this->db->order_by('Nama','asc');
		return $this->db->get('tbl_barang')->result_array();
	}

	function create(){
		$Ukuran = $this->input->post('ukuran');
        $Stok = $this->input->post('stok');
        $Harga = $this->input->post('harga');
        $data = [
            'Nama' => $this->input->post('nm_barang'),
            'Ukuran' => $Ukuran,
            'Stok' => $Stok,
            'Harga' => $Harga, 
        ];

        $this->db->insert('tbl_barang', $data);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('pesan', 'Ditambah');
            redirect('alsafashion', 'refresh');
        }
	}

	function get_row($id){
        return $this->db->get_where('tbl_barang',['Id_Produk' => $id])->row_array();
    }

	function update(){
		$Ukuran = $this->input->post('ukuran');
        $Stok = $this->input->post('stok');
        $Harga = $this->input->post('harga');
        $data = [
            'Nama' => $this->input->post('nm_barang'),
            'Ukuran' => $Ukuran,
            'Stok' => $Stok,
            'Harga' => $Harga, 
        ];

        $this->db->where('Id_Produk', $this->input->post('Id_Produk'));
        $this->db->update('tbl_barang', $data);
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('pesan', 'Diubah');
            redirect('alsafashion', 'refresh');
        }
    }

    function hapus($id){
        $this->db->where('Id_Produk', $id);
        $this->db->delete('tbl_barang');
        if($this->db->affected_rows() > 0){
            $this->session->set_flashdata('pesan', 'Dihapus');
            redirect('alsafashion', 'refresh');
        }
    }


}