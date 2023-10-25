

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="https://production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="https://production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <title>CodePen - Radio Button Header</title>
  
  
  
  
      <style>
      html {
  height: 100%;
}

body {
  background: #f7f7f7;
  font-family: 'Trebuchet MS', arial, san-serif;
  height: 100%;
}

.column--empty {
  display: none;
  float: left;
  height: 100%;
  width: 100%;
}
@media screen and (min-width: 50em) {
  .column--empty {
    display: inherit;
    width: 25%;
  }
}

.column--content {
  float: left;
  width: 100%;
}
@media screen and (min-width: 50em) {
  .column--content {
    width: 75%;
  }
}

.field__content {
  background: #fff;
  height: 100px;
  width: 50%;
}

input[type="text"] {
  border: 1px solid #bbb;
  border-radius: 4px;
  display: block;
  margin-bottom: .5em;
  padding: 1em;
}

.field__container {
  -webkit-backface-visibility: hidden;
  border-bottom: 1px solid #bbb;
  display: block;
  padding: 1em;
  position: relative;
  transition: display 5s ease;
}
.field__container:last-of-type {
  border-bottom: 0px;
}

.field--accordion {
  background: #fff;
  border: 1px solid #bbb;
  border-radius: 4px;
  width: 100%;
}
@media screen and (min-width: 50em) {
  .field--accordion {
    width: 50%;
  }
}

input[type='radio'] {
  display: block;
  opacity: 0;
  position: absolute;
}
input[type='radio'] + label {
  clear: none;
  cursor: pointer;
  display: block;
  margin: 0 0 1em 0;
  padding: 0px 0 0px 1.5em;
  position: relative;
}

div:not(#foo) > input[type='radio'] + label > .sad-span-button::before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  border-radius: 50%;
  border: solid 2px #bbb;
  height: 1em;
  width: 1em;
}

div:not(#foo) > input[type='radio']:checked + label > .sad-span-button::after {
  position: absolute;
  content: "";
  top: 0.3065em;
  left: 0.3065em;
  height: .6em;
  width: .6em;
  border-radius: 50%;
  background: #004665;
}

.field--accordion input[type="radio"] {
  left: 0;
}
.field--accordion input[type="radio"] + label {
  position: relative;
  left: 0em;
}
.field--accordion input[type="radio"]:checked + label {
  position: relative;
  left: -1.5em;
  font-size: 1.5em;
  transition: font-size .333s ease .2s, left .333s ease .6s;
}
.field--accordion input[type="radio"]:checked + label .sad-span-button {
  opacity: 0;
  left: -1.5em;
  transition: opacity .333s ease .1s;
}

    </style>

  <script>
  window.console = window.console || function(t) {};
</script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

</head>

<body translate="no" >

  <div class="column--empty">
</div>
<div class="column--content">
  <form id="cadastro" name="cadastro" method="post" action="cadastroopcoesmanicure.php" onsubmit="return validaCampo(); return false;">
    <div class="field--accordion">  
      <div class="field__container">  
        <input type="radio" name="recog" id="recog_yes" value="0" />
          <label for="recog_yes">Serviços Manicure
            <span class="sad-span-button"></span>
          </label>
          <div class="field__content">
            <input type="text" name="mao" id="mao" value="mao"/>
            <input type="text" name="pe" id="pe" value="pe"/>
          </div><!-- End first field content -->
      </div><!-- End first field -->
       
      
		   <br>
		   
         </div><!-- End third field content -->
      </div><!-- End third field -->
	  
	  <center><input name="cadastrar" class="button" type="submit" id="cadastrar" value="CONCLUIR MINHA ESCOLHA" /></center>
      
    </div><!-- End accordion -->
  </form>
</div><!-- End wrapper column -->
    <script src="//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>

  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script >
    /* Chris Coyier and Lea Verou for the radio buttons. */

$(function(){
    $('.field--accordion div .field__content').hide();

    $('.field--accordion input[type="radio"]').click(function() {
       $('.field--accordion div .field__content').hide();   

        
        $(this).prop("checked", true);

        if($(this).is(":checked")){
          $("div .field__content").eq($(this).val()).show();
        }
        
     e.preventDefault();
    });
});
  //# sourceURL=pen.js
  </script>

  
  

</body>
</html>
 