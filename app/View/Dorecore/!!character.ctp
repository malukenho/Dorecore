<!DOCTYPE html>
<html lang="en">

<div id="bg">
	<img class="bg"src="img/bg.JPG" alt=""/>
</div>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="お土産推薦アプリ　NATAKA-TTT">
    <meta name="author" content="NAKATA-TTT">

    <title>Dore Kore Kobe</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<script src="./js/bootstrap-select.js"></script>

    <!-- Custom CSS -->
    <link href="css/4-col-portfolio.css" rel="stylesheet">
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
<script type="text/javascript">
        $(window).on('load', function () {
            $('.selectpicker').selectpicker({
                'selectedText': 'cat'
            });
        });
</script>
</head>

<body>
    <!-- Page Content -->
	<div id="container">
		<div align="center" class="row">
			<div class="col-lg-4 col-lg-offset-4 col-xs-8 col-xs-offset-2">
				<h4>相手について教えてください!</h4>
			</div>
		</div>
	</div>
	<div class = "row">
		<div align="center" class="col-lg-4 col-lg-offset-4 col-xs-8 col-xs-offset-2">
			<?php
			echo $this->Html->link('男',array('action'=>'man')); 
			?>
			
			<?php
			echo $this->Html->link('女',array('action'=>'woman')); 
			?>

	</div>
	<br>
	<div class = "row">
		<div align="center" class="col-lg-4 col-lg-offset-4 col-xs-6 col-xs-offset-3 titlebox">
			<img src= <?php echo $character_image; ?>>
		</div>
	</div>
	<br>
    <!-- Projects Row -->
    <div class="row">
      	<div align="center" class="col-xs-8 col-xs-offset-2">
			<a href="card" class="btn btn-default btn-lg"><b>決定</b></a>
		</div>
    </div>
    <!-- /.row -->

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
