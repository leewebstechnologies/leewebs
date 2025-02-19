<?php require_once("./includes/db.php"); ?>
<?php require_once("./includes/functions.php"); ?>
<?php require_once("./includes/sessions.php"); ?>
<?php
if (isset($_POST["submit"])) {
  $category = $_POST["title"];
  $admin = "ali";
  date_default_timezone_set("Asia/Karachi");  // Set timezone
  $currentTime = time();
  $dateTime = strftime("%B-%d-%Y %H:%M:%S", $currentTime);

  if (empty($category)) {
    $_SESSION["errorMessage"] = "All fields must be filled out!";
    Redirect_to("categories.php");
  }
  elseif (strlen($category) < 3) {
    $_SESSION["errorMessage"] = "Category title should be greater than 2 characters!";
    Redirect_to("categories.php");
  }
  elseif (strlen($category) > 49) {
    $_SESSION["errorMessage"] = "Category title should be less than 50 characters!";
    Redirect_to("categories.php");
  }
  else {
    // Query to insert category in DB when everything is fine
    global $connectingDb;
    $sql = "INSERT INTO category(title) VALUES(:categoryName)";
    $stmt = $connectingDb->prepare($sql);
    $stmt->bindValue(':categoryName', $category);
    $execute = $stmt->execute();

    if ($execute) {
      $_SESSION["successMessage"] = "Category with id: " . $connectingDb->lastInsertId() . " added successfully!";
      Redirect_to("categories.php");
    }
    else {
      $_SESSION["errorMessage"] = "Something went wrong. Try again!";
      Redirect_to("categories.php");
    }
  }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categories</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
  </head>
  <body>
    <div class="topbar">
      <div style="height: 10px; background-color: #27aae1;"></div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <!-- <img class="logo" src="./images/logo.png" alt="Leewebs Logo"> -->
          <a href="/" class="navbar-brand">Leewebs</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a href="./myprofile.php" class="nav-link"><i class="fa-solid fa-user text-success"></i> My Profile</a>
              </li>
              <li class="nav-item">
                <a href="dashboard.php" class="nav-link">Dashboard</a>
              </li>
              <li class="nav-item">
                <a href="posts.php" class="nav-link">Posts</a>
              </li>
              <li class="nav-item">
                <a href="categories.php" class="nav-link">Categories</a>
              </li>
              <li class="nav-item">
                <a href="admin.php" class="nav-link">Manage Admins</a>
              </li>
              <li class="nav-item">
                <a href="comments.php" class="nav-link">Comments</a>
              </li>
              <li class="nav-item">
                <a href="blog.php?page=1" class="nav-link">Live Blog</a>
              </li>
            </ul>        
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="./logout.php" class="navlink"><i class="fa-solid fa-user-xmark text-danger"></i> Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div style="height: 10px; background-color: #27aae1;"></div>
    </div>
      <!-- NAVBAR ENDS -->
       <!-- HEADER -->
    <header class="bg-dark text-white py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>
              <i class="fa-solid fa-edit" style="color: #27aae1;"></i>
              Manage Categories
            </h1>
          </div>
        </div>
      </div>
    </header>
    <!-- HEADER ENDS -->
     <!-- Main Area -->
      <section class="container py-2 mb-4">
        <div class="container">
          <div class="row">
            <div class="offset-lg-1 col-lg-10" style="min-height: 700px">
              <?php
                echo errorMessage();
                echo successMessage();
              ?>
            <form class=""  action="categories.php" method="post">
              <div class="card bg-secondary text-light mb-3">
                <div class="card-header">
                  <h1>Add New Category</h1>
                </div>
                <div class="card-body bg-dark">
                  <div class="form-group">
                    <label for="title"><span class="fieldInfo"> Category Title: </span></label>
                    <input class="form-control" type="text" name="title" id="title" placeholder="Type category title here">
                  </div>
                  <div class="row">
                    <div class="col-lg-6 mt-2">
                      <a href="dashboard.php" class="btn btn-warning btn-block"><i class="fa-solid fa-arrow-left"></i> Back To Dashboard</a>
                    </div>
                    <div class="col-lg-6 mt-2">
                      <button type="submit" name="submit" class="btn btn-success btn-block">
                        <i class="fa-solid fa-check"></i> Publish
                      </button>
                    </div>
                </div>
              </div>
            </form>              
            </div>
          </div>
        </div>
        
      </section>
     <footer class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col">
             <p class="lead text-center small">Theme By | Leewebs Technologies | <span id="year"></span> &copy; --- All Rights Reserved</p>
          </div>        
        </div>
      </div>
     </footer>
    <div style="height: 10px; background-color: #27aae1;"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./js/scripts.js"></script>
  </body>
</html>