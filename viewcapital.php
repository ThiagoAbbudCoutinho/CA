<?php
include "header.php";


$capitals=array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
"Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United
Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest",
"Latvia"=>"Riga","Malta"=>"Valetta", "Austria" => "Vienna",
"Poland"=>"Warsaw") ;

?>


<div class="container mx-auto mt-5 mb-5 pb-5">
    <h1 class="text-center">COUNTRIE'S CAPITAL LIST</h1>
<table class="table table-bordered text-center mt-5">
  <thead class="table-primary">
    <tr>
      <th scope="col">Country</th>
      <th scope="col">Capital</th>
     
    </tr>
  </thead>
  <tbody>
  <?php
  foreach($capitals as $Countries => $cities) {
echo"<tr><td>".$Countries."</td><td>".$cities."</td>";
  }
  ?>
  
  </tbody>
</table>
</div>


<?php
require  "footer.php";

?>