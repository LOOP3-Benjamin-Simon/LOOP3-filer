<?php
require_once('includes/admin_header.php');

if (isset($_POST['quote']) && isset ($_POST['author']) && isset($_POST['level'])) {
  $quote = $_POST['quote'];
  $author = $_POST['author'];
  $level = $_POST['level'];

  $query = "INSERT INTO quotes(quote, author, level) VALUES('$quote', '$author', '$level')";
  $result = mysqli_query($con, $query);
  if (!$result) die(mysqli_error($con));
  else {
    echo '<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">';
    echo '<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">';
    echo "<h1> The quote has been registered</h1>";
    echo '</div></main>';
}
//Nedenstående else-formel gør, at formuleren forsvinder hver gang man har indtastet noget. Ellers bliver den stående for hver quote man skriver... Måske... ;-)

} else {
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Register Quotes</h1>
  </div>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
  <fieldset>
    <legend> Add a Quote</legend>
    <p>Quote: <textarea name="quote" cols = "50" rows = "5"></textarea></p>
    <p> Author: <input type = "text" name = "author"></p>
    <select name="level">
      <option value = "1">Spring</option>
      <option value = "2">Summer</option>
      <option value = "3">Autumn</option>
      <option value = "4">Winter</option>
    </select>
    <br>
    <input type="submit" value="SUBMIT">
  </fieldset>
</form>
</main>
</body>
</html>
<?php
}
?>