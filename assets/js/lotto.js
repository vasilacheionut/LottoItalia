var verifica = document.getElementById("verifica");
var clear_nr = document.getElementById("clear_nr");
var number = [];

var colorRed   = new Array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 20, 21, 30, 31, 40, 41, 50, 51, 60, 61, 70, 71, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90);
var colorGreen = new Array(12, 13, 14, 15, 16, 17, 18, 19, 22, 29, 32, 39, 42, 49, 52, 59, 62, 69, 72, 73, 74, 75, 76, 77, 78, 79);
var colorBlue  = new Array(23, 24, 25, 26, 27, 28, 33, 38, 43, 48, 53, 58, 63, 64, 65, 66, 67, 68);
var colorBlack = new Array(34, 35, 36, 37, 44, 47, 54, 55, 56, 57);
var colorGrey  = new Array(45, 46);

var distanza  = new Array(
    Array(11, 22, 33, 44, 55, 66, 77, 88),
    Array(1, 10, 21, 23, 32, 34, 43, 45, 54, 56, 65, 67, 76, 78, 87, 89)
);


for (let index = 1; index <= 90; index++) {
    resetN(index);
}      


function resetN(n) {
    number[n] = 0;
}


function Distanza(params) {
    var nL, dist=null, nPara1, nPara2;
    for (let index = 1; index <= 90; index++) {
        nL = index.toString().length;
        if(nL == 2){
            nPara1 = parseInt(index.toString()[0]);
            nPara2 = parseInt(index.toString()[1]);
            if (nPara1 > nPara2) {
                dist = nPara1 - nPara2;
            } else if (nPara1 < nPara2) {
                dist = nPara2 - nPara1;
            } else {
                dist = nPara1 - nPara2;                
            }
        } else {
            dist = index;
        }
        if (dist == params){
            SelectN(index);    
        }
    }               
}


function SelectC(params) {
    if(params == 'rN_Red') {
        for (let index = 0; index < colorRed.length; index++) {
            SelectN(colorRed[index]);            
        }                
    }

    if(params == 'rN_Green') {
        for (let index = 0; index < colorGreen.length; index++) {
            SelectN(colorGreen[index]);            
        }                
    }    

    if(params == 'rN_Blue') {
        for (let index = 0; index < colorBlue.length; index++) {
            SelectN(colorBlue[index]);            
        }                
    }    

    if(params == 'rN_Black') {
        for (let index = 0; index < colorBlack.length; index++) {
            SelectN(colorBlack[index]);            
        }                
    }       
    

    if(params == 'rN_Grey') {
        for (let index = 0; index < colorGrey.length; index++) {
            SelectN(colorGrey[index]);            
        }                
    }           

}



function SelectN(n) {
    var id = document.getElementById('rN'+n);        
    verifica.value = "";

    if (id.className == "rN"+id.innerHTML) {
        id.className = "pN"+id.innerHTML;
        number[id.innerHTML] = 0;
    } else {
        id.className = "rN"+id.innerHTML;
        number[id.innerHTML] = id.innerHTML;
    }


    var lastN, selected_nr = 0;
    for (let index = 1; index <=90 ; index++) {
        if(number[index] != 0){
            lastN = number[index];
            selected_nr ++;
        }
    }

    for (let index = 1; index <=90 ; index++) {
        if(number[index] != 0){
            if(number[index] != lastN){
                verifica.value += number[index] + ", ";                               
            } else {
                verifica.value += number[index];                                               
            }
        } else {  }
    }
    clear_nr.innerHTML  = selected_nr;
    verifica.focus();     

}


function ClearN() {
    var id;        
    
    for (let index = 1; index <= 90; index++) {
        resetN(index);
        id = document.getElementById('rN'+index);                    
        id.className = 'pN'+index;
    }      

    verifica.value = "";        
    verifica.innerHTML = "";
    clear_nr.innerHTML  = 0;
    verifica.focus();        
}
