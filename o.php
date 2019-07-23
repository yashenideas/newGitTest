<!DOCTYPE html>
<html lang="en">
 
<head>
<meta charset="utf-8">
<title>TheVideo</title>

<link rel="apple-touch-icon" sizes="57x57" href="/images/thevideo_icon/apple-icon-57x57.png?"><link rel="apple-touch-icon" sizes="60x60" href="/images/thevideo_icon/apple-icon-60x60.png?"><link rel="apple-touch-icon" sizes="72x72" href="/images/thevideo_icon/apple-icon-72x72.png?"><link rel="apple-touch-icon" sizes="76x76" href="/images/thevideo_icon/apple-icon-76x76.png?"><link rel="apple-touch-icon" sizes="114x114" href="/images/thevideo_icon/apple-icon-114x114.png?"><link rel="apple-touch-icon" sizes="120x120" href="/images/thevideo_icon/apple-icon-120x120.png?"><link rel="apple-touch-icon" sizes="144x144" href="/images/thevideo_icon/apple-icon-144x144.png?"><link rel="apple-touch-icon" sizes="152x152" href="/images/thevideo_icon/apple-icon-152x152.png?"><link rel="apple-touch-icon" sizes="180x180" href="/images/thevideo_icon/apple-icon-180x180.png?"><link rel="icon" type="image/png" sizes="192x192" href="/images/thevideo_icon/android-icon-192x192.png?"><link rel="icon" type="image/png" sizes="32x32" href="/images/thevideo_icon/favicon-32x32.png?"><link rel="icon" type="image/png" sizes="96x96" href="/images/thevideo_icon/favicon-96x96.png?"><link rel="icon" type="image/png" sizes="16x16" href="/images/thevideo_icon/favicon-16x16.png?"><link rel="icon" type="image/x-icon" href="/images/thevideo_icon/favicon_main.ico" /><link rel="manifest" href="/images/thevideo_icon/manifest.json"><meta name="msapplication-TileColor" content="#ffffff"><meta name="msapplication-TileImage" content="/images/thevideo_icon/ms-icon-144x144.png"><meta name="theme-color" content="#ffffff"><meta http-equiv=Content-Type content="text-html; charset=UTF-8"><meta name="google" value="notranslate"><meta name="viewport" content="width=device-width, initial-scale=1.0" /> <meta name="description" content="Share your videos with friends, family and the world for free."><meta name="keywords" content="video, sharing, camera phone, video phone, free, upload"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="author" content="thevideo">
<script type="text/javascript">
		//global variables
		var adsShowPopup = false;	//adblock detecter/honeypot
		var site_url = '';	//site URL

		//app global vars vars
		var app = app||{};app.config = {};
		app.config.site_name = "TheVideo";
		app.config.site_url = "";
		app.config.static_url = "/";
		app.config.template_folder = "/jstemplates";
		app.config.api_url = app.config.site_url+"/api";
		app.config.upload_url = "https://upload-test.thevideo.me";
		app.config.subtitle_url = "https://subtitles.thevideo.me";
		app.config.site_path = ".thevideo.me";

	</script>
<script>
		this.top.location !== this.location && (this.top.location = this.location);
	</script>
<script src="/js/jspc.js?ab"></script>

<link href='https://fonts.googleapis.com/css?family=Lato:300,700,300italic' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="/assets/g=bootstrapcss,maincss">
<link rel="stylesheet" type="text/css" href="/js/thevideo/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

<script src="/assets/g=jqueryjs?0.001"></script>

<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
<link rel="stylesheet" type="text/css" href="/css/2/v2.0.css?v=0.00001">
</head>
<body>
<style>
	/* Form */
	.form {
	  position: relative;
	  z-index: 1;
	  background: #FFFFFF;
	  max-width: 650px;
	  margin: 0 auto 100px;
	  padding: 30px;
	  border-top-left-radius: 3px;
	  border-top-right-radius: 3px;
	  border-bottom-left-radius: 3px;
	  border-bottom-right-radius: 3px;
	  text-align: center;
	}
	.form .thumbnail {
	  background: #EF3B3A;
	  width: 150px;
	  height: 150px;
	  margin: 0 auto 30px;
	  padding: 50px 30px;
	  border-top-left-radius: 100%;
	  border-top-right-radius: 100%;
	  border-bottom-left-radius: 100%;
	  border-bottom-right-radius: 100%;
	  box-sizing: border-box;
	}
	.form .thumbnail img {
	  display: block;
	  width: 100%;
	}
	.form input {
	  outline: 0;
	  background: #f2f2f2;
	  width: 100%;
	  border: 0;
	  margin: 0 0 15px;
	  padding: 0px 15px;
	  border-top-left-radius: 3px;
	  border-top-right-radius: 3px;
	  border-bottom-left-radius: 3px;
	  border-bottom-right-radius: 3px;
	  box-sizing: border-box;
	  font-size: 14px;
	}
	.form button {
	  outline: 0;
	  /*background: #EF3B3A;*/
	  width: 100%;
	  border: 0;
	  padding: 15px;
	  border-top-left-radius: 3px;
	  border-top-right-radius: 3px;
	  border-bottom-left-radius: 3px;
	  border-bottom-right-radius: 3px;
	  color: #FFFFFF;
	  font-size: 14px;
	  -webkit-transition: all 0.3 ease;
	  transition: all 0.3 ease;
	  cursor: pointer;
	}
	.form .message {
	  margin: 15px 0 0;
	  color: #b3b3b3;
	  font-size: 12px;
	}
	.form .message a {
	  color: #EF3B3A;
	  text-decoration: none;
	}
	.form .register-form {
	  display: none;
	}

	.container {
	  position: relative;
	  z-index: 1;
	  max-width: 400px;
	  margin: 0 auto;
	}
	.container:before, .container:after {
	  content: "";
	  display: block;
	  clear: both;
	}
	.container .info {
	  margin: 50px auto;
	  text-align: center;
	}
	.container .info h1 {
	  margin: 0 0 15px;
	  padding: 0;
	  font-size: 36px;
	  font-weight: 300;
	  color: #1a1a1a;
	}
	.container .info span {
	  color: #4d4d4d;
	  font-size: 12px;
	}
	.container .info span a {
	  color: #000000;
	  text-decoration: none;
	}
	.container .info span .fa {
	  color: #EF3B3A;
	}

	body {
	  font-family: "Roboto", sans-serif;
	  padding-top: 0px;
	}

  </style>
<div class="container wow animate fadeInDown">
<div class="info">
<h1><a href="/"><img src="/images/logos/thevideo.me.dark.logo.small.png?v2" /></a></h1>
</div>
</div>
<div class="form wow animate fadeInDown">
<h4 style="margin-bottom:20px;" class="pad-btm">User Registration</h4>
<form method="post" data-toggle="validator">
<input type="hidden" name="op" value="register_save" />
<input type="hidden" name="rand" value="nxddkqf7jpou2szrrtalxkfysz6grxavy4475fi" />
<div class="row">
<div class="col-sm-6">
<div class="form-group">
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-user"></i></div>
<input required pattern="^[-_A-z0-9]{1,}$" data-minlength="4" type="text" class="form-control" placeholder="Username" name="usr_login">
</div>
</div>
<div class="form-group">
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-envelope"></i></div>
<input required type="email" class="form-control" placeholder="E-mail" name="usr_email">
</div>
</div>
<div class="form-group">
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-flag"></i></div>
<input type="text" class="form-control" placeholder="Country" name="usr_extra_country">
</div>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
<input type="password" required id="register_password" class="form-control" placeholder="Password" name="usr_password">
</div>
</div>
<div class="form-group">
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
<input type="password" data-match-error="Passwords do not match!" required data-match="#register_password" class="form-control" placeholder="Retype Password" name="usr_password2">
</div>
</div>
<div class="form-group">
<div class="input-group">
<div class="input-group-addon" style="padding-top: 0px;padding-bottom: 0px;"><div style='width:80px;height:26px;font:bold 13px Arial;background:#ccc;text-align:left;direction:ltr;'><span style='position:absolute;padding-left:43px;padding-top:6px;'>&#50;</span><span style='position:absolute;padding-left:9px;padding-top:3px;'>&#52;</span><span style='position:absolute;padding-left:62px;padding-top:7px;'>&#52;</span><span style='position:absolute;padding-left:25px;padding-top:4px;'>&#54;</span></div></div>
<input required type="text" class="form-control" placeholder="Code" name="code" class="captcha_code">
</div>

</div>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<div class="col-xs-7 text-left checkbox">
<label class="form-checkbox form-icon">
<input type="checkbox" required data-error="Before you wreck yourself"> I agree with the <a href="/tos" class="btn-link">Terms and Conditions</a>
</label>
</div>
<div class="col-xs-5" style="padding: 0px;">
<div class="form-group text-right">
<button class="btn btn-success text-uppercase" type="submit">Register</button>
</div>
</div>
</div>
</div>
<div class="col-xs-12"><button type="button" class="btn btn-block btn-primary" name="social_login_btn">Register through social networking websites</button></div>
<div id="social_login_options" style="display:none;">
<button class="btn btn-primary btn-lg btn-block" type="button" data-href="/auth/social/facebook">
<i class="fa fa-facebook fa-fw"></i> Sign Up with Facebook
</button>
<button class="btn btn-info btn-lg btn-block" type="button" data-href="/auth/social/twitter">
<i class="fa fa-twitter fa-fw"></i> Sign Up with Twitter
</button>
<button class="btn btn-danger btn-lg btn-block" type="button" data-href="/auth/social/google">
<i class="fa fa-google fa-fw"></i> Sign Up with Google
</button>
<button class="btn btn-primary btn-lg btn-block" type="button" data-href="/auth/social/vkontakte">
<i class="fa fa-vk fa-fw"></i> Sign Up with VKontakte
</button>
</div>
</form>
<div class="clearfix"></div>
<hr />
<div class="pad-ver">
<center>Already have an account ? <a href="/auth/signin" class="btn-link mar-rgt">Sign In</a></center>
</div>
<div class="clearfix"></div>
</div>
<script>
	$(document).ready(function(e){
		new WOW().init();
		$("button[name=social_login_btn]").click(function(){
			$(this).slideUp();
			$("#social_login_options").slideDown();
		});
	});
	</script>
<script>
function  CheckForm(f)
{
    var err=Array();
    if(f.usr_login.value.length<4)err.push("* Username must be at least 4 letters long");
    if(f.usr_login.value.length>32)err.push("* Username must be less than 32 letters long");
    if(!f.usr_login.value.match(/^([a-zA-Z0-9_\-])+$/))err.push("* Invalid Username format");
    if(f.usr_password.value.length<4)err.push("* Password should be at least 4 letters long");
    if(f.usr_password.value.length>32)err.push("* Password should be less than 32 letters long");
    if( !f.usr_email.value.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/) )err.push("* Valid e-mail required");
    if(f.usr_password.value.length!=f.usr_password2.value.length)err.push("* Passwords do not match");
    if(err.length>0){alert( 'Please fix the errors below:\n\n'+err.join('\n') );return false;}
}
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<script src="/assets/g=mainjslibs,popjs"></script>

<script src="/js/thevideo/plugins/rivets/rivets.bundled.min.js"></script>
<script src="/js/thevideo/main/2.0/rivets.config.js"></script>
<script src="/js/thevideo/plugins/selectize.js/js/standalone/selectize.min.js"></script>
<link rel="stylesheet" type="text/css" href="/js/thevideo/plugins/selectize.js/css/selectize.bootstrap3.css">
<script src="/js/thevideo/plugins/bind.js/bind.js?0.00094"></script>
<script src="/js/thevideo/plugins/jquery-template/jquery.loadTemplate.js?0.00099"></script>
<script src="/js/thevideo/plugins/bootbox/bootbox.min.js"></script>
<script src="/js/thevideo/plugins/jquery-sticky/jquery.sticky.min.js?0.000072"></script>
<script src="/js/thevideo/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
<script src="/js/thevideo/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="/js/thevideo/plugins/bind.js/bind.js?0.00094"></script>


<script src="/js/thevideo/plugins/flowjs/flow.min.js"></script>
<script src="/js/thevideo/plugins/flowjs/fusty-flow-factory.js"></script>
<script src="/js/thevideo/plugins/flowjs/fusty-flow.js"></script>
<script src="/js/thevideo/plan.ui.js"></script>
<script src="/js/thevideo/main/2.0/api.js?v=0.000001"></script>
<script src="/js/thevideo/main/2.0/confirmaction.js?v=0.000001"></script>
<script src="/js/thevideo/main/2.0/twofactorauth.js?v=0.000009"></script>
<script src="/js/thevideo/main/2.0/notify.js?v=0.000002"></script>
<script src="/js/thevideo/main/2.0/utilities.js?v=0.0000017"></script>
<script src="/js/thevideo/main/2.0/template.js?v=0.0000014"></script>
<script src="/js/thevideo/main/2.0/main.js?v=0.0000018"></script>
<script src="/js/thevideo/main/2.0/user.js"></script>
<script src="/js/thevideo/main/2.0/pop.js"></script>
<script src="/js/thevideo/main/2.0/pop.functions.js?v=0.0002"></script>
<script src="/js/thevideo/main/2.0/bannerUnit.js"></script>
<script src="/js/thevideo/main/2.0/banner.js"></script>
<script src="/js/thevideo/main/2.0/stream.js?v=0.000042"></script>

<link rel="stylesheet" type="text/css" href="/js/thevideo/plugins/datatables/datatables.min.css" />
<script type="text/javascript" src="/js/thevideo/plugins/datatables/datatables.min.js?v=0.00002"></script>
<script>
( $.fn.dataTable || document.write( "<script type='text\/javascript' src='https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js' ><\/script>" ) )
</script>
<style>
tr.group{
	background-color: #28353d !important;
    color: white !important;
}
.fixedHeader-floating{
	top:60px !important;
}
</style>
<script src="/js/thevideo/plugins/jquery-jvectormap/jquery.vmap.min.js"></script>
<link href="/js/thevideo/plugins/jquery-jvectormap/jqvmap.min.css" rel="stylesheet">
<script src="/js/thevideo/plugins/jquery-jvectormap/maps/jquery.vmap.world.js"></script>
<script src="/js/thevideo/plugins/jquery-numberanim/jquery.animateNumbers.min.js"></script>
<script src="/js/thevideo/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="/js/thevideo/plugins/bootstrap-slider/bootstrap-slider.min.js"></script>
<link href='/js/thevideo/plugins/bootstrap-slider/css/bootstrap-slider.min.css' rel='stylesheet' type='text/css'>
<script src="/js/thevideo/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script>
	

	//initiate user object
	app.user.init({
				user_id : parseInt(''),
				user_created : '',
				username : '',
				type : 'auto',
				premium : parseInt(''),
				email : '',
				country : 'ZA',
				ip : '41.133.250.205',
				balance: ''
			});

	//check sandbox
	window.fbAsyncInit=function(){FB.init({appId:"425957084198586",xfbml:!0,version:"v2.3"})},function(a,b,c){var d,e=a.getElementsByTagName(b)[0];a.getElementById(c)||(d=a.createElement(b),d.id=c,d.src="//connect.facebook.net/en_US/sdk.js",e.parentNode.insertBefore(d,e))}(document,"script","facebook-jssdk");
	
	$(document).ready(function(e){

		app.main.init({
				liveChat: true,
				liveChatLoggedIn: true,
				tawkHash: '',
				tawkSecondaryAsset: '1al37p6gd',
				topSearchBar: true,
				sandboxCheck: true,
				sandboxForceOut: true,
				socialButtons: true,
				adblockCheck: true,
				adblockNotify: true, //if adblock enabled, adblock notification will appear
				dataPicker: true,
				bootstrap: true
		});

		//set cookies
		
		
	});
	
	</script>
<script type="text/javascript">
	  var _paq = _paq || [];
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
	    var u="//analytics.thevideo.me/";
	    _paq.push(['setTrackerUrl', u+'t.php']);
	    _paq.push(['setSiteId', 'OpvgW6E3R9PdD7rj']);
	    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
	    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'t.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>
<noscript><p><img src="//analytics.thevideo.me/t.php?idsite=OpvgW6E3R9PdD7rj" style="border:0;" alt="" /></p></noscript>

<div class="modal fade" id="confirmActionModal" tabindex="-1" role="dialog" aria-labelledby="confirmActionModal" aria-hidden="true">
<div class="modal-dialog modal-sm">
<div class="modal-content text-center">
<h2 class="modal-header m-t-1">
<em class="fa fa-fw fa-hand-paper-o"></em> { title }
</h2>
<div class="modal-body">
<h4 rv-html="body"></h4>
</div>
<div class="modal-footer btn-group">
<button type="button" rv-on-click="callback.cancel" class="btn btn-default btn-lg">Cancel</button>
<button type="button" rv-on-click="callback.confirm" class="btn btn-primary btn-lg">Confirm</button>
</div>
</div>
</div>
</div>

<div class="modal fade" id="twoFactorAuthModal" tabindex="-1" role="dialog" aria-labelledby="twoFactorAuthModal" aria-hidden="true">
<div class="modal-dialog modal-md">
<div class="modal-content text-center">
 <h2 class="modal-header m-t-1">
<em class="fa fa-fw fa-hand-paper-o"></em> { title }
</h2>
<div class="modal-body">
<p class="alert alert-info">{ info }</p>
<form class="form-inline">
<label for="code">Authentication Code:</label>
<div class="col-xs-12">
<input required="required" rv-value="value.c1" type="text" class="form-control input-single-char" maxlength="1" placeholder="C">
<input required="required" rv-value="value.c2" type="text" class="form-control input-single-char" maxlength="1" placeholder="">
<input required="required" rv-value="value.c3" type="text" class="form-control input-single-char" maxlength="1" placeholder="O">
<input required="required" rv-value="value.c4" type="text" class="form-control input-single-char" maxlength="1" placeholder="">
<input required="required" rv-value="value.c5" type="text" class="form-control input-single-char" maxlength="1" placeholder="D">
<input required="required" rv-value="value.c6" type="text" class="form-control input-single-char" maxlength="1" placeholder="">
<input required="required" rv-value="value.c7" type="text" class="form-control input-single-char" maxlength="1" placeholder="E">
</div>
<div class="clear"></div>
<p id="passwordHelpBlock" class="form-text text-muted m-t-1" rv-html="instruction">
</p>
<p class="form-text text-muted m-t-1">Havent received the code? <br> <button rv-on-click="resendObj.anotherone" rv-disabled="resendObj.lock" class="btn btn-info btn-xs"> <em class="fa fa-fw fa-refresh"></em> Resend verification code <span rv-if="resendObj.timer"> in <span rv-text="resendObj.timer"></span> seconds</span> </button> </p>
</form>
</div>
<div class="modal-footer btn-group">
<button type="button" rv-on-click="callback.cancel" class="btn btn-default btn-lg">Cancel</button>
<button type="button" rv-on-click="callback.confirm" class="btn btn-primary btn-lg">Verify</button>
</div>
</div>
</div>
</div>
</body>
</html>