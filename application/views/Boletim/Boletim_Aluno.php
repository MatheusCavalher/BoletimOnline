<div class="row justify-content-center mt-5">
    <div class="card w-100 h-100">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nome do Aluno:</label>
                        <p class="form-control"><b><?= $boletim[0]->nome_aluno; ?></b></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nível:</label>
                        <p class="form-control"><b><?= $boletim[0]->nivel_you_titulo; ?></b></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Data:</label>
                        <p class="form-control"><b><?= date('d/m/Y', strtotime($boletim[0]->data_boletim)); ?></b></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nome do Professor:</label>
                        <p class="form-control"><b><?= $boletim[0]->nome . ' ' . $boletim[0]->sobrenome ?></b></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Bimestre:</label>
                        <p class="form-control"><b><?= $boletim[0]->bimestre_boletim; ?>º</b></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Unidade:</label>
                        <p class="form-control"><b><?= $boletim[0]->nome_franquia; ?></b></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-center" style="width:100%">
                        <canvas id="canvas"></canvas>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-white text-center" id="criterio_1">
                        <label class="ml-3 mt-2">Criterio 1</label>
                        <p class="form-control text-center" style="border: 1px solid #C2DA00;"><b>Compreender e seguir
                                instruções e pedir ajuda.</b></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="text-white text-center" id="criterio_2">
                        <label class="ml-3 mt-2">Criterio 2</label>
                        <p class="form-control text-center" style="border: 1px solid #642390;"><b>Conversar brevemente
                                sobre coisas que fez.</b></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-white text-center" id="criterio_3">
                        <label class="ml-3 mt-2">Criterio 3</label>
                        <p class="form-control text-center" style="border: 1px solid #F50060;"><b>Fazer e responder
                                convites, sugestões e solicitações.</b></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-white text-center" id="criterio_4">
                        <label class="ml-3 mt-2">Criterio 4</label>
                        <p class="form-control text-center" style="border: 1px solid #F89c00;"><b>Compreender textos
                                mais longos sobre assuntos do dia a dia, mesmo sem compreender o significado de todas as
                                palavras.</b></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-white text-center" id="criterio_5">
                        <label class="ml-3 mt-2">Criterio 5</label>
                        <p class="form-control text-center" style="border: 1px solid #00BFBE;"><b>Escrever histórias em
                                inglês, usando ideias, figuras ou palavras dadas pelo professor.</b></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-white text-center" id="criterio_1">
                        <label class="ml-3 mt-2">Criterio 6</label>
                        <p class="form-control text-center" style="border: 1px solid #C2DA00;"><b>Conectar frases de
                                forma simples para descrever experiências e eventos.</b></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-white text-center" id="criterio_2">
                        <label class="ml-3 mt-2">Criterio 7</label>
                        <p class="form-control text-center" style="border: 1px solid #642390;"><b>Dar breves razões e
                                explicações para suas opiniões.</b></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-white text-center" id="criterio_3">
                        <label class="ml-3 mt-2">Criterio 8</label>
                        <p class="form-control text-center" style="border: 1px solid #F50060;"><b>Discorrer sobre um
                                problema de maneira simples.</b></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-white text-center" id="criterio_4">
                        <label class="ml-3 mt-2">Criterio 9</label>
                        <p class="form-control text-center" style="border: 1px solid #F89c00;"><b>Formular perguntas com
                                base em experiências com objetos, organismos e eventos em seu ambiente.</b></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-white text-center" id="criterio_5">
                        <label class="ml-3 mt-2">Criterio 10</label>
                        <p class="form-control text-center" style="border: 1px solid #00BFBE;"><b>Comparar, classificar
                                e sequenciar objetos, e organismos, de acordo com características diversas.</b></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-white text-center" id="criterio_1">
                        <label class="ml-3 mt-2">Criterio 11</label>
                        <p class="form-control text-center" style="border: 1px solid #C2DA00;"><b>Comunicar observações
                                com figuras, modelos e/ou palavras.</b></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-white text-center" id="criterio_2">
                        <label class="ml-3 mt-2">Criterio 12</label>
                        <p class="form-control text-center" style="border: 1px solid #642390;"><b>Comunicar-se com
                                outros grupos de modo a descrever os resultados de uma investigação.</b></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="text-white text-center" id="criterio_1">
                        <label class="ml-3 mt-2">Nota prova escrita</label>
                        <p class="form-control" style="border: 1px solid #C2DA00;">&nbsp;<b><?= $boletim[0]->nota_prova_escrita; ?></b></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-white text-center" id="criterio_1">
                        <label class="ml-3 mt-2">Avaliação Final</label>
                        <?php if($boletim[0]->avaliacao_final > 0 && $boletim[0]->avaliacao_final <= 13): ?>
                        <p class="form-control" style="border: 1px solid #C2DA00;"><b>Falhou miseravelmente e foi convidado a voltar um nível.</b></p>
                        <?php elseif($boletim[0]->avaliacao_final >= 14 && $boletim[0]->avaliacao_final <= 16): ?>
                        <p class="form-control" style="border: 1px solid #C2DA00;"><b>Reprovado. O aluno quase atingiu o mínimo necessário para ser aprovado, mas falhou por pouco.</b></p>
                        <?php elseif($boletim[0]->avaliacao_final >= 17 && $boletim[0]->avaliacao_final <= 20): ?>
                        <p class="form-control" style="border: 1px solid #C2DA00;"><b>Abaixo da média, o aluno está aprovado, porém terá dificuldades em alguns quesitos no futuro.</b></p>
                        <?php elseif($boletim[0]->avaliacao_final >= 21 && $boletim[0]->avaliacao_final <= 27): ?>
                        <p class="form-control" style="border: 1px solid #C2DA00;"><b>Dentro da média. Resultado esperado e dentro do previsto para o aluno nesta turma.</b></p>
                        <?php elseif($boletim[0]->avaliacao_final >= 28 && $boletim[0]->avaliacao_final <= 31): ?>
                        <p class="form-control" style="border: 1px solid #C2DA00;"><b>Acima da média, mas também não precisa se achar tanto.</b></p>
                        <?php elseif($boletim[0]->avaliacao_final >= 32 && $boletim[0]->avaliacao_final <= 34): ?>
                        <p class="form-control" style="border: 1px solid #C2DA00;"><b>Acima da média e se destaca sobre os demais.</b></p>
                        <?php elseif($boletim[0]->avaliacao_final >= 35 && $boletim[0]->avaliacao_final <= 36): ?>
                        <p class="form-control" style="border: 1px solid #C2DA00;"><b>Não deveria nem estar nesse nível</b></p>
                        <?php else: ?>
                        <p class="form-control" style="border: 1px solid #C2DA00;"><b>Será contratado pela You</b></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>