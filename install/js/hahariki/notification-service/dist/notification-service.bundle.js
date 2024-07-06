/* eslint-disable */
this.BX = this.BX || {};
(function (exports,main_core) {
	'use strict';

	let _ = t => t,
	  _t,
	  _t2,
	  _t3;
	var _checkContainer = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("checkContainer");
	var _getErrorWithCrossContainer = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("getErrorWithCrossContainer");
	var _getErrorContainer = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("getErrorContainer");
	class NotificationService {
	  constructor() {
	    Object.defineProperty(this, _getErrorContainer, {
	      value: _getErrorContainer2
	    });
	    Object.defineProperty(this, _getErrorWithCrossContainer, {
	      value: _getErrorWithCrossContainer2
	    });
	    Object.defineProperty(this, _checkContainer, {
	      value: _checkContainer2
	    });
	  }
	  renderError(container, errorPhrase = '', withCross = true, nodeId = '') {
	    babelHelpers.classPrivateFieldLooseBase(this, _checkContainer)[_checkContainer](container);
	    const node = withCross ? babelHelpers.classPrivateFieldLooseBase(this, _getErrorWithCrossContainer)[_getErrorWithCrossContainer](errorPhrase, nodeId) : babelHelpers.classPrivateFieldLooseBase(this, _getErrorContainer)[_getErrorContainer](errorPhrase, nodeId);
	    container.append(node);
	  }
	  renderErrorPage(container, errorPhrase = '') {
	    if (!main_core.Type.isDomNode(container)) {
	      throw new Error('HTMLElement for render error page not found');
	    }
	    const node = main_core.Tag.render(_t || (_t = _`
			<div class="app-layout-subscribe-renew app-layout-error-block">
				<div class="app-layout-icon">
					<div class="app-layout-icon-cloud app-layout-icon-cloud-blue app-layout-icon-cloud-left-top"></div>
						<div class="app-layout-icon-cloud app-layout-icon-cloud-left-bottom"></div>
						<div class="app-layout-icon-cloud app-layout-icon-cloud-blue app-layout-icon-cloud-blue-right app-layout-icon-cloud-right-bottom"></div>
						<div class="app-layout-icon-cloud app-layout-icon-cloud-right app-layout-icon-cloud-right-top"></div>
						<div class="app-layout-icon-main app-layout-icon-main-error">
						<div class="app-layout-icon-refresh"></div>
						<div class="app-layout-icon-circle"></div>
						<div class="app-layout-icon-alert"></div>
					</div>
				</div>
				<p>${0}</p>
			</div>
		`), errorPhrase);
	    container.replaceWith(node);
	  }
	}
	function _checkContainer2(container) {
	  if (!main_core.Type.isDomNode(container)) {
	    throw new Error('HTMLElement for render error not found');
	  }
	}
	function _getErrorWithCrossContainer2(errorPhrase, nodeId) {
	  const {
	    node,
	    cross
	  } = main_core.Tag.render(_t2 || (_t2 = _`
			<div
				class="scrum-tools__error-hint"
				id="${0}"
				ref="node"
			>
				<div class="scrum-tools__error-hint-cross">
					${0}
					<span
						class="popup-window-close-icon"
						ref="cross"
					></span>
				</div>
			</div>
		`), nodeId, errorPhrase);
	  cross.onclick = () => {
	    main_core.Dom.remove(node);
	  };
	  return node;
	}
	function _getErrorContainer2(errorPhrase, nodeId) {
	  return main_core.Tag.render(_t3 || (_t3 = _`
			<div class="scrum-tools__error" id="${0}">
				${0}
			</div>
		`), nodeId, errorPhrase);
	}

	exports.NotificationService = NotificationService;

}((this.BX.Hahariki = this.BX.Hahariki || {}),BX));
//# sourceMappingURL=notification-service.bundle.js.map
