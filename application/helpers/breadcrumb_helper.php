<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

function generate_breadcrumb()
{
    $CI =& get_instance();
    $CI->load->helper('url');

    $uri = $CI->uri->segment_array();
    $breadcrumb = '<nav class="mt-4 rounded" aria-label="breadcrumb"><ol class="breadcrumb px-3 py-2 rounded mb-0">';

    $breadcrumb .= '<li class="breadcrumb-item"><a href="' . base_url() . '">Dashboard</a></li>';

    $path = '';
    foreach ($uri as $key => $segment) {
        $path .= $segment . '/';
        if ($key == count($uri)) {
            $breadcrumb .= '<li class="breadcrumb-item active" aria-current="page">' . ucfirst($segment) . '</li>';
        } else {
            $breadcrumb .= '<li class="breadcrumb-item"><a href="' . site_url($path) . '">' . ucfirst($segment) . '</a></li>';
        }
    }

    $breadcrumb .= '</ol></nav>';

    return $breadcrumb;
}