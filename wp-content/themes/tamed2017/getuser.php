<?php
//-- LLamando a los Expertos segun seleccion
$resellers = $wpdb->get_results( "SELECT * FROM expertos WHERE id_region = ' . $q . '" );

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

?>
