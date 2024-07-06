/* eslint-disable */
this.BX = this.BX || {};
(function (exports,main_core) {
	'use strict';

	var _templateObject;
	function _classPrivateMethodInitSpec(obj, privateSet) { _checkPrivateRedeclaration(obj, privateSet); privateSet.add(obj); }
	function _classPrivateFieldInitSpec(obj, privateMap, value) { _checkPrivateRedeclaration(obj, privateMap); privateMap.set(obj, value); }
	function _checkPrivateRedeclaration(obj, privateCollection) { if (privateCollection.has(obj)) { throw new TypeError("Cannot initialize the same private elements twice on an object"); } }
	function _classPrivateMethodGet(receiver, privateSet, fn) { if (!privateSet.has(receiver)) { throw new TypeError("attempted to get private field on non-instance"); } return fn; }
	var _container = /*#__PURE__*/new WeakMap();
	var _showLobbyPage = /*#__PURE__*/new WeakSet();
	var Lobby = /*#__PURE__*/function () {
	  function Lobby(params) {
	    babelHelpers.classCallCheck(this, Lobby);
	    _classPrivateMethodInitSpec(this, _showLobbyPage);
	    _classPrivateFieldInitSpec(this, _container, {
	      writable: true,
	      value: void 0
	    });
	    if (!main_core.Type.isDomNode(params.container)) {
	      throw new Error('HTMLElement for render not found');
	    }
	    babelHelpers.classPrivateFieldSet(this, _container, params.container);
	  }
	  babelHelpers.createClass(Lobby, [{
	    key: "show",
	    value: function show() {
	      babelHelpers.classPrivateFieldGet(this, _container).append(_classPrivateMethodGet(this, _showLobbyPage, _showLobbyPage2).call(this));
	    }
	  }]);
	  return Lobby;
	}();
	function _showLobbyPage2() {
	  var _ref = main_core.Tag.render(_templateObject || (_templateObject = babelHelpers.taggedTemplateLiteral(["\n\t\t\t<div class=\"hahariki_lobby\" ref=\"node\">\n\t\t\t\tLobby\n\t\t\t</div>\n\t\t"]))),
	    node = _ref.node;
	  return node;
	}

	exports.Lobby = Lobby;

}((this.BX.Hahariki = this.BX.Hahariki || {}),BX));
