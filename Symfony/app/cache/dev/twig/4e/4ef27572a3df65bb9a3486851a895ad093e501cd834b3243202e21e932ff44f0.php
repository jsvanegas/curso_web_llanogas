<?php

/* base.html.twig */
class __TwigTemplate_a5e47353eedc87dd0cfb0736ebf1d5a094e0666aaa1b02ebf148dce96e8f8b8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'titulo' => array($this, 'block_titulo'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/css/estilo.layout.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/css/estilo.ui.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/css/Apptable.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/css/override_apptable.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/app.prototypes.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/jquery-3.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/jquery.plugins.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/jquery-ui-1.10.4.custom.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/ui/jquery.ui.core.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/ui/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/ui/jquery.ui.datepicker.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/ui/jquery.datetimepicker.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/maskedinput.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/mustache.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/ui/jquery.ui.tabs.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/ui/jquery.ui.autocomplete.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/EventTarget.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/Apptable.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/Appload.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/app.funciones.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/app.global.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/app.ui.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/js/lib/app.tabla.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">

            var esAppload = {
                versionError: 'Appload.js no es compatible con esta versión del navegador.',
                labelInput: 'Seleccionar archivos',
                fileTypesErrorDeclaration: 'Los tipos de archivos deben ser declarados de tipo String o Array. Definición de tipo indefinida',
                removeAllFilesBtn: 'Remover todos los archivos',
                uploadAllFilesBtn: 'Subir todos los archivos',
                singleUploadBtn: 'Subir este archivo',
                singleDiscardBtn: 'Descartar este archivo',
                singleDownloadBtn: 'Descargar este archivo',
                singleDeleteBtn: 'Borrar este archivo del servidor',
                fileNotExists: 'El archivo seleccionado no existe o está corrupto',
                notEspecifiedURL: 'Debe especificar una URL',
                errorUploadingFile: 'Ocurrió un problema al subir los archivos',
                uploading: 'Cargando...',
                fileTypeError: 'El archivo no se pudo subir, error de tipo, ',
                mustSelectFile: 'Debe seleccionar al menos un archivo',
                uploadComplete: 'Los archivos se han subido correctamente',
                filesNotLoaded: 'Hay <b>#</b> archivos que no se pueden cargar.<br />',
                allowedExtensions: 'Solo están permitidos archivos con extensión <b>#</b>.<br />',
                fileSizeExceeded: 'Los archivos no pueden exceder los <b>#Kb.</b><br>',
                summaryFileErrors: '<br>Estos son los archivos con errores:'
            };

            var lenguajeTabla = {//lenguaje
                linesPerPage: 'Líneas por página:',
                totalItems: 'Cantidad de Registros: #',
                currentPage: 'Página _# de #_ ',
                seachInputPlaceHolder: 'Buscar y presionar Enter',
                noFilteredDataMessage: 'No se encontraron resultados'
            };

            var __app = new App();
            var __cnn = new Cnn();
            var __dom = new Dom();
            window.onerror = __app.controlarErrorGeneral;
            window.onresize = __app.ajustarAnchoMenu;
            window.onscroll = __app.ajustarAnchoMenu;
        </script>


        

</head>
<body>

    <div id=\"divDialogoCargador\"></div>
    <div id=\"divCortinaModal\"></div>

    <div id=\"divCargador\" tabindex=\"0\">
        <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/frontend/img/cargando2.gif"), "html", null, true);
        echo "\" />
        <span>Cargando...</span>
        <input type=\"text\" id=\"txtTrampaFoco\" style=\"position: absolute; top:-10000px; opacity: 0;\">
    </div>

    <div id=\"divDialogo\">
    </div>

    <div id=\"contenedor\">
        <div id=\"divTitulo\">
            <h1 id=\"h1_base_titulo_app\">Ejemplos Symfony y Frontend</h1>
        </div>
        <div id=\"divAppContainer\" style=\"position:relative;\">

            <div id=\"menu\">
                <div  style=\"padding: 20px 10px;\">
                    <a href=\"ejemplo_blanco\">Página de Ejemplo en Blanco</a>    
                    <a href=\"index\">Página de Ejemplo con AJAX</a>
                    <a href=\"filltable\">Ejemplo Filltable</a>    
                    <a href=\"apptable\">Ejemplo Apptable</a>    
                </div>
            </div>


            <div id=\"divGeneral\">
                <div id=\"divBarraOcultarMenu\">
                    <button id=\"btnOcultarMenu\" data-visible=\"true\">
                        <i class=\"fa fa-chevron-left\"></i>
                    </button>
                </div>

                <h2>";
        // line 118
        $this->displayBlock('titulo', $context, $blocks);
        echo "</h2>
                <div id=\"divFormulario\">";
        // line 119
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
            </div>
            <hr class=\"limpiar\" />
        </div>
        <hr class=\"limpiar\" />
        <div id=\"piePagina\">
            <p>Curso Symfony y Frontend - Appfuture 2017</p>
        </div>
    </div>
    
    <script type=\"text/javascript\">
        (function (\$) {
            \$('#btnOcultarMenu').on('click', function () {
                \$(this).find('.fa').toggleClass('fa-chevron-left').toggleClass('fa-chevron-right');
                if (\$(this).attr('data-visible') === 'true') {
                    \$(this).attr('data-visible', false);
                    \$('#menu').hide();
                    __app.ajustarAnchoMenu();
                    return;
                }
                \$(this).attr('data-visible', true);
                \$('#menu').show();
                __app.ajustarAnchoMenu();
            });
            __app.ajustarAnchoMenu();
        })(jQuery);
    </script>
    ";
        // line 146
        $this->displayBlock('javascripts', $context, $blocks);
        echo " <!--Los JavaScrip se deja siempre al final para optimizar busqueda-->
</body>
</html>



";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 118
    public function block_titulo($context, array $blocks = array())
    {
    }

    // line 119
    public function block_body($context, array $blocks = array())
    {
    }

    // line 146
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 146,  288 => 119,  283 => 118,  278 => 14,  272 => 5,  261 => 146,  231 => 119,  227 => 118,  193 => 87,  138 => 35,  134 => 34,  130 => 33,  126 => 32,  121 => 30,  117 => 29,  113 => 28,  109 => 27,  105 => 26,  101 => 25,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  62 => 15,  60 => 14,  56 => 13,  52 => 12,  48 => 11,  44 => 10,  40 => 9,  34 => 6,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* */
/*     */
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/frontend/css/estilo.layout.css')}}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/frontend/css/estilo.ui.css')}}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/frontend/css/Apptable.css')}}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/frontend/css/override_apptable.css')}}" />*/
/*         <link rel="stylesheet" type="text/css" href="{{asset('bundles/frontend/css/font-awesome.min.css')}}" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*         */
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/app.prototypes.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/jquery-3.1.1.min.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/jquery.plugins.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/jquery-ui-1.10.4.custom.min.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/ui/jquery.ui.core.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/ui/jquery.ui.widget.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/ui/jquery.ui.datepicker.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/ui/jquery.datetimepicker.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/maskedinput.min.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/mustache.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/ui/jquery.ui.tabs.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/ui/jquery.ui.autocomplete.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/EventTarget.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/Apptable.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/Appload.js')}}"></script>*/
/* */
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/app.funciones.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/app.global.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/app.ui.js')}}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/frontend/js/lib/app.tabla.js')}}"></script>*/
/*         <script type="text/javascript">*/
/* */
/*             var esAppload = {*/
/*                 versionError: 'Appload.js no es compatible con esta versión del navegador.',*/
/*                 labelInput: 'Seleccionar archivos',*/
/*                 fileTypesErrorDeclaration: 'Los tipos de archivos deben ser declarados de tipo String o Array. Definición de tipo indefinida',*/
/*                 removeAllFilesBtn: 'Remover todos los archivos',*/
/*                 uploadAllFilesBtn: 'Subir todos los archivos',*/
/*                 singleUploadBtn: 'Subir este archivo',*/
/*                 singleDiscardBtn: 'Descartar este archivo',*/
/*                 singleDownloadBtn: 'Descargar este archivo',*/
/*                 singleDeleteBtn: 'Borrar este archivo del servidor',*/
/*                 fileNotExists: 'El archivo seleccionado no existe o está corrupto',*/
/*                 notEspecifiedURL: 'Debe especificar una URL',*/
/*                 errorUploadingFile: 'Ocurrió un problema al subir los archivos',*/
/*                 uploading: 'Cargando...',*/
/*                 fileTypeError: 'El archivo no se pudo subir, error de tipo, ',*/
/*                 mustSelectFile: 'Debe seleccionar al menos un archivo',*/
/*                 uploadComplete: 'Los archivos se han subido correctamente',*/
/*                 filesNotLoaded: 'Hay <b>#</b> archivos que no se pueden cargar.<br />',*/
/*                 allowedExtensions: 'Solo están permitidos archivos con extensión <b>#</b>.<br />',*/
/*                 fileSizeExceeded: 'Los archivos no pueden exceder los <b>#Kb.</b><br>',*/
/*                 summaryFileErrors: '<br>Estos son los archivos con errores:'*/
/*             };*/
/* */
/*             var lenguajeTabla = {//lenguaje*/
/*                 linesPerPage: 'Líneas por página:',*/
/*                 totalItems: 'Cantidad de Registros: #',*/
/*                 currentPage: 'Página _# de #_ ',*/
/*                 seachInputPlaceHolder: 'Buscar y presionar Enter',*/
/*                 noFilteredDataMessage: 'No se encontraron resultados'*/
/*             };*/
/* */
/*             var __app = new App();*/
/*             var __cnn = new Cnn();*/
/*             var __dom = new Dom();*/
/*             window.onerror = __app.controlarErrorGeneral;*/
/*             window.onresize = __app.ajustarAnchoMenu;*/
/*             window.onscroll = __app.ajustarAnchoMenu;*/
/*         </script>*/
/* */
/* */
/*         */
/* */
/* </head>*/
/* <body>*/
/* */
/*     <div id="divDialogoCargador"></div>*/
/*     <div id="divCortinaModal"></div>*/
/* */
/*     <div id="divCargador" tabindex="0">*/
/*         <img src="{{asset('bundles/frontend/img/cargando2.gif')}}" />*/
/*         <span>Cargando...</span>*/
/*         <input type="text" id="txtTrampaFoco" style="position: absolute; top:-10000px; opacity: 0;">*/
/*     </div>*/
/* */
/*     <div id="divDialogo">*/
/*     </div>*/
/* */
/*     <div id="contenedor">*/
/*         <div id="divTitulo">*/
/*             <h1 id="h1_base_titulo_app">Ejemplos Symfony y Frontend</h1>*/
/*         </div>*/
/*         <div id="divAppContainer" style="position:relative;">*/
/* */
/*             <div id="menu">*/
/*                 <div  style="padding: 20px 10px;">*/
/*                     <a href="ejemplo_blanco">Página de Ejemplo en Blanco</a>    */
/*                     <a href="index">Página de Ejemplo con AJAX</a>*/
/*                     <a href="filltable">Ejemplo Filltable</a>    */
/*                     <a href="apptable">Ejemplo Apptable</a>    */
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*             <div id="divGeneral">*/
/*                 <div id="divBarraOcultarMenu">*/
/*                     <button id="btnOcultarMenu" data-visible="true">*/
/*                         <i class="fa fa-chevron-left"></i>*/
/*                     </button>*/
/*                 </div>*/
/* */
/*                 <h2>{% block titulo %}{% endblock %}</h2>*/
/*                 <div id="divFormulario">{% block body %}{% endblock %}</div>*/
/*             </div>*/
/*             <hr class="limpiar" />*/
/*         </div>*/
/*         <hr class="limpiar" />*/
/*         <div id="piePagina">*/
/*             <p>Curso Symfony y Frontend - Appfuture 2017</p>*/
/*         </div>*/
/*     </div>*/
/*     */
/*     <script type="text/javascript">*/
/*         (function ($) {*/
/*             $('#btnOcultarMenu').on('click', function () {*/
/*                 $(this).find('.fa').toggleClass('fa-chevron-left').toggleClass('fa-chevron-right');*/
/*                 if ($(this).attr('data-visible') === 'true') {*/
/*                     $(this).attr('data-visible', false);*/
/*                     $('#menu').hide();*/
/*                     __app.ajustarAnchoMenu();*/
/*                     return;*/
/*                 }*/
/*                 $(this).attr('data-visible', true);*/
/*                 $('#menu').show();*/
/*                 __app.ajustarAnchoMenu();*/
/*             });*/
/*             __app.ajustarAnchoMenu();*/
/*         })(jQuery);*/
/*     </script>*/
/*     {% block javascripts %}{% endblock %} <!--Los JavaScrip se deja siempre al final para optimizar busqueda-->*/
/* </body>*/
/* </html>*/
/* */
/* */
/* */
/* */
