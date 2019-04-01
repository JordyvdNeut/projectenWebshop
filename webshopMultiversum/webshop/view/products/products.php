<section>
    <!-- filter -->
    <div class="col-md-3 sidebar">
        <h2>Filter</h2>
        <select class="form-control">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>

    <!-- products -->
    <?php
    $html = "";
    if ($products) {
        while($row = $products->fetch(PDO::FETCH_ASSOC)) {
            $html .= "<div class='col-md-3 product thumbnail' href='index?op=details'>";
            $html .=  "<h3>" . $row['Naam'] . "</h3>";
            // $html .=  "<img src='index?op=" . $row['Img'] . " alt='AfbeeldingMoetVanuitDatabaseKomen' />";
            $html .=  "<div class='caption'>";
            $html .=  "<table>";
            $html .=  "<tr>";
            $html .=  "<th>" . "Merk" . "</th>";
            $html .=  "<td>" . $row['Merk']. "</td>";
            $html .=  "</tr>";
                
            $html .=  "<tr>";
            $html .=  "<th>" . "Gezichtsveld" . "</th>";
            $html .=  "<td>" . $row['Gezichtsveld'] . "</td>";
            $html .=  "</tr>";
            $html .=  "<tr>";
            $html .=  "<th>" . "Prijs" . "</th>";
            $html .=  "<td>" . $row['Prijs'] . "</td>";
            $html .=  "</tr>";
            $html .=  "</table>";
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
