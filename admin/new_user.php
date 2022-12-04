<?php include("includes/header.php") ?>
<!-- Top Navigation -->
<?php include("includes/top_nav.php") ?>
<div id="layoutSidenav">
  <?php include("includes/side_nav.php") ?>

  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid px-4">
        <h1 class="mt-4">Users</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Users</li>
        </ol>
        <form action="" method="post">
          <div class="floatingInput">
            <input type="text" class="form-control">
            <label for="name"></label>
          </div>
        </form>
        <a href="new_user" class="link btn btn-info">Create new user</a>
        <div class="card mb-4">
          <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
          </div>
          <div class="card-body">

          </div>
        </div>
      </div>
    </main>
    <?php include("includes/footer.php") ?>