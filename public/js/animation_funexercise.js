'use strict';
(function(){

    $(document).ready(function(){

        $('#penguinMove').click(function(){
            $('img').animate({left: '+=300'}, 1000)
            //.animate({top: "+=50"}, 1000);


        });

    });
})();