
function eliminar(){
    //solo se ejecuta si los botones existen
    if(div1.getElementsByTagName('button').length>0){

        //los input se ocultan
        document.getElementById('input1').style.display = 'block';
        document.getElementById('input2').style.display = 'block';
        document.getElementById('input3').style.display = 'block';

        //los button se eliminan
        var element1=document.getElementById('idBtnLibros');
        var element2=document.getElementById('idBtnUsuarios');
        element1.remove();
        element2.remove();
    }
}

function crear(){
    var div1=document.getElementById('div1');
    var div2=document.getElementById('div2');

    //solo se ejecuta si no existen los botones
    if(div1.getElementsByTagName('button').length==0){

        document.getElementById('input1').style.display = 'none';
        document.getElementById('input2').style.display = 'none';
        document.getElementById('input3').style.display = 'none';

        //crea los botones
        var newBtn1 = document.createElement("button");
        var newBtn2 = document.createElement("button");

        //anade atributos a los botones
        newBtn1.id="idBtnLibros";
        newBtn1.textContent="Libros";
        newBtn1.className="btn btn-light btn-lg btn-block w-50 h-25";

        newBtn2.textContent="Usuarios";
        newBtn2.id="idBtnUsuarios";
        newBtn2.className="btn btn-light btn-lg btn-block w-50 h-25";

        div1.appendChild(newBtn1);
        div2.appendChild(newBtn2)

    }

}