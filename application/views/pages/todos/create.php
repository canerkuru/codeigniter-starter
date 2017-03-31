<h2>Create a To-do item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('todos/create') ?>


  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label for="text">Description:</label>
    <input type="text" class="form-control" name="description">
  </div>
  <button type="submit" name="submit" class="btn btn-default">Create</button>
	
</form>


