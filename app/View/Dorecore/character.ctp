<!DOCTYPE html>
<html lang="en">

<div id="bg">
	<img class="bg"src="img/bg.JPG" alt=""/>
</div>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dore Kore Kobe</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
    <script src="./jquery.ui.touch-punch.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
body{
	background-color: #0080FF;
}

p{
	font-weight: 400;
	font-size: 8pt;

}
.hako1,.hako2{
    background:rgba(255,255,255,0.7);
    height: 120px;
    border-radius: 20px;
}
.box{
	height: 120px;	
}
.titlebox{
	background:rgba(255,255,255,0.7);    
	border-radius: 8px;
}
#bg {
  position: fixed; 
  top: -50%; 
  left: -52%; 
  width: 200%; 
  height: 200%;
}
#bg img {
  position: absolute; 
  top: 0; 
  left: 0; 
  right: 0; 
  bottom: 0; 
  margin: auto; 
  min-width: 52%;
  min-height: 50%;
}


</style>

<script>
$(function() {
	$(".hito").draggable({
	connectToSortable: ".hako1,.hako2",
	revert: "invalid"
	});

	$(".hako1").sortable({
	});

	$(".hako2").sortable({
	});
});
</script>
</head>

<body>
    <!-- Page Content -->
	<div id="container">
			<div class="row">
				<div class="col-xs-2"></div>
				<div align="center" class="col-xs-7 titlebox">
					<p>あなたと渡す相手について教えてください</p>
				</div>
				<div class="col-xs-2"></div>
			</div>
	 
	        <!-- Projects Row -->
	        <div class="row">
	            <div class="col-xs-2">
	            </div>
	            
	            <div align="center" class="ui-draggable ui-draggable-handle col-xs-3 box">
	                    <p>10代</p>
	                    <img class="img-responsive hito" src="img/onna_1.png" width="100" alt="">
	            </div>
	            
	            <div class="col-xs-1">
	            </div>
	            
	            <div  align="center" class="ui-draggable ui-draggable-handle col-xs-3 box">
	                    <p>20代</p>
	                    <img class="img-responsive hito" src="img/onna_2.png" width="100" alt="">
	            </div>
	            
	            <div class="col-xs-2">
	            </div>
	            
	        </div>
	        <!-- /.row -->

	         <!-- Projects Row -->
	        <div class="row">
	            <div class="col-xs-2">
	            </div>
	            
	            <div align="center" class="ui-draggable ui-draggable-handle col-xs-3 box">
	                    <p>30代</p>
	                    <img class="img-responsive hito" src="img/onna_3.png" width="100" alt="">
	            </div>
	            
	            <div class="col-xs-1">
	            </div>
	            
	            <div align="center" class="ui-draggable ui-draggable-handle col-xs-3 box">
	                    <p>40代</p>
	                    <img class="img-responsive hito" src="img/onna_4.png" width="100" alt="">
	            </div>
	            
	            <div class="col-xs-2">
	            </div>
	            
	        </div>
	        <!-- /.row -->

	        <!-- Projects Row -->
	        <div class="row">
	            <div class="col-xs-2">
	            </div>
	            
	            <div align="center" class="ui-draggable ui-draggable-handle col-xs-3 box">
	                    <p>50代</p>
	                    <img class="img-responsive hito" src="img/onna_5.png" width="100" alt="">
	            </div>
	            
	            <div class="col-xs-1">
	            </div>
	            
	            <div align="center" class="ui-draggable ui-draggable-handle col-xs-3 box">
	                    <p>60代</p>
	                    <img class="img-responsive hito" src="img/onna_6.png" width="100" alt="">	            </div>
	            
	            <div class="col-xs-2">
	            </div>
	            
	        </div>
	        <!-- /.row -->

	        <!-- Projects Row -->
	        <div class="row">
	            <div class="col-xs-2">
	            </div>
	            
	            <div align="center" class="ui-draggable ui-draggable-handle col-xs-3 hako1">
	            	<p>あなた</p>
	            </div>
	            
	            <div class="col-xs-1">
	            	<center><a href="result" class="choice"><b>決定!</b></a></center>
	            </div>
	            
	            <div align="center" class="ui-draggable ui-draggable-handle col-xs-3 hako2">
	            	<p>あいて</p>
	            </div>
	            
	            <div class="col-xs-2">
	            </div>
	            
	        </div>
	        <!-- /.row -->
	</div>
        <!-- Footer -->
    <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; NAKATA-TTT 2014</p>
                </div>
            </div>
            <!-- /.row -->
    </footer>
    <!-- /.container -->
</body>
</html>
