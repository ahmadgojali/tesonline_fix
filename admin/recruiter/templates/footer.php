  </div>
  <!-- Content Wrapper. Contains page content -->
  
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; <?= date('Y') ?> <a href="https://www.arwanacitra.com/" target="_blank">PT. Arwana Citramulia Tbk</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <div class="tab-content">
      <div class="tab-pane" id="control-sidebar-home-tab"></div>
    </div>
  </aside>
  <div class="control-sidebar-bg"></div>


<!-- Scroll to Top Button-->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><i class="fa fa-chevron-circle-up fa-lg"></i>
  <!-- <span class="glyphicon glyphicon-chevron-up"></span> -->
</a>


<!-- jQuery 2.2.3 -->
<script src="../assets2/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="../assets2/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../assets2/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets2/plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- password -->
<!-- <script src="../assets/dist/password.js"></script> -->


<script language="JavaScript" type="text/JavaScript">
  function MM_jumpMenu(targ,selObj,restore){ //v3.0
    eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
    if (restore) selObj.selectedIndex=0;
  }
</script>
<script src="js/script.js"></script>


<!-- function generate password javascript -->
<!-- <script>
    function generate( length = 10 ){
      var uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      var lowercase = 'abcdefghijklmnopqrstuvwxyz';
      var numbers   = '0123456789';
      var symbols   = '!"#$%&\'()*+,-./:;<=>?@^[\\]^_`{|}~';

      var all = uppercase + lowercase + numbers ;

      var password = '';

      for (var index = 0; index < length; index++) {
          var character = Math.floor(Math.random() * all.length);
          password += all.substring(character, character + 1);
      }

      return password;
  }
</script> -->
<!-- function generate password javascript -->

<!-- generate password dengan button -->
<!-- <script>
    window.onload = function (){
      var generateButton = document.querySelector('#generate');
      generateButton.addEventListener('click', function(){        
        document.querySelector('#password').value = generate();
      });
    }
</script> -->
<!-- generate password dengan button -->

<!-- generate password dengan keypress texbox username -->
<!-- <script>
    window.onload = function (){
      var generateButton = document.querySelector('#username');
      generateButton.addEventListener('keypress', function(){        
        document.querySelector('#password').value = generate();
      });
    }
</script> -->
<!-- generate password dengan keypress texbox username -->
<!-- <script src="js/password_generate.js"></script> -->

<!-- toggle hide/show -->
  <!-- <script>
    $(document).ready(function(){
      $("#tampil").hide();
    });
  </script>

  <script>
    $(document).ready(function(){
      $("#lihat").click(function(){
        $("#tampil").toggle();
      });
    });
  </script> -->
  <!-- toggle hide/show -->

 <!-- back-to-top -->
  <!-- <script>
  $(document).ready(function(){
   $(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
              $('#back-to-top').fadeIn();
          } else {
              $('#back-to-top').fadeOut();
          }
      });
      // scroll body to 0px on click
      $('#back-to-top').click(function () {
          $('#back-to-top').tooltip('hide');
          $('body,html').animate({
              scrollTop: 0
          }, 800);
          return false;
      });
      
      $('#back-to-top').tooltip('show');

  });
  </script> -->
  <!-- <script src="js/back_to_top.js"></script> -->

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<!-- Page script -->

<script>
  $(function () {
  
    //Date picker
    $('#datepicker').datepicker({
      format: "dd-mm-yyyy" ,
      autoclose: true
    });

    //Initialize Select2 Elements
    $(".select2").select2();

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
  });
</script>
<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });
</script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>


<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="../assets2/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="../assets2/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="../assets2/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="../assets2/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="../assets2/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../assets2/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../assets2/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../assets2/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- ckeditor -->
<script src="../assets2/plugins/ckeditor/ckeditor.js"></script>
<!-- Slimscroll -->
<script src="../assets2/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../assets2/plugins/iCheck/icheck.min.js"></script>
<!-- Select2 -->
<script src="../assets2/plugins/select2/select2.full.min.js"></script>
<!-- bootstrap datepicker -->
<script src="../assets2/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- FastClick -->
<script src="../assets2/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../assets2/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assets2/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets2/dist/js/demo.js"></script>
<!-- Ionicons -->
<!-- <script src="../assets2/plugins/ionicons/docs/css/ionicons.js"></script> -->

<!-- sweet alert -->
<script src="../assets/dist/sweetalert.min.js"></script>
<script src="../assets/dist/bootstrap-notify.min.js"></script>

<?php 
  if (isset($_GET['message'])) {
    
    if ($_GET['message'] == 'error') {
      
      echo '<script language="javascript">swal("Sorry!", "The email or phone number you entered already exists!", "error");</script>';
    }

    elseif ($_GET['message'] == 'error2') {
      
      echo '<script language="javascript">swal("Sorry!", "Failed to register!", "error");</script>';
    }

    elseif ($_GET['message'] == 'sukses') {
      
      echo "<script language='javascript'>setTimeout(function(){
      $.notify({
        title: 'Input Complete : ',
        message: 'Data Berhasil ditambahkan!',
        icon: 'fa fa-check' 
      },{
        type: 'info'
      });
    });;</script>";
  }

  elseif ($_GET['message'] == 'delete') {
      
      echo '<script language="javascript">
        swal({
          title: "Are you sure?",
          text: "Once deleted, you will not be able to recover this imaginary file!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            swal("Poof! Your imaginary file has been deleted!", {
              icon: "success",
            });
          } else {
            
          }
        });
      </script>';
  }
}

?>

</body>
</html>