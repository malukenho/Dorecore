<h1>Add Post</h1>
<p>MySampleData Add Form.</p>
<?php
  echo $this->Form->create('UserTable');
  echo $this->Form->input('uid');

  echo $this->Form->end('Save Post');
?>
 