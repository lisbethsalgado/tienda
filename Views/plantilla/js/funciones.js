  $(function () {
    $("#e").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv","print", "colvis"]
    }).buttons().container().appendTo('#e_wrapper .col-md-6:eq(0)');
  });
/*-----------------------------------Productos------------------------------*/
	// obtener datos productos

$(document).ready(function(){
	$(".botonEditar").click(function (){

		var datos= JSON.parse($(this).attr('data-p'));
		$("#id").val(datos['id']);
		$("#nombre").val(datos['nombre']);
		$("#partNo").val(datos['partNo']);
		$("#cantidad").val(datos['cantidad']);
		$("#precioV").val(datos['precioV']);
		$("#precioC").val(datos['precioC']);
		$("#categoria_id").val(datos['categoria_id']);
		$("#media_id").val(datos['media_id']);
		$("#destino").val(datos['destino']);
		$("#fecha").val(datos['fecha']);
	})

	// eliminar productos

	$("#e tbody").on('click','.botonEliminar', function(){

				var  id = JSON.parse($(this).attr('data-d'));
				Swal.fire({
				  title: '¿Usted desea eliminar este dato?',
				  showDenyButton: true,
				  confirmButtonText: `Si`,
				  denyButtonText: `No`,
				}).then((result) => {
				  /* Read more about isConfirmed, isDenied below */
				  if (result.isConfirmed) {
				    $.ajax({
				     url:'productos/eliminar',
				     type:'post',
				     data:{'id':id},

				     success: function(respuesta){
						Swal.fire('Eliminado con exito','','success');

				       $("#e tbody").html(respuesta)
				     },

				     error: function(){
				       console.error("Error fatal en el sistema");
				     },
				   })
				  }
				})
			})
	
	//actualizar productos

	$("#formEdit").submit(function(e){
		e.preventDefault();

		var id = $("#id").val();
		var nombre = $("#nombre").val();
		var partNo = $("#partNo").val();
		var cantidad = $("#cantidad").val();
		var precioV = $("#precioV").val();
		var precioC = $("#precioC").val();
		var categoria_id = $("#categoria_id").val();
		var media_id = $("#media_id").val();
		var destino = $("#destino").val();
		var fecha = $("#fecha").val();

		$.ajax({
			url:'productos/edit',
			type:'post',

			data:{'id':id,'nombre':nombre,'partNo':partNo,'cantidad':cantidad,'precioV':precioV,'precioC':precioC,'categoria_id':categoria_id,'media_id':media_id,'destino':destino,'fecha':fecha},

			success: function(respuesta){

					Swal.fire({
					type: "success",
					title: "Producto Actualizado",
					text: "¡Éxito!"
				})

				$("#e tbody").html(respuesta);
				$("#modalEditar").modal('hide');
			},

			error: function(){
				console.error("Error fatal en el sistema");
			}
		})

	})

});
/*-----------------------------------Fin productos----------------------------*/



/*-----------------------------------Categorias------------------------------*/

	// obtener datos categoria

$(document).ready(function(){
	$(".botonEditar1").click(function (){

		var datos= JSON.parse($(this).attr('data-p'));
		$("#id").val(datos['id_categoria']);
		$("#nombre").val(datos['nombre']);
		
	})

	// eliminar categoria

		$("#e tbody").on('click','.botonEliminar1', function(){

				var  id_categoria = JSON.parse($(this).attr('data-d'));
				Swal.fire({
				  title: '¿Usted desea eliminar este dato?',
				  showDenyButton: true,
				  confirmButtonText: `Si`,
				  denyButtonText: `No`,
				}).then((result) => {
				  /* Read more about isConfirmed, isDenied below */
				  if (result.isConfirmed) {
				    $.ajax({
				     url:'categorias/eliminar',
				     type:'post',
				     data:{'id_categoria':id_categoria },

				     success: function(respuesta){
						Swal.fire('Eliminado con exito','','success');

				       $("#e tbody").html(respuesta)
				     },

				     error: function(){
				       console.error("Error fatal en el sistema");
				     },
				   })
				  }
				})
			})
	
	// actualizar categoria

	$("#formEditcta").submit(function(e){
		e.preventDefault();

		var id_categoria = $("#id").val();
		var nombre = $("#nombre").val();

		$.ajax({
			url:'categorias/edit',
			type:'post',

			data:{'id_categoria':id_categoria,'nombre':nombre},

			success: function(respuesta){

				Swal.fire({
					type: "success",
					title: "Categoria Actualizada",
					text: "¡Éxito!"
				})

				$("#e tbody").html(respuesta);
				$("#modalEditarcat").modal('hide');
			},

			error: function(){
				console.error("Error fatal en el sistema");
			}
		})

	})
});

/*-----------------------------------Fin Categorias------------------------*/




/*-----------------------------------Usuarios------------------------------*/

	// obtener datos usuario
	
$(document).ready(function(){
	$(".botonEditarusr").click(function (){
		var datos= JSON.parse($(this).attr('data-p'));
		$("#id").val(datos['id']);
		$("#nombre").val(datos['nombre']);
		$("#usuario").val(datos['usuario']);
		$("#password").val(datos['password']);
		$("#nivel").val(datos['nivel']);
		$("#image").val(datos['image']);
		$("#estado").val(datos['estado']);
	})

	// eliminar usuario

	$("#e tbody").on('click','.botonEliminarusr', function(){

				var  id = JSON.parse($(this).attr('data-d'));
				Swal.fire({
				  title: '¿Usted desea eliminar este dato?',
				  showDenyButton: true,
				  confirmButtonText: `Si`,
				  denyButtonText: `No`,
				}).then((result) => {
				  /* Read more about isConfirmed, isDenied below */
				  if (result.isConfirmed) {
				    $.ajax({
				     url:'usuarios/eliminar',
				     type:'post',
				     data:{'id':id},

				     success: function(respuesta){
						Swal.fire('Eliminado con exito','','success');

				       $("#e tbody").html(respuesta)
				     },

				     error: function(){
				       console.error("Error fatal en el sistema");
				     },
				   })
				  }
				})
			})

	// actualizar usuario

	$("#formEditusr").submit(function(e){
		e.preventDefault();
		var id = $("#id").val();
		var nombre = $("#nombre").val();
		var usuario = $("#usuario").val();
		var password = $("#password").val();
		var nivel = $("#nivel").val();
		var image = $("#image").val();
		var estado = $("#estado").val();

		$.ajax({
			url:'usuarios/edit',
			type:'post',

			data:{'id':id,'nombre':nombre,'usuario':usuario,'password':password,'nivel':nivel,'image':image,'estado':estado},

			success: function(respuesta){

				Swal.fire({
					type: "success",
					title: "Usuario Actualizado",
					text: "¡Éxito!"
				})

				$("#e tbody").html(respuesta);
				$("#modalEditarusr").modal('hide');
			},

			error: function(){
				console.error("Error fatal en el sistema");
			}
		})

	})
});
/*-----------------------------------Fin usuarios------------------------------*/


/*-----------------------------------Grupos----------------------------------*/

	// obtener datos grupo
	
$(document).ready(function(){
	$(".botonEditargrp").click(function (){
		var datos= JSON.parse($(this).attr('data-p'));
		$("#id").val(datos['id']);
		$("#nombre_grupo").val(datos['nombre_grupo']);
		$("#nivel_grupo").val(datos['nivel_grupo']);
		$("#estado").val(datos['estado']);
	})

	// eliminar grupo

	$("#e tbody").on('click','.botonEliminargrp', function(){

				var  id = JSON.parse($(this).attr('data-d'));
				Swal.fire({
				  title: '¿Usted desea eliminar este dato?',
				  showDenyButton: true,
				  confirmButtonText: `Si`,
				  denyButtonText: `No`,
				}).then((result) => {
				  /* Read more about isConfirmed, isDenied below */
				  if (result.isConfirmed) {
				    $.ajax({
				     url:'grupo/eliminar',
				     type:'post',
				     data:{'id':id},

				     success: function(respuesta){
						Swal.fire('Eliminado con exito','','success');

				       $("#e tbody").html(respuesta)
				     },

				     error: function(){
				       console.error("Error fatal en el sistema");
				     },
				   })
				  }
				})
			})

	// actualizar grupos

	$("#formEditgrp").submit(function(e){
		e.preventDefault();
		var id = $("#id").val();
		var nombre_grupo = $("#nombre_grupo").val();
		var nivel_grupo = $("#nivel_grupo").val();
		var estado = $("#estado").val();

		$.ajax({
			url:'grupo/edit',
			type:'post',

			data:{'id':id,'nombre_grupo':nombre_grupo,'nivel_grupo':nivel_grupo,'estado':estado},

			success: function(respuesta){

				Swal.fire({
					type: "success",
					title: "Dato Actualizado",
					text: "¡Éxito!"
				})

				$("#e tbody").html(respuesta);
				$("#modalEditargrp").modal('hide');
			},

			error: function(){
				console.error("Error fatal en el sistema");
			}
		})

	})
});
/*-----------------------------------Fin grupo------------------------------*/

/*-----------------------------------Media----------------------------------*/

	// obtener datos media
	
$(document).ready(function(){
	$(".botonEditarimg").click(function (){
		var datos= JSON.parse($(this).attr('data-p'));
		$("#id").val(datos['id']);
		$("#nombre").val(datos['nombre']);
	
	})

	// eliminar media

	$("#e tbody").on('click','.botonEliminarimg', function(){

				var  id = JSON.parse($(this).attr('data-d'));
				Swal.fire({
				  title: '¿Usted desea eliminar este dato?',
				  showDenyButton: true,
				  confirmButtonText: `Si`,
				  denyButtonText: `No`,
				}).then((result) => {
				  /* Read more about isConfirmed, isDenied below */
				  if (result.isConfirmed) {
				    $.ajax({
				     url:'media/eliminar',
				     type:'post',
				     data:{'id':id},

				     success: function(respuesta){
						Swal.fire('Eliminado con exito','','success');

				       $("#e tbody").html(respuesta)
				     },

				     error: function(){
				       console.error("Error fatal en el sistema");
				     },
				   })
				  }
				})
			})

	// actualizar media

	$("#formEditimg").submit(function(e){
		e.preventDefault();
		var id = $("#id").val();
		var nombre = $("#nombre").val();
		$.ajax({
			url:'media/edit',
			type:'post',

			data:{'id':id,'nombre':nombre},

			success: function(respuesta){

				Swal.fire({
					type: "success",
					title: "Dato Actualizado",
					text: "¡Éxito!"
				})

				$("#e tbody").html(respuesta);
				$("#modalEditarimg").modal('hide');
			},

			error: function(){
				console.error("Error fatal en el sistema");
			}
		})

	})
});
/*-----------------------------------Fin Media------------------------------*/
