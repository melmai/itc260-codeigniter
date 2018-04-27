<?php
// application/views/pics/index.php 

$this->load->view($this->config->item('theme') . 'header');
?>

<form>
  <div class="form-group">
    <label for="tags">Search images: </label>
    <input type="text" class="form-control" id="tags" placeholder="bears">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<h3>Suggested Searches</h3>
<ul>
  <li><a href="/pics/bowling">bowling</a></li>
  <li><a href="/pics/lacrosse">lacrosse</a></li>
  <li><a href="/pics/backgammon">backgammon</a></li>
</ul>

<?php $this->load->view($this->config->item('theme') . 'footer'); ?>
