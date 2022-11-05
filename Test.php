<!DOCTYPE html>
<html>
    <body>  
    <?php
    $valid_value = False;

    echo "Before the game start we want to note that inputs are case-sensitive during your playthough!";
    $name = (string)readline("Hello! Can I get your name? ");
    $mood = (int)readline("So $name on a scale of 1 to 10 how are you feeling today? ");

    while($valid_value == False) {
        if($mood > 10 or $mood < 1) {
            $mood = (int)readline("I'm sorry $name that input is invalid could you try again? ");
        }
        else {
            $valid_value = True;
        }
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

    $valid_value = False;
    while($valid_value == False) {
        if(in_array($fav_season, $seasons) == True) {
            echo "$fav_season is in the array!";
            $valid_value = True;
        } 
        else {
            echo "The value you provided was not valid. Could you please try again? ";
            $fav_season = (string)readline("");
        }
    }




?>
    </body>
</html> 