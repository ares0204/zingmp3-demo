<?php
include('../handle/config.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PSound - ADMIN PAGE</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/img/sidebar-icon/logo/zyro-image.png" />
    <!-- Table -->
    <link rel="stylesheet" href="./assets/css/table.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="index.html"><img src="../assets/img/sidebar-icon/logo/zyro-image.png" alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="../assets/img/sidebar-icon/logo/zyro-image.png" alt="logo" /></a>
            </div>
            <ul class="nav">
                <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                            <div class="count-indicator">
                                <img class="img-xs rounded-circle " src="../assets/img/user/user.png" alt="">
                                <span class="count bg-success"></span>
                            </div>
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal" style="color: white;">

                                    <?php
                                    // Check if the user is logged in
                                    if (isset($_SESSION["firstName"]) && isset($_SESSION["lastName"])) {
                                        echo $_SESSION["firstName"] . ' ' . $_SESSION["lastName"];
                                    } else {
                                        echo "Khách"; // Display "Khách" if the user is not logged in
                                    }
                                    ?>

                                </h5>
                                <span>ADMIN</span>
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-settings text-primary"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-onepassword  text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-calendar-today text-success"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="index.html">
                        <span class="menu-icon">
                            <i class="mdi mdi-music-circle"></i>
                        </span>
                        <span class="menu-title">Manage Songs</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control" placeholder="Search products">
                            </form>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown d-none d-lg-block">
                            <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" aria-expanded="false" href="#">+ Create New Account</a>
                        </li>
                        <li class="nav-item nav-settings d-none d-lg-block">
                            <a class="nav-link" href="#">
                                <i class="mdi mdi-view-grid"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-email"></i>
                                <span class="count bg-success"></span>
                            </a>
                        </li>
                        <li class="nav-item dropdown border-left">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                                <i class="mdi mdi-bell"></i>
                                <span class="count bg-danger"></span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                                <div class="navbar-profile">
                                    <img class="img-xs rounded-circle" src="../assets/img/user/user.png" alt="">
                                    <p class="mb-0 d-none d-sm-block navbar-profile-name">

                                        <?php
                                        // Check if the user is logged in
                                        if (isset($_SESSION["firstName"]) && isset($_SESSION["lastName"])) {
                                            echo $_SESSION["firstName"] . ' ' . $_SESSION["lastName"];
                                        } else {
                                            echo "Khách"; // Display "Khách" if the user is not logged in
                                        }
                                        ?>

                                    </p>
                                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                                <h6 class="p-3 mb-0">Profile</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-settings text-success"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Settings</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a href='../handle/logout.php' class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-dark rounded-circle">
                                            <i class="mdi mdi-logout text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <p class="preview-subject mb-1">Log out</p>
                                    </div>
                                </a>
                                <div class="dropdown-divider"></div>
                                <p class="p-3 mb-0 text-center">Advanced settings</p>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-format-line-spacing"></span>
                    </button>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <div class="container-xl">
                    <div class="table-responsive">
                        <div class="table-wrapper">
                            <div class="table-title">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2>Manage <b>Songs</b></h2>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Songs</span></a>
                                        <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                                    </div>
                                </div>
                            </div>
                            <table id="songTable" class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <span class="custom-checkbox">
                                                <input type="checkbox" id="selectAll">
                                                <label for="selectAll"></label>
                                            </span>
                                        </th>
                                        <th>ID</th>
                                        <th>Background</th>
                                        <th>Name</th>
                                        <th>Singer</th>
                                        <th>pathSong</th>
                                        <th>Duration</th>
                                        <th>Genre</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $sql = "SELECT * FROM songs";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // Output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            echo "
                                                    <tr data-target='#deleteEmployeeModal' data-song-id='" . $row["id"] . "'>
                                                        <td>
                                                            <span class='custom-checkbox'>
                                                                <input type='checkbox' id='checkbox1' name='options[]' value='1'>
                                                                <label for='checkbox1'></label>
                                                            </span>
                                                        </td>
                                                        <td>" . $row["id"] . "</td>
                                                        <td>
                                                            <img src='../" . $row["background"] . "' alt=''>
                                                        </td>
                                                        <td style='max-width: 300px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>
                                                            " . $row["name"] . "
                                                        </td>
                                                        <td style='max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>
                                                            " . $row["singer"] . "
                                                        </td>
                                                        <td style='max-width: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;'>
                                                            " . $row["pathSong"] . "
                                                        </td>
                                                        <td>" . $row["duration"] . "</td>
                                                        <td>" . $row["genre"] . "</td>
                                                        <td>
                                                            <a href='#editEmployeeModal' class='edit' data-toggle='modal'>
                                                                <i class='material-icons' data-toggle='tooltip' title='Edit'>&#xE254;</i>
                                                            </a>
                                                            <a href='#deleteEmployeeModal' class='delete-song delete' data-toggle='modal' data-song-id='" . $row["id"] . "'>
                                                                <i class='material-icons' data-toggle='tooltip' title='Delete'>&#xE872;</i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                ";
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Create Modal HTML  -->
                <div id="addEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="../handle/create.php" method="post" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Song</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Singer</label>
                                        <input type="text" name="singer" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Duration</label>
                                        <input type="text" name="duration" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Genre</label>
                                        <input type="text" name="genre" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Image</label>
                                        <input type="file" name="image" accept="image/*" class="form-control-file" onchange="previewImage(this);">
                                        <img id="preview-image" src="#" alt="Preview Image" style="display: none; max-width: 200px; margin-top: 10px;">
                                    </div>
                                    <div class="form-group">
                                        <label>Upload MP3</label>
                                        <input type="file" name="mp3" accept=".mp3" class="form-control-file" onchange="previewAudio(this);">
                                        <audio id="preview-audio" controls style="display: none; margin-top: 10px;"></audio>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn btn-success" value="Add">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Edit Modal HTML -->
                <div id="editEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="../handle/update.php" method="post" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Song</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <!-- Include the hidden input for 'id' -->
                                    <input type="hidden" name="id" id="edit-song-id">

                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" id="edit-song-name" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Singer</label>
                                        <input type="text" name="singer" id="edit-song-singer" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Duration</label>
                                        <input type="text" name="duration" id="edit-song-duration" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Genre</label>
                                        <input type="text" name="genre" id="edit-song-genre" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Image</label>
                                        <input type="file" name="image" accept="image/*" class="form-control-file" id="edit-existing-image" onchange="previewImage(this);">
                                        <img id="edit-preview-image" src="#" alt="Preview Image" style="max-width: 200px; margin-top: 10px; display: none;">
                                        <img id="preview-image" src="#" alt="Preview Image" style="max-width: 200px; margin-top: 10px; display: none;">
                                    </div>
                                    <div class="form-group">
                                        <label>Upload MP3</label>
                                        <input type="file" name="mp3" accept=".mp3" class="form-control-file" id="edit-existing-mp3" onchange="previewAudio(this);">
                                        <audio id="edit-preview-audio" controls style="margin-top: 10px; display: none;"></audio>
                                        <audio id="preview-audio" controls style="margin-top: 10px; display: none;"></audio>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn btn-info" value="Save">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Delete Modal HTML -->
                <div id="deleteEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="../handle/delete.php" method="post">
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete Song</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete this song?</p>
                                    <input type="hidden" name="delete_song_id" id="delete-song-id">
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    <!-- Preview IMG -->
    <script>
        function previewImage(input) {
            var preview = document.getElementById('preview-image');
            var previewEdit = document.getElementById('edit-preview-image');
            var file = input.files[0];
            var reader = new FileReader();

            reader.onloadend = function() {
                preview.src = reader.result;
                preview.style.display = 'block';
                previewEdit.style.display = 'none';
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                preview.style.display = 'none';
                previewEdit.style.display = 'block';
            }
        }
    </script>
    <!-- End preview IMG -->
    <!-- Preview Music -->
    <script>
        function previewAudio(input) {
            var audio = document.getElementById('preview-audio');
            var audioEdit = document.getElementById('edit-preview-audio');
            var file = input.files[0];
            var reader = new FileReader();

            reader.onloadend = function() {
                audio.src = reader.result;
                audio.style.display = 'block';
                audioEdit.style.display = 'none';
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                audio.src = '';
                audio.style.display = 'none';
                audioEdit.style.display = 'block';
            }
        }
    </script>
    <!-- End preview Music -->
    <!-- Get id for Update -->
    <script>
        $(document).on('click', '.edit', function(e) {
            e.stopPropagation(); // Prevent triggering the parent row click event
            var id = $(this).closest('tr').data('song-id');
            var name = $(this).closest('tr').find('td:eq(3)').text();
            var singer = $(this).closest('tr').find('td:eq(4)').text();
            var duration = $(this).closest('tr').find('td:eq(6)').text();
            var genre = $(this).closest('tr').find('td:eq(7)').text();
            var image = $(this).closest('tr').find('td:eq(2) img').attr('src');
            var mp3 = $(this).closest('tr').find('td:eq(5)').text();

            // Fill the modal inputs with existing values
            $('#edit-song-id').val(id);
            $('#edit-song-name').val(name.trim());
            $('#edit-song-singer').val(singer.trim());
            $('#edit-song-duration').val(duration.trim());
            $('#edit-song-genre').val(genre.trim());

            // Display existing image and audio
            $('#edit-preview-image').attr('src', image).show();
            $('#edit-preview-audio').attr('src', mp3).show();

            // Store existing image and mp3 paths for later use
            $('#edit-existing-image').val(image.trim());
            $('#edit-existing-mp3').val(mp3.trim());
        });
    </script>
    <!-- End get id for Update -->
    <!-- Get id for Delete -->
    <script>
        $(document).on('click', '.delete-song', function(e) {
            e.stopPropagation(); // Prevent triggering the parent row click event
            var id = $(this).closest('tr').data('song-id');
            $('#delete-song-id').val(id);
        });
    </script>
    <!-- End get id for Delete -->
    <!-- Click open model -->
    <script>
        $(document).ready(function() {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function() {
                if (this.checked) {
                    checkbox.each(function() {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function() {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function() {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });
        });
    </script>
    <!-- End click open model -->
</body>

</html>