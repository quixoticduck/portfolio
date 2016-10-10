<?php

/* forms/fields/array/array.html.twig */
class __TwigTemplate_3cec923f1c8fb81636dbc3dffb3be13c9e7b41fbf323e784ce553283097b1deb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/array/array.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
            'input' => array($this, 'block_input'),
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
        echo "    data-grav-array-name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
        echo "\"
    data-grav-array-keyname=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_key", array()))), "html", null, true);
        echo "\"
    data-grav-array-valuename=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_value", array()))), "html", null, true);
        echo "\"
    ";
        // line 7
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
    }

    // line 38
    public function block_input($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $context["array_field"] = $this;
        // line 40
        echo "    <div data-grav-array-type=\"container\"";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value_only", array())) {
            echo " data-grav-array-mode=\"value_only\"";
        }
        echo ">
        ";
        // line 41
        if (twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null))) {
            // line 42
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["text"]) {
                // line 43
                if ( !twig_test_iterable($context["text"])) {
                    // line 44
                    echo "                    ";
                    echo $context["array_field"]->getrenderer($context["key"], $context["text"], (isset($context["field"]) ? $context["field"] : null), (isset($context["scope"]) ? $context["scope"] : null));
                    echo "
                ";
                } else {
                    // line 46
                    echo "                    ";
                    // line 47
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["text"]);
                    foreach ($context['_seq'] as $context["subkey"] => $context["subtext"]) {
                        // line 48
                        echo $context["array_field"]->getrenderer((($context["key"] . ":") . $context["subkey"]), $context["subtext"], (isset($context["field"]) ? $context["field"] : null), (isset($context["scope"]) ? $context["scope"] : null));
                        echo "
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['subkey'], $context['subtext'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "                ";
                }
                // line 51
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 54
            echo "            <div class=\"form-row\" data-grav-array-type=\"row\">
                <input
                    data-grav-array-type=\"key\"
                    type=\"text\"
                    ";
            // line 58
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                echo "disabled=\"disabled\"";
            }
            // line 59
            echo "                    placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_key", array()))), "html", null, true);
            echo "\" />
                <input
                    data-grav-array-type=\"value\"
                    type=\"text\"
                    name=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))), "html", null, true);
            echo "\"
                    ";
            // line 64
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                echo "disabled=\"disabled\"";
            }
            // line 65
            echo "                    placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_value", array()))), "html", null, true);
            echo "\" />
                <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
                <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
            </div>";
        }
        // line 70
        echo "    </div>
";
    }

    // line 10
    public function getrenderer($__key__ = null, $__text__ = null, $__field__ = null, $__scope__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "text" => $__text__,
            "field" => $__field__,
            "scope" => $__scope__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    <div class=\"form-row";
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value_only", array())) {
                echo " array-field-value_only";
            }
            echo "\"
         data-grav-array-type=\"row\">
        ";
            // line 13
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value_only", array()) != true)) {
                // line 14
                echo "            ";
                if ((((isset($context["key"]) ? $context["key"] : null) == "0") && ((isset($context["text"]) ? $context["text"] : null) == ""))) {
                    // line 15
                    echo "                ";
                    $context["key"] = "";
                    // line 16
                    echo "            ";
                }
                // line 17
                echo "
            <input
                data-grav-array-type=\"key\"
                type=\"text\" value=\"";
                // line 20
                echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
                echo "\"
                ";
                // line 21
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                    echo "disabled=\"disabled\"";
                }
                // line 22
                echo "                placeholder=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_key", array()))), "html", null, true);
                echo "\" />
        ";
            }
            // line 24
            echo "
        <input
            data-grav-array-type=\"value\"
            type=\"text\"
            name=\"";
            // line 28
            echo twig_escape_filter($this->env, ((($this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))) . "[") . (isset($context["key"]) ? $context["key"] : null)) . "]"), "html", null, true);
            echo "\"
            placeholder=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "placeholder_value", array()))), "html", null, true);
            echo "\"
            ";
            // line 30
            if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                echo "disabled=\"disabled\"";
            }
            // line 31
            echo "            value=";
            if (((isset($context["text"]) ? $context["text"] : null) == "true")) {
                echo "true";
            } elseif (((isset($context["text"]) ? $context["text"] : null) == "false")) {
                echo "false";
            } else {
                echo "\"";
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["text"]) ? $context["text"] : null), ", "));
                echo "\"";
            }
            echo " />

        <span data-grav-array-action=\"rem\" class=\"fa fa-minus\"></span>
        <span data-grav-array-action=\"add\" class=\"fa fa-plus\"></span>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/array/array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 31,  210 => 30,  206 => 29,  202 => 28,  196 => 24,  190 => 22,  186 => 21,  182 => 20,  177 => 17,  174 => 16,  171 => 15,  168 => 14,  166 => 13,  158 => 11,  143 => 10,  138 => 70,  130 => 65,  126 => 64,  122 => 63,  114 => 59,  110 => 58,  104 => 54,  97 => 51,  94 => 50,  86 => 48,  81 => 47,  79 => 46,  73 => 44,  71 => 43,  66 => 42,  64 => 41,  57 => 40,  54 => 39,  51 => 38,  45 => 7,  41 => 6,  37 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% block global_attributes %}*/
/*     data-grav-array-name="{{ (scope ~ field.name)|fieldName }}"*/
/*     data-grav-array-keyname="{{ field.placeholder_key|e|tu }}"*/
/*     data-grav-array-valuename="{{ field.placeholder_value|e|tu }}"*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% macro renderer(key, text, field, scope) %}*/
/*     <div class="form-row{% if field.value_only %} array-field-value_only{% endif %}"*/
/*          data-grav-array-type="row">*/
/*         {% if field.value_only != true %}*/
/*             {% if key == '0' and text == '' %}*/
/*                 {% set key = '' %}*/
/*             {% endif %}*/
/* */
/*             <input*/
/*                 data-grav-array-type="key"*/
/*                 type="text" value="{{ key }}"*/
/*                 {% if field.disabled or isDisabledToggleable %}disabled="disabled"{% endif %}*/
/*                 placeholder="{{ field.placeholder_key|e|tu }}" />*/
/*         {% endif %}*/
/* */
/*         <input*/
/*             data-grav-array-type="value"*/
/*             type="text"*/
/*             name="{{ ((scope ~ field.name)|fieldName) ~ '[' ~ key ~ ']' }}"*/
/*             placeholder="{{ field.placeholder_value|e|tu }}"*/
/*             {% if field.disabled or isDisabledToggleable %}disabled="disabled"{% endif %}*/
/*             value={% if text == 'true' %}true{% elseif text == 'false' %}false{% else %}"{{ text|join(', ')|e }}"{% endif %} />*/
/* */
/*         <span data-grav-array-action="rem" class="fa fa-minus"></span>*/
/*         <span data-grav-array-action="add" class="fa fa-plus"></span>*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {% block input %}*/
/*     {% import _self as array_field %}*/
/*     <div data-grav-array-type="container"{% if field.value_only %} data-grav-array-mode="value_only"{% endif %}>*/
/*         {% if value|length %}*/
/*             {% for key, text in value -%}*/
/*                 {% if text is not iterable %}*/
/*                     {{ array_field.renderer(key, text, field, scope) }}*/
/*                 {% else %}*/
/*                     {# Backward compatibility for nested arrays (metas) which are not supported anymore #}*/
/*                     {% for subkey, subtext in text -%}*/
/*                         {{ array_field.renderer(key ~ ':' ~ subkey, subtext, field, scope) }}*/
/*                     {% endfor %}*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/*         {%- else -%}*/
/*             {# Empty value, mock the entry field#}*/
/*             <div class="form-row" data-grav-array-type="row">*/
/*                 <input*/
/*                     data-grav-array-type="key"*/
/*                     type="text"*/
/*                     {% if field.disabled or isDisabledToggleable %}disabled="disabled"{% endif %}*/
/*                     placeholder="{{ field.placeholder_key|e|tu }}" />*/
/*                 <input*/
/*                     data-grav-array-type="value"*/
/*                     type="text"*/
/*                     name="{{ (scope ~ field.name)|fieldName }}"*/
/*                     {% if field.disabled or isDisabledToggleable %}disabled="disabled"{% endif %}*/
/*                     placeholder="{{ field.placeholder_value|e|tu }}" />*/
/*                 <span data-grav-array-action="rem" class="fa fa-minus"></span>*/
/*                 <span data-grav-array-action="add" class="fa fa-plus"></span>*/
/*             </div>*/
/*         {%- endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
