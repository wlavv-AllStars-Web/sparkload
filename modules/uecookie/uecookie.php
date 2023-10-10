<?php

/**
 * PrestaShop module created by VEKIA, a guy from official PrestaShop community ;-)
 *
 * @author    VEKIA https://www.prestashop.com/forums/user/132608-vekia/
 * @copyright 2010-2019 VEKIA
 * @license   This program is not free software and you can't resell and redistribute it
 *
 * CONTACT WITH DEVELOPER
 * support@mypresta.eu
 */
class uecookie extends Module
{
    function __construct()
    {
        $this->name = 'uecookie';
        $this->tab = 'Blocks';
        $this->author = 'MyPresta.eu';
        $this->version = '1.8.1';
        $this->module_key = '98954d996259885532adabb50f129a9d';
        $this->mypresta_link = 'https://mypresta.eu/modules/front-office-features/european-union-cookie-law.html';
        $this->dir = '/modules/uecookie/';
        $this->setup = $this->getconf();
        $this->psver = $this->psversion();
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('European Union Cookies Law');
        $this->description = $this->l('This module displays a nice information about Cookies in your shop');
        $this->checkforupdates();
    }

    public function checkforupdates($display_msg = 0, $form = 0)
    {
        // ---------- //
        // ---------- //
        // VERSION 16 //
        // ---------- //
        // ---------- //
        $this->mkey = "nlc";
        if (@file_exists('../modules/' . $this->name . '/key.php')) {
            @require_once('../modules/' . $this->name . '/key.php');
        } else {
            if (@file_exists(dirname(__FILE__) . $this->name . '/key.php')) {
                @require_once(dirname(__FILE__) . $this->name . '/key.php');
            } else {
                if (@file_exists('modules/' . $this->name . '/key.php')) {
                    @require_once('modules/' . $this->name . '/key.php');
                }
            }
        }
        if ($form == 1) {
            return '
            <div class="panel" id="fieldset_myprestaupdates" style="margin-top:20px;">
            ' . ($this->psversion() == 6 || $this->psversion() == 7 ? '<div class="panel-heading"><i class="icon-wrench"></i> ' . $this->l('MyPresta updates') . '</div>' : '') . '
			<div class="form-wrapper" style="padding:0px!important;">
            <div id="module_block_settings">
                    <fieldset id="fieldset_module_block_settings">
                         ' . ($this->psversion() == 5 ? '<legend style="">' . $this->l('MyPresta updates') . '</legend>' : '') . '
                        <form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
                            <label>' . $this->l('Check updates') . '</label>
                            <div class="margin-form">' . (Tools::isSubmit('submit_settings_updates_now') ? ($this->inconsistency(0) ? '' : '') . $this->checkforupdates(1) : '') . '
                                <button style="margin: 0px; top: -3px; position: relative;" type="submit" name="submit_settings_updates_now" class="button btn btn-default" />
                                <i class="process-icon-update"></i>
                                ' . $this->l('Check now') . '
                                </button>
                            </div>
                            <label>' . $this->l('Updates notifications') . '</label>
                            <div class="margin-form">
                                <select name="mypresta_updates">
                                    <option value="-">' . $this->l('-- select --') . '</option>
                                    <option value="1" ' . ((int)(Configuration::get('mypresta_updates') == 1) ? 'selected="selected"' : '') . '>' . $this->l('Enable') . '</option>
                                    <option value="0" ' . ((int)(Configuration::get('mypresta_updates') == 0) ? 'selected="selected"' : '') . '>' . $this->l('Disable') . '</option>
                                </select>
                                <p class="clear">' . $this->l('Turn this option on if you want to check MyPresta.eu for module updates automatically. This option will display notification about new versions of this addon.') . '</p>
                            </div>
                            <label>' . $this->l('Module page') . '</label>
                            <div class="margin-form">
                                <a style="font-size:14px;" href="' . $this->mypresta_link . '" target="_blank">' . $this->displayName . '</a>
                                <p class="clear">' . $this->l('This is direct link to official addon page, where you can read about changes in the module (changelog)') . '</p>
                            </div>
                            <div class="panel-footer">
                                <button type="submit" name="submit_settings_updates"class="button btn btn-default pull-right" />
                                <i class="process-icon-save"></i>
                                ' . $this->l('Save') . '
                                </button>
                            </div>
                        </form>
                    </fieldset>
                    <style>
                    #fieldset_myprestaupdates {
                        display:block;clear:both;
                        float:inherit!important;
                    }
                    </style>
                </div>
            </div>
            </div>';
        } else {
            if (defined('_PS_ADMIN_DIR_')) {
                if (Tools::isSubmit('submit_settings_updates')) {
                    Configuration::updateValue('mypresta_updates', Tools::getValue('mypresta_updates'));
                }
                if (Configuration::get('mypresta_updates') != 0 || (bool)Configuration::get('mypresta_updates') != false) {
                    if (Configuration::get('update_' . $this->name) < (date("U") - 259200)) {
                        $actual_version = uecookieUpdate::verify($this->name, (isset($this->mkey) ? $this->mkey : 'nokey'), $this->version);
                    }
                    if (uecookieUpdate::version($this->version) < uecookieUpdate::version(Configuration::get('updatev_' . $this->name)) && Tools::getValue('ajax', 'false') == 'false') {
                        $this->context->controller->warnings[] = '<strong>' . $this->displayName . '</strong>: ' . $this->l('New version available, check http://MyPresta.eu for more informations') . ' <a href="' . $this->mypresta_link . '">' . $this->l('More details in changelog') . '</a>';
                        $this->warning = $this->context->controller->warnings[0];
                    }
                } else {
                    if (Configuration::get('update_' . $this->name) < (date("U") - 259200)) {
                        $actual_version = uecookieUpdate::verify($this->name, (isset($this->mkey) ? $this->mkey : 'nokey'), $this->version);
                    }
                }
                if ($display_msg == 1) {
                    if (uecookieUpdate::version($this->version) < uecookieUpdate::version(uecookieUpdate::verify($this->name, (isset($this->mkey) ? $this->mkey : 'nokey'), $this->version))) {
                        return "<span style='color:red; font-weight:bold; font-size:16px; margin-right:10px;'>" . $this->l('New version available!') . "</span>";
                    } else {
                        return "<span style='color:green; font-weight:bold; font-size:16px; margin-right:10px;'>" . $this->l('Module is up to date!') . "</span>";
                    }
                }
            }
        }
    }

    public function inconsistency()
    {
        return true;
    }

    function install()
    {
        if ($this->psversion() == 7 || $this->psversion(0) >= 8) {
            if (parent::install() == false OR !$this->registerhook('displayHeader') OR !$this->registerHook('displayFooter') OR !Configuration::updateValue('update_' . $this->name, '0') OR !Configuration::updateValue('uecookie_opacity', '0.5') OR !Configuration::updateValue('uecookie_position', '1') OR !Configuration::updateValue('uecookie_bg', '000000') OR !Configuration::updateValue('uecookie_shadow', 'FFFFFF') OR !Configuration::updateValue('uecookie_text', array($this->context->language->id => $this->l('This shop uses cookies and other technologies so that we can improve your experience on our sites.')))) {
                return false;
            } else {
                return true;
            }
        }
    }

    public function psversion($part = 1)
    {
        $version = _PS_VERSION_;
        $exp = $explode = explode(".", $version);
        if ($part == 0) {
            return $exp[0];
        }
        if ($part == 1) {
            return $exp[1];
        }
        if ($part == 2) {
            return $exp[2];
        }
        if ($part == 3) {
            return $exp[3];
        }
        if ($part == 4) {
            return $exp[3];
        }
    }

    public function getconf()
    {
        $var = new stdClass();
        $var->uecookie_position = Configuration::get('uecookie_position');
        $var->uecookie_bg = Configuration::get('uecookie_bg');
        $var->uecookie_shadow = Configuration::get('uecookie_shadow');
        $var->uecookie_opacity = Configuration::get('uecookie_opacity');
        $var->uecookie_closex = Configuration::get('uecookie_closex');
        $var->uecookie_close_txt = Configuration::get('uecookie_close_txt');
        $var->uecookie_close_bg = Configuration::get('uecookie_close_bg');

        return $var;
    }

    public function return_dir()
    {
        return _MODULE_DIR_;
    }

    public function getContent()
    {
        $output = "";

        if (Tools::isSubmit('module_settings')) {
            if (Tools::getValue('uecookie_cleanup') == 1) {
                Configuration::deleteByName('uecookie_text');
            }
            Configuration::updateValue('uecookie_text', $_POST['uecookie_text'], true);
            Configuration::updateValue('ueTiny', Tools::getValue('ueTiny', 0));
            Configuration::updateValue('uecookie_bg', $_POST['uecookie_bg'], true);
            Configuration::updateValue('uecookie_closex', $_POST['uecookie_closex']);
            Configuration::updateValue('uecookie_usex', $_POST['uecookie_usex']);
            Configuration::updateValue('uecookie_close_bg', $_POST['uecookie_close_bg']);
            Configuration::updateValue('uecookie_close_txt', $_POST['uecookie_close_txt']);
            Configuration::updateValue('uecookie_shadow', $_POST['uecookie_shadow'], true);
            Configuration::updateValue('uecookie_position', Tools::getValue('uecookie_position'), true);
            Configuration::updateValue('uecookie_opacity', $_POST['uecookie_opacity'], true);
            Configuration::updateValue('uecookie_lib', Tools::getValue('uecookie_lib', 0), true);
            Configuration::updateValue('uecookie_x_where', Tools::getValue('uecookie_x_where', 1));
            Configuration::updateValue('uecookie_x_fa', Tools::getValue('uecookie_x_fa', 0));
            Configuration::updateValue('uecookie_close_anim', Tools::getValue('uecookie_close_anim', 0));
            Configuration::updateValue('uecookie_padding', Tools::getValue('uecookie_padding', ''));
        }

        return $output . $this->displayForm();
    }

    public function displayForm()
    {
        $languages = Language::getLanguages(false);
        $id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
        $var = $this->getconf();
        global $cookie;
        $iso = Language::getIsoById((int)($cookie->id_lang));
        $isoTinyMCE = (file_exists(_PS_ROOT_DIR_ . '/js/tiny_mce/langs/' . $iso . '.js') ? $iso : 'en');
        $ad = dirname($_SERVER["PHP_SELF"]);

        if ($this->psversion() == 7 || $this->psversion(0) == 8) {
            $form = '
            <style>
                .language_flags {display:none;}
            </style>
            <script type="text/javascript">
                var iso = \'' . $isoTinyMCE . '\' ;
        		var pathCSS = \'' . _THEME_CSS_DIR_ . '\' ;
                var ad = \'' . $ad . '\' ;
    		</script>
            <script type="text/javascript" src="' . __PS_BASE_URI__ . 'js/tiny_mce/tiny_mce.js"></script>';
            if (Configuration::get('ueTiny') == 1) {
                $form .= '<script type="text/javascript" src="../modules/uecookie/tinymce16.inc.js"></script>';
            } else {
                $form .= '<script type="text/javascript" src="' . __PS_BASE_URI__ . 'js/admin/tinymce.inc.js"></script>';
                $form .= '<script type="text/javascript" src="../modules/uecookie/tinymce-original.js"></script>';

            }
        }
        $position_top = "";
        $position_bottom = "";

        if (Configuration::get('uecookie_position') == 1) {
            $position_top = "checked=\"yes\"";
        }
        if (Configuration::get('uecookie_position') == 2) {
            $position_bottom = "checked=\"yes\"";
        }


        $content = "";
        foreach ($languages as $language) {
            $content .= '
			<div id="ccont_' . $language['id_lang'] . '" style="margin-bottom:30px;">
                <h2>' . $language['name'] . '</h2>
				<textarea class="rte rtepro" id="uecookie_text_' . $language['id_lang'] . '" name="uecookie_text[' . $language['id_lang'] . ']" style="width:500px; height:300px;">' . Configuration::get('uecookie_text', $language['id_lang']) . '</textarea>
			</div>';
        }
        $form .= '
            <style>
            .adminmodules .nobootstrap .margin-form input, .adminmodules .nobootstrap .margin-form select {
                max-width: 200px;
            }
            .adminmodules .nobootstrap .margin-form {
                font-size: 1.0em;
            }
            .page-sidebar:not(.page-sidebar-closed) .nobootstrap {
                margin-left: 0px;
            }
            </style>
            <script type="text/javascript" src="../modules/uecookie/jscolor/jscolor.js"></script>
            <div class="panel">
                <h3><i class="icon-wrench"></i> ' . $this->l('I am developing this module for free - if you want') . ' <a class="btn button label label-danger" target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7WE8PTH4ZPYZA">' . $this->l('send me a donation') . '</span></a></h3>
                <iframe src="//apps.facepages.eu/somestuff/whatsgoingon.html" width="100%" height="150" border="0" style="border:none;"></iframe>
            </div>
			<form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
				<div class="panel">
				<fieldset class="nobootstrap">
					<h3><i class="icon-wrench"></i> ' . $this->l('UE cookie law') . '</h3>
					<label>' . $this->l('What rich text editor you want to use?') . '</label>
					<div class="margin-form">
					    <select name="ueTiny" onChange="$(\'#module_settings_button\').click();">
					        <option ' . (Configuration::get('ueTiny') == 1 ? 'selected' : '') . ' value="1">' . $this->l('Extended editor delivered with this module') . '</option>
					        <option ' . (Configuration::get('ueTiny') != 1 ? 'selected' : '') . ' value="0">' . $this->l('Original prestashop\'s editor') . '</option>
					    </select>
					</div>
					
					<div style="margin-bottom:20px; display:block; clear:both; text-align:center; overflow:hidden;">
		                <div style="display:block; clear:both; margin-bottom:20px;">
							<label>' . $this->l('UE cookie law text') . ':</label>
							<div class="margin-form">' . $content . '
							</div>	
		                </div>
	                </div>
                    <label>' . $this->l('Position') . '</label>
					<div class="margin-form">
						<input type="radio"  name="uecookie_position" value="1" ' . $position_top . '/>' . $this->l('top') . '
                        <input type="radio"  name="uecookie_position" value="2" ' . $position_bottom . '/>' . $this->l('bottom') . '
					</div>
                    <label>' . $this->l('Background color') . '</label>
					<div class="margin-form">
						<input type="text" class="color" name="uecookie_bg" value="' . Configuration::get('uecookie_bg') . '"/>
					</div>
					<label>' . $this->l('Additional border (padding)') . '</label>
					<div class="margin-form">
						<input type="text" name="uecookie_padding" value="' . Configuration::get('uecookie_padding') . '"/> px
					</div>
                    <label>' . $this->l('Shadow color') . '</label>
					<div class="margin-form">
						<input type="text" class="color" name="uecookie_shadow" value="' . Configuration::get('uecookie_shadow') . '"/>
					</div>
                    <label>' . $this->l('Use [X] instead [close] button') . '</label>
					<div class="margin-form">
    					<input type="radio"  name="uecookie_usex" value="0" ' . (Configuration::get('uecookie_usex') != 1 ? 'checked' : '') . '/>' . $this->l('No') . '
                        <input type="radio"  name="uecookie_usex" value="1" ' . (Configuration::get('uecookie_usex') == 1 ? 'checked' : '') . '/>' . $this->l('Yes') . '
					</div>

                    <label>' . $this->l('Include font awesome library') . '</label>
					<div class="margin-form">
					    <select name="uecookie_x_fa">
					        <option ' . (Configuration::get('uecookie_x_fa') == 0 ? 'selected' : '') . ' value="0">' . $this->l('No') . '</option>
					        <option ' . (Configuration::get('uecookie_x_fa') == 1 ? 'selected' : '') . ' value="1">' . $this->l('Yes') . '</option>
					    </select>
					    <div class="bootstrap">
                    		<div class="alert alert-info">
                    			' . $this->l('If you are on PrestaShop 1.7 or if your theme does not support font awesome - to use [x] button you have to include font awesome library. Use this option only if you use [x] button and if your website does not use Font Awesome.') . '
                    		</div>
                    	</div>
					</div>

                    <label>' . $this->l('Color of close [X] button') . '</label>
					<div class="margin-form">
						<input type="text" class="color" name="uecookie_closex" value="' . Configuration::get('uecookie_closex') . '"/>
					</div>

                    <label>' . $this->l('Background color of [close] button') . '</label>
					<div class="margin-form">
						<input type="text" class="color" name="uecookie_close_bg" value="' . Configuration::get('uecookie_close_bg') . '"/>
					</div>

                    <label>' . $this->l('Text color of [close] button') . '</label>
					<div class="margin-form">
						<input type="text" class="color" name="uecookie_close_txt" value="' . Configuration::get('uecookie_close_txt') . '"/>
					</div>

					<label>' . $this->l('Where to display [close] / [x] button') . '</label>
					<div class="margin-form">
					    <select name="uecookie_x_where">
					        <option ' . (Configuration::get('uecookie_x_where') == 1 ? 'selected' : '') . ' value="1">' . $this->l('Left hand side') . '</option>
					        <option ' . (Configuration::get('uecookie_x_where') == 2 ? 'selected' : '') . ' value="2">' . $this->l('Right hand side') . '</option>
					        <option ' . (Configuration::get('uecookie_x_where') == 3 ? 'selected' : '') . ' value="3">' . $this->l('Center (below the contents)') . '</option>
					    </select>
					</div>
                                        
                    <label>' . $this->l('Opacity') . '</label>
					<div class="margin-form">
						<input type="text" name="uecookie_opacity" value="' . Configuration::get('uecookie_opacity') . '"/>
                        ' . $this->l('for example: 0.5') . '
					</div>

					<label>' . $this->l('Close animation') . '</label>
					<div class="margin-form">
					    <select name="uecookie_close_anim">
					        <option ' . (Configuration::get('uecookie_close_anim') == 0 ? 'selected' : '') . ' value="0">' . $this->l('Slide out') . '</option>
					        <option ' . (Configuration::get('uecookie_close_anim') == 1 ? 'selected' : '') . ' value="1">' . $this->l('Fade out') . '</option>
					    </select>
					</div>

                    <label>' . $this->l('Include library to') . '</label>
					<div class="margin-form">
    					<input type="radio"  name="uecookie_lib" value="0" ' . (Configuration::get('uecookie_lib') != 1 ? 'checked' : '') . '/>' . $this->l('footer') . '
                        <input type="radio"  name="uecookie_lib" value="1" ' . (Configuration::get('uecookie_lib') == 1 ? 'checked' : '') . '/>' . $this->l('header') . '
                        <div class="bootstrap">
                    		<div class="alert alert-info">
                    			' . $this->l('Some templates uses own hook to build footer section. In cases like this please use "header" option to include ue notification to front office') . '
                    		</div>
                    	</div>
					</div>
                    
                    <label>' . $this->l('Clean up stored configuration') . '</label>
					<div class="margin-form">
    	                <input type="checkbox" name="uecookie_cleanup" value="1" /> ' . $this->l('Remove stored configuration before save new settings') . '

                        <div class="bootstrap">
                    		<div class="alert alert-info">
                    			' . $this->l('If you will activate this option module will remove existing configuration and then save current configuration to avoid problems with save process of translations. Use this option when you will add new languages to your shop.') . '
                    		</div>
                    	</div>
					</div>
					
	                <div style="margin-top:20px; clear:both; overflow:hidden; display:block; text-align:center">
                    <iframe src="//apps.facepages.eu/somestuff/uecookie.html" width="100%" height="150" border="0" style="border:none;"></iframe>
	                </div>
      			    </fieldset>
	                <div class="panel-footer ">
                        <button id="module_settings_button" name="module_settings" class="button btn btn-default pull-right">
                            <i class="process-icon-save"></i>
                            ' . $this->l('save') . '
                        </button>
                    </div>
      			</div>
   			</form>
		';

        $form .= $this->checkforupdates(0, 1);

        return '' . "<script>/*<![CDATA[*/window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement(\"iframe\");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src=\"javascript:false\",r.title=\"\",r.role=\"presentation\",(r.frameElement||r).style.cssText=\"display: none\",d=document.getElementsByTagName(\"script\"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(c){n=document.domain,r.src='javascript:var d=document.open();d.domain=\"'+n+'\";void(0);',o=s}o.open()._l=function(){var o=this.createElement(\"script\");n&&(this.domain=n),o.id=\"js-iframe-async\",o.src=e,this.t=+new Date,this.zendeskHost=t,this.zEQueue=a,this.body.appendChild(o)},o.write('<body onload=\"document._l();\">'),o.close()}(\"//assets.zendesk.com/embeddable_framework/main.js\",\"prestasupport.zendesk.com\");/*]]>*/</script>" . $form;
    }

    public function hookdisplayFooter($params)
    {
        if (Configuration::get('uecookie_lib') != 1) {
            if (!isset($_COOKIE['cookie_ue'])) {
                $var = $this->getconf();
                global $smarty;
                $smarty->assign('vareu', $var);
                if ($this->psversion() == 7 || $this->psversion(0) == 8) {
                    $smarty->assign(array('uecookie' => $message = Configuration::get('uecookie_text', $this->context->language->id)));
                } else {
                    global $cookie;
                    $smarty->assign(array('uecookie' => $message = Configuration::get('uecookie_text', $cookie->id_lang)));
                }

                return $this->display(__file__, 'top.tpl');
            }
        }
    }

    public function hookdisplayHeader($params)
    {
        if (Configuration::get('uecookie_lib') == 1) {
            if (!isset($_COOKIE['cookie_ue'])) {
                $var = $this->getconf();
                global $smarty;
                $smarty->assign('vareu', $var);
                if ($this->psversion() == 7 || $this->psversion(0) == 8) {
                    $smarty->assign(array('uecookie' => $message = Configuration::get('uecookie_text', $this->context->language->id)));
                } else {
                    global $cookie;
                    $smarty->assign(array('uecookie' => $message = Configuration::get('uecookie_text', $cookie->id_lang)));
                }

                return $this->display(__file__, 'top.tpl');
            }
        }
    }
}

class uecookieUpdate extends uecookie
{
    public static function version($version)
    {
        $version = (int)str_replace(".", "", $version);
        if (strlen($version) == 3) {
            $version = (int)$version . "0";
        }
        if (strlen($version) == 2) {
            $version = (int)$version . "00";
        }
        if (strlen($version) == 1) {
            $version = (int)$version . "000";
        }
        if (strlen($version) == 0) {
            $version = (int)$version . "0000";
        }

        return (int)$version;
    }

    public static function encrypt($string)
    {
        return base64_encode($string);
    }

    public static function verify($module, $key, $version)
    {
        if (ini_get("allow_url_fopen")) {
            if (function_exists("file_get_contents")) {
                $actual_version = @file_get_contents('http://dev.mypresta.eu/update/get.php?module=' . $module . "&version=" . self::encrypt($version) . "&lic=$key&u=" . self::encrypt(_PS_BASE_URL_ . __PS_BASE_URI__));
            }
        }
        Configuration::updateValue("update_" . $module, date("U"));
        Configuration::updateValue("updatev_" . $module, $actual_version);

        return $actual_version;
    }
}

?>