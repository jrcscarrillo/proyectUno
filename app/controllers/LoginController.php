<?php

class LoginController extends ControllerBase
{
  public function initialize()
  {
      $this->view->setTemplateAfter("main");
      parent::initialize();
  }

    public function indexAction()
    {

    }

}
