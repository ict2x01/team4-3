<?php require "../backend_scripts/retrievechallenge.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/selectpage.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Select Page</title>
</head>
<body>
    <!-- Header area -->
    <header>
      <h1>Select a challenge!</h1>
      <!-- back to play page -->
      <a type="submit" class="primary-button" href="playpage.php"> < Back</a>
   </header>
   <!-- End of Header area-->
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php
        $res = retrieveAllChallenges();
        while ($row = $res->fetchArray()) {
      ?>
      <div class="col text-center">
        <div class="card text-center h-100" style="width:18rem:;">
          <img src="<?php echo $row["map"]; ?>" alt="Avatar" style="width:100%">
          <div class="card-body">
            <a type="submit" class="primary-button" href="../../playpageUI/templates/playpage.php?id=<?php echo $row["id"]; ?>">Select</a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
</body>
</html>