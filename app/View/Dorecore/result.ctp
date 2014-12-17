<!DOCTYPE html>
<html lang="ja">
<div id="bg">
<img class="bg"src="img/bg.JPG" alt=""/>
</div>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dore Kore Kobe 結果画面</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">

<style>
.box{
	height: 250px;
	background: white;
	background: white;
	margin: 10px 20px;
	padding: 15px;
	border-radius: 4px;
}
.img-responsive{
	height:20vw;
	width:20vw;
}
.titlebox{
	border-radius: 4px;
	margin: 0px 10px;
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

</head>

<body>
    <!-- Page Content -->
	<div id="container">
			<div class="row">
				<div class="col-xs-1"></div>
				<div align="center" class="col-xs-9 titlebox">
					<h2>おすすめのお土産</h2>
				</div>
				<div class="col-xs-1"></div>
			</div>
	 
	        <!-- Projects Row -->
	        <div class="row">
	            <div class="col-xs-1">
	            </div>            
	            <div align="center" class="col-xs-4 col-xs-offset-2 box">
	                    <img class="img-responsive hito" src=<?php echo $data1['OmiyageKobeTable']['url']; ?>>
	                    <?php echo $data1['OmiyageKobeTable']['name']; ?><br>
	                    <?php echo $data1['OmiyageKobeTable']['price']; ?>円<br>
	            </div>	            
	            <div  align="center" class="col-xs-4 col-xs-offset-1 box">
	                    <img class="img-responsive hito" src=<?php echo $data2['OmiyageKobeTable']['url']; ?>>
	            		<?php echo $data2['OmiyageKobeTable']['name']; ?><br>
	                    <?php echo $data2['OmiyageKobeTable']['price']; ?>円<br>
	            </div>
	        </div>
	        <!-- /.row -->

	        <!-- Projects Row -->
	        <div class="row">
	            <div class="col-xs-1">
	            </div>
	            
	            <div align="center" class="col-xs-4 col-xs-offset-2 box">
	                    <img class="img-responsive hito" src=<?php echo $data3['OmiyageKobeTable']['url']; ?>>
	                    <?php echo $data3['OmiyageKobeTable']['name']; ?><br>
	                    <?php echo $data3['OmiyageKobeTable']['price']; ?>円<br>
	            </div>
	            	            
	            <div align="center" class="col-xs-4 col-xs-offset-1 box">
	                    <img class="img-responsive hito" src=<?php echo $data4['OmiyageKobeTable']['url']; ?>>
	                    <?php echo $data4['OmiyageKobeTable']['name']; ?><br>
	                    <?php echo $data4['OmiyageKobeTable']['price']; ?>円<br>
	            </div>
	        </div>
	        <!-- /.row -->

	        <!-- Projects Row -->
	        <div class="row">
	            <div class="col-xs-1">
	            </div>
	            <div align="center" class="col-xs-4 col-xs-offset-2 box">
	                    <img class="img-responsive hito" src=<?php echo $data5['OmiyageKobeTable']['url']; ?>>
	                    <?php echo $data5['OmiyageKobeTable']['name']; ?><br>
	                    <?php echo $data5['OmiyageKobeTable']['price']; ?>円<br>
	            </div>            
	    
	            <div align="center" class="col-xs-4 col-xs-offset-1 box">
	                    <img class="img-responsive hito" src=<?php echo $data6['OmiyageKobeTable']['url']; ?>>
	                    <?php echo $data6['OmiyageKobeTable']['name']; ?><br>
	                    <?php echo $data6['OmiyageKobeTable']['price']; ?>円<br>
	            </div>         
	       </div>
	        <!-- /.row -->

	        <!-- Projects Row -->
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