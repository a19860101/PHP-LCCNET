<?php
    require_once("conn.php");
    extract($_GET);
    $sql = "SELECT * FROM products WHERE id = {$id}";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
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
    <form action="update.php" method="post">
        <div>
            <label for="">產品名稱</label>
            <input type="text" name="title" value="<?php echo $row["title"];?>">
        </div>
        <div>
            <label for="">價格</label>
            <input type="number" name="price" value="<?php echo $row["price"];?>">
        </div>
        <div>
            <label for="">上架</label>
            <input type="radio" value="1" name="sale" <?php echo $row["sale"]==1?"checked":""; ?>>是
            <input type="radio" value="0" name="sale" <?php echo $row["sale"]==0?"checked":""; ?>>否
        </div>
        <div>
            <label for="">庫存</label>
            <input type="number" name="quantity" value="<?php echo $row["quantity"];?>">
        </div>
        <div>
            <label for="">折扣</label>
            <select name="discount" id="">
                <option value="1" <?php echo $row["discount"]==1?"selected":""; ?>>無折扣</option>
                <option value="0.9" <?php echo $row["discount"]==0.9?"selected":""; ?>>9折</option>
                <option value="0.8" <?php echo $row["discount"]==0.8?"selected":""; ?>>8折</option>
                <option value="0.7" <?php echo $row["discount"]==0.7?"selected":""; ?>>7折</option>
            </select>
        </div>
        <div>
            <label for="">產品敘述</label>
            <textarea name="description" id="" cols="30" rows="10"><?php echo $row["description"];?></textarea>
        </div>
        <div>
            <input type="submit" value="新增商品">
        </div>
    </form>
</body>
</html>