<?php
Class Usuario extends CI_Model
{
 function login($username, $password)
 {
   $this->db->select('id, nick, password, tipo');
   $this->db->from('usuario');
   $this->db->where('nick', $username);
   $this->db->where('password', MD5($password));
   $this->db->limit(1);

   $query = $this->db->get();

   if($query->num_rows() == 1)
   {
      //futuro poner imagen de usuario
     // foreach($query->result() as $row){
     //   $this->session->avatar = $row->tipo;
     // }
     return $query->result();
   }
   else
   {
     return false;
   }
 }

 function registro($username, $password){
    $this->db->select('nick');
     $this->db->from('usuario');
     $this->db->where('nick', $username);
     $this->db->limit(1);

     $query = $this->db->get();

     if($query->num_rows() == 1)
     {
       return false;
     }
     else
     {
        $data = array(
           'nick' => $username,
           'password' => md5($password),
           'tipo' => 'usuario'
        );

        $this->db->insert('usuario', $data);
        return true;
     }
 }

 function getTipo($nombre){
   $this->db->select('tipo');
     $this->db->from('usuario');
     $this->db->where('nick', $nombre);
     $this->db->limit(1);

     $query = $this->db->get();

     if($query->num_rows() == 1)
     {
       return $query;
     }
     else
     {
        return false;
     }
 }
}
?>