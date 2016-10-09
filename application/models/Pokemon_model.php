<?php
class Pokemon_model extends CI_Model{

    public function __construct(){
        $this->load->database();
    }

    /* Fungsi ini me return semua record yang ada dalam tabel pokemon */
    public function get_all(){
        return $this->db->get('pokemon')->result();
    }

    /* Fungsi ini me return satu record dari tabel pokemon dalam bentuk object. 
     * Record yang di return adalah record dengan id $id 
     */
    public function get_one($id){
        // TODO: Modif bagian ini
        $data = $this ->pokemon_db->query('select*from pokemon '.$where);
		return $data->result_array();
    }

    /* Fungsi ini menginsertkan data ke dalam tabel pokemon.
     * Parameter $data berisi data yang akan diinsertkan dalam bentuk associative array
     * yang terdiri dari pasangan key=>value. Key adalan nama field, sedangkan value adalah
     * nilai field
     */
    public function insert($data){
        // TODO: Modif bagian ini
		$res = $this->pokemon_db->insert($pokemon,$data);
		return $res;
    }

    /* Fungsi ini mengupdate data ke dalam tabel pokemon yang memiliki id=$id.
     * Parameter $data berisi data yang akan diinsertkan dalam bentuk associative array
     * yang terdiri dari pasangan key=>value. Key adalan nama field, sedangkan value adalah
     * nilai field
     */
    public function update($data, $id){
        // TODO: Modif bagian ini
        $res = $this->pokemon_db->update($pokemon,$data,$where);
		return $res;
    }

    /* Fungsi ini menghapus satu record dari tabel pokemon yan memiliki id=$id*/
    public function delete($id){
        // TODO: Modif bagian ini
        $res = $this->pokemon_db->delete($pokemon,$where);
		return $res;
    }

}
