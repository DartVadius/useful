<?php

/* addComment.tpl */
class __TwigTemplate_9cc0afe45f92d5703505f95c809bafc9c7687224c14a457f0ba3d6672cee0d8f extends Twig_Template
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
        echo "<div id=\"add-review\">
    <h2>Add new comment</h2>
    <form action=\"\" method=\"POST\">
        <div class=\"form-group\">
            <label for=\"username\">Name</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"name\" name=\"username\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "login", array()), "html", null, true);
        echo "\">
        </div>
        <div class=\"form-group\">
            <label for=\"content\">Content</label>
            <textarea class=\"form-control\" id=\"content\" placeholder=\"Enter text\" name=\"content\"></textarea>
        </div>
        <div class=\"form-group\">
            <button class=\"btn btn-primary\">Submit</button>
        </div>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "addComment.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
