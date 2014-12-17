<!DOCTYPE html>
<<<<<<< HEAD
<html lang="en">

=======
<html lang="ja">
<div id="bg">
	<img class="bg"src="img/bg.JPG" alt=""/>
</div>
>>>>>>> 05acdbed68129b85495ec37e875e7bdc923cab6a
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<<<<<<< HEAD
    <title>4 Col Portfolio - Start Bootstrap Template</title>
=======
    <title>Dore Kore Kobe 結果画面</title>
>>>>>>> 05acdbed68129b85495ec37e875e7bdc923cab6a
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
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
<<<<<<< HEAD


.tryagain{
	background:white;
	width:8%;
	text-align: center;
}

=======
>>>>>>> 05acdbed68129b85495ec37e875e7bdc923cab6a
h1{
	text-align: center;
}

img{
	width:50%;
	height:50%;
}
body{
	background-color: #0080FF;
<<<<<<< HEAD
}

p{
	font-weight: 700;
	font-size: 15pt;

=======
	background-image: url('img/bg.JPG');
}

p{
	font-weight: 400;
	font-size: 8pt;
>>>>>>> 05acdbed68129b85495ec37e875e7bdc923cab6a
}
.hako1,.hako2{
    background:rgba(0,0,255,0.5);
    height: 200px;
}
.box{
<<<<<<< HEAD
	height: 220px;
	background: white;
	margin: 10px 10px 10px 10px;
	height:40%;
=======
	height: 120px;
	background: white;
	margin: 10px 10px 10px 10px;
	border-radius: 4px;

}
.titlebox{
	background:rgba(255,255,255,0.7);    
	border-radius: 4px;
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
>>>>>>> 05acdbed68129b85495ec37e875e7bdc923cab6a
}

</style>

<script>
<<<<<<< HEAD
//$(function() {
	//$(".hito").draggable({
	//connectToSortable: ".hako1,.hako2",
	//revert: "invalid"
	//});

//	$(".hako1").sortable({
//	});

//	$(".hako2").sortable({
//	});
//});


=======
>>>>>>> 05acdbed68129b85495ec37e875e7bdc923cab6a
</script>
</head>

<body>
<<<<<<< HEAD
	<header>
		<h1>こんなのはどう？</h1>
	</header>
    <!-- Page Content -->
	<div id="container">
=======
    <!-- Page Content -->
	<div id="container">
			<div class="row">
				<div class="col-xs-2"></div>
				<div align="center" class="col-xs-7 titlebox">
					<p>こちらはいかがでしょうか？</p>
				</div>
				<div class="col-xs-2"></div>
			</div>
>>>>>>> 05acdbed68129b85495ec37e875e7bdc923cab6a
	 
	        <!-- Projects Row -->
	        <div class="row">
	            <div class="col-xs-1">
	            </div>
	            
	            <div align="center" class="ui-draggable ui-draggable-handle col-xs-4 box">
	                    <img class="img-responsive hito" src=<?php echo $data1['OmiyageKobeTable']['url']; ?>>
	                    名前:<?php echo $data1['OmiyageKobeTable']['name']; ?><br>
	                    値段:594円<br>
	            </div>
	            
	            <div class="col-xs-1">
	            </div>
	            
	            <div  align="center" class="ui-draggable ui-draggable-handle col-xs-4 box">
	                    <img class="img-responsive hito" src=<?php echo $data2['OmiyageKobeTable']['url']; ?>>
	            		名前:<?php echo $data2['OmiyageKobeTable']['name']; ?><br>
	                    値段:702円<br>
	            </div>
	            
	            <div class="col-xs-1">
	            </div>
	            
	        </div>
	        <!-- /.row -->

	         <!-- Projects Row -->
	        <div class="row">
	            <div class="col-xs-1">
	            </div>
	            
	            <div align="center" class="ui-draggable ui-draggable-handle col-xs-4 box">
	                    <img class="img-responsive hito" src=<?php echo $data3['OmiyageKobeTable']['url']; ?>>
	                    名前:<?php echo $data3['OmiyageKobeTable']['name']; ?><br>
	                    値段:1978円<br>
	            </div>
	            
	            <div class="col-xs-1">
	            </div>
	            
	            <div align="center" class="ui-draggable ui-draggable-handle col-xs-4 box">
	                    <img class="img-responsive hito" src=<?php echo $data4['OmiyageKobeTable']['url']; ?>>
	                    名前:<?php echo $data4['OmiyageKobeTable']['name']; ?><br>
	                    値段:1080円<br>
	            </div>
	            
	            <div class="col-xs-1">
	            </div>
	            
	        </div>
	        <!-- /.row -->

	        <!-- Projects Row -->
	        <div class="row">
	            <div class="col-xs-1">
	            </div>
	            
	            <div align="center" class="ui-draggable ui-draggable-handle col-xs-4 box">
	                    <img class="img-responsive hito" src=<?php echo $data5['OmiyageKobeTable']['url']; ?>>
	                    名前:<?php echo $data5['OmiyageKobeTable']['name']; ?><br>
	                    値段:880円<br>
	            </div>
	            
	            <div class="col-xs-1">
	            </div>
	            
	            <div align="center" class="ui-draggable ui-draggable-handle col-xs-4 box">
	                    <img class="img-responsive hito" src=<?php echo $data6['OmiyageKobeTable']['url']; ?>>
	                    名前:<?php echo $data6['OmiyageKobeTable']['name']; ?><br>
	                    値段:1080円<br>
	            </div>
	            
	            <div class="col-xs-1">
	            </div>
<<<<<<< HEAD
	            
	        </div>
	        <!-- /.row -->

	        <!-- Projects Row -->
	</div>
	<div class="tryagain">Try again</div>
<!--	<img class="weka" src="/Users/kawamura/DoreKoreKobe/images.jpeg" alt="" width=20 height=30> -->
        <!-- Footer -->
=======
	        </div>
	        <!-- /.row -->

	        <div class="row">
	        	<div class="col-xs-4">
	        	</div>
	        	<div align="center" class="col-xs-3">
	        		<a href="index" class="btn btn-default btn-lg"><b>もう一度</b></a>
	        	</div>
	        	<div class="col-xs-4">
	        	</div>
	        </div>

	        <!-- Projects Row -->
	</div>


    <!-- Footer -->
>>>>>>> 05acdbed68129b85495ec37e875e7bdc923cab6a
    <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; NAKATA-TTT 2014</p>
<<<<<<< HEAD
                    <a href="#popup1" class="popup_btn">ボタン</a>
=======
>>>>>>> 05acdbed68129b85495ec37e875e7bdc923cab6a
                </div>
            </div>
            <!-- /.row -->
    </footer>
    <!-- /.container -->
</body>
</html>
