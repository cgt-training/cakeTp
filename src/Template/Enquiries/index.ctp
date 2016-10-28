<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Enquiry'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enquiries index large-9 medium-8 columns content">
    <h3><?= __('Enquiries') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('query') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enquiries as $enquiry): ?>
            <tr>
                <td><?= h($enquiry->name) ?></td>
                <td><?= h($enquiry->phone) ?></td>
                <td><?= h($enquiry->email) ?></td>
                <td><?= h($enquiry->query) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $enquiry->email]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $enquiry->email]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enquiry->email], ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->email)]) ?>
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
