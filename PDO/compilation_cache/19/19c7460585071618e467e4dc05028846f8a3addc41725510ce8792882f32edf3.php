<?php

/* wellcome.tpl */
class __TwigTemplate_112a8134361e9f5ff3d5ee41d9be5def0508fc6d9d34f7ff0ce89be79e91d5b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"form-group field\">
            <div class=\"wellcome\"><span>Wellcome ";
        // line 4
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["user"]) ? $context["user"] : null)), "html", null, true);
        echo "</span></div>
            <div class=\"wellcome\"><a href=\"index.php?do=logout\" class=\"wellcome\">Logout</a></div>
        </div>
        </div>
        <div class=\"col-md-3\">
            
        </div>
        <div class=\"col-md-3\">
            
        </div>
    </div> 

";
    }

    public function getTemplateName()
    {
        return "wellcome.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
