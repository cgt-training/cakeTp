<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <div class="row">
    	<div class="col-md-6 col-md-push-3">
    		    	
    		        <h1 align="center"><?= __('Login') ?></h1>
    		        <div class="form-group">
    		        <?= $this->Form->input('username',['class'=>'form-control']); ?>
    		        </div>
    		        <div class="form-group">
    		        <?= $this->Form->input('password',['class'=>'form-control']); ?>
    		        </div>
    		        <?php
    		                   echo $this->Form->input('remember_me',['type'=>'checkbox','value'=>'Y'] ) 
    		?> 
    		 <? echo $this->Form->button(__('Login'),array('class'=>'left','style'=>''));?>

    	</div>
    </div>
<?= $this->Form->end() ?>
</div>