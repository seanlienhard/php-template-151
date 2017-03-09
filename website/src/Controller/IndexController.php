<?php

namespace slienhard\Controller;

use slienhard\SimpleTemplateEngine;

class IndexController 
{
  /**
   * @var slienhard\SimpleTemplateEngine Template engines to render output
   */
  private $template;
  
  /**
   * @param slienhard\SimpleTemplateEngine
   */
  public function __construct(SimpleTemplateEngine $template)
  {
     $this->template = $template;
  }

  public function homepage() {
    echo "INDEX";
  }

  public function greet($name) {
  	echo $this->template->render("hello.html.php", ["name" => $name]);
  }
}
