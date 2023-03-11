<?php

class Purify {

    /*Sanitises html text from user input fields. */

    public static function cleanup_html_text($str = "") {
        if ( ! is_string($str) || strlen($str) < 1) {
            return "";
        }

        // Strip tags but allow <p>, <br />, <a>, <strong>, <em>.
        $str = strip_tags($str, '<p><br /><a><b><strong><em><i><ul><ol><li>');

        // Clean out ''s that strip_text uses around href's
        $str = str_replace( '', '', $str );

        // Strip out all paragraphs with attributes
        $str = preg_replace("/<p[^>]*>/", '<p>', $str);

        return $str;
    }
}
