function closemodal(){
    let view=document.getElementById("modal-view");
    view.style.display='none';
}

function viewmodal(){
    let view=document.getElementById("modal-view");
    view.style.display='block';
    view.style.display='flex';
    view.style.justifyContent='center';
    view.style.alignItems='center';
}