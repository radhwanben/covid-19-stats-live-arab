<?php 
    require  'config/Model.php';
    require  'config/translate.php';
    require 'assets/head.php'; 
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
                                                echo "<strong style='font-family: 'Markazi Text', serif;'>" .  $translationServiceClient->translateText($country->country, $targetLanguage,
                                                $formattedParent). "</strong><br>";
                                                echo "<p> الحالات " .$country->cases. " الوفيات ". $country->deaths ; echo "المتعافون: ".$country->recovered ."</p>";

                                                ?>
                                        </td>
                            <?php $i++; } endforeach; ?>
                            </tr>

                    </table>

    </div>