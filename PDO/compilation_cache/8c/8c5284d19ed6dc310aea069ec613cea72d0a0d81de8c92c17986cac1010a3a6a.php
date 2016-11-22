<?php

/* productInfo.tpl */
class __TwigTemplate_d6db82677bca68470d8d18dd89e653a259a3a606070d9bb3a064ed52df2de984 extends Twig_Template
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
        echo "<h2>";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title", array())), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "model", array())), "html", null, true);
        echo "</small></h2>
<dl class=\"product-info\">
    <dt>Manufacturer</dt>
    <dd>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "title", array()), "html", null, true);
        echo "</dd>
    <dt>Model</dt>
    <dd>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "model", array()), "html", null, true);
        echo "</dd>
    <dt>Bonus points</dt>
    <dd>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "BonusPoints", array()), "html", null, true);
        echo "</dd>
    <dt>Availability</dt>
    <dd>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "Availability", array()), "html", null, true);
        echo "</dd>
</dl>
<h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "price", array()), "html", null, true);
        echo " \$</h2>";
    }

    public function getTemplateName()
    {
        return "productInfo.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  43 => 10,  38 => 8,  33 => 6,  28 => 4,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
