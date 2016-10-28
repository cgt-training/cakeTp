<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li>
            <?php
                if($this->request->Session()->read('Auth.User'))
                { 
             echo       $this->Html->link(__('New User'), ['action' => 'add']);
                }
                else
                {
                    echo $this->Html->link(
                                    'Add User',
                                    ['controller' => 'Users', 'action' => 'login']
                                ); 
                }
             ?>
        </li>
    </ul>
</nav>
<div class="comments index large-9 medium-8 columns content">
    <h3><?= __('Comments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('sno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('p_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('u_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('c_title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comment') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($comments as $comment): ?>
            <tr>
                <td><?= $this->Number->format($comment->sno) ?></td>
                <td><?= $this->Number->format($comment->p_id) ?></td>
                <td><?= h($comment->u_name) ?></td>
                <td><?= h($comment->c_title) ?></td>
                <td><?= h($comment->comment) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $comment->sno]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $comment->sno]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $comment->sno], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->sno)]) ?>
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
