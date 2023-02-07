<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phonebooks extends CI_Controller
{
    public function index()
    {
        $this->load->model('Phonebook');
        $view_data = array("contacts" => $this->Phonebook->get_all());
        $this->load->view('phonebook/index', $view_data);
    }
    public function new()
    {
        $this->load->view('phonebook/add');
    }
    public function edit($id)
    {
        $view_data = array("id" => $id);
        $this->load->view('phonebook/edit', $view_data);
        $this->load->model('Phonebook');
    }
    public function show($id)
    {
        $this->load->model('Phonebook');
        $view_data = $this->Phonebook->get($id);
        $this->load->view('phonebook/show', $view_data);
    }
    public function create()
    {
        $post_data = $this->input->post(NULL, TRUE);
        $post_data['date'] = date("Y-d-m H:i:s");
        $this->load->model('Phonebook');
        $result = $this->Phonebook->add($post_data);
        redirect('/');
    }
    public function destroy($id)
    {
        $post_data = $this->input->post(NULL, TRUE);
        $this->load->model('Phonebook');
        $this->Phonebook->delete($id);
        redirect('/');
    }
    public function update()
    {
        $post_data = $this->input->post(NULL, TRUE);
        $this->load->model('Phonebook');
        $this->Phonebook->update($post_data);
        redirect('/');
    }


}
?>