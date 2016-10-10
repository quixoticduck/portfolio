<?php

/* @Page:C:\Users\Clara\GitHub\grav-portfolio\grav-admin\user\plugins\error/pages */
class __TwigTemplate_8fa8570e11c605beb6a3606cc00c2067080c2c62e019466c0c1738e065e8fb45 extends Twig_Template
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
        echo $this->env->getExtension('GravTwigExtension')->translate("PLUGIN_ERROR.ERROR_MESSAGE");
    }

    public function getTemplateName()
    {
        return "@Page:C:\\Users\\Clara\\GitHub\\grav-portfolio\\grav-admin\\user\\plugins\\error/pages";
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
