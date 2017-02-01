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
        echo date("m/Y");
       ?>
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
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $query = "SELECT ID, DESCRICAO, VALOR FROM CONTA ";
          $result = $con->query($query);
          while($conta = $result->fetch_array(MYSQLI_ASSOC)){
            echo "<tr>";
            echo "<td>".$conta['ID']."</td>";
            echo "<td>".$conta['DESCRICAO']."</td>";
            echo "<td>".$conta['VALOR']."</td>";
            echo "<td><a class='btn btn-danger btn-xs'  href='#' data-toggle='modal' data-target='#delete-modal' data-customer='123'>Excluir</a></td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </fieldset>
</form>


<!-- Modal -->
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

<?php include("footer.php");  ?>
