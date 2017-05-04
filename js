  получаем значения из формы по клику и проверяем регуляркой, если проверка не проходит - прерываем выполнение скрипта  
  <script>
      $(document).ready(function(){
          $('#save-conf').on('click', function(e){
              var s = $('form').serializeArray();
              var reg = /[a-zA-Z0-9\/\\[\](){}-]+$/;
              jQuery.each(s, function(i, val){
                  var res = reg.test(val.value);
                  if (!res) {
                      e.preventDefault();
                  }
              });        
          });
      });
  </script>
