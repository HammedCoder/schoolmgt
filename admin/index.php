<?php include("includes/header.php") ?>
<!-- Top Navigation -->
<?php include("includes/top_nav.php") ?>
<div id="layoutSidenav">
    <?php include("includes/side_nav.php") ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <?php include("includes/admin_content.php") ?>
                <?Php
                $sql = "SELECT * FROM user_tb WHERE id = 1";
                $result = $database->query($sql);
                $users = mysqli_fetch_assoc($result);
                $user = $users['username'];
                echo $user;           ?>
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