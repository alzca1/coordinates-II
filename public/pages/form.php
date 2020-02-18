<?php

require_once '../../private/initialize.php'; 

if(is_post_request()){
  $restaurant = []; 
  $restaurant['name'] = $_POST['name'] ?? ''; 
  $restaurant['address'] = $_POST['address'] ?? ''; 
  $restaurant['lat'] = $_POST['lat'] ?? ''; 
  $restaurant['lng'] = $_POST['lng'] ?? ''; 
  $restaurant['kind_food'] = $_POST['kind_food'] ?? '';

  $result = insert_restaurant($restaurant);

  if($result === true){
    redirect_to(url_root_for('index.html'));
  }

} else {
  $restaurant = [];
  $restaurant['name'] = '';
  $restaurant['address'] = '';
  $restaurant['lat'] = '';
  $restaurant['lng'] = '';
  $restaurant['kind_food'] = '';

}

$page_title = "Restaurant Form";
include(SHARED_PATH . "/form_header.php");

?>

<div class="content">
  <form action="<?php echo url_for('/pages/form.php') ?>" method="post">
    <dl>
      <dt>Restaurant Name</dt>
      <dd>
        <input type="text" name="name" value="">
      </dd>
    </dl>
    <dl>
      <dt>Restaurant Address</dt>
      <dd>
        <input type="text" name="address" value="">
      </dd>
    </dl>

    <dl>
      <dt>Restaurant Latitude</dt>
      <dd>
        <input type="number" name="lat" value="" step="any">
      </dd>
    </dl>

    <dt>Restaurant Longitude</dt>
    <dd>
      <input type="number" name="lng" value="" step="any">
    </dd>
    </dl>

    <dt>Cuisine</dt>
    <dd>
      <input type="text" name="kind_food" value="">
    </dd>
    </dl>

    <div>
      <input type="submit" value="Create Restaurant">
    </div>

  </form>

</div>


<?php include(SHARED_PATH . "/form_footer.php") ?>

