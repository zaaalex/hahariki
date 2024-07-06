/* eslint-disable */
this.BX = this.BX || {};
(function (exports,scrumtools_notificationService,main_core_events,ui_entitySelector,main_loader,ui_confetti,ui_dialogs_messagebox,main_core) {
	'use strict';

	let _ = t => t,
	  _t;
	class DialogHeader extends ui_entitySelector.BaseHeader {
	  render() {
	    return this.cache.remember('content', () => {
	      return main_core.Tag.render(_t || (_t = _`
				<div class="project-modifier__project-selector-header">
					${0}
				</div>
			`), main_core.Loc.getMessage('PROJECT_MODIFIER_PROJECT_SELECTOR_TITLE'));
	    });
	  }
	}
	var _tagSelector = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("tagSelector");
	var _getGroupSelectorConfig = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("getGroupSelectorConfig");
	class GroupSelector {
	  constructor() {
	    Object.defineProperty(this, _getGroupSelectorConfig, {
	      value: _getGroupSelectorConfig2
	    });
	    Object.defineProperty(this, _tagSelector, {
	      writable: true,
	      value: void 0
	    });
	  }
	  getSelector() {
	    babelHelpers.classPrivateFieldLooseBase(this, _tagSelector)[_tagSelector] = new ui_entitySelector.TagSelector({
	      addButtonCaption: main_core.Loc.getMessage('PROJECT_MODIFIER_PROJECT_ADD_BTN_TITLE'),
	      placeholder: main_core.Loc.getMessage('PROJECT_MODIFIER_PROJECT_SELECTOR_PLACEHOLDER'),
	      dialogOptions: {
	        header: DialogHeader,
	        hideByEsc: true,
	        enableSearch: true,
	        width: 400,
	        context: 'PROJECT_MODIFIER',
	        entities: babelHelpers.classPrivateFieldLooseBase(this, _getGroupSelectorConfig)[_getGroupSelectorConfig]()
	      }
	    });
	    return babelHelpers.classPrivateFieldLooseBase(this, _tagSelector)[_tagSelector];
	  }
	  getSelectedTags() {
	    return babelHelpers.classPrivateFieldLooseBase(this, _tagSelector)[_tagSelector].getTags();
	  }
	  removeSelectedTags() {
	    babelHelpers.classPrivateFieldLooseBase(this, _tagSelector)[_tagSelector].removeTags();
	  }
	}
	function _getGroupSelectorConfig2() {
	  return [{
	    id: 'project'
	  }];
	}

	let _$1 = t => t,
	  _t$1;
	var _groupSelector = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("groupSelector");
	var _addGroupSelector = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("addGroupSelector");
	var _addHint = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("addHint");
	class InputForm extends main_core_events.EventEmitter {
	  constructor() {
	    super();
	    Object.defineProperty(this, _addHint, {
	      value: _addHint2
	    });
	    Object.defineProperty(this, _addGroupSelector, {
	      value: _addGroupSelector2
	    });
	    Object.defineProperty(this, _groupSelector, {
	      writable: true,
	      value: void 0
	    });
	    babelHelpers.classPrivateFieldLooseBase(this, _groupSelector)[_groupSelector] = new GroupSelector();
	    this.setEventNamespace('ScrumTools.ProjectModifier.InputForm');
	  }
	  clearForm() {
	    babelHelpers.classPrivateFieldLooseBase(this, _groupSelector)[_groupSelector].removeSelectedTags();
	  }
	  getSelectedTags() {
	    return babelHelpers.classPrivateFieldLooseBase(this, _groupSelector)[_groupSelector].getSelectedTags();
	  }
	  render() {
	    const {
	      node,
	      form,
	      selectorContainer
	    } = main_core.Tag.render(_t$1 || (_t$1 = _$1`
			<section aria-label="Form for selecting projects for modernization" ref="node">
				<form class="project-modifier__choose-project-form" ref="form">
					<div class="project-modifier__project-selector" ref="selectorContainer"></div>
					<button 
						class="ui-btn ui-btn-primary project-modifier__submit-button"
						type="submit"
					>
						${0}
					</button>
				</form>
			</section>
		`), main_core.Loc.getMessage('PROJECT_MODIFIER_FORM_SUBMIT_BTN_TEXT'));
	    babelHelpers.classPrivateFieldLooseBase(this, _addGroupSelector)[_addGroupSelector](selectorContainer);
	    babelHelpers.classPrivateFieldLooseBase(this, _addHint)[_addHint](form);

	    // eslint-disable-next-line @bitrix24/bitrix24-rules/no-native-events-binding
	    node.addEventListener('submit', event => {
	      event.preventDefault();
	      this.emit('onProjectModifierFormSubmit');
	    });
	    return node;
	  }
	}
	function _addGroupSelector2(node) {
	  babelHelpers.classPrivateFieldLooseBase(this, _groupSelector)[_groupSelector].getSelector().renderTo(node);
	}
	function _addHint2(node) {
	  node.append(BX.UI.Hint.createNode(main_core.Loc.getMessage('PROJECT_MODIFIER_FORM_HINT')));
	}

	var _notificationService = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("notificationService");
	var _inputForm = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("inputForm");
	var _loader = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("loader");
	var _container = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("container");
	var _notificationContainer = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("notificationContainer");
	var _checkParams = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("checkParams");
	var _handleEvents = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("handleEvents");
	var _onProjectModifierFormSubmit = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("onProjectModifierFormSubmit");
	var _onConfirmModify = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("onConfirmModify");
	var _modifyProject = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("modifyProject");
	var _onSuccessModified = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("onSuccessModified");
	var _onUnsuccessfulModified = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("onUnsuccessfulModified");
	var _showLoader = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("showLoader");
	var _hideLoader = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("hideLoader");
	class ProjectModifier {
	  constructor(_params) {
	    Object.defineProperty(this, _hideLoader, {
	      value: _hideLoader2
	    });
	    Object.defineProperty(this, _showLoader, {
	      value: _showLoader2
	    });
	    Object.defineProperty(this, _onUnsuccessfulModified, {
	      value: _onUnsuccessfulModified2
	    });
	    Object.defineProperty(this, _onSuccessModified, {
	      value: _onSuccessModified2
	    });
	    Object.defineProperty(this, _modifyProject, {
	      value: _modifyProject2
	    });
	    Object.defineProperty(this, _onConfirmModify, {
	      value: _onConfirmModify2
	    });
	    Object.defineProperty(this, _onProjectModifierFormSubmit, {
	      value: _onProjectModifierFormSubmit2
	    });
	    Object.defineProperty(this, _handleEvents, {
	      value: _handleEvents2
	    });
	    Object.defineProperty(this, _checkParams, {
	      value: _checkParams2
	    });
	    Object.defineProperty(this, _notificationService, {
	      writable: true,
	      value: void 0
	    });
	    Object.defineProperty(this, _inputForm, {
	      writable: true,
	      value: void 0
	    });
	    Object.defineProperty(this, _loader, {
	      writable: true,
	      value: void 0
	    });
	    Object.defineProperty(this, _container, {
	      writable: true,
	      value: void 0
	    });
	    Object.defineProperty(this, _notificationContainer, {
	      writable: true,
	      value: void 0
	    });
	    babelHelpers.classPrivateFieldLooseBase(this, _checkParams)[_checkParams](_params);
	    babelHelpers.classPrivateFieldLooseBase(this, _container)[_container] = _params.container;
	    babelHelpers.classPrivateFieldLooseBase(this, _notificationContainer)[_notificationContainer] = _params.notificationContainer;
	    babelHelpers.classPrivateFieldLooseBase(this, _notificationService)[_notificationService] = new scrumtools_notificationService.NotificationService();
	    babelHelpers.classPrivateFieldLooseBase(this, _inputForm)[_inputForm] = new InputForm();
	    babelHelpers.classPrivateFieldLooseBase(this, _loader)[_loader] = new main_loader.Loader({
	      target: babelHelpers.classPrivateFieldLooseBase(this, _container)[_container]
	    });
	    babelHelpers.classPrivateFieldLooseBase(this, _handleEvents)[_handleEvents]();
	  }
	  showForm() {
	    babelHelpers.classPrivateFieldLooseBase(this, _container)[_container].append(babelHelpers.classPrivateFieldLooseBase(this, _inputForm)[_inputForm].render());
	  }
	}
	function _checkParams2(params) {
	  if (!main_core.Type.isDomNode(params.container)) {
	    throw new TypeError('HTMLElement for render project modifier form not found');
	  }
	  if (!main_core.Type.isDomNode(params.notificationContainer)) {
	    throw new TypeError('HTMLElement for render notification not found');
	  }
	}
	function _handleEvents2() {
	  babelHelpers.classPrivateFieldLooseBase(this, _inputForm)[_inputForm].subscribe('onProjectModifierFormSubmit', () => babelHelpers.classPrivateFieldLooseBase(this, _onProjectModifierFormSubmit)[_onProjectModifierFormSubmit]());
	}
	function _onProjectModifierFormSubmit2() {
	  ui_dialogs_messagebox.MessageBox.show({
	    message: main_core.Loc.getMessage('PROJECT_MODIFIER_FORM_HINT'),
	    modal: true,
	    buttons: BX.UI.Dialogs.MessageBoxButtons.OK_CANCEL,
	    onOk: messageBox => {
	      void babelHelpers.classPrivateFieldLooseBase(this, _onConfirmModify)[_onConfirmModify]();
	      messageBox.close();
	    },
	    onCancel: messageBox => {
	      messageBox.close();
	    }
	  });
	}
	async function _onConfirmModify2() {
	  main_core.Dom.clean(babelHelpers.classPrivateFieldLooseBase(this, _notificationContainer)[_notificationContainer]);
	  babelHelpers.classPrivateFieldLooseBase(this, _showLoader)[_showLoader]();
	  const projectsList = babelHelpers.classPrivateFieldLooseBase(this, _inputForm)[_inputForm].getSelectedTags();
	  if (projectsList.length === 0) {
	    babelHelpers.classPrivateFieldLooseBase(this, _notificationService)[_notificationService].renderError(babelHelpers.classPrivateFieldLooseBase(this, _notificationContainer)[_notificationContainer], main_core.Loc.getMessage('PROJECT_MODIFIER_FORM_EMPTY_PROJECT_FIELD_ERROR'));
	    babelHelpers.classPrivateFieldLooseBase(this, _hideLoader)[_hideLoader]();
	    return;
	  }
	  await Promise.allSettled(projectsList.map(project => babelHelpers.classPrivateFieldLooseBase(this, _modifyProject)[_modifyProject](project.id))).then(results => {
	    results.forEach((result, number) => {
	      if (result.status === 'fulfilled') {
	        babelHelpers.classPrivateFieldLooseBase(this, _onSuccessModified)[_onSuccessModified](projectsList[number].title.text);
	      }
	      if (result.status === 'rejected') {
	        babelHelpers.classPrivateFieldLooseBase(this, _onUnsuccessfulModified)[_onUnsuccessfulModified](projectsList[number].title.text);
	        console.error('Upgrading a Scrum project failed', result.reason.errors);
	      }
	    });
	  }).catch(error => {
	    console.error(error);
	  });
	  babelHelpers.classPrivateFieldLooseBase(this, _inputForm)[_inputForm].clearForm();
	  babelHelpers.classPrivateFieldLooseBase(this, _hideLoader)[_hideLoader]();
	}
	function _modifyProject2(projectId) {
	  return BX.ajax.runAction('bitrix:scrumtools.Project.modifyProject', {
	    data: {
	      projectId
	    }
	  });
	}
	function _onSuccessModified2(projectTitle) {
	  const preparedTitle = main_core.Text.encode(projectTitle);
	  BX.UI.Notification.Center.notify({
	    content: main_core.Loc.getMessage('PROJECT_MODIFIER_FORM_HANDLE_SUCCESS', {
	      '#PROJECT_TITLE#': preparedTitle
	    })
	  });
	  ui_confetti.Confetti.fire();
	}
	function _onUnsuccessfulModified2(projectTitle) {
	  const preparedTitle = main_core.Text.encode(projectTitle);
	  babelHelpers.classPrivateFieldLooseBase(this, _notificationService)[_notificationService].renderError(babelHelpers.classPrivateFieldLooseBase(this, _notificationContainer)[_notificationContainer], main_core.Loc.getMessage('PROJECT_MODIFIER_FORM_PROCESSING_ERROR').replace('#PROJECT_TITLE#', preparedTitle));
	}
	function _showLoader2() {
	  void babelHelpers.classPrivateFieldLooseBase(this, _loader)[_loader].show();
	  main_core.Dom.addClass(babelHelpers.classPrivateFieldLooseBase(this, _container)[_container], 'project-modifier__darkened');
	}
	function _hideLoader2() {
	  void babelHelpers.classPrivateFieldLooseBase(this, _loader)[_loader].hide();
	  main_core.Dom.removeClass(babelHelpers.classPrivateFieldLooseBase(this, _container)[_container], 'project-modifier__darkened');
	}

	exports.ProjectModifier = ProjectModifier;

}((this.BX.ScrumTools = this.BX.ScrumTools || {}),BX.ScrumTools,BX.Event,BX.UI.EntitySelector,BX,BX.UI,BX.UI.Dialogs,BX));
//# sourceMappingURL=project-modifier.bundle.js.map
