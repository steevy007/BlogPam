function menu(){
    let blockMenu =document.getElementById("blockMenu");
    if(blockMenu.style.display=='none'){
        blockMenu.style.display='block';
    }else{
        blockMenu.style.display='none';
    }
}


function close(){
    let blockMenu =document.getElementById("blockMenu");
    blockMenu.style.display='none';
}