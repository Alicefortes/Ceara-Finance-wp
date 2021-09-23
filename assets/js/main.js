//refazer com viewport
var n = 0;
jQuery("#sobre").one("mouseenter click", function() {
    jQuery('.number-counter').countTo();//chamada cont
});

//------------------------------------------------------------
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
  
//------------

              const boxe = document.querySelector('.cardsflex');
              document.addEventListener('scroll', function () {
                  inView(boxe) ?
                    cardChange(true) :
                    cardChange(false)
              });