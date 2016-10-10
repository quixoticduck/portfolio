<?php

/* themes.html.twig */
class __TwigTemplate_acf6ee4d53c23021cdb9826fb7155710f366a35693a1044df5f8d158f3506811 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "themes.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) {
            // line 4
            $context["installing"] = (is_string($__internal_13d9c16ac135d4fa98b74b5b09c150d5fbc7c618fe00aca29a5ff0f690d677a7 = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array())) && is_string($__internal_bb851b19922592c9523dcbab587a4db928d0e7b6c90e5927aadab8ac24620240 = "install") && ('' === $__internal_bb851b19922592c9523dcbab587a4db928d0e7b6c90e5927aadab8ac24620240 || 0 === strpos($__internal_13d9c16ac135d4fa98b74b5b09c150d5fbc7c618fe00aca29a5ff0f690d677a7, $__internal_bb851b19922592c9523dcbab587a4db928d0e7b6c90e5927aadab8ac24620240)));
            // line 6
            if ((isset($context["installing"]) ? $context["installing"] : null)) {
                // line 7
                $context["title"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEMES");
            } else {
                // line 9
                $context["installed"] = true;
                // line 12
                $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "themes", array(0 => true), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
                // line 13
                if ( !(isset($context["package"]) ? $context["package"] : null)) {
                    // line 14
                    $context["package"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "themes", array(0 => false), "method"), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()), array(), "array");
                    // line 15
                    $context["installed"] = false;
                }
                // line 18
                $context["theme"] = $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "toArray", array(), "method");
                // line 19
                $context["title"] = (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME") . ": ") . twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array())));
            }
        } else {
            // line 22
            $context["title"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEMES");
        }
        // line 25
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 27
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
        // line 28
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        // line 32
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    // line 36
    public function block_titlebar($context, array $blocks = array())
    {
        // line 37
        echo "    ";
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 38
            echo "        <div class=\"button-bar\">
        ";
            // line 39
            if ((isset($context["installing"]) ? $context["installing"] : null)) {
                // line 40
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/themes\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 42
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
                echo "/\"><i class=\"fa fa-reply\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
                echo "</a>
            <a class=\"button\" href=\"";
                // line 43
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/themes/install\"><i class=\"fa fa-plus\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ADD"), "html", null, true);
                echo "</a>
            ";
                // line 44
                if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
                    // line 45
                    echo "                <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHECK_FOR_UPDATES"), "html", null, true);
                    echo "</button>
            ";
                }
                // line 47
                echo "        ";
            }
            // line 48
            echo "        </div>
        <h1><i class=\"fa fa-fw fa-tint\"></i> ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEMES"), "html", null, true);
            echo "</h1>
    ";
        } else {
            // line 51
            echo "        ";
            if ((isset($context["installed"]) ? $context["installed"] : null)) {
                // line 52
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 53
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/themes\"><i class=\"fa fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_THEMES"), "html", null, true);
                echo "</a>
            <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
                echo "</button>
        </div>
        ";
            } else {
                // line 57
                echo "        <div class=\"button-bar\">
            <a class=\"button\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/themes/install\"><i class=\"fa fa-arrow-left\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK_TO_THEMES"), "html", null, true);
                echo "</a>
        </div>
        ";
            }
            // line 61
            echo "        <h1><i class=\"fa fa-fw fa-tint\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.THEME"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "name", array()));
            echo "</h1>
    ";
        }
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        // line 66
        echo "
    <div class=\"gpm gpm-themes\">

        ";
        // line 69
        $this->loadTemplate("partials/messages.html.twig", "themes.html.twig", 69)->display($context);
        // line 70
        echo "
        ";
        // line 71
        if (( !$this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "route", array()) || (isset($context["installing"]) ? $context["installing"] : null))) {
            // line 72
            echo "            ";
            $this->loadTemplate("partials/themes-list.html.twig", "themes.html.twig", 72)->display($context);
            // line 73
            echo "        ";
        } else {
            // line 74
            echo "            ";
            $this->loadTemplate("partials/themes-details.html.twig", "themes.html.twig", 74)->display($context);
            // line 75
            echo "        ";
        }
        // line 76
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "themes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 76,  201 => 75,  198 => 74,  195 => 73,  192 => 72,  190 => 71,  187 => 70,  185 => 69,  180 => 66,  177 => 65,  167 => 61,  159 => 58,  156 => 57,  150 => 54,  144 => 53,  141 => 52,  138 => 51,  133 => 49,  130 => 48,  127 => 47,  121 => 45,  119 => 44,  113 => 43,  106 => 42,  98 => 40,  96 => 39,  93 => 38,  90 => 37,  87 => 36,  80 => 32,  77 => 31,  70 => 28,  67 => 27,  64 => 26,  60 => 1,  57 => 25,  54 => 22,  50 => 19,  48 => 18,  45 => 15,  43 => 14,  41 => 13,  39 => 12,  37 => 9,  34 => 7,  32 => 6,  30 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% if admin.route %}*/
/*     {% set installing = admin.route starts with 'install' %}*/
/* */
/*     {% if installing %}*/
/*         {% set title = "PLUGIN_ADMIN.THEMES"|tu %}*/
/*     {% else %}*/
/*         {% set installed = true %}*/
/* */
/*         {# Try installed packages first, then remote #}*/
/*         {% set package = admin.themes(true)[admin.route] %}*/
/*         {% if (not package) %}*/
/*             {% set package = admin.themes(false)[admin.route] %}*/
/*             {% set installed = false %}*/
/*         {% endif %}*/
/* */
/*         {% set theme = package.toArray() %}*/
/*         {% set title = "PLUGIN_ADMIN.THEME"|tu ~ ": " ~ theme.name|e %}*/
/*     {% endif %}*/
/* {% else %}*/
/*     {% set title = "PLUGIN_ADMIN.THEMES"|tu %}*/
/* {% endif %}*/
/* */
/* {% if admin.route or installing %}*/
/*     {% block stylesheets %}*/
/*         {% do assets.addCss(theme_url~'/css/codemirror/codemirror.css') %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* */
/*     {% block javascripts %}*/
/*         {{ parent() }}*/
/*     {% endblock %}*/
/* {% endif %}*/
/* */
/* {% block titlebar %}*/
/*     {% if not admin.route or installing %}*/
/*         <div class="button-bar">*/
/*         {% if (installing) %}*/
/*             <a class="button" href="{{ base_url_relative }}/themes"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*         {% else %}*/
/*             <a class="button" href="{{ base_url }}/"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*             <a class="button" href="{{ base_url_relative }}/themes/install"><i class="fa fa-plus"></i> {{ "PLUGIN_ADMIN.ADD"|tu }}</a>*/
/*             {% if authorize(['admin.maintenance', 'admin.super']) %}*/
/*                 <button data-gpm-checkupdates="" class="button"><i class="fa fa-refresh"></i> {{ "PLUGIN_ADMIN.CHECK_FOR_UPDATES"|tu }}</button>*/
/*             {% endif %}*/
/*         {% endif %}*/
/*         </div>*/
/*         <h1><i class="fa fa-fw fa-tint"></i> {{ "PLUGIN_ADMIN.THEMES"|tu }}</h1>*/
/*     {% else %}*/
/*         {% if (installed) %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url_relative }}/themes"><i class="fa fa-arrow-left"></i> {{ "PLUGIN_ADMIN.BACK_TO_THEMES"|tu }}</a>*/
/*             <button class="button" type="submit" name="task" value="save" form="blueprints"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="button-bar">*/
/*             <a class="button" href="{{ base_url_relative }}/themes/install"><i class="fa fa-arrow-left"></i> {{ "PLUGIN_ADMIN.BACK_TO_THEMES"|tu }}</a>*/
/*         </div>*/
/*         {% endif %}*/
/*         <h1><i class="fa fa-fw fa-tint"></i> {{ "PLUGIN_ADMIN.THEME"|tu }}: {{ theme.name|e }}</h1>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="gpm gpm-themes">*/
/* */
/*         {% include 'partials/messages.html.twig' %}*/
/* */
/*         {% if not admin.route or installing %}*/
/*             {%  include 'partials/themes-list.html.twig' %}*/
/*         {% else %}*/
/*             {% include 'partials/themes-details.html.twig' %}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
