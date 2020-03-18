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
      <li class="nav-item">
        <a class="nav-link" href="/index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Задание</span></a>
      </li>

      <li class="nav-item active">
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
            <h6 class="m-0 font-weight-bold text-primary">Загрузка и обработка файла XLSX</h6>
          </div>
          <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-12">
                    <div class="form-group col-md-12">
                      <label for="exampleFormControlFile1">Укажите файл для загрузки</label>
                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="exampleFormControlFile1" lang="ru" accept=".xlsx">
                    </div>
                    <small class="form-text text-muted">Выберите нужный файл в формате xlsx, другие форматы не обрабатываются.</small>
                  </div>
                </div>
                <button type="button" id="submit" class="btn btn-primary" id="charts_filtrs">Загрузить</button>
            </div>
          </div>

          <div id="status_upload" class="card mb-4 py-3 border-left-danger" style="display: none;">
            <div class="card-body"></div>
          </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4" id="tables" style="display: none;">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Результат обработки</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>ФИО</th>
                      <th>Остаток на счете</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Иванов Иван Иванович</td>
                      <td>13000</td>
                    </tr>
                  </tbody>
                </table>
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

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){

      var table = $('#dataTable').DataTable({
        searching: false,
        select: true,
        language: { 
          "decimal":        "",
          "emptyTable":     "Данные отсутствуют в таблице",
          "info":           "Показаны записи с _START_ по _END_ из _TOTAL_",
          "infoEmpty":      "Showing 0 to 0 of 0 entries",
          "infoFiltered":   "(filtered from _MAX_ total entries)",
          "infoPostFix":    "",
          "thousands":      ",",
          "lengthMenu":     "Показать _MENU_ записей",
          "loadingRecords": "загрузка...",
          "processing":     "Processing...",
          "search":         "Search:",
          "zeroRecords":    "По заданным условиям записей не найдено",
          "paginate": {
              "first":      "первый",
              "last":       "последний",
              "next":       "следующий",
              "previous":   "предыдущий"
          },
          "aria": {
              "sortAscending":  ": activate to sort column ascending",
              "sortDescending": ": activate to sort column descending"
          }
      }
      });

      var files; 
      $('#exampleFormControlFile1').on('change', function(){
        files = this.files;
      });

      $('#submit').on('click', function(event ){
      $('#status_upload').hide(); 
      $('#status_upload').find('.card-body').text('');
      $('#tables').hide(); 
      event.stopPropagation();
      event.preventDefault();

      if( typeof files == 'undefined' ) return;

      var data = new FormData();

      $.each( files, function( key, value ){
        data.append( key, value );
      });

      data.append('file_upload', 1);

        $.ajax({
            url: "handler.php",
            type: 'POST',
            contentType: false,
            processData: false,
            data: data,
            success: function(res){
              res = JSON.parse(res);
              if (res.length > 0) {
                for (var i=0; i<res.length; i++) {
                  if(typeof res[i]['text'] === "undefined"){
                    table.clear().draw();
                    for (var j=0; j<res.length; j++) {
                      $('#tables').show(); 
                      table.row.add( [ res[j]['id'], res[j]['name'], res[j]['val'] ] ).draw();  
                    }    
                  } else {
                    $('#status_upload').show();
                    $('#status_upload').find('.card-body').append(res[i]['text']+'<br>');   
                  }
                }
              }

            },
            error: function(res){
              res = JSON.parse(res);
              console.error(res);
              $('#status_upload').show();
              $('#status_upload').find('.card-body').append('<pre>'+res+'</pre>');
            }
          });
      })
    })
  </script>
</body>

</html>
