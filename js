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
  получаем значения отмеченных чекбоксов и отправляем аяксом
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
                      $('#productcount').text(response.productcount);
                      $('#product-list').html(response.products);
                      $('.paginator').html(response.paginator);
                      console.log(response);
                  }
              });
          });
      });

  </script>
  html
  <div class="filters ajax" id="category_filters">
  <?php if ($this->category) : ?>
  <fieldset>
  <p><legend class="header-bl"><?= $this->translate('Categories'); ?></legend></p>
    php foreach ($this->category as $key => $value): ?>
      <input class="brand" type="checkbox" id="<?= $key ?>" name="category[]" value="<?= $key ?>" /> <?= $value ?><br>
    <?php endforeach; ?>
  </fieldset>
  <?php endif; ?>
  </div>
