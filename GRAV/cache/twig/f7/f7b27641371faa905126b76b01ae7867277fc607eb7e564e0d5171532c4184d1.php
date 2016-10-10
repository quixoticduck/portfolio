<?php

/* dashboard.html.twig */
class __TwigTemplate_e5de5e2e3e943c7605d3b3c84b8d0e0a689be95e0b617fcad3187fd00530c1d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "dashboard.html.twig", 1);
        $this->blocks = array(
            'titlebar' => array($this, 'block_titlebar'),
            'messages' => array($this, 'block_messages'),
            'widgets' => array($this, 'block_widgets'),
            'content' => array($this, 'block_content'),
            'content_bottom' => array($this, 'block_content_bottom'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["title"] = $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DASHBOARD");
        // line 5
        $context["clear_cache_url"] = ((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/cache.json/task") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . twig_escape_filter($this->env, "clearCache", "html_attr"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_titlebar($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"button-bar\">
        ";
        // line 9
        if ($this->env->getExtension('GravTwigExtension')->authorize(array(0 => "admin.maintenance", 1 => "admin.super"))) {
            // line 10
            echo "            <div class=\"button-group\">
                <button data-clear-cache-type=\"\" data-clear-cache=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => (isset($context["clear_cache_url"]) ? $context["clear_cache_url"] : null), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" class=\"button\"><i class=\"fa fa-trash\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE"), "html", null, true);
            echo "</button>
                <button type=\"button\" class=\"button dropdown-toggle\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-caret-down\"></i>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a data-clear-cache-type=\"all\" data-clear-cache=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["clear_cache_url"]) ? $context["clear_cache_url"] : null) . "/cleartype") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "all"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_ALL_CACHE"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"assets-only\" data-clear-cache=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["clear_cache_url"]) ? $context["clear_cache_url"] : null) . "/cleartype") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "assets-only"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_ASSETS_ONLY"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"images-only\" data-clear-cache=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["clear_cache_url"]) ? $context["clear_cache_url"] : null) . "/cleartype") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "images-only"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_IMAGES_ONLY"), "html", null, true);
            echo "</a></li>
                    <li><a data-clear-cache-type=\"cache-only\" data-clear-cache=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "addNonce", array(0 => ((((isset($context["clear_cache_url"]) ? $context["clear_cache_url"] : null) . "/cleartype") . $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "param_sep", array())) . "cache-only"), 1 => "admin-form", 2 => "admin-nonce"), "method"), "html", null, true);
            echo "\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLEAR_CACHE_CACHE_ONLY"), "html", null, true);
            echo "</a></li>
                </ul>
            </div>

            <button data-gpm-checkupdates=\"\" class=\"button\"><i class=\"fa fa-refresh\"></i> ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CHECK_FOR_UPDATES"), "html", null, true);
            echo "</button>
        ";
        }
        // line 25
        echo "    </div>
    <h1><i class=\"fa fa-fw fa-th\"></i> ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DASHBOARD"), "html", null, true);
        echo "</h1>
";
    }

    // line 29
    public function block_messages($context, array $blocks = array())
    {
    }

    // line 31
    public function block_widgets($context, array $blocks = array())
    {
        // line 32
        echo "    <div id=\"admin-dashboard\">
        ";
        // line 33
        if ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_dashboard_widgets_top", array())) {
            // line 34
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_dashboard_widgets_top", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 35
                echo "                ";
                $this->loadTemplate((("partials/" . $this->getAttribute($context["widget"], "template", array())) . ".html.twig"), "dashboard.html.twig", 35)->display($context);
                // line 36
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        ";
        }
        // line 38
        echo "    </div>
";
    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $this->loadTemplate("partials/messages.html.twig", "dashboard.html.twig", 42)->display($context);
        // line 43
        echo "
    ";
        // line 44
        if ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_dashboard_widgets_main", array())) {
            // line 45
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_dashboard_widgets_main", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 46
                echo "            ";
                $this->loadTemplate((("partials/" . $this->getAttribute($context["widget"], "template", array())) . ".html.twig"), "dashboard.html.twig", 46)->display($context);
                // line 47
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "    ";
        }
    }

    // line 51
    public function block_content_bottom($context, array $blocks = array())
    {
        // line 52
        echo "    <div id=\"admin-dashboard\">
        ";
        // line 53
        if ($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_dashboard_widgets_bottom", array())) {
            // line 54
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array()), "plugins_hooked_dashboard_widgets_bottom", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 55
                echo "                ";
                $this->loadTemplate((("partials/" . $this->getAttribute($context["widget"], "template", array())) . ".html.twig"), "dashboard.html.twig", 55)->display($context);
                // line 56
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        ";
        }
        // line 58
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 58,  249 => 57,  235 => 56,  232 => 55,  214 => 54,  212 => 53,  209 => 52,  206 => 51,  201 => 48,  187 => 47,  184 => 46,  166 => 45,  164 => 44,  161 => 43,  158 => 42,  155 => 41,  150 => 38,  147 => 37,  133 => 36,  130 => 35,  112 => 34,  110 => 33,  107 => 32,  104 => 31,  99 => 29,  93 => 26,  90 => 25,  85 => 23,  76 => 19,  70 => 18,  64 => 17,  58 => 16,  48 => 11,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  33 => 1,  31 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% set title = "PLUGIN_ADMIN.DASHBOARD"|tu %}*/
/* */
/* {% set clear_cache_url = base_url_relative ~ '/cache.json/task' ~ config.system.param_sep ~ 'clearCache'|e('html_attr') %}*/
/* */
/* {% block titlebar %}*/
/*     <div class="button-bar">*/
/*         {% if authorize(['admin.maintenance', 'admin.super']) %}*/
/*             <div class="button-group">*/
/*                 <button data-clear-cache-type="" data-clear-cache="{{ uri.addNonce(clear_cache_url, 'admin-form', 'admin-nonce') }}" class="button"><i class="fa fa-trash"></i> {{ "PLUGIN_ADMIN.CLEAR_CACHE"|tu }}</button>*/
/*                 <button type="button" class="button dropdown-toggle" data-toggle="dropdown">*/
/*                     <i class="fa fa-caret-down"></i>*/
/*                 </button>*/
/*                 <ul class="dropdown-menu">*/
/*                     <li><a data-clear-cache-type="all" data-clear-cache="{{  uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'all', 'admin-form', 'admin-nonce') }}" href="#">{{ "PLUGIN_ADMIN.CLEAR_CACHE_ALL_CACHE"|tu }}</a></li>*/
/*                     <li><a data-clear-cache-type="assets-only" data-clear-cache="{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'assets-only', 'admin-form', 'admin-nonce') }}" href="#">{{ "PLUGIN_ADMIN.CLEAR_CACHE_ASSETS_ONLY"|tu }}</a></li>*/
/*                     <li><a data-clear-cache-type="images-only" data-clear-cache="{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'images-only', 'admin-form', 'admin-nonce') }}" href="#">{{ "PLUGIN_ADMIN.CLEAR_CACHE_IMAGES_ONLY"|tu }}</a></li>*/
/*                     <li><a data-clear-cache-type="cache-only" data-clear-cache="{{ uri.addNonce(clear_cache_url ~'/cleartype' ~ config.system.param_sep ~ 'cache-only', 'admin-form', 'admin-nonce') }}" href="#">{{ "PLUGIN_ADMIN.CLEAR_CACHE_CACHE_ONLY"|tu }}</a></li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <button data-gpm-checkupdates="" class="button"><i class="fa fa-refresh"></i> {{ "PLUGIN_ADMIN.CHECK_FOR_UPDATES"|tu }}</button>*/
/*         {% endif %}*/
/*     </div>*/
/*     <h1><i class="fa fa-fw fa-th"></i> {{ "PLUGIN_ADMIN.DASHBOARD"|tu }}</h1>*/
/* {% endblock %}*/
/* */
/* {% block messages %}{% endblock %}*/
/* */
/* {% block widgets %}*/
/*     <div id="admin-dashboard">*/
/*         {% if grav.twig.plugins_hooked_dashboard_widgets_top %}*/
/*             {% for widget in grav.twig.plugins_hooked_dashboard_widgets_top %}*/
/*                 {% include 'partials/' ~ widget.template ~ '.html.twig' %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     {% include 'partials/messages.html.twig' %}*/
/* */
/*     {% if grav.twig.plugins_hooked_dashboard_widgets_main %}*/
/*         {% for widget in grav.twig.plugins_hooked_dashboard_widgets_main %}*/
/*             {% include 'partials/' ~ widget.template ~ '.html.twig' %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block content_bottom %}*/
/*     <div id="admin-dashboard">*/
/*         {% if grav.twig.plugins_hooked_dashboard_widgets_bottom %}*/
/*             {% for widget in grav.twig.plugins_hooked_dashboard_widgets_bottom %}*/
/*                 {% include 'partials/' ~ widget.template ~ '.html.twig' %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
/* */
