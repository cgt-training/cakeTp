<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Publishs Update'), ['action' => 'edit', $publishsUpdate->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Publishs Update'), ['action' => 'delete', $publishsUpdate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publishsUpdate->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Publishs Update'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Publishs Update'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="publishsUpdate view large-9 medium-8 columns content">
    <h3><?= h($publishsUpdate->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($publishsUpdate->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($publishsUpdate->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($publishsUpdate->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($publishsUpdate->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($publishsUpdate->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($publishsUpdate->modified) ?></td>
        </tr>
    </table>
</div>
