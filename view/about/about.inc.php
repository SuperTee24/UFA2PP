
<link rel="stylesheet" href="template/assets/owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="template/assets/owlcarousel/assets/owl.theme.default.min.css">
<!-- <script src="template/assets/vendors/jquery.min.js"></script> -->
<script src="template/assets/owlcarousel/owl.carousel.js"></script>

<div class="row">
    <div class="col-lg-6 no-padding" >
        <div class="about-welcomeseem1">
            <? 
            if($lng == "TH"){
                echo $about_detail[0]['detail_title_th'];
            }else{
                echo $about_detail[0]['detail_title_en'];
            } 
            ?>
        </div>  
        <div class="about-welcomeseem2">
            <? 
            if($lng == "TH"){
                echo $about_detail[0]['detail_th'];
            }else{
                echo $about_detail[0]['detail_en'];
            } 
            ?>
        </div>
    </div>
    <div class="col-lg-6 no-padding" >
        <div id="about-slide" class="owl-carousel owl-theme no-active" style = "border-bottom: 0px;">
         <?PHP for($i=0 ; $i < count($about_img1) ; $i++){ ?>
            <div class="item" >
                <img class="img-about" src="img_upload/about_img/<?echo $about_img1[$i]['about_img'];?>" alt="Los Angles">
            </div>
            <?}?>
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
          var owl = $('#about-slide');
          owl.owlCarousel({
            margin: 0,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            loop: true,
            responsive: {
              0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
      })
  </script>
</div>

<div class="row">
    <div class="col-lg-6 order-2 order-lg-1  no-padding"  >
        <div id="about1-slide" class="owl-carousel owl-theme no-active" style = "border-bottom: 0px;">
            <?PHP for($i=0 ; $i < count($about_img2) ; $i++){ ?>
                <div class="item" >
                    <img class="img-about" src="img_upload/about_img/<?echo $about_img2[$i]['about_img'];?>" alt="Los Angles">
                </div>
                <?}?>
            </div>
        </div>


        <div class="col-lg-6 order-1 order-lg-2  no-padding" >
            <div  class="about-welcomeseem1">
                <? 
                if($lng == "TH"){
                    echo $about_detail[1]['detail_title_th'];
                }else{
                    echo $about_detail[1]['detail_title_en'];
                } 
                ?>
            </div>  
            <div  class="about-welcomeseem2">
                <? 
                if($lng == "TH"){
                    echo $about_detail[1]['detail_th'];
                }else{
                    echo $about_detail[1]['detail_en'];
                } 
                ?>
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
              var owl = $('#about1-slide');
              owl.owlCarousel({
                margin: 0,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
          })
      </script>
  </div>



  <section class="header-panel ">
    <div class="slide-item-about">
        <div class="slide-detail-about">
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8 all-project">
                    <div class="row" style="padding-left:10px; margin-bottom: 30px;">
                        <?PHP for($j=0 ; $j < count($about_award) ; $j++){ ?>
                            <div class="col-3 ">
                                <div class= "text-center about-projectyears">
                                    <span class= "text-center active">
                                        <? 
                                        echo $about_award[$j]['project_number']; 
                                        ?>
                                    </span>
                                </div>

                                <div class= "text-center about-project1">
                                    <? 
                                    if($lng == "TH"){
                                        echo $about_award[$j]['project_title_th']; 
                                    }else{
                                        echo $about_award[$j]['project_title_en']; 
                                    } 
                                    ?>
                                </div>
                            </div>
                            <?}?>

                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                </div>
            </div>
            <img style="height: 200px; width: 100%;" src="img_upload/about_project/<?echo $about_header['project_img'];?>" alt="Los Angles">
        </div>





        <div class="row" style="background-color: #eff2f4; padding-bottom: 40px;">
            <div class="col-lg-2" >
            </div>
            <div class="col-lg-8" style="padding-top: 50px; background-color: #eff2f4;">
                <div class="text-center why">
                    <? 
                    if($lng == "TH"){
                        echo 'ทำไมถึงเลือกพวกเรา'; 
                    }else{
                        echo 'WHY CHOOSE US'; 
                    } 
                    ?>
                </div>
                <div class="row">
                    <?PHP for($k=0 ; $k < count($about_why) ; $k++){ ?>
                        <div class="col-lg-4" >
                            <div class="row" >                                       
                                <img style="width:60px;height:60px; border-radius: 50%!important; overflow: hidden; margin:auto;"   src="img_upload/about_why/<?echo $about_why[$k]['why_icon']; ?>" class="img-fluid" alt="" align="left" style="">
                            </div>
                            <div class="text-center team">
                                <? 
                                if($lng == "TH"){
                                    echo $about_why[$k]['why_title_th']; 
                                }else{
                                    echo $about_why[$k]['why_title_en']; 
                                } 
                                ?> 
                            </div>
                            <div class="text-center text-about-why-detail">
                                <? 
                                if($lng == "TH"){
                                    echo $about_why[$k]['why_detail_th']; 
                                }else{
                                    echo $about_why[$k]['why_detail_en']; 
                                } 
                                ?> 
                            </div>     
                        </div>
                        <?}?>
                    </div>
                </div>
                <div class="col-lg-2">
                </div>
            </div>