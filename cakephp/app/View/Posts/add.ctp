<h1>記事の追加</h1>

<?php
echo $this->Form->create('Post');
echo $this->From->input('title');
echo $this->From->input('body', array('rows'=> '3' ));
echo $this->From->end('Save Post');
?>