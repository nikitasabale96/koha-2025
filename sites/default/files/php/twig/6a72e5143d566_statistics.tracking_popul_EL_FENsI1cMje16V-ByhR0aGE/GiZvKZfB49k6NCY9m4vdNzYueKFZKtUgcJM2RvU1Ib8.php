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

/* @help_topics/statistics.tracking_popular_content.html.twig */
class __TwigTemplate_8ff306e703aae1018704ef706ca79aa6 extends Template
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
        // line 8
        $context["statistics_settings_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Statistics", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 9
        $context["permissions_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Permissions", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        $context["statistics_settings_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["statistics_settings_link_text"] ?? null), "statistics.settings"));
        // line 11
        $context["permissions_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["permissions_link_text"] ?? null), "user.admin_permissions"));
        // line 12
        $context["block_layout_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Block layout", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        $context["block_layout_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["block_layout_link_text"] ?? null), "block.admin_display"));
        // line 14
        yield "
<h2>";
        // line 15
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 16
        yield t("Enable content viewing statistics and view the popular content block.", []);
        yield "</p>

<h2>";
        // line 18
        yield t("What are content viewing statistics?", []);
        yield "</h2>
<p>";
        // line 19
        yield t("The Statistics module can count how many times each piece of content on your site is viewed.
    It also provides a <em>Popular
      content</em> block that you can enable to display the most-viewed content.", []);
        // line 21
        yield "</p>

<h2>";
        // line 23
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 25
        yield t("Enable counting", []);
        // line 26
        yield "    <ul>
      <li>";
        // line 27
        yield t("In the <em>Manage</em> administrative menu, navigate to
          <em>Configuration</em> &gt;
          <em>System</em> &gt;
          <em>@statistics_settings_link</em>.", ["@statistics_settings_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(        // line 30
($context["statistics_settings_link"] ?? null)), ]);
        yield "</li>
      <li>";
        // line 31
        yield t("Check <em>Count content views</em> and click <em>Save configuration</em>.", []);
        yield "</li>
    </ul>
  </li>

  <li>";
        // line 35
        yield t("Allow display of counts to users", []);
        // line 36
        yield "    <ul>
      <li>
        ";
        // line 38
        yield t("In the <em>Manage</em> administrative menu, navigate to
          <em>People</em> &gt;
          <em>@permissions_link</em>.", ["@permissions_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(        // line 40
($context["permissions_link"] ?? null)), ]);
        // line 41
        yield "</li>
      <li>";
        // line 42
        yield t("Check <em>View content hits</em>
          under the Statistics menu for the desired roles,
          and click <em>Save permissions</em>.", []);
        // line 44
        yield "</li>
      <li>";
        // line 45
        yield t("The Popular Content block will not be available if this is not checked.", []);
        yield "</li>
    </ul>
  </li>

  <li>";
        // line 49
        yield t("Enable the block", []);
        // line 50
        yield "    <ul>
      <li>";
        // line 51
        yield t("In the <em>Manage</em> administrative menu, navigate to
          <em>Structure</em> &gt;
          <em>@block_layout_link</em>.", ["@block_layout_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(        // line 53
($context["block_layout_link"] ?? null)), ]);
        // line 54
        yield "</li>
      <li>";
        // line 55
        yield t("Click <em>Place block</em>
          in the region where you want the block to appear (for example, <em>Sidebar second</em>).", []);
        // line 56
        yield "</li>
      <li>";
        // line 57
        yield t("In the pop-up window, click <em>Place block</em> in the row of <em>Popular
          content</em>.", []);
        // line 58
        yield "</li>
      <li>";
        // line 59
        yield t("In the <em>Configure block</em> pop-up, click <em>Save block</em>.", []);
        yield "</li>
      <li>";
        // line 60
        yield t("Verify that the block is now listed in the correct region. When you visit the site, you should see the block, with a list of the content pages that are most popular.", []);
        yield "</li>
    </ul>
  </li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/statistics.tracking_popular_content.html.twig";
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
        return array (  171 => 60,  167 => 59,  164 => 58,  161 => 57,  158 => 56,  155 => 55,  152 => 54,  150 => 53,  147 => 51,  144 => 50,  142 => 49,  135 => 45,  132 => 44,  128 => 42,  125 => 41,  123 => 40,  120 => 38,  116 => 36,  114 => 35,  107 => 31,  103 => 30,  99 => 27,  96 => 26,  94 => 25,  89 => 23,  85 => 21,  81 => 19,  77 => 18,  72 => 16,  68 => 15,  65 => 14,  63 => 13,  58 => 12,  56 => 11,  54 => 10,  49 => 9,  44 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/statistics.tracking_popular_content.html.twig", "/var/www/html/Koha-2025/modules/statistics/help_topics/statistics.tracking_popular_content.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 8, "trans" => 8];
        static $filters = ["escape" => 30];
        static $functions = ["render_var" => 10, "help_route_link" => 10];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "trans"],
                [0 => "escape"],
                [0 => "render_var", 1 => "help_route_link"],
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
