<link rel="stylesheet" href="template/frontend/css/about-style.css">

<div class="about-section">
    <div class="row">
        <div class="col-lg-6" style="padding-top: 5vw;" >
            <div class="our-about-panel">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                    <div class="slide-header-about-home">
                                        <?PHP
                                            if($lng == "TH"){
                                                echo $about_detail['detail_title_th'];
                                            }else{
                                                echo $about_detail['detail_title_en'];
                                            }
                                        ?>
                                    </div>
                                    <div class="slide-text-detail2 cut-text-multi-about-home" >
                                    <?PHP
                                            if($lng == "TH"){
                                                echo $about_detail['detail_th'];
                                            }else{
                                                echo $about_detail['detail_en'];
                                            }
                                        ?>
                                    </div>

                                    <div class="KNOW-MORE-about">
                                    <a class="btn btn-lg" href="about.php">
                                    <?PHP
                                    if($lng == "TH"){
                                        echo 'เพิ่มเติม';
                                    }else{
                                        echo 'KNOW MORE';
                                    } 
                                    ?> </a>
                                    </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        
            
        <div class="col-lg-6 ml-auto" style="padding: 5%;" >
        <?PHP for($i=0 ; $i < count($about_img) ; $i++){ ?>
            <img src="img_upload/about_img/<?echo $about_img[$i]['about_img'];?>" class="img-about-home">
            <?}?>
        </div>
                
    </div>    
</div>
        <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6  no-padding" style="background-color:#e6e8ea;" >
                    <div class="">
                                     <div class="about-home" >
                                        <div>              
                                        <span class="weare-about-home"> <?PHP
                                    if($lng == "TH"){
                                        echo 'พวกเรา';
                                    }else{
                                        echo 'WE ARE';
                                    } 
                                    ?> </span>
                                        </div>
                                            <div class="SEEm">
                                            SEEm
                                            </div>         
                                        <div class="Engineers-Consultent">
                                        <?PHP
                                    if($lng == "TH"){
                                        echo 'วิศวกรที่ปรึกษา';
                                    }else{
                                        echo 'Engineers Consultent';
                                    } 
                                    ?>
                                        </div>  <a class="btn btn-sm btn-black" href="about.php">
                                    <?PHP
                                    if($lng == "TH"){
                                        echo 'เพิ่มเติม';
                                    }else{
                                        echo 'KNOW MORE';
                                    } 
                                    ?> </a>         
                                    </div>
                    </div>
                </div>

                

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding-top: 50px; background-color: #eff2f4;">
                    <div class="row">
                        <div class="" style="background-color:#eff2f4; ">
                            <div class="text-about">
                                Established since 1995 distributes a variety  range of metal cutting tools
                                and measuring tools. All products are imported products from USA, UK,
                                China ,Taiwan, and Korea which well known world wide.The company is                
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-left:10px; margin-bottom: 30px;">
                    <?PHP for($j=0 ; $j < count($about_why) ; $j++){ ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12" style="padding-top: 3vw;">
                            <div>
                            <img class="img-about-why" src="img_upload/about_why/<?echo $about_why[$j]['why_icon'];?>">
                            </div>
                                <div class="text-topic-why">
                                <? 
                                if($lng == "TH"){
                                    echo $about_why[$j]['why_title_th'];
                                }else{
                                    echo $about_why[$j]['why_title_en'];
                                } 
                                ?>
                                </div>
                                    <div class="text-detail-why cut-text-multi-text-detail-why">
                                    <? 
                                if($lng == "TH"){
                                    echo $about_why[$j]['why_detail_th'];
                                }else{
                                    echo $about_why[$j]['why_detail_en'];
                                } 
                                ?>
                                    </div>
                        </div>
                                <?}?>
                    </div>
                </div>
                    <div class="col-lg-2 no-padding" style="background-color: #e6e8ea; ">   
                     </div>
        </div>       
        </div>     
</div>