<?php

require_once('../Model/DBconnect.php');
$id = $_GET['id'];

$sql = "SELECT * FROM blogs where id='$id'";
$query = mysqli_query($conn, $sql);
$blog = mysqli_fetch_array($query);
?>

<main>
        <div class="main-noidung" href="">
            <h1 class="main-content--text">

                <a style="margin-left:350px">
                <?php echo $blog["title"] ?>
                </a>

            </h1>
            <div class="thumb-blog">
                <img src="<?php echo $blog["image"] ?>" alt="<?php echo $blog["title"] ?>">
            </div>
            <div class="medium">
            <?php echo strip_tags($blog["detail"]) ?>
                
            </div>
    </main>
    <div class="comment">
        <button> Bình luận</button>
    </div>
    <div class="bottom">
        <div class="bottom-home">
            <section class="section vi-sao1" id="section_559935216">
                <div class="bg section-bg fill bg-fill bg-loaded">
                    <div class="section-bg-overlay absolute fill"></div>
                </div>
                <div class="section-content relative">
                    <div class="row" id="row-163900567">
                        <div id="col-30449085" class="col small-12 large-12">
                            <div class="col-inner text-center">
                                <p style="text-align: center;"><em><span style="font-size: 120%; color: #ffffff;">“Là
                                            một người con sinh ra
                                            và
                                            lớn lên trên mảnh đất Nam Định , một vùng quê giàu truyền thống yêu
                                            nước
                                            , một trong những cái nôi sinh ra tín ngưỡng thờ Mẫu là Phủ Dầy ,
                                            được
                                            nuôi dưỡng trong một vùng quê giàu truyền thống trong tôi cũng một
                                            phần
                                            nào đó ngẫm được tư tưởng uống nước nhớ nguồn ,tôi mong muốn mang
                                            những
                                            giá trị văn hoá di tích Phủ Dầy đến với đông đảo người dân Việt Nam
                                            mà
                                            còn là giá trị văn hoá của toàn nhân loại”</span></em></p>
                                <a href="#" target="_self" class="button primary lowercase" style="border-radius:99px;">
                                    <i class="icon-heart"></i> <span>Liên hệ tư vấn miễn phí!</span>
                                </a>
                            </div>
                        </div>
                        <style>
                        #row-163900567>.col>.col-inner {
                            padding: 0px 0px 0 0px;
                        }
                        </style>
                    </div>
                </div>
                <style>
                #section_559935216 {
                    padding-top: 20px;
                    padding-bottom: 20px;
                    background-color: crimson;
                    background-image: url(https://phuday.com/wp-content/uploads/2021/05/bg34-1.jpg);
                }
                </style>
            </section>

        </div>
    </div>
    </div>