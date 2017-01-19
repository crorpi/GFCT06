<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3ad28a99a80950a34cb10efb8b9cd9e3695fe5e52d4f2dec21757f77d6349e26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8eba823cbd4963e53981f573b5611b70c54cc34a3b6729b407fe613ffa834d90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eba823cbd4963e53981f573b5611b70c54cc34a3b6729b407fe613ffa834d90->enter($__internal_8eba823cbd4963e53981f573b5611b70c54cc34a3b6729b407fe613ffa834d90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eba823cbd4963e53981f573b5611b70c54cc34a3b6729b407fe613ffa834d90->leave($__internal_8eba823cbd4963e53981f573b5611b70c54cc34a3b6729b407fe613ffa834d90_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d094998756fdb18dfca08ed2c7dc4908dddf3fc46f06cfd319190fb19ed0d4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d094998756fdb18dfca08ed2c7dc4908dddf3fc46f06cfd319190fb19ed0d4a0->enter($__internal_d094998756fdb18dfca08ed2c7dc4908dddf3fc46f06cfd319190fb19ed0d4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_d094998756fdb18dfca08ed2c7dc4908dddf3fc46f06cfd319190fb19ed0d4a0->leave($__internal_d094998756fdb18dfca08ed2c7dc4908dddf3fc46f06cfd319190fb19ed0d4a0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5d8af08228527f44074b0d03699e533309ff1b57c4136a440d73a760805ef2e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8af08228527f44074b0d03699e533309ff1b57c4136a440d73a760805ef2e2->enter($__internal_5d8af08228527f44074b0d03699e533309ff1b57c4136a440d73a760805ef2e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5d8af08228527f44074b0d03699e533309ff1b57c4136a440d73a760805ef2e2->leave($__internal_5d8af08228527f44074b0d03699e533309ff1b57c4136a440d73a760805ef2e2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec73f125cb7a115cef4a99757a12d20611cc66d0723f482e71a8bb2d5390bfc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec73f125cb7a115cef4a99757a12d20611cc66d0723f482e71a8bb2d5390bfc3->enter($__internal_ec73f125cb7a115cef4a99757a12d20611cc66d0723f482e71a8bb2d5390bfc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ec73f125cb7a115cef4a99757a12d20611cc66d0723f482e71a8bb2d5390bfc3->leave($__internal_ec73f125cb7a115cef4a99757a12d20611cc66d0723f482e71a8bb2d5390bfc3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\symfony\\GFCT\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
