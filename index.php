
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<div class="container">
    <div class="jumper__wrapper">
        <div class="jumper__health"></div>
        <div class="jumper__cloud"></div>
        <div id="jumper__personage"></div>
        <div id="jumper__obstacle"></div>
        <div class="jumper__over">
            <div class="jumper__over-title">GAME OVER</div>
            <div class="jumper__over-statistics"></div>
        </div>
        <div class="jumper__street"></div>
        <div class="jumper__information"></div>
    </div>
</div>

<script>
    let koll = 0,
        health = 3;
    $( ".jumper__street" ).animate({
      width: "100%"
    }, 2000);
    
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
        $( ".jumper__health" ).css('width', health * 20 + 'px');

        if(obstracleLeft < 200 && obstracleLeft > 160 && personageTop >= 95) {
            $( "#jumper__obstacle" ).css('display','none');
            console.log(health);
            if(health != 0){
                health--;
            }
            else{
                console.log('ok');
                $( ".jumper__over-statistics" ).html('your bonus ' + koll);
                $( ".jumper__information" ).css('display','none');
                $( ".jumper__over" ).animate({
                  opacity: "1"
                }, 1000);
            }
        }
        $( ".jumper__information" ).html(++koll);  
    }, 10)

</script>
