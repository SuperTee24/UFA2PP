<div class="row">
    <div class="col-lg-2" >
    </div>
    <div class="col-lg-8" style="padding-top: 50px;">
        <div class="row">
            <div class="topiccertification" >    
                <? 
                if($lng == "TH"){
                    echo $certification['certification_title_th'];
                }else{
                    echo $certification['certification_title_en'];
                } 
                ?>
            </div>    
            <div class="detail" style="overflow: auto;">    
               <? 
               if($lng == "TH"){
                echo $certification['certification_detail_th'];
            }else{
                echo $certification['certification_detail_en'];
            } 
            ?>
        </div>        
    </div>
</div>
</div>

