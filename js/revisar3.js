'use strict'
//entrada de variables
var breinicio=document.querySelector("#reinicio");
//PREGUNTA1
var boton11=document.querySelector("#b11");
var boton12=document.querySelector("#b12");
var boton13=document.querySelector("#b13");
//PREGUNTA2
var boton21=document.querySelector("#b21");
var boton22=document.querySelector("#b22");
var boton23=document.querySelector("#b23");
//PREGUNTA3
var boton31=document.querySelector("#b31");
var boton32=document.querySelector("#b32");
var boton33=document.querySelector("#b33");
//PREGUNTA4
var boton41=document.querySelector("#b41");
var boton42=document.querySelector("#b42");
var boton43=document.querySelector("#b43");
//PREGUNTA5
var boton51=document.querySelector("#b51");
var boton52=document.querySelector("#b52");
var boton53=document.querySelector("#b53");
//PREGUNTA6
var boton61=document.querySelector("#b61");
var boton62=document.querySelector("#b62");
var boton63=document.querySelector("#b63");
//PREGUNTA7
var boton71=document.querySelector("#b71");
var boton72=document.querySelector("#b72");
var boton73=document.querySelector("#b73");
//PREGUNTA8
var boton81=document.querySelector("#b81");
var boton82=document.querySelector("#b82");
var boton83=document.querySelector("#b83");
//PREGUNTA9
var boton91=document.querySelector("#b91");
var boton92=document.querySelector("#b92");
var boton93=document.querySelector("#b93");
//PREGUNTA10
var boton101=document.querySelector("#b101");
var boton102=document.querySelector("#b102");
var boton103=document.querySelector("#b103");

function CambiarColor(){
	//color
	//PREGUNTA1
	boton11.style.background = "rgb(255, 247, 161)";
	boton12.style.background = "rgb(255, 247, 161)";
	boton13.style.background = "rgb(255, 247, 161)";
	//PREGUNTA2
	boton21.style.background = "rgb(255, 247, 161)";
	boton22.style.background = "rgb(255, 247, 161)";
	boton23.style.background = "rgb(255, 247, 161)";
	//PREGUNTA3
	boton31.style.background = "rgb(255, 247, 161)";
	boton32.style.background = "rgb(255, 247, 161)";
	boton33.style.background = "rgb(255, 247, 161)";
	//PREGUNTA4
	boton41.style.background = "rgb(255, 247, 161)";
	boton42.style.background = "rgb(255, 247, 161)";
	boton43.style.background = "rgb(255, 247, 161)";
	//PREGUNTA5
	boton51.style.background = "rgb(255, 247, 161)";
	boton52.style.background = "rgb(255, 247, 161)";
	boton53.style.background = "rgb(255, 247, 161)";
	//PREGUNTA6
	boton61.style.background = "rgb(255, 247, 161)";
	boton62.style.background = "rgb(255, 247, 161)";
	boton63.style.background = "rgb(255, 247, 161)";
	//PREGUNTA7
	boton71.style.background = "rgb(255, 247, 161)";
	boton72.style.background = "rgb(255, 247, 161)";
	boton73.style.background = "rgb(255, 247, 161)";
	//PREGUNTA8
	boton81.style.background = "rgb(255, 247, 161)";
	boton82.style.background = "rgb(255, 247, 161)";
	boton83.style.background = "rgb(255, 247, 161)";
	//PREGUNTA9
	boton91.style.background = "rgb(255, 247, 161)";
	boton92.style.background = "rgb(255, 247, 161)";
	boton93.style.background = "rgb(255, 247, 161)";
	//PREGUNTA10
	boton101.style.background = "rgb(255, 247, 161)";
	boton102.style.background = "rgb(255, 247, 161)";
	boton103.style.background = "rgb(255, 247, 161)";

	
}
function Rein12(){
	//activacion
	//PREGUNTA1
	boton11.disabled = false;
	boton12.disabled = false;
	boton13.disabled = false;
	//PREGUNTA2
	boton21.disabled = false;
	boton22.disabled = false;
	boton23.disabled = false;
	//PREGUNTA3
	boton31.disabled = false;
	boton32.disabled = false;
	boton33.disabled = false;
	//PREGUNTA4
	boton41.disabled = false;
	boton42.disabled = false;
	boton43.disabled = false;
	//PREGUNTA5
	boton51.disabled = false;
	boton52.disabled = false;
	boton53.disabled = false;
	//PREGUNTA6
	boton61.disabled = false;
	boton62.disabled = false;
	boton63.disabled = false;
	//PREGUNTA7
	boton71.disabled = false;
	boton72.disabled = false;
	boton73.disabled = false;
	//PREGUNTA8
	boton81.disabled = false;
	boton82.disabled = false;
	boton83.disabled = false;
	//PREGUNTA9
	boton91.disabled = false;
	boton92.disabled = false;
	boton93.disabled = false;
	//PREGUNTA10
	boton101.disabled = false;
	boton102.disabled = false;
	boton103.disabled = false;

	
	
}

function rei2(){

	boton1.style.background = "rgb(104, 255, 247)";

	boton2.style.background = "rgb(104, 255, 247)";

	boton3.style.background = "rgb(104, 255, 247)";

	boton4.style.background = "rgb(104, 255, 247)";

	boton5.style.background = "rgb(104, 255, 247)";

	boton6.style.background = "rgb(104, 255, 247)";

	boton7.style.background = "rgb(104, 255, 247)";

	boton8.style.background = "rgb(104, 255, 247)";

	boton9.style.background = "rgb(104, 255, 247)";

	boton10.style.background = "rgb(104, 255, 247)";
}

//Camcolor
breinicio.addEventListener('click',function(){
	updateDisplay(counterVal="CALIFICACION: " + 0 + "/10");
	CambiarColor();
});
//reinicio
breinicio.addEventListener('click',function(){
	Rein12();
	counterVal = 0;
});
breinicio.addEventListener('click',function(){
	rei2();
});
breinicio.addEventListener('click',function(){
	video1.pause();
	video2.pause();
	video3.pause();
	video4.pause();
});

//contador calf
var counterVal = 0;

function updateDisplay(val) {
    document.getElementById("counter-label").innerHTML = val;
}
//AUDIOS

var video1=document.getElementById('video1'); 
var video2=document.getElementById('video2'); 
var video3=document.getElementById('video3'); 
var video4=document.getElementById('video4'); 

//PREGUNTA1
boton11.addEventListener('click',function(){
	boton11.style.background = "red";
	boton11.disabled = true;
	boton12.disabled = true;
	boton13.disabled = true;	
	video4.play();
	boton.style.backgroundColor = "#FF8A80";
});

boton12.addEventListener('click',function(){
	boton12.style.background = "red";
	boton11.disabled = true;
	boton12.disabled = true;
	boton13.disabled = true;	
	video4.play();
	boton.style.backgroundColor = "#FF8A80";
});

boton13.addEventListener('click',function(){
	boton13.style.background = "green";
	boton11.disabled = true;
	boton12.disabled = true;
	boton13.disabled = true;
    updateDisplay("CALIFICACION: " + ++counterVal + "/10");	
	video3.play();
	boton.style.backgroundColor = "#00FF7F";
});
//PREGUNTA2
boton21.addEventListener('click',function(){
	boton21.style.background = "green";
	boton21.disabled = true;
	boton22.disabled = true;
	boton23.disabled = true;    
    updateDisplay("CALIFICACION: " + ++counterVal + "/10");	
	video3.play();
	boton2.style.backgroundColor = "#00FF7F";
});

boton22.addEventListener('click',function(){
	boton22.style.background = "red";
	boton21.disabled = true;
	boton22.disabled = true;
	boton23.disabled = true;
	video4.play();
	boton2.style.backgroundColor = "#FF8A80";
		
});

boton23.addEventListener('click',function(){
	boton23.style.background = "red";
	boton21.disabled = true;
	boton22.disabled = true;
	boton23.disabled = true;
	video4.play();
	boton2.style.backgroundColor = "#FF8A80";
	
});
//PREGUNTA3
boton31.addEventListener('click',function(){
	boton31.style.background = "green";
	boton31.disabled = true;
	boton32.disabled = true;
	boton33.disabled = true;
    updateDisplay("CALIFICACION: " + ++counterVal + "/10");	
	video3.play();
	boton3.style.backgroundColor = "#00FF7F";
});

boton32.addEventListener('click',function(){
	boton32.style.background = "red";
	boton31.disabled = true;
	boton32.disabled = true;
	boton33.disabled = true;
	video4.play();
	boton3.style.backgroundColor = "#FF8A80";
});

boton33.addEventListener('click',function(){
	boton33.style.background = "red";
	boton31.disabled = true;
	boton32.disabled = true;
	boton33.disabled = true;
	video4.play();
	boton3.style.backgroundColor = "#FF8A80";
});
//PREGUNTA4
boton41.addEventListener('click',function(){
	boton41.style.background = "red";
	boton41.disabled = true;
	boton42.disabled = true;
	boton43.disabled = true;
	video4.play();
	boton4.style.backgroundColor = "#FF8A80";
});

boton42.addEventListener('click',function(){
	boton42.style.background = "red";
	boton41.disabled = true;
	boton42.disabled = true;
	boton43.disabled = true;
	video4.play();
	boton4.style.backgroundColor = "#FF8A80";
});

boton43.addEventListener('click',function(){
	boton43.style.background = "green";
	boton41.disabled = true;
	boton42.disabled = true;
	boton43.disabled = true;
    updateDisplay("CALIFICACION: " + ++counterVal + "/10");	
	video3.play();
	boton4.style.backgroundColor = "#00FF7F";
});
//PREGUNTA5
boton51.addEventListener('click',function(){
	boton51.style.background = "green";
	boton51.disabled = true;
	boton52.disabled = true;
	boton53.disabled = true;
    updateDisplay("CALIFICACION: " + ++counterVal + "/10");	
	boton5.style.backgroundColor = "#00FF7F";
});

boton52.addEventListener('click',function(){
	boton52.style.background = "red";
	boton51.disabled = true;
	boton52.disabled = true;
	boton53.disabled = true;
	video4.play();	
	boton5.style.backgroundColor = "#FF8A80";
});

boton53.addEventListener('click',function(){
	boton53.style.background = "red";
	boton51.disabled = true;
	boton52.disabled = true;
	boton53.disabled = true;
	video4.play();
	boton5.style.backgroundColor = "#FF8A80";
});
//PREGUNTA6
boton61.addEventListener('click',function(){
	boton61.style.background = "red";
	boton61.disabled = true;
	boton62.disabled = true;
	boton63.disabled = true;
	video4.play();
	boton6.style.backgroundColor = "#FF8A80";
});

boton62.addEventListener('click',function(){
	boton62.style.background = "green";
	boton61.disabled = true;
	boton62.disabled = true;
	boton63.disabled = true;
    updateDisplay("CALIFICACION: " + ++counterVal + "/10");	
	video3.play();
	boton6.style.backgroundColor = "#00FF7F";
});

boton63.addEventListener('click',function(){
	boton63.style.background = "red";
	boton61.disabled = true;
	boton62.disabled = true;
	boton63.disabled = true;
	video4.play();
	boton6.style.backgroundColor = "#FF8A80";
});
//PREGUNTA7
boton71.addEventListener('click',function(){
	boton71.style.background = "red";
	boton71.disabled = true;
	boton72.disabled = true;
	boton73.disabled = true;
	video4.play();
	boton7.style.backgroundColor = "#FF8A80";
});

boton72.addEventListener('click',function(){
	boton72.style.background = "red";
	boton71.disabled = true;
	boton72.disabled = true;
	boton73.disabled = true;	
	video4.play();
	boton7.style.backgroundColor = "#FF8A80";
});

boton73.addEventListener('click',function(){
	boton73.style.background = "green";
	boton71.disabled = true;
	boton72.disabled = true;
	boton73.disabled = true;
    updateDisplay("CALIFICACION: " + ++counterVal + "/10");	
	video3.play();
	boton7.style.backgroundColor = "#00FF7F";
});
//PREGUNTA8
boton81.addEventListener('click',function(){
	boton81.style.background = "red";
	boton81.disabled = true;
	boton82.disabled = true;
	boton83.disabled = true;
	video4.play();	
	boton8.style.backgroundColor = "#FF8A80";
});

boton82.addEventListener('click',function(){
	boton82.style.background = "red";
	boton81.disabled = true;
	boton82.disabled = true;
	boton83.disabled = true;
	video4.play();
	boton8.style.backgroundColor = "#FF8A80";
});

boton83.addEventListener('click',function(){
	boton83.style.background = "green";
	boton81.disabled = true;
	boton82.disabled = true;
	boton83.disabled = true;
    updateDisplay("CALIFICACION: " + ++counterVal + "/10");	
	video3.play();
	boton8.style.backgroundColor = "#00FF7F";
});
//PREGUNTA9
boton91.addEventListener('click',function(){
	boton91.style.background = "red";
	boton91.disabled = true;
	boton92.disabled = true;
	boton93.disabled = true;
	video4.play();
	boton9.style.backgroundColor = "#FF8A80";
		
});

boton92.addEventListener('click',function(){
	boton92.style.background = "green";
	boton91.disabled = true;
	boton92.disabled = true;
	boton93.disabled = true;
    updateDisplay("CALIFICACION: " + ++counterVal + "/10");	
	video3.play();
	boton9.style.backgroundColor = "#00FF7F";
});

boton93.addEventListener('click',function(){
	boton93.style.background = "red";
	boton91.disabled = true;
	boton92.disabled = true;
	boton93.disabled = true;	
	video4.play();
	boton9.style.backgroundColor = "#FF8A80";
});
//PREGUNTA10
boton101.addEventListener('click',function(){
	boton101.style.background = "green";
	boton101.disabled = true;
	boton102.disabled = true;
	boton103.disabled = true;	
    updateDisplay("CALIFICACION: " + ++counterVal + "/10");	
	video3.play();
	boton10.style.backgroundColor = "#00FF7F";
});

boton102.addEventListener('click',function(){
	boton102.style.background = "red";
	boton101.disabled = true;
	boton102.disabled = true;
	boton103.disabled = true;
	video4.play();
	boton10.style.backgroundColor = "#FF8A80";
});

boton103.addEventListener('click',function(){
	boton103.style.background = "red";
	boton101.disabled = true;
	boton102.disabled = true;
	boton103.disabled = true;	
	video4.play();
	boton10.style.backgroundColor = "#FF8A80";
});
var boton1=document.querySelector("#abrir1"),
	boton2=document.querySelector("#abrir2"),
	boton3=document.querySelector("#abrir3"),
	boton4=document.querySelector("#abrir4"),
	boton5=document.querySelector("#abrir5"),
	boton6=document.querySelector("#abrir6"),
	boton7=document.querySelector("#abrir7"),
	boton8=document.querySelector("#abrir8"),
	boton9=document.querySelector("#abrir9"),
	boton10=document.querySelector("#abrir10");
                
