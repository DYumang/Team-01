<?php
class CrudController extends CI_Controller
{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('Crud_model');
    }
	public function index()
    {
        $data['result'] = $this->Crud_model->getAllData();
		$this->load->view('crud/crudView', $data);
    }
    public function create()
    {
        $this->Crud_model->createData();
        redirect("CrudController");
    }
    public function edit($id)
    {
        $data['row'] = $this->Crud_model->getData($id);
        $this->load->view('crud/crudEdit', $data);
    }
    public function update($id)
    {
        $this->Crud_model->updateData($id);
        redirect("CrudController");
    }
    public function delete($id)
    {
        $this->Crud_model->deleteData($id);
        redirect("CrudController");
    }
}
