<?php

/* base.html */
class __TwigTemplate_b6e2b487829742fbc3ab83c47d5da58abac9dbfb60ed81f6ab4f7f8ef9b96947 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>        
        <title>BootsTrap</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <script src=\"js/jquery-3.1.1.min.js\" type=\"text/javascript\"></script>        
        <link rel=\"stylesheet\" href=\"css/bootstrap.css\">
        <script src=\"js/bootstrap.min.js\" type=\"text/javascript\"></script>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\">
        <script src=\"js/myJS.js\" type=\"text/javascript\"></script>
    </head>
    <body>
        <div class=\"container\">
            <div class=\"page-header\">
                ";
        // line 16
        $this->loadTemplate("header.html", "base.html", 16)->display($context);
        echo "                
            </div>
            <div class=\"row\">
                <div class=\"col-md-9\">
                    <img src=\"img/canon_eos_5d_1-228x228.jpg\" class=\"img-responsive center-block\">
                    <br>
                    <div class=\"row\">
                        <div class=\"col-md-2 col-xs-2\">
                            <a href=\"img/canon_eos_5d_2-500x500.jpg\" class=\"thumbnail\">
                                <img src=\"img/canon_eos_5d_2-500x500.jpg\" class=\"img-responsive\">                                    
                            </a>       
                        </div>
                        <div class=\"col-md-2 col-xs-2\">
                            <a href=\"img/canon_eos_5d_3-500x500.jpg\" class=\"thumbnail\">                                   
                                <img src=\"img/canon_eos_5d_3-500x500.jpg\" class=\"img-responsive\">
                            </a>
                        </div>
                    </div> 
                    <div>
                        <ul class=\"nav nav-tabs\" role=\"tablist\">
                            <li class=\"active\"><a href=\"#description\" aria-controls=\"description\" role=\"tab\" data-toggle=\"tab\">Description</a></li>
                            <li><a href=\"#reviews\" aria-controls=\"reviews\" role=\"tab\" data-toggle=\"tab\">Reviews (0)</a></li>                            
                        </ul>
                        <div class=\"tab-content\">
                            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"description\">
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div role=\"tabpanel\" class=\"tab-pane\" id=\"reviews\">
                                <div id=\"review-list\">
                                    No reviews
                                </div>
                                <div id=\"add-review\">
                                    <h2>Add new review</h2>
                                    <form action=\"\" method=\"POST\">
                                        <div class=\"form-group\">
                                            <label for=\"username\">Name</label>
                                            <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Name\" name=\"username\">
                                        </div>
                                        <div class=\"form-group\">
                                            <label for=\"content\">Content</label>
                                            <textarea class=\"form-control\" id=\"content\" placeholder=\"Enter text\" name=\"content\"></textarea>
                                        </div>
                                        <div class=\"form-group\">
                                            <button class=\"btn btn-primary\">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
                    <h2>Canon</h2>
                    <dl class=\"product-info\">
                        <dt>Manufacturer</dt>
                        <dd>Canon</dd>
                        <dt>Model</dt>
                        <dd>Product 3</dd>
                        <dt>Bonus points</dt>
                        <dd>200</dd>
                        <dt>Availability</dt>
                        <dd>Available</dd>
                    </dl>                    
                    <h2>800 \$</h2>
                    <br>
                    <h2>Available options</h2>
                    <form>                        
                        <div class=\"form-group\">
                            <h6>* Select</h6>
                            <select class=\"form-control\">
                                <option>---Choose---</option>
                                <option value=\"1\">Red</option>
                                <option value=\"2\">Blue</option>                                
                            </select><br>
                            <label for=\"order\">Amount</label>
                            <input type=\"text\" class=\"form-control\" id=\"order\" required value=\"1\">
                        </div>                        
                        <button type=\"submit\" class=\"btn btn-primary nav nav-tabs nav-justified\">Buy</button>                        
                    </form>
                    <span class=\"glyphicon glyphicon-star-empty\" aria-hidden=\"true\"></span>
                    <span class=\"glyphicon glyphicon-star-empty\" aria-hidden=\"true\"></span>
                    <span class=\"glyphicon glyphicon-star-empty\" aria-hidden=\"true\"></span>
                    <span class=\"glyphicon glyphicon-star-empty\" aria-hidden=\"true\"></span>
                    <span class=\"glyphicon glyphicon-star-empty\" aria-hidden=\"true\"></span>
                    <span>0 comments</span>
                </div>
            </div>
            <footer>
                
            </footer>
        </div>        
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 16,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
