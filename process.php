<?php
    include "classes.php";
    
    if(isset($_POST["submitBtn"])){
        $option = $_POST["submitBtn"];

        switch ($option) {
            case 1:
                if (isset($_POST['firstVAL']) . isset($_POST['secondVAL'])) {
                    $res = new classes;
                    $result = ($res -> maxRange($_POST['firstVAL'], $_POST['secondVAL']));
                    echo '<h1>' . 'The answer is ' . $result. '.' .'</h1>';
                }
                break;
            case 2:
                if (isset($_POST['binVAL'])) {
                    $res = new classes;
                    $result = ($res-> binaryCount($_POST['binVAL']));
                    echo '<h1>' . 'The answer is ' . $result. '.' .'</h1>';
                }
                break;
            case 3:
                if (isset($_POST['pathONE']) . isset($_POST['pathTWO'])) {
                    $res = new classes;
                    $result = ($res-> twoParts($_POST['pathONE'],$_POST['pathTWO']));
                    echo '<h1>' . "The answer is " . $result.'.' .'</h1>';
                }
                break;
            case 4:
                if (isset($_POST['sastryNUM'])) {
                    $res = new classes;
                    $result = ($res->sastry($_POST['sastryNUM']));
                    echo $result;
                }
                break;
            default:
            echo "<h1> Please Reload </h1>";
        }
    }
        