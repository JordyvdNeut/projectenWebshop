<section>
    <?php
    $html = "";
    // Filter
    if($brands) {
        $html .=  "<div class='filter col-md-2 sidebar'>";
        $html .=  "<h2>Filter</h2>";
        $html .=  "<form action='/action_page.php'>";
        while($row = $brands->fetch(PDO::FETCH_ASSOC)) {
            $html .=  "<input type='checkbox' name='brand' value='" . $row['Merk'] . "'>" . " " . $row['Merk'] . "<br>";
        }
        $html .=  "</form>";
        $html .=  "</div>";
    }

    // products
    if ($products) {
        while($row = $products->fetch(PDO::FETCH_ASSOC)) {
            $html .= "<div class='col-md-3 productMarg thumbnail' href='index?op=details'>";
            $html .=  "<h3>" . $row['Naam'] . "</h3>";
            // $html .=  "<img src='index?op=" . $row['Img'] . "' alt='AfbeeldingMoetVanuitDatabaseKomen' />";
            $html .=  "<div class='caption'>";
            $html .=  "<table>";
            $html .=  "<tr>";
            $html .=  "<th>" . "Merk" . "</th>";
            $html .=  "<td align='right'>" . $row['Merk']. "</td>";
            $html .=  "</tr>";
                
            $html .=  "<tr>";
            $html .=  "<th>" . "Gezichtsveld" . "</th>";
            $html .=  "<td align='right'>" . $row['Gezichtsveld'] . "</td>";
            $html .=  "</tr>";
            $html .=  "<tr>";
            $html .=  "<th>" . "Prijs" . "</th>";
            $html .=  "<td align='right'>" . $row['Prijs'] . "</td>";
            $html .=  "</tr>";
            $html .=  "</table>";
            $html .=  "<div class='text-right'>";
            $html .=  "<h6>Gezichtsveld word weergegeven in grades</h6>";
            $html .=  "</div>";
            $html .=  "</div>";
            $html .=  "<a href='index?op=details&id=" . $row['ProductsID'] . "'><button class='btn'>Details</button></a>";
            $html .=  "<a href='index?op=winkelwagen'><button type='submit' class='btn'>Bestellen</button></a>";
            $html .=  "</div>";
        }
        echo $html;
    } else {
        echo "Sorry de producten kunnen niet geladen worden";
    };
    ?>
</section>
