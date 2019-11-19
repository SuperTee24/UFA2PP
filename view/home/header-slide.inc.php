 <section class="col-lg-12 slide no-padding ">
   <?PHP for($i=0 ; $i < count($home_slide) ; $i++){ ?>
    <div class="slide-item">
        <div class="slide-detail-home">
            <div class="slide-header-home">        
                <?PHP
                if($lng == "TH"){
                    echo $home_slide[$i]['slide_title_th'];
                }else{
                    echo $home_slide[$i]['slide_title_en'];
                } 
                ?>
            </div>
            <div class="slide-text-detail cut-text-multi-header-slide " >
                <?PHP
                if($lng == "TH"){
                    echo $home_slide[$i]['slide_detail_th'];
                }else{
                    echo $home_slide[$i]['slide_detail_en'];
                } 
                ?>
            </div>
            <div class = "botton-slide" >
                <a class="btn btn-lg" href="<?echo $home_slide[$i]['slide_link'];?>">

                    <?PHP
                    if($lng == "TH"){
                        echo 'เพิ่มเติม';
                    }else{
                        echo 'KNOW MORE';
                    } 
                    ?>
                </a>
            </div>
        </div>
        <img src="img_upload/home_slide/<?echo $home_slide[$i]['slide_img'];?>" alt="Los Angles">
    </div>
    <?}?>
</section>
<script type="text/javascript">
    $(document).on('ready',function(){
        $(".slide").slick({
            arrows: false,
        });
    });
</script>