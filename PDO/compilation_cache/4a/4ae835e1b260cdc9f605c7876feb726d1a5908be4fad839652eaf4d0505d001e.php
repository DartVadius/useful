<?php

/* addProduct.tpl */
class __TwigTemplate_106ed391a4689802d15c0f154f0ed59cac72b104894d799e8109d5e3e76f7edf extends Twig_Template
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
        echo "<h2>Available options</h2>
<form>
    <div class=\"form-group\">
        <h6>* Select</h6>
        <select class=\"form-control\">
            <option>---Choose---</option>
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "color", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            // line 8
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["color"], "html", null, true);
            echo "</option>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "        </select><br>
        <label for=\"order\">Amount</label>
        <input type=\"text\" class=\"form-control\" id=\"order\" required value=\"1\">
    </div>
    <button type=\"submit\" class=\"btn btn-primary nav nav-tabs nav-justified\">Buy</button>
</form>";
    }

    public function getTemplateName()
    {
        return "addProduct.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  44 => 8,  27 => 7,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
