<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // echo md5('12asdg@)asdlkj;lopqfd1345');
        // echo time(); 
        // echo md5(time());    
        // echo sha1(time()); 
        // echo uniqid();
        // echo md5(uniqid());
    ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="gallery">
        <input type="submit" value="上傳">
    </form>
</body>
</html>