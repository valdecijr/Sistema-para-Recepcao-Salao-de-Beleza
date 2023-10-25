<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="https://production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="https://production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <title>Escolha Bounjour</title>
  
  
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

<form id="cadastro" name="cadastro" method="post" action="cadastroopcaotradution.php" onsubmit="return validaCampo(); return false;">
  <div class="container">
 <ul class="list">
<br>
<tr>
      
      <td width="546"><input name="nome" type="text" id="nome" size="70" maxlength="60" placeholder="TYPE YOUR NAME" />
        </td>
    </tr>
  <br>
  <br>
  <br>
  <br>
  <li class="list__item">
   <input type="radio" class="radio-btn" name="escova" id="escova" />
   <label for="escova" class="label">Brush in the hair</label>
  </li>
  <li class="list__item">
   <input type="radio" class="radio-btn" name="hidratacao" id="hidratacao" />
   <label for="hidratacao" class="label">Capillary hydration</label>
  </li>
  <li class="list__item">
   <input type="radio" class="radio-btn" name="maoepe" id="maoepe" />
   <label for="maoepe" class="label">Hands and feet</label>
  </li>
  <br>
  
  
   <br>
   <br>
   <center><input name="cadastrar" class="button" type="submit" id="cadastrar" value="Complete my choice" /></center>
   
  </li>
 </ul>
</div>
</body>
</html>
 