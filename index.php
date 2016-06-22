<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free coming soon template with jQuery countdown">
    <meta name="author" content="http://bootstraptaste.com">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>Webuild - Free Bootstrap caoming soon template with countdown</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
	<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <!-- siimple style -->
    <link href="assets/css/style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
   
<style>
#logo-img{
box-shadow: 0px 0px 20px #040508!important;
width:auto;
height:190px;
z-index:999!important;
}
p.copyright {
    margin-top: 5px!important;
    margin-bottom: 5px!important;
}
div#shadow {
    background: url('http://a1star.com/images/starsglow1.gif');
    width: 100%;
    height: 100%;
    position: absolute;
    opacity: 0.2;
    transition-duration: 15s;
}
</style>
  </head>

  <body>
<div id="shadow"></div>
	<div id="wrapper">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
				        <img id="logo-img" src="assets/img/logo.jpg" alt="Brazen-logo">
					<h1>The Brazen will enter the Hall is Fall of 2016</h1>
					<!---<h2 class="subtitle">We're working hard to improve our website and we'll ready to launch after</h2>-->
					<div id="countdown"></div>
					<!---<form class="form-inline signup" role="form">
					  <div class="form-group">
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address">
					  </div>
					  <button type="submit" class="btn btn-theme">Get notified!</button 
					</form>		-->
					
				</div>
				
			</div>
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
						<p class="copyright">Copyright &copy; 2016. Al rights reserved. Brazen</p>
                        <!-- 
                            All links in the footer should remain intact. 
                            Licenseing information is available at: http://bootstraptaste.com/license/
                            You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=WeBuild
                        -->
				</div>
			</div>		
		</div>
	</div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.countdown.min.js"></script>
	<script type="text/javascript">
  $('#countdown').countdown('2018/01/01', function(event) {
    $(this).html(event.strftime('%w weeks %d days <br /> %H:%M:%S'));
  });
  $(document).ready(function(){
    $(document).mousemove(function(event){
        $("#shadow").css("background-position-x", event.pageX);
        $("#shadow").css("background-position-y", event.pageY);
    });
});
</script>
  </body>
</html>
