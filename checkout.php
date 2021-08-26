<?php require_once("Connections/conn_db.php"); ?>
<?php (!isset($_SESSION)) ? session_start() : ""; ?>
<?php require_once('php_lib.php'); ?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <!-- head -->
    <?php require_once('headfile.php'); ?>
    <?php
    if (!isset($_SESSION['login'])) {
        $sPath = "login.php?sPath=checkout";
        header(sprintf("Location: %s", $sPath));
    }
    ?>
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
                    <!-- 結帳主頁 -->
                    <?php //require_once('chkout_content.php') 
                    ?>
                    <h3>電傷藥粧：會員結帳作業</h3>
                    <div class="row">
                        <div class="card" style="width:30rem;">
                            <h4 class="card-header" style="color:#007bff;"><i class="fas fa-truck fa-flip-horizontal"></i>配送資訊</h4>
                            <div class="card-body pl-3 pt-2 pb-2">
                                <h4 class="card-title">收件人資訊：</h4>
                                <h5 class="card-title">林小強</h5>
                                <p class="card-text">0912345678</p>
                                <p class="card-text">台中市西屯區工業區一路100號</p>
                                <a href="#" class="btn btn-outline-primary">選擇其他地址</a>
                                <a href="#" class="btn btn-outline-info">新增地址</a>
                            </div>
                        </div>
                        <div class="card ml-3" style="width:35rem;">
                            <h4 class="card-header" style="color:#000;"><i class="far fa-credit-card mr-1"></i>付款方式</h4>
                            <div class="card-body pl-3 pt-2 pb-2">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color: #007bff !important; font-size:14pt;">貨到付款</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="color: #007bff !important; font-size:14pt;">信用卡</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" style="color: #007bff !important; font-size:14pt;">銀行轉帳</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#epay" role="tab" aria-controls="epay" aria-selected="false" style="color: #007bff !important; font-size:14pt;">電子支付</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <h4 class="card-title pt-3">付款人資訊：</h4>
                                        <h5 class="card-title pt-3">姓名:李曉明</h5>
                                        <p class="card-title pt-3">電話:091235466</p>
                                        <p class="card-title pt-3">地址:407台中市西屯區中正區1號</p>
                                    </div>
                                    <div class="tab-pane fade pl-2" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <h4 class="card-title pt-3">選擇付款帳戶:</h4>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" width="5%">#</th>
                                                    <th scope="col" width="25%">信用卡系統</th>
                                                    <th scope="col" width="35%">發卡銀行</th>
                                                    <th scope="col" width="35%" >信用卡號</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"><input type="radio" name="creditCard" id="creditCard[]" checked /></th>
                                                    <td><img src="images/Visa_Inc._logo.svg" alt="visa" class="img-fluid"></td>
                                                    <td>玉山商業銀行</td>
                                                    <td>1234 ****</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><input type="radio" name="creditCard" id="creditCard[]"  /></th>
                                                    <td><img src="images/MasterCard_Logo.svg" alt="master" class="img-fluid"></td>
                                                    <td>玉山商業銀行</td>
                                                    <td>1234 ****</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><input type="radio" name="creditCard" id="creditCard[]"  /></th>
                                                    <td><img src="images/UnionPay_logo.svg" alt="UnionPay" class="img-fluid"></td>
                                                    <td>玉山商業銀行</td>
                                                    <td>1234 ****</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <hr>
                                        <button type="button" class="btn btn-outline-success">使用新信用卡付款</button>
                                    </div>
                                    <div class="tab-pane fade " id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <h4 class="card-title pt-3">ATM匯款資訊： </h4>
                                        <img src="images/Cathay-bk-rgb-db.svg" alt="cathy" class="img-fluid">
                                        <h5 class="card-title ">匯款銀行：國泰世華銀行 銀行 代碼：013 </h5>
                                        <h5 class="card-title ">姓名：林小強  </h5>
                                        <p class="card-text ">匯款帳號：1234-4567-7890-1234 </p>
                                        <p class="card-text ">備註：匯款完成後，需要1、2個 工作天，待系統入款完成後，將以簡訊通 知訂單完成付款。</p>
                                    </div>
                                    <div class="tab-pane fade" id="epay" role="tabpanel" aria-labelledby="epay-tab">
                                        <h4 class="card-title pt-3">選擇電子支付方式:</h4>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col" width="5%">#</th>
                                                    <th scope="col" width="25%">電子支付系統</th>
                                                    <th scope="col" width="70%">電子支付公司</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"><input type="radio" name="epay" id="epay[]" checked /></th>
                                                    <td><img src="images/Apple_Pay_logo.svg" alt="applepay" class="img-fluid"></td>
                                                    <td>Apple pay</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><input type="radio" name="epay" id="epay[]"  /></th>
                                                    <td><img src="images/Line_pay_logo.svg" alt="linepay" class="img-fluid"></td>
                                                    <td>Line pay</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><input type="radio" name="epay" id="epay[]"  /></th>
                                                    <td><img src="images/JKOPAY_logo.svg" alt="jkopay" class="img-fluid"></td>
                                                    <td>JKOPAY</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <hr>
                                        <button type="button" class="btn btn-outline-success">使用新信用卡付款</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
<div class="container">
    <div class="class">
        <div class="cnaolt">x</div>
    </div>
</div>
                    <div class="table-responsive-md" style="width: 80%;">
                        <table class="table table-hover mt-3">
                            <thead>
                                <tr class="bg-primary" style="color:white;">
                                    <td width="10%">產品編號</td>
                                    <td width="10%">圖片</td>
                                    <td width="30%">名稱</td>
                                    <td width="15%">價格</td>
                                    <td width="10%">數量</td>
                                    <td width="15%">小計</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="product_img/zoom2555551.webp" alt="1000g" class="img-fluid"></td>
                                    <td>biore 1000g</td>
                                    <td>
                                        <h4 class="color_e600a0 pt-1">$125</h4>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h4 class="color_e600a0 pt-1">$125</h4>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="product_img/zoom2555551.webp" alt="1000g" class="img-fluid"></td>
                                    <td>biore 1000g</td>
                                    <td>
                                        <h4 class="color_e600a0 pt-1">$125</h4>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h4 class="color_e600a0 pt-1">$125</h4>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><img src="product_img/zoom2555551.webp" alt="1000g" class="img-fluid"></td>
                                    <td>biore 1000g</td>
                                    <td>
                                        <h4 class="color_e600a0 pt-1">$125</h4>
                                    </td>
                                    <td>1</td>
                                    <td>
                                        <h4 class="color_e600a0 pt-1">$125</h4>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="7">累計:123456</td>
                                </tr>
                                <tr>
                                    <td colspan="7">運費:100</td>
                                </tr>
                                <tr>
                                    <td colspan="7" class="color_red">累計:123456</td>
                                </tr>
                                <tr>
                                    <td colspan="7"><button type="button" id="btn04" name="btn04" class="btn btn-danger"><i class="fas fa-cart-arrow-down pr-2"></i>確認結帳</button></td>
                                </tr>
                            </tfoot>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>ㄈ
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

</body>

</html>