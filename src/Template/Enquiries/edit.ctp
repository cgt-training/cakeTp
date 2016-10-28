<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $enquiry->email],
                ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->email)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Enquiries'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="enquiries form large-9 medium-8 columns content">
    <?= $this->Form->create($enquiry) ?>
    <fieldset>
        <legend><?= __('Edit Enquiry') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('phone');
            echo $this->Form->input('query');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
