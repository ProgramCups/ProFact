function crear_factura(){
    $.ajax({
			type:"POST",
			url:"./PHP/invoices/new_facture.php",
			success:function(r){
				if(r==1){
					alertify.success("Factura Creada con exito!");
                    $('#invoices_info').load('./PHP/invoices/invoices_info.php');
                    $('#table_of_now_invoice').load('./PHP/invoices/table_of_now_invoice.php');
                    $('#add_products_df').load('./PHP/invoices/add_products_df.php');
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
}
function cerrar_factura(id){
    cadena="id=" + id;
    alertify.confirm("Confirmar", "Seguro que desea cerrar la factura?",
        function( ){
        
    $.ajax({
			type:"POST",
            data: cadena,
			url:"./PHP/invoices/close_facture.php",
			success:function(r){
				if(r==1){
					alertify.success("Factura Cerrada con exito!");
                    $('#invoices_info').load('./PHP/invoices/invoices_info.php');
                    $('#table_of_now_invoice').load('./PHP/invoices/table_of_now_invoice.php');
                    $('#add_products_df').load('./PHP/invoices/add_products_df.php');
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
},
        function(){alertify.error('Cancel');});
    
}
 function agregar_productos(num,idd, precio, canti){
     var id= document.getElementById('codigof').value;
     var cant= document.getElementById('p'+num).value;
     var cadena="id=" + id + "&idd="+idd+"&cant="+cant+"&precio="+precio;
     alert(cadena);
    if(cant>canti){
        alertify.alert("Revise los datos"," Agregos mas producto del disponible, favor revisar los datos");
    }else{
        $.ajax({
            type:"POST",
            data:cadena,
			url:"./PHP/invoices/add_products.php?",
			success:function(r){
				if(r==1){
					alertify.success("Factura Cerrada con exito!");
                    $('#invoices_info').load('./PHP/invoices/invoices_info.php');
                    $('#table_of_now_invoice').load('./PHP/invoices/table_of_now_invoice.php');
                    $('#add_products_df').load('./PHP/invoices/add_products_df.php');
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
    }}