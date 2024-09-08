<?php
include('get_blog.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tugas 15 - Workshop 3: Landing Page - Database Connected</title>
  <!-- CSS Bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth,wght@75..100,300..800&family=Poppins:wght@100;400;500;600;700&display=swap"
    rel="stylesheet" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../style.css" />

  <!-- Icon -->
  <script
    src="https://kit.fontawesome.com/0a87be03b5.js"
    crossorigin="anonymous"></script>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md fixed-top py-3">
    <div class="container">
      <a class="navbar-brand mx-auto" href="#">
        <img src="../img/logo.png" alt="Logo" />
      </a>
    </div>
  </nav>

  <!-- Main Section -->
  <section id="blog" class="blog-section">
    <div class="container">
      <!-- Breadcrumb -->
      <div class="row breadcrumb">
        <div class="col col-xl-12">
          <div aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                Blog
              </li>
            </ol>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xl-12">
          <h2>Blog Posts</h2>

          <div class="row mt-4">
            <?php if ($blogs): ?>
              <?php foreach ($blogs as $blog): ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                  <div class="card mb-5">
                    <img src="uploads/<?php echo htmlspecialchars($blog['image']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($blog['title']); ?>">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo htmlspecialchars($blog['title']); ?></h5>
                      <p class="card-text"><?php echo nl2br(htmlspecialchars($blog['content'])); ?></p>
                      <p class="text-muted">By <?php echo htmlspecialchars($blog['author']); ?> on <?php echo date("F j, Y", strtotime($blog['created_at'])); ?></p>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php else: ?>
              <p>No blog posts available.</p>
            <?php endif; ?>
          </div>
        </div>
      </div>


  </section>

  <!-- Footer Section -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col footer-logo">
          <img src="../img/logo-white.png" alt="Logo Brand" />
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-md-3 footer-brand">
          <h3>Contact Us</h3>
          <p>Call: +123 400 123</p>
          <p>
            Praesent nulla massa, hendrerit vestibulum
            <br />
            in, feugiat auctor felis.
          </p>
          <p>Email: example@mail.com</p>
          <div class="social-icons">
            <ul>
              <li>
                <a href="#"><i class="fab fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-instagram"></i></a>
              </li>
              <li>
                <a href="#"><i class="fab fa-github"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-xl-3 col-md-3 footer-explore">
          <h3>Explore</h3>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Course</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="col-xl-3 col-md-3 footer-category">
          <h3>Category</h3>
          <ul>
            <li><a href="#">Design</a></li>
            <li><a href="#">Development</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Lifestyle</a></li>
            <li><a href="#">Photography</a></li>
            <li><a href="#">Music</a></li>
          </ul>
        </div>
        <div class="col-xl-3 col-md-3 footer-subscribe">
          <h3>Subscribe</h3>
          <p>
            Lorem Ipsum has been them an industry<br />
            printer took a galley make book.
          </p>
          <form action="" method="post">
            <input type="text" placeholder="Email here" />
          </form>
          <a href="#" class="btn btn-subs">Subscribe Now</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- JS Bootstrap -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>