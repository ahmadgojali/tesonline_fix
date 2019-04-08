<?php include 'templates/header.php'; ?>

<?php include 'templates/navbar.php'; ?>

<?php 
  
  if (!isset($_GET['pages'])) {
      
      include 'inc.home.php';
    }

    else {

      include 'inc.pages.php';
    }
 ?>

<?php include 'templates/footer.php'; ?>

<!-- back-to-top -->
  <script>
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
  </script>
  <!-- back-to-top -->

  <!-- mematikan tombol back pada browser -->
  <script type = "text/javascript" >
    function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
  </script>
  <!-- mematikan tombol back pada browser -->

  <!-- menampilkan waktu realtime dengan ajax-->
  <script>
    // Function ini dijalankan ketika Halaman ini dibuka pada browser
    $(function(){
      setInterval(timestamp, 1000);//fungsi yang dijalan setiap detik, 1000 = 1 detik
    });
     
    //Fungi ajax untuk Menampilkan Jam dengan mengakses File ajax_timestamp.php
    function timestamp() {
      $.ajax({
        url: 'ajax-jam.php',
        success: function(data) {
        $('#timestamp').html(data);
        },
      });
    }
  </script>
  <!-- menampilkan waktu realtime dengan ajax-->

  <!-- fungsi validasi angka dan operator mtk hanya angka tidak abjad  -->
  <script>
    function validate(evt) {
    var theEvent = evt || window.event;

      // Handle paste
      if (theEvent.type === 'paste') {
          key = event.clipboardData.getData('text/plain');
      } else {
      // Handle key press
          var key = theEvent.keyCode || theEvent.which;
          key = String.fromCharCode(key);
      }
      var regex = /[0-9+-/*]|\./;
      if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
      }
    }
  </script>
  <!-- fungsi validasi angka dan operator mtk -->

  <!-- fungsi validasi angka dan operator mtk -->
  <script>
    function validate2(evt) {
    var theEvent = evt || window.event;

      // Handle paste
      if (theEvent.type === 'paste') {
          key = event.clipboardData.getData('text/plain');
      } else {
      // Handle key press
          var key = theEvent.keyCode || theEvent.which;
          key = String.fromCharCode(key);
      }
      var regex = /[0-9+-/*ABCDEabcde]|\./;
      if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
      }
    }
  </script>
  <!-- fungsi validasi angka dan operator mtk -->

  <script type="text/javascript">

        $(document).ready(function() {
            /** Membuat Waktu Mulai Hitung Mundur Dengan 
                * var detik;
                * var menit;
                * var jam;
            */
            var detik   = <?= $detik; ?>;
            var menit   = <?= $menit; ?>;
            var jam     = <?= $jam; ?>;
                  
            /**
               * Membuat function hitung() sebagai Penghitungan Waktu
            */
            function hitung() {
                /** setTimout(hitung, 1000) digunakan untuk 
                     * mengulang atau merefresh halaman selama 1000 (1 detik) 
                */
                setTimeout(hitung,1000);
  
                /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
                if(menit < 2 && jam == 0){
                    var peringatan = 'style="color:red"';
                };
  
                /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
                $('#timer').html(
                    '<h4 align="center"'+peringatan+'>Sisa waktu anda <br />' + jam + ' jam : ' + menit + ' menit : ' + detik + ' detik</h4><hr>'
                );
  
                /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
                detik --;
  
                /** Jika var detik < 0
                    * var detik akan dikembalikan ke 59
                    * Menit akan Berkurang 1
                */
                if(detik < 0) {
                    detik = 59;
                    menit --;
  
                   /** Jika menit < 0
                        * Maka menit akan dikembali ke 59
                        * Jam akan Berkurang 1
                    */
                    if(menit < 0) {
                        menit = 59;
                        jam --;
  
                        /** Jika var jam < 0
                            * clearInterval() Memberhentikan Interval dan submit secara otomatis
                        */
                             
                        if(jam < 0) { 
                            clearInterval(hitung); 
                            /** Variable yang digunakan untuk submit secara otomatis di Form */
                            var frmSoal = document.getElementById("frmSoal"); 
                           // alert('Maaf, Waktu pengerjaan untuk soal tes ke-1 ini telah habis, lanjut ke tes berikutnya.');
                            frmSoal.submit(); 
                        } 
                    } 
                } 
            }           
            /** Menjalankan Function Hitung Waktu Mundur */
            hitung();
        });
    
    </script>

</body>
</html>