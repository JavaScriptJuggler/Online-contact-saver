function update(id){

    document.getElementById('hiddenid').value=id;
}
function dlt(id){
    var route='/delete/'+id;
  window.location.href=route;
}

