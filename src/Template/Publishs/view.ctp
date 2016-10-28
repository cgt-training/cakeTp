<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Publish'), ['action' => 'edit', $publish->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Publish'), ['action' => 'delete', $publish->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publish->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Publishs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publish'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="publishs view large-9 medium-8 columns content">
    <h3><?= h($publish->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($publish->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($publish->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($publish->id) ?></td>
        </tr>
    </table>
</div>
