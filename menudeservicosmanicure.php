

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="https://production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="https://production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <title>Menu de Serviços Bounjour</title>
  
  
  
  
      <style>
      @import url(https://fonts.googleapis.com/css?family=Roboto:400,700,300);
ul {
  padding: 0;
  margin: 0;
}

li {
  list-style-type: none;
}

input[type='radio'] {
  display: none;
}

label {
  cursor: pointer;
}

::-webkit-scrollbar {
  display: none;
}

body .swanky {
  margin: auto;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

body {
  height: 100vh;
  font-weight: 500;
  font-family: "Roboto", sans-serif;
  background: -webkit-linear-gradient(315deg, #8254EA 0%, #E86DEC 100%);
  background: linear-gradient(135deg, #8254EA 0%, #E86DEC 100%);
  -webkit-font-smoothing: antialiased;
  font-size: 12px;
}
body .swanky {
  -webkit-perspective: 600px;
          perspective: 600px;
  width: 700px;
  position: absolute;
  margin: auto;
  height: 360px;
}
body .swanky_title {
  float: right;
  text-align: left;
  width: 400px;
  color: white;
  position: relative;
  top: 70px;
}
body .swanky_title__social a {
  position: relative;
  overflow: hidden;
  width: 140px;
  margin-right: 15px;
  text-decoration: none;
  padding: 0px 0px 5px 0px;
  height: 40px;
  border: 2px solid white;
  float: left;
  color: white;
  font-size: 12px;
  font-weight: 400;
  margin-top: 20px;
}
body .swanky_title__social a .slide {
  height: 45px;
  width: 100px;
  float: left;
  position: absolute;
  -webkit-transform: skew(20deg);
          transform: skew(20deg);
  left: -120px;
  -webkit-transition-property: left;
  transition-property: left;
  -webkit-transition-duration: .2s;
          transition-duration: .2s;
  background: white;
}
body .swanky_title__social a .slide .arrow {
  position: absolute;
  right: 31px;
  top: 24px;
  opacity: 0;
  -webkit-transform: skew(-20deg);
          transform: skew(-20deg);
}
body .swanky_title__social a .slide .arrow .stem {
  width: 10px;
  height: 2px;
  background: #858490;
}
body .swanky_title__social a .slide .arrow .point {
  width: 6px;
  height: 6px;
  border-right: 2px solid #858490;
  top: -3px;
  right: 1px;
  position: absolute;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  border-top: 2px solid #858490;
}
body .swanky_title__social a img {
  width: 16px;
  margin-left: 10px;
  position: relative;
  margin-right: 8px;
  -webkit-transition-property: margin-left;
  transition-property: margin-left;
  -webkit-transition-duration: .1s;
          transition-duration: .1s;
  margin-top: 10px;
  top: 4px;
}
body .swanky_title__social a:hover > .slide {
  left: -70px;
  -webkit-transition-property: left;
  transition-property: left;
  -webkit-transition-duration: .1s;
          transition-duration: .1s;
}
body .swanky_title__social a:hover > img {
  margin-left: 40px;
  -webkit-transition-property: margin-left;
  transition-property: margin-left;
  -webkit-transition-duration: .1s;
          transition-duration: .1s;
}
body .swanky_title__social a:hover > .slide .arrow {
  right: 11px;
  opacity: 1;
  -webkit-transition-property: right,opacity;
  transition-property: right,opacity;
  -webkit-transition-delay: .07s;
          transition-delay: .07s;
  -webkit-transition-duration: .2s;
          transition-duration: .2s;
}
body .swanky .intro {
  float: right;
  color: white;
  width: 370px;
  top: 50px;
  position: relative;
}
body .swanky .intro h1 {
  text-shadow: 0px 2px rgba(0, 0, 0, 0.26);
}
body .swanky .intro p {
  line-height: 20px;
  text-shadow: 0px 1px rgba(0, 0, 0, 0.26);
}
body .swanky_wrapper {
  width: 225px;
  height: auto;
  overflow: hidden;
  border-radius: 4px;
  background: #2a394f;
}
body .swanky_wrapper label {
  padding: 25px;
  float: left;
  height: 72px;
  border-bottom: 1px solid #293649;
  position: relative;
  width: 100%;
  color: #eff4fa;
  -webkit-transition: text-indent .15s, height .3s;
  transition: text-indent .15s, height .3s;
  box-sizing: border-box;
}
body .swanky_wrapper label img {
  margin-right: 10px;
  position: relative;
  top: 2px;
  width: 16px;
}
body .swanky_wrapper label span {
  position: relative;
  top: -3px;
}
body .swanky_wrapper label:hover {
  background: #212e41;
  border-bottom: 1px solid #2A394F;
  text-indent: 4px;
}
body .swanky_wrapper label:hover .bar {
  width: 100%;
}
body .swanky_wrapper label .bar {
  width: 0px;
  -webkit-transition: width .15s;
  transition: width .15s;
  height: 2px;
  position: absolute;
  display: block;
  background: #355789;
  bottom: 0;
  left: 0;
}
body .swanky_wrapper label .lil_arrow {
  width: 5px;
  height: 5px;
  -webkit-transition: transform 0.8s;
  -webkit-transition: -webkit-transform 0.8s;
  transition: -webkit-transform 0.8s;
  transition: transform 0.8s;
  transition: transform 0.8s, -webkit-transform 0.8s;
  -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
  border-top: 2px solid white;
  border-right: 2px solid white;
  float: right;
  position: relative;
  top: 6px;
  right: 2px;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}
body .swanky_wrapper__content {
  position: absolute;
  display: none;
  overflow: hidden;
  left: 0;
  width: 100%;
}
body .swanky_wrapper__content li {
  width: 100%;
  opacity: 0;
  left: -100%;
  background: #15a4fa;
  padding: 25px 0px;
  text-indent: 25px;
  box-shadow: 0px 0px #126CA1  inset;
  -webkit-transition: box-shadow .3s,text-indent .3s;
  transition: box-shadow .3s,text-indent .3s;
  position: relative;
}
body .swanky_wrapper__content li:hover {
  background: #0c93e4;
  box-shadow: 3px 0px #126CA1  inset;
  -webkit-transition: box-shadow .3s linear,text-indent .3s linear;
  transition: box-shadow .3s linear,text-indent .3s linear;
  text-indent: 31px;
}
body .swanky_wrapper__content .clear {
  clear: both;
}

input[type='radio']:checked + label .swanky_wrapper__content {
  display: block;
  top: 68px;
  border-bottom: 1px solid #212e41;
}

input[type="radio"]:checked + label > .lil_arrow {
  -webkit-transition: -webkit-transform 0.8s;
  transition: -webkit-transform 0.8s;
  transition: transform 0.8s;
  transition: transform 0.8s, -webkit-transform 0.8s;
  -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -webkit-transform: rotate(135deg);
  transform: rotate(135deg);
  border-top: 2px solid #14a3f9;
  border-right: 2px solid #14a3f9;
}

input[type='radio']:checked + label {
  height: 325px;
  background: #212e41;
  text-indent: 4px;
  -webkit-transition-property: height;
  transition-property: height;
  -webkit-transition-duration: .6s;
          transition-duration: .6s;
  -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

input[type='radio']:checked + label .bar {
  width: 0;
}

input[type='radio']:checked + label li:nth-of-type(1) {
  -webkit-animation: in 0.15s 0.575s forwards;
          animation: in 0.15s 0.575s forwards;
  -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -moz-animation: in 0.15s 0.575s forwards;
  -moz-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
input[type='radio']:checked + label li:nth-of-type(2) {
  -webkit-animation: in 0.15s 0.7s forwards;
          animation: in 0.15s 0.7s forwards;
  -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -moz-animation: in 0.15s 0.7s forwards;
  -moz-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
input[type='radio']:checked + label li:nth-of-type(3) {
  -webkit-animation: in 0.15s 0.825s forwards;
          animation: in 0.15s 0.825s forwards;
  -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -moz-animation: in 0.15s 0.825s forwards;
  -moz-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
input[type='radio']:checked + label li:nth-of-type(4) {
  -webkit-animation: in 0.15s 0.95s forwards;
          animation: in 0.15s 0.95s forwards;
  -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
  -moz-animation: in 0.15s 0.95s forwards;
  -moz-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

@-webkit-keyframes in {
  from {
    left: -100%;
    opacity: 0;
  }
  to {
    left: 0;
    opacity: 1;
  }
}

@keyframes in {
  from {
    left: -100%;
    opacity: 0;
  }
  to {
    left: 0;
    opacity: 1;
  }
}
.love {
  position: absolute;
  right: 20px;
  bottom: 0px;
  font-size: 11px;
  font-weight: normal;
}
.love p {
  color: white;
  font-weight: normal;
  font-family: 'Open Sans', sans-serif;
}
.love a {
  color: white;
  font-weight: 700;
  text-decoration: none;
}
.love img {
  position: relative;
  top: 3px;
  margin: 0px 4px;
  width: 10px;
}

.brand {
  position: absolute;
  left: 20px;
  bottom: 14px;
}
.brand img {
  width: 30px;
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

  <!-- / My brand -->
<div class='brand'>
  <a href='https://www.bounjour.com.br' target='_blank'>
    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/logo.png'>
  </a>
</div>
<!-- / Begin Body -->
<div class='swanky'>
  <!-- / Introduction Block -->
  <div class='swanky_title'>
    <h1>Opções de serviços Bounjour</h1>
    <p>Escolha a melhor opção, escolha Bounjour</p>
    <div class='swanky_title__social'>
      <a href='escolhadeservicoescova.php' target='_blank'>
        <div class='slide'>
          <div class='arrow'>
            <div class='stem'></div>
            <div class='point'></div>
          </div>
        </div>
      
        ESCOVA
      </a>
    </div>
    <div class='swanky_title__social'>
      <a href='escolhadeservicorelaxamento.php' target='_blank'>
        <div class='slide'>
          <div class='arrow'>
            <div class='stem'></div>
            <div class='point'></div>
          </div>
        </div>
        RELAXAMENTO
      </a>
    </div>
	<div class='swanky_title__social'>
      <a href='escolhadeservicohidratacao.php' target='_blank'>
        <div class='slide'>
          <div class='arrow'>
            <div class='stem'></div>
            <div class='point'></div>
          </div>
        </div>

        HIDRATAÇÃO
      </a>
    </div>
	<div class='swanky_title__social'>
      <a href='escolhadeservicomassagem.php' target='_blank'>
        <div class='slide'>
          <div class='arrow'>
            <div class='stem'></div>
            <div class='point'></div>
          </div>
        </div>
     
        MASSAGEM
      </a>
    </div>
	<div class='swanky_title__social'>
      <a href='escolhadeservicorpeemao.php' target='_blank'>
        <div class='slide'>
          <div class='arrow'>
            <div class='stem'></div>
            <div class='point'></div>
          </div>
        </div>
   
        PÉ E MÃO
      </a>
    </div>
	<div class='swanky_title__social'>
      <a href='https://www.codepen.io/jcoulterdesign/' target='_blank'>
        <div class='slide'>
          <div class='arrow'>
            <div class='stem'></div>
            <div class='point'></div>
          </div>
        </div>
     
        OUTROS
      </a>
    </div>
  </div>
 <!-- /////////// Begin Dropdown //////////// -->
  <div class='swanky_wrapper'>
    <input id='Dashboard' name='radio' type='radio'>
    <label for='Dashboard'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/dash.png'>
      <span>Agendamentos (em desenvolvimento)</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
          <li>Telefone</li>
          <li>Portal Online</li>
          <li>E-mail</li>
        </ul>
      </div>
    </label>
    <input id='Messages' name='radio' type='radio'>
    <label for='Messages'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/mess.png'>
      <span>Conheça nosso Site (em desenvolvimento)</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
          <li>www.bounjour.com.br</li>
        </ul>
      </div>
    </label>
    <input id='Settings' radio='radio' type='radio'>
    <label for='Settings'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/set.png'>
      <span>Acesso Restrito</span>
      <div class='lil_arrow'></div>
      <div class='swanky_wrapper__content'>
        <ul>
          <li> <a href="loginadmproducao.html">Dados de Acesso</li>
        </ul>
      </div>
    </label>
  </div>
  <!-- /////////// End Dropdown //////////// -->
  
</div>


  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script >
    /* No thanks! */
  //# sourceURL=pen.js
  </script>

  
  

</body>
</html>
 