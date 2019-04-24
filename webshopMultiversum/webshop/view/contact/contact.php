<?php
  $html = "";
  while ($row = $contactInfo->fetch(PDO::FETCH_ASSOC)) {
    $row = preg_replace('/^$/', '<i>Geen gevens kunnen vinden</i>', $row);

    $html .= "<div class='col-md-3 thumbnail'>";
    $html .= "<img src='https://randomuser.me/api/portraits/men/83.jpg' alt='Afbeelding niet gevonden'>";
    $html .= "<hr />";
    $html .= "<h3>Contact informatie, " . $row['companyname'] . "</h3>";
    $html .= "<p>Naam: " . $row['fname'] . " " . $row['lname'] . "</p>";
    $html .= "<p>E-mail: " . $row['email'] . "</p>";
    $html .= "<br />";
    $html .= "<hr />";
    $html .= "<h4>Bedrijfs locatie</h4>";
    $html .= "<p>Straat: " . $row['street'] . "</p>";
    $html .= "<p>Stad: " . $row['city'] . "</p>";
    $html .= "<p>Postcode: " . $row['postcode'] . "</p>";
    $html .= "</div>";
  }
  echo $html;
