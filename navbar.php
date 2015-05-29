<?php
function active($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI']);
 
    if ($current_file_name == $requestUri)
        echo 'class="active"';
}
?>
    <!-- navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                <img alt="Brand" width="48"  style="margin-top:-13px; margin-left:0px;" src="<?php echo $actual_link;?>/assets/img/home/icon.png"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li <?=active( "")?>><a href="<?php echo $actual_link;?>/"><i class="fa fa-home fa-fw"></i>&nbsp;Home</a>
                    </li>
                    <li <?=active( "web")?>><a href="<?php echo $actual_link;?>/plans/web"><i class="fa fa-globe fa-fw"></i>&nbsp;Web</a>
                    </li>
                    <li <?=active( "virtual")?>><a href="<?php echo $actual_link;?>/plans/virtual"><i class="fa fa-server fa-fw"></i>&nbsp;VPS</a>
                    </li>
                    <li <?=active( "dedicated")?>><a href="<?php echo $actual_link;?>/plans/dedicated"><i class="fa fa-dashboard fa-fw"></i>&nbsp;Dedicated</a>
                    </li>
                    <li <?=active( "minecraft")?>><a href="<?php echo $actual_link;?>/plans/minecraft"><i class="fa fa-cube fa-fw"></i>&nbsp;Minecraft</a>
                    </li>
                    <li <?=active( "voice")?>><a href="<?php echo $actual_link;?>/plans/voice"><i class="fa fa-microphone fa-fw"></i>&nbsp;Voice</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li <?=active( "faq")?>><a href="<?php echo $actual_link;?>/about/faq"><i class="fa fa-question-circle fa-fw"></i>&nbsp;FAQ</a>
                    </li>
                    <li <?=active( "partners")?>><a href="<?php echo $actual_link;?>/about/partners"><i class="fa fa-star fa-fw"></i>&nbsp;Partners</a>
                    </li>
                    <li <?=active( "staff")?>><a href="<?php echo $actual_link;?>/about/staff"><i class="fa fa-heart fa-fw"></i>&nbsp;Staff</a>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gamepad fa-fw"></i>&nbsp; Client Services<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="https://billing.snowstormservers.com"><i class="fa fa-user fa-fw"></i>&nbsp;Billing Area</a>
                            </li>
                            <li><a href="http://mccp.snow-network.com/"><i class="fa fa-cubes fa-fw"></i>&nbsp;Premium Panel</a>
                            </li>
                            <li><a href="http://mccp.budget.snow-network.com/"><i class="fa fa-cubes fa-fw"></i>&nbsp;Budget Panel</a>
                            </li>
                            <li><a href="https://peanuts.silk-websolutions.eu:2083/"><i class="fa fa-globe fa-fw"></i>&nbsp;Web Hosting Panel</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar ending -->
