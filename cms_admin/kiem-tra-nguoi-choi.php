
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
            <strong>Ki???m tra ng?????i ch??i</strong>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Advanced Elements</li>
          </ol>
          <div class="row">
            <div class="col-md-3">
                  <div class="form-group">
                    <label>Ch???n c???ng</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">C???ng B1</option>
                      <option>C???ng B2</option>
                      <option>C???ng B3</option>
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
<h3 class="box-title">Tra c???u</h3>
</div>


<form class="form-horizontal">
<div class="box-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label"> Ch???n lo???i t??m ki???m  </label>
<div class="col-sm-8">
<select class="form-control">
<option>Nick name</option>
<option>S??? ??i???n tho???i</option>
<option>ID t??i kho???n</option>
<option>User Name</option>


</select></div>
</div>
<div class="form-group">
<label for="inputEmail3" class="col-sm-4 control-label"> Gi?? tr??? t??m ki???m </label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputMaVeSo" placeholder=" Gi?? tr??? t??m ki???m ">
<br/>
<button type="submit" class="btn btn-info pull-right">t??m ki???m</button>

</div>
</div>

                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Th???i gian</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control pull-right" id="reservation" placeholder="Click ????? ch???n th???i gian">


                                        </div>
                                    </div>
</div>

<div class="box-footer">
<button type="submit" class="btn btn-info pull-right">t??m ki???m</button>
</div>

</form>
</div>
            </div>

          </div>
          <div class="row">
<div class="col-md-12">
<div class="box">
  <div class="box-body">
<table class="table table-bordered table-hover">
  <thead></thead>
  <tbody>
<tbody id="accountgame-profit">
    <tr>
        <td colspan="3" class="text-center">Th??ng tin chung</td>
    </tr>
    <tr>
        <td rowspan="7">T??i kho???n</td>
        <td>ID</td>
        <td>200022666</td>
        <td>
            <span class="label label-success">ch??a k??ch ho???t b???o m???t OTP</span>
        </td>
    </tr>
    <tr>
        <td>T??i kho???n</td>
        <td>chimmoi1</td>
        <td>
            <button class="btn btn-primary">M??? kho?? giao d???ch</button>
        </td>
    </tr>
    <tr>
        <td>Tr???ng th??i</td>
        <td>
            <span class="label label-danger">Kho?? giao d???ch</span>
        </td>
        <td>
        </td>
    </tr>
    <tr>
        <td>NickName</td>
        <td>Summit</td>
        <td>
           <button class="btn btn-warning">Reset password (v??? 123456a)</button>
        </td>
    </tr>
    <tr>
        <td>S??? ??i???n tho???i</td>
        <td></td>
        <td>
            <button class="btn btn-primary"> Kho?? ch??t</button>
            <button class="btn btn-success"> M??? kho?? ch??t</button>
        </td>
    </tr>
    <tr>
        <td>S??? ??i???n tho???i SafeOtp</td>
        <td></td>
        <td>
        </td>
    </tr>
    <tr>
        <td>Ng??y t???o</td>
        <td>17/03/2022 00:00</td>
        <td>
           <button class="btn btn-warning"> C???p nh???t blacklist</button>
        </td>
    </tr>
    <tr>
        <td>Ng??y c???p nh???t S??T</td>
        <td></td>
        <td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Ghi ch??
</button>
            </button>
        </td>
        <td>
           <button class="btn btn-danger"> ????a v??o danh s??ch qu??y b??i</button>

        </td>
    </tr>
    <tr>
        <td>IP List</td>
        <td>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Hi???n th??? danh s??ch IP login</button>
        </td>
    </tr>
    <tr>
        <td>X??ng b???n c??</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="3">S??? d??</td>
        <td>Kh??? d???ng</td>
        <td>893.807.268</td>
    </tr>
    <tr>
        <td>????ng b??ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td><strong>T???ng</strong>
        </td>
        <td><strong>893.807.268</strong>
        </td>
    </tr>
    <tr>
        <td><b>Vay-N???-Qu??</b>
        </td>
        <td>
            <b style="color:red"> Hi???n t???i</b> <b>???????c vay:</b>0 <b>N??? :</b> 0 <b>Th?????ng qu??:</b>0
        </td>
        <td><b style="color:red">Tr?????c</b> <b>Th?????ng qu??:</b>0 </td>
    </tr>
    <tr>
        <td rowspan="2">VIP</td>
        <td>H???ng</td>
        <td>VIP 1</td>
    </tr>
    <tr>
        <td>VP</td>
        <td>22</td>
    </tr>
    <tr>
        <td>T???ng th?????ng</td>
        <td>VIP</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="12">T???ng v??o</td>
        <td>VIP</td>
        <td>0</td>
        <td rowspan="12">
            0
        </td>
    </tr>
    <tr>
        <td>Vay n???</td>
        <td>0</td>
    </tr>
    <tr>
        <td>Th?????ng qu??</td>
        <td>0</td>
    </tr>
    <tr>
        <td>Event</td>
        <td>0</td>
    </tr>
    <tr>
        <td>Tri ??n</td>
        <td>0</td>
    </tr>
    <tr>
        <td>N???p th???</td>
        <td>0</td>
    </tr>
    <tr>
        <td> GiftCode</td>
        <td>0</td>
    </tr>
    <tr>
        <td> N???p bank</td>
        <td>0</td>
    </tr>
    <tr>
        <td> N???p sms</td>
        <td>0</td>
    </tr>
    <tr>
        <td> Momo</td>
        <td>0</td>
    </tr>
    <tr>
        <td>Nh???n user</td>
        <td>0</td>
    </tr>
    <tr>
        <td>Nh???n ?????i l??</td>
        <td style="background-color:yellow">0</td>
    </tr>
    <tr>
        <td rowspan="4">T???ng ra</td>
        <td>?????i th???</td>
        <td>0</td>
        <td rowspan="4"> 0 </td>
    </tr>
    <tr>
        <td>R??t bank</td>
        <td>0</td>
    </tr>
    <tr>
        <td>Chuy???n user</td>
        <td>0</td>
    </tr>
    <tr>
        <td>Chuy???n ?????i l??</td>
        <td style="background-color:yellow">0</td>
    </tr>
    <tr>
        <td colspan="3" style="text-align:center"><strong>V??nh</strong>
        </td>
        <td style="background-color:red">0</td>
    </tr>
    <tr>
        <td colspan="3" class="text-center">GAME</td>
    </tr>
    <tr>
        <td rowspan="3">T???ng ch??i game</td>
        <td>?????t</td>
        <td id="profit-totalbet">450.000</td>
    </tr>
    <tr>
        <td>Nh???n</td>
        <td id="profit-totalprize">455.000</td>
    </tr>
    <tr>
        <td><strong>L???/L??i</strong>
        </td>
        <td><strong id="profit-totalprofit">5.000</strong>
        </td>
    </tr>
    <tr>
        <td colspan="3" class="text-center">CHI TI???T GAME</td>
    </tr>
    <tr>
        <td rowspan="2">Th???n T??i</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">X??ng 777</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">R???ng H???</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">Age of Empires</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">Mini Pocker</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">BA_CAY_BIEN</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">B???n Th?????ng H???i</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">Racing Wild</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">BA_CAY_GA</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">G??i Nh???y</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">Poker Texas Holdeim</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">Gem</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">MAU_BINH</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">Night Club</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">L?? ?????</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">Odins</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">B???u Cua</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">B???n C??</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">TIEN_LEN_MN</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">T??i x???u</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">X??c ????a</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">Corona</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>450.000 - 455.000</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>5.000</td>
    </tr>
    <tr>
        <td rowspan="2">V??ng quay may m???n</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">TIEN_LEN_MN_SOLO</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">Baccarat</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
    <tr>
        <td rowspan="2">Ba C??y</td>
        <td>T???ng ?????t - th?????ng</td>
        <td>0 - 0</td>
    </tr>
    <tr style="background-color: #c0c0c0;">
        <td>T???ng ?????t/th?????ng</td>
        <td>0</td>
    </tr>
</tbody>
  </tbody>
</table>
  </div>
</div>
</div>
<div class="col-md-12">
<br/>
          <div class="box">

            <div class="box-header">

              <h3 class="box-title">Tra c???u </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Game</th>
                  <th>S??? d?? tr?????c Bet</th>
                  <th>C?????c</th>
                  <th>S??? d?? sau Bet</th>
                  <th>Th?????ng</th>
                  <th>Ho??n</th>
                  <th>Phi??n</th>
                  <th>Mi??u t???</th>
                  <th>Th???i gian ch??i</th>

                </tr>

                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>T??i x???u </td>
                  <td>707.627.527</td>
                  <td>200.000.000 </td>
                  <td>716.064.727</td>
                  <td>19.978.200 </td>
                  <td>189.910.000</td>
                  <td>212400</td>
                  <td>Phi??n: #212400</td>
                  <td>17/03/2022 10:44:35 </td>
                </tr>
                </tbody>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>


</div>
<div class="col-md-12">
<br/>
          <div class="box">

            <div class="box-header">

              <h3 class="box-title">Tra c???u </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>M?? giao d???ch</th>
                  <th>T??n hi???n th???</th>
                  <th>?????i t??c</th>
                  <th>S??? d?? ban ?????u</th>
                  <th>Ph??t sinh</th>
                  <th>Ph??</th>
                  <th>S??? d?? c??n l???i</th>
                  <th>Th???i gian</th>
                  <th>M?? t???</th>
                </tr>

                </thead>
                <tbody>
                <tr>
                  <td>-</td>
                  <td>- </td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                </tr>
 
                </tbody>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Danh s??ch IP login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Device</th>
                  <th>Th???i gian login </th>
                  <th>IP</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Web
                  </td>
                  <td>17/03/2022 14:01</td>
                  <td>2402:800:6105:36d6:cc92:d029:8996:f17c</td>
                </tr>

                </tbody>
                <tfoot>
                </tfoot>
              </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">????ng</button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ghi ch?? nickname</h5><strong>Submit</strong>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form class="form-horizontal">
<div class="box-body">
<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">--Ch???n ch???c n??ng--</label>
<div class="col-sm-8">
<select class="form-control">
<option>Xin c???p l???i user name ho???c password</option>
<option>Kh??a giao d???ch user</option>
<option>Reset s??? ??i???n th???a</option>
<option>Reset m???t kh???u</option>
<option>M??? kh??a user</option>
<option>Kh??a user</option>
<option>M??? kh??a Reset Otp</option>
</select></div>
</div>

<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">Ghi ch??</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputID" placeholder="Ghi ch??">
</div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">x??? l??</label>
<div class="col-sm-8">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
</div>
</div>
-----------------------------------------------------------------------------------------------
<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">--Ch???n ch???c n??ng--</label>
<div class="col-sm-8">
<select class="form-control">
<option>Xin c???p l???i user name ho???c password</option>
<option>Kh??a giao d???ch user</option>
<option>Reset s??? ??i???n th???a</option>
<option>Reset m???t kh???u</option>
<option>M??? kh??a user</option>
<option>Kh??a user</option>
<option>M??? kh??a Reset Otp</option>
</select></div>
</div>

<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">Y??u c???u</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputID" placeholder="Y??u c???u">
</div>
</div>

<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">Ph???n h???i</label>
<div class="col-sm-8">
<input type="text" class="form-control" id="inputID" placeholder="Ph???n h???i">
</div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">x??? l??</label>
<div class="col-sm-8">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
</div>
</div>
<div class="form-group">
<label for="inputPassword3" class="col-sm-4 control-label">--</label>
<div class="col-sm-8">
  <button class="btn btn-primary">Th??m m???i</button>
</div>
</div>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Ch???c n??ng</th>
                  <th>Y??u c???u</th>
                  <th>Ph???n h???i</th>
                  <th>X??? l??</th>
                  <th>Ng??y th??ng</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>380</td>
                  <td>-
                  </td>
                  <td>-</td>
                  <td>380</td>
                  <td>-</td>
                </tr>

                </tfoot>
              </table>
</div>



</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">????ng</button>
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
