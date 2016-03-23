<?php if (!defined('THINK_PATH')) exit();?>
  <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>里程密-会员查看</title>
    <link href="/li/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/li/Public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/li/Public/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/li/Public/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="/li/Public/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="/li/Public/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/li/Public/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/li/Public/css/animate.css" rel="stylesheet">
    <link href="/li/Public/css/style.css" rel="stylesheet">

</head>
<style>
    th{
        text-align: center;
    }
</style>
<body>
    <div id="wrapper">

        <!-- start left -->

      <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">里程密</strong>
                             </span> <span class="text-muted text-xs block">我是管理员<b class="caret"></b></span> </span> </a>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li class="active">
                <a href="/li/INDEX.PHP/Admin/Index/index"><i class="fa fa-diamond"></i> <span class="nav-label">后台首页</span> <span class="label label-primary pull-right">NEW</span></a>
            </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">网站设置</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li ><a href="/li/INDEX.PHP/Admin/Site/index">网站管理</a></li>
                            <li ><a href="/li/INDEX.PHP/Admin/Email/index">网站邮件设置</a></li>
                            <li ><a href="/li/INDEX.PHP/Admin/Adminer/index">管理员修改</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">网站分类管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/li/INDEX.PHP/Admin/Fenlei/index">查看分类</a></li>
                            <li ><a href="/li/INDEX.PHP/Admin/Fenlei/add">添加分类</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">首页幻灯片管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/li/INDEX.PHP/Admin/Slides/index">查看幻灯片</a></li>
                            <li ><a href="/li/INDEX.PHP/Admin/Slides/add">添加幻灯片</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">网站邀请码管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/li/INDEX.PHP/Admin/Yaoqing/index">查看邀请码</a></li>
                            <li ><a href="/li/INDEX.PHP/Admin/Yaoqing/add">添加邀请码</a></li>
                            <li ><a href="/li/INDEX.PHP/Admin/Yaoqing/production">生成邀请码</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">网站公告</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/li/INDEX.PHP/Admin/Gonggao/index">查看公告</a></li>
                            <li ><a href="/li/INDEX.PHP/Admin/Gonggao/add">添加公告</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">文章管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/li/INDEX.PHP/Admin/Article/index">查看文章</a></li>
                            <li><a href="/li/INDEX.PHP/Admin/Article/recovery">文章回收站</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">会员管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/li/INDEX.PHP/Admin/User/index">会员查看</a></li>
                            <li><a href="/li/INDEX.PHP/Admin/User/recovery">会员回收站</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">留言管理</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/li/INDEX.PHP/Admin/Liuyan/index">留言查看</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">网站维护</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/li/INDEX.PHP/Admin/Maintain/index">缓存清理</a></li>
                            <li><a href="/li/INDEX.PHP/Admin/Maintain/dataBackups">备份还原数据库</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">友情链接</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/li/INDEX.PHP/Admin/friendlink/index">查看友链</a></li>
                            <li><a href="/li/INDEX.PHP/Admin/friendlink/add">添加友链</a></li>
                        </ul>
                    </li>
                <li>
                    <a href="/li/INDEX.PHP/Admin/Login/logout">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <!-- start top -->
        
  <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>[title]</title>
    <link href="/li/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/li/Public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/li/Public/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
    <link href="/li/Public/css/plugins/dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="/li/Public/css/plugins/dataTables/dataTables.tableTools.min.css" rel="stylesheet">
    <!-- Toastr style -->
    <link href="/li/Public/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/li/Public/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/li/Public/css/animate.css" rel="stylesheet">
    <link href="/li/Public/css/style.css" rel="stylesheet">

</head>
<style>
    th{
        text-align: center;
    }
</style>
<body>
    <div id="wrapper">

        <!-- end top -->
        <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>会员查看</h2>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>爱我所选，选我所爱，爱里程密，爱生活！</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>序号</th>
                        <th>账号</th>
                        <th>昵称</th>
                        <th>注册时间</th>
                        <th>上次登录时间</th>
                        <th>上次登录IP</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($list)): foreach($list as $k=>$vo): ?><tr class="gradeU">
                        <td><?php echo ($vo["id"]); ?></td>
                        <td><?php echo ($vo["email"]); ?></td>
                        <td><?php echo ($vo["truename"]); ?></td>
                        <td><?php echo (date( "Y-m-d H:i:s",$vo["ctime"])); ?></td>
                        <td><?php echo (date( "Y-m-d H:i:s",$vo["lasttime"])); ?></td>
                        <td><?php echo ($vo["ip"]); ?></td>
                        <td><?php if($vo["status"] == 1): ?><span style = "color:red;">禁用</span><?php else: ?><span class="label label-info">启用</span><?php endif; ?></td>
                        <td>
                           <a href="/li/INDEX.PHP/Home/Blog/index/id/<?php echo ($vo["id"]); ?>" target="_blank"><button type="button" class="btn btn-w-m btn-warning">查看</button></a>
                            <a href="/li/INDEX.PHP/Admin/User/delete/id/<?php echo ($vo["id"]); ?>" onclick = "return shifou();"><button type="button" class="btn btn-w-m btn-danger">禁用</button></a>
                        </td>
                    </tr><?php endforeach; endif; ?>
                    <?php echo ($page); ?>
                    </tbody>

                    </table>

                    </div>
                </div>
            </div>
            </div>

    <!-- start footer -->
                    
<div class="footer">
    <div class="pull-right">
        <a href="http://www.lcm.wang/">里程密开源博客系统</a>
    </div>
    <div>
        <strong>请保持版权</strong>谢谢合作 &copy; 2014-2016
    </div>
</div>
</div>
<script type="text/javascript">
    function shifou(){
        if(confirm("年轻人，你真的想好了吗？")){
            return true;
        }else{
            return false;
        }
    }
</script>
</body>
</html>
           <!-- Mainly scripts -->
    <script src="/li/Public/js/jquery-2.1.1.js"></script>
    <script src="/li/Public/js/inspinia.js"></script>
    <script src="/li/Public/js/bootstrap.min.js"></script>
    <script src="/li/Public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/li/Public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="/li/Public/js/plugins/flot/jquery.flot.js"></script>
    <script src="/li/Public/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/li/Public/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="/li/Public/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/li/Public/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="/li/Public/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="/li/Public/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->

    <script src="/li/Public/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="/li/Public/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="/li/Public/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="/li/Public/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="/li/Public/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="/li/Public/js/plugins/chartJs/Chart.min.js"></script>
<script>
        var s_url=window.location.pathname;
        var now_url = '';
        for(var i = 0;i<$("#side-menu li").length;i++){
            now_url=$("#side-menu li a").eq(i).attr("href");
            if(now_url == s_url){
                $("#side-menu a").eq(i).parent().addClass("active");
                $("#side-menu a").eq(i).parent().parent().parent().addClass("active");
                $("#side-menu a").eq(i).parent().parent().addClass("in");
            }else{
                $("#side-menu a").eq(i).parent().removeClass("active");
            }
        }
        </script>
    <!-- Toastr -->

            <!-- end footer -->
        </div>
    <!-- Data Tables -->
    <script src="/li/Public/Admin/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="/li/Public/Admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="/li/Public/Admin/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="/li/Public/Admin/js/plugins/dataTables/dataTables.tableTools.min.js"></script>