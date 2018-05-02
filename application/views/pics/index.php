<?php
// application/views/pics/index.php 

$this->load->view($this->config->item('theme') . 'header'); ?>
<h2>Search Examples</h2>
<ul>
  <li><a href="<?=site_url()?>pics/bowling">bowling</a></li>
  <li><a href="<?=site_url()?>pics/lacrosse">lacrosse</a></li>
  <li><a href="<?=site_url()?>pics/backgammon">backgammon</a></li>
</ul>

<?php $this->load->view($this->config->item('theme') . 'footer'); ?>
