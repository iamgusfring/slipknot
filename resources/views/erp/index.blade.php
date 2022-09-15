<!DOCTYPE html>
<html>
    
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

        <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Cache-control" content="no-cache">
<meta http-equiv="Expires" content="-1">
<link rel="icon" type="image/png" href="{{ asset('vendorErp/img/Logo_Deg.png') }}"/>
<title>ERP Lazarus</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.6 -->
<link rel="stylesheet" href="{{ asset('vendorErp/bootstrap/css/bootstrap.min.css') }}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('vendorErp/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!-- Ionicons -->
<link rel="stylesheet" href="{{ asset('vendorErp/plugins/ionicons-2.0.1/css/ionicons.min.css') }}">
<!-- Theme style -->

<link rel="stylesheet" href="{{ asset('vendorErp/dist/css/AdminLTE.min.css') }}">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="{{ asset('vendorErp/dist/css/skins/_all-skins.min.css') }}">
<!-- iCheck -->


<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="{{ asset('vendorErp/plugins/iCheck/all.css') }}">

<!-- Morris chart -->
<link rel="stylesheet" href="{{ asset('vendorErp/plugins/morris/morris.css') }}">
<!-- jvectormap -->
<link rel="stylesheet" href="{{ asset('vendorErp/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
<!-- Date Picker -->
<link rel="stylesheet" href="{{ asset('vendorErp/plugins/datepicker/datepicker3.css') }}">
<!-- Daterange picker -->
<link rel="stylesheet" href="{{ asset('vendorErp/plugins/daterangepicker/daterangepicker.css') }}">
<!-- bootstrap wysihtml5 - text editor 
<link rel="stylesheet" href="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
-->
<!-- DataTables -->
<!--<link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css') }}">-->
<link rel="stylesheet" href="{{ asset('vendorErp/plugins/datatables/dataTables.bootstrap.css') }}">
<link rel="stylesheet" href="{{ asset('vendorErp/plugins/datatables/buttons.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendorErp/plugins/datatables/extensions/FixedColumns/css/dataTables.fixedColumns.min.css') }}">
<!--<link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/colreorder/1.4.1/css/colReorder.dataTables.min.css') }}">-->
<link rel="stylesheet" href="{{ asset('vendorErp/plugins/croppie/croppie.css') }}">
<!--angular js-->
<link href="{{ asset('vendorErp/plugins/fixed-table-rows-cols-master/css/fixed_table_rc.css') }}" type="text/css" rel="stylesheet" media="all" />
<script src="{{ asset('vendorErp/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->


<!-- custom styles -->
<link rel="stylesheet" href="{{ asset('vendorErp/css/custom_styles.css') }}">
<script src="{{ asset('js/erp/visitor.js') }}"></script>


        <style>
            body{background: url("vendorErp/img/28.jpg"); background-size: cover;}
            .pass_box{
                -webkit-text-security:disc;
            }

        </style>

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="login_box">
            <form class="form-horizontal"  action="{{ url('erp') }}" method="POST" autocomplete="on" name="loginForm">
				@csrf
                <table class="table">
                    <tr>
                        <td>
                            <h3>
                                ERP Login
                            </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">

                                <div class="col-sm-12">          
                                    <h5 style="color:red;"></h5>
                                </div>
                            </div>
                        </td>    
                    </tr>
                    
                    
                    <tr>
                        <td>
                            <div class="form-group">

                                <div class="col-sm-12">          

                                    <input type="password" class="form-control" id="user_pass"  name="old_password" placeholder="Contraseña anterior" autocomplete="new-password" required>
                                    <p style="text-align: left; border: 0px solid #fff; margin: 0px; line-height: 0; line-height: 1.42857143; background-color: transparent; padding: 5px 0px;">
                                    </p>

                                </div>
                            </div>
                        </td>    
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group">

                                <div class="col-sm-12">          

                                    <input type="password" class="form-control" id="user_pass"  name="password" placeholder="Nueva contraseña" autocomplete="new-password" required>
                                    <p style="text-align: left; border: 0px solid #fff; margin: 0px; line-height: 0; line-height: 1.42857143; background-color: transparent; padding: 5px 0px;">
                                    </p>

                                </div>
                            </div>
                        </td>    
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group">

                                <div class="col-sm-12">          

                                    <input type="password" class="form-control" id="user_pass"  name="new_password" placeholder="Confirmar nueva contraseña" autocomplete="new-password" required>
                                    <p style="text-align: left; border: 0px solid #fff; margin: 0px; line-height: 0; line-height: 1.42857143; background-color: transparent; padding: 5px 0px;">
                                    </p>

                                </div>
                            </div>
                        </td>    
                    </tr>


                    <tr>
                        <td>
                            <div class="form-group" style="">        
                                <div class="col-sm-12">
                                    <button type="submit" class="btn pull-right btn_login form-control">Restaurar contraseña</button>
                                </div>
                            </div>
                        </td>
                    </tr>

                </table>
                <div id="ipInfo"></div>
				<input type="text" class="hidden" id="ip" name="ip" value="{{ $getIpAddress }}">
            </form>

        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
<script src="{{ asset('vendorErp/plugins/jQuery/jquery-2.2.3.min6d24.js?n=1') }}"></script>

<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('vendorErp/plugins/jQueryUI/jquery-ui.min6d24.js?n=1') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('vendorErp/bootstrap/js/bootstrap.min6d24.js?n=1') }}"></script>



<!-- InputMask -->
<script src="{{ asset('vendorErp/plugins/input-mask/jquery.inputmask6d24.js?n=1') }}"></script>
<script src="{{ asset('vendorErp/plugins/input-mask/jquery.inputmask.date.extensions6d24.js?n=1') }}"></script>


<script src="{{ asset('vendorErp/plugins/morris/raphael-min6d24.js?n=1') }}"></script>
<script src="{{ asset('vendorErp/plugins/morris/morris.min6d24.js?n=1') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('vendorErp/plugins/sparkline/jquery.sparkline.min6d24.js?n=1') }}"></script>
<!-- jvectormap -->
<script src="{{ asset('vendorErp/plugins/jvectormap/jquery-jvectormap-1.2.2.min6d24.js?n=1') }}"></script>
<script src="{{ asset('vendorErp/plugins/jvectormap/jquery-jvectormap-world-mill-en6d24.js?n=1') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('vendorErp/plugins/knob/jquery.knob6d24.js?n=1') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('vendorErp/plugins/daterangepicker/moment.min6d24.js?n=1') }}"></script>
<script src="{{ asset('vendorErp/plugins/daterangepicker/daterangepicker6d24.js?n=1') }}"></script>
<!-- datepicker -->
<script src="{{ asset('vendorErp/plugins/datepicker/bootstrap-datepicker6d24.js?n=1') }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<!-- iCheck 1.0.1 -->
<script src="{{ asset('vendorErp/plugins/iCheck/icheck.min6d24.js?n=1') }}"></script>

<!-- Slimscroll -->
<script src="{{ asset('vendorErp/plugins/slimScroll/jquery.slimscroll.min6d24.js?n=1') }}"></script>
<!-- FastClick -->
<script src="{{ asset('vendorErp/plugins/fastclick/fastclick6d24.js?n=1') }}"></script>
<!-- DataTables -->
<script src="{{ asset('vendorErp/plugins/datatables/datatables.min6d24.js?n=1') }}"></script>
<script src="{{ asset('vendorErp/plugins/datatables/dataTables.bootstrap.min6d24.js?n=1') }}"></script>
<script src="{{ asset('vendorErp/plugins/datatables/dataTables.buttons.min6d24.js?n=1') }}"></script>
<script src="{{ asset('vendorErp/plugins/datatables/date-eu6d24.js?n=1') }}"></script>
<script src="{{ asset('vendorErp/plugins/datatables/buttons.flash.min6d24.js?n=1') }}"></script>
<script src="{{ asset('vendorErp/plugins/datatables/jszip.min6d24.js?n=1') }}"></script>
<!--<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js?n=1') }}"></script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js?n=1') }}"></script>-->
<script src="{{ asset('vendorErp/plugins/datatables/buttons.html5.min6d24.js?n=1') }}"></script>
<script src="{{ asset('vendorErp/plugins/datatables/buttons.print.min6d24.js?n=1') }}"></script>
<script src="{{ asset('vendorErp/plugins/datatables/buttons.colVis.min6d24.js?n=1') }}"></script>
<script src="{{ asset('vendorErp/plugins/datatables/extensions/FixedColumns/js/dataTables.fixedColumns.min6d24.js?n=1') }}"></script>
<!--<script src="{{ asset('https://cdn.datatables.net/colreorder/1.4.1/js/dataTables.colReorder.min.js?n=1') }}"></script>-->
<script src="{{ asset('vendorErp/plugins/croppie/croppie6d24.js?n=1') }}"></script>
<script type="text/javascript" src="js/upload6d24.js?n=1') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('vendorErp/dist/js/app.min6d24.js?n=1') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- AdminLTE for demo purposes -->
<script src="{{ asset('vendorErp/dist/js/demo6d24.js?n=1') }}"></script>
<script src="{{ asset('js/angular.min6d24.js?n=1') }}"></script>
<script src="{{ asset('js/sidebar6d24.js?n=1') }}"></script>
<script type="text/javascript" src="{{ asset('js/xlsx_html.full.min6d24.js?n=1') }}"></script>
<script src="{{ asset('vendorErp/plugins/fixed-table-rows-cols-master/js/fixed_table_rc6d24.js?n=1') }}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-VQ56VT4R90"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VQ56VT4R90');
</script>-->        <script>
            //document.forms["loginForm"]["user_email"].focus();
            if (!("autofocus" in document.createElement("input"))) {
                document.getElementById("user_email").focus();
            }
            $(document).ready(function () {
                $("form").keypress(function (e) {
                    var key = e.charCode || e.keyCode || 0;
                    if (key == 13) {
                        //     alert("Do Press Enter!");
                        //   e.preventDefault();
                        // return false;
                    }
                });
                sessionStorage.clear();

                $("#show_pass").click(function () {
                    
                    var x = document.getElementById("user_pass");
                    if (x.type === "password") {
                        x.type = "text";
                    } else {
                        x.type = "password";
                    }
                });
            });

//        window.onload = function() {
//  document.getElementById("user_email").focus();
//};
        </script>

    </body>


</html>
