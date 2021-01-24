<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="res.php" method="post">
        <div>
            <input type="text" name="user">
        </div>
        <div>
            <input type="text" name="mail">
        </div>
        <div>
            <input type="text" name="phone">
        </div>
        <div>
            <input type="radio" name="gender" value="男"> 男
            <input type="radio" name="gender" value="女"> 女
        </div>
        <div>
            <select name="edu" id="">
                <option value="國小">國小</option>
                <option value="國中">國中</option>
                <option value="高中職">高中職</option>
                <option value="大專院校">大專院校</option>
                <option value="研究所以上">研究所以上</option>
            </select>
        </div>
        <div>
            <textarea name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="送出">
    </form>
</body>
</html>