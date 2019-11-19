<div class="row">
    <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1 " >
    </div>
    <div class="col-lg-8 col-md-10 col-sm-10 col-xs-10 no-padding" style="padding-top: 50px;">
        <div class="row">
           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 " >
            <div  class=" topic-detail">
                <?PHP
                if($lng == "TH"){
                    echo 'ประเภทของงาน :';
                }else{
                    echo 'Type of work :';
                } 
                ?>
            </div>
            <div class=" detail-allproject">
                <?PHP
                if($lng == "TH"){
                    echo $project_detail['type_name_th'];
                }else{
                    echo $project_detail['type_name_en'];
                } 
                ?>
            </div>
            <div  class=" topic-detail">
             <?PHP
             if($lng == "TH"){
                echo 'โครงการ :';
            }else{
                echo 'Project :';
            } 
            ?>
        </div>
        <div class=" detail-allproject">
            <?PHP
            if($lng == "TH"){
                echo $project_detail['project_detail_name_th'];
            }else{
                echo $project_detail['project_detail_name_en'];
            } 
            ?>
        </div>
        <div  class=" topic-detail">
            <?PHP
            if($lng == "TH"){
                echo 'ที่ตั้ง :';
            }else{
                echo 'Location :';
            } 
            ?>
        </div>
        <div class=" detail-allproject">
            <?PHP
            if($lng == "TH"){
                echo $project_detail['project_detail_location_th'];
            }else{
                echo $project_detail['project_detail_location_en'];
            } 
            ?>
        </div>
        <div  class=" topic-detail">
            <?PHP
            if($lng == "TH"){
                echo 'ขอบเขตงาน :';
            }else{
                echo 'Scope of work :';
            } 
            ?>
        </div>
        <div  class=" detail-allproject">
           <?PHP
           if($lng == "TH"){
            echo $project_detail['project_detail_scope_th'];
        }else{
            echo $project_detail['project_detail_scope_en'];
        } 
        ?>
    </div>
    <div  class=" topic-detail">
        <?PHP
        if($lng == "TH"){
            echo 'ปีที่เสร็จสิ้น :';
        }else{
            echo 'Year completed :';
        } 
        ?>
    </div>
    <div  class=" detail-allproject">
        <? echo $project_detail['project_detail_year'];?>
    </div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 "   >
    <img class="img-project-topicdetail" src="img_upload/project/<? echo $project_detail['project_detail_img'];?>" alt="Los Angles">
</div>
</div>
</div>

<div class="col-lg-2 col-md-1 col-sm-1 col-xs-1"  >
</div>
</div>





<div class="row" style="margin-bottom: 50px;">
    <div class="col-lg-2 col-md-1 col-sm-1" >
    </div>

    <div class="col-lg-8 col-md-10 col-sm-10 col-xs-10 no-padding"  >
        <div class="row" style="padding-top: 35px;  ">   

            <link rel="stylesheet" href="template/assets/owlcarousel/assets/owl.carousel.min.css">
            <link rel="stylesheet" href="template/assets/owlcarousel/assets/owl.theme.default.min.css">
            <!-- <script src="template/assets/vendors/jquery.min.js"></script> -->
            <script src="template/assets/owlcarousel/owl.carousel.js"></script>

            <div  id="service-slide" class="owl-carousel owl-theme ">
                <?PHP for($i=0 ; $i < count($project_img) ; $i++){ ?>

                    <div class="item no-active" >
                        <img class="img-project-detailslide" src="img_upload/project_img/<? echo $project_img[$i]['img'];?>" alt="Los Angles">
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
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsive: {
                          0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                })
                  })
              </script>
          </div>
      </div>

      <div class="col-lg-2 col-md-1 col-sm-1 col-xs-1 "  >
        <div class="">

        </div>
    </div>
</div>
