let koll = 0;
$( ".jumper__street" ).animate({
  width: "100%"
}, 2000, function() {
  // Animation complete.
});

const personage = document.getElementById("jumper__personage");
const obstracle = document.getElementById("jumper__obstacle");
document.addEventListener("keydown", function(event){
    jump();
});
function jump() {
    if(personage.classList != "jump"){
        personage.classList.add("jump");
    }
    setTimeout(function(){
        personage.classList.remove("jump")
    }, 1000);
}
let isAlive = setInterval ( function() {
    let personageTop = parseInt(window.getComputedStyle(personage).getPropertyValue("top"));
    let obstracleLeft = parseInt(window.getComputedStyle(obstracle).getPropertyValue("left"));
    if(obstracleLeft < 200 && obstracleLeft > 160 && personageTop >= 95) {
        $( ".jumper__over-statistics" ).html('your bonus ' + koll);
        $( "#jumper__obstacle" ).css('animation-play-state','paused');
        $( ".jumper__information" ).css('display','none');
        $( "#jumper__obstacle" ).css('display','none');
        $( ".jumper__over" ).animate({
          opacity: "1"
        }, 1000);
    }
    $( ".jumper__information" ).html(++koll);  
}, 10)