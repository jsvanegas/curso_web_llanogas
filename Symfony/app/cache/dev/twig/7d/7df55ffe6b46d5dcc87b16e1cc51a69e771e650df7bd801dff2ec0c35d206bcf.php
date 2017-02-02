<?php

/* FrontendBundle:Default:filltable.html.twig */
class __TwigTemplate_62dd84259fcb11102e387bfb201207e73b9c8d3e9eb45b8705ef86a6ed3ce695 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontendBundle:Default:filltable.html.twig", 1);
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
\t<table id=\"tablaBasica\" class=\"tabla\"></table>


";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "\t\t
\t<script>

\t\t/******EJEMPLO DE TABLA BÁSICA******/
\t\tvar formatoTabla = {
\t\t\tthead:[
\t\t\t\t{id:'thNombre', text:'Nombre', refer:'nombre', type:'text'},
\t\t\t\t{id:'thCorreo', text:'Correo', refer:'correo', type:'text'}
\t\t\t]
\t\t};

\t\tvar tbl = null;
\t\t__cnn.ajax({
\t\t\turl:'http://localhost/curso/symfony/web/app_dev.php/achagua/consultar',
\t\t\tcompletado:function(data){
\t\t\t\tfillTable('tablaBasica', 'formatoTabla', data.datos, 'Tabla Básica');
\t\t\t}
\t\t});
\t\t/******EJEMPLO DE TABLA BÁSICA******/


\t</script>
\t
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:filltable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 31,  67 => 30,  59 => 21,  56 => 20,  50 => 15,  47 => 14,  41 => 9,  38 => 8,  32 => 5,  11 => 1,);
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
/* 	<table id="tablaBasica" class="tabla"></table>*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* {% block javascripts %}*/
/* 		*/
/* 	<script>*/
/* */
/* 		/******EJEMPLO DE TABLA BÁSICA******//* */
/* 		var formatoTabla = {*/
/* 			thead:[*/
/* 				{id:'thNombre', text:'Nombre', refer:'nombre', type:'text'},*/
/* 				{id:'thCorreo', text:'Correo', refer:'correo', type:'text'}*/
/* 			]*/
/* 		};*/
/* */
/* 		var tbl = null;*/
/* 		__cnn.ajax({*/
/* 			url:'http://localhost/curso/symfony/web/app_dev.php/achagua/consultar',*/
/* 			completado:function(data){*/
/* 				fillTable('tablaBasica', 'formatoTabla', data.datos, 'Tabla Básica');*/
/* 			}*/
/* 		});*/
/* 		/******EJEMPLO DE TABLA BÁSICA******//* */
/* */
/* */
/* 	</script>*/
/* 	*/
/* {% endblock %}*/
