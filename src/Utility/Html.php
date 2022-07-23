<?php

namespace Bytic\MailTemplates\Utility;

class Html
{
    public static function buildCssStyles($styles)
    {
        if (is_string($styles)) {
            return $styles;
        }
        $css = '';
        if (is_array($styles)) {
            foreach ($styles as $property => $value) {
                    $css .=  "$property: $value;\n";
            }
        }
        return $css;
    }
}