<h1>Blog posts</h1>

<?php
    echo $this->Html->link(
        '記事の追加',
        array('controller' => 'posts', 'action' => 'add')
    );
?>

<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Action</th>
        <th>Created</th>
    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link($post['Post']['title'],
                array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); 
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    '削除する',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => '本当に削除しますか？')
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Html->link(
                    '編集する',
                    array('action' => 'edit', $post['Post']['id'])
                );
            ?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>
