<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_fc1497d9b07974a876ecfbec2530aba57e21dc9aca8d6211c3c87021269303ac extends Twig_Template
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
        $context["feed_url"] = (((($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == "/") || ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null)))) ? ((((isset($context["base_url_relative"]) ? $context["base_url_relative"] : null) . "/") . $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "slug", array()))) : ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array())));
        // line 2
        $context["new_base_url"] = ((($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array()) == "/")) ? ("") : ($this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "url", array())));
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "simplesearch", array()), "enabled", array())) {
            // line 5
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 6
            echo $this->env->getExtension('GravTwigExtension')->translate("SIDEBAR.SIMPLE_SEARCH.HEADLINE");
            echo "</h4>
    ";
            // line 7
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "partials/sidebar.html.twig", 7)->display($context);
            // line 8
            echo "</div>
";
        }
        // line 10
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "relatedpages", array()), "enabled", array()) && (twig_length_filter($this->env, (isset($context["related_pages"]) ? $context["related_pages"] : null)) > 0))) {
            // line 11
            echo "    <h4>";
            echo $this->env->getExtension('GravTwigExtension')->translate("SIDEBAR.RELATED_POSTS.HEADLINE");
            echo "</h4>
    ";
            // line 12
            $this->loadTemplate("partials/relatedpages.html.twig", "partials/sidebar.html.twig", 12)->display($context);
        }
        // line 14
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "random", array()), "enabled", array())) {
            // line 15
            echo "<div class=\"sidebar-content\">
\t<h4>";
            // line 16
            echo $this->env->getExtension('GravTwigExtension')->translate("SIDEBAR.RANDOM_ARTICLE.HEADLINE");
            echo "</h4>
\t<a class=\"button\" href=\"";
            // line 17
            echo (isset($context["base_url"]) ? $context["base_url"] : null);
            echo "/random\"><i class=\"fa fa-retweet\"></i> ";
            echo $this->env->getExtension('GravTwigExtension')->translate("SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY");
            echo "</a>
</div>
";
        }
        // line 20
        echo "<div class=\"sidebar-content\">
\t<h4>";
        // line 21
        echo $this->env->getExtension('GravTwigExtension')->translate("SIDEBAR.SOME_TEXT_WIDGET.HEADLINE");
        echo "</h4>
\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
</div>
";
        // line 24
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "taxonomylist", array()), "enabled", array())) {
            // line 25
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 26
            echo $this->env->getExtension('GravTwigExtension')->translate("SIDEBAR.POPULAR_TAGS.HEADLINE");
            echo "</h4>
    ";
            // line 27
            $this->loadTemplate("partials/taxonomylist.html.twig", "partials/sidebar.html.twig", 27)->display(array_merge($context, array("base_url" => (isset($context["new_base_url"]) ? $context["new_base_url"] : null), "taxonomy" => "tag")));
            // line 28
            echo "</div>
";
        }
        // line 30
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "archives", array()), "enabled", array())) {
            // line 31
            echo "<div class=\"sidebar-content\">
    <h4>";
            // line 32
            echo $this->env->getExtension('GravTwigExtension')->translate("SIDEBAR.ARCHIVES.HEADLINE");
            echo "</h4>
\t";
            // line 33
            $this->loadTemplate("partials/archives.html.twig", "partials/sidebar.html.twig", 33)->display(array_merge($context, array("base_url" => (isset($context["new_base_url"]) ? $context["new_base_url"] : null))));
            // line 34
            echo "</div>
";
        }
        // line 36
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "feed", array()), "enabled", array())) {
            // line 37
            echo "<div class=\"sidebar-content syndicate\">
    <h4>";
            // line 38
            echo $this->env->getExtension('GravTwigExtension')->translate("SIDEBAR.SYNDICATE.HEADLINE");
            echo "</h4>
    <a class=\"button\" href=\"";
            // line 39
            echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
            echo ".atom\"><i class=\"fa fa-rss-square\"></i> Atom 1.0</a>
    <a class=\"button\" href=\"";
            // line 40
            echo (isset($context["feed_url"]) ? $context["feed_url"] : null);
            echo ".rss\"><i class=\"fa fa-rss-square\"></i> RSS</a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 40,  116 => 39,  112 => 38,  109 => 37,  107 => 36,  103 => 34,  101 => 33,  97 => 32,  94 => 31,  92 => 30,  88 => 28,  86 => 27,  82 => 26,  79 => 25,  77 => 24,  71 => 21,  68 => 20,  60 => 17,  56 => 16,  53 => 15,  51 => 14,  48 => 12,  43 => 11,  41 => 10,  37 => 8,  35 => 7,  31 => 6,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set feed_url = blog.url == '/' or blog.url == base_url_relative ? (base_url_relative~'/'~blog.slug) : blog.url %}*/
/* {% set new_base_url = blog.url == '/' ? '' : blog.url %}*/
/* */
/* {% if config.plugins.simplesearch.enabled %}*/
/* <div class="sidebar-content">*/
/*     <h4>{{ 'SIDEBAR.SIMPLE_SEARCH.HEADLINE'|t }}</h4>*/
/*     {% include 'partials/simplesearch_searchbox.html.twig' %}*/
/* </div>*/
/* {% endif %}*/
/* {% if config.plugins.relatedpages.enabled and related_pages|length > 0 %}*/
/*     <h4>{{ 'SIDEBAR.RELATED_POSTS.HEADLINE'|t }}</h4>*/
/*     {% include 'partials/relatedpages.html.twig' %}*/
/* {% endif %}*/
/* {% if config.plugins.random.enabled %}*/
/* <div class="sidebar-content">*/
/* 	<h4>{{ 'SIDEBAR.RANDOM_ARTICLE.HEADLINE'|t }}</h4>*/
/* 	<a class="button" href="{{ base_url }}/random"><i class="fa fa-retweet"></i> {{ 'SIDEBAR.RANDOM_ARTICLE.FEELING_LUCKY'|t }}</a>*/
/* </div>*/
/* {% endif %}*/
/* <div class="sidebar-content">*/
/* 	<h4>{{ 'SIDEBAR.SOME_TEXT_WIDGET.HEADLINE'|t }}</h4>*/
/* 	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>*/
/* </div>*/
/* {% if config.plugins.taxonomylist.enabled %}*/
/* <div class="sidebar-content">*/
/*     <h4>{{ 'SIDEBAR.POPULAR_TAGS.HEADLINE'|t }}</h4>*/
/*     {% include 'partials/taxonomylist.html.twig' with {'base_url':new_base_url, 'taxonomy':'tag'} %}*/
/* </div>*/
/* {% endif %}*/
/* {% if config.plugins.archives.enabled %}*/
/* <div class="sidebar-content">*/
/*     <h4>{{ 'SIDEBAR.ARCHIVES.HEADLINE'|t }}</h4>*/
/* 	{% include 'partials/archives.html.twig' with {'base_url':new_base_url} %}*/
/* </div>*/
/* {% endif %}*/
/* {% if config.plugins.feed.enabled %}*/
/* <div class="sidebar-content syndicate">*/
/*     <h4>{{ 'SIDEBAR.SYNDICATE.HEADLINE'|t }}</h4>*/
/*     <a class="button" href="{{ feed_url }}.atom"><i class="fa fa-rss-square"></i> Atom 1.0</a>*/
/*     <a class="button" href="{{ feed_url }}.rss"><i class="fa fa-rss-square"></i> RSS</a>*/
/* </div>*/
/* {% endif %}*/
