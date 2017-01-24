<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>

<body>
<div class="jumbotron text-center">
  <h1>Is this site up or down?</h1>
  <p>Enter the site you'd like to check.</p> 
</div>

<form method="post" class="form-horizontal">
  <div class="form-group">
    <label class="control-label col-sm-2" for="site">Site:</label>
    <div class="col-sm-10">
      <input name="site_input" type="text" class="form-control" id="site" placeholder="Enter site">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submitButton" class="btn btn-default">Submit</button>
    </div>
  </div>
  </form>
</form>
</body>
</html>

<?php
include "check.php";

if (isset($_POST['submitButton'])){
pingAddress($_POST['site_input']);

}
?>