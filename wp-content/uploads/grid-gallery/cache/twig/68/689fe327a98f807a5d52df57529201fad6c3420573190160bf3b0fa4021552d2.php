<?php

/* grid-gallery.twig */
class __TwigTemplate_566191da679ebfb5ad38898ea5a643b07b898d9cfeb764a6b82c3072f4508fa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'alerts' => array($this, 'block_alerts'),
            'header' => array($this, 'block_header'),
            'preview' => array($this, 'block_preview'),
            'content' => array($this, 'block_content'),
            'table' => array($this, 'block_table'),
            'notes' => array($this, 'block_notes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"wraper\">

    ";
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('alerts', $context, $blocks);
        // line 10
        echo "
    <div class=\"supsystic-plugin\">
        ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 17
        echo "        <section class=\"supsystic-content\">
            <nav class=\"supsystic-navigation supsystic-sticky\" style=\"top: 0px;\">
                <ul>
                    <li class=\"supsystic-sticky ";
        // line 20
        if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()) == "overview")) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "overview"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-info\"></i>
                            ";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overview")), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li ";
        // line 26
        if ((($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()) == "galleries") && ($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "action", array()) == "showPresets"))) {
            echo "class=\"active\" ";
        }
        echo ">
                        <a id=\"btn-add-new\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "showPresets"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-plus-circle\"></i>
                            ";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("New Gallery")), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li class=\"supsystic-sticky ";
        // line 32
        if (((($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()) == "galleries") || (null === $this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()))) && ($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "action", array()) != "showPresets"))) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-archive\"></i>
                            ";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "
                        </a>
                    </li>
                    <li class=\"supsystic-sticky";
        // line 38
        if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()) == "optimization")) {
            echo " active";
        }
        echo "\">
                        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "optimization"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-compress\"></i>
                            ";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Optimize")), "html", null, true);
        echo "
                        </a>
                    </li>

                    <li class=\"supsystic-sticky ";
        // line 45
        if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()) == "settings")) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "settings"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-gear\"></i>
                            ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Settings"), "method"), "html", null, true);
        echo "
                        </a>
                    </li>
                    
                    ";
        // line 52
        if ($this->getAttribute(($context["environment"] ?? null), "getModule", array(0 => "license"), "method")) {
            // line 53
            echo "                        <li class=\"supsystic-sticky ";
            if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()) == "license")) {
                echo "active";
            }
            echo "\">
                            <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "license"), "method"), "html", null, true);
            echo "\">
                                <i class=\"fa fa-hand-o-right\"></i>
                                ";
            // line 56
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("License")), "html", null, true);
            echo "
                            </a>
                        </li>
                    ";
        }
        // line 60
        echo "\t\t\t\t\t
\t\t\t\t\t<li class=\"supsystic-sticky ";
        // line 61
        if (($this->getAttribute($this->getAttribute(($context["request"] ?? null), "query", array()), "module", array()) == "featuredplugins")) {
            echo "active";
        }
        echo "\">
                        <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "featuredplugins"), "method"), "html", null, true);
        echo "\">
                            <i class=\"fa fa-heart\"></i>
                            ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Featured Plugins"), "method"), "html", null, true);
        echo "
                        </a>
                    </li>

                    ";
        // line 69
        echo "                    ";
        // line 75
        echo "
                    ";
        // line 77
        echo "                    ";
        // line 122
        echo "
                    ";
        // line 131
        echo "                </ul>
            </nav>
            <div class=\"supsystic-container supsystic-item supsystic-panel\">
                ";
        // line 134
        $this->displayBlock('preview', $context, $blocks);
        // line 135
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 136
        echo "                <div class=\"clear\"></div>
                ";
        // line 137
        $this->displayBlock('table', $context, $blocks);
        // line 138
        echo "            </div>
        </section>
    </div>

    <!-- Modal loading overlay -->
    <div class=\"gg-modal-loading-overlay\"></div>
    <div class=\"gg-modal-loading-object\">
        <p>
            <span id=\"loading-text\">Loading</span>
            <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["environment"] ?? null), "config", array()), "get", array(0 => "admin_url"), "method") . "/images/wpspin_light.gif"), "html", null, true);
        echo "\" alt=\"\"
                 title=\"";
        // line 148
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Loading")), "html", null, true);
        echo "\"/>
        </p>
    </div>

    ";
        // line 152
        $this->displayBlock('notes', $context, $blocks);
        // line 153
        echo "</div>
";
    }

    // line 9
    public function block_alerts($context, array $blocks = array())
    {
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        // line 13
        echo "            <div class=\"supsystic-breadcrumbs\">
                Gallery by Supsystic
            </div>
        ";
    }

    // line 134
    public function block_preview($context, array $blocks = array())
    {
    }

    // line 135
    public function block_content($context, array $blocks = array())
    {
    }

    // line 137
    public function block_table($context, array $blocks = array())
    {
    }

    // line 152
    public function block_notes($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "grid-gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 152,  253 => 137,  248 => 135,  243 => 134,  236 => 13,  233 => 12,  228 => 9,  223 => 153,  221 => 152,  214 => 148,  210 => 147,  199 => 138,  197 => 137,  194 => 136,  191 => 135,  189 => 134,  184 => 131,  181 => 122,  179 => 77,  176 => 75,  174 => 69,  167 => 64,  162 => 62,  156 => 61,  153 => 60,  146 => 56,  141 => 54,  134 => 53,  132 => 52,  125 => 48,  120 => 46,  114 => 45,  107 => 41,  102 => 39,  96 => 38,  90 => 35,  85 => 33,  79 => 32,  73 => 29,  68 => 27,  62 => 26,  56 => 23,  51 => 21,  45 => 20,  40 => 17,  38 => 12,  34 => 10,  32 => 9,  29 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "grid-gallery.twig", "E:\\xampp\\htdocs\\ctfs\\wp-content\\plugins\\gallery-by-supsystic\\app\\templates\\grid-gallery.twig");
    }
}
