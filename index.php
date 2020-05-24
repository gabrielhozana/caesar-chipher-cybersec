<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Caesar Chipher</title>

    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <script src="jquery.js"></script>
    
  </head>

  <body style="background-color: #f2f4f6">
    
    <div class="header" style="background-color: #33b5e5">
      <a href="#default" class="logo" style="font-family: Roboto, sans-serif; font-weight: 500; color: white;text-align: left;"><b>Caesar Chipher</b></a>

    </div>
    <div style="margin:60px">
      <div class="container card">   
          <div id="test1">
              <div class="row " style="background-color: white;">
                <div class="col-sm-4 card-header" style="background-color: white;">
                  <div class="card-body" style="text-align: center;">
                    <div>
                      <h5 style="color: #00b1d1; font-family: Roboto,sans-serif;font-weight: 500; font-size: 24px; line-height: 28px;"><b>Plaintext</b></h5>
                    </div>                  
                  </div>                
                  <div class="card-body" style="background-color: white;">
                    <div class="input">
                      <form id="form">
                        <div>
                          <!-- <h5 style="color: #00b1d1">Text:</h5> -->
                          <input style="padding-bottom: 200px; border: 2px solid #f2f4f6; border-radius: 5px;" type="text" id="cypher"/> 
                        </div>                                        
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 card-header" style="background-color: white">
                  <div class="card-body" style="text-align: center;">
                    <div>
                      <h5 style="color: #00b1d1; font-family: Roboto,sans-serif;font-weight: 500; font-size: 24px; line-height: 28px;">
                        <b>Caesar Chipher</b></h5>
                    </div>
                  </div>                
                  <div class="card-body">
                    <div>
                      <div id="myDIV">
                        <ul style="font-family: Roboto,sans-serif;font-weight: 500; font-size: 20px; margin-bottom: 1px">
                          <li style="float: left; display: block; margin-right: 5px;margin-left: -53px; ">
                            <p class="btn active" id="button1"><b>ENCRYPT</b></p>
                          </li>
                          <li style="display: block;">
                             <p class="btn" id="button2"><b>DECRYPT</b></p>
                          </li>
                        </ul>                    
                      </div>
                    </div>
                    <div class="input">
                      <form id="form" style="color: #f90; font-family: Roboto,sans-serif;font-weight: 500; font-size: 17px;">
                        <b>Offset:</b>
                        <div class="quantity">
                          <input style="border: 2px solid #f2f4f6; border-radius: 5px;margin-bottom: 16px; " type="number" value="7" id="offset"/>
                        </div>
                        <b>Alphabet:</b>
                        <input style="border: 2px solid #f2f4f6; border-radius: 5px;" type="text" value="abcdefghijklmnopqrstuvwxyz" id="alphabets"/>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 card-header" style="background-color: white">
                  <div class="card-body" style="text-align: center;">
                    <div>
                      <h5 style="color: #00b1d1; font-family: Roboto,sans-serif;font-weight: 500; font-size: 24px; line-height: 28px;">
                        <b>CipherText</b></h5>
                    </div> 
                  </div>                
                  <div class="card-body">
                    <div class="input">
                      <form id="form">
                        <div>
                          <!-- Cipher: -->
                          <input style="padding-bottom: 200px;  border: 2px solid #f2f4f6; border-radius: 5px;" type="text" id="finish"/>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <!-- #decode -->
          <div id="test2">
              <div class="row " style="background-color: white;">
                <div class="col-sm-4 card-header" style="background-color: white;">
                  <div class="card-body" style="text-align: center;">
                    <div>
                      <h5 style="color: #00b1d1; font-family: Roboto,sans-serif;font-weight: 500; font-size: 24px; line-height: 28px;"><b>CipherText</b></h5>
                    </div>                  
                  </div>                
                  <div class="card-body" style="background-color: white;">
                    <div class="input">
                      <form id="form">
                        <div>
                          
                          <input style="padding-bottom: 200px; border: 2px solid #f2f4f6; border-radius: 5px;" type="text" id="cypher_d"/> 
                        </div>                                        
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 card-header" style="background-color: white">
                  <div class="card-body" style="text-align: center;">
                    <div>
                      <h5 style="color: #00b1d1; font-family: Roboto,sans-serif;font-weight: 500; font-size: 24px; line-height: 28px;">
                        <b>Caesar Chipher</b></h5>
                    </div>
                  </div>                
                  <div class="card-body">
                    <div>
                      <div id="myDIV">
                        <ul style="font-family: Roboto,sans-serif;font-weight: 500; font-size: 20px; margin-bottom: 1px">
                          <li style="float: left; display: block; margin-right: 5px;margin-left: -53px; ">
                            <p class="btn" id="button3"><b>ENCRYPT</b></p>
                          </li>
                          <li style="display: block;">
                             <p class="btn active" id="button4"><b>DECRYPT</b></p>
                          </li>
                        </ul>                    
                      </div>
                    </div>
                    <div class="input">
                      <form id="form" style="color: #f90; font-family: Roboto,sans-serif;font-weight: 500; font-size: 17px;">
                        <b>Offset:</b>
                        <div class="quantity">
                          <input style="border: 2px solid #f2f4f6; border-radius: 5px;margin-bottom: 16px; " type="number" value="7" id="offset_d"/>
                        </div>
                        <b>Alphabet:</b>
                        <input style="border: 2px solid #f2f4f6; border-radius: 5px;" type="text" value="abcdefghijklmnopqrstuvwxyz" id="alphabets_d"/>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4 card-header" style="background-color: white">
                  <div class="card-body" style="text-align: center;">
                    <div>
                      <h5 style="color: #00b1d1; font-family: Roboto,sans-serif;font-weight: 500; font-size: 24px; line-height: 28px;">
                        <b>Plaintext</b></h5>
                    </div> 
                  </div>                
                  <div class="card-body">
                    <div class="input">
                      <form id="form">
                        <div>
                          <!-- Cipher: -->
                          <input style="padding-bottom: 200px;  border: 2px solid #f2f4f6; border-radius: 5px;" type="text" id="finish_d"/>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </div>
    <footer class="site-footer" style="font-family: Roboto,sans-serif;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>About</h6>
            <p class="text-justify">Nama : Gabril Hozanna <br>NIM : 42517042 <br> Dosen : Irfan Syamsuddin, ST, PG.Dipl.BEC, M.Com.ISM,Ph.D <br> Teknik Komputer dan Jaringan - <i>CYBERSECURITY</i> </p>
          </div>

          <div class="col-xs-10 col-md-5">
            <h6>Cybersecurity - Caesar Chipher</h6>
            <h6>D4 Teknik Komputer dan Jaringan</h6>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved & Made with <span style="color: #e25555;">&hearts;</span> in Makassar by 
            <a href="#">Gabril Hozanna</a>.
            </p>
            
          </div>
        </div>
      </div>        
    </footer>
    <script type="text/javascript">
      var alphabet = "abcdefghijklmnopqrstuvwxyz";
      var fullAlphabet = alphabet + alphabet + alphabet;

      function runCipher(){
        var cipherText = $('#cypher').val();
        var cipherOffset = $('#offset').val();
        var alphabet = $('#alphabets').val();
        alphabet = alphabet.toLowerCase();
        cipherOffset = (cipherOffset % alphabet.length);
        var cipherFinish = '';

        for(i=0; i<cipherText.length; i++){
          var letter = cipherText[i];
          var upper = (letter == letter.toUpperCase());
          letter = letter.toLowerCase();

          var index = alphabet.indexOf(letter);
          if(index == -1){
            cipherFinish += letter;
          } else {
            index = ((index + cipherOffset) + alphabet.length);
            var nextLetter = fullAlphabet[index];
            if(upper) nextLetter = nextLetter.toUpperCase();
              cipherFinish += nextLetter;
          }
        }
        $('#finish').val(cipherFinish);
      }

      $(document).ready(function() {
        $('#cypher').keypress(function(){
          setTimeout(function(){ runCipher(); },20);
        });
        $('#cypher').blur(function(){
          runCipher();
        });
        $('#offset').change(function(){
          setTimeout(runCipher(),20);
        });
        $('#alphabets').change(function(){
          setTimeout(runCipher(),20);
        });           
      });

      function runCipher_d(){
        var cipherText = $('#cypher_d').val();
        var cipherOffset = $('#offset_d').val();
        var alphabet = $('#alphabets_d').val();
        alphabet = alphabet.toLowerCase();
        cipherOffset = (cipherOffset % alphabet.length);
        var cipherFinish = '';

        for(i=0; i<cipherText.length; i++){
          var letter = cipherText[i];
          var upper = (letter == letter.toUpperCase());
          letter = letter.toLowerCase();

          var index = alphabet.indexOf(letter);
          if(index == -1){
            cipherFinish += letter;
          } else {
            index = ((index - cipherOffset) + alphabet.length);
            var nextLetter = fullAlphabet[index];
            if(upper) nextLetter = nextLetter.toUpperCase();
              cipherFinish += nextLetter;
          }
        }
        $('#finish_d').val(cipherFinish);
      }

      $(document).ready(function() {
        $('#cypher_d').keypress(function(){
          setTimeout(function(){ runCipher_d(); },20);
        });
        $('#cypher_d').blur(function(){
          runCipher_d();
        });
        $('#offset_d').change(function(){
          setTimeout(runCipher_d(),20);
        });
        $('#alphabets_d').change(function(){
          setTimeout(runCipher_d(),20);
        });           
      });

      $(document).ready(function(){
        $("#button1").click(function(){
          $("#test2").hide();
          $("#test1").show();
        });
      });

      $(document).ready(function(){
        $("#button2").click(function(){
          $("#test1").hide();
          $("#test2").show();
        });
      });

      $(document).ready(function(){
        $("#button3").click(function(){
          $("#test2").hide();
          $("#test1").show();
        });
      });

      $(document).ready(function(){
        $("#button4").click(function(){
          $("#test1").hide();
          $("#test2").show();
        });
      });

      $(document).ready(function(){
        $("#test2").hide();
      });
    </script> 

    <!-- #untuk active encode/decode   -->
    <script>
      var header = document.getElementById("myDIV");
      var btns = header.getElementsByClassName("btn");
      for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
        });
      }
    </script>

    <script type="text/javascript">
      jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
      jQuery('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
        });
      });
    </script>
  </body>
</html>
