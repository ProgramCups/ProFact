

function agregardatos(codigo, nombre, suplidor, marca, modelo, desc, precio, cma, ca, fecha, idsupli) {
    document.getElementById("codigopm").value = codigo;
    document.getElementById("nombrepm").value = nombre;
    
    if (fecha=="01-01-0001"){
        var tf="No Aplica";
    }else{
        tf=fecha;
    }
    document.getElementById("fdvpm").value=tf;
    document.getElementById("supliop").value=idsupli;
    document.getElementById("supliop").innerHTML=suplidor;
    document.getElementById("marcapm").value=marca;
    document.getElementById("modelopm").value=modelo;
    document.getElementById("descpm").value=desc;
    document.getElementById("preciopm").value=precio;
    document.getElementById("cmam").value=cma;
    document.getElementById("cam").value=ca; 
}


function eliminarDatos(id){
	cadena="id=" + id;
    alertify.confirm("Seguro que desea eliminar el producto con el codigo: "+id+"?",function(){
        
        
        $.ajax({
			type:"POST",
			url: "./PHP/products/remove_products.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tablaproductos').load('./PHP/products/products_table.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
    },function(){
        alertify.error("Accion cancelada");
    }
    
    );
		
}
function preguntareliminar(id){
    document.getElementById("codigoeliminar").innerHTML=id;
}
