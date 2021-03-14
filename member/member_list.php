<?php
    try {
        session_start();
        require_once("pdo.php");
        $sql = "SELECT * FROM users";
        $stmt = $pdo->prepare($sql);;
        $stmt->execute();

    }catch(PDOException $e){
        echo $e->getMessage();
    }
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
    <table>
    <?php while($row = $stmt->fetch()){ ?>
    <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["user"]; ?></td>
        <td><?php echo $row["created_at"]; ?></td>
        <td>
            <?php 
                switch($row["role"]){
                    case 0:
                        echo "管理員";
                        break;
                    case 1:
                        echo "一般會員";
                        break;
                }
            ?>
        </td>
        <td>
            <a href="switch_role.php?role=<?php echo $row["role"];?>&id=<?php echo $row["id"];?>" >切換權限</a>
        </td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>