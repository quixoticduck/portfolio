<?php

/* forms/fields/blueprint/blueprint.html.twig */
class __TwigTemplate_206323af54494e55b972c0b337f94744ea924cc7d87b3aca1b1cd2a7960bd283 extends Twig_Template
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
        echo "<input
    data-grav-field=\"hidden\"
    data-grav-disabled=\"false\"
    type=\"hidden\"
    class=\"input\"
    ";
        // line 6
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
            echo "disabled=\"disabled\"";
        }
        // line 7
        echo "    name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
        echo "\"
    value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blueprints"]) ? $context["blueprints"] : null), "name", array()), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "forms/fields/blueprint/blueprint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <input*/
/*     data-grav-field="hidden"*/
/*     data-grav-disabled="false"*/
/*     type="hidden"*/
/*     class="input"*/
/*     {% if field.disabled or isDisabledToggleable %}disabled="disabled"{% endif %}*/
/*     name="{{ (scope ~ field.name)|fieldName }}"*/
/*     value="{{ blueprints.name }}" />*/
/* */
