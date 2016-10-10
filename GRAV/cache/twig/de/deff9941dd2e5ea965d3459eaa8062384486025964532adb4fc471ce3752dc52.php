<?php

/* forms/fields/selectize/selectize.html.twig */
class __TwigTemplate_54de64350823a898b69c57efd9d4c388a7e8657cdb9689667477f488f30c937e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/selectize/selectize.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
            'input_attributes' => array($this, 'block_input_attributes'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 4
        echo "    data-grav-selectize=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array(), "any", true, true)) ? (twig_array_merge($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array()), array("create" => true))) : (array("create" => true)))), "html_attr");
        echo "\"
    ";
        // line 5
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 9
        echo "    type=\"text\"
    ";
        // line 10
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "forms/fields/selectize/selectize.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  46 => 9,  43 => 8,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% block global_attributes %}*/
/*     data-grav-selectize="{{ (field.selectize is defined ? field.selectize|merge({'create': true}) : {'create': true})|json_encode()|e('html_attr') }}"*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block input_attributes %}*/
/*     type="text"*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
