/* eslint-disable */
this.BX = this.BX || {};
(function (exports,main_core) {
	'use strict';

	var Lobby = /*#__PURE__*/function () {
	  function Lobby() {
	    var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {
	      name: 'Lobby'
	    };
	    babelHelpers.classCallCheck(this, Lobby);
	    this.name = options.name;
	  }
	  babelHelpers.createClass(Lobby, [{
	    key: "setName",
	    value: function setName(name) {
	      if (main_core.Type.isString(name)) {
	        this.name = name;
	      }
	    }
	  }, {
	    key: "getName",
	    value: function getName() {
	      return this.name;
	    }
	  }]);
	  return Lobby;
	}();

	exports.Lobby = Lobby;

}((this.BX.Hahariki = this.BX.Hahariki || {}),BX));
