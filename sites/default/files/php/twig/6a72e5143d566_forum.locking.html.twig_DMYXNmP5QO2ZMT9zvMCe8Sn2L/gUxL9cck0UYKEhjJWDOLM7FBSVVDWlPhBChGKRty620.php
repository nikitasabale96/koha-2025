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

/* @help_topics/forum.locking.html.twig */
class __TwigTemplate_0b47572d7eac60ac1177ca2f4b322d0c extends Template
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
        $context["index_link_text"] = ('' === $tmp = implode('', iterator_to_array((function () use (&$context, $macros, $blocks) {
            yield t("Forums", []);
            yield from [];
        })(), false))) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 7
        $context["index_link"] = $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\help\HelpTwigExtension']->getRouteLink(($context["index_link_text"] ?? null), "forum.index"));
        // line 8
        yield "<h2>";
        yield t("Goal", []);
        yield "</h2>
<p>";
        // line 9
        yield t("Lock a topic to prevent users from making any more comments.", []);
        yield "</p>
<h2>";
        // line 10
        yield t("Steps", []);
        yield "</h2>
<ol>
  <li>";
        // line 12
        yield t("Starting from @index_link (path: <em>/forums</em>), navigate to the forum that currently contains the topic.", ["@index_link" => $this->env->getExtension(\Drupal\Core\Template\TwigExtension::class)->renderVar(($context["index_link"] ?? null)), ]);
        yield "</li>
  <li>";
        // line 13
        yield t("Locate the topic within the forum, and click on the title to view the topic.", []);
        yield "</li>
  <li>";
        // line 14
        yield t("Click <em>Edit</em>.", []);
        yield "</li>
  <li>";
        // line 15
        yield t("Under <em>Comment settings</em>, check <em>Closed</em>.", []);
        yield "</li>
  <li>";
        // line 16
        yield t("Click <em>Save</em>.", []);
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/forum.locking.html.twig";
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
        return array (  81 => 16,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  60 => 10,  56 => 9,  51 => 8,  49 => 7,  44 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/forum.locking.html.twig", "/var/www/html/Koha-2025/modules/forum/help_topics/forum.locking.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 6, "trans" => 6];
        static $filters = ["escape" => 12];
        static $functions = ["render_var" => 7, "help_route_link" => 7];
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
