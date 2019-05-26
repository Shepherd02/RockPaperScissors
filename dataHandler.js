function play(strChoice){ 
        var xmlhttp = new XMLHttpRequest(); 
        xmlhttp.onreadystatechange = function() {
            document.getElementById("result").innerHTML = this.responseText;  
            };
        xmlhttp.open("GET", "gameLogic.php?choice=" + strChoice, true); 
        xmlhttp.send();
    }
    
function reset(elementID){
        
        console.log(elementID);
        document.getElementById("result").innerHTML = "";
    }

