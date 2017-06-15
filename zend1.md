Получение полного пути в контроллере
  ```php
  $this->getRequest()->getScheme() . '://' . $this->getRequest()->getHttpHost() . $this->getRequest()->getRequestUri();
  ```  
  ____________________________
  
  Отключение лейаута
   ```php
  $this->_helper->layout->disableLayout();
  ```  
  ____________________________
  Смена лейаута
   ```php
  $this->_helper->layout->setLayoutPath(APPLICATION_PATH . 'layouts/scripts');
  $this->_helper->layout->setLayout('foobaz');
  ```  
  ____________________________
