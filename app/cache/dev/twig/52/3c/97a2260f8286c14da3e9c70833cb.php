<?php

/* RyansCMSModulesBundle:Module:index.html.twig */
class __TwigTemplate_523c97a2260f8286c14da3e9c70833cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 43
        echo "


<h1>Module list</h1>

<table class=\"records_list display\" id=\"example\" style=\"width:100%\">
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Text</th>
            <th>Image</th>
            <th>Alt</th>
            <th>Active</th>
            <th>Location</th>
            <th>Start_date</th>
            <th>End_date</th>
            <th>Border_color</th>
            <th>Link</th>
            <th>Ltitle</th>
            <th>Order</th>
            <th>Blank</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'entities'));
        foreach ($context['_seq'] as $context['_key'] => $context['entity']) {
            // line 70
            echo "        <tr>
            <td><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modules_show", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false), "html");
            echo "</a></td>
            <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "title", array(), "any", false), "html");
            echo "</td>
            <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "text", array(), "any", false), "html");
            echo "</td>
            <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "image", array(), "any", false), "html");
            echo "</td>
            <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "alt", array(), "any", false), "html");
            echo "</td>
            <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "active", array(), "any", false), "html");
            echo "</td>
            <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "location", array(), "any", false), "html");
            echo "</td>
            <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'entity'), "startdate", array(), "any", false), "Y-m-d H:i:s"), "html");
            echo "</td>
            <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'entity'), "enddate", array(), "any", false), "Y-m-d H:i:s"), "html");
            echo "</td>
            <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "bordercolor", array(), "any", false), "html");
            echo "</td>
            <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "link", array(), "any", false), "html");
            echo "</td>
            <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "ltitle", array(), "any", false), "html");
            echo "</td>
            <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "order", array(), "any", false), "html");
            echo "</td>
            <td>";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'entity'), "blank", array(), "any", false), "html");
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modules_show", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modules_edit", array("id" => $this->getAttribute($this->getContext($context, 'entity'), "id", array(), "any", false))), "html");
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 97
        echo "    </tbody>
</table>

<ul>
    <li>
        <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modules_new"), "html");
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>
";
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Modulos Laterales";
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "\t";
        $this->displayBlock('title', $context, $blocks);
        // line 3
        echo "\t<style type=\"text/css\" title=\"currentStyle\">
\t\t@import \"/js/DataTables/media/css/demo_page.css\";
\t\t@import \"/js/DataTables/media/css/demo_table_jui.css\";
\t\t@import \"/js/jquery-ui-1.8.14.custom/css/smoothness/jquery-ui-1.8.14.custom.css\";
\t\t
\t\t.dataTables_wrapper {
\t\t\twidth: 1640px;
\t\t}
\t</style>
\t<script type=\"text/javascript\" src=\"/js/DataTables/media/js/jquery.js\"></script>
\t<script type=\"text/javascript\" src=\"/js/DataTables/media/js/jquery.dataTables.js\"></script>
\t<script type=\"text/javascript\">
\t
\t\$(document).ready(function() {
\t\t\$('#example').dataTable({
\t\t\t\"bJQueryUI\": true,
\t\t\t\"sPaginationType\": \"full_numbers\",
\t\t\t\"aoColumns\": [ 
\t\t\t  \t\t\t/* Id */   {\"bSearchable\":false,\"bVisible\":false},
\t\t\t  \t\t\t/* Titulo */  null,
\t\t\t  \t\t\t/* Texto */ {\"bSearchable\":false,\"bVisible\":false},
\t\t\t  \t\t\t/* Imagen */ null,
\t\t\t  \t\t\t/* Alt */ {\"bSearchable\":false,\"bVisible\":false},
\t\t\t  \t\t\t/* Activo */ null,
\t\t\t  \t\t\t/* Ubicacion */ null,
\t\t\t  \t\t\t/* Inicio */  null,
\t\t\t  \t\t\t/* Fin */  null,
\t\t\t  \t\t\t/* Colorbore */ {\"bSearchable\":false,\"bVisible\":false },
\t\t\t  \t\t\t/* Link */ null,
\t\t\t  \t\t\t/* Ltitle */ {\"bSearchable\":false,\"bVisible\":false },
\t\t\t  \t\t\t/* Orden */ {\"bSearchable\":false,\"bVisible\":false },
\t\t\t  \t\t\t/* Blank */ {\"bSearchable\":false,\"bVisible\":false },
\t\t\t  \t\t\t/* Actions */ null
\t\t\t  \t\t]
\t\t});
\t});
\t
\t</script>
\t
";
    }

    public function getTemplateName()
    {
        return "RyansCMSModulesBundle:Module:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
