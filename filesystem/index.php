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
    <div>
        <?php
            $galleries = glob('images/*');
            var_dump($galleries);
            foreach($galleries as $g){
        ?>
        <div>
            <a href="<?php echo $g; ?>" target="_blank"><?php echo $g; ?></a>
            <form action="delete.php" method="post">
                <input type="hidden" name="g" value="<?php echo $g;?>">
                <input type="submit" value="刪除" onclick="return confirm('確認刪除?')">

            </form>
            <!-- <img src="<?php #echo $g; ?>" width="200"> -->
        </div>
        <?php } ?>
    </div>
</body>
</html>