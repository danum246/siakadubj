<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard - Siakad UBJ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/pages/dashboard.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/pages/reports.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/js/jquery-ui/css/ui-lightness/jquery-ui-1.9.2.custom.css" rel="stylesheet">
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script> 
</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="#"><img src="<?php echo base_url();?>assets/logo.png" style="width:40px;float:left;margin-top:-8px;margin-bottom:-13px">
            <span style="margin-left:10px;line-height:-15px">SISTEM INFORMASI AKADEMIK UBHARA JAYA</span></a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> <?php $user = $this->session->userdata('sess_login'); echo $user['nama']; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Data Pribadi</a></li>
              <li><a href="<?php echo base_url();?>extra/account">Ganti Password</a></li>
              <li><a href="<?php echo base_url();?>auth/logout">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li class="active" ><a href="<?php echo base_url();?>dashboard"><i class="icon-home"></i><span >Dashboard</span> </a>
        <?php $q = $this->login_model->getparentmenu()->result(); foreach ($q as $menu) { if (($menu->url) == '-') { ?>
            <li class="dropdown active"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
        <?php } elseif (($menu->url) == '#') { ?>
            <li class="active" ><a href="<?php echo $menu->url; ?>">
        <?php } else { ?>
            <li class="active" ><a href="<?php echo base_url();?><?php echo $menu->url; ?>">
        <?php } ?>
            <i class="<?php echo $menu->icon; ?>"></i><span ><?php echo $menu->menu; ?></span> </a>

        <?php if (($menu->url) == '-') { ?>
                <ul class="dropdown-menu">
                 <?php $qd = $this->login_model->getmenu($menu->id_menu)->result(); foreach ($qd as $row) { ?>
                     <?php if (($row->url) == '#') { ?>
                        <li><a href="<?php echo $row->url; ?>">
                    <?php } else { ?>
                        <li><a href="<?php echo base_url();?><?php echo $row->url; ?>">
                    <?php } ?>
                    <?php echo $row->menu; ?></a></li>
                    <?php } ?>
                  </ul>
                <?php } ?>
            </li>
        <?php } ?>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container">
      <!-- load page -->
      <?php $this->load->view($page); ?>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
<div class="footer">
  <div class="footer-inner">
    <div class="container">
      <div class="row">
        <div class="span12"> &copy; <?php echo date('Y'); ?> - <a target="_blank" href="http://ubharajaya.ac.id/">Universitas Bhayangkara Jakarta Raya</a>. </div>
        <!-- /span12 --> 
      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /footer-inner --> 
</div>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster -->  
<script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/js/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $("#example1").dataTable();
        $("#example3").dataTable();
        $("#example4").dataTable();
        $("#example5").dataTable();
        $('#example2').dataTable({
            "bPaginate": true,
            "bLengthChange": true,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": true
        });
    });
</script>
<!--script type="text/javascript">
    $(function() {
        $("#analisa1").dataTable({
          "bPaginate": false,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": false,
            "bAutoWidth": true
        });
        $("#analisa2").dataTable({
          "bPaginate": false,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": false,
            "bAutoWidth": true
        });
        $("#analisa3").dataTable({
          "bPaginate": false,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": false,
            "bAutoWidth": true
        });
        $("#analisa4").dataTable({
          "bPaginate": false,
            "bLengthChange": false,
            "bFilter": false,
            "bSort": true,
            "bInfo": false,
            "bAutoWidth": true
        });
    });
</script-->

</body>
</html>
