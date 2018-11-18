function change_state(valor, codigo_empleado){
    alertify.confirm("Cambiar estado!","Seguro que desea cambiar el estado de este empleado a "+valor+"?",
  function(){
    
    cadena="state=" + valor +"&codigo_empleado="+codigo_empleado;
    
		$.ajax({
			type:"POST",
			url:"./PHP/employees/employee_update_state.php",
			data:cadena,
			success:function(r){
				if(r==1){
                    alertify.success(valor);
				    $('#tabla_empleados').load('./PHP/employees/employees_table.php');

				}else{
					alertify.error("Fallo en el Servidor");
				}
			}
		});
  },
  function(){
    alertify.error('Cancelado');
  });
}