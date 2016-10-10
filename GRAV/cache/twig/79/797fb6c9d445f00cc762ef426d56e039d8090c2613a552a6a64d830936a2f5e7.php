<?php

/* @Page:/Users/claraalder/gitHub/portfolio/grav-admin/user/plugins/error/pages */
class __TwigTemplate_36fe95ad64e4abca77df6b33f757203bd3330825085c2dcb6140b8dd04412418 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_ERROR.ERROR_MESSAGE"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "@Page:/Users/claraalder/gitHub/portfolio/grav-admin/user/plugins/error/pages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ 'PLUGIN_ERROR.ERROR_MESSAGE'|t }}*/
