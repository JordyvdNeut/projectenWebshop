<section>
  <a href="index"><button class="btn"><span class="glyphicon glyphicon-arrow-left"></span> Ga terug naar overzicht</button></a>
  <br><br>
  <?php
  $html = "";
  while ($row = $contactInfo->fetch(PDO::FETCH_ASSOC)) {

    $html .= "<div class='col-md-4 thumbnail'>";
    $html .= "<h2>Bewerk hier de contact informatie van <strong>" . $row['companyname'] . "</strong></h2>";
    $html .= "<br />";
    $html .= "<form action='index.php?op=contact&id=" . $row['id'] . "'method='post'>";
    $html .= "<label>Bedrijfsnaam: </label>";
    $html .= "<input class='form-control' type='text' value='" . $row['companyname'] . "' name='companyname' required>";
    $html .= "<label>Voornaam: </label>";
    $html .= "<input class='form-control' type='text' value='" . $row['fname'] . "' name='fname' required>";
    $html .= "<label>Achternaam: </label>";
    $html .= "<input class='form-control' type='text' value='" . $row['lname'] . "' name='lname' required>";
    $html .= "<label>E-mail: </label>";
    $html .= "<input class='form-control' type='email' value='" . $row['email'] . "' name='email'>";
    $html .= "<label>Straat naam: </label>";
    $html .= "<input class='form-control' type='text' value='" . $row['street'] . "' name='street' required>";
    $html .= "<label>Stad: </label>";
    $html .= "<input class='form-control' type='text' value='" . $row['city'] . "' name='city'>";
    $html .= "<label>Staat: </label>";
    $html .= "<input class='form-control' type='text' value='" . $row['state'] . "' name='state'>";
    $html .= "<label>Postcode: </label>";
    $html .= "<input class='form-control' type='text' value='" . $row['postcode'] . "' name='postcode'>";
    $html .= "<br />";
    $html .= "<br />";
    $html .= "<input type='submit' class='btn' value='Bewerken'>";
    $html .= "</form>";
    $html .= "<div>";
  }
  echo $html;
  ?>
</section>