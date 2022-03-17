
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Advanced form elements</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="plugins/iCheck/all.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="plugins/colorpicker/bootstrap-colorpicker.min.css">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="plugins/select2/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

<?php include 'header.php';?>
      <!-- Left side column. contains the logo and sidebar -->
<?php include 'sidebar.php';?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Rol
            <strong>Duyệt thẻ</strong>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Advanced Elements</li>
          </ol>
          <div class="row">
            <div class="col-md-3">
                  <div class="form-group">
                    <label>Chọn cổng</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Cổng B1</option>
                      <option>Cổng B2</option>
                      <option>Cổng B3</option>
                    </select>
            </div>
          </div>


          </div>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
           <div class="row">
            <div class="col-md-6">
<div class="box box-info">
<div class="box-header with-border">
<h3 class="box-title">Tra cứu</h3>
</div>


<form class="form-horizontal">
<div class="box-body">
<div class="form-group">
<label for="inputEmail3" class="col-sm-4 control-label">Tên đăng nhập</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputMaVeSo" placeholder="Tên đăng nhập">
</div>
</div>
<div class="form-group">
<label for="inputEmail3" class="col-sm-4 control-label">NickName</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputMaVeSo" placeholder="NickName">
</div>
</div>
<div class="form-group">
<label for="inputEmail3" class="col-sm-4 control-label">Mã thẻ</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputMaVeSo" placeholder="Mã thẻ">
</div>
</div>
<div class="form-group">
<label for="inputEmail3" class="col-sm-4 control-label">Giá trị thẻ</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputMaVeSo" placeholder="Giá trị thẻ">
</div>
</div>
<div class="form-group">
<label for="inputEmail3" class="col-sm-4 control-label">Ngày mua</label>
<div class="col-sm-8">
<input type="text" class="form-control pull-right" id="reservation" placeholder="click để nhập thời gian">


</div>
</div>

<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">Trạng thái</label>
<div class="col-sm-8">
<select class="form-control">
<option>Trạng thái</option>
<option>Thành công</option>
<option>Thất bại</option>
<option>Chờ duyệt</option>
<option>Huỷ đổi thẻ</option>

</select></div>
</div>



</div>

<div class="box-footer">
<button type="submit" class="btn btn-info pull-right">tìm kiếm</button>
</div>

</form>
</div>
            </div>

          </div>
          <div class="row">
<div class="col-md-12">
<br/>
          <div class="box">

            <div class="box-header">

              <h3 class="box-title">Tra cứu </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Tên đăng nhập</th>
                  <th>Nickname</th>
                  <th>Số serial</th>
                  <th>NickName nhận</th>
                  <th>Giá trị thẻ</th>
                  <th>Ngày mua</th>
                  <th>Trạng thái</th>
                  <th>Action</th>


                </tr>
                <tr>
                  <th>-</th>
                  <th>-</th>
                  <th>-</th>
                  <th>-</th>
                  <th>-</th>
                  <th>-</th>
                  <th>-</th>
                  <th>-</th>


                </tr>
                </thead>
                <tbody>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

</div>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh sửa đại lý</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form class="form-horizontal">
<div class="box-body">
<div class="form-group">
<label for="inputEmail3" class="col-sm-4 control-label">Tên đại lý</label>
<div class="col-sm-8">
vipsilip</div>
</div>
<div class="form-group">
<label for="inputEmail3" class="col-sm-4 control-label">Tên giao dịch</label>
<div class="col-sm-8">
abcxyz</div>
</div>
<div class="form-group">
<label for="inputEmail3" class="col-sm-4 control-label">Số điện thoại</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputID" placeholder="Số điện thoại">
</div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">Số điện thoại hiển thị</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputID" placeholder="Số điện thoại">
</div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">facebook</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputID" placeholder="link facebook">
</div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">Telegram</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputID" placeholder="link telegram">
</div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">Zalo</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputID" placeholder="Link zalo">
</div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">Đại lý tuyến trên(nếu có),</label>
<div class="col-sm-8">
<select class="form-control">
<option>Đại lý tuyến trên</option>


</select></div>
</div>

<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">Khu vực</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputID" placeholder="tên khu vực">
</div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">Vị trí hiển thị</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputID" placeholder="Số điện thoại">
</div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">Trạng thái</label>
<div class="col-sm-8">
<select class="form-control">
<option>Tất cả</option>
<option>hoạt động</option>
<option>Bị khoá</option>
<option>ngừng hoạt động</option>

</select></div>
</div>

<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">Cấp đại lý</label>
<div class="col-sm-8">
<select class="form-control">
<option>Tất cả</option>
<option>Đại lý cấp 1</option>
<option>Đại lý cấp 2</option>

</select></div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">Trạng thái</label>
<div class="col-sm-8">
<select class="form-control">
<option>Tất cả</option>
<option>hoạt động</option>
<option>Bị khoá</option>
<option>ngừng hoạt động</option>

</select></div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">Loại ví</label>
<div class="col-sm-8">
<select class="form-control">
<option>Ví chính</option>
<option>Ví giftcode</option>
</select></div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">Số tiền trong ví</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputID" placeholder="5000000">
</div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">Số tiền muốn thu hồi</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputID" placeholder="Số tiền muốn thu hồi">
</div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">Ghi chú</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputID" placeholder="Ghi chú">
</div>
</div>
</div>



</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary">Lưu</button>
      </div>
    </div>
  </div>
</div>
          </div>
</section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked>
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right">
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="plugins/select2/select2.full.min.js"></script>
    <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
    <!-- bootstrap time picker -->
    <script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- iCheck 1.0.1 -->
    <script src="plugins/iCheck/icheck.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page script -->
    <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        $('#reservationtimez').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
    <script>
      $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
      <script type="text/javascript">
         $(function () {
             $('#datetimepicker1').datetimepicker();
         });
      </script>
  </body>
</html>
