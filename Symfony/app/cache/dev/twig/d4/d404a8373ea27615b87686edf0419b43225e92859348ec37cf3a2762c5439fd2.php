<?php

/* FrontendBundle:Default:apptable.html.twig */
class __TwigTemplate_94184b0a647b3cf4596f25536cf69d77df9e1c459b48774d414b9f708bdbf15e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "FrontendBundle:Default:apptable.html.twig", 1);
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
\t\tvar columnas = [
\t\t\t{text:'Nombre', headers:'thNombre', data:'nombre'},
\t\t\t{text:'Correo', headers:'thCorreo', data:'correo'}
\t\t];

\t\tvar config = {
\t\t\ttitle: 'Usuarios',
            pagination: true,
            columns: columnas,
            linesPageRange: [10, 20, 30],
            lg: lenguajeTabla\t\t
        };

\t\tvar tbl = null;
\t\t__cnn.ajax({
\t\t\turl:'http://localhost/curso/symfony/web/app_dev.php/achagua/consultar',
\t\t\tcompletado:function(data){
\t\t\t\tnew Apptable('#tablaBasica', config, data.datos);
\t\t\t}
\t\t});
\t\t/******EJEMPLO DE TABLA BÁSICA******/


\t</script>
\t
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:apptable.html.twig";
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
/* 		var columnas = [*/
/* 			{text:'Nombre', headers:'thNombre', data:'nombre'},*/
/* 			{text:'Correo', headers:'thCorreo', data:'correo'}*/
/* 		];*/
/* */
/* 		var config = {*/
/* 			title: 'Usuarios',*/
/*             pagination: true,*/
/*             columns: columnas,*/
/*             linesPageRange: [10, 20, 30],*/
/*             lg: lenguajeTabla		*/
/*         };*/
/* */
/* 		var tbl = null;*/
/* 		__cnn.ajax({*/
/* 			url:'http://localhost/curso/symfony/web/app_dev.php/achagua/consultar',*/
/* 			completado:function(data){*/
/* 				new Apptable('#tablaBasica', config, data.datos);*/
/* 			}*/
/* 		});*/
/* 		/******EJEMPLO DE TABLA BÁSICA******//* */
/* */
/* */
/* 	</script>*/
/* 	*/
/* {% endblock %}*/
