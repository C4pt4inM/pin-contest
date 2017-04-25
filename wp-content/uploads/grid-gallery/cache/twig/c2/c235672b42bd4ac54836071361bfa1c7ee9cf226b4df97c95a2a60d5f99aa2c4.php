<?php

/* @galleries/view.twig */
class __TwigTemplate_8337eff1c729a0ecaa23c7281bf2298d91ff3709d90dfa7b021aace832a604de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("grid-gallery.twig", "@galleries/view.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'iconsEffects' => array($this, 'block_iconsEffects'),
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

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "    <nav id=\"supsystic-breadcrumbs\" class=\"supsystic-breadcrumbs\">
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Gallery by Supsystic")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Galleries")), "html", null, true);
        echo "</a>
        <i class=\"fa fa-angle-right\"></i>
        <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "view", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()))), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "title", array()), "html", null, true);
        echo "</a>
    </nav>

    <section class=\"supsystic-bar sgg-all-img-info-sect\" id=\"single-gallery-toolbar\">
        <ul class=\"supsystic-bar-controls\">
            ";
        // line 15
        echo "            ";
        // line 28
        echo "
            <li title=\"";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Upload new images")), "html", null, true);
        echo "\">
                <button class=\"button button-primary gallery import-to-gallery\">
                    <i class=\"fa fa-fw fa-upload\"></i>
                    ";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add Images")), "html", null, true);
        echo "
                </button>
            </li>

            <li>
                <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "settings", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()))), "method"), "html", null, true);
        echo "\"
                   class=\"button\">
                    <i class=\"fa fa-fw fa-cogs\"></i>
                    ";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Properties")), "html", null, true);
        echo "
                </a>
            </li>

            <li>
                <a target=\"_blank\"
                   href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute(($context["environment"] ?? null), "generateUrl", array(0 => "galleries", 1 => "preview", 2 => array("gallery_id" => $this->getAttribute(($context["gallery"] ?? null), "id", array()))), "method"), "html", null, true);
        echo "\"
                   class=\"button\" data-button=\"preview\">
                    <i class=\"fa fa-fw fa-eye\"></i>
                    ";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Preview")), "html", null, true);
        echo "
                </a>
            </li>

            ";
        // line 54
        echo "                ";
        // line 55
        echo "                        ";
        // line 56
        echo "                        ";
        // line 57
        echo "                    ";
        // line 58
        echo "                    ";
        // line 59
        echo "                ";
        // line 60
        echo "            ";
        // line 61
        echo "
            ";
        // line 63
        echo "                ";
        // line 64
        echo "                    ";
        // line 65
        echo "                    ";
        // line 66
        echo "                ";
        // line 67
        echo "            ";
        // line 68
        echo "
            ";
        // line 74
        echo "
            ";
        // line 92
        echo "        </ul>
    </section>

    <section class=\"supsystic-bar sgg-all-img-info-sect\" id=\"single-gallery-toolbar\">
        <ul class=\"supsystic-bar-controls\">
            <li>
                <button class=\"button\" data-button=\"remove\" disabled>
                    <i class=\"fa fa-fw fa-trash-o\"></i>
                    ";
        // line 100
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete Image")), "html", null, true);
        echo "
                </button>
            </li>

            <li class=\"separator\">|</li>
            <li>
                <input id=\"find-by-caption\" type=\"text\" style=\"height:34px; width: 200px;\" placeholder=\"";
        // line 106
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Search")), "html", null, true);
        echo "\">
            </li>

            <li style=\"float: right\">
                <button class=\"button button-primary\" data-button=\"sortbtn\">
                    <i class=\"fa fa-fw fa-check\"></i>
                    Ok
                </button>
            </li>

            <li id=\"sortToLi\" title=\"";
        // line 116
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort To: ")), "html", null, true);
        echo "\" style=\"float: right;";
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sort", array()), "sortby", array()) == "randomly")) {
            echo " display:none; ";
        }
        echo " }}\">
                ";
        // line 117
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort To: ")), "html", null, true);
        echo "
                <select name=\"sortto\" style=\"height: 34px;\">
                    <option value=\"asc\" ";
        // line 119
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sort", array()), "sortto", array()) == "asc")) {
            echo "selected";
        }
        echo ">Asc</option>
                    <option value=\"desc\" ";
        // line 120
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sort", array()), "sortto", array()) == "desc")) {
            echo "selected";
        }
        echo ">Desc</option>
                </select>
            </li>

            <li title=\"";
        // line 124
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort By: ")), "html", null, true);
        echo "\" style=\"float: right;\">
                ";
        // line 125
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Sort By: ")), "html", null, true);
        echo "
                <select name=\"sortby\" style=\"height: 34px;\">
                    <option value=\"postion\" ";
        // line 127
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sort", array()), "sortby", array()) == "position")) {
            echo "selected";
        }
        echo ">Position</option>
                    <option value=\"adate\" ";
        // line 128
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sort", array()), "sortby", array()) == "adate")) {
            echo "selected";
        }
        echo ">Add date</option>
                    <option value=\"date\" ";
        // line 129
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sort", array()), "sortby", array()) == "date")) {
            echo "selected";
        }
        echo ">Create date</option>
                    <option value=\"size\" ";
        // line 130
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sort", array()), "sortby", array()) == "size")) {
            echo "selected";
        }
        echo ">Size</option>
                    <option value=\"name\" ";
        // line 131
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sort", array()), "sortby", array()) == "name")) {
            echo "selected";
        }
        echo ">Name</option>
                    ";
        // line 132
        if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == true)) {
            echo "<option value=\"tags\" ";
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sort", array()), "sortby", array()) == "tags")) {
                echo "selected";
            }
            echo ">Tags</option>";
        }
        // line 133
        echo "                    <option value=\"randomly\" ";
        if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "sort", array()), "sortby", array()) == "randomly")) {
            echo "selected";
        }
        echo ">Randomly</option>
                </select>
            </li>
        </ul>
    </section>

    <section class=\"supsystic-bar sgg-all-img-info-sect\" id=\"images-gallery-toolbar\" style=\"padding-right: 15px;\">
        <ul class=\"supsystic-bar-controls\">
        ";
        // line 141
        if (($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") == true)) {
            // line 142
            echo "            <li>
                <select name=\"bulkactions\" style=\"height: 34px;\">
                    ";
            // line 144
            if ((twig_length_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "tags", array())) > 0)) {
                // line 145
                echo "                        <option value=\"add\">Add Selected Images to</option>
                    ";
            }
            // line 147
            echo "                    <option value=\"newcat\">Create New Category</option>
                    ";
            // line 148
            if ((twig_length_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "tags", array())) > 0)) {
                // line 149
                echo "                        <option value=\"delcat\">Delete Category</option>
                        <option value=\"rencat\">Rename Category</option>
                    ";
            }
            // line 152
            echo "                </select>
            </li>

            <li>
                ";
            // line 156
            if ((twig_length_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "tags", array())) > 0)) {
                // line 157
                echo "                    <select name=\"catactions\" style=\"height: 34px;\">
                        ";
                // line 158
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["gallery"] ?? null), "tags", array()));
                foreach ($context['_seq'] as $context["value"] => $context["title"]) {
                    // line 159
                    echo "                            <option value=\"";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                    echo "</option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['title'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                echo "                        <option value=\"allcat\" style=\"display:none;\">All Categories</option>
                    </select>
                ";
            }
            // line 164
            echo "                <input type=\"text\" name=\"newTag\" ";
            if ((twig_length_filter($this->env, $this->getAttribute(($context["gallery"] ?? null), "tags", array())) != 0)) {
                echo " style=\"display:none; height:34px; width: 150px;\" ";
            } else {
                echo " style=\"width: 150px; height:34px;\" ";
            }
            echo "value=\"\" placeholder=\"Category name...\">
            </li>

            <li>
                <button class=\"button button-primary\" data-button=\"allimagetags\">
                    <i class=\"fa fa-fw fa-check\"></i>
                    ";
            // line 170
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Apply")), "html", null, true);
            echo "
                </button>
            </li>

        ";
        }
        // line 175
        echo "        </ul>
    </section>


";
    }

    // line 181
    public function block_content($context, array $blocks = array())
    {
        // line 182
        echo "    ";
        $context["importTypes"] = $this->loadTemplate("@galleries/shortcode/import.twig", "@galleries/view.twig", 182);
        // line 183
        echo "
    ";
        // line 184
        if (( !array_key_exists("gallery", $context) || (null === ($context["gallery"] ?? null)))) {
            // line 185
            echo "        <p>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("The gallery is does not exists")), "html", null, true);
            echo "</p>
    ";
        } else {
            // line 187
            echo "        ";
            if (twig_test_empty($this->getAttribute(($context["gallery"] ?? null), "photos", array()))) {
                // line 188
                echo "            <h2 style=\"text-align: center; color: #bfbfbf; margin: 50px 0 25px 0;\">
                <span style=\"margin-bottom: 20px; display: block;\">
                    ";
                // line 190
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Currently this gallery has no images")), "html", null, true);
                echo "
                </span>
                ";
                // line 192
                echo $context["importTypes"]->getshow("1000", $this->getAttribute(($context["gallery"] ?? null), "id", array()));
                echo "
            </h2>
        ";
            } else {
                // line 195
                echo "            ";
                $context["view"] = $this->loadTemplate("@ui/type.twig", "@galleries/view.twig", 195);
                // line 196
                echo "            ";
                $context["entity"] = array("images" => $this->getAttribute(($context["gallery"] ?? null), "photos", array()));
                // line 197
                echo "            ";
                $context["sliderSettings"] = ($context["settings"] ?? null);
                // line 198
                echo "
            ";
                // line 199
                if ((($context["viewType"] ?? null) == "block")) {
                    // line 200
                    echo "                ";
                    echo $context["view"]->getblock_view(($context["entity"] ?? null));
                    echo "
            ";
                }
                // line 202
                echo "
            ";
                // line 203
                if ((($context["viewType"] ?? null) == "list")) {
                    // line 204
                    echo "                ";
                    echo $context["view"]->getlist_view(($context["entity"] ?? null), ($context["sliderSettings"] ?? null), $this->getAttribute(($context["gallery"] ?? null), "id", array()));
                    echo "
            ";
                }
                // line 206
                echo "        ";
            }
            // line 207
            echo "    ";
        }
        // line 208
        echo "
    <div id=\"importDialog\" title=\"";
        // line 209
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select source to import from")), "html", null, true);
        echo "\" style=\"display: none;\">
        ";
        // line 210
        echo $context["importTypes"]->getshow(400, $this->getAttribute(($context["gallery"] ?? null), "id", array()));
        echo "
    </div>

    <div id=\"linkedImagesDialog\" title=\"";
        // line 213
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Linked Images")), "html", null, true);
        echo "\" style=\"display:none;\">
        <div class=\"linked-images-action-buttons\">
            <button class=\"button add\">";
        // line 215
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add images")), "html", null, true);
        echo "</button>
            <button class=\"button remove\">";
        // line 216
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Remove selected")), "html", null, true);
        echo "</button>
        </div>
        <div class=\"linked-attachments-list\">
            
        </div>
        <div class=\"loading-container\">
            <i class=\"fa fa-spinner fa-spin fa-2x\"></i>
        </div>
    </div>

    <div id=\"effectDialog\" title=\"";
        // line 226
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select overlay effect")), "html", null, true);
        echo "\" style=\"display:none;\">
        <div id=\"effectsPreview\" style=\"margin-top: 10px;\">
            ";
        // line 228
        $context["effects"] = array("none" => "None", "center" => "Middle", "quarter-appear" => "Appear", "quarter-slide-up" => "Quarter Slide Up", "quarter-slide-side" => "Quarter Slide Side", "quarter-fall-in" => "Quarter Fall in", "quarter-two-step" => "Quarter Two-step", "quarter-zoom" => "Quarter Caption Zoom", "cover-fade" => "Cover Fade", "cover-push-right" => "Cover Push Right", "revolving-door-left" => "Revolving Door Left", "revolving-door-right" => "Revolving Door Right", "revolving-door-top" => "Revolving Door Top", "revolving-door-bottom" => "Revolving Door Bottom", "cover-slide-top" => "Cover Slide Top", "offset" => "Caption Offset", "guillotine-reverse" => "Guillotine Reverse", "half-slide" => "Half Slide", "sqkwoosh" => "Sqkwoosh", "tunnel" => "Tunnel", "direction-aware" => "Direction Aware", "phophorus-rotate" => "Phophorus Rotate", "phophorus-offset" => "Phophorus Offset", "phophorus-scale" => "Phophorus Scale", "cube" => "Cube", "polaroid" => "Polaroid", "3d-cube" => "3D Cube");
        // line 257
        echo "            ";
        $context["iconsWithCaptionsEffects"] = array("icons" => "Default", "icons-scale" => "Scale", "icons-sodium-left" => "Sodium Left", "icons-sodium-top" => "Sodium Top", "icons-nitrogen-top" => "Nitrogen Top");
        // line 264
        echo "            ";
        ob_start();
        // line 265
        echo "                border-radius: ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius", array()) . twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "border", array()), "radius_unit", array()), array(0 => "px", 1 => "%"))), "html", null, true);
        echo ";
                ";
        // line 266
        if ((($this->getAttribute(($context["environment"] ?? null), "isPro", array(), "method") && $this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", true, true)) && ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "enabled", array()) == "true"))) {
            // line 267
            echo "                    ";
            if (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "overlay_enabled", array()) == "true")) {
                // line 268
                echo "                        background-color:";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "overlay_color", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "overlay_color", array()), "#3498db")) : ("#3498db")), "html", null, true);
                echo ";
                    ";
            }
            // line 270
            echo "                ";
        } else {
            // line 271
            echo "                    color:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "foreground", array()), "html", null, true);
            echo ";
                    background-color:";
            // line 272
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "background", array()), "html", null, true);
            echo ";
                    font-size:";
            // line 273
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size_unit", array()), array(0 => "px", 1 => "%", 2 => "em")), "html", null, true);
            echo ";
                    ";
            // line 274
            if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_align", array()) != 3)) {
                // line 275
                echo "                        text-align:";
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_align", array()), array(0 => "left", 1 => "right", 2 => "center")), "html", null, true);
                echo ";
                    ";
            }
            // line 277
            echo "                    ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "effect", array()) == "none") || ($this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "enabled", array()) == "false"))) {
                // line 278
                echo "                        ";
                // line 279
                echo "                        bottom:0;
                    ";
            }
            // line 281
            echo "                ";
        }
        // line 282
        echo "            ";
        $context["figcaptionStyle"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 283
        echo "
            ";
        // line 284
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["gallery"] ?? null), "settings", array()), "icons", array()), "enabled", array()) == "false")) {
            // line 285
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["effects"] ?? null));
            foreach ($context['_seq'] as $context["type"] => $context["name"]) {
                // line 286
                echo "                    ";
                if (($context["type"] == "direction-aware")) {
                    // line 287
                    echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            <div class=\"box\">
                                <div class=\"box__right\">Right ? Left</div>
                                <div class=\"box__left\">Left ? Right</div>
                                <div class=\"box__top\">Top ? Bottom</div>
                                <div class=\"box__bottom\">Bottom ? Top</div>
                                <div class=\"box__center\">
                                </div>
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
                    // line 295
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\" class=\"dialog-image\">
                            </div>
                            <div class=\"select-element\">
                                ";
                    // line 298
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                    echo "
                            </div>
                        </figure>
                    ";
                } elseif ((                // line 301
$context["type"] == "3d-cube")) {
                    // line 302
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
                    // line 313
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\" class=\"dialog-image\">
                                    </div>
                                    <div style=\"";
                    // line 315
                    echo twig_escape_filter($this->env, trim(($context["figcaptionStyle"] ?? null)), "html", null, true);
                    echo "width:150px; height:150px\" class=\"face back\">
                                        <div class=\"grid-gallery-figcaption-wrap\">
                                            <span>";
                    // line 317
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"select-element\">
                                ";
                    // line 323
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                    echo "
                            </div>
                        </figure>
                    ";
                } else {
                    // line 327
                    echo "                        <figure class=\"grid-gallery-caption\" data-grid-gallery-type=\"";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                            <img data-src=\"holder.js/150x150?theme=industrial&text=";
                    // line 328
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "\" class=\"dialog-image\">
                            <figcaption style=\"";
                    // line 329
                    echo twig_escape_filter($this->env, trim(($context["figcaptionStyle"] ?? null)), "html", null, true);
                    echo "\">
                                <div class=\"grid-gallery-figcaption-wrap\">
                                    <span>";
                    // line 331
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</span>
                                </div>
                            </figcaption>
                            <div class=\"select-element\">
                                ";
                    // line 335
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
                    echo "
                            </div>
                        </figure>
                    ";
                }
                // line 339
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 340
            echo "                <div class=\"grid-gallery-clearfix\" style=\"clear: both;\"></div>
            ";
        } else {
            // line 342
            echo "                <div class=\"captions-effect-with-icons\" data-confirm=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("This effect requires icons be enabled. Enable Icons?")), "html", null, true);
            echo "\">
                    <h3>Captions effects with icons</h3>
                    ";
            // line 344
            $this->displayBlock('iconsEffects', $context, $blocks);
            // line 368
            echo "                </div>
            ";
        }
        // line 370
        echo "        </div>
        <style>
            .hi-icon { 
                color: ";
        // line 373
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "color", array()), "html", null, true);
        echo " !important; 
                background: ";
        // line 374
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background", array()), "html", null, true);
        echo " !important; 
            }
            .hi-icon:hover { 
                color: ";
        // line 377
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "hover_color", array()), "html", null, true);
        echo " !important; 
                background: ";
        // line 378
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "background_hover", array()), "html", null, true);
        echo " !important; 
            }
            .hi-icon { 
                width: ";
        // line 381
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important; 
                height: ";
        // line 382
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important; 
            }
            .hi-icon:before { 
                font-size: ";
        // line 385
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "size", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array(), "any", false, true), "size", array()), 16)) : (16)), "html", null, true);
        echo "px !important; 
                line-height: ";
        // line 386
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "icons", array()), "size", array()) * 2), "html", null, true);
        echo "px !important; 
            }
        </style>
    </div>
";
    }

    // line 344
    public function block_iconsEffects($context, array $blocks = array())
    {
        // line 345
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["iconsWithCaptionsEffects"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["name"]) {
            // line 346
            echo "                            <figure class=\"grid-gallery-caption\" data-type=\"icons\" data-grid-gallery-type=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
                                <img data-src=\"holder.js/150x150?theme=industrial&text=";
            // line 347
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" class=\"dialog-image\"/>
                                <figcaption style=\"";
            // line 348
            echo twig_escape_filter($this->env, trim(($context["figcaptionStyle"] ?? null)), "html", null, true);
            echo "\">
                                    <div class=\"hi-icon-wrap\" style=\"width: 48px; height: 48px; margin-top: 30%; position:relative;\">
                                        <a href=\"#\" class=\"hi-icon icon-link\" style=\"border:1px solid #ccc; border-radius:50%;margin:auto;position:absolute;left:0;right:0;top: 0;bottom: 0;\">
                                        </a>
                                    </div>
                                </figcaption>
                                <div class=\"caption-with-";
            // line 354
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\">
                                    <div style=\"display: table; height:100%; width:100%;\">
                                        <span style=\"padding: 10px;display:table-cell;font-size:";
            // line 356
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "text_size", array()), "html", null, true);
            echo "
                                        vertical-align:";
            // line 357
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["settings"] ?? null), "thumbnail", array()), "overlay", array()), "position", array()), "html", null, true);
            echo ";\">
                                            Caption
                                        </span>
                                    </div>
                                </div>
                                <div class=\"select-element\">
                                    ";
            // line 363
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Select")), "html", null, true);
            echo "
                                </div>
                            </figure>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 367
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "@galleries/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  752 => 367,  742 => 363,  733 => 357,  729 => 356,  724 => 354,  715 => 348,  711 => 347,  706 => 346,  701 => 345,  698 => 344,  689 => 386,  685 => 385,  679 => 382,  675 => 381,  669 => 378,  665 => 377,  659 => 374,  655 => 373,  650 => 370,  646 => 368,  644 => 344,  638 => 342,  634 => 340,  628 => 339,  621 => 335,  614 => 331,  609 => 329,  605 => 328,  600 => 327,  593 => 323,  584 => 317,  579 => 315,  574 => 313,  559 => 302,  557 => 301,  551 => 298,  545 => 295,  533 => 287,  530 => 286,  525 => 285,  523 => 284,  520 => 283,  517 => 282,  514 => 281,  510 => 279,  508 => 278,  505 => 277,  499 => 275,  497 => 274,  492 => 273,  488 => 272,  483 => 271,  480 => 270,  474 => 268,  471 => 267,  469 => 266,  464 => 265,  461 => 264,  458 => 257,  456 => 228,  451 => 226,  438 => 216,  434 => 215,  429 => 213,  423 => 210,  419 => 209,  416 => 208,  413 => 207,  410 => 206,  404 => 204,  402 => 203,  399 => 202,  393 => 200,  391 => 199,  388 => 198,  385 => 197,  382 => 196,  379 => 195,  373 => 192,  368 => 190,  364 => 188,  361 => 187,  355 => 185,  353 => 184,  350 => 183,  347 => 182,  344 => 181,  336 => 175,  328 => 170,  314 => 164,  309 => 161,  298 => 159,  294 => 158,  291 => 157,  289 => 156,  283 => 152,  278 => 149,  276 => 148,  273 => 147,  269 => 145,  267 => 144,  263 => 142,  261 => 141,  247 => 133,  239 => 132,  233 => 131,  227 => 130,  221 => 129,  215 => 128,  209 => 127,  204 => 125,  200 => 124,  191 => 120,  185 => 119,  180 => 117,  172 => 116,  159 => 106,  150 => 100,  140 => 92,  137 => 74,  134 => 68,  132 => 67,  130 => 66,  128 => 65,  126 => 64,  124 => 63,  121 => 61,  119 => 60,  117 => 59,  115 => 58,  113 => 57,  111 => 56,  109 => 55,  107 => 54,  100 => 49,  94 => 46,  85 => 40,  79 => 37,  71 => 32,  65 => 29,  62 => 28,  60 => 15,  50 => 9,  43 => 7,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@galleries/view.twig", "E:\\xampp\\htdocs\\ctfs\\wp-content\\plugins\\gallery-by-supsystic\\src\\GridGallery\\Galleries\\views\\view.twig");
    }
}
