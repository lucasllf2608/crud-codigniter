<?php

class Contato_model extends CI_Model {


	function listar(){

		$query = $this->db->get('contato');
		return $query->result();
	}

	function cadastrar($dados){
		if($dados != null){
			return $this->db->insert('contato', $dados);
		}
	}

	function remover($id){

		$this->db->where('id', $id);
		return $this->db->delete('contato');
	}

	function atualizar($dados){
			$this->db->where('id', $dados['id']);	
			return $this->db->update('contato', $dados);
	}
	


	function getContatoById($id){
		$sql = "SELECT id, nome, email, telefone FROM contato WHERE id = $id";
		$dados = $this->db->query($sql);
		return $dados;
		
	}


}


