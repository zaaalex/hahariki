/* eslint-disable */
this.BX = this.BX || {};
(function (exports,main_core) {
	'use strict';

	var _templateObject;
	var SecondStage = /*#__PURE__*/function () {
	  function SecondStage() {
	    babelHelpers.classCallCheck(this, SecondStage);
	  }
	  babelHelpers.createClass(SecondStage, [{
	    key: "render",
	    value: function render() {
	      var _ref = main_core.Tag.render(_templateObject || (_templateObject = babelHelpers.taggedTemplateLiteral(["\n\t\t\t<form ref=\"node\">\n\t\t\t\t<label for=\"category\">\n\t\t\t\t\t\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043A\u0430\u0442\u0435\u0433\u043E\u0440\u044E\n\t\t\t\t</label>\n\t\t\t\t<input id=\"category\" type=\"text\">\n\t\t\t\t<button ref=\"btn\">\u041E\u0442\u043F\u0440\u0430\u0432\u0438\u0442\u044C</button>\n\t\t\t</form>\n\t\t"]))),
	        node = _ref.node,
	        btn = _ref.btn;
	      return node;
	    }
	  }]);
	  return SecondStage;
	}();

	var _templateObject$1;
	function _classPrivateMethodInitSpec(obj, privateSet) { _checkPrivateRedeclaration(obj, privateSet); privateSet.add(obj); }
	function _checkPrivateRedeclaration(obj, privateCollection) { if (privateCollection.has(obj)) { throw new TypeError("Cannot initialize the same private elements twice on an object"); } }
	function _classPrivateMethodGet(receiver, privateSet, fn) { if (!privateSet.has(receiver)) { throw new TypeError("attempted to get private field on non-instance"); } return fn; }
	var _renderSecondStage = /*#__PURE__*/new WeakSet();
	var Start = /*#__PURE__*/function () {
	  function Start() {
	    babelHelpers.classCallCheck(this, Start);
	    _classPrivateMethodInitSpec(this, _renderSecondStage);
	  }
	  babelHelpers.createClass(Start, [{
	    key: "renderBtnStart",
	    // #id: number;
	    // #status: number;
	    // #ownerId: number;
	    // #stage: number;
	    // #timestamp: number;
	    // constructor(stage)
	    // {
	    // 	this.#stage = stage;
	    // }
	    value: function renderBtnStart() {
	      var _ref = main_core.Tag.render(_templateObject$1 || (_templateObject$1 = babelHelpers.taggedTemplateLiteral(["\n\t\t\t<div class=\"hahariki_start-container\" ref=\"node\">\n\t\t\t\t<button class=\"hahariki_start-btn button is-info\" ref=\"btn\">\n\t\t\t\t\t\u0421\u0442\u0430\u0440\u0442\n\t\t\t\t</button>\n\t\t\t</div>\n\t\t"]))),
	        node = _ref.node,
	        btn = _ref.btn;
	      main_core.Event.bind(btn, 'click', _classPrivateMethodGet(this, _renderSecondStage, _renderSecondStage2).bind(this));
	      return node;
	    }
	  }]);
	  return Start;
	}();
	function _renderSecondStage2() {
	  var lobby = new Lobby({
	    container: document.getElementById('hahariki-game-lobby')
	  });
	  lobby.show(2);
	}

	var _templateObject$2;
	function _classPrivateMethodInitSpec$1(obj, privateSet) { _checkPrivateRedeclaration$1(obj, privateSet); privateSet.add(obj); }
	function _classPrivateFieldInitSpec(obj, privateMap, value) { _checkPrivateRedeclaration$1(obj, privateMap); privateMap.set(obj, value); }
	function _checkPrivateRedeclaration$1(obj, privateCollection) { if (privateCollection.has(obj)) { throw new TypeError("Cannot initialize the same private elements twice on an object"); } }
	function _classPrivateMethodGet$1(receiver, privateSet, fn) { if (!privateSet.has(receiver)) { throw new TypeError("attempted to get private field on non-instance"); } return fn; }
	var _container = /*#__PURE__*/new WeakMap();
	var _showLobbyPage = /*#__PURE__*/new WeakSet();
	var _render = /*#__PURE__*/new WeakSet();
	var Lobby = /*#__PURE__*/function () {
	  function Lobby(params) {
	    babelHelpers.classCallCheck(this, Lobby);
	    _classPrivateMethodInitSpec$1(this, _render);
	    _classPrivateMethodInitSpec$1(this, _showLobbyPage);
	    _classPrivateFieldInitSpec(this, _container, {
	      writable: true,
	      value: void 0
	    });
	    if (!main_core.Type.isDomNode(params.container)) {
	      throw new Error('HTMLElement for render not found');
	    }

	    // eslint-disable-next-line no-param-reassign
	    params.container.innerHTML = '';
	    babelHelpers.classPrivateFieldSet(this, _container, params.container);
	  }
	  babelHelpers.createClass(Lobby, [{
	    key: "show",
	    value: function show(stage) {
	      babelHelpers.classPrivateFieldGet(this, _container).append(_classPrivateMethodGet$1(this, _showLobbyPage, _showLobbyPage2).call(this, stage));
	    }
	  }]);
	  return Lobby;
	}();
	function _showLobbyPage2(stage) {
	  var _ref = main_core.Tag.render(_templateObject$2 || (_templateObject$2 = babelHelpers.taggedTemplateLiteral(["\n\t\t\t<div class=\"hahariki_lobby\" ref=\"node\">\n\t\t\t\t", "\n\t\t\t</div>\n\t\t"])), _classPrivateMethodGet$1(this, _render, _render2).call(this, stage)),
	    node = _ref.node;
	  return node;
	}
	function _render2(stage) {
	  var content = null;

	  // eslint-disable-next-line default-case
	  // eslint-disable-next-line no-case-declarations,default-case
	  switch (stage) {
	    case 1:
	      // eslint-disable-next-line no-case-declarations
	      var start = new Start();
	      content = start.renderBtnStart();
	      break;
	    case 2:
	      // eslint-disable-next-line no-case-declarations
	      var second = new SecondStage();
	      content = second.render();
	      break;
	    case 3:
	      // eslint-disable-next-line no-unused-vars
	      content = null;
	      break;
	  }
	  return content;
	}

	exports.Lobby = Lobby;

}((this.BX.Hahariki = this.BX.Hahariki || {}),BX));
