// password generate untuk form tambah user 
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

  window.onload = function (){
    var generateButton = document.querySelector('#username');
    generateButton.addEventListener('keypress', function(){        
      document.querySelector('#password').value = generate();
    });
  }

  // back to top
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

