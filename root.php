<?php



require 'config/Model.php';
require 'lib/vendor/autoload.php';


?>
<html dir="rtl" lang="ar">
<head>
        <title>TMC monitoring COVID19 CASES </title>
<meta charset="utf-8">

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<script src="assets/js/jquery-3.4.1.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">

<div class="col-sm-6>">
                <?php 
                        echo "	 الحالات : " . $allcases->cases;
                         echo "	 الوفيات : " . $allcases->deaths;
                           echo "	 المتعافون : " . $allcases->recovered;
                             echo "	 البلدان المتضررة  : " . $allcases->affectedCountries;
                              ?>
                <table class="table table-borderless">
                                    <tr>
                                        <?php
                                        $i = 0; 
                                        foreach($countries as $country): ?>
                                        <?php if($i >=4){break;}else{?>
                                        <td>
                                        <img src='<?php echo $country->countryInfo->flag ?>' /> 
                                            <?php
                                                echo "<strong>" . $translation = $translator->translate($country->country, 'en-ar'). "</strong><br>";
                                                echo " الحالات " .$country->cases. " الوفيات ". $country->deaths ; echo "المتعافون: ".$country->recovered ;

                                                ?>
                                        </td>
                                    </tr>
                                    <?php $i++; } endforeach; ?>
                </table>
                </div>

                <div class="col-sm-6">
                            <table class="table table-borderless">

                                                <tr>
                                                    <?php foreach($countries as $country): ?>
                                                    <?php if(in_array($country->country,$arabicnamecountry)): ?>
                                                    <td>
                                                    <img src='<?php echo $country->countryInfo->flag ?>' /> 
                                                        <?php
                                                            echo "<strong>" . $translation = $translator->translate($country->country, 'en-ar'). "</strong><br>";
                                                            echo " الحالات " .$country->cases. " الوفيات ". $country->deaths ; echo "المتعافون: ".$country->recovered ;

                                                            ?>
                                                    </td>
                                                </tr>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                            </table>
                    </div>            
</div>
</div>

</body>
</html>



