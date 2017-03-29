
<?php echo validation_errors(); ?>


<?php echo form_open('','class="form-horizontal"'); ?>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Title:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title" placeholder="Enter title">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Slug:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="slug" placeholder="Enter slug">
    </div>
  </div> 
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Text:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="text" placeholder="Enter text">
    </div>
  </div>   
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Save</button>
    </div>
  </div>
  
</form>

<p>&nbsp;</p>

<?php foreach ($news as $news_item): ?>

        <h3><?php echo $news_item['title']; ?></h3>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>

<?php endforeach; ?>