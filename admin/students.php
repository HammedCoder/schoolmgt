<?php include("includes/header.php") ?>
<!-- Top Navigation -->
<?php include("includes/top_nav.php") ?>
<div id="layoutSidenav">
  <?php include("includes/side_nav.php") ?>

  <div id="layoutSidenav_content">
    <main>
      <div class="container-fluid px-4">
        <h1 class="mt-4">Student</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Student</li>
        </ol>
        <div class="row">
          <div class="col-lg-8">
            <form action="" method="get" class="mb-3">
              <div class="row">
                <div class="floating-input col-md-6">
                  <label for="class">Class:</label>
                  <select name="class" id="class" class="form-control">
                    <option value="">Choose Class</option>
                    <option value="1">JSS 1</option>
                    <option value="2">JSS 2</option>
                  </select>
                </div>
                <div class="floating-input col-md-6">
                  <label for="class">Arm:</label>
                  <select name="arm" id="arm" class="form-control">
                    <option value="">Choose Arm</option>
                    <option value="1">Q</option>
                    <option value="2">S</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="floating-input col-md-6">
                  <label for="class">Session:</label>
                  <select name="session" id="class" class="form-control">
                    <option value="">Choose Session</option>
                    <option value="1">2021/22</option>
                    <option value="2">2022/23</option>
                  </select>
                </div>
                <div class="floating-input col-md-6">
                  <input type="submit" class="btn btn-primary w-75 mx-auto mt-4">
                  </select>
                </div>
              </div>
            </form>
          </div>
          <div class="col-lg-4">
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
              <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
              </div>
          </div>
        </div>
        <hr>
        <h2 class="text-center text-primary">Add New Student</h2>
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
          <div class="row mb-3">
            <div class="col-md-6">
              <div class="form-floating mb-3 mb-md-0">
                <input class="form-control" id="inputFirstName" type="text" placeholder="Enter Class" />
                <label for="inputFirstName">Class</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-floating">
                <input class="form-control" id="inputLastName" type="date" placeholder="Enter your date of Birth" />
                <label for="dob">Date of Birth</label>
              </div>
            </div>
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