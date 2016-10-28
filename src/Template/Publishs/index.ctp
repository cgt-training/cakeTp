<div id="sourceDiv">
    <nav class="large-3 medium-4 columns" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li>
                <?php
                    if($this->request->Session()->read('Auth.User'))
                    { 
                 echo       $this->Html->link(__('New Post'), ['action' => 'add']);
                    }
                    else
                    {
                        echo $this->Html->link(
                                        'New Post',
                                        ['controller' => 'Users', 'action' => 'login']
                                    ); 
                    }
                 ?>
            </li>
        </ul>
    </nav>
    <div class="publishs index large-9 medium-8 columns content">
        <h3><?= __('Publishs') ?></h3>
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($publishs as $publish): ?>
                <tr>
                    <td><?= $this->Number->format($publish->id) ?></td>
                    <td><?= h($publish->title) ?></td>
                    <td><?= h($publish->description) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $publish->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $publish->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $publish->id], ['confirm' => __('Are you sure you want to delete # {0}?', $publish->id)]) ?>
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
</div>