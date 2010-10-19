##How to install:##

    symfony plugin:install sfCKEditorPlugin

You need to create an autoload.yml in the project config directory.
  
    autoload:
      ckeditor:
        name:       ckeditor
        path:       path/to/ckeditor/dir
        recursive:  on

You need to set the basePath of the ckeditor in an app.yml.
  
    all:
      ckeditor:
        basePath:         'path/to/ckeditor/'

      
##How to use:##

    [php]
    $this->widgetSchema['my_editor'] = new sfWidgetFormCKEditor();

###Set CKEditor config param###

You can set config with the ckeditor object directly
    
    [php]
    $this->widgetSchema['my_editor'] = new sfWidgetFormCKEditor();
    $editor = $this->widgetSchema['my_editor']->getEditor();
    $editor->config['param'] = value;
    
Or:
    
    [php]
    $this->widgetSchema['my_editor'] = new sfWidgetFormCKEditor(array('jsoptions'=>array('param' => 'value'));

See http://ckeditor.com/ for config instructions



## To use CKFinder: ##
  
Add in the autoload.yml file

    ckfinder:
      name:       ckfinder
      path:       path/to/ckfinder/dir
      recursive:  on    
      
In app.yml:

    all:
      ckfinder:
        active:           true
        basePath:         'path/to/ckfinder/'
  
Access to CKFinder object:
    
    [php]
    $this->widgetSchema['my_editor'] = new sfWidgetFormCKEditor();
    $finder = $this->widgetSchema['my_editor']->getFinder();
  
You need to configure path/to/ckfinder/config.php. See http://ckfinder.com/ for instructions.


  