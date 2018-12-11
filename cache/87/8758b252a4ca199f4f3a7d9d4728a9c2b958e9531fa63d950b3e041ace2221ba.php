<?php

/* layout.html */
class __TwigTemplate_5d0d0ea65559fb7fcf63fc845dfd65b6b8dec70b54056ebe6a2af5024a1df36d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
\t<body>
\t<header>header</header>
\t<content>
\t";
        // line 5
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "\t</content>
\t<footer>footer</footer>
\t</body>
</html>";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t
\t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  42 => 6,  39 => 5,  32 => 8,  30 => 5,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
\t<body>
\t<header>header</header>
\t<content>
\t{% block content %}
\t
\t{% endblock %}
\t</content>
\t<footer>footer</footer>
\t</body>
</html>", "layout.html", "/Applications/XAMPP/xamppfiles/htdocs/kuangjia/app/view/index/layout.html");
    }
}
