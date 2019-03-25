<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" media="screen" href="../style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="products.css" />
</head>

<body>
    <section>
        <!-- filter -->
        <nav class="col-sm-2 col-md-3 sidebar">
            <div class="filter">
                <h2>Filter</h2>
                <select class="form-control">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            <div>
        </nav>

        <!-- products -->
        <?php
        if ($products) {
            
            while($row = $products->fetch(PDO::FETCH_ASSOC)) {
                echo "<div class='product thumbnail col-md-3' href='index?op=details'>";
                echo "<h3>" . $row['Naam'] . "</h3>";
                echo "<img src='--' alt='Afbeelding moet vanuit database komen' />";
                echo "<div class='caption'>";
                echo "<table>";
                echo "<tr>";
                echo "<th>" . "Merk" . "</th>";
                echo "<td>" . $row['Merk']. "</td>";
                echo "</tr>";
                    
                echo "<tr>";
                echo "<th>" . "Gezichtsveld" . "</th>";
                echo "<td>" . $row['Gezichtsveld'] . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<th>" . "Prijs" . "</th>";
                echo "<td>" . $row['Prijs'] . "</td>";
                echo "</tr>";
                echo "</table>";
                echo "</div>";
                echo "<a href='index?op=details'><button class='detailbutton'>Details</button></a>";
                echo "<a href='index?op=winkelwagen'><button class='bestelbutton'>Bestellen</button></a>";
                echo "</div";
            }
        }
        ?>

        <!-- paginator -->
        <!-- <ul class="pagination">
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="disabled"><a href="#">4</a></li>
            <li><a href="#">5</a></li>
        </ul> -->
    </section>
</body>

</html>
