<link rel="stylesheet" href="template/assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="template/assets/owlcarousel/assets/owl.theme.default.min.css">
<!-- <script src="template/assets/vendors/jquery.min.js"></script> -->
<script src="template/assets/owlcarousel/owl.carousel.js"></script>

<div  id="service-slide" class="owl-carousel owl-theme no-active" style = "    border-bottom: 0px;">
  <?PHP for($i=0 ; $i < count($service) ; $i++){ ?>

    <div class="item" >
      <div class="service-detail" style="text-align:center; max-width: 100%; min-height: 100%; top:0%; background-color: rgba(14, 41, 86, 0.83)">
        <div class="service-header" >
          <? 
          if($lng == "TH"){
            echo $service[$i]['service_body_name_th'];
          }else{
            echo $service[$i]['service_body_name_en'];
          } 
          ?>
        </div>
        <div class="slide-service-detail-home cut-text-multi-slide-service-detail-home" >
          <? 
          if($lng == "TH"){
            echo $service[$i]['service_body_description_th'];
          }else{
            echo $service[$i]['service_body_description_en'];
          } 
          ?>
        </div>
        <div style="padding-left: 24px; padding-top: 30px;">
          <a class="button readmore" href="service.php?action=service_detail&id=<?echo $service[$i]['service_body_id'];?>">
            <? 
            if($lng == "TH"){
              echo 'เพิ่มเติม';
            }else{
              echo 'KNOW MORE';
            } 
            ?>
          </a>
        </div>
      </div>
      <img style="min-height: 400px;" src="img_upload/service_back/<?echo $service[$i]['service_body_header_img']?>" alt="Los Angles">
    </div>
    <?}?>
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
      var owl = $('#service-slide');
      owl.owlCarousel({
        margin: 0,
        nav: false,
        dots: false,
        loop: true,
        responsive: {
          0: {
            items: 1
          },
          500: {
            items: 2
          },
          1000: {
            items: 3
          }
        }
      })
    })
  </script>