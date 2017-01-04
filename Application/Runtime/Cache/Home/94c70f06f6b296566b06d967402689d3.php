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
              <a href="index.html" class="site_title"><img src="/topNew/Public/img/logo.png"><!-- <i class="fa fa-paw"></i> <span>北汽集团</span> --></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="/topNew/Public/custom/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>欢迎,</span>
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
                      <li><a href="<?php echo U('index/index2');?>">计划提交情况</a></li>
                      <li><a href="<?php echo U('index/index2');?>">计划总结情况</a></li>
                      <li><a href="<?php echo U('index/index2');?>">工作类别管理</a></li>
                      <li><a href="<?php echo U('index/index2');?>">清单调整</a></li>
                      <li><a href="<?php echo U('index/index2');?>">成绩管理</a></li>
                      <li><a href="<?php echo U('index/index2');?>">季度评级</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> 人员管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                       <li><a>人员管理<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo U('Planjhy/vse');?>">vse管理</a>
                            </li>
                            <li><a href="<?php echo U('Planjhy/user');?>">人员管理</a>
                            </li>
   
                      </ul>
                      </li>
                      <li><a href="<?php echo U('Planjhy/formmidplan');?>">时间控制</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> 账户管理 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo U('user/pass');?>">修改密码</a></li>
                      <!-- <li><a href="tables_dynamic.html">修改个人信息</a></li> -->
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
                    <!-- <li><a href="javascript:;"> Profile</a></li>
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

                <!-- <li role="presentation" class="dropdown">
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
              </ul>
            </nav>
          </div>
        </div>


          
<style type="text/css">
.column-title{
  text-align: center;
}
</style>

<div class="right_col" role="main">
              <div class="row">
              


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>时间周期控制</h2>
                    <div class="clearfix"></div>
                  </div>
<form id="postForm" name="postForm" action="<?php echo U('Planjhy/addmplan');?>" method="post" class="form-horizontal">
                  <div class="x_content">

                    <div class="table-responsive">

                 
                      <table class="table table-striped jambo_table bulk_action" style="text-align:center;">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">控制级别</th>                     
                            <th class="column-title">个人级</th>
                            <th class="column-title">年度</th>
                            <th class="column-title">月度</th>
                            <th class="column-title">操作</th>
                          </tr>
                        </thead>

                        <tbody>

                        <?php $__FOR_START_1598551885__=1;$__FOR_END_1598551885__=16;for($j=$__FOR_START_1598551885__;$j < $__FOR_END_1598551885__;$j+=1){ ?><tr class="even pointer">
                            <td class=" ">
                             <?php echo ($j); ?>
                            </td>
                           
                             <td class=" ">
                            <select name="id_employee[]" class="form-control" id="la[]">
                                    <option value=""> </option>
                                    <?php if(!empty($list1)): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($_SESSION['admin']['username']!= $vo[username]): ?><option value="<?php echo ($vo["id_employee"]); ?>" <?php if($list1[$j-1]['id_employee'] == $vo[id_employee]): ?>selected<?php endif; ?>><?php echo ($vo["username"]); ?><!-- <?php echo ($vo["id_employee"]); ?> --></option><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>

                                    <?php if(empty($list1)): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($_SESSION['admin']['username']!= $vo[username]): ?><option value="<?php echo ($vo["id_employee"]); ?>"><?php echo ($vo["username"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                            </select>
                            </td>
                             
                             <td class=" ">
                            <select name="plan[<?php echo ($j); ?>][year]" class="form-control">                 
                                    <option value="<?php echo ($year['1']); ?>" <?php if($list1[$j-1]['year'] == $year['1']): ?>selected<?php endif; ?>><?php echo ($year['1']); ?></option>
                                    <option value="<?php echo ($year['2']); ?>" <?php if($list1[$j-1]['year'] == $year['2']): ?>selected<?php endif; ?>><?php echo ($year['2']); ?></option>      
                            </select>
                            </td>
                             <td class=" ">
                            <select name="plan[<?php echo ($j); ?>][month]" class="form-control"> 
                                    <?php if($list1[$j-1]['month'] != ''): $__FOR_START_1114431296__=1;$__FOR_END_1114431296__=13;for($jj=$__FOR_START_1114431296__;$jj < $__FOR_END_1114431296__;$jj+=1){ ?><option value="<?php echo ($jj); ?>" <?php if($jj == $list1[$j-1]['month']): ?>selected<?php endif; ?>><?php echo ($jj); ?></option><?php } endif; ?>   
                                    <?php if($list1[$j-1]['month'] == ''): $__FOR_START_1605678838__=1;$__FOR_END_1605678838__=13;for($jj=$__FOR_START_1605678838__;$jj < $__FOR_END_1605678838__;$jj+=1){ ?><option value="<?php echo ($jj); ?>" <?php if($jj == $year['m']): ?>selected<?php endif; ?>><?php echo ($jj); ?></option><?php } endif; ?>   
                            </select>
                            </td>
                            <td>
                            <input type="hidden" name="ii[]" value="<?php echo ($list1[$j-1][id]); ?>">
                            [ <a id="<?php echo ($j); ?>" href="" onclick="fn1(this)">删除</a> ]
                            </td>
                            </tr><?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <input class="btn btn-success" type="button" id="sub" value="提交" onclick="fn()" style="margin-left:40%;width:10%;">

                  </form>
                </div>
              </div>
              </div>
</div>
     
        
      </div>
    </div>
    <script src="/topNew/Public/custom/js/jquery.min.js"></script>
    <!--<script src="/topNew/Public/custom/jquery.min.js"></script>-->
    <script src="/topNew/Public/custom/js/bootstrap.min.js"></script>
    <script src="/topNew/Public/custom/js/custom.min.js"></script>
   
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
 
<script type="text/javascript">
  function fn()
  {
      var id_employee=document.getElementsByName('id_employee[]');
      var re=0;
       for(var i=1;i<=id_employee.length;i++)
       {
          if(id_employee[i-1].value!="")
          {
            re=1;
          }
       }
      if(re==0)
      {
        alert('请选择个人级！');
        return false;
      }
      if(re==1)
      {
         document.getElementById("postForm").submit();
      }
    }
    function fn1(tt)
  {
      //console.log('11111');
      var id_employee=document.getElementsByName('id_employee[]');
      var rer=tt.id;
      
          if(id_employee[rer-1].value=="")
          {
            alert('个人级为空！');
            location.reload();//页面跳转问题
            //return false;
          }

          if(id_employee[rer-1].value!="")
          {
             if (confirm("确定要删除吗？")) 
             {
               var idd=document.getElementsByName('ii[]');
               var hehe=idd[rer-1].value;
               //alert("hehe"+hehe+"heiehi");
      //             var action = "/topNew/index.php/Planjhy/delete";
                  var action = "delete";
                 
      $.ajax({
        type:"POST",
        url:action,
        data:{"pas":hehe},
        dataType:"json",
        success:function(data){
          //alert("删除成功!");
          if(data.success==1){  
             alert("删除成功!");
              // location.reload();//页面跳转问题
              location.href='formmidplan.html';
          }
          else{
            //alert(data.success);
          alert("删除失败！");
             //location.replace(location);//页面跳转问题
          }
        }
        //error:function(e){alert(e);}
      });
                }
          }
    }
    </script>