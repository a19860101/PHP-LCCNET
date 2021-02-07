<?php
    require_once("conn.php");
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>產品管理系統</h1>
            <a href="create.php" class="btn btn-primary">新增商品</a>
        </div>
        <div class="col-12">
            <table class="table">
            <tr>
                <td>#</td>
                <td>產品名稱</td>
                <td>價格</td>
                <td>折扣後價格</td>
                <td>上架</td>
                <td>數量</td>
                <td>折扣</td>
                <td>動作</td>
            </tr>
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["title"];?></td>
                <td><span class="badge bg-secondary"><?php echo $row["price"];?></span></td>
                <td>
                    <?php
                        if($row["discount"] < 1){
                            echo "<span class='badge bg-danger'>".$row["price"] * $row["discount"]."</span>";
                        }else{
                            echo "<span class='badge bg-secondary'>".$row["price"] * $row["discount"]."</span>";
                        }
                    ?>
                </td>
                <td>
                    <?php echo $row["sale"] == 1 ? "是":"否"; ?>
                </td>
                <td><?php echo $row["quantity"];?></td>
                <td>
                <?php
                    switch($row["discount"]){
                        case 1:
                            echo "無折扣";
                            break;
                        case 0.9:
                            echo "九折";
                            break;
                        case 0.8:
                            echo "八折";
                            break;
                        case 0.7:
                            echo "七折";
                            break;
                    }
                
                ?>
                </td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row["id"];?>">
                        <input type="submit" value="刪除商品" onclick="return confirm('確認刪除？')" class="btn btn-danger">
                    </form>

                    <a href="edit.php?id=<?php echo $row["id"];?>" class="btn btn-success">編輯商品</a>
                </td>
            </tr>
            <?php } ?>
        </table>
        </div>
    </div>
</div>
    

    
</body>
</html>