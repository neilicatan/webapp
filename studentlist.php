  <?php
      include("connectdb.php");
  ?>
  <!DOCTYPE html> 
  <html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  </head>
  <body class="hold-transition sidebar-mini">
  <div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
      </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
          <form class="form-inline">
              <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                  </button>
              </div>
              </div>
          </form>
          </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                  <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
              </div>
              <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                  <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
              </div>
              <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                  <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
              </div>
              <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
      </li>
      <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
          </a>
      </li>
      </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
          </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
              <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
              </button>
          </div>
          </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
          <li class="nav-item">
              <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
              </p>
              </a>
              <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="student.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>New Record</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="studentlist.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List</p>
                  </a>
              </li>
      
      
      <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <div class="container-fluid">
          <div class="row mb-2">
          <div class="col-sm-6">
              <h1>Student List</h1>
          </div>
          <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Student Form</li>
              </ol>
          </div>
          </div>
      </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
      <div class="container-fluid">
          <div class="row">
          <!-- left column -->
          <div class="col-md-12">
              <!-- general form elements -->
              <!-- /.card-header -->
              <div class="card">
              <div class="card-header">
                  <h3 class="card-title">Records</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th>Student ID</th>
                      <th>Student Number</th>
                      <th>Firstname</th>
                      <th>Middle Name</th>
                      <th>Last Name</th>
                      <th>Contact</th>
                      <th>Email</th>
                      <th>Date of Birth</th>
                      <th>Option</th>
                  </tr>
                  </thead>
                  <?php 
                      $stmt = $conn->prepare("SELECT * FROM student");
                      $stmt->execute();
                      if ($stmt ->rowCount() > 0){
                          while($obj = $stmt -> fetch(PDO::FETCH_ASSOC)){
                      ?>
                  <tbody>
                  <tr>
                      <td><?php echo $obj["studentid"]?></td>
                      <td><?php echo $obj["studentnum"]?></td>
                      <td><?php echo $obj["firstname"]?></td>
                      <td><?php echo $obj["middlename"]?></td>
                      <td><?php echo $obj["lastname"]?></td>
                      <td><?php echo $obj["contact"]?></td>
                      <td><?php echo $obj["email"]?></td>
                      <td><?php echo $obj["birthdate"]?></td>
                      <td>
    <button type="button" class="btn btn-info btn-lg" onclick="EditRecord('<?php echo $obj['studentid']; ?>');">
        <i class="fa fa-edit"></i>
    </button>
    <button type="button" class="btn btn-danger btn-lg" onclick="DeleteRecord('<?php echo $obj['studentid']; ?>');">
        <i class="fa fa-trash"></i>
    </button>
</td>

                  </tr><?php }} ?>
                  </tfoot>
                  </table>
              </div>
              <!-- /.card-body -->
              </div>
                  <!-- /.card-body -->



      </section>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <script src="plugins/toastr/toastr.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="/plugins/jszip/jszip.min.js"></script>
  <script src="/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- Page specific script -->
  <script>
  $(function () {
  bsCustomFileInput.init();
  });
  </script>
  <script>
  $(function () {
      $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
      });
  });
  </script>
  <script>
      function DeleteRecord(studentid) {
    $.ajax({
        type: "POST",
        url: 'delete_action.php',
        data: { studentid: studentid },
        success: function (data) {
            alert(data);
            location.reload(); // Reload the page to reflect the changes
        },
        error: function () {
            alert("Error deleting record.");
        }
    });
}
  </script>
  <script>function EditRecord(studentid) {
    // Fetch data (could be done via AJAX, but for simplicity, you can pre-populate in the form)
    let firstname = prompt("Enter new first name:");
    let middlename = prompt("Enter new middle name:");
    let lastname = prompt("Enter new last name:");
    let contact = prompt("Enter new contact number:");
    let email = prompt("Enter new email:");

    $.ajax({
        type: "POST",
        url: 'update_action.php',
        data: {
            studentid: studentid,
            firstname: firstname,
            middlename: middlename,
            lastname: lastname,
            contact: contact,
            email: email,
        },
        success: function (data) {
            alert(data);
            location.reload(); // Reload the page to reflect the updated data
        },
        error: function () {
            alert("Error updating record.");
        }
    });
}
</script>
  </body>
  </html>