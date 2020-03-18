<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Задание</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/result.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Решение</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <p class="h3 mb-2 text-gray-800">ООО УК «ОТКРЫТИЕ»</p>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="card shadow mb-4" data-example-id="">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Тестовое задание.</h6>
            </div>
            <div class="card-body">

                <div class="row">
                  <div class="form-group col-md-12">

                    <p>Требования:</p>
                    <p>Необходимо реализовать страницу с формой для загрузки файла и обработку загруженного файла.</p>

                    <p>Файл можно загружать только с расширение xlsx.</p>

                    <p>При загрузке файла предполагается, что это excel-файл и в нем 2 листа. Первый называется «first», второй «second»</p>

                    <p>На первом листе в первой, второй, и третьей колонке id клиента и ФИО клиента, и начальный остаток</p>

                    <p>На втором листе  в первой и второй колонке  id клиента и вводы/выводы клиента в рублях.</p>

                    <p>В случае, если не выполняется какое-либо из условий, должно выводиться сообщение об ошибке.</p>

                    <p>Необходимо реализовать загрузку файла и вывод текущий остаток с учетом вводов/выводов.</p>

                    <p>Пример файла приложен. Система, разумеется, должна обрабатывать не только этот конкретный файл, а все файлы такого типа (а на  ошибочные  выдавать ошибки).</p>

                    <p>Задание должно быть выполнено либо на Yii 1.x,  либо  на чистом PHP, без использования фреймворков. Сторонние модули для работы с excel использовать можно (при необходимости найти самостоятельно).</p>

                  </div>
                </div>

            </div>
          </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
