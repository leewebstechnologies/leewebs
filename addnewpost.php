<?php require_once("./includes/db.php"); ?>
<?php require_once("./includes/functions.php");?>
<?php require_once("./includes/sessions.php"); ?>
<?php
  if (isset($_POST["submit"])) {
    $category = $_POST["categorytitle"];
    $admin = "leewebs";
    date_default_timezone_set("Africa/Lagos");
    $currentTime = time();
    $dateTime = strftime("%B-%d-%Y %H:%M:%S", $currentTime);

    if (empty($category)) {
      $_SESSION["ErrorMessage"] = "All fields must be filled out!";
      redirect_to("categories.php");
    } elseif (strlen($category) < 3) {
      $_SESSION["ErrorMessage"] = "Category title should be greater than 2 characters!";
      redirect_to("categories.php");
    } elseif (strlen($category) > 49) {
      $_SESSION["ErrorMessage"] = "Category title should be less than 50 characters!";
      redirect_to("categories.php");
  } else {
    // Query to insert category in Database when everything is fine.
  }
}  //Ending of submit button -if condition

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Categories</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  </head>
  <body>
    <!-- NAVBAR -->
     <div style="height: 10px; background-color: #27aae1;"></div>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a href="#" class="navbar-brand">Leewebs Technologies</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a href="myprofile.php" class="nav-link"><i class="fa-solid fa-user text-success"></i> My Profile</a>
            </li>
            <li class="nav-item">
              <a href="dashboard.php" class="nav-link">Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="posts.php" class="nav-link">Posts</a>
            </li>
            <li class="nav-item">
              <a href="categories" class="nav-link">Categories</a>
            </li>
            <li class="nav-item">
              <a href="admins.php" class="nav-link">Manage Admins</a>
            </li>
            <li class="nav-item">
              <a href="comments.php" class="nav-link">Comments</a>
            </li>
            <li class="nav-item">
              <a href="blog.php?pahe=1" class="nav-link">Live Blog</a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a href="logout.php" class="nav-link text-danger"><i class="fa-solid fa-user-times"></i> Logout</a></li>
          </ul>
        </div>
      </div>
     </nav>
     <div style="height: 10px; background-color: #27aae1;"></div>
     <!-- NAVBAR END -->
      <!-- HEADER -->
       <header class="bg-dark text-white py-3">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1><i class="fa-solid fa-pen-to-square" style="color: #27aae1;"></i>Add New Post</h1>
            </div>        
          </div>
        </div>
       </header>
    <!-- HEADER END -->

    <!-- MAIN AREA -->
    <section class="container py-2 mb-4">
        <div class="row">
            <div class="offset-lg-1 col-lg-10" style="min-height: 100vh">
              <?php
              echo ErrorMessage();
              echo SuccessMessage();              
              ?>
                <form action="categories.php" method="POST">
                    <div class="card bg-secondary text-light mb-3">
                        <div class="card-header">
                            <h1>Add New Post</h1>
                        </div>
                        <div class="card-body bg-dark">
                            <div class="form-group">
                                <label for="title"> <span class="fieldInfo">Post Title: </span></label><br /><br />
                                <input class="form-control"  type="text" name="posttitle" id="title" placeholder="Type title here">
                            </div><br />
                            <div class="form-group">
                                <label for="categorytitle"> <span class="fieldInfo">Choose Category: </span></label><br /><br />
                               <select class="form-control" name="category" id="categorytitle">
                                <option value="">1</option>
                                <option value="">2</option>
                                <option value="">3</option>
                               </select>
                            </div><br />
                            <div class="row">
                              <div class="col-lg-6 mb-2">
                                <a href="dashboard.php" class="btn btn-warning col-12">
                                  <i class="fa-solid fa-arrow-left"></i> Back to Dashboard
                                </a> 
                              </div>
                              <div class="col-lg-6 mb-2">
                                <button type="submit" name="submit" class="btn btn-success col-12">
                                <i class="fa-solid fa-check"></i> Publish
                                </button>
                              </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
     <!-- MAIN AREA END -->
     <!-- FOOTER -->
      <footer class="bg-dark text-white">
        <div class="container">
          <div class="row">
            <div class="col">
              <p class="lead text-center">Theme By | Leewebs | <span id="year"></span> &copy; ----All Right Reserved.</p>
              <p class="text-center small"><a href="https://aoajibade.netlify.app" style="color: #fff; cursor: pointer; text-decoration: none;">This site is only used for study purpose. leewebs.com has all the rights. No one is allowed to distribute copies other than then <br>&trade; leewebs.com &trade; Udemy; &trade; Skillshare;  &trade; StackSkills </a></p>
            </div>           
          </div>
        </div>       
      </footer>
      <div style="height: 10px; background-color: #27aae1;"></div>
      <!-- FOOTER END -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
  </body>
</html>