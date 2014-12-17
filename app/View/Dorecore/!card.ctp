
<!DOCTYPE html>
<html>
<div id="bg">
	<img class="bg"src="img/bg.JPG" alt=""/>
</div>
<head>
     <meta charset="utf-8">

	<script type="text/javascript" src="jquery-2.1.1.min.js"></script>

    <link rel="stylesheet" href="./css/card-stack.css">

    <script src="./js/swing.js"></script>
    <script src="./js/classList.js"></script>
    <script src="./js/card-stack.js"></script>
	<style type="text/css">
	p{
		font-weight: 400;
		font-size: 36pt;
		background-color: none;
		color: red;
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

	<div align="center" class="ui-draggable ui-draggable-handle col-xs-3 box">
			<p>相手が好きと思うものをえらんで下さい</p>
	</div>
	<div class="row">
	<div class="col-xs-2">
	</div>
	<div class="col-xs-7">
    <div id="viewport">
        <ul class="stack">
            <li class="clubs">
			<div align="center" class="ui-draggable ui-draggable-handle col-xs-3 box">
	                    <img class="img-responsive hito" src="17925558.jpeg" width="300" alt="">
	            </div></li>
            <li class="diamonds">
			<div align="center" class="ui-draggable ui-draggable-handle col-xs-3 box">
	                    <img class="img-responsive hito" src="http://ecx.images-amazon.com/images/I/51j3fkDu-RL._SX385_.jpg" width="300" alt="">
	            </div></li>
            <li class="hearts">
			<div align="center" class="ui-draggable ui-draggable-handle col-xs-3 box">
	                    <img class="img-responsive hito" src="http://ecx.images-amazon.com/images/I/51q9jP%2BpTgL._SX385_.jpg" width="300" alt="">
	            </div></li>
            <li class="spades">
			<div align="center" class="ui-draggable ui-draggable-handle col-xs-3 box">
	                    <img class="img-responsive hito" src="17925558.jpeg" width="300" alt="">
	            </div></li>
        </ul>
    </div>
	</div>
	<div class="col-xs-2">
	</div>
</div>

	<div class="row">
		<div class="col-xs-2">
		</div>
		<div class="col-xs-2">
			     <input type="submit" value="キライ">
		</div>
		<div class="col-xs-2">
		</div>
		<div class="col-xs-2">
			     <input type="submit" value="スキ">
		</div>
		<div class="col-xs-2">
		</div>
	</div>	
	
    <!--<div id="source">
        <p>Drag the playing cards out of the stack and let go. Dragging them beyond the desk will throw them out of the stack. If you drag too little and let go, the cards will spring back into place. You can throw cards back into the stack after you have thrown them out.</p>
        <p>Open the <a href="https://developer.chrome.com/devtools/docs/console">Console</a> to view the associated events.<p>
        <p>Demonstration of <a href="https://github.com/gajus/swing">https://github.com/gajus/swing</a> implementation.</p>
    </div>-->
	
</body>
</html>
