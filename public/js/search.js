$(()=>{
    //Llamaremos a cada módulo de búsqueda "buscador",
    //por el momento, solo nos vemos en la necesidad de 
    //utilizar un unico tipo debuscador, pero en 
    // caso de necesitar alguno más, los llamaremos
    // "buscador-{campoBuscar}"


    //Buscador de canales +buscador-Canal+

    $('#buscador').on('keyup',()=>{
        $.getJSON("https://www.stromzu.com:8000/canal/find/" + $('#buscador').val(),
            function (data, textStatus, jqXHR) {

                console.log(data);
            }
        );
    });
});