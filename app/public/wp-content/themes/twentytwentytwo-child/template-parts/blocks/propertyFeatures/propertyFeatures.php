<?php 

$price = get_field("price", $post_id);
$bedroom = get_field("bedrooms", $post_id);
$bathrooms = get_field("bathrooms", $post_id);
$hasParking = get_field("has_parking", $post_id);
$petFriendly = get_field("pet_friendly", $post_id);
?>

<div>
  <div class="feature_bkg">
    <div class="feature_grid">
      <div>
        <i class="fa-solid fa-bed"></i> <?php echo $bedroom; ?> bedrooms
      </div>
      <div>
        <i class="fa-solid fa-bath"></i> <?php echo $bathrooms; ?> bathrooms
      </div>
      <div>
        <?php if($hasParking){echo "<i class='fa-solid fa-car'></i> parking available";}  ?>
      </div>
      <div>
        <?php if($petFriendly){echo "<i class='fa-solid fa-dog'></i> pet friendly";}  ?>
      </div>
    </div>
    <div class="price">
      <h3>€ <?php echo $price;?></h3>
    </div>
  </div>
</div>

<style>
.feature_bkg {
  max-width: 500px;
  margin: 10px auto;
  color: black;
  background: rgba(255, 255, 255, 0.9);
  padding: 10px;
}

.feature_grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 10px;
}

.price {
  text-align: center;
  font-weight: bold;
  font-size: 24px;
}
</style>