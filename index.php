<?php

require 'config/Model.php';
require 'assets/head.php'; 

$json=new cases();

$countries=$json->conectapi("https://api.thevirustracker.com/free-api?countryTotals=ALL");

$countrys= $countries->countryitems;


?>
<div class="container">
<div class="row">

<div class="col-sm-6">
<table class="table table-borderless">
<tr>
<?php
    for ($i=1; $i <183 ; $i++) { 
        foreach($countrys as $coun){
            $code =$coun->$i->code; ?>
        <td>
        <?php print("<img src='https://www.countryflags.io/$code/flat/64.png'>");
            echo "<strong >" . $translation = $translator->translate($coun->$i->title, 'en-ar'). "</strong><br>";
            echo "<p > الحالات " . $coun->$i->total_cases
            . " الوفيات ".
            $coun->$i->total_deaths;
            echo "المتعافون: ".$coun->$i->total_recovered ."</p>";

            ?>
        </td>
    </tr>
    <?php } }; ?>
    </table>
 </div>            
</div>
</div>

</body>
</html>