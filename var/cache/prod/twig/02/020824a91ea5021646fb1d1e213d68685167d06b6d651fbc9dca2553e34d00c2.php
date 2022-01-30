<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_8d73f4189295396b9936b38dac0111ee870fd139a438d32ab641109c4342c44a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 47
        $this->displayBlock('submit_row', $context, $blocks);
        // line 56
        $this->displayBlock('reset_row', $context, $blocks);
        // line 65
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 69
        $this->displayBlock('checkbox_row', $context, $blocks);
    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        // line 6
        if ((($context["label"] ?? null) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? null))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        // line 18
        echo "col-sm-2";
    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        // line 24
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? null))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            // line 31
            echo "</div>";
            // line 32
            echo "</div>";
        }
    }

    // line 36
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        // line 37
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 38
        if ((( !($context["compound"] ?? null) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 40
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 42
        echo "</div>
        </div>";
        // line 44
        echo "</fieldset>";
    }

    // line 47
    public function block_submit_row($context, array $blocks = array())
    {
        // line 48
        echo "<div class=\"form-group row\">";
        // line 49
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 50
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 52
        echo "</div>";
        // line 53
        echo "</div>";
    }

    // line 56
    public function block_reset_row($context, array $blocks = array())
    {
        // line 57
        echo "<div class=\"form-group row\">";
        // line 58
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 61
        echo "</div>";
        // line 62
        echo "</div>";
    }

    // line 65
    public function block_form_group_class($context, array $blocks = array())
    {
        // line 66
        echo "col-sm-10";
    }

    // line 69
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 70
        echo "<div class=\"form-group row\">";
        // line 71
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 72
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 75
        echo "</div>";
        // line 76
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  209 => 76,  207 => 75,  205 => 74,  203 => 73,  199 => 72,  195 => 71,  193 => 70,  190 => 69,  186 => 66,  183 => 65,  179 => 62,  177 => 61,  175 => 60,  171 => 59,  167 => 58,  165 => 57,  162 => 56,  158 => 53,  156 => 52,  154 => 51,  150 => 50,  146 => 49,  144 => 48,  141 => 47,  137 => 44,  134 => 42,  132 => 41,  128 => 40,  126 => 39,  121 => 38,  118 => 37,  115 => 36,  110 => 32,  108 => 31,  106 => 30,  102 => 29,  100 => 28,  94 => 27,  91 => 25,  89 => 24,  86 => 23,  82 => 18,  79 => 17,  74 => 13,  72 => 12,  69 => 10,  67 => 9,  62 => 7,  60 => 6,  57 => 5,  53 => 69,  51 => 65,  49 => 56,  47 => 47,  45 => 36,  43 => 23,  41 => 17,  39 => 5,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_4_horizontal_layout.html.twig", "C:\\wamp64\\www\\barimage.bmp\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_4_horizontal_layout.html.twig");
    }
}
