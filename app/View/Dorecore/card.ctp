
<!DOCTYPE html>
<html>
<head>
    <!--<meta charset="utf-8">-->
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>

    <link rel="stylesheet" href="css/card-stack.css">

    <script src="js/swing.js"></script>
    <script src="js/classList.js"></script>
    <script src="js/card-stack.js"></script>

	
	<style type="text/css">
		p{
			font-weight: 400px;
			font-size: 36pt;
			background-color: none;
			color: green;
		}
		#bg1 {
			position: fixed; 
			top: 0%; 
			left: 0%; 

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
		#viewport1 {
			width: 500px; 
			height: 150px;
		
		}
		#viewport2 {
			width: 500px; 
			height: 150px;
		
		}
		#viewport3 {
			width: 500px; 
			height: 150px;
		
		}		
		#viewport4 {
			width: 500px; 
			height: 150px;
		
		}
		#End {
			width: 500px; 
			height: 150px;
		
		}
	</style>

</head>
<body>

	<div id="bg1">
		<img class="bg"src="img/bg_card.JPG"  width=950px height=1000px>
		
		
	</div>


		
	<div id="viewport1">
		<ul class="stack">
			<li class="clubs">
				<div align="center" class="ui-draggable ui-draggable-handle col-xs-3 box">
					<img class="img-responsive hito"  src="img/End.png" width=200px height=200px >
		        </div>
			</li>
		</ul>
	</div>

	<div id="viewport2">
		<ul class="stack">
			<li class="clubs">
				<div align="center" class="ui-draggable ui-draggable-handle col-xs-3 box">
					<img class="img-responsive hito"  src=<?php echo $data2['OmiyageKobeTable']['url']; ?> width=200px height=200px >
		        </div>
			</li>
		</ul>
	</div>

	<div id="viewport3">
		<ul class="stack">
			<li class="clubs">
				<div align="center" class="ui-draggable ui-draggable-handle col-xs-3 box">
					<img class="img-responsive hito"  src=<?php echo $data3['OmiyageKobeTable']['url']; ?> width=200px height=200px >
		        </div>
			</li>
		</ul>
	</div>

	<div id="viewport4">
		<ul class="stack">
			<li class="clubs">
				<div align="center" class="ui-draggable ui-draggable-handle col-xs-3 box">
					<img class="img-responsive hito"  src=<?php echo $data4['OmiyageKobeTable']['url']; ?> width=200px height=200px >
		        </div>
			</li>
		</ul>
	</div>
	
	<div id="End">
		<div id="viewport">
			<ul class="stack">
				<li class="clubs">
					<div align="center" class="ui-draggable ui-draggable-handle col-xs-3 box">
						<img class="img-responsive hito"  src="img/End.png">
			        </div>
				</li>
			</ul>
		</div>
	</div>

	<div>
		<p>
			
			<form name="test">
				<input type="button" name="yahoo" value="好き!!" style="font-size: 48px; color: white; 
					width:200px;
					height:100px; 
					border-radius: 100px; 
					position: absolute; 
					left: 70px; top: 450px; background: red" onClick="kakunin(1)">
					
				<input type="button" name="google" value="あんまり!!" style="font-size: 48px; color: brown; 
					width:200px; 
					height:100px;
					 border-radius: 100px; 
					 position: absolute; 
					left: 650px;
					 top: 450px; 
					background: skyblue"onClick="notlike(2)">
			</form>
				<input type="button" name="uki" value="推薦結果" style="font-size: 18px; color: brown; 
					width:100px; 
					height:80px;
					 border-radius: 100px; 
					 position: absolute; 
					left: 420px;
					 top: 550px; 
					background: skyblue"
					onClick="location.href='result'">
					
			</form>
			
		</p>
	</div>
</body>

<script>
	var i = 0;

	function kakunin(num){
		if (num == 1 && i == 0){
	    	document.getElementById("viewport4").style.visibility="hidden";
			i = i + 1;
	  	}else if ( i == 1 ) {
	    	document.getElementById("viewport3").style.visibility="hidden";
			i = i + 1;
	  	}else if (i == 2) {
	    	document.getElementById("viewport2").style.visibility="hidden";
			i = i + 1;
	  	}else if ( i == 3 ) {
	    	document.getElementById("viewport1").style.visibility="hidden";
			i = i + 1;
	  	}
	  	
	}

	function notlike(num){
	  	if (i == 0){
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
		
	
    <!--<div id="source">
        <p>Drag the playing cards out of the stack and let go. Dragging them beyond the desk will throw them out of the stack. If you drag too little and let go, the cards will spring back into place. You can throw cards back into the stack after you have thrown them out.</p>
        <p>Open the <a href="https://developer.chrome.com/devtools/docs/console">Console</a> to view the associated events.<p>
        <p>Demonstration of <a href="https://github.com/gajus/swing">https://github.com/gajus/swing</a> implementation.</p>
    </div>-->
	

</html>
