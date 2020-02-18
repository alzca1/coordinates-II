<?php

require_once '../../private/initialize.php'; 

$restaurants_set = get_all_restaurants();
$restaurantdata = array(); 

$i=0; 
while($restaurant = mysqli_fetch_assoc($restaurants_set)){
$restaurantdata[$i] = $restaurant;
$i++; 
}

header('Content-type: application/json; charset=utf-8');
echo json_encode($restaurantdata);

