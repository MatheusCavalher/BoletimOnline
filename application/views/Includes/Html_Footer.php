</div>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" type="text/javascript"></script>
<script src="<?= base_url(); ?>assets/js/mascara_input.js" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/41612f29ef.js"></script>
<script type="text/javascript">
     $("#comecar").click(function (event) {
          event.preventDefault();

          var cpf_responsavel = document.getElementById("cpf_responsavel").value;

          $.ajax({
               type: "POST",
               url: "<?php echo base_url(); ?>" + "Boletim/logar",
               dataType: 'json',
               data: {cpf_responsavel: cpf_responsavel},
               success: function (dados) {
                    if (dados === "success")
                         window.location.href = "<?php echo base_url(); ?>" + "Boletim";
                    else
                         $('#aviso').html(dados);
               }
          });
     });
</script>
<script>
     var randomScalingFactor = function() {
          return Math.round(Math.random() * 50);
     };

     var color = Chart.helpers.color;
     var config = {
          type: 'radar',
          data: {
               labels: ['Critério 1', 'Critério 2', 'Critério 3', 'Critério 4', 'Critério 5', 'Critério 6', 'Critério 7','Critério 8','Critério 9','Critério 10','Critério 11','Critério 12'],
               datasets: [{
                    label: '<?= $boletim[0]->nome_aluno; ?>',
                    backgroundColor: color(window.chartColors.red).alpha(0.2).rgbString(),
                    borderColor: window.chartColors.red,
                    pointBackgroundColor: window.chartColors.red,
                    data: [
                         <?= $boletim[0]->comp_seguir_inst_ajuda; ?>,
                         <?= $boletim[0]->conv_brev_fez; ?>,
                         <?= $boletim[0]->fazer_resp_conv_sug_sol; ?>,
                         <?= $boletim[0]->comp_texto_comp_sig; ?>,
                         <?= $boletim[0]->esc_hist_ing_prof; ?>,
                         <?= $boletim[0]->conc_frases_exp_eve; ?>,
                         <?= $boletim[0]->brev_raz_opn; ?>,
                         <?= $boletim[0]->disc_prob_simp; ?>,
                         <?= $boletim[0]->form_perg_exp_amb; ?>,
                         <?= $boletim[0]->comp_class_carac_div; ?>,
                         <?= $boletim[0]->com_obs_fig_pal; ?>,
                         <?= $boletim[0]->com_grp_desc_invest; ?>
                    ]
               }, {
                    label: '<?= $boletim[0]->nivel_you_titulo; ?>',
                    backgroundColor: color(window.chartColors.blue).alpha(0.2).rgbString(),
                    borderColor: window.chartColors.blue,
                    pointBackgroundColor: window.chartColors.blue,
                    data: [
                         <?= $criterio_1; ?>,
                         <?= $criterio_2; ?>,
                         <?= $criterio_3; ?>,
                         <?= $criterio_4; ?>,
                         <?= $criterio_5; ?>,
                         <?= $criterio_6; ?>,
                         <?= $criterio_7; ?>,
                         <?= $criterio_8; ?>,
                         <?= $criterio_9; ?>,
                         <?= $criterio_10; ?>,
                         <?= $criterio_11; ?>,
                         <?= $criterio_12; ?>
                    ]
               }]
          },
          options: {
               legend: {
                    position: 'top',
               },
               title: {
                    display: true,
                    text: 'Desempenho do aluno'
               },
               scale: {
                    display: true,
                    ticks: {
                         beginAtZero: true,
                         callback: function() {return ""}
                    }
               }
          }
     };

     window.onload = function() {
          window.myRadar = new Chart(document.getElementById('canvas'), config);
     };

</script>
</body>
</html>