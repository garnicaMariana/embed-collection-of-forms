<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_f553671b27aff5d0d0bf4149b02f5eb9aef4ceb4d8f14416a7eaf6994dcf3722 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 28
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 35
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 59
        $this->displayBlock('date_widget', $context, $blocks);
        // line 84
        $this->displayBlock('time_widget', $context, $blocks);
        // line 102
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 140
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 145
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 167
        $this->displayBlock('choice_label', $context, $blocks);
        // line 173
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 177
        $this->displayBlock('radio_label', $context, $blocks);
        // line 183
        $this->displayBlock('button_row', $context, $blocks);
        // line 189
        $this->displayBlock('choice_row', $context, $blocks);
        // line 194
        $this->displayBlock('date_row', $context, $blocks);
        // line 199
        $this->displayBlock('time_row', $context, $blocks);
        // line 204
        $this->displayBlock('datetime_row', $context, $blocks);
    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 6
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        // line 11
        $context["prepend"] =  !(is_string($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["money_pattern"] ?? null)) && is_string($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = "{{") && ('' === $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a || 0 === strpos($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5, $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a)));
        // line 12
        $context["append"] =  !(is_string($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["money_pattern"] ?? null)) && is_string($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = "}}") && ('' === $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 === substr($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57, -strlen($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9))));
        // line 13
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 14
            echo "        <div class=\"input-group";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter(($context["group_class"] ?? null), "")) : ("")), "html", null, true);
            echo "\">";
            // line 15
            if (($context["prepend"] ?? null)) {
                // line 16
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>";
            }
            // line 18
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 19
            if (($context["append"] ?? null)) {
                // line 20
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>";
            }
            // line 22
            echo "        </div>";
        } else {
            // line 24
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 36
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 37
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 40
            echo "<div";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'errors');
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'errors');
            // line 44
            echo "<div class=\"sr-only\">";
            // line 45
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "date", array(), "any", false, true), "year", array(), "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "date", array()), "year", array()), 'label');
            }
            // line 46
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "date", array(), "any", false, true), "month", array(), "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "date", array()), "month", array()), 'label');
            }
            // line 47
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "date", array(), "any", false, true), "day", array(), "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "date", array()), "day", array()), 'label');
            }
            // line 48
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "time", array(), "any", false, true), "hour", array(), "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "time", array()), "hour", array()), 'label');
            }
            // line 49
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "time", array(), "any", false, true), "minute", array(), "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "time", array()), "minute", array()), 'label');
            }
            // line 50
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "time", array(), "any", false, true), "second", array(), "any", true, true)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? null), "time", array()), "second", array()), 'label');
            }
            // line 51
            echo "</div>";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "date", array()), 'widget', array("datetime" => true));
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "time", array()), 'widget', array("datetime" => true));
            // line 55
            echo "</div>";
        }
    }

    // line 59
    public function block_date_widget($context, array $blocks = array())
    {
        // line 60
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 61
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 63
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 64
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 65
                echo "<div";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 67
            echo "            <div class=\"sr-only\">";
            // line 68
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", array()), 'label');
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'label');
            // line 70
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", array()), 'label');
            echo "
            </div>";
            // line 73
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" =>             // line 74
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "year", array()), 'widget'), "{{ month }}" =>             // line 75
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "month", array()), 'widget'), "{{ day }}" =>             // line 76
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "day", array()), 'widget')));
            // line 78
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? null))) {
                // line 79
                echo "</div>";
            }
        }
    }

    // line 84
    public function block_time_widget($context, array $blocks = array())
    {
        // line 85
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 86
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 88
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 89
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 90
                echo "<div";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 92
            echo "<div class=\"sr-only\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", array()), 'label');
            echo "</div>";
            // line 93
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hour", array()), 'widget');
            // line 94
            if (($context["with_minutes"] ?? null)) {
                echo ":<div class=\"sr-only\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", array()), 'label');
                echo "</div>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minute", array()), 'widget');
            }
            // line 95
            if (($context["with_seconds"] ?? null)) {
                echo ":<div class=\"sr-only\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", array()), 'label');
                echo "</div>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "second", array()), 'widget');
            }
            // line 96
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? null)))) {
                // line 97
                echo "</div>";
            }
        }
    }

    // line 102
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        // line 103
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 104
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 106
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 107
            echo "<div";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            // line 109
            echo "<div class=\"table-responsive\">
                <table class=\"table";
            // line 110
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? null), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\" role=\"presentation\">
                    <thead>
                    <tr>";
            // line 113
            if (($context["with_years"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "years", array()), 'label');
                echo "</th>";
            }
            // line 114
            if (($context["with_months"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "months", array()), 'label');
                echo "</th>";
            }
            // line 115
            if (($context["with_weeks"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 116
            if (($context["with_days"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "days", array()), 'label');
                echo "</th>";
            }
            // line 117
            if (($context["with_hours"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hours", array()), 'label');
                echo "</th>";
            }
            // line 118
            if (($context["with_minutes"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 119
            if (($context["with_seconds"] ?? null)) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 120
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 124
            if (($context["with_years"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "years", array()), 'widget');
                echo "</td>";
            }
            // line 125
            if (($context["with_months"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "months", array()), 'widget');
                echo "</td>";
            }
            // line 126
            if (($context["with_weeks"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 127
            if (($context["with_days"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "days", array()), 'widget');
                echo "</td>";
            }
            // line 128
            if (($context["with_hours"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 129
            if (($context["with_minutes"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 130
            if (($context["with_seconds"] ?? null)) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 131
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 135
            if (($context["with_invert"] ?? null)) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "invert", array()), 'widget');
            }
            // line 136
            echo "</div>";
        }
    }

    // line 140
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 141
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 142
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
    }

    // line 145
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 146
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 148
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 149
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 150
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 154
            echo "<div";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 156
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 157
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 158
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "</div>";
        }
    }

    // line 167
    public function block_choice_label($context, array $blocks = array())
    {
        // line 169
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "", "checkbox-custom" => "", "radio-custom" => "")))));
        // line 170
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 173
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 174
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 177
    public function block_radio_label($context, array $blocks = array())
    {
        // line 178
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 183
    public function block_button_row($context, array $blocks = array())
    {
        // line 184
        echo "<div class=\"form-group\">";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 186
        echo "</div>";
    }

    // line 189
    public function block_choice_row($context, array $blocks = array())
    {
        // line 190
        $context["force_error"] = true;
        // line 191
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 194
    public function block_date_row($context, array $blocks = array())
    {
        // line 195
        $context["force_error"] = true;
        // line 196
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 199
    public function block_time_row($context, array $blocks = array())
    {
        // line 200
        $context["force_error"] = true;
        // line 201
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 204
    public function block_datetime_row($context, array $blocks = array())
    {
        // line 205
        $context["force_error"] = true;
        // line 206
        $this->displayBlock("form_row", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  523 => 206,  521 => 205,  518 => 204,  514 => 201,  512 => 200,  509 => 199,  505 => 196,  503 => 195,  500 => 194,  496 => 191,  494 => 190,  491 => 189,  487 => 186,  485 => 185,  483 => 184,  480 => 183,  476 => 178,  473 => 177,  469 => 174,  466 => 173,  462 => 170,  460 => 169,  457 => 167,  452 => 161,  446 => 158,  445 => 157,  444 => 156,  440 => 155,  436 => 154,  429 => 150,  428 => 149,  427 => 148,  423 => 147,  421 => 146,  418 => 145,  414 => 142,  412 => 141,  409 => 140,  404 => 136,  400 => 135,  395 => 131,  389 => 130,  383 => 129,  377 => 128,  371 => 127,  365 => 126,  359 => 125,  353 => 124,  348 => 120,  342 => 119,  336 => 118,  330 => 117,  324 => 116,  318 => 115,  312 => 114,  306 => 113,  301 => 110,  298 => 109,  296 => 108,  292 => 107,  290 => 106,  287 => 104,  285 => 103,  282 => 102,  276 => 97,  274 => 96,  267 => 95,  260 => 94,  258 => 93,  254 => 92,  249 => 90,  247 => 89,  245 => 88,  242 => 86,  240 => 85,  237 => 84,  231 => 79,  229 => 78,  227 => 76,  226 => 75,  225 => 74,  224 => 73,  220 => 70,  218 => 69,  216 => 68,  214 => 67,  209 => 65,  207 => 64,  205 => 63,  202 => 61,  200 => 60,  197 => 59,  192 => 55,  190 => 54,  188 => 53,  186 => 51,  182 => 50,  178 => 49,  174 => 48,  170 => 47,  166 => 46,  162 => 45,  160 => 44,  158 => 42,  156 => 41,  152 => 40,  150 => 39,  147 => 37,  145 => 36,  142 => 35,  137 => 31,  135 => 30,  133 => 29,  130 => 28,  125 => 24,  122 => 22,  117 => 20,  115 => 19,  113 => 18,  108 => 16,  106 => 15,  102 => 14,  100 => 13,  98 => 12,  96 => 11,  93 => 10,  89 => 7,  87 => 6,  84 => 5,  80 => 204,  78 => 199,  76 => 194,  74 => 189,  72 => 183,  70 => 177,  68 => 173,  66 => 167,  64 => 145,  62 => 140,  60 => 102,  58 => 84,  56 => 59,  54 => 35,  52 => 28,  50 => 10,  48 => 5,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "bootstrap_base_layout.html.twig", "C:\\wamp64\\www\\barimage.bmp\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_base_layout.html.twig");
    }
}
