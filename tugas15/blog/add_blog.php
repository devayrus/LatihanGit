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
  <section id="add_blog" class="add-section">
    <div class="container">
      <div class="row">
        <div class="col">
          <!-- Tempatkan alert di sini -->
          <div id="successAlert" class="alert alert-success" role="alert" style="display: none;">
            Blog post has been successfully saved!
          </div>

          <h2>Add New Blog Post</h2>
          <form action="process_blog.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
              <label for="author" class="form-label">Author</label>
              <input type="text" class="form-control" id="author" name="author" required>
            </div>
            <div class="mb-3">
              <label for="content" class="form-label">Content</label>
              <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Image</label>
              <input type="file" class="form-control" id="image" name="image" required>
            </div>
            <button type="submit" class="btn btn-add">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>


  <!-- JS Bootstrap -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- Tambahkan JavaScript untuk memeriksa status sukses -->
  <script>
    // Cek URL apakah mengandung ?status=success
    const urlParams = new URLSearchParams(window.location.search);
    const status = urlParams.get('status');

    if (status === 'success') {
      // Jika status success, tampilkan alert
      document.getElementById('successAlert').style.display = 'block';

      // Hapus alert setelah 5 detik
      setTimeout(() => {
        successAlert.style.display = 'none';
      }, 3000);

      // Hapus parameter status dari URL setelah 5 detik
      setTimeout(() => {
        history.replaceState(null, '', window.location.pathname);
      }, 3000);
    }
  </script>
</body>

</html>