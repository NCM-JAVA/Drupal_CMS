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

/* themes/custom/growbiz/templates/layout/page--front.html.twig */
class __TwigTemplate_c34711dbf8eb1a0d560a5878090a7e66 extends Template
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
        yield "<!doctype html>
<html class=\"no-js\" lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Growbiz HTML5 Digital Agency</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <link rel=\"manifest\" href=\"site.webmanifest\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/favicon.ico\">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/css/swiper-bundle.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/css/custom-animation.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/css/magnific-popup.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/css/odometer-theme-default.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/css/fontawesome-all.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/css/meanmenu.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/css/flaticon.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/css/main.css\">
</head>

<body>
    <!-- header area start  -->
    <header>
        <div class=\"header__top d-none d-md-block\">
            <div class=\"container\">
                <div class=\"row d-flex align-items-center\">
                    <div class=\"col-lg-9\">
                        <div class=\"grb__cta header-cta\">
                            <ul>
                                <li>
                                    <div class=\"cta__icon\">
                                        <span><i class=\"fas fa-phone-alt\"></i></span>
                                    </div>
                                    <div class=\"cta__content\">
                                        <p>Call Us:</p>
                                        <span><a href=\"tel:";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["call_us"] ?? null), "html", null, true);
        yield "\">f";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["call_us"] ?? null), "html", null, true);
        yield "</a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"cta__icon\">
                                        <span><i class=\"fas fa-envelope\"></i></span>
                                    </div>
                                    <div class=\"cta__content\">
                                        <p>Mail Us:</p>
                                        <span><a href=\"/cdn-cgi/l/email-protection#4b3824262e24252e0b2c39243c29223165282426\"><span class=\"__cf_email__\" data-cfemail=\"5f2c30323a30313a1f382d30283d3625713c3032\">";
        // line 52
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header_mail"] ?? null), "html", null, true);
        yield "</span></a></span>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"cta__icon\">
                                        <span><i class=\"fas fa-clock\"></i></span>
                                    </div>
                                    <div class=\"cta__content\">
                                        <p>Service Hours</p>
                                        <span>";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["service_hours"] ?? null), "html", null, true);
        yield "</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-3 d-none d-lg-block\">
                        <div class=\"grb__social f-right st-1\">
                            <ul>
                                <li><a class=\"fb\" href=\"";
        // line 70
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["facebook"] ?? null), "html", null, true);
        yield "\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                <li><a class=\"twt\" href=\"";
        // line 71
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["twitter"] ?? null), "html", null, true);
        yield "\"><i class=\"fab fa-twitter\"></i></a></li>
                                <li><a class=\"insta\" href=\"";
        // line 72
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["instagram"] ?? null), "html", null, true);
        yield "\"><i class=\"fab fa-instagram\"></i></a></li>
                                <li><a class=\"pint\" href=\"";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["youtube"] ?? null), "html", null, true);
        yield "\"><i class=\"fab fa-pinterest-p\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"header__main header-sticky header-main-1\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-2 col-lg-3 col-8\">
                        <div class=\"logo\">
                            <div class=\"logo-bg-1\">
                                <img src=\"";
        // line 86
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/shape/logo-bg-1.png\" alt=\"\">
                            </div>
                            <a class=\"logo-text-white\" href=\"index.html\"><img src=\"";
        // line 88
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/logo/gettyimages-1922453339-612x612.jpg\" alt=\"\"></a>
                            <a class=\"logo-text-black\" href=\"index.html\"><img src=\"";
        // line 89
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/logo/gettyimages-1922453339-612x612.jpg\"
                                    alt=\"\"></a>
                        </div>
                    </div>
                   <div class=\"col-xl-10 col-lg-9 col-4\">
    <div class=\"header__menu-area f-right\" style=\"display: flex; align-items: center; justify-content: space-between;\">
        <div class=\"menu-bg-1\" style=\"display: none;\">
            <img src=\"";
        // line 96
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/shape/menu-bg-1.png\" alt=\"\">
        </div>

        ";
        // line 99
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 99), "html", null, true);
        yield "

        <div class=\"header__search\" style=\"margin-left: auto;\">
            <a class=\"search-btn nav-search search-trigger d-none d-sm-inline-block\" href=\"#\" style=\"display: inline-block;\">
                <i class=\"fal fa-search\"></i>
            </a>
            <a class=\"side-toggle d-lg-none\" href=\"javascript:void(0)\">
                <i class=\"fal fa-bars\"></i>
            </a>
        </div>

        <div class=\"header__btn d-none d-xl-inline-block\" style=\"display: inline-block; margin-left: 20px;\">
            <a href=\"contact.html\" class=\"grb-btn\">Get Reserved<i class=\"fas fa-arrow-right\"></i></a>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
    <!-- side toggle start  -->
    <div class=\"fix\">
        <div class=\"side-info\">
            <div class=\"side-info-content\">
                <div class=\"offset-widget offset-logo mb-30 pb-20\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-9\"><a href=\"index.html\"><img src=\"";
        // line 126
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/logo/logo.png\" alt=\"Logo\"></a>
                        </div>
                        <div class=\"col-3 text-end\"><button class=\"side-info-close\"><i
                                    class=\"fal fa-times\"></i></button>
                        </div>
                    </div>
                </div>
                <div class=\"mobile-menu d-lg-none\"></div>
                <div class=\"offset-widget offset_searchbar mb-30\">
                    <form method=\"get\" action=\"#\">
                        <div class=\"offset_search_content\">
                            <input type=\"search\" placeholder=\"What are you searching for?\">
                            <button type=\"submit\" class=\"offset_search_button\"><i class=\"fal fa-search\"></i></button>
                        </div>
                    </form>
                </div>

                <div class=\"offset-widget mb-40 d-none d-lg-block\">
                    <div class=\"info-widget\">
                        <h4 class=\"offset-title mb-20 d-none\">About Us</h4>
                        <p class=\"mb-30\">But I must explain to you how all this mistaken idea of
                            denouncing pleasure and
                            praising pain
                            was born and will give you a complete account of the system and expound the actual teachings
                            of the great
                            explore</p>
                        <a href=\"#\" class=\"c-btn btn-round-02 d-none\">Contact Us</a>
                    </div>
                </div>

                <div class=\"row side-gallery gx-4\">
                    <div class=\"col-4 mb-20\">
                        <div class=\"side-image\">
                            <a class=\"popup-image\" href=\"";
        // line 159
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/portfolio/pm1.jpg\"><img
                                    src=\"";
        // line 160
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/portfolio/pm1.jpg\" alt=\"sidebar-img\"></a>
                        </div>
                    </div>
                    <div class=\"col-4 mb-20\">
                        <div class=\"side-image\">
                            <a class=\"popup-image\" href=\"";
        // line 165
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/portfolio/pm2.jpg\"><img
                                    src=\"";
        // line 166
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/portfolio/pm2.jpg\" alt=\"sidebar-img\"></a>
                        </div>
                    </div>
                    <div class=\"col-4 mb-20\">
                        <div class=\"side-image\">
                            <a class=\"popup-image\" href=\"";
        // line 171
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/portfolio/pm3.jpg\"><img
                                    src=\"";
        // line 172
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/portfolio/pm3.jpg\" alt=\"sidebar-img\"></a>
                        </div>
                    </div>
                    <div class=\"col-4 mb-20\">
                        <div class=\"side-image\">
                            <a class=\"popup-image\" href=\"";
        // line 177
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/portfolio/pm4.jpg\"><img
                                    src=\"";
        // line 178
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/portfolio/pm4.jpg\" alt=\"sidebar-img\"></a>
                        </div>
                    </div>
                    <div class=\"col-4 mb-20\">
                        <div class=\"side-image\">
                            <a class=\"popup-image\" href=\"";
        // line 183
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/portfolio/pm5.jpg\"><img
                                    src=\"";
        // line 184
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/portfolio/pm5.jpg\" alt=\"sidebar-img\"></a>
                        </div>
                    </div>
                    <div class=\"col-4 mb-20\">
                        <div class=\"side-image\">
                            <a class=\"popup-image\" href=\"";
        // line 189
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/portfolio/pm6.jpg\"><img
                                    src=\"";
        // line 190
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/portfolio/pm6.jpg\" alt=\"sidebar-img\"></a>
                        </div>
                    </div>
                </div>

                <div class=\"side-map mt-20 mb-30 d-none d-lg-block\">
                    <iframe
                        src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3041981.899057291!2d-87.62979822192196!3d41.878113633413804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C%20IL%2C%20USA!5e0!3m2!1sen!2sbd!4v1627994034288!5m2!1sen!2sbd\"></iframe>
                </div>



                <div class=\"contact-infos mt-30 mb-30\">
                    <div class=\"contact-list mb-30\">
                        <h4>Contact Info</h4>
                        <a href=\"#\" class=\"\">
                            <i class=\"fal fa-map-marker-alt\"></i>
                            <span>Johnson Super Street,
                                New York, USA 2344</span>
                        </a>
                        <a href=\"tel:(555)764890345\" class=\"\">
                            <i class=\"fal fa-phone\"></i>
                            <span>(555) 764 890 345</span>
                        </a>
                        <a href=\"/cdn-cgi/l/email-protection#b8d1d6ded7f8dcd7d5d9d1d696dbd7d5\" class=\"\">
                            <i class=\"far fa-envelope\"></i>
                            <span><span class=\"__cf_email__\" data-cfemail=\"422b2c242d02262d2f232b2c6c212d2f\">[email&#160;protected]</span></span>
                        </a>

                    </div>
                    <div class=\"grb__social footer-social offset-social\">
                        <ul>
                            <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fab fa-pinterest-p\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"offcanvas-overlay\"></div>
    <!-- side toggle end -->
    <!-- Fullscreen search -->
    <div class=\"search-wrap\">
        <div class=\"search-inner\">
            <i class=\"fal fa-times search-close\" id=\"search-close\"></i>
            <div class=\"search-cell\">
                <form method=\"get\">
                    <div class=\"search-field-holder\">
                        <input type=\"search\" class=\"main-search-input\" placeholder=\"Search Your Keyword...\">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end fullscreen search -->
    <main>
        <!-- hero area start here -->
        ";
        // line 250
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "logos", [], "any", false, false, true, 250)) {
            // line 251
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "slider", [], "any", false, false, true, 251), "html", null, true);
            yield "
      ";
        }
        // line 253
        yield "        <!-- hero area end here -->
        <!-- brand area start  -->
        ";
        // line 255
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "logos", [], "any", false, false, true, 255)) {
            // line 256
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "logos", [], "any", false, false, true, 256), "html", null, true);
            yield "
      ";
        }
        // line 258
        yield "        <!-- brand area end -->
        <!-- about area start  -->
        <section class=\"about__area\">
            <div class=\"container\">
                <div class=\"row wow fadeInUp\">
                    <div class=\"col-xl-6 col-lg-5\">
                        <div class=\"about__img p-relative mb-30\">
                            <div class=\"about__img-inner\">
                                <img src=\"";
        // line 266
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/about/istockphoto-1143494065-612x612.jpg\" alt=\"\">
                            </div>
                            <div class=\"p-element\">
                                <div class=\"ab-border d-none d-lg-block\"></div>
                                <div class=\"award\">
                                    <img src=\"";
        // line 271
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/icon/stock-vector-ashok-pillar-symbol-icon-black-satyamev-jayete-truth-alone-triumphs-symbol-government-of-india-2422191035.jpg\" alt=\"\">
                                    <p>Won the Business
                                        Gainer Awards</p>
                                </div>
                                <div class=\"ab-image\">
                                    <img src=\"";
        // line 276
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/about/istockphoto-174692658-612x612.jpg\" alt=\"\">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-7\">
                        <div class=\"about__content mb-30\">
                            <div class=\"section-title mb-30\">
                                <div class=\"border-left\">
                                    <p>About Company</p>
                                </div>
                                <h2>We're Leading Digital Business Agency</h2>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form,
                                by injected humour. If you are going to use a passage of Lorem Ipsum, you need to be
                                sure there isn't anything
                                embarrassing hidden in the middle of text.</p>
                            <ul class=\"about-points\">
                                <li>
                                    <div class=\"points-heading\">
                                        <div class=\"p-icon\">
                                            <i class=\"flaticon-team\"></i>
                                        </div>
                                        <h5>One Stop Business</h5>
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum available.</p>
                                </li>
                                <li>
                                    <div class=\"points-heading\">
                                        <div class=\"p-icon\">
                                            <i class=\"flaticon-creative-team\"></i>
                                        </div>
                                        <h5>One Stop Business</h5>
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum available.</p>
                                </li>
                            </ul>
                            <div class=\"about__btn st-1\">
                                <a href=\"about.html\" class=\"grb-btn st-1\">Read More<i
                                        class=\"fas fa-arrow-right\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about area end -->
        <!-- service area start  -->
        <section class=\"service__area grey-bg pt-120 pb-90\">
            <div class=\"container\">
                <div class=\"row wow fadeInUp\">
                    <div class=\"col-lg-6\">
                        <div class=\"section-title mb-55\">
                            <div class=\"border-left\">
                                <p>Our Services</p>
                            </div>
                            <h2>Our Best Services</h2>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"service__text mb-30\">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form,
                                by injected humour. If you are going to use a passage of Lorem Ipsum.</p>
                        </div>
                    </div>
                </div>
                <div class=\"row wow fadeInUp\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single__service text-center mb-30\">
                            <span class=\"service__icon\">
                                <a href=\"service-details.html\"><i class=\"flaticon-idea\"></i></a>
                            </span>
                            <h4><a href=\"service-details.html\">Financial Planning</a></h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form.</p>
                            <a href=\"service-details.html\" class=\"service__btn\">
                                <i class=\"fas fa-plus\"></i>Read More
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single__service text-center mb-30\">
                            <span class=\"service__icon\">
                                <a href=\"service-details.html\"><i class=\"flaticon-consultation\"></i></a>
                            </span>
                            <h4><a href=\"service-details.html\">Business Consultation</a></h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form.</p>
                            <a href=\"service-details.html\" class=\"service__btn\">
                                <i class=\"fas fa-plus\"></i>Read More
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single__service text-center mb-30\">
                            <span class=\"service__icon\">
                                <a href=\"service-details.html\"><i class=\"flaticon-healthcare\"></i></a>
                            </span>
                            <h4><a href=\"service-details.html\">Life & Health Insurance</a></h4>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form.</p>
                            <a href=\"service-details.html\" class=\"service__btn\">
                                <i class=\"fas fa-plus\"></i>Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service area end -->
        <!-- choosing area start  -->
        <section class=\"choosing__area pt-120 pb-90\">
            <div class=\"container\">
                <div class=\"row wow fadeInUp\">
                    <div class=\"col-lg-6\">
                        <div class=\"choosing__img mb-30\">
                            <img src=\"";
        // line 394
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/about/istockphoto-1351087406-612x612.jpg\" alt=\"\">
                            <div class=\"subscribe\">
                                <a href=\"#\"><i class=\"fab fa-youtube\"></i></a>
                                <div class=\"subscribe__text\">
                                    <h4><a href=\"#\">Subscribe Us</a></h4>
                                    <p>234, 857 Subscribed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"section-title mb-55\">
                            <div class=\"border-left\">
                                <p>Why Choose Us</p>
                            </div>
                            <h2>We Execute Our Ideas from Start to Finish</h2>
                        </div>
                        <div class=\"choosing__information mb-30\">
                            <ul>
                                <li>
                                    <div class=\"choosing__number\">
                                        <span>01</span>
                                    </div>
                                    <div class=\"choosing__text\">
                                        <h5>Gathering Information</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusod tempor
                                            idunt ut labore dolore magna aliqua koiern
                                            koiners</p>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"choosing__number\">
                                        <span>02</span>
                                    </div>
                                    <div class=\"choosing__text\">
                                        <h5>Research, Ideas & Sketch</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusod tempor
                                            idunt ut labore dolore magna aliqua koiern
                                            koiners</p>
                                    </div>
                                </li>
                                <li>
                                    <div class=\"choosing__number\">
                                        <span>03</span>
                                    </div>
                                    <div class=\"choosing__text\">
                                        <h5>Ideas, Research & Sketch</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusod tempor
                                            idunt ut labore dolore magna aliqua koiern
                                            koiners</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- choosing area end  -->
        <!-- counter area start  -->
        <section class=\"counter__area pt-110 pb-90\" data-background=\"";
        // line 454
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/bg/istockphoto-1409520341-612x612 (1).jpg\">
            <div class=\"container\">
                <div class=\"row wow fadeInUp align-items-center counter-head\">
                    <div class=\"col-lg-9 col-md-8\">
                        <div class=\"counter-left\">
                            <div class=\"section-title mb-60\">
                                <h2 class=\"white-color \">Do You Have Any Projects in Your Mind?</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-4\">
                        <div class=\"counter-right mb-30\">
                            <a href=\"contact.html\" class=\"grb-border-btn\">
                                Contact Us
                            </a>
                        </div>
                    </div>
                </div>
                <div class=\"counter-inner\">
                    <div class=\"counter-content\">
                        <div class=\"row wow fadeInUp\">
                            <div class=\"col-lg-6\">
                                <div class=\"counter-content-left mb-30\">
                                    <div class=\"section-title mb-40\">
                                        <h2>We Achieved Honor Experiences in Last <span>25+ Years</span></h2>
                                    </div>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority
                                        have suffered alteration in some
                                        passage.</p>
                                    <ul class=\"counter-items\">
                                        <li class=\"single-counter\">
                                            <div class=\"single-counter-icon\">
                                                <i class=\"flaticon-crm\"></i>
                                            </div>
                                            <div class=\"single-counter-text\">
                                                <h3>53K+</h3>
                                                <p>Happy Clients</p>
                                            </div>
                                        </li>
                                        <li class=\"single-counter\">
                                            <div class=\"single-counter-icon\">
                                                <i class=\"flaticon-new-product\"></i>
                                            </div>
                                            <div class=\"single-counter-text\">
                                                <h3>25+</h3>
                                                <p>Digital Products</p>
                                            </div>
                                        </li>
                                        <li class=\"single-counter\">
                                            <div class=\"single-counter-icon\">
                                                <i class=\"flaticon-delivery-box\"></i>
                                            </div>
                                            <div class=\"single-counter-text\">
                                                <h3>25+</h3>
                                                <p>Unique Services</p>
                                            </div>
                                        </li>
                                        <li class=\"single-counter\">
                                            <div class=\"single-counter-icon\">
                                                <i class=\"flaticon-employee\"></i>
                                            </div>
                                            <div class=\"single-counter-text\">
                                                <h3>2.5K+</h3>
                                                <p>Skilled Engineers</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class=\"col-lg-6\">
                                <div class=\"counter-content-right text-end mb-30\">
                                    <div class=\"counter-right-img\">
                                        <div class=\"dot-dot\">
                                            <img src=\"";
        // line 527
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/shape/dot-dot.png\" alt=\"\">
                                        </div>
                                        <img src=\"";
        // line 529
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/bg/istockphoto-1409520341-612x612 (1).jpg\" alt=\"\">
                                        <div class=\"experience-text\">
                                            <p><span>25+</span>Years
                                                Experiences</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter area end -->
        <!-- testimonial area start  -->
\t\t
\t\t 
        ";
        // line 546
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "testimonials", [], "any", false, false, true, 546), "html", null, true);
        yield "
\t\t     <!-- testimonial area end -->
             <!-- portfolio area start -->
        ";
        // line 549
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "project", [], "any", false, false, true, 549), "html", null, true);
        yield "
       
        <!-- portfolio area end -->
        <!-- team area start  -->
          ";
        // line 553
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "team", [], "any", false, false, true, 553)) {
            // line 554
            yield "        ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "team", [], "any", false, false, true, 554), "html", null, true);
            yield "
      ";
        }
        // line 556
        yield "        <!-- team area end  -->
        <!-- blog area start  -->
        <section class=\"blog-area pt-120 pb-90\">
            <div class=\"container\">
                <div class=\"row wow fadeInUp align-items-center counter-head\">
                    <div class=\"col-lg-6 col-md-8\">
                        <div class=\"blog-left\">
                            <div class=\"section-title mb-55\">
                                <div class=\"border-left\">
                                    <p>Blog Posts</p>
                                </div>
                                <h2>Our Recent Blogs</h2>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-4\">
                        <div class=\"blog-right mb-30 f-right\">
                            <a href=\"blog.html\" class=\"grb-btn\">Read More</a>
                        </div>
                    </div>
                </div>
                <div class=\"row wow fadeInUp\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"blog-single mb-30 p-relative\">
                            <div class=\"blog-date\">
                                <div class=\"blog-date-shape\">
                                    <img src=\"";
        // line 582
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/shape/blog-date-shape.png\" alt=\"\">
                                </div>
                                <i class=\"fal fa-calendar-alt\"></i>
                                <span>22</span>
                                <p>Jan 2020</p>
                            </div>
                            <div class=\"blog-img\">
                                <a href=\"blog-details.html\"><img src=\"";
        // line 589
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/blog/blog1.jpg\" alt=\"\"></a>
                            </div>
                            <div class=\"blog-content\">
                                <h4><a href=\"blog-details.html\">There Is a Risk On Investing Money For Finance
                                        Business</a></h4>
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                                    [……]</p>
                                <a href=\"blog-details.html\" class=\"read-btn\">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"blog-single mb-30 p-relative\">
                            <div class=\"blog-date\">
                                <div class=\"blog-date-shape\">
                                    <img src=\"";
        // line 604
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/shape/blog-date-shape.png\" alt=\"\">
                                </div>
                                <i class=\"fal fa-calendar-alt\"></i>
                                <span>16</span>
                                <p>Dec 2020</p>
                            </div>
                            <div class=\"blog-img\">
                                <a href=\"blog-details.html\"><img src=\"";
        // line 611
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/blog/blog2.jpg\" alt=\"\"></a>
                            </div>
                            <div class=\"blog-content\">
                                <h4><a href=\"blog-details.html\">Seven Operational Tips & Tricks For Constriction
                                        Business</a></h4>
                                <p>We adapt our delivery to the way your work, whether as an external provider or by
                                    [……]</p>
                                <a href=\"blog-details.html\" class=\"read-btn\">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"blog-single mb-30 p-relative\">
                            <div class=\"blog-date\">
                                <div class=\"blog-date-shape\">
                                    <img src=\"";
        // line 626
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/shape/blog-date-shape.png\" alt=\"\">
                                </div>
                                <i class=\"fal fa-calendar-alt\"></i>
                                <span>07</span>
                                <p>Nov 2020</p>
                            </div>
                            <div class=\"blog-img\">
                                <a href=\"blog-details.html\"><img src=\"";
        // line 633
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/blog/blog3.jpg\" alt=\"\"></a>
                            </div>
                            <div class=\"blog-content\">
                                <h4><a href=\"blog-details.html\">Forging Relationships Between Multi-national
                                        Corporations</a></h4>
                                <p>Over more than 20 years, we’ve fostered trusted relationships across government [……]
                                </p>
                                <a href=\"blog-details.html\" class=\"read-btn\">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog area end -->
        <!-- newsletter area start  -->
        <div class=\"newsletter-area\">
            <div class=\"container\">
                <div class=\"row wow fadeInUp align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"newsletter-text mb-30\">
                            <h4>Subscribe Us For Newsletter</h4>
                            <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined the Newsletter
                            </p>
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <form class=\"subscribe-form mb-30\">
                            <input type=\"text\" placeholder=\"Enter your email...\">
                            <button type=\"submit\"><i class=\"fas fa-paper-plane\"></i>Subscribe Us</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter area end -->
    </main>
    <!-- footer area start  -->
    <footer>
        <section class=\"footer-area pt-80 pb-40\">
            <div class=\"container\">
                <div class=\"row wow fadeInUp\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"footer-widget mb-40\">
                            <div class=\"question-area\">
                                <div class=\"question-icon\">
                                    <i class=\"flaticon-support\"></i>
                                </div>
                                <div class=\"question-text\">
                                    <p>Have a question? Call us 24/7</p>
                                    <span><a href=\"tel:987547587587\">(987) 547587587</a></span>
                                </div>
                            </div>
                            <div class=\"footer-address\">
                                <h5>Contact Info</h5>
                                <p>Street House, Greater London NW1 8JR, UK</p>
                            </div>
                            <div class=\"grb__social footer-social\">
                                <ul>
                                    <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                    <li><a href=\"#\"><i class=\"fab fa-pinterest-p\"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"footer-widget mb-40 cat-m\">
                            <div class=\"footer-widget-title\">
                                <h4>Categories</h4>
                            </div>
                            <ul class=\"footer-list\">
                                <li><a href=\"#\">Laptops & Computers</a></li>
                                <li><a href=\"#\">Home & Life Style</a></li>
                                <li><a href=\"#\">Men's Fashion</a></li>
                                <li><a href=\"#\">Women's Fashion</a></li>
                                <li><a href=\"#\">Sport & Gyms</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-3 col-md-6\">
                        <div class=\"footer-widget mb-40\">
                            <div class=\"footer-widget-title\">
                                <h4>About Company</h4>
                            </div>
                            <ul class=\"footer-list\">
                                <li><a href=\"about.html\">About Company</a></li>
                                <li><a href=\"contact.html\">Contact Us</a></li>
                                <li><a href=\"#\">Privacy policy</a></li>
                                <li><a href=\"#\">Terms & Conditions</a></li>
                                <li><a href=\"#\">Mission & Vision</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"col-lg-2 col-md-6\">
                        <div class=\"footer-widget mb-40 srv-m\">
                            <div class=\"footer-widget-title\">
                                <h4>Service Schedule</h4>
                            </div>
                            <ul class=\"worktime-list\">
                                <li>
                                    <h5>Saturday - Sunday - Mon</h5>
                                    <span>8:30 AM - 10 PM</span>
                                </li>
                                <li>
                                    <h5>Tuesday - Wed - Thurs</h5>
                                    <span>9:30 AM - 12 PM</span>
                                </li>
                                <li>
                                    <h5>Friday : <span>Closed</span></h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class=\"copyright-area\">
            <div class=\"container\">
                <div class=\"row wow fadeInUp align-items-center\">
                    <div class=\"col-lg-3 d-none d-lg-block\">
                        <div class=\"copyright-logo logo-shape\">
                            <a href=\"index.html\">
                                <img src=\"";
        // line 757
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/img/logo/logo-white.png\" alt=\"\">
                            </a>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"copyright-text\">
                            <p>Copyrighted by <a href=\"#\">@Bdevs</a> | All Right Reserved</p>
                        </div>
                    </div>
                    <div class=\"col-lg-5 col-md-6\">
                        <ul class=\"copyright-list f-right\">
                            <li><a href=\"#\">Terms & Conditions</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"about.html\">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->



    <!-- JS here -->
    <script data-cfasync=\"false\" src=\"/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js\"></script><script src=\"";
        // line 782
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/js/jquery-3.6.0.min.js\"></script>
    <script src=\"";
        // line 783
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/js/bootstrap.bundle.min.js\"></script>
    <script src=\"";
        // line 784
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/js/swiper-bundle.js\"></script>
    <script src=\"";
        // line 785
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/js/isotope.pkgd.min.js\"></script>
    <script src=\"";
        // line 786
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/js/jquery.meanmenu.min.js\"></script>
    <script src=\"";
        // line 787
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/js/ajax-form.js\"></script>
    <script src=\"";
        // line 788
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/js/wow.min.js\"></script>
    <script src=\"";
        // line 789
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/js/jquery.scrollUp.min.js\"></script>
    <script src=\"";
        // line 790
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/js/odometer.min.js\"></script>
    <script src=\"";
        // line 791
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/js/appair.min.js\"></script>
    <script src=\"";
        // line 792
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/js/imagesloaded.pkgd.min.js\"></script>
    <script src=\"";
        // line 793
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/js/jquery.magnific-popup.min.js\"></script>
    <script src=\"";
        // line 794
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/js/plugins.js\"></script>
    <script src=\"";
        // line 795
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["directory"] ?? null), "html", null, true);
        yield "/assets/js/main.js\"></script>
</body>

</html>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["directory", "call_us", "header_mail", "service_hours", "facebook", "twitter", "instagram", "youtube", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/growbiz/templates/layout/page--front.html.twig";
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
        return array (  1058 => 795,  1054 => 794,  1050 => 793,  1046 => 792,  1042 => 791,  1038 => 790,  1034 => 789,  1030 => 788,  1026 => 787,  1022 => 786,  1018 => 785,  1014 => 784,  1010 => 783,  1006 => 782,  978 => 757,  851 => 633,  841 => 626,  823 => 611,  813 => 604,  795 => 589,  785 => 582,  757 => 556,  751 => 554,  749 => 553,  742 => 549,  736 => 546,  716 => 529,  711 => 527,  635 => 454,  572 => 394,  451 => 276,  443 => 271,  435 => 266,  425 => 258,  419 => 256,  417 => 255,  413 => 253,  407 => 251,  405 => 250,  342 => 190,  338 => 189,  330 => 184,  326 => 183,  318 => 178,  314 => 177,  306 => 172,  302 => 171,  294 => 166,  290 => 165,  282 => 160,  278 => 159,  242 => 126,  212 => 99,  206 => 96,  196 => 89,  192 => 88,  187 => 86,  171 => 73,  167 => 72,  163 => 71,  159 => 70,  147 => 61,  135 => 52,  121 => 43,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  57 => 12,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/growbiz/templates/layout/page--front.html.twig", "C:\\xampp\\htdocs\\drupal_theme_development\\web\\themes\\custom\\growbiz\\templates\\layout\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 250);
        static $filters = array("escape" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
