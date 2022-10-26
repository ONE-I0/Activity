<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendo Machine</title>
</head>
<body>
    <form action="" method="post">
        <h2><b>Vendo Machine</b></h2>

        <fieldset>
        <legend>Products:</legend>

            <input type="checkbox" id="coke" name="Vendo[]" value="15">
            <label for="coke">Coke - ₱ 15</label>
            <br>

            <input type="checkbox" id="sprite" name="Vendo[]" value="20">
            <label for="sprite">Sprite - ₱ 20</label>
            <br>

            <input type="checkbox" id="royal" name="Vendo[]" value="20">
            <label for="royal">Royal - ₱ 20</label>
            <br>

            <input type="checkbox" id="pepsi" name="Vendo[]" value="15">
            <label for="pepsi">Pepsi - ₱ 15</label>
            <br>

            <input type="checkbox" id="mountaindew" name="Vendo[]" value="20">
            <label for="mountaindew">Mountain Dew - ₱ 20</label>
            <br>
        </fieldset>
        
        <fieldset>
            <legend>Options</legend>
            <label for="drpSizes">Size</label>
            <select name="drpSizes">
                <option value="Regular">Regular</option>
                <option value="Upsize">Up-Sized (add ₱ 5)</option>
                <option value="Jumbo">Jumbo (add ₱ 10)</option>
            </select>

            <label for="Quantity">Quantity</label>
            <input type="number" id="quantity" name="quantity" min="1" max="30">

            <button type="submit" name="btnProcess">Check Out</button>
        </fieldset>
    </form>
    
    <?php 
        if(isset($_POST['btnProcess']) && isset($_POST['Vendo'])){
            $arrFood = $_POST['Vendo'];
            print_r($arrFood);
        }
    ?>
</body>
</html>