
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
  scEventControl_data["idmail_meio" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mail_descreva" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mail_usuario" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mail_senha" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mail_smtp" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mail_porta" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mail_seguranca" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
  scEventControl_data["mail_ativo" + iSeqRow] = {"blur": false, "change": false, "autocomp": false, "original": "", "calculated": ""};
}

function scEventControl_active(iSeqRow) {
  if (scEventControl_data["idmail_meio" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["idmail_meio" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mail_descreva" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mail_descreva" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mail_usuario" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mail_usuario" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mail_senha" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mail_senha" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mail_smtp" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mail_smtp" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mail_porta" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mail_porta" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mail_seguranca" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mail_seguranca" + iSeqRow]["change"]) {
    return true;
  }
  if (scEventControl_data["mail_ativo" + iSeqRow]["blur"]) {
    return true;
  }
  if (scEventControl_data["mail_ativo" + iSeqRow]["change"]) {
    return true;
  }
  return false;
} // scEventControl_active

function scEventControl_onFocus(oField, iSeq) {
  var fieldId, fieldName;
  fieldId = $(oField).attr("id");
  fieldName = fieldId.substr(12);
  scEventControl_data[fieldName]["blur"] = true;
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
  $('#id_sc_field_idmail_meio' + iSeqRow).bind('blur', function() { sc_form_mail_meio_idmail_meio_onblur(this, iSeqRow) })
                                         .bind('focus', function() { sc_form_mail_meio_idmail_meio_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_descreva' + iSeqRow).bind('blur', function() { sc_form_mail_meio_mail_descreva_onblur(this, iSeqRow) })
                                           .bind('focus', function() { sc_form_mail_meio_mail_descreva_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_usuario' + iSeqRow).bind('blur', function() { sc_form_mail_meio_mail_usuario_onblur(this, iSeqRow) })
                                          .bind('focus', function() { sc_form_mail_meio_mail_usuario_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_senha' + iSeqRow).bind('blur', function() { sc_form_mail_meio_mail_senha_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_mail_meio_mail_senha_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_smtp' + iSeqRow).bind('blur', function() { sc_form_mail_meio_mail_smtp_onblur(this, iSeqRow) })
                                       .bind('focus', function() { sc_form_mail_meio_mail_smtp_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_porta' + iSeqRow).bind('blur', function() { sc_form_mail_meio_mail_porta_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_mail_meio_mail_porta_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_seguranca' + iSeqRow).bind('blur', function() { sc_form_mail_meio_mail_seguranca_onblur(this, iSeqRow) })
                                            .bind('focus', function() { sc_form_mail_meio_mail_seguranca_onfocus(this, iSeqRow) });
  $('#id_sc_field_mail_ativo' + iSeqRow).bind('blur', function() { sc_form_mail_meio_mail_ativo_onblur(this, iSeqRow) })
                                        .bind('focus', function() { sc_form_mail_meio_mail_ativo_onfocus(this, iSeqRow) });
} // scJQEventsAdd

function sc_form_mail_meio_idmail_meio_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_meio_validate_idmail_meio();
  scCssBlur(oThis);
}

function sc_form_mail_meio_idmail_meio_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_meio_mail_descreva_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_meio_validate_mail_descreva();
  scCssBlur(oThis);
}

function sc_form_mail_meio_mail_descreva_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_meio_mail_usuario_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_meio_validate_mail_usuario();
  scCssBlur(oThis);
}

function sc_form_mail_meio_mail_usuario_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_meio_mail_senha_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_meio_validate_mail_senha();
  scCssBlur(oThis);
}

function sc_form_mail_meio_mail_senha_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_meio_mail_smtp_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_meio_validate_mail_smtp();
  scCssBlur(oThis);
}

function sc_form_mail_meio_mail_smtp_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_meio_mail_porta_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_meio_validate_mail_porta();
  scCssBlur(oThis);
}

function sc_form_mail_meio_mail_porta_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_meio_mail_seguranca_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_meio_validate_mail_seguranca();
  scCssBlur(oThis);
}

function sc_form_mail_meio_mail_seguranca_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function sc_form_mail_meio_mail_ativo_onblur(oThis, iSeqRow) {
  do_ajax_form_mail_meio_validate_mail_ativo();
  scCssBlur(oThis);
}

function sc_form_mail_meio_mail_ativo_onfocus(oThis, iSeqRow) {
  scEventControl_onFocus(oThis, iSeqRow);
  scCssFocus(oThis);
}

function displayChange_block(block, status) {
	if ("0" == block) {
		displayChange_block_0(status);
	}
}

function displayChange_block_0(status) {
	displayChange_field("idmail_meio", "", status);
	displayChange_field("mail_descreva", "", status);
	displayChange_field("mail_usuario", "", status);
	displayChange_field("mail_senha", "", status);
	displayChange_field("mail_smtp", "", status);
	displayChange_field("mail_porta", "", status);
	displayChange_field("mail_seguranca", "", status);
	displayChange_field("mail_ativo", "", status);
}

function displayChange_row(row, status) {
	displayChange_field_idmail_meio(row, status);
	displayChange_field_mail_descreva(row, status);
	displayChange_field_mail_usuario(row, status);
	displayChange_field_mail_senha(row, status);
	displayChange_field_mail_smtp(row, status);
	displayChange_field_mail_porta(row, status);
	displayChange_field_mail_seguranca(row, status);
	displayChange_field_mail_ativo(row, status);
}

function displayChange_field(field, row, status) {
	if ("idmail_meio" == field) {
		displayChange_field_idmail_meio(row, status);
	}
	if ("mail_descreva" == field) {
		displayChange_field_mail_descreva(row, status);
	}
	if ("mail_usuario" == field) {
		displayChange_field_mail_usuario(row, status);
	}
	if ("mail_senha" == field) {
		displayChange_field_mail_senha(row, status);
	}
	if ("mail_smtp" == field) {
		displayChange_field_mail_smtp(row, status);
	}
	if ("mail_porta" == field) {
		displayChange_field_mail_porta(row, status);
	}
	if ("mail_seguranca" == field) {
		displayChange_field_mail_seguranca(row, status);
	}
	if ("mail_ativo" == field) {
		displayChange_field_mail_ativo(row, status);
	}
}

function displayChange_field_idmail_meio(row, status) {
}

function displayChange_field_mail_descreva(row, status) {
}

function displayChange_field_mail_usuario(row, status) {
}

function displayChange_field_mail_senha(row, status) {
}

function displayChange_field_mail_smtp(row, status) {
}

function displayChange_field_mail_porta(row, status) {
}

function displayChange_field_mail_seguranca(row, status) {
}

function displayChange_field_mail_ativo(row, status) {
}

function scRecreateSelect2() {
}
function scResetPagesDisplay() {
	$(".sc-form-page").show();
}

function scHidePage(pageNo) {
	$("#id_form_mail_meio_form" + pageNo).hide();
}

function scCheckNoPageSelected() {
	if (!$(".sc-form-page").filter(".scTabActive").filter(":visible").length) {
		var inactiveTabs = $(".sc-form-page").filter(".scTabInactive").filter(":visible");
		if (inactiveTabs.length) {
			var tabNo = $(inactiveTabs[0]).attr("id").substr(22);
		}
	}
}
function scJQUploadAdd(iSeqRow) {
} // scJQUploadAdd

function scJQSelect2Add(seqRow, specificField) {
} // scJQSelect2Add


function scJQElementsAdd(iLine) {
  scJQEventsAdd(iLine);
  scEventControl_init(iLine);
  scJQUploadAdd(iLine);
  scJQSelect2Add(iLine);
} // scJQElementsAdd

