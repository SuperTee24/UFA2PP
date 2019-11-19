<style>
/* .slide-detail-home{
    position: absolute ;
    top: 30%;
    background-color: #ffffffa6;
    padding: 24px;
    max-width: 60%;
    } */
    .owl-item.active{
      border: none!important;
    }
  </style>
  <link rel="stylesheet" href="template/assets/owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="template/assets/owlcarousel/assets/owl.theme.default.min.css">
  <!-- <script src="template/assets/vendors/jquery.min.js"></script> -->
  <script src="template/assets/owlcarousel/owl.carousel.js"></script>

  <div style="background-image:url(img_upload/home_customer_detail/<?echo $home_customer_detail['customer_img_back'];;?>); background-repeat:no-repeat; background-size:cover">
    <div class="row">
      <div class="col-lg-12" >
        <div class="text-center text-lg" >
         <?PHP
         if($lng == "TH"){
          echo $home_customer_detail['customer_title_th'];
        }else{
          echo $home_customer_detail['customer_title_en'];
        } 
        ?>
      </div>  
      <div class="customer-home text-center " >
        <?PHP
        if($lng == "TH"){
          echo $home_customer_detail['customer_detail_th'];
        }else{
          echo $home_customer_detail['customer_detail_en'];
        } 
        ?>
      </div>
    </div>
  </div>

  <!-- /////////////////////////////////////////////////////////////////////////// -->
  <div class="row" style="padding-bottom: 100px;"  >

    <!-- <img src="img_upload/service/1.jpg" alt="Los Angles"> -->
    <div class="col-lg-2" >
    </div>
    <div class="col-lg-8" >
      <div id="customer-slide" class="owl-carousel owl-theme no-active" style = "border-bottom: 0px;">
        <?PHP for($i=0 ; $i < count($home_customer) ; $i++){ ?>
          <div class="item" >

            <img style="min-height: 100px;" src="img_upload/home_customer_img/<? echo $home_customer[$i]['customer_img_icon'];?>" alt="Los Angles">
          </div>
          <?}?>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).on('ready',function(){
      $(".slide").slick({
        arrows: false,
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      var owl = $('#customer-slide');
      owl.owlCarousel({
        margin: 0,
        nav: false,
        dots: false,
        loop: true,
        responsive: {
          0: {
            items: 2
          },
          600: {
            items: 3
          },
          1000: {
            items: 4
          }
        }
      })
    })
  </script>