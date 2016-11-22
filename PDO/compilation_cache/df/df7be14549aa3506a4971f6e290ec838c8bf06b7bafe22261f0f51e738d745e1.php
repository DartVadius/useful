<?php

/* product.tpl */
class __TwigTemplate_7480c608694be4689fa131abbe3e0a69d195baca8d49090c3137351739f4b8ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl", "product.tpl", 1);
        $this->blocks = array(
            'product' => array($this, 'block_product'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.tpl";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_product($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"row\">
    <div class=\"col-md-9\">
        ";
        // line 5
        $this->loadTemplate("galery.tpl", "product.tpl", 5)->display($context);
        // line 6
        echo "        <div>
            <ul class=\"nav nav-tabs\" role=\"tablist\">
                <li class=\"active\"><a href=\"#description\" aria-controls=\"description\" role=\"tab\" data-toggle=\"tab\">Description</a></li>
                <li><a href=\"#reviews\" aria-controls=\"reviews\" role=\"tab\" data-toggle=\"tab\">Comments (";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["numComments"]) ? $context["numComments"] : null), "html", null, true);
        echo ")</a></li>
            </ul>
            <div class=\"tab-content\">
                <div role=\"tabpanel\" class=\"tab-pane active\" id=\"description\">
                 <p>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "description", array()), "html", null, true);
        echo "</p>
                </div>
                <div role=\"tabpanel\" class=\"tab-pane\" id=\"reviews\">
                    ";
        // line 16
        $this->loadTemplate("comments.tpl", "product.tpl", 16)->display($context);
        // line 17
        echo "                    ";
        $this->loadTemplate("addComment.tpl", "product.tpl", 17)->display($context);
        // line 18
        echo "                </div>
            </div>
        </div>
    </div>
    <div class=\"col-md-3\">
        <button type=\"button\" class=\"btn btn-default\" aria-label=\"Left Align\">
            <span class=\"glyphicon glyphicon glyphicon-heart\" aria-hidden=\"true\"></span>
        </button>
        <button type=\"button\" class=\"btn btn-default\" aria-label=\"Left Align\">
            <span class=\"glyphicon glyphicon glyphicon-transfer\" aria-hidden=\"true\"></span>
        </button>
        ";
        // line 29
        $this->loadTemplate("productInfo.tpl", "product.tpl", 29)->display($context);
        // line 30
        echo "        <br>
        ";
        // line 31
        $this->loadTemplate("buyProduct.tpl", "product.tpl", 31)->display($context);
        // line 32
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 33
            echo "            <span class=\"glyphicon glyphicon-star-empty\" aria-hidden=\"true\"></span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        <span>0 voted</span>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "product.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 35,  85 => 33,  80 => 32,  78 => 31,  75 => 30,  73 => 29,  60 => 18,  57 => 17,  55 => 16,  49 => 13,  42 => 9,  37 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
