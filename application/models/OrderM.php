<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderM extends CI_Model {

	public function addOrder($data)
	{
		return $this->db->query("INSERT INTO `orders`(`nama`, `ukuran`, `jenis_kelamin`, `id_line`, `Hp`) VALUES ('".$data['nama']."','".$data['size']."','".$data['jenisKelamin']."','".$data['idLine']."','".$data['Hp']."');");
	}

}

/* End of file OrderM.php */
/* Location: ./application/models/OrderM.php */