var cardImages = document.getElementsByClassName('front-img');
var cards = document.getElementsByClassName('card');
var score = 0;   
var checkArray = []; 

var images = [
    "/img/memory_game/chandler_bing.jpg", 
    "/img/memory_game/joey_tribbiani.jpg",
    "/img/memory_game/monica_geller.jpg",
    "/img/memory_game/phoebe_buffay.jpg",
    "/img/memory_game/rachel_green.jpg",
    "/img/memory_game/ross_geller.png",
    "/img/memory_game/chandler_bing.jpg", 
    "/img/memory_game/joey_tribbiani.jpg",
    "/img/memory_game/monica_geller.jpg",
    "/img/memory_game/phoebe_buffay.jpg",
    "/img/memory_game/rachel_green.jpg",
    "/img/memory_game/ross_geller.png"
];

// this function shuffles the array
function shuffle(o){
    for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    return o;
}
// this function generates the cards
function generateCards(){
    shuffle(images);
    for (var i = 0; i < cards.length; i++){
        var image = images[i];
        var cardback = cardImages[i];
        var card = cards[i];
        var style = "url(" + image + ") no-repeat center";
        cardback.style.background = style; 
        cardback.style.backgroundSize = "100% 100%";
        card.dataset.pic = image;
    }   
}
generateCards(); 
// function to check if two or more are flipped
function twoCheck(){
    if (checkArray.length == 2){
        if (checkArray[0] == checkArray[1]){
            checkArray = []; 
        } else {
            console.log('not equal');
            checkArray = [];
            $(".card").each(function(){
                var toFlip = $(this)
                var front = $(this).children('.front');
                var zindex = front.css('z-index');
                if (zindex == "0"){
                    toFlip.flip(false);
                }
            });
        }
    }
}
// this function checks game win
function gameCheck(){

}
$(".card").flip();
$(".card").on('flip:done',function(){
    var that = $(this).data("pic");
    checkArray.push(that);
    twoCheck();
});