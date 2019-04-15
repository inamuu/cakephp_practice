<h1>記事の追加</h1>

<?php
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows'=> '3' ));
echo $this->Form->end('Save Post');
?>