
	
<?php echo form_open('session/form_post'); ?>

	<p>session_id : <?php echo $this->session->session_id; ?></p>
	
	<h5>First Name</h5>
	<input type="text" name="firstname" class="form-control" value="<?php echo $this->session->firstname; ?>" />

	<h5>Last Name</h5>
	<input type="text" name="lastname" class="form-control" value="<?php echo $this->session->lastname; ?>" />
	<br>

	<div><input type="submit" value="Submit" class="btn btn-success" />
		<button type="button" class="btn btn-danger" 
			onclick="window.location='<?php echo base_url()?>session/clear_session'">Clear Session</button>
	</div>
<?php echo form_close(); ?>
	
