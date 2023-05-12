const regispedido=async()=>{


var respuesta = await fetch("php/pedido/cargarpedido.php", {});

var registroHTML=``;

var resultado=await respuesta.json();

//console.log(resultado);

resultado.data.forEach(fila=>{

    registroHTML+=`
    
    <tr>
    <td>${fila[0]}</td>
    <td>${fila[1]}</td>
    </tr> 
    
    `; 
});

    document.querySelector("#registros").innerHTML=registroHTML;

}