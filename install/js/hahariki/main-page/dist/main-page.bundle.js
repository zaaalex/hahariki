/* eslint-disable */
this.BX = this.BX || {};
(function (exports,main_core) {
	'use strict';

	let _ = t => t,
	  _t,
	  _t2;
	var _userId = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("userId");
	var _container = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("container");
	var _showMainPage = /*#__PURE__*/babelHelpers.classPrivateFieldLooseKey("showMainPage");
	class MainPage {
	  constructor(params) {
	    Object.defineProperty(this, _showMainPage, {
	      value: _showMainPage2
	    });
	    Object.defineProperty(this, _userId, {
	      writable: true,
	      value: void 0
	    });
	    Object.defineProperty(this, _container, {
	      writable: true,
	      value: void 0
	    });
	    if (!main_core.Type.isDomNode(params.container)) {
	      throw new Error('HTMLElement for render not found');
	    }
	    if (!main_core.Type.isNumber(params.userId)) {
	      throw new TypeError('The userId must be a number');
	    }
	    babelHelpers.classPrivateFieldLooseBase(this, _userId)[_userId] = params.userId;
	    babelHelpers.classPrivateFieldLooseBase(this, _container)[_container] = params.container;
	  }
	  show() {
	    babelHelpers.classPrivateFieldLooseBase(this, _container)[_container].append(babelHelpers.classPrivateFieldLooseBase(this, _showMainPage)[_showMainPage]());
	  }
	  async onReloadButtonClick() {
	    const lobbyParams = await BX.ajax.runAction('bitrix:hahariki.Lobby.createLobby', {
	      data: {
	        creatorId: babelHelpers.classPrivateFieldLooseBase(this, _userId)[_userId]
	      }
	    }).then(response => response.data);
	    if (!main_core.Type.isNil(lobbyParams.errors)) {
	      lobbyParams.errors.forEach(error => babelHelpers.classPrivateFieldLooseBase(this, _container)[_container].append(main_core.Tag.render(_t || (_t = _`<div>${0}</div>`), error)));
	    }
	    window.location.href = lobbyParams.lobbyHref;
	  }
	}
	function _showMainPage2() {
	  const {
	    node,
	    btn
	  } = main_core.Tag.render(_t2 || (_t2 = _`
			<div class="" ref="node">
				<button class="hahariki_create-lobby-btn button is-link is-light" ref="btn">
					${0}
				</button>
			</div>
		`), main_core.Loc.getMessage('HAHARIKI__CREATE_BTN_TEXT'));
	  main_core.Event.bind(btn, 'click', this.onReloadButtonClick.bind(this));
	  return node;
	}

	exports.MainPage = MainPage;

}((this.BX.Hahariki = this.BX.Hahariki || {}),BX));
//# sourceMappingURL=main-page.bundle.js.map
