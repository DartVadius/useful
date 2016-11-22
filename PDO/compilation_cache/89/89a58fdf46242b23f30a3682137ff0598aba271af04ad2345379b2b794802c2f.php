<?php

/* galery.tpl */
class __TwigTemplate_911746bd5cd18017e79d906f0d699abab3f643f0120997634767dd5283e69ed6 extends Twig_Template
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
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "mainPic", array()), "html", null, true);
        echo "\" class=\"img-responsive center-block\">
<br>
<div class=\"row\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "galery", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pic"]) {
            // line 5
            echo "    <div class=\"col-md-2 col-xs-2\">
        <a href=\"#\" class=\"thumbnail\">
            <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $context["pic"], "html", null, true);
            echo "\" class=\"img-responsive\">
        </a>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "galery.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  34 => 7,  30 => 5,  26 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
