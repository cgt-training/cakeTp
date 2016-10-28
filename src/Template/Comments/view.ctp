<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Comment'), ['action' => 'edit', $comment->sno]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Comment'), ['action' => 'delete', $comment->sno], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->sno)]) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="comments view large-9 medium-8 columns content">
    <h3><?= h($comment->sno) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('U Name') ?></th>
            <td><?= h($comment->u_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('C Title') ?></th>
            <td><?= h($comment->c_title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comment') ?></th>
            <td><?= h($comment->comment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sno') ?></th>
            <td><?= $this->Number->format($comment->sno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('P Id') ?></th>
            <td><?= $this->Number->format($comment->p_id) ?></td>
        </tr>
    </table>
</div>
