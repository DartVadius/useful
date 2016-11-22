<?php

/* comments.tpl */
class __TwigTemplate_8595974efbf49d18bcd8f123a2ffcd8d264c7a87a8a4b45de5f29817c4888823 extends Twig_Template
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
        echo "<div id=\"review-list\" class=\"comments\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 3
            echo "    <div>
        <h6>date: ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date", array()), "html", null, true);
            echo "</h6>
    </div>
    <div>
        <h5>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "name", array()), "html", null, true);
            echo "</h5>
    </div>
    <div>
        <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()), "html", null, true);
            echo "</p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "comments.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  41 => 10,  35 => 7,  29 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
