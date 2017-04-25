<?php

/* @galleries/shortcode/helpers.twig */
class __TwigTemplate_403066243cca4226000da8e2948f124feece62a0d1e44d5baa7f5a1cd484ed33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'figure_before' => array($this, 'block_figure_before'),
            'a_attributes' => array($this, 'block_a_attributes'),
            'figure_attributes' => array($this, 'block_figure_attributes'),
            'image_attributes' => array($this, 'block_image_attributes'),
            'figcaption_style' => array($this, 'block_figcaption_style'),
            'figcaption_attributes' => array($this, 'block_figcaption_attributes'),
            'figcaption_wrap' => array($this, 'block_figcaption_wrap'),
            'figcaption_after' => array($this, 'block_figcaption_after'),
            'figure_after' => array($this, 'block_figure_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        ob_start();
        // line 2
        echo "\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "type", array()) != "none")) {
            // line 3
            echo "\t\tborder: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "width", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "type", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "color", array()), "html", null, true);
            echo ";
\t";
        }
        // line 5
        echo "\tborder-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
\t";
        // line 6
        if (($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) == 1)) {
            // line 7
            echo "\t\tbox-shadow: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "x", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "y", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "blur", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "color", array()), "html", null, true);
            echo ";
\t";
        }
        // line 8
        echo ";
\tmargin: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "distance", array()), "html", null, true);
        echo "px;";
        // line 11
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "2")) {
            // line 12
            echo "\t\theight:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()) . twig_replace_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t";
        }
        // line 14
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "2")) {
            // line 15
            echo "\t\twidth:auto;
\t";
        } else {
            // line 17
            echo "\t\twidth:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()) . twig_replace_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t";
        }
        $context["figureStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
";
        // line 21
        ob_start();
        // line 22
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "description", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "description", array())))) {
            // line 23
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "description", array()), "html", null, true);
            echo "
\t";
        } else {
            // line 25
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()), "html", null, true);
            echo "
\t";
        }
        $context["aTitle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "
";
        // line 29
        ob_start();
        // line 30
        echo "\t";
        if (((( !$this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) || twig_test_empty(trim($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "external_link", array())))) && ( !$this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) || twig_test_empty(trim($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()))))) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "0"))) {
            // line 31
            echo "\t\tgg-colorbox
\t";
        }
        // line 33
        echo "
\t";
        // line 34
        if ((($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty(trim($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array())))) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "0"))) {
            // line 35
            echo "\t\tgg-video
\t";
        }
        // line 37
        echo "
\t";
        // line 38
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "2") && (( !$this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) || twig_test_empty(trim($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "external_link", array())))) || ($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty(trim($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()))))))) {
            // line 39
            echo "\t\tpbox
\t";
        }
        $context["aClass"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 42
        echo "
";
        // line 43
        ob_start();
        // line 44
        echo "\t";
        if (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "external_link", array())))) {
            // line 45
            echo "\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('force_http')->getCallable(), array($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "external_link", array()))), "html", null, true);
            echo "
\t\t";
            // line 46
            $context["link"] = true;
            // line 47
            echo "\t";
        } else {
            // line 48
            echo "\t\t";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "url", array()) . "?gid=") . $this->getAttribute(($context["gallery"] ?? null), "id", array())), "html", null, true);
            echo "
\t";
        }
        $context["aHref"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 51
        echo "
";
        // line 52
        ob_start();
        // line 53
        echo "\t";
        if ((($context["link"] ?? null) && $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "rel", array(), "any", true, true))) {
            // line 54
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "rel", array()), "html", null, true);
            echo "
\t";
        }
        // line 56
        echo "\t";
        if (((($context["link"] ?? null) == false) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "enabled", array()) == "false"))) {
            // line 57
            echo "\t\tnofollow
\t";
        }
        $context["aRel"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 60
        echo "
";
        // line 61
        ob_start();
        // line 62
        echo "\t";
        $this->displayBlock('figure_before', $context, $blocks);
        // line 84
        echo "
\t";
        // line 85
        ob_start();
        // line 86
        echo "\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false")) {
            // line 87
            echo "\t\t\t";
            if (($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true"))) {
                // line 88
                echo "\t\t\t\ticons
\t\t\t";
            } else {
                // line 90
                echo "\t\t\t\tnone
\t\t\t";
            }
            // line 92
            echo "\t\t";
        } else {
            // line 93
            echo "\t\t\t";
            if (($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true"))) {
                // line 94
                echo "\t\t\t\t";
                if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true") && twig_in_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "captionEffect", array()), array(0 => "icons", 1 => "icons-scale", 2 => "icons-sodium-left", 3 => "icons-sodium-top", 4 => "icons-nitrogen-top")))) {
                    // line 95
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "captionEffect", array()), "html", null, true);
                    echo "
\t\t\t\t";
                } else {
                    // line 97
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                    echo "
\t\t\t\t";
                }
                // line 99
                echo "\t\t\t";
            } else {
                // line 100
                echo "\t\t\t\t";
                if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true")) {
                    // line 101
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "captionEffect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "captionEffect", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()))), "html", null, true);
                    echo "
\t\t\t\t";
                } else {
                    // line 103
                    echo "\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                    echo "
\t\t\t\t";
                }
                // line 105
                echo "\t\t\t";
            }
            // line 106
            echo "\t\t";
        }
        // line 107
        echo "\t";
        $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 108
        echo "
\t\t<FIGURE
\t\t\t";
        // line 110
        $this->displayBlock('figure_attributes', $context, $blocks);
        // line 130
        echo ">
\t\t\t<div class=\"crop
\t\t\t\t";
        // line 132
        if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "overlay", array()) == "1") && ($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) == "1"))) {
            // line 133
            echo "\t\t\t\t\timage-overlay
\t\t\t\t";
        }
        // line 134
        echo "\"
\t\t\t\tstyle=\"
\t\t\t\t";
        // line 136
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "0") || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "3"))) {
            // line 137
            echo "\t\t\t\t\twidth:";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()) . twig_replace_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\theight:";
            // line 138
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()) . twig_replace_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
            echo ";
\t\t\t\t\toverflow:hidden;
\t\t\t\t";
        }
        // line 140
        echo "\">

\t\t\t\t";
        // line 142
        list($context["width"], $context["height"], $context["crop"]) =         array(0, 0, 0);
        // line 143
        echo "
\t\t\t\t";
        // line 144
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()) == 0)) {
            // line 145
            echo "\t\t\t\t\t";
            $context["width"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array());
            // line 146
            echo "\t\t\t\t";
        } else {
            // line 147
            echo "\t\t\t\t\t";
            // line 148
            echo "\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "width_unit", array()) == 0)) {
                // line 149
                echo "\t\t\t\t\t\t";
                $context["width"] = round((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "width", array()) / 100) * $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array())));
                // line 150
                echo "\t\t\t\t\t";
            } else {
                // line 151
                echo "\t\t\t\t\t\t";
                $context["width"] = null;
                // line 152
                echo "\t\t\t\t\t";
            }
            // line 153
            echo "\t\t\t\t";
        }
        // line 154
        echo "
\t\t\t\t";
        // line 155
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()) == 0)) {
            // line 156
            echo "\t\t\t\t\t";
            $context["height"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array());
            // line 157
            echo "\t\t\t\t";
        } else {
            // line 158
            echo "\t\t\t\t\t";
            // line 159
            echo "\t\t\t\t\t";
            $context["height"] = null;
            // line 160
            echo "\t\t\t\t\t";
            // line 161
            echo "\t\t\t\t\t\t";
            // line 162
            echo "\t\t\t\t\t";
            // line 163
            echo "\t\t\t\t\t\t";
            // line 164
            echo "\t\t\t\t\t";
            // line 165
            echo "\t\t\t\t";
        }
        // line 166
        echo "
\t\t\t\t";
        // line 167
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 3))) {
            // line 168
            echo "\t\t\t\t\t";
            $context["crop"] = 1;
            // line 169
            echo "\t\t\t\t";
        }
        // line 170
        echo "
\t\t\t\t";
        // line 171
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 1)) {
            // line 172
            echo "\t\t\t\t\t";
            $context["height"] = null;
            // line 173
            echo "\t\t\t\t";
        }
        // line 174
        echo "
\t\t\t\t";
        // line 175
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 2)) {
            // line 176
            echo "\t\t\t\t\t";
            $context["width"] = null;
            // line 177
            echo "\t\t\t\t";
        }
        // line 178
        echo "

\t\t\t\t<img
\t\t\t\t\t";
        // line 181
        $this->displayBlock('image_attributes', $context, $blocks);
        // line 197
        echo "\t\t\t\t/>
\t\t\t</div>

\t\t\t";
        // line 200
        ob_start();
        // line 201
        echo "\t\t\t\t";
        $this->displayBlock('figcaption_style', $context, $blocks);
        // line 224
        echo "\t\t\t";
        $context["figcaptionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 225
        echo "
\t\t\t<FIGCAPTION
\t\t\t\t";
        // line 227
        $this->displayBlock('figcaption_attributes', $context, $blocks);
        // line 233
        echo ">

\t\t\t\t<div
\t\t\t\t\tclass=\"grid-gallery-figcaption-wrap\"
\t\t\t\t\tstyle=\"
\t\t\t\t\t";
        // line 238
        if (( !$this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "false"))) {
            // line 239
            echo "\t\t\t\t\t\tvertical-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";
\t\t\t\t\t";
        }
        // line 240
        echo "\">

\t\t\t\t\t";
        // line 242
        $this->displayBlock('figcaption_wrap', $context, $blocks);
        // line 316
        echo "\t\t\t\t</div>
\t\t\t</FIGCAPTION>

\t\t\t";
        // line 319
        $this->displayBlock('figcaption_after', $context, $blocks);
        // line 359
        echo "\t\t</FIGURE>

\t";
        // line 361
        $this->displayBlock('figure_after', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 62
    public function block_figure_before($context, array $blocks = array())
    {
        // line 63
        echo "\t\t";
        if (( !$this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "false"))) {
            // line 64
            echo "\t\t\t<a
\t\t\t\t";
            // line 65
            $this->displayBlock('a_attributes', $context, $blocks);
            // line 81
            echo "\t\t\t>
\t\t";
        }
        // line 83
        echo "\t";
    }

    // line 65
    public function block_a_attributes($context, array $blocks = array())
    {
        // line 66
        echo "\t\t\t\t\tid=\"gg-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["photo"] ?? null), "id", array()), "html", null, true);
        echo "\"
\t\t\t\t\tclass=\"gg-link ";
        // line 67
        echo twig_escape_filter($this->env, trim(($context["aClass"] ?? null)), "html", null, true);
        echo " ";
        if ((($this->getAttribute(($context["settings"] ?? null), "displayFirstPhoto", array()) == "on") && (($context["index"] ?? null) > 0))) {
            echo " hidden-item ";
        }
        echo "\"
\t\t\t\t\thref=\"";
        // line 68
        echo twig_escape_filter($this->env, htmlspecialchars_decode(trim(($context["aHref"] ?? null))), "html", null, true);
        echo "\"
\t\t\t\t\ttarget=\"";
        // line 69
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "target", array()), "_self")) : ("_self")), "html", null, true);
        echo "\"
\t\t\t\t\ttitle=\"";
        // line 70
        echo twig_escape_filter($this->env, trim(($context["aTitle"] ?? null)), "html", null, true);
        echo "\"
\t\t\t\t\t";
        // line 71
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "1") && (($context["link"] ?? null) == false))) {
            // line 72
            echo "\t\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t";
        } else {
            // line 74
            echo "\t\t\t\t\t\trel=\"";
            echo twig_escape_filter($this->env, ($context["aRel"] ?? null), "html", null, true);
            echo "\"
\t\t\t\t\t";
        }
        // line 76
        echo "\t\t\t\t\t";
        if ((($context["link"] ?? null) == true)) {
            // line 77
            echo "\t\t\t\t\t\tdata-type=\"link\"
\t\t\t\t\t";
        }
        // line 79
        echo "\t\t\t\t\tstyle=\"border-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";\"
\t\t\t\t";
    }

    // line 110
    public function block_figure_attributes($context, array $blocks = array())
    {
        // line 111
        echo "\t\t\t\tclass=\"grid-gallery-caption
\t\t\t\t";
        // line 112
        if ((($this->getAttribute(($context["settings"] ?? null), "displayFirstPhoto", array()) == "on") && (($context["index"] ?? null) > 0))) {
            echo " hidden-item ";
        }
        // line 113
        echo "\t\t\t\t";
        if ((($this->getAttribute(($context["settings"] ?? null), "mouse_shadow", array()) == "1") && ($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) == "1"))) {
            // line 114
            echo "\t\t\t\t\tshadow-show
\t\t\t\t";
        }
        // line 116
        echo "\t\t\t\t";
        if ((($this->getAttribute(($context["settings"] ?? null), "mouse_shadow", array()) == "2") && ($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) == "1"))) {
            // line 117
            echo "\t\t\t\t shadow-hide
\t\t\t\t";
        }
        // line 118
        echo "\"
\t\t\t\tdata-grid-gallery-type=\"";
        // line 119
        echo twig_escape_filter($this->env, trim(($context["galleryType"] ?? null)), "html", null, true);
        echo "\"
\t\t\t\tstyle=\"display:none;";
        // line 120
        echo twig_escape_filter($this->env, trim(($context["figureStyle"] ?? null)), "html", null, true);
        echo "\"
\t\t\t\t";
        // line 121
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true")) {
            // line 122
            echo "\t\t\t\t\t";
            ob_start();
            // line 123
            echo "\t\t\t\t\t\t";
            if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()))) {
                // line 124
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 126
                echo "\t\t\t\t\t\t\ticons
\t\t\t\t\t\t";
            }
            // line 128
            echo "\t\t\t\t\t";
            $context["galleryType"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 129
            echo "\t\t\t\t";
        }
        // line 130
        echo "\t\t\t";
    }

    // line 181
    public function block_image_attributes($context, array $blocks = array())
    {
        // line 182
        echo "\t\t\t\t\tsrc=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "id", array()), ($context["width"] ?? null), ($context["height"] ?? null), $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "cropPosition", array()), (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "cropQuality", array()), "100")) : ("100")))), "html", null, true);
        echo "\"
\t\t\t\t\talt=\"";
        // line 183
        if ((twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "alt", array())) || ($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "alt", array()) == " "))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "alt", array()), "html", null, true);
        }
        echo "\"
\t\t\t\t\ttitle=\"";
        // line 184
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "description", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "description", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()), "html", null, true);
        }
        echo "\"
\t\t\t\t\tdata-description=\"";
        // line 185
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "description", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "description", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()), "html", null, true);
        }
        echo "\"
\t\t\t\t\tdata-caption=\"";
        // line 186
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array()));
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()));
        }
        echo "\"
\t\t\t\t\tdata-title=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()), "html", null, true);
        echo "\"
\t\t\t\t\tstyle=\"
\t\t\t\t\t";
        // line 189
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array())))) {
            // line 190
            echo "\t\t\t\t\twidth:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()), "html", null, true);
            echo "px;
\t\t\t\t\t";
        }
        // line 192
        echo "\t\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array())))) {
            // line 193
            echo "\t\t\t\t\theight:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()), "html", null, true);
            echo "px;
\t\t\t\t\t";
        }
        // line 195
        echo "\t\t\t\t\t\"
\t\t\t\t\t";
    }

    // line 201
    public function block_figcaption_style($context, array $blocks = array())
    {
        // line 202
        echo "\t\t\t\t\t";
        if (($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true"))) {
            // line 203
            echo "\t\t\t\t\t\tfont-family:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t\t\t";
            // line 204
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_enabled", array()) == "true")) {
                // line 205
                echo "\t\t\t\t\t\t\tbackground-color:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "overlay_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "overlay_color", array()), "#3498db")) : ("#3498db")), "html", null, true);
                echo ";
\t\t\t\t\t\t\theight : 100%;
\t\t\t\t\t\t\t";
                // line 208
                echo "\t\t\t\t\t\t";
            } else {
                // line 209
                echo "\t\t\t\t\t\t\theight : 100%;
\t\t\t\t\t\t\tbackground-color: transparent;
\t\t\t\t\t\t";
            }
            // line 212
            echo "\t\t\t\t\t";
        } else {
            // line 213
            echo "\t\t\t\t\t\tcolor:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
\t\t\t\t\t\tbackground-color:";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-size:";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\t\t\ttext-align:";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_align", array()), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-family:";
            // line 217
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t\t\t";
            // line 218
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 219
                echo "\t\t\t\t\t\t\topacity:1;
\t\t\t\t\t\t\tbottom:0;
\t\t\t\t\t\t";
            }
            // line 222
            echo "\t\t\t\t\t";
        }
        // line 223
        echo "\t\t\t\t";
    }

    // line 227
    public function block_figcaption_attributes($context, array $blocks = array())
    {
        // line 228
        echo "\t\t\t\t\t";
        if (($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true"))) {
            // line 229
            echo "\t\t\t\t\t\tdata-alpha=\"";
            echo twig_escape_filter($this->env, trim((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "overlay_transparency", array()), 5)) : (5))), "html", null, true);
            echo "\"
\t\t\t\t\t";
        }
        // line 231
        echo "\t\t\t\t\tdata-alpha=\"";
        echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "transparency", array())), "html", null, true);
        echo "\"
\t\t\t\t\tstyle=\"";
        // line 232
        echo twig_escape_filter($this->env, trim(($context["figcaptionStyle"] ?? null)), "html", null, true);
        echo "\"
\t\t\t\t";
    }

    // line 242
    public function block_figcaption_wrap($context, array $blocks = array())
    {
        // line 243
        echo "\t\t\t\t\t\t";
        // line 244
        echo "\t\t\t\t\t\t";
        if (($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true"))) {
            // line 245
            echo "\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"hi-icon-wrap ";
            // line 246
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), 0, (($context["length"] ?? null) - 1)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\tdata-margin=\"";
            // line 247
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "margin", array()), 5)) : (5)), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t";
            // line 249
            if (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "video", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array())))) {
                // line 250
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 251
                ob_start();
                // line 252
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_in_filter("youtu", $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()))) {
                    // line 253
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()), ($context["youtube"] ?? null)), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 254
                    $context["videoSource"] = "youtube";
                    // line 255
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } elseif (twig_in_filter("vimeo.com", $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()))) {
                    // line 256
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, (call_user_func_array($this->env->getFilter('preg_replace')->getCallable(), array($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()), ($context["vimeoPattern"] ?? null), ($context["vimeoReplace"] ?? null))) . "?api=1"), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 257
                    $context["videoSource"] = "vimeo";
                    // line 258
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 259
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array())), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 261
                echo "\t\t\t\t\t\t\t\t\t";
                $context["videoUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 262
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 263
                $context["videoIcon"] = ((twig_in_filter("youtu", $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "video", array()))) ? ("icon-youtube") : ("icon-vimeo"));
                // line 264
                echo "
\t\t\t\t\t\t\t\t\t";
                // line 265
                ob_start();
                // line 266
                echo "\t\t\t\t\t\t\t\t\t\tmargin-left:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "margin", array()), 5)) : (5)), "html", null, true);
                echo ";
\t\t\t\t\t\t\t\t\t\tmargin-right:";
                // line 267
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "margin", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "margin", array()), 5)) : (5)), "html", null, true);
                echo ";
\t\t\t\t\t\t\t\t\t";
                $context["iconStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 269
                echo "
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 270
                echo twig_escape_filter($this->env, trim(($context["videoUrl"] ?? null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\tdata-id=\"gg-";
                // line 271
                echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["photo"] ?? null), "id", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\ttitle=\"";
                // line 272
                echo twig_escape_filter($this->env, trim(($context["aTitle"] ?? null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\tclass=\"hi-icon gg-video ";
                // line 273
                echo twig_escape_filter($this->env, ($context["videoIcon"] ?? null), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
                // line 274
                if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "2")) {
                    echo " pbox";
                }
                // line 275
                echo "\t\t\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t\t\t\t\tstyle=\"";
                // line 276
                echo twig_escape_filter($this->env, trim(($context["iconStyle"] ?? null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\tdata-video-source=\"";
                // line 277
                echo twig_escape_filter($this->env, ($context["videoSource"] ?? null), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t";
                // line 279
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "1")) {
                    // line 280
                    echo "\t\t\t\t\t\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 282
                    echo "\t\t\t\t\t\t\t\t\t\t";
                    // line 283
                    echo "\t\t\t\t\t\t\t\t\t\trel=\"video\"
\t\t\t\t\t\t\t\t\t\t";
                    // line 285
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 286
                echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t";
                // line 288
                echo "\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
            }
            // line 290
            echo "
\t\t\t\t\t\t\t\t";
            // line 291
            if (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "external_link", array())))) {
                // line 292
                echo "\t\t\t\t\t\t\t\t\t<a title=\"";
                echo twig_escape_filter($this->env, trim(($context["aTitle"] ?? null)), "html", null, true);
                echo "\" data-id=\"gg-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["photo"] ?? null), "id", array()), "html", null, true);
                echo "\" href=\"";
                if (($this->getAttribute(($context["settings"] ?? null), "openByLink", array()) == "on")) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "url", array()), "html", null, true);
                    echo " ";
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "external_link", array()), "html", null, true);
                    echo " ";
                }
                echo " \" target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "target", array()), "_self")) : ("_self")), "html", null, true);
                echo "\" class=\"hi-icon icon-link ";
                if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "2") && ($this->getAttribute(($context["settings"] ?? null), "openByLink", array()) == "on"))) {
                    echo "pbox";
                }
                echo "\" style=\"";
                echo twig_escape_filter($this->env, trim(($context["iconStyle"] ?? null)), "html", null, true);
                echo "\"></a>
\t\t\t\t\t\t\t\t";
            }
            // line 294
            echo "
\t\t\t\t\t\t\t\t";
            // line 295
            if (( !array_key_exists("videoUrl", $context) && ( !$this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array(), "any", false, true), "external_link", array(), "any", true, true) || twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "external_link", array()))))) {
                // line 296
                echo "\t\t\t\t\t\t\t\t\t<a title=\"";
                echo twig_escape_filter($this->env, trim(($context["aTitle"] ?? null)), "html", null, true);
                echo "\" data-id=\"gg-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["photo"] ?? null), "id", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "url", array()), "html", null, true);
                echo "\" class=\"hi-icon icon-fullscreen gg-colorbox";
                if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "2") &&  !array_key_exists("link", $context))) {
                    echo " pbox";
                }
                echo "\" style=\"";
                echo twig_escape_filter($this->env, trim(($context["iconStyle"] ?? null)), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t";
                // line 297
                if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "1") && (($context["link"] ?? null) == false))) {
                    // line 298
                    echo "\t\t\t\t\t\t\t\t\t\tdata-rel=\"prettyPhoto[pp_gal]\"
\t\t\t\t\t\t\t\t\t";
                }
                // line 299
                echo ">Open in pop-up window</a>
\t\t\t\t\t\t\t\t";
            }
            // line 301
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 303
        echo "
\t\t\t\t\t\t";
        // line 304
        if (( !$this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "false"))) {
            // line 305
            echo "\t\t\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "true")) {
                // line 306
                echo "\t\t\t\t\t\t\t\t";
                if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array()))) {
                    // line 307
                    echo "\t\t\t\t\t\t\t\t\t<div class=\"gg-image-caption fitvidsignore\" style=\"font-size:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t\t<object type=\"none/none\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 309
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t\t\t</object>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                }
                // line 313
                echo "\t\t\t\t\t\t\t";
            }
            // line 314
            echo "\t\t\t\t\t\t";
        }
        // line 315
        echo "\t\t\t\t\t";
    }

    // line 319
    public function block_figcaption_after($context, array $blocks = array())
    {
        // line 320
        echo "\t\t\t\t";
        if ((($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true")) && ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "true"))) {
            // line 321
            echo "
\t\t\t\t\t";
            // line 322
            ob_start();
            // line 323
            echo "\t\t\t\t\t\tcolor:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
\t\t\t\t\t\tbackground-color:";
            // line 324
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-size:";
            // line 325
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
\t\t\t\t\t\tfont-family:";
            // line 326
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
            echo ";
\t\t\t\t\t\t";
            // line 327
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_align", array()) != 3)) {
                // line 328
                echo "\t\t\t\t\t\t\ttext-align:";
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_align", array()), array(0 => "left", 1 => "right", 2 => "center")), "html", null, true);
                echo ";
\t\t\t\t\t\t";
            }
            // line 330
            echo "\t\t\t\t\t\t";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 331
                echo "\t\t\t\t\t\t\topacity:1;
\t\t\t\t\t\t\tbottom:0;
\t\t\t\t\t\t";
            }
            // line 334
            echo "\t\t\t\t\t\tvertical-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";
\t\t\t\t\t";
            $context["captionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 336
            echo "
\t\t\t\t\t";
            // line 337
            if (( !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array())) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "tooltip", array()) == "false"))) {
                // line 338
                echo "\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"caption-with-";
                // line 339
                if (twig_in_filter("icons", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()), "html", null, true);
                } else {
                    echo "icons";
                }
                echo "\"
\t\t\t\t\t\tstyle=\"";
                // line 340
                echo twig_escape_filter($this->env, ($context["captionStyle"] ?? null), "html", null, true);
                echo "\"
\t\t\t\t\t\tdata-alpha=\"";
                // line 341
                echo twig_escape_filter($this->env, trim($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "transparency", array())), "html", null, true);
                echo "\">
\t\t\t\t\t\t<div style=\"display: table; height:100%; width:100%;\">
\t\t\t\t\t\t\t";
                // line 343
                if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array()))) {
                    // line 344
                    echo "\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo "; font-weight: 800;
\t\t\t\t\t\t\t\tvertical-align:";
                    // line 345
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t";
                    // line 346
                    echo $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "caption", array());
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                } else {
                    // line 349
                    echo "\t\t\t\t\t\t\t\t<span style=\"padding: 10px;display:table-cell;font-size:";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                    echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                    echo ";
\t\t\t\t\t\t\t\tvertical-align:";
                    // line 350
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                    echo ";\">
\t\t\t\t\t\t\t\t\t";
                    // line 351
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["photo"] ?? null), "attachment", array()), "title", array()), "html", null, true);
                    echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                }
                // line 354
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 357
            echo "\t\t\t\t";
        }
        // line 358
        echo "\t\t\t";
    }

    // line 361
    public function block_figure_after($context, array $blocks = array())
    {
        // line 362
        echo "\t\t";
        if (( !$this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "false"))) {
            // line 363
            echo "\t\t\t</a>
\t\t";
        }
        // line 365
        echo "\t";
    }

    public function getTemplateName()
    {
        return "@galleries/shortcode/helpers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1129 => 365,  1125 => 363,  1122 => 362,  1119 => 361,  1115 => 358,  1112 => 357,  1107 => 354,  1101 => 351,  1097 => 350,  1091 => 349,  1085 => 346,  1081 => 345,  1075 => 344,  1073 => 343,  1068 => 341,  1064 => 340,  1056 => 339,  1053 => 338,  1051 => 337,  1048 => 336,  1042 => 334,  1037 => 331,  1034 => 330,  1028 => 328,  1026 => 327,  1022 => 326,  1017 => 325,  1013 => 324,  1008 => 323,  1006 => 322,  1003 => 321,  1000 => 320,  997 => 319,  993 => 315,  990 => 314,  987 => 313,  980 => 309,  973 => 307,  970 => 306,  967 => 305,  965 => 304,  962 => 303,  958 => 301,  954 => 299,  950 => 298,  948 => 297,  931 => 296,  929 => 295,  926 => 294,  898 => 292,  896 => 291,  893 => 290,  889 => 288,  886 => 286,  883 => 285,  880 => 283,  878 => 282,  874 => 280,  871 => 279,  867 => 277,  863 => 276,  860 => 275,  856 => 274,  852 => 273,  848 => 272,  842 => 271,  838 => 270,  835 => 269,  830 => 267,  825 => 266,  823 => 265,  820 => 264,  818 => 263,  815 => 262,  812 => 261,  806 => 259,  803 => 258,  801 => 257,  796 => 256,  793 => 255,  791 => 254,  786 => 253,  783 => 252,  781 => 251,  778 => 250,  776 => 249,  771 => 247,  765 => 246,  762 => 245,  759 => 244,  757 => 243,  754 => 242,  748 => 232,  743 => 231,  737 => 229,  734 => 228,  731 => 227,  727 => 223,  724 => 222,  719 => 219,  717 => 218,  713 => 217,  709 => 216,  704 => 215,  700 => 214,  695 => 213,  692 => 212,  687 => 209,  684 => 208,  678 => 205,  676 => 204,  671 => 203,  668 => 202,  665 => 201,  660 => 195,  654 => 193,  651 => 192,  645 => 190,  643 => 189,  638 => 187,  630 => 186,  622 => 185,  614 => 184,  606 => 183,  601 => 182,  598 => 181,  594 => 130,  591 => 129,  588 => 128,  584 => 126,  578 => 124,  575 => 123,  572 => 122,  570 => 121,  566 => 120,  562 => 119,  559 => 118,  555 => 117,  552 => 116,  548 => 114,  545 => 113,  541 => 112,  538 => 111,  535 => 110,  528 => 79,  524 => 77,  521 => 76,  515 => 74,  511 => 72,  509 => 71,  505 => 70,  501 => 69,  497 => 68,  489 => 67,  482 => 66,  479 => 65,  475 => 83,  471 => 81,  469 => 65,  466 => 64,  463 => 63,  460 => 62,  455 => 361,  451 => 359,  449 => 319,  444 => 316,  442 => 242,  438 => 240,  432 => 239,  430 => 238,  423 => 233,  421 => 227,  417 => 225,  414 => 224,  411 => 201,  409 => 200,  404 => 197,  402 => 181,  397 => 178,  394 => 177,  391 => 176,  389 => 175,  386 => 174,  383 => 173,  380 => 172,  378 => 171,  375 => 170,  372 => 169,  369 => 168,  367 => 167,  364 => 166,  361 => 165,  359 => 164,  357 => 163,  355 => 162,  353 => 161,  351 => 160,  348 => 159,  346 => 158,  343 => 157,  340 => 156,  338 => 155,  335 => 154,  332 => 153,  329 => 152,  326 => 151,  323 => 150,  320 => 149,  317 => 148,  315 => 147,  312 => 146,  309 => 145,  307 => 144,  304 => 143,  302 => 142,  298 => 140,  292 => 138,  287 => 137,  285 => 136,  281 => 134,  277 => 133,  275 => 132,  271 => 130,  269 => 110,  265 => 108,  262 => 107,  259 => 106,  256 => 105,  250 => 103,  244 => 101,  241 => 100,  238 => 99,  232 => 97,  226 => 95,  223 => 94,  220 => 93,  217 => 92,  213 => 90,  209 => 88,  206 => 87,  203 => 86,  201 => 85,  198 => 84,  195 => 62,  193 => 61,  190 => 60,  185 => 57,  182 => 56,  176 => 54,  173 => 53,  171 => 52,  168 => 51,  161 => 48,  158 => 47,  156 => 46,  151 => 45,  148 => 44,  146 => 43,  143 => 42,  138 => 39,  136 => 38,  133 => 37,  129 => 35,  127 => 34,  124 => 33,  120 => 31,  117 => 30,  115 => 29,  112 => 28,  105 => 25,  99 => 23,  96 => 22,  94 => 21,  91 => 20,  84 => 17,  80 => 15,  77 => 14,  71 => 12,  68 => 11,  65 => 9,  62 => 8,  50 => 7,  48 => 6,  43 => 5,  33 => 3,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/shortcode/helpers.twig", "E:\\xampp\\htdocs\\ctfs\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\shortcode\\helpers.twig");
    }
}
