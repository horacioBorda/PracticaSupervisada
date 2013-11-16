<?php

/* SSPProyectosBundle:Proyectos:list.html.twig */
class __TwigTemplate_ec22dfb8d31866752452af9ecfe7ddf4f0d0840d1d85e485cf99a350fc3de94f extends Twig_Template
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
        // line 2
        echo "<h1>Listado Proyectos</h1>
<table border=\"1\">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripcion</th>
        <th>Estado</th>
";
        // line 11
        echo "        <th>Resultados</th>
        <th>Convenio</th>
        <th>Responsable</th>
        <th>Tipo</th>
        <th>Resolucion</th>
        
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proyectos"]) ? $context["proyectos"] : $this->getContext($context, "proyectos")));
        foreach ($context['_seq'] as $context["_key"] => $context["proyecto"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "id"), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "nombre"), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "descripcion"), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "estado"), "html", null, true);
            echo "</td>
";
            // line 25
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "resultados"), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "idConvenio"), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "idResponsable"), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "idTipo"), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proyecto"]) ? $context["proyecto"] : $this->getContext($context, "proyecto")), "idResolucion"), "html", null, true);
            echo "</td>
                
                
            </tr>    
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proyecto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        
    
</table>";
    }

    public function getTemplateName()
    {
        return "SSPProyectosBundle:Proyectos:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 34,  76 => 29,  72 => 28,  68 => 27,  64 => 26,  59 => 25,  55 => 22,  51 => 21,  47 => 20,  43 => 19,  40 => 18,  36 => 17,  28 => 11,  19 => 2,);
    }
}
