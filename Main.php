<!DOCTYPE html>
<html>
<body>

<?php
    
    $name = (string)readline("Hello! Can I get your name? ");
    $mood = (int)readline("So $name on a scale of 1 to 10 how are you feeling today? ");
    
    if($mood > 10 or $mood < 1) {
        $mood = (int)readline("I'm sorry $name that input is invalid could you try again? ");
    }

    $seasons = array("Spring", "Summer", "Autumn", "Winter");
    echo "Alright.... so now that's out the way.... what is your favorite season? ";
    
    for($x = 0; $x < count($seasons); $x++) {
        
        if($x < count($seasons) - 1) {
            echo "$seasons[$x], ";
        } 
        else {
            echo "or $seasons[$x]? ";
        }
    }
    $fav_season = (string)readline("");

    if(in_array($fav_season, $seasons) == True) {
        echo "$fav_season is in the array!";
    }




?>

</body>
</html> 