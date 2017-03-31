
<?php echo validation_errors(); ?>

<?php echo form_open('todos/create') ?>


  <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" name="title" value="<?php echo $todo['title'] ?>">
  </div>
  <div class="form-group">
    <label for="text">Description:</label>
    <textarea name="description" class="form-control"><?php echo $todo['description'] ?></textarea>
  </div>
  <button type="submit" name="submit" class="btn btn-default">Update</button>
	
</form>



