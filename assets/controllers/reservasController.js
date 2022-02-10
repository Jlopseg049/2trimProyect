$(function(){

    Canal = $('select[name="Rutina[Canal]"]');
    $.get("https://localhost:8000/canal/precio", data,
        function (data, textStatus, jqXHR) {
            
        },
        "dataType"
    );
})