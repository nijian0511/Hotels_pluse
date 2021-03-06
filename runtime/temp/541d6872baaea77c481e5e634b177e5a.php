<?php /*a:1:{s:70:"D:\phpstudy_pro\WWW\seho\Hotel\application\admin\view\login\index.html";i:1577336458;}*/ ?>
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title> Hyacinth酒店管理系统</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="风信子网络科技有限公司, 风信子">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="/static/css/style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <!-- //fonts -->
    <link rel="stylesheet" href="/static/css/font-awesome.min.css" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->
	<link rel="stylesheet" href="/static/toastr/toastr.min.css">
	<script src="https://cdn.bootcss.com/jquery/2.1.2/jquery.min.js"></script>
	<script src="/static/toastr/toastr.min.js"></script>

	
</head>
<!-- //Head -->
<!-- Body -->

<body>

<section class="main">
	<div class="layer">
		
		<div class="bottom-grid">
			<div class="logo">
				<h1> <a href="index.html"><span class="fa fa-ravelry
					"></span> Hyacinth</a>
				</h1>
			</div>
			<div class="links">
				<ul class="links-unordered-list">
					<li>
						<a href='https://gitee.com/HyacinthTechnology/Hotel'><img src='https://gitee.com/HyacinthTechnology/Hotel/widgets/widget_3.svg' alt='Fork me on Gitee'></img></a>
					</li>
					<li class="active">
						<a href="https://gitee.com/bool1993_admin/wms" class="">wms开源系统</a>
					</li>
					<li class="">
						<a href="#" class="">关于我们</a>
					</li>
					<li class="">
						<a href="#" class="">联系方式</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="content-w3ls">
			<div class="text-center icon">
				<span class="fa fa-free-code-camp"></span>
			</div>
			<div class="content-bottom">
				<form action="<?php echo url('admin/login/index'); ?>" method="post">
					<div class="field-group">
						<span class="fa fa-user" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="text1" id="name" type="text" value="" placeholder="用户名" required>
						</div>
					</div>
					<div class="field-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<div class="wthree-field">
							<input name="password" id="pwd" type="Password" placeholder="密码">
						</div>
					</div>
					<div class="wthree-field">
						<button type="button" class="btn" onclick="login()">登录</button>
					</div>
<!--					<ul class="list-login">
						<li class="switch-agileits">
							<label class="switch">
								<input type="checkbox">
								<span class="slider round"></span>
								记住账号
							</label>
						</li>
						<li>
							<a href="#" class="text-right">忘记密码?</a>
						</li>
						<li class="clearfix"></li>
					</ul>-->
				</form>
			</div>
		</div>

		<div class="bottom-grid1">
			<div class="links">
				<ul class="links-unordered-list">
					<li class="">
						<a href="https://gitee.com/HyacinthTechnology/Hotel" class="">关于系统</a>
					</li>
<!--					<li class="">
						<a href="#" class="">操作手册</a>
					</li>
					<li class="">
						<a href="#" class="">基础版</a>
					</li>
					<li class="">
						<a href="#" class="">高级版</a>
					</li>-->
				</ul>
			</div>
			<div class="copyright">
				<p>© 2019 Hyacinth. 风信子网络科技有限公司 | about
					<a href="https://gitee.com/bool1993_admin/xenon-wms">bool</a>
				</p>
			</div>


		</div>
    </div>
</section>

</body>
<!-- //Body -->

<script>
	function login(){
		if($('#name').val() == ''){
			toastr.error("账号不能为空");
			return false;
		}else if($('#pwd').val() == ''){
			toastr.error("密码不能为空");
			return false;
		}
		$.ajax({
			type:"post",
			url: "<?php echo url('admin/login/index'); ?>",
			data: {
				name:$('#name').val(),
				password:$('#pwd').val()},
			//回调函数
			success: function(data){
//				console.log(data);

				if(data.code == 100){
					toastr.success(data.msg,"消息提示");
					setTimeout(function () {
						//跳转页面
						window.location.href="<?php echo url('admin/index/index'); ?>";
					},1000);
				}else {
					toastr.error(data.msg);
				}
			}});
	}
</script>
</html>
