<!DOCTYPE html>
<html lang="en">

<head>

    <?php 
        require("result.php");
            
    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Number Generator</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body >
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid justify-content-center">
                <h3 style="color: white;">Random Number Generator</h3>
            </div>
        </nav>
    </header>

    <div class="container mt-3">
        <form   method="post">
            <div class="mb-3">

                <label class="form-label" for="numberOfDice"><strong>How many dices to roll?</strong></label>
                <select class="form-select" id="numberOfDice" name="numberOfDice">
                    <option selected>Select dice</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="sidesOfDice"><strong>Sides of dice?</strong></label>
                <select class="form-select" id="sidesOfDice" name="sidesOfDice">
                    <option selected>Select Sides</option>
                    <option value="4">D4</option>
                    <option value="6">D6</option>
                    <option value="8">D8</option>
                    <option value="10">D10</option>
                    <option value="12">D12</option>
                    <option value="20">D20</option>
                </select>
            </div>

            <input class="btn btn-outline-dark mb-3" type="submit" value="Roll">        
        </form>
    </div>

    <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST["numberOfDice"] !== 'none') {
            result();
        }
    ?>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
