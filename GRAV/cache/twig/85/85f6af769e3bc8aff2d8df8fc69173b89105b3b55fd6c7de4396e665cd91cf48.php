<?php

/* partials/messages.html.twig */
class __TwigTemplate_989bc121337fbc3063d31dbe36f949d1d507f0aafcaa6cb3c5772e954a2128c2 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 2
            echo "<div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "scope", array()));
            echo " alert\">";
            echo $this->getAttribute($context["message"], "message", array());
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "
";
        // line 5
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array())) {
            // line 6
            echo "<div class=\"error alert\">";
            echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array());
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "partials/messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  37 => 5,  34 => 4,  23 => 2,  19 => 1,);
    }
}
/* {% for message in admin.messages %}*/
/* <div class="{{ message.scope|e }} alert">{{ message.message|raw }}</div>*/
/* {% endfor %}*/
/* */
/* {% if form.message %}*/
/* <div class="error alert">{{ form.message|raw }}</div>*/
/* {% endif %}*/
/* */
