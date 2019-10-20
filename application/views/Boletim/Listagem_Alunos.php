<a href="<?= base_url() ?>Boletim/logout" class="btn btn-danger float-right mt-4 mb-4">Deslogar <i class="fas fa-sign-out-alt"></i></a>
<h4 class="float-left mt-4 mb-4">Bem vindo(a), <?= $_SESSION['nome_responsavel']; ?></h4>
<br>
<div class="table-responsive mt-4">
  <table class="table table-md">
    <thead>
        <tr>
        <th scope="col" class="text-center">Nome Aluno</th>
        <th scope="col" class="text-center">Unidade</th>
        <th scope="col" class="text-center">Turma</th>
        <th scope="col" class="text-center">Boletim</th>
        </tr>
    </thead>
    <tbody>

    <?php
    
    $this->load->model('Boletim_model');

    foreach ($id_filhos->result() as $filho) { 
      $data['filho'] = $this->Boletim_model->getBoletimFilho($filho->aluno_id);

      //echo "<pre>";
      //print_r($data['filho']);
      //echo "<pre>";
      

      if ($data['filho'] == null): ?>
      <tr>
            <th scope="row" class="text-center"></th>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
      </tr>      
      <?php else: ?> 
            <tr>
                <th scope="row" class="text-center"><?= $data['filho'][0]->nome_aluno ?></th>
                <td class="text-center"><?= $data['filho'][0]->nome_franquia ?></td>
                <td class="text-center"><?= $data['filho'][0]->nivel_you_titulo ?></td>
                <td class="text-center">
                    <a href="<?= base_url("Boletim/Visualizar/" .  $data['filho'][0]->aluno_id . '/' .  $data['filho'][0]->turma_id) ?>" class="btn btn-success" role="button">Visualizar <i class="fas fa-eye"></i></a>
                </td>
            </tr>
    <?php endif; ?> 
      <?php } ?> 
    </tbody>
  </table>
</div>