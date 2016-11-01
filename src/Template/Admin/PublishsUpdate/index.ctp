<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Publishs Update'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="publishsUpdate index large-9 medium-8 columns content">
    <h3><?= __('Publishs Update') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($publishsUpdate as $publishsUpdate): ?>
            <tr>
                <td><?= $this->Number->format($publishsUpdate->id) ?></td>
                <td><?= h($publishsUpdate->title) ?></td>
                <td><?= h($publishsUpdate->description) ?></td>
                <td><?= h($publishsUpdate->created) ?></td>
                <td><?= h($publishsUpdate->modified) ?></td>
                <td><?= $this->Number->format($publishsUpdate->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $publishsUpdate->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $publishsUpdate->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $publishsUpdate->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publishsUpdate->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
