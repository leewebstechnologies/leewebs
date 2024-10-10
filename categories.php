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
              <h1><i class="fa-solid fa-pen-to-square" style="color: #27aae1;"></i>Manage Categories</h1>
            </div>        
          </div>
        </div>
       </header>
    <!-- HEADER END -->

    <!-- MAIN AREA -->
    <section class="container py-2 mb-4">
        <div class="row" style="min-height: 50px; background-color: red;">
            <div class="offset-lg-1 col-lg-10" style="min-height: 50px; background-color: yellow;">
                <form action="categories.php" method="POST">
                    <div class="card">
                        <div class="card-header">
                            <h1>Add New Category</h1>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title"> <span class="fieldInfo">Category Title: </span></label><br /><br />
                                <input class="form-control"  type="text" name="title" id="title" placeholder="Type title here">
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