<?php
    require_once("conn.php");
    extract($_GET);
    // $id = $_GET["id"];
    $sql = "SELECT * FROM students WHERE id = {$id}";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="store.php" method="post">
        <div>
            <label for="name">姓名</label>
            <input type="text" name="name" value="<?php echo $row["name"];?>">
        </div>
        <div>
            <label for="mail">Mail</label>
            <input type="text" name="mail" value="<?php echo $row["mail"];?>">
        </div>
        <div>
            <label for="phone">電話</label>
            <input type="text" name="phone" value="<?php echo $row["phone"];?>">
        </div>
        <div>
            <label for="gender">性別</label>
            <input type="radio" name="gender" value="男" <?php if($row["gender"]=="男"){echo "checked";}?>> 男
            <input type="radio" name="gender" value="女" <?php if($row["gender"]=="女"){echo "checked";}?>> 女
        </div>
        <div>
            <label for="edu">學歷</label>
            <select name="edu" id="">
                <option value="國小" <?php echo $row["edu"]=="國小" ? "selected":"";?>>國小</option>
                <option value="國中" <?php echo $row["edu"]=="國中" ? "selected":"";?>>國中</option>
                <option value="高中職" <?php echo $row["edu"]=="高中職" ? "selected":"";?>>高中職</option>
                <option value="大專院校" <?php echo $row["edu"]=="大專院校" ? "selected":"";?>>大專院校</option>
                <option value="研究所以上" <?php echo $row["edu"]=="研究所以上" ? "selected":"";?>>研究所以上</option>
            </select>
        </div>
        <div>
            <label for="interest">興趣</label>
            <input type="checkbox" name="interest[]" value="吃">吃
            <input type="checkbox" name="interest[]" value="喝">喝
            <input type="checkbox" name="interest[]" value="玩">玩
            <input type="checkbox" name="interest[]" value="樂">樂
        </div>
        <div>
            <label for="content">備註</label>
            <textarea name="content" id="" cols="30" rows="10"><?php echo $row["content"];?></textarea>
        </div>
        <input type="submit" value="送出">
    </form>
</body>
</html>