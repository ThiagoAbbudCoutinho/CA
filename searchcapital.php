<?php
include "header.php";



$capitals=array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", 
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", 
"Estonia"=>"Tallin", "Hungary"=>"Budapest",
"Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna",
"Poland"=>"Warsaw") ;

?>

<div class="container mt-5 mb-5 search-form">
<form method="post">
<div class="form-group">
    <label for="exampleFormControlSelect1">Select Country</label>
    <select class="form-control" name="searchcapital">
    <?php
  foreach($capitals as $Countries => $cities) {
echo"<option value='".$Countries."'>".$Countries."</option>";
  }
  ?>
    </select>
  </div>
 
  <button type="submit" class="btn btn-primary" name="search">Search</button>
  
</form>
</div>




<?php

if(isset($_POST['search'])){

    $country=$_POST['searchcapital'];

    foreach($capitals as $Countries => $cities) {

        if($country==$Countries){ 
          echo'<h3 class="text-center">The Capital of <strong class="text-primary">'.$Countries.'</strong> is <strong class="text-success"> '.$cities.'</strong></h3>';
          }

        
        }
}
require  "footer.php";

?>