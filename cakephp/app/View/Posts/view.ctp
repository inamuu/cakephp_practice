<!-- File: /app/view/Posts/view.ctp -->

<h1><?php echo h($post['Post']['title']); ?></h1>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<pre><?php echo h($post['Post']['body']); ?></pre>
