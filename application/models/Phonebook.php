<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phonebook extends CI_Model
{
    public function add($data)
    {
        var_dump($data);
        $query = "INSERT INTO contacts(name, number, created_at) VALUES (?,?,?)";
        return $this->db->query($query, $data);
    }

    public function delete($id)
    {
        $query = "DELETE FROM contacts WHERE id = ?";
        return $this->db->query($query, $id);
    }

    public function update($data)
    {
        $update_data = array(
            'name'=> $data['name'],
            'contact' => $data['contact'],
            'updated_at' => date("Y-d-m H:i:s"),
            'id' => $data['id']
        );
        $query = "UPDATE contacts SET name=?, number=?, updated_at=? WHERE id=?";
        return $this->db->query($query, $update_data);
        // $view_data = $this->input->post(NULL, TRUE);
    }

    public function get_all()
    {
        $query = "SELECT * FROM contacts";
        return $this->db->query($query)->result_array();
    }

    public function get($id)
    {
        $query = "SELECT * FROM contacts WHERE id = ?";
        return $this->db->query($query, $id)->row_array();
    }
}

?>