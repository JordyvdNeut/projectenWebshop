<section>
    
<a href="index?op=create"><button>Product toevoegen</button></a>
<br /><br />

    <?php
    $html = "";

    // products
    if ($products) {
        while($row = $products->fetch(PDO::FETCH_ASSOC)) {
            $html .= "<div class='col-md-3 productMarg thumbnail'>";
            $html .=  "<h3>" . $row['Naam'] . "</h3>";
            // $html .=  "<img src='" . echo $row['Img']; . "' class='img-responsive' alt='fix img' />";
            $html .=  "<div class='caption'>";
            $html .=  "<table>";
            $html .=  "<tr>";
            $html .=  "<th>" . "Prijs" . "</th>";
            $html .=  "<td align='right'>" . $row['Prijs'] . "</td>";
            $html .=  "</tr>"; 
            $html .=  "<tr>";
            $html .=  "<th>" . "Merk" . "</th>";
            $html .=  "<td align='right'>" . $row['Merk']. "</td>";
            $html .=  "</tr>";
            $html .=  "<tr>";
            $html .=  "<th>" . "Resolutie" . "</th>";
            $html .=  "<td align='right'>" . $row['Resolutie'] . "</td>";
            $html .=  "</tr>";
            $html .=  "</table>";
            $html .=  "</div>";
            $html .=  "<a href='index?op=details&id=" . $row['ProductsID'] . "'><button class='btn'>Details</button></a>";
            $html .=  "<a href='index?op=delProduct'><button type='submit' class='btn'>Product verwijderen</button></a>";
            $html .=  "</div>";
        }
        echo $html;
    } else {
        echo "Sorry de producten kunnen niet geladen worden";
    };
    ?>
</section>
