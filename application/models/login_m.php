<?php 
/*model design by Ismarianto Putra Tech Programing
 * http://minangopensource.blogspot.com 
 *
 *
*/
class login_m extends CI_model
{
	
 public function admin($username='',$password='')
 {
  return $this->db->query("SELECT * from admin where username='$username' AND password='$password' limit 1");
 }

 public function pegawai($username='',$password='')
 {
  return $this->db->query("SELECT * from pegawai where username='$username' AND password='$password' limit 1");
 }

}