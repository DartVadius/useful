 Установить печеньку
 
 ```js
 function setCookie(name, value, path, domain, secure) {
        var cookie_string = name + "=" + escape(value);
        var date = new Date;
        date.setDate(date.getDate() + 1); //устанавливаем дату +1 день
        cookie_string += "; expires=" + date.toUTCString();

        if (path) {
            cookie_string += "; path=" + escape(path);
        }

        if (domain) {
            cookie_string += "; domain=" + escape(domain);
        }

        if (secure) {
            cookie_string += "; secure";
        }

        document.cookie = cookie_string;
    }
 ```
 
 Получить значение по имени печеньки
 
 ```js
 function getCookie(name) {
        var matches = document.cookie.match(new RegExp(
                "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
                ));
        return matches ? decodeURIComponent(matches[1]) : undefined;
    };
    var value = getCookie('cookieName');
 ```
 
 получаем значения из формы по клику и проверяем регуляркой, если проверка не проходит - прерываем выполнение скрипта  
  ```js
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
  ```  
  ____________________________
  
  получаем значения отмеченных чекбоксов и отправляем аяксом
```js
  <script>
      $(document).ready(function () {
          $('.brand').on('change', function () {
              var cat = [];
              $('#category_filters input:checkbox:checked').each(function () {
                  cat.push($(this).val());
              });
              var data = {
                  category: cat,
              };
              $.ajax({
                  url: "/brand_product/<?php// $this->brand ?>",
                  type: "GET",
                  data: data,
                  success: function (response) {
                      ...
                  }
              });
          });
      });
  </script>
  ```
  html
  ```html
  <div class="filters ajax" id="category_filters">
  <?php if ($this->category) : ?>
  <fieldset>
  <p><legend class="header-bl"><?= $this->translate('Categories'); ?></legend></p>
    php foreach ($this->category as $key => $value): ?>
      <input class="brand" type="checkbox" id="<?=$key?>" name="category[]" value="<?= $key ?>" /><?=$value?><br>
    <?php endforeach; ?>
  </fieldset>
  <?php endif; ?>
  </div>
  ```
  _____________________
  
  парсим url и получаем параметры
  ```js
  $.urlParam = function(name){
    var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
    return results[1] || 0;
  }
  ```
  // example.com?param1=name&param2=&id=6
  ```js
  $.urlParam('param1'); // name
  $.urlParam('id');        // 6
  $.urlParam('param2');   // null
  ```
  вариант 2
  ```js
  var url = ($(this).attr('href'));
  var cat = getURLParameter(url, 'cat');
  var typ = getURLParameter(url, 'typ');
  
  function getURLParameter(url, name) {
    return (RegExp(name + '=' + '(.+?)(&|$)').exec(url)||[,null])[1];
  }
  ```
  
  _____________________
  
  распарсить html из переменной и получить значение
  ```js
  $(msg).filter('#counter').html();
  ```
  msg - переменная, содержащая html

  _____________________

  Enable/disable elem
  ```js
  / Disable #x
  $( "#x" ).prop( "disabled", true );

  // Enable #x
  $( "#x" ).prop( "disabled", false );
  ```
  _____________________

  Получить элементы внутри родительского блока текущего элемента по селектору
  ```js
  $(this).siblings('selector').attr('...');
  ```

