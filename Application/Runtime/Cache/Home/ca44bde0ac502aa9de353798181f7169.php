<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0041)http://v3.bootcss.com/examples/dashboard/ -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>topNew</title>

    <!-- Bootstrap core CSS -->
    <link href="/topNew/Public/custom/css/bootstrap.min.css" rel="stylesheet">

    <link href="/topNew/Public/custom/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/topNew/Public/custom/css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/topNew/Public/custom/css/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="/topNew/Public/custom/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/topNew/Public/custom/css/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/topNew/Public/custom/css/daterangepicker.css" rel="stylesheet">
 
    <link href="/topNew/Public/custom/css/custom.min.css" rel="stylesheet">

    <style type="text/css">

    </style>
</head>

<body>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><img src="/topNew/Public/img/logo.png"><!--  <span>北汽集团</span> --></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="/topNew/Public/custom/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>欢迎</span>
                <?php if(empty($_SESSION['admin'])): else: ?><h2></h2><?php endif; ?>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3><?php echo ($_SESSION['admin']['username']); ?></h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> 计划管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a>月度计划<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo U('Plan/formmidplan');?>">新建清单</a>
                            </li>
                            <li><a href="<?php echo U('Plan/modmidplan');?>">总结清单</a>
                            </li>
                            <li><a href="<?php echo U('Plan/midplan');?>">查看清单</a>
                            </li>
                          </ul>
                        </li>
                        
                        <!-- <li><a>季度计划<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li><a href="level2.html">新建清单</a>
                            </li>
                            <li><a href="#level2_1">修改清单</a>
                            </li>
                            <li><a href="#level2_2">查看清单</a>
                            </li>
                          </ul>
                        </li> -->
                        
                        <li><a>年度计划<span class="fa fa-chevron-down"></span></a>
                         <ul class="nav child_menu">
                            <li><a href="<?php echo U('PlanY/formmidplan');?>">新建清单</a>
                            </li>
                            <li><a href="<?php echo U('PlanY/modmidplan');?>">总结清单</a>
                            </li>
                            <li><a href="<?php echo U('PlanY/midplan');?>">查看清单</a>
                            </li>
                          </ul>
                        </li>
                    </ul>
                  </li>
                  <?php if($_SESSION['admin']['id_level']!= 3): ?><li><a><i class="fa fa-edit"></i> 绩效总评 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo U('Performance/Planconfirm');?>">月度计划确认</a></li>
                      <li><a href="<?php echo U('index/index1');?>"></a></li>
                      <li><a href="<?php echo U('index/index1');?>"></a></li>
                    </ul>
                  </li><?php endif; ?>
                  <li><a><i class="fa fa-desktop"></i> 综合查询 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo U('index/index1');?>">清单查询</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> 账户管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo U('user/pass');?>">修改密码</a></li>
                      <li><a href="<?php echo U('User/index');?>">修改个人信息</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i> 扩展功能 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo U('index/index1');?>">供应商评价</a></li>
                      <li><a href="<?php echo U('index/index1');?>">资料在线浏览</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-clone"></i>帮助 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo U('index/index1');?>">使用帮助</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
         <!--      <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.html">E-commerce</a></li>
                      <li><a href="projects.html">Projects</a></li>
                      <li><a href="project_detail.html">Project Detail</a></li>
                      <li><a href="contacts.html">Contacts</a></li>
                      <li><a href="profile.html">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.html">403 Error</a></li>
                      <li><a href="page_404.html">404 Error</a></li>
                      <li><a href="page_500.html">500 Error</a></li>
                      <li><a href="plain_page.html">Plain Page</a></li>
                      <li><a href="login.html">Login Page</a></li>
                      <li><a href="pricing_tables.html">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div> -->

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo U('Login/loginout');?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="/topNew/Public/custom/images/img.jpg" alt=""><?php if(empty($_SESSION['admin'])): else: echo ($_SESSION['admin']['username']); endif; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                   <!--  <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li> -->
                    <li><a href="<?php echo U('Login/loginout');?>"><i class="fa fa-sign-out pull-right"></i> 注销</a></li>
                  </ul>
                </li>

               <!--  <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="/topNew/Public/custom/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="/topNew/Public/custom/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="/topNew/Public/custom/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="/topNew/Public/custom/images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li> -->
                <li class="">
                 <a class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">当前时间为： <?php echo ($_SESSION['admin']['year_sys']); ?> 年 <?php echo ($_SESSION['admin']['month_sys']); ?> 月 </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>


          

<div class="right_col" role="main" style="height:960px;">
  <table>
    <tr>
      <td>
        <h1>欢迎：</h1>
      </td>
    </tr>
    <tr>
    <td>
    </td>
      <td>
        <h2><?php echo ($_SESSION['admin']['username']); ?></h2>
      </td>
    </tr>
  </table>

</div>
     
        
      </div>
    </div>
    <script src="/topNew/Public/custom/js/jquery.min.js"></script>
    <!--<script src="/topNew/Public/custom/jquery.min.js"></script>-->
    <script src="/topNew/Public/custom/js/bootstrap.min.js"></script>
    <script src="/topNew/Public/custom/js/custom.min.js"></script>
   <script src="/topNew/Public/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/topNew/Public/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- /gauge.js -->
     <script src="/topNew/Public/custom/js/moment.min.js"></script>
              <script src="/topNew/Public/custom/js/daterangepicker.js"></script>
               <script type="text/javascript">
                  $('.data').daterangepicker({
      
                    //language:"zh-CN",
                    singleDatePicker: true,
                    singleClasses: "picker_4"
                  }, function(start, end, label) {
                   // console.log(start.toISOString(), end.toISOString(), label);
                  
                  });
               </script>     
  </body>
</html>