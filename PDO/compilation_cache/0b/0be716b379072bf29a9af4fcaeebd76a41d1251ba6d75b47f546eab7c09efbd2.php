<?php

/* layout.tpl */
class __TwigTemplate_7039827d32595b32d7efb5499b581a97e3a0fdb691ae3c3d24ff12387c340830 extends Twig_Template
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
        $this->loadTemplate("header.tpl", "layout.tpl", 1)->display($context);
        // line 2
        if ($this->getAttribute((isset($context["session"]) ? $context["session"] : null), "logged", array())) {
            // line 3
            echo "    ";
            $this->loadTemplate("work.tpl", "layout.tpl", 3)->display($context);
        } else {
            // line 5
            echo "    ";
            $this->displayBlock('login', $context, $blocks);
        }
        // line 7
        $this->loadTemplate("footer.tpl", "layout.tpl", 7)->display($context);
    }

    // line 5
    public function block_login($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 5,  32 => 7,  28 => 5,  24 => 3,  22 => 2,  20 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
