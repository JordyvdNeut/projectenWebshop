<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="products.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="../style.css" />
</head>

<body>
    <section>
    
        <!-- filter -->
        <div class="filter col-md-3 sidebar">
            <div>
                <h2>Filter</h2>
                <select class="form-control">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            <div>
        </div>

        <!-- products -->
        <?php
        $html = "";
        if ($products) {
            while($row = $products->fetch(PDO::FETCH_ASSOC)) {
                $html .= "<div class='product thumbnail' href='index?op=details'>";
                $html .=  "<h3>" . $row['Naam'] . "</h3>";
                $html .=  "<img src='index?op=" . $row['Img'] . " alt='AfbeeldingMoetVanuitDatabaseKomen' />";
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
                $html .=  "<a href='index?op=details&id=" . $row['ProductsID'] . "'><button class='detailbutton'>Details</button></a>";
                $html .=  "<a href='index?op=winkelwagen'><button class='bestelbutton'>Bestellen</button></a>";
                $html .=  "</div";
            }
            echo $html;
        }
        ?>
    </section>
</body>

</html>
