<?php 
    require '../BackEnd/includes/additems.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="E_Shop.php" method="post">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
            </div>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>

        <div class="input-group mb-3">
            <input type="text" class="form-control" name = "itemName" placeholder="Item's Name" aria-label="Recipient's username" aria-describedby="button-addon2">

            <input type="text" class="form-control" name = "itemPrice"placeholder="Item's Price" aria-label="Recipient's username" aria-describedby="button-addon2">

        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" name = "btn" id="button-addon2">Add Item</button>
        </div>
    </form>
</div>
</div>
</body>
</html>