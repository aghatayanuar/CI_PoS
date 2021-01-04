<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'assets/matrix/assets/images/favicon.png'?>">
    <title>Itandi Nusantara</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/matrix/assets/extra-libs/multicheck/multicheck.css'?>">
    <link href="<?php echo base_url().'assets/matrix/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/matrix/dist/css/style.min.css'?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'?>"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'?>"></script>
<![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/easyui/easyui.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/easyui/icon.css'?>">
    
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="#"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url().'assets/matrix/assets/images/logo-icon.png'?>" alt="homepage" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <!-- <img src="<?php echo base_url().'assets/matrix/assets/images/logo-text.png.css'?>" alt="homepage" class="light-logo" /> -->
                             Itandi Nusantara
                            
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="<?php echo base_url().'assets/matrix/assets/images/logo-text.png.css'?>" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                       
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url().'assets/matrix/assets/images/users/1.jpg'?>" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url().'administrator/logout'?>"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-shopping-cart"></i><span class="hide-menu">Transaksi </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="#" class="sidebar-link" onclick="addTab('Penjualan (Eceran)','<?php echo base_url().'admin/penjualan'?>')"><i class="fa fa-shopping-bag"></i><span class="hide-menu"> Penjualan (Eceran) </span></a></li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link" onclick="addTab('Penjualan (Grosir)','<?php echo base_url().'admin/penjualan_grosir'?>')"><i class="fa fa-cubes"></i><span class="hide-menu"> Penjualan (Grosir) </span></a></li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link" onclick="addTab('Pembelian','<?php echo base_url().'admin/pembelian'?>')"><i class="fa fa-shopping-cart"></i><span class="hide-menu"> Pembelian </span></a></li>

                            </ul>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"  onclick="addTab('Suplier','<?php echo base_url().'admin/suplier'?>')" ><i class="fa fa-truck"></i><span class="hide-menu">Suplier</span></a>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"  onclick="addTab('Barang','<?php echo base_url().'admin/barang'?>')" ><i class="fa fa-cubes"></i><span class="hide-menu">Barang</span></a>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"  onclick="addTab('Laporan','<?php echo base_url().'admin/laporan'?>')" ><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Laporan</span></a>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"  onclick="addTab('Kategori','<?php echo base_url().'admin/kategori'?>')" ><i class="fa fa-sitemap"></i><span class="hide-menu">Kategori</span></a>
                        </li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="javascript:void(0)" aria-expanded="false"  onclick="addTab('Pengguna','<?php echo base_url().'admin/pengguna'?>')" ><i class="fa fa-users"></i><span class="hide-menu">Pengguna</span></a>
                        </li>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div id="wrapper" >
                <div id="tt" class="easyui-tabs" style="width:100%;height:900px;">
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                Designed and Developed by <a href="#">Itandi Nusantara</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>



</body>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url().'assets/matrix/assets/libs/jquery/dist/jquery.min.js'?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url().'assets/matrix/assets/libs/popper.js/dist/umd/popper.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/matrix/assets/libs/bootstrap/dist/js/bootstrap.min.js'?>"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo base_url().'assets/matrix/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/matrix/assets/extra-libs/sparkline/sparkline.js'?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url().'assets/matrix/dist/js/waves.js'?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url().'assets/matrix/dist/js/sidebarmenu.js'?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url().'assets/matrix/dist/js/custom.min.js'?>"></script>
    <!-- this page js -->
    <script src="<?php echo base_url().'assets/matrix/assets/extra-libs/multicheck/datatable-checkbox-init.js'?>"></script>
    <script src="<?php echo base_url().'assets/matrix/assets/extra-libs/multicheck/jquery.multicheck.js'?>"></script>
    <script src="<?php echo base_url().'assets/matrix/assets/extra-libs/DataTables/datatables.min.js'?>"></script>

    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

    <script>
    function resizeIframe(obj) {
        obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
    }
    </script>

    <script type="text/javascript" src="<?php echo base_url().'assets/easyui/jquery-1.4.4.min.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/easyui/jquery.easyui.min.js'?>"></script>
    <script>
        var jQuery_1_4 = $.noConflict(true);
        function addTab(title, url){
            if (jQuery_1_4('#tt').tabs('exists', title)){
                jQuery_1_4('#tt').tabs('select', title);
            } else {
                var content = '<iframe scrolling="no" frameborder="0" src="'+url+'" style="width:100%;height:100%;overflow:hidden;"></iframe>';
                jQuery_1_4('#tt').tabs('add',{
                    title:title,
                    content:content,
                    closable:true
                });
            }
        }
    </script>

</html>

/////////////////////

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

</body>

</html>
