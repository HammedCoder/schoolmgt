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
        <form method="post" enctype="multipart/form-data" class="w-75 mb-4 mx-auto">
          <div class="row mb-3">
            <div class="col-md-6">
              <div class="form-floating mb-3 mb-md-0">
                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                <label for="inputFirstName">First name</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                <label for="inputLastName">Last name</label>
              </div>
            </div>
          </div>
          <div class="form-floating mb-3">
            <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
            <label for="inputEmail">Email address</label>
          </div>
          <div class="row mb-3">
            <div class="col-md-6">
              <div class="form-floating mb-3 mb-md-0">
                <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating mb-3 mb-md-0">
                <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                <label for="inputPasswordConfirm">Confirm Password</label>
              </div>
            </div>
          </div>
          <div class="mt-4 mb-0">
            <div class="d-grid"><input type="submit" class="btn btn-primary btn-block" value="Create User"></div>
          </div>
        </form>
        <?php

        ?>
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