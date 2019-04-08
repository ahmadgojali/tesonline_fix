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

