<!DOCTYPE html>
<html lang="es_ES">
  <head>
    <meta charset="utf-8">
    <title>Cablemás - Experiencia 360</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/ico/favicon.html">
    <link href="a/assets/css/bootstrap.css" rel="stylesheet">
    <link href="a/assets/css/theme.css" rel="stylesheet">
    <link href="a/assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="a/assets/css/alertify.css" rel="stylesheet">
    <link rel="Favicon Icon" href="favicon.ico">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="wrap">
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
          	<div class="row-fluid">
				<div class="widget container-narrow widget-header">
					<div class="widget-body clearfix" style="padding:25px;">
		      			<form action="oauth.php" method="post" id="contact-form">
                  <center>
                      <img src="a/assets/img/exp3602.svg" style=" width=:150px; height:100px;" alt="Realm Admin Template">
                   </center> 
		      				<div class="divider">
		      					
		      				</div>
							<div class="control-group">
								<div class="controls">
									<input class="btn-block" type="text" id="inputEmail" name="usuario" id="usuario" placeholder="Usuario">
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
									<input class="btn-block" type="password" id="inputPassword" name="password" id="password" placeholder="Contraseña">
								</div>
							</div>
              <div class="control-group">
                <div class="controls">
                  <select class="btn-block" name="region" id="region">
                    <option value="">Elige region</option>
                    <option value="1">Region Norte</option>
                    <option value="2">Region Centro</option>
                    <option value="3">Region Sur</option>
                    <option value="4">Corporativo</option>
                  </select>
                </div>
              </div>	
							<input type="submit" class="btn pull-right" value="Acceder">
		      			</form>
					</div>  
				</div>  
      			<div style="text-align:center">
      				<p><a href="#">Desarrollo SDATC</a></p>
      			</div>
        	</div>
        </div>
      </div>
    </div>
    </div>
    <script src="a/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="a/assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="a/assets/js/raphael-min.js"></script>
    <script type="text/javascript" src="a/assets/js/bootstrap.js"></script>
    <script type="text/javascript" src='a/assets/js/sparkline.js'></script>
    <script type="text/javascript" src='a/assets/js/morris.min.js'></script>
    <script type="text/javascript" src="a/assets/js/jquery.dataTables.min.js"></script>   
    <script type="text/javascript" src="a/assets/js/jquery.masonry.min.js"></script>   
    <script type="text/javascript" src="a/assets/js/jquery.imagesloaded.min.js"></script>   
    <script type="text/javascript" src="a/assets/js/jquery.facybox.js"></script>   
    <script type="text/javascript" src="a/assets/js/jquery.elfinder.min.html"></script> 
    <script type="text/javascript" src="a/assets/js/jquery.alertify.min.js"></script> 
    <script type="text/javascript" src="a/assets/js/realm.js"></script>
    <script type="text/javascript" src="a/assets/js/jquery.validate.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
 
 $('#contact-form').validate(
 {
  rules: {
    usuario: {
      minlength: 2,
      required: true
    },
    password: {
      minlength: 2,
      required: true
    },
    region: {
      minlength: 1,
      required: true
    }
  },
  highlight: function(element) {
    $(element).closest('.control-group').removeClass('success').addClass('error');
  },
  success: function(element) {
    element
    .text('').addClass('valid')
    .closest('.control-group').removeClass('error').addClass('success');
  }
 });
}); // end document.ready
    </script>
  </body>
</html>
