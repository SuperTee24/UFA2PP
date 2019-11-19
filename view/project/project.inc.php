<div class="row">
    <div class="col-lg-2" >
    </div>
    <div class="col-lg-8" style="padding-top: 50px; margin-bottom: 2vw;">
        <div class="row ">
            <div class="text-center detail-project" >    <?PHP
            if($lng == "TH"){
                echo $project_header['project_header_detail_th'];
            }else{
                echo $project_header['project_header_detail_en'];
            } 
            ?>
        </div>      
    </div>
</div>
</div>



<div class="row">
    <div class="col-lg-12 text-center"  >
        <div class="button-group filters-button-group" style="color:#fff; font-size: 16px; ">              
            <button class="btn btn-show  is-checked" data-filter="*"><?PHP
            if($lng == "TH"){
                echo 'ทั้งหมด';
            }else{
                echo 'SHOW ALL';
            } 
            ?></button>
            <?PHP for($i=0 ; $i < count($project_type) ; $i++){ ?>
                <button class="btn btn-show margin-btn-project" data-filter=".<?echo $project_type[$i]['type_id'];?>">
                    <?PHP
                    if($lng == "TH"){
                        echo $project_type[$i]['type_name_th'];
                    }else{
                        echo $project_type[$i]['type_name_en'];
                    } 
                    ?></button>      
                    <?}?>   
                </div>
            </div>
        </div>

        <div class="container" style="margin-top: 2vw;">
            <div class="row grid">
                <?PHP for($i=0 ; $i < count($project_show) ; $i++){ ?>
                    <div class="element-item col-lg-4 col-md-6 col-sm-6 <?echo $project_show[$i]['type_id'];?>">
                        <a href="?action=project_detail&id=<?echo $project_show[$i]['project_detail_id'];?>"> <img src="img_upload/project/<?echo $project_show[$i]['project_detail_img'];?>" class="img-fluid"></a>
                    </div>
                    <?}?>
                </div>
            </div>
            <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
            <script>
// external js: isotope.pkgd.js

// init Isotope

var $grid = $('.grid').imagesLoaded( function() { 
    $grid.isotope({
        itemSelector: '.element-item',
        layoutMode: 'fitRows',
        percentPosition: true,
        masonry: {
            horizontalOrder: true
        }
    });
});
// filter functions
var filterFns = {
  // show if number is greater than 50
  numberGreaterThan50: function() {
    var number = $(this).find('.number').text();
    return parseInt( number, 10 ) > 50;
},
  // show if name ends with -ium
  ium: function() {
    var name = $(this).find('.name').text();
    return name.match( /ium$/ );
}
};
// bind filter button click
$('.filters-button-group').on( 'click', 'button', function() {
  var filterValue = $( this ).attr('data-filter');
  // use filterFn if matches value
  filterValue = filterFns[ filterValue ] || filterValue;
  $grid.isotope({ filter: filterValue });
});
// change is-checked class on buttons
$('.button-group').each( function( i, buttonGroup ) {
  var $buttonGroup = $( buttonGroup );
  $buttonGroup.on( 'click', 'button', function() {
    $buttonGroup.find('.is-checked').removeClass('is-checked');
    $( this ).addClass('is-checked');
});
});

</script>
<div class="col-lg-2">
</div>
</div>