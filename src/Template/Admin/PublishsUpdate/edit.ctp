<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $publishsUpdate->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $publishsUpdate->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Publishs Update'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="publishsUpdate form large-9 medium-8 columns content">
    <?= $this->Form->create($publishsUpdate) ?>
    <fieldset>
        <legend><?= __('Edit Publishs Update') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
