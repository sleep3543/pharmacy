<?php require_once("Connections/conn_db.php"); ?>
<?php (!isset($_SESSION)) ? session_start() : ""; ?>
<?php require_once('php_lib.php'); ?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <!-- head -->
    <?php require_once('headfile.php'); ?>
    <link rel="stylesheet" href="css/jquery.lightbox-0.5.css" type="text/css">
</head>

<body>
    <section id="header">
        <!-- 導覽列 -->
        <?php require_once('navbar.php'); ?>
    </section>
    <section id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <!-- 商品分類 -->
                    <?php require_once('sidebar.php'); ?>
                    <!-- 熱銷商品 -->
                    <?php require_once('hot.php'); ?>
                </div>
                <div class="col-md-10">
                    <!-- 麵包屑 -->
                    <?php require_once('breadcrumb.php'); ?>
                    <!-- 產品詳細資料 -->
                    <?php //require_once('product_list.php'); 
                    ?>
                    <?php require_once('goods_content.php') ?>
                    <?php require_once('drop-box.php') ?>
                </div>
            </div>
        </div>
    </section>
    <section id="scontent">
        <!-- 服務說明 -->
        <?php require_once('scontent.php'); ?>
    </section>
    <section id="footer">
        <!-- 頁尾-聯絡資訊 -->
        <?php require_once('footer.php'); ?>
    </section>
    <!-- javascript file -->
    <?php require_once('jsfile.php'); ?>
    <script type="text/javascript" src="./js/jquery.lightbox-0.5.js"></script>
    <script type="text/javascript">
       
    </script>

</body>

</html>