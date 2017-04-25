<?php

/* @galleries/shortcode/gallery.twig */
class __TwigTemplate_dfba3e43976096f2826630c839c2dc6c8cc08fd93ec81ecddf5f821f4593ffc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'gallery_before' => array($this, 'block_gallery_before'),
            'gallery_attributes' => array($this, 'block_gallery_attributes'),
            'photos_before' => array($this, 'block_photos_before'),
            'photos_attributes' => array($this, 'block_photos_attributes'),
            'photos' => array($this, 'block_photos'),
            'photos_after' => array($this, 'block_photos_after'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["style"] = $this->loadTemplate("@galleries/shortcode/style.twig", "@galleries/shortcode/gallery.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ((array_key_exists("gallery", $context) &&  !twig_test_empty(($context["gallery"] ?? null)))) {
            // line 4
            echo "\t";
            $this->displayBlock('gallery_before', $context, $blocks);
            // line 14
            echo "
\t<div
\t\t";
            // line 16
            $this->displayBlock('gallery_attributes', $context, $blocks);
            // line 187
            echo ">

\t\t";
            // line 189
            if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array()), "enabled", array()) == "true") || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array()), "enabled", array()) == null))) {
                // line 190
                echo "\t\t\t";
                if (((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array()), "icon_name", array()) == "default") || ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") != true)) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array()), "enabled", array()) == null))) {
                    // line 191
                    echo "\t\t\t\t<div class=\"gallery-loading\">
\t\t\t\t\t<div class=\"blocks\">
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t\t<div class=\"block\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                } else {
                    // line 200
                    echo "\t\t\t\t<div class=\"gallery-loading\">
\t\t\t\t\t<div class=\"la-";
                    // line 201
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array()), "icon_name", array()), "html", null, true);
                    echo "\" style=\"color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array()), "background", array()), "html", null, true);
                    echo "\">
\t\t\t\t\t\t";
                    // line 202
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array()), "icon_items", array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 203
                        echo "\t\t\t\t\t\t\t<div></div>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 205
                    echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
                }
                // line 208
                echo "\t\t";
            }
            // line 209
            echo "
\t\t";
            // line 210
            $this->displayBlock('photos_before', $context, $blocks);
            // line 212
            echo "
\t\t";
            // line 213
            if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "enabled", array())) {
                // line 214
                echo "            <div id=\"social-share-html\" style=\"display:none;\">
                ";
                // line 215
                echo $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "html", array());
                echo "
                ";
                // line 217
                echo "            </div>
        ";
            }
            // line 219
            echo "
        <div id=\"gallery-sharing-top\"></div>
\t\t<div
\t\t\t";
            // line 222
            $this->displayBlock('photos_attributes', $context, $blocks);
            // line 225
            echo ">

\t\t\t";
            // line 227
            $this->displayBlock('photos', $context, $blocks);
            // line 234
            echo "
\t\t\t<div class=\"grid-gallery-clearfix\"></div>
\t\t</div>
        <div id=\"gallery-sharing-bottom\"></div>

\t\t<div class=\"grid-gallery-clearfix\"></div>

\t\t";
            // line 241
            $this->displayBlock('photos_after', $context, $blocks);
            // line 243
            echo "\t</div>
\t
\t<!-- Gallery by Supsystic plugin ";
            // line 245
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "getConfig", array(), "method"), "get", array(0 => "plugin_version"), "method"), "html", null, true);
            echo "  ";
            if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == true)) {
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "getConfig", array(), "method"), "get", array(0 => "pro_plugin_version"), "method"), "html", null, true);
            }
            echo " -->
";
        }
    }

    // line 4
    public function block_gallery_before($context, array $blocks = array())
    {
        // line 5
        echo "\t\t";
        if (($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true"))) {
            // line 6
            echo "\t\t\t<style>
\t\t\t\t #grid-gallery-";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
            echo " .";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), "html", null, true);
            echo " .hi-icon { color: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "color", array()), "html", null, true);
            echo " !important; background: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background", array()), "html", null, true);
            echo " !important; }
\t\t\t\t #grid-gallery-";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
            echo " .";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), "html", null, true);
            echo " .hi-icon:hover { color: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "hover_color", array()), "html", null, true);
            echo " !important; background: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background_hover", array()), "html", null, true);
            echo " !important; }
\t\t\t\t #grid-gallery-";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
            echo " .hi-icon { width: ";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
            echo "px !important; height: ";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
            echo "px !important; }
\t\t\t\t #grid-gallery-";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
            echo " .hi-icon:before { font-size: ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
            echo "px !important; line-height: ";
            echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
            echo "px !important; }
\t\t\t</style>
\t\t";
        }
        // line 13
        echo "\t";
    }

    // line 16
    public function block_gallery_attributes($context, array $blocks = array())
    {
        // line 17
        echo "\t\t\tid=\"grid-gallery-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "\"
\t\t\tdata-title=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "title", array()), "html", null, true);
        echo "\"
\t\t\tdata-grid-type=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()), "html", null, true);
        echo "\"
\t\t\tdata-offset=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "distance", array()), "html", null, true);
        echo "\"
\t\t\tdata-area-position=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "position", array()), "html", null, true);
        echo "\"
\t\t\tdata-icons=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()), "html", null, true);
        echo "\"
\t\t\tdata-preloader = \"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array()), "enabled", array()), "html", null, true);
        echo "\"
\t\t\t";
        // line 24
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "2")) {
            // line 25
            echo " \t\t\t\tdata-width=\"auto\"
 \t\t\t";
        } else {
            // line 27
            echo " \t\t\t\tdata-width=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()), "html", null, true);
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()) == 1)) {
                echo "%";
            }
            echo "\"
 \t\t\t";
        }
        // line 29
        echo "\t\t\tdata-height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()), "html", null, true);
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()) == 1)) {
            echo "%";
        }
        echo "\"
\t\t\tdata-padding=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "padding", array()), "html", null, true);
        echo "\"
\t\t\tdata-quicksand = \"";
        // line 31
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "quicksand", array()), "enabled", array()) == "1")) {
            echo "enabled";
        } else {
            echo "disabled";
        }
        echo "\"
\t\t\tdata-quicksand-duration = \"";
        // line 32
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "quicksand", array()), "duration", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "quicksand", array()), "duration", array()), "html", null, true);
        } else {
            echo "none";
        }
        echo "\"
\t\t\t\t";
        // line 33
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "enabled", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "enabled", array()) == "false"))) {
            // line 34
            echo "\t\t\t\t\tdata-popup-type = \"disable\"
\t\t\t\t";
        } else {
            // line 36
            echo "\t\t\t\t\tdata-popup-theme = ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "theme", array()), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 38
        echo "\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "0") && (($context["mobile"] ?? null) != "true"))) {
            // line 39
            echo "\t\t\t\t\tdata-popup-type =\"colorbox\"
\t\t\t\t\tdata-popup-fadeOut = \"";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "fadeOut", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "fadeOut", array()), 300)) : (300)), "html", null, true);
            echo "\"
\t\t\t\t";
        }
        // line 42
        echo "\t\t\t\t";
        if (((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "1") && (($context["mobile"] ?? null) != "true")) && ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true"))) {
            // line 43
            echo "\t\t\t\t\tdata-popup-type = \"pretty-photo\"
\t\t\t\t";
        }
        // line 45
        echo "\t\t\t\t";
        if (((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "type", array()) == "2") && (($context["mobile"] ?? null) != "true")) && ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true"))) {
            // line 46
            echo "\t\t\t\t\tdata-popup-type = \"photobox\"
\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "3")) {
            // line 49
            echo "\t\t\t\t\tdata-columns-number = ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array()), "columns", array()), "number", array()), "html", null, true);
            echo "
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "captions", array()) == "on")) {
            // line 52
            echo "\t\t\t\t\tdata-popup-captions = 'hide'
\t\t\t\t";
        }
        // line 54
        echo "
\t\t\t\tdata-popup-image-text = \"";
        // line 55
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "imageText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "imageText", array()), "title")) : ("title")), "html", null, true);
        echo "\"

\t\t\t\t";
        // line 57
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "popupwidth", array()) == "")) {
            echo " 
\t\t\t\t\tdata-popup-widthsize = \"auto\" 
\t\t\t\t";
        } else {
            // line 59
            echo " 
\t\t\t\t\tdata-popup-widthsize = \"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "popupwidth", array()), "html", null, true);
            echo "\" 
\t\t\t\t";
        }
        // line 62
        echo "
\t\t\t\t";
        // line 63
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "popupheight", array()) == "")) {
            echo " 
\t\t\t\t\tdata-popup-heightsize = \"auto\" 
\t\t\t\t";
        } else {
            // line 65
            echo " 
\t\t\t\t\tdata-popup-heightsize = \"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "popupheight", array()), "html", null, true);
            echo "\" 
\t\t\t\t";
        }
        // line 68
        echo "
\t\t\t";
        // line 69
        $context["popup_i18n_words"] = array("close" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("close")), "next" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("next")), "previous" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("previous")), "start_slideshow" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("start slideshow")), "stop_slideshow" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("stop slideshow")), "image" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("image")), "of" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("of")));
        // line 70
        echo "\t\t\tdata-popup-i18n-words = \"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["popup_i18n_words"] ?? null)));
        echo "\"

            data-popup-slideshow = \"";
        // line 72
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshow", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshow", array()), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-slideshow-speed = \"";
        // line 73
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowSpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowSpeed", array()), 2500)) : (2500)), "html", null, true);
        echo "\"
\t\t\tdata-popup-hoverstop = \"";
        // line 74
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "popupHoverStop", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "popupHoverStop", array()), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-slideshow-auto = \"";
        // line 75
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowAuto", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowAuto", array()), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\tdata-popup-background = \"";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "background", array()), "html", null, true);
        echo "\"
\t\t\tdata-popup-transparency = \"";
        // line 77
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "transparency", array()), 30)) : (30)), "html", null, true);
        echo "\"
\t\t\tdata-popup-disable-history=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array()), "disableHistory", array()), "html", null, true);
        echo "\"
\t\t\tdata-fullscreen=\"";
        // line 79
        echo (($this->getAttribute(($context["settings"] ?? null), "fullscreen", array())) ? ("true") : ("false"));
        echo "\"
\t\t\tdata-hide-tooltip=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "tooltip", array()), "html", null, true);
        echo "\"
\t\t\tdata-caption-font-family=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "font_family", array()), "html", null, true);
        echo "\"
\t\t\tdata-caption-text-size=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
        echo "\"
\t\t\tdata-is-mobile=\"";
        // line 83
        echo twig_escape_filter($this->env, ((array_key_exists("isMobile", $context)) ? (_twig_default_filter(($context["isMobile"] ?? null), "0")) : ("0")), "html", null, true);
        echo "\"
\t\t\tdata-caption-mobile=\"";
        // line 84
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isMobile", array()), "false")) : ("false")), "html", null, true);
        echo "\" ";
        // line 85
        echo "\t\t\tdata-hide-long-tltp-title=\"";
        echo ((($this->getAttribute(($context["settings"] ?? null), "hideLongTooltipTitles", array()) == "on")) ? ("1") : ("0"));
        echo "\"
\t\t\tdata-caption-disabled-on-mobile=\"";
        // line 86
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array()), "false")) : ("false")), "html", null, true);
        echo "\"
\t\t\t";
        // line 87
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()) == "polaroid")) {
            // line 88
            echo "\t\t\t\tdata-polaroid-animation=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array()), "true")) : ("true")), "html", null, true);
            echo "\"
\t\t\t\tdata-polaroid-scattering=\"";
            // line 89
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array()), "true")) : ("true")), "html", null, true);
            echo "\"
\t\t\t\tdata-polaroid-frame-width=\"";
            // line 90
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array()), 20)) : (20)), "html", null, true);
            echo "\"
\t\t\t";
        }
        // line 92
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "3")) {
            // line 93
            echo "\t\t\t\tdata-responsive-colums=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array()), "")) : (""))));
            echo "\"
\t\t\t";
        }
        // line 95
        echo "\t\t\t";
        if (($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array()), "enabled", array()) == "true"))) {
            // line 96
            echo "\t\t\t\tdata-horizontal-scroll=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array())));
            echo "\"
\t\t\t";
        }
        // line 98
        echo "\t\t\t";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true")) {
            // line 99
            echo "\t\t\t\tdata-thumb-overlay-personal=\"1\"
\t\t\t";
        }
        // line 101
        echo "
            ";
        // line 102
        $context["imageSharingButPos"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array());
        // line 103
        echo "            ";
        $context["imageSharingWrapperClass"] = (($context["imageSharingButPos"] ?? null) . " ");
        // line 104
        echo "            ";
        if (((($context["imageSharingButPos"] ?? null) == "top") || (($context["imageSharingButPos"] ?? null) == "bottom"))) {
            // line 105
            echo "                ";
            $context["imageSharingWrapperClass"] = (($context["imageSharingWrapperClass"] ?? null) . $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()));
            // line 106
            echo "            ";
        } else {
            // line 107
            echo "                    ";
            $context["imageSharingWrapperClass"] = ((($context["imageSharingWrapperClass"] ?? null) . "vertical ") . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 108
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array()));
            // line 109
            echo "            ";
        }
        // line 110
        echo "
            ";
        // line 121
        echo "
            ";
        // line 122
        $context["socialSharing"] = array("enabled" => $this->getAttribute($this->getAttribute(        // line 123
($context["settings"] ?? null), "socialSharing", array()), "enabled", array()), "gallerySharing" => array("enabled" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 125
($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "enabled", array()), "position" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 126
($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "buttonsPosition", array())), "imageSharing" => array("enabled" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 129
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "enabled", array()), "wrapperClass" => $this->getAttribute(        // line 130
$this, "getSocialSharingWrapperClass", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 131
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 132
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 133
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array())), "method")), "popupSharing" => array("enabled" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 137
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "enabled", array()), "wrapperClass" => $this->getAttribute(        // line 138
$this, "getSocialSharingWrapperClass", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 139
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsPosition", array()), 1 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 140
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignHorizontal", array()), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 141
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignVertical", array())), "method")));
        // line 147
        echo "\t\t\tdata-social-sharing = \"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["socialSharing"] ?? null)));
        echo "\"

\t\t\tclass=\"grid-gallery
\t\t\t\t";
        // line 150
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "1")) {
            // line 151
            echo "\t\t\t\t\tgrid-gallery-fluid-height
\t\t\t\t";
        } else {
            // line 153
            echo "\t\t\t\t\tgrid-gallery-fixed
\t\t\t\t";
        }
        // line 155
        echo "
\t\t\t\t";
        // line 156
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbs", array()), "enable", array()) == "1")) {
            // line 157
            echo "\t\t\t\t\tgrid-gallery-thumbs
\t\t\t\t";
        }
        // line 159
        echo "
\t\t\t\t";
        // line 160
        if ((($this->getAttribute($this->getAttribute(($context["environment"] ?? null), "getConfig", array(), "method"), "get", array(0 => "optimizations"), "method") == 1) && ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == false))) {
            // line 161
            echo "\t\t\t\t\t\toptimizations
\t\t\t\t";
        }
        // line 163
        echo "
\t\t\t\t";
        // line 164
        if (($this->getAttribute(($context["settings"] ?? null), "openByLink", array()) == "on")) {
            // line 165
            echo "\t\t\t\t    hidden-item
                ";
        }
        // line 167
        echo "
\t\t\t\t";
        // line 168
        if (($this->getAttribute(($context["settings"] ?? null), "displayFirstPhoto", array()) == "on")) {
            // line 169
            echo "\t\t\t\t    one-photo
                ";
        }
        // line 171
        echo "                \"
\t\t\tstyle=\"
\t\t\t\twidth:";
        // line 173
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "width", array()) . twig_replace_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "width_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
\t\t\t\theight:";
        // line 174
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "height", array()), "auto")) : ("auto")), "html", null, true);
        echo "
\t\t\t\t\t";
        // line 175
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "height", array()) != "auto") && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "height", array()) != null))) {
            echo "px ";
        }
        echo ";
\t\t\t\t";
        // line 176
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "position", array()) == "1") || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "position", array()) == "left"))) {
            // line 177
            echo "\t\t\t\t\tfloat: left;
\t\t\t\t";
        }
        // line 179
        echo "\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "position", array()) == "2") || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "position", array()) == "right"))) {
            // line 180
            echo "\t\t\t\t\tfloat:right;
\t\t\t\t";
        }
        // line 182
        echo "\t\t\t\t";
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "position", array()) == "center")) {
            // line 183
            echo "\t\t\t\tmargin-left:auto;
\t\t\t\tmargin-right:auto;
\t\t\t\t";
        }
        // line 186
        echo "\t\t\t";
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "fullscreen", array()), "enabled", array())) {
            echo "position: fixed; z-index: 9999999; top: 0; left: 0; background-color: white;";
        } else {
            echo "position:relative;";
        }
        echo "\"
\t\t";
    }

    // line 210
    public function block_photos_before($context, array $blocks = array())
    {
        // line 211
        echo "\t\t";
    }

    // line 222
    public function block_photos_attributes($context, array $blocks = array())
    {
        // line 223
        echo "\t\t\t\tid=\"photos-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "\"
\t\t\t\tclass=\"grid-gallery-photos\"
\t\t\t";
    }

    // line 227
    public function block_photos($context, array $blocks = array())
    {
        // line 228
        echo "\t\t\t    ";
        $context["i"] = 0;
        // line 229
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["gallery"] ?? null), "photos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
            // line 230
            echo "\t\t\t\t\t";
            $this->loadTemplate("@galleries/shortcode/helpers.twig", "@galleries/shortcode/gallery.twig", 230)->display(array("gallery" => ($context["gallery"] ?? null), "photo" => $context["photo"], "settings" => ($context["settings"] ?? null), "index" => ($context["i"] ?? null)));
            // line 231
            echo "\t\t\t\t    ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 232
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 233
        echo "\t\t\t";
    }

    // line 241
    public function block_photos_after($context, array $blocks = array())
    {
        // line 242
        echo "\t\t";
    }

    // line 111
    public function getgetSocialSharingWrapperClass($__position__ = null, $__horizontalAlign__ = null, $__verticalAlign__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "position" => $__position__,
            "horizontalAlign" => $__horizontalAlign__,
            "verticalAlign" => $__verticalAlign__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 112
            echo "                ";
            $context["class"] = (($context["position"] ?? null) . " ");
            // line 113
            echo "                ";
            if (((($context["position"] ?? null) == "top") || (($context["position"] ?? null) == "bottom"))) {
                // line 114
                echo "                    ";
                $context["class"] = (($context["class"] ?? null) . ($context["horizontalAlign"] ?? null));
                // line 115
                echo "                ";
            } else {
                // line 116
                echo "                        ";
                $context["class"] = ((($context["class"] ?? null) . "vertical ") .                 // line 117
($context["verticalAlign"] ?? null));
                // line 118
                echo "                ";
            }
            // line 119
            echo "                ";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
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

    public function getTemplateName()
    {
        return "@galleries/shortcode/gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  714 => 119,  711 => 118,  709 => 117,  707 => 116,  704 => 115,  701 => 114,  698 => 113,  695 => 112,  681 => 111,  677 => 242,  674 => 241,  670 => 233,  664 => 232,  661 => 231,  658 => 230,  653 => 229,  650 => 228,  647 => 227,  639 => 223,  636 => 222,  632 => 211,  629 => 210,  618 => 186,  613 => 183,  610 => 182,  606 => 180,  603 => 179,  599 => 177,  597 => 176,  591 => 175,  587 => 174,  583 => 173,  579 => 171,  575 => 169,  573 => 168,  570 => 167,  566 => 165,  564 => 164,  561 => 163,  557 => 161,  555 => 160,  552 => 159,  548 => 157,  546 => 156,  543 => 155,  539 => 153,  535 => 151,  533 => 150,  526 => 147,  524 => 141,  523 => 140,  522 => 139,  521 => 138,  520 => 137,  519 => 133,  518 => 132,  517 => 131,  516 => 130,  515 => 129,  514 => 126,  513 => 125,  512 => 123,  511 => 122,  508 => 121,  505 => 110,  502 => 109,  500 => 108,  498 => 107,  495 => 106,  492 => 105,  489 => 104,  486 => 103,  484 => 102,  481 => 101,  477 => 99,  474 => 98,  468 => 96,  465 => 95,  459 => 93,  456 => 92,  451 => 90,  447 => 89,  442 => 88,  440 => 87,  436 => 86,  431 => 85,  428 => 84,  424 => 83,  419 => 82,  415 => 81,  411 => 80,  407 => 79,  403 => 78,  399 => 77,  395 => 76,  391 => 75,  387 => 74,  383 => 73,  379 => 72,  373 => 70,  371 => 69,  368 => 68,  363 => 66,  360 => 65,  354 => 63,  351 => 62,  346 => 60,  343 => 59,  337 => 57,  332 => 55,  329 => 54,  325 => 52,  322 => 51,  316 => 49,  313 => 48,  309 => 46,  306 => 45,  302 => 43,  299 => 42,  294 => 40,  291 => 39,  288 => 38,  282 => 36,  278 => 34,  276 => 33,  268 => 32,  260 => 31,  256 => 30,  248 => 29,  239 => 27,  235 => 25,  233 => 24,  229 => 23,  225 => 22,  221 => 21,  217 => 20,  213 => 19,  209 => 18,  204 => 17,  201 => 16,  197 => 13,  187 => 10,  179 => 9,  169 => 8,  159 => 7,  156 => 6,  153 => 5,  150 => 4,  138 => 245,  134 => 243,  132 => 241,  123 => 234,  121 => 227,  117 => 225,  115 => 222,  110 => 219,  106 => 217,  102 => 215,  99 => 214,  97 => 213,  94 => 212,  92 => 210,  89 => 209,  86 => 208,  81 => 205,  74 => 203,  70 => 202,  64 => 201,  61 => 200,  50 => 191,  47 => 190,  45 => 189,  41 => 187,  39 => 16,  35 => 14,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/shortcode/gallery.twig", "E:\\xampp\\htdocs\\ctfs\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\shortcode\\gallery.twig");
    }
}
