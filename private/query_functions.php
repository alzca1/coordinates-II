<?php function insert_restaurant($restaurant){
    global $db; 

    $sql = "INSERT INTO restaurants "; 
    $sql .= "(name,address, lat, lng, kind_food) "; 
    $sql .= "VALUES (";
    $sql .= "'" . $restaurant['name'] . "',";
    $sql .= "'" . $restaurant['address'] . "',";
    $sql .= "'" . $restaurant['lat'] . "',";
    $sql .= "'" . $restaurant['lng'] . "',";
    $sql .= "'" . $restaurant['kind_food'] . "'";
    $sql .= ")";

    $result = mysqli_query($db, $sql); 
    if($result){
        return true; 
    }else{
        echo mysqli_error($db); 
        db_disconnect($db); 
        exit; 
    }

}

function get_all_restaurants(){

    global $db; 
    
    $sql = "SELECT * FROM restaurants";
    $result = mysqli_query($db, $sql); 
    confirm_result_set($result);
    return $result; 
}


?>