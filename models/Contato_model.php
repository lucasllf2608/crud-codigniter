<?php

class Contato_model extends CI_Model {


	function listar(){

		$query = $this->db->get('tb_contato');
		return $query->result();
	}

	function cadastrar($dados){
		if($dados != null){
			return $this->db->insert('tb_contato', $dados);
	}
}

	function remover($id){

		$this->db->where('id', $id);
		return $this->db->delete('tb_contato');
	}

	function atualizar($dados){
			$this->db->where('id', $dados['id']);	
			return $this->db->update('tb_contato', $dados);
	}
	


	function getContatoById($id){
		$sql = "SELECT id, nome, email, telefone FROM tb_contato WHERE id = $id";
		$dados = $this->db->query($sql);
		return $dados;
		
	}


}


