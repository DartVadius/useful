<?php

/* login.tpl */
class __TwigTemplate_d65caff9ae93d340e52b65299b1bc935fafcb96987df7ef697ca486e461e215c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.tpl", "login.tpl", 1);
        $this->blocks = array(
            'login' => array($this, 'block_login'),
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
    public function block_login($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"page-header\">
    <div class=\"row\">
        <div class=\"col-md-3\">
            <form method=\"post\" action=\"index.php\" class=\"login\">
                <div class=\"form-group field\">
                    <label for=\"login\">Database </label>
                    <input type=\"text\" name=\"bd\" size=\"20\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "bd", array()), "html", null, true);
        echo "\" required/><br>
                    <label for=\"login\">Login </label>
                    <input type=\"text\" name=\"login\" size=\"20\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["session"]) ? $context["session"] : null), "log", array()), "html", null, true);
        echo "\" required/><br>
                    <label for=\"password\">Password </label>
                    <input type=\"password\" name=\"password\" size=\"20\"/><br>                    
                    <input type=\"submit\" value=\"Login\" class=\"btn btn-primary\"/>
                </div>
            </form>
        </div>
        <div class=\"col-md-9\">
            <div class=\"alert-warning\">";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        echo "</div>
        </div>        
    </div> 
</div>          
";
    }

    public function getTemplateName()
    {
        return "login.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 19,  44 => 11,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
