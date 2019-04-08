<section class="col-md-4 thumbnail">
  <h2>Maak hier een product aan:</h2>
  <form action="index.php?op=createProduct" method="post">
    <input class="form-control" type="text" name="product_name" placeholder="Product naam" required>
    <input class="form-control" type="number" name="product_price" placeholder="Prijs" required>
    <input class="form-control" type="text" name="product_brand" placeholder="Merk" required>
    <br />
    <input type="file" name="product_img" placeholder="Afbeelding" required>
    <br />
    <input class="form-control" type="text" name="product_color" placeholder="Kleur">
    <input class="form-control" type="text" name="product_resolution" placeholder="Resolutie">
    <input class="form-control" type="text" name="product_refresh_rate" placeholder="Refresh snelheid">
    <input class="form-control" type="text" name="product_fov" placeholder="gezichtsveld">
    <input class="form-control" type="text" name="product_functions" placeholder="Functie's">
    <input class="form-control" type="text" name="product_connections" placeholder="Aansluitingen">
    <input class="form-control" type="text" name="product_accessories" placeholder="Accessoires">
    <br />
    <input class="form-control" type="text" name="product_particularities" placeholder="Bijzonderheden">
    <br />
    <input type="submit" class="btn">
  </form>
</section>