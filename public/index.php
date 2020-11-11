<?php
include_once('header.php');
?>


<body class="bg-info">
 <div class="container-fluid col-md-10 offset-md-1"></div>
  <div class="row"></div>
   <div class="card mt-3 px-2 py-2"></div>
       <h1>Stationery Application</h1>
       <p>Welcome to this fictional stationary application page created for COMP2001 example.
          To continue, please accept our terms and conditions.</p>
</body>

<form>
    <div>
        <input type="radio" id="agree" name="choice" value="agree">
        <label for="agree">I Agree</label><br>
        <input type="radio" id="disagree" name="choice" value="disagree">
        <label for="disagree">I Disagree</label><br>
        <input type="submit">
    </div>
</form>

<?php
include_once('footer.php');
?>
