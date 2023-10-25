<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="https://production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="https://production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <title>Escola Yroif</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
      <style>
      * {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

body {
  font-family: "Open Sans", sans-serif;
  background: -webkit-linear-gradient(left top, #1b1b1e, #333);
  background: linear-gradient(to right bottom, #1b1b1e, #333);
}

.container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  min-height: 100vh;
}

.list {
  -webkit-box-flex: 0;
      -ms-flex: 0 20rem;
          flex: 0 20rem;
}

.list__item {
  position: relative;
}
.list__item:hover .label {
  color: #009688;
}
.list__item:hover .label::before {
  border: 0.5rem solid #009688;
  margin-right: 2rem;
}

.radio-btn {
  display: none;
}
.radio-btn:checked + .label {
  color: #009688;
}
.radio-btn:checked + .label::before {
  margin-right: 2rem;
  border: 0.5rem solid #009688;
  background: #fff;
}

.label {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  padding: 1rem 0;
  color: #fff;
  font-size: 1.25rem;
  text-transform: uppercase;
  cursor: pointer;
  -webkit-transition: all 0.25s linear;
  transition: all 0.25s linear;
}

.label::before {
  display: block;
  height: 1.125rem;
  width: 1.125rem;
  margin-right: 0.625rem;
  content: "";
  border: 0.5rem solid #fff;
  border-radius: 50%;
  -webkit-transition: all 0.25s linear;
  transition: all 0.25s linear;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

    </style>

  <script>
  window.console = window.console || function(t) {};
</script>
  
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

</head>

<body translate="no" >
    
<form id="cadastro" name="cadastro" method="post" action="cadastroservicoescova.php" onsubmit="return validaCampo(); return false;">
  <div class="container">
 <ul class="list">
<br>
<tr>
      
      <td width="546"><input name="codigocli" type="text" id="codigocli" size="70" maxlength="60" placeholder="DIGITE O CODIGO DO CLIENTE" />
        </td>
    </tr>
  <br>
  <li class="list__item">
   <input type="radio" class="radio-btn" name="servico1" value="Escova" id="servico1" />
   <label for="servico1" class="label">Corte Estilizado Feminino</label>
  </li>  <li class="list__item">   <input type="radio" class="radio-btn" name="servico2" value="Escova" id="servico2" />   <label for="servico2" class="label">Corte Estilizado Masculino</label>  </li>  <li class="list__item">   <input type="radio" class="radio-btn" name="servico3" value="Escova" id="servico3" />   <label for="servico3" class="label">Corte Infantil</label>  </li>  <li class="list__item">   <input type="radio" class="radio-btn" name="servico4" value="Escova" id="servico4" />   <label for="servico4" class="label">Escova</label>  </li>  <li class="list__item">   <input type="radio" class="radio-btn" name="servico5" value="Escova" id="servico5" />   <label for="servico5" class="label">Corte Estilizado Masculino</label>  </li>  <li class="list__item">   <input type="radio" class="radio-btn" name="servico6" value="Escova" id="servico6" />   <label for="servico6" class="label">Corte Estilizado Masculino</label>  </li>   <center><input name="cadastrar" class="button" type="submit" id="cadastrar" value="Mais Serviços" /></center>
   
   <br>
   <center><input name="cadastrar" class="button" type="submit" id="cadastrar" value="CONCLUIR MINHA ESCOLHA" /></center>
   
  </li>
 </ul>
</div>
</body>
</html>
 