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
}