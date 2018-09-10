<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="view/template/admin/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="view/template/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="view/template/admin/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="view/template/admin/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="view/template/admin/lineicons/style.css">    
    <!-- Custom styles for this template -->
    <link href="view/template/admin/css/style.css" rel="stylesheet">
    <link href="view/template/admin/css/style-responsive.css" rel="stylesheet">
    <script src="view/template/admin/js/jquery-1.11.1.min.js"></script>
    <script src="view/template/admin/js/jquery.js"></script>
    <script src="view/template/admin/js/jquery.validate.js"></script>
    <script src="view/template/admin/js/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $().ready(function() {
          // validate signup form on keyup and submit
          $("#form1").validate({
            rules: {
              username: {
                required: true,
                minlength: 5
              },
              password: {
                required: true,
                minlength: 5
              },
              name_cat: {
                required: true,
              },
              title: {
                required: true,
              },
              location: {
                required: true,
              },
              preview: {
                required: true,
              },
              detail: {
                required: true,
              },
            },
            messages: {
              username: {
                required: "<span style='color:red; font-weight:bold'>Username không được để trống!!</span>",
                minlength: "<span style='color:red; font-weight:bold'>Username tối thiểu 5 kí tự !!</span>"
              },
              password: {
                required: "<span style='color:red; font-weight:bold'>Password không được để trống!!</span>",
                minlength: "<span style='color:red; font-weight:bold'>Password tối thiểu 5 kí tự !!</span>"
              },
              name_cat: {
                required: "<span style='color:red; font-weight:bold'>Tên danh mục không được để trống!!</span>",
              },
              title: {
                required: "<span style='color:red; font-weight:bold'>Tiêu đề không được để trống!!</span>",
              },
              location: {
                required: "<span style='color:red; font-weight:bold'>Địa điểm không được để trống!!</span>",
              },
              preview: {
                required: "<span style='color:red; font-weight:bold'>Mô tả không được để trống!!</span>",
              },
              detail: {
                required: "<span style='color:red; font-weight:bold'>Chi tiết không được để trống!!</span>",
              },
            }
          });
        });
    </script>
  </head>
  