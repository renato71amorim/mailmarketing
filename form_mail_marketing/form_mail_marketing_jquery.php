
function scJQGeneralAdd() {
  scLoadScInput('input:text.sc-js-input');
  scLoadScInput('input:password.sc-js-input');
  scLoadScInput('input:checkbox.sc-js-input');
  scLoadScInput('input:radio.sc-js-input');
  scLoadScInput('select.sc-js-input');
  scLoadScInput('textarea.sc-js-input');

} // scJQGeneralAdd

function scFocusField(sField) {
  var $oField = $('#id_sc_field_' + sField);

  if (0 == $oField.length) {
    $oField = $('input[name=' + sField + ']');
  }

  if (0 == $oField.length && document.F1.elements[sField]) {
    $oField = $(document.F1.elements[sField]);
  }

  if ($("#id_ac_" + sField).length > 0) {
    if ($oField.hasClass("select2-hidden-accessible")) {
      if (false == scSetFocusOnField($oField)) {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
    else {
      if (false == scSetFocusOnField($oField)) {
        if (false == scSetFocusOnField($("#id_ac_" + sField))) {
          setTimeout(function() { scSetFocusOnField($("#id_ac_" + sField)); }, 500);
        }
      }
      else {
        setTimeout(function() { scSetFocusOnField($oField); }, 500);
      }
    }
  }
  else {
    setTimeout(function() { scSetFocusOnField($oField); }, 500);
  }
} // scFocusField

function scSetFocusOnField($oField) {
  if ($oField.length > 0 && $oField[0].offsetHeight > 0 && $oField[0].offsetWidth > 0 && !$oField[0].disabled) {
    $oField[0].focus();
    return true;
  }
  return false;
} // scSetFocusOnField

function scEventControl_init(iSeqRow) {
  scEventControl_data["idmail_marketing" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mail_marketing_campanha" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mail_marketing_emitente" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mail_marketing_lista" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mail_marketing_assunto" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mail_marketing_imagem_cabecalho" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mail_marketing_conteudo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mail_marketing_link_conteudo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mail_marketing_imagem_rodape" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mail_marketing_iniciar_quando" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mail_marketing_terminar_quando" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mail_marketing_gatilho" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["idmail_marketing" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idmail_marketing" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_campanha" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_campanha" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_emitente" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_emitente" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_lista" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_lista" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_assunto" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_assunto" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_imagem_cabecalho" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_imagem_cabecalho" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_conteudo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_conteudo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_link_conteudo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_link_conteudo" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_imagem_rodape" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_imagem_rodape" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_iniciar_quando" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_iniciar_quando" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_terminar_quando" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_terminar_quando" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_gatilho" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mail_marketing_gatilho" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
  if ("mail_marketing_lista" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  if ("mail_marketing_gatilho" + iSeq == fieldName) {
    scEventControl_data[fieldName]["blur"] = false;
  }
  scEventControl_data[fieldName]["change"] = false;
} // scEventControl_onFocus

function scEventControl_onBlur(sFieldName) {
  scEventControl_data[sFieldName]["blur"] = false;
  if (scEventControl_data[sFieldName]["change"]) {
        if (scEventControl_data[sFieldName]["original"] == $("#id_sc_field_" + sFieldName).val() || scEventControl_data[sFieldName]["calculated"] == $("#id_sc_field_" + sFieldName).val()) {
          scEventControl_data[sFieldName]["change"] = false;
        }
  }
} // scEventControl_onBlur

function scEventControl_onChange(sFieldName) {
  scEventControl_data[sFieldName]["change"] = false;
} // scEventControl_onChange

function scEventControl_onAutocomp(sFieldName) {
  scEventControl_data[sFieldName]["autocomp"] = false;
} // scEventControl_onChange

var scEventControl_data = {};

function scJQEventsAdd(iSeqRow) {
  $('#id_sc_field_idmail_marketing' + iSeqRow).bind('blur', function() { sc_form_mail_marketing_idmail_marketing_onblur(this, iSeqRow) })
                                              .bind('focus', function() { sc_form_mail_marketing_idmail_marketing_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_marketing_campanha' + iSeqRow).bind('blur', function() { sc_form_mail_marketing_mail_marketing_campanha_onblur(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_mail_marketing_mail_marketing_campanha_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_marketing_lista' + iSeqRow).bind('blur', function() { sc_form_mail_marketing_mail_marketing_lista_onblur(this, iSeqRow) })
                                                  .bind('focus', function() { sc_form_mail_marketing_mail_marketing_lista_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_marketing_emitente' + iSeqRow).bind('blur', function() { sc_form_mail_marketing_mail_marketing_emitente_onblur(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_mail_marketing_mail_marketing_emitente_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_marketing_assunto' + iSeqRow).bind('blur', function() { sc_form_mail_marketing_mail_marketing_assunto_onblur(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_mail_marketing_mail_marketing_assunto_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_marketing_conteudo' + iSeqRow).bind('blur', function() { sc_form_mail_marketing_mail_marketing_conteudo_onblur(this, iSeqRow) })
                                                     .bind('focus', function() { sc_form_mail_marketing_mail_marketing_conteudo_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_marketing_imagem_cabecalho' + iSeqRow).bind('blur', function() { sc_form_mail_marketing_mail_marketing_imagem_cabecalho_onblur(this, iSeqRow) })
                                                             .bind('focus', function() { sc_form_mail_marketing_mail_marketing_imagem_cabecalho_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_marketing_imagem_rodape' + iSeqRow).bind('blur', function() { sc_form_mail_marketing_mail_marketing_imagem_rodape_onblur(this, iSeqRow) })
                                                          .bind('focus', function() { sc_form_mail_marketing_mail_marketing_imagem_rodape_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_marketing_link_conteudo' + iSeqRow).bind('blur', function() { sc_form_mail_marketing_mail_marketing_link_conteudo_onblur(this, iSeqRow) })
                                                          .bind('focus', function() { sc_form_mail_marketing_mail_marketing_link_conteudo_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_marketing_iniciar_quando' + iSeqRow).bind('blur', function() { sc_form_mail_marketing_mail_marketing_iniciar_quando_onblur(this, iSeqRow) })
                                                           .bind('focus', function() { sc_form_mail_marketing_mail_marketing_iniciar_quando_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_marketing_iniciar_quando_hora' + iSeqRow).bind('blur', function() { sc_form_mail_marketing_mail_marketing_iniciar_quando_hora_onblur(this, iSeqRow) })
                                                                .bind('focus', function() { sc_form_mail_marketing_mail_marketing_iniciar_quando_hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_marketing_terminar_quando' + iSeqRow).bind('blur', function() { sc_form_mail_marketing_mail_marketing_terminar_quando_onblur(this, iSeqRow) })
                                                            .bind('focus', function() { sc_form_mail_marketing_mail_marketing_terminar_quando_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_marketing_terminar_quando_hora' + iSeqRow).bind('blur', function() { sc_form_mail_marketing_mail_marketing_terminar_quando_hora_onblur(this, iSeqRow) })
                                                                 .bind('focus', function() { sc_form_mail_marketing_mail_marketing_terminar_quando_hora_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_marketing_gatilho' + iSeqRow).bind('blur', function() { sc_form_mail_marketing_mail_marketing_gatilho_onblur(this, iSeqRow) })
                                                    .bind('change', function() { sc_form_mail_marketing_mail_marketing_gatilho_onchange(this, iSeqRow) })
                                                    .bind('focus', function() { sc_form_mail_marketing_mail_marketing_gatilho_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_mail_marketing_idmail_marketing_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_marketing_validate_idmail_marketing();
  scCssBlur(oThis);
}

function sc_form_mail_marketing_idmail_marketing_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_marketing_mail_marketing_campanha_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_marketing_validate_mail_marketing_campanha();
  scCssBlur(oThis);
}

function sc_form_mail_marketing_mail_marketing_campanha_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_marketing_mail_marketing_lista_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_marketing_validate_mail_marketing_lista();
  scCssBlur(oThis);
}

function sc_form_mail_marketing_mail_marketing_lista_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_marketing_mail_marketing_emitente_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_marketing_validate_mail_marketing_emitente();
  scCssBlur(oThis);
}

function sc_form_mail_marketing_mail_marketing_emitente_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_marketing_mail_marketing_assunto_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_marketing_validate_mail_marketing_assunto();
  scCssBlur(oThis);
}

function sc_form_mail_marketing_mail_marketing_assunto_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_marketing_mail_marketing_conteudo_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_marketing_validate_mail_marketing_conteudo();
  scCssBlur(oThis);
}

function sc_form_mail_marketing_mail_marketing_conteudo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_marketing_mail_marketing_imagem_cabecalho_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_marketing_validate_mail_marketing_imagem_cabecalho();
  scCssBlur(oThis);
}

function sc_form_mail_marketing_mail_marketing_imagem_cabecalho_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_marketing_mail_marketing_imagem_rodape_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_marketing_validate_mail_marketing_imagem_rodape();
  scCssBlur(oThis);
}

function sc_form_mail_marketing_mail_marketing_imagem_rodape_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_marketing_mail_marketing_link_conteudo_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_marketing_validate_mail_marketing_link_conteudo();
  scCssBlur(oThis);
}

function sc_form_mail_marketing_mail_marketing_link_conteudo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_marketing_mail_marketing_iniciar_quando_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_marketing_validate_mail_marketing_iniciar_quando();
  scCssBlur(oThis);
}

function sc_form_mail_marketing_mail_marketing_iniciar_quando_hora_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_marketing_validate_mail_marketing_iniciar_quando();
  scCssBlur(oThis);
}

function sc_form_mail_marketing_mail_marketing_iniciar_quando_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_marketing_mail_marketing_iniciar_quando_hora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_marketing_mail_marketing_terminar_quando_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_marketing_validate_mail_marketing_terminar_quando();
  scCssBlur(oThis);
}

function sc_form_mail_marketing_mail_marketing_terminar_quando_hora_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_marketing_validate_mail_marketing_terminar_quando();
  scCssBlur(oThis);
}

function sc_form_mail_marketing_mail_marketing_terminar_quando_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_marketing_mail_marketing_terminar_quando_hora_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_marketing_mail_marketing_gatilho_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_marketing_validate_mail_marketing_gatilho();
  scCssBlur(oThis);
}

function sc_form_mail_marketing_mail_marketing_gatilho_onchange(oThis, iSeqRow) {
  nm_recarga_form('bloco_0', 0);
}

function sc_form_mail_marketing_mail_marketing_gatilho_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("idmail_marketing", "", status);
	displayChange_field("mail_marketing_campanha", "", status);
	displayChange_field("mail_marketing_emitente", "", status);
	displayChange_field("mail_marketing_lista", "", status);
	displayChange_field("mail_marketing_assunto", "", status);
	displayChange_field("mail_marketing_imagem_cabecalho", "", status);
	displayChange_field("mail_marketing_conteudo", "", status);
	displayChange_field("mail_marketing_link_conteudo", "", status);
	displayChange_field("mail_marketing_imagem_rodape", "", status);
	displayChange_field("mail_marketing_iniciar_quando", "", status);
	displayChange_field("mail_marketing_terminar_quando", "", status);
	displayChange_field("mail_marketing_gatilho", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_idmail_marketing(row, status);
	displayChange_field_mail_marketing_campanha(row, status);
	displayChange_field_mail_marketing_emitente(row, status);
	displayChange_field_mail_marketing_lista(row, status);
	displayChange_field_mail_marketing_assunto(row, status);
	displayChange_field_mail_marketing_imagem_cabecalho(row, status);
	displayChange_field_mail_marketing_conteudo(row, status);
	displayChange_field_mail_marketing_link_conteudo(row, status);
	displayChange_field_mail_marketing_imagem_rodape(row, status);
	displayChange_field_mail_marketing_iniciar_quando(row, status);
	displayChange_field_mail_marketing_terminar_quando(row, status);
	displayChange_field_mail_marketing_gatilho(row, status);
}

function displayChange_field(field, row, status) {
	if ("idmail_marketing" == field) {
		displayChange_field_idmail_marketing(row, status);
	}
	if ("mail_marketing_campanha" == field) {
		displayChange_field_mail_marketing_campanha(row, status);
	}
	if ("mail_marketing_emitente" == field) {
		displayChange_field_mail_marketing_emitente(row, status);
	}
	if ("mail_marketing_lista" == field) {
		displayChange_field_mail_marketing_lista(row, status);
	}
	if ("mail_marketing_assunto" == field) {
		displayChange_field_mail_marketing_assunto(row, status);
	}
	if ("mail_marketing_imagem_cabecalho" == field) {
		displayChange_field_mail_marketing_imagem_cabecalho(row, status);
	}
	if ("mail_marketing_conteudo" == field) {
		displayChange_field_mail_marketing_conteudo(row, status);
	}
	if ("mail_marketing_link_conteudo" == field) {
		displayChange_field_mail_marketing_link_conteudo(row, status);
	}
	if ("mail_marketing_imagem_rodape" == field) {
		displayChange_field_mail_marketing_imagem_rodape(row, status);
	}
	if ("mail_marketing_iniciar_quando" == field) {
		displayChange_field_mail_marketing_iniciar_quando(row, status);
	}
	if ("mail_marketing_terminar_quando" == field) {
		displayChange_field_mail_marketing_terminar_quando(row, status);
	}
	if ("mail_marketing_gatilho" == field) {
		displayChange_field_mail_marketing_gatilho(row, status);
	}
}

function displayChange_field_idmail_marketing(row, status) {
}

function displayChange_field_mail_marketing_campanha(row, status) {
}

function displayChange_field_mail_marketing_emitente(row, status) {
}

function displayChange_field_mail_marketing_lista(row, status) {
}

function displayChange_field_mail_marketing_assunto(row, status) {
}

function displayChange_field_mail_marketing_imagem_cabecalho(row, status) {
}

function displayChange_field_mail_marketing_conteudo(row, status) {
}

function displayChange_field_mail_marketing_link_conteudo(row, status) {
}

function displayChange_field_mail_marketing_imagem_rodape(row, status) {
}

function displayChange_field_mail_marketing_iniciar_quando(row, status) {
}

function displayChange_field_mail_marketing_terminar_quando(row, status) {
}

function displayChange_field_mail_marketing_gatilho(row, status) {
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_mail_marketing_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(27);
		}
	}
}
var sc_jq_calendar_value = {};

function scJQCalendarAdd(iSeqRow) {
  $("#id_sc_field_mail_marketing_iniciar_quando" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_mail_marketing_iniciar_quando" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['mail_marketing_iniciar_quando']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['mail_marketing_iniciar_quando']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_mail_marketing_validate_mail_marketing_iniciar_quando(iSeqRow);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['mail_marketing_iniciar_quando']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "<?php echo $miniCalendarFA; ?>",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "<?php echo $miniCalendarButton[0]; ?>",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });
  $("#id_sc_field_mail_marketing_terminar_quando" + iSeqRow).datepicker({
    beforeShow: function(input, inst) {
      var $oField = $(this),
          aParts  = $oField.val().split(" "),
          sTime   = "";
      sc_jq_calendar_value["#id_sc_field_mail_marketing_terminar_quando" + iSeqRow] = $oField.val();
      if (2 == aParts.length) {
        sTime = " " + aParts[1];
      }
      if ('' == sTime || ' ' == sTime) {
        sTime = ' <?php echo $this->jqueryCalendarTimeStart($this->field_config['mail_marketing_terminar_quando']['date_format']); ?>';
      }
      $oField.datepicker("option", "dateFormat", "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['mail_marketing_terminar_quando']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>" + sTime);
    },
    onClose: function(dateText, inst) {
      do_ajax_form_mail_marketing_validate_mail_marketing_terminar_quando(iSeqRow);
    },
    showWeek: true,
    numberOfMonths: 1,
    changeMonth: true,
    changeYear: true,
    yearRange: 'c-5:c+5',
    dayNames: ["<?php        echo html_entity_decode($this->Ini->Nm_lang['lang_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);        ?>"],
    dayNamesMin: ["<?php     echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_sund'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_mond'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_tued'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_wend'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_thud'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_frid'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_substr_days_satd'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    monthNames: ["<?php      echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_janu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_febr"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_marc"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_apri"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_mayy"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_june"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_july"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_augu"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_sept"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_octo"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_nove"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>","<?php echo html_entity_decode($this->Ini->Nm_lang["lang_mnth_dece"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);      ?>"],
    monthNamesShort: ["<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_janu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_febr'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_marc'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_apri'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_mayy'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_june'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_july'], ENT_COMPAT, $_SESSION['scriptcase']['charset']);   ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_augu'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_sept'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_octo'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_nove'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>","<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_mnth_dece'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>"],
    weekHeader: "<?php echo html_entity_decode($this->Ini->Nm_lang['lang_shrt_days_sem'], ENT_COMPAT, $_SESSION['scriptcase']['charset']); ?>",
    firstDay: <?php echo $this->jqueryCalendarWeekInit("" . $_SESSION['scriptcase']['reg_conf']['date_week_ini'] . ""); ?>,
    dateFormat: "<?php echo $this->jqueryCalendarDtFormat("" . str_replace(array('/', 'aaaa', 'hh', 'ii', 'ss', ':', ';', $_SESSION['scriptcase']['reg_conf']['date_sep'], $_SESSION['scriptcase']['reg_conf']['time_sep']), array('', 'yyyy', '','','', '', '', '', ''), $this->field_config['mail_marketing_terminar_quando']['date_format']) . "", "" . $_SESSION['scriptcase']['reg_conf']['date_sep'] . ""); ?>",
    showOtherMonths: true,
    showOn: "button",
<?php
$miniCalendarIcon   = $this->jqueryIconFile('calendar');
$miniCalendarFA     = $this->jqueryFAFile('calendar');
$miniCalendarButton = $this->jqueryButtonText('calendar');
if ('' != $miniCalendarIcon) {
?>
    buttonImage: "<?php echo $miniCalendarIcon; ?>",
    buttonImageOnly: true,
<?php
}
elseif ('' != $miniCalendarFA) {
?>
    buttonText: "<?php echo $miniCalendarFA; ?>",
<?php
}
elseif ('' != $miniCalendarButton[0]) {
?>
    buttonText: "<?php echo $miniCalendarButton[0]; ?>",
<?php
}
?>
    currentText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_per_today"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
    closeText: "<?php  echo html_entity_decode($this->Ini->Nm_lang["lang_btns_mess_clse"], ENT_COMPAT, $_SESSION["scriptcase"]["charset"]);       ?>",
  });
} // scJQCalendarAdd

function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd

function scJQSelect2Add(seqRow, specificField) {
} // scJQSelect2Add


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQCalendarAdd(iLine);
  scJQUploadAdd(iLine);
  scJQSelect2Add(iLine);
} // scJQElementsAdd

