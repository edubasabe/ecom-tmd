<?php
/*
* Template Name: Clientes
*/
 ?>

<?php get_header(); ?>

<div class="container">
<div class="row" style="margin-top: 20rem;">
<?php
global $wpdb;


//-- Llamado a las regiones
$regiones = $wpdb->get_results( "SELECT nombre_region FROM regiones_chile" );

//-- LLamando a los Expertos
//$resellers = $wpdb->get_results( "SELECT * FROM expertos" );

//-- Llamados Individuales
$resellers_region_1 = $wpdb->get_results( " SELECT * FROM expertos WHERE region_id = 1 " );


//-- Ejercicio
$q = intval($_GET['q']);




?>


<form class="form" id="seleccion-region">
  <select class="form-control" name="region" onchange="showUser(this.value)">
    <?php
     foreach ($regiones as $regiones ) {
       echo "<option value='". $regiones->id ."' > ". $regiones->nombre_region . "</option>";
     }
    ?>
  </select>
<table class="table">

  <thead>
    <tr>
      <th>Selección</th>
      <th>Imagen</th>
      <th>Nombre</th>
      <th>E-mail</th>
      <th>Teléfono</th>
    </tr>
  </thead>

  <?php /*


  foreach ( $resellers as $resellers ) {
    echo "<tr>
            <td>
              <input type='radio' name='expertos' value='" . $resellers->nombre_exp . "'>
            </td>
            <td>
              <img src='' alt='" . $resellers->nombre_exp . "' class='img-responsive'>
            </td>
            <td> " . $resellers->nombre_exp . "</td>
            <td> " . $resellers->email_exp . "</td>
            <td> " . $resellers->telefono . "</td>
          </tr>";
  }
   */ ?>
 </table>
</form>

<div id="txtHint"><b>Person info will be listed here...</b></div>
</div>
</div>

<script type="text/javascript">

function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

<?php get_footer(); ?>
