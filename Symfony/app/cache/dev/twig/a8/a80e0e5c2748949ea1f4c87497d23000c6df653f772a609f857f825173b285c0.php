<?php

/* FrontendBundle:Default:pagina_ejemplo.html.twig */
class __TwigTemplate_21142c048bad1a5aaaac12a184bea496d3d4e6017cebe97a17294608d5d464a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontendBundle:Default:pagina_ejemplo.html.twig", 1);
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
        echo "Página de ejemplo";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "\t<!-- El bloque stylesheets se ubica al final de los estilos del archivo base, para agregar estilos de página-->

";
    }

    // line 14
    public function block_titulo($context, array $blocks = array())
    {
        // line 15
        echo "\t<!-- este bloque determina el subtítulo de la página -->
\tPágina en Blanco
";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "\t<!-- En este bloque va todo el contenido de la página, todos los formularios -->

";
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        // line 29
        echo "\t<!-- El bloque javascripts al final, permite agregar nuevos scripts que se ejecutan cuando se termina de correr la página -->
\t<!-- Ejemplo de cómo se debe invocar un script -->
\t<!--
\t\t<script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/NOMBRE_BUNDLE/UBICACION_ARCHIVO_JS"), "html", null, true);
        echo "\"></script>
\t-->
\t
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:pagina_ejemplo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 32,  68 => 29,  65 => 28,  59 => 21,  56 => 20,  50 => 15,  47 => 14,  41 => 9,  38 => 8,  32 => 5,  11 => 1,);
    }
}
/* {% extends  "base.html.twig" %}*/
/* */
/* */
/* */
/* {% block title %}Página de ejemplo{% endblock %}*/
/* */
/* */
/* {% block stylesheets %}*/
/* 	<!-- El bloque stylesheets se ubica al final de los estilos del archivo base, para agregar estilos de página-->*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% block titulo %}*/
/* 	<!-- este bloque determina el subtítulo de la página -->*/
/* 	Página en Blanco*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* 	<!-- En este bloque va todo el contenido de la página, todos los formularios -->*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* {% block javascripts %}*/
/* 	<!-- El bloque javascripts al final, permite agregar nuevos scripts que se ejecutan cuando se termina de correr la página -->*/
/* 	<!-- Ejemplo de cómo se debe invocar un script -->*/
/* 	<!--*/
/* 		<script type="text/javascript" src="{{asset('bundles/NOMBRE_BUNDLE/UBICACION_ARCHIVO_JS')}}"></script>*/
/* 	-->*/
/* 	*/
/* {% endblock %}*/
