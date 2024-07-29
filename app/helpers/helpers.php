<?php

if (!function_exists('format_job_description')) {
    function format_job_description($description)
    {
        // Custom logic to format job description
        return nl2br(e($description));
    }
}