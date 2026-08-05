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
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @help_topics/forum.configuring.html.twig */
class __TwigTemplate_8fedb26d78cb908078e8a028fd09eeea extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        $context["forum_concept_topic"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getTopicLink("forum.concept"));
        // line 7
        $context["settings_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Settings", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        $context["settings_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["settings_link_text"] ?? null), "forum.settings"));
        // line 9
        $context["overview_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Forums", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["overview_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["overview_link_text"] ?? null), "forum.overview"));
        // line 11
        $context["index_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Forums", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        $context["index_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["index_link_text"] ?? null), "forum.index"));
        // line 13
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 14
        yield t("Configure settings for forums, and set up forum structure.", []);
        yield "</p>
<h2>";
        // line 15
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 17
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>Forums</em> &gt; <em>@settings_link</em>.", ["@settings_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["settings_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 18
        yield t("Choose the desired settings for <em>Hot topic threshold</em>, <em>Topics per page</em>, and <em>Default order</em>. Click <em>Save configuration</em> if you have made any changes.", []);
        yield "</li>
  <li>";
        // line 19
        yield t("In the <em>Manage</em> administrative menu, navigate to <em>Structure</em> &gt; <em>@overview_link</em>.", ["@overview_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["overview_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 20
        yield t("Decide on the hierarchy of containers and forums you want for your site; see @forum_concept_topic for an overview of forum hierarchy.", ["@forum_concept_topic" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["forum_concept_topic"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 21
        yield t("Create the containers that you want in your forum hierarchy, starting at the top level, if any. To create a container, click <em>Add container</em>, enter the container name and optionally other settings, and click <em>Save</em>.", []);
        yield "</li>
  <li>";
        // line 22
        yield t("Create the forums that you want in your forum hierarchy, starting at the top level. To create a forum, click <em>Add forum</em> and enter the forum name. If your hierarchy has this forum inside a container or another forum, select the parent forum/container in the <em>Parent</em> field. Review and/or edit the other settings, and click <em>Save</em>.", []);
        yield "</li>
  <li>";
        // line 23
        yield t("Optionally, delete the provided <em>General discussion</em> forum, if you do not want this forum to be available on your site.", []);
        yield "</li>
  <li>";
        // line 24
        yield t("Review and/or edit the permissions related to forums. The administrative permission for editing the forum settings is in the <em>Forum</em> module section of the permissions page, and administrative permissions for editing the forum hierarchy are in the <em>Taxonomy</em> module section. The user permissions for creating forum topics are in the <em>Node</em> module section, and for commenting on topics are in the <em>Comment</em> module section.", []);
        yield "</li>
  <li>";
        // line 25
        yield t("Add links to the main <em>@index_link</em> page (path: <em>/forum</em>), and optionally to individual forum pages, to navigation menus on your site, so that users can find the forums.", ["@index_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["index_link"] ?? null)), ]);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/forum.configuring.html.twig";
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
        return array (  113 => 25,  109 => 24,  105 => 23,  101 => 22,  97 => 21,  93 => 20,  89 => 19,  85 => 18,  81 => 17,  76 => 15,  72 => 14,  67 => 13,  65 => 12,  60 => 11,  58 => 10,  53 => 9,  51 => 8,  46 => 7,  44 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/forum.configuring.html.twig", "/var/www/html/Koha-2025/modules/forum/help_topics/forum.configuring.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 6, "trans" => 7];
        static $filters = ["escape" => 17];
        static $functions = ["render_var" => 6, "help_topic_link" => 6, "help_route_link" => 8];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "trans"],
                [0 => "escape"],
                [0 => "render_var", 1 => "help_topic_link", 2 => "help_route_link"],
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
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
