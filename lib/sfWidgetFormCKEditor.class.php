<?php

class sfWidgetFormCKEditor extends sfWidgetFormTextarea {

  protected function configure($options = array(), $attributes = array())
  {
      if(isset($options['jsoptions']))
     {
        $this->addOption('jsoptions', $options['jsoptions']);    
      }
      parent::configure($options, $attributes);
  }
  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    
    $editorPath = sfConfig::get('sf_rich_text_ck_js_file', 'ckeditor/ckeditor.js');
    sfContext::getInstance()->getResponse()->addJavascript($editorPath);
    
    echo parent::render($name, $value , $attributes, $errors);
    
    $html = "<script type='text/javascript' >";
    $html  .= " CKEDITOR.replace('".$name."',{";
    
    $jsoptions = $this->getOption('config');
    if($jsoptions)
    {
      foreach($jsoptions as $k => $v)
      {
        $html .= $k." : '".$v."'";
      }
    }
    
    $html .="});";
    $html .= "</script>";
    
    echo $html;
  }
}