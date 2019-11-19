<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="logo">
            <div align="center"> 
                <img src="../img_upload/logo/logoadmin.png" class="img-responsive" width="200px" > 
            </div>
        </li>
        <li>
            <div style=" text-indent: 0px;" align="center">
                <span class="brand-line-one" style="padding-bottom: 0px">SEEm</span><br>
                <span class="brand-line-second" style="padding-top: 0px">Engineering Consultant</span>
                <!-- <span class="brand-line-second">SMT GROUP</span><br> -->
            </div>
        </li>
        <li><a href="index.php?content=home">
            <div <?php if($content=="" || $content=="home"){echo "class='menu-active top'";} else {echo "class='menu top'";}?> >
                <i class="fa fa-home" style="font-size:24px"></i>
                <span style="padding:5px; font-size:15px;">Home</span>
            </div>
        </a></li>
        <li><a href="index.php?content=about">
            <div <?php if($content=="about"){echo "class='menu-active'";} else {echo "class='menu'";}?> >
                <i class="fa fa-commenting" style="font-size:24px"></i>
                <span style="padding:5px; font-size:15px;">About us</span>
            </div>
        </a></li>
        <li><a href="index.php?content=service">
            <div <?php if($content=="service"){echo "class='menu-active'";} else {echo "class='menu'";}?> >
                <i class="fa fa-info-circle" style="font-size:24px"></i>
                <span style="padding:5px; font-size:15px;">Services</span>
            </div>
        </a></li>
        <li><a href="index.php?content=project">
            <div <?php if($content=="project"){echo "class='menu-active'";} else {echo "class='menu'";}?> >
                <i class="fa fa-connectdevelop" style="font-size:24px"></i>
                <span style="padding:5px; font-size:15px;">Project</span>
            </div>
        </a></li>
        <li><a href="index.php?content=certification">
            <div <?php if( $content=="certification"){echo "class='menu-active'";} else {echo "class='menu'";}?> >
                <i class="fa fa-certificate" style="font-size:24px"></i>
                <span style="padding:5px; font-size:15px;">Certificate</span>
            </div>
        </a></li>
        <li><a href="index.php?content=news">
            <div <?php if($content=="news"){echo "class='menu-active'";} else {echo "class='menu'";}?> >
                <i class="fa fa-bell" style="font-size:24px"></i>
                <span style="padding:5px; font-size:15px;">News&Event</span>
            </div>
        </a></li>
        <li><a href="index.php?content=contact">
            <div <?php if($content=="contact"){echo "class='menu-active'";} else {echo "class='menu'";}?> >
                <i class="fa fa-wrench" style="font-size:24px"></i>
                <span style="padding:5px; font-size:15px; ">Contact us</span>
            </div>
        </a></li>
        <li><a href="index.php?content=setting">
            <div <?php if($content=="setting"){echo "class='menu-active'";} else {echo "class='menu'";}?> >
                <i class="fa fa-cog" style="font-size:24px"></i>
                <span style="padding:5px; font-size:15px; ">Setting</span>
            </div>
        </a></li>
        <li><a href="index.php?content=user">
            <div <?php if($content=="user"){echo "class='menu-active'";} else {echo "class='menu'";}?> >
                <i class="fa fa-user" style="font-size:24px"></i>
                <span style="padding:5px; font-size:15px; ">ผู้ดูเเลระบบ</span>
            </div>
        </a></li>
    </ul>
</div>