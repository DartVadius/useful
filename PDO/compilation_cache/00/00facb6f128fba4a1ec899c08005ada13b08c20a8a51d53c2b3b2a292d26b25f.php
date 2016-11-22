<?php

/* header.html */
class __TwigTemplate_8f40f86d00d22c4ad47def6af536ce1b38fedcd547f14c95cfa5d1a9b6470886 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'login' => array($this, 'block_login'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row\">
    <div class=\"col-md-9\">

    </div>
    <div class=\"col-md-3\">
        ";
        // line 6
        $this->displayBlock('login', $context, $blocks);
        // line 7
        echo "    </div>
</div>";
    }

    // line 6
    public function block_login($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "header.html";
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  29 => 7,  27 => 6,  20 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
