<template>
    <div class="traktor-wrapper my-3">
        <div id="traktorDiv">
            <div id="traktor">
                <!-- Body -->
                <div id="rohr">
                    <div class="smoke" id="smoke1"></div>
                    <div class="smoke" id="smoke2"></div>
                    <div class="smoke" id="smoke3"></div>
                </div>
                <div id="haube"></div>
                <div id="A"></div>
                <div id="B"></div>
                <div id="dach"></div>
                <div id="schutz1">
                    <div class="schutz"></div>
                </div>
                <div id="schutz2">
                    <div class="schutz"></div>
                </div>
                <!-- /Body -->
                <div id="wheels">
                    <div id="rad1">
                        <div class="felge">
                            <div class="wheelDot"></div>
                        </div>
                        <div id="profil1" class="profil"></div>
                        <div id="profil2" class="profil"></div>
                        <div id="profil3" class="profil"></div>
                        <div id="profil4" class="profil"></div>
                        <div id="profil5" class="profil"></div>
                        <div id="profil6" class="profil"></div>
                    </div>
                    <div id="rad2">
                        <div class="felge">
                            <div id="schrauben">
                                <div id="schraube"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style scoped>
.traktor-wrapper {
    position: relative;
    width: 180px;
    height: 150px;
    margin: auto;
}

/*- --- base --- -*/
#traktorDiv{
  width:600px;
  height:500px;
  position: absolute;
  -moz-transform: scale(0.3);
  -moz-transform-origin: top left;
  -o-transform: scale(0.3);
  -o-transform-origin: top left;
  -webkit-transform: scale(0.3);
  -webkit-transform-origin: top left;
  transform: scale(0.3);
}
#traktor{
  color:#155116;
  width: inherit;
  height: inherit;
  position: absolute;
	-webkit-animation-name: shake;
	-webkit-animation-duration: 0.8s;
	-webkit-transform-origin:50% 50%;
	-webkit-animation-iteration-count: infinite;
	-webkit-animation-timing-function: linear;
}
#traktor #haube{
  background-color: currentColor;
  height:120px;
  width:450px;
  top:200px;
  left:150px;
  position: absolute;
  border-bottom-right-radius: 45px 100px;
  border-top-right-radius: 15px;
}
/*- --- /base --- -*/
/*- --- Abgasrohr --- -*/
#traktor #rohr{
  height:150px;
  width:20px;
  color:#a0a6af;
  background-color:currentColor;
  top:100px;
  left:500px;
  border-top-right-radius: 50px 15px;
  position:absolute;
}
/*- --- /Abgasrohr --- -*/
/*- --- Fuehrerhaus --- -*/
#traktor #A{
  height:230px;
  width:30px;
  background-color: currentColor;
  position: absolute;
  top: 10px;
  left:350px;
  border-top-right-radius: 15px;
  transform: rotate(-30deg);
}
#traktor #B{
  height:180px;
  width:30px;
  background-color: currentColor;
  position: absolute;
  top: 23px;
  left:150px;
  border-top-left-radius: 15px;
}
#traktor #dach{
  height:30px;
  width:165px;
  background-color: currentColor;
  position: absolute;
  top: 23px;
  left:150px;
  border-top-left-radius: 15px;
}
/*- --- /Fuehrerhaus --- -*/
/*- --- Spritzschutz --- -*/
#traktor #schutz1{
  width:250px;
  height:250px;
  top:80px;
  left:135px;
  position: absolute;
  overflow: hidden;
  border-bottom-right-radius: 100px 200px;
  border-top-left-radius: 200px 100px;
  transform:rotate(-30deg);
  transform-origin: bottom;
}
#traktor #schutz1 .schutz{
  width:250px;
  height:250px;
  border:30px solid #ebff14;
  border-radius: 50%;
  position: absolute;
  right:50px;
  top:50px;
}
#traktor #schutz2{
  width:200px;
  height:165px;
  top:160px;
  left:420px;
  position: absolute;
  overflow: hidden;
  border-bottom-right-radius: 100px 200px;
  border-top-left-radius: 200px 100px;
  transform:rotate(-45deg);
  transform-origin: bottom;
}
#traktor #schutz2 .schutz{
  width:165px;
  height:165px;
  border:20px solid #ebff14;
  border-radius: 50%;
  position: absolute;
  right:50px;
  top:50px;
}
/*- --- /Spritzschutz --- -*/
/*- --- Rauch --- -*/
#traktor #rohr .smoke{
  -webkit-animation: pulsate 1500ms ease-out;
  -webkit-animation-iteration-count: infinite;
  opacity: 0.0;
  width:18px;
  height:18px;
  border-radius: 50%;
  color:#282828;
  background-color: currentColor;
  border:1px solid currentColor;
  top:-40px;
  left:-10px;
  position: absolute;
  box-shadow:
    1px 1px 0 2px currentColor,
    8px 8px currentColor,
    -14px -10px currentColor,
    -0px -7px currentColor,
    -10px 4px currentColor;
}
#traktor #rohr #smoke1{
  top:-80px;
  left:-60px;
  transform: rotate(-7deg);
  transform-origin: bottom;
  -webkit-animation-delay: 0.2s;
}
#traktor #rohr #smoke2{
  top:-110px;
  left:-120px;
  transform: rotate(-20deg);
  transform-origin: bottom;
  -webkit-animation-delay: 0.4s;
}
/*- --- /Rauch --- -*/
/*- --- Reifen --- -*/
/*- --- Hinterreifen --- -*/
#traktor #wheels #rad1 {
  animation-name: spin;
   animation-duration: 2000ms;
   animation-iteration-count: infinite;
   animation-timing-function: linear;
}

#traktor #wheels #rad1{
  width:220px;
  height:220px;
  color:black;
  background-color:currentColor;
  border-radius: 50%;
  position: absolute;
  left:60px;
  top:215px;
}
#traktor #wheels #rad1 .felge{
  width:170px;
  height:170px;
  background-color:#ebff14;
  position: absolute;
  top:0;
  left:0;
  right: 0;
  bottom:0;
  margin:auto;
  border-radius: 50%;
}
#traktor #wheels #rad1 .felge .wheelDot{
  width:80px;
  height:80px;
  background-color:currentColor;
  position: absolute;
  top:0;
  left:0;
  right: 0;
  bottom:0;
  margin:auto;
  border-radius: 50%;
}

#traktor #wheels #rad1 .profil{
  position: absolute;
  height:10px;
  border-radius: 2px;
  background-color:currentColor;
  top:0;
  left:-2px;
  bottom:0;
  margin: auto;
  width:5px;
  box-shadow:
  221px 0 currentColor;
}
#traktor #wheels #rad1 #profil3{
  background-color:currentColor;
  -ms-transform: rotate(30deg); /* IE 9*/
  -ms-transform-origin: 100px 0; /* IE 9*/
  -webkit-transform: rotate(30deg); /* Safari 3-8*/
  -webkit-transform-origin: 100px 0; /* Safari 3-8*/
  transform: rotate(30deg);
  transform-origin: 105px 0;
}
#traktor #wheels #rad1 #profil4{
  -ms-transform: rotate(60deg); /* IE 9*/
  -ms-transform-origin: 100px 0; /* IE 9*/
  -webkit-transform: rotate(60deg); /* Safari 3-8*/
  -webkit-transform-origin: 100px 0; /* Safari 3-8*/
  transform: rotate(60deg);
  transform-origin: 105px 0;
}
#traktor #wheels #rad1 #profil2{
  -ms-transform: rotate(90deg); /* IE 9*/
  -ms-transform-origin: 108px 0; /* IE 9*/
  -webkit-transform: rotate(90deg); /* Safari 3-8*/
  -webkit-transform-origin: 108px 0; /* Safari 3-8*/
  transform: rotate(90deg);
  transform-origin: 108px 0;
}
#traktor #wheels #rad1 #profil5{
  -ms-transform: rotate(120deg); /* IE 9*/
  -ms-transform-origin: 108px 0; /* IE 9*/
  -webkit-transform: rotate(120deg); /* Safari 3-8*/
  -webkit-transform-origin: 108px 0; /* Safari 3-8*/
  transform: rotate(120deg);
  transform-origin: 110px 0;
}
#traktor #wheels #rad1 #profil6{
  -ms-transform: rotate(150deg); /* IE 9*/
  -ms-transform-origin: 100px 0; /* IE 9*/
  -webkit-transform: rotate(150deg); /* Safari 3-8*/
  -webkit-transform-origin: 100px 0; /* Safari 3-8*/
  transform: rotate(150deg);
  transform-origin: 111px 0;
}
/*- --- Forderreifen --- -*/
#traktor #wheels #rad2 {
  animation-name: spin;
   animation-duration: 900ms;
   animation-iteration-count: infinite;
   animation-timing-function: linear;
}
#traktor #wheels #rad2{
  color:black;
  background-color:currentColor;
  width:150px;
  height:150px;
  border-radius: 50%;
  position: absolute;
  left: 400px;
  top:280px;
}

#traktor #wheels #rad2 .felge {
  width:100px;
  height:100px;
  background-color:#ebff14;
  position: absolute;
  top:0;
  left:0;
  right: 0;
  bottom:0;
  margin:auto;
  border-radius: 50%;
}
#traktor #wheels #rad2 .felge #schrauben {
  position: absolute;
  width:14px;
  height:14px;
  top:0;
  left:0;
  bottom:0;
  right:0;
  margin:auto;
}
#traktor #wheels #rad2 .felge #schrauben #schraube {
  width:6px;
  height:6px;
  background-color:currentColor;
  position: absolute;
  top:0;
  left:0;
  border-radius: 50%;
  box-shadow:
  8px 0 2px,
  0 8px 2px,
  8px 8px 2px;

}
/*- --- /Reifen --- -*/

/*- ---- Animation ---- -*/
/*- --- Reifen --- -*/
@-moz-keyframes spin {
    from { -moz-transform: rotate(0deg); }
    to { -moz-transform: rotate(360deg); }
}
@-webkit-keyframes spin {
    from { -webkit-transform: rotate(0deg); }
    to { -webkit-transform: rotate(360deg); }
}
@keyframes spin {
    from {transform:rotate(0deg);}
    to {transform:rotate(360deg);}
}
/*- --- /Reifen --- -*/
/*- --- Rauch --- -*/
@-webkit-keyframes pulsate {
    0% {-webkit-transform: scale(0.1, 0.1); opacity: 0.0;}
    50% {opacity: 1.0;}
    100% {-webkit-transform: scale(1.2, 1.2); opacity: 0.0;}
}
/*- --- /Rauch --- -*/

@-webkit-keyframes shake {
	0% { -webkit-transform: translate(2px, 1px) rotate(0deg); }
	10% { -webkit-transform: translate(-1px, -2px) rotate(-1deg); }
	20% { -webkit-transform: translate(-3px, 0px) rotate(1deg); }
	30% { -webkit-transform: translate(0px, 2px) rotate(0deg); }
	40% { -webkit-transform: translate(1px, -1px) rotate(1deg); }
	50% { -webkit-transform: translate(-1px, 2px) rotate(-1deg); }
	60% { -webkit-transform: translate(-3px, 1px) rotate(0deg); }
	70% { -webkit-transform: translate(2px, 1px) rotate(-1deg); }
	80% { -webkit-transform: translate(-1px, -1px) rotate(1deg); }
	90% { -webkit-transform: translate(2px, 2px) rotate(0deg); }
	100% { -webkit-transform: translate(1px, -2px) rotate(-1deg); }
}
</style>
