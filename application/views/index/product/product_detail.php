<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Đây là trang chi tiết của sản phẩm</title>
    </head>
    <body bgcolor="#FFFFCC">
        <font face="Verdana, Tahoma, Arial" color="blue">
            <h1 align="center"><?php echo $title ?></h1>
        </font>
        <div class="row">
            <font face="Arial" color ="green"    >
                <h2> <?php echo 'Tên sản phẩm:' . $product['name']; ?> </h2>
                <div> <?php echo 'Giá sản phẩm là:' . $product['price']; ?> </div>
                <p> <?php echo 'Danh mục là:' . $product['catalog']; ?> </p>
                <p> <?php echo 'Mô tả sản phẩm: ' . $product['desc']; ?></p>
            </font>
        </div>  
    </body>
</html>


