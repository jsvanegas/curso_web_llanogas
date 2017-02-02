<?php

/* FrontendBundle:Default:index.html.twig */
class __TwigTemplate_256be162aea37e8913a59256efe5d3e9390b26605cc82ceb3b6e01bb7e6a3a6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontendBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'titulo' => array($this, 'block_titulo'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Index";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "\t

";
    }

    // line 14
    public function block_titulo($context, array $blocks = array())
    {
        // line 15
        echo "\t

";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "\t
\t

";
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "\t\t
\t
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 30,  66 => 29,  59 => 21,  56 => 20,  50 => 15,  47 => 14,  41 => 9,  38 => 8,  32 => 5,  11 => 1,);
    }
}
/* {% extends  "base.html.twig" %}*/
/* */
/* */
/* */
/* {% block title %}Index{% endblock %}*/
/* */
/* */
/* {% block stylesheets %}*/
/* 	*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block titulo %}*/
/* 	*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* 	*/
/* 	*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* {% block javascripts %}*/
/* 		*/
/* 	*/
/* {% endblock %}*/
