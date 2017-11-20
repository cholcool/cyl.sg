<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms_model extends CI_Model
{
  public function insertuser($data)
  {
    return $this->db->insert('booking', $data);
  }
}