<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
   <div class="row">
       <div class="col-md-9 col-md-push-1">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <h1 align="center"><?= __('Add User') ?></h1>
                <?php
                    echo $this->Form->input('username');
                    echo $this->Form->input('password');
                    echo $this->Form->input('role');
                ?>
                <?= $this->Form->button(__('Submit'),array('class'=>'left')) ?>

            </fieldset>
            <?= $this->Form->end() ?>           
       </div>
   </div>
</div>
