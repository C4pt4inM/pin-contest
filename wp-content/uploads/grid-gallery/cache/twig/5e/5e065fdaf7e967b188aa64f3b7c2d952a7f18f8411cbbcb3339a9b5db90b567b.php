<?php

/* @core/form.twig */
class __TwigTemplate_5c4ba8176833a4c4dabc0501734ceab8005f5ee737600e6649923fc7bada5bc1 extends Twig_Template
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
        // line 5
        echo "
";
        // line 9
        echo "
";
        // line 20
        echo "
";
        // line 51
        echo "
";
        // line 74
        echo "
";
        // line 86
        echo "
";
        // line 92
        echo "
";
        // line 98
        echo "
";
        // line 108
        echo "
";
        // line 114
        echo "
";
        // line 120
        echo "
";
        // line 126
        echo "
";
        // line 132
        echo "
";
        // line 138
        echo "
";
        // line 148
        echo "
";
        // line 156
        echo "
";
        // line 164
        echo "
";
        // line 170
        echo "
";
        // line 174
        echo "
";
    }

    // line 1
    public function getopen($__method__ = null, $__action__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "method" => $__method__,
            "action" => $__action__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <form method=\"";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["method"] ?? null)), "html", null, true);
            echo "\" ";
            if ( !twig_test_empty(($context["action"] ?? null))) {
                echo "action=\"";
                echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 6
    public function getclose(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 7
            echo "    </form>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 10
    public function getshow_tooltip($__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 11
            echo "    ";
            // line 12
            echo "    ";
            $context["title"] = $this->getAttribute(($context["tooltips"] ?? null), ($context["id"] ?? null), array(), "array");
            // line 13
            echo "
    ";
            // line 14
            if ( !twig_test_empty(($context["title"] ?? null))) {
                // line 15
                echo "        <i class=\"fa fa-";
                echo twig_escape_filter($this->env, (($this->getAttribute(($context["tooltips_icon"] ?? null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["tooltips_icon"] ?? null), "icon", array()), "question")) : ("question")), "html", null, true);
                echo " supsystic-tooltip\"
           title=\"";
                // line 16
                echo ($context["title"] ?? null);
                echo "\"
           style=\"";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["tooltips_icon"] ?? null), "style", array()));
                foreach ($context['_seq'] as $context["property"] => $context["value"]) {
                    echo twig_escape_filter($this->env, trim($context["property"]), "html", null, true);
                    echo ":";
                    echo twig_escape_filter($this->env, trim($context["value"]), "html", null, true);
                    echo ";";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['property'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\"></i>
    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 21
    public function getrow($__label__ = null, $__element__ = null, $__id__ = null, $__titleRow__ = null, $__row_id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "element" => $__element__,
            "id" => $__id__,
            "titleRow" => $__titleRow__,
            "row_id" => $__row_id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 22
            echo "    ";
            $context["form"] = $this;
            // line 23
            echo "    
    ";
            // line 24
            if ( !twig_test_empty(($context["row_id"] ?? null))) {
                // line 25
                echo "    <tr id=\"";
                echo twig_escape_filter($this->env, ($context["row_id"] ?? null), "html", null, true);
                echo "\">
    ";
            } else {
                // line 27
                echo "    <tr>
    ";
            }
            // line 29
            echo "        <th scope=\"row\">
            ";
            // line 30
            if ( !twig_test_empty(($context["titleRow"] ?? null))) {
                // line 31
                echo "                <h3 style=\"margin: 0 !important;\">
                    ";
                // line 32
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "
                    ";
                // line 33
                echo $context["form"]->getshow_tooltip(($context["id"] ?? null));
                echo "
                </h3>
            ";
            } else {
                // line 36
                echo "                <label ";
                if ( !twig_test_empty(($context["id"] ?? null))) {
                    echo "id=\"label-";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" for=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 37
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "
                    ";
                // line 38
                echo $context["form"]->getshow_tooltip(($context["id"] ?? null));
                echo "
                </label>
            ";
            }
            // line 41
            echo "        </th>
        ";
            // line 42
            if ( !twig_test_empty(($context["id"] ?? null))) {
                // line 43
                echo "        <td id=\"";
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\">
        ";
            } else {
                // line 45
                echo "        <td>
        ";
            }
            // line 47
            echo "            ";
            echo ($context["element"] ?? null);
            echo "
        </td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 52
    public function getrowpro($__label__ = null, $__link__ = null, $__id__ = null, $__element__ = null, $__titleRow__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "link" => $__link__,
            "id" => $__id__,
            "element" => $__element__,
            "titleRow" => $__titleRow__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 53
            echo "    ";
            $context["form"] = $this;
            // line 54
            echo "    
    <tr>
        <th scope=\"row\">
            ";
            // line 57
            if ( !twig_test_empty(($context["titleRow"] ?? null))) {
                // line 58
                echo "                <h3 style=\"margin: 0 !important;\">
                    ";
                // line 59
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "
                    ";
                // line 60
                echo $context["form"]->getshow_tooltip(($context["id"] ?? null));
                echo "
                </h3>
            ";
            } else {
                // line 63
                echo "                <label ";
                if ( !twig_test_empty(($context["id"] ?? null))) {
                    echo "id=\"label-";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" for=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\"";
                }
                echo ">
                    ";
                // line 64
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "
                    ";
                // line 65
                echo $context["form"]->getshow_tooltip(($context["id"] ?? null));
                echo "
                </label>
            ";
            }
            // line 68
            echo "            <br>
            <label><a href=\"";
            // line 69
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array(($context["link"] ?? null))), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
        </th>
        <td>";
            // line 71
            echo ($context["element"] ?? null);
            echo "</td>
    </tr>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 75
    public function getinput($__type__ = "text", $__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 76
            echo "    <input type=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
    ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["val"]) {
                // line 78
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 79
                    echo "            ";
                    echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                    echo "=\"";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["val"]);
                    foreach ($context['_seq'] as $context["attr"] => $context["param"]) {
                        echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
                        echo ":";
                        echo twig_escape_filter($this->env, $context["param"], "html", null, true);
                        echo ";";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attr'], $context['param'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\"
        ";
                } else {
                    // line 81
                    echo "            ";
                    echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\"
        ";
                }
                // line 83
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "    />
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 87
    public function gettext($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 88
            echo "    ";
            $context["form"] = $this;
            // line 89
            echo "
    ";
            // line 90
            echo $context["form"]->getinput("text", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 93
    public function getpassword($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 94
            echo "    ";
            $context["form"] = $this;
            // line 95
            echo "
    ";
            // line 96
            echo $context["form"]->getinput("password", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 99
    public function getbutton($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 100
            echo "    ";
            $context["form"] = $this;
            // line 101
            echo "
    ";
            // line 102
            if ($this->getAttribute(($context["attributes"] ?? null), "class", array(), "any", true, true)) {
                // line 103
                echo "        ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("class" => ($this->getAttribute(($context["attributes"] ?? null), "class", array()) . " button button-primary")));
                // line 104
                echo "    ";
            }
            // line 105
            echo "
    ";
            // line 106
            echo $context["form"]->getinput("button", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 109
    public function getcheckbox($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 110
            echo "    ";
            $context["form"] = $this;
            // line 111
            echo "
    ";
            // line 112
            echo $context["form"]->getinput("checkbox", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 115
    public function getfile($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 116
            echo "    ";
            $context["form"] = $this;
            // line 117
            echo "
    ";
            // line 118
            echo $context["form"]->getinput("file", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 121
    public function gethidden($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 122
            echo "    ";
            $context["form"] = $this;
            // line 123
            echo "
    ";
            // line 124
            echo $context["form"]->getinput("hidden", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 127
    public function getradio($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 128
            echo "    ";
            $context["form"] = $this;
            // line 129
            echo "
    ";
            // line 130
            echo $context["form"]->getinput("radio", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 133
    public function getcolor($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 134
            echo "    ";
            $context["form"] = $this;
            // line 135
            echo "
    ";
            // line 136
            echo $context["form"]->getinput("color", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 139
    public function getsubmit($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 140
            echo "    ";
            $context["form"] = $this;
            // line 141
            echo "
    ";
            // line 142
            if ($this->getAttribute(($context["attributes"] ?? null), "class", array(), "any", true, true)) {
                // line 143
                echo "        ";
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? null), array("class" => ($this->getAttribute(($context["attributes"] ?? null), "class", array()) . " button button-primary")));
                // line 144
                echo "    ";
            }
            // line 145
            echo "
    ";
            // line 146
            echo $context["form"]->getinput("submit", ($context["name"] ?? null), ($context["value"] ?? null), ($context["attributes"] ?? null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 149
    public function getselect($__name__ = null, $__options__ = null, $__selected__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "options" => $__options__,
            "selected" => $__selected__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 150
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["value"] => $context["text"]) {
                // line 152
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["text"]), "html", null, true);
                echo "\" ";
                if ((($context["selected"] ?? null) == $context["value"])) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["text"], "html", null, true);
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 157
    public function getselectv($__name__ = null, $__options__ = null, $__selected__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "options" => $__options__,
            "selected" => $__selected__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 158
            echo "    <select name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["text"]) {
                // line 160
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["text"], "html", null, true);
                echo "\" name = \"";
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $context["text"]), "html", null, true);
                echo "\" ";
                if ((($context["selected"] ?? null) == $context["text"])) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["text"], "html", null, true);
                echo "</option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "    </select>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 165
    public function getspan($__name__ = null, $__text__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "text" => $__text__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 166
            echo "    <span name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
        ";
            // line 167
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["text"] ?? null)), "html", null, true);
            echo "
    </span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 171
    public function getselected($__actual__ = null, $__expected__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "actual" => $__actual__,
            "expected" => $__expected__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 172
            echo "    ";
            if ((($context["actual"] ?? null) == ($context["expected"] ?? null))) {
                echo "selected=\"selected\"";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 175
    public function getlabel($__label__ = null, $__for__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "for" => $__for__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 176
            echo "    <label for=\"";
            echo twig_escape_filter($this->env, ($context["for"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "</label>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@core/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1074 => 176,  1061 => 175,  1043 => 172,  1030 => 171,  1012 => 167,  995 => 166,  981 => 165,  965 => 162,  948 => 160,  944 => 159,  927 => 158,  912 => 157,  896 => 154,  879 => 152,  875 => 151,  858 => 150,  843 => 149,  826 => 146,  823 => 145,  820 => 144,  817 => 143,  815 => 142,  812 => 141,  809 => 140,  795 => 139,  778 => 136,  775 => 135,  772 => 134,  758 => 133,  741 => 130,  738 => 129,  735 => 128,  721 => 127,  704 => 124,  701 => 123,  698 => 122,  684 => 121,  667 => 118,  664 => 117,  661 => 116,  647 => 115,  630 => 112,  627 => 111,  624 => 110,  610 => 109,  593 => 106,  590 => 105,  587 => 104,  584 => 103,  582 => 102,  579 => 101,  576 => 100,  562 => 99,  545 => 96,  542 => 95,  539 => 94,  525 => 93,  508 => 90,  505 => 89,  502 => 88,  488 => 87,  472 => 84,  466 => 83,  458 => 81,  440 => 79,  437 => 78,  433 => 77,  424 => 76,  409 => 75,  391 => 71,  386 => 69,  383 => 68,  377 => 65,  373 => 64,  362 => 63,  356 => 60,  352 => 59,  349 => 58,  347 => 57,  342 => 54,  339 => 53,  323 => 52,  303 => 47,  299 => 45,  293 => 43,  291 => 42,  288 => 41,  282 => 38,  278 => 37,  267 => 36,  261 => 33,  257 => 32,  254 => 31,  252 => 30,  249 => 29,  245 => 27,  239 => 25,  237 => 24,  234 => 23,  231 => 22,  215 => 21,  187 => 17,  183 => 16,  178 => 15,  176 => 14,  173 => 13,  170 => 12,  168 => 11,  156 => 10,  140 => 7,  129 => 6,  101 => 3,  92 => 2,  78 => 1,  73 => 174,  70 => 170,  67 => 164,  64 => 156,  61 => 148,  58 => 138,  55 => 132,  52 => 126,  49 => 120,  46 => 114,  43 => 108,  40 => 98,  37 => 92,  34 => 86,  31 => 74,  28 => 51,  25 => 20,  22 => 9,  19 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@core/form.twig", "E:\\xampp\\htdocs\\ctfs\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Core\\views\\form.twig");
    }
}
