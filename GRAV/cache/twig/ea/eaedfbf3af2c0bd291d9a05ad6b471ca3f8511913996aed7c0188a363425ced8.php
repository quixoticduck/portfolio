<?php

/* config.html.twig */
class __TwigTemplate_18a1044d091e766bc84394709e9635f502656e4e9614d7e772ed2b3b8973db5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "config.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'titlebar' => array($this, 'block_titlebar'),
            'content_top' => array($this, 'block_content_top'),
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
        $context["config_slug"] = $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "basename", array());
        // line 4
        $context["isInfo"] = ((isset($context["config_slug"]) ? $context["config_slug"] : null) == "info");
        // line 6
        $context["title"] = (($this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION") . ": ") . $this->env->getExtension('AdminTwigExtension')->tuFilter(("PLUGIN_ADMIN." . twig_upper_filter($this->env, (isset($context["config_slug"]) ? $context["config_slug"] : null)))));
        // line 8
        if ( !(isset($context["isInfo"]) ? $context["isInfo"] : null)) {
            // line 9
            $context["data"] = $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => ("config/" . (isset($context["config_slug"]) ? $context["config_slug"] : null))), "method");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => ((isset($context["theme_url"]) ? $context["theme_url"] : null) . "/css/codemirror/codemirror.css")), "method");
        // line 14
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    // line 21
    public function block_titlebar($context, array $blocks = array())
    {
        // line 22
        echo "    <div class=\"button-bar\">
        <a class=\"button\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["base_url"]) ? $context["base_url"] : null), "html", null, true);
        echo "\"><i class=\"fa fa-reply\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.BACK"), "html", null, true);
        echo "</a>
        <button class=\"button\" type=\"submit\" name=\"task\" value=\"save\" form=\"blueprints\"><i class=\"fa fa-check\"></i> ";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE"), "html", null, true);
        echo "</button>
    </div>
    <h1><i class=\"fa fa-fw fa-wrench\"></i> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONFIGURATION"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter(("PLUGIN_ADMIN." . twig_upper_filter($this->env, (isset($context["config_slug"]) ? $context["config_slug"] : null)))), "html", null, true);
        echo "</h1>
";
    }

    // line 29
    public function block_content_top($context, array $blocks = array())
    {
        // line 30
        echo "    <div class=\"alert notice\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SAVE_LOCATION"), "html", null, true);
        echo ": <b>";
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "file", array()), "filename", array()), array((isset($context["base_path"]) ? $context["base_path"] : null) => "")), "html", null, true);
        echo "</b></div>
    <ul class=\"tab-bar\">

        ";
        // line 33
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.configuration_system", 1 => "admin.super"))) {
            // line 34
            echo "        <li ";
            if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "system")) {
                echo "class=\"active\"";
            }
            echo ">
            ";
            // line 35
            if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "system")) {
                echo "<span>";
            } else {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/config/system\">";
            }
            // line 36
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SYSTEM"), "html", null, true);
            echo "
            ";
            // line 37
            if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "system")) {
                echo "</span>";
            } else {
                echo "</a>";
            }
            // line 38
            echo "        </li>
        ";
        }
        // line 40
        echo "
        ";
        // line 41
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.configuration_site", 1 => "admin.super"))) {
            // line 42
            echo "        <li ";
            if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "site")) {
                echo "class=\"active\"";
            }
            echo ">
            ";
            // line 43
            if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "site")) {
                echo "<span>";
            } else {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/config/site\">";
            }
            // line 44
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.SITE"), "html", null, true);
            echo "
            ";
            // line 45
            if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "site")) {
                echo "</span>";
            } else {
                echo "</a>";
            }
            // line 46
            echo "        </li>
        ";
        }
        // line 48
        echo "
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "configurations", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["configuration"]) {
            // line 50
            echo "            ";
            if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => ("admin.configuration_" . $context["configuration"]), 1 => "admin.super"))) {
                // line 51
                echo "                ";
                $context["current_blueprints"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "data", array(0 => ("config/" . $context["configuration"])), "method"), "blueprints", array()), "toArray", array(), "method");
                // line 52
                echo "                ";
                if ((((($context["configuration"] != "system") && ($context["configuration"] != "site")) &&  !$this->getAttribute($this->getAttribute((isset($context["current_blueprints"]) ? $context["current_blueprints"] : null), "form", array()), "hidden", array())) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["current_blueprints"]) ? $context["current_blueprints"] : null), "form", array()), "fields", array())))) {
                    // line 53
                    echo "                    <li ";
                    if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == $context["configuration"])) {
                        echo "class=\"active\"";
                    }
                    echo ">
                        ";
                    // line 54
                    if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == $context["configuration"])) {
                        echo "<span>";
                    } else {
                        echo "<a href=\"";
                        echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                        echo "/config/";
                        echo twig_escape_filter($this->env, $context["configuration"], "html", null, true);
                        echo "\">";
                    }
                    // line 55
                    echo "                        ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter($context["configuration"])), "html", null, true);
                    echo "
                        ";
                    // line 56
                    if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == $context["configuration"])) {
                        echo "</span>";
                    } else {
                        echo "</a>";
                    }
                    // line 57
                    echo "                    </li>
                ";
                }
                // line 59
                echo "            ";
            }
            // line 60
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['configuration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "
        ";
        // line 62
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.configuration_info", 1 => "admin.super"))) {
            // line 63
            echo "        <li ";
            if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "info")) {
                echo "class=\"active\"";
            }
            echo ">
            ";
            // line 64
            if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "info")) {
                echo "<span>";
            } else {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null), "html", null, true);
                echo "/config/info\">";
            }
            // line 65
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INFO"), "html", null, true);
            echo "
            ";
            // line 66
            if (((isset($context["config_slug"]) ? $context["config_slug"] : null) == "info")) {
                echo "</span>";
            } else {
                echo "</a>";
            }
            // line 67
            echo "        </li>
        ";
        }
        // line 69
        echo "
    </ul>
";
    }

    // line 73
    public function block_content($context, array $blocks = array())
    {
        // line 74
        echo "    ";
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => ("admin.configuration_" . (isset($context["config_slug"]) ? $context["config_slug"] : null)), 1 => "admin.super"))) {
            // line 75
            echo "        ";
            if ((isset($context["isInfo"]) ? $context["isInfo"] : null)) {
                // line 76
                echo "            <div id=\"phpinfo\">
                ";
                // line 77
                echo $this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "phpinfo", array());
                echo "
            </div>
        ";
            } else {
                // line 80
                echo "            ";
                $this->loadTemplate("partials/blueprints.html.twig", "config.html.twig", 80)->display(array_merge($context, array("blueprints" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "blueprints", array()), "data" => (isset($context["data"]) ? $context["data"] : null))));
                // line 81
                echo "        ";
            }
            // line 82
            echo "    ";
        }
        // line 83
        echo "    ";
        $this->loadTemplate("partials/modal-changes-detected.html.twig", "config.html.twig", 83)->display($context);
    }

    public function getTemplateName()
    {
        return "config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 83,  293 => 82,  290 => 81,  287 => 80,  281 => 77,  278 => 76,  275 => 75,  272 => 74,  269 => 73,  263 => 69,  259 => 67,  253 => 66,  248 => 65,  240 => 64,  233 => 63,  231 => 62,  228 => 61,  222 => 60,  219 => 59,  215 => 57,  209 => 56,  204 => 55,  194 => 54,  187 => 53,  184 => 52,  181 => 51,  178 => 50,  174 => 49,  171 => 48,  167 => 46,  161 => 45,  156 => 44,  148 => 43,  141 => 42,  139 => 41,  136 => 40,  132 => 38,  126 => 37,  121 => 36,  113 => 35,  106 => 34,  104 => 33,  95 => 30,  92 => 29,  84 => 26,  79 => 24,  73 => 23,  70 => 22,  67 => 21,  60 => 18,  57 => 17,  50 => 14,  47 => 13,  44 => 12,  40 => 1,  37 => 9,  35 => 8,  33 => 6,  31 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% set config_slug = uri.basename %}*/
/* {% set isInfo = (config_slug == 'info') %}*/
/* */
/* {% set title = "PLUGIN_ADMIN.CONFIGURATION"|tu ~ ": " ~ ("PLUGIN_ADMIN." ~ config_slug|upper)|tu %}*/
/* */
/* {% if not isInfo %}*/
/*     {% set data = admin.data('config/' ~ config_slug) %}*/
/* {% endif %}*/
/* */
/* {% block stylesheets %}*/
/*     {% do assets.addCss(theme_url ~ '/css/codemirror/codemirror.css') %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block titlebar %}*/
/*     <div class="button-bar">*/
/*         <a class="button" href="{{ base_url }}"><i class="fa fa-reply"></i> {{ "PLUGIN_ADMIN.BACK"|tu }}</a>*/
/*         <button class="button" type="submit" name="task" value="save" form="blueprints"><i class="fa fa-check"></i> {{ "PLUGIN_ADMIN.SAVE"|tu }}</button>*/
/*     </div>*/
/*     <h1><i class="fa fa-fw fa-wrench"></i> {{ "PLUGIN_ADMIN.CONFIGURATION"|tu }} - {{ ("PLUGIN_ADMIN." ~ config_slug|upper)|tu }}</h1>*/
/* {% endblock %}*/
/* */
/* {% block content_top %}*/
/*     <div class="alert notice">{{ "PLUGIN_ADMIN.SAVE_LOCATION"|tu }}: <b>{{ data.file.filename|replace({(base_path):''}) }}</b></div>*/
/*     <ul class="tab-bar">*/
/* */
/*         {% if authorize(['admin.configuration_system', 'admin.super']) %}*/
/*         <li {% if config_slug == 'system' %}class="active"{% endif %}>*/
/*             {% if config_slug == 'system' %}<span>{% else %}<a href="{{ base_url_relative }}/config/system">{% endif %}*/
/*             {{ "PLUGIN_ADMIN.SYSTEM"|tu }}*/
/*             {% if config_slug == 'system' %}</span>{% else %}</a>{% endif %}*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*         {% if authorize(['admin.configuration_site', 'admin.super']) %}*/
/*         <li {% if config_slug == 'site' %}class="active"{% endif %}>*/
/*             {% if config_slug == 'site' %}<span>{% else %}<a href="{{ base_url_relative }}/config/site">{% endif %}*/
/*             {{ "PLUGIN_ADMIN.SITE"|tu }}*/
/*             {% if config_slug == 'site' %}</span>{% else %}</a>{% endif %}*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*         {% for configuration in admin.configurations %}*/
/*             {% if authorize(['admin.configuration_' ~ configuration, 'admin.super']) %}*/
/*                 {% set current_blueprints = admin.data('config/' ~ configuration).blueprints.toArray() %}*/
/*                 {% if configuration != 'system' and configuration != 'site' and not current_blueprints.form.hidden and current_blueprints.form.fields is not empty %}*/
/*                     <li {% if config_slug == configuration %}class="active"{% endif %}>*/
/*                         {% if config_slug == configuration %}<span>{% else %}<a href="{{ base_url_relative }}/config/{{configuration}}">{% endif %}*/
/*                         {{ configuration|tu|capitalize }}*/
/*                         {% if config_slug == configuration %}</span>{% else %}</a>{% endif %}*/
/*                     </li>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*         {% if authorize(['admin.configuration_info', 'admin.super']) %}*/
/*         <li {% if config_slug == 'info' %}class="active"{% endif %}>*/
/*             {% if config_slug == 'info' %}<span>{% else %}<a href="{{ base_url_relative }}/config/info">{% endif %}*/
/*             {{ "PLUGIN_ADMIN.INFO"|tu }}*/
/*             {% if config_slug == 'info' %}</span>{% else %}</a>{% endif %}*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*     </ul>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {% if authorize(['admin.configuration_' ~ config_slug, 'admin.super']) %}*/
/*         {% if isInfo %}*/
/*             <div id="phpinfo">*/
/*                 {{ admin.phpinfo|raw }}*/
/*             </div>*/
/*         {% else %}*/
/*             {% include 'partials/blueprints.html.twig' with { blueprints: data.blueprints, data: data } %}*/
/*         {% endif %}*/
/*     {% endif %}*/
/*     {% include 'partials/modal-changes-detected.html.twig' %}*/
/* {% endblock %}*/
/* */
/* */
