<?php
include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
<!-- <h1 class="top-heading">TODO List Application</h1> -->
        
        <form action="handleActions.php" method="post">
            <h1 class="top-heading">TODO List Application</h1>
            <div class="input-container">
                <input type="text" name="inputBox" id="inputBox">
                <button type="submit" name="add" id="add">ADD</button>
            </div>
            <uL class="list">
                <?php
                $itemList=get_items();
                while($row=$itemList->fetch_assoc())
                {

                
                ?>
                <li class="item">
                    <p><?php echo $row["item"];?></p>
                    <div class="icon-container">
                        <button type="submit" name="checked" id="check" value="<?php echo $row["id"];?>"><i class="fas fa-check-circle"></i></button>
                    <button type="submit" name="deleted" id="delete" value="<?php echo $row["id"];?>"><i class="fas fa-trash-alt"></i></button>
                    </div>
                    <!-- <button type="submit" name="" id="check"><i class="fas fa-check-circle"></i></button>
                    <button type="submit" name="" id="delete"><i class="fas fa-trash-alt"></i></button> -->
                </li>
<?php }?>
                <!-- <li class="item">
                    <p>Item 1</p>
                    <div class="icon-container">
                        <button type="submit" name="" id="check"><i class="fas fa-check-circle"></i></button>
                    <button type="submit" name="deleted" id="delete"><i class="fas fa-trash-alt"></i></button>
                    </div>
                </li> -->
            </uL>
            <hr>
            <uL class="list">
                <?php
                $itemList=get_items_checked();
                while($row=$itemList->fetch_assoc())
                {

                
                ?>
                <li class="item fade">
                    <p class="deleted-text"> <span><?php echo $row["item"];?></span></p>
                    <div class="icon-container">
<button type="submit" name="" id="check" value="<?php echo $row["id"];?>"><i class="fas fa-check-circle hidden"></i></button>
                    <button type="submit" name="deleted" id="delete" value="<?php echo $row["id"];?>"><i class="fas fa-trash-alt"></i></button>
                    </div>
                    
                </li>
                <?php }?>
            </uL>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/65adb9ad5e.js" crossorigin="anonymous"></script>
</body>
</html>