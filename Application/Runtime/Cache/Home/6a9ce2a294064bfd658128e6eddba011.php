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


          

<div class="right_col" role="main" style="">
  
          
<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12" style="height:100%;">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>VSE未删除人员 <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- <p class="text-muted font-13 m-b-30">
                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p> -->
                    <table id="datatable2" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>vse</th>
                          <th>vse_id</th>
                          <th>科室</th>
                          <th>上级</th>
                          <th>project</th>
                          <th>操作</th>
                        </tr>
                      </thead>


                      <tbody>
                       <?php if(is_array($vse)): $i = 0; $__LIST__ = $vse;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                       <td><?php echo ($vo["id"]); ?></td>
                       <td><?php echo ($vo["vse"]); ?></td>
                       <td><?php echo ($vo["vse_id"]); ?></td>
                       <td><?php echo ($vo["office"]); ?></td>
                       <td><?php echo ($vo["leader"]); ?></td>
                       <td><?php echo ($vo["project"]); ?></td>
                       <td style="width:250px;">
                       <a class="btn btn-default btn-lg active" href="#" onclick="fn(this)" role="button" data-toggle="modal"  data-target="#bianji">编辑</a>
                       <a id="<?php echo ($vo["id"]); ?>" class="btn btn-default btn-lg active" onclick="fnn(this)">删除</a>
                       </td>
                       </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                      </tbody>
                    </table>
                    <a class="btn btn-default btn-lg active" href="#" role="button" data-toggle="modal"  data-target="#login">添加</a>
                  </div>
                </div>
              </div>


              <div class="col-md-12 col-sm-12 col-xs-12" style="height:100%;">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>VSE删除人员 <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- <p class="text-muted font-13 m-b-30">
                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p> -->
                    <table id="datatable3" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>vse</th>
                          <th>vse_id</th>
                          <th>科室</th>
                          <th>上级</th>
                          <th>project</th>
                          <th>操作</th>
                        </tr>
                      </thead>


                      <tbody>
                       <?php if(is_array($vse1)): $i = 0; $__LIST__ = $vse1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                       <td><?php echo ($vo["id"]); ?></td>
                       <td><?php echo ($vo["vse"]); ?></td>
                       <td><?php echo ($vo["vse_id"]); ?></td>
                       <td><?php echo ($vo["office"]); ?></td>
                       <td><?php echo ($vo["leader"]); ?></td>
                       <td><?php echo ($vo["project"]); ?></td>
                       <td><a id="<?php echo ($vo["id"]); ?>" class="btn btn-default btn-lg active" onclick="fnnn(this)">恢复</a></td>
                       </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
</div>
</div>


<div class="modal fade" id="login" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true" style="float: right; border: 1px solid #333;"> 
     <div class="modal-dialog">
      <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" 
           data-dismiss="modal" aria-hidden="true">
            &times;
        </button>
        <h4 class="modal-title" id="myModalLabel">
           添加VSE：
        </h4>
       </div>
       <!--登陆主体 -->
      <div class="modal-body">
          
         <table class="table">
          <tr>
            <th>VSE:</th>
            <td>
            <div class="form-group has-success"><select  class="form-control" id="vse" name="vse">
            <option value=""></option>
              <?php if(is_array($form_vse)): $i = 0; $__LIST__ = $form_vse;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$form_vse): $mod = ($i % 2 );++$i;?><option value="<?php echo ($form_vse["username"]); ?>"><?php echo ($form_vse["username"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select></div></td>
          </tr>
          <!-- <tr>
            <th>工号:</th><td><input type="text" name="lzh_upass" id="lzh_upass" 
            class="form-control"
            placeholder="password"></td>
          </tr> -->
          <tr>
            <th>project:</th>
            <td><div class="form-group has-success"><select  class="form-control" id="projectt" name="projectt">
            <option value=""></option>
              <?php if(is_array($project)): $i = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["project_name"]); ?>"><?php echo ($v["project_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select></div></td>
          </tr>
         </table>
         <input type="button" id="sub-form" class="btn-block btn-lg btn-primary" value="提交">
          
      </div>
      </div><!-- /.modal-content -->
      </div><!-- /.modal -->
</div>



<div class="modal fade" id="bianji" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true" style="float: right; border: 1px solid #333;"> 
     <div class="modal-dialog">
      <div class="modal-content">
       <div class="modal-header">
        <button type="button" class="close" 
           data-dismiss="modal" aria-hidden="true">
            &times;
        </button>
        <h4 class="modal-title" id="myModalLabel">
           编辑VSE：
        </h4>
       </div>
       <!--编辑主体 -->
      <div class="modal-body">
          
         <table class="table">
          <tr>
            <th>vse_id:</th>
            <td><input type="hidden" id="text0" class="form-control">
          <input type="text" id="text2" name="text[]" class="form-control" disabled="disabled"></td>
          </tr>
          <tr>
            <th>VSE:</th>
          <td><input type="text" id="text1" name="text[]" class="form-control" disabled="disabled"></td>
          </tr>
          <tr>
            <th>project:</th>
            <td><select class="form-control" id="itempro">
            <option value=""></option>
             <?php if(is_array($project)): $i = 0; $__LIST__ = $project;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pro): $mod = ($i % 2 );++$i;?><option value="<?php echo ($pro["project_name"]); ?>"><?php echo ($pro["project_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select></td>
          </tr>
         </table>
         <input type="button" id="sub-mod" class="btn-block btn-lg btn-primary" value="提交">
          
      </div>
      </div><!-- /.modal-content -->
      </div><!-- /.modal -->
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
 
 
    <!-- Datatables -->
    <script src="/topNew/Public/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/topNew/Public/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- Datatables -->
<script type="text/javascript">
 $(document).ready(function() {
       

        $('#datatable2').dataTable();

        $('#datatable3').dataTable();

      });
    
    $(function(){
    $("#sub-form").click(function(){
      var vse = $("#vse").val();
      var project = $("#projectt").val();
      var action = "vseform";
      if(vse=="" || project==""){
        alert("vse和projcet不能为空");
        return false;
      }
      $.ajax({
        type:"POST",
        url:action,
        dataType:"json",
        data:{"vse":vse,"project":project},
        success:function(data){
          if(data.success==1){
            alert('添加成功!');
            location.href='vse.html';
          }
          if(data.success==-1){  
            alert('已存在该vse!');
          }
          if(data.success==0){ 
          //alert(data.username);
          alert("添加失败！");
            return false;
          }
        }
      });
  });
    $("#sub-mod").click(function(){
      var itemid = $("#text0").val();
      var itempro = $("#itempro").val();
      var itemuid = $("#text2").val();
      var action = "vsemod";
      if(itempro==""){
        alert("请选择项目！");
        return false;
      }
      $.ajax({
        type:"POST",
        url:action,
        dataType:"json",
        data:{"itemid":itemid,"itempro":itempro,"itemuid":itemuid},
        success:function(data){
          if(data.success==1){
            alert('编辑成功!');
            //alert(data.ss);
            location.href='vse.html';
          }
          if(data.success==-1){  
            alert('该vse已有该工程!');
          }
          if(data.success==0){ 
          //alert(data.username);
          alert("编辑失败！");
            return false;
          }
        }
      });
  });
  });
    
    function fn(tt){
       var tr1 = tt.parentNode.parentNode;  
       for(var i=0;i<=4;i++)
       {
            document.getElementById("text"+i).value = tr1.cells[i].innerText;
       }
    }
    function fnn(nn){
       var re=nn.id;
       //alert(re);
       var action = "deletevse";
    if (confirm("确定要删除吗？")) 
             {      
      $.ajax({
        type:"GET",
        url:action,
        data:{"vid":re},
        dataType:"json",
        success:function(data){
          if(data.success==1){  
             alert("删除成功!");
              location.href='vse.html';
          }
          else{
          alert("删除失败！");
          }
        }
      });
    }
  }
  function fnnn(nn){
       var re=nn.id;
       //alert(re);
       var action = "recovervse";
    if (confirm("确定要恢复吗？")) 
             {      
      $.ajax({
        type:"GET",
        url:action,
        data:{"vid":re},
        dataType:"json",
        success:function(data){
          if(data.success==1){  
             alert("恢复成功!");
              location.href='vse.html';
          }
          else{
          alert("恢复失败！");
          }
        }
      });
    }
  }
     
    </script>
    <!-- /Datatables -->