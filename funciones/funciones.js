function grabarNegocio()
 {
     alert("aa")

    var dId=document.getElementById("ID").value;
    var dNombre=document.getElementById("nombre").value;
    var dDescripcion=document.getElementById("descripcion").value;
    var dlatitud=document.getElementById("latitud").value;
    var dlongitud=document.getElementById("longitud").value;
    var dImagen=document.getElementById("fichero").value;


    jsonString = "idNegocio=" + dId + " & Nombre= " + dNombre+ " & Descripcion = " + dDescripcion + " & Latitud= "+dlatitud+ " & Longitud= " +dlongitud+" & Imagen= "+dImagen ;
 //alert(jsonString) 0, \'fdsa\' ,, \'111111.1\' , \'11111.1\',\'C:\\fakepath\\DNI.jpg\'
    alert(jsonString)
    conexionPhp="https://www.informaticasc.com/ci/phps/grabarFormulario.php";
   
                  var xmlhttp = new XMLHttpRequest();
                  //Abrimos la ubicacion del archivo donde tenemos alojado el php, con el metodo POST que sera el que recoja los datos
                  xmlhttp.open("POST", conexionPhp, true);
                  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
              
                          
               //   xmlhttp.setRequestHeader("Content-Length", jsonString.length);
              alert(xmlhttp.readyState + "--"+xmlhttp.status);
                  xmlhttp.onreadystatechange = function ()
                  {  //alert(xmlhttp.readyState + "--"+xmlhttp.status);
                      if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                          var datosLeidos = xmlhttp.responseText;
                       alert("Datos Recibidos :" + datosLeidos);
                      
                      
                          if(datosLeidos==="null"){
                             location.reload();
                          }
                         
                      }
                      }
                
                  xmlhttp.send(jsonString);

 }

 