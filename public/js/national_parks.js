function textLength(value){
    var maxLength = 150;
    if(value.length > maxLength){
   	    return true;
	}
}

document.getElementById('descriptionCounter').onkeyup = function(){
    if(!textLength(this.value)){
        alert('text is too long!');
    }
}