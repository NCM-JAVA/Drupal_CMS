<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/growbiz/templates/views/views-view-unformatted--home-page-slider--block-1.html.twig */
class __TwigTemplate_c74904d08d337f8bad5e2dec8621fe4b extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<section class=\"slider-area p-relative fix\">
            <div class=\"slider-active swiper-container\">
                <div class=\"swiper-wrapper\">
\t\t\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["rows"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 5
            yield "                    <div class=\"single-slider slider-height swiper-slide slider-overlay\" data-swiper-autoplay=\"5000\">
                        <div class=\"slide-bg\" data-background=\"";
            // line 6
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 6)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 6), "#view", [], "array", false, false, true, 6)), "style_plugin", [], "any", false, false, true, 6), "render_tokens", [], "any", false, false, true, 6)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 6)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 6)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 6), "#view", [], "array", false, false, true, 6)), "style_plugin", [], "any", false, false, true, 6), "render_tokens", [], "any", false, false, true, 6), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 6), [], "array", false, false, true, 6))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["{{ field_slider_image }}"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 6)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 6), "#view", [], "array", false, false, true, 6)), "style_plugin", [], "any", false, false, true, 6), "render_tokens", [], "any", false, false, true, 6)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 6)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 6)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 6), "#view", [], "array", false, false, true, 6)), "style_plugin", [], "any", false, false, true, 6), "render_tokens", [], "any", false, false, true, 6), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 6), [], "array", false, false, true, 6)), "{{ field_slider_image }}", [], "array", false, false, true, 6)), "html", null, true);
            yield "\"></div>
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-lg-9\">
                                    <div class=\"hero-content\">
                                        <div class=\"hero-bg-shape\" data-animation=\"fadeInUp\" data-delay=\".3s\">
                                            <div class=\"hero-s-1\">
                                                <img src=\"";
            // line 13
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
            yield "/assets/img/shape/hero-s-1.png\" alt=\"\">
                                            </div>
                                            <div class=\"hero-s-2\">
                                                <img src=\"";
            // line 16
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
            yield "/assets/img/shape/hero-s-2.png\" alt=\"\">
                                            </div>
                                        </div>
                                        <p data-animation=\"fadeInUp\" data-delay=\".6s\">";
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v7 = (($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v9 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 19)) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 19), "#view", [], "array", false, false, true, 19)), "style_plugin", [], "any", false, false, true, 19), "render_tokens", [], "any", false, false, true, 19)) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 19)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v10 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 19)) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 19), "#view", [], "array", false, false, true, 19)), "style_plugin", [], "any", false, false, true, 19), "render_tokens", [], "any", false, false, true, 19), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 19), [], "array", false, false, true, 19))) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["{{ title }}"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v11 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v12 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 19)) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 19), "#view", [], "array", false, false, true, 19)), "style_plugin", [], "any", false, false, true, 19), "render_tokens", [], "any", false, false, true, 19)) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 19)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v13 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 19)) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 19), "#view", [], "array", false, false, true, 19)), "style_plugin", [], "any", false, false, true, 19), "render_tokens", [], "any", false, false, true, 19), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 19), [], "array", false, false, true, 19)), "{{ title }}", [], "array", false, false, true, 19)), "html", null, true);
            yield "</p>
                                        <h1 data-animation=\"fadeInUp\" data-delay=\".9s\">";
            // line 20
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v14 = (($_v15 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v16 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 20)) && is_array($_v16) || $_v16 instanceof ArrayAccess && in_array($_v16::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v16["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 20), "#view", [], "array", false, false, true, 20)), "style_plugin", [], "any", false, false, true, 20), "render_tokens", [], "any", false, false, true, 20)) && is_array($_v15) || $_v15 instanceof ArrayAccess && in_array($_v15::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 20)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v17 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 20)) && is_array($_v17) || $_v17 instanceof ArrayAccess && in_array($_v17::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v17["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 20), "#view", [], "array", false, false, true, 20)), "style_plugin", [], "any", false, false, true, 20), "render_tokens", [], "any", false, false, true, 20), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 20), [], "array", false, false, true, 20))) && is_array($_v14) || $_v14 instanceof ArrayAccess && in_array($_v14::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v14["{{ field_sub_title }}"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v18 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v19 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 20)) && is_array($_v19) || $_v19 instanceof ArrayAccess && in_array($_v19::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v19["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 20), "#view", [], "array", false, false, true, 20)), "style_plugin", [], "any", false, false, true, 20), "render_tokens", [], "any", false, false, true, 20)) && is_array($_v18) || $_v18 instanceof ArrayAccess && in_array($_v18::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 20)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v20 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 20)) && is_array($_v20) || $_v20 instanceof ArrayAccess && in_array($_v20::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v20["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 20), "#view", [], "array", false, false, true, 20)), "style_plugin", [], "any", false, false, true, 20), "render_tokens", [], "any", false, false, true, 20), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 20), [], "array", false, false, true, 20)), "{{ field_sub_title }}", [], "array", false, false, true, 20)), "html", null, true);
            yield "</h1>
                                        <div class=\"hero-content-btn\" data-animation=\"fadeInUp\" data-delay=\"1.1s\">
                                            <a href=\"";
            // line 22
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v21 = (($_v22 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v23 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22)) && is_array($_v23) || $_v23 instanceof ArrayAccess && in_array($_v23::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v23["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22), "#view", [], "array", false, false, true, 22)), "style_plugin", [], "any", false, false, true, 22), "render_tokens", [], "any", false, false, true, 22)) && is_array($_v22) || $_v22 instanceof ArrayAccess && in_array($_v22::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v22[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 22)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v24 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22)) && is_array($_v24) || $_v24 instanceof ArrayAccess && in_array($_v24::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v24["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22), "#view", [], "array", false, false, true, 22)), "style_plugin", [], "any", false, false, true, 22), "render_tokens", [], "any", false, false, true, 22), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 22), [], "array", false, false, true, 22))) && is_array($_v21) || $_v21 instanceof ArrayAccess && in_array($_v21::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v21["{{ field_link_for_page }}"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v25 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v26 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22)) && is_array($_v26) || $_v26 instanceof ArrayAccess && in_array($_v26::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v26["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22), "#view", [], "array", false, false, true, 22)), "style_plugin", [], "any", false, false, true, 22), "render_tokens", [], "any", false, false, true, 22)) && is_array($_v25) || $_v25 instanceof ArrayAccess && in_array($_v25::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v25[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 22)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v27 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22)) && is_array($_v27) || $_v27 instanceof ArrayAccess && in_array($_v27::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v27["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22), "#view", [], "array", false, false, true, 22)), "style_plugin", [], "any", false, false, true, 22), "render_tokens", [], "any", false, false, true, 22), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 22), [], "array", false, false, true, 22)), "{{ field_link_for_page }}", [], "array", false, false, true, 22)), "html", null, true);
            yield "\" class=\"grb-btn\">Get Started</a>
                                        </div>
                                        <div class=\"hero-video-btn\" data-animation=\"fadeInUp\" data-delay=\"1.2s\">
                                            <a class=\"grb-video popup-video\"
                                                href=\"";
            // line 26
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v28 = (($_v29 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v30 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26)) && is_array($_v30) || $_v30 instanceof ArrayAccess && in_array($_v30::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v30["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26), "#view", [], "array", false, false, true, 26)), "style_plugin", [], "any", false, false, true, 26), "render_tokens", [], "any", false, false, true, 26)) && is_array($_v29) || $_v29 instanceof ArrayAccess && in_array($_v29::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v29[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 26)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v31 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26)) && is_array($_v31) || $_v31 instanceof ArrayAccess && in_array($_v31::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v31["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26), "#view", [], "array", false, false, true, 26)), "style_plugin", [], "any", false, false, true, 26), "render_tokens", [], "any", false, false, true, 26), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 26), [], "array", false, false, true, 26))) && is_array($_v28) || $_v28 instanceof ArrayAccess && in_array($_v28::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v28["{{ field_link_for_video }}"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v32 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v33 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26)) && is_array($_v33) || $_v33 instanceof ArrayAccess && in_array($_v33::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v33["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26), "#view", [], "array", false, false, true, 26)), "style_plugin", [], "any", false, false, true, 26), "render_tokens", [], "any", false, false, true, 26)) && is_array($_v32) || $_v32 instanceof ArrayAccess && in_array($_v32::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v32[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 26)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v34 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26)) && is_array($_v34) || $_v34 instanceof ArrayAccess && in_array($_v34::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v34["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 26), "#view", [], "array", false, false, true, 26)), "style_plugin", [], "any", false, false, true, 26), "render_tokens", [], "any", false, false, true, 26), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 26), [], "array", false, false, true, 26)), "{{ field_link_for_video }}", [], "array", false, false, true, 26)), "html", null, true);
            yield "\"><i
                                                    class=\"fas fa-play\"></i></a>
                                            <p>Working Videos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                   ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                </div>
                <!-- If we need navigation buttons -->
                <div class=\"slider-nav\">
                    <div class=\"swiper-button-prev\"><i class=\"far fa-arrow-left\"></i></div>
                    <div class=\"swiper-button-next\"><i class=\"far fa-arrow-right\"></i></div>
                </div>
            </div>
        </section>\t\t";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows", "loop", "directory"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/growbiz/templates/views/views-view-unformatted--home-page-slider--block-1.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  132 => 37,  107 => 26,  100 => 22,  95 => 20,  91 => 19,  85 => 16,  79 => 13,  69 => 6,  66 => 5,  49 => 4,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/growbiz/templates/views/views-view-unformatted--home-page-slider--block-1.html.twig", "C:\\xampp\\htdocs\\drupal_theme_development\\web\\themes\\custom\\growbiz\\templates\\views\\views-view-unformatted--home-page-slider--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 4);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
