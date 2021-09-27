//----------------- contador métricas home page --------------
var n=0;
function contador(){
  jQuery('.number-counter').countTo();
  n+=1;
}

const count = document.querySelector('.ativador');
document.addEventListener('scroll', function () {
  if(n==0){
    inView(count) ?
      contador():
      false
  }
});

//-------------- transição cards page projetos ---------------

function cardChange(el){
    if (el == true){
        jQuery(".card").css("background-color", "#1b1b1b");
        jQuery(".card").css("color", "white");
        jQuery(".card").css("transition", "all 2s ease");
    }
    else{
        jQuery(".card").css("background-color", "#ffffff");
        jQuery(".card").css("color", "black");
        jQuery(".card").css("transition", "all 2s ease");
    }
}

const boxe = document.querySelector('.cardsflex');
document.addEventListener('scroll', function () {
    inView(boxe) ?
        cardChange(true) :
        cardChange(false)
});

//------------ 


