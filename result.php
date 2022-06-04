<?php
    function result(){
        $numberOfDice = $_POST["numberOfDice"];
        $sides = $_POST["sidesOfDice"];

        echo "<div class='container'>
                <table class='table table-dark table-hover table-striped'>
                    <thead>
                        <tr>
                            <th scope='col'>Dice</th>
                            <th scope='col'>Value</th>
                        </tr>
                    </thead>";
        for ($i=1; $i<=$numberOfDice; $i++) {
        echo "<tr>
            <th scope='row'>" . $i . "</th>
            <td>" . rand(1,$sides) ."</td>
            </tr>"; 
        }
        echo "</div>"; 
    }
?>