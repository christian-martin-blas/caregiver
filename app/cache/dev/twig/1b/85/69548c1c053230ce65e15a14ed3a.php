<?php

/* AcmeAdminBundle:Admin:list.html.twig */
class __TwigTemplate_1b8569548c1c053230ce65e15a14ed3a extends Twig_Template
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
        echo "<style> 
#tabs1 { font: bold 7.5pt Verdana; } #tabs9 img { border: none; } #navcontainer { margin: 10px 0 0 30px; padding: 0; height: 20px; } #navcontainer ul { border: 0; margin: 0; padding: 0; list-style-type: none; text-align: center; } #navcontainer ul li { display: block; float: left; text-align: center; padding: 0; margin: 0; } #navcontainer ul li a { background: #fff; width: 78px; height: 18px; border-top: 1px solid #ddd; border-left: 1px solid #ddd; border-bottom: 1px solid #ddd; border-right: 1px solid #ddd; padding: 0; margin: 0 0 5px 0; color: #666; text-decoration: none; display: block; text-align: center; font: normal 10px/18px verdana; } #navcontainer ul li a:hover { color: #6659A7; background: #eeeeee; } #navcontainer a:active { background: #c60; color: #fff; } #navcontainer li#active a { background: #c60; border: 1px solid #c60; color: #fff; } 
</style> 
<div id=\"navcontainer\"> 
        <ul id=\"navlist\"> 
                <li><a href='";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profile"), "html", null, true);
        echo "'>    <span>Profile</span></a></li> 
                <li><a href='";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("change_password"), "html", null, true);
        echo "'>    <span>Change Password</span></a></li> 
                <li><a href='";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edit_profile"), "html", null, true);
        echo "'>       <span>Edit Profile</span></a></li> 
                <li><a href='";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register"), "html", null, true);
        echo "'>   <span>Register User</span></a></li> 
                <li><a href=\"#\">        <span>Link 6</span></a></li> 
                <li><a href=\"#\">        <span>Link 7</span></a></li> 
        </ul> 
</div>

<h1> <center> Index Page</center></h1> 

";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "esdeveniments"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 18
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_list"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "nom"), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "

<input type=\"button\" onclick=\" location.href='";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
        echo "' \" value=\"Logout\" name=\"boton\" /> ";
    }

    public function getTemplateName()
    {
        return "AcmeAdminBundle:Admin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  64 => 20,  53 => 18,  49 => 17,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
