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

  Перенаправление 
  ```php
  $this->_helper->redirector->goToRoute(['module' => 'module_name', 'controller' => 'controller_name', 'action' => 'action_name'], 'default', true);
  ```
  ____________________________


  Пример Zend_Form
  ```php
  class Application_Form_Blog extends Zend_Form
  {

      public $element_decorator = array(
          'ViewHelper',
          'Errors',
          array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
          array('Label', array('tag' => 'div')),
          array(array('row' => 'HtmlTag'), array('tag' => 'tr'))
      );

      public $hidden_decorator = array(
          'ViewHelper',
          'Description',
          array(array('elementDiv' => 'HtmlTag'), array('tag' => 'span')),
          array('Label', array('tag' => '')),

      );

      public function init()
      {

          $this->setAttrib('enctype', 'multipart/form-data');
          $lang = $this->getTranslator();
          $name = new Zend_Form_Element_Text('name');
          $name->setLabel('The name of the blog')
              ->setRequired(true)
              ->setAttrib('size', 43)
              ->addValidator('NotEmpty', true, array(
                  'messages' => array('isEmpty' => $lang->translate('Enter the name'))
              ))
              ->setAttrib('class', 'js-symbols-formatter');


          $url = new Zend_Form_Element_Text('url');
          $url->setLabel('Url:')
              ->setRequired(true)
              ->setAttrib('size', 43)
              ->addValidator('NotEmpty', true, array(
                  'messages' => array('isEmpty' => $lang->translate('Enter the URL'))
              ))
              ->setAttrib('class', 'js-symbols-formatter blog-url')
              ->setAttrib('data-lang-id', 'en')
              ->setAttrib('data-no-key-space-id', 'true')
              ->setAttrib('data-no-quotes-id', 'true');

          $url->addValidator(new Zend_Validate_Db_NoRecordExists(
              array(
                  'table' => 'blog_blog',
                  'field' => 'url'
              )
          ));

          $id = new Zend_Form_Element_Hidden('id');
          $id->setDecorators($this->hidden_decorator);


          $status = new Zend_Form_Element_Select('status');
          $status->setRegisterInArrayValidator(false)
              ->addMultiOptions(
                  array(
                      'private' => 'Private',
                      'public' => 'Public',
                  ))
              ->setValue('private')
              ->setLabel('Status');


          $save = new Zend_Form_Element_Submit('save');
          $save->setLabel('Save')
               ->setAttrib('class', 'save-blog');

          $this->addElements([$name, $id, $url, $status, $save]);

      }


  }

  ```
   Контроллер
   ```php
   $form = new Application_Form_Blog();
   $this->view->form = $form;
   ```
   Вьюха
   ```php
   <?= $this->form ?>
   ```
   ____________________________
 
 Преобразование запроса из построителя запросов в sql код
  ```php
  $sql = $this->select()
                ->setIntegrityCheck(false)
                ->from(array('dc' => $this->_name))
                ->join(array('c' => 'wa_contact'), 'dc.contact_id = c.id', array('name'))
                ...
                ->where("c.status NOT IN ('" . implode("','", $statuses) . "')");
  
  echo $sql->assemble();
  ```
  ____________________________

  Добавление роутов
  ____________________________
  
  ```php
  $router = Zend_Controller_Front::getInstance()->getRouter();
  $router->addRoute('new/route', new Zend_Controller_Router_Route_Static('new/route', [
            'module' => 'myModule',
            'controller' => 'my-controller',
            'action' => 'my-action',
        ]));
  ```
