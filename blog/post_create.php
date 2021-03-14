<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post_store.php" method="post">
        <div>
            <label for="">文章標題</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="">Mail</label>
            <input type="text" name="mail">
        </div>
        <div>
            <label for="">內容</label>
            <textarea name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="送出">
    </form>
</body>
</html>