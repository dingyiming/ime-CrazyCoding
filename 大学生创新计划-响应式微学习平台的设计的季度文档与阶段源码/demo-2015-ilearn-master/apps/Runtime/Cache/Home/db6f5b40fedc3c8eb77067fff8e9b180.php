<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>i微学</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" href="/ilearn/Public/logo/favicon.ico">
  <meta name="apple-mobile-web-app-title" content="imicrolearn" />
  <link rel="stylesheet" href="/ilearn/Public/amazeassets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/ilearn/Public/amazeassets/css/admin.css">
  <link rel="stylesheet" href="/ilearn/Public/i/css/ilearn.css">
<script>
   window.onload=msg;
  
  function msg(){
    var $modal = $('#msg');
    $modal.modal();
  }
  </script>


</head>
<body>
<header class="am-topbar am-topbar-inverse  " id="header"  data-am-sticky="{animation: 'slide-top'}">
  <div id="container" class="headerfix">
  <h1 class="am-topbar-brand">
    <a href="/ilearn/" >&nbsp;&nbsp;&nbsp;&nbsp;i微学&nbsp;&nbsp;&nbsp;&nbsp;</a>
  </h1>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topnav'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topnav">
    <ul class="am-nav am-nav-pills am-topbar-nav">
      <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
      <li class="am-hide-sm-only" ><a href="/ilearn/">首页</a></li>
      <li class="am-dropdown am-hide-sm-only" data-am-dropdown>
      <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          学习方向 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <?php if(is_array($alltype)): $i = 0; $__LIST__ = $alltype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/ilearn/course/typecourse?id=<?php echo ($vo["tid"]); ?>"><?php echo ($vo["tname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </li>
    </ul>

          
       <div class="am-topbar-right">
       
       <a href="/ilearn/way/showway"><button class="am-btn am-btn-success am-topbar-btn am-btn-sm">互动经验</button></a>
      <a href="/ilearn/course/showallcourse"><button class="am-btn am-btn-success am-topbar-btn am-btn-sm">教程总览</button></a>
       <a href="/ilearn/index/indexabout"><button class="am-btn am-btn-primary am-topbar-btn am-btn-sm">简介</button></a>
            <?php if(empty($_SESSION['userinfo'])): ?><a href="/ilearn/user/register"> <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm">注册</button></a>
       <a href="/ilearn/user/login"><button class="am-btn am-btn-primary am-topbar-btn am-btn-sm">登录</button></a> 
            <?php else: ?> 
            <a href="/ilearn/user/userlikecourse">
            <button class="am-btn am-btn-warning am-topbar-btn am-btn-sm"> <?php echo ((isset($_SESSION['userinfo']['unickname']) && ($_SESSION['userinfo']['unickname'] !== ""))?($_SESSION['userinfo']['unickname']):"我是昵称"); ?><small>【点我】</small></button>
            </a>
            <a href="/ilearn/user/logout">
            <button class="am-btn am-btn-danger am-topbar-btn am-btn-sm">注销</button>
            </a><?php endif; ?>
        </div>

 
  
  </div>
  </div>
  <div id="colorborder"></div>
</header>





<div id="usertitle" class="am-g">
<div id="container">
<br>
  <div class="am-u-sm-2  am-u-sm-offset-1">
  <br>
  <img src="/ilearn/Public/logo/imlogo.png" alt="" id="touxiang">
  <br>
  </div>
  <div class="am-u-sm-6 am-u-md-4 am-u-sm-offset-2 am-u-md-offset-0">
<h3>你好！<?php echo ((isset($_SESSION['userinfo']['unickname']) && ($_SESSION['userinfo']['unickname'] !== ""))?($_SESSION['userinfo']['unickname']):"【耶？我的昵称呢】"); ?></h3>
<p>用户名：<?php echo ($_SESSION['userinfo']['uname']); ?></p>
寄语：【<?php echo ((isset($_SESSION['userinfo']['utitle']) && ($_SESSION['userinfo']['utitle'] !== ""))?($_SESSION['userinfo']['utitle']):"嘿嘿，我没心情"); ?>】
<br>

  </div>

<div class="am-u-md-2 am-hide-sm-only">
	<br>
  <a href="../way/showway"><button type="button" class="am-btn am-btn-primary am-btn-block">交互经验</button></a>
          <br>    
  <a href="../course/showaddcourse">  <button type="button" class="am-btn am-btn-success am-btn-block">分享教程</button>
  <br>
</a>
</div>
</div>
</div>
<hr>




  <div id="container">
  <div id="usercontent" class="am-cf admin-main">
  
<div class="admin-sidebar am-offcanvas" id="sidebar">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
      <li><br></li>
        <li><a href="../user/userlikecourse"><span class="am-icon-home"></span> 我的收录<span class="am-icon-angle-right am-fr am-margin-right"></a></li>
        <li>
          <a href="../user/userinfo"><span class="am-icon-file"></span> 我的资料 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
        </li>
        <li><a href="../user/usersharecourse"><span class="am-icon-table"></span> 我分享的教程<span class="am-icon-angle-right am-fr am-margin-right"></span></a></li>
        <li><a href="/ilearn/course/showaddcourse"><span class="am-icon-pencil-square-o"></span> 我来分享<span class="am-icon-angle-right am-fr am-margin-right"></a></li>
        <li><a href="#"><span class="am-icon-bug"></span> 关注<span class="am-icon-angle-right am-fr am-margin-right"></a></li>
      </ul>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 寄语</p>
          <p>时光静好，与君语；<br>细水流年，与君同。<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;—— i微学</p>
        </div>
      </div>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-tag"></span> 欢迎</p>
          <h3>我的地盘</h3>
        </div>
      </div>
    </div>
  </div>

  <a class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" 
    data-am-offcanvas="{target: '#sidebar'}"></a>

  <div class="admin-content">
  <br>
  

<div class="am-u-sm-10 am-u-sm-offset-1">

<?php if(is_array($userlikecourse)): $i = 0; $__LIST__ = $userlikecourse;if( count($__LIST__)==0 ) : echo "暂时没有数据" ;else: foreach($__LIST__ as $key=>$ul): $mod = ($i % 2 );++$i;?><a href="../course/showonecourse?id=<?php echo ($ul["likecourseid"]); ?>"> 
 <section class="am-panel am-panel-default">
  <header class="am-panel-hd">
    <h3 class="am-panel-title"><?php echo ($ul["cname"]); ?>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <small><?php echo ($ul["liketime"]); ?></small>
    </h3>
  </header>
  <div class="am-panel-bd">
    <?php echo ($ul["ctitle"]); ?>
  </div>
</section> 
</a><?php endforeach; endif; else: echo "暂时没有数据" ;endif; ?>
</div>


	



  
  </div>
  </div>
  </div>



<hr>

	<footer>
		<div class="am-g">
		<div id="colorborder"></div>
		<div id="footer">
		
		</div>
		<div id="colorborder"></div>
		</div>
	</footer>


<?php if(empty($_SESSION['msg'])): else: ?>
<div class="am-modal am-modal-alert" tabindex="-1" id="msg">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">i微学</div>
    <div class="am-modal-bd">
      <?php echo (session('msg')); ?>
    </div>
    <div class="am-modal-footer">
      <span class="am-modal-btn">确定</span>
    </div>
  </div>
</div>
<?php  unset($_SESSION['msg']); endif; ?>
<script src="/ilearn/Public/amazeassets/js/jquery.min.js"></script>
<script src="/ilearn/Public/amazeassets/js/amazeui.min.js"></script>
<script src="/ilearn/Public/amazeassets/js/app.js"></script>

</body>
</html>