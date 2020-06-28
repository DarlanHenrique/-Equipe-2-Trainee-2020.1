function confirmExclusaoCategories(){
    var resposta = confirm("Tem certeza que deseja excluir essa categoria?");

    if(resposta == true) {
        location.href="categories"
    }
}