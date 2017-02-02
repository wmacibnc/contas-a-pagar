<?php include("header.php");  ?>

<div class="container">
  <div id="top" class="row">
    <div class="col-md-3">
      <h2>Contas à Pagar</h2>
    </div>

    <div class="col-md-6">
      <div class="input-group h2">
        <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Contas à Pagar">
        <span class="input-group-btn">
          <button class="btn btn-primary" type="submit">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-md-3">
      <a href="novo.php" class="btn btn-primary pull-right h2">Nova Conta</a>
    </div>
  </div>
</div>

<div class="container">
  <div id="mes" class="row">
    <div class="col-md-12">

      <?php
      $mes = date("m");
      $ano = date("Y");
      $situacao = false;
      
      ?>

      <div class="col-md-2">
        <div class="form-group">
          <select name="mes" class="form-control">
            <?php
            foreach($arr_meses as $mes => $meses) {             
             print("<option value=\"$mes\"");
             if ($mes == date("m")){ print("selected"); }
             print(">$meses ");
           }
           ?>
         </select>
       </div>
     </div>

     <div class="col-md-2">
       <div class="form-group">
         <select name="ano" class="form-control">
          <?php
          for ($i = date("Y"); $i <= date("Y") + 10; $i++) {
           print("<option value=\"$i\"");
           print(">$i ");
         }
         ?>
       </select>
     </div>
   </div>

 </div>
</div>
</div>


<form class="form-horizontal">
  <fieldset>
    <div class="container">
      <table class="table table-striped table-bordered" id="example">
        <thead>
          <tr>
            <th>#</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th>Situação</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT ID, DESCRICAO, VALOR FROM CONTA WHERE ATIVO = '1' ORDER BY DESCRICAO";
          $result = $con->query($query);
          while($conta = $result->fetch_array(MYSQLI_ASSOC)){

            $query2 = "SELECT ID FROM PAGAMENTO WHERE ID_CONTA = ".$conta['ID']." AND MES = ".$mes." AND ANO = ".$ano."";

            echo "<tr>";
            echo "<td>".$conta['ID']."</td>";
            echo "<td>".$conta['DESCRICAO']."</td>";
            echo "<td>".$conta['VALOR']."</td>";
            
            if(mysqli_num_rows($con->query($query2)) > 0){
              $situacao = true;
              echo "<td>Pago</td>";
            }else{
              $situacao = false;
              echo "<td>Em aberto</td>";
            }

            echo "<td> <div class='btn-group'><a class='btn btn-danger'  href='#' data-toggle='modal' data-target='#delete-modal' data-customer='".$conta['ID']."'>Excluir</a></div>";

            if(!$situacao){
              echo " <div class='btn-group'><a class='btn btn-warning'  href='#' data-toggle='modal' data-target='#pagamento-modal' data-customer='".$conta['ID']."'> Pagar </a></div>";
            }else{
              echo " <div class='btn-group'><a class='btn btn-warning'  href='#' data-toggle='modal' data-target='#estorno-modal' data-customer='".$conta['ID']."'>Estornar</a></div>";  
            }

            echo " <div class='btn-group'><a class='btn btn-info'  href='visualizar.php/".$conta['ID']."'>Visualizar</a></div></td>";

            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </fieldset>
</form>


<!-- Modal DELETE -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Conta</h4>
      </div>
      <div class="modal-body">Deseja realmente excluir este item? </div>
      <div class="modal-footer">
        <a id="confirm" class="btn btn-primary" href="#">Sim</a>
        <a id="cancelar" class="btn btn-default" data-dismiss="modal">N&atilde;o</a>
      </div>
    </div>
  </div>
</div>


<!-- Modal pagamento -->
<div class="modal fade" id="pagamento-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Pagar Conta</h4>
      </div>
      <div class="modal-body">Deseja realmente pagar este item? </div>
      <div class="modal-footer">
        <a id="confirm" class="btn btn-primary" href="#">Sim</a>
        <a id="cancelar" class="btn btn-default" data-dismiss="modal">N&atilde;o</a>
      </div>
    </div>
  </div>
</div>

<!-- Modal DELETE -->
<div class="modal fade" id="estorno-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Estornar Pagamento</h4>
      </div>
      <div class="modal-body">Deseja realmente estornar este pagamento? </div>
      <div class="modal-footer">
        <a id="confirm" class="btn btn-primary" href="#">Sim</a>
        <a id="cancelar" class="btn btn-default" data-dismiss="modal">N&atilde;o</a>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php");  ?>
