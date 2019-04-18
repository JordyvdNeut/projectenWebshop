<?php
  $html = "";
  while ($row = $contactInfo->fetch(PDO::FETCH_ASSOC)) {
    $row = preg_replace('/^$/', '<i>Geen gevens kunnen vinden</i>', $row);

    $html .= "<div class='col-md-3 thumbnail'>";
    $html .= "<img src='https://randomuser.me/api/portraits/men/83.jpg' alt='Afbeelding niet gevonden'>";
    $html .= "<h3>" . $row['fname'] . " " . $row['lname'] . "</h3>";
    $html .= "<p>" . $row['email'] . "</p>";
    $html .= "<br />";
  }

  while ($row = $contactLocation->fetch(PDO::FETCH_ASSOC)) {
    $row = preg_replace('/^$/', '<i>Geen gevens kunnen vinden</i>', $row);

    $html .= "<br />";
    $html .= "<h4>Bedrijfs locatie</h4>";
    $html .= "<p>Straat: " . $row['street'] . "</p>";
    $html .= "<p>Stad: " . $row['city'] . "</p>";
    $html .= "<p>Postcode: " . $row['postcode'] . "</p>";
    $html .= "</div>";
  }
  echo $html;
