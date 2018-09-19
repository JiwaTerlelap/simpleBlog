<?php
class M_aksi extends CI_Model
{
	function delete($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
  	}
  	function edit_data($where, $table){
  		return $this->db->get_where($table, $where);
  	}
  	function get_slug($slug = NULL){
  		$query = $this->db->get_where('blog', array('slug_blog' => $slug))->row();
  		return $query;
  	}
  	function validasi($data){
  		$query = $this->db->get_where('user', $data);
  		return $query;
  	}
    function get_blog($page){
      $offset = 3*$page;
      $limit = 3;
      $query = $this->db->query("SELECT * FROM blog ORDER BY DESC limit $offset, $limit")->result();
      return $query;
    }
}

?>