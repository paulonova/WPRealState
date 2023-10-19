<?php 
  $blockName = "cta-button";
  $label = get_field('label');
  $destination = get_field('destination');
  $align = get_field('align');
?>
<div class="<?php echo $blockName . '-' . $align ?>">
  <div class="<?php echo $blockName ?>">
    <?php echo $label; ?>
  </div>
</div>


<style>
.cta-button {
  padding: 5px 10px;
  border-radius: 5px;
  color: white;
  font-weight: bold;
  display: inline-block;
  background-color: #ec489a;
}

.cta-button-center {
  text-align: center;
}

.cta-button-right {
  text-align: right;
}

.cta-button-left {
  text-align: left;
}
</style>