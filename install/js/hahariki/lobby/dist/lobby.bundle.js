/* eslint-disable */
this.BX = this.BX || {};
(function (exports,main_core) {
	'use strict';

	var _templateObject;
	function _classPrivateMethodInitSpec(obj, privateSet) { _checkPrivateRedeclaration(obj, privateSet); privateSet.add(obj); }
	function _checkPrivateRedeclaration(obj, privateCollection) { if (privateCollection.has(obj)) { throw new TypeError("Cannot initialize the same private elements twice on an object"); } }
	function _classPrivateMethodGet(receiver, privateSet, fn) { if (!privateSet.has(receiver)) { throw new TypeError("attempted to get private field on non-instance"); } return fn; }
	var _renderThirdStage = /*#__PURE__*/new WeakSet();
	var SecondStage = /*#__PURE__*/function () {
	  function SecondStage() {
	    babelHelpers.classCallCheck(this, SecondStage);
	    _classPrivateMethodInitSpec(this, _renderThirdStage);
	  }
	  babelHelpers.createClass(SecondStage, [{
	    key: "render",
	    value: function render() {
	      var _ref = main_core.Tag.render(_templateObject || (_templateObject = babelHelpers.taggedTemplateLiteral(["\n\t\t\t<div class=\"hahariki__input-container\" ref=\"node\">\n\t\t\t\t<input class=\"hahariki_input input\" id=\"category\" type=\"text\" placeholder=\"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043A\u0430\u0442\u0435\u0433\u043E\u0440\u0438\u044E\">\n\t\t\t\t<button class=\"button is-info\" ref=\"btn\">\u041E\u0442\u043F\u0440\u0430\u0432\u0438\u0442\u044C</button>\n\t\t\t</div>\n\t\t"]))),
	        node = _ref.node,
	        btn = _ref.btn;
	      main_core.Event.bind(btn, 'click', _classPrivateMethodGet(this, _renderThirdStage, _renderThirdStage2).bind(this));
	      return node;
	    }
	  }]);
	  return SecondStage;
	}();
	function _renderThirdStage2() {
	  var lobby = new Lobby({
	    container: document.getElementById('hahariki-game-lobby')
	  });
	  lobby.show(3);
	}

	var _templateObject$1;
	function _classPrivateMethodInitSpec$1(obj, privateSet) { _checkPrivateRedeclaration$1(obj, privateSet); privateSet.add(obj); }
	function _checkPrivateRedeclaration$1(obj, privateCollection) { if (privateCollection.has(obj)) { throw new TypeError("Cannot initialize the same private elements twice on an object"); } }
	function _classPrivateMethodGet$1(receiver, privateSet, fn) { if (!privateSet.has(receiver)) { throw new TypeError("attempted to get private field on non-instance"); } return fn; }
	var _renderSecondStage = /*#__PURE__*/new WeakSet();
	var Start = /*#__PURE__*/function () {
	  function Start() {
	    babelHelpers.classCallCheck(this, Start);
	    _classPrivateMethodInitSpec$1(this, _renderSecondStage);
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
	      main_core.Event.bind(btn, 'click', _classPrivateMethodGet$1(this, _renderSecondStage, _renderSecondStage2).bind(this));
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
	var ThirdStage = /*#__PURE__*/function () {
	  function ThirdStage() {
	    babelHelpers.classCallCheck(this, ThirdStage);
	  }
	  babelHelpers.createClass(ThirdStage, [{
	    key: "render",
	    value: function render() {
	      var _ref = main_core.Tag.render(_templateObject$2 || (_templateObject$2 = babelHelpers.taggedTemplateLiteral(["\n\t\t\t<div class=\"hahariki__input-container\" ref=\"node\">\n\t\t\t\t<input class=\"hahariki_input input\" placeholder=\"\u0412\u0432\u0435\u0434\u0438\u0442\u0435 \u043F\u0440\u043E\u0434\u043E\u043B\u0436\u0435\u043D\u0438\u0435 \u0444\u0440\u0430\u0437\u044B\">\n\t\t\t\t<button class=\"button is-info\" ref=\"btn\">\u041E\u0442\u043F\u0440\u0430\u0432\u0438\u0442\u044C</button>\n\t\t\t</div>\n\t\t"]))),
	        node = _ref.node,
	        btn = _ref.btn;

	      // Event.bind(
	      // 	btn,
	      // 	'click',
	      // 	this.#renderThirdStage.bind(this),
	      // );x

	      return node;
	    }
	  }]);
	  return ThirdStage;
	}();

	var _templateObject$3;
	function _classPrivateMethodInitSpec$2(obj, privateSet) { _checkPrivateRedeclaration$2(obj, privateSet); privateSet.add(obj); }
	function _classPrivateFieldInitSpec(obj, privateMap, value) { _checkPrivateRedeclaration$2(obj, privateMap); privateMap.set(obj, value); }
	function _checkPrivateRedeclaration$2(obj, privateCollection) { if (privateCollection.has(obj)) { throw new TypeError("Cannot initialize the same private elements twice on an object"); } }
	function _classPrivateMethodGet$2(receiver, privateSet, fn) { if (!privateSet.has(receiver)) { throw new TypeError("attempted to get private field on non-instance"); } return fn; }
	var _container = /*#__PURE__*/new WeakMap();
	var _showLobbyPage = /*#__PURE__*/new WeakSet();
	var _render = /*#__PURE__*/new WeakSet();
	var Lobby = /*#__PURE__*/function () {
	  function Lobby(params) {
	    babelHelpers.classCallCheck(this, Lobby);
	    _classPrivateMethodInitSpec$2(this, _render);
	    _classPrivateMethodInitSpec$2(this, _showLobbyPage);
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
	      babelHelpers.classPrivateFieldGet(this, _container).append(_classPrivateMethodGet$2(this, _showLobbyPage, _showLobbyPage2).call(this, stage));
	    }
	  }]);
	  return Lobby;
	}();
	function _showLobbyPage2(stage) {
	  var _ref = main_core.Tag.render(_templateObject$3 || (_templateObject$3 = babelHelpers.taggedTemplateLiteral(["\n\t\t\t<div class=\"hahariki_lobby\" ref=\"node\">\n\t\t\t\t", "\n\t\t\t</div>\n\t\t"])), _classPrivateMethodGet$2(this, _render, _render2).call(this, stage)),
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
	      // eslint-disable-next-line no-unused-vars,no-case-declarations
	      var third = new ThirdStage();
	      content = third.render();
	      break;
	  }
	  return content;
	}

	exports.Lobby = Lobby;

}((this.BX.Hahariki = this.BX.Hahariki || {}),BX));
