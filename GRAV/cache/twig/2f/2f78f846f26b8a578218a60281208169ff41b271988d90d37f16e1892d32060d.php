<?php

/* forms/fields/markdown/markdown.html.twig */
class __TwigTemplate_9cba1b37af8aacce1d1eab5db5ca04cc7ed8caf1cc22a78e9f996ad8c464f8c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("forms/fields/editor/editor.html.twig", "forms/fields/markdown/markdown.html.twig", 3);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/fields/editor/editor.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["codemirrorOptions"] = twig_array_merge(array("mode" => "gfm", "ignore" => array()), (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "codemirror", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "codemirror", array()), array())) : (array())));
        // line 7
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "showPreview", array())) {
            // line 8
            $context["codemirrorOptions"] = twig_array_merge((isset($context["codemirrorOptions"]) ? $context["codemirrorOptions"] : null), array("ignore" => array()));
        }
        // line 3
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "forms/fields/markdown/markdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 8,  26 => 7,  24 => 4,  11 => 3,);
    }
}
/* {# Deprecated field. Alias to editor/editor.html.twig #}*/
/* */
/* {% extends "forms/fields/editor/editor.html.twig" %}*/
/* {% set codemirrorOptions = {'mode': 'gfm', 'ignore': []}|merge(field.codemirror|default({})) %}*/
/* */
/* {# backward compatibility #}*/
/* {% if field.showPreview %}*/
/*     {% set codemirrorOptions = codemirrorOptions|merge({'ignore': []}) %}*/
/* {% endif %}*/
/* {# end backward compatibility #}*/
/* */
