<?php
$title = "drinkmenu";
include "header.php" ?>
<!doctype html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

<div class="">
  <div class="row">
    <div class='col-sm-6'>
      <div class="form-group">
        <span>Select time with Date</span>
        <div class='input-group date' id='datetimepicker2'>
          <input type='text' class="form-control" />
          <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
          </span>
        </div>
        <br/>
       
      </div>
    </div>
  </div>
</div>


<div class="row">
<?php include "footer.php" ?>
</div>
<script>
    $(function() {
  $('#datetimepicker1').datetimepicker({
            format: 'HH:mm'
  });
  
  $('#datetimepicker2').datetimepicker({
            format: 'MM/DD/YYYY HH:mm'
  });
  $('#datetimepicker3').datetimepicker({
      format: 'hh:mm A',
  });
});
</script>