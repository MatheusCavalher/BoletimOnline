<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Boletim_model extends CI_Model {

    function getFilhosComBoletim($aluno_id = null) {
        $this->db->select('*');
        $this->db->from('boletim_junior b');
        $this->db->join('nivel_you ny', 'b.nivel_id = ny.nivel_you_id');
        $this->db->join('usuarios u', 'u.Id = b.professor_id');
        $this->db->join('franquia f', 'f.ID_franquia = b.unidade_id');
        $this->db->join('alunos a', 'b.aluno_id = a.aluno_id');
        $this->db->where('b.aluno_id', $aluno_id);
        $query = $this->db->get();
        return $query->result();
    }

    function getAllFilhos($responsavel_id = null){
        $this->db->select('aluno_id');
        $this->db->from('alunos a');
        $this->db->join('responsavel_aluno ra', 'a.responsavel_id = ra.responsavel_id');
        $this->db->join('franquia f', 'f.ID_franquia = a.unidade_id');
        $this->db->join('nivel_you ny', 'a.nivel_id = ny.nivel_you_id');
        $this->db->where('a.responsavel_id', $responsavel_id);
        $query = $this->db->get();
        return $query;
    }

    function getBoletimFilho($aluno_id = null){
        $this->db->select('*');
        $this->db->from('boletim_junior b');
        $this->db->join('nivel_you ny', 'b.nivel_id = ny.nivel_you_id');
        $this->db->join('usuarios u', 'u.Id = b.professor_id');
        $this->db->join('franquia f', 'f.ID_franquia = b.unidade_id');
        $this->db->join('alunos a', 'b.aluno_id = a.aluno_id');
        $this->db->where('b.aluno_id', $aluno_id);
        $query = $this->db->get();
        return $query->result();
    }

    function getAllDadosBoletimAlunosTurma($turma_id = null) {
        $this->db->select('comp_seguir_inst_ajuda, conv_brev_fez, fazer_resp_conv_sug_sol, comp_texto_comp_sig, esc_hist_ing_prof, conc_frases_exp_eve, brev_raz_opn, disc_prob_simp, form_perg_exp_amb, comp_class_carac_div, com_obs_fig_pal, com_grp_desc_invest');
        $this->db->from('boletim_junior');
        $this->db->where('turma_id', $turma_id);
        $query = $this->db->get();
        return $query->result();
    }
}