<?php

/* @galleries/settings.twig */
class __TwigTemplate_1f5b500c4c91abd26cfcfa8a7625a1b60f897b33abe9330c07d32687a2be347e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@galleries/settings.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'tabs' => array($this, 'block_tabs'),
            'preview' => array($this, 'block_preview'),
            'gallery_preview_figure_attributes' => array($this, 'block_gallery_preview_figure_attributes'),
            'gallery_preview_image_attributes' => array($this, 'block_gallery_preview_image_attributes'),
            'content' => array($this, 'block_content'),
            'area' => array($this, 'block_area'),
            'openByLink' => array($this, 'block_openByLink'),
            'disableRightClick' => array($this, 'block_disableRightClick'),
            'socialSharing' => array($this, 'block_socialSharing'),
            'horizontalScroll' => array($this, 'block_horizontalScroll'),
            'horizontalScrollAfter' => array($this, 'block_horizontalScrollAfter'),
            'border' => array($this, 'block_border'),
            'shadow' => array($this, 'block_shadow'),
            'popup' => array($this, 'block_popup'),
            'popupLinkedImageText' => array($this, 'block_popupLinkedImageText'),
            'disableSourceImageForLi' => array($this, 'block_disableSourceImageForLi'),
            'popupAfter' => array($this, 'block_popupAfter'),
            'preload' => array($this, 'block_preload'),
            'post' => array($this, 'block_post'),
            'backgroundImageForHoverEffect' => array($this, 'block_backgroundImageForHoverEffect'),
            'icons' => array($this, 'block_icons'),
            'categories' => array($this, 'block_categories'),
            'pagination' => array($this, 'block_pagination'),
            'watermark' => array($this, 'block_watermark'),
            'form' => array($this, 'block_form'),
            'iconsEffects' => array($this, 'block_iconsEffects'),
            'modals' => array($this, 'block_modals'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "grid-gallery.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_header($context, array $blocks = array())
    {
        // line 8
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\" style=\"float: left; padding-top: 20px;\">
        ";
        // line 27
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()))), "method"), "html", null, true);
        echo "\">";
        echo $this->getAttribute(($context["gallery"] ?? null), "title", array());
        echo "</a>
    </nav>

    <h2 class=\"form-tabs\">
        <a class=\"nav-tab change-tab\" href=\"area\">
            <i class=\"fa fa-home\"></i>
            ";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"overlay\">
            <i class=\"fa fa-info\"></i>
            ";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"cats\">
            <i class=\"fa fa-bookmark-o\"></i>
            ";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categories")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"post\">
            <i class=\"fa fa-columns\"></i>
            ";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Posts")), "html", null, true);
        echo "
        </a>

        <a class=\"nav-tab change-tab\" href=\"water-m-tab\">
            <i class=\"fa fa-fw fa-certificate\"></i>
            ";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Watermark")), "html", null, true);
        echo "
        </a>
        ";
        // line 59
        $this->displayBlock('tabs', $context, $blocks);
        // line 60
        echo "    </h2>
";
    }

    // line 59
    public function block_tabs($context, array $blocks = array())
    {
    }

    // line 63
    public function block_preview($context, array $blocks = array())
    {
        // line 64
        echo "    ";
        if ($this->getAttribute(($context["settings"] ?? null), "watermark", array(), "any", true, true)) {
            // line 65
            echo "        ";
            $context["settingsWatermark"] = twig_array_merge($this->getAttribute(($context["settings"] ?? null), "watermark", array()), array("galleryId" => $this->getAttribute(($context["gallery"] ?? null), "id", array())));
            // line 66
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('set_attachment_settings')->getCallable(), array("watermark", ($context["settingsWatermark"] ?? null))), "html", null, true);
            echo "
    ";
        }
        // line 68
        echo "    ";
        $context["style"] = $this->loadTemplate("@galleries/shortcode/style.twig", "@galleries/settings.twig", 68);
        // line 69
        echo "    ";
        $context["attachment"] = $this->loadTemplate("@galleries/helpers/attachment.twig", "@galleries/settings.twig", 69);
        // line 70
        echo "
    <div id=\"preview\" class=\"gallery-preview\">
        <section class=\"supsystic-bar-preview\" id=\"single-gallery-toolbar\">
            <ul class=\"supsystic-bar-controls\">
                ";
        // line 81
        echo "
                <li title=\"";
        // line 82
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
        echo "\">
                    <button class=\"button button-primary gallery import-to-gallery\" data-gallery-id=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "\">
                        <i class=\"fa fa-fw fa-camera\"></i>
                        ";
        // line 85
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
        echo "
                    </button>
                </li>

                <li>
                    <a class=\"button\"
                       href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()))), "method"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-list fa-fw\"></i>
                        ";
        // line 93
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images list")), "html", null, true);
        echo "
                    </a>
                </li>

                <li>
                    <a class=\"button button-primary\" target=\"_blank\"
                       href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()))), "method"), "html", null, true);
        echo "\">
                        <i class=\"fa fa-fw fa-eye\"></i>
                        ";
        // line 101
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
        echo "
                    </a>
                </li>

                <li>
                    <button class=\"button button-primary\" id=\"btnSave\">
                        <i class=\"fa fa-fw fa-check\"></i>
                        ";
        // line 108
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save")), "html", null, true);
        echo "
                    </button>
                </li>
            </ul>
        </section>
        ";
        // line 113
        if ( !twig_test_empty($this->getAttribute(($context["gallery"] ?? null), "photos", array()))) {
            // line 114
            echo "            <div style=\"
            ";
            // line 115
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "settings", array()), "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "settings", array()), "area", array()), "photo_width", array())))) {
                // line 116
                echo "                width:";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "settings", array()), "area", array()), "photo_width", array()) + 40), "html", null, true);
                echo "px;
            ";
            }
            // line 118
            echo "            margin: 10px auto;
            max-width: 380px;
            clear:both;
            \">
                <figure
\t\t\t\t\t";
            // line 123
            $this->displayBlock('gallery_preview_figure_attributes', $context, $blocks);
            // line 129
            echo "\t\t\t\t\t>
                   ";
            // line 130
            list($context["width"], $context["height"], $context["crop"]) =             array(0, 0, 0);
            // line 131
            echo "
                    ";
            // line 132
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()) == 0)) {
                // line 133
                echo "                        ";
                $context["width"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array());
                // line 134
                echo "                    ";
            }
            // line 135
            echo "
                    ";
            // line 136
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()) == 0)) {
                // line 137
                echo "                        ";
                $context["height"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array());
                // line 138
                echo "                    ";
            }
            // line 139
            echo "
                    ";
            // line 140
            if (((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == 0) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "2")) || ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()) == "3"))) {
                // line 141
                echo "                        ";
                $context["crop"] = 1;
                // line 142
                echo "                    ";
            } else {
                // line 143
                echo "                        ";
                $context["height"] = null;
                // line 144
                echo "                    ";
            }
            // line 145
            echo "
                    ";
            // line 146
            if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) {
                // line 147
                echo "                        ";
                $context["cropQuality"] = $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "cropQuality", array());
                // line 148
                echo "                    ";
            } else {
                // line 149
                echo "                        ";
                $context["cropQuality"] = null;
                // line 150
                echo "                    ";
            }
            // line 151
            echo "                    <img
\t\t\t\t\t\t";
            // line 152
            $this->displayBlock('gallery_preview_image_attributes', $context, $blocks);
            // line 167
            echo "\t\t\t\t\t\t/>
                    <figcaption style=\"";
            // line 168
            echo twig_escape_filter($this->env, trim(($context["figcaptionStyle"] ?? null)), "html", null, true);
            echo "\">
                        <div style=\"display: table; height: 100%; width: 100%;\">
                            <div class=\"grid-gallery-figcaption-wrap\" style=\"display: table-cell;\">
                                <span>Gallery by Supsystic</span>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        ";
        } else {
            // line 178
            echo "            <div style=\"clear: both;\"></div>
            <h2 style=\"text-align: center;\">
                ";
            // line 180
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("There're no images in the gallery.")), "html", null, true);
            echo "<br>
                <a class=\"import-to-gallery\" href=\"#\">Add Images</a>
            </h2>
        ";
        }
        // line 184
        echo "
        <div style=\"clear: both;\"></div>

        <div class=\"shortcode-wrap\" style=\"margin-top: 20px\">
            <div class=\"shortcode\">";
        // line 188
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shortcode:")), "html", null, true);
        echo " <input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"[";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "config", array()), "get", array(0 => "shortcode_name"), "method"), "html", null, true);
        echo " id=";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "id", array()), "html", null, true);
        echo "]\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly></div>
            <div class=\"shortcode\">";
        // line 189
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("PHPCode:")), "html", null, true);
        echo " <input type=\"text\" id=\"shortcode\" class=\"gallery-shortcode\" value=\"";
        echo twig_escape_filter($this->env, (("<?php echo do_shortcode('[supsystic-gallery id=" . $this->getAttribute(($context["gallery"] ?? null), "id", array())) . "]') ?>"), "html", null, true);
        echo "\" onclick=\"this.select();\" size=\"42\" style=\"font-size: 12px;\" readonly></div>
        </div>

        <small style=\"left:25px;position:absolute;top:10px;display:none;\">Oops! Transparency doesn't work in live preview. </small>
        <div class=\"separator\"></div>

        <div style=\"margin: 20px 0\">
            <a class=\"button\" id=\"openSettingsImportDialog\" href=\"\"><i class=\"fa fa-copy\"></i> ";
        // line 196
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings")), "html", null, true);
        echo "</a>
        </div>
    </div>
";
    }

    // line 123
    public function block_gallery_preview_figure_attributes($context, array $blocks = array())
    {
        // line 124
        echo "\t\t\t\t\t\tclass=\"grid-gallery-caption\" data-grid-gallery-type=\"center\" style=\"float: none !important;\"
\t\t\t\t\t\t";
        // line 125
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "personal", array()) == "true")) {
            // line 126
            echo "\t\t\t\t\t\t\tdata-thumb-overlay-personal=\"1\"
\t\t\t\t\t\t";
        }
        // line 128
        echo "\t\t\t\t\t";
    }

    // line 152
    public function block_gallery_preview_image_attributes($context, array $blocks = array())
    {
        // line 153
        echo "\t\t\t\t\t\t\tsrc=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_attachment')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "photos", array()), 0, array(), "array"), "attachment", array()), "id", array()), ($context["width"] ?? null), ($context["height"] ?? null), ($context["crop"] ?? null), ($context["cropQuality"] ?? null))), "html", null, true);
        echo "\" data-src=\"";
        echo twig_escape_filter($this->env, ("holder.js/350x250?theme=simple&text=" . $this->getAttribute(($context["gallery"] ?? null), "title", array())), "html", null, true);
        echo "\" alt=\"";
        echo $this->getAttribute(($context["gallery"] ?? null), "title", array());
        echo "\"
\t\t\t\t\t\t\tstyle=\"
\t\t\t\t\t\t\t\t";
        // line 155
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array())))) {
            // line 156
            echo "\t\t\t\t\t\t\t\t\twidth:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()), "html", null, true);
            echo "px;
\t\t\t\t\t\t\t\t";
        } else {
            // line 158
            echo "\t\t\t\t\t\t\t\t\twidth: auto;
\t\t\t\t\t\t\t\t";
        }
        // line 160
        echo "\t\t\t\t\t\t\t\t";
        if ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()) == 0) &&  !twig_test_empty($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array())))) {
            // line 161
            echo "\t\t\t\t\t\t\t\t\theight: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()), "html", null, true);
            echo "px;
\t\t\t\t\t\t\t\t";
        } else {
            // line 163
            echo "\t\t\t\t\t\t\t\t\theight: auto;
\t\t\t\t\t\t\t\t";
        }
        // line 165
        echo "\t\t\t\t\t\t\t\t\"
\t\t\t\t\t\t";
    }

    // line 201
    public function block_content($context, array $blocks = array())
    {
        // line 202
        echo "    ";
        $context["form"] = $this->loadTemplate("@core/form.twig", "@galleries/settings.twig", 202);
        // line 203
        echo "    ";
        $context["f"] = $this;
        // line 204
        echo "
    <div class=\"settings-wrap\" data-leave-confirm=\"";
        // line 205
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Your changes not saved. You really want to leave without saving?")), "html", null, true);
        echo "\">
        ";
        // line 206
        echo $context["form"]->getopen("post", $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "saveSettings", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()), "_wpnonce" => ($context["_wpnonce"] ?? null))), "method"), array("id" => "form-settings"));
        echo "
        <input id=\"currentPresetTitle\" name=\"title\" type=\"hidden\" value=\"";
        // line 207
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["settings"] ?? null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["settings"] ?? null), "title", array()), "")) : ("")), "html", null, true);
        echo "\"/>
        <input name=\"previewImage\" type=\"hidden\" value=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "settings", array()), "previewImage", array()), "html", null, true);
        echo "\"/>
        <input name=\"sort[sortto]\" type=\"hidden\" value=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sort", array()), "sortto", array()), "html", null, true);
        echo "\"/>
        <input name=\"sort[sortby]\" type=\"hidden\" value=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sort", array()), "sortby", array()), "html", null, true);
        echo "\"/>

        <div data-tab=\"area\">
            ";
        // line 213
        $this->displayBlock('area', $context, $blocks);
        // line 336
        echo "
            ";
        // line 337
        $this->displayBlock('socialSharing', $context, $blocks);
        // line 481
        echo "
            ";
        // line 482
        $this->displayBlock('horizontalScroll', $context, $blocks);
        // line 520
        echo "
            <div class=\"load-more-button-preview\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 523
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load more gallery images with scroll or button")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\" href=\"";
        // line 525
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Get PRO"), "method"), "html", null, true);
        echo "</a>
                </h1>
                <div>
                    <a href=\"";
        // line 528
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                        <img src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/load_more_button_pro.jpg\" />
                    </a>
                </div>
                <div class=\"separator\"></div>
            </div>

            <div class=\"custom-buttons-preview\">
                <table class=\"form-table\">
                    <thead>
                        ";
        // line 538
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Custom Buttons")),         // line 539
$context["form"]->getbutton("buttons-presets-editor-preview", "Show preset Editor", array("class" => "button button-primary")), "custom-buttons-preview", true);
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            </div>

            ";
        // line 545
        $this->displayBlock('border', $context, $blocks);
        // line 590
        echo "
            ";
        // line 591
        $this->displayBlock('shadow', $context, $blocks);
        // line 658
        echo "
            ";
        // line 659
        $this->displayBlock('popup', $context, $blocks);
        // line 954
        echo "
            ";
        // line 955
        $this->displayBlock('preload', $context, $blocks);
        // line 1007
        echo "        </div>

        ";
        // line 1009
        $this->displayBlock('post', $context, $blocks);
        // line 1026
        echo "
        <div data-tab=\"overlay\">
            <table class=\"form-table\" name=\"captions\">
                <thead>
                    ";
        // line 1031
        echo "                    ";
        $context["effects"] = array("none" => "None", "center" => "Middle", "quarter-appear" => "Appear", "quarter-slide-up" => "Quarter Slide Up", "quarter-slide-side" => "Quarter Slide Side", "quarter-fall-in" => "Quarter Fall in", "quarter-two-step" => "Quarter Two-step", "quarter-zoom" => "Quarter Caption Zoom", "cover-fade" => "Cover Fade", "cover-push-right" => "Cover Push Right", "revolving-door-left" => "Revolving Door Left", "revolving-door-right" => "Revolving Door Right", "revolving-door-top" => "Revolving Door Top", "revolving-door-bottom" => "Revolving Door Bottom", "cover-slide-top" => "Cover Slide Top", "offset" => "Caption Offset", "guillotine-reverse" => "Guillotine Reverse", "half-slide" => "Half Slide", "sqkwoosh" => "Sqkwoosh", "tunnel" => "Tunnel", "direction-aware" => "Direction Aware", "phophorus-rotate" => "Phophorus Rotate", "phophorus-offset" => "Phophorus Offset", "phophorus-scale" => "Phophorus Scale", "cube" => "Cube", "polaroid" => "Polaroid", "3d-cube" => "3D Cube");
        // line 1060
        echo "                    ";
        $context["iconsWithCaptionsEffects"] = array("icons" => "Default", "icons-scale" => "Scale", "icons-sodium-left" => "Sodium Left", "icons-sodium-top" => "Sodium Top", "icons-nitrogen-top" => "Nitrogen Top");
        // line 1067
        echo "                    ";
        $context["enableCaptions"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 1068
        echo "                    ";
        $context["polaroidIsEnable"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()) == "polaroid")) ? ("true") : ("false"));
        // line 1069
        echo "
                    ";
        // line 1071
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Captions")), (((        // line 1072
$context["form"]->getradio("thumbnail[overlay][enabled]", "true", twig_array_merge(array("id" => "showCaptions"), ((        // line 1075
($context["enableCaptions"] ?? null)) ? (array("checked" => "checked")) : (array())))) .         // line 1077
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "showCaptions")) .         // line 1081
$context["form"]->getradio("thumbnail[overlay][enabled]", "false", twig_array_merge(array("id" => "hideCaptions"), ((        // line 1084
($context["enableCaptions"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .         // line 1086
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "hideCaptions")), "", true, "useCaptions");
        // line 1091
        echo "

                    ";
        // line 1094
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Effect")), (        // line 1095
$context["form"]->getbutton("", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose effect")), array("id" => "chooseEffect", "class" => "button bordered")) .         // line 1100
$context["form"]->gethidden("thumbnail[overlay][effect]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1102
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "effect", array()), "quarter-appear")) : ("quarter-appear")), array("id" => "overlayEffect"))), "chooseEffect");
        // line 1106
        echo "

\t\t\t\t\t";
        // line 1109
        echo "\t\t\t\t\t";
        $this->displayBlock('backgroundImageForHoverEffect', $context, $blocks);
        // line 1124
        echo "
                    ";
        // line 1126
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Personal captions")),         // line 1127
$context["form"]->getselect("thumbnail[overlay][personal]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1130
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "personal", array()), "false")) : ("false")), array("style" => "width: auto;")), "overlay-personal");
        // line 1134
        echo "

                    ";
        // line 1137
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Style")),         // line 1138
$context["form"]->getselect("", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))),         // line 1141
($context["polaroidIsEnable"] ?? null), array("style" => "width: auto;")), "polaroid-effect");
        // line 1145
        echo "

                    ";
        // line 1148
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Animation")),         // line 1149
$context["form"]->getselect("thumbnail[overlay][polaroidAnimation]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1152
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidAnimation", array()), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-animation");
        // line 1156
        echo "

                    ";
        // line 1159
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Image Scattering ")),         // line 1160
$context["form"]->getselect("thumbnail[overlay][polaroidScattering]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1163
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidScattering", array()), "true")) : ("true")), array("style" => "width: auto;")), "polaroid-scattering");
        // line 1167
        echo "

                    ";
        // line 1170
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Polaroid Frame Width")),         // line 1171
$context["form"]->getinput("number", "thumbnail[overlay][polaroidFrameWidth]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1174
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "polaroidFrameWidth", array()), 20)) : (20)), array("style" => array("width" => "140px"))), "polaroid-frame-width");
        // line 1178
        echo "

                    ";
        // line 1181
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")),         // line 1182
$context["form"]->gettext("thumbnail[overlay][background]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1184
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "background", array()), array("class" => "gg-color-picker")), "overlay-background");
        // line 1188
        echo "

                    ";
        // line 1191
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text color")),         // line 1192
$context["form"]->gettext("thumbnail[overlay][foreground]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1194
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "foreground", array()), array("class" => "gg-color-picker")), "overlay-foreground");
        // line 1198
        echo "

                    ";
        // line 1201
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transparency")),         // line 1202
$context["form"]->getselect("thumbnail[overlay][transparency]", array(0 => "0%", 1 => "10%", 2 => "20%", 3 => "30%", 4 => "40%", 5 => "50%", 6 => "60%", 7 => "70%", 8 => "80%", 9 => "90%", 10 => "100%"), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 1205
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "overlay", array(), "any", false, true), "transparency", array()), 9)) : (9)), array("style" => "width: auto;")), "overlay-transparency");
        // line 1209
        echo "

                    ";
        // line 1212
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text size")), (        // line 1213
$context["form"]->getinput("number", "thumbnail[overlay][text_size]", $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1216
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), array("style" => array("width" => "140px"))) .         // line 1219
$context["form"]->getselect("thumbnail[overlay][text_size_unit]", array(0 => "pixels", 1 => "percents", 2 => "ems"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1222
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array("style" => "margin-top: -2px; height: 27px"))), "text-size");
        // line 1226
        echo "

                    ";
        // line 1229
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text horizontal align")),         // line 1230
$context["form"]->getselect("thumbnail[overlay][text_align]", array("left" => "Left", "right" => "Right", "center" => "Center", "auto" => "Auto"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1233
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_align", array()), array("style" => "width: auto;")), "text-align");
        // line 1237
        echo "

                    ";
        // line 1240
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Text vertical align")),         // line 1241
$context["form"]->getselect("thumbnail[overlay][position]", array("top" => "Top", "middle" => "Middle", "bottom" => "Bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1244
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), array("style" => "width: auto;")), "overlay-position");
        // line 1248
        echo "

                    ";
        // line 1251
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Font family")),         // line 1252
$context["form"]->getselectv("thumbnail[overlay][font_family]",         // line 1254
($context["fontList"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(        // line 1255
($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "font_family", array()), array("style" => "width: auto;")), "font-family");
        // line 1259
        echo "


                    ";
        // line 1263
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide image title tooltip")),         // line 1264
$context["form"]->getselect("thumbnail[tooltip]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), $this->getAttribute($this->getAttribute(        // line 1267
($context["settings"] ?? null), "thumbnail", array()), "tooltip", array()), array("style" => "width: auto;")), "tooltip");
        // line 1271
        echo "

                    ";
        // line 1274
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mobile - show always caption")),         // line 1275
$context["form"]->getselect("thumbnail[isMobile]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute(        // line 1278
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isMobile", array()), "false")) : ("false"))), "ismobile");
        // line 1281
        echo "

                    ";
        // line 1284
        echo "                    ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable captions on mobile")),         // line 1285
$context["form"]->getselect("thumbnail[isDisableMobileCaption]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute(        // line 1288
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "isDisableMobileCaption", array()), "false")) : ("false"))), "isDisableMobileCaption");
        // line 1291
        echo "
                </thead>
            </table>

            <div class=\"separator\"></div>

            ";
        // line 1297
        $this->displayBlock('icons', $context, $blocks);
        // line 1424
        echo "        </div>

        ";
        // line 1426
        $this->displayBlock('categories', $context, $blocks);
        // line 1457
        echo "
        ";
        // line 1458
        $this->displayBlock('watermark', $context, $blocks);
        // line 1473
        echo "
        ";
        // line 1474
        $this->displayBlock('form', $context, $blocks);
        // line 1476
        echo "
        ";
        // line 1477
        echo $context["form"]->getclose();
        echo "

        <div id=\"saveDialog\" title=\"";
        // line 1479
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save settings as preset")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetTitle\">
                    ";
        // line 1482
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preset title:")), "html", null, true);
        echo "
                </label>
            </div>
            <div>
                <input id=\"presetTitle\" type=\"text\" name=\"title\" style=\"width:100%;\" value=\"";
        // line 1486
        echo twig_escape_filter($this->env, $this->getAttribute(($context["preset"] ?? null), "title", array()), "html", null, true);
        echo "\"/>
                <input id=\"settingsId\" type=\"hidden\" name=\"settings_id\" value=\"";
        // line 1487
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"/>
            </div>
        </div>

        <div id=\"deletePreset\" title=\"";
        // line 1491
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete preset")), "html", null, true);
        echo "\">
            <p>
                ";
        // line 1493
        echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Are you really want to delete preset \"%s\"?")), $this->getAttribute(($context["preset"] ?? null), "title", array())), "html", null, true);
        echo "
            </p>
            <input type=\"hidden\" id=\"presetId\" value=\"";
        // line 1495
        echo twig_escape_filter($this->env, $this->getAttribute(($context["preset"] ?? null), "id", array()), "html", null, true);
        echo "\">
        </div>

        <div id=\"loadPreset\" title=\"";
        // line 1498
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Load settings from presets")), "html", null, true);
        echo "\">
            <div>
                <label for=\"presetList\">";
        // line 1500
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select preset:")), "html", null, true);
        echo "</label>
            </div>
            <div>
                <select id=\"presetList\" name=\"presetList\" style=\"width:100%\"></select>
            </div>
            <div id=\"presetListError\">
                <p id=\"presetLoadingFailed\" style=\"display:none\">
                    ";
        // line 1507
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Failed to load the presets.")), "html", null, true);
        echo "
                </p>

                <p id=\"presetEmpty\" style=\"display:none\">
                    ";
        // line 1511
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Currently you have no presets.")), "html", null, true);
        echo "
                </p>
            </div>
        </div>

        <div id=\"themeDialog\" title=\"";
        // line 1516
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select \"Big image\" theme")), "html", null, true);
        echo "\">
            <h1>
                ";
        // line 1518
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select a theme")), "html", null, true);
        echo "
            </h1>
            <div>
                ";
        // line 1521
        $context["bigImageThemes"] = array("theme_1" => "Theme 1", "theme_2" => "Theme 2", "theme_3" => "Theme 3", "theme_4" => "Theme 4", "theme_5" => "Theme 5", "theme_6" => "Theme 6", "theme_7" => "Theme 7");
        // line 1530
        echo "
                ";
        // line 1531
        if ($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method")) {
            // line 1532
            echo "                    ";
            $context["bigImageThemes"] = twig_array_merge(($context["bigImageThemes"] ?? null), array("theme_1_pro" => "Fullscreen popup"));
            // line 1533
            echo "                ";
        }
        // line 1534
        echo "
                ";
        // line 1535
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bigImageThemes"] ?? null));
        foreach ($context['_seq'] as $context["value"] => $context["name"]) {
            // line 1536
            echo "                    <div class=\"grid-gallery-caption\">
                        <img data-name=\"";
            // line 1537
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" data-val=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\" class=\"theme dialog-image\"
                             src=\"";
            // line 1538
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "getModule", array(0 => "colorbox"), "method"), "getThemeScreenshotUrl", array(0 => $context["value"]), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\"
                             title=\"";
            // line 1539
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\"/>
                        <div class=\"select-element\">
                            <h3>";
            // line 1541
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "</h3>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1545
        echo "
            </div>
        </div>

        <div id=\"effectDialog\" title=\"";
        // line 1549
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select overlay effect")), "html", null, true);
        echo "\">
            <div id=\"effectsPreview\" style=\"margin-top: 10px;\">
                ";
        // line 1551
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["effects"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 1552
            echo "                    ";
            if (($context["type"] == "direction-aware")) {
                // line 1553
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <div class=\"box\">
                                <div class=\"box__right\">Right → Left</div>
                                <div class=\"box__left\">Left → Right</div>
                                <div class=\"box__top\">Top → Bottom</div>
                                <div class=\"box__bottom\">Bottom → Top</div>
                                <div class=\"box__center\">
                                </div>
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1561
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
                            </div>
                            <div class=\"select-element\">
                                ";
                // line 1564
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            } elseif ((            // line 1567
$context["type"] == "3d-cube")) {
                // line 1568
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <div class=\"box-3d-cube-scene\" style=\"perspective: 300px;-webkit-perspective: 300px\">
                                <div class=\"box-3d-cube\"
                                     style=\"
                                         transform-origin:50% 50% -75px;
                                         -ms-transform-origin: 50% 50% -75px;
                                         -webkit-transform-origin: 50% 50% -75px;
                                         width:150px; height:150px
                                     \"
                                >
                                    <div class=\"face front\" style=\"width:150px; height:150px\">
                                        <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1579
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
                                    </div>
                                    <div style=\"";
                // line 1581
                echo twig_escape_filter($this->env, trim(($context["figcaptionStyle"] ?? null)), "html", null, true);
                echo "width:150px; height:150px\" class=\"face back\">
                                        <div class=\"grid-gallery-figcaption-wrap\">
                                            <span>";
                // line 1583
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"select-element\">
                                ";
                // line 1589
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            } else {
                // line 1593
                echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
                // line 1594
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" class=\"dialog-image\">
                            <figcaption style=\"";
                // line 1595
                echo twig_escape_filter($this->env, trim(($context["figcaptionStyle"] ?? null)), "html", null, true);
                echo "\">
                                <div class=\"grid-gallery-figcaption-wrap\" style=\"width:100%;height:100%;top:0;\">
                                    <div style=\"display:table;width:100%;height:100%;\">
                                        <span style=\"display:table-cell;font-size:";
                // line 1598
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
                echo ";padding:10px;vertical-align:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
                echo ";\">Caption</span>
                                    </div>
                                </div>
                            </figcaption>
                            <div class=\"select-element\">
                                ";
                // line 1603
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                echo "
                            </div>
                        </figure>
                    ";
            }
            // line 1607
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1608
        echo "                <div class=\"grid-gallery-clearfix\" style=\"clear: both;\"></div>
                <div class=\"captions-effect-with-icons\" data-confirm=\"";
        // line 1609
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("This effect requires icons be enabled. Enable Icons?")), "html", null, true);
        echo "\">
                    <h3>Captions effects with icons</h3>
                    ";
        // line 1611
        $this->displayBlock('iconsEffects', $context, $blocks);
        // line 1635
        echo "                </div>
            </div>
        </div>

        <div id=\"shadowDialog\" title=\"";
        // line 1639
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow preset")), "html", null, true);
        echo "\">
            <h1>
                ";
        // line 1641
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select shadow")), "html", null, true);
        echo "
            </h1>
            <div class=\"shadow-dialog-wrapper\">
                ";
        // line 1644
        $context["shadowPresets"] = array("effect_1" => array("name" => "Effect 1", "offset_x" => "8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_2" => array("name" => "Effect 2", "offset_x" => "-8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_3" => array("name" => "Effect 3", "offset_x" => "-8", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_4" => array("name" => "Effect 4", "offset_x" => "8", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_5" => array("name" => "Effect 5", "offset_x" => "8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_6" => array("name" => "Effect 6", "offset_x" => "-8", "offset_y" => "0", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_7" => array("name" => "Effect 7", "offset_x" => "0", "offset_y" => "-8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_8" => array("name" => "Effect 8", "offset_x" => "0", "offset_y" => "8", "blur" => "6", "color" => "rgba(0, 0, 0, 0.58)"), "effect_9" => array("name" => "Effect 9", "offset_x" => "0", "offset_y" => "4", "blur" => "10", "color" => "rgba(0, 0, 0, 1.0)"), "effect_10" => array("name" => "Effect 10", "offset_x" => "0", "offset_y" => "-4", "blur" => "8", "color" => "rgba(0, 0, 0, 1.0)"));
        // line 1716
        echo "

                ";
        // line 1718
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shadowPresets"] ?? null));
        foreach ($context['_seq'] as $context["value"] => $context["effect"]) {
            // line 1719
            echo "                    <div class=\"grid-gallery-caption\" style=\"float: left; margin-left: 15px; cursor: pointer;\">
                        <div class=\"shadow-preset\" data-offset-x=\"";
            // line 1720
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_x", array()), "html", null, true);
            echo "\" data-offset-y=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_y", array()), "html", null, true);
            echo "\" data-blur=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "blur", array()), "html", null, true);
            echo "\" data-color=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "color", array()), "html", null, true);
            echo "\"
                             style=\"margin: 20px; box-shadow: ";
            // line 1721
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_x", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "offset_y", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "blur", array()), "html", null, true);
            echo "px ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "color", array()), "html", null, true);
            echo ";\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 1722
            echo twig_escape_filter($this->env, $this->getAttribute($context["effect"], "name", array()), "html", null, true);
            echo "\" class=\"dialog-image\"/>
                        </div>
                        <div class=\"select-element\">
                            ";
            // line 1725
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['effect'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1729
        echo "
            </div>
        </div>

        <div id=\"reviewNotice\" title=\"Review\" hidden>
            <h3>Hey, I noticed you just use Gallery by Supsystic over a week – that’s awesome!</h3>
            <p>Could you please do me a BIG favor and give it a 5-star rating on WordPress? Just to help us spread the word and boost our motivation.</p>

            <ul style=\"list-style: circle; padding-left: 30px;\">
                <li>
                    <button class=\"button button-primary\"><a href=\"//wordpress.org/support/view/plugin-reviews/gallery-by-supsystic?rate=5#postform\" target=\"_blank\" class=\"bupSendStatistic\" data-statistic-code=\"is_shown\" style=\"color:#000000 !important;\">Ok, you deserve it</a></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">Nope, maybe later</span></button>
                </li>
                <li>
                    <button class=\"button button-primary\"><span class=\"toeLikeLink bupSendStatistic\" data-statistic-code=\"is_shown\">I already did</span></button>
                </li>
            </ul>
        </div>

        <div id=\"settingsImportDialog\" title=\"Import\" hidden>
            <div class=\"import\">
                <p>";
        // line 1752
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import settings from gallery")), "html", null, true);
        echo "</p>
                <select class=\"list\"></select>
            </div>
            <div class=\"import-not-available\" style=\"display:none\">
                <p>";
        // line 1756
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Here you can import settings from other galleries, but right now, you have only one gallery, create more - and see how it works")), "html", null, true);
        echo "</p>
            </div>
        </div>

        ";
        // line 1760
        $context["importTypes"] = $this->loadTemplate("@galleries/shortcode/import.twig", "@galleries/settings.twig", 1760);
        // line 1761
        echo "        <div id=\"importDialog\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
            ";
        // line 1762
        echo $context["importTypes"]->getshow(400, $this->getAttribute(($context["gallery"] ?? null), "id", array()));
        echo "
        </div>

        <div class=\"buttons-edit-preset-dialog-preview\" title=\"";
        // line 1765
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons preset editor for Paginations, Categories and Load More buttons")), "html", null, true);
        echo "\">
            <a href=\"";
        // line 1766
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=show-more&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\">
                <img src=\"";
        // line 1767
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/custom_button_icon_pro.jpg\" />
            </a>
        </div>
        <div class=\"loader-dialog-preview\" title=\"";
        // line 1770
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Improve free version")), "html", null, true);
        echo "\" style=\"line-height: 200%;\">
            Please be advised that this option is available only in <u>Pro version</u>. You can
            <a  href=\"";
        // line 1772
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" class=\"button\">
                Get PRO
            </a>
            today and get this and other PRO options for Galleries!
        </div>
    </div>

    ";
        // line 1779
        $this->displayBlock('modals', $context, $blocks);
    }

    // line 213
    public function block_area($context, array $blocks = array())
    {
        // line 214
        echo "                <table class=\"form-table\" name=\"area\">
                    <thead>
                        ";
        // line 216
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Type")),         // line 217
$context["form"]->getselect("area[grid]", array(0 => "Fixed", 1 => "Vertical", 2 => "Horizontal", 3 => "Fixed Columns"), $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "grid", array()), array("style" => "width: auto;")), "grid-type", "gallery-types", "columns");
        echo "
        \t\t\t\t
                        <tr id=\"generalColumnsRow\" hidden>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
        // line 222
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Number of Columns")), "html", null, true);
        echo "
        \t\t\t\t\t\t\t";
        // line 223
        echo $context["form"]->getshow_tooltip("columns");
        echo "
        \t\t\t\t\t\t\t<br />
        \t\t\t\t\t\t\t<label><a href=\"http://supsystic.com/fixed-columns-gallery-example/\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">More Info</a> </label>
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" name=\"general[columns][number]\" value=\"";
        // line 229
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)), "html", null, true);
        echo "\">
                            </td>
                        </tr>

                        ";
        // line 233
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Responsive columns")), (((((((((((((        // line 234
$context["form"]->getinput("number", "general[responsiveColumns][desktop][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "width", array()), 1200)) : (1200)), array("style" => array("width" => "60px;"))) . $context["form"]->getspan("", "px")) .         // line 235
$context["form"]->getinput("number", "general[responsiveColumns][desktop][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "desktop", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")) . "<br>") .         // line 237
$context["form"]->getinput("number", "general[responsiveColumns][tablet][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "width", array()), 768)) : (768)), array("style" => array("width" => "60px;")))) . $context["form"]->getspan("", "px")) .         // line 238
$context["form"]->getinput("number", "general[responsiveColumns][tablet][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "tablet", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")) . "<br>") .         // line 240
$context["form"]->getinput("number", "general[responsiveColumns][mobile][width]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 241
($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "width", array()), 320)) : (320)), array("style" => array("width" => "60px;")))) . $context["form"]->getspan("", "px")) .         // line 242
$context["form"]->getinput("number", "general[responsiveColumns][mobile][columns]", (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "responsiveColumns", array(), "any", false, true), "mobile", array(), "any", false, true), "columns", array()), (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "general", array(), "any", false, true), "columns", array(), "any", false, true), "number", array()), 3)) : (3)))), array("style" => array("width" => "40px;")))) . $context["form"]->getspan("", "columns")), "responsive-columns");
        echo "

                        ";
        // line 246
        echo "    \t\t\t\t\t
    \t\t\t\t\t";
        // line 247
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Name:")),         // line 248
$context["form"]->getinput("text", "title", $this->getAttribute(($context["gallery"] ?? null), "title", array()), array("style" => array("width" => "232px;"))), "title");
        // line 249
        echo "

                        ";
        // line 251
        echo $context["form"]->getrow($this->getAttribute(($context["environment"] ?? null), "translate", array(0 => "Gallery Position"), "method"),         // line 252
$context["form"]->getselect("area[position]", array(0 => "Left", 1 => "Center", 2 => "Right"), (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "position", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "position", array()), 1)) : (1)), array("style" => "width: 100px;")));
        echo "


                        ";
        // line 255
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Images distance")), (        // line 256
$context["form"]->getinput("number", "area[distance]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "distance", array()), array("style" => array("width" => "140px;"))) .         // line 257
$context["form"]->getspan("", "pixels")), "distance");
        echo "

                        ";
        // line 259
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery width")), (        // line 260
$context["form"]->getinput("number", "area[width]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "width", array()), array("style" => array("width" => "140px"))) .         // line 261
$context["form"]->getselect("area[width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "width_unit", array()), array("style" => "margin-top: -2px; height: 27px;"))), "area-width");
        echo "

                        ";
        // line 264
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Full screen width")),         // line 265
$context["form"]->getcheckbox("fullscreen", "1", (($this->getAttribute(        // line 268
($context["settings"] ?? null), "fullscreen", array())) ? (array("checked" => "checked")) : (array()))), "full-screen-width");
        // line 271
        echo "

                        ";
        // line 273
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery padding")), (        // line 274
$context["form"]->getinput("number", "area[padding]", (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "padding", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array(), "any", false, true), "padding", array()), 0)) : (0)), array("style" => array("width" => "140px"))) . $context["form"]->getspan("", "pixels")), "area-padding");
        echo "

                        ";
        // line 281
        echo "
                        ";
        // line 282
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image width")), (        // line 283
$context["form"]->getinput("number", "area[photo_width]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width", array()), array("style" => array("width" => "140px"))) .         // line 284
$context["form"]->getselect("area[photo_width_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_width_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "photo-width");
        echo "


                        ";
        // line 287
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image height")), (        // line 288
$context["form"]->getinput("number", "area[photo_height]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height", array()), array("style" => array("width" => "140px"))) .         // line 289
$context["form"]->getselect("area[photo_height_unit]", array(0 => "pixels"), $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "area", array()), "photo_height_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "photo-height");
        echo "

                        ";
        // line 291
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image radius")), (        // line 292
$context["form"]->getinput("number", "thumbnail[border][radius]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius", array()), array("style" => array("width" => "140px"))) .         // line 293
$context["form"]->getselect("thumbnail[border][radius_unit]", array(0 => "pixels", 1 => "percents"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius_unit", array()), array("style" => "margin-top: -2px; height: 27px; width: 85px;"))), "border-radius");
        echo "
                   
                        ";
        // line 296
        echo "                        ";
        $context["qualityList"] = array("100" => "100%", "90" => "90%", "80" => "80%", "70" => "70%", "60" => "60%", "50" => "50%", "40" => "40%", "30" => "30%", "20" => "20%", "10" => "10%");
        // line 308
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image crop quality")),         // line 309
$context["form"]->getselect("thumbnail[cropQuality]",         // line 311
($context["qualityList"] ?? null), (($this->getAttribute($this->getAttribute(        // line 312
($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "cropQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array(), "any", false, true), "cropQuality", array()), "100")) : ("100"))), "cropQuality");
        // line 315
        echo "

                        ";
        // line 317
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Display only first image")),         // line 318
$context["form"]->getcheckbox("displayFirstPhoto", "on", ((($this->getAttribute(($context["settings"] ?? null), "displayFirstPhoto", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "display-first-photo");
        echo "

                        ";
        // line 320
        $this->displayBlock('openByLink', $context, $blocks);
        // line 328
        echo "

                        ";
        // line 330
        $this->displayBlock('disableRightClick', $context, $blocks);
        // line 332
        echo "                    </thead>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 320
    public function block_openByLink($context, array $blocks = array())
    {
        // line 321
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open by link in popup")), "utm_source=plugin&utm_medium=open-by-link&utm_campaign=gallery", "open-by-link",         // line 324
$context["form"]->getcheckbox("openByLink", "on", array("disabled" => "disabled")));
        // line 326
        echo "
                        ";
    }

    // line 330
    public function block_disableRightClick($context, array $blocks = array())
    {
        // line 331
        echo "                        ";
    }

    // line 337
    public function block_socialSharing($context, array $blocks = array())
    {
        // line 338
        echo "                <table class=\"form-table\">
                    <thead>
                    ";
        // line 340
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Sharing")), (((        // line 341
$context["form"]->getradio("socialSharing[enabled]", true, twig_array_merge(array("id" => "social-sharing-enable"), (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array())))) .         // line 342
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "social-sharing-enable")) .         // line 343
$context["form"]->getradio("socialSharing[enabled]", false, twig_array_merge(array("id" => "social-sharing-disable"), (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "enabled", array())) ? (array()) : (array("checked" => "checked")))))) .         // line 344
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "social-sharing-disable")), "social-sharing", true);
        echo "
                    </thead>
                    <tbody style=\"display: none;\">
                    ";
        // line 347
        if ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "pluginInstalled", array())) {
            // line 348
            echo "                        ";
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "projectsList", array()))) {
                // line 349
                echo "

                            ";
                // line 351
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social Buttons Project")),                 // line 352
$context["form"]->getselect("socialSharing[projectId]", $this->getAttribute($this->getAttribute(                // line 353
($context["settings"] ?? null), "socialSharing", array()), "projectsList", array()), $this->getAttribute($this->getAttribute(                // line 354
($context["settings"] ?? null), "socialSharing", array()), "projectId", array()), array("style" => "width: 200px")), "social-buttons-project");
                // line 356
                echo "

                            ";
                // line 358
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Sharing")),                 // line 359
$context["form"]->getcheckbox("socialSharing[gallerySharing][enabled]", true, (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "enabled", array())) ? (array("checked" => "checked")) : (array()))), "gallery-social-sharing");
                echo "

                            ";
                // line 361
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")),                 // line 362
$context["form"]->getselect("socialSharing[gallerySharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "all" => "top and bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 368
($context["settings"] ?? null), "socialSharing", array()), "gallerySharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "gallery-sharing-buttons-position");
                // line 370
                echo "

                            ";
                // line 372
                echo $context["form"]->getrow("",                 // line 373
$context["form"]->getcheckbox("socialSharing[imageSharing][enabled]", "0", array("checked" => "checked")), "image-sharing-hidden");
                echo "

                            ";
                // line 375
                $context["enabled"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "enabled", array());
                // line 376
                echo "                            ";
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Sharing")),                 // line 377
$context["form"]->getcheckbox("socialSharing[imageSharing][enabled]", true, (((($context["enabled"] ?? null) != "0")) ? (array("checked" => "checked")) : (array()))), "image-social-sharing");
                echo "

                            ";
                // line 379
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")),                 // line 380
$context["form"]->getselect("socialSharing[imageSharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "left" => "left", "right " => "right "), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 387
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "image-sharing-buttons-position");
                // line 389
                echo "

                            ";
                // line 391
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 392
$context["form"]->getselect("socialSharing[imageSharing][buttonsAlignHorizontal]", array("left" => "left", "center" => "center", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 398
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignHorizontal", array()), array("style" => "width: 200px")), "image-sharing-buttons-align-horizontal");
                // line 400
                echo "

                            ";
                // line 402
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 403
$context["form"]->getselect("socialSharing[imageSharing][buttonsAlignVertical]", array("top" => "top", "middle" => "middle", "bottom" => "bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 409
($context["settings"] ?? null), "socialSharing", array()), "imageSharing", array()), "buttonsAlignVertical", array()), array("style" => "width: 200px")), "image-sharing-buttons-align-vertical");
                // line 411
                echo "

                            ";
                // line 413
                echo $context["form"]->getrow("",                 // line 414
$context["form"]->getcheckbox("socialSharing[popupImageSharing][enabled]", "0", array("checked" => "checked")), "popup-sharing-hidden");
                echo "

                            ";
                // line 416
                $context["enabled"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "enabled", array());
                // line 417
                echo "                            ";
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image Sharing")),                 // line 418
$context["form"]->getcheckbox("socialSharing[popupImageSharing][enabled]", true, (((($context["enabled"] ?? null) != "0")) ? (array("checked" => "checked")) : (array()))), "popup-social-sharing");
                echo "

                            ";
                // line 420
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons position")),                 // line 421
$context["form"]->getselect("socialSharing[popupImageSharing][buttonsPosition]", array("top" => "top", "bottom" => "bottom", "left" => "left", "right " => "right "), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 428
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsPosition", array()), array("style" => "width: 200px")), "popup-sharing-buttons-position");
                // line 430
                echo "

                            ";
                // line 432
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 433
$context["form"]->getselect("socialSharing[popupImageSharing][buttonsAlignHorizontal]", array("left" => "left", "center" => "center", "right" => "right"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 439
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignHorizontal", array()), array("style" => "width: 200px")), "popup-sharing-buttons-align-horizontal");
                // line 441
                echo "

                            ";
                // line 443
                echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Buttons align")),                 // line 444
$context["form"]->getselect("socialSharing[popupImageSharing][buttonsAlignVertical]", array("top" => "top", "middle" => "middle", "bottom" => "bottom"), $this->getAttribute($this->getAttribute($this->getAttribute(                // line 450
($context["settings"] ?? null), "socialSharing", array()), "popupImageSharing", array()), "buttonsAlignVertical", array()), array("style" => "width: 200px")), "popup-sharing-buttons-align-vertical");
                // line 452
                echo "

                        ";
            } else {
                // line 455
                echo "                            <tr>
                                <td colspan=\"2\">
                                    <span>";
                // line 457
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You have no Social Sharing projects for now.")), "html", null, true);
                echo " </span>
                                    <a href=\"/wp-admin/admin.php?page=supsystic-social-sharing&module=projects&action=add\"
                                       target=\"_blank\" rel=\"noopener noreferrer\"
                                    >";
                // line 460
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create your first project")), "html", null, true);
                echo "</a>
                                    <span> ";
                // line 461
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("then just reload page with your Gallery settings, and you will see list with available Social Projects for your Gallery.")), "html", null, true);
                echo "</span>
                                </td>
                            </tr>
                        ";
            }
            // line 465
            echo "                    ";
        } else {
            // line 466
            echo "                        <tr>
                            <td colspan=\"2\">
                                <span>";
            // line 468
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("You need to install Social Share Buttons by Supsystic to use this feature.")), "html", null, true);
            echo " </span>
                                <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"/wp-admin/plugin-install.php?tab=search&type=term&s=Social+Share+Buttons+by+Supsystic\"
                                >";
            // line 470
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Install plugin")), "html", null, true);
            echo "</a>
                                <span> ";
            // line 471
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("from your admin area, or visit it's official page on Wordpress.org")), "html", null, true);
            echo " </span>
                                <a target=\"_blank\" rel=\"noopener noreferrer\" href=\"https://wordpress.org/plugins/social-share-buttons-by-supsystic/\"> ";
            // line 472
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("here.")), "html", null, true);
            echo "</a>
                            </td>

                        </tr>
                    ";
        }
        // line 477
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 482
    public function block_horizontalScroll($context, array $blocks = array())
    {
        // line 483
        echo "                <table class=\"form-table\">
                    <thead>
                        ";
        // line 485
        $context["horizontalScrollEnabled"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 486
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Horizontal Scroll")), (((        // line 487
$context["form"]->getradio("horizontalScroll[enabled]", "true", twig_array_merge(array("id" => "horizontal-scroll-enable"), ((($context["horizontalScrollEnabled"] ?? null)) ? (array("checked" => "checked")) : (array())))) .         // line 488
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "horizontal-scroll-enable")) .         // line 489
$context["form"]->getradio("horizontalScroll[enabled]", "false", twig_array_merge(array("id" => "horizontal-scroll-disable"), ((($context["horizontalScrollEnabled"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .         // line 490
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "horizontal-scroll-disable")), "horizontal-scroll", true);
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 493
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Color")),         // line 494
$context["form"]->gettext("horizontalScroll[color]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array()), "color", array()), array("class" => "gg-color-picker")), "horizontal-scroll-color");
        echo "

                        ";
        // line 496
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Scroll Bar Transparency")),         // line 497
$context["form"]->getselect("horizontalScroll[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute(        // line 511
($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "horizontalScroll", array(), "any", false, true), "transparency", array()), "60")) : ("60")), array("style" => "width: auto")), "horizontal-scroll-transparency");
        // line 512
        echo "

                        ";
        // line 514
        $this->displayBlock('horizontalScrollAfter', $context, $blocks);
        // line 516
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 514
    public function block_horizontalScrollAfter($context, array $blocks = array())
    {
        // line 515
        echo "                        ";
    }

    // line 545
    public function block_border($context, array $blocks = array())
    {
        // line 546
        echo "                <table class=\"form-table\" name=\"border\">
                    <thead>
                        ";
        // line 548
        $context["borderTypes"] = array("solid" => "Solid", "dotted" => "Dotted", "dashed" => "Dashed", "double" => "Double", "groove" => "Groove", "ridge" => "Ridge", "inset" => "Inset", "outset" => "Outset", "none" => "None");
        // line 559
        echo "
                        ";
        // line 575
        echo "
                        ";
        // line 576
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border Type")), (        // line 577
$context["form"]->getselect("thumbnail[border][type]", ($context["borderTypes"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "type", array()), array("style" => "width: auto;")) .         // line 578
$context["form"]->getinput("text", "border-type", "Example", array("style" => "margin-top: -2px; height: 27px; width: 70px; border: 1px solid black; display:none;"))), "border-type", "gallery-borders");
        echo "

                        ";
        // line 580
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border color")),         // line 581
$context["form"]->getinput("text", "thumbnail[border][color]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "color", array()), array("class" => "gg-color-picker")), "border-color");
        echo "

                        ";
        // line 583
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Border width")), (        // line 584
$context["form"]->getinput("number", "thumbnail[border][width]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "width", array()), array("style" => array("width" => "140px;"))) .         // line 585
$context["form"]->getspan("", "pixels")), "border-width");
        echo "
                    </thead>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 591
    public function block_shadow($context, array $blocks = array())
    {
        // line 592
        echo "                <table class=\"form-table\" name=\"shadow\">
                    <thead>
                        <tr id=\"useShadowRow\">
                            <th scope=\"row\">
                                <h3 style=\"margin: 0 !important;\">
                                    ";
        // line 597
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow")), "html", null, true);
        echo "
                                </h3>
                            </th>
                            <td>
                                <input type=\"radio\" id=\"showShadow\" name=\"use_shadow\" value=\"1\" ";
        // line 601
        if (($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) == "1")) {
            echo "checked";
        }
        echo ">
                                    ";
        // line 602
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "html", null, true);
        echo "
                                <input type=\"radio\" id=\"hideShadow\" name=\"use_shadow\" value=\"0\" ";
        // line 603
        if (($this->getAttribute(($context["settings"] ?? null), "use_shadow", array()) != "1")) {
            echo "checked";
        }
        echo ">
                                    ";
        // line 604
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "html", null, true);
        echo "
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope=\"row\">
                                ";
        // line 611
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow preset")), "html", null, true);
        echo "
                            </th>
                            <td>
                                <button id=\"chooseShadowPreset\" class=\"button bordered\" type=\"button\">
                                    ";
        // line 615
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose preset")), "html", null, true);
        echo "
                                </button>
                            </td>
                        </tr>

                        <tr id=\"useMouseShadowRow\">
                            <th scope=\"row\">
                                ";
        // line 622
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When mouse is over")), "html", null, true);
        echo "
                                ";
        // line 623
        echo $context["form"]->getshow_tooltip("when-mouse-is-over");
        echo "
                            </th>
                            <td>
                                <select id=\"useMouseOverShadow\" style=\"width: auto;\" name=\"mouse_shadow\">
                                    <option value=\"0\" ";
        // line 627
        if (($this->getAttribute(($context["settings"] ?? null), "mouse_shadow", array()) == "0")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 628
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Off")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"1\" ";
        // line 630
        if (($this->getAttribute(($context["settings"] ?? null), "mouse_shadow", array()) == "1")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 631
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show mouse on")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"2\" ";
        // line 633
        if (($this->getAttribute(($context["settings"] ?? null), "mouse_shadow", array()) == "2")) {
            echo "selected=\"selected\"";
        }
        echo ">
                                        ";
        // line 634
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide mouse on")), "html", null, true);
        echo "
                                    </option>
                                </select>
                            </td>
                        </tr>

                        ";
        // line 640
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay image with shadow")),         // line 641
$context["form"]->getselect("thumbnail[shadow][overlay]", array(0 => "Off", 1 => "On"), $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "overlay", array()), array("style" => "width: auto;")), "overlay-type");
        echo "

                        ";
        // line 643
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow color")),         // line 644
$context["form"]->gettext("thumbnail[shadow][color]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "color", array()), array("style" => array("width" => "300px"), "class" => "gg-color-picker")), "shadow-color");
        echo "

                        ";
        // line 646
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow blur")),         // line 647
$context["form"]->getinput("number", "thumbnail[shadow][blur]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "blur", array()), array("style" => array("width" => "auto"))), "shadow-blur");
        echo "

                        ";
        // line 649
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow X")),         // line 650
$context["form"]->getinput("number", "thumbnail[shadow][x]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "x", array()), array("style" => array("width" => "auto"))), "shadow-x");
        echo "

                        ";
        // line 652
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Shadow Y")),         // line 653
$context["form"]->getinput("number", "thumbnail[shadow][y]", $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "shadow", array()), "y", array()), array("style" => array("width" => "auto"))), "shadow-y");
        echo "
                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 659
    public function block_popup($context, array $blocks = array())
    {
        // line 660
        echo "                <table class=\"form-table\">
                    <thead>
                        ";
        // line 663
        echo "                        ";
        $context["popUpEnabled"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 664
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pop-up Image")), (((        // line 665
$context["form"]->getradio("box[enabled]", "true", twig_array_merge(array("id" => "box-enable"), ((        // line 668
($context["popUpEnabled"] ?? null)) ? (array("checked" => "checked")) : (array())))) .         // line 670
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "box-enable")) .         // line 674
$context["form"]->getradio("box[enabled]", "false", twig_array_merge(array("id" => "box-disable"), ((        // line 677
($context["popUpEnabled"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .         // line 679
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "box-disable")), "box", true);
        // line 683
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 687
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup box theme")), ((        // line 688
$context["form"]->getbutton("chooseTheme", call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose theme")), array("class" => "button bordered", "id" => "chooseTheme")) .         // line 693
$context["form"]->gethidden("box[type]", $this->getAttribute($this->getAttribute(        // line 695
($context["settings"] ?? null), "box", array()), "type", array()))) .         // line 697
$context["form"]->gethidden("box[theme]", $this->getAttribute($this->getAttribute(        // line 699
($context["settings"] ?? null), "box", array()), "theme", array()), array("id" => "bigImageTheme"))));
        // line 702
        echo "

                        ";
        // line 705
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable on mobile")),         // line 706
$context["form"]->getcheckbox("box[mobile]", "on", ((($this->getAttribute($this->getAttribute(        // line 709
($context["settings"] ?? null), "box", array()), "mobile", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "mobile");
        // line 712
        echo "

                        ";
        // line 715
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image Text")),         // line 716
$context["form"]->getselect("box[imageText]", array("data-caption" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Caption")), "data-title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Title")), "alt" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alt text")), "data-description" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description"))), (($this->getAttribute($this->getAttribute(        // line 724
($context["settings"] ?? null), "box", array(), "any", false, true), "imageText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "imageText", array()), "data-description")) : ("data-description")), array("style" => "width: 150px")), "popup-image-text");
        // line 727
        echo "

                        ";
        // line 730
        echo "                        ";
        $this->displayBlock('popupLinkedImageText', $context, $blocks);
        // line 754
        echo "
\t\t\t\t\t\t";
        // line 756
        echo "\t\t\t\t\t\t";
        $this->displayBlock('disableSourceImageForLi', $context, $blocks);
        // line 774
        echo "
                        ";
        // line 776
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide Popup Captions")),         // line 777
$context["form"]->getcheckbox("box[captions]", "on", ((($this->getAttribute($this->getAttribute(        // line 780
($context["settings"] ?? null), "box", array()), "captions", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "captions");
        // line 783
        echo "

                        ";
        // line 785
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Hide long titles")),         // line 786
$context["form"]->getcheckbox("hideLongTooltipTitles", "on", ((($this->getAttribute(        // line 789
($context["settings"] ?? null), "hideLongTooltipTitles", array()) == "on")) ? (array("checked" => "checked")) : (array()))), "hide-long-tooltip-titles");
        // line 791
        echo "

                        ";
        // line 794
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")),         // line 795
$context["form"]->gettext("box[background]", $this->getAttribute($this->getAttribute(        // line 797
($context["settings"] ?? null), "box", array()), "background", array()), array("class" => "gg-color-picker")), "box-background");
        // line 801
        echo "
                        
                        ";
        // line 804
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Transparency")),         // line 805
$context["form"]->getselect("box[transparency]", array("0" => "0%", "10" => "10%", "20" => "20%", "30" => "30%", "40" => "40%", "50" => "50%", "60" => "60%", "70" => "70%", "80" => "80%", "90" => "90%", "100" => "100%"), (($this->getAttribute($this->getAttribute(        // line 820
($context["settings"] ?? null), "box", array(), "any", false, true), "transparency", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "transparency", array()), 30)) : (30)), array("style" => "width: auto")), "box-transparency");
        // line 823
        echo "

                        ";
        // line 826
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow")),         // line 827
$context["form"]->getselect("box[slideshow]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable"))), (($this->getAttribute($this->getAttribute(        // line 830
($context["settings"] ?? null), "box", array(), "any", false, true), "slideshow", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshow", array()), "false")) : ("false")), array("style" => "width: auto")), "slideshow");
        // line 834
        echo "

                        ";
        // line 837
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow speed")),         // line 838
$context["form"]->getinput("number", "box[slideshowSpeed]", (($this->getAttribute($this->getAttribute(        // line 841
($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowSpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowSpeed", array()), 2500)) : (2500)), array("style" => array("width" => "auto")), "box-slideshowSpeed"));
        // line 845
        echo "

                        ";
        // line 848
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow pause on hover")),         // line 849
$context["form"]->getselect("box[popupHoverStop]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute(        // line 852
($context["settings"] ?? null), "box", array(), "any", false, true), "popupHoverStop", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "popupHoverStop", array()), "false")) : ("false")), array("style" => "width: auto"), "box-popupHoverStop"), "popupHoverStop");
        // line 857
        echo "

                        ";
        // line 860
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Slideshow autostart")),         // line 861
$context["form"]->getselect("box[slideshowAuto]", array("true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No"))), (($this->getAttribute($this->getAttribute(        // line 864
($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowAuto", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "box", array(), "any", false, true), "slideshowAuto", array()), "false")) : ("false")), array("style" => "width: auto"), "box-slideshowAuto"));
        // line 868
        echo "

                        ";
        // line 871
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Image size")), (((        // line 872
$context["form"]->getinput("number", "box[popupwidth]", $this->getAttribute($this->getAttribute(        // line 875
($context["settings"] ?? null), "box", array()), "popupwidth", array()), array("style" => array("width" => "60px"))) .         // line 878
$context["form"]->getspan("", "x")) .         // line 879
$context["form"]->getinput("number", "box[popupheight]", $this->getAttribute($this->getAttribute(        // line 882
($context["settings"] ?? null), "box", array()), "popupheight", array()), array("style" => array("width" => "60px")))) .         // line 885
$context["form"]->getspan("", "pixels")), "box-popupsize");
        // line 887
        echo "


                        ";
        // line 891
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable browser history")),         // line 893
$context["form"]->getcheckbox("box[disableHistory]", "true", ((($this->getAttribute($this->getAttribute(        // line 896
($context["settings"] ?? null), "box", array()), "disableHistory", array()) == "true")) ? (array("checked" => "checked")) : (array()))), "box-disableHistory");
        // line 899
        echo "

                        ";
        // line 902
        echo "                        ";
        $this->displayBlock('popupAfter', $context, $blocks);
        // line 950
        echo "                    </tbody>
                </table>
                <div class=\"separator\"></div>
            ";
    }

    // line 730
    public function block_popupLinkedImageText($context, array $blocks = array())
    {
        // line 731
        echo "                            <tr>
                                <th scope=\"row\">
                                    <label style=\"margin: 0 !important;\">
                                        ";
        // line 734
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Popup Linked Image Text")), "html", null, true);
        echo "
                                        <br />
                                        <label><a href=\"";
        // line 736
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=linkedImageText&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                    </label>
                                </th>
                                <td>
                                    ";
        // line 740
        echo $context["form"]->getselect("box[linkedImageTextFree]", array("data-title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Title")), "alt" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Alt text")), "data-description" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Description"))), "data-title", array("style" => "width: 150px", "disabled" => "", "id" => "ptsLinkTextChoose"));
        // line 750
        echo "
                                </td>
                            </tr>
                        ";
    }

    // line 756
    public function block_disableSourceImageForLi($context, array $blocks = array())
    {
        // line 757
        echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th scope=\"row\">
\t\t\t\t\t\t\t\t\t<label style=\"margin: 0 !important;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 760
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable source image for Linked Images")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t<label><a href=\"";
        // line 762
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=linkedImageText&utm_campaign=gallery")), "html", null, true);
        echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
        // line 766
        echo $context["form"]->getcheckbox("box[disableSourceImageForLiFree]", "1", array("disabled" => "disabled"));
        // line 770
        echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
    }

    // line 902
    public function block_popupAfter($context, array $blocks = array())
    {
        // line 903
        echo "                            ";
        // line 904
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Video size")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.size", (((        // line 907
$context["form"]->gettext("popup[video][width]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 909
($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "width", array()), "853")) : ("853")), array("style" => array("width" => "40px"), "disabled" => "")) .         // line 912
$context["form"]->getspan("", "x")) .         // line 913
$context["form"]->gettext("popup[video][height]", (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 915
($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "height", array()), "480")) : ("480")), array("style" => array("width" => "40px"), "disabled" => ""))) .         // line 918
$context["form"]->getspan("", "pixels")));
        // line 919
        echo "

                            ";
        // line 922
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Autoplay video")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.autoplay",         // line 925
$context["form"]->getselect("popup[video][autoplay]", array("false" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "true" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 928
($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "autoplay", array()), "false")) : ("false")), array("disabled" => "")));
        // line 931
        echo "
                            
                            ";
        // line 934
        echo "                            ";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("When video ends")), "utm_source=plugin&utm_medium=video&utm_campaign=gallery", "video.onEnd",         // line 937
$context["form"]->getselect("popup[video][onEnd]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Do nothing")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Open next slide")), "2" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Close popup"))), (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 944
($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "popup", array(), "any", false, true), "video", array(), "any", false, true), "onEnd", array()), "0")) : ("0")), array("disabled" => "")));
        // line 947
        echo "

                        ";
    }

    // line 955
    public function block_preload($context, array $blocks = array())
    {
        // line 956
        echo "                <table class=\"form-table\" name=\"preload\">
                    <thead>
                        ";
        // line 958
        $context["preloadEnabled"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "preload", array(), "any", false, true), "enabled", array()), "true")) : ("true")) == "true");
        // line 959
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery Loader")), (((        // line 960
$context["form"]->getradio("preload[enabled]", "true", twig_array_merge(array("id" => "preload-enable"), ((($context["preloadEnabled"] ?? null)) ? (array("checked" => "checked")) : (array())))) .         // line 961
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "preload-enable")) .         // line 962
$context["form"]->getradio("preload[enabled]", "false", twig_array_merge(array("id" => "preload-disable"), ((($context["preloadEnabled"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .         // line 963
$context["f"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "preload-disable")), "preload", true);
        echo "
                    </thead>
                ";
        // line 965
        if ( !$this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method")) {
            // line 966
            echo "                    <tbody>
                        <tr id=\"preload-background\">
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
            // line 970
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 972
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>
                                ";
            // line 976
            echo $context["form"]->gettext("preload[background]", "#0073AA", array("class" => "gg-color-picker", "id" => "preloadColor-free"));
            echo "
                            </td>
                        </tr>
                        ";
            // line 979
            $context["piconImg"] = ('' === $tmp = "                            <div class=\"gallery-loading\">
                                <div class=\"blocks\">
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                    <div class=\"block\"></div>
                                </div>
                            </div>
                        ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 989
            echo "
                        <tr>
                            <th scope=\"row\">
                                <label style=\"margin: 0 !important;\">
                                    ";
            // line 993
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Choose Icon")), "html", null, true);
            echo "
                                    <br />
                                    <label><a href=\"";
            // line 995
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("utm_source=plugin&utm_medium=loader&utm_campaign=gallery")), "html", null, true);
            echo "\" target=\"_blank\" style=\"color: #0074a2; font-size: 10px; text-decoration: none;\">PRO Option</a> </label>
                                </label>
                            </th>
                            <td>
                                ";
            // line 999
            echo $context["form"]->getbutton("buttons-preload-icon", "Choose Icon", array("class" => "button button-primary", "id" => "choosePreicon-free"));
            echo "
                                ";
            // line 1000
            echo twig_escape_filter($this->env, ($context["piconImg"] ?? null), "html", null, true);
            echo "
                            </td>
                        </tr>
                    </tbody>
                ";
        }
        // line 1005
        echo "                </table>
            ";
    }

    // line 1009
    public function block_post($context, array $blocks = array())
    {
        // line 1010
        echo "            <div data-tab=\"post\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 1012
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show Posts and Pages")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 1015
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\">Get
                        PRO for 29\$</a>
                </h1>

                <div>
                    <a href=\"";
        // line 1020
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=postfeed&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 1021
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/posts_pro.jpg\" />
                    </a>
                </div>
            </div>
        ";
    }

    // line 1109
    public function block_backgroundImageForHoverEffect($context, array $blocks = array())
    {
        // line 1110
        echo "\t\t\t\t\t\t";
        echo $context["form"]->getrowpro(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image on hover")), "utm_source=plugin&utm_medium=hover_caption_image_bg&utm_campaign=gallery", "overlay-effect-image-on-hover-enable",         // line 1113
$context["form"]->getselect("thumbnail[overlay][imageOnHoverEnable]", array("0" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "1" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable"))), "0", array("disabled" => "disabled")));
        // line 1122
        echo "
\t\t\t\t\t";
    }

    // line 1297
    public function block_icons($context, array $blocks = array())
    {
        // line 1298
        echo "                <table class=\"form-table\" name=\"icons\">
                    <thead>
                        ";
        // line 1300
        $context["iconsEnabled"] = ((($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "enabled", array()), "false")) : ("false")) == "true");
        // line 1301
        echo "                        ";
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show icons")), (((        // line 1302
$context["form"]->getradio("icons[enabled]", "true", twig_array_merge(array("id" => "icons-enable"), ((($context["iconsEnabled"] ?? null)) ? (array("checked" => "checked")) : (array())))) .         // line 1303
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Enable")), "icons-enable")) .         // line 1304
$context["form"]->getradio("icons[enabled]", "false", twig_array_merge(array("id" => "icons-disable"), ((($context["iconsEnabled"] ?? null)) ? (array()) : (array("checked" => "checked")))))) .         // line 1305
$context["form"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Disable")), "icons-disable")), "photo-icon", true);
        echo "
                    </thead>
                    <tbody>
                        ";
        // line 1308
        echo $context["form"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select effect")), (        // line 1309
$context["form"]->getbutton(null, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Animation")), array("class" => "button bordered", "id" => "selectIconsEffect")) .         // line 1310
$context["form"]->gethidden("icons[effect]", $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "effect", array()), array("id" => "iconsEffectName"))));
        // line 1311
        echo "
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsColor\">
                                    ";
        // line 1315
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsColor\" class=\"gg-color-picker\" value=\"";
        // line 1319
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "color", array()), "html", null, true);
        echo "\" name=\"icons[color]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsHoverColor\">
                                    ";
        // line 1325
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons hover color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1329
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "hover_color", array()), "html", null, true);
        echo "\" name=\"icons[hover_color]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsBackgroundColor\">
                                    ";
        // line 1335
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsBackgroundColor\" class=\"gg-color-picker\" value=\"";
        // line 1339
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background", array()), "html", null, true);
        echo "\" name=\"icons[background]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsBackgroundHoverColor\">
                                    ";
        // line 1345
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Background hover color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsBackgroundHoverColor\" class=\"gg-color-picker\" value=\"";
        // line 1349
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background_hover", array()), "html", null, true);
        echo "\" name=\"icons[background_hover]\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsSize\">
                                    ";
        // line 1355
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Icons size")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" pattern=\"[0-9]\" id=\"iconsSize\"  name=\"icons[size]\" value=\"";
        // line 1359
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()), "html", null, true);
        echo "\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsMargin\">
                                    ";
        // line 1365
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Distance between icons")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"number\" pattern=\"[0-9]\" id=\"iconsMargin\"  name=\"icons[margin]\" value=\"";
        // line 1369
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "margin", array()), "html", null, true);
        echo "\"/>
                            </td>
                        </tr>
                        <tr>
                            <th scope=\"row\">
                                <label for=\"iconsOverlay\">
                                    ";
        // line 1375
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Show overlay")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <select id=\"iconsOverlay\" name=\"icons[overlay_enabled]\" style=\"width: auto;\">
                                    <option value=\"true\" ";
        // line 1380
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_enabled", array()), "true");
        echo ">
                                        ";
        // line 1381
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "html", null, true);
        echo "
                                    </option>
                                    <option value=\"false\" ";
        // line 1383
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_enabled", array()), "false");
        echo ">
                                        ";
        // line 1384
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "html", null, true);
        echo "
                                    </option>
                                </select>
                            </td>
                        </tr>
                        <tr class=\"icons-overlay-toggle\">
                            <th scope=\"row\">
                                <label for=\"iconsOverlayColor\">
                                    ";
        // line 1392
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay color")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <input type=\"text\" id=\"iconsOverlayColor\" class=\"gg-color-picker\" value=\"";
        // line 1396
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_color", array()), "html", null, true);
        echo "\" name=\"icons[overlay_color]\"/>
                            </td>
                        </tr>
                        <tr class=\"icons-overlay-toggle\">
                            <th scope=\"row\">
                                <label for=\"iconsOverlayTransparency\">
                                    ";
        // line 1402
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Overlay transparency")), "html", null, true);
        echo "
                                </label>
                            </th>
                            <td>
                                <select id=\"iconsOverlayTransparency\" name=\"icons[overlay_transparency]\" style=\"width: auto;\">
                                    <option value=\"0\" ";
        // line 1407
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 0);
        echo ">0%</option>
                                    <option value=\"1\" ";
        // line 1408
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 1);
        echo ">10%</option>
                                    <option value=\"2\" ";
        // line 1409
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 2);
        echo ">20%</option>
                                    <option value=\"3\" ";
        // line 1410
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 3);
        echo ">30%</option>
                                    <option value=\"4\" ";
        // line 1411
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 4);
        echo ">40%</option>
                                    <option value=\"5\" ";
        // line 1412
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 5);
        if ( !$this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "overlay_transparency", array(), "any", true, true)) {
            echo "selected=\"selected\"";
        }
        echo ">50%</option>
                                    <option value=\"6\" ";
        // line 1413
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 6);
        echo ">60%</option>
                                    <option value=\"7\" ";
        // line 1414
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 7);
        echo ">70%</option>
                                    <option value=\"8\" ";
        // line 1415
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 8);
        echo ">80%</option>
                                    <option value=\"9\" ";
        // line 1416
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 9);
        echo ">90%</option>
                                    <option value=\"10\" ";
        // line 1417
        echo $context["form"]->getselected($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_transparency", array()), 10);
        echo ">100%</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            ";
    }

    // line 1426
    public function block_categories($context, array $blocks = array())
    {
        // line 1427
        echo "            <div data-tab=\"cats\">
                <h1 style=\"line-height: 1;\">
                    ";
        // line 1429
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Categorize images in the gallery")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 1432
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                </h1>

                <div>
                    <a href=\"";
        // line 1436
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=categories&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 1437
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/cats_pro.jpg\" />
                    </a>
                </div>
                ";
        // line 1440
        $this->displayBlock('pagination', $context, $blocks);
        // line 1455
        echo "            </div>
        ";
    }

    // line 1440
    public function block_pagination($context, array $blocks = array())
    {
        // line 1441
        echo "                    <h1 style=\"line-height: 1;\">
                        ";
        // line 1442
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Let user switch gallery pages")), "html", null, true);
        echo "
                        </br>
                        <a class=\"button get-pro\"
                           href=\"";
        // line 1445
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO</a>
                    </h1>
                    <div name=\"pagination\">
                        <div>
                            <a href=\"";
        // line 1449
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=pages&utm_campaign=gallery")), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 1450
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/pagination_pro.jpg\" />
                            </a>
                        </div>
                    </div>
                ";
    }

    // line 1458
    public function block_watermark($context, array $blocks = array())
    {
        // line 1459
        echo "            <div data-tab=\"water-m-tab\">
                <h1 style=\"line-height: 1em;\">
                    ";
        // line 1461
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add watermarks to your photos")), "html", null, true);
        echo "
                    </br>
                    <a class=\"button get-pro\"
                       href=\"";
        // line 1464
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=watermarks&utm_campaign=gallery")), "html", null, true);
        echo "\">Get PRO for 29\$</a>
                </h1>
                <div>
                    <a href=\"";
        // line 1467
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('getProUrl')->getCallable(), array("?utm_source=plugin&utm_medium=watermarks&utm_campaign=gallery")), "html", null, true);
        echo "\">
                        <img src=\"";
        // line 1468
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["environment"] ?? null), "module", array(0 => "galleries"), "method"), "getLocationUrl", array(), "method"), "html", null, true);
        echo "/assets/img/water_m_pro.png\" />
                    </a>
                </div>
            </div>
        ";
    }

    // line 1474
    public function block_form($context, array $blocks = array())
    {
        // line 1475
        echo "        ";
    }

    // line 1611
    public function block_iconsEffects($context, array $blocks = array())
    {
        // line 1612
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["iconsWithCaptionsEffects"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 1613
            echo "                            <figure class=\"grid-gallery-caption\" data-type=\"icons\" data-grid-gallery-type=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 1614
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" class=\"dialog-image\"/>
                                <figcaption style=\"";
            // line 1615
            echo twig_escape_filter($this->env, trim(($context["figcaptionStyle"] ?? null)), "html", null, true);
            echo "\">
                                    <div class=\"hi-icon-wrap\" style=\"width: 48px; height: 48px; margin-top: 30%; position:relative;\">
                                        <a href=\"#\" class=\"hi-icon icon-link\" style=\"border:1px solid #ccc; border-radius:50%;margin:auto;position:absolute;left:0;right:0;top: 0;bottom: 0;\">
                                        </a>
                                    </div>
                                </figcaption>
                                <div class=\"caption-with-";
            // line 1621
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
                                    <div style=\"display: table; height:100%; width:100%;\">
                                        <span style=\"padding: 10px;display:table-cell;font-size:";
            // line 1623
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo "
                                        vertical-align:";
            // line 1624
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";\">
                                            Caption
                                        </span>
                                    </div>
                                </div>
                                <div class=\"select-element\">
                                    ";
            // line 1630
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                                </div>
                            </figure>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1634
        echo "                    ";
    }

    // line 1779
    public function block_modals($context, array $blocks = array())
    {
        // line 1780
        echo "        <div id=\"iconsPreview\" title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select icons effects")), "html", null, true);
        echo "\">
            ";
        // line 1782
        $context["iconsEffects"] = array("hi-icon-effect-1a" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-1b" => array("padding" => "0", "bg" => "41ab6b"), "hi-icon-effect-2a" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-2b" => array("padding" => "0", "bg" => "eea303"), "hi-icon-effect-3a" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-3b" => array("padding" => "0", "bg" => "f06060"), "hi-icon-effect-5a" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5b" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5c" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-5d" => array("padding" => "0", "bg" => "702fa8"), "hi-icon-effect-7a" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-7b" => array("padding" => "0", "bg" => "d54f30"), "hi-icon-effect-9a" => array("padding" => "0", "bg" => "96a94b"), "hi-icon-effect-9b" => array("padding" => "0", "bg" => "96a94b"));
        // line 1799
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["iconsEffects"] ?? null));
        foreach ($context['_seq'] as $context["name"] => $context["p"]) {
            // line 1800
            echo "                <div class=\"hi-icon-wrap ";
            echo twig_escape_filter($this->env, twig_slice($this->env, $context["name"], 0, (($context["length"] ?? null) - 1)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo " holderjs\" style=\"display: inline-block; padding: ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "padding", array()), "html", null, true);
            echo "; width: 150px; height: 150px; background: no-repeat; overflow: hidden;\" data-background-src=\"holder.js/150x150?theme=industrial&text=\\t\">
                    <a href=\"#\" class=\"hi-icon icon-link\" data-effect=\"";
            // line 1801
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ((call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Click on the icon to select effect")) . " ") . $context["name"]), "html", null, true);
            echo "\">Select</a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1804
        echo "        </div>
        <style>
            .hi-icon {
                color: ";
        // line 1807
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "color", array()), "html", null, true);
        echo " !important;
                background: ";
        // line 1808
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background", array()), "html", null, true);
        echo " !important;
            }
            .hi-icon:hover {
                color: ";
        // line 1811
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "hover_color", array()), "html", null, true);
        echo " !important;
                background: ";
        // line 1812
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background_hover", array()), "html", null, true);
        echo " !important;
            }
            .hi-icon {
                width: ";
        // line 1815
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
                height: ";
        // line 1816
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
            }
            .hi-icon:before {
                font-size: ";
        // line 1819
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
        echo "px !important;
                line-height: ";
        // line 1820
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important;
            }
        </style>
    ";
    }

    // line 3
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
            // line 4
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
        return "@galleries/settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2667 => 4,  2654 => 3,  2646 => 1820,  2642 => 1819,  2636 => 1816,  2632 => 1815,  2626 => 1812,  2622 => 1811,  2616 => 1808,  2612 => 1807,  2607 => 1804,  2596 => 1801,  2587 => 1800,  2582 => 1799,  2580 => 1782,  2575 => 1780,  2572 => 1779,  2568 => 1634,  2558 => 1630,  2549 => 1624,  2545 => 1623,  2540 => 1621,  2531 => 1615,  2527 => 1614,  2522 => 1613,  2517 => 1612,  2514 => 1611,  2510 => 1475,  2507 => 1474,  2498 => 1468,  2494 => 1467,  2488 => 1464,  2482 => 1461,  2478 => 1459,  2475 => 1458,  2466 => 1450,  2462 => 1449,  2455 => 1445,  2449 => 1442,  2446 => 1441,  2443 => 1440,  2438 => 1455,  2436 => 1440,  2430 => 1437,  2426 => 1436,  2419 => 1432,  2413 => 1429,  2409 => 1427,  2406 => 1426,  2395 => 1417,  2391 => 1416,  2387 => 1415,  2383 => 1414,  2379 => 1413,  2372 => 1412,  2368 => 1411,  2364 => 1410,  2360 => 1409,  2356 => 1408,  2352 => 1407,  2344 => 1402,  2335 => 1396,  2328 => 1392,  2317 => 1384,  2313 => 1383,  2308 => 1381,  2304 => 1380,  2296 => 1375,  2287 => 1369,  2280 => 1365,  2271 => 1359,  2264 => 1355,  2255 => 1349,  2248 => 1345,  2239 => 1339,  2232 => 1335,  2223 => 1329,  2216 => 1325,  2207 => 1319,  2200 => 1315,  2194 => 1311,  2192 => 1310,  2191 => 1309,  2190 => 1308,  2184 => 1305,  2183 => 1304,  2182 => 1303,  2181 => 1302,  2179 => 1301,  2177 => 1300,  2173 => 1298,  2170 => 1297,  2165 => 1122,  2163 => 1113,  2161 => 1110,  2158 => 1109,  2149 => 1021,  2145 => 1020,  2137 => 1015,  2131 => 1012,  2127 => 1010,  2124 => 1009,  2119 => 1005,  2111 => 1000,  2107 => 999,  2100 => 995,  2095 => 993,  2089 => 989,  2079 => 979,  2073 => 976,  2066 => 972,  2061 => 970,  2055 => 966,  2053 => 965,  2048 => 963,  2047 => 962,  2046 => 961,  2045 => 960,  2043 => 959,  2041 => 958,  2037 => 956,  2034 => 955,  2028 => 947,  2026 => 944,  2025 => 937,  2023 => 934,  2019 => 931,  2017 => 928,  2016 => 925,  2014 => 922,  2010 => 919,  2008 => 918,  2007 => 915,  2006 => 913,  2005 => 912,  2004 => 909,  2003 => 907,  2001 => 904,  1999 => 903,  1996 => 902,  1989 => 770,  1987 => 766,  1980 => 762,  1975 => 760,  1970 => 757,  1967 => 756,  1960 => 750,  1958 => 740,  1951 => 736,  1946 => 734,  1941 => 731,  1938 => 730,  1931 => 950,  1928 => 902,  1924 => 899,  1922 => 896,  1921 => 893,  1919 => 891,  1914 => 887,  1912 => 885,  1911 => 882,  1910 => 879,  1909 => 878,  1908 => 875,  1907 => 872,  1905 => 871,  1901 => 868,  1899 => 864,  1898 => 861,  1896 => 860,  1892 => 857,  1890 => 852,  1889 => 849,  1887 => 848,  1883 => 845,  1881 => 841,  1880 => 838,  1878 => 837,  1874 => 834,  1872 => 830,  1871 => 827,  1869 => 826,  1865 => 823,  1863 => 820,  1862 => 805,  1860 => 804,  1856 => 801,  1854 => 797,  1853 => 795,  1851 => 794,  1847 => 791,  1845 => 789,  1844 => 786,  1843 => 785,  1839 => 783,  1837 => 780,  1836 => 777,  1834 => 776,  1831 => 774,  1828 => 756,  1825 => 754,  1822 => 730,  1818 => 727,  1816 => 724,  1815 => 716,  1813 => 715,  1809 => 712,  1807 => 709,  1806 => 706,  1804 => 705,  1800 => 702,  1798 => 699,  1797 => 697,  1796 => 695,  1795 => 693,  1794 => 688,  1792 => 687,  1787 => 683,  1785 => 679,  1784 => 677,  1783 => 674,  1782 => 670,  1781 => 668,  1780 => 665,  1778 => 664,  1775 => 663,  1771 => 660,  1768 => 659,  1759 => 653,  1758 => 652,  1753 => 650,  1752 => 649,  1747 => 647,  1746 => 646,  1741 => 644,  1740 => 643,  1735 => 641,  1734 => 640,  1725 => 634,  1719 => 633,  1714 => 631,  1708 => 630,  1703 => 628,  1697 => 627,  1690 => 623,  1686 => 622,  1676 => 615,  1669 => 611,  1659 => 604,  1653 => 603,  1649 => 602,  1643 => 601,  1636 => 597,  1629 => 592,  1626 => 591,  1617 => 585,  1616 => 584,  1615 => 583,  1610 => 581,  1609 => 580,  1604 => 578,  1603 => 577,  1602 => 576,  1599 => 575,  1596 => 559,  1594 => 548,  1590 => 546,  1587 => 545,  1583 => 515,  1580 => 514,  1573 => 516,  1571 => 514,  1567 => 512,  1565 => 511,  1564 => 497,  1563 => 496,  1558 => 494,  1557 => 493,  1551 => 490,  1550 => 489,  1549 => 488,  1548 => 487,  1546 => 486,  1544 => 485,  1540 => 483,  1537 => 482,  1530 => 477,  1522 => 472,  1518 => 471,  1514 => 470,  1509 => 468,  1505 => 466,  1502 => 465,  1495 => 461,  1491 => 460,  1485 => 457,  1481 => 455,  1476 => 452,  1474 => 450,  1473 => 444,  1472 => 443,  1468 => 441,  1466 => 439,  1465 => 433,  1464 => 432,  1460 => 430,  1458 => 428,  1457 => 421,  1456 => 420,  1451 => 418,  1449 => 417,  1447 => 416,  1442 => 414,  1441 => 413,  1437 => 411,  1435 => 409,  1434 => 403,  1433 => 402,  1429 => 400,  1427 => 398,  1426 => 392,  1425 => 391,  1421 => 389,  1419 => 387,  1418 => 380,  1417 => 379,  1412 => 377,  1410 => 376,  1408 => 375,  1403 => 373,  1402 => 372,  1398 => 370,  1396 => 368,  1395 => 362,  1394 => 361,  1389 => 359,  1388 => 358,  1384 => 356,  1382 => 354,  1381 => 353,  1380 => 352,  1379 => 351,  1375 => 349,  1372 => 348,  1370 => 347,  1364 => 344,  1363 => 343,  1362 => 342,  1361 => 341,  1360 => 340,  1356 => 338,  1353 => 337,  1349 => 331,  1346 => 330,  1341 => 326,  1339 => 324,  1337 => 321,  1334 => 320,  1327 => 332,  1325 => 330,  1321 => 328,  1319 => 320,  1314 => 318,  1313 => 317,  1309 => 315,  1307 => 312,  1306 => 311,  1305 => 309,  1303 => 308,  1300 => 296,  1295 => 293,  1294 => 292,  1293 => 291,  1288 => 289,  1287 => 288,  1286 => 287,  1280 => 284,  1279 => 283,  1278 => 282,  1275 => 281,  1270 => 274,  1269 => 273,  1265 => 271,  1263 => 268,  1262 => 265,  1260 => 264,  1255 => 261,  1254 => 260,  1253 => 259,  1248 => 257,  1247 => 256,  1246 => 255,  1240 => 252,  1239 => 251,  1235 => 249,  1233 => 248,  1232 => 247,  1229 => 246,  1224 => 242,  1223 => 241,  1222 => 240,  1221 => 238,  1220 => 237,  1219 => 235,  1218 => 234,  1217 => 233,  1210 => 229,  1201 => 223,  1197 => 222,  1189 => 217,  1188 => 216,  1184 => 214,  1181 => 213,  1177 => 1779,  1167 => 1772,  1162 => 1770,  1156 => 1767,  1152 => 1766,  1148 => 1765,  1142 => 1762,  1137 => 1761,  1135 => 1760,  1128 => 1756,  1121 => 1752,  1096 => 1729,  1086 => 1725,  1080 => 1722,  1070 => 1721,  1060 => 1720,  1057 => 1719,  1053 => 1718,  1049 => 1716,  1047 => 1644,  1041 => 1641,  1036 => 1639,  1030 => 1635,  1028 => 1611,  1023 => 1609,  1020 => 1608,  1014 => 1607,  1007 => 1603,  996 => 1598,  990 => 1595,  986 => 1594,  981 => 1593,  974 => 1589,  965 => 1583,  960 => 1581,  955 => 1579,  940 => 1568,  938 => 1567,  932 => 1564,  926 => 1561,  914 => 1553,  911 => 1552,  907 => 1551,  902 => 1549,  896 => 1545,  886 => 1541,  881 => 1539,  875 => 1538,  869 => 1537,  866 => 1536,  862 => 1535,  859 => 1534,  856 => 1533,  853 => 1532,  851 => 1531,  848 => 1530,  846 => 1521,  840 => 1518,  835 => 1516,  827 => 1511,  820 => 1507,  810 => 1500,  805 => 1498,  799 => 1495,  794 => 1493,  789 => 1491,  782 => 1487,  778 => 1486,  771 => 1482,  765 => 1479,  760 => 1477,  757 => 1476,  755 => 1474,  752 => 1473,  750 => 1458,  747 => 1457,  745 => 1426,  741 => 1424,  739 => 1297,  731 => 1291,  729 => 1288,  728 => 1285,  726 => 1284,  722 => 1281,  720 => 1278,  719 => 1275,  717 => 1274,  713 => 1271,  711 => 1267,  710 => 1264,  708 => 1263,  703 => 1259,  701 => 1255,  700 => 1254,  699 => 1252,  697 => 1251,  693 => 1248,  691 => 1244,  690 => 1241,  688 => 1240,  684 => 1237,  682 => 1233,  681 => 1230,  679 => 1229,  675 => 1226,  673 => 1222,  672 => 1219,  671 => 1216,  670 => 1213,  668 => 1212,  664 => 1209,  662 => 1205,  661 => 1202,  659 => 1201,  655 => 1198,  653 => 1194,  652 => 1192,  650 => 1191,  646 => 1188,  644 => 1184,  643 => 1182,  641 => 1181,  637 => 1178,  635 => 1174,  634 => 1171,  632 => 1170,  628 => 1167,  626 => 1163,  625 => 1160,  623 => 1159,  619 => 1156,  617 => 1152,  616 => 1149,  614 => 1148,  610 => 1145,  608 => 1141,  607 => 1138,  605 => 1137,  601 => 1134,  599 => 1130,  598 => 1127,  596 => 1126,  593 => 1124,  590 => 1109,  586 => 1106,  584 => 1102,  583 => 1100,  582 => 1095,  580 => 1094,  576 => 1091,  574 => 1086,  573 => 1084,  572 => 1081,  571 => 1077,  570 => 1075,  569 => 1072,  567 => 1071,  564 => 1069,  561 => 1068,  558 => 1067,  555 => 1060,  552 => 1031,  546 => 1026,  544 => 1009,  540 => 1007,  538 => 955,  535 => 954,  533 => 659,  530 => 658,  528 => 591,  525 => 590,  523 => 545,  514 => 539,  513 => 538,  501 => 529,  497 => 528,  489 => 525,  484 => 523,  479 => 520,  477 => 482,  474 => 481,  472 => 337,  469 => 336,  467 => 213,  461 => 210,  457 => 209,  453 => 208,  449 => 207,  445 => 206,  441 => 205,  438 => 204,  435 => 203,  432 => 202,  429 => 201,  424 => 165,  420 => 163,  414 => 161,  411 => 160,  407 => 158,  401 => 156,  399 => 155,  389 => 153,  386 => 152,  382 => 128,  378 => 126,  376 => 125,  373 => 124,  370 => 123,  362 => 196,  350 => 189,  342 => 188,  336 => 184,  329 => 180,  325 => 178,  312 => 168,  309 => 167,  307 => 152,  304 => 151,  301 => 150,  298 => 149,  295 => 148,  292 => 147,  290 => 146,  287 => 145,  284 => 144,  281 => 143,  278 => 142,  275 => 141,  273 => 140,  270 => 139,  267 => 138,  264 => 137,  262 => 136,  259 => 135,  256 => 134,  253 => 133,  251 => 132,  248 => 131,  246 => 130,  243 => 129,  241 => 123,  234 => 118,  228 => 116,  226 => 115,  223 => 114,  221 => 113,  213 => 108,  203 => 101,  198 => 99,  189 => 93,  184 => 91,  175 => 85,  170 => 83,  166 => 82,  163 => 81,  157 => 70,  154 => 69,  151 => 68,  145 => 66,  142 => 65,  139 => 64,  136 => 63,  131 => 59,  126 => 60,  124 => 59,  119 => 57,  111 => 52,  103 => 47,  95 => 42,  87 => 37,  76 => 31,  69 => 29,  61 => 27,  58 => 8,  55 => 7,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/settings.twig", "E:\\xampp\\htdocs\\ctfs\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\settings.twig");
    }
}
