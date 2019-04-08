<section>
  <a href="index"><button class="btn"><span class="glyphicon glyphicon-arrow-left"></span> Ga terug naar overzicht</button></a>
  <br><br>

  <div class="col-md-4 thumbnail">
    <h2>Update </h2>
    <form action="index.php?op=bewerkt$id=" method="post">
      <label>Product naam: </label>
      <input class="form-control" type="text" name="product_name" required>
      <label>Prijs: </label>
      <input class="form-control" type="number" name="product_price" required>
      <label>Merk: </label>
      <input class="form-control" type="text" name="product_brand" required>
      <label>Afbeelding: </label>
      <input type="file" name="product_img" required>
      <br />
      <label>Kleur: </label>
      <input class="form-control" type="text" name="product_color">
      <label>Resolutie: </label>
      <input class="form-control" type="text" name="product_resolution">
      <label>Refresh snelheid: </label>
      <input class="form-control" type="text" name="product_refresh_rate">
      <label>gezichtsveld: </label>
      <input class="form-control" type="text" name="product_fov">
      <label>Functie's: </label>
      <input class="form-control" type="text" name="product_functions">
      <label>Aansluitingen: </label>
      <input class="form-control" type="text" name="product_connections">
      <label>Accessoires: </label>
      <input class="form-control" type="text" name="product_accessories">
      <br />
      <label>Bijzonderheden: </label>
      <textarea class="form-control" type="text" name="product_particularities"></textarea>
      <br />
      <input type="submit" class="btn">
    </form>
    <div>
</section>