<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="store.php" method="post">
        <div>
            <label for="">產品名稱</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">價格</label>
            <input type="number" name="price">
        </div>
        <div>
            <label for="">上架</label>
            <input type="radio" value="1" name="sale">是
            <input type="radio" value="0" name="sale">否
        </div>
        <div>
            <label for="">庫存</label>
            <input type="number" name="quantity">
        </div>
        <div>
            <label for="">折扣</label>
            <select name="discount" id="">
                <option value="1">無折扣</option>
                <option value="0.9">9折</option>
                <option value="0.8">8折</option>
                <option value="0.7">7折</option>
            </select>
        </div>
        <div>
            <label for="">產品敘述</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" value="新增商品">
        </div>
    </form>
</body>
</html>