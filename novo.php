<?php include("header.php");  ?>
    <!-- Put your page content here! -->

<form>
    <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Cadastro de Contas à Pagar</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Descrição</label>  
  <div class="col-md-8">
  <input id="textinput" name="textinput" type="text" placeholder="Informe a descrição da Conta. Ex: Água, Luz, Telefone." class="form-control input-md">
  <span class="help-block">Informe a descrição da Conta</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="diaVencimento">Dia de Vencimento</label>  
  <div class="col-md-4">
  <input id="diaVencimento" name="diaVencimento" type="text" placeholder="DD" class="form-control input-md">
  <span class="help-block">Informe o Dia de Vencimento</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="mesVencimento">Mês de Vencimento</label>  
  <div class="col-md-4">
  <input id="mesVencimento" name="mesVencimento" type="text" placeholder="MM" class="form-control input-md">
  <span class="help-block">Informe o Mês de Vencimento</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="valor">Valor (R$):</label>  
  <div class="col-md-4">
  <input id="valor" name="valor" type="text" placeholder="Ex: R$ 20,00" class="form-control input-md">
  <span class="help-block">Informe o Valor</span>  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="parcelas">Parcelas</label>
  <div class="col-md-4">
    <select id="parcelas" name="parcelas" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="recorrente">Recorrente</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="recorrente-0">
      <input type="radio" name="recorrente" id="recorrente-0" value="1" checked="checked">
      Sim
    </label>
    </div>
  <div class="radio">
    <label for="recorrente-1">
      <input type="radio" name="recorrente" id="recorrente-1" value="0">
      Não
    </label>
    </div>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="buttonEnviar">Salvar</label>
  <div class="col-md-8">
    <button id="buttonEnviar" name="buttonEnviar" class="btn btn-success">Salvar</button>
    <button id="buttonCancelar" name="buttonCancelar" class="btn btn-danger">Cancelar</button>
  </div>
</div>

</fieldset>
</form>

</form>


<?php include("footer.php");  ?>
