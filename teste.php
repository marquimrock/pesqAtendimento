<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Grafico de Barras com CSS</title>
<link rel="stylesheet" href="assets/css/bootstrap.css"/>
<link rel="stylesheet" href="assets/css/estilo.css"/>
</head>
<body>

  <br>
  <div class="container">
  <form class="form-horizontal">
    <div class="form-group has-error">
      <label for="disabledInput" class="col-sm-1 control-label">Ruim:</label>
      <div class="col-sm-2">
        <input class="form-control" type="text" placeholder="10%" disabled style="background-color: #FFCCFF; border-color: #FFCCFF; width:10%;">
      </div>
    </div>
    <div class="form-group has-warning">
      <label for="disabledInput" class="col-sm-1 control-label">Bom:</label>
      <div class="col-sm-2">
        <input class="form-control" type="text" placeholder="30%" disabled style="background-color: #FFFF00; border-color: #FFFF00; width:30%;">
      </div>
    </div>
    <div class="form-group has-success">
      <label for="disabledInput" class="col-sm-1 control-label">Otimo:</label>
      <div class="col-sm-2">
        <input class="form-control" type="text" placeholder="60%" disabled style="background-color: #7CFC00; border-color: #7CFC00; width:60%;">
      </div>
    </div>
  </form>
</div>


</body>
</html>

<!--
style="background-color: #FFCCFF; height:23px; width:15%;"

    <hr>

    <fieldset disabled>
      <div class="form-group">
        <label for="disabledTextInput" class="col-sm-2 control-label">Ruim:</label>
        <div class="col-sm-2">
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
        </div>
      </div>
      <div class="form-group">
        <label for="disabledTextInput" class="col-sm-2 control-label">Bom:</label>
        <div class="col-sm-2">
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
        </div>
      </div>
      <div class="form-group">
        <label for="disabledTextInput" class="col-sm-2 control-label">Otimo:</label>
        <div class="col-sm-2">
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input" >
        </div>
      </div>
    </fieldset>

    <hr>

    <div class="form-group has-error has-feedback">
      <label class="col-sm-2 control-label" for="inputError">Ruim:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="inputError">
        <span class="form-control-feedback"></span>
      </div>
    </div>
    <div class="form-group has-warning has-feedback">
      <label class="col-sm-2 control-label" for="inputWarning">Bom:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="inputWarning">
        <span class="form-control-feedback"></span>
      </div>
    </div>
    <div class="form-group has-success has-feedback">
      <label class="col-sm-2 control-label" for="inputSuccess">Otimo:</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="inputSuccess">
        <span class="form-control-feedback"></span>
      </div>
    </div>
-->
