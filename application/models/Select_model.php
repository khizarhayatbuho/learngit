
<?php
class Select_model extends CI_Model {
 
 function getPosts(){
  $this->db->select("id,title"); 
  $this->db->from('assignment');
  $query = $this->db->get();
  return $query->result();
 }
 
}
?>