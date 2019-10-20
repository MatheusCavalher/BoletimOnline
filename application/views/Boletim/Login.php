<div class="row justify-content-center ml-1 mr-1">
    <div class="card mb-4">
        <div class="card-body">
			<h6 class="text-justify"><p><b>Olá,</b></p>
			<p>Seja bem-vindo(a) à central de boletins online da YOU Bilíngue.</p>
			<p>Informe seu CPF para poder acessar!</p>
			</h6>
			
			<form action="<?= base_url() ?>/Boletim/logar" method="post">
				<div class="form-group text-center">
					<label>CPF:</label>
					<input type="text" class="form-control text-center" name="cpf_responsavel" id="cpf_responsavel">
				</div>
				<div class="form-group">
					<button type="submit" class="form-control btn btn-success" id="comecar">Começar!</button>
				</div>
			</form>

			<div class="text-center">
				<p id="aviso" style="color:red;"></p>
			</div>
				
			</div>
		</div>
	</div>
</div>	