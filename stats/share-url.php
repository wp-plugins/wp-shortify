<div class="panel-group" id="accordion">
      <div class="panel panel-info panel-clear">
        <div class="panel-heading">
          <h4 class="panel-title">
              <?php _e('Short URL Info','wp-shortify'); ?> 
         </h4>
         <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
      </div>
     <div class="panel-body"> 
        <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          
          <th> Short URL </th>
          <th> Created </th>
          <th> Status </th>
          <th> Share </th>
          <th> QR code </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><a href="<?php echo $short_url ?>" target="_blank"><?php echo $short_url ?></a> </td>
          <td><?php echo date("jS F, Y", strtotime($created_at)); ?></td>
          <td><?php echo $short_status ?></td>
          <td>
            <a href="#" onclick ="open_popup('https://www.facebook.com/sharer/sharer.php?u=<?php echo $short_url ?>')" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
            <a href="#" onclick ="open_popup('https://plus.google.com/share??url=<?php echo $short_url ?>')" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a> 
          </td>
          <td>
          <img alt="QR code" src="//chart.googleapis.com/chart?cht=qr&chs=100x100&choe=UTF-8&chld=H|0&chl=<?php echo $short_url ?>">
            
          </td>
        </tr>
      </tbody>
    </table>
  </div>
     </div>
   </div>
</div>