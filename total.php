<?php require 'config/Model.php';
      require 'assets/head.php'; 
     
?>

                    <p style="float: right"> <?php 
                        echo "	 الحالات : " . $allcases->cases;
                         echo "	 الوفيات : " . $allcases->deaths;
                           echo "	 المتعافون : " . $allcases->recovered ?>
                    </p>

    </div>