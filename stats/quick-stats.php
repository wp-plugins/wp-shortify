<?php
function shortify_click_stats( $details ) {

    $alltime            =    $details['analytics']['allTime']['shortUrlClicks'];
    $monthly            =    $details['analytics']['month']['shortUrlClicks'];
    $weekly             =    $details['analytics']['week']['shortUrlClicks'];
    $daily              =    $details['analytics']['day']['shortUrlClicks'];
    $hourly             =    $details['analytics']['twoHours']['shortUrlClicks'];

    $alltime_countries  =    $details['analytics']['allTime']['countries'];
    $alltime_referrers  =    $details['analytics']['allTime']['referrers'];
    $alltime_browsers   =    $details['analytics']['allTime']['browsers'];
    $alltime_platforms  =    $details['analytics']['allTime']['platforms'];

    $monthly_countries  =    $details['analytics']['month']['countries'];
    $monthly_referrers  =    $details['analytics']['month']['referrers'];
    $monthly_browsers   =    $details['analytics']['month']['browsers'];
    $monthly_platforms  =    $details['analytics']['month']['platforms'];

    $weekly_countries   =    $details['analytics']['week']['countries'];
    $weekly_referrers   =    $details['analytics']['week']['referrers'];
    $weekly_browsers    =    $details['analytics']['week']['browsers'];
    $weekly_platforms   =    $details['analytics']['week']['platforms'];

    $daily_countries    =    $details['analytics']['day']['countries'];
    $daily_referrers    =    $details['analytics']['day']['referrers'];
    $daily_browsers     =    $details['analytics']['day']['browsers'];
    $daily_platforms    =    $details['analytics']['day']['platforms'];

    $twoHours_countries  =    $details['analytics']['twoHours']['countries'];
    $twoHours_referrers  =    $details['analytics']['twoHours']['referrers'];
    $twoHours_browsers   =    $details['analytics']['twoHours']['browsers'];
    $twoHours_platforms  =    $details['analytics']['twoHours']['platforms'];
?>
    <div class="panel-group" id="accordion">
      <div class="panel panel-info panel-clear">
        <div class="panel-heading">
          <h4 class="panel-title">
           <?php _e('Over All click stats','wp-shortify'); ?> 
       </h4>
       <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>

   </div>
   <div class="panel-body"> 
      <div class="col-md-3 col-sm-6">     
        <div class="widget widget-stats bg-green">
            
            <div class="stats-title">All Time clicks</div>
            <div class="stats-number"> <?php echo $alltime; ?></div>
            <div class="stats-progress progress">

                <div class="progress-bar" style="width:0%;"></div>

            </div>
            <div class="stats-desc">All Time clicks</div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats bg-blue">
            
            <div class="stats-title">Monthly clicks</div>
            <div class="stats-number"> <?php echo $monthly; ?></div>
            <div class="stats-progress progress">
                <?php  
                if( $alltime > 0){
                    $month_percent = round(($monthly/$alltime)*100);
                }
                else{
                    $month_percent = 0;
                }
                ?>
                <div class="progress-bar" style="width:<?php echo $month_percent?>%;"></div>
            </div>
            <div class="stats-desc">Monthly clicks</div>
        </div>
    </div>

    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats bg-purple">
            <div class="stats-title"><?php _e('Weekly clicks','wp-shortify')?></div>
            <div class="stats-number"> <?php echo $weekly; ?></div>
            <div class="stats-progress progress">
                <?php  
                if( $alltime > 0){
                    $week_percent = round(($weekly/$alltime)*100);
                }
                else{
                    $week_percent = 0;
                }
                ?>
                <div class="progress-bar" style="width:<?php echo $week_percent?>%;"></div>

            </div>
            <div class="stats-desc"><?php _e('Weekly clicks','wp-shortify')?></div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats bg-black">
            
            <div class="stats-title"><?php _e('Daily clicks','wp-shortify')?></div>
            <div class="stats-number"> <?php echo $daily; ?></div>
            <div class="stats-progress progress">

                <?php  
                if( $alltime > 0){
                    $daily_percent = round(($daily/$alltime)*100);
                }
                else{
                    $daily_percent = 0;
                }
                ?>
                <div class="progress-bar" style="width:<?php echo $daily_percent?>%;"></div>


            </div>
            <div class="stats-desc"><?php _e('Daily clicks','wp-shortify')?></div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="widget widget-stats bg-darkblue">
            
            <div class="stats-title"><?php _e('Last Two Hours clicks','wp-shortify')?></div>
            <div class="stats-number"> <?php echo $hourly; ?></div>
            <div class="stats-progress progress">
                <?php  
                if( $alltime > 0){
                    $twohours_percent = round(($hourly/$alltime)*100);
                }
                else{
                    $twohours_percent = 0;
                }
                ?>
                <div class="progress-bar" style="width:<?php echo $twohours_percent?>%;"></div>

            </div>
            <div class="stats-desc"><?php _e('Last Two Hours clicks','wp-shortify')?></div>
        </div>
    </div>
</div>
</div>
</div>
    <ul class="nav shortify-tabs nav-justified nav-tabs" role="tablist">
        <li class="active">
          <a href="#all" class='nav-stats' role="tab" data-toggle="tab">
            <i class="fa fa-bar-chart"></i>
            <?php 

            _e('All time','wp-shortify');
            ?>
        </a>
    </li>
    <li>
      <a href="#month" class='nav-stats' role="tab" data-toggle="tab">
          <i class="fa fa-bar-chart"></i>
          <?php _e('Monthly','wp-shortify') ?>
      </a>
  </li>
  <li>
      <a href="#week" class='nav-stats' role="tab" data-toggle="tab">
        <i class="fa fa-bar-chart"></i> 
        <?php _e('Weekly','wp-shortify') ?>
    </a>
</li>
<li>
    <a href="#daily" class='nav-stats' role="tab" data-toggle="tab">
        <i class="fa fa-bar-chart"></i> 
        <?php _e('Daily','wp-shortify') ?>
    </a>
</li>
<li>
    <a href="#twohours" class='nav-stats' role="tab" data-toggle="tab">
        <i class="fa fa-bar-chart"></i> 
        <?php _e('Two Hours','wp-shortify') ?>
    </a>
</li>
</ul>

<div class="tab-content shortify-tab-pane">
    <div class="tab-pane active" id="all">
     <div class="panel-group" id="accordion">
<div class="panel panel-info panel-clear">
    <div class="panel-heading">
      <h4 class="panel-title">
       <?php _e('Country Wise Clicks','wp-shortify'); ?> 
   </h4>
   <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>

</div>
<div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
    <?php if(!empty($alltime_countries)){ ?>
        <script type='text/javascript'>

            google.load('visualization', '1', {'packages': ['geochart'],'callback': drawRegionsMap});
            function drawRegionsMap() {
                var data = google.visualization.arrayToDataTable([
                  ['Country', 'Clicks'],
                  <?php for ($i=0; $i < count($alltime_countries) ; $i++) { ?>
                      ['<?php echo $alltime_countries[$i]["id"];?>', <?php echo $alltime_countries[$i]['count']; ?>],
                      <?php } ?>
                      ]);
                var options = { colorAxis: {colors: ['#2d353c', '#00acac']}  };
                var chart = new google.visualization.GeoChart(document.getElementById('country'));
                chart.draw(data, options);
            };
        </script> 
        
    <div id="country" style="width:100%; height:308px;margin: 0 auto;"></div>
    <?php }else{ ?>
            <p><?php _e('No country stats found','wp-shortify') ?></p>
    <?php } ?>
</div>
</div>
</div>
<div class="panel panel-info panel-clear">
    <div class="panel-heading">
        <h4 class="panel-title">
           <?php _e('Referrer Stats','wp-shortify'); ?> 
       </h4>
       <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
   </div>
   <div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
    <?php if(!empty($alltime_referrers)){ ?>
        <script type="text/javascript">
            google.load("visualization", "1", {packages:["corechart"],'callback': drawChart});
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Referrer Sites', 'Clicks'],
                    <?php for ($i=0; $i < count($alltime_referrers) ; $i++) {
                        if($alltime_referrers[$i]["id"]=='unknown' || $alltime_referrers[$i]["count"]==0 ){
                            continue;
                        }
                        ?>
                        ['<?php echo $alltime_referrers[$i]["id"];?> (<?php echo $alltime_referrers[$i]["count"]; ?>)', <?php echo $alltime_referrers[$i]['count']; ?>],
                        <?php } ?>
                        ]);

                var options = {
                  is3D: true,
                  legend:true,

                  pieHole: 0.4,
                  pieSliceText: 'label',
                  slices: {  4: {offset: 0.2},
                  12: {offset: 0.3},
                  14: {offset: 0.4},
                  15: {offset: 0.5},
              },
          };

          var chart = new google.visualization.PieChart(document.getElementById('reffer-div'));
          chart.draw(data, options);
      }
  </script>

  <div id="reffer-div" style="width: 100%; height: 550px;"></div>
    <?php }else{ ?>
            <p><?php _e('No Referrer stats found','wp-shortify') ?></p>
    <?php } ?>
</div>
</div>
</div>
<div class="panel panel-info panel-clear">
    <div class="panel-heading">
      <h4 class="panel-title">
       <?php _e('Browser Stats','wp-shortify'); ?> 
   </h4>
   <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>

</div>
<div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
    <?php if(!empty($alltime_countries)){ ?>

        <script type="text/javascript">
            google.load('visualization', '1', {packages: ['corechart'],'callback': drawChart});
            google.setOnLoadCallback(drawChart);

            function drawChart() {

              var data = google.visualization.arrayToDataTable([

                ['Browser', 'Clicks'],
                <?php for ($i=0; $i < count($alltime_browsers) ; $i++) { ?>
                    ['<?php echo $alltime_browsers[$i]["id"];?>', <?php echo $alltime_browsers[$i]['count']; ?>],
                    <?php } ?>
                    ]);

              var options = {
                title: 'Browsers ',
                bar: {groupWidth: "20%"},
            };

            var chart = new google.visualization.BarChart(
                document.getElementById('browser'));

            chart.draw(data, options);
        }

    </script>

    <div id="browser" style="width: 100%; height: 550px;"></div>
    <?php }else{ ?>
            <p><?php _e('No Browser stats found','wp-shortify') ?></p>
    <?php } ?>
</div>
</div>
</div>
<div class="panel panel-info panel-clear">
    <div class="panel-heading">
      <h4 class="panel-title">
       <?php _e('platform Stats','wp-shortify'); ?> 
   </h4>
   <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>

</div>
<div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
       <?php if(!empty($alltime_countries)){ ?>
        <script type="text/javascript">
            google.load('visualization', '1', {packages: ['corechart'],'callback': drawChart});
            google.setOnLoadCallback(drawChart);

            function drawChart() {

              var data = google.visualization.arrayToDataTable([

                ['Platforms', 'Clicks'],
                <?php for ($i=0; $i < count($alltime_platforms) ; $i++) { ?>
                    ['<?php echo $alltime_platforms[$i]["id"];?>', <?php echo $alltime_platforms[$i]['count']; ?>],
                    <?php } ?>
                    ]);

              var options = {
                title: 'Platforms ',
                bar: {groupWidth: "20%"},
            };

            var chart = new google.visualization.BarChart(
                document.getElementById('platform'));

            chart.draw(data, options);
        }

    </script>
        <div id="platform" style="width: 100%; height: 550px;"></div>
        <?php }else{ ?>
            <p><?php _e('No Platform stats found','wp-shortify') ?></p>
        <?php } ?>
    </div>
</div>
</div>
</div>
</div>
    <div class="tab-pane" id="month">
     <div class="panel-group" id="accordion">

        <div class="panel panel-info panel-clear">
            <div class="panel-heading">
              <h4 class="panel-title">
               <?php _e('Country Wise monthly clicks','wp-shortify'); ?> 
           </h4>
           <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>

        </div>
    <div class="panel-body"> 
        <div class="col-md-12 col-sm-12">
            <?php if(!empty($monthly_countries)){ ?>

                <script type='text/javascript'>
                    google.load('visualization', '1', {'packages': ['geochart'],'callback': drawRegionsMap});
                    function drawRegionsMap() {
                        var data = google.visualization.arrayToDataTable([
                          ['Country', 'Visitors'],
                          <?php for ($i=0; $i < count($monthly_countries) ; $i++) { ?>
                              ['<?php echo $monthly_countries[$i]["id"];?>', <?php echo $monthly_countries[$i]['count']; ?>],
                              <?php } ?>
                              ]);
                        var options = { colorAxis: {colors: ['#2d353c', '#00acac']}  };
                        var chart = new google.visualization.GeoChart(document.getElementById('country-month'));
                        chart.draw(data, options);
                    };
                </script>
                

            <div id="country-month" style="width:100%; height:308px;margin: 0 auto;"></div>
            <?php }else{ ?>
                    <p><?php _e('No country stats found','wp-shortify') ?></p>
            <?php } ?>
        </div>
    </div>
</div>
<div class="panel panel-info panel-clear">
    <div class="panel-heading">
        <h4 class="panel-title">
           <?php _e('Referr monthly Stats','wp-shortify'); ?> 
       </h4>
       <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
   </div>
   <div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
    <?php if(!empty($monthly_referrers)){ ?>
        <script type="text/javascript">
            google.load("visualization", "1", {packages:["corechart"],'callback': drawChart});
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Referrer Sites', 'Clicks'],
                    <?php for ($i=0; $i < count($monthly_referrers) ; $i++) {
                        if($monthly_referrers[$i]["id"]=='unknown' || $monthly_referrers[$i]["count"]==0 ){
                            continue;
                        }
                        ?>
                        ['<?php echo $monthly_referrers[$i]["id"];?> (<?php echo $monthly_referrers[$i]["count"]; ?>)', <?php echo $monthly_referrers[$i]['count']; ?>],
                        <?php } ?>
                        ]);

                var options = {
                  is3D: true,
                  legend:true,

                  pieHole: 0.4,
                  pieSliceText: 'label',
                  slices: {  4: {offset: 0.2},
                  12: {offset: 0.3},
                  14: {offset: 0.4},
                  15: {offset: 0.5},
              },
          };

          var chart = new google.visualization.PieChart(document.getElementById('reffer-month'));
          chart.draw(data, options);
      }
  </script>

  <div id="reffer-month" style="width: 100%; height: 550px;"></div>
    <?php }else{ ?>
            <p><?php _e('No referrers stats found','wp-shortify') ?></p>
    <?php } ?>
</div>
</div>
</div>
<div class="panel panel-info panel-clear">
    <div class="panel-heading">
      <h4 class="panel-title">
       <?php _e('Browser monthly Stats','wp-shortify'); ?> 
   </h4>
   <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>

</div>
<div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
        <?php if(!empty($monthly_browsers)){ ?>
        <script type="text/javascript">
            google.load('visualization', '1', {packages: ['corechart'],'callback': drawChart});
            google.setOnLoadCallback(drawChart);

            function drawChart() {

              var data = google.visualization.arrayToDataTable([

                ['Browser', 'Clicks'],
                <?php for ($i=0; $i < count($monthly_browsers) ; $i++) { ?>
                    ['<?php echo $monthly_browsers[$i]["id"];?>', <?php echo $monthly_browsers[$i]['count']; ?>],
                    <?php } ?>
                    ]);

              var options = {
                title: 'Browsers ',
                bar: {groupWidth: "20%"},
            };

            var chart = new google.visualization.BarChart(
                document.getElementById('browser-month'));

            chart.draw(data, options);
        }

    </script>

    <div id="browser-month" style="width: 100%; height: 550px;"></div>
    <?php }else{ ?>
            <p><?php _e('No country stats found','wp-shortify') ?></p>
    <?php } ?>
</div>
</div>
</div>
<div class="panel panel-info panel-clear">
    <div class="panel-heading">
      <h4 class="panel-title">
       <?php _e('platform monthly Stats','wp-shortify'); ?> 
   </h4>
   <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>

</div>
<div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
        <?php if(!empty($monthly_platforms)){ ?>
        <script type="text/javascript">
            google.load('visualization', '1', {packages: ['corechart'],'callback': drawChart});
            google.setOnLoadCallback(drawChart);

            function drawChart() {

              var data = google.visualization.arrayToDataTable([

                ['Platforms', 'Clicks'],
                <?php for ($i=0; $i < count($monthly_platforms) ; $i++) { ?>
                    ['<?php echo $monthly_platforms[$i]["id"];?>', <?php echo $monthly_platforms[$i]['count']; ?>],
                    <?php } ?>
                    ]);

              var options = {
                title: 'Platforms ',
                bar: {groupWidth: "20%"},
            };

            var chart = new google.visualization.BarChart(
                document.getElementById('platform-month'));

            chart.draw(data, options);
        }

    </script>
        <div id="platform-month" style="width: 100%; height: 550px;"></div>
    <?php }else{ ?>
        <p><?php _e('No country stats found','wp-shortify') ?></p>
    <?php } ?>
    </div>
</div>
</div>
</div>
</div>

<div class="tab-pane" id="week">
     <div class="panel-group" id="accordion">

<div class="panel panel-info panel-clear">
    <div class="panel-heading">
      <h4 class="panel-title">
       <?php _e('Country Wise Weekly clicks','wp-shortify'); ?> 
   </h4>
   <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>

</div>
<div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
    <?php if(!empty($weekly_countries)){ ?>

        <script type='text/javascript'>
            google.load('visualization', '1', {'packages': ['geochart'],'callback': drawRegionsMap});
            function drawRegionsMap() {
                var data = google.visualization.arrayToDataTable([
                  ['Country', 'Visitors'],
                  <?php for ($i=0; $i < count($weekly_countries) ; $i++) { ?>
                      ['<?php echo $weekly_countries[$i]["id"];?>', <?php echo $weekly_countries[$i]['count']; ?>],
                      <?php } ?>
                      ]);
                var options = { colorAxis: {colors: ['#2d353c', '#00acac']}  };
                var chart = new google.visualization.GeoChart(document.getElementById('country-week'));
                chart.draw(data, options);
            };
        </script>
    <div id="country-week" style="width:100%; height:308px;margin: 0 auto;"></div>
    <?php }else{ ?>
            <p><?php _e('No country stats found','wp-shortify') ?></p>
    <?php } ?>
</div>
</div>
</div>
<div class="panel panel-info panel-clear">
    <div class="panel-heading">
        <h4 class="panel-title">
           <?php _e('Referr monthly Stats','wp-shortify'); ?> 
       </h4>
       <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
   </div>
   <div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
    <?php if(!empty($weekly_referrers)){ ?>

        <script type="text/javascript">
            google.load("visualization", "1", {packages:["corechart"],'callback': drawChart});
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Referrer Sites', 'Clicks'],
                    <?php for ($i=0; $i < count($weekly_referrers) ; $i++) {
                        if($weekly_referrers[$i]["id"]=='unknown' || $weekly_referrers[$i]["count"]==0 ){
                            continue;
                        }
                        ?>
                        ['<?php echo $weekly_referrers[$i]["id"];?> (<?php echo $weekly_referrers[$i]["count"]; ?>)', <?php echo $weekly_referrers[$i]['count']; ?>],
                        <?php } ?>
                        ]);

                var options = {
                  is3D: true,
                  legend:true,

                  pieHole: 0.4,
                  pieSliceText: 'label',
                  slices: {  4: {offset: 0.2},
                  12: {offset: 0.3},
                  14: {offset: 0.4},
                  15: {offset: 0.5},
              },
          };

          var chart = new google.visualization.PieChart(document.getElementById('reffer-week'));
          chart.draw(data, options);
      }
  </script>

  <div id="reffer-week" style="width: 100%; height: 550px;"></div>
    <?php }else{ ?>
            <p><?php _e('No referrers stats found','wp-shortify') ?></p>
    <?php } ?>
</div>
</div>
</div>
<div class="panel panel-info panel-clear">
    <div class="panel-heading">
      <h4 class="panel-title">
       <?php _e('Browser weekly Stats','wp-shortify'); ?> 
   </h4>
   <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>

</div>
<div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
    <?php if(!empty($weekly_browsers)){ ?>

        <script type="text/javascript">
            google.load('visualization', '1', {packages: ['corechart'],'callback': drawChart});
            google.setOnLoadCallback(drawChart);

            function drawChart() {

              var data = google.visualization.arrayToDataTable([

                ['Browser', 'Clicks'],
                <?php for ($i=0; $i < count($weekly_browsers) ; $i++) { ?>
                    ['<?php echo $weekly_browsers[$i]["id"];?>', <?php echo $weekly_browsers[$i]['count']; ?>],
                <?php } ?>
                ]);

              var options = {
                title: 'Browsers ',
                bar: {groupWidth: "20%"},
            };

            var chart = new google.visualization.BarChart(
                document.getElementById('browser-week'));

            chart.draw(data, options);
        }

    </script>

    <div id="browser-week" style="width: 100%; height: 550px;"></div>
    <?php }else{ ?>
            <p><?php _e('No Browsers stats found','wp-shortify') ?></p>
    <?php } ?>
</div>
</div>
</div>
<div class="panel panel-info panel-clear">
    <div class="panel-heading">
      <h4 class="panel-title">
       <?php _e('platform Weekly Stats','wp-shortify'); ?> 
   </h4>
   <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>

</div>
<div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
    <?php if(!empty($weekly_platforms)){ ?>

        <script type="text/javascript">
            google.load('visualization', '1', {packages: ['corechart'],'callback': drawChart});
            google.setOnLoadCallback(drawChart);

            function drawChart() {

              var data = google.visualization.arrayToDataTable([

                ['Platforms', 'Clicks'],
                <?php for ($i=0; $i < count($weekly_platforms) ; $i++) { ?>
                    ['<?php echo $weekly_platforms[$i]["id"];?>', <?php echo $weekly_platforms[$i]['count']; ?>],
                    <?php } ?>
                    ]);

              var options = {
                title: 'Platforms ',
                bar: {groupWidth: "20%"},
            };

            var chart = new google.visualization.BarChart(
                document.getElementById('platform-week'));

            chart.draw(data, options);
        }

    </script>
        <div id="platform-week" style="width: 100%; height: 550px;"></div>
        <?php }else{ ?>
            <p><?php _e('No Platform stats found','wp-shortify') ?></p>
        <?php } ?>
    </div>
</div>
</div>
</div>
</div>

<div class="tab-pane" id="daily">
     <div class="panel-group" id="accordion">
<div class="panel panel-info panel-clear">
    <div class="panel-heading">
      <h4 class="panel-title">
       <?php _e('Country Wise daily clicks','wp-shortify'); ?> 
   </h4>
   <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>

</div>
<div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
    <?php if(!empty($daily_countries)){ ?>

        <script type='text/javascript'>
            google.load('visualization', '1', {'packages': ['geochart'],'callback': drawRegionsMap});
            function drawRegionsMap() {
                var data = google.visualization.arrayToDataTable([
                  ['Country', 'Visitors'],
                  <?php for ($i=0; $i < count($daily_countries) ; $i++) { ?>
                      ['<?php echo $daily_countries[$i]["id"];?>', <?php echo $daily_countries[$i]['count']; ?>],
                      <?php } ?>
                      ]);
                var options = { colorAxis: {colors: ['#2d353c', '#00acac']}  };
                var chart = new google.visualization.GeoChart(document.getElementById('country-daily'));
                chart.draw(data, options);
            };
        </script>
    <div id="country-daily" style="width:100%; height:308px;margin: 0 auto;"></div>
    <?php }else{ ?>
            <p><?php _e('No country stats found','wp-shortify') ?></p>
    <?php } ?>
</div>
</div>
</div>
<div class="panel panel-info panel-clear">
    <div class="panel-heading">
        <h4 class="panel-title">
           <?php _e('Referr daily Stats','wp-shortify'); ?> 
       </h4>
       <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
   </div>
   <div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
    <?php if(!empty($daily_referrers)){ ?>
        <script type="text/javascript">
            google.load("visualization", "1", {packages:["corechart"],'callback': drawChart});
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Referrer Sites', 'Clicks'],
                    <?php for ($i=0; $i < count($daily_referrers) ; $i++) {
                        if($daily_referrers[$i]["id"]=='unknown' || $daily_referrers[$i]["count"]==0 ){
                            continue;
                        }
                        ?>
                        ['<?php echo $daily_referrers[$i]["id"];?> (<?php echo $daily_referrers[$i]["count"]; ?>)', <?php echo $daily_referrers[$i]['count']; ?>],
                        <?php } ?>
                        ]);

                var options = {
                  is3D: true,
                  legend:true,

                  pieHole: 0.4,
                  pieSliceText: 'label',
                  slices: {  4: {offset: 0.2},
                  12: {offset: 0.3},
                  14: {offset: 0.4},
                  15: {offset: 0.5},
              },
          };

          var chart = new google.visualization.PieChart(document.getElementById('reffer-daily'));
          chart.draw(data, options);
      }
  </script>

    <div id="reffer-daily" style="width: 100%; height: 550px;"></div>
    <?php }else{ ?>
            <p><?php _e('No referrers stats found','wp-shortify') ?></p>
    <?php } ?>
</div>
</div>
</div>
<div class="panel panel-info panel-clear">
    <div class="panel-heading">
      <h4 class="panel-title">
       <?php _e('Browser daily Stats','wp-shortify'); ?> 
   </h4>
   <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>

</div>
<div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
    <?php if(!empty($daily_browsers)){ ?>

        <script type="text/javascript">
            google.load('visualization', '1', {packages: ['corechart'],'callback': drawChart});
            google.setOnLoadCallback(drawChart);

            function drawChart() {

              var data = google.visualization.arrayToDataTable([

                ['Browser', 'Clicks'],
                <?php for ($i=0; $i < count($daily_browsers) ; $i++) { ?>
                    ['<?php echo $daily_browsers[$i]["id"];?>', <?php echo $daily_browsers[$i]['count']; ?>],
                <?php } ?>
                ]);

              var options = {
                title: 'Browsers ',
                bar: {groupWidth: "20%"},
            };

            var chart = new google.visualization.BarChart(
                document.getElementById('browser-daily'));

            chart.draw(data, options);
        }

    </script>

    <div id="browser-daily" style="width: 100%; height: 550px;"></div>
    <?php }else{ ?>
            <p><?php _e('No browsers stats found','wp-shortify') ?></p>
    <?php } ?>
</div>
</div>
</div>
<div class="panel panel-info panel-clear">
    <div class="panel-heading">
      <h4 class="panel-title">
       <?php _e('platform daily Stats','wp-shortify'); ?> 
   </h4>
   <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>

</div>
<div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
    <?php if(!empty($daily_platforms)){ ?>
        <script type="text/javascript">
            google.load('visualization', '1', {packages: ['corechart'],'callback': drawChart});
            google.setOnLoadCallback(drawChart);

            function drawChart() {

              var data = google.visualization.arrayToDataTable([

                ['Platforms', 'Clicks'],
                <?php for ($i=0; $i < count($daily_platforms) ; $i++) { ?>
                    ['<?php echo $daily_platforms[$i]["id"];?>', <?php echo $daily_platforms[$i]['count']; ?>],
                    <?php } ?>
                    ]);

              var options = {
                title: 'Platforms ',
                bar: {groupWidth: "20%"},
            };

            var chart = new google.visualization.BarChart(
                document.getElementById('platform-daily'));

            chart.draw(data, options);
        }

    </script>
        <div id="platform-daily" style="width: 100%; height: 550px;"></div>
        <?php }else{ ?>
            <p><?php _e('No Platform stats found','wp-shortify') ?></p>
        <?php } ?>
    </div>
</div>
</div>
</div>
</div>

<div class="tab-pane" id="twohours">
     <div class="panel-group" id="accordion">

<div class="panel panel-info panel-clear">
    <div class="panel-heading">
      <h4 class="panel-title">
       <?php _e('Country Wise two hours clicks','wp-shortify'); ?> 
   </h4>
   <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>

</div>
<div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
    <?php if(!empty($twoHours_countries)){ ?>
        <script type='text/javascript'>
            google.load('visualization', '1', {'packages': ['geochart'],'callback': drawRegionsMap});
            function drawRegionsMap() {
                var data = google.visualization.arrayToDataTable([
                  ['Country', 'Visitors'],
                  <?php for ($i=0; $i < count($twoHours_countries) ; $i++) { ?>
                      ['<?php echo $twoHours_countries[$i]["id"];?>', <?php echo $twoHours_countries[$i]['count']; ?>],
                      <?php } ?>
                      ]);
                var options = { colorAxis: {colors: ['#2d353c', '#00acac']}  };
                var chart = new google.visualization.GeoChart(document.getElementById('country-hourly'));
                chart.draw(data, options);
            };
        </script>
    <div id="country-hourly" style="width:100%; height:308px;margin: 0 auto;"></div>
    <?php }else{ ?>
    <p>No country found</p>
    <?php } ?>
</div>
</div>
</div>
<div class="panel panel-info panel-clear">
    <div class="panel-heading">
        <h4 class="panel-title">
           <?php _e('Referr two hours Stats','wp-shortify'); ?> 
       </h4>
       <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
   </div>
   <div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
    <?php if(!empty($twoHours_referrers)){ ?>
        <script type="text/javascript">
            google.load("visualization", "1", {packages:["corechart"],'callback': drawChart});
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Referrer Sites', 'Clicks'],
                    <?php for ($i=0; $i < count($twoHours_referrers) ; $i++) {
                        if($twoHours_referrers[$i]["id"]=='unknown' || $twoHours_referrers[$i]["count"]==0 ){
                            continue;
                        }
                        ?>
                        ['<?php echo $twoHours_referrers[$i]["id"];?> (<?php echo $twoHours_referrers[$i]["count"]; ?>)', <?php echo $twoHours_referrers[$i]['count']; ?>],
                        <?php } ?>
                        ]);

                var options = {
                  is3D: true,
                  legend:true,

                  pieHole: 0.4,
                  pieSliceText: 'label',
                  slices: {  4: {offset: 0.2},
                  12: {offset: 0.3},
                  14: {offset: 0.4},
                  15: {offset: 0.5},
              },
          };

          var chart = new google.visualization.PieChart(document.getElementById('reffer-hourly'));
          chart.draw(data, options);
      }
  </script>

  <div id="reffer-hourly" style="width: 100%; height: 550px;"></div>
 <?php }else{ ?>
    <p>No Referr found</p>
<?php } ?>
</div>
</div>
</div>
<div class="panel panel-info panel-clear">
    <div class="panel-heading">
      <h4 class="panel-title">
       <?php _e('Browser two hours Stats','wp-shortify'); ?> 
   </h4>
   <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>

</div>
<div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
    <?php if(!empty($twoHours_browsers)){ ?>
        <script type="text/javascript">
            google.load('visualization', '1', {packages: ['corechart'],'callback': drawChart});
            google.setOnLoadCallback(drawChart);

            function drawChart() {

              var data = google.visualization.arrayToDataTable([

                ['Browser', 'Clicks'],
                <?php for ($i=0; $i < count($twoHours_browsers) ; $i++) { ?>
                    ['<?php echo $twoHours_browsers[$i]["id"];?>', <?php echo $twoHours_browsers[$i]['count']; ?>],
                <?php } ?>
                ]);

              var options = {
                title: 'Browsers ',
                bar: {groupWidth: "20%"},
            };

            var chart = new google.visualization.BarChart(
                document.getElementById('browser-hourly'));

            chart.draw(data, options);
        }

    </script>

    <div id="browser-hourly" style="width: 100%; height: 550px;"></div>
    <?php }else{ ?>
        <p>No Browsers stats found</p>
    <?php } ?>
</div>
</div>
</div>
<div class="panel panel-info panel-clear">
    <div class="panel-heading">
      <h4 class="panel-title">
       <?php _e('Platform two hours Stats','wp-shortify'); ?> 
   </h4>
   <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>

</div>
<div class="panel-body"> 
    <div class="col-md-12 col-sm-12">
        <?php if(!empty($twoHours_platforms)){ ?>
        <script type="text/javascript">
            google.load('visualization', '1', {packages: ['corechart'],'callback': drawChart});
            google.setOnLoadCallback(drawChart);

            function drawChart() {

              var data = google.visualization.arrayToDataTable([

                ['Platforms', 'Clicks'],
                <?php for ($i=0; $i < count($twoHours_platforms) ; $i++) { ?>
                    ['<?php echo $twoHours_platforms[$i]["id"];?>', <?php echo $twoHours_platforms[$i]['count']; ?>],
                    <?php } ?>
                    ]);

              var options = {
                title: 'Platforms ',
                bar: {groupWidth: "20%"},
            };

            var chart = new google.visualization.BarChart(
                document.getElementById('platform-hourly'));

            chart.draw(data, options);
        }

    </script>
        <div id="platform-hourly" style="width: 100%; height: 550px;"></div>
        <?php }else{ ?>
            <p>No Platform stats found</p>
        <?php } ?>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>