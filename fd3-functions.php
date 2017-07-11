<?php

/*
each function name must start with aq2emm_
 */

remove_action('shutdown', 'wp_ob_end_flush_all', 1);

$aq2emm_debug = 0;
$aq2emm_use_timer = 0;
$aq2emm_log_started = 0;
$aq2emm_timer_obj = null;

if (!class_exists('AQ2EMM_WPDebugLogger')) {

    class AQ2EMM_WPDebugLogger
    {
        static $fd;
        static $logs;
        static $buffer;

        public static function start($logFile = 'fd3_dynamic_pages.log')
        {
            self::$logs = array();
            // echo "creating log file: " . $logFile;
            // exit;
            self::$fd = fopen($logFile, "a+");
        }

        public static function log($str, $level = 'INFO')
        {
            if (is_array($str)) {
                static::$logs[] = "\n" . "[" . $level . "]" . "[" . $_SERVER['REMOTE_ADDR'] . "]" . "[" . date("Y/m/d h:i:s", time()) . "] " . print_r($str, true);
            } else {
                static::$logs[] = "\n" . "[" . $level . "]" . "[" . $_SERVER['REMOTE_ADDR'] . "]" . "[" . date("Y/m/d h:i:s", time()) . "] " . $str;
            }

        }

        public static function end()
        {
            // write string
            static::$buffer = '';

            $s_cwd = getcwd();

            $s_cwd = '----------------- ' . $s_cwd . ' -----------------';

            foreach (self::$logs as $log) {
                static::$buffer = static::$buffer . $log;
            }

            fwrite(self::$fd, $s_cwd . "\n");
            fwrite(self::$fd, self::$buffer . "\n");

            // close file
            fclose(self::$fd);
        }
    }
}

if (!class_exists('AQ2EMM_WPDebugTimer')) {
    class AQ2EMM_WPDebugTimer
    {
        public $startTime;
        public $endTime;
        public $timeLapsed;
        public $finalTime;

        public function start()
        {
            $this->startTime = microtime(true);
        }

        public function end()
        {
            $this->endTime = microtime(true);
            $this->timeLapsed = $this->endTime - $this->startTime;

            $hours = (int) ($this->timeLapsed / 60 / 60);
            $minutes = (int) ($this->timeLapsed / 60) - $hours * 60;
            $seconds = (int) $this->timeLapsed - $hours * 60 * 60 - $minutes * 60;

            $this->finalTime = $hours . ':' . $minutes . ':' . $seconds;

            return '<!-- ' . $this->getTime() . ' -->';
        }

        public function getTime()
        {
            return "Load time: " . $this->finalTime;
            //return "Load time: ".number_format(self::$timeLapsed, 4);
        }

    }
}

if (!function_exists('aq2emm_start_timer')) {

    function aq2emm_start_timer()
    {

        global $aq2emm_debug;
        global $aq2emm_use_timer;
        global $aq2emm_timer_obj;

        if ($aq2emm_debug == 0) {
            return;
        }

        if (class_exists('AQ2EMM_WPDebugTimer')) {

            $aq2emm_use_timer = 1;
            $aq2emm_timer_obj = new AQ2EMM_WPDebugTimer();
            $aq2emm_timer_obj->start();

        }
    }

}

if (!function_exists('aq2emm_convertkit_log')) {

    function aq2emm_convertkit_log($msgs, $logFile = 'fd3_convertkit_automation.log')
    {

            $logFile = '..\logs\fd3_convertkit_automation.log';
            AQ2EMM_WPDebugLogger::start( $logFile );

            if( is_array( $msgs ) ) {
                foreach ($msgs as $s) {
                    AQ2EMM_WPDebugLogger::log( $s );
                }
            }
            else {
                AQ2EMM_WPDebugLogger::log( $msgs );
            }
            AQ2EMM_WPDebugLogger::end();

    }

}


if (!function_exists('aq2emm_new_log')) {

    function aq2emm_new_log($logFile = 'fd3_dynamic_pages.log')
    {

        global $aq2emm_debug;
        global $aq2emm_log_started;

        // echo $aq2emm_debug; exit;

        if ($aq2emm_debug == 0) {
            return;
        }

        if ($aq2emm_log_started == 0) {
            $aq2emm_log_started = 1;
            AQ2EMM_WPDebugLogger::start($logFile);
            AQ2EMM_WPDebugLogger::log("Log Started");
        }

    }

}

if (!function_exists('aq2emm_log')) {

    function aq2emm_log($msg, $level = 'INFO')
    {

        global $aq2emm_debug;
        global $aq2emm_log_started;

        if ($aq2emm_debug == 0) {
            return;
        }

        if ($aq2emm_log_started == 0) {
            $aq2emm_log_started = 1;
            aq2emmNewLog();
        }

        AQ2EMM_WPDebugLogger::log($msg, $level);
    }

}

if (!function_exists('aq2emm_json_log2screen')) {

    function aq2emm_json_log2screen( $obj )
    {
    	header("Content-type: application/json");
        $s = json_encode( $obj, true );
        echo $s;
        exit;
    }

}

if (!function_exists('aq2emm_end_log')) {

    function aq2emm_end_log()
    {

        global $aq2emm_debug;
        global $aq2emm_log_started;

        if ($aq2emm_debug == 0) {
            return;
        }

        if ($aq2emm_log_started == 1) {
            AQ2EMM_WPDebugLogger::log("Log Ended");
            AQ2EMM_WPDebugLogger::end();
            $aq2emm_log_started = 0;
        }

    }

}

if (!function_exists('aq2emm_end_timer')) {

    function aq2emm_end_timer()
    {

        global $aq2emm_debug;
        global $aq2emm_use_timer;
        global $aq2emm_timer_obj;

        if ($aq2emm_debug == 0) {
            return;
        }

        if (class_exists('AQ2EMM_WPDebugTimer')) {
            if ($aq2emm_use_timer == 1) {
                aq2emm_log($aq2emm_timer_obj->end());
                $aq2emm_use_timer = 0;
            }
        }
    }

}

if (!function_exists('dynamic_pages_head')) {

    function dynamic_pages_head()
    {
        aq2emm_load_header_scripts();
    }

}

if (!function_exists('dynamic_pages_footer')) {

    function dynamic_pages_footer()
    {

        aq2emm_load_page_styles();
        aq2emm_load_page_scripts();

    }

}

if (!function_exists('aq2emm_load_page_styles')) {

    function aq2emm_load_page_styles()
    {

        $page = aq2emm_get_page();

        $styles = '';

        switch ($page) {
            case 'home':

                echo aq2emm_load_styles(
                    [
                        ["style" => 'aq2e-marketing-microsite-concat.min', "version" => "1.0.0"],
                    ]
                );

                break;

            case 'process':

                echo aq2emm_load_styles(
                    [
                        ["style" => 'aq2e-marketing-microsite-concat.min', "version" => "1.0.0"],
                    ]
                );

                break;

            case 'life':

                echo aq2emm_load_styles(
                    [
                        ["style" => 'aq2e-marketing-microsite-concat.min', "version" => "1.0.0"],
                    ]
                );

                break;

            case 'calculator':

                echo aq2emm_load_styles(
                    [
                        ["style" => 'aq2e-marketing-microsite', "version" => "1.0.0"],
                    ]
                );

                break;

            case 'glossary':

                echo aq2emm_load_styles(
                    [
                        ["style" => 'aq2e-marketing-microsite-concat.min', "version" => "1.0.0"],
                    ]
                );

                break;

            case 'about':

                echo aq2emm_load_styles(
                    [
                        ["style" => 'aq2e-marketing-microsite-concat.min', "version" => "1.0.0"],
                    ]
                );

                break;

        }

        echo $styles;
    }

}

if (!function_exists('aq2emm_load_styles')) {

    function aq2emm_load_styles($styles, $echo = false)
    {
        $output = '';

        foreach ($styles as $style) {

            $load = $style["style"];

            if (isset($style["ver"])) {
                $output .= aq2emm_load_style($load, $style["ver"]);
            } else {
                $output .= aq2emm_load_style($load);
            }
        }

        if ($echo) {
            echo $output;
        }

        return $output;
    }
}

if (!function_exists('aq2emm_load_style')) {

    function aq2emm_load_style($style, $ver = '')
    {
        $load = $style . '.' . 'css';
        $load = (strlen($ver) > 0) ? $load . '?ver=' . $ver : $load;
        return sprintf('<link rel="stylesheet" href="%s">', aq2emm_get_template_directory_uri() . '/css/' . $load);
    }

}

if (!function_exists('aq2emm_load_compressed_style')) {

    function aq2emm_load_compressed_style($style, $ver = '')
    {
        $load = $style . '.' . 'css.gz';
        $load = (strlen($ver) > 0) ? $load . '?ver=' . $ver : $load;
        return sprintf('<link rel="stylesheet" href="%s">', aq2emm_get_template_directory_uri() . '/css/' . $load);
    }

}

if (!function_exists('aq2emm_load_scripts')) {

    function aq2emm_load_scripts($scripts, $echo = false)
    {
        $output = '';

        foreach ($scripts as $script) {

            $load = $script["script"];

            if (isset($script["ver"])) {
                $output .= aq2emm_load_script($load, $script["ver"]);
            } else {
                $output .= aq2emm_load_script($load);
            }
        }

        if ($echo) {
            echo $output;
        }

        return $output;
    }
}

if (!function_exists('aq2emm_load_script')) {

    function aq2emm_load_script($script, $ver = '')
    {
        $load = $script . '.' . 'js';
        $load = (strlen($ver) > 0) ? $load . '?ver=' . $ver : $load;
        return sprintf('<script src="%s"></script>', aq2emm_get_template_directory_uri() . '/js/' . $load);
    }

}

if (!function_exists('aq2emm_load_compressed_script')) {

    function aq2emm_load_compressed_script($script, $ver = '')
    {
        $load = $script . '.' . 'js.gz';
        $load = (strlen($ver) > 0) ? $load . '?ver=' . $ver : $load;
        return sprintf('<script src="%s"></script>', aq2emm_get_template_directory_uri() . '/js/' . $load);
    }

}

if (!function_exists('dynamic_load_page_css')) {

    function dynamic_load_page_css()
    {

        $page = aq2emm_get_page();

        switch ($page) {

            case 'home':

                echo get_dynamic_pages_template_part(aq2emm_selected_theme() . 'partials/page-home-override', 'css');
                break;
        }

    }

}

if (!function_exists('aq2emm_load_page_scripts')) {
    function aq2emm_load_page_scripts()
    {

        $page = aq2emm_get_page();

        switch ($page) {
            case 'home':

/*                echo aq2emm_load_scripts(
[
[ "script" => 'jquery' , "version" => "1.0.0" ] ,
[ "script" => 'bootstrap.min' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.cookie' , "version" => "1.0.0" ] ,
[ "script" => 'superfish' , "version" => "1.0.0" ] ,
[ "script" => 'device.min' , "version" => "1.0.0" ] ,
[ "script" => 'aq-stick-top' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.mousewheel.min' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.mobilemenu' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.ui.totop' , "version" => "1.0.0" ] ,
[ "script" => 'aq2e-marketing-microsite-home' , "version" => "1.0.0" ] ,
]
);*/

                break;

            case 'process':

/*                echo aq2emm_load_scripts(
[
[ "script" => 'jquery' , "version" => "1.0.0" ] ,
[ "script" => 'bootstrap.min' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.cookie' , "version" => "1.0.0" ] ,
[ "script" => 'superfish' , "version" => "1.0.0" ] ,
[ "script" => 'device.min' , "version" => "1.0.0" ] ,
[ "script" => 'aq-stick-top' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.mousewheel.min' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.mobilemenu' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.ui.totop' , "version" => "1.0.0" ] ,
[ "script" => 'aq2e-marketing-microsite' , "version" => "1.0.0" ] ,
]
);*/
                break;

            case 'life':

/*                echo aq2emm_load_scripts(
[
[ "script" => 'jquery' , "version" => "1.0.0" ] ,
[ "script" => 'bootstrap.min' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.cookie' , "version" => "1.0.0" ] ,
[ "script" => 'superfish' , "version" => "1.0.0" ] ,
[ "script" => 'device.min' , "version" => "1.0.0" ] ,
[ "script" => 'aq-stick-top' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.mousewheel.min' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.mobilemenu' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.ui.totop' , "version" => "1.0.0" ] ,
[ "script" => 'aq2e-marketing-microsite' , "version" => "1.0.0" ] ,
]
);*/
                break;

            case 'calculator':

/*                echo aq2emm_load_scripts(
[
[ "script" => 'jquery' , "version" => "1.0.0" ] ,
[ "script" => 'bootstrap.min' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.cookie' , "version" => "1.0.0" ] ,
[ "script" => 'superfish' , "version" => "1.0.0" ] ,
[ "script" => 'device.min' , "version" => "1.0.0" ] ,
[ "script" => 'aq-stick-top' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.mousewheel.min' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.mobilemenu' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.ui.totop' , "version" => "1.0.0" ] ,
[ "script" => 'aq2e-marketing-microsite' , "version" => "1.0.0" ] ,
]
);*/
                break;

            case 'glossary':

/*                echo aq2emm_load_scripts(
[
[ "script" => 'jquery' , "version" => "1.0.0" ] ,
[ "script" => 'bootstrap.min' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.cookie' , "version" => "1.0.0" ] ,
[ "script" => 'superfish' , "version" => "1.0.0" ] ,
[ "script" => 'device.min' , "version" => "1.0.0" ] ,
[ "script" => 'aq-stick-top' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.mousewheel.min' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.mobilemenu' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.ui.totop' , "version" => "1.0.0" ] ,
[ "script" => 'aq2e-marketing-microsite' , "version" => "1.0.0" ] ,
]
);*/
                break;

            case 'about':

/*                echo aq2emm_load_scripts(
[
[ "script" => 'jquery' , "version" => "1.0.0" ] ,
[ "script" => 'bootstrap.min' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.cookie' , "version" => "1.0.0" ] ,
[ "script" => 'superfish' , "version" => "1.0.0" ] ,
[ "script" => 'device.min' , "version" => "1.0.0" ] ,
[ "script" => 'aq-stick-top' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.mousewheel.min' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.mobilemenu' , "version" => "1.0.0" ] ,
[ "script" => 'jquery.ui.totop' , "version" => "1.0.0" ] ,
[ "script" => 'aq2e-marketing-microsite' , "version" => "1.0.0" ] ,
]
);*/
                break;

        }

    }
}

if (!function_exists('aq2emm_load_header_scripts')) {

    function aq2emm_load_header_scripts()
    {

        $page = aq2emm_get_page();

        switch ($page) {
            case 'home':

                echo aq2emm_load_scripts(
                    [
                    ]
                );

                break;

            case 'process':

/*                echo aq2emm_load_scripts(
[
[ "script" => 'jquery' , "version" => "1.0.0" ]
]
);*/
                break;

            case 'life':

/*                echo aq2emm_load_scripts(
[
[ "script" => 'jquery' , "version" => "1.0.0" ]
]
);*/
                break;

            case 'needs':

                echo aq2emm_load_scripts(
                    [
                        ["script" => 'jquery', "version" => "1.0.0"],
                    ]
                );
                break;

            case 'glossary':

/*                echo aq2emm_load_scripts(
[
[ "script" => 'jquery' , "version" => "1.0.0" ]
]
);*/
                break;

            case 'about':

/*                echo aq2emm_load_scripts(
[
[ "script" => 'jquery' , "version" => "1.0.0" ]
]
);*/
                break;

        }

    }
}

if (!function_exists('fd3_load_js')) {
    function fd3_load_js()
    {
        return FD3_DYNAMIC_PAGES_PLUGIN_DIR . 'microsite_templates';
    }
}

if (!function_exists('get_dynamic_pages_template_directory')) {
    function get_dynamic_pages_template_directory()
    {
        return FD3_DYNAMIC_PAGES_PLUGIN_DIR . 'microsite_templates';
    }
}

// /wp-content/plugins/fd3-dynamic-pages/assets/microsite_templates/js/delano-ads.min.1.0.0.js

if (!function_exists('get_dynamic_pages_template_directory_uri')) {
    function get_dynamic_pages_template_directory_uri()
    {
        return FD3_DYNAMIC_PAGES_PLUGIN_URI . 'assets/microsite_templates';
    }
}

if (!function_exists('dynamic_pages_responsive')) {
    function dynamic_pages_responsive()
    {
        get_dynamic_pages_template_part(aq2emm_selected_theme() . 'partials/pages', 'responsive');
    }
}

if (!function_exists('aq2emm_debug_flag')) {
    function aq2emm_debug_flag($debug = 1)
    {
        global $aq2emm_debug;
        $aq2emm_debug = $debug;
    }
}

if (!function_exists('aq2emm_exit')) {
    function aq2emm_exit($msg, $level = 'INFO')
    {

        global $aq2emm_use_timer;

        if (strlen($msg) > 0) {
            aq2emm_log($msg, $level);
        }

        if ($aq2emm_use_timer == 1) {
            aq2emm_end_timer();
        }

        aq2emm_log("aq2emm_exit: fd3-dynamic-page ended");
        aq2emm_end_log();

        exit();

    }
}

if (!function_exists('fd3_http_response_code')) {
    function fd3_http_response_code($code = NULL) {

        if ($code !== NULL) {

            switch ($code) {
                case 100: $text = 'Continue'; break;
                case 101: $text = 'Switching Protocols'; break;
                case 200: $text = 'OK'; break;
                case 201: $text = 'Created'; break;
                case 202: $text = 'Accepted'; break;
                case 203: $text = 'Non-Authoritative Information'; break;
                case 204: $text = 'No Content'; break;
                case 205: $text = 'Reset Content'; break;
                case 206: $text = 'Partial Content'; break;
                case 300: $text = 'Multiple Choices'; break;
                case 301: $text = 'Moved Permanently'; break;
                case 302: $text = 'Moved Temporarily'; break;
                case 303: $text = 'See Other'; break;
                case 304: $text = 'Not Modified'; break;
                case 305: $text = 'Use Proxy'; break;
                case 400: $text = 'Bad Request'; break;
                case 401: $text = 'Unauthorized'; break;
                case 402: $text = 'Payment Required'; break;
                case 403: $text = 'Forbidden'; break;
                case 404: $text = 'Not Found'; break;
                case 405: $text = 'Method Not Allowed'; break;
                case 406: $text = 'Not Acceptable'; break;
                case 407: $text = 'Proxy Authentication Required'; break;
                case 408: $text = 'Request Time-out'; break;
                case 409: $text = 'Conflict'; break;
                case 410: $text = 'Gone'; break;
                case 411: $text = 'Length Required'; break;
                case 412: $text = 'Precondition Failed'; break;
                case 413: $text = 'Request Entity Too Large'; break;
                case 414: $text = 'Request-URI Too Large'; break;
                case 415: $text = 'Unsupported Media Type'; break;
                case 500: $text = 'Internal Server Error'; break;
                case 501: $text = 'Not Implemented'; break;
                case 502: $text = 'Bad Gateway'; break;
                case 503: $text = 'Service Unavailable'; break;
                case 504: $text = 'Gateway Time-out'; break;
                case 505: $text = 'HTTP Version not supported'; break;
                default:
                    exit('Unknown http status code "' . htmlentities($code) . '"');
                    break;
            }

            $protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');

            header($protocol . ' ' . $code . ' ' . $text);

            $GLOBALS['http_response_code'] = $code;

        } else {

            $code = (isset($GLOBALS['http_response_code']) ? $GLOBALS['http_response_code'] : 200);

        }

        return $code;

    }
}

if (!function_exists('aq2emm_exit_json')) {
    function aq2emm_exit_json($obj)
    {

        echo json_encode( $obj );

        aq2emm_log("aq2emm_exit_json: fd3-dynamic-page ended");
        aq2emm_end_log();

        exit();

    }
}


if (!function_exists('aq2emm_register_global_scripts')) {

    function aq2emm_register_global_scripts($namee, $o)
    {
        $js_contents = '';

        if (is_object($o)) {
            $contents = json_encode($o);
            $js_contents = sprintf("<script type='text/javascript'>\nvar %s = %s;\n</script>\n", $namee, $contents);
        } else if (is_array($o)) {
            $contents = json_encode($o);
            $js_contents = sprintf("<script type='text/javascript'>\nvar %s = %s;\n</script>\n", $namee, $contents);
        }

        // echo $js_contents; exit;

        return $js_contents;
    }

}

if (!function_exists('get_dynamic_pages_footer')) {

    function get_dynamic_pages_footer()
    {
        $template = get_dynamic_pages_template_directory() . '\\' . 'footer.php';

        if (file_exists($template)) {
            include_once $template;
        }

    }

}

if (!function_exists('get_dynamic_pages_header')) {

    function get_dynamic_pages_header()
    {
        $template = get_dynamic_pages_template_directory() . '\\' . 'header.php';

        // echo $template;
        // exit(0);

        if (file_exists($template)) {
            include_once $template;
        }

    }

}

if (!function_exists('fd3_get_link_type')) {

    function fd3_get_link_type($type)
    {
	    global $fd3_loader;

        $key = $type;
        $keySession = '/agent_microsite/site/links/' . $key;

        if (class_exists('AQ2EPlatform\AQ2ESession')) {

            $result = $fd3_loader->session->getSession( $keySession);

            if (isset($result)) {
                return $fd3_loader->session->getSession( $keySession);
            } else {
                return "";
            }

        } else {
            return "";
        }

    }

}

if (!function_exists('get_dynamic_pages_template_part')) {
    function get_dynamic_pages_template_part($dir = '', $template)
    {

        if (strlen($dir)) {
            $paths = explode('/', $dir);
            $frontPath = $paths[0];
            // echo '<br>template: ' . print_r($paths ,true); // exit;
            // $dir = str_replace( '/', '\\', $dir );
            $part1 = $paths[count($paths) - 1];
            unset($paths[0]);
            // unset( $paths[count($paths)-1] );
            $dir = $frontPath . '\\' . implode('\\', $paths);
            $template = $dir . '-' . $template . '.php';
            //    echo '<br>template: ' . $template; //exit;
            // echo '<br>template: ' . print_r($paths ,true); // exit;
        } else {
            $template = $template . '.php';
        }

        // $cssTemplate = get_dynamic_pages_template_directory_uri() . 'assets/css/page_templates/'.'css'.'-'.$id.'.css'.'?v='.$version_id;

        // echo $cssTemplate;
        // exit(0);

        if (file_exists($template)) {
            include_once $template;
        } else {
            echo "<br>File does not exist!";
        }
    }
}

if (!function_exists('aq2emm_get_na_script_path')) {
    function aq2emm_get_na_script_path()
    {
        return aq2emm_get_template_directory_uri() . '/js/needs-analyzer.js';
    }
}

if (!function_exists('aq2emm_scripts_enqueue')) {
    function aq2emm_scripts_enqueue()
    {
        aq2emm_styles();
        aq2emm_scripts();
    }
}

if (!function_exists('aq2emm_menus')) {
    function aq2emm_menus()
    {
        register_nav_menu('primary', 'Primary Header Navigation');
        register_nav_menu('secondary', 'Footer Navigation');
    }
}

if (!function_exists('aq2emm_theme_setup')) {
    function aq2emm_theme_setup()
    {
        add_theme_support('menus');
        aq2emm_menus();
    }
}

// add_action( 'wp_enqueue_scripts', 'aq2emm_scripts_enqueue' );
// add_action( 'init', 'aq2emm_theme_setup' );

if (!function_exists('aq2emm_selected_theme')) {
    function aq2emm_selected_theme()
    {
        // echo get_dynamic_pages_template_directory() . '\\ms_themes\\default\\'; exit;
        return get_dynamic_pages_template_directory() . '/ms_themes/default/';
    }
}

if (!function_exists('aq2emm_get_pages')) {
    function aq2emm_get_pages()
    {
        return ['home', 'process', 'life', 'calculator', 'glossary', 'about'];
    }
}

if (!function_exists('aq2emm_get_page_classes')) {
    function aq2emm_get_pageClasses()
    {
        return [
            ['name' => 'home', 'classes' => 'home home-page'],
            ['name' => 'process', 'classes' => 'process process-page'],
            ['name' => 'life', 'classes' => 'life life-page'],
            ['name' => 'calculator', 'classes' => 'needs needs-page'],
            ['name' => 'glossary', 'classes' => 'glossary glossary-page'],
            ['name' => 'about', 'classes' => 'about about-page'],
        ];
    }
}

if (!function_exists('aq2emm_get_page')) {
    function aq2emm_get_page()
    {

        $pages = aq2emm_get_pages();
        $currentPage = basename(get_permalink());
        $pageFound = false;
        $pageThatWasFound = '';

        foreach ($pages as $page) {
            if ($page == $currentPage) {
                $pageThatWasFound = $page;
                $pageFound = true;
            }
        }

        if (!$pageFound) {
            $pageThatWasFound = 'home';
        }

        // echo "<pre>page found: " . $pageThatWasFound; exit;

        return $pageThatWasFound;
    }
}

if (!function_exists('aq2emm_get_pages_class')) {
    function aq2emm_get_pages_class()
    {

        $pages = aq2emm_get_pages();
        $currentPage = basename(get_permalink());

        $pagesClass = [];

        $pageFound = false;

        foreach ($pages as $page) {
            if ($page == $currentPage) {
                $pagesClass[$page] = 'active';
                $pageFound = true;
            } else {
                $pagesClass[$page] = '';
            }
        }

        if (!$pageFound) {
            $pagesClass['home'] = 'active';
        }

        return $pagesClass;

    }
}

if (!function_exists('aq2emm_get_aq_about_info')) {
    function aq2emm_get_aq_about_info()
    {
	    global $fd3_loader;

        if (class_exists('AQ2EPlatform\AQ2ESession')) {
            return $fd3_loader->session->getSession( '/agent_microsite/site/info');
        } else {
            return "AgentQuote.com's founding partners have been in the insurance, financial, and technology fields for the past three decades, and have been providing web-based solutions since the very early days of the commercial Internet.";
        }
    }
}

if (!function_exists('aq2emm_get_top_slogan_line1')) {
    function aq2emm_get_top_slogan_line1()
    {
        return 'COVERAGE THAT GIVE YOU MORE';
    }
}

if (!function_exists('aq2emm_get_top_slogan_line2')) {
    function aq2emm_get_top_slogan_line2()
    {
        return 'TERM LIFE INSURANCE';
    }
}

if (!function_exists('aq2emm_get_slogan')) {
    function aq2emm_get_slogan()
    {
        return 'TERM LIFE QUOTE<br>THE INTELLIGENT WAY TO PURCHASE TERM LIFE INSURANCE';
    }
}

if (!function_exists('aq2emm_get_logo')) {
    function aq2emm_get_logo()
    {
    	global $fd3_loader;
        if (class_exists('AQ2EMarketingPlatform\AQ2ESession')) {
            $logo = $fd3_loader->session->getSession( '/agent_microsite/site/logo');
            $logo = preg_replace('#^https?:#', '', $logo);
            return $logo;
        } else {
            return "https://aq2e.com/agentlogos/" . '60488' . '/logo.png';
        }
    }
}

if (!function_exists('aq2emm_get_profile_image')) {
    function aq2emm_get_profile_image()
    {
	    global $fd3_loader;
	    
        if (class_exists('AQ2EMarketingPlatform\AQ2ESession')) {
            return $fd3_loader->session->getSession( '/agent_microsite/site/profileImage');
        } else {
            return "/wp-content/themes/aq2e-marketing-microsite/img/page3_pic9.jpg";
        }
    }
}

if (!function_exists('aq2emm_get_link')) {
    function aq2emm_get_link($type)
    {
	    global $fd3_loader;
	    
        switch ($type) {
            case 'facebook':
                if (class_exists('AQ2EMarketingPlatform\AQ2ESession')) {
                    return $fd3_loader->session->getSession( '/agent_microsite/links/facebook/link');
                } else {
                    return 'facebook';
                }

            case 'twitter':
                if (class_exists('AQ2EMarketingPlatform\AQ2ESession')) {
                    return $fd3_loader->session->getSession( '/agent_microsite/links/facebook/link');
                } else {
                    return 'twitter';
                }

            case 'googlePlus':
                if (class_exists('AQ2EMarketingPlatform\AQ2ESession')) {
                    return $fd3_loader->session->getSession( '/agent_microsite/links/facebook/link');
                } else {
                    return 'googlePlus';
                }

            case 'linkedIn':
                if (class_exists('AQ2EMarketingPlatform\AQ2ESession')) {
                    return $fd3_loader->session->getSession( '/agent_microsite/links/facebook/link');
                } else {
                    return 'linkedIn';
                }

        }

    }
}

if (!function_exists('aq2emm_get_template_directory_uri')) {
    function aq2emm_get_template_directory_uri()
    {
        return get_dynamic_pages_template_directory_uri();
    }
}

if (!function_exists('aq2emm_get_phone')) {
    function aq2emm_get_phone()
    {
	    global $fd3_loader;
	    
        if (class_exists('AQ2EMarketingPlatform\AQ2ESession')) {
            return $fd3_loader->session->getSession( '/agent_microsite/site/phone_text');
        } else {
            return '888-888-8888';
        }
    }
}

if (!function_exists('aq2emm_get_sid')) {
    function aq2emm_get_sid()
    {
	    global $fd3_loader;
	    
        if (class_exists('AQ2EMarketingPlatform\AQ2ESession')) {
            return $fd3_loader->session->getSession( '/agent_microsite/site/m_subdomain');
        } else {
            return 'tsarlese';
        }
    }
}

if (!function_exists('aq2emm_get_email')) {
    function aq2emm_get_email()
    {
	    global $fd3_loader;
	    
        if (class_exists('AQ2EMarketingPlatform\AQ2ESession')) {
            return $fd3_loader->session->getSession( '/agent_microsite/site/email_text');
        } else {
            return 'jdoe@nowhere.com';
        }
    }
}

if (!function_exists('aq2emm_get_agent_title')) {
    function aq2emm_get_agent_title()
    {
	    global $fd3_loader;
	    
        if (class_exists('AQ2EMarketingPlatform\AQ2ESession')) {
            return $fd3_loader->session->getSession( '/agent_microsite/site/title');
        } else {
            return 'Your Title';
        }
    }
}

if (!function_exists('aq2emm_get_name')) {
    function aq2emm_get_name()
    {
	    global $fd3_loader;
	    
//    echo "<pre>info:" . print_r($info,true);
        if (class_exists('AQ2EMarketingPlatform\AQ2ESession')) {
            return $fd3_loader->session->getSession( '/agent_microsite/site/AgentName');
        } else {
            return 'John Doe 2';
        }
    }
}

if (!function_exists('aq2emm_js_data_scrape')) {
    function aq2emm_js_data_scrape($key)
    {
	    global $fd3_loader;

        if (class_exists('AQ2EMarketingPlatform\AQ2ESession')) {

            if ( ($fd3_loader->session->getSession( $key)) != null) {
                return $fd3_loader->session->getSession( $key);
            }

        }
    }
}

if (!function_exists('aq2emm_js_data')) {
    function aq2emm_js_data()
    {

        if (class_exists('AQ2EMarketingPlatform\AQ2ESession')) {

            $banner_license = aq2emm_js_data_scrape('/agent_microsite/site/license_details')['license'];
            $licenses = array("banner" => $banner_license, "companies" => $banner_license, "ads" => "99999-99999-99999-00000");

            // $info = aq2emm_js_data_scrape( '/agent_microsite/site' );
            // echo print_r( $info, true); exit;

            return aq2emm_register_global_scripts('licenses', $licenses);

        }
    }
}

if (!function_exists('aq2emm_get_license')) {
    function aq2emm_get_license()
    {
	    global $fd3_loader;
	    
        //echo print_r( AQ2EMarketingPlatform\AQ2ESession::getSession( '/agent_microsite/site'), true) ; exit;
        //echo AQ2EMarketingPlatform\AQ2ESession::getSession( '/agent_microsite/site/license_details/license' ); exit;

        if (class_exists('AQ2EMarketingPlatform\AQ2ESession')) {
            return $fd3_loader->session->getSession( '/agent_microsite/site/license_details/license');
        } else {
            return '43952-02681-707ac-53179';
        }

    }
}

if (!function_exists('aq2emm_get_info')) {
    function aq2emm_get_info()
    {
	    global $fd3_loader;
	    
        if (class_exists('AQ2EMarketingPlatform\AQ2ESession')) {
            return $fd3_loader->session->getSession( '/agent_microsite/site/info');
        } else {
            return 'Non aute veniam magna id laborum laboris mollit excepteur irure nostrud incididunt ut Lorem et. Exercitation deserunt dolore pariatur tempor fugiat cillum velit consequat officia veniam magna adipisicing. Ut consequat dolor fugiat quis velit. Duis proident elit consequat tempor. Dolore velit amet sint officia consequat excepteur fugiat mollit velit. Sint adipisicing do deserunt culpa occaecat in ullamco magna dolor ad.';
        }
    }
}

if (!function_exists('aq2emm_load_shortcodes')) {
    function aq2emm_load_shortcodes()
    {

    }
}

if (!function_exists('aq2emm_get_body_classes')) {
    function aq2emm_get_body_classes()
    {

        $classes = aq2emm_get_pageClasses();

        $currentPage = basename(get_permalink());

        foreach ($classes as $class) {
            $currentClass = $class;
            if ($currentClass['name'] == $currentPage) {
                $bodyClass = $currentClass['classes'];

                return $bodyClass;
            }
        }

        return '';
    }
}

/*require_once(get_template_directory().'/FD3AQ2EBaseLoader.class.php');
$baseLoader = new FD3AQ2EBaseLoader();
$baseLoader->execute();

require_once(get_template_directory().'/classes/AQ2EMarketingMicrosite.class.php');
new AQ2EMarketingMicrosite();*/