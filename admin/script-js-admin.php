<script>
	$(document).ready(function(){
	$("#buscar").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#miTabla tr").filter(function() {
		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});

		$("#notif #contenido").filter(function() {
		$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
	});
</script>


<script type="text/javascript">
	
</script>

<script type="text/javascript">

$(document).ready(function(){
		///$('#lista1').val("");
		recargarListaAlexis();
		
		

		$('#lista1').change(function(){
			recargarListaAlexis();
		});
		
		
	});


	function recargarListaAlexis(){
		$.ajax({
			type:"POST",
			url:"datos_equipo.php",
			data:"equipo=" + $('#lista1').val(),
			success:function(r){
				$('#select2lista').html(r);
				//$('#modelo').show();
			}
		});
	}
</script>


<script>
  function funcion() {
      var x = document.getElementById("garantia");
      var nom = document.getElementById("nombre-btn");
      if (x.style.display === "none") {
          x.style.display = "block";
          nom.value = "No"

      }
      else{
        x.style.display = "none";
        nom.value = "Si"
      }
  }
</script>



<script>
  function funcion2() {
      var x = document.getElementById("garantia2");
	  var op = document.getElementById("opcion");
	  var nom = document.getElementById("nombre-boton");
	  var titulo = document.getElementById("lista2");
	  var lista = document.getElementById("lista");
     
      if (x.style.display === "none") {
          x.style.display = "block";
		  op.removeAttribute("value");
		  nom.value="Regresar a lista";
		  lista.style.display = "none";
		  titulo.style.display = "none";
      }
      else{
        x.style.display = "none";
		nom.value="¿Agregar modelo?";
		lista.style.display = "block";
		titulo.style.display = "block";
      }
  }
</script>
