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

/* themes/custom/growbiz/templates/views/views-view-unformatted--team--block-1.html.twig */
class __TwigTemplate_c3bc1051f7931dd8d6af1073325e2fd1 extends Template
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
        yield "<section class=\"team-area grey-bg pt-115 pb-90\">
    <div class=\"container\">
        <div class=\"row wow fadeInUp\">
            <div class=\"col-lg-12\">
                <div class=\"section-title mb-55 text-center\">
                    <div class=\"border-c-bottom\">
                        <p>Meet The Team</p>
                    </div>
                    <h2>Meet Our Experienced <br> & Skilled Team</h2>
                </div>
            </div>
        </div>

        <div class=\"row wow fadeInUp\">
            ";
        // line 15
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
            // line 16
            yield "                <div class=\"col-lg-3 col-md-6\">
                    <div class=\"team-member mb-30\">
                        <div class=\"member-img\">
                           
                                <a href=\"contact.html\">
                                    <img src=\"";
            // line 21
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v0 = (($_v1 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v2 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 21)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 21), "#view", [], "array", false, false, true, 21)), "style_plugin", [], "any", false, false, true, 21), "render_tokens", [], "any", false, false, true, 21)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 21)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v3 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 21)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 21), "#view", [], "array", false, false, true, 21)), "style_plugin", [], "any", false, false, true, 21), "render_tokens", [], "any", false, false, true, 21), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 21), [], "array", false, false, true, 21))) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["{{ field_image }}"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v4 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v5 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 21)) && is_array($_v5) || $_v5 instanceof ArrayAccess && in_array($_v5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v5["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 21), "#view", [], "array", false, false, true, 21)), "style_plugin", [], "any", false, false, true, 21), "render_tokens", [], "any", false, false, true, 21)) && is_array($_v4) || $_v4 instanceof ArrayAccess && in_array($_v4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v4[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 21)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v6 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 21)) && is_array($_v6) || $_v6 instanceof ArrayAccess && in_array($_v6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v6["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 21), "#view", [], "array", false, false, true, 21)), "style_plugin", [], "any", false, false, true, 21), "render_tokens", [], "any", false, false, true, 21), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 21), [], "array", false, false, true, 21)), "{{ field_image }}", [], "array", false, false, true, 21)), "html", null, true);
            yield "\" alt=\"\">
                                </a>
                           
                                
                            
                        </div>

                        <div class=\"member-name p-relative\">
                            <div class=\"member-name-bg\">
                                <img src=\"";
            // line 30
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
            yield "/assets/img/shape/member-name-bg.png\" alt=\"\">
                                <img src=\"";
            // line 31
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
            yield "/assets/img/shape/member-name-c-bg.png\" alt=\"\">
                            </div>
                            <h5>
                                <a href=\"contact.html\">
                                    ";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v7 = (($_v8 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v9 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 35)) && is_array($_v9) || $_v9 instanceof ArrayAccess && in_array($_v9::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v9["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 35), "#view", [], "array", false, false, true, 35)), "style_plugin", [], "any", false, false, true, 35), "render_tokens", [], "any", false, false, true, 35)) && is_array($_v8) || $_v8 instanceof ArrayAccess && in_array($_v8::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v8[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 35)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v10 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 35)) && is_array($_v10) || $_v10 instanceof ArrayAccess && in_array($_v10::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v10["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 35), "#view", [], "array", false, false, true, 35)), "style_plugin", [], "any", false, false, true, 35), "render_tokens", [], "any", false, false, true, 35), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 35), [], "array", false, false, true, 35))) && is_array($_v7) || $_v7 instanceof ArrayAccess && in_array($_v7::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v7["{{ title }}"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v11 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v12 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 35)) && is_array($_v12) || $_v12 instanceof ArrayAccess && in_array($_v12::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v12["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 35), "#view", [], "array", false, false, true, 35)), "style_plugin", [], "any", false, false, true, 35), "render_tokens", [], "any", false, false, true, 35)) && is_array($_v11) || $_v11 instanceof ArrayAccess && in_array($_v11::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v11[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 35)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v13 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 35)) && is_array($_v13) || $_v13 instanceof ArrayAccess && in_array($_v13::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v13["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 35), "#view", [], "array", false, false, true, 35)), "style_plugin", [], "any", false, false, true, 35), "render_tokens", [], "any", false, false, true, 35), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 35), [], "array", false, false, true, 35)), "{{ title }}", [], "array", false, false, true, 35)), "html", null, true);
            yield "
                                </a>
                            </h5>
\t\t\t\t\t\t\t
                            <span>";
            // line 39
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v14 = (($_v15 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v16 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 39)) && is_array($_v16) || $_v16 instanceof ArrayAccess && in_array($_v16::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v16["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 39), "#view", [], "array", false, false, true, 39)), "style_plugin", [], "any", false, false, true, 39), "render_tokens", [], "any", false, false, true, 39)) && is_array($_v15) || $_v15 instanceof ArrayAccess && in_array($_v15::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v15[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 39)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v17 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 39)) && is_array($_v17) || $_v17 instanceof ArrayAccess && in_array($_v17::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v17["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 39), "#view", [], "array", false, false, true, 39)), "style_plugin", [], "any", false, false, true, 39), "render_tokens", [], "any", false, false, true, 39), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 39), [], "array", false, false, true, 39))) && is_array($_v14) || $_v14 instanceof ArrayAccess && in_array($_v14::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v14["{{ field_category }}"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v18 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v19 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 39)) && is_array($_v19) || $_v19 instanceof ArrayAccess && in_array($_v19::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v19["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 39), "#view", [], "array", false, false, true, 39)), "style_plugin", [], "any", false, false, true, 39), "render_tokens", [], "any", false, false, true, 39)) && is_array($_v18) || $_v18 instanceof ArrayAccess && in_array($_v18::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v18[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 39)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v20 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 39)) && is_array($_v20) || $_v20 instanceof ArrayAccess && in_array($_v20::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v20["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 39), "#view", [], "array", false, false, true, 39)), "style_plugin", [], "any", false, false, true, 39), "render_tokens", [], "any", false, false, true, 39), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 39), [], "array", false, false, true, 39)), "{{ field_category }}", [], "array", false, false, true, 39)), "html", null, true);
            yield "</span>

                            <div class=\"member-social\">
                                <i class=\"far fa-plus\"></i>
                                <ul class=\"member-social-icons\">
                                  
                                        <li><a href=\"";
            // line 45
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v21 = (($_v22 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v23 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45)) && is_array($_v23) || $_v23 instanceof ArrayAccess && in_array($_v23::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v23["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45), "#view", [], "array", false, false, true, 45)), "style_plugin", [], "any", false, false, true, 45), "render_tokens", [], "any", false, false, true, 45)) && is_array($_v22) || $_v22 instanceof ArrayAccess && in_array($_v22::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v22[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 45)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v24 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45)) && is_array($_v24) || $_v24 instanceof ArrayAccess && in_array($_v24::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v24["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45), "#view", [], "array", false, false, true, 45)), "style_plugin", [], "any", false, false, true, 45), "render_tokens", [], "any", false, false, true, 45), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 45), [], "array", false, false, true, 45))) && is_array($_v21) || $_v21 instanceof ArrayAccess && in_array($_v21::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v21["{{ field_xyz_link }}"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v25 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v26 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45)) && is_array($_v26) || $_v26 instanceof ArrayAccess && in_array($_v26::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v26["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45), "#view", [], "array", false, false, true, 45)), "style_plugin", [], "any", false, false, true, 45), "render_tokens", [], "any", false, false, true, 45)) && is_array($_v25) || $_v25 instanceof ArrayAccess && in_array($_v25::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v25[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 45)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v27 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45)) && is_array($_v27) || $_v27 instanceof ArrayAccess && in_array($_v27::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v27["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 45), "#view", [], "array", false, false, true, 45)), "style_plugin", [], "any", false, false, true, 45), "render_tokens", [], "any", false, false, true, 45), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 45), [], "array", false, false, true, 45)), "{{ field_xyz_link }}", [], "array", false, false, true, 45)), "html", null, true);
            yield "\"><i class=\"fab fa-skype\"></i></a></li>
                                    
                                    
                                        <li><a href=\"";
            // line 48
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v28 = (($_v29 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v30 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 48)) && is_array($_v30) || $_v30 instanceof ArrayAccess && in_array($_v30::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v30["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 48), "#view", [], "array", false, false, true, 48)), "style_plugin", [], "any", false, false, true, 48), "render_tokens", [], "any", false, false, true, 48)) && is_array($_v29) || $_v29 instanceof ArrayAccess && in_array($_v29::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v29[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 48)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v31 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 48)) && is_array($_v31) || $_v31 instanceof ArrayAccess && in_array($_v31::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v31["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 48), "#view", [], "array", false, false, true, 48)), "style_plugin", [], "any", false, false, true, 48), "render_tokens", [], "any", false, false, true, 48), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 48), [], "array", false, false, true, 48))) && is_array($_v28) || $_v28 instanceof ArrayAccess && in_array($_v28::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v28["{{ field_insta_link }}"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v32 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v33 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 48)) && is_array($_v33) || $_v33 instanceof ArrayAccess && in_array($_v33::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v33["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 48), "#view", [], "array", false, false, true, 48)), "style_plugin", [], "any", false, false, true, 48), "render_tokens", [], "any", false, false, true, 48)) && is_array($_v32) || $_v32 instanceof ArrayAccess && in_array($_v32::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v32[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 48)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v34 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 48)) && is_array($_v34) || $_v34 instanceof ArrayAccess && in_array($_v34::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v34["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 48), "#view", [], "array", false, false, true, 48)), "style_plugin", [], "any", false, false, true, 48), "render_tokens", [], "any", false, false, true, 48), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 48), [], "array", false, false, true, 48)), "{{ field_insta_link }}", [], "array", false, false, true, 48)), "html", null, true);
            yield "\"><i class=\"fab fa-instagram-square\"></i></a></li>
                                  
                                    
                                        <li><a href=\"";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v35 = (($_v36 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v37 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 51)) && is_array($_v37) || $_v37 instanceof ArrayAccess && in_array($_v37::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v37["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 51), "#view", [], "array", false, false, true, 51)), "style_plugin", [], "any", false, false, true, 51), "render_tokens", [], "any", false, false, true, 51)) && is_array($_v36) || $_v36 instanceof ArrayAccess && in_array($_v36::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v36[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 51)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v38 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 51)) && is_array($_v38) || $_v38 instanceof ArrayAccess && in_array($_v38::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v38["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 51), "#view", [], "array", false, false, true, 51)), "style_plugin", [], "any", false, false, true, 51), "render_tokens", [], "any", false, false, true, 51), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 51), [], "array", false, false, true, 51))) && is_array($_v35) || $_v35 instanceof ArrayAccess && in_array($_v35::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v35["{{ field_tiwitter_link }}"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v39 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v40 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 51)) && is_array($_v40) || $_v40 instanceof ArrayAccess && in_array($_v40::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v40["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 51), "#view", [], "array", false, false, true, 51)), "style_plugin", [], "any", false, false, true, 51), "render_tokens", [], "any", false, false, true, 51)) && is_array($_v39) || $_v39 instanceof ArrayAccess && in_array($_v39::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v39[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 51)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v41 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 51)) && is_array($_v41) || $_v41 instanceof ArrayAccess && in_array($_v41::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v41["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 51), "#view", [], "array", false, false, true, 51)), "style_plugin", [], "any", false, false, true, 51), "render_tokens", [], "any", false, false, true, 51), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 51), [], "array", false, false, true, 51)), "{{ field_tiwitter_link }}", [], "array", false, false, true, 51)), "html", null, true);
            yield "\"><i class=\"fab fa-twitter\"></i></a></li>
                                  
                                    
                                        <li><a href=\"";
            // line 54
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($_v42 = (($_v43 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v44 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 54)) && is_array($_v44) || $_v44 instanceof ArrayAccess && in_array($_v44::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v44["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 54), "#view", [], "array", false, false, true, 54)), "style_plugin", [], "any", false, false, true, 54), "render_tokens", [], "any", false, false, true, 54)) && is_array($_v43) || $_v43 instanceof ArrayAccess && in_array($_v43::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v43[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 54)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v45 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 54)) && is_array($_v45) || $_v45 instanceof ArrayAccess && in_array($_v45::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v45["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 54), "#view", [], "array", false, false, true, 54)), "style_plugin", [], "any", false, false, true, 54), "render_tokens", [], "any", false, false, true, 54), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 54), [], "array", false, false, true, 54))) && is_array($_v42) || $_v42 instanceof ArrayAccess && in_array($_v42::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v42["{{ field_fb_link }}"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($_v46 = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v47 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 54)) && is_array($_v47) || $_v47 instanceof ArrayAccess && in_array($_v47::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v47["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 54), "#view", [], "array", false, false, true, 54)), "style_plugin", [], "any", false, false, true, 54), "render_tokens", [], "any", false, false, true, 54)) && is_array($_v46) || $_v46 instanceof ArrayAccess && in_array($_v46::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v46[CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 54)] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($_v48 = CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 54)) && is_array($_v48) || $_v48 instanceof ArrayAccess && in_array($_v48::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v48["#view"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 54), "#view", [], "array", false, false, true, 54)), "style_plugin", [], "any", false, false, true, 54), "render_tokens", [], "any", false, false, true, 54), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, true, 54), [], "array", false, false, true, 54)), "{{ field_fb_link }}", [], "array", false, false, true, 54)), "html", null, true);
            yield "\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                  
                                </ul>
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
        // line 62
        yield "        </div>
    </div>
</section>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["rows", "loop", "directory"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/growbiz/templates/views/views-view-unformatted--team--block-1.html.twig";
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
        return array (  163 => 62,  141 => 54,  135 => 51,  129 => 48,  123 => 45,  114 => 39,  107 => 35,  100 => 31,  96 => 30,  84 => 21,  77 => 16,  60 => 15,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/growbiz/templates/views/views-view-unformatted--team--block-1.html.twig", "C:\\xampp\\htdocs\\drupal_theme_development\\web\\themes\\custom\\growbiz\\templates\\views\\views-view-unformatted--team--block-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 15);
        static $filters = array("escape" => 21);
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
