<div class="row">
    <div class="col-lg-2 " >

    </div>

    <div class="col-lg-8 "  >
        <div class="row" style="padding-top: 70px; margin-bottom: 60px;">   
            <div class="col-lg-4">
                <div class="news-lester" >
                    <div class="LATEST-NEWS">
                        <?PHP
                        if($lng == "TH"){
                            echo 'ข่าวล่าสุดและการอัพเดท';
                        }else{
                            echo 'LATEST NEWS & UPDATES';
                        } 
                        ?>
                    </div>         
                    <div class="news-deatil  cut-text-multi-news-deatil">
                        Lorem ipsum dolor sit amet, consectetur adipiscing 
                        elit. Pellent esque dignissim eros a sapien tempus, 
                        ut eleifend neque convallis.
                    </div> 
                    <div class="READ-MORE-LATEST-NEWS"> 
                        <a class="btn" style="background-color: #fff; color: black; border-radius: unset; border: solid 1px #000000;" href="news.php">
                            <?PHP
                            if($lng == "TH"){
                                echo 'อ่านต่อ';
                            }else{
                                echo 'READ MORE';
                            } 
                            ?> </a>
                        </div>         
                    </div>
                </div>
                <?PHP for($i=0 ; $i < count($news) ; $i++){ ?>

                    <div class="col-lg-4 img-news1">
                        <img src="img_upload/news/<?echo $news[$i]['news_img']?>"  class="img-news"> 
                        <div class="topic-news-home cut-text-multi-topic-news-home">
                            <? 
                            if($lng == "TH"){
                                echo $news[$i]['news_name_th'];
                            }else{
                                echo $news[$i]['news_name_en'];
                            } 
                            ?>
                        </div>
                        <div class="detail-news-home">
                            <?
                            $date=date_create($news[$i]['news_date']);
                            echo date_format($date,"M d, Y");?>
                        </div>
                        <div style=" padding-top:20px;  "> 
                            <a class="btn" style="background-color: transparent;"
                            href="news.php?action=news_detail&id=<?echo $news[$i]['news_id'];?>">
                            <? 
                            if($lng == "TH"){
                                echo 'อ่านต่อ';
                            }else{
                                echo 'READ MORE';
                            } 
                            ?>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>         
                </div>
                <?}?>


            </div>
        </div>


        <div class="col-lg-2 "  >
            <div class="">

            </div>
        </div>
    </div>