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
        <div class="product thumbnail col-md-3" href="index?op=details">
            <h3>{{ $productNaam }}</h3>
            <img src="$--" alt="Afbeelding moet vanuit database komen" />
            <div class="caption">
                <table>
                    <tr>
                        <th>Merk</th>
                        <td>{{$merk}}</td>
                    </tr>
                    <tr>
                        <th>Gezichtsveld</th>
                        <td>{{$gezichtsveld}}</td>
                    </tr>
                    <tr>
                        <th>Prijs</th>
                        <td>{{$prijs}}</td>
                    </tr>
                </table>
            </div>

            <a href="index?op=details"><button class="detailbutton">Details</button></a>
		    <a href="index?op=winkelwagen"><button class="bestelbutton"><a href="">Bestellen</button></a>
                </div>

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
