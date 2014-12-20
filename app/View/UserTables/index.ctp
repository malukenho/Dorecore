

<h1>Index Page</h1>
<p><?php echo $titleName ?></p>

<ul>

<?php foreach ($posts as $post) :?>
<li>
	<?php
	//debug($posts);
	//				テーブル名 列名
	//echo h($post['UszerTable']['user_sex']);
	
	echo $this->Html->link($post['UserTable']['user_sex'], './index');
	?>
	
	<?php echo "あいうえお";
	echo $this->Html->link('編集',array('action'=>'edit'),($post['UserTable']['user_sex'])); ?>
	
	<?php 
			?>
	
</li>
<?php endforeach; ?>
</ul> 

<!--追加の処理-->
<h1>Add Post</h1>
<p><?php echo $this->Html->link('Add psot',array('controller'=>'usertables','action'=>'add')); ?>
</p>

<ul>


<script>
$(function(){
	$('a.delete').click(function(e){
		if(confirm('sure?)){
			$.post
		
	});