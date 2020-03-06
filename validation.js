function branchselect(){
    var course=document.forms["info"]["course"].value;
    var b;
    if(course=="B.E"  || course=="M.E"){
        b=["AUTO","CHEM","CIVIL","CSE","ECE","EIE","EEE","MECH","MTS"];
    }
    else if(course=="B.Tech" || course=="M.Tech"){
        b=["IT","FT"];
    }
    else if(course=="B.Sc"){
        b=["CSD","SS","IS"];
    }
    else if(course=="B.Arch" || course=="MBA" || course=="MCA" || course=="M.Sc"){
        b=["NIL"];
    }
    var str="";
    for(var i of b){
        str+="<option>"+i+"</option>";
    }
    document.getElementById("branch").innerHTML=str;
}
function print(){
    
}