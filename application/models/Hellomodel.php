<?php
class Hellomodel extends CI_Model
{
    public function savedata()
    {
        $data = array('Name' => $this->input->post('Name'),
        'Email' => $this->input->post('Email'),
        'Message' => $this->input->post('Message'),
    );

    $this->db->insert('contact_form',$data);
    }
}
?>