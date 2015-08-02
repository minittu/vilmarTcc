<div class="users form col-lg-4 col-md-offset-3">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User',array('class' => 'form-horizontal'));?>
<div class="form-group">
    <fieldset>
        <legend><?php echo __('Insira os dados para acessar o sistema'); ?></legend>
        <?php 
	        echo $this->Form->input('username',array("class" =>	"form-control","label" => "Login"));
	        echo $this->Form->input('password',array("class" =>	"form-control","label" => "Senha"));
    	?>
    </fieldset>
</div>
<?php //echo $this->Form->end(__('Enviar'));?>
<button type="submit" class="btn btn-lg btn-primary">Enviar</button> 
</div>
</div> 