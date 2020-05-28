<?php

if (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    $sOBContents = ob_get_contents();
    ob_end_clean();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
            "http://www.w3.org/TR/1999/REC-html401-19991224/loose.dtd">

<html<?php echo $_SESSION['scriptcase']['reg_conf']['html_dir'] ?>>
<HEAD>
 <TITLE><?php if ('novo' == $this->nmgp_opcao) { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " mail_marketing"); } else { echo strip_tags("" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " mail_marketing"); } ?></TITLE>
 <META http-equiv="Content-Type" content="text/html; charset=<?php echo $_SESSION['scriptcase']['charset_html'] ?>" />
 <META http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT"/>
 <META http-equiv="Last-Modified" content="<?php echo gmdate("D, d M Y H:i:s"); ?> GMT"/>
 <META http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate"/>
 <META http-equiv="Cache-Control" content="post-check=0, pre-check=0"/>
 <META http-equiv="Pragma" content="no-cache"/>
 <link rel="shortcut icon" href="../_lib/img/usr__NM__bg__NM__e6885a69-f5bc-4480-bccc-7f780a768f92.png">
<?php
header("X-XSS-Protection: 1; mode=block");
?>
<?php

if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'] && $_SESSION['scriptcase']['display_mobile'])
{
?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<?php
}

?>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/thickbox.css" type="text/css" media="screen" />
 <SCRIPT type="text/javascript">
  var sc_pathToTB = '<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/thickbox/';
  var sc_tbLangClose = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_close"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_tbLangEsc = "<?php echo html_entity_decode($this->Ini->Nm_lang["lang_tb_esc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]) ?>";
  var sc_userSweetAlertDisplayed = false;
 </SCRIPT>
 <SCRIPT type="text/javascript">
  var sc_blockCol = '<?php echo $this->Ini->Block_img_col; ?>';
  var sc_blockExp = '<?php echo $this->Ini->Block_img_exp; ?>';
  var sc_ajaxBg = '<?php echo $this->Ini->Color_bg_ajax; ?>';
  var sc_ajaxBordC = '<?php echo $this->Ini->Border_c_ajax; ?>';
  var sc_ajaxBordS = '<?php echo $this->Ini->Border_s_ajax; ?>';
  var sc_ajaxBordW = '<?php echo $this->Ini->Border_w_ajax; ?>';
  var sc_ajaxMsgTime = 2;
  var sc_img_status_ok = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_ok; ?>';
  var sc_img_status_err = '<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Img_status_err; ?>';
  var sc_css_status = '<?php echo $this->Ini->Css_status; ?>';
 </SCRIPT>
        <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery.js"></SCRIPT>
<input type="hidden" id="sc-mobile-lock" value='true' />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery/js/jquery-ui.js"></SCRIPT>
 <link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery/css/smoothness/jquery-ui.css" type="text/css" media="screen" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_sweetalert.css" />
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/sweetalert2.all.min.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/sweetalert/polyfill.min.js"></SCRIPT>
 <script type="text/javascript" src="../_lib/lib/js/frameControl.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.iframe-transport.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fileupload.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/malsup-blockui/jquery.blockUI.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->path_prod; ?>/third/jquery_plugin/thickbox/thickbox-compressed.js"></SCRIPT>
 <style type="text/css">
  #quicksearchph_t {
   position: relative;
  }
  #quicksearchph_t img {
   position: absolute;
   top: 0;
   right: 0;
  }
 </style>
<style type="text/css">
.sc-button-image.disabled {
	opacity: 0.25
}
.sc-button-image.disabled img {
	cursor: default !important
}
</style>
 <style type="text/css">
  .fileinput-button-padding {
   padding: 3px 10px !important;
  }
  .fileinput-button {
   position: relative;
   overflow: hidden;
   float: left;
   margin-right: 4px;
  }
  .fileinput-button input {
   position: absolute;
   top: 0;
   right: 0;
   margin: 0;
   border: solid transparent;
   border-width: 0 0 100px 200px;
   opacity: 0;
   filter: alpha(opacity=0);
   -moz-transform: translate(-300px, 0) scale(4);
   direction: ltr;
   cursor: pointer;
  }
 </style>
<?php
$miniCalendarFA = $this->jqueryFAFile('calendar');
if ('' != $miniCalendarFA) {
?>
<style type="text/css">
.css_read_off_mail_marketing_iniciar_quando button {
	background-color: transparent;
	border: 0;
	padding: 0
}
.css_read_off_mail_marketing_terminar_quando button {
	background-color: transparent;
	border: 0;
	padding: 0
}
</style>
<?php
}
?>
<link rel="stylesheet" href="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/css/select2.min.css" type="text/css" />
<script type="text/javascript" src="<?php echo $this->Ini->path_prod ?>/third/jquery_plugin/select2/js/select2.full.min.js"></script>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.scInput2.js"></SCRIPT>
 <SCRIPT type="text/javascript" src="<?php echo $this->Ini->url_lib_js; ?>jquery.fieldSelection.js"></SCRIPT>
 <?php
 if (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['embutida_pdf']))
 {
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_form<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
  <?php 
  if(isset($this->Ini->str_google_fonts) && !empty($this->Ini->str_google_fonts)) 
  { 
  ?> 
  <link href="<?php echo $this->Ini->str_google_fonts ?>" rel="stylesheet" /> 
  <?php 
  } 
  ?> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_appdiv<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" /> 
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_tab<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/buttons/<?php echo $this->Ini->Str_btn_form . '/' . $this->Ini->Str_btn_form ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_prod; ?>/third/font-awesome/css/all.min.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_calendar<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp.css" />
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>_lib/css/<?php echo $this->Ini->str_schema_all ?>_btngrp<?php echo $_SESSION['scriptcase']['reg_conf']['css_dir'] ?>.css" media="screen" />
<?php
   include_once("../_lib/css/" . $this->Ini->str_schema_all . "_tab.php");
 }
?>
 <link rel="stylesheet" type="text/css" href="<?php echo $this->Ini->path_link ?>form_mail_marketing/form_mail_marketing_<?php echo strtolower($_SESSION['scriptcase']['reg_conf']['css_dir']) ?>.css" />

<script>
var scFocusFirstErrorField = false;
var scFocusFirstErrorName  = "<?php echo $this->scFormFocusErrorName; ?>";
</script>

<?php
include_once("form_mail_marketing_mob_sajax_js.php");
?>
<script type="text/javascript">
if (document.getElementById("id_error_display_fixed"))
{
 scCenterFixedElement("id_error_display_fixed");
}
var posDispLeft = 0;
var posDispTop = 0;
var Nm_Proc_Atualiz = false;
function findPos(obj)
{
 var posCurLeft = posCurTop = 0;
 if (obj.offsetParent)
 {
  posCurLeft = obj.offsetLeft
  posCurTop = obj.offsetTop
  while (obj = obj.offsetParent)
  {
   posCurLeft += obj.offsetLeft
   posCurTop += obj.offsetTop
  }
 }
 posDispLeft = posCurLeft - 10;
 posDispTop = posCurTop + 30;
}
var Nav_permite_ret = "<?php if ($this->Nav_permite_ret) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_permite_ava = "<?php if ($this->Nav_permite_ava) { echo 'S'; } else { echo 'N'; } ?>";
var Nav_binicio     = "<?php echo $this->arr_buttons['binicio']['type']; ?>";
var Nav_bavanca     = "<?php echo $this->arr_buttons['bavanca']['type']; ?>";
var Nav_bretorna    = "<?php echo $this->arr_buttons['bretorna']['type']; ?>";
var Nav_bfinal      = "<?php echo $this->arr_buttons['bfinal']['type']; ?>";
function nav_atualiza(str_ret, str_ava, str_pos)
{
<?php
 if (isset($this->NM_btn_navega) && 'N' == $this->NM_btn_navega)
 {
     echo " return;";
 }
 else
 {
?>
 if ('S' == str_ret)
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['first'] == "on")
    {
?>
       $("#sc_b_ini_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['back'] == "on")
    {
?>
       $("#sc_b_ret_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
 if ('S' == str_ava)
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", false).removeClass("disabled");
<?php
    }
?>
 }
 else
 {
<?php
    if ($this->nmgp_botoes['last'] == "on")
    {
?>
       $("#sc_b_fim_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
    if ($this->nmgp_botoes['forward'] == "on")
    {
?>
       $("#sc_b_avc_" + str_pos).prop("disabled", true).addClass("disabled");
<?php
    }
?>
 }
<?php
  }
?>
}
function nav_liga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' == sImg.substr(sImg.length - 4))
 {
  sImg = sImg.substr(0, sImg.length - 4);
 }
 sImg += sExt;
}
function nav_desliga_img()
{
 sExt = sImg.substr(sImg.length - 4);
 sImg = sImg.substr(0, sImg.length - 4);
 if ('_off' != sImg.substr(sImg.length - 4))
 {
  sImg += '_off';
 }
 sImg += sExt;
}
function summary_atualiza(reg_ini, reg_qtd, reg_tot)
{
    nm_sumario = "[<?php echo substr($this->Ini->Nm_lang['lang_othr_smry_info'], strpos($this->Ini->Nm_lang['lang_othr_smry_info'], "?final?")) ?>]";
    nm_sumario = nm_sumario.replace("?final?", reg_qtd);
    nm_sumario = nm_sumario.replace("?total?", reg_tot);
    if (reg_qtd < 1) {
        nm_sumario = "";
    }
    if (document.getElementById("sc_b_summary_b")) document.getElementById("sc_b_summary_b").innerHTML = nm_sumario;
}
<?php

include_once('form_mail_marketing_mob_jquery.php');

?>
var applicationKeys = "";
applicationKeys += "ctrl+shift+right";
applicationKeys += ",";
applicationKeys += "ctrl+shift+left";
applicationKeys += ",";
applicationKeys += "ctrl+right";
applicationKeys += ",";
applicationKeys += "ctrl+left";
applicationKeys += ",";
applicationKeys += "alt+q";
applicationKeys += ",";
applicationKeys += "escape";
applicationKeys += ",";
applicationKeys += "ctrl+enter";
applicationKeys += ",";
applicationKeys += "ctrl+s";
applicationKeys += ",";
applicationKeys += "ctrl+delete";
applicationKeys += ",";
applicationKeys += "f1";
applicationKeys += ",";
applicationKeys += "ctrl+shift+c";

var hotkeyList = "";

function execHotKey(e, h) {
    var hotkey_fired = false;
  switch (true) {
    case (["ctrl+shift+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_fim");
      break;
    case (["ctrl+shift+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ini");
      break;
    case (["ctrl+right"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ava");
      break;
    case (["ctrl+left"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_ret");
      break;
    case (["alt+q"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_sai");
      break;
    case (["escape"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_cnl");
      break;
    case (["ctrl+enter"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_inc");
      break;
    case (["ctrl+s"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_alt");
      break;
    case (["ctrl+delete"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_exc");
      break;
    case (["f1"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_webh");
      break;
    case (["ctrl+shift+c"].indexOf(h.key) > -1):
      hotkey_fired = process_hotkeys("sys_format_copy");
      break;
    default:
      return true;
  }
  if (hotkey_fired) {
        e.preventDefault();
        return false;
    } else {
        return true;
    }
}
</script>
<script type="text/javascript" src="../_lib/lib/js/hotkeys.inc.js"></script>
<script type="text/javascript" src="../_lib/lib/js/hotkeys_setup.js"></script>
<script type="text/javascript" src="../_lib/lib/js/frameControl.js"></script>
<script type="text/javascript">
function process_hotkeys(hotkey)
{
  if (hotkey == "sys_format_fim") {
    if (typeof scBtnFn_sys_format_fim !== "undefined" && typeof scBtnFn_sys_format_fim === "function") {
      scBtnFn_sys_format_fim();
        return true;
    }
  }
  if (hotkey == "sys_format_ini") {
    if (typeof scBtnFn_sys_format_ini !== "undefined" && typeof scBtnFn_sys_format_ini === "function") {
      scBtnFn_sys_format_ini();
        return true;
    }
  }
  if (hotkey == "sys_format_ava") {
    if (typeof scBtnFn_sys_format_ava !== "undefined" && typeof scBtnFn_sys_format_ava === "function") {
      scBtnFn_sys_format_ava();
        return true;
    }
  }
  if (hotkey == "sys_format_ret") {
    if (typeof scBtnFn_sys_format_ret !== "undefined" && typeof scBtnFn_sys_format_ret === "function") {
      scBtnFn_sys_format_ret();
        return true;
    }
  }
  if (hotkey == "sys_format_sai") {
    if (typeof scBtnFn_sys_format_sai !== "undefined" && typeof scBtnFn_sys_format_sai === "function") {
      scBtnFn_sys_format_sai();
        return true;
    }
  }
  if (hotkey == "sys_format_cnl") {
    if (typeof scBtnFn_sys_format_cnl !== "undefined" && typeof scBtnFn_sys_format_cnl === "function") {
      scBtnFn_sys_format_cnl();
        return true;
    }
  }
  if (hotkey == "sys_format_inc") {
    if (typeof scBtnFn_sys_format_inc !== "undefined" && typeof scBtnFn_sys_format_inc === "function") {
      scBtnFn_sys_format_inc();
        return true;
    }
  }
  if (hotkey == "sys_format_alt") {
    if (typeof scBtnFn_sys_format_alt !== "undefined" && typeof scBtnFn_sys_format_alt === "function") {
      scBtnFn_sys_format_alt();
        return true;
    }
  }
  if (hotkey == "sys_format_exc") {
    if (typeof scBtnFn_sys_format_exc !== "undefined" && typeof scBtnFn_sys_format_exc === "function") {
      scBtnFn_sys_format_exc();
        return true;
    }
  }
  if (hotkey == "sys_format_webh") {
    if (typeof scBtnFn_sys_format_webh !== "undefined" && typeof scBtnFn_sys_format_webh === "function") {
      scBtnFn_sys_format_webh();
        return true;
    }
  }
  if (hotkey == "sys_format_copy") {
    if (typeof scBtnFn_sys_format_copy !== "undefined" && typeof scBtnFn_sys_format_copy === "function") {
      scBtnFn_sys_format_copy();
        return true;
    }
  }
    return false;
}

 var scQSInit = true;
 var scQSPos  = {};
 var Dyn_Ini  = true;
 $(function() {

  $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
     $(".scBtnGrpClick").mouseup(function(){
          event.preventDefault();
          if(event.target !== event.currentTarget) return;
          if($(this).find("a").prop('href') != '')
          {
              $(this).find("a").click();
          }
          else
          {
              eval($(this).find("a").prop('onclick'));
          }
  });
  scJQElementsAdd('');

  scJQGeneralAdd();

  $('#SC_fast_search_t').keyup(function(e) {
   scQuickSearchKeyUp('t', e);
  });

  $(document).bind('drop dragover', function (e) {
      e.preventDefault();
  });

  var i, iTestWidth, iMaxLabelWidth = 0, $labelList = $(".scUiLabelWidthFix");
  for (i = 0; i < $labelList.length; i++) {
    iTestWidth = $($labelList[i]).width();
    sTestWidth = iTestWidth + "";
    if ("" == iTestWidth) {
      iTestWidth = 0;
    }
    else if ("px" == sTestWidth.substr(sTestWidth.length - 2)) {
      iTestWidth = parseInt(sTestWidth.substr(0, sTestWidth.length - 2));
    }
    iMaxLabelWidth = Math.max(iMaxLabelWidth, iTestWidth);
  }
  if (0 < iMaxLabelWidth) {
    $(".scUiLabelWidthFix").css("width", iMaxLabelWidth + "px");
  }
<?php
if (!$this->NM_ajax_flag && isset($this->NM_non_ajax_info['ajaxJavascript']) && !empty($this->NM_non_ajax_info['ajaxJavascript']))
{
    foreach ($this->NM_non_ajax_info['ajaxJavascript'] as $aFnData)
    {
?>
  <?php echo $aFnData[0]; ?>(<?php echo implode(', ', $aFnData[1]); ?>);

<?php
    }
}
?>
 });

   $(window).on('load', function() {
     scQuickSearchInit(false, '');
     if (document.getElementById('SC_fast_search_t')) {
         scQuickSearchKeyUp('t', null);
     }
     scQSInit = false;
   });
   function SC_btn_grp_text() {
      $(".scBtnGrpText").mouseover(function() { $(this).addClass("scBtnGrpTextOver"); }).mouseout(function() { $(this).removeClass("scBtnGrpTextOver"); });
   };
   function scQuickSearchSubmit_t() {
     nm_move('fast_search', 't');
   }

   function scQuickSearchInit(bPosOnly, sPos) {
     if (!bPosOnly) {
       if (document.getElementById('SC_fast_search_t')) {
           if ('' == sPos || 't' == sPos) {
               scQuickSearchSize('SC_fast_search_t', 'SC_fast_search_close_t', 'SC_fast_search_submit_t', 'quicksearchph_t');
           }
       }
     }
   }
   var fixedQuickSearchSize = {};
   function scQuickSearchSize(sIdInput, sIdClose, sIdSubmit, sPlaceHolder) {
     if ("boolean" == typeof fixedQuickSearchSize[sIdInput] && fixedQuickSearchSize[sIdInput]) {
       return;
     }
     var oInput = $('#' + sIdInput),
         oClose = $('#' + sIdClose),
         oSubmit = $('#' + sIdSubmit),
         oPlace = $('#' + sPlaceHolder),
         iInputP = parseInt(oInput.css('padding-right')) || 0,
         iInputB = parseInt(oInput.css('border-right-width')) || 0,
         iInputW = oInput.outerWidth(),
         iPlaceW = oPlace.outerWidth(),
         oInputO = oInput.offset(),
         oPlaceO = oPlace.offset(),
         iNewRight;
     iNewRight = (iPlaceW - iInputW) - (oInputO.left - oPlaceO.left) + iInputB + 1;
     oInput.css({
       'padding-right': iInputP + 16 + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px'
     });
     if (0 != oInput.height()) {
       oInput.css({
         'height': Math.max(oInput.height(), 16) + 'px',
       });
     }
     oClose.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
     oSubmit.css({
       'right': iNewRight + <?php echo $this->Ini->Str_qs_image_padding ?> + 'px',
       'cursor': 'pointer'
     });
     fixedQuickSearchSize[sIdInput] = true;
   }
   function scQuickSearchKeyUp(sPos, e) {
     if ('' != scQSInitVal && $('#SC_fast_search_' + sPos).val() == scQSInitVal && scQSInit) {
       $('#SC_fast_search_close_' + sPos).show();
       $('#SC_fast_search_submit_' + sPos).hide();
     }
     else {
       $('#SC_fast_search_close_' + sPos).hide();
       $('#SC_fast_search_submit_' + sPos).show();
     }
     if (null != e) {
       var keyPressed = e.charCode || e.keyCode || e.which;
       if (13 == keyPressed) {
         if ('t' == sPos) scQuickSearchSubmit_t();
       }
     }
   }
 if($(".sc-ui-block-control").length) {
  preloadBlock = new Image();
  preloadBlock.src = "<?php echo $this->Ini->path_icones; ?>/" + sc_blockExp;
 }

 var show_block = {
  
 };

 function toggleBlock(e) {
  var block = e.data.block,
      block_id = $(block).attr("id");
      block_img = $("#" + block_id + " .sc-ui-block-control");

  if (1 >= block.rows.length) {
   return;
  }

  show_block[block_id] = !show_block[block_id];

  if (show_block[block_id]) {
    $(block).css("height", "100%");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockCol));
  }
  else {
    $(block).css("height", "");
    if (block_img.length) block_img.attr("src", changeImgName(block_img.attr("src"), sc_blockExp));
  }

  for (var i = 1; i < block.rows.length; i++) {
   if (show_block[block_id])
    $(block.rows[i]).show();
   else
    $(block.rows[i]).hide();
  }

  if (show_block[block_id]) {
  }
 }

 function changeImgName(imgOld, imgNew) {
   var aOld = imgOld.split("/");
   aOld.pop();
   aOld.push(imgNew);
   return aOld.join("/");
 }

</script>
</HEAD>
<?php
$str_iframe_body = ('F' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] || 'R' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe']) ? 'margin: 2px;' : '';
 if (isset($_SESSION['nm_aba_bg_color']))
 {
     $this->Ini->cor_bg_grid = $_SESSION['nm_aba_bg_color'];
     $this->Ini->img_fun_pag = $_SESSION['nm_aba_bg_img'];
 }
if ($GLOBALS["erro_incl"] == 1)
{
    $this->nmgp_opcao = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['opc_ant'] = "novo";
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['recarga'] = "novo";
}
if (empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['recarga']))
{
    $opcao_botoes = $this->nmgp_opcao;
}
else
{
    $opcao_botoes = $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['recarga'];
}
    $remove_margin = isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['remove_margin']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['remove_margin'] ? 'margin: 0; ' : '';
?>
<body class="scFormPage" style="<?php echo $remove_margin . $str_iframe_body; ?>">
<?php

if (isset($_SESSION['scriptcase']['form_mail_marketing']['error_buffer']) && '' != $_SESSION['scriptcase']['form_mail_marketing']['error_buffer'])
{
    echo $_SESSION['scriptcase']['form_mail_marketing']['error_buffer'];
}
elseif (!isset($this->NM_ajax_info['param']['buffer_output']) || !$this->NM_ajax_info['param']['buffer_output'])
{
    echo $sOBContents;
}

?>
<div id="idJSSpecChar" style="display: none;"></div>
<script type="text/javascript">
function NM_tp_critica(TP)
{
    if (TP == 0 || TP == 1 || TP == 2)
    {
        nmdg_tipo_crit = TP;
    }
}
</script> 
<?php
 include_once("form_mail_marketing_mob_js0.php");
?>
<script type="text/javascript"> 
 function setLocale(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_idioma_novo.value = sLocale;
 }
 function setSchema(oSel)
 {
  var sLocale = "";
  if (-1 < oSel.selectedIndex)
  {
   sLocale = oSel.options[oSel.selectedIndex].value;
  }
  document.F1.nmgp_schema_f.value = sLocale;
 }
var scInsertFieldWithErrors = new Array();
<?php
foreach ($this->NM_ajax_info['fieldsWithErrors'] as $insertFieldName) {
?>
scInsertFieldWithErrors.push("<?php echo $insertFieldName; ?>");
<?php
}
?>
$(function() {
	scAjaxError_markFieldList(scInsertFieldWithErrors);
});
 </script>
<form  name="F1" method="post" 
               action="form_mail_marketing_mob.php" 
               target="_self">
<input type="hidden" name="nmgp_url_saida" value="">
<?php
if ('novo' == $this->nmgp_opcao || 'incluir' == $this->nmgp_opcao)
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['insert_validation'] = md5(time() . rand(1, 99999));
?>
<input type="hidden" name="nmgp_ins_valid" value="<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['insert_validation']; ?>">
<?php
}
?>
<input type="hidden" name="nm_form_submit" value="1">
<input type="hidden" name="nmgp_idioma_novo" value="">
<input type="hidden" name="nmgp_schema_f" value="">
<input type="hidden" name="nmgp_opcao" value="">
<input type="hidden" name="nmgp_ancora" value="">
<input type="hidden" name="nmgp_num_form" value="<?php  echo $this->form_encode_input($nmgp_num_form); ?>">
<input type="hidden" name="nmgp_parms" value="">
<input type="hidden" name="script_case_init" value="<?php  echo $this->form_encode_input($this->Ini->sc_page); ?>">
<input type="hidden" name="script_case_session" value="<?php  echo $this->form_encode_input(session_id()); ?>">
<input type="hidden" name="NM_cancel_return_new" value="<?php echo $this->NM_cancel_return_new ?>">
<input type="hidden" name="csrf_token" value="<?php echo $this->scCsrfGetToken() ?>" />
<input type="hidden" name="_sc_force_mobile" id="sc-id-mobile-control" value="" />
<?php
$_SESSION['scriptcase']['error_span_title']['form_mail_marketing_mob'] = $this->Ini->Error_icon_span;
$_SESSION['scriptcase']['error_icon_title']['form_mail_marketing_mob'] = '' != $this->Ini->Err_ico_title ? $this->Ini->path_icones . '/' . $this->Ini->Err_ico_title : '';
?>
<div style="display: none; position: absolute; z-index: 1000" id="id_error_display_table_frame">
<table class="scFormErrorTable scFormToastTable">
<tr><?php if ($this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><td style="padding: 0px" rowspan="2"><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top"></td><?php } ?><td class="scFormErrorTitle scFormToastTitle"><table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormErrorTitleFont" style="padding: 0px; vertical-align: top; width: 100%"><?php if (!$this->Ini->Error_icon_span && '' != $this->Ini->Err_ico_title) { ?><img src="<?php echo $this->Ini->path_icones; ?>/<?php echo $this->Ini->Err_ico_title; ?>" style="border-width: 0px" align="top">&nbsp;<?php } ?><?php echo $this->Ini->Nm_lang['lang_errm_errt'] ?></td><td style="padding: 0px; vertical-align: top"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideErrorDisplay('table')", "scAjaxHideErrorDisplay('table')", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
</td></tr></table></td></tr>
<tr><td class="scFormErrorMessage scFormToastMessage"><span id="id_error_display_table_text"></span></td></tr>
</table>
</div>
<div style="display: none; position: absolute; z-index: 1000" id="id_message_display_frame">
 <table class="scFormMessageTable" id="id_message_display_content" style="width: 100%">
  <tr id="id_message_display_title_line">
   <td class="scFormMessageTitle" style="height: 20px"><?php
if ('' != $this->Ini->Msg_ico_title) {
?>
<img src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_title; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<?php echo nmButtonOutput($this->arr_buttons, "bmessageclose", "_scAjaxMessageBtnClose()", "_scAjaxMessageBtnClose()", "id_message_display_close_icon", "", "", "float: right", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
<span id="id_message_display_title" style="vertical-align: middle"></span></td>
  </tr>
  <tr>
   <td class="scFormMessageMessage"><?php
if ('' != $this->Ini->Msg_ico_body) {
?>
<img id="id_message_display_body_icon" src="<?php echo $this->Ini->path_icones . '/' . $this->Ini->Msg_ico_body; ?>" style="border-width: 0px; vertical-align: middle">&nbsp;<?php
}
?>
<span id="id_message_display_text"></span><div id="id_message_display_buttond" style="display: none; text-align: center"><br /><input id="id_message_display_buttone" type="button" class="scButton_default" value="Ok" onClick="_scAjaxMessageBtnClick()" ></div></td>
  </tr>
 </table>
</div>
<?php
$msgDefClose = isset($this->arr_buttons['bmessageclose']) ? $this->arr_buttons['bmessageclose']['value'] : 'Ok';
?>
<script type="text/javascript">
var scMsgDefTitle = "<?php echo $this->Ini->Nm_lang['lang_usr_lang_othr_msgs_titl']; ?>";
var scMsgDefButton = "Ok";
var scMsgDefClose = "<?php echo $msgDefClose; ?>";
var scMsgDefClick = "close";
var scMsgDefScInit = "<?php echo $this->Ini->page; ?>";
</script>
<?php
if ($this->record_insert_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmi']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
if ($this->record_delete_ok)
{
?>
<script type="text/javascript">
if (typeof sc_userSweetAlertDisplayed === "undefined" || !sc_userSweetAlertDisplayed) {
    _scAjaxShowMessage({message: "<?php echo $this->form_encode_input($this->Ini->Nm_lang['lang_othr_ajax_frmd']) ?>", title: "", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: true, type: "success"});
}
sc_userSweetAlertDisplayed = false;
</script>
<?php
}
?>
<table id="main_table_form"  align="center" cellpadding=0 cellspacing=0 >
 <tr>
  <td>
  <div class="scFormBorder">
   <table width='100%' cellspacing=0 cellpadding=0>
<?php
  if (!$this->Embutida_call && (!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['mostra_cab']) || $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['mostra_cab'] != "N") && (!$_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['under_dashboard'] || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['compact_mode'] || $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['maximized']))
  {
?>
<tr><td>
<style>
    .scMenuTHeaderFont img, .scGridHeaderFont img , .scFormHeaderFont img , .scTabHeaderFont img , .scContainerHeaderFont img , .scFilterHeaderFont img { height:23px;}
</style>
<div class="scFormHeader" style="height: 54px; padding: 17px 15px; box-sizing: border-box;margin: -1px 0px 0px 0px;width: 100%;">
    <div class="scFormHeaderFont" style="float: left; text-transform: uppercase;"><?php if ($this->nmgp_opcao == "novo") { echo "" . $this->Ini->Nm_lang['lang_othr_frmi_title'] . " mail_marketing"; } else { echo "" . $this->Ini->Nm_lang['lang_othr_frmu_title'] . " mail_marketing"; } ?></div>
    <div class="scFormHeaderFont" style="float: right;"><?php echo date($this->dateDefaultFormat()); ?></div>
</div></td></tr>
<?php
  }
?>
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
      if ($this->nmgp_botoes['qsearch'] == "on" && $opcao_botoes != "novo")
      {
          $OPC_cmp = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['fast_search'][0] : "";
          $OPC_arg = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['fast_search'][1] : "";
          $OPC_dat = (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['fast_search'])) ? $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['fast_search'][2] : "";
?> 
           <script type="text/javascript">var change_fast_t = "";</script>
          <input type="hidden" name="nmgp_fast_search_t" value="SC_all_Cmp">
          <input type="hidden" name="nmgp_cond_fast_search_t" value="qp">
          <script type="text/javascript">var scQSInitVal = "<?php echo $OPC_dat ?>";</script>
          <span id="quicksearchph_t">
           <input type="text" id="SC_fast_search_t" class="scFormToolbarInput" style="vertical-align: middle" name="nmgp_arg_fast_search_t" value="<?php echo $this->form_encode_input($OPC_dat) ?>" size="10" onChange="change_fast_t = 'CH';" alt="{maxLength: 255}" placeholder="<?php echo $this->Ini->Nm_lang['lang_othr_qk_watermark'] ?>">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_close_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_clean; ?>" onclick="document.getElementById('SC_fast_search_t').value = '__Clear_Fast__'; nm_move('fast_search', 't');">
           <img style="position: absolute; display: none; height: 16px; width: 16px" id="SC_fast_search_submit_t" src="<?php echo $this->Ini->path_botoes ?>/<?php echo $this->Ini->Img_qs_search; ?>" onclick="scQuickSearchSubmit_t();">
          </span>
<?php 
      }
        $sCondStyle = ($this->nmgp_botoes['new'] != 'off' || $this->nmgp_botoes['insert'] != 'off' || $this->nmgp_botoes['exit'] != 'off' || $this->nmgp_botoes['update'] != 'off' || $this->nmgp_botoes['delete'] != 'off' || $this->nmgp_botoes['copy'] != 'off') ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "group_group_2", "scBtnGrpShow('group_2_t')", "scBtnGrpShow('group_2_t')", "sc_btgp_btn_group_2_t", "", "" . $this->Ini->Nm_lang['lang_btns_options'] . "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "" . $this->Ini->Nm_lang['lang_btns_options'] . "", "", "", "__sc_grp__");?>
 
<?php
        $NM_btn = true;
echo nmButtonGroupTableOutput($this->arr_buttons, "group_group_2", 'group_2', 't', '', 'ini');
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['new'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_new_t">
<?php echo nmButtonOutput($this->arr_buttons, "bnovo", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_new_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "sc-unique-btn-15", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_ins_t">
<?php echo nmButtonOutput($this->arr_buttons, "bincluir", "scBtnFn_sys_format_inc()", "scBtnFn_sys_format_inc()", "sc_b_ins_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Enter)", "sc-unique-btn-16", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!$this->Embutida_call || $this->sc_evento == "novo" || $this->sc_evento == "insert" || $this->sc_evento == "incluir")) {
        $sCondStyle = ($this->nmgp_botoes['insert'] == "on" && $this->nmgp_botoes['cancel'] == "on") && ($this->nm_flag_saida_novo != "S" || $this->nmgp_botoes['exit'] != "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_sai_t">
<?php echo nmButtonOutput($this->arr_buttons, "bcancelar", "scBtnFn_sys_format_cnl()", "scBtnFn_sys_format_cnl()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Escape)", "sc-unique-btn-17", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['update'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_upd_t">
<?php echo nmButtonOutput($this->arr_buttons, "balterar", "scBtnFn_sys_format_alt()", "scBtnFn_sys_format_alt()", "sc_b_upd_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + S)", "sc-unique-btn-18", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['delete'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_del_t">
<?php echo nmButtonOutput($this->arr_buttons, "bexcluir", "scBtnFn_sys_format_exc()", "scBtnFn_sys_format_exc()", "sc_b_del_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Delete)", "sc-unique-btn-19", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
        $sCondStyle = '';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sys_separator">
 </td></tr><tr><td class="scBtnGrpBackground">
  </div>
 
<?php
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['copy'] == "on") ? '' : 'display: none;';
?>
         <div class="scBtnGrpText scBtnGrpClick"  style="<?php echo $sCondStyle; ?>" id="gbl_sc_b_clone_t">
<?php echo nmButtonOutput($this->arr_buttons, "bcopy", "scBtnFn_sys_format_copy()", "scBtnFn_sys_format_copy()", "sc_b_clone_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Shift + C)", "sc-unique-btn-21", "", "group_2");?>
  </div>
 
<?php
        $NM_btn = true;
    }
echo nmButtonGroupTableOutput($this->arr_buttons, "", '', '', '', 'fim');
    if ('' != $this->url_webhelp) {
        $sCondStyle = '';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bhelp", "scBtnFn_sys_format_hlp()", "scBtnFn_sys_format_hlp()", "sc_b_hlp_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (F1)", "", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && ($nm_apl_dependente != 1 || $this->nm_Start_new) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = (($this->nm_flag_saida_novo == "S" || ($this->nm_Start_new && !$this->aba_iframe)) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-22", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes == "novo") && (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] == "R") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['under_dashboard']))) {
        $sCondStyle = ($this->nm_flag_saida_novo == "S" && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-23", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (isset($_SESSION['scriptcase']['nm_sc_retorno']) && !empty($_SESSION['scriptcase']['nm_sc_retorno']) && $nm_apl_dependente != 1 && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "R" && !$this->aba_iframe && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "sc-unique-btn-24", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente == 1 && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bvoltar", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "", "sc-unique-btn-25", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if (($opcao_botoes != "novo") && (!$this->Embutida_call) && ((!isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['under_dashboard']) || !$_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['under_dashboard'] || (isset($this->is_calendar_app) && $this->is_calendar_app)))) {
        $sCondStyle = (!isset($_SESSION['scriptcase']['nm_sc_retorno']) || empty($_SESSION['scriptcase']['nm_sc_retorno']) || $nm_apl_dependente == 1 || $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] == "F" || $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] == "R" || $this->aba_iframe || $this->nmgp_botoes['exit'] != "on") && ($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "F" && $this->nmgp_botoes['exit'] == "on") && ($nm_apl_dependente != 1 || $this->nmgp_botoes['exit'] != "on") && ((!$this->aba_iframe || $this->is_calendar_app) && $this->nmgp_botoes['exit'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bsair", "scBtnFn_sys_format_sai()", "scBtnFn_sys_format_sai()", "sc_b_sai_t", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Alt + Q)", "sc-unique-btn-26", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 't');</script><?php } ?>
</td></tr> 
<tr><td>
<?php
       echo "<div id=\"sc-ui-empty-form\" class=\"scFormPageText\" style=\"padding: 10px; text-align: center; font-weight: bold" . ($this->nmgp_form_empty ? '' : '; display: none') . "\">";
       echo $this->Ini->Nm_lang['lang_errm_empt'];
       echo "</div>";
  if ($this->nmgp_form_empty)
  {
       if (!empty($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['where_filter']))
       {
           $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['empty_filter'] = true;
       }
  }
?>
<?php $sc_hidden_no = 1; $sc_hidden_yes = 0; ?>
   <a name="bloco_0"></a>
   <table width="100%" height="100%" cellpadding="0" cellspacing=0><tr valign="top"><td width="100%" height="">
<div id="div_hidden_bloco_0"><!-- bloco_c -->
<?php
?>
<TABLE align="center" id="hidden_bloco_0" class="scFormTable" width="100%" style="height: 100%;"><?php
           if ('novo' != $this->nmgp_opcao && !isset($this->nmgp_cmp_readonly['idmail_marketing']))
           {
               $this->nmgp_cmp_readonly['idmail_marketing'] = 'on';
           }
?>
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['idmail_marketing']))
    {
        $this->nm_new_label['idmail_marketing'] = "Idmail Marketing";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $idmail_marketing = $this->idmail_marketing;
   $sStyleHidden_idmail_marketing = '';
   if (isset($this->nmgp_cmp_hidden['idmail_marketing']) && $this->nmgp_cmp_hidden['idmail_marketing'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['idmail_marketing']);
       $sStyleHidden_idmail_marketing = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_idmail_marketing = 'display: none;';
   $sStyleReadInp_idmail_marketing = '';
   if (/*($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir") || */(isset($this->nmgp_cmp_readonly["idmail_marketing"]) &&  $this->nmgp_cmp_readonly["idmail_marketing"] == "on"))
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['idmail_marketing']);
       $sStyleReadLab_idmail_marketing = '';
       $sStyleReadInp_idmail_marketing = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['idmail_marketing']) && $this->nmgp_cmp_hidden['idmail_marketing'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="idmail_marketing" value="<?php echo $this->form_encode_input($idmail_marketing) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>
<?php if ((isset($this->Embutida_form) && $this->Embutida_form) || ($this->nmgp_opcao != "novo" && $this->nmgp_opc_ant != "incluir")) { ?>

    <TD class="scFormDataOdd css_idmail_marketing_line" id="hidden_field_data_idmail_marketing" style="<?php echo $sStyleHidden_idmail_marketing; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_idmail_marketing_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_idmail_marketing_label"><span id="id_label_idmail_marketing"><?php echo $this->nm_new_label['idmail_marketing']; ?></span></span><br><span id="id_read_on_idmail_marketing" class="css_idmail_marketing_line" style="<?php echo $sStyleReadLab_idmail_marketing; ?>"><?php echo $this->form_encode_input($this->idmail_marketing); ?></span><span id="id_read_off_idmail_marketing" class="css_read_off_idmail_marketing" style="<?php echo $sStyleReadInp_idmail_marketing; ?>"><input type="hidden" name="idmail_marketing" value="<?php echo $this->form_encode_input($idmail_marketing) . "\">"?><span id="id_ajax_label_idmail_marketing"><?php echo nl2br($idmail_marketing); ?></span>
</span></span></td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_idmail_marketing_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_idmail_marketing_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }
      else
      {
         $sc_hidden_no--;
      }
?>
<?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mail_marketing_campanha']))
    {
        $this->nm_new_label['mail_marketing_campanha'] = "Mail Marketing Campanha";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mail_marketing_campanha = $this->mail_marketing_campanha;
   $sStyleHidden_mail_marketing_campanha = '';
   if (isset($this->nmgp_cmp_hidden['mail_marketing_campanha']) && $this->nmgp_cmp_hidden['mail_marketing_campanha'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mail_marketing_campanha']);
       $sStyleHidden_mail_marketing_campanha = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mail_marketing_campanha = 'display: none;';
   $sStyleReadInp_mail_marketing_campanha = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mail_marketing_campanha']) && $this->nmgp_cmp_readonly['mail_marketing_campanha'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mail_marketing_campanha']);
       $sStyleReadLab_mail_marketing_campanha = '';
       $sStyleReadInp_mail_marketing_campanha = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mail_marketing_campanha']) && $this->nmgp_cmp_hidden['mail_marketing_campanha'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mail_marketing_campanha" value="<?php echo $this->form_encode_input($mail_marketing_campanha) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mail_marketing_campanha_line" id="hidden_field_data_mail_marketing_campanha" style="<?php echo $sStyleHidden_mail_marketing_campanha; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mail_marketing_campanha_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mail_marketing_campanha_label"><span id="id_label_mail_marketing_campanha"><?php echo $this->nm_new_label['mail_marketing_campanha']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mail_marketing_campanha"]) &&  $this->nmgp_cmp_readonly["mail_marketing_campanha"] == "on") { 

 ?>
<input type="hidden" name="mail_marketing_campanha" value="<?php echo $this->form_encode_input($mail_marketing_campanha) . "\">" . $mail_marketing_campanha . ""; ?>
<?php } else { ?>
<span id="id_read_on_mail_marketing_campanha" class="sc-ui-readonly-mail_marketing_campanha css_mail_marketing_campanha_line" style="<?php echo $sStyleReadLab_mail_marketing_campanha; ?>"><?php echo $this->mail_marketing_campanha; ?></span><span id="id_read_off_mail_marketing_campanha" class="css_read_off_mail_marketing_campanha" style="white-space: nowrap;<?php echo $sStyleReadInp_mail_marketing_campanha; ?>">
 <input class="sc-js-input scFormObjectOdd css_mail_marketing_campanha_obj" style="" id="id_sc_field_mail_marketing_campanha" type=text name="mail_marketing_campanha" value="<?php echo $this->form_encode_input($mail_marketing_campanha) ?>"
 size=50 maxlength=255 alt="{datatype: 'text', maxLength: 255, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mail_marketing_campanha_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mail_marketing_campanha_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mail_marketing_emitente']))
    {
        $this->nm_new_label['mail_marketing_emitente'] = "Mail Marketing Emitente";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mail_marketing_emitente = $this->mail_marketing_emitente;
   $sStyleHidden_mail_marketing_emitente = '';
   if (isset($this->nmgp_cmp_hidden['mail_marketing_emitente']) && $this->nmgp_cmp_hidden['mail_marketing_emitente'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mail_marketing_emitente']);
       $sStyleHidden_mail_marketing_emitente = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mail_marketing_emitente = 'display: none;';
   $sStyleReadInp_mail_marketing_emitente = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mail_marketing_emitente']) && $this->nmgp_cmp_readonly['mail_marketing_emitente'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mail_marketing_emitente']);
       $sStyleReadLab_mail_marketing_emitente = '';
       $sStyleReadInp_mail_marketing_emitente = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mail_marketing_emitente']) && $this->nmgp_cmp_hidden['mail_marketing_emitente'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mail_marketing_emitente" value="<?php echo $this->form_encode_input($mail_marketing_emitente) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mail_marketing_emitente_line" id="hidden_field_data_mail_marketing_emitente" style="<?php echo $sStyleHidden_mail_marketing_emitente; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mail_marketing_emitente_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mail_marketing_emitente_label"><span id="id_label_mail_marketing_emitente"><?php echo $this->nm_new_label['mail_marketing_emitente']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mail_marketing_emitente"]) &&  $this->nmgp_cmp_readonly["mail_marketing_emitente"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_emitente']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_emitente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_emitente']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_emitente'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_emitente']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_emitente'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_emitente']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_emitente'] = array(); 
    }

   $old_value_idmail_marketing = $this->idmail_marketing;
   $old_value_mail_marketing_iniciar_quando = $this->mail_marketing_iniciar_quando;
   $old_value_mail_marketing_iniciar_quando_hora = $this->mail_marketing_iniciar_quando_hora;
   $old_value_mail_marketing_terminar_quando = $this->mail_marketing_terminar_quando;
   $old_value_mail_marketing_terminar_quando_hora = $this->mail_marketing_terminar_quando_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_idmail_marketing = $this->idmail_marketing;
   $unformatted_value_mail_marketing_iniciar_quando = $this->mail_marketing_iniciar_quando;
   $unformatted_value_mail_marketing_iniciar_quando_hora = $this->mail_marketing_iniciar_quando_hora;
   $unformatted_value_mail_marketing_terminar_quando = $this->mail_marketing_terminar_quando;
   $unformatted_value_mail_marketing_terminar_quando_hora = $this->mail_marketing_terminar_quando_hora;

   $nm_comando = "SELECT idmail_meio, mail_descreva  FROM mail_meio  ORDER BY mail_descreva";

   $this->idmail_marketing = $old_value_idmail_marketing;
   $this->mail_marketing_iniciar_quando = $old_value_mail_marketing_iniciar_quando;
   $this->mail_marketing_iniciar_quando_hora = $old_value_mail_marketing_iniciar_quando_hora;
   $this->mail_marketing_terminar_quando = $old_value_mail_marketing_terminar_quando;
   $this->mail_marketing_terminar_quando_hora = $old_value_mail_marketing_terminar_quando_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_emitente'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $mail_marketing_emitente_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->mail_marketing_emitente_1))
          {
              foreach ($this->mail_marketing_emitente_1 as $tmp_mail_marketing_emitente)
              {
                  if (trim($tmp_mail_marketing_emitente) === trim($cadaselect[1])) { $mail_marketing_emitente_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->mail_marketing_emitente) === trim($cadaselect[1])) { $mail_marketing_emitente_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="mail_marketing_emitente" value="<?php echo $this->form_encode_input($mail_marketing_emitente) . "\">" . $mail_marketing_emitente_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_mail_marketing_emitente();
   $x = 0 ; 
   $mail_marketing_emitente_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->mail_marketing_emitente_1))
          {
              foreach ($this->mail_marketing_emitente_1 as $tmp_mail_marketing_emitente)
              {
                  if (trim($tmp_mail_marketing_emitente) === trim($cadaselect[1])) { $mail_marketing_emitente_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->mail_marketing_emitente) === trim($cadaselect[1])) { $mail_marketing_emitente_look .= $cadaselect[0]; } 
          $x++; 
   }
   $x = 0; 
   echo "<span id=\"id_read_on_mail_marketing_emitente\" class=\"css_mail_marketing_emitente_line\" style=\"" .  $sStyleReadLab_mail_marketing_emitente . "\">" . $this->form_encode_input($mail_marketing_emitente_look) . "</span><span id=\"id_read_off_mail_marketing_emitente\" class=\"css_read_off_mail_marketing_emitente css_mail_marketing_emitente_line\" style=\"" . $sStyleReadInp_mail_marketing_emitente . "\">";
   echo "<div id=\"idAjaxRadio_mail_marketing_emitente\" class=\"css_mail_marketing_emitente_line\" style=\"display: inline-block\">\r\n";
   $y = 0 ; 
   echo "<table cellspacing=0 cellpadding=0 border=0>\r\n";
   echo " <tr>\r\n";
   while (!empty($todo[$x])) 
   {
          $cadaradio = explode("?#?", $todo[$x]) ; 
          if ($cadaradio[1] == "@ ") {$cadaradio[1]= trim($cadaradio[1]); } ; 
          if ($y == 1)
          {
              echo " </tr>\r\n";
              echo " <tr>\r\n";
              $y = 0;
          }
          echo "  <td class=\"scFormDataFontOdd css_mail_marketing_emitente_line\">\r\n";
          $tempOptionId = "id-opt-mail_marketing_emitente-" . $x;
          echo "    <input id=\"" . $tempOptionId . "\" type=radio name=\"mail_marketing_emitente\" value=\"$cadaradio[1]\" class=\"sc-ui-radio-mail_marketing_emitente sc-ui-radio-mail_marketing_emitente\"";
          if (trim($this->mail_marketing_emitente) === trim($cadaradio[1])) 
          { 
              echo " checked" ; 
          } 
          if (strtoupper($cadaradio[2]) == "S") 
          { 
              if (empty($this->mail_marketing_emitente)) 
              { 
                  echo " checked" ; 
              } 
          } 
          echo "  onClick=\"" . $sCheckInsert . "\" >" ; 
          echo "<label for=\"" . $tempOptionId . "\">" . $cadaradio[0] . "</label>";
          $x++ ; 
          $y++ ; 
          echo "  </font></td>\r\n";
   } 
   echo " </tr>\r\n";
   echo "</table>";
   echo "</div>\r\n";
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mail_marketing_emitente_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mail_marketing_emitente_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['mail_marketing_lista']))
   {
       $this->nm_new_label['mail_marketing_lista'] = "Mail Marketing Lista";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mail_marketing_lista = $this->mail_marketing_lista;
   $sStyleHidden_mail_marketing_lista = '';
   if (isset($this->nmgp_cmp_hidden['mail_marketing_lista']) && $this->nmgp_cmp_hidden['mail_marketing_lista'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mail_marketing_lista']);
       $sStyleHidden_mail_marketing_lista = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mail_marketing_lista = 'display: none;';
   $sStyleReadInp_mail_marketing_lista = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mail_marketing_lista']) && $this->nmgp_cmp_readonly['mail_marketing_lista'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mail_marketing_lista']);
       $sStyleReadLab_mail_marketing_lista = '';
       $sStyleReadInp_mail_marketing_lista = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mail_marketing_lista']) && $this->nmgp_cmp_hidden['mail_marketing_lista'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="mail_marketing_lista" value="<?php echo $this->form_encode_input($this->mail_marketing_lista) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mail_marketing_lista_line" id="hidden_field_data_mail_marketing_lista" style="<?php echo $sStyleHidden_mail_marketing_lista; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mail_marketing_lista_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mail_marketing_lista_label"><span id="id_label_mail_marketing_lista"><?php echo $this->nm_new_label['mail_marketing_lista']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mail_marketing_lista"]) &&  $this->nmgp_cmp_readonly["mail_marketing_lista"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_lista']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_lista'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_lista']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_lista'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_lista']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_lista'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_lista']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_lista'] = array(); 
    }

   $old_value_idmail_marketing = $this->idmail_marketing;
   $old_value_mail_marketing_iniciar_quando = $this->mail_marketing_iniciar_quando;
   $old_value_mail_marketing_iniciar_quando_hora = $this->mail_marketing_iniciar_quando_hora;
   $old_value_mail_marketing_terminar_quando = $this->mail_marketing_terminar_quando;
   $old_value_mail_marketing_terminar_quando_hora = $this->mail_marketing_terminar_quando_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_idmail_marketing = $this->idmail_marketing;
   $unformatted_value_mail_marketing_iniciar_quando = $this->mail_marketing_iniciar_quando;
   $unformatted_value_mail_marketing_iniciar_quando_hora = $this->mail_marketing_iniciar_quando_hora;
   $unformatted_value_mail_marketing_terminar_quando = $this->mail_marketing_terminar_quando;
   $unformatted_value_mail_marketing_terminar_quando_hora = $this->mail_marketing_terminar_quando_hora;

   $nm_comando = "SELECT idmail_lista, mail_lista_descricao  FROM mail_lista  WHERE mail_lista_ativo = 'S' ORDER BY mail_lista_descricao";

   $this->idmail_marketing = $old_value_idmail_marketing;
   $this->mail_marketing_iniciar_quando = $old_value_mail_marketing_iniciar_quando;
   $this->mail_marketing_iniciar_quando_hora = $old_value_mail_marketing_iniciar_quando_hora;
   $this->mail_marketing_terminar_quando = $old_value_mail_marketing_terminar_quando;
   $this->mail_marketing_terminar_quando_hora = $old_value_mail_marketing_terminar_quando_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_lista'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $mail_marketing_lista_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->mail_marketing_lista_1))
          {
              foreach ($this->mail_marketing_lista_1 as $tmp_mail_marketing_lista)
              {
                  if (trim($tmp_mail_marketing_lista) === trim($cadaselect[1])) { $mail_marketing_lista_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->mail_marketing_lista) === trim($cadaselect[1])) { $mail_marketing_lista_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="mail_marketing_lista" value="<?php echo $this->form_encode_input($mail_marketing_lista) . "\">" . $mail_marketing_lista_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_mail_marketing_lista();
   $x = 0 ; 
   $mail_marketing_lista_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->mail_marketing_lista_1))
          {
              foreach ($this->mail_marketing_lista_1 as $tmp_mail_marketing_lista)
              {
                  if (trim($tmp_mail_marketing_lista) === trim($cadaselect[1])) { $mail_marketing_lista_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->mail_marketing_lista) === trim($cadaselect[1])) { $mail_marketing_lista_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($mail_marketing_lista_look))
          {
              $mail_marketing_lista_look = $this->mail_marketing_lista;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_mail_marketing_lista\" class=\"css_mail_marketing_lista_line\" style=\"" .  $sStyleReadLab_mail_marketing_lista . "\">" . $this->form_encode_input($mail_marketing_lista_look) . "</span><span id=\"id_read_off_mail_marketing_lista\" class=\"css_read_off_mail_marketing_lista\" style=\"white-space: nowrap; " . $sStyleReadInp_mail_marketing_lista . "\">";
   echo " <span id=\"idAjaxSelect_mail_marketing_lista\"><select class=\"sc-js-input scFormObjectOdd css_mail_marketing_lista_obj\" style=\"\" id=\"id_sc_field_mail_marketing_lista\" name=\"mail_marketing_lista\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->mail_marketing_lista) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->mail_marketing_lista)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mail_marketing_lista_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mail_marketing_lista_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mail_marketing_assunto']))
    {
        $this->nm_new_label['mail_marketing_assunto'] = "Mail Marketing Assunto";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mail_marketing_assunto = $this->mail_marketing_assunto;
   $sStyleHidden_mail_marketing_assunto = '';
   if (isset($this->nmgp_cmp_hidden['mail_marketing_assunto']) && $this->nmgp_cmp_hidden['mail_marketing_assunto'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mail_marketing_assunto']);
       $sStyleHidden_mail_marketing_assunto = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mail_marketing_assunto = 'display: none;';
   $sStyleReadInp_mail_marketing_assunto = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mail_marketing_assunto']) && $this->nmgp_cmp_readonly['mail_marketing_assunto'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mail_marketing_assunto']);
       $sStyleReadLab_mail_marketing_assunto = '';
       $sStyleReadInp_mail_marketing_assunto = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mail_marketing_assunto']) && $this->nmgp_cmp_hidden['mail_marketing_assunto'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mail_marketing_assunto" value="<?php echo $this->form_encode_input($mail_marketing_assunto) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mail_marketing_assunto_line" id="hidden_field_data_mail_marketing_assunto" style="<?php echo $sStyleHidden_mail_marketing_assunto; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mail_marketing_assunto_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mail_marketing_assunto_label"><span id="id_label_mail_marketing_assunto"><?php echo $this->nm_new_label['mail_marketing_assunto']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mail_marketing_assunto"]) &&  $this->nmgp_cmp_readonly["mail_marketing_assunto"] == "on") { 

 ?>
<input type="hidden" name="mail_marketing_assunto" value="<?php echo $this->form_encode_input($mail_marketing_assunto) . "\">" . $mail_marketing_assunto . ""; ?>
<?php } else { ?>
<span id="id_read_on_mail_marketing_assunto" class="sc-ui-readonly-mail_marketing_assunto css_mail_marketing_assunto_line" style="<?php echo $sStyleReadLab_mail_marketing_assunto; ?>"><?php echo $this->mail_marketing_assunto; ?></span><span id="id_read_off_mail_marketing_assunto" class="css_read_off_mail_marketing_assunto" style="white-space: nowrap;<?php echo $sStyleReadInp_mail_marketing_assunto; ?>">
 <input class="sc-js-input scFormObjectOdd css_mail_marketing_assunto_obj" style="" id="id_sc_field_mail_marketing_assunto" type=text name="mail_marketing_assunto" value="<?php echo $this->form_encode_input($mail_marketing_assunto) ?>"
 size=50 maxlength=55 alt="{datatype: 'text', maxLength: 55, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mail_marketing_assunto_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mail_marketing_assunto_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mail_marketing_imagem_cabecalho']))
    {
        $this->nm_new_label['mail_marketing_imagem_cabecalho'] = "Mail Marketing Imagem Cabecalho";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mail_marketing_imagem_cabecalho = $this->mail_marketing_imagem_cabecalho;
   $sStyleHidden_mail_marketing_imagem_cabecalho = '';
   if (isset($this->nmgp_cmp_hidden['mail_marketing_imagem_cabecalho']) && $this->nmgp_cmp_hidden['mail_marketing_imagem_cabecalho'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mail_marketing_imagem_cabecalho']);
       $sStyleHidden_mail_marketing_imagem_cabecalho = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mail_marketing_imagem_cabecalho = 'display: none;';
   $sStyleReadInp_mail_marketing_imagem_cabecalho = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mail_marketing_imagem_cabecalho']) && $this->nmgp_cmp_readonly['mail_marketing_imagem_cabecalho'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mail_marketing_imagem_cabecalho']);
       $sStyleReadLab_mail_marketing_imagem_cabecalho = '';
       $sStyleReadInp_mail_marketing_imagem_cabecalho = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mail_marketing_imagem_cabecalho']) && $this->nmgp_cmp_hidden['mail_marketing_imagem_cabecalho'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mail_marketing_imagem_cabecalho" value="<?php echo $this->form_encode_input($mail_marketing_imagem_cabecalho) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mail_marketing_imagem_cabecalho_line" id="hidden_field_data_mail_marketing_imagem_cabecalho" style="<?php echo $sStyleHidden_mail_marketing_imagem_cabecalho; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mail_marketing_imagem_cabecalho_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mail_marketing_imagem_cabecalho_label"><span id="id_label_mail_marketing_imagem_cabecalho"><?php echo $this->nm_new_label['mail_marketing_imagem_cabecalho']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mail_marketing_imagem_cabecalho"]) &&  $this->nmgp_cmp_readonly["mail_marketing_imagem_cabecalho"] == "on") { 

 ?>
<input type="hidden" name="mail_marketing_imagem_cabecalho" value="<?php echo $this->form_encode_input($mail_marketing_imagem_cabecalho) . "\">" . $mail_marketing_imagem_cabecalho . ""; ?>
<?php } else { ?>
<span id="id_read_on_mail_marketing_imagem_cabecalho" class="sc-ui-readonly-mail_marketing_imagem_cabecalho css_mail_marketing_imagem_cabecalho_line" style="<?php echo $sStyleReadLab_mail_marketing_imagem_cabecalho; ?>"><?php echo $this->mail_marketing_imagem_cabecalho; ?></span><span id="id_read_off_mail_marketing_imagem_cabecalho" class="css_read_off_mail_marketing_imagem_cabecalho" style="white-space: nowrap;<?php echo $sStyleReadInp_mail_marketing_imagem_cabecalho; ?>">
 <input class="sc-js-input scFormObjectOdd css_mail_marketing_imagem_cabecalho_obj" style="" id="id_sc_field_mail_marketing_imagem_cabecalho" type=text name="mail_marketing_imagem_cabecalho" value="<?php echo $this->form_encode_input($mail_marketing_imagem_cabecalho) ?>"
 size=50 maxlength=255 alt="{enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >&nbsp;<?php echo nmButtonOutput($this->arr_buttons, "blink", "window.open(nm_link_url(document.F1.mail_marketing_imagem_cabecalho.value), '_blank')", "window.open(nm_link_url(document.F1.mail_marketing_imagem_cabecalho.value), '_blank')", "mail_marketing_imagem_cabecalho_url", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>

</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mail_marketing_imagem_cabecalho_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mail_marketing_imagem_cabecalho_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mail_marketing_conteudo']))
    {
        $this->nm_new_label['mail_marketing_conteudo'] = "Mail Marketing Conteudo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mail_marketing_conteudo = $this->mail_marketing_conteudo;
   $sStyleHidden_mail_marketing_conteudo = '';
   if (isset($this->nmgp_cmp_hidden['mail_marketing_conteudo']) && $this->nmgp_cmp_hidden['mail_marketing_conteudo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mail_marketing_conteudo']);
       $sStyleHidden_mail_marketing_conteudo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mail_marketing_conteudo = 'display: none;';
   $sStyleReadInp_mail_marketing_conteudo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mail_marketing_conteudo']) && $this->nmgp_cmp_readonly['mail_marketing_conteudo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mail_marketing_conteudo']);
       $sStyleReadLab_mail_marketing_conteudo = '';
       $sStyleReadInp_mail_marketing_conteudo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mail_marketing_conteudo']) && $this->nmgp_cmp_hidden['mail_marketing_conteudo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mail_marketing_conteudo" value="<?php echo $this->form_encode_input($mail_marketing_conteudo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mail_marketing_conteudo_line" id="hidden_field_data_mail_marketing_conteudo" style="<?php echo $sStyleHidden_mail_marketing_conteudo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mail_marketing_conteudo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mail_marketing_conteudo_label"><span id="id_label_mail_marketing_conteudo"><?php echo $this->nm_new_label['mail_marketing_conteudo']; ?></span></span><br>
<?php
$mail_marketing_conteudo_val = str_replace('<br />', '__SC_BREAK_LINE__', nl2br($mail_marketing_conteudo));

?>

<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mail_marketing_conteudo"]) &&  $this->nmgp_cmp_readonly["mail_marketing_conteudo"] == "on") { 

 ?>
<input type="hidden" name="mail_marketing_conteudo" value="<?php echo $this->form_encode_input($mail_marketing_conteudo) . "\">" . $mail_marketing_conteudo_val . ""; ?>
<?php } else { ?>
<span id="id_read_on_mail_marketing_conteudo" class="sc-ui-readonly-mail_marketing_conteudo css_mail_marketing_conteudo_line" style="<?php echo $sStyleReadLab_mail_marketing_conteudo; ?>"><?php echo $mail_marketing_conteudo_val; ?></span><span id="id_read_off_mail_marketing_conteudo" class="css_read_off_mail_marketing_conteudo" style="white-space: nowrap;<?php echo $sStyleReadInp_mail_marketing_conteudo; ?>">
 <textarea  class="sc-js-input scFormObjectOdd css_mail_marketing_conteudo_obj" style="white-space: pre-wrap;" name="mail_marketing_conteudo" id="id_sc_field_mail_marketing_conteudo" rows="10" cols="50"
 alt="{datatype: 'text', maxLength: 32767, allowedChars: '<?php echo $this->allowedCharsCharset("") ?>', lettersCase: '', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >
<?php echo $mail_marketing_conteudo; ?>
</textarea>
</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mail_marketing_conteudo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mail_marketing_conteudo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mail_marketing_link_conteudo']))
    {
        $this->nm_new_label['mail_marketing_link_conteudo'] = "Mail Marketing Link Conteudo";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mail_marketing_link_conteudo = $this->mail_marketing_link_conteudo;
   $sStyleHidden_mail_marketing_link_conteudo = '';
   if (isset($this->nmgp_cmp_hidden['mail_marketing_link_conteudo']) && $this->nmgp_cmp_hidden['mail_marketing_link_conteudo'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mail_marketing_link_conteudo']);
       $sStyleHidden_mail_marketing_link_conteudo = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mail_marketing_link_conteudo = 'display: none;';
   $sStyleReadInp_mail_marketing_link_conteudo = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mail_marketing_link_conteudo']) && $this->nmgp_cmp_readonly['mail_marketing_link_conteudo'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mail_marketing_link_conteudo']);
       $sStyleReadLab_mail_marketing_link_conteudo = '';
       $sStyleReadInp_mail_marketing_link_conteudo = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mail_marketing_link_conteudo']) && $this->nmgp_cmp_hidden['mail_marketing_link_conteudo'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mail_marketing_link_conteudo" value="<?php echo $this->form_encode_input($mail_marketing_link_conteudo) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mail_marketing_link_conteudo_line" id="hidden_field_data_mail_marketing_link_conteudo" style="<?php echo $sStyleHidden_mail_marketing_link_conteudo; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mail_marketing_link_conteudo_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mail_marketing_link_conteudo_label"><span id="id_label_mail_marketing_link_conteudo"><?php echo $this->nm_new_label['mail_marketing_link_conteudo']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mail_marketing_link_conteudo"]) &&  $this->nmgp_cmp_readonly["mail_marketing_link_conteudo"] == "on") { 

 ?>
<input type="hidden" name="mail_marketing_link_conteudo" value="<?php echo $this->form_encode_input($mail_marketing_link_conteudo) . "\">" . $mail_marketing_link_conteudo . ""; ?>
<?php } else { ?>
<span id="id_read_on_mail_marketing_link_conteudo" class="sc-ui-readonly-mail_marketing_link_conteudo css_mail_marketing_link_conteudo_line" style="<?php echo $sStyleReadLab_mail_marketing_link_conteudo; ?>"><?php echo $this->mail_marketing_link_conteudo; ?></span><span id="id_read_off_mail_marketing_link_conteudo" class="css_read_off_mail_marketing_link_conteudo" style="white-space: nowrap;<?php echo $sStyleReadInp_mail_marketing_link_conteudo; ?>">
 <input class="sc-js-input scFormObjectOdd css_mail_marketing_link_conteudo_obj" style="" id="id_sc_field_mail_marketing_link_conteudo" type=text name="mail_marketing_link_conteudo" value="<?php echo $this->form_encode_input($mail_marketing_link_conteudo) ?>"
 size=50 maxlength=255 alt="{enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >&nbsp;<?php echo nmButtonOutput($this->arr_buttons, "blink", "window.open(nm_link_url(document.F1.mail_marketing_link_conteudo.value), '_blank')", "window.open(nm_link_url(document.F1.mail_marketing_link_conteudo.value), '_blank')", "mail_marketing_link_conteudo_url", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>

</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mail_marketing_link_conteudo_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mail_marketing_link_conteudo_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mail_marketing_imagem_rodape']))
    {
        $this->nm_new_label['mail_marketing_imagem_rodape'] = "Mail Marketing Imagem Rodape";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mail_marketing_imagem_rodape = $this->mail_marketing_imagem_rodape;
   $sStyleHidden_mail_marketing_imagem_rodape = '';
   if (isset($this->nmgp_cmp_hidden['mail_marketing_imagem_rodape']) && $this->nmgp_cmp_hidden['mail_marketing_imagem_rodape'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mail_marketing_imagem_rodape']);
       $sStyleHidden_mail_marketing_imagem_rodape = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mail_marketing_imagem_rodape = 'display: none;';
   $sStyleReadInp_mail_marketing_imagem_rodape = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mail_marketing_imagem_rodape']) && $this->nmgp_cmp_readonly['mail_marketing_imagem_rodape'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mail_marketing_imagem_rodape']);
       $sStyleReadLab_mail_marketing_imagem_rodape = '';
       $sStyleReadInp_mail_marketing_imagem_rodape = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mail_marketing_imagem_rodape']) && $this->nmgp_cmp_hidden['mail_marketing_imagem_rodape'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mail_marketing_imagem_rodape" value="<?php echo $this->form_encode_input($mail_marketing_imagem_rodape) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mail_marketing_imagem_rodape_line" id="hidden_field_data_mail_marketing_imagem_rodape" style="<?php echo $sStyleHidden_mail_marketing_imagem_rodape; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mail_marketing_imagem_rodape_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mail_marketing_imagem_rodape_label"><span id="id_label_mail_marketing_imagem_rodape"><?php echo $this->nm_new_label['mail_marketing_imagem_rodape']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mail_marketing_imagem_rodape"]) &&  $this->nmgp_cmp_readonly["mail_marketing_imagem_rodape"] == "on") { 

 ?>
<input type="hidden" name="mail_marketing_imagem_rodape" value="<?php echo $this->form_encode_input($mail_marketing_imagem_rodape) . "\">" . $mail_marketing_imagem_rodape . ""; ?>
<?php } else { ?>
<span id="id_read_on_mail_marketing_imagem_rodape" class="sc-ui-readonly-mail_marketing_imagem_rodape css_mail_marketing_imagem_rodape_line" style="<?php echo $sStyleReadLab_mail_marketing_imagem_rodape; ?>"><?php echo $this->mail_marketing_imagem_rodape; ?></span><span id="id_read_off_mail_marketing_imagem_rodape" class="css_read_off_mail_marketing_imagem_rodape" style="white-space: nowrap;<?php echo $sStyleReadInp_mail_marketing_imagem_rodape; ?>">
 <input class="sc-js-input scFormObjectOdd css_mail_marketing_imagem_rodape_obj" style="" id="id_sc_field_mail_marketing_imagem_rodape" type=text name="mail_marketing_imagem_rodape" value="<?php echo $this->form_encode_input($mail_marketing_imagem_rodape) ?>"
 size=50 maxlength=255 alt="{enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" >&nbsp;<?php echo nmButtonOutput($this->arr_buttons, "blink", "window.open(nm_link_url(document.F1.mail_marketing_imagem_rodape.value), '_blank')", "window.open(nm_link_url(document.F1.mail_marketing_imagem_rodape.value), '_blank')", "mail_marketing_imagem_rodape_url", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>

</span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mail_marketing_imagem_rodape_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mail_marketing_imagem_rodape_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mail_marketing_iniciar_quando']))
    {
        $this->nm_new_label['mail_marketing_iniciar_quando'] = "Mail Marketing Iniciar Quando";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_mail_marketing_iniciar_quando = $this->mail_marketing_iniciar_quando;
   if (strlen($this->mail_marketing_iniciar_quando_hora) > 8 ) {$this->mail_marketing_iniciar_quando_hora = substr($this->mail_marketing_iniciar_quando_hora, 0, 8);}
   $this->mail_marketing_iniciar_quando .= ' ' . $this->mail_marketing_iniciar_quando_hora;
   $mail_marketing_iniciar_quando = $this->mail_marketing_iniciar_quando;
   $sStyleHidden_mail_marketing_iniciar_quando = '';
   if (isset($this->nmgp_cmp_hidden['mail_marketing_iniciar_quando']) && $this->nmgp_cmp_hidden['mail_marketing_iniciar_quando'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mail_marketing_iniciar_quando']);
       $sStyleHidden_mail_marketing_iniciar_quando = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mail_marketing_iniciar_quando = 'display: none;';
   $sStyleReadInp_mail_marketing_iniciar_quando = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mail_marketing_iniciar_quando']) && $this->nmgp_cmp_readonly['mail_marketing_iniciar_quando'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mail_marketing_iniciar_quando']);
       $sStyleReadLab_mail_marketing_iniciar_quando = '';
       $sStyleReadInp_mail_marketing_iniciar_quando = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mail_marketing_iniciar_quando']) && $this->nmgp_cmp_hidden['mail_marketing_iniciar_quando'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mail_marketing_iniciar_quando" value="<?php echo $this->form_encode_input($mail_marketing_iniciar_quando) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mail_marketing_iniciar_quando_line" id="hidden_field_data_mail_marketing_iniciar_quando" style="<?php echo $sStyleHidden_mail_marketing_iniciar_quando; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mail_marketing_iniciar_quando_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mail_marketing_iniciar_quando_label"><span id="id_label_mail_marketing_iniciar_quando"><?php echo $this->nm_new_label['mail_marketing_iniciar_quando']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mail_marketing_iniciar_quando"]) &&  $this->nmgp_cmp_readonly["mail_marketing_iniciar_quando"] == "on") { 

 ?>
<input type="hidden" name="mail_marketing_iniciar_quando" value="<?php echo $this->form_encode_input($mail_marketing_iniciar_quando) . "\">" . $mail_marketing_iniciar_quando . ""; ?>
<?php } else { ?>
<span id="id_read_on_mail_marketing_iniciar_quando" class="sc-ui-readonly-mail_marketing_iniciar_quando css_mail_marketing_iniciar_quando_line" style="<?php echo $sStyleReadLab_mail_marketing_iniciar_quando; ?>"><?php echo $mail_marketing_iniciar_quando; ?></span><span id="id_read_off_mail_marketing_iniciar_quando" class="css_read_off_mail_marketing_iniciar_quando" style="white-space: nowrap;<?php echo $sStyleReadInp_mail_marketing_iniciar_quando; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_mail_marketing_iniciar_quando_obj" style="" id="id_sc_field_mail_marketing_iniciar_quando" type=text name="mail_marketing_iniciar_quando" value="<?php echo $this->form_encode_input($mail_marketing_iniciar_quando) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['mail_marketing_iniciar_quando']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['mail_marketing_iniciar_quando']['date_format']; ?>', timeSep: '<?php echo $this->field_config['mail_marketing_iniciar_quando']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['mail_marketing_iniciar_quando']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mail_marketing_iniciar_quando_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mail_marketing_iniciar_quando_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->mail_marketing_iniciar_quando = $old_dt_mail_marketing_iniciar_quando;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
    if (!isset($this->nm_new_label['mail_marketing_terminar_quando']))
    {
        $this->nm_new_label['mail_marketing_terminar_quando'] = "Mail Marketing Terminar Quando";
    }
?>
<?php
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $old_dt_mail_marketing_terminar_quando = $this->mail_marketing_terminar_quando;
   if (strlen($this->mail_marketing_terminar_quando_hora) > 8 ) {$this->mail_marketing_terminar_quando_hora = substr($this->mail_marketing_terminar_quando_hora, 0, 8);}
   $this->mail_marketing_terminar_quando .= ' ' . $this->mail_marketing_terminar_quando_hora;
   $mail_marketing_terminar_quando = $this->mail_marketing_terminar_quando;
   $sStyleHidden_mail_marketing_terminar_quando = '';
   if (isset($this->nmgp_cmp_hidden['mail_marketing_terminar_quando']) && $this->nmgp_cmp_hidden['mail_marketing_terminar_quando'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mail_marketing_terminar_quando']);
       $sStyleHidden_mail_marketing_terminar_quando = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mail_marketing_terminar_quando = 'display: none;';
   $sStyleReadInp_mail_marketing_terminar_quando = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mail_marketing_terminar_quando']) && $this->nmgp_cmp_readonly['mail_marketing_terminar_quando'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mail_marketing_terminar_quando']);
       $sStyleReadLab_mail_marketing_terminar_quando = '';
       $sStyleReadInp_mail_marketing_terminar_quando = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mail_marketing_terminar_quando']) && $this->nmgp_cmp_hidden['mail_marketing_terminar_quando'] == 'off') { $sc_hidden_yes++;  ?>
<input type="hidden" name="mail_marketing_terminar_quando" value="<?php echo $this->form_encode_input($mail_marketing_terminar_quando) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mail_marketing_terminar_quando_line" id="hidden_field_data_mail_marketing_terminar_quando" style="<?php echo $sStyleHidden_mail_marketing_terminar_quando; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mail_marketing_terminar_quando_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mail_marketing_terminar_quando_label"><span id="id_label_mail_marketing_terminar_quando"><?php echo $this->nm_new_label['mail_marketing_terminar_quando']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mail_marketing_terminar_quando"]) &&  $this->nmgp_cmp_readonly["mail_marketing_terminar_quando"] == "on") { 

 ?>
<input type="hidden" name="mail_marketing_terminar_quando" value="<?php echo $this->form_encode_input($mail_marketing_terminar_quando) . "\">" . $mail_marketing_terminar_quando . ""; ?>
<?php } else { ?>
<span id="id_read_on_mail_marketing_terminar_quando" class="sc-ui-readonly-mail_marketing_terminar_quando css_mail_marketing_terminar_quando_line" style="<?php echo $sStyleReadLab_mail_marketing_terminar_quando; ?>"><?php echo $mail_marketing_terminar_quando; ?></span><span id="id_read_off_mail_marketing_terminar_quando" class="css_read_off_mail_marketing_terminar_quando" style="white-space: nowrap;<?php echo $sStyleReadInp_mail_marketing_terminar_quando; ?>"><?php
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('scButton_' == substr($miniCalendarButton[1], 0, 9)) {
    $miniCalendarButton[1] = substr($miniCalendarButton[1], 9);
}
?>
<span class='trigger-picker-<?php echo $miniCalendarButton[1]; ?>'>

 <input class="sc-js-input scFormObjectOdd css_mail_marketing_terminar_quando_obj" style="" id="id_sc_field_mail_marketing_terminar_quando" type=text name="mail_marketing_terminar_quando" value="<?php echo $this->form_encode_input($mail_marketing_terminar_quando) ?>"
 size=18 alt="{datatype: 'datetime', dateSep: '<?php echo $this->field_config['mail_marketing_terminar_quando']['date_sep']; ?>', dateFormat: '<?php echo $this->field_config['mail_marketing_terminar_quando']['date_format']; ?>', timeSep: '<?php echo $this->field_config['mail_marketing_terminar_quando']['time_sep']; ?>', enterTab: false, enterSubmit: false, autoTab: false, selectOnFocus: true, watermark: '', watermarkClass: 'scFormObjectOddWm', maskChars: '(){}[].,;:-+/ '}" ></span>
<?php
$tmp_form_data = $this->field_config['mail_marketing_terminar_quando']['date_format'];
$tmp_form_data = str_replace('aaaa', 'yyyy', $tmp_form_data);
$tmp_form_data = str_replace('dd'  , $this->Ini->Nm_lang['lang_othr_date_days'], $tmp_form_data);
$tmp_form_data = str_replace('mm'  , $this->Ini->Nm_lang['lang_othr_date_mnth'], $tmp_form_data);
$tmp_form_data = str_replace('yyyy', $this->Ini->Nm_lang['lang_othr_date_year'], $tmp_form_data);
$tmp_form_data = str_replace('hh'  , $this->Ini->Nm_lang['lang_othr_date_hour'], $tmp_form_data);
$tmp_form_data = str_replace('ii'  , $this->Ini->Nm_lang['lang_othr_date_mint'], $tmp_form_data);
$tmp_form_data = str_replace('ss'  , $this->Ini->Nm_lang['lang_othr_date_scnd'], $tmp_form_data);
$tmp_form_data = str_replace(';'   , ' '                                       , $tmp_form_data);
?>
&nbsp;<span class="scFormDataHelpOdd"><?php echo $tmp_form_data; ?></span></span><?php } ?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mail_marketing_terminar_quando_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mail_marketing_terminar_quando_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>
<?php
   $this->mail_marketing_terminar_quando = $old_dt_mail_marketing_terminar_quando;
?>





<?php if ($sc_hidden_yes > 0 && $sc_hidden_no > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } 
?> 
<?php if ($sc_hidden_no > 0) { echo "<tr>"; }; 
      $sc_hidden_yes = 0; $sc_hidden_no = 0; ?>


   <?php
   if (!isset($this->nm_new_label['mail_marketing_gatilho']))
   {
       $this->nm_new_label['mail_marketing_gatilho'] = "Mail Marketing Gatilho";
   }
   $nm_cor_fun_cel  = ($nm_cor_fun_cel  == $this->Ini->cor_grid_impar ? $this->Ini->cor_grid_par : $this->Ini->cor_grid_impar);
   $nm_img_fun_cel  = ($nm_img_fun_cel  == $this->Ini->img_fun_imp    ? $this->Ini->img_fun_par  : $this->Ini->img_fun_imp);
   $mail_marketing_gatilho = $this->mail_marketing_gatilho;
   $sStyleHidden_mail_marketing_gatilho = '';
   if (isset($this->nmgp_cmp_hidden['mail_marketing_gatilho']) && $this->nmgp_cmp_hidden['mail_marketing_gatilho'] == 'off')
   {
       unset($this->nmgp_cmp_hidden['mail_marketing_gatilho']);
       $sStyleHidden_mail_marketing_gatilho = 'display: none;';
   }
   $bTestReadOnly = true;
   $sStyleReadLab_mail_marketing_gatilho = 'display: none;';
   $sStyleReadInp_mail_marketing_gatilho = '';
   if (/*$this->nmgp_opcao != "novo" && */isset($this->nmgp_cmp_readonly['mail_marketing_gatilho']) && $this->nmgp_cmp_readonly['mail_marketing_gatilho'] == 'on')
   {
       $bTestReadOnly = false;
       unset($this->nmgp_cmp_readonly['mail_marketing_gatilho']);
       $sStyleReadLab_mail_marketing_gatilho = '';
       $sStyleReadInp_mail_marketing_gatilho = 'display: none;';
   }
?>
<?php if (isset($this->nmgp_cmp_hidden['mail_marketing_gatilho']) && $this->nmgp_cmp_hidden['mail_marketing_gatilho'] == 'off') { $sc_hidden_yes++; ?>
<input type=hidden name="mail_marketing_gatilho" value="<?php echo $this->form_encode_input($this->mail_marketing_gatilho) . "\">"; ?>
<?php } else { $sc_hidden_no++; ?>

    <TD class="scFormDataOdd css_mail_marketing_gatilho_line" id="hidden_field_data_mail_marketing_gatilho" style="<?php echo $sStyleHidden_mail_marketing_gatilho; ?>"> <table style="border-width: 0px; border-collapse: collapse; width: 100%"><tr><td  class="scFormDataFontOdd css_mail_marketing_gatilho_line" style="vertical-align: top;padding: 0px"><span class="scFormLabelOddFormat css_mail_marketing_gatilho_label"><span id="id_label_mail_marketing_gatilho"><?php echo $this->nm_new_label['mail_marketing_gatilho']; ?></span></span><br>
<?php if ($bTestReadOnly && $this->nmgp_opcao != "novo" && isset($this->nmgp_cmp_readonly["mail_marketing_gatilho"]) &&  $this->nmgp_cmp_readonly["mail_marketing_gatilho"] == "on") { 
 
$nmgp_def_dados = "" ; 
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_gatilho']))
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_gatilho'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_gatilho']); 
}
else
{
    $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_gatilho'] = array(); 
}
   $nm_nao_carga = false;
   $nmgp_def_dados = "" ; 
   if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_gatilho']))
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_gatilho'] = array_unique($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_gatilho']); 
   }
   else
   {
       $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_gatilho'] = array(); 
    }

   $old_value_idmail_marketing = $this->idmail_marketing;
   $old_value_mail_marketing_iniciar_quando = $this->mail_marketing_iniciar_quando;
   $old_value_mail_marketing_iniciar_quando_hora = $this->mail_marketing_iniciar_quando_hora;
   $old_value_mail_marketing_terminar_quando = $this->mail_marketing_terminar_quando;
   $old_value_mail_marketing_terminar_quando_hora = $this->mail_marketing_terminar_quando_hora;
   $this->nm_tira_formatacao();
   $this->nm_converte_datas(false);


   $unformatted_value_idmail_marketing = $this->idmail_marketing;
   $unformatted_value_mail_marketing_iniciar_quando = $this->mail_marketing_iniciar_quando;
   $unformatted_value_mail_marketing_iniciar_quando_hora = $this->mail_marketing_iniciar_quando_hora;
   $unformatted_value_mail_marketing_terminar_quando = $this->mail_marketing_terminar_quando;
   $unformatted_value_mail_marketing_terminar_quando_hora = $this->mail_marketing_terminar_quando_hora;

   $nm_comando = "SELECT idmail_gatilho, mail_descreva  FROM mail_gatilho  ORDER BY idmail_gatilho";

   $this->idmail_marketing = $old_value_idmail_marketing;
   $this->mail_marketing_iniciar_quando = $old_value_mail_marketing_iniciar_quando;
   $this->mail_marketing_iniciar_quando_hora = $old_value_mail_marketing_iniciar_quando_hora;
   $this->mail_marketing_terminar_quando = $old_value_mail_marketing_terminar_quando;
   $this->mail_marketing_terminar_quando_hora = $old_value_mail_marketing_terminar_quando_hora;

   $_SESSION['scriptcase']['sc_sql_ult_comando'] = $nm_comando;
   $_SESSION['scriptcase']['sc_sql_ult_conexao'] = '';
   if ($nm_comando != "" && $rs = $this->Db->Execute($nm_comando))
   {
       while (!$rs->EOF) 
       { 
              $rs->fields[0] = str_replace(',', '.', $rs->fields[0]);
              $rs->fields[0] = (strpos(strtolower($rs->fields[0]), "e")) ? (float)$rs->fields[0] : $rs->fields[0];
              $rs->fields[0] = (string)$rs->fields[0];
              $nmgp_def_dados .= $rs->fields[1] . "?#?" ; 
              $nmgp_def_dados .= $rs->fields[0] . "?#?N?@?" ; 
              $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['Lookup_mail_marketing_gatilho'][] = $rs->fields[0];
              $rs->MoveNext() ; 
       } 
       $rs->Close() ; 
   } 
   elseif ($GLOBALS["NM_ERRO_IBASE"] != 1 && $nm_comando != "")  
   {  
       $this->Erro->mensagem(__FILE__, __LINE__, "banco", $this->Ini->Nm_lang['lang_errm_dber'], $this->Db->ErrorMsg()); 
       exit; 
   } 
   $GLOBALS["NM_ERRO_IBASE"] = 0; 
   $x = 0; 
   $mail_marketing_gatilho_look = ""; 
   $todox = str_replace("?#?@?#?", "?#?@ ?#?", trim($nmgp_def_dados)) ; 
   $todo  = explode("?@?", $todox) ; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->mail_marketing_gatilho_1))
          {
              foreach ($this->mail_marketing_gatilho_1 as $tmp_mail_marketing_gatilho)
              {
                  if (trim($tmp_mail_marketing_gatilho) === trim($cadaselect[1])) { $mail_marketing_gatilho_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->mail_marketing_gatilho) === trim($cadaselect[1])) { $mail_marketing_gatilho_look .= $cadaselect[0]; } 
          $x++; 
   }

?>
<input type="hidden" name="mail_marketing_gatilho" value="<?php echo $this->form_encode_input($mail_marketing_gatilho) . "\">" . $mail_marketing_gatilho_look . ""; ?>
<?php } else { ?>
<?php
   $todo = $this->Form_lookup_mail_marketing_gatilho();
   $x = 0 ; 
   $mail_marketing_gatilho_look = ""; 
   while (!empty($todo[$x])) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          if (isset($this->Embutida_ronly) && $this->Embutida_ronly && isset($this->mail_marketing_gatilho_1))
          {
              foreach ($this->mail_marketing_gatilho_1 as $tmp_mail_marketing_gatilho)
              {
                  if (trim($tmp_mail_marketing_gatilho) === trim($cadaselect[1])) { $mail_marketing_gatilho_look .= $cadaselect[0] . '__SC_BREAK_LINE__'; }
              }
          }
          elseif (trim($this->mail_marketing_gatilho) === trim($cadaselect[1])) { $mail_marketing_gatilho_look .= $cadaselect[0]; } 
          $x++; 
   }
          if (empty($mail_marketing_gatilho_look))
          {
              $mail_marketing_gatilho_look = $this->mail_marketing_gatilho;
          }
   $x = 0; 
   echo "<span id=\"id_read_on_mail_marketing_gatilho\" class=\"css_mail_marketing_gatilho_line\" style=\"" .  $sStyleReadLab_mail_marketing_gatilho . "\">" . $this->form_encode_input($mail_marketing_gatilho_look) . "</span><span id=\"id_read_off_mail_marketing_gatilho\" class=\"css_read_off_mail_marketing_gatilho\" style=\"white-space: nowrap; " . $sStyleReadInp_mail_marketing_gatilho . "\">";
   echo " <span id=\"idAjaxSelect_mail_marketing_gatilho\"><select class=\"sc-js-input scFormObjectOdd css_mail_marketing_gatilho_obj\" style=\"\" id=\"id_sc_field_mail_marketing_gatilho\" name=\"mail_marketing_gatilho\" size=\"1\" alt=\"{type: 'select', enterTab: false}\">" ; 
   echo "\r" ; 
   while (!empty($todo[$x]) && !$nm_nao_carga) 
   {
          $cadaselect = explode("?#?", $todo[$x]) ; 
          if ($cadaselect[1] == "@ ") {$cadaselect[1]= trim($cadaselect[1]); } ; 
          echo "  <option value=\"$cadaselect[1]\"" ; 
          if (trim($this->mail_marketing_gatilho) === trim($cadaselect[1])) 
          {
              echo " selected" ; 
          }
          if (strtoupper($cadaselect[2]) == "S") 
          {
              if (empty($this->mail_marketing_gatilho)) 
              {
                  echo " selected" ;
              } 
           } 
          echo ">$cadaselect[0] </option>" ; 
          echo "\r" ; 
          $x++ ; 
   }  ; 
   echo " </select></span>" ; 
   echo "\r" ; 
   echo "</span>";
?> 
<?php  }?>
</td></tr><tr><td style="vertical-align: top; padding: 0"><table class="scFormFieldErrorTable" style="display: none" id="id_error_display_mail_marketing_gatilho_frame"><tr><td class="scFormFieldErrorMessage"><span id="id_error_display_mail_marketing_gatilho_text"></span></td></tr></table></td></tr></table> </TD>
   <?php }?>





<?php if ($sc_hidden_yes > 0) { ?>


    <TD class="scFormDataOdd" colspan="<?php echo $sc_hidden_yes * 1; ?>" >&nbsp;</TD>




<?php } ?>
   </td></tr></table>
   </tr>
</TABLE></div><!-- bloco_f -->
</td></tr> 
<tr><td>
<?php
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "R")
{
?>
    <table style="border-collapse: collapse; border-width: 0px; width: 100%"><tr><td class="scFormToolbar" style="padding: 0px; spacing: 0px">
    <table style="border-collapse: collapse; border-width: 0px; width: 100%">
    <tr> 
     <td nowrap align="left" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "R")
{
    $NM_btn = false;
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['first'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "binicio", "scBtnFn_sys_format_ini()", "scBtnFn_sys_format_ini()", "sc_b_ini_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Shift + &#8592;)", "sc-unique-btn-27", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['back'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bretorna", "scBtnFn_sys_format_ret()", "scBtnFn_sys_format_ret()", "sc_b_ret_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + &#8592;)", "sc-unique-btn-28", "", "");?>
 
<?php
        $NM_btn = true;
    }
if ($opcao_botoes != "novo" && $this->nmgp_botoes['summary'] == "on")
{
?> 
     <span nowrap id="sc_b_summary_b" class="scFormToolbarPadding"></span> 
<?php 
}
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['forward'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bavanca", "scBtnFn_sys_format_ava()", "scBtnFn_sys_format_ava()", "sc_b_avc_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + &#8594;)", "sc-unique-btn-29", "", "");?>
 
<?php
        $NM_btn = true;
    }
    if ($opcao_botoes != "novo") {
        $sCondStyle = ($this->nmgp_botoes['last'] == "on") ? '' : 'display: none;';
?>
       <?php echo nmButtonOutput($this->arr_buttons, "bfinal", "scBtnFn_sys_format_fim()", "scBtnFn_sys_format_fim()", "sc_b_fim_b", "", "", "" . $sCondStyle . "", "", "", "", $this->Ini->path_botoes, "", "__NM_HINT__ (Ctrl + Shift + &#8594;)", "sc-unique-btn-30", "", "");?>
 
<?php
        $NM_btn = true;
    }
?> 
     </td> 
     <td nowrap align="center" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
?> 
     </td> 
     <td nowrap align="right" valign="middle" width="33%" class="scFormToolbarPadding"> 
<?php 
}
if (($this->Embutida_form || !$this->Embutida_call || $this->Grid_editavel || $this->Embutida_multi || ($this->Embutida_call && 'on' == $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['embutida_liga_form_btn_nav'])) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "F" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "R")
{
?>
   </td></tr> 
   </table> 
   </td></tr></table> 
<?php
}
?>
<?php
if (!$NM_btn && isset($NM_ult_sep))
{
    echo "    <script language=\"javascript\">";
    echo "      document.getElementById('" .  $NM_ult_sep . "').style.display='none';";
    echo "    </script>";
}
unset($NM_ult_sep);
?>
<?php if ('novo' != $this->nmgp_opcao || $this->Embutida_form) { ?><script>nav_atualiza(Nav_permite_ret, Nav_permite_ava, 'b');</script><?php } ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "F") { if ('parcial' == $this->form_paginacao) {?><script>summary_atualiza(<?php echo ($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['reg_start'] + 1). ", " . $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['reg_qtd'] . ", " . ($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['total'] + 1)?>);</script><?php }} ?>
<?php if (('novo' != $this->nmgp_opcao || $this->Embutida_form) && !$this->nmgp_form_empty && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "R" && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['run_iframe'] != "F") { if ('total' == $this->form_paginacao) {?><script>summary_atualiza(1, <?php echo $this->sc_max_reg . ", " . $this->sc_max_reg?>);</script><?php }} ?>
</td></tr> 
</table> 
</div> 
</td> 
</tr> 
</table> 

<div id="id_debug_window" style="display: none; position: absolute; left: 50px; top: 50px"><table class="scFormMessageTable">
<tr><td class="scFormMessageTitle"><?php echo nmButtonOutput($this->arr_buttons, "berrm_clse", "scAjaxHideDebug()", "scAjaxHideDebug()", "", "", "", "", "", "", "", $this->Ini->path_botoes, "", "", "", "", "");?>
&nbsp;&nbsp;Output</td></tr>
<tr><td class="scFormMessageMessage" style="padding: 0px; vertical-align: top"><div style="padding: 2px; height: 200px; width: 350px; overflow: auto" id="id_debug_text"></div></td></tr>
</table></div>

</form> 
<script> 
<?php
  $nm_sc_blocos_da_pag = array(0);

  foreach ($this->Ini->nm_hidden_blocos as $bloco => $hidden)
  {
      if ($hidden == "off" && in_array($bloco, $nm_sc_blocos_da_pag))
      {
          echo "document.getElementById('hidden_bloco_" . $bloco . "').style.display = 'none';";
          if (isset($nm_sc_blocos_aba[$bloco]))
          {
               echo "document.getElementById('id_tabs_" . $nm_sc_blocos_aba[$bloco] . "_" . $bloco . "').style.display = 'none';";
          }
      }
  }
?>
</script> 
<script>
<?php
if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['masterValue']))
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['under_dashboard']) {
?>
var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['parent_widget']; ?>']");
if (dbParentFrame && dbParentFrame[0] && dbParentFrame[0].contentWindow.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    dbParentFrame[0].contentWindow.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['masterValue']);
?>
}
<?php
    }
    else {
?>
if (parent && parent.scAjaxDetailValue)
{
<?php
        foreach ($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['masterValue'] as $cmp_master => $val_master)
        {
?>
    parent.scAjaxDetailValue('<?php echo $cmp_master ?>', '<?php echo $val_master ?>');
<?php
        }
        unset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['masterValue']);
?>
}
<?php
    }
}
?>
function updateHeaderFooter(sFldName, sFldValue)
{
  if (sFldValue[0] && sFldValue[0]["value"])
  {
    sFldValue = sFldValue[0]["value"];
  }
}
</script>
<?php
if (isset($_POST['master_nav']) && 'on' == $_POST['master_nav'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['under_dashboard']) {
?>
<script>
 var dbParentFrame = $(parent.document).find("[name='<?php echo $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['parent_widget']; ?>']");
 dbParentFrame[0].contentWindow.scAjaxDetailStatus("form_mail_marketing_mob");
</script>
<?php
    }
    else {
        $sTamanhoIframe = isset($_POST['sc_ifr_height']) && '' != $_POST['sc_ifr_height'] ? '"' . $_POST['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 parent.scAjaxDetailStatus("form_mail_marketing_mob");
 parent.scAjaxDetailHeight("form_mail_marketing_mob", <?php echo $sTamanhoIframe; ?>);
</script>
<?php
    }
}
elseif (isset($_GET['script_case_detail']) && 'Y' == $_GET['script_case_detail'])
{
    if (isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['under_dashboard']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['dashboard_info']['under_dashboard']) {
    }
    else {
    $sTamanhoIframe = isset($_GET['sc_ifr_height']) && '' != $_GET['sc_ifr_height'] ? '"' . $_GET['sc_ifr_height'] . '"' : '$(document).innerHeight()';
?>
<script>
 if (0 == <?php echo $sTamanhoIframe; ?>) {
  setTimeout(function() {
   parent.scAjaxDetailHeight("form_mail_marketing_mob", <?php echo $sTamanhoIframe; ?>);
  }, 100);
 }
 else {
  parent.scAjaxDetailHeight("form_mail_marketing_mob", <?php echo $sTamanhoIframe; ?>);
 }
</script>
<?php
    }
}
?>
<?php
if (isset($this->NM_ajax_info['displayMsg']) && $this->NM_ajax_info['displayMsg'])
{
    $isToast   = isset($this->NM_ajax_info['displayMsgToast']) && $this->NM_ajax_info['displayMsgToast'] ? 'true' : 'false';
    $toastType = $isToast && isset($this->NM_ajax_info['displayMsgToastType']) ? $this->NM_ajax_info['displayMsgToastType'] : '';
?>
<script type="text/javascript">
_scAjaxShowMessage({title: scMsgDefTitle, message: "<?php echo $this->NM_ajax_info['displayMsgTxt']; ?>", isModal: false, timeout: sc_ajaxMsgTime, showButton: false, buttonLabel: "Ok", topPos: 0, leftPos: 0, width: 0, height: 0, redirUrl: "", redirTarget: "", redirParam: "", showClose: false, showBodyIcon: true, isToast: <?php echo $isToast ?>, toastPos: "", type: "<?php echo $toastType ?>"});
</script>
<?php
}
?>
<?php
if ('' != $this->scFormFocusErrorName)
{
?>
<script>
scAjaxFocusError();
</script>
<?php
}
?>
<script type='text/javascript'>
bLigEditLookupCall = <?php if ($this->lig_edit_lookup_call) { ?>true<?php } else { ?>false<?php } ?>;
function scLigEditLookupCall()
{
<?php
if ($this->lig_edit_lookup && isset($_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['sc_modal']) && $_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['sc_modal'])
{
?>
  parent.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
elseif ($this->lig_edit_lookup)
{
?>
  opener.<?php echo $this->lig_edit_lookup_cb; ?>(<?php echo $this->lig_edit_lookup_row; ?>);
<?php
}
?>
}
if (bLigEditLookupCall)
{
  scLigEditLookupCall();
}
<?php
if (isset($this->redir_modal) && !empty($this->redir_modal))
{
    echo $this->redir_modal;
}
?>
</script>
<?php
if ($this->nmgp_form_empty) {
?>
<script type="text/javascript">
scAjax_displayEmptyForm();
</script>
<?php
}
?>
<script type="text/javascript">
	function scBtnFn_sys_format_inc() {
		if ($("#sc_b_new_t.sc-unique-btn-1").length && $("#sc_b_new_t.sc-unique-btn-1").is(":visible")) {
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-2").length && $("#sc_b_ins_t.sc-unique-btn-2").is(":visible")) {
			nm_atualiza ('incluir');
			 return;
		}
		if ($("#sc_b_new_t.sc-unique-btn-15").length && $("#sc_b_new_t.sc-unique-btn-15").is(":visible")) {
			nm_move ('novo');
			 return;
		}
		if ($("#sc_b_ins_t.sc-unique-btn-16").length && $("#sc_b_ins_t.sc-unique-btn-16").is(":visible")) {
			nm_atualiza ('incluir');
			 return;
		}
	}
	function scBtnFn_sys_format_cnl() {
		if ($("#sc_b_sai_t.sc-unique-btn-3").length && $("#sc_b_sai_t.sc-unique-btn-3").is(":visible")) {
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-17").length && $("#sc_b_sai_t.sc-unique-btn-17").is(":visible")) {
			<?php echo $this->NM_cancel_insert_new ?> document.F5.submit();
			 return;
		}
	}
	function scBtnFn_sys_format_alt() {
		if ($("#sc_b_upd_t.sc-unique-btn-4").length && $("#sc_b_upd_t.sc-unique-btn-4").is(":visible")) {
			nm_atualiza ('alterar');
			 return;
		}
		if ($("#sc_b_upd_t.sc-unique-btn-18").length && $("#sc_b_upd_t.sc-unique-btn-18").is(":visible")) {
			nm_atualiza ('alterar');
			 return;
		}
	}
	function scBtnFn_sys_format_exc() {
		if ($("#sc_b_del_t.sc-unique-btn-5").length && $("#sc_b_del_t.sc-unique-btn-5").is(":visible")) {
			nm_atualiza ('excluir');
			 return;
		}
		if ($("#sc_b_del_t.sc-unique-btn-19").length && $("#sc_b_del_t.sc-unique-btn-19").is(":visible")) {
			nm_atualiza ('excluir');
			 return;
		}
	}
	function scBtnFn_Vizualizar() {
		if ($("#sc_Vizualizar_top").length && $("#sc_Vizualizar_top").is(":visible")) {
			sc_btn_Vizualizar()
			 return;
		}
	}
	function scBtnFn_sys_format_hlp() {
		if ($("#sc_b_hlp_t").length && $("#sc_b_hlp_t").is(":visible")) {
			window.open('<?php echo $this->url_webhelp; ?>', '', 'resizable, scrollbars'); 
			 return;
		}
	}
	function scBtnFn_sys_format_sai() {
		if ($("#sc_b_sai_t.sc-unique-btn-6").length && $("#sc_b_sai_t.sc-unique-btn-6").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-7").length && $("#sc_b_sai_t.sc-unique-btn-7").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-8").length && $("#sc_b_sai_t.sc-unique-btn-8").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-9").length && $("#sc_b_sai_t.sc-unique-btn-9").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-10").length && $("#sc_b_sai_t.sc-unique-btn-10").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-22").length && $("#sc_b_sai_t.sc-unique-btn-22").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-23").length && $("#sc_b_sai_t.sc-unique-btn-23").is(":visible")) {
			document.F5.action='<?php echo $nm_url_saida; ?>'; document.F5.submit();
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-24").length && $("#sc_b_sai_t.sc-unique-btn-24").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-25").length && $("#sc_b_sai_t.sc-unique-btn-25").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
		if ($("#sc_b_sai_t.sc-unique-btn-26").length && $("#sc_b_sai_t.sc-unique-btn-26").is(":visible")) {
			document.F6.action='<?php echo $nm_url_saida; ?>'; document.F6.submit(); return false;
			 return;
		}
	}
	function scBtnFn_sys_GridPermiteSeq() {
		if ($("#brec_b").length && $("#brec_b").is(":visible")) {
			nm_navpage(document.F1.nmgp_rec_b.value, 'P'); document.F1.nmgp_rec_b.value = '';
			 return;
		}
	}
	function scBtnFn_sys_format_ini() {
		if ($("#sc_b_ini_b.sc-unique-btn-11").length && $("#sc_b_ini_b.sc-unique-btn-11").is(":visible")) {
			nm_move ('inicio');
			 return;
		}
		if ($("#sc_b_ini_b.sc-unique-btn-27").length && $("#sc_b_ini_b.sc-unique-btn-27").is(":visible")) {
			nm_move ('inicio');
			 return;
		}
	}
	function scBtnFn_sys_format_ret() {
		if ($("#sc_b_ret_b.sc-unique-btn-12").length && $("#sc_b_ret_b.sc-unique-btn-12").is(":visible")) {
			nm_move ('retorna');
			 return;
		}
		if ($("#sc_b_ret_b.sc-unique-btn-28").length && $("#sc_b_ret_b.sc-unique-btn-28").is(":visible")) {
			nm_move ('retorna');
			 return;
		}
	}
	function scBtnFn_sys_format_ava() {
		if ($("#sc_b_avc_b.sc-unique-btn-13").length && $("#sc_b_avc_b.sc-unique-btn-13").is(":visible")) {
			nm_move ('avanca');
			 return;
		}
		if ($("#sc_b_avc_b.sc-unique-btn-29").length && $("#sc_b_avc_b.sc-unique-btn-29").is(":visible")) {
			nm_move ('avanca');
			 return;
		}
	}
	function scBtnFn_sys_format_fim() {
		if ($("#sc_b_fim_b.sc-unique-btn-14").length && $("#sc_b_fim_b.sc-unique-btn-14").is(":visible")) {
			nm_move ('final');
			 return;
		}
		if ($("#sc_b_fim_b.sc-unique-btn-30").length && $("#sc_b_fim_b.sc-unique-btn-30").is(":visible")) {
			nm_move ('final');
			 return;
		}
	}
	function scBtnFn_sys_separator() {
		if ($("#sys_separator.sc-unique-btn-20").length && $("#sys_separator.sc-unique-btn-20").is(":visible")) {
			return false;
			 return;
		}
	}
	function scBtnFn_sys_format_copy() {
		if ($("#sc_b_clone_t.sc-unique-btn-21").length && $("#sc_b_clone_t.sc-unique-btn-21").is(":visible")) {
			nm_move ('clone');
			 return;
		}
	}
</script>
<script type="text/javascript">
$(function() {
 $("#sc-id-mobile-in").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("in");
 });
 $("#sc-id-mobile-out").mouseover(function() {
  $(this).css("cursor", "pointer");
 }).click(function() {
  scMobileDisplayControl("out");
 });
});
function scMobileDisplayControl(sOption) {
 $("#sc-id-mobile-control").val(sOption);
 nm_atualiza("recarga_mobile");
}
</script>
<?php
       if (isset($_SESSION['scriptcase']['device_mobile']) && $_SESSION['scriptcase']['device_mobile'])
       {
?>
<span id="sc-id-mobile-out"><?php echo $this->Ini->Nm_lang['lang_version_web']; ?></span>
<?php
       }
?>
<?php
$_SESSION['sc_session'][$this->Ini->sc_page]['form_mail_marketing_mob']['buttonStatus'] = $this->nmgp_botoes;
?>
<script type="text/javascript">
   function sc_session_redir(url_redir)
   {
       if (window.parent && window.parent.document != window.document && typeof window.parent.sc_session_redir === 'function')
       {
           window.parent.sc_session_redir(url_redir);
       }
       else
       {
           if (window.opener && typeof window.opener.sc_session_redir === 'function')
           {
               window.close();
               window.opener.sc_session_redir(url_redir);
           }
           else
           {
               window.location = url_redir;
           }
       }
   }
</script>
</body> 
</html> 
