<!DOCTYPE html>
<html>

<head>
     <meta charset="utf-8">



	<script type="text/javascript" src="jquery-2.1.1.min.js"></script>

  

</head>
<body>
<form method="post"action="result">



	<td><?php echo $data['OmiyageKobeTable']['id']; ?></td>
    <td><?php echo $data['OmiyageKobeTable']['name']; ?></td>
    <td><?php echo $data['OmiyageKobeTable']['url']; ?></td>




<p>壷？<br>
<input type="radio" name="q1" value="内"> 内
<input type="radio" name="q1" value="壷"> 壷
<input type="radio" name="q1" value="若"> 若
</p>

<p><a href = "result"><input type="submit" value="送信する"></a></p>

</form>



</body>
</html>