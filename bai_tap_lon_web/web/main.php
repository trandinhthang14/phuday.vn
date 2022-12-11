<?php

require_once('../Model/DBconnect.php');

$data = "SELECT * FROM blogs";


$result = mysqli_query($conn, $data);

?>
    <main class="main">
      <div class="main__warp">
        <div class="main-stage">
         
        <?php foreach ($result as $key => $f) : ?>
          <div class="main-item">
            <div class="main-content">
              <div class="main-content-item">
                <div class="main-header">
                  <a class="text" href="?view=blog-detail&id=<?php echo $f["id"] ?>">
                    <h2 class="main-content--h1"><?php echo $f["title"] ?></h2>
                    <br />
                    <img src="<?php echo $f["image"] ?>" alt="<?php echo $f["title"] ?>" class="block" />
                  </a>
                </div>

                <div class="main-body">
                  <ul class="main-menu">
                    <a class="text" href="?view=blog-detail&id=<?php echo $f["id"] ?>">
                    <?php echo $f["description"] ?>
                    </a>
                  </ul>

                  <a
                    href="?view=blog-detail&id=<?php echo $f["id"] ?>"
                    class="btn-more"
                  >
                    + Xem Thêm
                  </a>
                </div>
              </div>
            </div>

           
        </div>
        <?php endforeach; ?>

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
                    <p style="text-align: center">
                      <em
                        ><span style="font-size: 120%; color: #ffffff"
                          >“Là một người con sinh ra và lớn lên trên mảnh đất
                          Nam Định , một vùng quê giàu truyền thống yêu nước ,
                          một trong những cái nôi sinh ra tín ngưỡng thờ Mẫu là
                          Phủ Dầy , được nuôi dưỡng trong một vùng quê giàu
                          truyền thống trong tôi cũng một phần nào đó ngẫm được
                          tư tưởng uống nước nhớ nguồn ,tôi mong muốn mang những
                          giá trị văn hoá di tích Phủ Dầy đến với đông đảo người
                          dân Việt Nam mà còn là giá trị văn hoá của toàn nhân
                          loại”</span
                        ></em
                      >
                    </p>
                  </div>
                </div>
                <style>
                  #row-163900567 > .col > .col-inner {
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
    </main>