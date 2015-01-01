<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html>
	<head>
		<title><?php echo ($site_seo_title); ?> <?php echo ($site_name); ?></title>
		<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
		<meta name="description" content="<?php echo ($site_seo_description); ?>">
			<?php $portal_index_lastnews=2; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"ThinkCMFX1.1发布啦！", "slide_pic"=>$tmpl."Public/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX1.1发布啦！", "slide_pic"=>$tmpl."Public/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX1.1发布啦！", "slide_pic"=>$tmpl."Public/images/demo/3.jpg", "slide_url"=>"", ), ); ?>
	<meta name="author" content="ThinkCMF">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
	<link rel="icon" href="/tpl/idaap/Public/images/favicon.ico" mce_href="/tpl/idaap/Public/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/tpl/idaap/Public/images/favicon.ico" mce_href="/tpl/idaap/Public/images/favicon.ico" type="image/x-icon">
    <link href="/tpl/idaap/Public/simpleboot/themes/cmf/theme.min.css" rel="stylesheet">
    <link href="/tpl/idaap/Public/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="/tpl/idaap/Public/simpleboot/font-awesome/4.2.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
	<!--[if IE 7]>
	<link rel="stylesheet" href="/tpl/idaap/Public/simpleboot/font-awesome/4.2.0/css/font-awesome-ie7.min.css">
	<![endif]-->
	<link href="/tpl/idaap/Public/css/style.css" rel="stylesheet">
	<style>
		/*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
		#backtotop{position: fixed;bottom: 50px;right:20px;display: none;cursor: pointer;font-size: 50px;z-index: 9999;}
		#backtotop:hover{color:#333}
	</style>
		<link href="/tpl/idaap/Public/css/slippry/slippry.css" rel="stylesheet">
		<style>
			.caption-wraper{position: absolute;left:50%;bottom:2em;}
			.caption-wraper .caption{
			position: relative;left:-50%;
			background-color: rgba(200, 200, 200, 0.54);
			padding: 0.4em 1em;
			color:#fff;
			-webkit-border-radius: 1.2em;
			-moz-border-radius: 1.2em;
			-ms-border-radius: 1.2em;
			-o-border-radius: 1.2em;
			border-radius: 1.2em;
			}
			@media (max-width: 767px){
				.sy-box{margin: 12px -20px 0 -20px;}
				.caption-wraper{left:0;bottom: 0.4em;}
				.caption-wraper .caption{
				left: 0;
				padding: 0.2em 0.4em;
				font-size: 0.92em;
				-webkit-border-radius: 0;
				-moz-border-radius: 0;
				-ms-border-radius: 0;
				-o-border-radius: 0;
				border-radius: 0;}
			}
		</style>
	</head>
<body class="body-white">
<div class="navbar navbar-fixed-top">
   <div class="navbar-inner">
     <div class="container">
       <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </a>
       <a class="brand" href="/"><img src="/tpl/idaap/Public/images/idaap_logo.png"/></a>
       <div class="nav-collapse collapse" id="main-menu" style="margin-top:10px;">
       	<?php
 $effected_id=""; $filetpl="<a href='\$href' target='\$target'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret'></b></a>"; $ul_class="dropdown-menu" ; $li_class="" ; $style="nav"; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>
		
		<ul class="nav pull-right" id="main-menu-left">
			<li class="dropdown">
			<?php if(sp_is_user_login()): ?><a class="dropdown-toggle user" data-toggle="dropdown" href="#">
	            <?php if(empty($user['avatar'])): ?><img src="/tpl/idaap//Public/images/headicon.png" class="headicon"/>
	            <?php else: ?>
	            <img src="<?php echo sp_get_user_avatar_url($user['avatar']);?>" class="headicon"/><?php endif; ?>
	            <?php echo ($user["user_nicename"]); ?><b class="caret"></b></a>
	            <ul class="dropdown-menu pull-right">
	               <li><a href="<?php echo u('user/center/index');?>"><i class="fa fa-user"></i> &nbsp;个人中心</a></li>
	               <li class="divider"></li>
	               <li><a href="<?php echo u('user/index/logout');?>"><i class="fa fa-sign-out"></i> &nbsp;退出</a></li>
	            </ul>
	        <?php else: ?>
	            <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
	           		<img src="/tpl/idaap//Public/images/headicon.png" class="headicon"/>登录<b class="caret"></b>
	            </a>
	            <ul class="dropdown-menu pull-right">
	               <li><a href="<?php echo U('api/oauth/login',array('type'=>'sina'));?>"><i class="fa fa-weibo"></i> &nbsp;微博登录</a></li>
	               <li><a href="<?php echo U('api/oauth/login',array('type'=>'qq'));?>"><i class="fa fa-qq"></i> &nbsp;QQ登录</a></li>
	               <li><a href="<?php echo u('user/login/index');?>"><i class="fa fa-sign-in"></i> &nbsp;登录</a></li>
	               <li class="divider"></li>
	               <li><a href="<?php echo u('user/register/index');?>"><i class="fa fa-user"></i> &nbsp;注册</a></li>
	            </ul><?php endif; ?>
          	</li>
		</ul>
		<div class="pull-right">
        	<form method="post" class="form-inline" action="<?php echo U('search/index');?>" style="margin:18px 0;">
				 <input type="text" class="" placeholder="Search" name="keyword" value="<?php echo I('get.keyword');?>"/>
				 <input type="submit" class="btn btn-info" value="Go" style="margin:0"/>
			</form>
		</div>
       </div>
     </div>
   </div>
 </div>


<?php $home_slides=sp_getslide("idaap_index"); $home_slides=empty($home_slides)?$default_home_slides:$home_slides; ?>
<ul id="homeslider" class="unstyled">
	<?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><li>
		<!--div class="caption-wraper">
			<div class="caption"><?php echo ($vo["slide_name"]); ?></div>
		</div-->
		<a href="<?php echo ($vo["slide_url"]); ?>"><img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" alt=""></a>
	</li><?php endforeach; endif; ?>
</ul>
<div class="container">
	

	<div class="row" id="row1">
		<div class="span4" style="height:336px;">
			<img src="/tpl/idaap/Public/images/company.jpg">
			 <h2 class="font-large nospace"><i class="fa fa-bars"></i> 协会介绍</h2>
             <p>　　国际美容整形医师行业协会是由各国注册整形外科执业医师、执业助理医师及单位会员自愿组成的国际性、行业性、非营利性的群众团体，是国际合作组织，是独立的法人社团。<br>
			 　　本会的宗旨是发挥行业服务、协调、自律、维权、监督、管理作用，团结和组织全亚洲医师遵守各国法律、法规和政策，弘扬以德为本，救死扶伤人道主义的职业道德，努力提高医疗水平和服务质量，维护医师的合法权益，为亚洲各国人民健康和...</p>
		</div>
		<div class="span4">
			<img src="/tpl/idaap/Public/images/regen.jpg">
			 <h2 class="font-large nospace"><i class="fa fa-group"></i> 韩国权威合作医院</h2>
             <p>　　Regen美容整形医院是regeneration的简称。<br><br>
        　　本院为了让每一位顾客得到满意的医疗服务，医院拥有最优秀的医疗团队及配备了最先进的医疗设备和优雅舒适的环境。具有丰富经验的专家们用最好的医疗技术来帮助您实现对美的梦想。<br>
        　　丽珍整形医院于2009年得到保健福利部长官《国外患者指定治疗医院》官方许可，并设立国外管理部，专门负责外国人的咨询。 </p>
		</div>
		<div class="span4">
			<img src="/tpl/idaap/Public/images/all.jpg">
			  <h2 class="font-large nospace"><i class="fa fa-cloud"></i> 会长介绍</h2>
              <p>

　　整形不是艺术,而是医术。<br><br>

　　整形不是为了让10位客户中的其中两位得到完美理想的结果,而是为了相信韩国原辰整形医院而来访的每一位客户,让他们得到最完美理想的手术效果。<br><br>

　　所以整形手术,要以保守和普遍为基准。<br>

　　---接受韩国媒体采访中

</p>
		</div>
	</div>
	
	<div class="row" class="row2">
		<div class="span4">
			 <h2 class="font-large nospace"><i class="fa fa-heart"></i> 证书展示</h2>
             <p><img class="showBook" src="/tpl/idaap/Public/images/book1a.png"></p>
		</div>
		<div class="span4">
			 <h2 class="font-large nospace"><i class="fa fa-heart"></i> 证书展示</h2>
             <p><img height="180px" class="showBook" src="/tpl/idaap/Public/images/book2a.png"></p>
		</div>
		<div class="span4">
			 <h2 class="font-large nospace"><i class="fa fa-certificate"></i> 证书查询</h2>
             <p>
				<form method="post" action="/index.php?g=Certificate&a=check">
				证书编号：<input class="s1" name="user_id" value="" style="width:140px; border-radius:3px;" > <br><br>
				姓　　名：<input class="s1" name="user_name" value="" style="width:140px; border-radius:3px;" > <br><br>
				证件号码：<input class="s1" name="user_icNum" value="" style="width:140px; border-radius:3px;" > <br><br>
				<input name="imageField" type="submit" value="开始查询" style="height:30px; width:80px; font-size:13px;"> <!--button style="height:30px; width:80px; font-size:13px;">在线报名</button-->
				</form>
			</p>
		</div>
	</div>
	
	<div>
		<h1 class="text-center">最新资讯</h1>
		<h3 class="text-center">Last News</h3>
	</div>
	<?php $lastnews=sp_sql_posts("cid:$portal_index_lastnews;field:post_title,post_excerpt,tid,smeta;order:listorder asc;limit:4;"); ?>
	<div class="row" class="row1">
		<?php if(is_array($lastnews)): foreach($lastnews as $key=>$vo): $smeta=json_decode($vo['smeta'],true); ?>
		<div class="span3">
			<div class="tc-gridbox">
				<div class="header">
					<div class="item-image">
						<a href="<?php echo leuu('article/index',array('id'=>$vo['tid']));?>">
							<?php if(empty($smeta['thumb'])): ?><img src="/tpl/idaap/Public/images/default_tupian1.png" class="img-responsive" alt="<?php echo ($vo["post_title"]); ?>"/>
							<?php else: ?> 
								<img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" class="img-responsive img-thumbnail" alt="<?php echo ($vo["post_title"]); ?>" /><?php endif; ?>
						</a>
					</div>
					<h3><a href="<?php echo leuu('article/index',array('id'=>$vo['tid']));?>"><?php echo ($vo["post_title"]); ?></a></h3>
					<hr>
				</div>
				<div class="body">
					<p><a href="<?php echo leuu('article/index',array('id'=>$vo['tid']));?>"><?php echo msubstr($vo['post_excerpt'],0,32);?></a></p>
				</div>
			</div>
		</div><?php endforeach; endif; ?>
	</div>
<br><br><br>
<!-- Footer
      ================================================== -->
      <hr>

      <div id="footer">
        <div class="links">
        <?php $links=sp_getlinks(); ?>
        <?php if(is_array($links)): foreach($links as $key=>$vo): ?><a href="<?php echo ($vo["link_url"]); ?>" target="<?php echo ($vo["link_target"]); ?>"><?php echo ($vo["link_name"]); ?></a><?php endforeach; endif; ?>
        </div>
        <p>
        Made by <a href="http://www.thinkcmf.com">ThinkCMF</a>
        Code licensed under the <a href="http://www.apache.org/licenses/LICENSE-2.0" rel="nofollow" target="_blank">Apache License v2.0</a>.<br/>
        Based on <a href="http://getbootstrap.com/2.3.2/" target="_blank">Bootstrap</a>.  Icons from <a href="http://fortawesome.github.com/Font-Awesome/" target="_blank">Font Awesome</a>
        </p>
      </div>
      <div id="backtotop"><i class="fa fa-arrow-circle-up"></i></div>
      <?php echo ($site_tongji); ?>

</div>

<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/",
    JS_ROOT: "statics/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/statics/js/jquery.js"></script>
    <script src="/statics/js/wind.js"></script>
    <script src="/tpl/idaap/Public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
    <script src="/statics/js/frontend.js"></script>
	<script>
	$(function(){
		$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
		
		;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>


<script src="/tpl/idaap/Public/js/slippry.min.js"></script>
<script>
$(function() {
	var demo1 = $("#homeslider").slippry({
		transition: 'fade',
		useCSS: true,
		captions: false,
		speed: 1000,
		pause: 3000,
		auto: true,
		preload: 'visible'
	});
});
</script>
</body>
</html>