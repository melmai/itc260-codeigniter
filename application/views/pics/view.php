<?php
// application/views/pics/view.php 

$this->load->view($this->config->item('theme') . 'header'); ?>


<h2>Pictures of <?=$title?></h2>
<section class="photo-container">
    <?php foreach($pics as $pic){ ?>
        <div class="photo">
            <?php
            $size = 'm';
            $photo_url = 'http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

            echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
            ?>
        </div>
    <?php } ?>
</section>

<?php 
echo '<div>' . anchor('pics','Back to Search') . '</div>'; 
$this->load->view($this->config->item('theme') . 'footer'); 