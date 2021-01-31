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
            <label for="user">姓名</label>
            <input type="text" name="user">
        </div>
        <div>
            <label for="mail">Mail</label>
            <input type="text" name="mail">
        </div>
        <div>
            <label for="phone">電話</label>
            <input type="text" name="phone">
        </div>
        <div>
            <label for="gender">性別</label>
            <input type="radio" name="gender" value="男"> 男
            <input type="radio" name="gender" value="女"> 女
        </div>
        <div>
            <label for="edu">學歷</label>
            <select name="edu" id="">
                <option value="國小">國小</option>
                <option value="國中">國中</option>
                <option value="高中職">高中職</option>
                <option value="大專院校">大專院校</option>
                <option value="研究所以上">研究所以上</option>
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
            <textarea name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="送出">
    </form>
</body>
</html>