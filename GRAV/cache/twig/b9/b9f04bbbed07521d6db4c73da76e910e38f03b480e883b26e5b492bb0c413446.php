<?php

/* error.html.twig */
class __TwigTemplate_7818f39702f0c8adbade4f29acb78af7a91e5c1af0c905d08e47ec9e7d9166f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div id=\"error\">
\t\t<div>
\t\t\t<h1>";
        // line 6
        echo $this->env->getExtension('GravTwigExtension')->translate("ERROR");
        echo " ";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h1>
\t\t\t<p>
\t\t\t\t";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
\t\t\t</p>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/* 	<div id="error">*/
/* 		<div>*/
/* 			<h1>{{ 'ERROR'|t }} {{ page.header.http_response_code }}</h1>*/
/* 			<p>*/
/* 				{{ page.content }}*/
/* 			</p>*/
/* 		</div>*/
/* 	</div>*/
/* {% endblock %}*/
/* */
