<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function createData()
    {
        $data = array (
            'lastName' => $this->input->post('lastName'),
            'firstName' => $this->input->post('firstName'),
            'birthdate' => $this->input->post('birthdate'),
            'username' => $this->input->post('username'),
            'password' => sha1($this->input->post('password'))
        );
        $this->db->insert('tbl_name', $data);
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
