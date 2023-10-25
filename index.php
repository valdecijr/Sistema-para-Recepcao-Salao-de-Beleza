

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="https://production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="https://production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <title>Instituto Yroif</title>
  
  
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>

      <style>
      @import url(https://fonts.googleapis.com/css?family=Nunito:400,700,300);
* {
  box-sizing: border-box;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

body {
  font-family: 'Nunito', sans-serif;
  background: #2C363F;
}
body .container {
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  width: 660px;
  margin: auto;
}
body .container a.download, body .container a.follow {
  text-align: center;
  margin-top: 80px;
  width: 300px;
  float: left;
  display: inline-block;
  padding: 16px 30px;
  background: #41EFB6;
  color: white;
  font-weight: 900;
  font-family: 'nunito';
  text-decoration: none;
  border-radius: 4px;
  margin-right: 12px;
}
body .container a.download i, body .container a.follow i {
  margin-right: 10px;
}
body .container a.follow {
  float: left;
  padding: 14px 30px;
  background: none;
  color: white;
  border: 2px solid white;
}
body .container a.follow:hover {
  color: #41EFB6;
  border-color: #41EFB6;
}
body .container a {
  color: #28ECC3;
}
body .container h1 {
  color: white;
  text-align: center;
  margin: 0;
}
body .container h2 {
  margin: 10px 0px 80px 0px;
  color: white;
  font-size: 14px;
  text-align: center;
}
body .container_button {
  border: 2px solid #28ECC3;
  width: 200px;
  text-align: center;
  height: 48px;
  padding: 2px 4px;
  border-radius: 100px;
  color: white;
  margin: 0 auto;
  -webkit-transition: all .3s;
  transition: all .3s;
  position: relative;
  z-index: 3;
  line-height: 42px;
  text-transform: uppercase;
  font-weight: 700;
  font-size: 14px;
}
body .container_button:hover {
  box-shadow: 0px 0px 0px 6px rgba(0, 0, 0, 0.2);
  background: #28ECC3;
}
body .container_button:hover span i {
  margin-right: 10px;
}
body .container_button:active {
  box-shadow: 0px 0px 0px 0px rgba(0, 0, 0, 0.2);
}
body .container_button__bar {
  width: 0%;
  position: absolute;
  height: 8px;
  top: 4px;
  border-radius: 100px;
  background: -webkit-linear-gradient(left, #28ECC3 0%, #0BC9A1 100%);
}
body .container input {
  display: none;
}
body .container input:checked + label .container_button span span {
  opacity: 0;
  left: 40px;
}
body .container input:checked + label .container_button span i {
  opacity: 0;
  left: -40px;
}
body .container input:checked + label .container_button {
  -webkit-animation: base 0.96s 0.12s cubic-bezier(0.755, -0.245, 0.175, 1) forwards, pulse 0.5s forwards, final 0.3s 3.6s forwards;
          animation: base 0.96s 0.12s cubic-bezier(0.755, -0.245, 0.175, 1) forwards, pulse 0.5s forwards, final 0.3s 3.6s forwards;
}
body .container input:checked + label .container_button .downloading {
  -webkit-animation: pop .2s 1s forwards,popout .2s 3.4s forwards;
          animation: pop .2s 1s forwards,popout .2s 3.4s forwards;
}
body .container input:checked + label .container_button .d_icon {
  -webkit-animation: d_icon .6s 1s forwards,wobble .4s 3.58s forwards,iconout .14s 4.45s forwards;
          animation: d_icon .6s 1s forwards,wobble .4s 3.58s forwards,iconout .14s 4.45s forwards;
}
body .container input:checked + label .container_button .complete {
  -webkit-animation: d_icon .14s 4.55s forwards;
          animation: d_icon .14s 4.55s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(1) {
  -webkit-animation: dot 0.14s 4.00385s forwards;
          animation: dot 0.14s 4.00385s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(2) {
  -webkit-animation: dot 0.14s 4.00769s forwards;
          animation: dot 0.14s 4.00769s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(3) {
  -webkit-animation: dot 0.14s 4.01154s forwards;
          animation: dot 0.14s 4.01154s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(4) {
  -webkit-animation: dot 0.14s 4.01538s forwards;
          animation: dot 0.14s 4.01538s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(5) {
  -webkit-animation: dot 0.14s 4.01923s forwards;
          animation: dot 0.14s 4.01923s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(6) {
  -webkit-animation: dot 0.14s 4.02308s forwards;
          animation: dot 0.14s 4.02308s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(7) {
  -webkit-animation: dot 0.14s 4.02692s forwards;
          animation: dot 0.14s 4.02692s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(8) {
  -webkit-animation: dot 0.14s 4.03077s forwards;
          animation: dot 0.14s 4.03077s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(9) {
  -webkit-animation: dot 0.14s 4.03462s forwards;
          animation: dot 0.14s 4.03462s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(10) {
  -webkit-animation: dot 0.14s 4.03846s forwards;
          animation: dot 0.14s 4.03846s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(11) {
  -webkit-animation: dot 0.14s 4.04231s forwards;
          animation: dot 0.14s 4.04231s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(12) {
  -webkit-animation: dot 0.14s 4.04615s forwards;
          animation: dot 0.14s 4.04615s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(13) {
  -webkit-animation: dot 0.14s 4.05s forwards;
          animation: dot 0.14s 4.05s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(14) {
  -webkit-animation: dot 0.14s 4.05385s forwards;
          animation: dot 0.14s 4.05385s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(15) {
  -webkit-animation: dot 0.14s 4.05769s forwards;
          animation: dot 0.14s 4.05769s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(16) {
  -webkit-animation: dot 0.14s 4.06154s forwards;
          animation: dot 0.14s 4.06154s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(17) {
  -webkit-animation: dot 0.14s 4.06538s forwards;
          animation: dot 0.14s 4.06538s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(18) {
  -webkit-animation: dot 0.14s 4.06923s forwards;
          animation: dot 0.14s 4.06923s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(19) {
  -webkit-animation: dot 0.14s 4.07308s forwards;
          animation: dot 0.14s 4.07308s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(20) {
  -webkit-animation: dot 0.14s 4.07692s forwards;
          animation: dot 0.14s 4.07692s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(21) {
  -webkit-animation: dot 0.14s 4.08077s forwards;
          animation: dot 0.14s 4.08077s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(22) {
  -webkit-animation: dot 0.14s 4.08462s forwards;
          animation: dot 0.14s 4.08462s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(23) {
  -webkit-animation: dot 0.14s 4.08846s forwards;
          animation: dot 0.14s 4.08846s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(24) {
  -webkit-animation: dot 0.14s 4.09231s forwards;
          animation: dot 0.14s 4.09231s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(25) {
  -webkit-animation: dot 0.14s 4.09615s forwards;
          animation: dot 0.14s 4.09615s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(26) {
  -webkit-animation: dot 0.14s 4.1s forwards;
          animation: dot 0.14s 4.1s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(27) {
  -webkit-animation: dot 0.14s 4.10385s forwards;
          animation: dot 0.14s 4.10385s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(28) {
  -webkit-animation: dot 0.14s 4.10769s forwards;
          animation: dot 0.14s 4.10769s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(29) {
  -webkit-animation: dot 0.14s 4.11154s forwards;
          animation: dot 0.14s 4.11154s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(30) {
  -webkit-animation: dot 0.14s 4.11538s forwards;
          animation: dot 0.14s 4.11538s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(31) {
  -webkit-animation: dot 0.14s 4.11923s forwards;
          animation: dot 0.14s 4.11923s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(32) {
  -webkit-animation: dot 0.14s 4.12308s forwards;
          animation: dot 0.14s 4.12308s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(33) {
  -webkit-animation: dot 0.14s 4.12692s forwards;
          animation: dot 0.14s 4.12692s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(34) {
  -webkit-animation: dot 0.14s 4.13077s forwards;
          animation: dot 0.14s 4.13077s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(35) {
  -webkit-animation: dot 0.14s 4.13462s forwards;
          animation: dot 0.14s 4.13462s forwards;
}
body .container input:checked + label .container_button .point:nth-of-type(36) {
  -webkit-animation: dot 0.14s 4.13846s forwards;
          animation: dot 0.14s 4.13846s forwards;
}
body .container input:checked + label .container_button:hover {
  box-shadow: none;
}
body .container input:checked + label .container_button__bar {
  -webkit-animation: bar 2.6s 1.14s cubic-bezier(0.19, 1, 0.22, 1) forwards, barout 0.3s 3.2s forwards;
          animation: bar 2.6s 1.14s cubic-bezier(0.19, 1, 0.22, 1) forwards, barout 0.3s 3.2s forwards;
}
body .container label {
  cursor: pointer;
}
body .container label .downloading {
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 28px;
  opacity: 0;
  font-size: 12px;
}
body .container label .point {
  opacity: 0;
  width: 2px;
  height: 6px;
  -webkit-transform-origin: 60px 0px;
          transform-origin: 60px 0px;
  background: #28ECC3;
  border-radius: 10px;
  position: absolute;
  left: -11px;
  top: 50px;
}
body .container label .point:nth-of-type(1) {
  -webkit-transform: rotate(10deg);
          transform: rotate(10deg);
}
body .container label .point:nth-of-type(2) {
  -webkit-transform: rotate(20deg);
          transform: rotate(20deg);
}
body .container label .point:nth-of-type(3) {
  -webkit-transform: rotate(30deg);
          transform: rotate(30deg);
}
body .container label .point:nth-of-type(4) {
  -webkit-transform: rotate(40deg);
          transform: rotate(40deg);
}
body .container label .point:nth-of-type(5) {
  -webkit-transform: rotate(50deg);
          transform: rotate(50deg);
}
body .container label .point:nth-of-type(6) {
  -webkit-transform: rotate(60deg);
          transform: rotate(60deg);
}
body .container label .point:nth-of-type(7) {
  -webkit-transform: rotate(70deg);
          transform: rotate(70deg);
}
body .container label .point:nth-of-type(8) {
  -webkit-transform: rotate(80deg);
          transform: rotate(80deg);
}
body .container label .point:nth-of-type(9) {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
}
body .container label .point:nth-of-type(10) {
  -webkit-transform: rotate(100deg);
          transform: rotate(100deg);
}
body .container label .point:nth-of-type(11) {
  -webkit-transform: rotate(110deg);
          transform: rotate(110deg);
}
body .container label .point:nth-of-type(12) {
  -webkit-transform: rotate(120deg);
          transform: rotate(120deg);
}
body .container label .point:nth-of-type(13) {
  -webkit-transform: rotate(130deg);
          transform: rotate(130deg);
}
body .container label .point:nth-of-type(14) {
  -webkit-transform: rotate(140deg);
          transform: rotate(140deg);
}
body .container label .point:nth-of-type(15) {
  -webkit-transform: rotate(150deg);
          transform: rotate(150deg);
}
body .container label .point:nth-of-type(16) {
  -webkit-transform: rotate(160deg);
          transform: rotate(160deg);
}
body .container label .point:nth-of-type(17) {
  -webkit-transform: rotate(170deg);
          transform: rotate(170deg);
}
body .container label .point:nth-of-type(18) {
  -webkit-transform: rotate(180deg);
          transform: rotate(180deg);
}
body .container label .point:nth-of-type(19) {
  -webkit-transform: rotate(190deg);
          transform: rotate(190deg);
}
body .container label .point:nth-of-type(20) {
  -webkit-transform: rotate(200deg);
          transform: rotate(200deg);
}
body .container label .point:nth-of-type(21) {
  -webkit-transform: rotate(210deg);
          transform: rotate(210deg);
}
body .container label .point:nth-of-type(22) {
  -webkit-transform: rotate(220deg);
          transform: rotate(220deg);
}
body .container label .point:nth-of-type(23) {
  -webkit-transform: rotate(230deg);
          transform: rotate(230deg);
}
body .container label .point:nth-of-type(24) {
  -webkit-transform: rotate(240deg);
          transform: rotate(240deg);
}
body .container label .point:nth-of-type(25) {
  -webkit-transform: rotate(250deg);
          transform: rotate(250deg);
}
body .container label .point:nth-of-type(26) {
  -webkit-transform: rotate(260deg);
          transform: rotate(260deg);
}
body .container label .point:nth-of-type(27) {
  -webkit-transform: rotate(270deg);
          transform: rotate(270deg);
}
body .container label .point:nth-of-type(28) {
  -webkit-transform: rotate(280deg);
          transform: rotate(280deg);
}
body .container label .point:nth-of-type(29) {
  -webkit-transform: rotate(290deg);
          transform: rotate(290deg);
}
body .container label .point:nth-of-type(30) {
  -webkit-transform: rotate(300deg);
          transform: rotate(300deg);
}
body .container label .point:nth-of-type(31) {
  -webkit-transform: rotate(310deg);
          transform: rotate(310deg);
}
body .container label .point:nth-of-type(32) {
  -webkit-transform: rotate(320deg);
          transform: rotate(320deg);
}
body .container label .point:nth-of-type(33) {
  -webkit-transform: rotate(330deg);
          transform: rotate(330deg);
}
body .container label .point:nth-of-type(34) {
  -webkit-transform: rotate(340deg);
          transform: rotate(340deg);
}
body .container label .point:nth-of-type(35) {
  -webkit-transform: rotate(350deg);
          transform: rotate(350deg);
}
body .container label .point:nth-of-type(36) {
  -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
}
body .container label .complete {
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 50%;
  z-index: 2;
  -webkit-transform: translateY(-50%) scale(0);
          transform: translateY(-50%) scale(0);
  font-size: 32px;
}
body .container label .d_icon {
  position: absolute;
  left: 0;
  right: 0;
  margin: auto;
  top: 50%;
  z-index: 2;
  -webkit-transform: translateY(-50%) scale(0);
          transform: translateY(-50%) scale(0);
  font-size: 32px;
}
body .container label span {
  opacity: 1;
  -webkit-transition: all .18s;
  transition: all .18s;
  position: relative;
  top: -3px;
}
body .container label span i {
  font-size: 22px;
  margin-right: 6px;
  position: relative;
  left: 0;
  -webkit-transition: all .2s;
  transition: all .2s;
  top: 3px;
}
body .container label span span {
  left: 0;
  top: 0px;
  -webkit-transition: all .2s;
  transition: all .2s;
}
body .container label span .large {
  position: absolute;
  opacity: 0;
  -webkit-transition: all .3s .1s;
  transition: all .3s .1s;
  left: -59px;
  top: -21px;
  font-size: 60px;
}

@-webkit-keyframes base {
  0% {
    border: none;
  }
  50% {
    width: 20px;
    height: 40px;
    background: #28ECC3;
    height: 16px;
    border: none;
  }
  75% {
    background: rgba(0, 0, 0, 0.34);
    border: none;
  }
  76% {
    width: 405px;
    height: 16px;
    background: rgba(0, 0, 0, 0.34);
    border: none;
  }
  88% {
    width: 384px;
    height: 16px;
    background: rgba(0, 0, 0, 0.34);
    border: none;
  }
  100% {
    width: 400px;
    height: 16px;
    background: rgba(0, 0, 0, 0.34);
    border: none;
  }
}

@keyframes base {
  0% {
    border: none;
  }
  50% {
    width: 20px;
    height: 40px;
    background: #28ECC3;
    height: 16px;
    border: none;
  }
  75% {
    background: rgba(0, 0, 0, 0.34);
    border: none;
  }
  76% {
    width: 405px;
    height: 16px;
    background: rgba(0, 0, 0, 0.34);
    border: none;
  }
  88% {
    width: 384px;
    height: 16px;
    background: rgba(0, 0, 0, 0.34);
    border: none;
  }
  100% {
    width: 400px;
    height: 16px;
    background: rgba(0, 0, 0, 0.34);
    border: none;
  }
}
@-webkit-keyframes bar {
  100% {
    width: 98%;
  }
}
@keyframes bar {
  100% {
    width: 98%;
  }
}
@-webkit-keyframes pulse {
  0% {
    box-shadow: 0px 0px 0px 6px rgba(0, 0, 0, 0.08);
  }
  100% {
    box-shadow: 0px 0px 0px 1920px transparent;
  }
}
@keyframes pulse {
  0% {
    box-shadow: 0px 0px 0px 6px rgba(0, 0, 0, 0.08);
  }
  100% {
    box-shadow: 0px 0px 0px 1920px transparent;
  }
}
@-webkit-keyframes pop {
  100% {
    opacity: 1;
    top: 23px;
  }
}
@keyframes pop {
  100% {
    opacity: 1;
    top: 23px;
  }
}
@-webkit-keyframes popout {
  0% {
    opacity: 1;
    top: 23px;
  }
  100% {
    opacity: 0;
    top: 28px;
  }
}
@keyframes popout {
  0% {
    opacity: 1;
    top: 23px;
  }
  100% {
    opacity: 0;
    top: 28px;
  }
}
@-webkit-keyframes barout {
  100% {
    opacity: 0;
  }
}
@keyframes barout {
  100% {
    opacity: 0;
  }
}
@-webkit-keyframes final {
  0% {
    background: rgba(0, 0, 0, 0.34);
  }
  50% {
    background: rgba(0, 0, 0, 0.34);
    width: 100px;
    height: 100px;
    box-shadow: none;
  }
  100% {
    width: 100px;
    height: 100px;
    background: none;
  }
}
@keyframes final {
  0% {
    background: rgba(0, 0, 0, 0.34);
  }
  50% {
    background: rgba(0, 0, 0, 0.34);
    width: 100px;
    height: 100px;
    box-shadow: none;
  }
  100% {
    width: 100px;
    height: 100px;
    background: none;
  }
}
@-webkit-keyframes d_icon {
  0% {
    -webkit-transform: translateY(-50%) scale(0);
            transform: translateY(-50%) scale(0);
  }
  25% {
    -webkit-transform: translateY(-50%) scale(1.2);
            transform: translateY(-50%) scale(1.2);
  }
  50% {
    -webkit-transform: translateY(-50%) scale(0.9);
            transform: translateY(-50%) scale(0.9);
  }
  75% {
    -webkit-transform: translateY(-50%) scale(1.1);
            transform: translateY(-50%) scale(1.1);
  }
  100% {
    -webkit-transform: translateY(-50%) scale(1);
            transform: translateY(-50%) scale(1);
  }
}
@keyframes d_icon {
  0% {
    -webkit-transform: translateY(-50%) scale(0);
            transform: translateY(-50%) scale(0);
  }
  25% {
    -webkit-transform: translateY(-50%) scale(1.2);
            transform: translateY(-50%) scale(1.2);
  }
  50% {
    -webkit-transform: translateY(-50%) scale(0.9);
            transform: translateY(-50%) scale(0.9);
  }
  75% {
    -webkit-transform: translateY(-50%) scale(1.1);
            transform: translateY(-50%) scale(1.1);
  }
  100% {
    -webkit-transform: translateY(-50%) scale(1);
            transform: translateY(-50%) scale(1);
  }
}
@-webkit-keyframes iconout {
  0% {
    -webkit-transform: translateY(-50%) scale(1);
            transform: translateY(-50%) scale(1);
  }
  100% {
    -webkit-transform: translateY(-50%) scale(0);
            transform: translateY(-50%) scale(0);
  }
}
@keyframes iconout {
  0% {
    -webkit-transform: translateY(-50%) scale(1);
            transform: translateY(-50%) scale(1);
  }
  100% {
    -webkit-transform: translateY(-50%) scale(0);
            transform: translateY(-50%) scale(0);
  }
}
@-webkit-keyframes dot {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@keyframes dot {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@-webkit-keyframes wobble {
  0% {
    -webkit-transform: translateY(-50%) scale(1);
            transform: translateY(-50%) scale(1);
  }
  25% {
    -webkit-transform: translateY(-50%) scale(1.2);
            transform: translateY(-50%) scale(1.2);
  }
  50% {
    -webkit-transform: translateY(-50%) scale(0.9);
            transform: translateY(-50%) scale(0.9);
  }
  75% {
    -webkit-transform: translateY(-50%) scale(1.1);
            transform: translateY(-50%) scale(1.1);
  }
  100% {
    -webkit-transform: translateY(-50%) scale(1);
            transform: translateY(-50%) scale(1);
  }
}
@keyframes wobble {
  0% {
    -webkit-transform: translateY(-50%) scale(1);
            transform: translateY(-50%) scale(1);
  }
  25% {
    -webkit-transform: translateY(-50%) scale(1.2);
            transform: translateY(-50%) scale(1.2);
  }
  50% {
    -webkit-transform: translateY(-50%) scale(0.9);
            transform: translateY(-50%) scale(0.9);
  }
  75% {
    -webkit-transform: translateY(-50%) scale(1.1);
            transform: translateY(-50%) scale(1.1);
  }
  100% {
    -webkit-transform: translateY(-50%) scale(1);
            transform: translateY(-50%) scale(1);
  }
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
  <div class='container'>
  <h1>Escolha a especialidade que deseja!</h1>
  <h2>ARE NOT YOU BRAZILIAN ?<br><a href="https://www.yroif.com.br/" target="_blank">CLICK HERE</a> </h2>
  <input id='funky' type='checkbox'>

  <a class='download' href='http://escolhabounjour.tk/escolhadeservicoshair.php' target='_blank'>
    <i class="icon ion-eye"></i> <span>HAIR STYLLING</span>
  </a>
  <a class='follow' href='https://codepen.io/jcoulterdesign/' target='_blank'>
    <i class="icon ion-social-codepen-outline"></i> <span>ESTETICA</span>
  </a>
  <a class='follow' href='https://codepen.io/jcoulterdesign/' target='_blank'>
    <i class="icon ion-social-codepen-outline"></i> <span>MANICURE</span>
  </a>
</div>
    <script src="//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>

  
    <script >
    // Nope
  //# sourceURL=pen.js
  </script>

  
  

</body>
</html>
 