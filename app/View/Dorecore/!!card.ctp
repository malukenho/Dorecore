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
    
    <title>Dore Kore Kobe</title>
    <script src="js/swing.js"></script>
    <script src="js/classList.js"></script>
    <script src="js/card-stack.js"></script>
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/card-stack.css" rel="stylesheet">

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

#sayu{
width:100px; 
				height:50px; 
				border-radius: 100px; 
				position: absolute; 
				left: 50%; 
				top: 850px; 
	

}

</style>

</head>

<body>
    <!-- Page Content -->
	<div id="container">
			<div class="row">
				<div class="col-xs-1"></div>
				<div align="center" class="col-xs-9 titlebox">
					<h2>相手はこのお土産が好きかな？</h2>
					<h2>～好みの方向へタップ，またはボタンを押してください～</h2>
				</div>
				<div class="col-xs-1"></div>
			</div>
	 
	       <div id="viewport1">
        <ul class="stack">
            <li class="clubs">
			<div align="center" class="ui-draggable ui-draggable-handle col-xs-3 box">
	                    <img class="img-responsive hito"  src=<?php echo $data1['OmiyageKobeTable']['url']; ?> >
	            </div>
			</li>
        </ul>
    </div>


	        <!-- Projects Row -->
	        <div class="row">
	        	<div class="col-xs-4">
	        	</div>
	        	<div align="center" class="col-xs-3" id="sayu">
	        		<a href="index" class="btn btn-default btn-lg"><b>決定</b></a>
	        	</div>
	        	<div class="col-xs-4">
	        	</div>
	        </div>

	        <!-- Projects Row -->
	</div>


		<p>
			
			<form name="test">
			<input type="button" name="yahoo" value="好き!!" style="font-size: 48px; 
				color: white;
				width:200px; 
				height:100px; 
				border-radius: 100px; 
				position: absolute; 
				left: 10%; 
				top: 750px; 
				background: red" onClick="kakunin(1)">
				
			<input type="button" name="google" value="あんまり!!" style="font-size: 48px; 
				color: brown; 
				width:200px; 
				height:100px; 
				border-radius: 100px; 
				position: absolute; 
				left: 65%; 
				top: 750px; 
				background: skyblue"onClick="notlike(2)">
				

			
			
			
			</form>
		</p>


	

	<script>

	function kakunin(num)
  {
  	if (num == 1 && i == 0)
  	{
    	document.getElementById("viewport4").style.visibility="hidden";
		i = i + 1;

  	}	else if ( i == 1 ) {
    	document.getElementById("viewport3").style.visibility="hidden";
		i = i + 1;

  	}	else if (i == 2) {
    	document.getElementById("viewport2").style.visibility="hidden";
		i = i + 1;
  	} 	else if ( i == 3 ) {
    	document.getElementById("viewport1").style.visibility="hidden";
		i = i + 1;
  	}
}

	function notlike(num)
	{
  	if (i == 0)
  	{
    	document.getElementById("viewport4").style.visibility="hidden";
		i = i + 1;

  	}	else if ( i == 1 ) {
    	document.getElementById("viewport3").style.visibility="hidden";
		i = i + 1;

  	}	else if (i == 2) {
    	document.getElementById("viewport2").style.visibility="hidden";
		i = i + 1;
  	} 	else if (i == 3 ) {
    	document.getElementById("viewport1").style.visibility="hidden";
		i = i + 1;

  	}
	}


	</script>
		
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