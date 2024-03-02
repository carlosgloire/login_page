
e=true;

function changer(){
    if(e){
        document.getElementById("password").setAttribute("type","text");
        document.getElementById("eye_icon").src="images/icon_on.png";
        e=false;
    }
    else{
        document.getElementById("password").setAttribute("type","password");
        document.getElementById("eye_icon").src="images/icon_off.png";
        e=true;
    }
   
}
