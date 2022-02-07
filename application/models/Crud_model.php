<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function createData($verification_key)
    {
        $data = array (
            'lastName' => $this->input->post('lastName'),
            'firstName' => $this->input->post('firstName'),
            'birthdate' => $this->input->post('birthdate'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => sha1($this->input->post('password')),
            'verification_key' => $verification_key,
            'status' => '0'
        );
        $this->db->insert('tbl_name', $data);
    }

    function verify_email($key){
    	$this->db->where('verification_key', $key);
		$this->db->where('status', '0');
		$query = $this->db->get('tbl_name');

		if($query->num_rows () > 0){
			$data = array(
				'status' => '1'
			);

			$this->db->where('verification_key', $key);
			$this->db->update('tbl_name', $data);
			return true;
		}
		else
		{
			return false;
		}
	}

    public function getAllData()
    {
        $query = $this->db->query('SELECT * FROM tbl_name');
        return $query->result();
    }

    public function getData($id)
    {
        $query = $this->db->query('SELECT * FROM tbl_name WHERE `id` =' .$id);
        return $query->row();
    }

    public function updateData($id)
    {
        $data = array (
            'lastName' => $this->input->post('lastName'),
            'firstName' => $this->input->post('firstName'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'birthdate' => $this->input->post('birthdate'),
            'password' => $this->input->post('password')
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_name', $data);
    }

    public function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_name');
    }
}
