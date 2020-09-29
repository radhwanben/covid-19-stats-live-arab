<?php require 'config/Model.php';
      require 'assets/head.php'; 
?>
<style>
    body{overflow: hidden;}
</style>
      <div class="container">
            <table class="table table-borderless" id="nonarabic">

                    <tr>
                        <?php foreach($countries as $country): ?>
                            <?php if(!in_array($country->country,$arabicnamecountry)): ?>

                        <td>
                        <img  src='<?php echo $country->countryInfo->flag; ?>' />
                            <?php
                                echo "<strong>" . $translation = $translator->translate($country->country, 'en-ar'). "</strong><br>";
                                echo "<p> الحالات " .$country->cases. " الوفيات ". $country->deaths ; echo "المتعافون: ".$country->recovered ."</p>";
                                ?>
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php endforeach; ?>
            </table>


    </div>


<script>
setInterval(function() {
    $(document).ready(function() {
    // scroll down
    $("html, body").animate({
        scrollTop: $(document).height()
    }, 75000);                  

    //scroll back up
    $("html, body").animate({
        scrollTop: 0
    }, 75000);                  
});}, 3000); // every 1000 ms
</script>