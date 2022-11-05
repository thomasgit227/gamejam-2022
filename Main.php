<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <body>
        <!-- Display Round Number -->
        <?php
            $roundCount = $_SESSION['roundCount'];
            echo $roundCount;
        ?>

        <!-- Handle Button Hit -->
        <?php
            if(isset($_POST['roundRequest'])) {
                $_SESSION['roundCount'] ++;
                revealComp();
            }
            else {
                $_SESSION['roundCount'] = 0;
            }

            function revealComp() {
                echo '
                    <br/>
                    <input type = "radio" id = "option1" value = "1" />
                    <label for = "option1">Choice 1</label>
                
                    <input type = "radio" id = "option2" value = "2" />
                    <label for = "option2">Choice 2</label>
                ';
            }
        ?>

        <!-- Button Creation -->
        <form method = 'post'>
            <input type = "submit" class = "button" name = "roundRequest" value = "Next Round"/>
        </form>
    </body>
</html> 