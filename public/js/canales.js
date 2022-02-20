$(()=>{
    var index=$("<div></div>");
    var body=$("main");
    var canales=$("<main></main>")

    //Guardemos el body para cambiar a la ventana de canales
    $('#botoncito').on('click',()=>{
      body.hide(2000, function() {
        body.appendTo(index);
            $.getJSON("https://www.stromzu.com:8000/canal/findAll",
                function (data, textStatus, jqXHR) {
                  cabecera = data.responseHead;
                    cuerpo = data.responseBody;
                  canales.empty();
                    canales.append(cabecera);
                    canales.hide();
                    canales.appendTo($(".altoMain"));
                    $('#bloqueCanales').append(cuerpo);
                    canales.show(1500);

                  });
      });      
    });
  }); 