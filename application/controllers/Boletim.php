<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boletim extends CI_Controller {

	public function verificar_sessao() {
        if ($this->session->userdata('logado') == false) {
            redirect('Boletim/login');
        }
	}
	
	public function logout() {

        $this->db->where('cpf_responsavel', $_SESSION['cpf_responsavel']);
        date_default_timezone_set('America/Sao_Paulo');
        $dataSaida['time_leave'] = date('Y-m-d H:i:s', time());
        $this->db->update('responsavel_aluno', $dataSaida);

        $this->session->sess_destroy();
        redirect('Boletim');
    }

	public function index() {
        $this->verificar_sessao();
        $this->load->model('Boletim_model');

        $responsavel_id = $_SESSION['responsavel_id'];
        
        $filhos['id_filhos'] = $this->Boletim_model->getAllFilhos($responsavel_id);

        $this->load->view('Includes/Html_Header');
        $this->load->view('Boletim/Listagem_Alunos', $filhos);
        $this->load->view('Includes/Html_Footer');
	}

	public function login() {
		$this->load->view('Includes/Html_Header');
        $this->load->view('Boletim/Login');
		$this->load->view('Includes/Html_Footer');
    }

	function valid_cpf($cpf) {
        // Verifiva se o número digitado contém todos os digitos
        $cpf = str_pad(preg_replace('/[^0-9]/', '', $cpf), 11, '0', STR_PAD_LEFT);
    
        // Verifica se nenhuma das sequências abaixo foi digitada, caso seja, retorna falso
        if (strlen($cpf) != 11 ||
            $cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999') {
            return FALSE;
        } else {
            // Calcula os números para verificar se o CPF é verdadeiro
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
    
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return FALSE;
                }
            }
            return TRUE;
        }
	}
	
	public function logar() {
        $cpf = trim($this->input->post('cpf_responsavel'));

        $this->db->where('cpf_responsavel', $cpf);
        $data['cpf_responsavel'] = $this->db->get('responsavel_aluno')->result();

        $validacao = $this->valid_cpf($cpf);

        if ($validacao == true) {
            if (count($data['cpf_responsavel']) == 1) {
                   
				$dados['responsavel_id'] = $data['cpf_responsavel'][0]->responsavel_id;
				$dados['nome_responsavel'] = $data['cpf_responsavel'][0]->nome_responsavel;   
				$dados['cpf_responsavel'] = $data['cpf_responsavel'][0]->cpf_responsavel;
				$dados['email_responsavel'] = $data['cpf_responsavel'][0]->email_responsavel;
				$dados['logado'] = true;
				
				$this->db->where('cpf_responsavel', $cpf);
				date_default_timezone_set('America/Sao_Paulo');
				$dataEntrada['last_entry'] = date('Y-m-d H:i:s', time());
				$this->db->update('responsavel_aluno', $dataEntrada);
				
				$this->session->set_userdata($dados);

				echo json_encode("success");
                   
            } else {
                echo json_encode("CPF não cadastrado em nosso banco de dados!");
            }
        } else {
            echo json_encode("CPF não é válido");
        } 
	}
	
	function Visualizar($aluno_id = null, $turma_id = null) {
        //$this->verificar_sessao();
        
        $this->load->model('Boletim_model');
        $dadosCriterios['criterios'] = $this->Boletim_model->getAllDadosBoletimAlunosTurma($turma_id);

        $arr_length = count($dadosCriterios['criterios']);

        //echo "<pre>";
        //print_r($arr_length);
        //echo "<pre>";

        $criterio_1 = 0;
        $criterio_2 = 0;
        $criterio_3 = 0;
        $criterio_4 = 0;
        $criterio_5 = 0;
        $criterio_6 = 0;
        $criterio_7 = 0;
        $criterio_8 = 0;
        $criterio_9 = 0;
        $criterio_10 = 0;
        $criterio_11 = 0;
        $criterio_12 = 0;
        $media_criterio_1 = 0;
        $media_criterio_2 = 0;
        $media_criterio_3 = 0;
        $media_criterio_4 = 0;
        $media_criterio_5 = 0;
        $media_criterio_6 = 0;
        $media_criterio_7 = 0;
        $media_criterio_8 = 0;
        $media_criterio_9 = 0;
        $media_criterio_10 = 0;
        $media_criterio_11 = 0;
        $media_criterio_12 = 0;

        for ($i = 0; $i < $arr_length; $i++) {

            $criterio_1 = $criterio_1 + $dadosCriterios['criterios'][$i]->comp_seguir_inst_ajuda;
            $criterio_2 = $criterio_2 + $dadosCriterios['criterios'][$i]->conv_brev_fez;
            $criterio_3 = $criterio_3 + $dadosCriterios['criterios'][$i]->fazer_resp_conv_sug_sol;
            $criterio_4 = $criterio_4 + $dadosCriterios['criterios'][$i]->comp_texto_comp_sig;
            $criterio_5 = $criterio_5 + $dadosCriterios['criterios'][$i]->esc_hist_ing_prof;
            $criterio_6 = $criterio_6 + $dadosCriterios['criterios'][$i]->conc_frases_exp_eve;
            $criterio_7 = $criterio_7 + $dadosCriterios['criterios'][$i]->brev_raz_opn;
            $criterio_8 = $criterio_8 + $dadosCriterios['criterios'][$i]->disc_prob_simp;
            $criterio_9 = $criterio_9 + $dadosCriterios['criterios'][$i]->form_perg_exp_amb;
            $criterio_10 = $criterio_10 + $dadosCriterios['criterios'][$i]->comp_class_carac_div;
            $criterio_11 = $criterio_11 + $dadosCriterios['criterios'][$i]->com_obs_fig_pal;
            $criterio_12 = $criterio_12 + $dadosCriterios['criterios'][$i]->com_grp_desc_invest;

        }

        $media_criterio_1 = $criterio_1 / $arr_length;
        $media_criterio_2 = $criterio_2 / $arr_length;
        $media_criterio_3 = $criterio_3 / $arr_length;
        $media_criterio_4 = $criterio_4 / $arr_length;
        $media_criterio_5 = $criterio_5 / $arr_length;
        $media_criterio_6 = $criterio_6 / $arr_length;
        $media_criterio_7 = $criterio_7 / $arr_length;
        $media_criterio_8 = $criterio_8 / $arr_length;
        $media_criterio_9 = $criterio_9 / $arr_length;
        $media_criterio_10 = $criterio_10 / $arr_length;
        $media_criterio_11 = $criterio_11 / $arr_length;
        $media_criterio_12 = $criterio_12 / $arr_length;

        

        $dados = [
            'boletim' => $this->Boletim_model->getBoletimFilho($aluno_id),
            'count' => $arr_length,
            'criterio_1' => $media_criterio_1,
            'criterio_2' => $media_criterio_2,
            'criterio_3' => $media_criterio_3,
            'criterio_4' => $media_criterio_4,
            'criterio_5' => $media_criterio_5,
            'criterio_6' => $media_criterio_6,
            'criterio_7' => $media_criterio_7,
            'criterio_8' => $media_criterio_8,
            'criterio_9' => $media_criterio_9,
            'criterio_10' => $media_criterio_10,
            'criterio_11' => $media_criterio_11,
            'criterio_12' => $media_criterio_12
		];
		
		$this->load->view('Includes/Html_Header');
        $this->load->view('Boletim/Boletim_Aluno', $dados);
		$this->load->view('Includes/Html_Footer');
	}

}