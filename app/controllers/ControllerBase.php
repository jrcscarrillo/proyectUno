<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
  protected function initialize()
  {
      $this->tag->prependTitle('JRCS | ');
      $this->view->setTemplateAfter('main');
  }
}
