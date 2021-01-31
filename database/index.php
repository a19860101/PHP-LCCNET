<?php
    require_once("conn.php");
    $sql = "SELECT * FROM students";
    $result = mysqli_query($conn,$sql); 
    // var_dump($result);
    // $row = mysqli_fetch_assoc($result);
    // $row = mysqli_fetch_array($result);
    // $row = mysqli_fetch_row($result);
    // var_dump($row);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th {
            border: 1px solid #333;
        }
        td,th {
            padding: 15px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>#</th>
            <th>姓名</th>
            <th>電話</th>
            <th>Mail</th>
            <th>性別</th>
            <th>學歷</th>
            <th>興趣</th>
            <th>備註</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>{$row["id"]}</td>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["phone"]."</td>";
                echo "<td>".$row["mail"]."</td>";
                echo "<td>".$row["gender"]."</td>";
                echo "<td>".$row["edu"]."</td>";
                echo "<td>".$row["interest"]."</td>";
                echo "<td>".$row["content"]."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>

