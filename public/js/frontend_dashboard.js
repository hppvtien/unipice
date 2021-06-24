/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/jquery/dist/jquery.js":
/*!********************************************!*\
  !*** ./node_modules/jquery/dist/jquery.js ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/*!
 * jQuery JavaScript Library v3.6.0
 * https://jquery.com/
 *
 * Includes Sizzle.js
 * https://sizzlejs.com/
 *
 * Copyright OpenJS Foundation and other contributors
 * Released under the MIT license
 * https://jquery.org/license
 *
 * Date: 2021-03-02T17:08Z
 */
( function( global, factory ) {

	"use strict";

	if (  true && typeof module.exports === "object" ) {

		// For CommonJS and CommonJS-like environments where a proper `window`
		// is present, execute the factory and get jQuery.
		// For environments that do not have a `window` with a `document`
		// (such as Node.js), expose a factory as module.exports.
		// This accentuates the need for the creation of a real `window`.
		// e.g. var jQuery = require("jquery")(window);
		// See ticket #14549 for more info.
		module.exports = global.document ?
			factory( global, true ) :
			function( w ) {
				if ( !w.document ) {
					throw new Error( "jQuery requires a window with a document" );
				}
				return factory( w );
			};
	} else {
		factory( global );
	}

// Pass this if window is not defined yet
} )( typeof window !== "undefined" ? window : this, function( window, noGlobal ) {

// Edge <= 12 - 13+, Firefox <=18 - 45+, IE 10 - 11, Safari 5.1 - 9+, iOS 6 - 9.1
// throw exceptions when non-strict code (e.g., ASP.NET 4.5) accesses strict mode
// arguments.callee.caller (trac-13335). But as of jQuery 3.0 (2016), strict mode should be common
// enough that all such attempts are guarded in a try block.
"use strict";

var arr = [];

var getProto = Object.getPrototypeOf;

var slice = arr.slice;

var flat = arr.flat ? function( array ) {
	return arr.flat.call( array );
} : function( array ) {
	return arr.concat.apply( [], array );
};


var push = arr.push;

var indexOf = arr.indexOf;

var class2type = {};

var toString = class2type.toString;

var hasOwn = class2type.hasOwnProperty;

var fnToString = hasOwn.toString;

var ObjectFunctionString = fnToString.call( Object );

var support = {};

var isFunction = function isFunction( obj ) {

		// Support: Chrome <=57, Firefox <=52
		// In some browsers, typeof returns "function" for HTML <object> elements
		// (i.e., `typeof document.createElement( "object" ) === "function"`).
		// We don't want to classify *any* DOM node as a function.
		// Support: QtWeb <=3.8.5, WebKit <=534.34, wkhtmltopdf tool <=0.12.5
		// Plus for old WebKit, typeof returns "function" for HTML collections
		// (e.g., `typeof document.getElementsByTagName("div") === "function"`). (gh-4756)
		return typeof obj === "function" && typeof obj.nodeType !== "number" &&
			typeof obj.item !== "function";
	};


var isWindow = function isWindow( obj ) {
		return obj != null && obj === obj.window;
	};


var document = window.document;



	var preservedScriptAttributes = {
		type: true,
		src: true,
		nonce: true,
		noModule: true
	};

	function DOMEval( code, node, doc ) {
		doc = doc || document;

		var i, val,
			script = doc.createElement( "script" );

		script.text = code;
		if ( node ) {
			for ( i in preservedScriptAttributes ) {

				// Support: Firefox 64+, Edge 18+
				// Some browsers don't support the "nonce" property on scripts.
				// On the other hand, just using `getAttribute` is not enough as
				// the `nonce` attribute is reset to an empty string whenever it
				// becomes browsing-context connected.
				// See https://github.com/whatwg/html/issues/2369
				// See https://html.spec.whatwg.org/#nonce-attributes
				// The `node.getAttribute` check was added for the sake of
				// `jQuery.globalEval` so that it can fake a nonce-containing node
				// via an object.
				val = node[ i ] || node.getAttribute && node.getAttribute( i );
				if ( val ) {
					script.setAttribute( i, val );
				}
			}
		}
		doc.head.appendChild( script ).parentNode.removeChild( script );
	}


function toType( obj ) {
	if ( obj == null ) {
		return obj + "";
	}

	// Support: Android <=2.3 only (functionish RegExp)
	return typeof obj === "object" || typeof obj === "function" ?
		class2type[ toString.call( obj ) ] || "object" :
		typeof obj;
}
/* global Symbol */
// Defining this global in .eslintrc.json would create a danger of using the global
// unguarded in another place, it seems safer to define global only for this module



var
	version = "3.6.0",

	// Define a local copy of jQuery
	jQuery = function( selector, context ) {

		// The jQuery object is actually just the init constructor 'enhanced'
		// Need init if jQuery is called (just allow error to be thrown if not included)
		return new jQuery.fn.init( selector, context );
	};

jQuery.fn = jQuery.prototype = {

	// The current version of jQuery being used
	jquery: version,

	constructor: jQuery,

	// The default length of a jQuery object is 0
	length: 0,

	toArray: function() {
		return slice.call( this );
	},

	// Get the Nth element in the matched element set OR
	// Get the whole matched element set as a clean array
	get: function( num ) {

		// Return all the elements in a clean array
		if ( num == null ) {
			return slice.call( this );
		}

		// Return just the one element from the set
		return num < 0 ? this[ num + this.length ] : this[ num ];
	},

	// Take an array of elements and push it onto the stack
	// (returning the new matched element set)
	pushStack: function( elems ) {

		// Build a new jQuery matched element set
		var ret = jQuery.merge( this.constructor(), elems );

		// Add the old object onto the stack (as a reference)
		ret.prevObject = this;

		// Return the newly-formed element set
		return ret;
	},

	// Execute a callback for every element in the matched set.
	each: function( callback ) {
		return jQuery.each( this, callback );
	},

	map: function( callback ) {
		return this.pushStack( jQuery.map( this, function( elem, i ) {
			return callback.call( elem, i, elem );
		} ) );
	},

	slice: function() {
		return this.pushStack( slice.apply( this, arguments ) );
	},

	first: function() {
		return this.eq( 0 );
	},

	last: function() {
		return this.eq( -1 );
	},

	even: function() {
		return this.pushStack( jQuery.grep( this, function( _elem, i ) {
			return ( i + 1 ) % 2;
		} ) );
	},

	odd: function() {
		return this.pushStack( jQuery.grep( this, function( _elem, i ) {
			return i % 2;
		} ) );
	},

	eq: function( i ) {
		var len = this.length,
			j = +i + ( i < 0 ? len : 0 );
		return this.pushStack( j >= 0 && j < len ? [ this[ j ] ] : [] );
	},

	end: function() {
		return this.prevObject || this.constructor();
	},

	// For internal use only.
	// Behaves like an Array's method, not like a jQuery method.
	push: push,
	sort: arr.sort,
	splice: arr.splice
};

jQuery.extend = jQuery.fn.extend = function() {
	var options, name, src, copy, copyIsArray, clone,
		target = arguments[ 0 ] || {},
		i = 1,
		length = arguments.length,
		deep = false;

	// Handle a deep copy situation
	if ( typeof target === "boolean" ) {
		deep = target;

		// Skip the boolean and the target
		target = arguments[ i ] || {};
		i++;
	}

	// Handle case when target is a string or something (possible in deep copy)
	if ( typeof target !== "object" && !isFunction( target ) ) {
		target = {};
	}

	// Extend jQuery itself if only one argument is passed
	if ( i === length ) {
		target = this;
		i--;
	}

	for ( ; i < length; i++ ) {

		// Only deal with non-null/undefined values
		if ( ( options = arguments[ i ] ) != null ) {

			// Extend the base object
			for ( name in options ) {
				copy = options[ name ];

				// Prevent Object.prototype pollution
				// Prevent never-ending loop
				if ( name === "__proto__" || target === copy ) {
					continue;
				}

				// Recurse if we're merging plain objects or arrays
				if ( deep && copy && ( jQuery.isPlainObject( copy ) ||
					( copyIsArray = Array.isArray( copy ) ) ) ) {
					src = target[ name ];

					// Ensure proper type for the source value
					if ( copyIsArray && !Array.isArray( src ) ) {
						clone = [];
					} else if ( !copyIsArray && !jQuery.isPlainObject( src ) ) {
						clone = {};
					} else {
						clone = src;
					}
					copyIsArray = false;

					// Never move original objects, clone them
					target[ name ] = jQuery.extend( deep, clone, copy );

				// Don't bring in undefined values
				} else if ( copy !== undefined ) {
					target[ name ] = copy;
				}
			}
		}
	}

	// Return the modified object
	return target;
};

jQuery.extend( {

	// Unique for each copy of jQuery on the page
	expando: "jQuery" + ( version + Math.random() ).replace( /\D/g, "" ),

	// Assume jQuery is ready without the ready module
	isReady: true,

	error: function( msg ) {
		throw new Error( msg );
	},

	noop: function() {},

	isPlainObject: function( obj ) {
		var proto, Ctor;

		// Detect obvious negatives
		// Use toString instead of jQuery.type to catch host objects
		if ( !obj || toString.call( obj ) !== "[object Object]" ) {
			return false;
		}

		proto = getProto( obj );

		// Objects with no prototype (e.g., `Object.create( null )`) are plain
		if ( !proto ) {
			return true;
		}

		// Objects with prototype are plain iff they were constructed by a global Object function
		Ctor = hasOwn.call( proto, "constructor" ) && proto.constructor;
		return typeof Ctor === "function" && fnToString.call( Ctor ) === ObjectFunctionString;
	},

	isEmptyObject: function( obj ) {
		var name;

		for ( name in obj ) {
			return false;
		}
		return true;
	},

	// Evaluates a script in a provided context; falls back to the global one
	// if not specified.
	globalEval: function( code, options, doc ) {
		DOMEval( code, { nonce: options && options.nonce }, doc );
	},

	each: function( obj, callback ) {
		var length, i = 0;

		if ( isArrayLike( obj ) ) {
			length = obj.length;
			for ( ; i < length; i++ ) {
				if ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
					break;
				}
			}
		} else {
			for ( i in obj ) {
				if ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
					break;
				}
			}
		}

		return obj;
	},

	// results is for internal usage only
	makeArray: function( arr, results ) {
		var ret = results || [];

		if ( arr != null ) {
			if ( isArrayLike( Object( arr ) ) ) {
				jQuery.merge( ret,
					typeof arr === "string" ?
						[ arr ] : arr
				);
			} else {
				push.call( ret, arr );
			}
		}

		return ret;
	},

	inArray: function( elem, arr, i ) {
		return arr == null ? -1 : indexOf.call( arr, elem, i );
	},

	// Support: Android <=4.0 only, PhantomJS 1 only
	// push.apply(_, arraylike) throws on ancient WebKit
	merge: function( first, second ) {
		var len = +second.length,
			j = 0,
			i = first.length;

		for ( ; j < len; j++ ) {
			first[ i++ ] = second[ j ];
		}

		first.length = i;

		return first;
	},

	grep: function( elems, callback, invert ) {
		var callbackInverse,
			matches = [],
			i = 0,
			length = elems.length,
			callbackExpect = !invert;

		// Go through the array, only saving the items
		// that pass the validator function
		for ( ; i < length; i++ ) {
			callbackInverse = !callback( elems[ i ], i );
			if ( callbackInverse !== callbackExpect ) {
				matches.push( elems[ i ] );
			}
		}

		return matches;
	},

	// arg is for internal usage only
	map: function( elems, callback, arg ) {
		var length, value,
			i = 0,
			ret = [];

		// Go through the array, translating each of the items to their new values
		if ( isArrayLike( elems ) ) {
			length = elems.length;
			for ( ; i < length; i++ ) {
				value = callback( elems[ i ], i, arg );

				if ( value != null ) {
					ret.push( value );
				}
			}

		// Go through every key on the object,
		} else {
			for ( i in elems ) {
				value = callback( elems[ i ], i, arg );

				if ( value != null ) {
					ret.push( value );
				}
			}
		}

		// Flatten any nested arrays
		return flat( ret );
	},

	// A global GUID counter for objects
	guid: 1,

	// jQuery.support is not used in Core but other projects attach their
	// properties to it so it needs to exist.
	support: support
} );

if ( typeof Symbol === "function" ) {
	jQuery.fn[ Symbol.iterator ] = arr[ Symbol.iterator ];
}

// Populate the class2type map
jQuery.each( "Boolean Number String Function Array Date RegExp Object Error Symbol".split( " " ),
	function( _i, name ) {
		class2type[ "[object " + name + "]" ] = name.toLowerCase();
	} );

function isArrayLike( obj ) {

	// Support: real iOS 8.2 only (not reproducible in simulator)
	// `in` check used to prevent JIT error (gh-2145)
	// hasOwn isn't used here due to false negatives
	// regarding Nodelist length in IE
	var length = !!obj && "length" in obj && obj.length,
		type = toType( obj );

	if ( isFunction( obj ) || isWindow( obj ) ) {
		return false;
	}

	return type === "array" || length === 0 ||
		typeof length === "number" && length > 0 && ( length - 1 ) in obj;
}
var Sizzle =
/*!
 * Sizzle CSS Selector Engine v2.3.6
 * https://sizzlejs.com/
 *
 * Copyright JS Foundation and other contributors
 * Released under the MIT license
 * https://js.foundation/
 *
 * Date: 2021-02-16
 */
( function( window ) {
var i,
	support,
	Expr,
	getText,
	isXML,
	tokenize,
	compile,
	select,
	outermostContext,
	sortInput,
	hasDuplicate,

	// Local document vars
	setDocument,
	document,
	docElem,
	documentIsHTML,
	rbuggyQSA,
	rbuggyMatches,
	matches,
	contains,

	// Instance-specific data
	expando = "sizzle" + 1 * new Date(),
	preferredDoc = window.document,
	dirruns = 0,
	done = 0,
	classCache = createCache(),
	tokenCache = createCache(),
	compilerCache = createCache(),
	nonnativeSelectorCache = createCache(),
	sortOrder = function( a, b ) {
		if ( a === b ) {
			hasDuplicate = true;
		}
		return 0;
	},

	// Instance methods
	hasOwn = ( {} ).hasOwnProperty,
	arr = [],
	pop = arr.pop,
	pushNative = arr.push,
	push = arr.push,
	slice = arr.slice,

	// Use a stripped-down indexOf as it's faster than native
	// https://jsperf.com/thor-indexof-vs-for/5
	indexOf = function( list, elem ) {
		var i = 0,
			len = list.length;
		for ( ; i < len; i++ ) {
			if ( list[ i ] === elem ) {
				return i;
			}
		}
		return -1;
	},

	booleans = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|" +
		"ismap|loop|multiple|open|readonly|required|scoped",

	// Regular expressions

	// http://www.w3.org/TR/css3-selectors/#whitespace
	whitespace = "[\\x20\\t\\r\\n\\f]",

	// https://www.w3.org/TR/css-syntax-3/#ident-token-diagram
	identifier = "(?:\\\\[\\da-fA-F]{1,6}" + whitespace +
		"?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",

	// Attribute selectors: http://www.w3.org/TR/selectors/#attribute-selectors
	attributes = "\\[" + whitespace + "*(" + identifier + ")(?:" + whitespace +

		// Operator (capture 2)
		"*([*^$|!~]?=)" + whitespace +

		// "Attribute values must be CSS identifiers [capture 5]
		// or strings [capture 3 or capture 4]"
		"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + identifier + "))|)" +
		whitespace + "*\\]",

	pseudos = ":(" + identifier + ")(?:\\((" +

		// To reduce the number of selectors needing tokenize in the preFilter, prefer arguments:
		// 1. quoted (capture 3; capture 4 or capture 5)
		"('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|" +

		// 2. simple (capture 6)
		"((?:\\\\.|[^\\\\()[\\]]|" + attributes + ")*)|" +

		// 3. anything else (capture 2)
		".*" +
		")\\)|)",

	// Leading and non-escaped trailing whitespace, capturing some non-whitespace characters preceding the latter
	rwhitespace = new RegExp( whitespace + "+", "g" ),
	rtrim = new RegExp( "^" + whitespace + "+|((?:^|[^\\\\])(?:\\\\.)*)" +
		whitespace + "+$", "g" ),

	rcomma = new RegExp( "^" + whitespace + "*," + whitespace + "*" ),
	rcombinators = new RegExp( "^" + whitespace + "*([>+~]|" + whitespace + ")" + whitespace +
		"*" ),
	rdescend = new RegExp( whitespace + "|>" ),

	rpseudo = new RegExp( pseudos ),
	ridentifier = new RegExp( "^" + identifier + "$" ),

	matchExpr = {
		"ID": new RegExp( "^#(" + identifier + ")" ),
		"CLASS": new RegExp( "^\\.(" + identifier + ")" ),
		"TAG": new RegExp( "^(" + identifier + "|[*])" ),
		"ATTR": new RegExp( "^" + attributes ),
		"PSEUDO": new RegExp( "^" + pseudos ),
		"CHILD": new RegExp( "^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" +
			whitespace + "*(even|odd|(([+-]|)(\\d*)n|)" + whitespace + "*(?:([+-]|)" +
			whitespace + "*(\\d+)|))" + whitespace + "*\\)|)", "i" ),
		"bool": new RegExp( "^(?:" + booleans + ")$", "i" ),

		// For use in libraries implementing .is()
		// We use this for POS matching in `select`
		"needsContext": new RegExp( "^" + whitespace +
			"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + whitespace +
			"*((?:-\\d)?\\d*)" + whitespace + "*\\)|)(?=[^-]|$)", "i" )
	},

	rhtml = /HTML$/i,
	rinputs = /^(?:input|select|textarea|button)$/i,
	rheader = /^h\d$/i,

	rnative = /^[^{]+\{\s*\[native \w/,

	// Easily-parseable/retrievable ID or TAG or CLASS selectors
	rquickExpr = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,

	rsibling = /[+~]/,

	// CSS escapes
	// http://www.w3.org/TR/CSS21/syndata.html#escaped-characters
	runescape = new RegExp( "\\\\[\\da-fA-F]{1,6}" + whitespace + "?|\\\\([^\\r\\n\\f])", "g" ),
	funescape = function( escape, nonHex ) {
		var high = "0x" + escape.slice( 1 ) - 0x10000;

		return nonHex ?

			// Strip the backslash prefix from a non-hex escape sequence
			nonHex :

			// Replace a hexadecimal escape sequence with the encoded Unicode code point
			// Support: IE <=11+
			// For values outside the Basic Multilingual Plane (BMP), manually construct a
			// surrogate pair
			high < 0 ?
				String.fromCharCode( high + 0x10000 ) :
				String.fromCharCode( high >> 10 | 0xD800, high & 0x3FF | 0xDC00 );
	},

	// CSS string/identifier serialization
	// https://drafts.csswg.org/cssom/#common-serializing-idioms
	rcssescape = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
	fcssescape = function( ch, asCodePoint ) {
		if ( asCodePoint ) {

			// U+0000 NULL becomes U+FFFD REPLACEMENT CHARACTER
			if ( ch === "\0" ) {
				return "\uFFFD";
			}

			// Control characters and (dependent upon position) numbers get escaped as code points
			return ch.slice( 0, -1 ) + "\\" +
				ch.charCodeAt( ch.length - 1 ).toString( 16 ) + " ";
		}

		// Other potentially-special ASCII characters get backslash-escaped
		return "\\" + ch;
	},

	// Used for iframes
	// See setDocument()
	// Removing the function wrapper causes a "Permission Denied"
	// error in IE
	unloadHandler = function() {
		setDocument();
	},

	inDisabledFieldset = addCombinator(
		function( elem ) {
			return elem.disabled === true && elem.nodeName.toLowerCase() === "fieldset";
		},
		{ dir: "parentNode", next: "legend" }
	);

// Optimize for push.apply( _, NodeList )
try {
	push.apply(
		( arr = slice.call( preferredDoc.childNodes ) ),
		preferredDoc.childNodes
	);

	// Support: Android<4.0
	// Detect silently failing push.apply
	// eslint-disable-next-line no-unused-expressions
	arr[ preferredDoc.childNodes.length ].nodeType;
} catch ( e ) {
	push = { apply: arr.length ?

		// Leverage slice if possible
		function( target, els ) {
			pushNative.apply( target, slice.call( els ) );
		} :

		// Support: IE<9
		// Otherwise append directly
		function( target, els ) {
			var j = target.length,
				i = 0;

			// Can't trust NodeList.length
			while ( ( target[ j++ ] = els[ i++ ] ) ) {}
			target.length = j - 1;
		}
	};
}

function Sizzle( selector, context, results, seed ) {
	var m, i, elem, nid, match, groups, newSelector,
		newContext = context && context.ownerDocument,

		// nodeType defaults to 9, since context defaults to document
		nodeType = context ? context.nodeType : 9;

	results = results || [];

	// Return early from calls with invalid selector or context
	if ( typeof selector !== "string" || !selector ||
		nodeType !== 1 && nodeType !== 9 && nodeType !== 11 ) {

		return results;
	}

	// Try to shortcut find operations (as opposed to filters) in HTML documents
	if ( !seed ) {
		setDocument( context );
		context = context || document;

		if ( documentIsHTML ) {

			// If the selector is sufficiently simple, try using a "get*By*" DOM method
			// (excepting DocumentFragment context, where the methods don't exist)
			if ( nodeType !== 11 && ( match = rquickExpr.exec( selector ) ) ) {

				// ID selector
				if ( ( m = match[ 1 ] ) ) {

					// Document context
					if ( nodeType === 9 ) {
						if ( ( elem = context.getElementById( m ) ) ) {

							// Support: IE, Opera, Webkit
							// TODO: identify versions
							// getElementById can match elements by name instead of ID
							if ( elem.id === m ) {
								results.push( elem );
								return results;
							}
						} else {
							return results;
						}

					// Element context
					} else {

						// Support: IE, Opera, Webkit
						// TODO: identify versions
						// getElementById can match elements by name instead of ID
						if ( newContext && ( elem = newContext.getElementById( m ) ) &&
							contains( context, elem ) &&
							elem.id === m ) {

							results.push( elem );
							return results;
						}
					}

				// Type selector
				} else if ( match[ 2 ] ) {
					push.apply( results, context.getElementsByTagName( selector ) );
					return results;

				// Class selector
				} else if ( ( m = match[ 3 ] ) && support.getElementsByClassName &&
					context.getElementsByClassName ) {

					push.apply( results, context.getElementsByClassName( m ) );
					return results;
				}
			}

			// Take advantage of querySelectorAll
			if ( support.qsa &&
				!nonnativeSelectorCache[ selector + " " ] &&
				( !rbuggyQSA || !rbuggyQSA.test( selector ) ) &&

				// Support: IE 8 only
				// Exclude object elements
				( nodeType !== 1 || context.nodeName.toLowerCase() !== "object" ) ) {

				newSelector = selector;
				newContext = context;

				// qSA considers elements outside a scoping root when evaluating child or
				// descendant combinators, which is not what we want.
				// In such cases, we work around the behavior by prefixing every selector in the
				// list with an ID selector referencing the scope context.
				// The technique has to be used as well when a leading combinator is used
				// as such selectors are not recognized by querySelectorAll.
				// Thanks to Andrew Dupont for this technique.
				if ( nodeType === 1 &&
					( rdescend.test( selector ) || rcombinators.test( selector ) ) ) {

					// Expand context for sibling selectors
					newContext = rsibling.test( selector ) && testContext( context.parentNode ) ||
						context;

					// We can use :scope instead of the ID hack if the browser
					// supports it & if we're not changing the context.
					if ( newContext !== context || !support.scope ) {

						// Capture the context ID, setting it first if necessary
						if ( ( nid = context.getAttribute( "id" ) ) ) {
							nid = nid.replace( rcssescape, fcssescape );
						} else {
							context.setAttribute( "id", ( nid = expando ) );
						}
					}

					// Prefix every selector in the list
					groups = tokenize( selector );
					i = groups.length;
					while ( i-- ) {
						groups[ i ] = ( nid ? "#" + nid : ":scope" ) + " " +
							toSelector( groups[ i ] );
					}
					newSelector = groups.join( "," );
				}

				try {
					push.apply( results,
						newContext.querySelectorAll( newSelector )
					);
					return results;
				} catch ( qsaError ) {
					nonnativeSelectorCache( selector, true );
				} finally {
					if ( nid === expando ) {
						context.removeAttribute( "id" );
					}
				}
			}
		}
	}

	// All others
	return select( selector.replace( rtrim, "$1" ), context, results, seed );
}

/**
 * Create key-value caches of limited size
 * @returns {function(string, object)} Returns the Object data after storing it on itself with
 *	property name the (space-suffixed) string and (if the cache is larger than Expr.cacheLength)
 *	deleting the oldest entry
 */
function createCache() {
	var keys = [];

	function cache( key, value ) {

		// Use (key + " ") to avoid collision with native prototype properties (see Issue #157)
		if ( keys.push( key + " " ) > Expr.cacheLength ) {

			// Only keep the most recent entries
			delete cache[ keys.shift() ];
		}
		return ( cache[ key + " " ] = value );
	}
	return cache;
}

/**
 * Mark a function for special use by Sizzle
 * @param {Function} fn The function to mark
 */
function markFunction( fn ) {
	fn[ expando ] = true;
	return fn;
}

/**
 * Support testing using an element
 * @param {Function} fn Passed the created element and returns a boolean result
 */
function assert( fn ) {
	var el = document.createElement( "fieldset" );

	try {
		return !!fn( el );
	} catch ( e ) {
		return false;
	} finally {

		// Remove from its parent by default
		if ( el.parentNode ) {
			el.parentNode.removeChild( el );
		}

		// release memory in IE
		el = null;
	}
}

/**
 * Adds the same handler for all of the specified attrs
 * @param {String} attrs Pipe-separated list of attributes
 * @param {Function} handler The method that will be applied
 */
function addHandle( attrs, handler ) {
	var arr = attrs.split( "|" ),
		i = arr.length;

	while ( i-- ) {
		Expr.attrHandle[ arr[ i ] ] = handler;
	}
}

/**
 * Checks document order of two siblings
 * @param {Element} a
 * @param {Element} b
 * @returns {Number} Returns less than 0 if a precedes b, greater than 0 if a follows b
 */
function siblingCheck( a, b ) {
	var cur = b && a,
		diff = cur && a.nodeType === 1 && b.nodeType === 1 &&
			a.sourceIndex - b.sourceIndex;

	// Use IE sourceIndex if available on both nodes
	if ( diff ) {
		return diff;
	}

	// Check if b follows a
	if ( cur ) {
		while ( ( cur = cur.nextSibling ) ) {
			if ( cur === b ) {
				return -1;
			}
		}
	}

	return a ? 1 : -1;
}

/**
 * Returns a function to use in pseudos for input types
 * @param {String} type
 */
function createInputPseudo( type ) {
	return function( elem ) {
		var name = elem.nodeName.toLowerCase();
		return name === "input" && elem.type === type;
	};
}

/**
 * Returns a function to use in pseudos for buttons
 * @param {String} type
 */
function createButtonPseudo( type ) {
	return function( elem ) {
		var name = elem.nodeName.toLowerCase();
		return ( name === "input" || name === "button" ) && elem.type === type;
	};
}

/**
 * Returns a function to use in pseudos for :enabled/:disabled
 * @param {Boolean} disabled true for :disabled; false for :enabled
 */
function createDisabledPseudo( disabled ) {

	// Known :disabled false positives: fieldset[disabled] > legend:nth-of-type(n+2) :can-disable
	return function( elem ) {

		// Only certain elements can match :enabled or :disabled
		// https://html.spec.whatwg.org/multipage/scripting.html#selector-enabled
		// https://html.spec.whatwg.org/multipage/scripting.html#selector-disabled
		if ( "form" in elem ) {

			// Check for inherited disabledness on relevant non-disabled elements:
			// * listed form-associated elements in a disabled fieldset
			//   https://html.spec.whatwg.org/multipage/forms.html#category-listed
			//   https://html.spec.whatwg.org/multipage/forms.html#concept-fe-disabled
			// * option elements in a disabled optgroup
			//   https://html.spec.whatwg.org/multipage/forms.html#concept-option-disabled
			// All such elements have a "form" property.
			if ( elem.parentNode && elem.disabled === false ) {

				// Option elements defer to a parent optgroup if present
				if ( "label" in elem ) {
					if ( "label" in elem.parentNode ) {
						return elem.parentNode.disabled === disabled;
					} else {
						return elem.disabled === disabled;
					}
				}

				// Support: IE 6 - 11
				// Use the isDisabled shortcut property to check for disabled fieldset ancestors
				return elem.isDisabled === disabled ||

					// Where there is no isDisabled, check manually
					/* jshint -W018 */
					elem.isDisabled !== !disabled &&
					inDisabledFieldset( elem ) === disabled;
			}

			return elem.disabled === disabled;

		// Try to winnow out elements that can't be disabled before trusting the disabled property.
		// Some victims get caught in our net (label, legend, menu, track), but it shouldn't
		// even exist on them, let alone have a boolean value.
		} else if ( "label" in elem ) {
			return elem.disabled === disabled;
		}

		// Remaining elements are neither :enabled nor :disabled
		return false;
	};
}

/**
 * Returns a function to use in pseudos for positionals
 * @param {Function} fn
 */
function createPositionalPseudo( fn ) {
	return markFunction( function( argument ) {
		argument = +argument;
		return markFunction( function( seed, matches ) {
			var j,
				matchIndexes = fn( [], seed.length, argument ),
				i = matchIndexes.length;

			// Match elements found at the specified indexes
			while ( i-- ) {
				if ( seed[ ( j = matchIndexes[ i ] ) ] ) {
					seed[ j ] = !( matches[ j ] = seed[ j ] );
				}
			}
		} );
	} );
}

/**
 * Checks a node for validity as a Sizzle context
 * @param {Element|Object=} context
 * @returns {Element|Object|Boolean} The input node if acceptable, otherwise a falsy value
 */
function testContext( context ) {
	return context && typeof context.getElementsByTagName !== "undefined" && context;
}

// Expose support vars for convenience
support = Sizzle.support = {};

/**
 * Detects XML nodes
 * @param {Element|Object} elem An element or a document
 * @returns {Boolean} True iff elem is a non-HTML XML node
 */
isXML = Sizzle.isXML = function( elem ) {
	var namespace = elem && elem.namespaceURI,
		docElem = elem && ( elem.ownerDocument || elem ).documentElement;

	// Support: IE <=8
	// Assume HTML when documentElement doesn't yet exist, such as inside loading iframes
	// https://bugs.jquery.com/ticket/4833
	return !rhtml.test( namespace || docElem && docElem.nodeName || "HTML" );
};

/**
 * Sets document-related variables once based on the current document
 * @param {Element|Object} [doc] An element or document object to use to set the document
 * @returns {Object} Returns the current document
 */
setDocument = Sizzle.setDocument = function( node ) {
	var hasCompare, subWindow,
		doc = node ? node.ownerDocument || node : preferredDoc;

	// Return early if doc is invalid or already selected
	// Support: IE 11+, Edge 17 - 18+
	// IE/Edge sometimes throw a "Permission denied" error when strict-comparing
	// two documents; shallow comparisons work.
	// eslint-disable-next-line eqeqeq
	if ( doc == document || doc.nodeType !== 9 || !doc.documentElement ) {
		return document;
	}

	// Update global variables
	document = doc;
	docElem = document.documentElement;
	documentIsHTML = !isXML( document );

	// Support: IE 9 - 11+, Edge 12 - 18+
	// Accessing iframe documents after unload throws "permission denied" errors (jQuery #13936)
	// Support: IE 11+, Edge 17 - 18+
	// IE/Edge sometimes throw a "Permission denied" error when strict-comparing
	// two documents; shallow comparisons work.
	// eslint-disable-next-line eqeqeq
	if ( preferredDoc != document &&
		( subWindow = document.defaultView ) && subWindow.top !== subWindow ) {

		// Support: IE 11, Edge
		if ( subWindow.addEventListener ) {
			subWindow.addEventListener( "unload", unloadHandler, false );

		// Support: IE 9 - 10 only
		} else if ( subWindow.attachEvent ) {
			subWindow.attachEvent( "onunload", unloadHandler );
		}
	}

	// Support: IE 8 - 11+, Edge 12 - 18+, Chrome <=16 - 25 only, Firefox <=3.6 - 31 only,
	// Safari 4 - 5 only, Opera <=11.6 - 12.x only
	// IE/Edge & older browsers don't support the :scope pseudo-class.
	// Support: Safari 6.0 only
	// Safari 6.0 supports :scope but it's an alias of :root there.
	support.scope = assert( function( el ) {
		docElem.appendChild( el ).appendChild( document.createElement( "div" ) );
		return typeof el.querySelectorAll !== "undefined" &&
			!el.querySelectorAll( ":scope fieldset div" ).length;
	} );

	/* Attributes
	---------------------------------------------------------------------- */

	// Support: IE<8
	// Verify that getAttribute really returns attributes and not properties
	// (excepting IE8 booleans)
	support.attributes = assert( function( el ) {
		el.className = "i";
		return !el.getAttribute( "className" );
	} );

	/* getElement(s)By*
	---------------------------------------------------------------------- */

	// Check if getElementsByTagName("*") returns only elements
	support.getElementsByTagName = assert( function( el ) {
		el.appendChild( document.createComment( "" ) );
		return !el.getElementsByTagName( "*" ).length;
	} );

	// Support: IE<9
	support.getElementsByClassName = rnative.test( document.getElementsByClassName );

	// Support: IE<10
	// Check if getElementById returns elements by name
	// The broken getElementById methods don't pick up programmatically-set names,
	// so use a roundabout getElementsByName test
	support.getById = assert( function( el ) {
		docElem.appendChild( el ).id = expando;
		return !document.getElementsByName || !document.getElementsByName( expando ).length;
	} );

	// ID filter and find
	if ( support.getById ) {
		Expr.filter[ "ID" ] = function( id ) {
			var attrId = id.replace( runescape, funescape );
			return function( elem ) {
				return elem.getAttribute( "id" ) === attrId;
			};
		};
		Expr.find[ "ID" ] = function( id, context ) {
			if ( typeof context.getElementById !== "undefined" && documentIsHTML ) {
				var elem = context.getElementById( id );
				return elem ? [ elem ] : [];
			}
		};
	} else {
		Expr.filter[ "ID" ] =  function( id ) {
			var attrId = id.replace( runescape, funescape );
			return function( elem ) {
				var node = typeof elem.getAttributeNode !== "undefined" &&
					elem.getAttributeNode( "id" );
				return node && node.value === attrId;
			};
		};

		// Support: IE 6 - 7 only
		// getElementById is not reliable as a find shortcut
		Expr.find[ "ID" ] = function( id, context ) {
			if ( typeof context.getElementById !== "undefined" && documentIsHTML ) {
				var node, i, elems,
					elem = context.getElementById( id );

				if ( elem ) {

					// Verify the id attribute
					node = elem.getAttributeNode( "id" );
					if ( node && node.value === id ) {
						return [ elem ];
					}

					// Fall back on getElementsByName
					elems = context.getElementsByName( id );
					i = 0;
					while ( ( elem = elems[ i++ ] ) ) {
						node = elem.getAttributeNode( "id" );
						if ( node && node.value === id ) {
							return [ elem ];
						}
					}
				}

				return [];
			}
		};
	}

	// Tag
	Expr.find[ "TAG" ] = support.getElementsByTagName ?
		function( tag, context ) {
			if ( typeof context.getElementsByTagName !== "undefined" ) {
				return context.getElementsByTagName( tag );

			// DocumentFragment nodes don't have gEBTN
			} else if ( support.qsa ) {
				return context.querySelectorAll( tag );
			}
		} :

		function( tag, context ) {
			var elem,
				tmp = [],
				i = 0,

				// By happy coincidence, a (broken) gEBTN appears on DocumentFragment nodes too
				results = context.getElementsByTagName( tag );

			// Filter out possible comments
			if ( tag === "*" ) {
				while ( ( elem = results[ i++ ] ) ) {
					if ( elem.nodeType === 1 ) {
						tmp.push( elem );
					}
				}

				return tmp;
			}
			return results;
		};

	// Class
	Expr.find[ "CLASS" ] = support.getElementsByClassName && function( className, context ) {
		if ( typeof context.getElementsByClassName !== "undefined" && documentIsHTML ) {
			return context.getElementsByClassName( className );
		}
	};

	/* QSA/matchesSelector
	---------------------------------------------------------------------- */

	// QSA and matchesSelector support

	// matchesSelector(:active) reports false when true (IE9/Opera 11.5)
	rbuggyMatches = [];

	// qSa(:focus) reports false when true (Chrome 21)
	// We allow this because of a bug in IE8/9 that throws an error
	// whenever `document.activeElement` is accessed on an iframe
	// So, we allow :focus to pass through QSA all the time to avoid the IE error
	// See https://bugs.jquery.com/ticket/13378
	rbuggyQSA = [];

	if ( ( support.qsa = rnative.test( document.querySelectorAll ) ) ) {

		// Build QSA regex
		// Regex strategy adopted from Diego Perini
		assert( function( el ) {

			var input;

			// Select is set to empty string on purpose
			// This is to test IE's treatment of not explicitly
			// setting a boolean content attribute,
			// since its presence should be enough
			// https://bugs.jquery.com/ticket/12359
			docElem.appendChild( el ).innerHTML = "<a id='" + expando + "'></a>" +
				"<select id='" + expando + "-\r\\' msallowcapture=''>" +
				"<option selected=''></option></select>";

			// Support: IE8, Opera 11-12.16
			// Nothing should be selected when empty strings follow ^= or $= or *=
			// The test attribute must be unknown in Opera but "safe" for WinRT
			// https://msdn.microsoft.com/en-us/library/ie/hh465388.aspx#attribute_section
			if ( el.querySelectorAll( "[msallowcapture^='']" ).length ) {
				rbuggyQSA.push( "[*^$]=" + whitespace + "*(?:''|\"\")" );
			}

			// Support: IE8
			// Boolean attributes and "value" are not treated correctly
			if ( !el.querySelectorAll( "[selected]" ).length ) {
				rbuggyQSA.push( "\\[" + whitespace + "*(?:value|" + booleans + ")" );
			}

			// Support: Chrome<29, Android<4.4, Safari<7.0+, iOS<7.0+, PhantomJS<1.9.8+
			if ( !el.querySelectorAll( "[id~=" + expando + "-]" ).length ) {
				rbuggyQSA.push( "~=" );
			}

			// Support: IE 11+, Edge 15 - 18+
			// IE 11/Edge don't find elements on a `[name='']` query in some cases.
			// Adding a temporary attribute to the document before the selection works
			// around the issue.
			// Interestingly, IE 10 & older don't seem to have the issue.
			input = document.createElement( "input" );
			input.setAttribute( "name", "" );
			el.appendChild( input );
			if ( !el.querySelectorAll( "[name='']" ).length ) {
				rbuggyQSA.push( "\\[" + whitespace + "*name" + whitespace + "*=" +
					whitespace + "*(?:''|\"\")" );
			}

			// Webkit/Opera - :checked should return selected option elements
			// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
			// IE8 throws error here and will not see later tests
			if ( !el.querySelectorAll( ":checked" ).length ) {
				rbuggyQSA.push( ":checked" );
			}

			// Support: Safari 8+, iOS 8+
			// https://bugs.webkit.org/show_bug.cgi?id=136851
			// In-page `selector#id sibling-combinator selector` fails
			if ( !el.querySelectorAll( "a#" + expando + "+*" ).length ) {
				rbuggyQSA.push( ".#.+[+~]" );
			}

			// Support: Firefox <=3.6 - 5 only
			// Old Firefox doesn't throw on a badly-escaped identifier.
			el.querySelectorAll( "\\\f" );
			rbuggyQSA.push( "[\\r\\n\\f]" );
		} );

		assert( function( el ) {
			el.innerHTML = "<a href='' disabled='disabled'></a>" +
				"<select disabled='disabled'><option/></select>";

			// Support: Windows 8 Native Apps
			// The type and name attributes are restricted during .innerHTML assignment
			var input = document.createElement( "input" );
			input.setAttribute( "type", "hidden" );
			el.appendChild( input ).setAttribute( "name", "D" );

			// Support: IE8
			// Enforce case-sensitivity of name attribute
			if ( el.querySelectorAll( "[name=d]" ).length ) {
				rbuggyQSA.push( "name" + whitespace + "*[*^$|!~]?=" );
			}

			// FF 3.5 - :enabled/:disabled and hidden elements (hidden elements are still enabled)
			// IE8 throws error here and will not see later tests
			if ( el.querySelectorAll( ":enabled" ).length !== 2 ) {
				rbuggyQSA.push( ":enabled", ":disabled" );
			}

			// Support: IE9-11+
			// IE's :disabled selector does not pick up the children of disabled fieldsets
			docElem.appendChild( el ).disabled = true;
			if ( el.querySelectorAll( ":disabled" ).length !== 2 ) {
				rbuggyQSA.push( ":enabled", ":disabled" );
			}

			// Support: Opera 10 - 11 only
			// Opera 10-11 does not throw on post-comma invalid pseudos
			el.querySelectorAll( "*,:x" );
			rbuggyQSA.push( ",.*:" );
		} );
	}

	if ( ( support.matchesSelector = rnative.test( ( matches = docElem.matches ||
		docElem.webkitMatchesSelector ||
		docElem.mozMatchesSelector ||
		docElem.oMatchesSelector ||
		docElem.msMatchesSelector ) ) ) ) {

		assert( function( el ) {

			// Check to see if it's possible to do matchesSelector
			// on a disconnected node (IE 9)
			support.disconnectedMatch = matches.call( el, "*" );

			// This should fail with an exception
			// Gecko does not error, returns false instead
			matches.call( el, "[s!='']:x" );
			rbuggyMatches.push( "!=", pseudos );
		} );
	}

	rbuggyQSA = rbuggyQSA.length && new RegExp( rbuggyQSA.join( "|" ) );
	rbuggyMatches = rbuggyMatches.length && new RegExp( rbuggyMatches.join( "|" ) );

	/* Contains
	---------------------------------------------------------------------- */
	hasCompare = rnative.test( docElem.compareDocumentPosition );

	// Element contains another
	// Purposefully self-exclusive
	// As in, an element does not contain itself
	contains = hasCompare || rnative.test( docElem.contains ) ?
		function( a, b ) {
			var adown = a.nodeType === 9 ? a.documentElement : a,
				bup = b && b.parentNode;
			return a === bup || !!( bup && bup.nodeType === 1 && (
				adown.contains ?
					adown.contains( bup ) :
					a.compareDocumentPosition && a.compareDocumentPosition( bup ) & 16
			) );
		} :
		function( a, b ) {
			if ( b ) {
				while ( ( b = b.parentNode ) ) {
					if ( b === a ) {
						return true;
					}
				}
			}
			return false;
		};

	/* Sorting
	---------------------------------------------------------------------- */

	// Document order sorting
	sortOrder = hasCompare ?
	function( a, b ) {

		// Flag for duplicate removal
		if ( a === b ) {
			hasDuplicate = true;
			return 0;
		}

		// Sort on method existence if only one input has compareDocumentPosition
		var compare = !a.compareDocumentPosition - !b.compareDocumentPosition;
		if ( compare ) {
			return compare;
		}

		// Calculate position if both inputs belong to the same document
		// Support: IE 11+, Edge 17 - 18+
		// IE/Edge sometimes throw a "Permission denied" error when strict-comparing
		// two documents; shallow comparisons work.
		// eslint-disable-next-line eqeqeq
		compare = ( a.ownerDocument || a ) == ( b.ownerDocument || b ) ?
			a.compareDocumentPosition( b ) :

			// Otherwise we know they are disconnected
			1;

		// Disconnected nodes
		if ( compare & 1 ||
			( !support.sortDetached && b.compareDocumentPosition( a ) === compare ) ) {

			// Choose the first element that is related to our preferred document
			// Support: IE 11+, Edge 17 - 18+
			// IE/Edge sometimes throw a "Permission denied" error when strict-comparing
			// two documents; shallow comparisons work.
			// eslint-disable-next-line eqeqeq
			if ( a == document || a.ownerDocument == preferredDoc &&
				contains( preferredDoc, a ) ) {
				return -1;
			}

			// Support: IE 11+, Edge 17 - 18+
			// IE/Edge sometimes throw a "Permission denied" error when strict-comparing
			// two documents; shallow comparisons work.
			// eslint-disable-next-line eqeqeq
			if ( b == document || b.ownerDocument == preferredDoc &&
				contains( preferredDoc, b ) ) {
				return 1;
			}

			// Maintain original order
			return sortInput ?
				( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
				0;
		}

		return compare & 4 ? -1 : 1;
	} :
	function( a, b ) {

		// Exit early if the nodes are identical
		if ( a === b ) {
			hasDuplicate = true;
			return 0;
		}

		var cur,
			i = 0,
			aup = a.parentNode,
			bup = b.parentNode,
			ap = [ a ],
			bp = [ b ];

		// Parentless nodes are either documents or disconnected
		if ( !aup || !bup ) {

			// Support: IE 11+, Edge 17 - 18+
			// IE/Edge sometimes throw a "Permission denied" error when strict-comparing
			// two documents; shallow comparisons work.
			/* eslint-disable eqeqeq */
			return a == document ? -1 :
				b == document ? 1 :
				/* eslint-enable eqeqeq */
				aup ? -1 :
				bup ? 1 :
				sortInput ?
				( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
				0;

		// If the nodes are siblings, we can do a quick check
		} else if ( aup === bup ) {
			return siblingCheck( a, b );
		}

		// Otherwise we need full lists of their ancestors for comparison
		cur = a;
		while ( ( cur = cur.parentNode ) ) {
			ap.unshift( cur );
		}
		cur = b;
		while ( ( cur = cur.parentNode ) ) {
			bp.unshift( cur );
		}

		// Walk down the tree looking for a discrepancy
		while ( ap[ i ] === bp[ i ] ) {
			i++;
		}

		return i ?

			// Do a sibling check if the nodes have a common ancestor
			siblingCheck( ap[ i ], bp[ i ] ) :

			// Otherwise nodes in our document sort first
			// Support: IE 11+, Edge 17 - 18+
			// IE/Edge sometimes throw a "Permission denied" error when strict-comparing
			// two documents; shallow comparisons work.
			/* eslint-disable eqeqeq */
			ap[ i ] == preferredDoc ? -1 :
			bp[ i ] == preferredDoc ? 1 :
			/* eslint-enable eqeqeq */
			0;
	};

	return document;
};

Sizzle.matches = function( expr, elements ) {
	return Sizzle( expr, null, null, elements );
};

Sizzle.matchesSelector = function( elem, expr ) {
	setDocument( elem );

	if ( support.matchesSelector && documentIsHTML &&
		!nonnativeSelectorCache[ expr + " " ] &&
		( !rbuggyMatches || !rbuggyMatches.test( expr ) ) &&
		( !rbuggyQSA     || !rbuggyQSA.test( expr ) ) ) {

		try {
			var ret = matches.call( elem, expr );

			// IE 9's matchesSelector returns false on disconnected nodes
			if ( ret || support.disconnectedMatch ||

				// As well, disconnected nodes are said to be in a document
				// fragment in IE 9
				elem.document && elem.document.nodeType !== 11 ) {
				return ret;
			}
		} catch ( e ) {
			nonnativeSelectorCache( expr, true );
		}
	}

	return Sizzle( expr, document, null, [ elem ] ).length > 0;
};

Sizzle.contains = function( context, elem ) {

	// Set document vars if needed
	// Support: IE 11+, Edge 17 - 18+
	// IE/Edge sometimes throw a "Permission denied" error when strict-comparing
	// two documents; shallow comparisons work.
	// eslint-disable-next-line eqeqeq
	if ( ( context.ownerDocument || context ) != document ) {
		setDocument( context );
	}
	return contains( context, elem );
};

Sizzle.attr = function( elem, name ) {

	// Set document vars if needed
	// Support: IE 11+, Edge 17 - 18+
	// IE/Edge sometimes throw a "Permission denied" error when strict-comparing
	// two documents; shallow comparisons work.
	// eslint-disable-next-line eqeqeq
	if ( ( elem.ownerDocument || elem ) != document ) {
		setDocument( elem );
	}

	var fn = Expr.attrHandle[ name.toLowerCase() ],

		// Don't get fooled by Object.prototype properties (jQuery #13807)
		val = fn && hasOwn.call( Expr.attrHandle, name.toLowerCase() ) ?
			fn( elem, name, !documentIsHTML ) :
			undefined;

	return val !== undefined ?
		val :
		support.attributes || !documentIsHTML ?
			elem.getAttribute( name ) :
			( val = elem.getAttributeNode( name ) ) && val.specified ?
				val.value :
				null;
};

Sizzle.escape = function( sel ) {
	return ( sel + "" ).replace( rcssescape, fcssescape );
};

Sizzle.error = function( msg ) {
	throw new Error( "Syntax error, unrecognized expression: " + msg );
};

/**
 * Document sorting and removing duplicates
 * @param {ArrayLike} results
 */
Sizzle.uniqueSort = function( results ) {
	var elem,
		duplicates = [],
		j = 0,
		i = 0;

	// Unless we *know* we can detect duplicates, assume their presence
	hasDuplicate = !support.detectDuplicates;
	sortInput = !support.sortStable && results.slice( 0 );
	results.sort( sortOrder );

	if ( hasDuplicate ) {
		while ( ( elem = results[ i++ ] ) ) {
			if ( elem === results[ i ] ) {
				j = duplicates.push( i );
			}
		}
		while ( j-- ) {
			results.splice( duplicates[ j ], 1 );
		}
	}

	// Clear input after sorting to release objects
	// See https://github.com/jquery/sizzle/pull/225
	sortInput = null;

	return results;
};

/**
 * Utility function for retrieving the text value of an array of DOM nodes
 * @param {Array|Element} elem
 */
getText = Sizzle.getText = function( elem ) {
	var node,
		ret = "",
		i = 0,
		nodeType = elem.nodeType;

	if ( !nodeType ) {

		// If no nodeType, this is expected to be an array
		while ( ( node = elem[ i++ ] ) ) {

			// Do not traverse comment nodes
			ret += getText( node );
		}
	} else if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {

		// Use textContent for elements
		// innerText usage removed for consistency of new lines (jQuery #11153)
		if ( typeof elem.textContent === "string" ) {
			return elem.textContent;
		} else {

			// Traverse its children
			for ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
				ret += getText( elem );
			}
		}
	} else if ( nodeType === 3 || nodeType === 4 ) {
		return elem.nodeValue;
	}

	// Do not include comment or processing instruction nodes

	return ret;
};

Expr = Sizzle.selectors = {

	// Can be adjusted by the user
	cacheLength: 50,

	createPseudo: markFunction,

	match: matchExpr,

	attrHandle: {},

	find: {},

	relative: {
		">": { dir: "parentNode", first: true },
		" ": { dir: "parentNode" },
		"+": { dir: "previousSibling", first: true },
		"~": { dir: "previousSibling" }
	},

	preFilter: {
		"ATTR": function( match ) {
			match[ 1 ] = match[ 1 ].replace( runescape, funescape );

			// Move the given value to match[3] whether quoted or unquoted
			match[ 3 ] = ( match[ 3 ] || match[ 4 ] ||
				match[ 5 ] || "" ).replace( runescape, funescape );

			if ( match[ 2 ] === "~=" ) {
				match[ 3 ] = " " + match[ 3 ] + " ";
			}

			return match.slice( 0, 4 );
		},

		"CHILD": function( match ) {

			/* matches from matchExpr["CHILD"]
				1 type (only|nth|...)
				2 what (child|of-type)
				3 argument (even|odd|\d*|\d*n([+-]\d+)?|...)
				4 xn-component of xn+y argument ([+-]?\d*n|)
				5 sign of xn-component
				6 x of xn-component
				7 sign of y-component
				8 y of y-component
			*/
			match[ 1 ] = match[ 1 ].toLowerCase();

			if ( match[ 1 ].slice( 0, 3 ) === "nth" ) {

				// nth-* requires argument
				if ( !match[ 3 ] ) {
					Sizzle.error( match[ 0 ] );
				}

				// numeric x and y parameters for Expr.filter.CHILD
				// remember that false/true cast respectively to 0/1
				match[ 4 ] = +( match[ 4 ] ?
					match[ 5 ] + ( match[ 6 ] || 1 ) :
					2 * ( match[ 3 ] === "even" || match[ 3 ] === "odd" ) );
				match[ 5 ] = +( ( match[ 7 ] + match[ 8 ] ) || match[ 3 ] === "odd" );

				// other types prohibit arguments
			} else if ( match[ 3 ] ) {
				Sizzle.error( match[ 0 ] );
			}

			return match;
		},

		"PSEUDO": function( match ) {
			var excess,
				unquoted = !match[ 6 ] && match[ 2 ];

			if ( matchExpr[ "CHILD" ].test( match[ 0 ] ) ) {
				return null;
			}

			// Accept quoted arguments as-is
			if ( match[ 3 ] ) {
				match[ 2 ] = match[ 4 ] || match[ 5 ] || "";

			// Strip excess characters from unquoted arguments
			} else if ( unquoted && rpseudo.test( unquoted ) &&

				// Get excess from tokenize (recursively)
				( excess = tokenize( unquoted, true ) ) &&

				// advance to the next closing parenthesis
				( excess = unquoted.indexOf( ")", unquoted.length - excess ) - unquoted.length ) ) {

				// excess is a negative index
				match[ 0 ] = match[ 0 ].slice( 0, excess );
				match[ 2 ] = unquoted.slice( 0, excess );
			}

			// Return only captures needed by the pseudo filter method (type and argument)
			return match.slice( 0, 3 );
		}
	},

	filter: {

		"TAG": function( nodeNameSelector ) {
			var nodeName = nodeNameSelector.replace( runescape, funescape ).toLowerCase();
			return nodeNameSelector === "*" ?
				function() {
					return true;
				} :
				function( elem ) {
					return elem.nodeName && elem.nodeName.toLowerCase() === nodeName;
				};
		},

		"CLASS": function( className ) {
			var pattern = classCache[ className + " " ];

			return pattern ||
				( pattern = new RegExp( "(^|" + whitespace +
					")" + className + "(" + whitespace + "|$)" ) ) && classCache(
						className, function( elem ) {
							return pattern.test(
								typeof elem.className === "string" && elem.className ||
								typeof elem.getAttribute !== "undefined" &&
									elem.getAttribute( "class" ) ||
								""
							);
				} );
		},

		"ATTR": function( name, operator, check ) {
			return function( elem ) {
				var result = Sizzle.attr( elem, name );

				if ( result == null ) {
					return operator === "!=";
				}
				if ( !operator ) {
					return true;
				}

				result += "";

				/* eslint-disable max-len */

				return operator === "=" ? result === check :
					operator === "!=" ? result !== check :
					operator === "^=" ? check && result.indexOf( check ) === 0 :
					operator === "*=" ? check && result.indexOf( check ) > -1 :
					operator === "$=" ? check && result.slice( -check.length ) === check :
					operator === "~=" ? ( " " + result.replace( rwhitespace, " " ) + " " ).indexOf( check ) > -1 :
					operator === "|=" ? result === check || result.slice( 0, check.length + 1 ) === check + "-" :
					false;
				/* eslint-enable max-len */

			};
		},

		"CHILD": function( type, what, _argument, first, last ) {
			var simple = type.slice( 0, 3 ) !== "nth",
				forward = type.slice( -4 ) !== "last",
				ofType = what === "of-type";

			return first === 1 && last === 0 ?

				// Shortcut for :nth-*(n)
				function( elem ) {
					return !!elem.parentNode;
				} :

				function( elem, _context, xml ) {
					var cache, uniqueCache, outerCache, node, nodeIndex, start,
						dir = simple !== forward ? "nextSibling" : "previousSibling",
						parent = elem.parentNode,
						name = ofType && elem.nodeName.toLowerCase(),
						useCache = !xml && !ofType,
						diff = false;

					if ( parent ) {

						// :(first|last|only)-(child|of-type)
						if ( simple ) {
							while ( dir ) {
								node = elem;
								while ( ( node = node[ dir ] ) ) {
									if ( ofType ?
										node.nodeName.toLowerCase() === name :
										node.nodeType === 1 ) {

										return false;
									}
								}

								// Reverse direction for :only-* (if we haven't yet done so)
								start = dir = type === "only" && !start && "nextSibling";
							}
							return true;
						}

						start = [ forward ? parent.firstChild : parent.lastChild ];

						// non-xml :nth-child(...) stores cache data on `parent`
						if ( forward && useCache ) {

							// Seek `elem` from a previously-cached index

							// ...in a gzip-friendly way
							node = parent;
							outerCache = node[ expando ] || ( node[ expando ] = {} );

							// Support: IE <9 only
							// Defend against cloned attroperties (jQuery gh-1709)
							uniqueCache = outerCache[ node.uniqueID ] ||
								( outerCache[ node.uniqueID ] = {} );

							cache = uniqueCache[ type ] || [];
							nodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
							diff = nodeIndex && cache[ 2 ];
							node = nodeIndex && parent.childNodes[ nodeIndex ];

							while ( ( node = ++nodeIndex && node && node[ dir ] ||

								// Fallback to seeking `elem` from the start
								( diff = nodeIndex = 0 ) || start.pop() ) ) {

								// When found, cache indexes on `parent` and break
								if ( node.nodeType === 1 && ++diff && node === elem ) {
									uniqueCache[ type ] = [ dirruns, nodeIndex, diff ];
									break;
								}
							}

						} else {

							// Use previously-cached element index if available
							if ( useCache ) {

								// ...in a gzip-friendly way
								node = elem;
								outerCache = node[ expando ] || ( node[ expando ] = {} );

								// Support: IE <9 only
								// Defend against cloned attroperties (jQuery gh-1709)
								uniqueCache = outerCache[ node.uniqueID ] ||
									( outerCache[ node.uniqueID ] = {} );

								cache = uniqueCache[ type ] || [];
								nodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
								diff = nodeIndex;
							}

							// xml :nth-child(...)
							// or :nth-last-child(...) or :nth(-last)?-of-type(...)
							if ( diff === false ) {

								// Use the same loop as above to seek `elem` from the start
								while ( ( node = ++nodeIndex && node && node[ dir ] ||
									( diff = nodeIndex = 0 ) || start.pop() ) ) {

									if ( ( ofType ?
										node.nodeName.toLowerCase() === name :
										node.nodeType === 1 ) &&
										++diff ) {

										// Cache the index of each encountered element
										if ( useCache ) {
											outerCache = node[ expando ] ||
												( node[ expando ] = {} );

											// Support: IE <9 only
											// Defend against cloned attroperties (jQuery gh-1709)
											uniqueCache = outerCache[ node.uniqueID ] ||
												( outerCache[ node.uniqueID ] = {} );

											uniqueCache[ type ] = [ dirruns, diff ];
										}

										if ( node === elem ) {
											break;
										}
									}
								}
							}
						}

						// Incorporate the offset, then check against cycle size
						diff -= last;
						return diff === first || ( diff % first === 0 && diff / first >= 0 );
					}
				};
		},

		"PSEUDO": function( pseudo, argument ) {

			// pseudo-class names are case-insensitive
			// http://www.w3.org/TR/selectors/#pseudo-classes
			// Prioritize by case sensitivity in case custom pseudos are added with uppercase letters
			// Remember that setFilters inherits from pseudos
			var args,
				fn = Expr.pseudos[ pseudo ] || Expr.setFilters[ pseudo.toLowerCase() ] ||
					Sizzle.error( "unsupported pseudo: " + pseudo );

			// The user may use createPseudo to indicate that
			// arguments are needed to create the filter function
			// just as Sizzle does
			if ( fn[ expando ] ) {
				return fn( argument );
			}

			// But maintain support for old signatures
			if ( fn.length > 1 ) {
				args = [ pseudo, pseudo, "", argument ];
				return Expr.setFilters.hasOwnProperty( pseudo.toLowerCase() ) ?
					markFunction( function( seed, matches ) {
						var idx,
							matched = fn( seed, argument ),
							i = matched.length;
						while ( i-- ) {
							idx = indexOf( seed, matched[ i ] );
							seed[ idx ] = !( matches[ idx ] = matched[ i ] );
						}
					} ) :
					function( elem ) {
						return fn( elem, 0, args );
					};
			}

			return fn;
		}
	},

	pseudos: {

		// Potentially complex pseudos
		"not": markFunction( function( selector ) {

			// Trim the selector passed to compile
			// to avoid treating leading and trailing
			// spaces as combinators
			var input = [],
				results = [],
				matcher = compile( selector.replace( rtrim, "$1" ) );

			return matcher[ expando ] ?
				markFunction( function( seed, matches, _context, xml ) {
					var elem,
						unmatched = matcher( seed, null, xml, [] ),
						i = seed.length;

					// Match elements unmatched by `matcher`
					while ( i-- ) {
						if ( ( elem = unmatched[ i ] ) ) {
							seed[ i ] = !( matches[ i ] = elem );
						}
					}
				} ) :
				function( elem, _context, xml ) {
					input[ 0 ] = elem;
					matcher( input, null, xml, results );

					// Don't keep the element (issue #299)
					input[ 0 ] = null;
					return !results.pop();
				};
		} ),

		"has": markFunction( function( selector ) {
			return function( elem ) {
				return Sizzle( selector, elem ).length > 0;
			};
		} ),

		"contains": markFunction( function( text ) {
			text = text.replace( runescape, funescape );
			return function( elem ) {
				return ( elem.textContent || getText( elem ) ).indexOf( text ) > -1;
			};
		} ),

		// "Whether an element is represented by a :lang() selector
		// is based solely on the element's language value
		// being equal to the identifier C,
		// or beginning with the identifier C immediately followed by "-".
		// The matching of C against the element's language value is performed case-insensitively.
		// The identifier C does not have to be a valid language name."
		// http://www.w3.org/TR/selectors/#lang-pseudo
		"lang": markFunction( function( lang ) {

			// lang value must be a valid identifier
			if ( !ridentifier.test( lang || "" ) ) {
				Sizzle.error( "unsupported lang: " + lang );
			}
			lang = lang.replace( runescape, funescape ).toLowerCase();
			return function( elem ) {
				var elemLang;
				do {
					if ( ( elemLang = documentIsHTML ?
						elem.lang :
						elem.getAttribute( "xml:lang" ) || elem.getAttribute( "lang" ) ) ) {

						elemLang = elemLang.toLowerCase();
						return elemLang === lang || elemLang.indexOf( lang + "-" ) === 0;
					}
				} while ( ( elem = elem.parentNode ) && elem.nodeType === 1 );
				return false;
			};
		} ),

		// Miscellaneous
		"target": function( elem ) {
			var hash = window.location && window.location.hash;
			return hash && hash.slice( 1 ) === elem.id;
		},

		"root": function( elem ) {
			return elem === docElem;
		},

		"focus": function( elem ) {
			return elem === document.activeElement &&
				( !document.hasFocus || document.hasFocus() ) &&
				!!( elem.type || elem.href || ~elem.tabIndex );
		},

		// Boolean properties
		"enabled": createDisabledPseudo( false ),
		"disabled": createDisabledPseudo( true ),

		"checked": function( elem ) {

			// In CSS3, :checked should return both checked and selected elements
			// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
			var nodeName = elem.nodeName.toLowerCase();
			return ( nodeName === "input" && !!elem.checked ) ||
				( nodeName === "option" && !!elem.selected );
		},

		"selected": function( elem ) {

			// Accessing this property makes selected-by-default
			// options in Safari work properly
			if ( elem.parentNode ) {
				// eslint-disable-next-line no-unused-expressions
				elem.parentNode.selectedIndex;
			}

			return elem.selected === true;
		},

		// Contents
		"empty": function( elem ) {

			// http://www.w3.org/TR/selectors/#empty-pseudo
			// :empty is negated by element (1) or content nodes (text: 3; cdata: 4; entity ref: 5),
			//   but not by others (comment: 8; processing instruction: 7; etc.)
			// nodeType < 6 works because attributes (2) do not appear as children
			for ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
				if ( elem.nodeType < 6 ) {
					return false;
				}
			}
			return true;
		},

		"parent": function( elem ) {
			return !Expr.pseudos[ "empty" ]( elem );
		},

		// Element/input types
		"header": function( elem ) {
			return rheader.test( elem.nodeName );
		},

		"input": function( elem ) {
			return rinputs.test( elem.nodeName );
		},

		"button": function( elem ) {
			var name = elem.nodeName.toLowerCase();
			return name === "input" && elem.type === "button" || name === "button";
		},

		"text": function( elem ) {
			var attr;
			return elem.nodeName.toLowerCase() === "input" &&
				elem.type === "text" &&

				// Support: IE<8
				// New HTML5 attribute values (e.g., "search") appear with elem.type === "text"
				( ( attr = elem.getAttribute( "type" ) ) == null ||
					attr.toLowerCase() === "text" );
		},

		// Position-in-collection
		"first": createPositionalPseudo( function() {
			return [ 0 ];
		} ),

		"last": createPositionalPseudo( function( _matchIndexes, length ) {
			return [ length - 1 ];
		} ),

		"eq": createPositionalPseudo( function( _matchIndexes, length, argument ) {
			return [ argument < 0 ? argument + length : argument ];
		} ),

		"even": createPositionalPseudo( function( matchIndexes, length ) {
			var i = 0;
			for ( ; i < length; i += 2 ) {
				matchIndexes.push( i );
			}
			return matchIndexes;
		} ),

		"odd": createPositionalPseudo( function( matchIndexes, length ) {
			var i = 1;
			for ( ; i < length; i += 2 ) {
				matchIndexes.push( i );
			}
			return matchIndexes;
		} ),

		"lt": createPositionalPseudo( function( matchIndexes, length, argument ) {
			var i = argument < 0 ?
				argument + length :
				argument > length ?
					length :
					argument;
			for ( ; --i >= 0; ) {
				matchIndexes.push( i );
			}
			return matchIndexes;
		} ),

		"gt": createPositionalPseudo( function( matchIndexes, length, argument ) {
			var i = argument < 0 ? argument + length : argument;
			for ( ; ++i < length; ) {
				matchIndexes.push( i );
			}
			return matchIndexes;
		} )
	}
};

Expr.pseudos[ "nth" ] = Expr.pseudos[ "eq" ];

// Add button/input type pseudos
for ( i in { radio: true, checkbox: true, file: true, password: true, image: true } ) {
	Expr.pseudos[ i ] = createInputPseudo( i );
}
for ( i in { submit: true, reset: true } ) {
	Expr.pseudos[ i ] = createButtonPseudo( i );
}

// Easy API for creating new setFilters
function setFilters() {}
setFilters.prototype = Expr.filters = Expr.pseudos;
Expr.setFilters = new setFilters();

tokenize = Sizzle.tokenize = function( selector, parseOnly ) {
	var matched, match, tokens, type,
		soFar, groups, preFilters,
		cached = tokenCache[ selector + " " ];

	if ( cached ) {
		return parseOnly ? 0 : cached.slice( 0 );
	}

	soFar = selector;
	groups = [];
	preFilters = Expr.preFilter;

	while ( soFar ) {

		// Comma and first run
		if ( !matched || ( match = rcomma.exec( soFar ) ) ) {
			if ( match ) {

				// Don't consume trailing commas as valid
				soFar = soFar.slice( match[ 0 ].length ) || soFar;
			}
			groups.push( ( tokens = [] ) );
		}

		matched = false;

		// Combinators
		if ( ( match = rcombinators.exec( soFar ) ) ) {
			matched = match.shift();
			tokens.push( {
				value: matched,

				// Cast descendant combinators to space
				type: match[ 0 ].replace( rtrim, " " )
			} );
			soFar = soFar.slice( matched.length );
		}

		// Filters
		for ( type in Expr.filter ) {
			if ( ( match = matchExpr[ type ].exec( soFar ) ) && ( !preFilters[ type ] ||
				( match = preFilters[ type ]( match ) ) ) ) {
				matched = match.shift();
				tokens.push( {
					value: matched,
					type: type,
					matches: match
				} );
				soFar = soFar.slice( matched.length );
			}
		}

		if ( !matched ) {
			break;
		}
	}

	// Return the length of the invalid excess
	// if we're just parsing
	// Otherwise, throw an error or return tokens
	return parseOnly ?
		soFar.length :
		soFar ?
			Sizzle.error( selector ) :

			// Cache the tokens
			tokenCache( selector, groups ).slice( 0 );
};

function toSelector( tokens ) {
	var i = 0,
		len = tokens.length,
		selector = "";
	for ( ; i < len; i++ ) {
		selector += tokens[ i ].value;
	}
	return selector;
}

function addCombinator( matcher, combinator, base ) {
	var dir = combinator.dir,
		skip = combinator.next,
		key = skip || dir,
		checkNonElements = base && key === "parentNode",
		doneName = done++;

	return combinator.first ?

		// Check against closest ancestor/preceding element
		function( elem, context, xml ) {
			while ( ( elem = elem[ dir ] ) ) {
				if ( elem.nodeType === 1 || checkNonElements ) {
					return matcher( elem, context, xml );
				}
			}
			return false;
		} :

		// Check against all ancestor/preceding elements
		function( elem, context, xml ) {
			var oldCache, uniqueCache, outerCache,
				newCache = [ dirruns, doneName ];

			// We can't set arbitrary data on XML nodes, so they don't benefit from combinator caching
			if ( xml ) {
				while ( ( elem = elem[ dir ] ) ) {
					if ( elem.nodeType === 1 || checkNonElements ) {
						if ( matcher( elem, context, xml ) ) {
							return true;
						}
					}
				}
			} else {
				while ( ( elem = elem[ dir ] ) ) {
					if ( elem.nodeType === 1 || checkNonElements ) {
						outerCache = elem[ expando ] || ( elem[ expando ] = {} );

						// Support: IE <9 only
						// Defend against cloned attroperties (jQuery gh-1709)
						uniqueCache = outerCache[ elem.uniqueID ] ||
							( outerCache[ elem.uniqueID ] = {} );

						if ( skip && skip === elem.nodeName.toLowerCase() ) {
							elem = elem[ dir ] || elem;
						} else if ( ( oldCache = uniqueCache[ key ] ) &&
							oldCache[ 0 ] === dirruns && oldCache[ 1 ] === doneName ) {

							// Assign to newCache so results back-propagate to previous elements
							return ( newCache[ 2 ] = oldCache[ 2 ] );
						} else {

							// Reuse newcache so results back-propagate to previous elements
							uniqueCache[ key ] = newCache;

							// A match means we're done; a fail means we have to keep checking
							if ( ( newCache[ 2 ] = matcher( elem, context, xml ) ) ) {
								return true;
							}
						}
					}
				}
			}
			return false;
		};
}

function elementMatcher( matchers ) {
	return matchers.length > 1 ?
		function( elem, context, xml ) {
			var i = matchers.length;
			while ( i-- ) {
				if ( !matchers[ i ]( elem, context, xml ) ) {
					return false;
				}
			}
			return true;
		} :
		matchers[ 0 ];
}

function multipleContexts( selector, contexts, results ) {
	var i = 0,
		len = contexts.length;
	for ( ; i < len; i++ ) {
		Sizzle( selector, contexts[ i ], results );
	}
	return results;
}

function condense( unmatched, map, filter, context, xml ) {
	var elem,
		newUnmatched = [],
		i = 0,
		len = unmatched.length,
		mapped = map != null;

	for ( ; i < len; i++ ) {
		if ( ( elem = unmatched[ i ] ) ) {
			if ( !filter || filter( elem, context, xml ) ) {
				newUnmatched.push( elem );
				if ( mapped ) {
					map.push( i );
				}
			}
		}
	}

	return newUnmatched;
}

function setMatcher( preFilter, selector, matcher, postFilter, postFinder, postSelector ) {
	if ( postFilter && !postFilter[ expando ] ) {
		postFilter = setMatcher( postFilter );
	}
	if ( postFinder && !postFinder[ expando ] ) {
		postFinder = setMatcher( postFinder, postSelector );
	}
	return markFunction( function( seed, results, context, xml ) {
		var temp, i, elem,
			preMap = [],
			postMap = [],
			preexisting = results.length,

			// Get initial elements from seed or context
			elems = seed || multipleContexts(
				selector || "*",
				context.nodeType ? [ context ] : context,
				[]
			),

			// Prefilter to get matcher input, preserving a map for seed-results synchronization
			matcherIn = preFilter && ( seed || !selector ) ?
				condense( elems, preMap, preFilter, context, xml ) :
				elems,

			matcherOut = matcher ?

				// If we have a postFinder, or filtered seed, or non-seed postFilter or preexisting results,
				postFinder || ( seed ? preFilter : preexisting || postFilter ) ?

					// ...intermediate processing is necessary
					[] :

					// ...otherwise use results directly
					results :
				matcherIn;

		// Find primary matches
		if ( matcher ) {
			matcher( matcherIn, matcherOut, context, xml );
		}

		// Apply postFilter
		if ( postFilter ) {
			temp = condense( matcherOut, postMap );
			postFilter( temp, [], context, xml );

			// Un-match failing elements by moving them back to matcherIn
			i = temp.length;
			while ( i-- ) {
				if ( ( elem = temp[ i ] ) ) {
					matcherOut[ postMap[ i ] ] = !( matcherIn[ postMap[ i ] ] = elem );
				}
			}
		}

		if ( seed ) {
			if ( postFinder || preFilter ) {
				if ( postFinder ) {

					// Get the final matcherOut by condensing this intermediate into postFinder contexts
					temp = [];
					i = matcherOut.length;
					while ( i-- ) {
						if ( ( elem = matcherOut[ i ] ) ) {

							// Restore matcherIn since elem is not yet a final match
							temp.push( ( matcherIn[ i ] = elem ) );
						}
					}
					postFinder( null, ( matcherOut = [] ), temp, xml );
				}

				// Move matched elements from seed to results to keep them synchronized
				i = matcherOut.length;
				while ( i-- ) {
					if ( ( elem = matcherOut[ i ] ) &&
						( temp = postFinder ? indexOf( seed, elem ) : preMap[ i ] ) > -1 ) {

						seed[ temp ] = !( results[ temp ] = elem );
					}
				}
			}

		// Add elements to results, through postFinder if defined
		} else {
			matcherOut = condense(
				matcherOut === results ?
					matcherOut.splice( preexisting, matcherOut.length ) :
					matcherOut
			);
			if ( postFinder ) {
				postFinder( null, results, matcherOut, xml );
			} else {
				push.apply( results, matcherOut );
			}
		}
	} );
}

function matcherFromTokens( tokens ) {
	var checkContext, matcher, j,
		len = tokens.length,
		leadingRelative = Expr.relative[ tokens[ 0 ].type ],
		implicitRelative = leadingRelative || Expr.relative[ " " ],
		i = leadingRelative ? 1 : 0,

		// The foundational matcher ensures that elements are reachable from top-level context(s)
		matchContext = addCombinator( function( elem ) {
			return elem === checkContext;
		}, implicitRelative, true ),
		matchAnyContext = addCombinator( function( elem ) {
			return indexOf( checkContext, elem ) > -1;
		}, implicitRelative, true ),
		matchers = [ function( elem, context, xml ) {
			var ret = ( !leadingRelative && ( xml || context !== outermostContext ) ) || (
				( checkContext = context ).nodeType ?
					matchContext( elem, context, xml ) :
					matchAnyContext( elem, context, xml ) );

			// Avoid hanging onto element (issue #299)
			checkContext = null;
			return ret;
		} ];

	for ( ; i < len; i++ ) {
		if ( ( matcher = Expr.relative[ tokens[ i ].type ] ) ) {
			matchers = [ addCombinator( elementMatcher( matchers ), matcher ) ];
		} else {
			matcher = Expr.filter[ tokens[ i ].type ].apply( null, tokens[ i ].matches );

			// Return special upon seeing a positional matcher
			if ( matcher[ expando ] ) {

				// Find the next relative operator (if any) for proper handling
				j = ++i;
				for ( ; j < len; j++ ) {
					if ( Expr.relative[ tokens[ j ].type ] ) {
						break;
					}
				}
				return setMatcher(
					i > 1 && elementMatcher( matchers ),
					i > 1 && toSelector(

					// If the preceding token was a descendant combinator, insert an implicit any-element `*`
					tokens
						.slice( 0, i - 1 )
						.concat( { value: tokens[ i - 2 ].type === " " ? "*" : "" } )
					).replace( rtrim, "$1" ),
					matcher,
					i < j && matcherFromTokens( tokens.slice( i, j ) ),
					j < len && matcherFromTokens( ( tokens = tokens.slice( j ) ) ),
					j < len && toSelector( tokens )
				);
			}
			matchers.push( matcher );
		}
	}

	return elementMatcher( matchers );
}

function matcherFromGroupMatchers( elementMatchers, setMatchers ) {
	var bySet = setMatchers.length > 0,
		byElement = elementMatchers.length > 0,
		superMatcher = function( seed, context, xml, results, outermost ) {
			var elem, j, matcher,
				matchedCount = 0,
				i = "0",
				unmatched = seed && [],
				setMatched = [],
				contextBackup = outermostContext,

				// We must always have either seed elements or outermost context
				elems = seed || byElement && Expr.find[ "TAG" ]( "*", outermost ),

				// Use integer dirruns iff this is the outermost matcher
				dirrunsUnique = ( dirruns += contextBackup == null ? 1 : Math.random() || 0.1 ),
				len = elems.length;

			if ( outermost ) {

				// Support: IE 11+, Edge 17 - 18+
				// IE/Edge sometimes throw a "Permission denied" error when strict-comparing
				// two documents; shallow comparisons work.
				// eslint-disable-next-line eqeqeq
				outermostContext = context == document || context || outermost;
			}

			// Add elements passing elementMatchers directly to results
			// Support: IE<9, Safari
			// Tolerate NodeList properties (IE: "length"; Safari: <number>) matching elements by id
			for ( ; i !== len && ( elem = elems[ i ] ) != null; i++ ) {
				if ( byElement && elem ) {
					j = 0;

					// Support: IE 11+, Edge 17 - 18+
					// IE/Edge sometimes throw a "Permission denied" error when strict-comparing
					// two documents; shallow comparisons work.
					// eslint-disable-next-line eqeqeq
					if ( !context && elem.ownerDocument != document ) {
						setDocument( elem );
						xml = !documentIsHTML;
					}
					while ( ( matcher = elementMatchers[ j++ ] ) ) {
						if ( matcher( elem, context || document, xml ) ) {
							results.push( elem );
							break;
						}
					}
					if ( outermost ) {
						dirruns = dirrunsUnique;
					}
				}

				// Track unmatched elements for set filters
				if ( bySet ) {

					// They will have gone through all possible matchers
					if ( ( elem = !matcher && elem ) ) {
						matchedCount--;
					}

					// Lengthen the array for every element, matched or not
					if ( seed ) {
						unmatched.push( elem );
					}
				}
			}

			// `i` is now the count of elements visited above, and adding it to `matchedCount`
			// makes the latter nonnegative.
			matchedCount += i;

			// Apply set filters to unmatched elements
			// NOTE: This can be skipped if there are no unmatched elements (i.e., `matchedCount`
			// equals `i`), unless we didn't visit _any_ elements in the above loop because we have
			// no element matchers and no seed.
			// Incrementing an initially-string "0" `i` allows `i` to remain a string only in that
			// case, which will result in a "00" `matchedCount` that differs from `i` but is also
			// numerically zero.
			if ( bySet && i !== matchedCount ) {
				j = 0;
				while ( ( matcher = setMatchers[ j++ ] ) ) {
					matcher( unmatched, setMatched, context, xml );
				}

				if ( seed ) {

					// Reintegrate element matches to eliminate the need for sorting
					if ( matchedCount > 0 ) {
						while ( i-- ) {
							if ( !( unmatched[ i ] || setMatched[ i ] ) ) {
								setMatched[ i ] = pop.call( results );
							}
						}
					}

					// Discard index placeholder values to get only actual matches
					setMatched = condense( setMatched );
				}

				// Add matches to results
				push.apply( results, setMatched );

				// Seedless set matches succeeding multiple successful matchers stipulate sorting
				if ( outermost && !seed && setMatched.length > 0 &&
					( matchedCount + setMatchers.length ) > 1 ) {

					Sizzle.uniqueSort( results );
				}
			}

			// Override manipulation of globals by nested matchers
			if ( outermost ) {
				dirruns = dirrunsUnique;
				outermostContext = contextBackup;
			}

			return unmatched;
		};

	return bySet ?
		markFunction( superMatcher ) :
		superMatcher;
}

compile = Sizzle.compile = function( selector, match /* Internal Use Only */ ) {
	var i,
		setMatchers = [],
		elementMatchers = [],
		cached = compilerCache[ selector + " " ];

	if ( !cached ) {

		// Generate a function of recursive functions that can be used to check each element
		if ( !match ) {
			match = tokenize( selector );
		}
		i = match.length;
		while ( i-- ) {
			cached = matcherFromTokens( match[ i ] );
			if ( cached[ expando ] ) {
				setMatchers.push( cached );
			} else {
				elementMatchers.push( cached );
			}
		}

		// Cache the compiled function
		cached = compilerCache(
			selector,
			matcherFromGroupMatchers( elementMatchers, setMatchers )
		);

		// Save selector and tokenization
		cached.selector = selector;
	}
	return cached;
};

/**
 * A low-level selection function that works with Sizzle's compiled
 *  selector functions
 * @param {String|Function} selector A selector or a pre-compiled
 *  selector function built with Sizzle.compile
 * @param {Element} context
 * @param {Array} [results]
 * @param {Array} [seed] A set of elements to match against
 */
select = Sizzle.select = function( selector, context, results, seed ) {
	var i, tokens, token, type, find,
		compiled = typeof selector === "function" && selector,
		match = !seed && tokenize( ( selector = compiled.selector || selector ) );

	results = results || [];

	// Try to minimize operations if there is only one selector in the list and no seed
	// (the latter of which guarantees us context)
	if ( match.length === 1 ) {

		// Reduce context if the leading compound selector is an ID
		tokens = match[ 0 ] = match[ 0 ].slice( 0 );
		if ( tokens.length > 2 && ( token = tokens[ 0 ] ).type === "ID" &&
			context.nodeType === 9 && documentIsHTML && Expr.relative[ tokens[ 1 ].type ] ) {

			context = ( Expr.find[ "ID" ]( token.matches[ 0 ]
				.replace( runescape, funescape ), context ) || [] )[ 0 ];
			if ( !context ) {
				return results;

			// Precompiled matchers will still verify ancestry, so step up a level
			} else if ( compiled ) {
				context = context.parentNode;
			}

			selector = selector.slice( tokens.shift().value.length );
		}

		// Fetch a seed set for right-to-left matching
		i = matchExpr[ "needsContext" ].test( selector ) ? 0 : tokens.length;
		while ( i-- ) {
			token = tokens[ i ];

			// Abort if we hit a combinator
			if ( Expr.relative[ ( type = token.type ) ] ) {
				break;
			}
			if ( ( find = Expr.find[ type ] ) ) {

				// Search, expanding context for leading sibling combinators
				if ( ( seed = find(
					token.matches[ 0 ].replace( runescape, funescape ),
					rsibling.test( tokens[ 0 ].type ) && testContext( context.parentNode ) ||
						context
				) ) ) {

					// If seed is empty or no tokens remain, we can return early
					tokens.splice( i, 1 );
					selector = seed.length && toSelector( tokens );
					if ( !selector ) {
						push.apply( results, seed );
						return results;
					}

					break;
				}
			}
		}
	}

	// Compile and execute a filtering function if one is not provided
	// Provide `match` to avoid retokenization if we modified the selector above
	( compiled || compile( selector, match ) )(
		seed,
		context,
		!documentIsHTML,
		results,
		!context || rsibling.test( selector ) && testContext( context.parentNode ) || context
	);
	return results;
};

// One-time assignments

// Sort stability
support.sortStable = expando.split( "" ).sort( sortOrder ).join( "" ) === expando;

// Support: Chrome 14-35+
// Always assume duplicates if they aren't passed to the comparison function
support.detectDuplicates = !!hasDuplicate;

// Initialize against the default document
setDocument();

// Support: Webkit<537.32 - Safari 6.0.3/Chrome 25 (fixed in Chrome 27)
// Detached nodes confoundingly follow *each other*
support.sortDetached = assert( function( el ) {

	// Should return 1, but returns 4 (following)
	return el.compareDocumentPosition( document.createElement( "fieldset" ) ) & 1;
} );

// Support: IE<8
// Prevent attribute/property "interpolation"
// https://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx
if ( !assert( function( el ) {
	el.innerHTML = "<a href='#'></a>";
	return el.firstChild.getAttribute( "href" ) === "#";
} ) ) {
	addHandle( "type|href|height|width", function( elem, name, isXML ) {
		if ( !isXML ) {
			return elem.getAttribute( name, name.toLowerCase() === "type" ? 1 : 2 );
		}
	} );
}

// Support: IE<9
// Use defaultValue in place of getAttribute("value")
if ( !support.attributes || !assert( function( el ) {
	el.innerHTML = "<input/>";
	el.firstChild.setAttribute( "value", "" );
	return el.firstChild.getAttribute( "value" ) === "";
} ) ) {
	addHandle( "value", function( elem, _name, isXML ) {
		if ( !isXML && elem.nodeName.toLowerCase() === "input" ) {
			return elem.defaultValue;
		}
	} );
}

// Support: IE<9
// Use getAttributeNode to fetch booleans when getAttribute lies
if ( !assert( function( el ) {
	return el.getAttribute( "disabled" ) == null;
} ) ) {
	addHandle( booleans, function( elem, name, isXML ) {
		var val;
		if ( !isXML ) {
			return elem[ name ] === true ? name.toLowerCase() :
				( val = elem.getAttributeNode( name ) ) && val.specified ?
					val.value :
					null;
		}
	} );
}

return Sizzle;

} )( window );



jQuery.find = Sizzle;
jQuery.expr = Sizzle.selectors;

// Deprecated
jQuery.expr[ ":" ] = jQuery.expr.pseudos;
jQuery.uniqueSort = jQuery.unique = Sizzle.uniqueSort;
jQuery.text = Sizzle.getText;
jQuery.isXMLDoc = Sizzle.isXML;
jQuery.contains = Sizzle.contains;
jQuery.escapeSelector = Sizzle.escape;




var dir = function( elem, dir, until ) {
	var matched = [],
		truncate = until !== undefined;

	while ( ( elem = elem[ dir ] ) && elem.nodeType !== 9 ) {
		if ( elem.nodeType === 1 ) {
			if ( truncate && jQuery( elem ).is( until ) ) {
				break;
			}
			matched.push( elem );
		}
	}
	return matched;
};


var siblings = function( n, elem ) {
	var matched = [];

	for ( ; n; n = n.nextSibling ) {
		if ( n.nodeType === 1 && n !== elem ) {
			matched.push( n );
		}
	}

	return matched;
};


var rneedsContext = jQuery.expr.match.needsContext;



function nodeName( elem, name ) {

	return elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();

}
var rsingleTag = ( /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i );



// Implement the identical functionality for filter and not
function winnow( elements, qualifier, not ) {
	if ( isFunction( qualifier ) ) {
		return jQuery.grep( elements, function( elem, i ) {
			return !!qualifier.call( elem, i, elem ) !== not;
		} );
	}

	// Single element
	if ( qualifier.nodeType ) {
		return jQuery.grep( elements, function( elem ) {
			return ( elem === qualifier ) !== not;
		} );
	}

	// Arraylike of elements (jQuery, arguments, Array)
	if ( typeof qualifier !== "string" ) {
		return jQuery.grep( elements, function( elem ) {
			return ( indexOf.call( qualifier, elem ) > -1 ) !== not;
		} );
	}

	// Filtered directly for both simple and complex selectors
	return jQuery.filter( qualifier, elements, not );
}

jQuery.filter = function( expr, elems, not ) {
	var elem = elems[ 0 ];

	if ( not ) {
		expr = ":not(" + expr + ")";
	}

	if ( elems.length === 1 && elem.nodeType === 1 ) {
		return jQuery.find.matchesSelector( elem, expr ) ? [ elem ] : [];
	}

	return jQuery.find.matches( expr, jQuery.grep( elems, function( elem ) {
		return elem.nodeType === 1;
	} ) );
};

jQuery.fn.extend( {
	find: function( selector ) {
		var i, ret,
			len = this.length,
			self = this;

		if ( typeof selector !== "string" ) {
			return this.pushStack( jQuery( selector ).filter( function() {
				for ( i = 0; i < len; i++ ) {
					if ( jQuery.contains( self[ i ], this ) ) {
						return true;
					}
				}
			} ) );
		}

		ret = this.pushStack( [] );

		for ( i = 0; i < len; i++ ) {
			jQuery.find( selector, self[ i ], ret );
		}

		return len > 1 ? jQuery.uniqueSort( ret ) : ret;
	},
	filter: function( selector ) {
		return this.pushStack( winnow( this, selector || [], false ) );
	},
	not: function( selector ) {
		return this.pushStack( winnow( this, selector || [], true ) );
	},
	is: function( selector ) {
		return !!winnow(
			this,

			// If this is a positional/relative selector, check membership in the returned set
			// so $("p:first").is("p:last") won't return true for a doc with two "p".
			typeof selector === "string" && rneedsContext.test( selector ) ?
				jQuery( selector ) :
				selector || [],
			false
		).length;
	}
} );


// Initialize a jQuery object


// A central reference to the root jQuery(document)
var rootjQuery,

	// A simple way to check for HTML strings
	// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
	// Strict HTML recognition (#11290: must start with <)
	// Shortcut simple #id case for speed
	rquickExpr = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/,

	init = jQuery.fn.init = function( selector, context, root ) {
		var match, elem;

		// HANDLE: $(""), $(null), $(undefined), $(false)
		if ( !selector ) {
			return this;
		}

		// Method init() accepts an alternate rootjQuery
		// so migrate can support jQuery.sub (gh-2101)
		root = root || rootjQuery;

		// Handle HTML strings
		if ( typeof selector === "string" ) {
			if ( selector[ 0 ] === "<" &&
				selector[ selector.length - 1 ] === ">" &&
				selector.length >= 3 ) {

				// Assume that strings that start and end with <> are HTML and skip the regex check
				match = [ null, selector, null ];

			} else {
				match = rquickExpr.exec( selector );
			}

			// Match html or make sure no context is specified for #id
			if ( match && ( match[ 1 ] || !context ) ) {

				// HANDLE: $(html) -> $(array)
				if ( match[ 1 ] ) {
					context = context instanceof jQuery ? context[ 0 ] : context;

					// Option to run scripts is true for back-compat
					// Intentionally let the error be thrown if parseHTML is not present
					jQuery.merge( this, jQuery.parseHTML(
						match[ 1 ],
						context && context.nodeType ? context.ownerDocument || context : document,
						true
					) );

					// HANDLE: $(html, props)
					if ( rsingleTag.test( match[ 1 ] ) && jQuery.isPlainObject( context ) ) {
						for ( match in context ) {

							// Properties of context are called as methods if possible
							if ( isFunction( this[ match ] ) ) {
								this[ match ]( context[ match ] );

							// ...and otherwise set as attributes
							} else {
								this.attr( match, context[ match ] );
							}
						}
					}

					return this;

				// HANDLE: $(#id)
				} else {
					elem = document.getElementById( match[ 2 ] );

					if ( elem ) {

						// Inject the element directly into the jQuery object
						this[ 0 ] = elem;
						this.length = 1;
					}
					return this;
				}

			// HANDLE: $(expr, $(...))
			} else if ( !context || context.jquery ) {
				return ( context || root ).find( selector );

			// HANDLE: $(expr, context)
			// (which is just equivalent to: $(context).find(expr)
			} else {
				return this.constructor( context ).find( selector );
			}

		// HANDLE: $(DOMElement)
		} else if ( selector.nodeType ) {
			this[ 0 ] = selector;
			this.length = 1;
			return this;

		// HANDLE: $(function)
		// Shortcut for document ready
		} else if ( isFunction( selector ) ) {
			return root.ready !== undefined ?
				root.ready( selector ) :

				// Execute immediately if ready is not present
				selector( jQuery );
		}

		return jQuery.makeArray( selector, this );
	};

// Give the init function the jQuery prototype for later instantiation
init.prototype = jQuery.fn;

// Initialize central reference
rootjQuery = jQuery( document );


var rparentsprev = /^(?:parents|prev(?:Until|All))/,

	// Methods guaranteed to produce a unique set when starting from a unique set
	guaranteedUnique = {
		children: true,
		contents: true,
		next: true,
		prev: true
	};

jQuery.fn.extend( {
	has: function( target ) {
		var targets = jQuery( target, this ),
			l = targets.length;

		return this.filter( function() {
			var i = 0;
			for ( ; i < l; i++ ) {
				if ( jQuery.contains( this, targets[ i ] ) ) {
					return true;
				}
			}
		} );
	},

	closest: function( selectors, context ) {
		var cur,
			i = 0,
			l = this.length,
			matched = [],
			targets = typeof selectors !== "string" && jQuery( selectors );

		// Positional selectors never match, since there's no _selection_ context
		if ( !rneedsContext.test( selectors ) ) {
			for ( ; i < l; i++ ) {
				for ( cur = this[ i ]; cur && cur !== context; cur = cur.parentNode ) {

					// Always skip document fragments
					if ( cur.nodeType < 11 && ( targets ?
						targets.index( cur ) > -1 :

						// Don't pass non-elements to Sizzle
						cur.nodeType === 1 &&
							jQuery.find.matchesSelector( cur, selectors ) ) ) {

						matched.push( cur );
						break;
					}
				}
			}
		}

		return this.pushStack( matched.length > 1 ? jQuery.uniqueSort( matched ) : matched );
	},

	// Determine the position of an element within the set
	index: function( elem ) {

		// No argument, return index in parent
		if ( !elem ) {
			return ( this[ 0 ] && this[ 0 ].parentNode ) ? this.first().prevAll().length : -1;
		}

		// Index in selector
		if ( typeof elem === "string" ) {
			return indexOf.call( jQuery( elem ), this[ 0 ] );
		}

		// Locate the position of the desired element
		return indexOf.call( this,

			// If it receives a jQuery object, the first element is used
			elem.jquery ? elem[ 0 ] : elem
		);
	},

	add: function( selector, context ) {
		return this.pushStack(
			jQuery.uniqueSort(
				jQuery.merge( this.get(), jQuery( selector, context ) )
			)
		);
	},

	addBack: function( selector ) {
		return this.add( selector == null ?
			this.prevObject : this.prevObject.filter( selector )
		);
	}
} );

function sibling( cur, dir ) {
	while ( ( cur = cur[ dir ] ) && cur.nodeType !== 1 ) {}
	return cur;
}

jQuery.each( {
	parent: function( elem ) {
		var parent = elem.parentNode;
		return parent && parent.nodeType !== 11 ? parent : null;
	},
	parents: function( elem ) {
		return dir( elem, "parentNode" );
	},
	parentsUntil: function( elem, _i, until ) {
		return dir( elem, "parentNode", until );
	},
	next: function( elem ) {
		return sibling( elem, "nextSibling" );
	},
	prev: function( elem ) {
		return sibling( elem, "previousSibling" );
	},
	nextAll: function( elem ) {
		return dir( elem, "nextSibling" );
	},
	prevAll: function( elem ) {
		return dir( elem, "previousSibling" );
	},
	nextUntil: function( elem, _i, until ) {
		return dir( elem, "nextSibling", until );
	},
	prevUntil: function( elem, _i, until ) {
		return dir( elem, "previousSibling", until );
	},
	siblings: function( elem ) {
		return siblings( ( elem.parentNode || {} ).firstChild, elem );
	},
	children: function( elem ) {
		return siblings( elem.firstChild );
	},
	contents: function( elem ) {
		if ( elem.contentDocument != null &&

			// Support: IE 11+
			// <object> elements with no `data` attribute has an object
			// `contentDocument` with a `null` prototype.
			getProto( elem.contentDocument ) ) {

			return elem.contentDocument;
		}

		// Support: IE 9 - 11 only, iOS 7 only, Android Browser <=4.3 only
		// Treat the template element as a regular one in browsers that
		// don't support it.
		if ( nodeName( elem, "template" ) ) {
			elem = elem.content || elem;
		}

		return jQuery.merge( [], elem.childNodes );
	}
}, function( name, fn ) {
	jQuery.fn[ name ] = function( until, selector ) {
		var matched = jQuery.map( this, fn, until );

		if ( name.slice( -5 ) !== "Until" ) {
			selector = until;
		}

		if ( selector && typeof selector === "string" ) {
			matched = jQuery.filter( selector, matched );
		}

		if ( this.length > 1 ) {

			// Remove duplicates
			if ( !guaranteedUnique[ name ] ) {
				jQuery.uniqueSort( matched );
			}

			// Reverse order for parents* and prev-derivatives
			if ( rparentsprev.test( name ) ) {
				matched.reverse();
			}
		}

		return this.pushStack( matched );
	};
} );
var rnothtmlwhite = ( /[^\x20\t\r\n\f]+/g );



// Convert String-formatted options into Object-formatted ones
function createOptions( options ) {
	var object = {};
	jQuery.each( options.match( rnothtmlwhite ) || [], function( _, flag ) {
		object[ flag ] = true;
	} );
	return object;
}

/*
 * Create a callback list using the following parameters:
 *
 *	options: an optional list of space-separated options that will change how
 *			the callback list behaves or a more traditional option object
 *
 * By default a callback list will act like an event callback list and can be
 * "fired" multiple times.
 *
 * Possible options:
 *
 *	once:			will ensure the callback list can only be fired once (like a Deferred)
 *
 *	memory:			will keep track of previous values and will call any callback added
 *					after the list has been fired right away with the latest "memorized"
 *					values (like a Deferred)
 *
 *	unique:			will ensure a callback can only be added once (no duplicate in the list)
 *
 *	stopOnFalse:	interrupt callings when a callback returns false
 *
 */
jQuery.Callbacks = function( options ) {

	// Convert options from String-formatted to Object-formatted if needed
	// (we check in cache first)
	options = typeof options === "string" ?
		createOptions( options ) :
		jQuery.extend( {}, options );

	var // Flag to know if list is currently firing
		firing,

		// Last fire value for non-forgettable lists
		memory,

		// Flag to know if list was already fired
		fired,

		// Flag to prevent firing
		locked,

		// Actual callback list
		list = [],

		// Queue of execution data for repeatable lists
		queue = [],

		// Index of currently firing callback (modified by add/remove as needed)
		firingIndex = -1,

		// Fire callbacks
		fire = function() {

			// Enforce single-firing
			locked = locked || options.once;

			// Execute callbacks for all pending executions,
			// respecting firingIndex overrides and runtime changes
			fired = firing = true;
			for ( ; queue.length; firingIndex = -1 ) {
				memory = queue.shift();
				while ( ++firingIndex < list.length ) {

					// Run callback and check for early termination
					if ( list[ firingIndex ].apply( memory[ 0 ], memory[ 1 ] ) === false &&
						options.stopOnFalse ) {

						// Jump to end and forget the data so .add doesn't re-fire
						firingIndex = list.length;
						memory = false;
					}
				}
			}

			// Forget the data if we're done with it
			if ( !options.memory ) {
				memory = false;
			}

			firing = false;

			// Clean up if we're done firing for good
			if ( locked ) {

				// Keep an empty list if we have data for future add calls
				if ( memory ) {
					list = [];

				// Otherwise, this object is spent
				} else {
					list = "";
				}
			}
		},

		// Actual Callbacks object
		self = {

			// Add a callback or a collection of callbacks to the list
			add: function() {
				if ( list ) {

					// If we have memory from a past run, we should fire after adding
					if ( memory && !firing ) {
						firingIndex = list.length - 1;
						queue.push( memory );
					}

					( function add( args ) {
						jQuery.each( args, function( _, arg ) {
							if ( isFunction( arg ) ) {
								if ( !options.unique || !self.has( arg ) ) {
									list.push( arg );
								}
							} else if ( arg && arg.length && toType( arg ) !== "string" ) {

								// Inspect recursively
								add( arg );
							}
						} );
					} )( arguments );

					if ( memory && !firing ) {
						fire();
					}
				}
				return this;
			},

			// Remove a callback from the list
			remove: function() {
				jQuery.each( arguments, function( _, arg ) {
					var index;
					while ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
						list.splice( index, 1 );

						// Handle firing indexes
						if ( index <= firingIndex ) {
							firingIndex--;
						}
					}
				} );
				return this;
			},

			// Check if a given callback is in the list.
			// If no argument is given, return whether or not list has callbacks attached.
			has: function( fn ) {
				return fn ?
					jQuery.inArray( fn, list ) > -1 :
					list.length > 0;
			},

			// Remove all callbacks from the list
			empty: function() {
				if ( list ) {
					list = [];
				}
				return this;
			},

			// Disable .fire and .add
			// Abort any current/pending executions
			// Clear all callbacks and values
			disable: function() {
				locked = queue = [];
				list = memory = "";
				return this;
			},
			disabled: function() {
				return !list;
			},

			// Disable .fire
			// Also disable .add unless we have memory (since it would have no effect)
			// Abort any pending executions
			lock: function() {
				locked = queue = [];
				if ( !memory && !firing ) {
					list = memory = "";
				}
				return this;
			},
			locked: function() {
				return !!locked;
			},

			// Call all callbacks with the given context and arguments
			fireWith: function( context, args ) {
				if ( !locked ) {
					args = args || [];
					args = [ context, args.slice ? args.slice() : args ];
					queue.push( args );
					if ( !firing ) {
						fire();
					}
				}
				return this;
			},

			// Call all the callbacks with the given arguments
			fire: function() {
				self.fireWith( this, arguments );
				return this;
			},

			// To know if the callbacks have already been called at least once
			fired: function() {
				return !!fired;
			}
		};

	return self;
};


function Identity( v ) {
	return v;
}
function Thrower( ex ) {
	throw ex;
}

function adoptValue( value, resolve, reject, noValue ) {
	var method;

	try {

		// Check for promise aspect first to privilege synchronous behavior
		if ( value && isFunction( ( method = value.promise ) ) ) {
			method.call( value ).done( resolve ).fail( reject );

		// Other thenables
		} else if ( value && isFunction( ( method = value.then ) ) ) {
			method.call( value, resolve, reject );

		// Other non-thenables
		} else {

			// Control `resolve` arguments by letting Array#slice cast boolean `noValue` to integer:
			// * false: [ value ].slice( 0 ) => resolve( value )
			// * true: [ value ].slice( 1 ) => resolve()
			resolve.apply( undefined, [ value ].slice( noValue ) );
		}

	// For Promises/A+, convert exceptions into rejections
	// Since jQuery.when doesn't unwrap thenables, we can skip the extra checks appearing in
	// Deferred#then to conditionally suppress rejection.
	} catch ( value ) {

		// Support: Android 4.0 only
		// Strict mode functions invoked without .call/.apply get global-object context
		reject.apply( undefined, [ value ] );
	}
}

jQuery.extend( {

	Deferred: function( func ) {
		var tuples = [

				// action, add listener, callbacks,
				// ... .then handlers, argument index, [final state]
				[ "notify", "progress", jQuery.Callbacks( "memory" ),
					jQuery.Callbacks( "memory" ), 2 ],
				[ "resolve", "done", jQuery.Callbacks( "once memory" ),
					jQuery.Callbacks( "once memory" ), 0, "resolved" ],
				[ "reject", "fail", jQuery.Callbacks( "once memory" ),
					jQuery.Callbacks( "once memory" ), 1, "rejected" ]
			],
			state = "pending",
			promise = {
				state: function() {
					return state;
				},
				always: function() {
					deferred.done( arguments ).fail( arguments );
					return this;
				},
				"catch": function( fn ) {
					return promise.then( null, fn );
				},

				// Keep pipe for back-compat
				pipe: function( /* fnDone, fnFail, fnProgress */ ) {
					var fns = arguments;

					return jQuery.Deferred( function( newDefer ) {
						jQuery.each( tuples, function( _i, tuple ) {

							// Map tuples (progress, done, fail) to arguments (done, fail, progress)
							var fn = isFunction( fns[ tuple[ 4 ] ] ) && fns[ tuple[ 4 ] ];

							// deferred.progress(function() { bind to newDefer or newDefer.notify })
							// deferred.done(function() { bind to newDefer or newDefer.resolve })
							// deferred.fail(function() { bind to newDefer or newDefer.reject })
							deferred[ tuple[ 1 ] ]( function() {
								var returned = fn && fn.apply( this, arguments );
								if ( returned && isFunction( returned.promise ) ) {
									returned.promise()
										.progress( newDefer.notify )
										.done( newDefer.resolve )
										.fail( newDefer.reject );
								} else {
									newDefer[ tuple[ 0 ] + "With" ](
										this,
										fn ? [ returned ] : arguments
									);
								}
							} );
						} );
						fns = null;
					} ).promise();
				},
				then: function( onFulfilled, onRejected, onProgress ) {
					var maxDepth = 0;
					function resolve( depth, deferred, handler, special ) {
						return function() {
							var that = this,
								args = arguments,
								mightThrow = function() {
									var returned, then;

									// Support: Promises/A+ section 2.3.3.3.3
									// https://promisesaplus.com/#point-59
									// Ignore double-resolution attempts
									if ( depth < maxDepth ) {
										return;
									}

									returned = handler.apply( that, args );

									// Support: Promises/A+ section 2.3.1
									// https://promisesaplus.com/#point-48
									if ( returned === deferred.promise() ) {
										throw new TypeError( "Thenable self-resolution" );
									}

									// Support: Promises/A+ sections 2.3.3.1, 3.5
									// https://promisesaplus.com/#point-54
									// https://promisesaplus.com/#point-75
									// Retrieve `then` only once
									then = returned &&

										// Support: Promises/A+ section 2.3.4
										// https://promisesaplus.com/#point-64
										// Only check objects and functions for thenability
										( typeof returned === "object" ||
											typeof returned === "function" ) &&
										returned.then;

									// Handle a returned thenable
									if ( isFunction( then ) ) {

										// Special processors (notify) just wait for resolution
										if ( special ) {
											then.call(
												returned,
												resolve( maxDepth, deferred, Identity, special ),
												resolve( maxDepth, deferred, Thrower, special )
											);

										// Normal processors (resolve) also hook into progress
										} else {

											// ...and disregard older resolution values
											maxDepth++;

											then.call(
												returned,
												resolve( maxDepth, deferred, Identity, special ),
												resolve( maxDepth, deferred, Thrower, special ),
												resolve( maxDepth, deferred, Identity,
													deferred.notifyWith )
											);
										}

									// Handle all other returned values
									} else {

										// Only substitute handlers pass on context
										// and multiple values (non-spec behavior)
										if ( handler !== Identity ) {
											that = undefined;
											args = [ returned ];
										}

										// Process the value(s)
										// Default process is resolve
										( special || deferred.resolveWith )( that, args );
									}
								},

								// Only normal processors (resolve) catch and reject exceptions
								process = special ?
									mightThrow :
									function() {
										try {
											mightThrow();
										} catch ( e ) {

											if ( jQuery.Deferred.exceptionHook ) {
												jQuery.Deferred.exceptionHook( e,
													process.stackTrace );
											}

											// Support: Promises/A+ section 2.3.3.3.4.1
											// https://promisesaplus.com/#point-61
											// Ignore post-resolution exceptions
											if ( depth + 1 >= maxDepth ) {

												// Only substitute handlers pass on context
												// and multiple values (non-spec behavior)
												if ( handler !== Thrower ) {
													that = undefined;
													args = [ e ];
												}

												deferred.rejectWith( that, args );
											}
										}
									};

							// Support: Promises/A+ section 2.3.3.3.1
							// https://promisesaplus.com/#point-57
							// Re-resolve promises immediately to dodge false rejection from
							// subsequent errors
							if ( depth ) {
								process();
							} else {

								// Call an optional hook to record the stack, in case of exception
								// since it's otherwise lost when execution goes async
								if ( jQuery.Deferred.getStackHook ) {
									process.stackTrace = jQuery.Deferred.getStackHook();
								}
								window.setTimeout( process );
							}
						};
					}

					return jQuery.Deferred( function( newDefer ) {

						// progress_handlers.add( ... )
						tuples[ 0 ][ 3 ].add(
							resolve(
								0,
								newDefer,
								isFunction( onProgress ) ?
									onProgress :
									Identity,
								newDefer.notifyWith
							)
						);

						// fulfilled_handlers.add( ... )
						tuples[ 1 ][ 3 ].add(
							resolve(
								0,
								newDefer,
								isFunction( onFulfilled ) ?
									onFulfilled :
									Identity
							)
						);

						// rejected_handlers.add( ... )
						tuples[ 2 ][ 3 ].add(
							resolve(
								0,
								newDefer,
								isFunction( onRejected ) ?
									onRejected :
									Thrower
							)
						);
					} ).promise();
				},

				// Get a promise for this deferred
				// If obj is provided, the promise aspect is added to the object
				promise: function( obj ) {
					return obj != null ? jQuery.extend( obj, promise ) : promise;
				}
			},
			deferred = {};

		// Add list-specific methods
		jQuery.each( tuples, function( i, tuple ) {
			var list = tuple[ 2 ],
				stateString = tuple[ 5 ];

			// promise.progress = list.add
			// promise.done = list.add
			// promise.fail = list.add
			promise[ tuple[ 1 ] ] = list.add;

			// Handle state
			if ( stateString ) {
				list.add(
					function() {

						// state = "resolved" (i.e., fulfilled)
						// state = "rejected"
						state = stateString;
					},

					// rejected_callbacks.disable
					// fulfilled_callbacks.disable
					tuples[ 3 - i ][ 2 ].disable,

					// rejected_handlers.disable
					// fulfilled_handlers.disable
					tuples[ 3 - i ][ 3 ].disable,

					// progress_callbacks.lock
					tuples[ 0 ][ 2 ].lock,

					// progress_handlers.lock
					tuples[ 0 ][ 3 ].lock
				);
			}

			// progress_handlers.fire
			// fulfilled_handlers.fire
			// rejected_handlers.fire
			list.add( tuple[ 3 ].fire );

			// deferred.notify = function() { deferred.notifyWith(...) }
			// deferred.resolve = function() { deferred.resolveWith(...) }
			// deferred.reject = function() { deferred.rejectWith(...) }
			deferred[ tuple[ 0 ] ] = function() {
				deferred[ tuple[ 0 ] + "With" ]( this === deferred ? undefined : this, arguments );
				return this;
			};

			// deferred.notifyWith = list.fireWith
			// deferred.resolveWith = list.fireWith
			// deferred.rejectWith = list.fireWith
			deferred[ tuple[ 0 ] + "With" ] = list.fireWith;
		} );

		// Make the deferred a promise
		promise.promise( deferred );

		// Call given func if any
		if ( func ) {
			func.call( deferred, deferred );
		}

		// All done!
		return deferred;
	},

	// Deferred helper
	when: function( singleValue ) {
		var

			// count of uncompleted subordinates
			remaining = arguments.length,

			// count of unprocessed arguments
			i = remaining,

			// subordinate fulfillment data
			resolveContexts = Array( i ),
			resolveValues = slice.call( arguments ),

			// the primary Deferred
			primary = jQuery.Deferred(),

			// subordinate callback factory
			updateFunc = function( i ) {
				return function( value ) {
					resolveContexts[ i ] = this;
					resolveValues[ i ] = arguments.length > 1 ? slice.call( arguments ) : value;
					if ( !( --remaining ) ) {
						primary.resolveWith( resolveContexts, resolveValues );
					}
				};
			};

		// Single- and empty arguments are adopted like Promise.resolve
		if ( remaining <= 1 ) {
			adoptValue( singleValue, primary.done( updateFunc( i ) ).resolve, primary.reject,
				!remaining );

			// Use .then() to unwrap secondary thenables (cf. gh-3000)
			if ( primary.state() === "pending" ||
				isFunction( resolveValues[ i ] && resolveValues[ i ].then ) ) {

				return primary.then();
			}
		}

		// Multiple arguments are aggregated like Promise.all array elements
		while ( i-- ) {
			adoptValue( resolveValues[ i ], updateFunc( i ), primary.reject );
		}

		return primary.promise();
	}
} );


// These usually indicate a programmer mistake during development,
// warn about them ASAP rather than swallowing them by default.
var rerrorNames = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;

jQuery.Deferred.exceptionHook = function( error, stack ) {

	// Support: IE 8 - 9 only
	// Console exists when dev tools are open, which can happen at any time
	if ( window.console && window.console.warn && error && rerrorNames.test( error.name ) ) {
		window.console.warn( "jQuery.Deferred exception: " + error.message, error.stack, stack );
	}
};




jQuery.readyException = function( error ) {
	window.setTimeout( function() {
		throw error;
	} );
};




// The deferred used on DOM ready
var readyList = jQuery.Deferred();

jQuery.fn.ready = function( fn ) {

	readyList
		.then( fn )

		// Wrap jQuery.readyException in a function so that the lookup
		// happens at the time of error handling instead of callback
		// registration.
		.catch( function( error ) {
			jQuery.readyException( error );
		} );

	return this;
};

jQuery.extend( {

	// Is the DOM ready to be used? Set to true once it occurs.
	isReady: false,

	// A counter to track how many items to wait for before
	// the ready event fires. See #6781
	readyWait: 1,

	// Handle when the DOM is ready
	ready: function( wait ) {

		// Abort if there are pending holds or we're already ready
		if ( wait === true ? --jQuery.readyWait : jQuery.isReady ) {
			return;
		}

		// Remember that the DOM is ready
		jQuery.isReady = true;

		// If a normal DOM Ready event fired, decrement, and wait if need be
		if ( wait !== true && --jQuery.readyWait > 0 ) {
			return;
		}

		// If there are functions bound, to execute
		readyList.resolveWith( document, [ jQuery ] );
	}
} );

jQuery.ready.then = readyList.then;

// The ready event handler and self cleanup method
function completed() {
	document.removeEventListener( "DOMContentLoaded", completed );
	window.removeEventListener( "load", completed );
	jQuery.ready();
}

// Catch cases where $(document).ready() is called
// after the browser event has already occurred.
// Support: IE <=9 - 10 only
// Older IE sometimes signals "interactive" too soon
if ( document.readyState === "complete" ||
	( document.readyState !== "loading" && !document.documentElement.doScroll ) ) {

	// Handle it asynchronously to allow scripts the opportunity to delay ready
	window.setTimeout( jQuery.ready );

} else {

	// Use the handy event callback
	document.addEventListener( "DOMContentLoaded", completed );

	// A fallback to window.onload, that will always work
	window.addEventListener( "load", completed );
}




// Multifunctional method to get and set values of a collection
// The value/s can optionally be executed if it's a function
var access = function( elems, fn, key, value, chainable, emptyGet, raw ) {
	var i = 0,
		len = elems.length,
		bulk = key == null;

	// Sets many values
	if ( toType( key ) === "object" ) {
		chainable = true;
		for ( i in key ) {
			access( elems, fn, i, key[ i ], true, emptyGet, raw );
		}

	// Sets one value
	} else if ( value !== undefined ) {
		chainable = true;

		if ( !isFunction( value ) ) {
			raw = true;
		}

		if ( bulk ) {

			// Bulk operations run against the entire set
			if ( raw ) {
				fn.call( elems, value );
				fn = null;

			// ...except when executing function values
			} else {
				bulk = fn;
				fn = function( elem, _key, value ) {
					return bulk.call( jQuery( elem ), value );
				};
			}
		}

		if ( fn ) {
			for ( ; i < len; i++ ) {
				fn(
					elems[ i ], key, raw ?
						value :
						value.call( elems[ i ], i, fn( elems[ i ], key ) )
				);
			}
		}
	}

	if ( chainable ) {
		return elems;
	}

	// Gets
	if ( bulk ) {
		return fn.call( elems );
	}

	return len ? fn( elems[ 0 ], key ) : emptyGet;
};


// Matches dashed string for camelizing
var rmsPrefix = /^-ms-/,
	rdashAlpha = /-([a-z])/g;

// Used by camelCase as callback to replace()
function fcamelCase( _all, letter ) {
	return letter.toUpperCase();
}

// Convert dashed to camelCase; used by the css and data modules
// Support: IE <=9 - 11, Edge 12 - 15
// Microsoft forgot to hump their vendor prefix (#9572)
function camelCase( string ) {
	return string.replace( rmsPrefix, "ms-" ).replace( rdashAlpha, fcamelCase );
}
var acceptData = function( owner ) {

	// Accepts only:
	//  - Node
	//    - Node.ELEMENT_NODE
	//    - Node.DOCUMENT_NODE
	//  - Object
	//    - Any
	return owner.nodeType === 1 || owner.nodeType === 9 || !( +owner.nodeType );
};




function Data() {
	this.expando = jQuery.expando + Data.uid++;
}

Data.uid = 1;

Data.prototype = {

	cache: function( owner ) {

		// Check if the owner object already has a cache
		var value = owner[ this.expando ];

		// If not, create one
		if ( !value ) {
			value = {};

			// We can accept data for non-element nodes in modern browsers,
			// but we should not, see #8335.
			// Always return an empty object.
			if ( acceptData( owner ) ) {

				// If it is a node unlikely to be stringify-ed or looped over
				// use plain assignment
				if ( owner.nodeType ) {
					owner[ this.expando ] = value;

				// Otherwise secure it in a non-enumerable property
				// configurable must be true to allow the property to be
				// deleted when data is removed
				} else {
					Object.defineProperty( owner, this.expando, {
						value: value,
						configurable: true
					} );
				}
			}
		}

		return value;
	},
	set: function( owner, data, value ) {
		var prop,
			cache = this.cache( owner );

		// Handle: [ owner, key, value ] args
		// Always use camelCase key (gh-2257)
		if ( typeof data === "string" ) {
			cache[ camelCase( data ) ] = value;

		// Handle: [ owner, { properties } ] args
		} else {

			// Copy the properties one-by-one to the cache object
			for ( prop in data ) {
				cache[ camelCase( prop ) ] = data[ prop ];
			}
		}
		return cache;
	},
	get: function( owner, key ) {
		return key === undefined ?
			this.cache( owner ) :

			// Always use camelCase key (gh-2257)
			owner[ this.expando ] && owner[ this.expando ][ camelCase( key ) ];
	},
	access: function( owner, key, value ) {

		// In cases where either:
		//
		//   1. No key was specified
		//   2. A string key was specified, but no value provided
		//
		// Take the "read" path and allow the get method to determine
		// which value to return, respectively either:
		//
		//   1. The entire cache object
		//   2. The data stored at the key
		//
		if ( key === undefined ||
				( ( key && typeof key === "string" ) && value === undefined ) ) {

			return this.get( owner, key );
		}

		// When the key is not a string, or both a key and value
		// are specified, set or extend (existing objects) with either:
		//
		//   1. An object of properties
		//   2. A key and value
		//
		this.set( owner, key, value );

		// Since the "set" path can have two possible entry points
		// return the expected data based on which path was taken[*]
		return value !== undefined ? value : key;
	},
	remove: function( owner, key ) {
		var i,
			cache = owner[ this.expando ];

		if ( cache === undefined ) {
			return;
		}

		if ( key !== undefined ) {

			// Support array or space separated string of keys
			if ( Array.isArray( key ) ) {

				// If key is an array of keys...
				// We always set camelCase keys, so remove that.
				key = key.map( camelCase );
			} else {
				key = camelCase( key );

				// If a key with the spaces exists, use it.
				// Otherwise, create an array by matching non-whitespace
				key = key in cache ?
					[ key ] :
					( key.match( rnothtmlwhite ) || [] );
			}

			i = key.length;

			while ( i-- ) {
				delete cache[ key[ i ] ];
			}
		}

		// Remove the expando if there's no more data
		if ( key === undefined || jQuery.isEmptyObject( cache ) ) {

			// Support: Chrome <=35 - 45
			// Webkit & Blink performance suffers when deleting properties
			// from DOM nodes, so set to undefined instead
			// https://bugs.chromium.org/p/chromium/issues/detail?id=378607 (bug restricted)
			if ( owner.nodeType ) {
				owner[ this.expando ] = undefined;
			} else {
				delete owner[ this.expando ];
			}
		}
	},
	hasData: function( owner ) {
		var cache = owner[ this.expando ];
		return cache !== undefined && !jQuery.isEmptyObject( cache );
	}
};
var dataPriv = new Data();

var dataUser = new Data();



//	Implementation Summary
//
//	1. Enforce API surface and semantic compatibility with 1.9.x branch
//	2. Improve the module's maintainability by reducing the storage
//		paths to a single mechanism.
//	3. Use the same single mechanism to support "private" and "user" data.
//	4. _Never_ expose "private" data to user code (TODO: Drop _data, _removeData)
//	5. Avoid exposing implementation details on user objects (eg. expando properties)
//	6. Provide a clear path for implementation upgrade to WeakMap in 2014

var rbrace = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
	rmultiDash = /[A-Z]/g;

function getData( data ) {
	if ( data === "true" ) {
		return true;
	}

	if ( data === "false" ) {
		return false;
	}

	if ( data === "null" ) {
		return null;
	}

	// Only convert to a number if it doesn't change the string
	if ( data === +data + "" ) {
		return +data;
	}

	if ( rbrace.test( data ) ) {
		return JSON.parse( data );
	}

	return data;
}

function dataAttr( elem, key, data ) {
	var name;

	// If nothing was found internally, try to fetch any
	// data from the HTML5 data-* attribute
	if ( data === undefined && elem.nodeType === 1 ) {
		name = "data-" + key.replace( rmultiDash, "-$&" ).toLowerCase();
		data = elem.getAttribute( name );

		if ( typeof data === "string" ) {
			try {
				data = getData( data );
			} catch ( e ) {}

			// Make sure we set the data so it isn't changed later
			dataUser.set( elem, key, data );
		} else {
			data = undefined;
		}
	}
	return data;
}

jQuery.extend( {
	hasData: function( elem ) {
		return dataUser.hasData( elem ) || dataPriv.hasData( elem );
	},

	data: function( elem, name, data ) {
		return dataUser.access( elem, name, data );
	},

	removeData: function( elem, name ) {
		dataUser.remove( elem, name );
	},

	// TODO: Now that all calls to _data and _removeData have been replaced
	// with direct calls to dataPriv methods, these can be deprecated.
	_data: function( elem, name, data ) {
		return dataPriv.access( elem, name, data );
	},

	_removeData: function( elem, name ) {
		dataPriv.remove( elem, name );
	}
} );

jQuery.fn.extend( {
	data: function( key, value ) {
		var i, name, data,
			elem = this[ 0 ],
			attrs = elem && elem.attributes;

		// Gets all values
		if ( key === undefined ) {
			if ( this.length ) {
				data = dataUser.get( elem );

				if ( elem.nodeType === 1 && !dataPriv.get( elem, "hasDataAttrs" ) ) {
					i = attrs.length;
					while ( i-- ) {

						// Support: IE 11 only
						// The attrs elements can be null (#14894)
						if ( attrs[ i ] ) {
							name = attrs[ i ].name;
							if ( name.indexOf( "data-" ) === 0 ) {
								name = camelCase( name.slice( 5 ) );
								dataAttr( elem, name, data[ name ] );
							}
						}
					}
					dataPriv.set( elem, "hasDataAttrs", true );
				}
			}

			return data;
		}

		// Sets multiple values
		if ( typeof key === "object" ) {
			return this.each( function() {
				dataUser.set( this, key );
			} );
		}

		return access( this, function( value ) {
			var data;

			// The calling jQuery object (element matches) is not empty
			// (and therefore has an element appears at this[ 0 ]) and the
			// `value` parameter was not undefined. An empty jQuery object
			// will result in `undefined` for elem = this[ 0 ] which will
			// throw an exception if an attempt to read a data cache is made.
			if ( elem && value === undefined ) {

				// Attempt to get data from the cache
				// The key will always be camelCased in Data
				data = dataUser.get( elem, key );
				if ( data !== undefined ) {
					return data;
				}

				// Attempt to "discover" the data in
				// HTML5 custom data-* attrs
				data = dataAttr( elem, key );
				if ( data !== undefined ) {
					return data;
				}

				// We tried really hard, but the data doesn't exist.
				return;
			}

			// Set the data...
			this.each( function() {

				// We always store the camelCased key
				dataUser.set( this, key, value );
			} );
		}, null, value, arguments.length > 1, null, true );
	},

	removeData: function( key ) {
		return this.each( function() {
			dataUser.remove( this, key );
		} );
	}
} );


jQuery.extend( {
	queue: function( elem, type, data ) {
		var queue;

		if ( elem ) {
			type = ( type || "fx" ) + "queue";
			queue = dataPriv.get( elem, type );

			// Speed up dequeue by getting out quickly if this is just a lookup
			if ( data ) {
				if ( !queue || Array.isArray( data ) ) {
					queue = dataPriv.access( elem, type, jQuery.makeArray( data ) );
				} else {
					queue.push( data );
				}
			}
			return queue || [];
		}
	},

	dequeue: function( elem, type ) {
		type = type || "fx";

		var queue = jQuery.queue( elem, type ),
			startLength = queue.length,
			fn = queue.shift(),
			hooks = jQuery._queueHooks( elem, type ),
			next = function() {
				jQuery.dequeue( elem, type );
			};

		// If the fx queue is dequeued, always remove the progress sentinel
		if ( fn === "inprogress" ) {
			fn = queue.shift();
			startLength--;
		}

		if ( fn ) {

			// Add a progress sentinel to prevent the fx queue from being
			// automatically dequeued
			if ( type === "fx" ) {
				queue.unshift( "inprogress" );
			}

			// Clear up the last queue stop function
			delete hooks.stop;
			fn.call( elem, next, hooks );
		}

		if ( !startLength && hooks ) {
			hooks.empty.fire();
		}
	},

	// Not public - generate a queueHooks object, or return the current one
	_queueHooks: function( elem, type ) {
		var key = type + "queueHooks";
		return dataPriv.get( elem, key ) || dataPriv.access( elem, key, {
			empty: jQuery.Callbacks( "once memory" ).add( function() {
				dataPriv.remove( elem, [ type + "queue", key ] );
			} )
		} );
	}
} );

jQuery.fn.extend( {
	queue: function( type, data ) {
		var setter = 2;

		if ( typeof type !== "string" ) {
			data = type;
			type = "fx";
			setter--;
		}

		if ( arguments.length < setter ) {
			return jQuery.queue( this[ 0 ], type );
		}

		return data === undefined ?
			this :
			this.each( function() {
				var queue = jQuery.queue( this, type, data );

				// Ensure a hooks for this queue
				jQuery._queueHooks( this, type );

				if ( type === "fx" && queue[ 0 ] !== "inprogress" ) {
					jQuery.dequeue( this, type );
				}
			} );
	},
	dequeue: function( type ) {
		return this.each( function() {
			jQuery.dequeue( this, type );
		} );
	},
	clearQueue: function( type ) {
		return this.queue( type || "fx", [] );
	},

	// Get a promise resolved when queues of a certain type
	// are emptied (fx is the type by default)
	promise: function( type, obj ) {
		var tmp,
			count = 1,
			defer = jQuery.Deferred(),
			elements = this,
			i = this.length,
			resolve = function() {
				if ( !( --count ) ) {
					defer.resolveWith( elements, [ elements ] );
				}
			};

		if ( typeof type !== "string" ) {
			obj = type;
			type = undefined;
		}
		type = type || "fx";

		while ( i-- ) {
			tmp = dataPriv.get( elements[ i ], type + "queueHooks" );
			if ( tmp && tmp.empty ) {
				count++;
				tmp.empty.add( resolve );
			}
		}
		resolve();
		return defer.promise( obj );
	}
} );
var pnum = ( /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/ ).source;

var rcssNum = new RegExp( "^(?:([+-])=|)(" + pnum + ")([a-z%]*)$", "i" );


var cssExpand = [ "Top", "Right", "Bottom", "Left" ];

var documentElement = document.documentElement;



	var isAttached = function( elem ) {
			return jQuery.contains( elem.ownerDocument, elem );
		},
		composed = { composed: true };

	// Support: IE 9 - 11+, Edge 12 - 18+, iOS 10.0 - 10.2 only
	// Check attachment across shadow DOM boundaries when possible (gh-3504)
	// Support: iOS 10.0-10.2 only
	// Early iOS 10 versions support `attachShadow` but not `getRootNode`,
	// leading to errors. We need to check for `getRootNode`.
	if ( documentElement.getRootNode ) {
		isAttached = function( elem ) {
			return jQuery.contains( elem.ownerDocument, elem ) ||
				elem.getRootNode( composed ) === elem.ownerDocument;
		};
	}
var isHiddenWithinTree = function( elem, el ) {

		// isHiddenWithinTree might be called from jQuery#filter function;
		// in that case, element will be second argument
		elem = el || elem;

		// Inline style trumps all
		return elem.style.display === "none" ||
			elem.style.display === "" &&

			// Otherwise, check computed style
			// Support: Firefox <=43 - 45
			// Disconnected elements can have computed display: none, so first confirm that elem is
			// in the document.
			isAttached( elem ) &&

			jQuery.css( elem, "display" ) === "none";
	};



function adjustCSS( elem, prop, valueParts, tween ) {
	var adjusted, scale,
		maxIterations = 20,
		currentValue = tween ?
			function() {
				return tween.cur();
			} :
			function() {
				return jQuery.css( elem, prop, "" );
			},
		initial = currentValue(),
		unit = valueParts && valueParts[ 3 ] || ( jQuery.cssNumber[ prop ] ? "" : "px" ),

		// Starting value computation is required for potential unit mismatches
		initialInUnit = elem.nodeType &&
			( jQuery.cssNumber[ prop ] || unit !== "px" && +initial ) &&
			rcssNum.exec( jQuery.css( elem, prop ) );

	if ( initialInUnit && initialInUnit[ 3 ] !== unit ) {

		// Support: Firefox <=54
		// Halve the iteration target value to prevent interference from CSS upper bounds (gh-2144)
		initial = initial / 2;

		// Trust units reported by jQuery.css
		unit = unit || initialInUnit[ 3 ];

		// Iteratively approximate from a nonzero starting point
		initialInUnit = +initial || 1;

		while ( maxIterations-- ) {

			// Evaluate and update our best guess (doubling guesses that zero out).
			// Finish if the scale equals or crosses 1 (making the old*new product non-positive).
			jQuery.style( elem, prop, initialInUnit + unit );
			if ( ( 1 - scale ) * ( 1 - ( scale = currentValue() / initial || 0.5 ) ) <= 0 ) {
				maxIterations = 0;
			}
			initialInUnit = initialInUnit / scale;

		}

		initialInUnit = initialInUnit * 2;
		jQuery.style( elem, prop, initialInUnit + unit );

		// Make sure we update the tween properties later on
		valueParts = valueParts || [];
	}

	if ( valueParts ) {
		initialInUnit = +initialInUnit || +initial || 0;

		// Apply relative offset (+=/-=) if specified
		adjusted = valueParts[ 1 ] ?
			initialInUnit + ( valueParts[ 1 ] + 1 ) * valueParts[ 2 ] :
			+valueParts[ 2 ];
		if ( tween ) {
			tween.unit = unit;
			tween.start = initialInUnit;
			tween.end = adjusted;
		}
	}
	return adjusted;
}


var defaultDisplayMap = {};

function getDefaultDisplay( elem ) {
	var temp,
		doc = elem.ownerDocument,
		nodeName = elem.nodeName,
		display = defaultDisplayMap[ nodeName ];

	if ( display ) {
		return display;
	}

	temp = doc.body.appendChild( doc.createElement( nodeName ) );
	display = jQuery.css( temp, "display" );

	temp.parentNode.removeChild( temp );

	if ( display === "none" ) {
		display = "block";
	}
	defaultDisplayMap[ nodeName ] = display;

	return display;
}

function showHide( elements, show ) {
	var display, elem,
		values = [],
		index = 0,
		length = elements.length;

	// Determine new display value for elements that need to change
	for ( ; index < length; index++ ) {
		elem = elements[ index ];
		if ( !elem.style ) {
			continue;
		}

		display = elem.style.display;
		if ( show ) {

			// Since we force visibility upon cascade-hidden elements, an immediate (and slow)
			// check is required in this first loop unless we have a nonempty display value (either
			// inline or about-to-be-restored)
			if ( display === "none" ) {
				values[ index ] = dataPriv.get( elem, "display" ) || null;
				if ( !values[ index ] ) {
					elem.style.display = "";
				}
			}
			if ( elem.style.display === "" && isHiddenWithinTree( elem ) ) {
				values[ index ] = getDefaultDisplay( elem );
			}
		} else {
			if ( display !== "none" ) {
				values[ index ] = "none";

				// Remember what we're overwriting
				dataPriv.set( elem, "display", display );
			}
		}
	}

	// Set the display of the elements in a second loop to avoid constant reflow
	for ( index = 0; index < length; index++ ) {
		if ( values[ index ] != null ) {
			elements[ index ].style.display = values[ index ];
		}
	}

	return elements;
}

jQuery.fn.extend( {
	show: function() {
		return showHide( this, true );
	},
	hide: function() {
		return showHide( this );
	},
	toggle: function( state ) {
		if ( typeof state === "boolean" ) {
			return state ? this.show() : this.hide();
		}

		return this.each( function() {
			if ( isHiddenWithinTree( this ) ) {
				jQuery( this ).show();
			} else {
				jQuery( this ).hide();
			}
		} );
	}
} );
var rcheckableType = ( /^(?:checkbox|radio)$/i );

var rtagName = ( /<([a-z][^\/\0>\x20\t\r\n\f]*)/i );

var rscriptType = ( /^$|^module$|\/(?:java|ecma)script/i );



( function() {
	var fragment = document.createDocumentFragment(),
		div = fragment.appendChild( document.createElement( "div" ) ),
		input = document.createElement( "input" );

	// Support: Android 4.0 - 4.3 only
	// Check state lost if the name is set (#11217)
	// Support: Windows Web Apps (WWA)
	// `name` and `type` must use .setAttribute for WWA (#14901)
	input.setAttribute( "type", "radio" );
	input.setAttribute( "checked", "checked" );
	input.setAttribute( "name", "t" );

	div.appendChild( input );

	// Support: Android <=4.1 only
	// Older WebKit doesn't clone checked state correctly in fragments
	support.checkClone = div.cloneNode( true ).cloneNode( true ).lastChild.checked;

	// Support: IE <=11 only
	// Make sure textarea (and checkbox) defaultValue is properly cloned
	div.innerHTML = "<textarea>x</textarea>";
	support.noCloneChecked = !!div.cloneNode( true ).lastChild.defaultValue;

	// Support: IE <=9 only
	// IE <=9 replaces <option> tags with their contents when inserted outside of
	// the select element.
	div.innerHTML = "<option></option>";
	support.option = !!div.lastChild;
} )();


// We have to close these tags to support XHTML (#13200)
var wrapMap = {

	// XHTML parsers do not magically insert elements in the
	// same way that tag soup parsers do. So we cannot shorten
	// this by omitting <tbody> or other required elements.
	thead: [ 1, "<table>", "</table>" ],
	col: [ 2, "<table><colgroup>", "</colgroup></table>" ],
	tr: [ 2, "<table><tbody>", "</tbody></table>" ],
	td: [ 3, "<table><tbody><tr>", "</tr></tbody></table>" ],

	_default: [ 0, "", "" ]
};

wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
wrapMap.th = wrapMap.td;

// Support: IE <=9 only
if ( !support.option ) {
	wrapMap.optgroup = wrapMap.option = [ 1, "<select multiple='multiple'>", "</select>" ];
}


function getAll( context, tag ) {

	// Support: IE <=9 - 11 only
	// Use typeof to avoid zero-argument method invocation on host objects (#15151)
	var ret;

	if ( typeof context.getElementsByTagName !== "undefined" ) {
		ret = context.getElementsByTagName( tag || "*" );

	} else if ( typeof context.querySelectorAll !== "undefined" ) {
		ret = context.querySelectorAll( tag || "*" );

	} else {
		ret = [];
	}

	if ( tag === undefined || tag && nodeName( context, tag ) ) {
		return jQuery.merge( [ context ], ret );
	}

	return ret;
}


// Mark scripts as having already been evaluated
function setGlobalEval( elems, refElements ) {
	var i = 0,
		l = elems.length;

	for ( ; i < l; i++ ) {
		dataPriv.set(
			elems[ i ],
			"globalEval",
			!refElements || dataPriv.get( refElements[ i ], "globalEval" )
		);
	}
}


var rhtml = /<|&#?\w+;/;

function buildFragment( elems, context, scripts, selection, ignored ) {
	var elem, tmp, tag, wrap, attached, j,
		fragment = context.createDocumentFragment(),
		nodes = [],
		i = 0,
		l = elems.length;

	for ( ; i < l; i++ ) {
		elem = elems[ i ];

		if ( elem || elem === 0 ) {

			// Add nodes directly
			if ( toType( elem ) === "object" ) {

				// Support: Android <=4.0 only, PhantomJS 1 only
				// push.apply(_, arraylike) throws on ancient WebKit
				jQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );

			// Convert non-html into a text node
			} else if ( !rhtml.test( elem ) ) {
				nodes.push( context.createTextNode( elem ) );

			// Convert html into DOM nodes
			} else {
				tmp = tmp || fragment.appendChild( context.createElement( "div" ) );

				// Deserialize a standard representation
				tag = ( rtagName.exec( elem ) || [ "", "" ] )[ 1 ].toLowerCase();
				wrap = wrapMap[ tag ] || wrapMap._default;
				tmp.innerHTML = wrap[ 1 ] + jQuery.htmlPrefilter( elem ) + wrap[ 2 ];

				// Descend through wrappers to the right content
				j = wrap[ 0 ];
				while ( j-- ) {
					tmp = tmp.lastChild;
				}

				// Support: Android <=4.0 only, PhantomJS 1 only
				// push.apply(_, arraylike) throws on ancient WebKit
				jQuery.merge( nodes, tmp.childNodes );

				// Remember the top-level container
				tmp = fragment.firstChild;

				// Ensure the created nodes are orphaned (#12392)
				tmp.textContent = "";
			}
		}
	}

	// Remove wrapper from fragment
	fragment.textContent = "";

	i = 0;
	while ( ( elem = nodes[ i++ ] ) ) {

		// Skip elements already in the context collection (trac-4087)
		if ( selection && jQuery.inArray( elem, selection ) > -1 ) {
			if ( ignored ) {
				ignored.push( elem );
			}
			continue;
		}

		attached = isAttached( elem );

		// Append to fragment
		tmp = getAll( fragment.appendChild( elem ), "script" );

		// Preserve script evaluation history
		if ( attached ) {
			setGlobalEval( tmp );
		}

		// Capture executables
		if ( scripts ) {
			j = 0;
			while ( ( elem = tmp[ j++ ] ) ) {
				if ( rscriptType.test( elem.type || "" ) ) {
					scripts.push( elem );
				}
			}
		}
	}

	return fragment;
}


var rtypenamespace = /^([^.]*)(?:\.(.+)|)/;

function returnTrue() {
	return true;
}

function returnFalse() {
	return false;
}

// Support: IE <=9 - 11+
// focus() and blur() are asynchronous, except when they are no-op.
// So expect focus to be synchronous when the element is already active,
// and blur to be synchronous when the element is not already active.
// (focus and blur are always synchronous in other supported browsers,
// this just defines when we can count on it).
function expectSync( elem, type ) {
	return ( elem === safeActiveElement() ) === ( type === "focus" );
}

// Support: IE <=9 only
// Accessing document.activeElement can throw unexpectedly
// https://bugs.jquery.com/ticket/13393
function safeActiveElement() {
	try {
		return document.activeElement;
	} catch ( err ) { }
}

function on( elem, types, selector, data, fn, one ) {
	var origFn, type;

	// Types can be a map of types/handlers
	if ( typeof types === "object" ) {

		// ( types-Object, selector, data )
		if ( typeof selector !== "string" ) {

			// ( types-Object, data )
			data = data || selector;
			selector = undefined;
		}
		for ( type in types ) {
			on( elem, type, selector, data, types[ type ], one );
		}
		return elem;
	}

	if ( data == null && fn == null ) {

		// ( types, fn )
		fn = selector;
		data = selector = undefined;
	} else if ( fn == null ) {
		if ( typeof selector === "string" ) {

			// ( types, selector, fn )
			fn = data;
			data = undefined;
		} else {

			// ( types, data, fn )
			fn = data;
			data = selector;
			selector = undefined;
		}
	}
	if ( fn === false ) {
		fn = returnFalse;
	} else if ( !fn ) {
		return elem;
	}

	if ( one === 1 ) {
		origFn = fn;
		fn = function( event ) {

			// Can use an empty set, since event contains the info
			jQuery().off( event );
			return origFn.apply( this, arguments );
		};

		// Use same guid so caller can remove using origFn
		fn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
	}
	return elem.each( function() {
		jQuery.event.add( this, types, fn, data, selector );
	} );
}

/*
 * Helper functions for managing events -- not part of the public interface.
 * Props to Dean Edwards' addEvent library for many of the ideas.
 */
jQuery.event = {

	global: {},

	add: function( elem, types, handler, data, selector ) {

		var handleObjIn, eventHandle, tmp,
			events, t, handleObj,
			special, handlers, type, namespaces, origType,
			elemData = dataPriv.get( elem );

		// Only attach events to objects that accept data
		if ( !acceptData( elem ) ) {
			return;
		}

		// Caller can pass in an object of custom data in lieu of the handler
		if ( handler.handler ) {
			handleObjIn = handler;
			handler = handleObjIn.handler;
			selector = handleObjIn.selector;
		}

		// Ensure that invalid selectors throw exceptions at attach time
		// Evaluate against documentElement in case elem is a non-element node (e.g., document)
		if ( selector ) {
			jQuery.find.matchesSelector( documentElement, selector );
		}

		// Make sure that the handler has a unique ID, used to find/remove it later
		if ( !handler.guid ) {
			handler.guid = jQuery.guid++;
		}

		// Init the element's event structure and main handler, if this is the first
		if ( !( events = elemData.events ) ) {
			events = elemData.events = Object.create( null );
		}
		if ( !( eventHandle = elemData.handle ) ) {
			eventHandle = elemData.handle = function( e ) {

				// Discard the second event of a jQuery.event.trigger() and
				// when an event is called after a page has unloaded
				return typeof jQuery !== "undefined" && jQuery.event.triggered !== e.type ?
					jQuery.event.dispatch.apply( elem, arguments ) : undefined;
			};
		}

		// Handle multiple events separated by a space
		types = ( types || "" ).match( rnothtmlwhite ) || [ "" ];
		t = types.length;
		while ( t-- ) {
			tmp = rtypenamespace.exec( types[ t ] ) || [];
			type = origType = tmp[ 1 ];
			namespaces = ( tmp[ 2 ] || "" ).split( "." ).sort();

			// There *must* be a type, no attaching namespace-only handlers
			if ( !type ) {
				continue;
			}

			// If event changes its type, use the special event handlers for the changed type
			special = jQuery.event.special[ type ] || {};

			// If selector defined, determine special event api type, otherwise given type
			type = ( selector ? special.delegateType : special.bindType ) || type;

			// Update special based on newly reset type
			special = jQuery.event.special[ type ] || {};

			// handleObj is passed to all event handlers
			handleObj = jQuery.extend( {
				type: type,
				origType: origType,
				data: data,
				handler: handler,
				guid: handler.guid,
				selector: selector,
				needsContext: selector && jQuery.expr.match.needsContext.test( selector ),
				namespace: namespaces.join( "." )
			}, handleObjIn );

			// Init the event handler queue if we're the first
			if ( !( handlers = events[ type ] ) ) {
				handlers = events[ type ] = [];
				handlers.delegateCount = 0;

				// Only use addEventListener if the special events handler returns false
				if ( !special.setup ||
					special.setup.call( elem, data, namespaces, eventHandle ) === false ) {

					if ( elem.addEventListener ) {
						elem.addEventListener( type, eventHandle );
					}
				}
			}

			if ( special.add ) {
				special.add.call( elem, handleObj );

				if ( !handleObj.handler.guid ) {
					handleObj.handler.guid = handler.guid;
				}
			}

			// Add to the element's handler list, delegates in front
			if ( selector ) {
				handlers.splice( handlers.delegateCount++, 0, handleObj );
			} else {
				handlers.push( handleObj );
			}

			// Keep track of which events have ever been used, for event optimization
			jQuery.event.global[ type ] = true;
		}

	},

	// Detach an event or set of events from an element
	remove: function( elem, types, handler, selector, mappedTypes ) {

		var j, origCount, tmp,
			events, t, handleObj,
			special, handlers, type, namespaces, origType,
			elemData = dataPriv.hasData( elem ) && dataPriv.get( elem );

		if ( !elemData || !( events = elemData.events ) ) {
			return;
		}

		// Once for each type.namespace in types; type may be omitted
		types = ( types || "" ).match( rnothtmlwhite ) || [ "" ];
		t = types.length;
		while ( t-- ) {
			tmp = rtypenamespace.exec( types[ t ] ) || [];
			type = origType = tmp[ 1 ];
			namespaces = ( tmp[ 2 ] || "" ).split( "." ).sort();

			// Unbind all events (on this namespace, if provided) for the element
			if ( !type ) {
				for ( type in events ) {
					jQuery.event.remove( elem, type + types[ t ], handler, selector, true );
				}
				continue;
			}

			special = jQuery.event.special[ type ] || {};
			type = ( selector ? special.delegateType : special.bindType ) || type;
			handlers = events[ type ] || [];
			tmp = tmp[ 2 ] &&
				new RegExp( "(^|\\.)" + namespaces.join( "\\.(?:.*\\.|)" ) + "(\\.|$)" );

			// Remove matching events
			origCount = j = handlers.length;
			while ( j-- ) {
				handleObj = handlers[ j ];

				if ( ( mappedTypes || origType === handleObj.origType ) &&
					( !handler || handler.guid === handleObj.guid ) &&
					( !tmp || tmp.test( handleObj.namespace ) ) &&
					( !selector || selector === handleObj.selector ||
						selector === "**" && handleObj.selector ) ) {
					handlers.splice( j, 1 );

					if ( handleObj.selector ) {
						handlers.delegateCount--;
					}
					if ( special.remove ) {
						special.remove.call( elem, handleObj );
					}
				}
			}

			// Remove generic event handler if we removed something and no more handlers exist
			// (avoids potential for endless recursion during removal of special event handlers)
			if ( origCount && !handlers.length ) {
				if ( !special.teardown ||
					special.teardown.call( elem, namespaces, elemData.handle ) === false ) {

					jQuery.removeEvent( elem, type, elemData.handle );
				}

				delete events[ type ];
			}
		}

		// Remove data and the expando if it's no longer used
		if ( jQuery.isEmptyObject( events ) ) {
			dataPriv.remove( elem, "handle events" );
		}
	},

	dispatch: function( nativeEvent ) {

		var i, j, ret, matched, handleObj, handlerQueue,
			args = new Array( arguments.length ),

			// Make a writable jQuery.Event from the native event object
			event = jQuery.event.fix( nativeEvent ),

			handlers = (
				dataPriv.get( this, "events" ) || Object.create( null )
			)[ event.type ] || [],
			special = jQuery.event.special[ event.type ] || {};

		// Use the fix-ed jQuery.Event rather than the (read-only) native event
		args[ 0 ] = event;

		for ( i = 1; i < arguments.length; i++ ) {
			args[ i ] = arguments[ i ];
		}

		event.delegateTarget = this;

		// Call the preDispatch hook for the mapped type, and let it bail if desired
		if ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
			return;
		}

		// Determine handlers
		handlerQueue = jQuery.event.handlers.call( this, event, handlers );

		// Run delegates first; they may want to stop propagation beneath us
		i = 0;
		while ( ( matched = handlerQueue[ i++ ] ) && !event.isPropagationStopped() ) {
			event.currentTarget = matched.elem;

			j = 0;
			while ( ( handleObj = matched.handlers[ j++ ] ) &&
				!event.isImmediatePropagationStopped() ) {

				// If the event is namespaced, then each handler is only invoked if it is
				// specially universal or its namespaces are a superset of the event's.
				if ( !event.rnamespace || handleObj.namespace === false ||
					event.rnamespace.test( handleObj.namespace ) ) {

					event.handleObj = handleObj;
					event.data = handleObj.data;

					ret = ( ( jQuery.event.special[ handleObj.origType ] || {} ).handle ||
						handleObj.handler ).apply( matched.elem, args );

					if ( ret !== undefined ) {
						if ( ( event.result = ret ) === false ) {
							event.preventDefault();
							event.stopPropagation();
						}
					}
				}
			}
		}

		// Call the postDispatch hook for the mapped type
		if ( special.postDispatch ) {
			special.postDispatch.call( this, event );
		}

		return event.result;
	},

	handlers: function( event, handlers ) {
		var i, handleObj, sel, matchedHandlers, matchedSelectors,
			handlerQueue = [],
			delegateCount = handlers.delegateCount,
			cur = event.target;

		// Find delegate handlers
		if ( delegateCount &&

			// Support: IE <=9
			// Black-hole SVG <use> instance trees (trac-13180)
			cur.nodeType &&

			// Support: Firefox <=42
			// Suppress spec-violating clicks indicating a non-primary pointer button (trac-3861)
			// https://www.w3.org/TR/DOM-Level-3-Events/#event-type-click
			// Support: IE 11 only
			// ...but not arrow key "clicks" of radio inputs, which can have `button` -1 (gh-2343)
			!( event.type === "click" && event.button >= 1 ) ) {

			for ( ; cur !== this; cur = cur.parentNode || this ) {

				// Don't check non-elements (#13208)
				// Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)
				if ( cur.nodeType === 1 && !( event.type === "click" && cur.disabled === true ) ) {
					matchedHandlers = [];
					matchedSelectors = {};
					for ( i = 0; i < delegateCount; i++ ) {
						handleObj = handlers[ i ];

						// Don't conflict with Object.prototype properties (#13203)
						sel = handleObj.selector + " ";

						if ( matchedSelectors[ sel ] === undefined ) {
							matchedSelectors[ sel ] = handleObj.needsContext ?
								jQuery( sel, this ).index( cur ) > -1 :
								jQuery.find( sel, this, null, [ cur ] ).length;
						}
						if ( matchedSelectors[ sel ] ) {
							matchedHandlers.push( handleObj );
						}
					}
					if ( matchedHandlers.length ) {
						handlerQueue.push( { elem: cur, handlers: matchedHandlers } );
					}
				}
			}
		}

		// Add the remaining (directly-bound) handlers
		cur = this;
		if ( delegateCount < handlers.length ) {
			handlerQueue.push( { elem: cur, handlers: handlers.slice( delegateCount ) } );
		}

		return handlerQueue;
	},

	addProp: function( name, hook ) {
		Object.defineProperty( jQuery.Event.prototype, name, {
			enumerable: true,
			configurable: true,

			get: isFunction( hook ) ?
				function() {
					if ( this.originalEvent ) {
						return hook( this.originalEvent );
					}
				} :
				function() {
					if ( this.originalEvent ) {
						return this.originalEvent[ name ];
					}
				},

			set: function( value ) {
				Object.defineProperty( this, name, {
					enumerable: true,
					configurable: true,
					writable: true,
					value: value
				} );
			}
		} );
	},

	fix: function( originalEvent ) {
		return originalEvent[ jQuery.expando ] ?
			originalEvent :
			new jQuery.Event( originalEvent );
	},

	special: {
		load: {

			// Prevent triggered image.load events from bubbling to window.load
			noBubble: true
		},
		click: {

			// Utilize native event to ensure correct state for checkable inputs
			setup: function( data ) {

				// For mutual compressibility with _default, replace `this` access with a local var.
				// `|| data` is dead code meant only to preserve the variable through minification.
				var el = this || data;

				// Claim the first handler
				if ( rcheckableType.test( el.type ) &&
					el.click && nodeName( el, "input" ) ) {

					// dataPriv.set( el, "click", ... )
					leverageNative( el, "click", returnTrue );
				}

				// Return false to allow normal processing in the caller
				return false;
			},
			trigger: function( data ) {

				// For mutual compressibility with _default, replace `this` access with a local var.
				// `|| data` is dead code meant only to preserve the variable through minification.
				var el = this || data;

				// Force setup before triggering a click
				if ( rcheckableType.test( el.type ) &&
					el.click && nodeName( el, "input" ) ) {

					leverageNative( el, "click" );
				}

				// Return non-false to allow normal event-path propagation
				return true;
			},

			// For cross-browser consistency, suppress native .click() on links
			// Also prevent it if we're currently inside a leveraged native-event stack
			_default: function( event ) {
				var target = event.target;
				return rcheckableType.test( target.type ) &&
					target.click && nodeName( target, "input" ) &&
					dataPriv.get( target, "click" ) ||
					nodeName( target, "a" );
			}
		},

		beforeunload: {
			postDispatch: function( event ) {

				// Support: Firefox 20+
				// Firefox doesn't alert if the returnValue field is not set.
				if ( event.result !== undefined && event.originalEvent ) {
					event.originalEvent.returnValue = event.result;
				}
			}
		}
	}
};

// Ensure the presence of an event listener that handles manually-triggered
// synthetic events by interrupting progress until reinvoked in response to
// *native* events that it fires directly, ensuring that state changes have
// already occurred before other listeners are invoked.
function leverageNative( el, type, expectSync ) {

	// Missing expectSync indicates a trigger call, which must force setup through jQuery.event.add
	if ( !expectSync ) {
		if ( dataPriv.get( el, type ) === undefined ) {
			jQuery.event.add( el, type, returnTrue );
		}
		return;
	}

	// Register the controller as a special universal handler for all event namespaces
	dataPriv.set( el, type, false );
	jQuery.event.add( el, type, {
		namespace: false,
		handler: function( event ) {
			var notAsync, result,
				saved = dataPriv.get( this, type );

			if ( ( event.isTrigger & 1 ) && this[ type ] ) {

				// Interrupt processing of the outer synthetic .trigger()ed event
				// Saved data should be false in such cases, but might be a leftover capture object
				// from an async native handler (gh-4350)
				if ( !saved.length ) {

					// Store arguments for use when handling the inner native event
					// There will always be at least one argument (an event object), so this array
					// will not be confused with a leftover capture object.
					saved = slice.call( arguments );
					dataPriv.set( this, type, saved );

					// Trigger the native event and capture its result
					// Support: IE <=9 - 11+
					// focus() and blur() are asynchronous
					notAsync = expectSync( this, type );
					this[ type ]();
					result = dataPriv.get( this, type );
					if ( saved !== result || notAsync ) {
						dataPriv.set( this, type, false );
					} else {
						result = {};
					}
					if ( saved !== result ) {

						// Cancel the outer synthetic event
						event.stopImmediatePropagation();
						event.preventDefault();

						// Support: Chrome 86+
						// In Chrome, if an element having a focusout handler is blurred by
						// clicking outside of it, it invokes the handler synchronously. If
						// that handler calls `.remove()` on the element, the data is cleared,
						// leaving `result` undefined. We need to guard against this.
						return result && result.value;
					}

				// If this is an inner synthetic event for an event with a bubbling surrogate
				// (focus or blur), assume that the surrogate already propagated from triggering the
				// native event and prevent that from happening again here.
				// This technically gets the ordering wrong w.r.t. to `.trigger()` (in which the
				// bubbling surrogate propagates *after* the non-bubbling base), but that seems
				// less bad than duplication.
				} else if ( ( jQuery.event.special[ type ] || {} ).delegateType ) {
					event.stopPropagation();
				}

			// If this is a native event triggered above, everything is now in order
			// Fire an inner synthetic event with the original arguments
			} else if ( saved.length ) {

				// ...and capture the result
				dataPriv.set( this, type, {
					value: jQuery.event.trigger(

						// Support: IE <=9 - 11+
						// Extend with the prototype to reset the above stopImmediatePropagation()
						jQuery.extend( saved[ 0 ], jQuery.Event.prototype ),
						saved.slice( 1 ),
						this
					)
				} );

				// Abort handling of the native event
				event.stopImmediatePropagation();
			}
		}
	} );
}

jQuery.removeEvent = function( elem, type, handle ) {

	// This "if" is needed for plain objects
	if ( elem.removeEventListener ) {
		elem.removeEventListener( type, handle );
	}
};

jQuery.Event = function( src, props ) {

	// Allow instantiation without the 'new' keyword
	if ( !( this instanceof jQuery.Event ) ) {
		return new jQuery.Event( src, props );
	}

	// Event object
	if ( src && src.type ) {
		this.originalEvent = src;
		this.type = src.type;

		// Events bubbling up the document may have been marked as prevented
		// by a handler lower down the tree; reflect the correct value.
		this.isDefaultPrevented = src.defaultPrevented ||
				src.defaultPrevented === undefined &&

				// Support: Android <=2.3 only
				src.returnValue === false ?
			returnTrue :
			returnFalse;

		// Create target properties
		// Support: Safari <=6 - 7 only
		// Target should not be a text node (#504, #13143)
		this.target = ( src.target && src.target.nodeType === 3 ) ?
			src.target.parentNode :
			src.target;

		this.currentTarget = src.currentTarget;
		this.relatedTarget = src.relatedTarget;

	// Event type
	} else {
		this.type = src;
	}

	// Put explicitly provided properties onto the event object
	if ( props ) {
		jQuery.extend( this, props );
	}

	// Create a timestamp if incoming event doesn't have one
	this.timeStamp = src && src.timeStamp || Date.now();

	// Mark it as fixed
	this[ jQuery.expando ] = true;
};

// jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding
// https://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
jQuery.Event.prototype = {
	constructor: jQuery.Event,
	isDefaultPrevented: returnFalse,
	isPropagationStopped: returnFalse,
	isImmediatePropagationStopped: returnFalse,
	isSimulated: false,

	preventDefault: function() {
		var e = this.originalEvent;

		this.isDefaultPrevented = returnTrue;

		if ( e && !this.isSimulated ) {
			e.preventDefault();
		}
	},
	stopPropagation: function() {
		var e = this.originalEvent;

		this.isPropagationStopped = returnTrue;

		if ( e && !this.isSimulated ) {
			e.stopPropagation();
		}
	},
	stopImmediatePropagation: function() {
		var e = this.originalEvent;

		this.isImmediatePropagationStopped = returnTrue;

		if ( e && !this.isSimulated ) {
			e.stopImmediatePropagation();
		}

		this.stopPropagation();
	}
};

// Includes all common event props including KeyEvent and MouseEvent specific props
jQuery.each( {
	altKey: true,
	bubbles: true,
	cancelable: true,
	changedTouches: true,
	ctrlKey: true,
	detail: true,
	eventPhase: true,
	metaKey: true,
	pageX: true,
	pageY: true,
	shiftKey: true,
	view: true,
	"char": true,
	code: true,
	charCode: true,
	key: true,
	keyCode: true,
	button: true,
	buttons: true,
	clientX: true,
	clientY: true,
	offsetX: true,
	offsetY: true,
	pointerId: true,
	pointerType: true,
	screenX: true,
	screenY: true,
	targetTouches: true,
	toElement: true,
	touches: true,
	which: true
}, jQuery.event.addProp );

jQuery.each( { focus: "focusin", blur: "focusout" }, function( type, delegateType ) {
	jQuery.event.special[ type ] = {

		// Utilize native event if possible so blur/focus sequence is correct
		setup: function() {

			// Claim the first handler
			// dataPriv.set( this, "focus", ... )
			// dataPriv.set( this, "blur", ... )
			leverageNative( this, type, expectSync );

			// Return false to allow normal processing in the caller
			return false;
		},
		trigger: function() {

			// Force setup before trigger
			leverageNative( this, type );

			// Return non-false to allow normal event-path propagation
			return true;
		},

		// Suppress native focus or blur as it's already being fired
		// in leverageNative.
		_default: function() {
			return true;
		},

		delegateType: delegateType
	};
} );

// Create mouseenter/leave events using mouseover/out and event-time checks
// so that event delegation works in jQuery.
// Do the same for pointerenter/pointerleave and pointerover/pointerout
//
// Support: Safari 7 only
// Safari sends mouseenter too often; see:
// https://bugs.chromium.org/p/chromium/issues/detail?id=470258
// for the description of the bug (it existed in older Chrome versions as well).
jQuery.each( {
	mouseenter: "mouseover",
	mouseleave: "mouseout",
	pointerenter: "pointerover",
	pointerleave: "pointerout"
}, function( orig, fix ) {
	jQuery.event.special[ orig ] = {
		delegateType: fix,
		bindType: fix,

		handle: function( event ) {
			var ret,
				target = this,
				related = event.relatedTarget,
				handleObj = event.handleObj;

			// For mouseenter/leave call the handler if related is outside the target.
			// NB: No relatedTarget if the mouse left/entered the browser window
			if ( !related || ( related !== target && !jQuery.contains( target, related ) ) ) {
				event.type = handleObj.origType;
				ret = handleObj.handler.apply( this, arguments );
				event.type = fix;
			}
			return ret;
		}
	};
} );

jQuery.fn.extend( {

	on: function( types, selector, data, fn ) {
		return on( this, types, selector, data, fn );
	},
	one: function( types, selector, data, fn ) {
		return on( this, types, selector, data, fn, 1 );
	},
	off: function( types, selector, fn ) {
		var handleObj, type;
		if ( types && types.preventDefault && types.handleObj ) {

			// ( event )  dispatched jQuery.Event
			handleObj = types.handleObj;
			jQuery( types.delegateTarget ).off(
				handleObj.namespace ?
					handleObj.origType + "." + handleObj.namespace :
					handleObj.origType,
				handleObj.selector,
				handleObj.handler
			);
			return this;
		}
		if ( typeof types === "object" ) {

			// ( types-object [, selector] )
			for ( type in types ) {
				this.off( type, selector, types[ type ] );
			}
			return this;
		}
		if ( selector === false || typeof selector === "function" ) {

			// ( types [, fn] )
			fn = selector;
			selector = undefined;
		}
		if ( fn === false ) {
			fn = returnFalse;
		}
		return this.each( function() {
			jQuery.event.remove( this, types, fn, selector );
		} );
	}
} );


var

	// Support: IE <=10 - 11, Edge 12 - 13 only
	// In IE/Edge using regex groups here causes severe slowdowns.
	// See https://connect.microsoft.com/IE/feedback/details/1736512/
	rnoInnerhtml = /<script|<style|<link/i,

	// checked="checked" or checked
	rchecked = /checked\s*(?:[^=]|=\s*.checked.)/i,
	rcleanScript = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

// Prefer a tbody over its parent table for containing new rows
function manipulationTarget( elem, content ) {
	if ( nodeName( elem, "table" ) &&
		nodeName( content.nodeType !== 11 ? content : content.firstChild, "tr" ) ) {

		return jQuery( elem ).children( "tbody" )[ 0 ] || elem;
	}

	return elem;
}

// Replace/restore the type attribute of script elements for safe DOM manipulation
function disableScript( elem ) {
	elem.type = ( elem.getAttribute( "type" ) !== null ) + "/" + elem.type;
	return elem;
}
function restoreScript( elem ) {
	if ( ( elem.type || "" ).slice( 0, 5 ) === "true/" ) {
		elem.type = elem.type.slice( 5 );
	} else {
		elem.removeAttribute( "type" );
	}

	return elem;
}

function cloneCopyEvent( src, dest ) {
	var i, l, type, pdataOld, udataOld, udataCur, events;

	if ( dest.nodeType !== 1 ) {
		return;
	}

	// 1. Copy private data: events, handlers, etc.
	if ( dataPriv.hasData( src ) ) {
		pdataOld = dataPriv.get( src );
		events = pdataOld.events;

		if ( events ) {
			dataPriv.remove( dest, "handle events" );

			for ( type in events ) {
				for ( i = 0, l = events[ type ].length; i < l; i++ ) {
					jQuery.event.add( dest, type, events[ type ][ i ] );
				}
			}
		}
	}

	// 2. Copy user data
	if ( dataUser.hasData( src ) ) {
		udataOld = dataUser.access( src );
		udataCur = jQuery.extend( {}, udataOld );

		dataUser.set( dest, udataCur );
	}
}

// Fix IE bugs, see support tests
function fixInput( src, dest ) {
	var nodeName = dest.nodeName.toLowerCase();

	// Fails to persist the checked state of a cloned checkbox or radio button.
	if ( nodeName === "input" && rcheckableType.test( src.type ) ) {
		dest.checked = src.checked;

	// Fails to return the selected option to the default selected state when cloning options
	} else if ( nodeName === "input" || nodeName === "textarea" ) {
		dest.defaultValue = src.defaultValue;
	}
}

function domManip( collection, args, callback, ignored ) {

	// Flatten any nested arrays
	args = flat( args );

	var fragment, first, scripts, hasScripts, node, doc,
		i = 0,
		l = collection.length,
		iNoClone = l - 1,
		value = args[ 0 ],
		valueIsFunction = isFunction( value );

	// We can't cloneNode fragments that contain checked, in WebKit
	if ( valueIsFunction ||
			( l > 1 && typeof value === "string" &&
				!support.checkClone && rchecked.test( value ) ) ) {
		return collection.each( function( index ) {
			var self = collection.eq( index );
			if ( valueIsFunction ) {
				args[ 0 ] = value.call( this, index, self.html() );
			}
			domManip( self, args, callback, ignored );
		} );
	}

	if ( l ) {
		fragment = buildFragment( args, collection[ 0 ].ownerDocument, false, collection, ignored );
		first = fragment.firstChild;

		if ( fragment.childNodes.length === 1 ) {
			fragment = first;
		}

		// Require either new content or an interest in ignored elements to invoke the callback
		if ( first || ignored ) {
			scripts = jQuery.map( getAll( fragment, "script" ), disableScript );
			hasScripts = scripts.length;

			// Use the original fragment for the last item
			// instead of the first because it can end up
			// being emptied incorrectly in certain situations (#8070).
			for ( ; i < l; i++ ) {
				node = fragment;

				if ( i !== iNoClone ) {
					node = jQuery.clone( node, true, true );

					// Keep references to cloned scripts for later restoration
					if ( hasScripts ) {

						// Support: Android <=4.0 only, PhantomJS 1 only
						// push.apply(_, arraylike) throws on ancient WebKit
						jQuery.merge( scripts, getAll( node, "script" ) );
					}
				}

				callback.call( collection[ i ], node, i );
			}

			if ( hasScripts ) {
				doc = scripts[ scripts.length - 1 ].ownerDocument;

				// Reenable scripts
				jQuery.map( scripts, restoreScript );

				// Evaluate executable scripts on first document insertion
				for ( i = 0; i < hasScripts; i++ ) {
					node = scripts[ i ];
					if ( rscriptType.test( node.type || "" ) &&
						!dataPriv.access( node, "globalEval" ) &&
						jQuery.contains( doc, node ) ) {

						if ( node.src && ( node.type || "" ).toLowerCase()  !== "module" ) {

							// Optional AJAX dependency, but won't run scripts if not present
							if ( jQuery._evalUrl && !node.noModule ) {
								jQuery._evalUrl( node.src, {
									nonce: node.nonce || node.getAttribute( "nonce" )
								}, doc );
							}
						} else {
							DOMEval( node.textContent.replace( rcleanScript, "" ), node, doc );
						}
					}
				}
			}
		}
	}

	return collection;
}

function remove( elem, selector, keepData ) {
	var node,
		nodes = selector ? jQuery.filter( selector, elem ) : elem,
		i = 0;

	for ( ; ( node = nodes[ i ] ) != null; i++ ) {
		if ( !keepData && node.nodeType === 1 ) {
			jQuery.cleanData( getAll( node ) );
		}

		if ( node.parentNode ) {
			if ( keepData && isAttached( node ) ) {
				setGlobalEval( getAll( node, "script" ) );
			}
			node.parentNode.removeChild( node );
		}
	}

	return elem;
}

jQuery.extend( {
	htmlPrefilter: function( html ) {
		return html;
	},

	clone: function( elem, dataAndEvents, deepDataAndEvents ) {
		var i, l, srcElements, destElements,
			clone = elem.cloneNode( true ),
			inPage = isAttached( elem );

		// Fix IE cloning issues
		if ( !support.noCloneChecked && ( elem.nodeType === 1 || elem.nodeType === 11 ) &&
				!jQuery.isXMLDoc( elem ) ) {

			// We eschew Sizzle here for performance reasons: https://jsperf.com/getall-vs-sizzle/2
			destElements = getAll( clone );
			srcElements = getAll( elem );

			for ( i = 0, l = srcElements.length; i < l; i++ ) {
				fixInput( srcElements[ i ], destElements[ i ] );
			}
		}

		// Copy the events from the original to the clone
		if ( dataAndEvents ) {
			if ( deepDataAndEvents ) {
				srcElements = srcElements || getAll( elem );
				destElements = destElements || getAll( clone );

				for ( i = 0, l = srcElements.length; i < l; i++ ) {
					cloneCopyEvent( srcElements[ i ], destElements[ i ] );
				}
			} else {
				cloneCopyEvent( elem, clone );
			}
		}

		// Preserve script evaluation history
		destElements = getAll( clone, "script" );
		if ( destElements.length > 0 ) {
			setGlobalEval( destElements, !inPage && getAll( elem, "script" ) );
		}

		// Return the cloned set
		return clone;
	},

	cleanData: function( elems ) {
		var data, elem, type,
			special = jQuery.event.special,
			i = 0;

		for ( ; ( elem = elems[ i ] ) !== undefined; i++ ) {
			if ( acceptData( elem ) ) {
				if ( ( data = elem[ dataPriv.expando ] ) ) {
					if ( data.events ) {
						for ( type in data.events ) {
							if ( special[ type ] ) {
								jQuery.event.remove( elem, type );

							// This is a shortcut to avoid jQuery.event.remove's overhead
							} else {
								jQuery.removeEvent( elem, type, data.handle );
							}
						}
					}

					// Support: Chrome <=35 - 45+
					// Assign undefined instead of using delete, see Data#remove
					elem[ dataPriv.expando ] = undefined;
				}
				if ( elem[ dataUser.expando ] ) {

					// Support: Chrome <=35 - 45+
					// Assign undefined instead of using delete, see Data#remove
					elem[ dataUser.expando ] = undefined;
				}
			}
		}
	}
} );

jQuery.fn.extend( {
	detach: function( selector ) {
		return remove( this, selector, true );
	},

	remove: function( selector ) {
		return remove( this, selector );
	},

	text: function( value ) {
		return access( this, function( value ) {
			return value === undefined ?
				jQuery.text( this ) :
				this.empty().each( function() {
					if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
						this.textContent = value;
					}
				} );
		}, null, value, arguments.length );
	},

	append: function() {
		return domManip( this, arguments, function( elem ) {
			if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
				var target = manipulationTarget( this, elem );
				target.appendChild( elem );
			}
		} );
	},

	prepend: function() {
		return domManip( this, arguments, function( elem ) {
			if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
				var target = manipulationTarget( this, elem );
				target.insertBefore( elem, target.firstChild );
			}
		} );
	},

	before: function() {
		return domManip( this, arguments, function( elem ) {
			if ( this.parentNode ) {
				this.parentNode.insertBefore( elem, this );
			}
		} );
	},

	after: function() {
		return domManip( this, arguments, function( elem ) {
			if ( this.parentNode ) {
				this.parentNode.insertBefore( elem, this.nextSibling );
			}
		} );
	},

	empty: function() {
		var elem,
			i = 0;

		for ( ; ( elem = this[ i ] ) != null; i++ ) {
			if ( elem.nodeType === 1 ) {

				// Prevent memory leaks
				jQuery.cleanData( getAll( elem, false ) );

				// Remove any remaining nodes
				elem.textContent = "";
			}
		}

		return this;
	},

	clone: function( dataAndEvents, deepDataAndEvents ) {
		dataAndEvents = dataAndEvents == null ? false : dataAndEvents;
		deepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;

		return this.map( function() {
			return jQuery.clone( this, dataAndEvents, deepDataAndEvents );
		} );
	},

	html: function( value ) {
		return access( this, function( value ) {
			var elem = this[ 0 ] || {},
				i = 0,
				l = this.length;

			if ( value === undefined && elem.nodeType === 1 ) {
				return elem.innerHTML;
			}

			// See if we can take a shortcut and just use innerHTML
			if ( typeof value === "string" && !rnoInnerhtml.test( value ) &&
				!wrapMap[ ( rtagName.exec( value ) || [ "", "" ] )[ 1 ].toLowerCase() ] ) {

				value = jQuery.htmlPrefilter( value );

				try {
					for ( ; i < l; i++ ) {
						elem = this[ i ] || {};

						// Remove element nodes and prevent memory leaks
						if ( elem.nodeType === 1 ) {
							jQuery.cleanData( getAll( elem, false ) );
							elem.innerHTML = value;
						}
					}

					elem = 0;

				// If using innerHTML throws an exception, use the fallback method
				} catch ( e ) {}
			}

			if ( elem ) {
				this.empty().append( value );
			}
		}, null, value, arguments.length );
	},

	replaceWith: function() {
		var ignored = [];

		// Make the changes, replacing each non-ignored context element with the new content
		return domManip( this, arguments, function( elem ) {
			var parent = this.parentNode;

			if ( jQuery.inArray( this, ignored ) < 0 ) {
				jQuery.cleanData( getAll( this ) );
				if ( parent ) {
					parent.replaceChild( elem, this );
				}
			}

		// Force callback invocation
		}, ignored );
	}
} );

jQuery.each( {
	appendTo: "append",
	prependTo: "prepend",
	insertBefore: "before",
	insertAfter: "after",
	replaceAll: "replaceWith"
}, function( name, original ) {
	jQuery.fn[ name ] = function( selector ) {
		var elems,
			ret = [],
			insert = jQuery( selector ),
			last = insert.length - 1,
			i = 0;

		for ( ; i <= last; i++ ) {
			elems = i === last ? this : this.clone( true );
			jQuery( insert[ i ] )[ original ]( elems );

			// Support: Android <=4.0 only, PhantomJS 1 only
			// .get() because push.apply(_, arraylike) throws on ancient WebKit
			push.apply( ret, elems.get() );
		}

		return this.pushStack( ret );
	};
} );
var rnumnonpx = new RegExp( "^(" + pnum + ")(?!px)[a-z%]+$", "i" );

var getStyles = function( elem ) {

		// Support: IE <=11 only, Firefox <=30 (#15098, #14150)
		// IE throws on elements created in popups
		// FF meanwhile throws on frame elements through "defaultView.getComputedStyle"
		var view = elem.ownerDocument.defaultView;

		if ( !view || !view.opener ) {
			view = window;
		}

		return view.getComputedStyle( elem );
	};

var swap = function( elem, options, callback ) {
	var ret, name,
		old = {};

	// Remember the old values, and insert the new ones
	for ( name in options ) {
		old[ name ] = elem.style[ name ];
		elem.style[ name ] = options[ name ];
	}

	ret = callback.call( elem );

	// Revert the old values
	for ( name in options ) {
		elem.style[ name ] = old[ name ];
	}

	return ret;
};


var rboxStyle = new RegExp( cssExpand.join( "|" ), "i" );



( function() {

	// Executing both pixelPosition & boxSizingReliable tests require only one layout
	// so they're executed at the same time to save the second computation.
	function computeStyleTests() {

		// This is a singleton, we need to execute it only once
		if ( !div ) {
			return;
		}

		container.style.cssText = "position:absolute;left:-11111px;width:60px;" +
			"margin-top:1px;padding:0;border:0";
		div.style.cssText =
			"position:relative;display:block;box-sizing:border-box;overflow:scroll;" +
			"margin:auto;border:1px;padding:1px;" +
			"width:60%;top:1%";
		documentElement.appendChild( container ).appendChild( div );

		var divStyle = window.getComputedStyle( div );
		pixelPositionVal = divStyle.top !== "1%";

		// Support: Android 4.0 - 4.3 only, Firefox <=3 - 44
		reliableMarginLeftVal = roundPixelMeasures( divStyle.marginLeft ) === 12;

		// Support: Android 4.0 - 4.3 only, Safari <=9.1 - 10.1, iOS <=7.0 - 9.3
		// Some styles come back with percentage values, even though they shouldn't
		div.style.right = "60%";
		pixelBoxStylesVal = roundPixelMeasures( divStyle.right ) === 36;

		// Support: IE 9 - 11 only
		// Detect misreporting of content dimensions for box-sizing:border-box elements
		boxSizingReliableVal = roundPixelMeasures( divStyle.width ) === 36;

		// Support: IE 9 only
		// Detect overflow:scroll screwiness (gh-3699)
		// Support: Chrome <=64
		// Don't get tricked when zoom affects offsetWidth (gh-4029)
		div.style.position = "absolute";
		scrollboxSizeVal = roundPixelMeasures( div.offsetWidth / 3 ) === 12;

		documentElement.removeChild( container );

		// Nullify the div so it wouldn't be stored in the memory and
		// it will also be a sign that checks already performed
		div = null;
	}

	function roundPixelMeasures( measure ) {
		return Math.round( parseFloat( measure ) );
	}

	var pixelPositionVal, boxSizingReliableVal, scrollboxSizeVal, pixelBoxStylesVal,
		reliableTrDimensionsVal, reliableMarginLeftVal,
		container = document.createElement( "div" ),
		div = document.createElement( "div" );

	// Finish early in limited (non-browser) environments
	if ( !div.style ) {
		return;
	}

	// Support: IE <=9 - 11 only
	// Style of cloned element affects source element cloned (#8908)
	div.style.backgroundClip = "content-box";
	div.cloneNode( true ).style.backgroundClip = "";
	support.clearCloneStyle = div.style.backgroundClip === "content-box";

	jQuery.extend( support, {
		boxSizingReliable: function() {
			computeStyleTests();
			return boxSizingReliableVal;
		},
		pixelBoxStyles: function() {
			computeStyleTests();
			return pixelBoxStylesVal;
		},
		pixelPosition: function() {
			computeStyleTests();
			return pixelPositionVal;
		},
		reliableMarginLeft: function() {
			computeStyleTests();
			return reliableMarginLeftVal;
		},
		scrollboxSize: function() {
			computeStyleTests();
			return scrollboxSizeVal;
		},

		// Support: IE 9 - 11+, Edge 15 - 18+
		// IE/Edge misreport `getComputedStyle` of table rows with width/height
		// set in CSS while `offset*` properties report correct values.
		// Behavior in IE 9 is more subtle than in newer versions & it passes
		// some versions of this test; make sure not to make it pass there!
		//
		// Support: Firefox 70+
		// Only Firefox includes border widths
		// in computed dimensions. (gh-4529)
		reliableTrDimensions: function() {
			var table, tr, trChild, trStyle;
			if ( reliableTrDimensionsVal == null ) {
				table = document.createElement( "table" );
				tr = document.createElement( "tr" );
				trChild = document.createElement( "div" );

				table.style.cssText = "position:absolute;left:-11111px;border-collapse:separate";
				tr.style.cssText = "border:1px solid";

				// Support: Chrome 86+
				// Height set through cssText does not get applied.
				// Computed height then comes back as 0.
				tr.style.height = "1px";
				trChild.style.height = "9px";

				// Support: Android 8 Chrome 86+
				// In our bodyBackground.html iframe,
				// display for all div elements is set to "inline",
				// which causes a problem only in Android 8 Chrome 86.
				// Ensuring the div is display: block
				// gets around this issue.
				trChild.style.display = "block";

				documentElement
					.appendChild( table )
					.appendChild( tr )
					.appendChild( trChild );

				trStyle = window.getComputedStyle( tr );
				reliableTrDimensionsVal = ( parseInt( trStyle.height, 10 ) +
					parseInt( trStyle.borderTopWidth, 10 ) +
					parseInt( trStyle.borderBottomWidth, 10 ) ) === tr.offsetHeight;

				documentElement.removeChild( table );
			}
			return reliableTrDimensionsVal;
		}
	} );
} )();


function curCSS( elem, name, computed ) {
	var width, minWidth, maxWidth, ret,

		// Support: Firefox 51+
		// Retrieving style before computed somehow
		// fixes an issue with getting wrong values
		// on detached elements
		style = elem.style;

	computed = computed || getStyles( elem );

	// getPropertyValue is needed for:
	//   .css('filter') (IE 9 only, #12537)
	//   .css('--customProperty) (#3144)
	if ( computed ) {
		ret = computed.getPropertyValue( name ) || computed[ name ];

		if ( ret === "" && !isAttached( elem ) ) {
			ret = jQuery.style( elem, name );
		}

		// A tribute to the "awesome hack by Dean Edwards"
		// Android Browser returns percentage for some values,
		// but width seems to be reliably pixels.
		// This is against the CSSOM draft spec:
		// https://drafts.csswg.org/cssom/#resolved-values
		if ( !support.pixelBoxStyles() && rnumnonpx.test( ret ) && rboxStyle.test( name ) ) {

			// Remember the original values
			width = style.width;
			minWidth = style.minWidth;
			maxWidth = style.maxWidth;

			// Put in the new values to get a computed value out
			style.minWidth = style.maxWidth = style.width = ret;
			ret = computed.width;

			// Revert the changed values
			style.width = width;
			style.minWidth = minWidth;
			style.maxWidth = maxWidth;
		}
	}

	return ret !== undefined ?

		// Support: IE <=9 - 11 only
		// IE returns zIndex value as an integer.
		ret + "" :
		ret;
}


function addGetHookIf( conditionFn, hookFn ) {

	// Define the hook, we'll check on the first run if it's really needed.
	return {
		get: function() {
			if ( conditionFn() ) {

				// Hook not needed (or it's not possible to use it due
				// to missing dependency), remove it.
				delete this.get;
				return;
			}

			// Hook needed; redefine it so that the support test is not executed again.
			return ( this.get = hookFn ).apply( this, arguments );
		}
	};
}


var cssPrefixes = [ "Webkit", "Moz", "ms" ],
	emptyStyle = document.createElement( "div" ).style,
	vendorProps = {};

// Return a vendor-prefixed property or undefined
function vendorPropName( name ) {

	// Check for vendor prefixed names
	var capName = name[ 0 ].toUpperCase() + name.slice( 1 ),
		i = cssPrefixes.length;

	while ( i-- ) {
		name = cssPrefixes[ i ] + capName;
		if ( name in emptyStyle ) {
			return name;
		}
	}
}

// Return a potentially-mapped jQuery.cssProps or vendor prefixed property
function finalPropName( name ) {
	var final = jQuery.cssProps[ name ] || vendorProps[ name ];

	if ( final ) {
		return final;
	}
	if ( name in emptyStyle ) {
		return name;
	}
	return vendorProps[ name ] = vendorPropName( name ) || name;
}


var

	// Swappable if display is none or starts with table
	// except "table", "table-cell", or "table-caption"
	// See here for display values: https://developer.mozilla.org/en-US/docs/CSS/display
	rdisplayswap = /^(none|table(?!-c[ea]).+)/,
	rcustomProp = /^--/,
	cssShow = { position: "absolute", visibility: "hidden", display: "block" },
	cssNormalTransform = {
		letterSpacing: "0",
		fontWeight: "400"
	};

function setPositiveNumber( _elem, value, subtract ) {

	// Any relative (+/-) values have already been
	// normalized at this point
	var matches = rcssNum.exec( value );
	return matches ?

		// Guard against undefined "subtract", e.g., when used as in cssHooks
		Math.max( 0, matches[ 2 ] - ( subtract || 0 ) ) + ( matches[ 3 ] || "px" ) :
		value;
}

function boxModelAdjustment( elem, dimension, box, isBorderBox, styles, computedVal ) {
	var i = dimension === "width" ? 1 : 0,
		extra = 0,
		delta = 0;

	// Adjustment may not be necessary
	if ( box === ( isBorderBox ? "border" : "content" ) ) {
		return 0;
	}

	for ( ; i < 4; i += 2 ) {

		// Both box models exclude margin
		if ( box === "margin" ) {
			delta += jQuery.css( elem, box + cssExpand[ i ], true, styles );
		}

		// If we get here with a content-box, we're seeking "padding" or "border" or "margin"
		if ( !isBorderBox ) {

			// Add padding
			delta += jQuery.css( elem, "padding" + cssExpand[ i ], true, styles );

			// For "border" or "margin", add border
			if ( box !== "padding" ) {
				delta += jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );

			// But still keep track of it otherwise
			} else {
				extra += jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );
			}

		// If we get here with a border-box (content + padding + border), we're seeking "content" or
		// "padding" or "margin"
		} else {

			// For "content", subtract padding
			if ( box === "content" ) {
				delta -= jQuery.css( elem, "padding" + cssExpand[ i ], true, styles );
			}

			// For "content" or "padding", subtract border
			if ( box !== "margin" ) {
				delta -= jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );
			}
		}
	}

	// Account for positive content-box scroll gutter when requested by providing computedVal
	if ( !isBorderBox && computedVal >= 0 ) {

		// offsetWidth/offsetHeight is a rounded sum of content, padding, scroll gutter, and border
		// Assuming integer scroll gutter, subtract the rest and round down
		delta += Math.max( 0, Math.ceil(
			elem[ "offset" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 ) ] -
			computedVal -
			delta -
			extra -
			0.5

		// If offsetWidth/offsetHeight is unknown, then we can't determine content-box scroll gutter
		// Use an explicit zero to avoid NaN (gh-3964)
		) ) || 0;
	}

	return delta;
}

function getWidthOrHeight( elem, dimension, extra ) {

	// Start with computed style
	var styles = getStyles( elem ),

		// To avoid forcing a reflow, only fetch boxSizing if we need it (gh-4322).
		// Fake content-box until we know it's needed to know the true value.
		boxSizingNeeded = !support.boxSizingReliable() || extra,
		isBorderBox = boxSizingNeeded &&
			jQuery.css( elem, "boxSizing", false, styles ) === "border-box",
		valueIsBorderBox = isBorderBox,

		val = curCSS( elem, dimension, styles ),
		offsetProp = "offset" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 );

	// Support: Firefox <=54
	// Return a confounding non-pixel value or feign ignorance, as appropriate.
	if ( rnumnonpx.test( val ) ) {
		if ( !extra ) {
			return val;
		}
		val = "auto";
	}


	// Support: IE 9 - 11 only
	// Use offsetWidth/offsetHeight for when box sizing is unreliable.
	// In those cases, the computed value can be trusted to be border-box.
	if ( ( !support.boxSizingReliable() && isBorderBox ||

		// Support: IE 10 - 11+, Edge 15 - 18+
		// IE/Edge misreport `getComputedStyle` of table rows with width/height
		// set in CSS while `offset*` properties report correct values.
		// Interestingly, in some cases IE 9 doesn't suffer from this issue.
		!support.reliableTrDimensions() && nodeName( elem, "tr" ) ||

		// Fall back to offsetWidth/offsetHeight when value is "auto"
		// This happens for inline elements with no explicit setting (gh-3571)
		val === "auto" ||

		// Support: Android <=4.1 - 4.3 only
		// Also use offsetWidth/offsetHeight for misreported inline dimensions (gh-3602)
		!parseFloat( val ) && jQuery.css( elem, "display", false, styles ) === "inline" ) &&

		// Make sure the element is visible & connected
		elem.getClientRects().length ) {

		isBorderBox = jQuery.css( elem, "boxSizing", false, styles ) === "border-box";

		// Where available, offsetWidth/offsetHeight approximate border box dimensions.
		// Where not available (e.g., SVG), assume unreliable box-sizing and interpret the
		// retrieved value as a content box dimension.
		valueIsBorderBox = offsetProp in elem;
		if ( valueIsBorderBox ) {
			val = elem[ offsetProp ];
		}
	}

	// Normalize "" and auto
	val = parseFloat( val ) || 0;

	// Adjust for the element's box model
	return ( val +
		boxModelAdjustment(
			elem,
			dimension,
			extra || ( isBorderBox ? "border" : "content" ),
			valueIsBorderBox,
			styles,

			// Provide the current computed size to request scroll gutter calculation (gh-3589)
			val
		)
	) + "px";
}

jQuery.extend( {

	// Add in style property hooks for overriding the default
	// behavior of getting and setting a style property
	cssHooks: {
		opacity: {
			get: function( elem, computed ) {
				if ( computed ) {

					// We should always get a number back from opacity
					var ret = curCSS( elem, "opacity" );
					return ret === "" ? "1" : ret;
				}
			}
		}
	},

	// Don't automatically add "px" to these possibly-unitless properties
	cssNumber: {
		"animationIterationCount": true,
		"columnCount": true,
		"fillOpacity": true,
		"flexGrow": true,
		"flexShrink": true,
		"fontWeight": true,
		"gridArea": true,
		"gridColumn": true,
		"gridColumnEnd": true,
		"gridColumnStart": true,
		"gridRow": true,
		"gridRowEnd": true,
		"gridRowStart": true,
		"lineHeight": true,
		"opacity": true,
		"order": true,
		"orphans": true,
		"widows": true,
		"zIndex": true,
		"zoom": true
	},

	// Add in properties whose names you wish to fix before
	// setting or getting the value
	cssProps: {},

	// Get and set the style property on a DOM Node
	style: function( elem, name, value, extra ) {

		// Don't set styles on text and comment nodes
		if ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {
			return;
		}

		// Make sure that we're working with the right name
		var ret, type, hooks,
			origName = camelCase( name ),
			isCustomProp = rcustomProp.test( name ),
			style = elem.style;

		// Make sure that we're working with the right name. We don't
		// want to query the value if it is a CSS custom property
		// since they are user-defined.
		if ( !isCustomProp ) {
			name = finalPropName( origName );
		}

		// Gets hook for the prefixed version, then unprefixed version
		hooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

		// Check if we're setting a value
		if ( value !== undefined ) {
			type = typeof value;

			// Convert "+=" or "-=" to relative numbers (#7345)
			if ( type === "string" && ( ret = rcssNum.exec( value ) ) && ret[ 1 ] ) {
				value = adjustCSS( elem, name, ret );

				// Fixes bug #9237
				type = "number";
			}

			// Make sure that null and NaN values aren't set (#7116)
			if ( value == null || value !== value ) {
				return;
			}

			// If a number was passed in, add the unit (except for certain CSS properties)
			// The isCustomProp check can be removed in jQuery 4.0 when we only auto-append
			// "px" to a few hardcoded values.
			if ( type === "number" && !isCustomProp ) {
				value += ret && ret[ 3 ] || ( jQuery.cssNumber[ origName ] ? "" : "px" );
			}

			// background-* props affect original clone's values
			if ( !support.clearCloneStyle && value === "" && name.indexOf( "background" ) === 0 ) {
				style[ name ] = "inherit";
			}

			// If a hook was provided, use that value, otherwise just set the specified value
			if ( !hooks || !( "set" in hooks ) ||
				( value = hooks.set( elem, value, extra ) ) !== undefined ) {

				if ( isCustomProp ) {
					style.setProperty( name, value );
				} else {
					style[ name ] = value;
				}
			}

		} else {

			// If a hook was provided get the non-computed value from there
			if ( hooks && "get" in hooks &&
				( ret = hooks.get( elem, false, extra ) ) !== undefined ) {

				return ret;
			}

			// Otherwise just get the value from the style object
			return style[ name ];
		}
	},

	css: function( elem, name, extra, styles ) {
		var val, num, hooks,
			origName = camelCase( name ),
			isCustomProp = rcustomProp.test( name );

		// Make sure that we're working with the right name. We don't
		// want to modify the value if it is a CSS custom property
		// since they are user-defined.
		if ( !isCustomProp ) {
			name = finalPropName( origName );
		}

		// Try prefixed name followed by the unprefixed name
		hooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

		// If a hook was provided get the computed value from there
		if ( hooks && "get" in hooks ) {
			val = hooks.get( elem, true, extra );
		}

		// Otherwise, if a way to get the computed value exists, use that
		if ( val === undefined ) {
			val = curCSS( elem, name, styles );
		}

		// Convert "normal" to computed value
		if ( val === "normal" && name in cssNormalTransform ) {
			val = cssNormalTransform[ name ];
		}

		// Make numeric if forced or a qualifier was provided and val looks numeric
		if ( extra === "" || extra ) {
			num = parseFloat( val );
			return extra === true || isFinite( num ) ? num || 0 : val;
		}

		return val;
	}
} );

jQuery.each( [ "height", "width" ], function( _i, dimension ) {
	jQuery.cssHooks[ dimension ] = {
		get: function( elem, computed, extra ) {
			if ( computed ) {

				// Certain elements can have dimension info if we invisibly show them
				// but it must have a current display style that would benefit
				return rdisplayswap.test( jQuery.css( elem, "display" ) ) &&

					// Support: Safari 8+
					// Table columns in Safari have non-zero offsetWidth & zero
					// getBoundingClientRect().width unless display is changed.
					// Support: IE <=11 only
					// Running getBoundingClientRect on a disconnected node
					// in IE throws an error.
					( !elem.getClientRects().length || !elem.getBoundingClientRect().width ) ?
					swap( elem, cssShow, function() {
						return getWidthOrHeight( elem, dimension, extra );
					} ) :
					getWidthOrHeight( elem, dimension, extra );
			}
		},

		set: function( elem, value, extra ) {
			var matches,
				styles = getStyles( elem ),

				// Only read styles.position if the test has a chance to fail
				// to avoid forcing a reflow.
				scrollboxSizeBuggy = !support.scrollboxSize() &&
					styles.position === "absolute",

				// To avoid forcing a reflow, only fetch boxSizing if we need it (gh-3991)
				boxSizingNeeded = scrollboxSizeBuggy || extra,
				isBorderBox = boxSizingNeeded &&
					jQuery.css( elem, "boxSizing", false, styles ) === "border-box",
				subtract = extra ?
					boxModelAdjustment(
						elem,
						dimension,
						extra,
						isBorderBox,
						styles
					) :
					0;

			// Account for unreliable border-box dimensions by comparing offset* to computed and
			// faking a content-box to get border and padding (gh-3699)
			if ( isBorderBox && scrollboxSizeBuggy ) {
				subtract -= Math.ceil(
					elem[ "offset" + dimension[ 0 ].toUpperCase() + dimension.slice( 1 ) ] -
					parseFloat( styles[ dimension ] ) -
					boxModelAdjustment( elem, dimension, "border", false, styles ) -
					0.5
				);
			}

			// Convert to pixels if value adjustment is needed
			if ( subtract && ( matches = rcssNum.exec( value ) ) &&
				( matches[ 3 ] || "px" ) !== "px" ) {

				elem.style[ dimension ] = value;
				value = jQuery.css( elem, dimension );
			}

			return setPositiveNumber( elem, value, subtract );
		}
	};
} );

jQuery.cssHooks.marginLeft = addGetHookIf( support.reliableMarginLeft,
	function( elem, computed ) {
		if ( computed ) {
			return ( parseFloat( curCSS( elem, "marginLeft" ) ) ||
				elem.getBoundingClientRect().left -
					swap( elem, { marginLeft: 0 }, function() {
						return elem.getBoundingClientRect().left;
					} )
			) + "px";
		}
	}
);

// These hooks are used by animate to expand properties
jQuery.each( {
	margin: "",
	padding: "",
	border: "Width"
}, function( prefix, suffix ) {
	jQuery.cssHooks[ prefix + suffix ] = {
		expand: function( value ) {
			var i = 0,
				expanded = {},

				// Assumes a single number if not a string
				parts = typeof value === "string" ? value.split( " " ) : [ value ];

			for ( ; i < 4; i++ ) {
				expanded[ prefix + cssExpand[ i ] + suffix ] =
					parts[ i ] || parts[ i - 2 ] || parts[ 0 ];
			}

			return expanded;
		}
	};

	if ( prefix !== "margin" ) {
		jQuery.cssHooks[ prefix + suffix ].set = setPositiveNumber;
	}
} );

jQuery.fn.extend( {
	css: function( name, value ) {
		return access( this, function( elem, name, value ) {
			var styles, len,
				map = {},
				i = 0;

			if ( Array.isArray( name ) ) {
				styles = getStyles( elem );
				len = name.length;

				for ( ; i < len; i++ ) {
					map[ name[ i ] ] = jQuery.css( elem, name[ i ], false, styles );
				}

				return map;
			}

			return value !== undefined ?
				jQuery.style( elem, name, value ) :
				jQuery.css( elem, name );
		}, name, value, arguments.length > 1 );
	}
} );


function Tween( elem, options, prop, end, easing ) {
	return new Tween.prototype.init( elem, options, prop, end, easing );
}
jQuery.Tween = Tween;

Tween.prototype = {
	constructor: Tween,
	init: function( elem, options, prop, end, easing, unit ) {
		this.elem = elem;
		this.prop = prop;
		this.easing = easing || jQuery.easing._default;
		this.options = options;
		this.start = this.now = this.cur();
		this.end = end;
		this.unit = unit || ( jQuery.cssNumber[ prop ] ? "" : "px" );
	},
	cur: function() {
		var hooks = Tween.propHooks[ this.prop ];

		return hooks && hooks.get ?
			hooks.get( this ) :
			Tween.propHooks._default.get( this );
	},
	run: function( percent ) {
		var eased,
			hooks = Tween.propHooks[ this.prop ];

		if ( this.options.duration ) {
			this.pos = eased = jQuery.easing[ this.easing ](
				percent, this.options.duration * percent, 0, 1, this.options.duration
			);
		} else {
			this.pos = eased = percent;
		}
		this.now = ( this.end - this.start ) * eased + this.start;

		if ( this.options.step ) {
			this.options.step.call( this.elem, this.now, this );
		}

		if ( hooks && hooks.set ) {
			hooks.set( this );
		} else {
			Tween.propHooks._default.set( this );
		}
		return this;
	}
};

Tween.prototype.init.prototype = Tween.prototype;

Tween.propHooks = {
	_default: {
		get: function( tween ) {
			var result;

			// Use a property on the element directly when it is not a DOM element,
			// or when there is no matching style property that exists.
			if ( tween.elem.nodeType !== 1 ||
				tween.elem[ tween.prop ] != null && tween.elem.style[ tween.prop ] == null ) {
				return tween.elem[ tween.prop ];
			}

			// Passing an empty string as a 3rd parameter to .css will automatically
			// attempt a parseFloat and fallback to a string if the parse fails.
			// Simple values such as "10px" are parsed to Float;
			// complex values such as "rotate(1rad)" are returned as-is.
			result = jQuery.css( tween.elem, tween.prop, "" );

			// Empty strings, null, undefined and "auto" are converted to 0.
			return !result || result === "auto" ? 0 : result;
		},
		set: function( tween ) {

			// Use step hook for back compat.
			// Use cssHook if its there.
			// Use .style if available and use plain properties where available.
			if ( jQuery.fx.step[ tween.prop ] ) {
				jQuery.fx.step[ tween.prop ]( tween );
			} else if ( tween.elem.nodeType === 1 && (
				jQuery.cssHooks[ tween.prop ] ||
					tween.elem.style[ finalPropName( tween.prop ) ] != null ) ) {
				jQuery.style( tween.elem, tween.prop, tween.now + tween.unit );
			} else {
				tween.elem[ tween.prop ] = tween.now;
			}
		}
	}
};

// Support: IE <=9 only
// Panic based approach to setting things on disconnected nodes
Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {
	set: function( tween ) {
		if ( tween.elem.nodeType && tween.elem.parentNode ) {
			tween.elem[ tween.prop ] = tween.now;
		}
	}
};

jQuery.easing = {
	linear: function( p ) {
		return p;
	},
	swing: function( p ) {
		return 0.5 - Math.cos( p * Math.PI ) / 2;
	},
	_default: "swing"
};

jQuery.fx = Tween.prototype.init;

// Back compat <1.8 extension point
jQuery.fx.step = {};




var
	fxNow, inProgress,
	rfxtypes = /^(?:toggle|show|hide)$/,
	rrun = /queueHooks$/;

function schedule() {
	if ( inProgress ) {
		if ( document.hidden === false && window.requestAnimationFrame ) {
			window.requestAnimationFrame( schedule );
		} else {
			window.setTimeout( schedule, jQuery.fx.interval );
		}

		jQuery.fx.tick();
	}
}

// Animations created synchronously will run synchronously
function createFxNow() {
	window.setTimeout( function() {
		fxNow = undefined;
	} );
	return ( fxNow = Date.now() );
}

// Generate parameters to create a standard animation
function genFx( type, includeWidth ) {
	var which,
		i = 0,
		attrs = { height: type };

	// If we include width, step value is 1 to do all cssExpand values,
	// otherwise step value is 2 to skip over Left and Right
	includeWidth = includeWidth ? 1 : 0;
	for ( ; i < 4; i += 2 - includeWidth ) {
		which = cssExpand[ i ];
		attrs[ "margin" + which ] = attrs[ "padding" + which ] = type;
	}

	if ( includeWidth ) {
		attrs.opacity = attrs.width = type;
	}

	return attrs;
}

function createTween( value, prop, animation ) {
	var tween,
		collection = ( Animation.tweeners[ prop ] || [] ).concat( Animation.tweeners[ "*" ] ),
		index = 0,
		length = collection.length;
	for ( ; index < length; index++ ) {
		if ( ( tween = collection[ index ].call( animation, prop, value ) ) ) {

			// We're done with this property
			return tween;
		}
	}
}

function defaultPrefilter( elem, props, opts ) {
	var prop, value, toggle, hooks, oldfire, propTween, restoreDisplay, display,
		isBox = "width" in props || "height" in props,
		anim = this,
		orig = {},
		style = elem.style,
		hidden = elem.nodeType && isHiddenWithinTree( elem ),
		dataShow = dataPriv.get( elem, "fxshow" );

	// Queue-skipping animations hijack the fx hooks
	if ( !opts.queue ) {
		hooks = jQuery._queueHooks( elem, "fx" );
		if ( hooks.unqueued == null ) {
			hooks.unqueued = 0;
			oldfire = hooks.empty.fire;
			hooks.empty.fire = function() {
				if ( !hooks.unqueued ) {
					oldfire();
				}
			};
		}
		hooks.unqueued++;

		anim.always( function() {

			// Ensure the complete handler is called before this completes
			anim.always( function() {
				hooks.unqueued--;
				if ( !jQuery.queue( elem, "fx" ).length ) {
					hooks.empty.fire();
				}
			} );
		} );
	}

	// Detect show/hide animations
	for ( prop in props ) {
		value = props[ prop ];
		if ( rfxtypes.test( value ) ) {
			delete props[ prop ];
			toggle = toggle || value === "toggle";
			if ( value === ( hidden ? "hide" : "show" ) ) {

				// Pretend to be hidden if this is a "show" and
				// there is still data from a stopped show/hide
				if ( value === "show" && dataShow && dataShow[ prop ] !== undefined ) {
					hidden = true;

				// Ignore all other no-op show/hide data
				} else {
					continue;
				}
			}
			orig[ prop ] = dataShow && dataShow[ prop ] || jQuery.style( elem, prop );
		}
	}

	// Bail out if this is a no-op like .hide().hide()
	propTween = !jQuery.isEmptyObject( props );
	if ( !propTween && jQuery.isEmptyObject( orig ) ) {
		return;
	}

	// Restrict "overflow" and "display" styles during box animations
	if ( isBox && elem.nodeType === 1 ) {

		// Support: IE <=9 - 11, Edge 12 - 15
		// Record all 3 overflow attributes because IE does not infer the shorthand
		// from identically-valued overflowX and overflowY and Edge just mirrors
		// the overflowX value there.
		opts.overflow = [ style.overflow, style.overflowX, style.overflowY ];

		// Identify a display type, preferring old show/hide data over the CSS cascade
		restoreDisplay = dataShow && dataShow.display;
		if ( restoreDisplay == null ) {
			restoreDisplay = dataPriv.get( elem, "display" );
		}
		display = jQuery.css( elem, "display" );
		if ( display === "none" ) {
			if ( restoreDisplay ) {
				display = restoreDisplay;
			} else {

				// Get nonempty value(s) by temporarily forcing visibility
				showHide( [ elem ], true );
				restoreDisplay = elem.style.display || restoreDisplay;
				display = jQuery.css( elem, "display" );
				showHide( [ elem ] );
			}
		}

		// Animate inline elements as inline-block
		if ( display === "inline" || display === "inline-block" && restoreDisplay != null ) {
			if ( jQuery.css( elem, "float" ) === "none" ) {

				// Restore the original display value at the end of pure show/hide animations
				if ( !propTween ) {
					anim.done( function() {
						style.display = restoreDisplay;
					} );
					if ( restoreDisplay == null ) {
						display = style.display;
						restoreDisplay = display === "none" ? "" : display;
					}
				}
				style.display = "inline-block";
			}
		}
	}

	if ( opts.overflow ) {
		style.overflow = "hidden";
		anim.always( function() {
			style.overflow = opts.overflow[ 0 ];
			style.overflowX = opts.overflow[ 1 ];
			style.overflowY = opts.overflow[ 2 ];
		} );
	}

	// Implement show/hide animations
	propTween = false;
	for ( prop in orig ) {

		// General show/hide setup for this element animation
		if ( !propTween ) {
			if ( dataShow ) {
				if ( "hidden" in dataShow ) {
					hidden = dataShow.hidden;
				}
			} else {
				dataShow = dataPriv.access( elem, "fxshow", { display: restoreDisplay } );
			}

			// Store hidden/visible for toggle so `.stop().toggle()` "reverses"
			if ( toggle ) {
				dataShow.hidden = !hidden;
			}

			// Show elements before animating them
			if ( hidden ) {
				showHide( [ elem ], true );
			}

			/* eslint-disable no-loop-func */

			anim.done( function() {

				/* eslint-enable no-loop-func */

				// The final step of a "hide" animation is actually hiding the element
				if ( !hidden ) {
					showHide( [ elem ] );
				}
				dataPriv.remove( elem, "fxshow" );
				for ( prop in orig ) {
					jQuery.style( elem, prop, orig[ prop ] );
				}
			} );
		}

		// Per-property setup
		propTween = createTween( hidden ? dataShow[ prop ] : 0, prop, anim );
		if ( !( prop in dataShow ) ) {
			dataShow[ prop ] = propTween.start;
			if ( hidden ) {
				propTween.end = propTween.start;
				propTween.start = 0;
			}
		}
	}
}

function propFilter( props, specialEasing ) {
	var index, name, easing, value, hooks;

	// camelCase, specialEasing and expand cssHook pass
	for ( index in props ) {
		name = camelCase( index );
		easing = specialEasing[ name ];
		value = props[ index ];
		if ( Array.isArray( value ) ) {
			easing = value[ 1 ];
			value = props[ index ] = value[ 0 ];
		}

		if ( index !== name ) {
			props[ name ] = value;
			delete props[ index ];
		}

		hooks = jQuery.cssHooks[ name ];
		if ( hooks && "expand" in hooks ) {
			value = hooks.expand( value );
			delete props[ name ];

			// Not quite $.extend, this won't overwrite existing keys.
			// Reusing 'index' because we have the correct "name"
			for ( index in value ) {
				if ( !( index in props ) ) {
					props[ index ] = value[ index ];
					specialEasing[ index ] = easing;
				}
			}
		} else {
			specialEasing[ name ] = easing;
		}
	}
}

function Animation( elem, properties, options ) {
	var result,
		stopped,
		index = 0,
		length = Animation.prefilters.length,
		deferred = jQuery.Deferred().always( function() {

			// Don't match elem in the :animated selector
			delete tick.elem;
		} ),
		tick = function() {
			if ( stopped ) {
				return false;
			}
			var currentTime = fxNow || createFxNow(),
				remaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),

				// Support: Android 2.3 only
				// Archaic crash bug won't allow us to use `1 - ( 0.5 || 0 )` (#12497)
				temp = remaining / animation.duration || 0,
				percent = 1 - temp,
				index = 0,
				length = animation.tweens.length;

			for ( ; index < length; index++ ) {
				animation.tweens[ index ].run( percent );
			}

			deferred.notifyWith( elem, [ animation, percent, remaining ] );

			// If there's more to do, yield
			if ( percent < 1 && length ) {
				return remaining;
			}

			// If this was an empty animation, synthesize a final progress notification
			if ( !length ) {
				deferred.notifyWith( elem, [ animation, 1, 0 ] );
			}

			// Resolve the animation and report its conclusion
			deferred.resolveWith( elem, [ animation ] );
			return false;
		},
		animation = deferred.promise( {
			elem: elem,
			props: jQuery.extend( {}, properties ),
			opts: jQuery.extend( true, {
				specialEasing: {},
				easing: jQuery.easing._default
			}, options ),
			originalProperties: properties,
			originalOptions: options,
			startTime: fxNow || createFxNow(),
			duration: options.duration,
			tweens: [],
			createTween: function( prop, end ) {
				var tween = jQuery.Tween( elem, animation.opts, prop, end,
					animation.opts.specialEasing[ prop ] || animation.opts.easing );
				animation.tweens.push( tween );
				return tween;
			},
			stop: function( gotoEnd ) {
				var index = 0,

					// If we are going to the end, we want to run all the tweens
					// otherwise we skip this part
					length = gotoEnd ? animation.tweens.length : 0;
				if ( stopped ) {
					return this;
				}
				stopped = true;
				for ( ; index < length; index++ ) {
					animation.tweens[ index ].run( 1 );
				}

				// Resolve when we played the last frame; otherwise, reject
				if ( gotoEnd ) {
					deferred.notifyWith( elem, [ animation, 1, 0 ] );
					deferred.resolveWith( elem, [ animation, gotoEnd ] );
				} else {
					deferred.rejectWith( elem, [ animation, gotoEnd ] );
				}
				return this;
			}
		} ),
		props = animation.props;

	propFilter( props, animation.opts.specialEasing );

	for ( ; index < length; index++ ) {
		result = Animation.prefilters[ index ].call( animation, elem, props, animation.opts );
		if ( result ) {
			if ( isFunction( result.stop ) ) {
				jQuery._queueHooks( animation.elem, animation.opts.queue ).stop =
					result.stop.bind( result );
			}
			return result;
		}
	}

	jQuery.map( props, createTween, animation );

	if ( isFunction( animation.opts.start ) ) {
		animation.opts.start.call( elem, animation );
	}

	// Attach callbacks from options
	animation
		.progress( animation.opts.progress )
		.done( animation.opts.done, animation.opts.complete )
		.fail( animation.opts.fail )
		.always( animation.opts.always );

	jQuery.fx.timer(
		jQuery.extend( tick, {
			elem: elem,
			anim: animation,
			queue: animation.opts.queue
		} )
	);

	return animation;
}

jQuery.Animation = jQuery.extend( Animation, {

	tweeners: {
		"*": [ function( prop, value ) {
			var tween = this.createTween( prop, value );
			adjustCSS( tween.elem, prop, rcssNum.exec( value ), tween );
			return tween;
		} ]
	},

	tweener: function( props, callback ) {
		if ( isFunction( props ) ) {
			callback = props;
			props = [ "*" ];
		} else {
			props = props.match( rnothtmlwhite );
		}

		var prop,
			index = 0,
			length = props.length;

		for ( ; index < length; index++ ) {
			prop = props[ index ];
			Animation.tweeners[ prop ] = Animation.tweeners[ prop ] || [];
			Animation.tweeners[ prop ].unshift( callback );
		}
	},

	prefilters: [ defaultPrefilter ],

	prefilter: function( callback, prepend ) {
		if ( prepend ) {
			Animation.prefilters.unshift( callback );
		} else {
			Animation.prefilters.push( callback );
		}
	}
} );

jQuery.speed = function( speed, easing, fn ) {
	var opt = speed && typeof speed === "object" ? jQuery.extend( {}, speed ) : {
		complete: fn || !fn && easing ||
			isFunction( speed ) && speed,
		duration: speed,
		easing: fn && easing || easing && !isFunction( easing ) && easing
	};

	// Go to the end state if fx are off
	if ( jQuery.fx.off ) {
		opt.duration = 0;

	} else {
		if ( typeof opt.duration !== "number" ) {
			if ( opt.duration in jQuery.fx.speeds ) {
				opt.duration = jQuery.fx.speeds[ opt.duration ];

			} else {
				opt.duration = jQuery.fx.speeds._default;
			}
		}
	}

	// Normalize opt.queue - true/undefined/null -> "fx"
	if ( opt.queue == null || opt.queue === true ) {
		opt.queue = "fx";
	}

	// Queueing
	opt.old = opt.complete;

	opt.complete = function() {
		if ( isFunction( opt.old ) ) {
			opt.old.call( this );
		}

		if ( opt.queue ) {
			jQuery.dequeue( this, opt.queue );
		}
	};

	return opt;
};

jQuery.fn.extend( {
	fadeTo: function( speed, to, easing, callback ) {

		// Show any hidden elements after setting opacity to 0
		return this.filter( isHiddenWithinTree ).css( "opacity", 0 ).show()

			// Animate to the value specified
			.end().animate( { opacity: to }, speed, easing, callback );
	},
	animate: function( prop, speed, easing, callback ) {
		var empty = jQuery.isEmptyObject( prop ),
			optall = jQuery.speed( speed, easing, callback ),
			doAnimation = function() {

				// Operate on a copy of prop so per-property easing won't be lost
				var anim = Animation( this, jQuery.extend( {}, prop ), optall );

				// Empty animations, or finishing resolves immediately
				if ( empty || dataPriv.get( this, "finish" ) ) {
					anim.stop( true );
				}
			};

		doAnimation.finish = doAnimation;

		return empty || optall.queue === false ?
			this.each( doAnimation ) :
			this.queue( optall.queue, doAnimation );
	},
	stop: function( type, clearQueue, gotoEnd ) {
		var stopQueue = function( hooks ) {
			var stop = hooks.stop;
			delete hooks.stop;
			stop( gotoEnd );
		};

		if ( typeof type !== "string" ) {
			gotoEnd = clearQueue;
			clearQueue = type;
			type = undefined;
		}
		if ( clearQueue ) {
			this.queue( type || "fx", [] );
		}

		return this.each( function() {
			var dequeue = true,
				index = type != null && type + "queueHooks",
				timers = jQuery.timers,
				data = dataPriv.get( this );

			if ( index ) {
				if ( data[ index ] && data[ index ].stop ) {
					stopQueue( data[ index ] );
				}
			} else {
				for ( index in data ) {
					if ( data[ index ] && data[ index ].stop && rrun.test( index ) ) {
						stopQueue( data[ index ] );
					}
				}
			}

			for ( index = timers.length; index--; ) {
				if ( timers[ index ].elem === this &&
					( type == null || timers[ index ].queue === type ) ) {

					timers[ index ].anim.stop( gotoEnd );
					dequeue = false;
					timers.splice( index, 1 );
				}
			}

			// Start the next in the queue if the last step wasn't forced.
			// Timers currently will call their complete callbacks, which
			// will dequeue but only if they were gotoEnd.
			if ( dequeue || !gotoEnd ) {
				jQuery.dequeue( this, type );
			}
		} );
	},
	finish: function( type ) {
		if ( type !== false ) {
			type = type || "fx";
		}
		return this.each( function() {
			var index,
				data = dataPriv.get( this ),
				queue = data[ type + "queue" ],
				hooks = data[ type + "queueHooks" ],
				timers = jQuery.timers,
				length = queue ? queue.length : 0;

			// Enable finishing flag on private data
			data.finish = true;

			// Empty the queue first
			jQuery.queue( this, type, [] );

			if ( hooks && hooks.stop ) {
				hooks.stop.call( this, true );
			}

			// Look for any active animations, and finish them
			for ( index = timers.length; index--; ) {
				if ( timers[ index ].elem === this && timers[ index ].queue === type ) {
					timers[ index ].anim.stop( true );
					timers.splice( index, 1 );
				}
			}

			// Look for any animations in the old queue and finish them
			for ( index = 0; index < length; index++ ) {
				if ( queue[ index ] && queue[ index ].finish ) {
					queue[ index ].finish.call( this );
				}
			}

			// Turn off finishing flag
			delete data.finish;
		} );
	}
} );

jQuery.each( [ "toggle", "show", "hide" ], function( _i, name ) {
	var cssFn = jQuery.fn[ name ];
	jQuery.fn[ name ] = function( speed, easing, callback ) {
		return speed == null || typeof speed === "boolean" ?
			cssFn.apply( this, arguments ) :
			this.animate( genFx( name, true ), speed, easing, callback );
	};
} );

// Generate shortcuts for custom animations
jQuery.each( {
	slideDown: genFx( "show" ),
	slideUp: genFx( "hide" ),
	slideToggle: genFx( "toggle" ),
	fadeIn: { opacity: "show" },
	fadeOut: { opacity: "hide" },
	fadeToggle: { opacity: "toggle" }
}, function( name, props ) {
	jQuery.fn[ name ] = function( speed, easing, callback ) {
		return this.animate( props, speed, easing, callback );
	};
} );

jQuery.timers = [];
jQuery.fx.tick = function() {
	var timer,
		i = 0,
		timers = jQuery.timers;

	fxNow = Date.now();

	for ( ; i < timers.length; i++ ) {
		timer = timers[ i ];

		// Run the timer and safely remove it when done (allowing for external removal)
		if ( !timer() && timers[ i ] === timer ) {
			timers.splice( i--, 1 );
		}
	}

	if ( !timers.length ) {
		jQuery.fx.stop();
	}
	fxNow = undefined;
};

jQuery.fx.timer = function( timer ) {
	jQuery.timers.push( timer );
	jQuery.fx.start();
};

jQuery.fx.interval = 13;
jQuery.fx.start = function() {
	if ( inProgress ) {
		return;
	}

	inProgress = true;
	schedule();
};

jQuery.fx.stop = function() {
	inProgress = null;
};

jQuery.fx.speeds = {
	slow: 600,
	fast: 200,

	// Default speed
	_default: 400
};


// Based off of the plugin by Clint Helfers, with permission.
// https://web.archive.org/web/20100324014747/http://blindsignals.com/index.php/2009/07/jquery-delay/
jQuery.fn.delay = function( time, type ) {
	time = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
	type = type || "fx";

	return this.queue( type, function( next, hooks ) {
		var timeout = window.setTimeout( next, time );
		hooks.stop = function() {
			window.clearTimeout( timeout );
		};
	} );
};


( function() {
	var input = document.createElement( "input" ),
		select = document.createElement( "select" ),
		opt = select.appendChild( document.createElement( "option" ) );

	input.type = "checkbox";

	// Support: Android <=4.3 only
	// Default value for a checkbox should be "on"
	support.checkOn = input.value !== "";

	// Support: IE <=11 only
	// Must access selectedIndex to make default options select
	support.optSelected = opt.selected;

	// Support: IE <=11 only
	// An input loses its value after becoming a radio
	input = document.createElement( "input" );
	input.value = "t";
	input.type = "radio";
	support.radioValue = input.value === "t";
} )();


var boolHook,
	attrHandle = jQuery.expr.attrHandle;

jQuery.fn.extend( {
	attr: function( name, value ) {
		return access( this, jQuery.attr, name, value, arguments.length > 1 );
	},

	removeAttr: function( name ) {
		return this.each( function() {
			jQuery.removeAttr( this, name );
		} );
	}
} );

jQuery.extend( {
	attr: function( elem, name, value ) {
		var ret, hooks,
			nType = elem.nodeType;

		// Don't get/set attributes on text, comment and attribute nodes
		if ( nType === 3 || nType === 8 || nType === 2 ) {
			return;
		}

		// Fallback to prop when attributes are not supported
		if ( typeof elem.getAttribute === "undefined" ) {
			return jQuery.prop( elem, name, value );
		}

		// Attribute hooks are determined by the lowercase version
		// Grab necessary hook if one is defined
		if ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {
			hooks = jQuery.attrHooks[ name.toLowerCase() ] ||
				( jQuery.expr.match.bool.test( name ) ? boolHook : undefined );
		}

		if ( value !== undefined ) {
			if ( value === null ) {
				jQuery.removeAttr( elem, name );
				return;
			}

			if ( hooks && "set" in hooks &&
				( ret = hooks.set( elem, value, name ) ) !== undefined ) {
				return ret;
			}

			elem.setAttribute( name, value + "" );
			return value;
		}

		if ( hooks && "get" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
			return ret;
		}

		ret = jQuery.find.attr( elem, name );

		// Non-existent attributes return null, we normalize to undefined
		return ret == null ? undefined : ret;
	},

	attrHooks: {
		type: {
			set: function( elem, value ) {
				if ( !support.radioValue && value === "radio" &&
					nodeName( elem, "input" ) ) {
					var val = elem.value;
					elem.setAttribute( "type", value );
					if ( val ) {
						elem.value = val;
					}
					return value;
				}
			}
		}
	},

	removeAttr: function( elem, value ) {
		var name,
			i = 0,

			// Attribute names can contain non-HTML whitespace characters
			// https://html.spec.whatwg.org/multipage/syntax.html#attributes-2
			attrNames = value && value.match( rnothtmlwhite );

		if ( attrNames && elem.nodeType === 1 ) {
			while ( ( name = attrNames[ i++ ] ) ) {
				elem.removeAttribute( name );
			}
		}
	}
} );

// Hooks for boolean attributes
boolHook = {
	set: function( elem, value, name ) {
		if ( value === false ) {

			// Remove boolean attributes when set to false
			jQuery.removeAttr( elem, name );
		} else {
			elem.setAttribute( name, name );
		}
		return name;
	}
};

jQuery.each( jQuery.expr.match.bool.source.match( /\w+/g ), function( _i, name ) {
	var getter = attrHandle[ name ] || jQuery.find.attr;

	attrHandle[ name ] = function( elem, name, isXML ) {
		var ret, handle,
			lowercaseName = name.toLowerCase();

		if ( !isXML ) {

			// Avoid an infinite loop by temporarily removing this function from the getter
			handle = attrHandle[ lowercaseName ];
			attrHandle[ lowercaseName ] = ret;
			ret = getter( elem, name, isXML ) != null ?
				lowercaseName :
				null;
			attrHandle[ lowercaseName ] = handle;
		}
		return ret;
	};
} );




var rfocusable = /^(?:input|select|textarea|button)$/i,
	rclickable = /^(?:a|area)$/i;

jQuery.fn.extend( {
	prop: function( name, value ) {
		return access( this, jQuery.prop, name, value, arguments.length > 1 );
	},

	removeProp: function( name ) {
		return this.each( function() {
			delete this[ jQuery.propFix[ name ] || name ];
		} );
	}
} );

jQuery.extend( {
	prop: function( elem, name, value ) {
		var ret, hooks,
			nType = elem.nodeType;

		// Don't get/set properties on text, comment and attribute nodes
		if ( nType === 3 || nType === 8 || nType === 2 ) {
			return;
		}

		if ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {

			// Fix name and attach hooks
			name = jQuery.propFix[ name ] || name;
			hooks = jQuery.propHooks[ name ];
		}

		if ( value !== undefined ) {
			if ( hooks && "set" in hooks &&
				( ret = hooks.set( elem, value, name ) ) !== undefined ) {
				return ret;
			}

			return ( elem[ name ] = value );
		}

		if ( hooks && "get" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
			return ret;
		}

		return elem[ name ];
	},

	propHooks: {
		tabIndex: {
			get: function( elem ) {

				// Support: IE <=9 - 11 only
				// elem.tabIndex doesn't always return the
				// correct value when it hasn't been explicitly set
				// https://web.archive.org/web/20141116233347/http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/
				// Use proper attribute retrieval(#12072)
				var tabindex = jQuery.find.attr( elem, "tabindex" );

				if ( tabindex ) {
					return parseInt( tabindex, 10 );
				}

				if (
					rfocusable.test( elem.nodeName ) ||
					rclickable.test( elem.nodeName ) &&
					elem.href
				) {
					return 0;
				}

				return -1;
			}
		}
	},

	propFix: {
		"for": "htmlFor",
		"class": "className"
	}
} );

// Support: IE <=11 only
// Accessing the selectedIndex property
// forces the browser to respect setting selected
// on the option
// The getter ensures a default option is selected
// when in an optgroup
// eslint rule "no-unused-expressions" is disabled for this code
// since it considers such accessions noop
if ( !support.optSelected ) {
	jQuery.propHooks.selected = {
		get: function( elem ) {

			/* eslint no-unused-expressions: "off" */

			var parent = elem.parentNode;
			if ( parent && parent.parentNode ) {
				parent.parentNode.selectedIndex;
			}
			return null;
		},
		set: function( elem ) {

			/* eslint no-unused-expressions: "off" */

			var parent = elem.parentNode;
			if ( parent ) {
				parent.selectedIndex;

				if ( parent.parentNode ) {
					parent.parentNode.selectedIndex;
				}
			}
		}
	};
}

jQuery.each( [
	"tabIndex",
	"readOnly",
	"maxLength",
	"cellSpacing",
	"cellPadding",
	"rowSpan",
	"colSpan",
	"useMap",
	"frameBorder",
	"contentEditable"
], function() {
	jQuery.propFix[ this.toLowerCase() ] = this;
} );




	// Strip and collapse whitespace according to HTML spec
	// https://infra.spec.whatwg.org/#strip-and-collapse-ascii-whitespace
	function stripAndCollapse( value ) {
		var tokens = value.match( rnothtmlwhite ) || [];
		return tokens.join( " " );
	}


function getClass( elem ) {
	return elem.getAttribute && elem.getAttribute( "class" ) || "";
}

function classesToArray( value ) {
	if ( Array.isArray( value ) ) {
		return value;
	}
	if ( typeof value === "string" ) {
		return value.match( rnothtmlwhite ) || [];
	}
	return [];
}

jQuery.fn.extend( {
	addClass: function( value ) {
		var classes, elem, cur, curValue, clazz, j, finalValue,
			i = 0;

		if ( isFunction( value ) ) {
			return this.each( function( j ) {
				jQuery( this ).addClass( value.call( this, j, getClass( this ) ) );
			} );
		}

		classes = classesToArray( value );

		if ( classes.length ) {
			while ( ( elem = this[ i++ ] ) ) {
				curValue = getClass( elem );
				cur = elem.nodeType === 1 && ( " " + stripAndCollapse( curValue ) + " " );

				if ( cur ) {
					j = 0;
					while ( ( clazz = classes[ j++ ] ) ) {
						if ( cur.indexOf( " " + clazz + " " ) < 0 ) {
							cur += clazz + " ";
						}
					}

					// Only assign if different to avoid unneeded rendering.
					finalValue = stripAndCollapse( cur );
					if ( curValue !== finalValue ) {
						elem.setAttribute( "class", finalValue );
					}
				}
			}
		}

		return this;
	},

	removeClass: function( value ) {
		var classes, elem, cur, curValue, clazz, j, finalValue,
			i = 0;

		if ( isFunction( value ) ) {
			return this.each( function( j ) {
				jQuery( this ).removeClass( value.call( this, j, getClass( this ) ) );
			} );
		}

		if ( !arguments.length ) {
			return this.attr( "class", "" );
		}

		classes = classesToArray( value );

		if ( classes.length ) {
			while ( ( elem = this[ i++ ] ) ) {
				curValue = getClass( elem );

				// This expression is here for better compressibility (see addClass)
				cur = elem.nodeType === 1 && ( " " + stripAndCollapse( curValue ) + " " );

				if ( cur ) {
					j = 0;
					while ( ( clazz = classes[ j++ ] ) ) {

						// Remove *all* instances
						while ( cur.indexOf( " " + clazz + " " ) > -1 ) {
							cur = cur.replace( " " + clazz + " ", " " );
						}
					}

					// Only assign if different to avoid unneeded rendering.
					finalValue = stripAndCollapse( cur );
					if ( curValue !== finalValue ) {
						elem.setAttribute( "class", finalValue );
					}
				}
			}
		}

		return this;
	},

	toggleClass: function( value, stateVal ) {
		var type = typeof value,
			isValidValue = type === "string" || Array.isArray( value );

		if ( typeof stateVal === "boolean" && isValidValue ) {
			return stateVal ? this.addClass( value ) : this.removeClass( value );
		}

		if ( isFunction( value ) ) {
			return this.each( function( i ) {
				jQuery( this ).toggleClass(
					value.call( this, i, getClass( this ), stateVal ),
					stateVal
				);
			} );
		}

		return this.each( function() {
			var className, i, self, classNames;

			if ( isValidValue ) {

				// Toggle individual class names
				i = 0;
				self = jQuery( this );
				classNames = classesToArray( value );

				while ( ( className = classNames[ i++ ] ) ) {

					// Check each className given, space separated list
					if ( self.hasClass( className ) ) {
						self.removeClass( className );
					} else {
						self.addClass( className );
					}
				}

			// Toggle whole class name
			} else if ( value === undefined || type === "boolean" ) {
				className = getClass( this );
				if ( className ) {

					// Store className if set
					dataPriv.set( this, "__className__", className );
				}

				// If the element has a class name or if we're passed `false`,
				// then remove the whole classname (if there was one, the above saved it).
				// Otherwise bring back whatever was previously saved (if anything),
				// falling back to the empty string if nothing was stored.
				if ( this.setAttribute ) {
					this.setAttribute( "class",
						className || value === false ?
							"" :
							dataPriv.get( this, "__className__" ) || ""
					);
				}
			}
		} );
	},

	hasClass: function( selector ) {
		var className, elem,
			i = 0;

		className = " " + selector + " ";
		while ( ( elem = this[ i++ ] ) ) {
			if ( elem.nodeType === 1 &&
				( " " + stripAndCollapse( getClass( elem ) ) + " " ).indexOf( className ) > -1 ) {
				return true;
			}
		}

		return false;
	}
} );




var rreturn = /\r/g;

jQuery.fn.extend( {
	val: function( value ) {
		var hooks, ret, valueIsFunction,
			elem = this[ 0 ];

		if ( !arguments.length ) {
			if ( elem ) {
				hooks = jQuery.valHooks[ elem.type ] ||
					jQuery.valHooks[ elem.nodeName.toLowerCase() ];

				if ( hooks &&
					"get" in hooks &&
					( ret = hooks.get( elem, "value" ) ) !== undefined
				) {
					return ret;
				}

				ret = elem.value;

				// Handle most common string cases
				if ( typeof ret === "string" ) {
					return ret.replace( rreturn, "" );
				}

				// Handle cases where value is null/undef or number
				return ret == null ? "" : ret;
			}

			return;
		}

		valueIsFunction = isFunction( value );

		return this.each( function( i ) {
			var val;

			if ( this.nodeType !== 1 ) {
				return;
			}

			if ( valueIsFunction ) {
				val = value.call( this, i, jQuery( this ).val() );
			} else {
				val = value;
			}

			// Treat null/undefined as ""; convert numbers to string
			if ( val == null ) {
				val = "";

			} else if ( typeof val === "number" ) {
				val += "";

			} else if ( Array.isArray( val ) ) {
				val = jQuery.map( val, function( value ) {
					return value == null ? "" : value + "";
				} );
			}

			hooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

			// If set returns undefined, fall back to normal setting
			if ( !hooks || !( "set" in hooks ) || hooks.set( this, val, "value" ) === undefined ) {
				this.value = val;
			}
		} );
	}
} );

jQuery.extend( {
	valHooks: {
		option: {
			get: function( elem ) {

				var val = jQuery.find.attr( elem, "value" );
				return val != null ?
					val :

					// Support: IE <=10 - 11 only
					// option.text throws exceptions (#14686, #14858)
					// Strip and collapse whitespace
					// https://html.spec.whatwg.org/#strip-and-collapse-whitespace
					stripAndCollapse( jQuery.text( elem ) );
			}
		},
		select: {
			get: function( elem ) {
				var value, option, i,
					options = elem.options,
					index = elem.selectedIndex,
					one = elem.type === "select-one",
					values = one ? null : [],
					max = one ? index + 1 : options.length;

				if ( index < 0 ) {
					i = max;

				} else {
					i = one ? index : 0;
				}

				// Loop through all the selected options
				for ( ; i < max; i++ ) {
					option = options[ i ];

					// Support: IE <=9 only
					// IE8-9 doesn't update selected after form reset (#2551)
					if ( ( option.selected || i === index ) &&

							// Don't return options that are disabled or in a disabled optgroup
							!option.disabled &&
							( !option.parentNode.disabled ||
								!nodeName( option.parentNode, "optgroup" ) ) ) {

						// Get the specific value for the option
						value = jQuery( option ).val();

						// We don't need an array for one selects
						if ( one ) {
							return value;
						}

						// Multi-Selects return an array
						values.push( value );
					}
				}

				return values;
			},

			set: function( elem, value ) {
				var optionSet, option,
					options = elem.options,
					values = jQuery.makeArray( value ),
					i = options.length;

				while ( i-- ) {
					option = options[ i ];

					/* eslint-disable no-cond-assign */

					if ( option.selected =
						jQuery.inArray( jQuery.valHooks.option.get( option ), values ) > -1
					) {
						optionSet = true;
					}

					/* eslint-enable no-cond-assign */
				}

				// Force browsers to behave consistently when non-matching value is set
				if ( !optionSet ) {
					elem.selectedIndex = -1;
				}
				return values;
			}
		}
	}
} );

// Radios and checkboxes getter/setter
jQuery.each( [ "radio", "checkbox" ], function() {
	jQuery.valHooks[ this ] = {
		set: function( elem, value ) {
			if ( Array.isArray( value ) ) {
				return ( elem.checked = jQuery.inArray( jQuery( elem ).val(), value ) > -1 );
			}
		}
	};
	if ( !support.checkOn ) {
		jQuery.valHooks[ this ].get = function( elem ) {
			return elem.getAttribute( "value" ) === null ? "on" : elem.value;
		};
	}
} );




// Return jQuery for attributes-only inclusion


support.focusin = "onfocusin" in window;


var rfocusMorph = /^(?:focusinfocus|focusoutblur)$/,
	stopPropagationCallback = function( e ) {
		e.stopPropagation();
	};

jQuery.extend( jQuery.event, {

	trigger: function( event, data, elem, onlyHandlers ) {

		var i, cur, tmp, bubbleType, ontype, handle, special, lastElement,
			eventPath = [ elem || document ],
			type = hasOwn.call( event, "type" ) ? event.type : event,
			namespaces = hasOwn.call( event, "namespace" ) ? event.namespace.split( "." ) : [];

		cur = lastElement = tmp = elem = elem || document;

		// Don't do events on text and comment nodes
		if ( elem.nodeType === 3 || elem.nodeType === 8 ) {
			return;
		}

		// focus/blur morphs to focusin/out; ensure we're not firing them right now
		if ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
			return;
		}

		if ( type.indexOf( "." ) > -1 ) {

			// Namespaced trigger; create a regexp to match event type in handle()
			namespaces = type.split( "." );
			type = namespaces.shift();
			namespaces.sort();
		}
		ontype = type.indexOf( ":" ) < 0 && "on" + type;

		// Caller can pass in a jQuery.Event object, Object, or just an event type string
		event = event[ jQuery.expando ] ?
			event :
			new jQuery.Event( type, typeof event === "object" && event );

		// Trigger bitmask: & 1 for native handlers; & 2 for jQuery (always true)
		event.isTrigger = onlyHandlers ? 2 : 3;
		event.namespace = namespaces.join( "." );
		event.rnamespace = event.namespace ?
			new RegExp( "(^|\\.)" + namespaces.join( "\\.(?:.*\\.|)" ) + "(\\.|$)" ) :
			null;

		// Clean up the event in case it is being reused
		event.result = undefined;
		if ( !event.target ) {
			event.target = elem;
		}

		// Clone any incoming data and prepend the event, creating the handler arg list
		data = data == null ?
			[ event ] :
			jQuery.makeArray( data, [ event ] );

		// Allow special events to draw outside the lines
		special = jQuery.event.special[ type ] || {};
		if ( !onlyHandlers && special.trigger && special.trigger.apply( elem, data ) === false ) {
			return;
		}

		// Determine event propagation path in advance, per W3C events spec (#9951)
		// Bubble up to document, then to window; watch for a global ownerDocument var (#9724)
		if ( !onlyHandlers && !special.noBubble && !isWindow( elem ) ) {

			bubbleType = special.delegateType || type;
			if ( !rfocusMorph.test( bubbleType + type ) ) {
				cur = cur.parentNode;
			}
			for ( ; cur; cur = cur.parentNode ) {
				eventPath.push( cur );
				tmp = cur;
			}

			// Only add window if we got to document (e.g., not plain obj or detached DOM)
			if ( tmp === ( elem.ownerDocument || document ) ) {
				eventPath.push( tmp.defaultView || tmp.parentWindow || window );
			}
		}

		// Fire handlers on the event path
		i = 0;
		while ( ( cur = eventPath[ i++ ] ) && !event.isPropagationStopped() ) {
			lastElement = cur;
			event.type = i > 1 ?
				bubbleType :
				special.bindType || type;

			// jQuery handler
			handle = ( dataPriv.get( cur, "events" ) || Object.create( null ) )[ event.type ] &&
				dataPriv.get( cur, "handle" );
			if ( handle ) {
				handle.apply( cur, data );
			}

			// Native handler
			handle = ontype && cur[ ontype ];
			if ( handle && handle.apply && acceptData( cur ) ) {
				event.result = handle.apply( cur, data );
				if ( event.result === false ) {
					event.preventDefault();
				}
			}
		}
		event.type = type;

		// If nobody prevented the default action, do it now
		if ( !onlyHandlers && !event.isDefaultPrevented() ) {

			if ( ( !special._default ||
				special._default.apply( eventPath.pop(), data ) === false ) &&
				acceptData( elem ) ) {

				// Call a native DOM method on the target with the same name as the event.
				// Don't do default actions on window, that's where global variables be (#6170)
				if ( ontype && isFunction( elem[ type ] ) && !isWindow( elem ) ) {

					// Don't re-trigger an onFOO event when we call its FOO() method
					tmp = elem[ ontype ];

					if ( tmp ) {
						elem[ ontype ] = null;
					}

					// Prevent re-triggering of the same event, since we already bubbled it above
					jQuery.event.triggered = type;

					if ( event.isPropagationStopped() ) {
						lastElement.addEventListener( type, stopPropagationCallback );
					}

					elem[ type ]();

					if ( event.isPropagationStopped() ) {
						lastElement.removeEventListener( type, stopPropagationCallback );
					}

					jQuery.event.triggered = undefined;

					if ( tmp ) {
						elem[ ontype ] = tmp;
					}
				}
			}
		}

		return event.result;
	},

	// Piggyback on a donor event to simulate a different one
	// Used only for `focus(in | out)` events
	simulate: function( type, elem, event ) {
		var e = jQuery.extend(
			new jQuery.Event(),
			event,
			{
				type: type,
				isSimulated: true
			}
		);

		jQuery.event.trigger( e, null, elem );
	}

} );

jQuery.fn.extend( {

	trigger: function( type, data ) {
		return this.each( function() {
			jQuery.event.trigger( type, data, this );
		} );
	},
	triggerHandler: function( type, data ) {
		var elem = this[ 0 ];
		if ( elem ) {
			return jQuery.event.trigger( type, data, elem, true );
		}
	}
} );


// Support: Firefox <=44
// Firefox doesn't have focus(in | out) events
// Related ticket - https://bugzilla.mozilla.org/show_bug.cgi?id=687787
//
// Support: Chrome <=48 - 49, Safari <=9.0 - 9.1
// focus(in | out) events fire after focus & blur events,
// which is spec violation - http://www.w3.org/TR/DOM-Level-3-Events/#events-focusevent-event-order
// Related ticket - https://bugs.chromium.org/p/chromium/issues/detail?id=449857
if ( !support.focusin ) {
	jQuery.each( { focus: "focusin", blur: "focusout" }, function( orig, fix ) {

		// Attach a single capturing handler on the document while someone wants focusin/focusout
		var handler = function( event ) {
			jQuery.event.simulate( fix, event.target, jQuery.event.fix( event ) );
		};

		jQuery.event.special[ fix ] = {
			setup: function() {

				// Handle: regular nodes (via `this.ownerDocument`), window
				// (via `this.document`) & document (via `this`).
				var doc = this.ownerDocument || this.document || this,
					attaches = dataPriv.access( doc, fix );

				if ( !attaches ) {
					doc.addEventListener( orig, handler, true );
				}
				dataPriv.access( doc, fix, ( attaches || 0 ) + 1 );
			},
			teardown: function() {
				var doc = this.ownerDocument || this.document || this,
					attaches = dataPriv.access( doc, fix ) - 1;

				if ( !attaches ) {
					doc.removeEventListener( orig, handler, true );
					dataPriv.remove( doc, fix );

				} else {
					dataPriv.access( doc, fix, attaches );
				}
			}
		};
	} );
}
var location = window.location;

var nonce = { guid: Date.now() };

var rquery = ( /\?/ );



// Cross-browser xml parsing
jQuery.parseXML = function( data ) {
	var xml, parserErrorElem;
	if ( !data || typeof data !== "string" ) {
		return null;
	}

	// Support: IE 9 - 11 only
	// IE throws on parseFromString with invalid input.
	try {
		xml = ( new window.DOMParser() ).parseFromString( data, "text/xml" );
	} catch ( e ) {}

	parserErrorElem = xml && xml.getElementsByTagName( "parsererror" )[ 0 ];
	if ( !xml || parserErrorElem ) {
		jQuery.error( "Invalid XML: " + (
			parserErrorElem ?
				jQuery.map( parserErrorElem.childNodes, function( el ) {
					return el.textContent;
				} ).join( "\n" ) :
				data
		) );
	}
	return xml;
};


var
	rbracket = /\[\]$/,
	rCRLF = /\r?\n/g,
	rsubmitterTypes = /^(?:submit|button|image|reset|file)$/i,
	rsubmittable = /^(?:input|select|textarea|keygen)/i;

function buildParams( prefix, obj, traditional, add ) {
	var name;

	if ( Array.isArray( obj ) ) {

		// Serialize array item.
		jQuery.each( obj, function( i, v ) {
			if ( traditional || rbracket.test( prefix ) ) {

				// Treat each array item as a scalar.
				add( prefix, v );

			} else {

				// Item is non-scalar (array or object), encode its numeric index.
				buildParams(
					prefix + "[" + ( typeof v === "object" && v != null ? i : "" ) + "]",
					v,
					traditional,
					add
				);
			}
		} );

	} else if ( !traditional && toType( obj ) === "object" ) {

		// Serialize object item.
		for ( name in obj ) {
			buildParams( prefix + "[" + name + "]", obj[ name ], traditional, add );
		}

	} else {

		// Serialize scalar item.
		add( prefix, obj );
	}
}

// Serialize an array of form elements or a set of
// key/values into a query string
jQuery.param = function( a, traditional ) {
	var prefix,
		s = [],
		add = function( key, valueOrFunction ) {

			// If value is a function, invoke it and use its return value
			var value = isFunction( valueOrFunction ) ?
				valueOrFunction() :
				valueOrFunction;

			s[ s.length ] = encodeURIComponent( key ) + "=" +
				encodeURIComponent( value == null ? "" : value );
		};

	if ( a == null ) {
		return "";
	}

	// If an array was passed in, assume that it is an array of form elements.
	if ( Array.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {

		// Serialize the form elements
		jQuery.each( a, function() {
			add( this.name, this.value );
		} );

	} else {

		// If traditional, encode the "old" way (the way 1.3.2 or older
		// did it), otherwise encode params recursively.
		for ( prefix in a ) {
			buildParams( prefix, a[ prefix ], traditional, add );
		}
	}

	// Return the resulting serialization
	return s.join( "&" );
};

jQuery.fn.extend( {
	serialize: function() {
		return jQuery.param( this.serializeArray() );
	},
	serializeArray: function() {
		return this.map( function() {

			// Can add propHook for "elements" to filter or add form elements
			var elements = jQuery.prop( this, "elements" );
			return elements ? jQuery.makeArray( elements ) : this;
		} ).filter( function() {
			var type = this.type;

			// Use .is( ":disabled" ) so that fieldset[disabled] works
			return this.name && !jQuery( this ).is( ":disabled" ) &&
				rsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&
				( this.checked || !rcheckableType.test( type ) );
		} ).map( function( _i, elem ) {
			var val = jQuery( this ).val();

			if ( val == null ) {
				return null;
			}

			if ( Array.isArray( val ) ) {
				return jQuery.map( val, function( val ) {
					return { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
				} );
			}

			return { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
		} ).get();
	}
} );


var
	r20 = /%20/g,
	rhash = /#.*$/,
	rantiCache = /([?&])_=[^&]*/,
	rheaders = /^(.*?):[ \t]*([^\r\n]*)$/mg,

	// #7653, #8125, #8152: local protocol detection
	rlocalProtocol = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
	rnoContent = /^(?:GET|HEAD)$/,
	rprotocol = /^\/\//,

	/* Prefilters
	 * 1) They are useful to introduce custom dataTypes (see ajax/jsonp.js for an example)
	 * 2) These are called:
	 *    - BEFORE asking for a transport
	 *    - AFTER param serialization (s.data is a string if s.processData is true)
	 * 3) key is the dataType
	 * 4) the catchall symbol "*" can be used
	 * 5) execution will start with transport dataType and THEN continue down to "*" if needed
	 */
	prefilters = {},

	/* Transports bindings
	 * 1) key is the dataType
	 * 2) the catchall symbol "*" can be used
	 * 3) selection will start with transport dataType and THEN go to "*" if needed
	 */
	transports = {},

	// Avoid comment-prolog char sequence (#10098); must appease lint and evade compression
	allTypes = "*/".concat( "*" ),

	// Anchor tag for parsing the document origin
	originAnchor = document.createElement( "a" );

originAnchor.href = location.href;

// Base "constructor" for jQuery.ajaxPrefilter and jQuery.ajaxTransport
function addToPrefiltersOrTransports( structure ) {

	// dataTypeExpression is optional and defaults to "*"
	return function( dataTypeExpression, func ) {

		if ( typeof dataTypeExpression !== "string" ) {
			func = dataTypeExpression;
			dataTypeExpression = "*";
		}

		var dataType,
			i = 0,
			dataTypes = dataTypeExpression.toLowerCase().match( rnothtmlwhite ) || [];

		if ( isFunction( func ) ) {

			// For each dataType in the dataTypeExpression
			while ( ( dataType = dataTypes[ i++ ] ) ) {

				// Prepend if requested
				if ( dataType[ 0 ] === "+" ) {
					dataType = dataType.slice( 1 ) || "*";
					( structure[ dataType ] = structure[ dataType ] || [] ).unshift( func );

				// Otherwise append
				} else {
					( structure[ dataType ] = structure[ dataType ] || [] ).push( func );
				}
			}
		}
	};
}

// Base inspection function for prefilters and transports
function inspectPrefiltersOrTransports( structure, options, originalOptions, jqXHR ) {

	var inspected = {},
		seekingTransport = ( structure === transports );

	function inspect( dataType ) {
		var selected;
		inspected[ dataType ] = true;
		jQuery.each( structure[ dataType ] || [], function( _, prefilterOrFactory ) {
			var dataTypeOrTransport = prefilterOrFactory( options, originalOptions, jqXHR );
			if ( typeof dataTypeOrTransport === "string" &&
				!seekingTransport && !inspected[ dataTypeOrTransport ] ) {

				options.dataTypes.unshift( dataTypeOrTransport );
				inspect( dataTypeOrTransport );
				return false;
			} else if ( seekingTransport ) {
				return !( selected = dataTypeOrTransport );
			}
		} );
		return selected;
	}

	return inspect( options.dataTypes[ 0 ] ) || !inspected[ "*" ] && inspect( "*" );
}

// A special extend for ajax options
// that takes "flat" options (not to be deep extended)
// Fixes #9887
function ajaxExtend( target, src ) {
	var key, deep,
		flatOptions = jQuery.ajaxSettings.flatOptions || {};

	for ( key in src ) {
		if ( src[ key ] !== undefined ) {
			( flatOptions[ key ] ? target : ( deep || ( deep = {} ) ) )[ key ] = src[ key ];
		}
	}
	if ( deep ) {
		jQuery.extend( true, target, deep );
	}

	return target;
}

/* Handles responses to an ajax request:
 * - finds the right dataType (mediates between content-type and expected dataType)
 * - returns the corresponding response
 */
function ajaxHandleResponses( s, jqXHR, responses ) {

	var ct, type, finalDataType, firstDataType,
		contents = s.contents,
		dataTypes = s.dataTypes;

	// Remove auto dataType and get content-type in the process
	while ( dataTypes[ 0 ] === "*" ) {
		dataTypes.shift();
		if ( ct === undefined ) {
			ct = s.mimeType || jqXHR.getResponseHeader( "Content-Type" );
		}
	}

	// Check if we're dealing with a known content-type
	if ( ct ) {
		for ( type in contents ) {
			if ( contents[ type ] && contents[ type ].test( ct ) ) {
				dataTypes.unshift( type );
				break;
			}
		}
	}

	// Check to see if we have a response for the expected dataType
	if ( dataTypes[ 0 ] in responses ) {
		finalDataType = dataTypes[ 0 ];
	} else {

		// Try convertible dataTypes
		for ( type in responses ) {
			if ( !dataTypes[ 0 ] || s.converters[ type + " " + dataTypes[ 0 ] ] ) {
				finalDataType = type;
				break;
			}
			if ( !firstDataType ) {
				firstDataType = type;
			}
		}

		// Or just use first one
		finalDataType = finalDataType || firstDataType;
	}

	// If we found a dataType
	// We add the dataType to the list if needed
	// and return the corresponding response
	if ( finalDataType ) {
		if ( finalDataType !== dataTypes[ 0 ] ) {
			dataTypes.unshift( finalDataType );
		}
		return responses[ finalDataType ];
	}
}

/* Chain conversions given the request and the original response
 * Also sets the responseXXX fields on the jqXHR instance
 */
function ajaxConvert( s, response, jqXHR, isSuccess ) {
	var conv2, current, conv, tmp, prev,
		converters = {},

		// Work with a copy of dataTypes in case we need to modify it for conversion
		dataTypes = s.dataTypes.slice();

	// Create converters map with lowercased keys
	if ( dataTypes[ 1 ] ) {
		for ( conv in s.converters ) {
			converters[ conv.toLowerCase() ] = s.converters[ conv ];
		}
	}

	current = dataTypes.shift();

	// Convert to each sequential dataType
	while ( current ) {

		if ( s.responseFields[ current ] ) {
			jqXHR[ s.responseFields[ current ] ] = response;
		}

		// Apply the dataFilter if provided
		if ( !prev && isSuccess && s.dataFilter ) {
			response = s.dataFilter( response, s.dataType );
		}

		prev = current;
		current = dataTypes.shift();

		if ( current ) {

			// There's only work to do if current dataType is non-auto
			if ( current === "*" ) {

				current = prev;

			// Convert response if prev dataType is non-auto and differs from current
			} else if ( prev !== "*" && prev !== current ) {

				// Seek a direct converter
				conv = converters[ prev + " " + current ] || converters[ "* " + current ];

				// If none found, seek a pair
				if ( !conv ) {
					for ( conv2 in converters ) {

						// If conv2 outputs current
						tmp = conv2.split( " " );
						if ( tmp[ 1 ] === current ) {

							// If prev can be converted to accepted input
							conv = converters[ prev + " " + tmp[ 0 ] ] ||
								converters[ "* " + tmp[ 0 ] ];
							if ( conv ) {

								// Condense equivalence converters
								if ( conv === true ) {
									conv = converters[ conv2 ];

								// Otherwise, insert the intermediate dataType
								} else if ( converters[ conv2 ] !== true ) {
									current = tmp[ 0 ];
									dataTypes.unshift( tmp[ 1 ] );
								}
								break;
							}
						}
					}
				}

				// Apply converter (if not an equivalence)
				if ( conv !== true ) {

					// Unless errors are allowed to bubble, catch and return them
					if ( conv && s.throws ) {
						response = conv( response );
					} else {
						try {
							response = conv( response );
						} catch ( e ) {
							return {
								state: "parsererror",
								error: conv ? e : "No conversion from " + prev + " to " + current
							};
						}
					}
				}
			}
		}
	}

	return { state: "success", data: response };
}

jQuery.extend( {

	// Counter for holding the number of active queries
	active: 0,

	// Last-Modified header cache for next request
	lastModified: {},
	etag: {},

	ajaxSettings: {
		url: location.href,
		type: "GET",
		isLocal: rlocalProtocol.test( location.protocol ),
		global: true,
		processData: true,
		async: true,
		contentType: "application/x-www-form-urlencoded; charset=UTF-8",

		/*
		timeout: 0,
		data: null,
		dataType: null,
		username: null,
		password: null,
		cache: null,
		throws: false,
		traditional: false,
		headers: {},
		*/

		accepts: {
			"*": allTypes,
			text: "text/plain",
			html: "text/html",
			xml: "application/xml, text/xml",
			json: "application/json, text/javascript"
		},

		contents: {
			xml: /\bxml\b/,
			html: /\bhtml/,
			json: /\bjson\b/
		},

		responseFields: {
			xml: "responseXML",
			text: "responseText",
			json: "responseJSON"
		},

		// Data converters
		// Keys separate source (or catchall "*") and destination types with a single space
		converters: {

			// Convert anything to text
			"* text": String,

			// Text to html (true = no transformation)
			"text html": true,

			// Evaluate text as a json expression
			"text json": JSON.parse,

			// Parse text as xml
			"text xml": jQuery.parseXML
		},

		// For options that shouldn't be deep extended:
		// you can add your own custom options here if
		// and when you create one that shouldn't be
		// deep extended (see ajaxExtend)
		flatOptions: {
			url: true,
			context: true
		}
	},

	// Creates a full fledged settings object into target
	// with both ajaxSettings and settings fields.
	// If target is omitted, writes into ajaxSettings.
	ajaxSetup: function( target, settings ) {
		return settings ?

			// Building a settings object
			ajaxExtend( ajaxExtend( target, jQuery.ajaxSettings ), settings ) :

			// Extending ajaxSettings
			ajaxExtend( jQuery.ajaxSettings, target );
	},

	ajaxPrefilter: addToPrefiltersOrTransports( prefilters ),
	ajaxTransport: addToPrefiltersOrTransports( transports ),

	// Main method
	ajax: function( url, options ) {

		// If url is an object, simulate pre-1.5 signature
		if ( typeof url === "object" ) {
			options = url;
			url = undefined;
		}

		// Force options to be an object
		options = options || {};

		var transport,

			// URL without anti-cache param
			cacheURL,

			// Response headers
			responseHeadersString,
			responseHeaders,

			// timeout handle
			timeoutTimer,

			// Url cleanup var
			urlAnchor,

			// Request state (becomes false upon send and true upon completion)
			completed,

			// To know if global events are to be dispatched
			fireGlobals,

			// Loop variable
			i,

			// uncached part of the url
			uncached,

			// Create the final options object
			s = jQuery.ajaxSetup( {}, options ),

			// Callbacks context
			callbackContext = s.context || s,

			// Context for global events is callbackContext if it is a DOM node or jQuery collection
			globalEventContext = s.context &&
				( callbackContext.nodeType || callbackContext.jquery ) ?
				jQuery( callbackContext ) :
				jQuery.event,

			// Deferreds
			deferred = jQuery.Deferred(),
			completeDeferred = jQuery.Callbacks( "once memory" ),

			// Status-dependent callbacks
			statusCode = s.statusCode || {},

			// Headers (they are sent all at once)
			requestHeaders = {},
			requestHeadersNames = {},

			// Default abort message
			strAbort = "canceled",

			// Fake xhr
			jqXHR = {
				readyState: 0,

				// Builds headers hashtable if needed
				getResponseHeader: function( key ) {
					var match;
					if ( completed ) {
						if ( !responseHeaders ) {
							responseHeaders = {};
							while ( ( match = rheaders.exec( responseHeadersString ) ) ) {
								responseHeaders[ match[ 1 ].toLowerCase() + " " ] =
									( responseHeaders[ match[ 1 ].toLowerCase() + " " ] || [] )
										.concat( match[ 2 ] );
							}
						}
						match = responseHeaders[ key.toLowerCase() + " " ];
					}
					return match == null ? null : match.join( ", " );
				},

				// Raw string
				getAllResponseHeaders: function() {
					return completed ? responseHeadersString : null;
				},

				// Caches the header
				setRequestHeader: function( name, value ) {
					if ( completed == null ) {
						name = requestHeadersNames[ name.toLowerCase() ] =
							requestHeadersNames[ name.toLowerCase() ] || name;
						requestHeaders[ name ] = value;
					}
					return this;
				},

				// Overrides response content-type header
				overrideMimeType: function( type ) {
					if ( completed == null ) {
						s.mimeType = type;
					}
					return this;
				},

				// Status-dependent callbacks
				statusCode: function( map ) {
					var code;
					if ( map ) {
						if ( completed ) {

							// Execute the appropriate callbacks
							jqXHR.always( map[ jqXHR.status ] );
						} else {

							// Lazy-add the new callbacks in a way that preserves old ones
							for ( code in map ) {
								statusCode[ code ] = [ statusCode[ code ], map[ code ] ];
							}
						}
					}
					return this;
				},

				// Cancel the request
				abort: function( statusText ) {
					var finalText = statusText || strAbort;
					if ( transport ) {
						transport.abort( finalText );
					}
					done( 0, finalText );
					return this;
				}
			};

		// Attach deferreds
		deferred.promise( jqXHR );

		// Add protocol if not provided (prefilters might expect it)
		// Handle falsy url in the settings object (#10093: consistency with old signature)
		// We also use the url parameter if available
		s.url = ( ( url || s.url || location.href ) + "" )
			.replace( rprotocol, location.protocol + "//" );

		// Alias method option to type as per ticket #12004
		s.type = options.method || options.type || s.method || s.type;

		// Extract dataTypes list
		s.dataTypes = ( s.dataType || "*" ).toLowerCase().match( rnothtmlwhite ) || [ "" ];

		// A cross-domain request is in order when the origin doesn't match the current origin.
		if ( s.crossDomain == null ) {
			urlAnchor = document.createElement( "a" );

			// Support: IE <=8 - 11, Edge 12 - 15
			// IE throws exception on accessing the href property if url is malformed,
			// e.g. http://example.com:80x/
			try {
				urlAnchor.href = s.url;

				// Support: IE <=8 - 11 only
				// Anchor's host property isn't correctly set when s.url is relative
				urlAnchor.href = urlAnchor.href;
				s.crossDomain = originAnchor.protocol + "//" + originAnchor.host !==
					urlAnchor.protocol + "//" + urlAnchor.host;
			} catch ( e ) {

				// If there is an error parsing the URL, assume it is crossDomain,
				// it can be rejected by the transport if it is invalid
				s.crossDomain = true;
			}
		}

		// Convert data if not already a string
		if ( s.data && s.processData && typeof s.data !== "string" ) {
			s.data = jQuery.param( s.data, s.traditional );
		}

		// Apply prefilters
		inspectPrefiltersOrTransports( prefilters, s, options, jqXHR );

		// If request was aborted inside a prefilter, stop there
		if ( completed ) {
			return jqXHR;
		}

		// We can fire global events as of now if asked to
		// Don't fire events if jQuery.event is undefined in an AMD-usage scenario (#15118)
		fireGlobals = jQuery.event && s.global;

		// Watch for a new set of requests
		if ( fireGlobals && jQuery.active++ === 0 ) {
			jQuery.event.trigger( "ajaxStart" );
		}

		// Uppercase the type
		s.type = s.type.toUpperCase();

		// Determine if request has content
		s.hasContent = !rnoContent.test( s.type );

		// Save the URL in case we're toying with the If-Modified-Since
		// and/or If-None-Match header later on
		// Remove hash to simplify url manipulation
		cacheURL = s.url.replace( rhash, "" );

		// More options handling for requests with no content
		if ( !s.hasContent ) {

			// Remember the hash so we can put it back
			uncached = s.url.slice( cacheURL.length );

			// If data is available and should be processed, append data to url
			if ( s.data && ( s.processData || typeof s.data === "string" ) ) {
				cacheURL += ( rquery.test( cacheURL ) ? "&" : "?" ) + s.data;

				// #9682: remove data so that it's not used in an eventual retry
				delete s.data;
			}

			// Add or update anti-cache param if needed
			if ( s.cache === false ) {
				cacheURL = cacheURL.replace( rantiCache, "$1" );
				uncached = ( rquery.test( cacheURL ) ? "&" : "?" ) + "_=" + ( nonce.guid++ ) +
					uncached;
			}

			// Put hash and anti-cache on the URL that will be requested (gh-1732)
			s.url = cacheURL + uncached;

		// Change '%20' to '+' if this is encoded form body content (gh-2658)
		} else if ( s.data && s.processData &&
			( s.contentType || "" ).indexOf( "application/x-www-form-urlencoded" ) === 0 ) {
			s.data = s.data.replace( r20, "+" );
		}

		// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
		if ( s.ifModified ) {
			if ( jQuery.lastModified[ cacheURL ] ) {
				jqXHR.setRequestHeader( "If-Modified-Since", jQuery.lastModified[ cacheURL ] );
			}
			if ( jQuery.etag[ cacheURL ] ) {
				jqXHR.setRequestHeader( "If-None-Match", jQuery.etag[ cacheURL ] );
			}
		}

		// Set the correct header, if data is being sent
		if ( s.data && s.hasContent && s.contentType !== false || options.contentType ) {
			jqXHR.setRequestHeader( "Content-Type", s.contentType );
		}

		// Set the Accepts header for the server, depending on the dataType
		jqXHR.setRequestHeader(
			"Accept",
			s.dataTypes[ 0 ] && s.accepts[ s.dataTypes[ 0 ] ] ?
				s.accepts[ s.dataTypes[ 0 ] ] +
					( s.dataTypes[ 0 ] !== "*" ? ", " + allTypes + "; q=0.01" : "" ) :
				s.accepts[ "*" ]
		);

		// Check for headers option
		for ( i in s.headers ) {
			jqXHR.setRequestHeader( i, s.headers[ i ] );
		}

		// Allow custom headers/mimetypes and early abort
		if ( s.beforeSend &&
			( s.beforeSend.call( callbackContext, jqXHR, s ) === false || completed ) ) {

			// Abort if not done already and return
			return jqXHR.abort();
		}

		// Aborting is no longer a cancellation
		strAbort = "abort";

		// Install callbacks on deferreds
		completeDeferred.add( s.complete );
		jqXHR.done( s.success );
		jqXHR.fail( s.error );

		// Get transport
		transport = inspectPrefiltersOrTransports( transports, s, options, jqXHR );

		// If no transport, we auto-abort
		if ( !transport ) {
			done( -1, "No Transport" );
		} else {
			jqXHR.readyState = 1;

			// Send global event
			if ( fireGlobals ) {
				globalEventContext.trigger( "ajaxSend", [ jqXHR, s ] );
			}

			// If request was aborted inside ajaxSend, stop there
			if ( completed ) {
				return jqXHR;
			}

			// Timeout
			if ( s.async && s.timeout > 0 ) {
				timeoutTimer = window.setTimeout( function() {
					jqXHR.abort( "timeout" );
				}, s.timeout );
			}

			try {
				completed = false;
				transport.send( requestHeaders, done );
			} catch ( e ) {

				// Rethrow post-completion exceptions
				if ( completed ) {
					throw e;
				}

				// Propagate others as results
				done( -1, e );
			}
		}

		// Callback for when everything is done
		function done( status, nativeStatusText, responses, headers ) {
			var isSuccess, success, error, response, modified,
				statusText = nativeStatusText;

			// Ignore repeat invocations
			if ( completed ) {
				return;
			}

			completed = true;

			// Clear timeout if it exists
			if ( timeoutTimer ) {
				window.clearTimeout( timeoutTimer );
			}

			// Dereference transport for early garbage collection
			// (no matter how long the jqXHR object will be used)
			transport = undefined;

			// Cache response headers
			responseHeadersString = headers || "";

			// Set readyState
			jqXHR.readyState = status > 0 ? 4 : 0;

			// Determine if successful
			isSuccess = status >= 200 && status < 300 || status === 304;

			// Get response data
			if ( responses ) {
				response = ajaxHandleResponses( s, jqXHR, responses );
			}

			// Use a noop converter for missing script but not if jsonp
			if ( !isSuccess &&
				jQuery.inArray( "script", s.dataTypes ) > -1 &&
				jQuery.inArray( "json", s.dataTypes ) < 0 ) {
				s.converters[ "text script" ] = function() {};
			}

			// Convert no matter what (that way responseXXX fields are always set)
			response = ajaxConvert( s, response, jqXHR, isSuccess );

			// If successful, handle type chaining
			if ( isSuccess ) {

				// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
				if ( s.ifModified ) {
					modified = jqXHR.getResponseHeader( "Last-Modified" );
					if ( modified ) {
						jQuery.lastModified[ cacheURL ] = modified;
					}
					modified = jqXHR.getResponseHeader( "etag" );
					if ( modified ) {
						jQuery.etag[ cacheURL ] = modified;
					}
				}

				// if no content
				if ( status === 204 || s.type === "HEAD" ) {
					statusText = "nocontent";

				// if not modified
				} else if ( status === 304 ) {
					statusText = "notmodified";

				// If we have data, let's convert it
				} else {
					statusText = response.state;
					success = response.data;
					error = response.error;
					isSuccess = !error;
				}
			} else {

				// Extract error from statusText and normalize for non-aborts
				error = statusText;
				if ( status || !statusText ) {
					statusText = "error";
					if ( status < 0 ) {
						status = 0;
					}
				}
			}

			// Set data for the fake xhr object
			jqXHR.status = status;
			jqXHR.statusText = ( nativeStatusText || statusText ) + "";

			// Success/Error
			if ( isSuccess ) {
				deferred.resolveWith( callbackContext, [ success, statusText, jqXHR ] );
			} else {
				deferred.rejectWith( callbackContext, [ jqXHR, statusText, error ] );
			}

			// Status-dependent callbacks
			jqXHR.statusCode( statusCode );
			statusCode = undefined;

			if ( fireGlobals ) {
				globalEventContext.trigger( isSuccess ? "ajaxSuccess" : "ajaxError",
					[ jqXHR, s, isSuccess ? success : error ] );
			}

			// Complete
			completeDeferred.fireWith( callbackContext, [ jqXHR, statusText ] );

			if ( fireGlobals ) {
				globalEventContext.trigger( "ajaxComplete", [ jqXHR, s ] );

				// Handle the global AJAX counter
				if ( !( --jQuery.active ) ) {
					jQuery.event.trigger( "ajaxStop" );
				}
			}
		}

		return jqXHR;
	},

	getJSON: function( url, data, callback ) {
		return jQuery.get( url, data, callback, "json" );
	},

	getScript: function( url, callback ) {
		return jQuery.get( url, undefined, callback, "script" );
	}
} );

jQuery.each( [ "get", "post" ], function( _i, method ) {
	jQuery[ method ] = function( url, data, callback, type ) {

		// Shift arguments if data argument was omitted
		if ( isFunction( data ) ) {
			type = type || callback;
			callback = data;
			data = undefined;
		}

		// The url can be an options object (which then must have .url)
		return jQuery.ajax( jQuery.extend( {
			url: url,
			type: method,
			dataType: type,
			data: data,
			success: callback
		}, jQuery.isPlainObject( url ) && url ) );
	};
} );

jQuery.ajaxPrefilter( function( s ) {
	var i;
	for ( i in s.headers ) {
		if ( i.toLowerCase() === "content-type" ) {
			s.contentType = s.headers[ i ] || "";
		}
	}
} );


jQuery._evalUrl = function( url, options, doc ) {
	return jQuery.ajax( {
		url: url,

		// Make this explicit, since user can override this through ajaxSetup (#11264)
		type: "GET",
		dataType: "script",
		cache: true,
		async: false,
		global: false,

		// Only evaluate the response if it is successful (gh-4126)
		// dataFilter is not invoked for failure responses, so using it instead
		// of the default converter is kludgy but it works.
		converters: {
			"text script": function() {}
		},
		dataFilter: function( response ) {
			jQuery.globalEval( response, options, doc );
		}
	} );
};


jQuery.fn.extend( {
	wrapAll: function( html ) {
		var wrap;

		if ( this[ 0 ] ) {
			if ( isFunction( html ) ) {
				html = html.call( this[ 0 ] );
			}

			// The elements to wrap the target around
			wrap = jQuery( html, this[ 0 ].ownerDocument ).eq( 0 ).clone( true );

			if ( this[ 0 ].parentNode ) {
				wrap.insertBefore( this[ 0 ] );
			}

			wrap.map( function() {
				var elem = this;

				while ( elem.firstElementChild ) {
					elem = elem.firstElementChild;
				}

				return elem;
			} ).append( this );
		}

		return this;
	},

	wrapInner: function( html ) {
		if ( isFunction( html ) ) {
			return this.each( function( i ) {
				jQuery( this ).wrapInner( html.call( this, i ) );
			} );
		}

		return this.each( function() {
			var self = jQuery( this ),
				contents = self.contents();

			if ( contents.length ) {
				contents.wrapAll( html );

			} else {
				self.append( html );
			}
		} );
	},

	wrap: function( html ) {
		var htmlIsFunction = isFunction( html );

		return this.each( function( i ) {
			jQuery( this ).wrapAll( htmlIsFunction ? html.call( this, i ) : html );
		} );
	},

	unwrap: function( selector ) {
		this.parent( selector ).not( "body" ).each( function() {
			jQuery( this ).replaceWith( this.childNodes );
		} );
		return this;
	}
} );


jQuery.expr.pseudos.hidden = function( elem ) {
	return !jQuery.expr.pseudos.visible( elem );
};
jQuery.expr.pseudos.visible = function( elem ) {
	return !!( elem.offsetWidth || elem.offsetHeight || elem.getClientRects().length );
};




jQuery.ajaxSettings.xhr = function() {
	try {
		return new window.XMLHttpRequest();
	} catch ( e ) {}
};

var xhrSuccessStatus = {

		// File protocol always yields status code 0, assume 200
		0: 200,

		// Support: IE <=9 only
		// #1450: sometimes IE returns 1223 when it should be 204
		1223: 204
	},
	xhrSupported = jQuery.ajaxSettings.xhr();

support.cors = !!xhrSupported && ( "withCredentials" in xhrSupported );
support.ajax = xhrSupported = !!xhrSupported;

jQuery.ajaxTransport( function( options ) {
	var callback, errorCallback;

	// Cross domain only allowed if supported through XMLHttpRequest
	if ( support.cors || xhrSupported && !options.crossDomain ) {
		return {
			send: function( headers, complete ) {
				var i,
					xhr = options.xhr();

				xhr.open(
					options.type,
					options.url,
					options.async,
					options.username,
					options.password
				);

				// Apply custom fields if provided
				if ( options.xhrFields ) {
					for ( i in options.xhrFields ) {
						xhr[ i ] = options.xhrFields[ i ];
					}
				}

				// Override mime type if needed
				if ( options.mimeType && xhr.overrideMimeType ) {
					xhr.overrideMimeType( options.mimeType );
				}

				// X-Requested-With header
				// For cross-domain requests, seeing as conditions for a preflight are
				// akin to a jigsaw puzzle, we simply never set it to be sure.
				// (it can always be set on a per-request basis or even using ajaxSetup)
				// For same-domain requests, won't change header if already provided.
				if ( !options.crossDomain && !headers[ "X-Requested-With" ] ) {
					headers[ "X-Requested-With" ] = "XMLHttpRequest";
				}

				// Set headers
				for ( i in headers ) {
					xhr.setRequestHeader( i, headers[ i ] );
				}

				// Callback
				callback = function( type ) {
					return function() {
						if ( callback ) {
							callback = errorCallback = xhr.onload =
								xhr.onerror = xhr.onabort = xhr.ontimeout =
									xhr.onreadystatechange = null;

							if ( type === "abort" ) {
								xhr.abort();
							} else if ( type === "error" ) {

								// Support: IE <=9 only
								// On a manual native abort, IE9 throws
								// errors on any property access that is not readyState
								if ( typeof xhr.status !== "number" ) {
									complete( 0, "error" );
								} else {
									complete(

										// File: protocol always yields status 0; see #8605, #14207
										xhr.status,
										xhr.statusText
									);
								}
							} else {
								complete(
									xhrSuccessStatus[ xhr.status ] || xhr.status,
									xhr.statusText,

									// Support: IE <=9 only
									// IE9 has no XHR2 but throws on binary (trac-11426)
									// For XHR2 non-text, let the caller handle it (gh-2498)
									( xhr.responseType || "text" ) !== "text"  ||
									typeof xhr.responseText !== "string" ?
										{ binary: xhr.response } :
										{ text: xhr.responseText },
									xhr.getAllResponseHeaders()
								);
							}
						}
					};
				};

				// Listen to events
				xhr.onload = callback();
				errorCallback = xhr.onerror = xhr.ontimeout = callback( "error" );

				// Support: IE 9 only
				// Use onreadystatechange to replace onabort
				// to handle uncaught aborts
				if ( xhr.onabort !== undefined ) {
					xhr.onabort = errorCallback;
				} else {
					xhr.onreadystatechange = function() {

						// Check readyState before timeout as it changes
						if ( xhr.readyState === 4 ) {

							// Allow onerror to be called first,
							// but that will not handle a native abort
							// Also, save errorCallback to a variable
							// as xhr.onerror cannot be accessed
							window.setTimeout( function() {
								if ( callback ) {
									errorCallback();
								}
							} );
						}
					};
				}

				// Create the abort callback
				callback = callback( "abort" );

				try {

					// Do send the request (this may raise an exception)
					xhr.send( options.hasContent && options.data || null );
				} catch ( e ) {

					// #14683: Only rethrow if this hasn't been notified as an error yet
					if ( callback ) {
						throw e;
					}
				}
			},

			abort: function() {
				if ( callback ) {
					callback();
				}
			}
		};
	}
} );




// Prevent auto-execution of scripts when no explicit dataType was provided (See gh-2432)
jQuery.ajaxPrefilter( function( s ) {
	if ( s.crossDomain ) {
		s.contents.script = false;
	}
} );

// Install script dataType
jQuery.ajaxSetup( {
	accepts: {
		script: "text/javascript, application/javascript, " +
			"application/ecmascript, application/x-ecmascript"
	},
	contents: {
		script: /\b(?:java|ecma)script\b/
	},
	converters: {
		"text script": function( text ) {
			jQuery.globalEval( text );
			return text;
		}
	}
} );

// Handle cache's special case and crossDomain
jQuery.ajaxPrefilter( "script", function( s ) {
	if ( s.cache === undefined ) {
		s.cache = false;
	}
	if ( s.crossDomain ) {
		s.type = "GET";
	}
} );

// Bind script tag hack transport
jQuery.ajaxTransport( "script", function( s ) {

	// This transport only deals with cross domain or forced-by-attrs requests
	if ( s.crossDomain || s.scriptAttrs ) {
		var script, callback;
		return {
			send: function( _, complete ) {
				script = jQuery( "<script>" )
					.attr( s.scriptAttrs || {} )
					.prop( { charset: s.scriptCharset, src: s.url } )
					.on( "load error", callback = function( evt ) {
						script.remove();
						callback = null;
						if ( evt ) {
							complete( evt.type === "error" ? 404 : 200, evt.type );
						}
					} );

				// Use native DOM manipulation to avoid our domManip AJAX trickery
				document.head.appendChild( script[ 0 ] );
			},
			abort: function() {
				if ( callback ) {
					callback();
				}
			}
		};
	}
} );




var oldCallbacks = [],
	rjsonp = /(=)\?(?=&|$)|\?\?/;

// Default jsonp settings
jQuery.ajaxSetup( {
	jsonp: "callback",
	jsonpCallback: function() {
		var callback = oldCallbacks.pop() || ( jQuery.expando + "_" + ( nonce.guid++ ) );
		this[ callback ] = true;
		return callback;
	}
} );

// Detect, normalize options and install callbacks for jsonp requests
jQuery.ajaxPrefilter( "json jsonp", function( s, originalSettings, jqXHR ) {

	var callbackName, overwritten, responseContainer,
		jsonProp = s.jsonp !== false && ( rjsonp.test( s.url ) ?
			"url" :
			typeof s.data === "string" &&
				( s.contentType || "" )
					.indexOf( "application/x-www-form-urlencoded" ) === 0 &&
				rjsonp.test( s.data ) && "data"
		);

	// Handle iff the expected data type is "jsonp" or we have a parameter to set
	if ( jsonProp || s.dataTypes[ 0 ] === "jsonp" ) {

		// Get callback name, remembering preexisting value associated with it
		callbackName = s.jsonpCallback = isFunction( s.jsonpCallback ) ?
			s.jsonpCallback() :
			s.jsonpCallback;

		// Insert callback into url or form data
		if ( jsonProp ) {
			s[ jsonProp ] = s[ jsonProp ].replace( rjsonp, "$1" + callbackName );
		} else if ( s.jsonp !== false ) {
			s.url += ( rquery.test( s.url ) ? "&" : "?" ) + s.jsonp + "=" + callbackName;
		}

		// Use data converter to retrieve json after script execution
		s.converters[ "script json" ] = function() {
			if ( !responseContainer ) {
				jQuery.error( callbackName + " was not called" );
			}
			return responseContainer[ 0 ];
		};

		// Force json dataType
		s.dataTypes[ 0 ] = "json";

		// Install callback
		overwritten = window[ callbackName ];
		window[ callbackName ] = function() {
			responseContainer = arguments;
		};

		// Clean-up function (fires after converters)
		jqXHR.always( function() {

			// If previous value didn't exist - remove it
			if ( overwritten === undefined ) {
				jQuery( window ).removeProp( callbackName );

			// Otherwise restore preexisting value
			} else {
				window[ callbackName ] = overwritten;
			}

			// Save back as free
			if ( s[ callbackName ] ) {

				// Make sure that re-using the options doesn't screw things around
				s.jsonpCallback = originalSettings.jsonpCallback;

				// Save the callback name for future use
				oldCallbacks.push( callbackName );
			}

			// Call if it was a function and we have a response
			if ( responseContainer && isFunction( overwritten ) ) {
				overwritten( responseContainer[ 0 ] );
			}

			responseContainer = overwritten = undefined;
		} );

		// Delegate to script
		return "script";
	}
} );




// Support: Safari 8 only
// In Safari 8 documents created via document.implementation.createHTMLDocument
// collapse sibling forms: the second one becomes a child of the first one.
// Because of that, this security measure has to be disabled in Safari 8.
// https://bugs.webkit.org/show_bug.cgi?id=137337
support.createHTMLDocument = ( function() {
	var body = document.implementation.createHTMLDocument( "" ).body;
	body.innerHTML = "<form></form><form></form>";
	return body.childNodes.length === 2;
} )();


// Argument "data" should be string of html
// context (optional): If specified, the fragment will be created in this context,
// defaults to document
// keepScripts (optional): If true, will include scripts passed in the html string
jQuery.parseHTML = function( data, context, keepScripts ) {
	if ( typeof data !== "string" ) {
		return [];
	}
	if ( typeof context === "boolean" ) {
		keepScripts = context;
		context = false;
	}

	var base, parsed, scripts;

	if ( !context ) {

		// Stop scripts or inline event handlers from being executed immediately
		// by using document.implementation
		if ( support.createHTMLDocument ) {
			context = document.implementation.createHTMLDocument( "" );

			// Set the base href for the created document
			// so any parsed elements with URLs
			// are based on the document's URL (gh-2965)
			base = context.createElement( "base" );
			base.href = document.location.href;
			context.head.appendChild( base );
		} else {
			context = document;
		}
	}

	parsed = rsingleTag.exec( data );
	scripts = !keepScripts && [];

	// Single tag
	if ( parsed ) {
		return [ context.createElement( parsed[ 1 ] ) ];
	}

	parsed = buildFragment( [ data ], context, scripts );

	if ( scripts && scripts.length ) {
		jQuery( scripts ).remove();
	}

	return jQuery.merge( [], parsed.childNodes );
};


/**
 * Load a url into a page
 */
jQuery.fn.load = function( url, params, callback ) {
	var selector, type, response,
		self = this,
		off = url.indexOf( " " );

	if ( off > -1 ) {
		selector = stripAndCollapse( url.slice( off ) );
		url = url.slice( 0, off );
	}

	// If it's a function
	if ( isFunction( params ) ) {

		// We assume that it's the callback
		callback = params;
		params = undefined;

	// Otherwise, build a param string
	} else if ( params && typeof params === "object" ) {
		type = "POST";
	}

	// If we have elements to modify, make the request
	if ( self.length > 0 ) {
		jQuery.ajax( {
			url: url,

			// If "type" variable is undefined, then "GET" method will be used.
			// Make value of this field explicit since
			// user can override it through ajaxSetup method
			type: type || "GET",
			dataType: "html",
			data: params
		} ).done( function( responseText ) {

			// Save response for use in complete callback
			response = arguments;

			self.html( selector ?

				// If a selector was specified, locate the right elements in a dummy div
				// Exclude scripts to avoid IE 'Permission Denied' errors
				jQuery( "<div>" ).append( jQuery.parseHTML( responseText ) ).find( selector ) :

				// Otherwise use the full result
				responseText );

		// If the request succeeds, this function gets "data", "status", "jqXHR"
		// but they are ignored because response was set above.
		// If it fails, this function gets "jqXHR", "status", "error"
		} ).always( callback && function( jqXHR, status ) {
			self.each( function() {
				callback.apply( this, response || [ jqXHR.responseText, status, jqXHR ] );
			} );
		} );
	}

	return this;
};




jQuery.expr.pseudos.animated = function( elem ) {
	return jQuery.grep( jQuery.timers, function( fn ) {
		return elem === fn.elem;
	} ).length;
};




jQuery.offset = {
	setOffset: function( elem, options, i ) {
		var curPosition, curLeft, curCSSTop, curTop, curOffset, curCSSLeft, calculatePosition,
			position = jQuery.css( elem, "position" ),
			curElem = jQuery( elem ),
			props = {};

		// Set position first, in-case top/left are set even on static elem
		if ( position === "static" ) {
			elem.style.position = "relative";
		}

		curOffset = curElem.offset();
		curCSSTop = jQuery.css( elem, "top" );
		curCSSLeft = jQuery.css( elem, "left" );
		calculatePosition = ( position === "absolute" || position === "fixed" ) &&
			( curCSSTop + curCSSLeft ).indexOf( "auto" ) > -1;

		// Need to be able to calculate position if either
		// top or left is auto and position is either absolute or fixed
		if ( calculatePosition ) {
			curPosition = curElem.position();
			curTop = curPosition.top;
			curLeft = curPosition.left;

		} else {
			curTop = parseFloat( curCSSTop ) || 0;
			curLeft = parseFloat( curCSSLeft ) || 0;
		}

		if ( isFunction( options ) ) {

			// Use jQuery.extend here to allow modification of coordinates argument (gh-1848)
			options = options.call( elem, i, jQuery.extend( {}, curOffset ) );
		}

		if ( options.top != null ) {
			props.top = ( options.top - curOffset.top ) + curTop;
		}
		if ( options.left != null ) {
			props.left = ( options.left - curOffset.left ) + curLeft;
		}

		if ( "using" in options ) {
			options.using.call( elem, props );

		} else {
			curElem.css( props );
		}
	}
};

jQuery.fn.extend( {

	// offset() relates an element's border box to the document origin
	offset: function( options ) {

		// Preserve chaining for setter
		if ( arguments.length ) {
			return options === undefined ?
				this :
				this.each( function( i ) {
					jQuery.offset.setOffset( this, options, i );
				} );
		}

		var rect, win,
			elem = this[ 0 ];

		if ( !elem ) {
			return;
		}

		// Return zeros for disconnected and hidden (display: none) elements (gh-2310)
		// Support: IE <=11 only
		// Running getBoundingClientRect on a
		// disconnected node in IE throws an error
		if ( !elem.getClientRects().length ) {
			return { top: 0, left: 0 };
		}

		// Get document-relative position by adding viewport scroll to viewport-relative gBCR
		rect = elem.getBoundingClientRect();
		win = elem.ownerDocument.defaultView;
		return {
			top: rect.top + win.pageYOffset,
			left: rect.left + win.pageXOffset
		};
	},

	// position() relates an element's margin box to its offset parent's padding box
	// This corresponds to the behavior of CSS absolute positioning
	position: function() {
		if ( !this[ 0 ] ) {
			return;
		}

		var offsetParent, offset, doc,
			elem = this[ 0 ],
			parentOffset = { top: 0, left: 0 };

		// position:fixed elements are offset from the viewport, which itself always has zero offset
		if ( jQuery.css( elem, "position" ) === "fixed" ) {

			// Assume position:fixed implies availability of getBoundingClientRect
			offset = elem.getBoundingClientRect();

		} else {
			offset = this.offset();

			// Account for the *real* offset parent, which can be the document or its root element
			// when a statically positioned element is identified
			doc = elem.ownerDocument;
			offsetParent = elem.offsetParent || doc.documentElement;
			while ( offsetParent &&
				( offsetParent === doc.body || offsetParent === doc.documentElement ) &&
				jQuery.css( offsetParent, "position" ) === "static" ) {

				offsetParent = offsetParent.parentNode;
			}
			if ( offsetParent && offsetParent !== elem && offsetParent.nodeType === 1 ) {

				// Incorporate borders into its offset, since they are outside its content origin
				parentOffset = jQuery( offsetParent ).offset();
				parentOffset.top += jQuery.css( offsetParent, "borderTopWidth", true );
				parentOffset.left += jQuery.css( offsetParent, "borderLeftWidth", true );
			}
		}

		// Subtract parent offsets and element margins
		return {
			top: offset.top - parentOffset.top - jQuery.css( elem, "marginTop", true ),
			left: offset.left - parentOffset.left - jQuery.css( elem, "marginLeft", true )
		};
	},

	// This method will return documentElement in the following cases:
	// 1) For the element inside the iframe without offsetParent, this method will return
	//    documentElement of the parent window
	// 2) For the hidden or detached element
	// 3) For body or html element, i.e. in case of the html node - it will return itself
	//
	// but those exceptions were never presented as a real life use-cases
	// and might be considered as more preferable results.
	//
	// This logic, however, is not guaranteed and can change at any point in the future
	offsetParent: function() {
		return this.map( function() {
			var offsetParent = this.offsetParent;

			while ( offsetParent && jQuery.css( offsetParent, "position" ) === "static" ) {
				offsetParent = offsetParent.offsetParent;
			}

			return offsetParent || documentElement;
		} );
	}
} );

// Create scrollLeft and scrollTop methods
jQuery.each( { scrollLeft: "pageXOffset", scrollTop: "pageYOffset" }, function( method, prop ) {
	var top = "pageYOffset" === prop;

	jQuery.fn[ method ] = function( val ) {
		return access( this, function( elem, method, val ) {

			// Coalesce documents and windows
			var win;
			if ( isWindow( elem ) ) {
				win = elem;
			} else if ( elem.nodeType === 9 ) {
				win = elem.defaultView;
			}

			if ( val === undefined ) {
				return win ? win[ prop ] : elem[ method ];
			}

			if ( win ) {
				win.scrollTo(
					!top ? val : win.pageXOffset,
					top ? val : win.pageYOffset
				);

			} else {
				elem[ method ] = val;
			}
		}, method, val, arguments.length );
	};
} );

// Support: Safari <=7 - 9.1, Chrome <=37 - 49
// Add the top/left cssHooks using jQuery.fn.position
// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084
// Blink bug: https://bugs.chromium.org/p/chromium/issues/detail?id=589347
// getComputedStyle returns percent when specified for top/left/bottom/right;
// rather than make the css module depend on the offset module, just check for it here
jQuery.each( [ "top", "left" ], function( _i, prop ) {
	jQuery.cssHooks[ prop ] = addGetHookIf( support.pixelPosition,
		function( elem, computed ) {
			if ( computed ) {
				computed = curCSS( elem, prop );

				// If curCSS returns percentage, fallback to offset
				return rnumnonpx.test( computed ) ?
					jQuery( elem ).position()[ prop ] + "px" :
					computed;
			}
		}
	);
} );


// Create innerHeight, innerWidth, height, width, outerHeight and outerWidth methods
jQuery.each( { Height: "height", Width: "width" }, function( name, type ) {
	jQuery.each( {
		padding: "inner" + name,
		content: type,
		"": "outer" + name
	}, function( defaultExtra, funcName ) {

		// Margin is only for outerHeight, outerWidth
		jQuery.fn[ funcName ] = function( margin, value ) {
			var chainable = arguments.length && ( defaultExtra || typeof margin !== "boolean" ),
				extra = defaultExtra || ( margin === true || value === true ? "margin" : "border" );

			return access( this, function( elem, type, value ) {
				var doc;

				if ( isWindow( elem ) ) {

					// $( window ).outerWidth/Height return w/h including scrollbars (gh-1729)
					return funcName.indexOf( "outer" ) === 0 ?
						elem[ "inner" + name ] :
						elem.document.documentElement[ "client" + name ];
				}

				// Get document width or height
				if ( elem.nodeType === 9 ) {
					doc = elem.documentElement;

					// Either scroll[Width/Height] or offset[Width/Height] or client[Width/Height],
					// whichever is greatest
					return Math.max(
						elem.body[ "scroll" + name ], doc[ "scroll" + name ],
						elem.body[ "offset" + name ], doc[ "offset" + name ],
						doc[ "client" + name ]
					);
				}

				return value === undefined ?

					// Get width or height on the element, requesting but not forcing parseFloat
					jQuery.css( elem, type, extra ) :

					// Set width or height on the element
					jQuery.style( elem, type, value, extra );
			}, type, chainable ? margin : undefined, chainable );
		};
	} );
} );


jQuery.each( [
	"ajaxStart",
	"ajaxStop",
	"ajaxComplete",
	"ajaxError",
	"ajaxSuccess",
	"ajaxSend"
], function( _i, type ) {
	jQuery.fn[ type ] = function( fn ) {
		return this.on( type, fn );
	};
} );




jQuery.fn.extend( {

	bind: function( types, data, fn ) {
		return this.on( types, null, data, fn );
	},
	unbind: function( types, fn ) {
		return this.off( types, null, fn );
	},

	delegate: function( selector, types, data, fn ) {
		return this.on( types, selector, data, fn );
	},
	undelegate: function( selector, types, fn ) {

		// ( namespace ) or ( selector, types [, fn] )
		return arguments.length === 1 ?
			this.off( selector, "**" ) :
			this.off( types, selector || "**", fn );
	},

	hover: function( fnOver, fnOut ) {
		return this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
	}
} );

jQuery.each(
	( "blur focus focusin focusout resize scroll click dblclick " +
	"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave " +
	"change select submit keydown keypress keyup contextmenu" ).split( " " ),
	function( _i, name ) {

		// Handle event binding
		jQuery.fn[ name ] = function( data, fn ) {
			return arguments.length > 0 ?
				this.on( name, null, data, fn ) :
				this.trigger( name );
		};
	}
);




// Support: Android <=4.0 only
// Make sure we trim BOM and NBSP
var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;

// Bind a function to a context, optionally partially applying any
// arguments.
// jQuery.proxy is deprecated to promote standards (specifically Function#bind)
// However, it is not slated for removal any time soon
jQuery.proxy = function( fn, context ) {
	var tmp, args, proxy;

	if ( typeof context === "string" ) {
		tmp = fn[ context ];
		context = fn;
		fn = tmp;
	}

	// Quick check to determine if target is callable, in the spec
	// this throws a TypeError, but we will just return undefined.
	if ( !isFunction( fn ) ) {
		return undefined;
	}

	// Simulated bind
	args = slice.call( arguments, 2 );
	proxy = function() {
		return fn.apply( context || this, args.concat( slice.call( arguments ) ) );
	};

	// Set the guid of unique handler to the same of original handler, so it can be removed
	proxy.guid = fn.guid = fn.guid || jQuery.guid++;

	return proxy;
};

jQuery.holdReady = function( hold ) {
	if ( hold ) {
		jQuery.readyWait++;
	} else {
		jQuery.ready( true );
	}
};
jQuery.isArray = Array.isArray;
jQuery.parseJSON = JSON.parse;
jQuery.nodeName = nodeName;
jQuery.isFunction = isFunction;
jQuery.isWindow = isWindow;
jQuery.camelCase = camelCase;
jQuery.type = toType;

jQuery.now = Date.now;

jQuery.isNumeric = function( obj ) {

	// As of jQuery 3.0, isNumeric is limited to
	// strings and numbers (primitives or objects)
	// that can be coerced to finite numbers (gh-2662)
	var type = jQuery.type( obj );
	return ( type === "number" || type === "string" ) &&

		// parseFloat NaNs numeric-cast false positives ("")
		// ...but misinterprets leading-number strings, particularly hex literals ("0x...")
		// subtraction forces infinities to NaN
		!isNaN( obj - parseFloat( obj ) );
};

jQuery.trim = function( text ) {
	return text == null ?
		"" :
		( text + "" ).replace( rtrim, "" );
};



// Register as a named AMD module, since jQuery can be concatenated with other
// files that may use define, but not via a proper concatenation script that
// understands anonymous AMD modules. A named AMD is safest and most robust
// way to register. Lowercase jquery is used because AMD module names are
// derived from file names, and jQuery is normally delivered in a lowercase
// file name. Do this after creating the global so that if an AMD module wants
// to call noConflict to hide this version of jQuery, it will work.

// Note that for maximum portability, libraries that are not jQuery should
// declare themselves as anonymous modules, and avoid setting a global if an
// AMD loader is present. jQuery is a special case. For more information, see
// https://github.com/jrburke/requirejs/wiki/Updating-existing-libraries#wiki-anon

if ( true ) {
	!(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_RESULT__ = (function() {
		return jQuery;
	}).apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
}




var

	// Map over jQuery in case of overwrite
	_jQuery = window.jQuery,

	// Map over the $ in case of overwrite
	_$ = window.$;

jQuery.noConflict = function( deep ) {
	if ( window.$ === jQuery ) {
		window.$ = _$;
	}

	if ( deep && window.jQuery === jQuery ) {
		window.jQuery = _jQuery;
	}

	return jQuery;
};

// Expose jQuery and $ identifiers, even in AMD
// (#7102#comment:10, https://github.com/jquery/jquery/pull/557)
// and CommonJS for browser emulators (#13566)
if ( typeof noGlobal === "undefined" ) {
	window.jQuery = window.$ = jQuery;
}




return jQuery;
} );


/***/ }),

/***/ "./node_modules/process/browser.js":
/*!*****************************************!*\
  !*** ./node_modules/process/browser.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// shim for using process in browser
var process = module.exports = {};

// cached from whatever global is present so that test runners that stub it
// don't break things.  But we need to wrap it in a try catch in case it is
// wrapped in strict mode code which doesn't define any globals.  It's inside a
// function because try/catches deoptimize in certain engines.

var cachedSetTimeout;
var cachedClearTimeout;

function defaultSetTimout() {
    throw new Error('setTimeout has not been defined');
}
function defaultClearTimeout () {
    throw new Error('clearTimeout has not been defined');
}
(function () {
    try {
        if (typeof setTimeout === 'function') {
            cachedSetTimeout = setTimeout;
        } else {
            cachedSetTimeout = defaultSetTimout;
        }
    } catch (e) {
        cachedSetTimeout = defaultSetTimout;
    }
    try {
        if (typeof clearTimeout === 'function') {
            cachedClearTimeout = clearTimeout;
        } else {
            cachedClearTimeout = defaultClearTimeout;
        }
    } catch (e) {
        cachedClearTimeout = defaultClearTimeout;
    }
} ())
function runTimeout(fun) {
    if (cachedSetTimeout === setTimeout) {
        //normal enviroments in sane situations
        return setTimeout(fun, 0);
    }
    // if setTimeout wasn't available but was latter defined
    if ((cachedSetTimeout === defaultSetTimout || !cachedSetTimeout) && setTimeout) {
        cachedSetTimeout = setTimeout;
        return setTimeout(fun, 0);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedSetTimeout(fun, 0);
    } catch(e){
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't trust the global object when called normally
            return cachedSetTimeout.call(null, fun, 0);
        } catch(e){
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error
            return cachedSetTimeout.call(this, fun, 0);
        }
    }


}
function runClearTimeout(marker) {
    if (cachedClearTimeout === clearTimeout) {
        //normal enviroments in sane situations
        return clearTimeout(marker);
    }
    // if clearTimeout wasn't available but was latter defined
    if ((cachedClearTimeout === defaultClearTimeout || !cachedClearTimeout) && clearTimeout) {
        cachedClearTimeout = clearTimeout;
        return clearTimeout(marker);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedClearTimeout(marker);
    } catch (e){
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't  trust the global object when called normally
            return cachedClearTimeout.call(null, marker);
        } catch (e){
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error.
            // Some versions of I.E. have different rules for clearTimeout vs setTimeout
            return cachedClearTimeout.call(this, marker);
        }
    }



}
var queue = [];
var draining = false;
var currentQueue;
var queueIndex = -1;

function cleanUpNextTick() {
    if (!draining || !currentQueue) {
        return;
    }
    draining = false;
    if (currentQueue.length) {
        queue = currentQueue.concat(queue);
    } else {
        queueIndex = -1;
    }
    if (queue.length) {
        drainQueue();
    }
}

function drainQueue() {
    if (draining) {
        return;
    }
    var timeout = runTimeout(cleanUpNextTick);
    draining = true;

    var len = queue.length;
    while(len) {
        currentQueue = queue;
        queue = [];
        while (++queueIndex < len) {
            if (currentQueue) {
                currentQueue[queueIndex].run();
            }
        }
        queueIndex = -1;
        len = queue.length;
    }
    currentQueue = null;
    draining = false;
    runClearTimeout(timeout);
}

process.nextTick = function (fun) {
    var args = new Array(arguments.length - 1);
    if (arguments.length > 1) {
        for (var i = 1; i < arguments.length; i++) {
            args[i - 1] = arguments[i];
        }
    }
    queue.push(new Item(fun, args));
    if (queue.length === 1 && !draining) {
        runTimeout(drainQueue);
    }
};

// v8 likes predictible objects
function Item(fun, array) {
    this.fun = fun;
    this.array = array;
}
Item.prototype.run = function () {
    this.fun.apply(null, this.array);
};
process.title = 'browser';
process.browser = true;
process.env = {};
process.argv = [];
process.version = ''; // empty string to avoid regexp issues
process.versions = {};

function noop() {}

process.on = noop;
process.addListener = noop;
process.once = noop;
process.off = noop;
process.removeListener = noop;
process.removeAllListeners = noop;
process.emit = noop;
process.prependListener = noop;
process.prependOnceListener = noop;

process.listeners = function (name) { return [] }

process.binding = function (name) {
    throw new Error('process.binding is not supported');
};

process.cwd = function () { return '/' };
process.chdir = function (dir) {
    throw new Error('process.chdir is not supported');
};
process.umask = function() { return 0; };


/***/ }),

/***/ "./node_modules/setimmediate/setImmediate.js":
/*!***************************************************!*\
  !*** ./node_modules/setimmediate/setImmediate.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global, process) {(function (global, undefined) {
    "use strict";

    if (global.setImmediate) {
        return;
    }

    var nextHandle = 1; // Spec says greater than zero
    var tasksByHandle = {};
    var currentlyRunningATask = false;
    var doc = global.document;
    var registerImmediate;

    function setImmediate(callback) {
      // Callback can either be a function or a string
      if (typeof callback !== "function") {
        callback = new Function("" + callback);
      }
      // Copy function arguments
      var args = new Array(arguments.length - 1);
      for (var i = 0; i < args.length; i++) {
          args[i] = arguments[i + 1];
      }
      // Store and register the task
      var task = { callback: callback, args: args };
      tasksByHandle[nextHandle] = task;
      registerImmediate(nextHandle);
      return nextHandle++;
    }

    function clearImmediate(handle) {
        delete tasksByHandle[handle];
    }

    function run(task) {
        var callback = task.callback;
        var args = task.args;
        switch (args.length) {
        case 0:
            callback();
            break;
        case 1:
            callback(args[0]);
            break;
        case 2:
            callback(args[0], args[1]);
            break;
        case 3:
            callback(args[0], args[1], args[2]);
            break;
        default:
            callback.apply(undefined, args);
            break;
        }
    }

    function runIfPresent(handle) {
        // From the spec: "Wait until any invocations of this algorithm started before this one have completed."
        // So if we're currently running a task, we'll need to delay this invocation.
        if (currentlyRunningATask) {
            // Delay by doing a setTimeout. setImmediate was tried instead, but in Firefox 7 it generated a
            // "too much recursion" error.
            setTimeout(runIfPresent, 0, handle);
        } else {
            var task = tasksByHandle[handle];
            if (task) {
                currentlyRunningATask = true;
                try {
                    run(task);
                } finally {
                    clearImmediate(handle);
                    currentlyRunningATask = false;
                }
            }
        }
    }

    function installNextTickImplementation() {
        registerImmediate = function(handle) {
            process.nextTick(function () { runIfPresent(handle); });
        };
    }

    function canUsePostMessage() {
        // The test against `importScripts` prevents this implementation from being installed inside a web worker,
        // where `global.postMessage` means something completely different and can't be used for this purpose.
        if (global.postMessage && !global.importScripts) {
            var postMessageIsAsynchronous = true;
            var oldOnMessage = global.onmessage;
            global.onmessage = function() {
                postMessageIsAsynchronous = false;
            };
            global.postMessage("", "*");
            global.onmessage = oldOnMessage;
            return postMessageIsAsynchronous;
        }
    }

    function installPostMessageImplementation() {
        // Installs an event handler on `global` for the `message` event: see
        // * https://developer.mozilla.org/en/DOM/window.postMessage
        // * http://www.whatwg.org/specs/web-apps/current-work/multipage/comms.html#crossDocumentMessages

        var messagePrefix = "setImmediate$" + Math.random() + "$";
        var onGlobalMessage = function(event) {
            if (event.source === global &&
                typeof event.data === "string" &&
                event.data.indexOf(messagePrefix) === 0) {
                runIfPresent(+event.data.slice(messagePrefix.length));
            }
        };

        if (global.addEventListener) {
            global.addEventListener("message", onGlobalMessage, false);
        } else {
            global.attachEvent("onmessage", onGlobalMessage);
        }

        registerImmediate = function(handle) {
            global.postMessage(messagePrefix + handle, "*");
        };
    }

    function installMessageChannelImplementation() {
        var channel = new MessageChannel();
        channel.port1.onmessage = function(event) {
            var handle = event.data;
            runIfPresent(handle);
        };

        registerImmediate = function(handle) {
            channel.port2.postMessage(handle);
        };
    }

    function installReadyStateChangeImplementation() {
        var html = doc.documentElement;
        registerImmediate = function(handle) {
            // Create a <script> element; its readystatechange event will be fired asynchronously once it is inserted
            // into the document. Do so, thus queuing up the task. Remember to clean up once it's been called.
            var script = doc.createElement("script");
            script.onreadystatechange = function () {
                runIfPresent(handle);
                script.onreadystatechange = null;
                html.removeChild(script);
                script = null;
            };
            html.appendChild(script);
        };
    }

    function installSetTimeoutImplementation() {
        registerImmediate = function(handle) {
            setTimeout(runIfPresent, 0, handle);
        };
    }

    // If supported, we should attach to the prototype of global, since that is where setTimeout et al. live.
    var attachTo = Object.getPrototypeOf && Object.getPrototypeOf(global);
    attachTo = attachTo && attachTo.setTimeout ? attachTo : global;

    // Don't get fooled by e.g. browserify environments.
    if ({}.toString.call(global.process) === "[object process]") {
        // For Node.js before 0.9
        installNextTickImplementation();

    } else if (canUsePostMessage()) {
        // For non-IE10 modern browsers
        installPostMessageImplementation();

    } else if (global.MessageChannel) {
        // For web workers, where supported
        installMessageChannelImplementation();

    } else if (doc && "onreadystatechange" in doc.createElement("script")) {
        // For IE 6–8
        installReadyStateChangeImplementation();

    } else {
        // For older browsers
        installSetTimeoutImplementation();
    }

    attachTo.setImmediate = setImmediate;
    attachTo.clearImmediate = clearImmediate;
}(typeof self === "undefined" ? typeof global === "undefined" ? this : global : self));

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js"), __webpack_require__(/*! ./../process/browser.js */ "./node_modules/process/browser.js")))

/***/ }),

/***/ "./node_modules/timers-browserify/main.js":
/*!************************************************!*\
  !*** ./node_modules/timers-browserify/main.js ***!
  \************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global) {var scope = (typeof global !== "undefined" && global) ||
            (typeof self !== "undefined" && self) ||
            window;
var apply = Function.prototype.apply;

// DOM APIs, for completeness

exports.setTimeout = function() {
  return new Timeout(apply.call(setTimeout, scope, arguments), clearTimeout);
};
exports.setInterval = function() {
  return new Timeout(apply.call(setInterval, scope, arguments), clearInterval);
};
exports.clearTimeout =
exports.clearInterval = function(timeout) {
  if (timeout) {
    timeout.close();
  }
};

function Timeout(id, clearFn) {
  this._id = id;
  this._clearFn = clearFn;
}
Timeout.prototype.unref = Timeout.prototype.ref = function() {};
Timeout.prototype.close = function() {
  this._clearFn.call(scope, this._id);
};

// Does not start the time, just sets up the members needed.
exports.enroll = function(item, msecs) {
  clearTimeout(item._idleTimeoutId);
  item._idleTimeout = msecs;
};

exports.unenroll = function(item) {
  clearTimeout(item._idleTimeoutId);
  item._idleTimeout = -1;
};

exports._unrefActive = exports.active = function(item) {
  clearTimeout(item._idleTimeoutId);

  var msecs = item._idleTimeout;
  if (msecs >= 0) {
    item._idleTimeoutId = setTimeout(function onTimeout() {
      if (item._onTimeout)
        item._onTimeout();
    }, msecs);
  }
};

// setimmediate attaches itself to the global object
__webpack_require__(/*! setimmediate */ "./node_modules/setimmediate/setImmediate.js");
// On some exotic environments, it's not clear which object `setimmediate` was
// able to install onto.  Search each possibility in the same order as the
// `setimmediate` library.
exports.setImmediate = (typeof self !== "undefined" && self.setImmediate) ||
                       (typeof global !== "undefined" && global.setImmediate) ||
                       (this && this.setImmediate);
exports.clearImmediate = (typeof self !== "undefined" && self.clearImmediate) ||
                         (typeof global !== "undefined" && global.clearImmediate) ||
                         (this && this.clearImmediate);

/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

/***/ }),

/***/ "./node_modules/webpack/buildin/global.js":
/*!***********************************!*\
  !*** (webpack)/buildin/global.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

var g;

// This works in non-strict mode
g = (function() {
	return this;
})();

try {
	// This works if eval is allowed (see CSP)
	g = g || new Function("return this")();
} catch (e) {
	// This works if the window reference is available
	if (typeof window === "object") g = window;
}

// g can still be undefined, but nothing to do about it...
// We return undefined, instead of nothing here, so it's
// easier to handle this case. if(!global) { ...}

module.exports = g;


/***/ }),

/***/ "./node_modules/webpack/buildin/module.js":
/*!***********************************!*\
  !*** (webpack)/buildin/module.js ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

module.exports = function(module) {
	if (!module.webpackPolyfill) {
		module.deprecate = function() {};
		module.paths = [];
		// module.parent = undefined by default
		if (!module.children) module.children = [];
		Object.defineProperty(module, "loaded", {
			enumerable: true,
			get: function() {
				return module.l;
			}
		});
		Object.defineProperty(module, "id", {
			enumerable: true,
			get: function() {
				return module.i;
			}
		});
		module.webpackPolyfill = 1;
	}
	return module;
};


/***/ }),

/***/ "./resources/assets/frontend/assets/js/framework.js":
/*!**********************************************************!*\
  !*** ./resources/assets/frontend/assets/js/framework.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(setImmediate) {var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/*! UIkit 3.2.1 | http://www.getuikit.com | (c) 2014 - 2019 YOOtheme | MIT License */
(function (global, factory) {
  ( false ? undefined : _typeof(exports)) === 'object' && typeof module !== 'undefined' ? module.exports = factory() :  true ? !(__WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :
				__WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)) : (undefined);
})(this, function () {
  'use strict';

  var objPrototype = Object.prototype;
  var hasOwnProperty = objPrototype.hasOwnProperty;

  function hasOwn(obj, key) {
    return hasOwnProperty.call(obj, key);
  }

  var hyphenateCache = {};
  var hyphenateRe = /([a-z\d])([A-Z])/g;

  function hyphenate(str) {
    if (!(str in hyphenateCache)) {
      hyphenateCache[str] = str.replace(hyphenateRe, '$1-$2').toLowerCase();
    }

    return hyphenateCache[str];
  }

  var camelizeRe = /-(\w)/g;

  function camelize(str) {
    return str.replace(camelizeRe, toUpper);
  }

  function toUpper(_, c) {
    return c ? c.toUpperCase() : '';
  }

  function ucfirst(str) {
    return str.length ? toUpper(null, str.charAt(0)) + str.slice(1) : '';
  }

  var strPrototype = String.prototype;

  var startsWithFn = strPrototype.startsWith || function (search) {
    return this.lastIndexOf(search, 0) === 0;
  };

  function startsWith(str, search) {
    return startsWithFn.call(str, search);
  }

  var endsWithFn = strPrototype.endsWith || function (search) {
    return this.substr(-search.length) === search;
  };

  function endsWith(str, search) {
    return endsWithFn.call(str, search);
  }

  var arrPrototype = Array.prototype;

  var includesFn = function includesFn(search, i) {
    return ~this.indexOf(search, i);
  };

  var includesStr = strPrototype.includes || includesFn;
  var includesArray = arrPrototype.includes || includesFn;

  function includes(obj, search) {
    return obj && (isString(obj) ? includesStr : includesArray).call(obj, search);
  }

  var findIndexFn = arrPrototype.findIndex || function (predicate) {
    var arguments$1 = arguments;

    for (var i = 0; i < this.length; i++) {
      if (predicate.call(arguments$1[1], this[i], i, this)) {
        return i;
      }
    }

    return -1;
  };

  function findIndex(array, predicate) {
    return findIndexFn.call(array, predicate);
  }

  var isArray = Array.isArray;

  function isFunction(obj) {
    return typeof obj === 'function';
  }

  function isObject(obj) {
    return obj !== null && _typeof(obj) === 'object';
  }

  var toString = objPrototype.toString;

  function isPlainObject(obj) {
    return toString.call(obj) === '[object Object]';
  }

  function isWindow(obj) {
    return isObject(obj) && obj === obj.window;
  }

  function isDocument(obj) {
    return isObject(obj) && obj.nodeType === 9;
  }

  function isJQuery(obj) {
    return isObject(obj) && !!obj.jquery;
  }

  function isNode(obj) {
    return obj instanceof Node || isObject(obj) && obj.nodeType >= 1;
  }

  function isNodeCollection(obj) {
    return toString.call(obj).match(/^\[object (NodeList|HTMLCollection)\]$/);
  }

  function isBoolean(value) {
    return typeof value === 'boolean';
  }

  function isString(value) {
    return typeof value === 'string';
  }

  function isNumber(value) {
    return typeof value === 'number';
  }

  function isNumeric(value) {
    return isNumber(value) || isString(value) && !isNaN(value - parseFloat(value));
  }

  function isEmpty(obj) {
    return !(isArray(obj) ? obj.length : isObject(obj) ? Object.keys(obj).length : false);
  }

  function isUndefined(value) {
    return value === void 0;
  }

  function toBoolean(value) {
    return isBoolean(value) ? value : value === 'true' || value === '1' || value === '' ? true : value === 'false' || value === '0' ? false : value;
  }

  function toNumber(value) {
    var number = Number(value);
    return !isNaN(number) ? number : false;
  }

  function toFloat(value) {
    return parseFloat(value) || 0;
  }

  function toNode(element) {
    return isNode(element) || isWindow(element) || isDocument(element) ? element : isNodeCollection(element) || isJQuery(element) ? element[0] : isArray(element) ? toNode(element[0]) : null;
  }

  function toNodes(element) {
    return isNode(element) ? [element] : isNodeCollection(element) ? arrPrototype.slice.call(element) : isArray(element) ? element.map(toNode).filter(Boolean) : isJQuery(element) ? element.toArray() : [];
  }

  function toList(value) {
    return isArray(value) ? value : isString(value) ? value.split(/,(?![^(]*\))/).map(function (value) {
      return isNumeric(value) ? toNumber(value) : toBoolean(value.trim());
    }) : [value];
  }

  function toMs(time) {
    return !time ? 0 : endsWith(time, 'ms') ? toFloat(time) : toFloat(time) * 1000;
  }

  function isEqual(value, other) {
    return value === other || isObject(value) && isObject(other) && Object.keys(value).length === Object.keys(other).length && each(value, function (val, key) {
      return val === other[key];
    });
  }

  function swap(value, a, b) {
    return value.replace(new RegExp(a + "|" + b, 'mg'), function (match) {
      return match === a ? b : a;
    });
  }

  var assign = Object.assign || function (target) {
    var args = [],
        len = arguments.length - 1;

    while (len-- > 0) {
      args[len] = arguments[len + 1];
    }

    target = Object(target);

    for (var i = 0; i < args.length; i++) {
      var source = args[i];

      if (source !== null) {
        for (var key in source) {
          if (hasOwn(source, key)) {
            target[key] = source[key];
          }
        }
      }
    }

    return target;
  };

  function last(array) {
    return array[array.length - 1];
  }

  function each(obj, cb) {
    for (var key in obj) {
      if (false === cb(obj[key], key)) {
        return false;
      }
    }

    return true;
  }

  function sortBy(array, prop) {
    return array.sort(function (ref, ref$1) {
      var propA = ref[prop];
      if (propA === void 0) propA = 0;
      var propB = ref$1[prop];
      if (propB === void 0) propB = 0;
      return propA > propB ? 1 : propB > propA ? -1 : 0;
    });
  }

  function uniqueBy(array, prop) {
    var seen = new Set();
    return array.filter(function (ref) {
      var check = ref[prop];
      return seen.has(check) ? false : seen.add(check) || true;
    } // IE 11 does not return the Set object
    );
  }

  function clamp(number, min, max) {
    if (min === void 0) min = 0;
    if (max === void 0) max = 1;
    return Math.min(Math.max(toNumber(number) || 0, min), max);
  }

  function noop() {}

  function intersectRect(r1, r2) {
    return r1.left < r2.right && r1.right > r2.left && r1.top < r2.bottom && r1.bottom > r2.top;
  }

  function pointInRect(point, rect) {
    return point.x <= rect.right && point.x >= rect.left && point.y <= rect.bottom && point.y >= rect.top;
  }

  var Dimensions = {
    ratio: function ratio(dimensions, prop, value) {
      var obj;
      var aProp = prop === 'width' ? 'height' : 'width';
      return obj = {}, obj[aProp] = dimensions[prop] ? Math.round(value * dimensions[aProp] / dimensions[prop]) : dimensions[aProp], obj[prop] = value, obj;
    },
    contain: function contain(dimensions, maxDimensions) {
      var this$1 = this;
      dimensions = assign({}, dimensions);
      each(dimensions, function (_, prop) {
        return dimensions = dimensions[prop] > maxDimensions[prop] ? this$1.ratio(dimensions, prop, maxDimensions[prop]) : dimensions;
      });
      return dimensions;
    },
    cover: function cover(dimensions, maxDimensions) {
      var this$1 = this;
      dimensions = this.contain(dimensions, maxDimensions);
      each(dimensions, function (_, prop) {
        return dimensions = dimensions[prop] < maxDimensions[prop] ? this$1.ratio(dimensions, prop, maxDimensions[prop]) : dimensions;
      });
      return dimensions;
    }
  };

  function attr(element, name, value) {
    if (isObject(name)) {
      for (var key in name) {
        attr(element, key, name[key]);
      }

      return;
    }

    if (isUndefined(value)) {
      element = toNode(element);
      return element && element.getAttribute(name);
    } else {
      toNodes(element).forEach(function (element) {
        if (isFunction(value)) {
          value = value.call(element, attr(element, name));
        }

        if (value === null) {
          removeAttr(element, name);
        } else {
          element.setAttribute(name, value);
        }
      });
    }
  }

  function hasAttr(element, name) {
    return toNodes(element).some(function (element) {
      return element.hasAttribute(name);
    });
  }

  function removeAttr(element, name) {
    element = toNodes(element);
    name.split(' ').forEach(function (name) {
      return element.forEach(function (element) {
        return element.hasAttribute(name) && element.removeAttribute(name);
      });
    });
  }

  function data(element, attribute) {
    for (var i = 0, attrs = [attribute, "data-" + attribute]; i < attrs.length; i++) {
      if (hasAttr(element, attrs[i])) {
        return attr(element, attrs[i]);
      }
    }
  }
  /* global DocumentTouch */


  var isIE = /msie|trident/i.test(window.navigator.userAgent);
  var isRtl = attr(document.documentElement, 'dir') === 'rtl';
  var hasTouchEvents = ('ontouchstart' in window);
  var hasPointerEvents = window.PointerEvent;
  var hasTouch = hasTouchEvents || window.DocumentTouch && document instanceof DocumentTouch || navigator.maxTouchPoints; // IE >=11

  var pointerDown = hasPointerEvents ? 'pointerdown' : hasTouchEvents ? 'touchstart' : 'mousedown';
  var pointerMove = hasPointerEvents ? 'pointermove' : hasTouchEvents ? 'touchmove' : 'mousemove';
  var pointerUp = hasPointerEvents ? 'pointerup' : hasTouchEvents ? 'touchend' : 'mouseup';
  var pointerEnter = hasPointerEvents ? 'pointerenter' : hasTouchEvents ? '' : 'mouseenter';
  var pointerLeave = hasPointerEvents ? 'pointerleave' : hasTouchEvents ? '' : 'mouseleave';
  var pointerCancel = hasPointerEvents ? 'pointercancel' : 'touchcancel';

  function query(selector, context) {
    return toNode(selector) || find(selector, getContext(selector, context));
  }

  function queryAll(selector, context) {
    var nodes = toNodes(selector);
    return nodes.length && nodes || findAll(selector, getContext(selector, context));
  }

  function getContext(selector, context) {
    if (context === void 0) context = document;
    return isContextSelector(selector) || isDocument(context) ? context : context.ownerDocument;
  }

  function find(selector, context) {
    return toNode(_query(selector, context, 'querySelector'));
  }

  function findAll(selector, context) {
    return toNodes(_query(selector, context, 'querySelectorAll'));
  }

  function _query(selector, context, queryFn) {
    if (context === void 0) context = document;

    if (!selector || !isString(selector)) {
      return null;
    }

    selector = selector.replace(contextSanitizeRe, '$1 *');
    var removes;

    if (isContextSelector(selector)) {
      removes = [];
      selector = splitSelector(selector).map(function (selector, i) {
        var ctx = context;

        if (selector[0] === '!') {
          var selectors = selector.substr(1).trim().split(' ');
          ctx = closest(context.parentNode, selectors[0]);
          selector = selectors.slice(1).join(' ').trim();
        }

        if (selector[0] === '-') {
          var selectors$1 = selector.substr(1).trim().split(' ');
          var prev = (ctx || context).previousElementSibling;
          ctx = matches(prev, selector.substr(1)) ? prev : null;
          selector = selectors$1.slice(1).join(' ');
        }

        if (!ctx) {
          return null;
        }

        if (!ctx.id) {
          ctx.id = "uk-" + Date.now() + i;
          removes.push(function () {
            return removeAttr(ctx, 'id');
          });
        }

        return "#" + escape(ctx.id) + " " + selector;
      }).filter(Boolean).join(',');
      context = document;
    }

    try {
      return context[queryFn](selector);
    } catch (e) {
      return null;
    } finally {
      removes && removes.forEach(function (remove) {
        return remove();
      });
    }
  }

  var contextSelectorRe = /(^|[^\\],)\s*[!>+~-]/;
  var contextSanitizeRe = /([!>+~-])(?=\s+[!>+~-]|\s*$)/g;

  function isContextSelector(selector) {
    return isString(selector) && selector.match(contextSelectorRe);
  }

  var selectorRe = /.*?[^\\](?:,|$)/g;

  function splitSelector(selector) {
    return selector.match(selectorRe).map(function (selector) {
      return selector.replace(/,$/, '').trim();
    });
  }

  var elProto = Element.prototype;
  var matchesFn = elProto.matches || elProto.webkitMatchesSelector || elProto.msMatchesSelector;

  function matches(element, selector) {
    return toNodes(element).some(function (element) {
      return matchesFn.call(element, selector);
    });
  }

  var closestFn = elProto.closest || function (selector) {
    var ancestor = this;

    do {
      if (matches(ancestor, selector)) {
        return ancestor;
      }

      ancestor = ancestor.parentNode;
    } while (ancestor && ancestor.nodeType === 1);
  };

  function closest(element, selector) {
    if (startsWith(selector, '>')) {
      selector = selector.slice(1);
    }

    return isNode(element) ? closestFn.call(element, selector) : toNodes(element).map(function (element) {
      return closest(element, selector);
    }).filter(Boolean);
  }

  function parents(element, selector) {
    var elements = [];
    element = toNode(element);

    while ((element = element.parentNode) && element.nodeType === 1) {
      if (matches(element, selector)) {
        elements.push(element);
      }
    }

    return elements;
  }

  var escapeFn = window.CSS && CSS.escape || function (css) {
    return css.replace(/([^\x7f-\uFFFF\w-])/g, function (match) {
      return "\\" + match;
    });
  };

  function escape(css) {
    return isString(css) ? escapeFn.call(null, css) : '';
  }

  var voidElements = {
    area: true,
    base: true,
    br: true,
    col: true,
    embed: true,
    hr: true,
    img: true,
    input: true,
    keygen: true,
    link: true,
    menuitem: true,
    meta: true,
    param: true,
    source: true,
    track: true,
    wbr: true
  };

  function isVoidElement(element) {
    return toNodes(element).some(function (element) {
      return voidElements[element.tagName.toLowerCase()];
    });
  }

  function isVisible(element) {
    return toNodes(element).some(function (element) {
      return element.offsetWidth || element.offsetHeight || element.getClientRects().length;
    });
  }

  var selInput = 'input,select,textarea,button';

  function isInput(element) {
    return toNodes(element).some(function (element) {
      return matches(element, selInput);
    });
  }

  function filter(element, selector) {
    return toNodes(element).filter(function (element) {
      return matches(element, selector);
    });
  }

  function within(element, selector) {
    return !isString(selector) ? element === selector || (isDocument(selector) ? selector.documentElement : toNode(selector)).contains(toNode(element)) // IE 11 document does not implement contains
    : matches(element, selector) || closest(element, selector);
  }

  function on() {
    var args = [],
        len = arguments.length;

    while (len--) {
      args[len] = arguments[len];
    }

    var ref = getArgs(args);
    var targets = ref[0];
    var type = ref[1];
    var selector = ref[2];
    var listener = ref[3];
    var useCapture = ref[4];
    targets = toEventTargets(targets);

    if (listener.length > 1) {
      listener = detail(listener);
    }

    if (selector) {
      listener = delegate(targets, selector, listener);
    }

    if (useCapture && useCapture.self) {
      listener = selfFilter(listener);
    }

    useCapture = useCaptureFilter(useCapture);
    type.split(' ').forEach(function (type) {
      return targets.forEach(function (target) {
        return target.addEventListener(type, listener, useCapture);
      });
    });
    return function () {
      return off(targets, type, listener, useCapture);
    };
  }

  function off(targets, type, listener, useCapture) {
    if (useCapture === void 0) useCapture = false;
    useCapture = useCaptureFilter(useCapture);
    targets = toEventTargets(targets);
    type.split(' ').forEach(function (type) {
      return targets.forEach(function (target) {
        return target.removeEventListener(type, listener, useCapture);
      });
    });
  }

  function once() {
    var args = [],
        len = arguments.length;

    while (len--) {
      args[len] = arguments[len];
    }

    var ref = getArgs(args);
    var element = ref[0];
    var type = ref[1];
    var selector = ref[2];
    var listener = ref[3];
    var useCapture = ref[4];
    var condition = ref[5];
    var off = on(element, type, selector, function (e) {
      var result = !condition || condition(e);

      if (result) {
        off();
        listener(e, result);
      }
    }, useCapture);
    return off;
  }

  function trigger(targets, event, detail) {
    return toEventTargets(targets).reduce(function (notCanceled, target) {
      return notCanceled && target.dispatchEvent(createEvent(event, true, true, detail));
    }, true);
  }

  function createEvent(e, bubbles, cancelable, detail) {
    if (bubbles === void 0) bubbles = true;
    if (cancelable === void 0) cancelable = false;

    if (isString(e)) {
      var event = document.createEvent('CustomEvent'); // IE 11

      event.initCustomEvent(e, bubbles, cancelable, detail);
      e = event;
    }

    return e;
  }

  function getArgs(args) {
    if (isFunction(args[2])) {
      args.splice(2, 0, false);
    }

    return args;
  }

  function delegate(delegates, selector, listener) {
    var this$1 = this;
    return function (e) {
      delegates.forEach(function (delegate) {
        var current = selector[0] === '>' ? findAll(selector, delegate).reverse().filter(function (element) {
          return within(e.target, element);
        })[0] : closest(e.target, selector);

        if (current) {
          e.delegate = delegate;
          e.current = current;
          listener.call(this$1, e);
        }
      });
    };
  }

  function detail(listener) {
    return function (e) {
      return isArray(e.detail) ? listener.apply(void 0, [e].concat(e.detail)) : listener(e);
    };
  }

  function selfFilter(listener) {
    return function (e) {
      if (e.target === e.currentTarget || e.target === e.current) {
        return listener.call(null, e);
      }
    };
  }

  function useCaptureFilter(options) {
    return options && isIE && !isBoolean(options) ? !!options.capture : options;
  }

  function isEventTarget(target) {
    return target && 'addEventListener' in target;
  }

  function toEventTarget(target) {
    return isEventTarget(target) ? target : toNode(target);
  }

  function toEventTargets(target) {
    return isArray(target) ? target.map(toEventTarget).filter(Boolean) : isString(target) ? findAll(target) : isEventTarget(target) ? [target] : toNodes(target);
  }

  function isTouch(e) {
    return e.pointerType === 'touch' || !!e.touches;
  }

  function getEventPos(e, prop) {
    if (prop === void 0) prop = 'client';
    var touches = e.touches;
    var changedTouches = e.changedTouches;
    var ref = touches && touches[0] || changedTouches && changedTouches[0] || e;
    var x = ref[prop + "X"];
    var y = ref[prop + "Y"];
    return {
      x: x,
      y: y
    };
  }
  /* global setImmediate */


  var Promise = 'Promise' in window ? window.Promise : PromiseFn;

  var Deferred = function Deferred() {
    var this$1 = this;
    this.promise = new Promise(function (resolve, reject) {
      this$1.reject = reject;
      this$1.resolve = resolve;
    });
  };
  /**
   * Promises/A+ polyfill v1.1.4 (https://github.com/bramstein/promis)
   */


  var RESOLVED = 0;
  var REJECTED = 1;
  var PENDING = 2;
  var async = 'setImmediate' in window ? setImmediate : setTimeout;

  function PromiseFn(executor) {
    this.state = PENDING;
    this.value = undefined;
    this.deferred = [];
    var promise = this;

    try {
      executor(function (x) {
        promise.resolve(x);
      }, function (r) {
        promise.reject(r);
      });
    } catch (e) {
      promise.reject(e);
    }
  }

  PromiseFn.reject = function (r) {
    return new PromiseFn(function (resolve, reject) {
      reject(r);
    });
  };

  PromiseFn.resolve = function (x) {
    return new PromiseFn(function (resolve, reject) {
      resolve(x);
    });
  };

  PromiseFn.all = function all(iterable) {
    return new PromiseFn(function (resolve, reject) {
      var result = [];
      var count = 0;

      if (iterable.length === 0) {
        resolve(result);
      }

      function resolver(i) {
        return function (x) {
          result[i] = x;
          count += 1;

          if (count === iterable.length) {
            resolve(result);
          }
        };
      }

      for (var i = 0; i < iterable.length; i += 1) {
        PromiseFn.resolve(iterable[i]).then(resolver(i), reject);
      }
    });
  };

  PromiseFn.race = function race(iterable) {
    return new PromiseFn(function (resolve, reject) {
      for (var i = 0; i < iterable.length; i += 1) {
        PromiseFn.resolve(iterable[i]).then(resolve, reject);
      }
    });
  };

  var p = PromiseFn.prototype;

  p.resolve = function resolve(x) {
    var promise = this;

    if (promise.state === PENDING) {
      if (x === promise) {
        throw new TypeError('Promise settled with itself.');
      }

      var called = false;

      try {
        var then = x && x.then;

        if (x !== null && isObject(x) && isFunction(then)) {
          then.call(x, function (x) {
            if (!called) {
              promise.resolve(x);
            }

            called = true;
          }, function (r) {
            if (!called) {
              promise.reject(r);
            }

            called = true;
          });
          return;
        }
      } catch (e) {
        if (!called) {
          promise.reject(e);
        }

        return;
      }

      promise.state = RESOLVED;
      promise.value = x;
      promise.notify();
    }
  };

  p.reject = function reject(reason) {
    var promise = this;

    if (promise.state === PENDING) {
      if (reason === promise) {
        throw new TypeError('Promise settled with itself.');
      }

      promise.state = REJECTED;
      promise.value = reason;
      promise.notify();
    }
  };

  p.notify = function notify() {
    var this$1 = this;
    async(function () {
      if (this$1.state !== PENDING) {
        while (this$1.deferred.length) {
          var ref = this$1.deferred.shift();
          var onResolved = ref[0];
          var onRejected = ref[1];
          var resolve = ref[2];
          var reject = ref[3];

          try {
            if (this$1.state === RESOLVED) {
              if (isFunction(onResolved)) {
                resolve(onResolved.call(undefined, this$1.value));
              } else {
                resolve(this$1.value);
              }
            } else if (this$1.state === REJECTED) {
              if (isFunction(onRejected)) {
                resolve(onRejected.call(undefined, this$1.value));
              } else {
                reject(this$1.value);
              }
            }
          } catch (e) {
            reject(e);
          }
        }
      }
    });
  };

  p.then = function then(onResolved, onRejected) {
    var this$1 = this;
    return new PromiseFn(function (resolve, reject) {
      this$1.deferred.push([onResolved, onRejected, resolve, reject]);
      this$1.notify();
    });
  };

  p["catch"] = function (onRejected) {
    return this.then(undefined, onRejected);
  };

  function ajax(url, options) {
    return new Promise(function (resolve, reject) {
      var env = assign({
        data: null,
        method: 'GET',
        headers: {},
        xhr: new XMLHttpRequest(),
        beforeSend: noop,
        responseType: ''
      }, options);
      env.beforeSend(env);
      var xhr = env.xhr;

      for (var prop in env) {
        if (prop in xhr) {
          try {
            xhr[prop] = env[prop];
          } catch (e) {}
        }
      }

      xhr.open(env.method.toUpperCase(), url);

      for (var header in env.headers) {
        xhr.setRequestHeader(header, env.headers[header]);
      }

      on(xhr, 'load', function () {
        if (xhr.status === 0 || xhr.status >= 200 && xhr.status < 300 || xhr.status === 304) {
          resolve(xhr);
        } else {
          reject(assign(Error(xhr.statusText), {
            xhr: xhr,
            status: xhr.status
          }));
        }
      });
      on(xhr, 'error', function () {
        return reject(assign(Error('Network Error'), {
          xhr: xhr
        }));
      });
      on(xhr, 'timeout', function () {
        return reject(assign(Error('Network Timeout'), {
          xhr: xhr
        }));
      });
      xhr.send(env.data);
    });
  }

  function getImage(src, srcset, sizes) {
    return new Promise(function (resolve, reject) {
      var img = new Image();
      img.onerror = reject;

      img.onload = function () {
        return resolve(img);
      };

      sizes && (img.sizes = sizes);
      srcset && (img.srcset = srcset);
      img.src = src;
    });
  }

  function ready(fn) {
    if (document.readyState !== 'loading') {
      fn();
      return;
    }

    var unbind = on(document, 'DOMContentLoaded', function () {
      unbind();
      fn();
    });
  }

  function _index(element, ref) {
    return ref ? toNodes(element).indexOf(toNode(ref)) : toNodes((element = toNode(element)) && element.parentNode.children).indexOf(element);
  }

  function _getIndex(i, elements, current, finite) {
    if (current === void 0) current = 0;
    if (finite === void 0) finite = false;
    elements = toNodes(elements);
    var length = elements.length;
    i = isNumeric(i) ? toNumber(i) : i === 'next' ? current + 1 : i === 'previous' ? current - 1 : _index(elements, i);

    if (finite) {
      return clamp(i, 0, length - 1);
    }

    i %= length;
    return i < 0 ? i + length : i;
  }

  function empty(element) {
    element = $(element);
    element.innerHTML = '';
    return element;
  }

  function html(parent, html) {
    parent = $(parent);
    return isUndefined(html) ? parent.innerHTML : append(parent.hasChildNodes() ? empty(parent) : parent, html);
  }

  function prepend(parent, element) {
    parent = $(parent);

    if (!parent.hasChildNodes()) {
      return append(parent, element);
    } else {
      return insertNodes(element, function (element) {
        return parent.insertBefore(element, parent.firstChild);
      });
    }
  }

  function append(parent, element) {
    parent = $(parent);
    return insertNodes(element, function (element) {
      return parent.appendChild(element);
    });
  }

  function before(ref, element) {
    ref = $(ref);
    return insertNodes(element, function (element) {
      return ref.parentNode.insertBefore(element, ref);
    });
  }

  function after(ref, element) {
    ref = $(ref);
    return insertNodes(element, function (element) {
      return ref.nextSibling ? before(ref.nextSibling, element) : append(ref.parentNode, element);
    });
  }

  function insertNodes(element, fn) {
    element = isString(element) ? fragment(element) : element;
    return element ? 'length' in element ? toNodes(element).map(fn) : fn(element) : null;
  }

  function _remove(element) {
    toNodes(element).map(function (element) {
      return element.parentNode && element.parentNode.removeChild(element);
    });
  }

  function wrapAll(element, structure) {
    structure = toNode(before(element, structure));

    while (structure.firstChild) {
      structure = structure.firstChild;
    }

    append(structure, element);
    return structure;
  }

  function wrapInner(element, structure) {
    return toNodes(toNodes(element).map(function (element) {
      return element.hasChildNodes ? wrapAll(toNodes(element.childNodes), structure) : append(element, structure);
    }));
  }

  function unwrap(element) {
    toNodes(element).map(function (element) {
      return element.parentNode;
    }).filter(function (value, index, self) {
      return self.indexOf(value) === index;
    }).forEach(function (parent) {
      before(parent, parent.childNodes);

      _remove(parent);
    });
  }

  var fragmentRe = /^\s*<(\w+|!)[^>]*>/;
  var singleTagRe = /^<(\w+)\s*\/?>(?:<\/\1>)?$/;

  function fragment(html) {
    var matches = singleTagRe.exec(html);

    if (matches) {
      return document.createElement(matches[1]);
    }

    var container = document.createElement('div');

    if (fragmentRe.test(html)) {
      container.insertAdjacentHTML('beforeend', html.trim());
    } else {
      container.textContent = html;
    }

    return container.childNodes.length > 1 ? toNodes(container.childNodes) : container.firstChild;
  }

  function apply(node, fn) {
    if (!node || node.nodeType !== 1) {
      return;
    }

    fn(node);
    node = node.firstElementChild;

    while (node) {
      apply(node, fn);
      node = node.nextElementSibling;
    }
  }

  function $(selector, context) {
    return !isString(selector) ? toNode(selector) : isHtml(selector) ? toNode(fragment(selector)) : find(selector, context);
  }

  function $$(selector, context) {
    return !isString(selector) ? toNodes(selector) : isHtml(selector) ? toNodes(fragment(selector)) : findAll(selector, context);
  }

  function isHtml(str) {
    return str[0] === '<' || str.match(/^\s*</);
  }

  function addClass(element) {
    var args = [],
        len = arguments.length - 1;

    while (len-- > 0) {
      args[len] = arguments[len + 1];
    }

    apply$1(element, args, 'add');
  }

  function removeClass(element) {
    var args = [],
        len = arguments.length - 1;

    while (len-- > 0) {
      args[len] = arguments[len + 1];
    }

    apply$1(element, args, 'remove');
  }

  function removeClasses(element, cls) {
    attr(element, 'class', function (value) {
      return (value || '').replace(new RegExp("\\b" + cls + "\\b", 'g'), '');
    });
  }

  function replaceClass(element) {
    var args = [],
        len = arguments.length - 1;

    while (len-- > 0) {
      args[len] = arguments[len + 1];
    }

    args[0] && removeClass(element, args[0]);
    args[1] && addClass(element, args[1]);
  }

  function hasClass(element, cls) {
    return cls && toNodes(element).some(function (element) {
      return element.classList.contains(cls.split(' ')[0]);
    });
  }

  function toggleClass(element) {
    var args = [],
        len = arguments.length - 1;

    while (len-- > 0) {
      args[len] = arguments[len + 1];
    }

    if (!args.length) {
      return;
    }

    args = getArgs$1(args);
    var force = !isString(last(args)) ? args.pop() : []; // in iOS 9.3 force === undefined evaluates to false

    args = args.filter(Boolean);
    toNodes(element).forEach(function (ref) {
      var classList = ref.classList;

      for (var i = 0; i < args.length; i++) {
        supports.Force ? classList.toggle.apply(classList, [args[i]].concat(force)) : classList[(!isUndefined(force) ? force : !classList.contains(args[i])) ? 'add' : 'remove'](args[i]);
      }
    });
  }

  function apply$1(element, args, fn) {
    args = getArgs$1(args).filter(Boolean);
    args.length && toNodes(element).forEach(function (ref) {
      var classList = ref.classList;
      supports.Multiple ? classList[fn].apply(classList, args) : args.forEach(function (cls) {
        return classList[fn](cls);
      });
    });
  }

  function getArgs$1(args) {
    return args.reduce(function (args, arg) {
      return args.concat.call(args, isString(arg) && includes(arg, ' ') ? arg.trim().split(' ') : arg);
    }, []);
  } // IE 11


  var supports = {
    get Multiple() {
      return this.get('_multiple');
    },

    get Force() {
      return this.get('_force');
    },

    get: function get(key) {
      if (!hasOwn(this, key)) {
        var ref = document.createElement('_');
        var classList = ref.classList;
        classList.add('a', 'b');
        classList.toggle('c', false);
        this._multiple = classList.contains('b');
        this._force = !classList.contains('c');
      }

      return this[key];
    }
  };
  var cssNumber = {
    'animation-iteration-count': true,
    'column-count': true,
    'fill-opacity': true,
    'flex-grow': true,
    'flex-shrink': true,
    'font-weight': true,
    'line-height': true,
    'opacity': true,
    'order': true,
    'orphans': true,
    'stroke-dasharray': true,
    'stroke-dashoffset': true,
    'widows': true,
    'z-index': true,
    'zoom': true
  };

  function css(element, property, value) {
    return toNodes(element).map(function (element) {
      if (isString(property)) {
        property = propName(property);

        if (isUndefined(value)) {
          return getStyle(element, property);
        } else if (!value && !isNumber(value)) {
          element.style.removeProperty(property);
        } else {
          element.style[property] = isNumeric(value) && !cssNumber[property] ? value + "px" : value;
        }
      } else if (isArray(property)) {
        var styles = getStyles(element);
        return property.reduce(function (props, property) {
          props[property] = styles[propName(property)];
          return props;
        }, {});
      } else if (isObject(property)) {
        each(property, function (value, property) {
          return css(element, property, value);
        });
      }

      return element;
    })[0];
  }

  function getStyles(element, pseudoElt) {
    element = toNode(element);
    return element.ownerDocument.defaultView.getComputedStyle(element, pseudoElt);
  }

  function getStyle(element, property, pseudoElt) {
    return getStyles(element, pseudoElt)[property];
  }

  var vars = {};

  function getCssVar(name) {
    var docEl = document.documentElement;

    if (!isIE) {
      return getStyles(docEl).getPropertyValue("--uk-" + name);
    }

    if (!(name in vars)) {
      /* usage in css: .uk-name:before { content:"xyz" } */
      var element = append(docEl, document.createElement('div'));
      addClass(element, "uk-" + name);
      vars[name] = getStyle(element, 'content', ':before').replace(/^["'](.*)["']$/, '$1');

      _remove(element);
    }

    return vars[name];
  }

  var cssProps = {};

  function propName(name) {
    var ret = cssProps[name];

    if (!ret) {
      ret = cssProps[name] = vendorPropName(name) || name;
    }

    return ret;
  }

  var cssPrefixes = ['webkit', 'moz', 'ms'];

  function vendorPropName(name) {
    name = hyphenate(name);
    var ref = document.documentElement;
    var style = ref.style;

    if (name in style) {
      return name;
    }

    var i = cssPrefixes.length,
        prefixedName;

    while (i--) {
      prefixedName = "-" + cssPrefixes[i] + "-" + name;

      if (prefixedName in style) {
        return prefixedName;
      }
    }
  }

  function transition(element, props, duration, timing) {
    if (duration === void 0) duration = 400;
    if (timing === void 0) timing = 'linear';
    return Promise.all(toNodes(element).map(function (element) {
      return new Promise(function (resolve, reject) {
        for (var name in props) {
          var value = css(element, name);

          if (value === '') {
            css(element, name, value);
          }
        }

        var timer = setTimeout(function () {
          return trigger(element, 'transitionend');
        }, duration);
        once(element, 'transitionend transitioncanceled', function (ref) {
          var type = ref.type;
          clearTimeout(timer);
          removeClass(element, 'uk-transition');
          css(element, {
            'transition-property': '',
            'transition-duration': '',
            'transition-timing-function': ''
          });
          type === 'transitioncanceled' ? reject() : resolve();
        }, {
          self: true
        });
        addClass(element, 'uk-transition');
        css(element, assign({
          'transition-property': Object.keys(props).map(propName).join(','),
          'transition-duration': duration + "ms",
          'transition-timing-function': timing
        }, props));
      });
    }));
  }

  var Transition = {
    start: transition,
    stop: function stop(element) {
      trigger(element, 'transitionend');
      return Promise.resolve();
    },
    cancel: function cancel(element) {
      trigger(element, 'transitioncanceled');
    },
    inProgress: function inProgress(element) {
      return hasClass(element, 'uk-transition');
    }
  };
  var animationPrefix = 'uk-animation-';
  var clsCancelAnimation = 'uk-cancel-animation';

  function animate(element, animation, duration, origin, out) {
    var arguments$1 = arguments;
    if (duration === void 0) duration = 200;
    return Promise.all(toNodes(element).map(function (element) {
      return new Promise(function (resolve, reject) {
        if (hasClass(element, clsCancelAnimation)) {
          requestAnimationFrame(function () {
            return Promise.resolve().then(function () {
              return animate.apply(void 0, arguments$1).then(resolve, reject);
            });
          });
          return;
        }

        var cls = animation + " " + animationPrefix + (out ? 'leave' : 'enter');

        if (startsWith(animation, animationPrefix)) {
          if (origin) {
            cls += " uk-transform-origin-" + origin;
          }

          if (out) {
            cls += " " + animationPrefix + "reverse";
          }
        }

        reset();
        once(element, 'animationend animationcancel', function (ref) {
          var type = ref.type;
          var hasReset = false;

          if (type === 'animationcancel') {
            reject();
            reset();
          } else {
            resolve();
            Promise.resolve().then(function () {
              hasReset = true;
              reset();
            });
          }

          requestAnimationFrame(function () {
            if (!hasReset) {
              addClass(element, clsCancelAnimation);
              requestAnimationFrame(function () {
                return removeClass(element, clsCancelAnimation);
              });
            }
          });
        }, {
          self: true
        });
        css(element, 'animationDuration', duration + "ms");
        addClass(element, cls);

        function reset() {
          css(element, 'animationDuration', '');
          removeClasses(element, animationPrefix + "\\S*");
        }
      });
    }));
  }

  var _inProgress = new RegExp(animationPrefix + "(enter|leave)");

  var Animation = {
    "in": function _in(element, animation, duration, origin) {
      return animate(element, animation, duration, origin, false);
    },
    out: function out(element, animation, duration, origin) {
      return animate(element, animation, duration, origin, true);
    },
    inProgress: function inProgress(element) {
      return _inProgress.test(attr(element, 'class'));
    },
    cancel: function cancel(element) {
      trigger(element, 'animationcancel');
    }
  };
  var dirs = {
    width: ['x', 'left', 'right'],
    height: ['y', 'top', 'bottom']
  };

  function _positionAt(element, target, elAttach, targetAttach, elOffset, targetOffset, flip, boundary) {
    elAttach = getPos(elAttach);
    targetAttach = getPos(targetAttach);
    var flipped = {
      element: elAttach,
      target: targetAttach
    };

    if (!element || !target) {
      return flipped;
    }

    var dim = getDimensions(element);
    var targetDim = getDimensions(target);
    var position = targetDim;
    moveTo(position, elAttach, dim, -1);
    moveTo(position, targetAttach, targetDim, 1);
    elOffset = getOffsets(elOffset, dim.width, dim.height);
    targetOffset = getOffsets(targetOffset, targetDim.width, targetDim.height);
    elOffset['x'] += targetOffset['x'];
    elOffset['y'] += targetOffset['y'];
    position.left += elOffset['x'];
    position.top += elOffset['y'];

    if (flip) {
      var boundaries = [getDimensions(getWindow(element))];

      if (boundary) {
        boundaries.unshift(getDimensions(boundary));
      }

      each(dirs, function (ref, prop) {
        var dir = ref[0];
        var align = ref[1];
        var alignFlip = ref[2];

        if (!(flip === true || includes(flip, dir))) {
          return;
        }

        boundaries.some(function (boundary) {
          var elemOffset = elAttach[dir] === align ? -dim[prop] : elAttach[dir] === alignFlip ? dim[prop] : 0;
          var targetOffset = targetAttach[dir] === align ? targetDim[prop] : targetAttach[dir] === alignFlip ? -targetDim[prop] : 0;

          if (position[align] < boundary[align] || position[align] + dim[prop] > boundary[alignFlip]) {
            var centerOffset = dim[prop] / 2;
            var centerTargetOffset = targetAttach[dir] === 'center' ? -targetDim[prop] / 2 : 0;
            return elAttach[dir] === 'center' && (apply(centerOffset, centerTargetOffset) || apply(-centerOffset, -centerTargetOffset)) || apply(elemOffset, targetOffset);
          }

          function apply(elemOffset, targetOffset) {
            var newVal = position[align] + elemOffset + targetOffset - elOffset[dir] * 2;

            if (newVal >= boundary[align] && newVal + dim[prop] <= boundary[alignFlip]) {
              position[align] = newVal;
              ['element', 'target'].forEach(function (el) {
                flipped[el][dir] = !elemOffset ? flipped[el][dir] : flipped[el][dir] === dirs[prop][1] ? dirs[prop][2] : dirs[prop][1];
              });
              return true;
            }
          }
        });
      });
    }

    offset(element, position);
    return flipped;
  }

  function offset(element, coordinates) {
    element = toNode(element);

    if (coordinates) {
      var currentOffset = offset(element);
      var pos = css(element, 'position');
      ['left', 'top'].forEach(function (prop) {
        if (prop in coordinates) {
          var value = css(element, prop);
          css(element, prop, coordinates[prop] - currentOffset[prop] + toFloat(pos === 'absolute' && value === 'auto' ? position(element)[prop] : value));
        }
      });
      return;
    }

    return getDimensions(element);
  }

  function getDimensions(element) {
    element = toNode(element);

    if (!element) {
      return {};
    }

    var ref = getWindow(element);
    var top = ref.pageYOffset;
    var left = ref.pageXOffset;

    if (isWindow(element)) {
      var height = element.innerHeight;
      var width = element.innerWidth;
      return {
        top: top,
        left: left,
        height: height,
        width: width,
        bottom: top + height,
        right: left + width
      };
    }

    var style, hidden;

    if (!isVisible(element) && css(element, 'display') === 'none') {
      style = attr(element, 'style');
      hidden = attr(element, 'hidden');
      attr(element, {
        style: (style || '') + ";display:block !important;",
        hidden: null
      });
    }

    var rect = element.getBoundingClientRect();

    if (!isUndefined(style)) {
      attr(element, {
        style: style,
        hidden: hidden
      });
    }

    return {
      height: rect.height,
      width: rect.width,
      top: rect.top + top,
      left: rect.left + left,
      bottom: rect.bottom + top,
      right: rect.right + left
    };
  }

  function position(element) {
    element = toNode(element);
    var parent = element.offsetParent || getDocEl(element);
    var parentOffset = offset(parent);
    var ref = ['top', 'left'].reduce(function (props, prop) {
      var propName = ucfirst(prop);
      props[prop] -= parentOffset[prop] + toFloat(css(element, "margin" + propName)) + toFloat(css(parent, "border" + propName + "Width"));
      return props;
    }, offset(element));
    var top = ref.top;
    var left = ref.left;
    return {
      top: top,
      left: left
    };
  }

  var height = dimension('height');
  var width = dimension('width');

  function dimension(prop) {
    var propName = ucfirst(prop);
    return function (element, value) {
      element = toNode(element);

      if (isUndefined(value)) {
        if (isWindow(element)) {
          return element["inner" + propName];
        }

        if (isDocument(element)) {
          var doc = element.documentElement;
          return Math.max(doc["offset" + propName], doc["scroll" + propName]);
        }

        value = css(element, prop);
        value = value === 'auto' ? element["offset" + propName] : toFloat(value) || 0;
        return value - boxModelAdjust(prop, element);
      } else {
        css(element, prop, !value && value !== 0 ? '' : +value + boxModelAdjust(prop, element) + 'px');
      }
    };
  }

  function boxModelAdjust(prop, element, sizing) {
    if (sizing === void 0) sizing = 'border-box';
    return css(element, 'boxSizing') === sizing ? dirs[prop].slice(1).map(ucfirst).reduce(function (value, prop) {
      return value + toFloat(css(element, "padding" + prop)) + toFloat(css(element, "border" + prop + "Width"));
    }, 0) : 0;
  }

  function moveTo(position, attach, dim, factor) {
    each(dirs, function (ref, prop) {
      var dir = ref[0];
      var align = ref[1];
      var alignFlip = ref[2];

      if (attach[dir] === alignFlip) {
        position[align] += dim[prop] * factor;
      } else if (attach[dir] === 'center') {
        position[align] += dim[prop] * factor / 2;
      }
    });
  }

  function getPos(pos) {
    var x = /left|center|right/;
    var y = /top|center|bottom/;
    pos = (pos || '').split(' ');

    if (pos.length === 1) {
      pos = x.test(pos[0]) ? pos.concat(['center']) : y.test(pos[0]) ? ['center'].concat(pos) : ['center', 'center'];
    }

    return {
      x: x.test(pos[0]) ? pos[0] : 'center',
      y: y.test(pos[1]) ? pos[1] : 'center'
    };
  }

  function getOffsets(offsets, width, height) {
    var ref = (offsets || '').split(' ');
    var x = ref[0];
    var y = ref[1];
    return {
      x: x ? toFloat(x) * (endsWith(x, '%') ? width / 100 : 1) : 0,
      y: y ? toFloat(y) * (endsWith(y, '%') ? height / 100 : 1) : 0
    };
  }

  function flipPosition(pos) {
    switch (pos) {
      case 'left':
        return 'right';

      case 'right':
        return 'left';

      case 'top':
        return 'bottom';

      case 'bottom':
        return 'top';

      default:
        return pos;
    }
  }

  function isInView(element, topOffset, leftOffset) {
    if (topOffset === void 0) topOffset = 0;
    if (leftOffset === void 0) leftOffset = 0;

    if (!isVisible(element)) {
      return false;
    }

    element = toNode(element);
    var win = getWindow(element);
    var client = element.getBoundingClientRect();
    var bounding = {
      top: -topOffset,
      left: -leftOffset,
      bottom: topOffset + height(win),
      right: leftOffset + width(win)
    };
    return intersectRect(client, bounding) || pointInRect({
      x: client.left,
      y: client.top
    }, bounding);
  }

  function scrolledOver(element, heightOffset) {
    if (heightOffset === void 0) heightOffset = 0;

    if (!isVisible(element)) {
      return 0;
    }

    element = toNode(element);
    var win = getWindow(element);
    var doc = getDocument(element);
    var elHeight = element.offsetHeight + heightOffset;
    var ref = offsetPosition(element);
    var top = ref[0];
    var vp = height(win);
    var vh = vp + Math.min(0, top - vp);
    var diff = Math.max(0, vp - (height(doc) + heightOffset - (top + elHeight)));
    return clamp((vh + win.pageYOffset - top) / ((vh + (elHeight - (diff < vp ? diff : 0))) / 100) / 100);
  }

  function scrollTop(element, top) {
    element = toNode(element);

    if (isWindow(element) || isDocument(element)) {
      var ref = getWindow(element);
      var scrollTo = ref.scrollTo;
      var pageXOffset = ref.pageXOffset;
      scrollTo(pageXOffset, top);
    } else {
      element.scrollTop = top;
    }
  }

  function offsetPosition(element) {
    var offset = [0, 0];

    do {
      offset[0] += element.offsetTop;
      offset[1] += element.offsetLeft;

      if (css(element, 'position') === 'fixed') {
        var win = getWindow(element);
        offset[0] += win.pageYOffset;
        offset[1] += win.pageXOffset;
        return offset;
      }
    } while (element = element.offsetParent);

    return offset;
  }

  function toPx(value, property, element) {
    if (property === void 0) property = 'width';
    if (element === void 0) element = window;
    return isNumeric(value) ? +value : endsWith(value, 'vh') ? percent(height(getWindow(element)), value) : endsWith(value, 'vw') ? percent(width(getWindow(element)), value) : endsWith(value, '%') ? percent(getDimensions(element)[property], value) : toFloat(value);
  }

  function percent(base, value) {
    return base * toFloat(value) / 100;
  }

  function getWindow(element) {
    return isWindow(element) ? element : getDocument(element).defaultView;
  }

  function getDocument(element) {
    return toNode(element).ownerDocument;
  }

  function getDocEl(element) {
    return getDocument(element).documentElement;
  }
  /*
      Based on:
      Copyright (c) 2016 Wilson Page wilsonpage@me.com
      https://github.com/wilsonpage/fastdom
  */


  var fastdom = {
    reads: [],
    writes: [],
    read: function read(task) {
      this.reads.push(task);
      scheduleFlush();
      return task;
    },
    write: function write(task) {
      this.writes.push(task);
      scheduleFlush();
      return task;
    },
    clear: function clear(task) {
      return remove$1(this.reads, task) || remove$1(this.writes, task);
    },
    flush: flush
  };

  function flush() {
    runTasks(fastdom.reads);
    runTasks(fastdom.writes.splice(0, fastdom.writes.length));
    fastdom.scheduled = false;

    if (fastdom.reads.length || fastdom.writes.length) {
      scheduleFlush(true);
    }
  }

  function scheduleFlush(microtask) {
    if (microtask === void 0) microtask = false;

    if (!fastdom.scheduled) {
      fastdom.scheduled = true;

      if (microtask) {
        Promise.resolve().then(flush);
      } else {
        requestAnimationFrame(flush);
      }
    }
  }

  function runTasks(tasks) {
    var task;

    while (task = tasks.shift()) {
      task();
    }
  }

  function remove$1(array, item) {
    var index = array.indexOf(item);
    return !!~index && !!array.splice(index, 1);
  }

  function MouseTracker() {}

  MouseTracker.prototype = {
    positions: [],
    position: null,
    init: function init() {
      var this$1 = this;
      this.positions = [];
      this.position = null;
      var ticking = false;
      this.unbind = on(document, 'mousemove', function (e) {
        if (ticking) {
          return;
        }

        setTimeout(function () {
          var time = Date.now();
          var ref = this$1.positions;
          var length = ref.length;

          if (length && time - this$1.positions[length - 1].time > 100) {
            this$1.positions.splice(0, length);
          }

          this$1.positions.push({
            time: time,
            x: e.pageX,
            y: e.pageY
          });

          if (this$1.positions.length > 5) {
            this$1.positions.shift();
          }

          ticking = false;
        }, 5);
        ticking = true;
      });
    },
    cancel: function cancel() {
      if (this.unbind) {
        this.unbind();
      }
    },
    movesTo: function movesTo(target) {
      if (this.positions.length < 2) {
        return false;
      }

      var p = offset(target);
      var position = last(this.positions);
      var ref = this.positions;
      var prevPos = ref[0];

      if (p.left <= position.x && position.x <= p.right && p.top <= position.y && position.y <= p.bottom) {
        return false;
      }

      var points = [[{
        x: p.left,
        y: p.top
      }, {
        x: p.right,
        y: p.bottom
      }], [{
        x: p.right,
        y: p.top
      }, {
        x: p.left,
        y: p.bottom
      }]];
      if (p.right <= position.x) ;else if (p.left >= position.x) {
        points[0].reverse();
        points[1].reverse();
      } else if (p.bottom <= position.y) {
        points[0].reverse();
      } else if (p.top >= position.y) {
        points[1].reverse();
      }
      return !!points.reduce(function (result, point) {
        return result + (slope(prevPos, point[0]) < slope(position, point[0]) && slope(prevPos, point[1]) > slope(position, point[1]));
      }, 0);
    }
  };

  function slope(a, b) {
    return (b.y - a.y) / (b.x - a.x);
  }

  var strats = {};
  strats.events = strats.created = strats.beforeConnect = strats.connected = strats.beforeDisconnect = strats.disconnected = strats.destroy = concatStrat; // args strategy

  strats.args = function (parentVal, childVal) {
    return childVal !== false && concatStrat(childVal || parentVal);
  }; // update strategy


  strats.update = function (parentVal, childVal) {
    return sortBy(concatStrat(parentVal, isFunction(childVal) ? {
      read: childVal
    } : childVal), 'order');
  }; // property strategy


  strats.props = function (parentVal, childVal) {
    if (isArray(childVal)) {
      childVal = childVal.reduce(function (value, key) {
        value[key] = String;
        return value;
      }, {});
    }

    return strats.methods(parentVal, childVal);
  }; // extend strategy


  strats.computed = strats.methods = function (parentVal, childVal) {
    return childVal ? parentVal ? assign({}, parentVal, childVal) : childVal : parentVal;
  }; // data strategy


  strats.data = function (parentVal, childVal, vm) {
    if (!vm) {
      if (!childVal) {
        return parentVal;
      }

      if (!parentVal) {
        return childVal;
      }

      return function (vm) {
        return mergeFnData(parentVal, childVal, vm);
      };
    }

    return mergeFnData(parentVal, childVal, vm);
  };

  function mergeFnData(parentVal, childVal, vm) {
    return strats.computed(isFunction(parentVal) ? parentVal.call(vm, vm) : parentVal, isFunction(childVal) ? childVal.call(vm, vm) : childVal);
  } // concat strategy


  function concatStrat(parentVal, childVal) {
    parentVal = parentVal && !isArray(parentVal) ? [parentVal] : parentVal;
    return childVal ? parentVal ? parentVal.concat(childVal) : isArray(childVal) ? childVal : [childVal] : parentVal;
  } // default strategy


  function defaultStrat(parentVal, childVal) {
    return isUndefined(childVal) ? parentVal : childVal;
  }

  function mergeOptions(parent, child, vm) {
    var options = {};

    if (isFunction(child)) {
      child = child.options;
    }

    if (child["extends"]) {
      parent = mergeOptions(parent, child["extends"], vm);
    }

    if (child.mixins) {
      for (var i = 0, l = child.mixins.length; i < l; i++) {
        parent = mergeOptions(parent, child.mixins[i], vm);
      }
    }

    for (var key in parent) {
      mergeKey(key);
    }

    for (var key$1 in child) {
      if (!hasOwn(parent, key$1)) {
        mergeKey(key$1);
      }
    }

    function mergeKey(key) {
      options[key] = (strats[key] || defaultStrat)(parent[key], child[key], vm);
    }

    return options;
  }

  function parseOptions(options, args) {
    var obj;
    if (args === void 0) args = [];

    try {
      return !options ? {} : startsWith(options, '{') ? JSON.parse(options) : args.length && !includes(options, ':') ? (obj = {}, obj[args[0]] = options, obj) : options.split(';').reduce(function (options, option) {
        var ref = option.split(/:(.*)/);
        var key = ref[0];
        var value = ref[1];

        if (key && !isUndefined(value)) {
          options[key.trim()] = value.trim();
        }

        return options;
      }, {});
    } catch (e) {
      return {};
    }
  }

  var id = 0;

  var Player = function Player(el) {
    this.id = ++id;
    this.el = toNode(el);
  };

  Player.prototype.isVideo = function () {
    return this.isYoutube() || this.isVimeo() || this.isHTML5();
  };

  Player.prototype.isHTML5 = function () {
    return this.el.tagName === 'VIDEO';
  };

  Player.prototype.isIFrame = function () {
    return this.el.tagName === 'IFRAME';
  };

  Player.prototype.isYoutube = function () {
    return this.isIFrame() && !!this.el.src.match(/\/\/.*?youtube(-nocookie)?\.[a-z]+\/(watch\?v=[^&\s]+|embed)|youtu\.be\/.*/);
  };

  Player.prototype.isVimeo = function () {
    return this.isIFrame() && !!this.el.src.match(/vimeo\.com\/video\/.*/);
  };

  Player.prototype.enableApi = function () {
    var this$1 = this;

    if (this.ready) {
      return this.ready;
    }

    var youtube = this.isYoutube();
    var vimeo = this.isVimeo();
    var poller;

    if (youtube || vimeo) {
      return this.ready = new Promise(function (resolve) {
        once(this$1.el, 'load', function () {
          if (youtube) {
            var listener = function listener() {
              return post(this$1.el, {
                event: 'listening',
                id: this$1.id
              });
            };

            poller = setInterval(listener, 100);
            listener();
          }
        });
        listen(function (data) {
          return youtube && data.id === this$1.id && data.event === 'onReady' || vimeo && Number(data.player_id) === this$1.id;
        }).then(function () {
          resolve();
          poller && clearInterval(poller);
        });
        attr(this$1.el, 'src', "" + this$1.el.src + (includes(this$1.el.src, '?') ? '&' : '?') + (youtube ? 'enablejsapi=1' : "api=1&player_id=" + this$1.id));
      });
    }

    return Promise.resolve();
  };

  Player.prototype.play = function () {
    var this$1 = this;

    if (!this.isVideo()) {
      return;
    }

    if (this.isIFrame()) {
      this.enableApi().then(function () {
        return post(this$1.el, {
          func: 'playVideo',
          method: 'play'
        });
      });
    } else if (this.isHTML5()) {
      try {
        var promise = this.el.play();

        if (promise) {
          promise["catch"](noop);
        }
      } catch (e) {}
    }
  };

  Player.prototype.pause = function () {
    var this$1 = this;

    if (!this.isVideo()) {
      return;
    }

    if (this.isIFrame()) {
      this.enableApi().then(function () {
        return post(this$1.el, {
          func: 'pauseVideo',
          method: 'pause'
        });
      });
    } else if (this.isHTML5()) {
      this.el.pause();
    }
  };

  Player.prototype.mute = function () {
    var this$1 = this;

    if (!this.isVideo()) {
      return;
    }

    if (this.isIFrame()) {
      this.enableApi().then(function () {
        return post(this$1.el, {
          func: 'mute',
          method: 'setVolume',
          value: 0
        });
      });
    } else if (this.isHTML5()) {
      this.el.muted = true;
      attr(this.el, 'muted', '');
    }
  };

  function post(el, cmd) {
    try {
      el.contentWindow.postMessage(JSON.stringify(assign({
        event: 'command'
      }, cmd)), '*');
    } catch (e) {}
  }

  function listen(cb) {
    return new Promise(function (resolve) {
      once(window, 'message', function (_, data) {
        return resolve(data);
      }, false, function (ref) {
        var data = ref.data;

        if (!data || !isString(data)) {
          return;
        }

        try {
          data = JSON.parse(data);
        } catch (e) {
          return;
        }

        return data && cb(data);
      });
    });
  }

  var IntersectionObserver = 'IntersectionObserver' in window ? window.IntersectionObserver : /*@__PURE__*/function () {
    function IntersectionObserverClass(callback, ref) {
      var this$1 = this;
      if (ref === void 0) ref = {};
      var rootMargin = ref.rootMargin;
      if (rootMargin === void 0) rootMargin = '0 0';
      this.targets = [];
      var ref$1 = (rootMargin || '0 0').split(' ').map(toFloat);
      var offsetTop = ref$1[0];
      var offsetLeft = ref$1[1];
      this.offsetTop = offsetTop;
      this.offsetLeft = offsetLeft;
      var pending;

      this.apply = function () {
        if (pending) {
          return;
        }

        pending = requestAnimationFrame(function () {
          return setTimeout(function () {
            var records = this$1.takeRecords();

            if (records.length) {
              callback(records, this$1);
            }

            pending = false;
          });
        });
      };

      this.off = on(window, 'scroll resize load', this.apply, {
        passive: true,
        capture: true
      });
    }

    IntersectionObserverClass.prototype.takeRecords = function () {
      var this$1 = this;
      return this.targets.filter(function (entry) {
        var inView = isInView(entry.target, this$1.offsetTop, this$1.offsetLeft);

        if (entry.isIntersecting === null || inView ^ entry.isIntersecting) {
          entry.isIntersecting = inView;
          return true;
        }
      });
    };

    IntersectionObserverClass.prototype.observe = function (target) {
      this.targets.push({
        target: target,
        isIntersecting: null
      });
      this.apply();
    };

    IntersectionObserverClass.prototype.disconnect = function () {
      this.targets = [];
      this.off();
    };

    return IntersectionObserverClass;
  }();
  var util = /*#__PURE__*/Object.freeze({
    ajax: ajax,
    getImage: getImage,
    transition: transition,
    Transition: Transition,
    animate: animate,
    Animation: Animation,
    attr: attr,
    hasAttr: hasAttr,
    removeAttr: removeAttr,
    data: data,
    addClass: addClass,
    removeClass: removeClass,
    removeClasses: removeClasses,
    replaceClass: replaceClass,
    hasClass: hasClass,
    toggleClass: toggleClass,
    positionAt: _positionAt,
    offset: offset,
    position: position,
    height: height,
    width: width,
    boxModelAdjust: boxModelAdjust,
    flipPosition: flipPosition,
    isInView: isInView,
    scrolledOver: scrolledOver,
    scrollTop: scrollTop,
    offsetPosition: offsetPosition,
    toPx: toPx,
    ready: ready,
    index: _index,
    getIndex: _getIndex,
    empty: empty,
    html: html,
    prepend: prepend,
    append: append,
    before: before,
    after: after,
    remove: _remove,
    wrapAll: wrapAll,
    wrapInner: wrapInner,
    unwrap: unwrap,
    fragment: fragment,
    apply: apply,
    $: $,
    $$: $$,
    isIE: isIE,
    isRtl: isRtl,
    hasTouch: hasTouch,
    pointerDown: pointerDown,
    pointerMove: pointerMove,
    pointerUp: pointerUp,
    pointerEnter: pointerEnter,
    pointerLeave: pointerLeave,
    pointerCancel: pointerCancel,
    on: on,
    off: off,
    once: once,
    trigger: trigger,
    createEvent: createEvent,
    toEventTargets: toEventTargets,
    isTouch: isTouch,
    getEventPos: getEventPos,
    fastdom: fastdom,
    isVoidElement: isVoidElement,
    isVisible: isVisible,
    selInput: selInput,
    isInput: isInput,
    filter: filter,
    within: within,
    hasOwn: hasOwn,
    hyphenate: hyphenate,
    camelize: camelize,
    ucfirst: ucfirst,
    startsWith: startsWith,
    endsWith: endsWith,
    includes: includes,
    findIndex: findIndex,
    isArray: isArray,
    isFunction: isFunction,
    isObject: isObject,
    isPlainObject: isPlainObject,
    isWindow: isWindow,
    isDocument: isDocument,
    isJQuery: isJQuery,
    isNode: isNode,
    isNodeCollection: isNodeCollection,
    isBoolean: isBoolean,
    isString: isString,
    isNumber: isNumber,
    isNumeric: isNumeric,
    isEmpty: isEmpty,
    isUndefined: isUndefined,
    toBoolean: toBoolean,
    toNumber: toNumber,
    toFloat: toFloat,
    toNode: toNode,
    toNodes: toNodes,
    toList: toList,
    toMs: toMs,
    isEqual: isEqual,
    swap: swap,
    assign: assign,
    last: last,
    each: each,
    sortBy: sortBy,
    uniqueBy: uniqueBy,
    clamp: clamp,
    noop: noop,
    intersectRect: intersectRect,
    pointInRect: pointInRect,
    Dimensions: Dimensions,
    MouseTracker: MouseTracker,
    mergeOptions: mergeOptions,
    parseOptions: parseOptions,
    Player: Player,
    Promise: Promise,
    Deferred: Deferred,
    IntersectionObserver: IntersectionObserver,
    query: query,
    queryAll: queryAll,
    find: find,
    findAll: findAll,
    matches: matches,
    closest: closest,
    parents: parents,
    escape: escape,
    css: css,
    getStyles: getStyles,
    getStyle: getStyle,
    getCssVar: getCssVar,
    propName: propName
  });

  function componentAPI(UIkit) {
    var DATA = UIkit.data;
    var components = {};

    UIkit.component = function (name, options) {
      if (!options) {
        if (isPlainObject(components[name])) {
          components[name] = UIkit.extend(components[name]);
        }

        return components[name];
      }

      UIkit[name] = function (element, data) {
        var i = arguments.length,
            argsArray = Array(i);

        while (i--) {
          argsArray[i] = arguments[i];
        }

        var component = UIkit.component(name);

        if (isPlainObject(element)) {
          return new component({
            data: element
          });
        }

        if (component.options.functional) {
          return new component({
            data: [].concat(argsArray)
          });
        }

        return element && element.nodeType ? init(element) : $$(element).map(init)[0];

        function init(element) {
          var instance = UIkit.getComponent(element, name);

          if (instance) {
            if (!data) {
              return instance;
            } else {
              instance.$destroy();
            }
          }

          return new component({
            el: element,
            data: data
          });
        }
      };

      var opt = isPlainObject(options) ? assign({}, options) : options.options;
      opt.name = name;

      if (opt.install) {
        opt.install(UIkit, opt, name);
      }

      if (UIkit._initialized && !opt.functional) {
        var id = hyphenate(name);
        fastdom.read(function () {
          return UIkit[name]("[uk-" + id + "],[data-uk-" + id + "]");
        });
      }

      return components[name] = isPlainObject(options) ? opt : options;
    };

    UIkit.getComponents = function (element) {
      return element && element[DATA] || {};
    };

    UIkit.getComponent = function (element, name) {
      return UIkit.getComponents(element)[name];
    };

    UIkit.connect = function (node) {
      if (node[DATA]) {
        for (var name in node[DATA]) {
          node[DATA][name]._callConnected();
        }
      }

      for (var i = 0; i < node.attributes.length; i++) {
        var name$1 = getComponentName(node.attributes[i].name);

        if (name$1 && name$1 in components) {
          UIkit[name$1](node);
        }
      }
    };

    UIkit.disconnect = function (node) {
      for (var name in node[DATA]) {
        node[DATA][name]._callDisconnected();
      }
    };
  }

  function getComponentName(attribute) {
    return startsWith(attribute, 'uk-') || startsWith(attribute, 'data-uk-') ? camelize(attribute.replace('data-uk-', '').replace('uk-', '')) : false;
  }

  function boot(UIkit) {
    var connect = UIkit.connect;
    var disconnect = UIkit.disconnect;

    if (!('MutationObserver' in window)) {
      return;
    }

    if (document.body) {
      fastdom.read(init);
    } else {
      new MutationObserver(function () {
        if (document.body) {
          this.disconnect();
          init();
        }
      }).observe(document, {
        childList: true,
        subtree: true
      });
    }

    function init() {
      apply(document.body, connect); // Safari renders prior to first animation frame

      fastdom.flush();
      new MutationObserver(function (mutations) {
        return mutations.forEach(applyMutation);
      }).observe(document, {
        childList: true,
        subtree: true,
        characterData: true,
        attributes: true
      });
      UIkit._initialized = true;
    }

    function applyMutation(mutation) {
      var target = mutation.target;
      var type = mutation.type;
      var update = type !== 'attributes' ? applyChildList(mutation) : applyAttribute(mutation);
      update && UIkit.update(target);
    }

    function applyAttribute(ref) {
      var target = ref.target;
      var attributeName = ref.attributeName;

      if (attributeName === 'href') {
        return true;
      }

      var name = getComponentName(attributeName);

      if (!name || !(name in UIkit)) {
        return;
      }

      if (hasAttr(target, attributeName)) {
        UIkit[name](target);
        return true;
      }

      var component = UIkit.getComponent(target, name);

      if (component) {
        component.$destroy();
        return true;
      }
    }

    function applyChildList(ref) {
      var addedNodes = ref.addedNodes;
      var removedNodes = ref.removedNodes;

      for (var i = 0; i < addedNodes.length; i++) {
        apply(addedNodes[i], connect);
      }

      for (var i$1 = 0; i$1 < removedNodes.length; i$1++) {
        apply(removedNodes[i$1], disconnect);
      }

      return true;
    }

    function apply(node, fn) {
      if (node.nodeType !== 1 || hasAttr(node, 'uk-no-boot')) {
        return;
      }

      fn(node);
      node = node.firstElementChild;

      while (node) {
        var next = node.nextElementSibling;
        apply(node, fn);
        node = next;
      }
    }
  }

  function globalAPI(UIkit) {
    var DATA = UIkit.data;

    UIkit.use = function (plugin) {
      if (plugin.installed) {
        return;
      }

      plugin.call(null, this);
      plugin.installed = true;
      return this;
    };

    UIkit.mixin = function (mixin, component) {
      component = (isString(component) ? UIkit.component(component) : component) || this;
      component.options = mergeOptions(component.options, mixin);
    };

    UIkit.extend = function (options) {
      options = options || {};
      var Super = this;

      var Sub = function UIkitComponent(options) {
        this._init(options);
      };

      Sub.prototype = Object.create(Super.prototype);
      Sub.prototype.constructor = Sub;
      Sub.options = mergeOptions(Super.options, options);
      Sub["super"] = Super;
      Sub.extend = Super.extend;
      return Sub;
    };

    UIkit.update = function (element, e) {
      element = element ? toNode(element) : document.body;
      path(element, function (element) {
        return update(element[DATA], e);
      });
      apply(element, function (element) {
        return update(element[DATA], e);
      });
    };

    var container;
    Object.defineProperty(UIkit, 'container', {
      get: function get() {
        return container || document.body;
      },
      set: function set(element) {
        container = $(element);
      }
    });

    function update(data, e) {
      if (!data) {
        return;
      }

      for (var name in data) {
        if (data[name]._connected) {
          data[name]._callUpdate(e);
        }
      }
    }

    function path(node, fn) {
      if (node && node !== document.body && node.parentNode) {
        path(node.parentNode, fn);
        fn(node.parentNode);
      }
    }
  }

  function hooksAPI(UIkit) {
    UIkit.prototype._callHook = function (hook) {
      var this$1 = this;
      var handlers = this.$options[hook];

      if (handlers) {
        handlers.forEach(function (handler) {
          return handler.call(this$1);
        });
      }
    };

    UIkit.prototype._callConnected = function () {
      if (this._connected) {
        return;
      }

      this._data = {};
      this._computeds = {};

      this._initProps();

      this._callHook('beforeConnect');

      this._connected = true;

      this._initEvents();

      this._initObserver();

      this._callHook('connected');

      this._callUpdate();
    };

    UIkit.prototype._callDisconnected = function () {
      if (!this._connected) {
        return;
      }

      this._callHook('beforeDisconnect');

      if (this._observer) {
        this._observer.disconnect();

        this._observer = null;
      }

      this._unbindEvents();

      this._callHook('disconnected');

      this._connected = false;
    };

    UIkit.prototype._callUpdate = function (e) {
      var this$1 = this;
      if (e === void 0) e = 'update';
      var type = e.type || e;

      if (includes(['update', 'resize'], type)) {
        this._callWatches();
      }

      var updates = this.$options.update;
      var ref = this._frames;
      var reads = ref.reads;
      var writes = ref.writes;

      if (!updates) {
        return;
      }

      updates.forEach(function (ref, i) {
        var read = ref.read;
        var write = ref.write;
        var events = ref.events;

        if (type !== 'update' && !includes(events, type)) {
          return;
        }

        if (read && !includes(fastdom.reads, reads[i])) {
          reads[i] = fastdom.read(function () {
            var result = this$1._connected && read.call(this$1, this$1._data, type);

            if (result === false && write) {
              fastdom.clear(writes[i]);
            } else if (isPlainObject(result)) {
              assign(this$1._data, result);
            }
          });
        }

        if (write && !includes(fastdom.writes, writes[i])) {
          writes[i] = fastdom.write(function () {
            return this$1._connected && write.call(this$1, this$1._data, type);
          });
        }
      });
    };
  }

  function stateAPI(UIkit) {
    var uid = 0;

    UIkit.prototype._init = function (options) {
      options = options || {};
      options.data = normalizeData(options, this.constructor.options);
      this.$options = mergeOptions(this.constructor.options, options, this);
      this.$el = null;
      this.$props = {};
      this._frames = {
        reads: {},
        writes: {}
      };
      this._events = [];
      this._uid = uid++;

      this._initData();

      this._initMethods();

      this._initComputeds();

      this._callHook('created');

      if (options.el) {
        this.$mount(options.el);
      }
    };

    UIkit.prototype._initData = function () {
      var ref = this.$options;
      var data = ref.data;
      if (data === void 0) data = {};

      for (var key in data) {
        this.$props[key] = this[key] = data[key];
      }
    };

    UIkit.prototype._initMethods = function () {
      var ref = this.$options;
      var methods = ref.methods;

      if (methods) {
        for (var key in methods) {
          this[key] = methods[key].bind(this);
        }
      }
    };

    UIkit.prototype._initComputeds = function () {
      var ref = this.$options;
      var computed = ref.computed;
      this._computeds = {};

      if (computed) {
        for (var key in computed) {
          registerComputed(this, key, computed[key]);
        }
      }
    };

    UIkit.prototype._callWatches = function () {
      var ref = this;
      var computed = ref.$options.computed;
      var _computeds = ref._computeds;

      for (var key in _computeds) {
        var value = _computeds[key];
        delete _computeds[key];

        if (computed[key].watch && !isEqual(value, this[key])) {
          computed[key].watch.call(this, this[key], value);
        }
      }
    };

    UIkit.prototype._initProps = function (props) {
      var key;
      props = props || getProps(this.$options, this.$name);

      for (key in props) {
        if (!isUndefined(props[key])) {
          this.$props[key] = props[key];
        }
      }

      var exclude = [this.$options.computed, this.$options.methods];

      for (key in this.$props) {
        if (key in props && notIn(exclude, key)) {
          this[key] = this.$props[key];
        }
      }
    };

    UIkit.prototype._initEvents = function () {
      var this$1 = this;
      var ref = this.$options;
      var events = ref.events;

      if (events) {
        events.forEach(function (event) {
          if (!hasOwn(event, 'handler')) {
            for (var key in event) {
              registerEvent(this$1, event[key], key);
            }
          } else {
            registerEvent(this$1, event);
          }
        });
      }
    };

    UIkit.prototype._unbindEvents = function () {
      this._events.forEach(function (unbind) {
        return unbind();
      });

      this._events = [];
    };

    UIkit.prototype._initObserver = function () {
      var this$1 = this;
      var ref = this.$options;
      var attrs = ref.attrs;
      var props = ref.props;
      var el = ref.el;

      if (this._observer || !props || attrs === false) {
        return;
      }

      attrs = isArray(attrs) ? attrs : Object.keys(props);
      this._observer = new MutationObserver(function () {
        var data = getProps(this$1.$options, this$1.$name);

        if (attrs.some(function (key) {
          return !isUndefined(data[key]) && data[key] !== this$1.$props[key];
        })) {
          this$1.$reset();
        }
      });
      var filter = attrs.map(function (key) {
        return hyphenate(key);
      }).concat(this.$name);

      this._observer.observe(el, {
        attributes: true,
        attributeFilter: filter.concat(filter.map(function (key) {
          return "data-" + key;
        }))
      });
    };

    function getProps(opts, name) {
      var data$1 = {};
      var args = opts.args;
      if (args === void 0) args = [];
      var props = opts.props;
      if (props === void 0) props = {};
      var el = opts.el;

      if (!props) {
        return data$1;
      }

      for (var key in props) {
        var prop = hyphenate(key);
        var value = data(el, prop);

        if (!isUndefined(value)) {
          value = props[key] === Boolean && value === '' ? true : coerce(props[key], value);

          if (prop === 'target' && (!value || startsWith(value, '_'))) {
            continue;
          }

          data$1[key] = value;
        }
      }

      var options = parseOptions(data(el, name), args);

      for (var key$1 in options) {
        var prop$1 = camelize(key$1);

        if (props[prop$1] !== undefined) {
          data$1[prop$1] = coerce(props[prop$1], options[key$1]);
        }
      }

      return data$1;
    }

    function registerComputed(component, key, cb) {
      Object.defineProperty(component, key, {
        enumerable: true,
        get: function get() {
          var _computeds = component._computeds;
          var $props = component.$props;
          var $el = component.$el;

          if (!hasOwn(_computeds, key)) {
            _computeds[key] = (cb.get || cb).call(component, $props, $el);
          }

          return _computeds[key];
        },
        set: function set(value) {
          var _computeds = component._computeds;
          _computeds[key] = cb.set ? cb.set.call(component, value) : value;

          if (isUndefined(_computeds[key])) {
            delete _computeds[key];
          }
        }
      });
    }

    function registerEvent(component, event, key) {
      if (!isPlainObject(event)) {
        event = {
          name: key,
          handler: event
        };
      }

      var name = event.name;
      var el = event.el;
      var handler = event.handler;
      var capture = event.capture;
      var passive = event.passive;
      var delegate = event.delegate;
      var filter = event.filter;
      var self = event.self;
      el = isFunction(el) ? el.call(component) : el || component.$el;

      if (isArray(el)) {
        el.forEach(function (el) {
          return registerEvent(component, assign({}, event, {
            el: el
          }), key);
        });
        return;
      }

      if (!el || filter && !filter.call(component)) {
        return;
      }

      component._events.push(on(el, name, !delegate ? null : isString(delegate) ? delegate : delegate.call(component), isString(handler) ? component[handler] : handler.bind(component), {
        passive: passive,
        capture: capture,
        self: self
      }));
    }

    function notIn(options, key) {
      return options.every(function (arr) {
        return !arr || !hasOwn(arr, key);
      });
    }

    function coerce(type, value) {
      if (type === Boolean) {
        return toBoolean(value);
      } else if (type === Number) {
        return toNumber(value);
      } else if (type === 'list') {
        return toList(value);
      }

      return type ? type(value) : value;
    }

    function normalizeData(ref, ref$1) {
      var data = ref.data;
      var el = ref.el;
      var args = ref$1.args;
      var props = ref$1.props;
      if (props === void 0) props = {};
      data = isArray(data) ? !isEmpty(args) ? data.slice(0, args.length).reduce(function (data, value, index) {
        if (isPlainObject(value)) {
          assign(data, value);
        } else {
          data[args[index]] = value;
        }

        return data;
      }, {}) : undefined : data;

      if (data) {
        for (var key in data) {
          if (isUndefined(data[key])) {
            delete data[key];
          } else {
            data[key] = props[key] ? coerce(props[key], data[key]) : data[key];
          }
        }
      }

      return data;
    }
  }

  function instanceAPI(UIkit) {
    var DATA = UIkit.data;

    UIkit.prototype.$mount = function (el) {
      var ref = this.$options;
      var name = ref.name;

      if (!el[DATA]) {
        el[DATA] = {};
      }

      if (el[DATA][name]) {
        return;
      }

      el[DATA][name] = this;
      this.$el = this.$options.el = this.$options.el || el;

      if (within(el, document)) {
        this._callConnected();
      }
    };

    UIkit.prototype.$emit = function (e) {
      this._callUpdate(e);
    };

    UIkit.prototype.$reset = function () {
      this._callDisconnected();

      this._callConnected();
    };

    UIkit.prototype.$destroy = function (removeEl) {
      if (removeEl === void 0) removeEl = false;
      var ref = this.$options;
      var el = ref.el;
      var name = ref.name;

      if (el) {
        this._callDisconnected();
      }

      this._callHook('destroy');

      if (!el || !el[DATA]) {
        return;
      }

      delete el[DATA][name];

      if (!isEmpty(el[DATA])) {
        delete el[DATA];
      }

      if (removeEl) {
        _remove(this.$el);
      }
    };

    UIkit.prototype.$create = function (component, element, data) {
      return UIkit[component](element, data);
    };

    UIkit.prototype.$update = UIkit.update;
    UIkit.prototype.$getComponent = UIkit.getComponent;
    var names = {};
    Object.defineProperties(UIkit.prototype, {
      $container: Object.getOwnPropertyDescriptor(UIkit, 'container'),
      $name: {
        get: function get() {
          var ref = this.$options;
          var name = ref.name;

          if (!names[name]) {
            names[name] = UIkit.prefix + hyphenate(name);
          }

          return names[name];
        }
      }
    });
  }

  var UIkit = function UIkit(options) {
    this._init(options);
  };

  UIkit.util = util;
  UIkit.data = '__uikit__';
  UIkit.prefix = 'uk-';
  UIkit.options = {};
  globalAPI(UIkit);
  hooksAPI(UIkit);
  stateAPI(UIkit);
  componentAPI(UIkit);
  instanceAPI(UIkit);
  var Class = {
    connected: function connected() {
      !hasClass(this.$el, this.$name) && addClass(this.$el, this.$name);
    }
  };
  var Togglable = {
    props: {
      cls: Boolean,
      animation: 'list',
      duration: Number,
      origin: String,
      transition: String,
      queued: Boolean
    },
    data: {
      cls: false,
      animation: [false],
      duration: 200,
      origin: false,
      transition: 'linear',
      queued: false,
      initProps: {
        overflow: '',
        height: '',
        paddingTop: '',
        paddingBottom: '',
        marginTop: '',
        marginBottom: ''
      },
      hideProps: {
        overflow: 'hidden',
        height: 0,
        paddingTop: 0,
        paddingBottom: 0,
        marginTop: 0,
        marginBottom: 0
      }
    },
    computed: {
      hasAnimation: function hasAnimation(ref) {
        var animation = ref.animation;
        return !!animation[0];
      },
      hasTransition: function hasTransition(ref) {
        var animation = ref.animation;
        return this.hasAnimation && animation[0] === true;
      }
    },
    methods: {
      toggleElement: function toggleElement(targets, show, animate) {
        var this$1 = this;
        return new Promise(function (resolve) {
          targets = toNodes(targets);

          var all = function all(targets) {
            return Promise.all(targets.map(function (el) {
              return this$1._toggleElement(el, show, animate);
            }));
          };

          var toggled = targets.filter(function (el) {
            return this$1.isToggled(el);
          });
          var untoggled = targets.filter(function (el) {
            return !includes(toggled, el);
          });
          var p;

          if (!this$1.queued || !isUndefined(animate) || !isUndefined(show) || !this$1.hasAnimation || targets.length < 2) {
            p = all(untoggled.concat(toggled));
          } else {
            var body = document.body;
            var scroll = body.scrollTop;
            var el = toggled[0];
            var inProgress = Animation.inProgress(el) && hasClass(el, 'uk-animation-leave') || Transition.inProgress(el) && el.style.height === '0px';
            p = all(toggled);

            if (!inProgress) {
              p = p.then(function () {
                var p = all(untoggled);
                body.scrollTop = scroll;
                return p;
              });
            }
          }

          p.then(resolve, noop);
        });
      },
      toggleNow: function toggleNow(targets, show) {
        var this$1 = this;
        return new Promise(function (resolve) {
          return Promise.all(toNodes(targets).map(function (el) {
            return this$1._toggleElement(el, show, false);
          })).then(resolve, noop);
        });
      },
      isToggled: function isToggled(el) {
        var nodes = toNodes(el || this.$el);
        return this.cls ? hasClass(nodes, this.cls.split(' ')[0]) : !hasAttr(nodes, 'hidden');
      },
      updateAria: function updateAria(el) {
        if (this.cls === false) {
          attr(el, 'aria-hidden', !this.isToggled(el));
        }
      },
      _toggleElement: function _toggleElement(el, show, animate) {
        var this$1 = this;
        show = isBoolean(show) ? show : Animation.inProgress(el) ? hasClass(el, 'uk-animation-leave') : Transition.inProgress(el) ? el.style.height === '0px' : !this.isToggled(el);

        if (!trigger(el, "before" + (show ? 'show' : 'hide'), [this])) {
          return Promise.reject();
        }

        var promise = (isFunction(animate) ? animate : animate === false || !this.hasAnimation ? this._toggle : this.hasTransition ? toggleHeight(this) : toggleAnimation(this))(el, show);
        trigger(el, show ? 'show' : 'hide', [this]);

        var _final = function _final() {
          trigger(el, show ? 'shown' : 'hidden', [this$1]);
          this$1.$update(el);
        };

        return promise ? promise.then(_final) : Promise.resolve(_final());
      },
      _toggle: function _toggle(el, toggled) {
        if (!el) {
          return;
        }

        toggled = Boolean(toggled);
        var changed;

        if (this.cls) {
          changed = includes(this.cls, ' ') || toggled !== hasClass(el, this.cls);
          changed && toggleClass(el, this.cls, includes(this.cls, ' ') ? undefined : toggled);
        } else {
          changed = toggled === hasAttr(el, 'hidden');
          changed && attr(el, 'hidden', !toggled ? '' : null);
        }

        $$('[autofocus]', el).some(function (el) {
          return isVisible(el) ? el.focus() || true : el.blur();
        });
        this.updateAria(el);
        changed && this.$update(el);
      }
    }
  };

  function toggleHeight(ref) {
    var isToggled = ref.isToggled;
    var duration = ref.duration;
    var initProps = ref.initProps;
    var hideProps = ref.hideProps;
    var transition = ref.transition;
    var _toggle = ref._toggle;
    return function (el, show) {
      var inProgress = Transition.inProgress(el);
      var inner = el.hasChildNodes ? toFloat(css(el.firstElementChild, 'marginTop')) + toFloat(css(el.lastElementChild, 'marginBottom')) : 0;
      var currentHeight = isVisible(el) ? height(el) + (inProgress ? 0 : inner) : 0;
      Transition.cancel(el);

      if (!isToggled(el)) {
        _toggle(el, true);
      }

      height(el, ''); // Update child components first

      fastdom.flush();
      var endHeight = height(el) + (inProgress ? 0 : inner);
      height(el, currentHeight);
      return (show ? Transition.start(el, assign({}, initProps, {
        overflow: 'hidden',
        height: endHeight
      }), Math.round(duration * (1 - currentHeight / endHeight)), transition) : Transition.start(el, hideProps, Math.round(duration * (currentHeight / endHeight)), transition).then(function () {
        return _toggle(el, false);
      })).then(function () {
        return css(el, initProps);
      });
    };
  }

  function toggleAnimation(ref) {
    var animation = ref.animation;
    var duration = ref.duration;
    var origin = ref.origin;
    var _toggle = ref._toggle;
    return function (el, show) {
      Animation.cancel(el);

      if (show) {
        _toggle(el, true);

        return Animation["in"](el, animation[0], duration, origin);
      }

      return Animation.out(el, animation[1] || animation[0], duration, origin).then(function () {
        return _toggle(el, false);
      });
    };
  }

  var Accordion = {
    mixins: [Class, Togglable],
    props: {
      targets: String,
      active: null,
      collapsible: Boolean,
      multiple: Boolean,
      toggle: String,
      content: String,
      transition: String
    },
    data: {
      targets: '> *',
      active: false,
      animation: [true],
      collapsible: true,
      multiple: false,
      clsOpen: 'uk-open',
      toggle: '> .uk-accordion-title',
      content: '> .uk-accordion-content',
      transition: 'ease'
    },
    computed: {
      items: function items(ref, $el) {
        var targets = ref.targets;
        return $$(targets, $el);
      }
    },
    events: [{
      name: 'click',
      delegate: function delegate() {
        return this.targets + " " + this.$props.toggle;
      },
      handler: function handler(e) {
        e.preventDefault();
        this.toggle(_index($$(this.targets + " " + this.$props.toggle, this.$el), e.current));
      }
    }],
    connected: function connected() {
      if (this.active === false) {
        return;
      }

      var active = this.items[Number(this.active)];

      if (active && !hasClass(active, this.clsOpen)) {
        this.toggle(active, false);
      }
    },
    update: function update() {
      var this$1 = this;
      this.items.forEach(function (el) {
        return this$1._toggle($(this$1.content, el), hasClass(el, this$1.clsOpen));
      });
      var active = !this.collapsible && !hasClass(this.items, this.clsOpen) && this.items[0];

      if (active) {
        this.toggle(active, false);
      }
    },
    methods: {
      toggle: function toggle(item, animate) {
        var this$1 = this;

        var index = _getIndex(item, this.items);

        var active = filter(this.items, "." + this.clsOpen);
        item = this.items[index];
        item && [item].concat(!this.multiple && !includes(active, item) && active || []).forEach(function (el) {
          var isItem = el === item;
          var state = isItem && !hasClass(el, this$1.clsOpen);

          if (!state && isItem && !this$1.collapsible && active.length < 2) {
            return;
          }

          toggleClass(el, this$1.clsOpen, state);
          var content = el._wrapper ? el._wrapper.firstElementChild : $(this$1.content, el);

          if (!el._wrapper) {
            el._wrapper = wrapAll(content, '<div>');
            attr(el._wrapper, 'hidden', state ? '' : null);
          }

          this$1._toggle(content, true);

          this$1.toggleElement(el._wrapper, state, animate).then(function () {
            if (hasClass(el, this$1.clsOpen) !== state) {
              return;
            }

            if (!state) {
              this$1._toggle(content, false);
            }

            el._wrapper = null;
            unwrap(content);
          });
        });
      }
    }
  };
  var Alert = {
    mixins: [Class, Togglable],
    args: 'animation',
    props: {
      close: String
    },
    data: {
      animation: [true],
      selClose: '.uk-alert-close',
      duration: 150,
      hideProps: assign({
        opacity: 0
      }, Togglable.data.hideProps)
    },
    events: [{
      name: 'click',
      delegate: function delegate() {
        return this.selClose;
      },
      handler: function handler(e) {
        e.preventDefault();
        this.close();
      }
    }],
    methods: {
      close: function close() {
        var this$1 = this;
        this.toggleElement(this.$el).then(function () {
          return this$1.$destroy(true);
        });
      }
    }
  };

  function Core(UIkit) {
    ready(function () {
      UIkit.update();
      on(window, 'load resize', function () {
        return UIkit.update(null, 'resize');
      });
      on(document, 'loadedmetadata load', function (ref) {
        var target = ref.target;
        return UIkit.update(target, 'resize');
      }, true); // throttle `scroll` event (Safari triggers multiple `scroll` events per frame)

      var pending;
      on(window, 'scroll', function (e) {
        if (pending) {
          return;
        }

        pending = true;
        fastdom.write(function () {
          return pending = false;
        });
        var target = e.target;
        UIkit.update(target.nodeType !== 1 ? document.body : target, e.type);
      }, {
        passive: true,
        capture: true
      });
      var started = 0;
      on(document, 'animationstart', function (ref) {
        var target = ref.target;

        if ((css(target, 'animationName') || '').match(/^uk-.*(left|right)/)) {
          started++;
          css(document.body, 'overflowX', 'hidden');
          setTimeout(function () {
            if (! --started) {
              css(document.body, 'overflowX', '');
            }
          }, toMs(css(target, 'animationDuration')) + 100);
        }
      }, true);
      var off;
      on(document, pointerDown, function (e) {
        off && off();

        if (!isTouch(e)) {
          return;
        } // Handle Swipe Gesture


        var pos = getEventPos(e);
        var target = 'tagName' in e.target ? e.target : e.target.parentNode;
        off = once(document, pointerUp + " " + pointerCancel, function (e) {
          var ref = getEventPos(e);
          var x = ref.x;
          var y = ref.y; // swipe

          if (target && x && Math.abs(pos.x - x) > 100 || y && Math.abs(pos.y - y) > 100) {
            setTimeout(function () {
              trigger(target, 'swipe');
              trigger(target, "swipe" + swipeDirection(pos.x, pos.y, x, y));
            });
          }
        }); // Force click event anywhere on iOS < 13

        if (pointerDown === 'touchstart') {
          css(document.body, 'cursor', 'pointer');
          once(document, pointerUp + " " + pointerCancel, function () {
            return setTimeout(function () {
              return css(document.body, 'cursor', '');
            }, 50);
          });
        }
      }, {
        passive: true
      });
    });
  }

  function swipeDirection(x1, y1, x2, y2) {
    return Math.abs(x1 - x2) >= Math.abs(y1 - y2) ? x1 - x2 > 0 ? 'Left' : 'Right' : y1 - y2 > 0 ? 'Up' : 'Down';
  }

  var Video = {
    args: 'autoplay',
    props: {
      automute: Boolean,
      autoplay: Boolean
    },
    data: {
      automute: false,
      autoplay: true
    },
    computed: {
      inView: function inView(ref) {
        var autoplay = ref.autoplay;
        return autoplay === 'inview';
      }
    },
    connected: function connected() {
      if (this.inView && !hasAttr(this.$el, 'preload')) {
        this.$el.preload = 'none';
      }

      this.player = new Player(this.$el);

      if (this.automute) {
        this.player.mute();
      }
    },
    update: {
      read: function read() {
        return !this.player ? false : {
          visible: isVisible(this.$el) && css(this.$el, 'visibility') !== 'hidden',
          inView: this.inView && isInView(this.$el)
        };
      },
      write: function write(ref) {
        var visible = ref.visible;
        var inView = ref.inView;

        if (!visible || this.inView && !inView) {
          this.player.pause();
        } else if (this.autoplay === true || this.inView && inView) {
          this.player.play();
        }
      },
      events: ['resize', 'scroll']
    }
  };
  var Cover = {
    mixins: [Class, Video],
    props: {
      width: Number,
      height: Number
    },
    data: {
      automute: true
    },
    update: {
      read: function read() {
        var el = this.$el;
        var ref = el.parentNode;
        var height = ref.offsetHeight;
        var width = ref.offsetWidth;
        var dim = Dimensions.cover({
          width: this.width || el.naturalWidth || el.videoWidth || el.clientWidth,
          height: this.height || el.naturalHeight || el.videoHeight || el.clientHeight
        }, {
          width: width + (width % 2 ? 1 : 0),
          height: height + (height % 2 ? 1 : 0)
        });

        if (!dim.width || !dim.height) {
          return false;
        }

        return dim;
      },
      write: function write(ref) {
        var height = ref.height;
        var width = ref.width;
        css(this.$el, {
          height: height,
          width: width
        });
      },
      events: ['resize']
    }
  };
  var Position = {
    props: {
      pos: String,
      offset: null,
      flip: Boolean,
      clsPos: String
    },
    data: {
      pos: "bottom-" + (!isRtl ? 'left' : 'right'),
      flip: true,
      offset: false,
      clsPos: ''
    },
    computed: {
      pos: function pos(ref) {
        var pos = ref.pos;
        return (pos + (!includes(pos, '-') ? '-center' : '')).split('-');
      },
      dir: function dir() {
        return this.pos[0];
      },
      align: function align() {
        return this.pos[1];
      }
    },
    methods: {
      positionAt: function positionAt(element, target, boundary) {
        removeClasses(element, this.clsPos + "-(top|bottom|left|right)(-[a-z]+)?");
        css(element, {
          top: '',
          left: ''
        });
        var node;
        var ref = this;
        var offset$1 = ref.offset;
        var axis = this.getAxis();

        if (!isNumeric(offset$1)) {
          node = $(offset$1);
          offset$1 = node ? offset(node)[axis === 'x' ? 'left' : 'top'] - offset(target)[axis === 'x' ? 'right' : 'bottom'] : 0;
        }

        var ref$1 = _positionAt(element, target, axis === 'x' ? flipPosition(this.dir) + " " + this.align : this.align + " " + flipPosition(this.dir), axis === 'x' ? this.dir + " " + this.align : this.align + " " + this.dir, axis === 'x' ? "" + (this.dir === 'left' ? -offset$1 : offset$1) : " " + (this.dir === 'top' ? -offset$1 : offset$1), null, this.flip, boundary).target;

        var x = ref$1.x;
        var y = ref$1.y;
        this.dir = axis === 'x' ? x : y;
        this.align = axis === 'x' ? y : x;
        toggleClass(element, this.clsPos + "-" + this.dir + "-" + this.align, this.offset === false);
      },
      getAxis: function getAxis() {
        return this.dir === 'top' || this.dir === 'bottom' ? 'y' : 'x';
      }
    }
  };
  var active;
  var Drop = {
    mixins: [Position, Togglable],
    args: 'pos',
    props: {
      mode: 'list',
      toggle: Boolean,
      boundary: Boolean,
      boundaryAlign: Boolean,
      delayShow: Number,
      delayHide: Number,
      clsDrop: String
    },
    data: {
      mode: ['click', 'hover'],
      toggle: '- *',
      boundary: window,
      boundaryAlign: false,
      delayShow: 0,
      delayHide: 800,
      clsDrop: false,
      hoverIdle: 200,
      animation: ['uk-animation-fade'],
      cls: 'uk-open'
    },
    computed: {
      boundary: function boundary(ref, $el) {
        var boundary = ref.boundary;
        return query(boundary, $el);
      },
      clsDrop: function clsDrop(ref) {
        var clsDrop = ref.clsDrop;
        return clsDrop || "uk-" + this.$options.name;
      },
      clsPos: function clsPos() {
        return this.clsDrop;
      }
    },
    created: function created() {
      this.tracker = new MouseTracker();
    },
    connected: function connected() {
      addClass(this.$el, this.clsDrop);
      var ref = this.$props;
      var toggle = ref.toggle;
      this.toggle = toggle && this.$create('toggle', query(toggle, this.$el), {
        target: this.$el,
        mode: this.mode
      });
      !this.toggle && trigger(this.$el, 'updatearia');
    },
    events: [{
      name: 'click',
      delegate: function delegate() {
        return "." + this.clsDrop + "-close";
      },
      handler: function handler(e) {
        e.preventDefault();
        this.hide(false);
      }
    }, {
      name: 'click',
      delegate: function delegate() {
        return 'a[href^="#"]';
      },
      handler: function handler(ref) {
        var defaultPrevented = ref.defaultPrevented;
        var hash = ref.current.hash;

        if (!defaultPrevented && hash && !within(hash, this.$el)) {
          this.hide(false);
        }
      }
    }, {
      name: 'beforescroll',
      handler: function handler() {
        this.hide(false);
      }
    }, {
      name: 'toggle',
      self: true,
      handler: function handler(e, toggle) {
        e.preventDefault();

        if (this.isToggled()) {
          this.hide(false);
        } else {
          this.show(toggle, false);
        }
      }
    }, {
      name: pointerEnter,
      filter: function filter() {
        return includes(this.mode, 'hover');
      },
      handler: function handler(e) {
        if (isTouch(e)) {
          return;
        }

        if (active && active !== this && active.toggle && includes(active.toggle.mode, 'hover') && !within(e.target, active.toggle.$el) && !pointInRect({
          x: e.pageX,
          y: e.pageY
        }, offset(active.$el))) {
          active.hide(false);
        }

        e.preventDefault();
        this.show(this.toggle);
      }
    }, {
      name: 'toggleshow',
      handler: function handler(e, toggle) {
        if (toggle && !includes(toggle.target, this.$el)) {
          return;
        }

        e.preventDefault();
        this.show(toggle || this.toggle);
      }
    }, {
      name: "togglehide " + pointerLeave,
      handler: function handler(e, toggle) {
        if (isTouch(e) || toggle && !includes(toggle.target, this.$el)) {
          return;
        }

        e.preventDefault();

        if (this.toggle && includes(this.toggle.mode, 'hover')) {
          this.hide();
        }
      }
    }, {
      name: 'beforeshow',
      self: true,
      handler: function handler() {
        this.clearTimers();
        Animation.cancel(this.$el);
        this.position();
      }
    }, {
      name: 'show',
      self: true,
      handler: function handler() {
        var this$1 = this;
        this.tracker.init();
        trigger(this.$el, 'updatearia'); // If triggered from an click event handler, delay adding the click handler

        var off = delayOn(document, 'click', function (ref) {
          var defaultPrevented = ref.defaultPrevented;
          var target = ref.target;

          if (!defaultPrevented && !within(target, this$1.$el) && !(this$1.toggle && within(target, this$1.toggle.$el))) {
            this$1.hide(false);
          }
        });
        once(this.$el, 'hide', off, {
          self: true
        });
      }
    }, {
      name: 'beforehide',
      self: true,
      handler: function handler() {
        this.clearTimers();
      }
    }, {
      name: 'hide',
      handler: function handler(ref) {
        var target = ref.target;

        if (this.$el !== target) {
          active = active === null && within(target, this.$el) && this.isToggled() ? this : active;
          return;
        }

        active = this.isActive() ? null : active;
        trigger(this.$el, 'updatearia');
        this.tracker.cancel();
      }
    }, {
      name: 'updatearia',
      self: true,
      handler: function handler(e, toggle) {
        e.preventDefault();
        this.updateAria(this.$el);

        if (toggle || this.toggle) {
          attr((toggle || this.toggle).$el, 'aria-expanded', this.isToggled());
          toggleClass(this.toggle.$el, this.cls, this.isToggled());
        }
      }
    }],
    update: {
      write: function write() {
        if (this.isToggled() && !Animation.inProgress(this.$el)) {
          this.position();
        }
      },
      events: ['resize']
    },
    methods: {
      show: function show(toggle, delay) {
        var this$1 = this;
        if (delay === void 0) delay = true;

        var show = function show() {
          return !this$1.isToggled() && this$1.toggleElement(this$1.$el, true);
        };

        var tryShow = function tryShow() {
          this$1.toggle = toggle || this$1.toggle;
          this$1.clearTimers();

          if (this$1.isActive()) {
            return;
          } else if (delay && active && active !== this$1 && active.isDelaying) {
            this$1.showTimer = setTimeout(this$1.show, 10);
            return;
          } else if (this$1.isParentOf(active)) {
            if (active.hideTimer) {
              active.hide(false);
            } else {
              return;
            }
          } else if (this$1.isChildOf(active)) {
            active.clearTimers();
          } else if (active && !this$1.isChildOf(active) && !this$1.isParentOf(active)) {
            var prev;

            while (active && active !== prev && !this$1.isChildOf(active)) {
              prev = active;
              active.hide(false);
            }
          }

          if (delay && this$1.delayShow) {
            this$1.showTimer = setTimeout(show, this$1.delayShow);
          } else {
            show();
          }

          active = this$1;
        };

        if (toggle && this.toggle && toggle.$el !== this.toggle.$el) {
          once(this.$el, 'hide', tryShow);
          this.hide(false);
        } else {
          tryShow();
        }
      },
      hide: function hide(delay) {
        var this$1 = this;
        if (delay === void 0) delay = true;

        var hide = function hide() {
          return this$1.toggleNow(this$1.$el, false);
        };

        this.clearTimers();
        this.isDelaying = this.tracker.movesTo(this.$el);

        if (delay && this.isDelaying) {
          this.hideTimer = setTimeout(this.hide, this.hoverIdle);
        } else if (delay && this.delayHide) {
          this.hideTimer = setTimeout(hide, this.delayHide);
        } else {
          hide();
        }
      },
      clearTimers: function clearTimers() {
        clearTimeout(this.showTimer);
        clearTimeout(this.hideTimer);
        this.showTimer = null;
        this.hideTimer = null;
        this.isDelaying = false;
      },
      isActive: function isActive() {
        return active === this;
      },
      isChildOf: function isChildOf(drop) {
        return drop && drop !== this && within(this.$el, drop.$el);
      },
      isParentOf: function isParentOf(drop) {
        return drop && drop !== this && within(drop.$el, this.$el);
      },
      position: function position() {
        removeClasses(this.$el, this.clsDrop + "-(stack|boundary)");
        css(this.$el, {
          top: '',
          left: '',
          display: 'block'
        });
        toggleClass(this.$el, this.clsDrop + "-boundary", this.boundaryAlign);
        var boundary = offset(this.boundary);
        var alignTo = this.boundaryAlign ? boundary : offset(this.toggle.$el);

        if (this.align === 'justify') {
          var prop = this.getAxis() === 'y' ? 'width' : 'height';
          css(this.$el, prop, alignTo[prop]);
        } else if (this.$el.offsetWidth > Math.max(boundary.right - alignTo.left, alignTo.right - boundary.left)) {
          addClass(this.$el, this.clsDrop + "-stack");
        }

        this.positionAt(this.$el, this.boundaryAlign ? this.boundary : this.toggle.$el, this.boundary);
        css(this.$el, 'display', '');
      }
    }
  };

  function delayOn(el, type, fn) {
    var off = once(el, type, function () {
      return off = on(el, type, fn);
    }, true);
    return function () {
      return off();
    };
  }

  var Dropdown = {
    "extends": Drop
  };
  var FormCustom = {
    mixins: [Class],
    args: 'target',
    props: {
      target: Boolean
    },
    data: {
      target: false
    },
    computed: {
      input: function input(_, $el) {
        return $(selInput, $el);
      },
      state: function state() {
        return this.input.nextElementSibling;
      },
      target: function target(ref, $el) {
        var target = ref.target;
        return target && (target === true && this.input.parentNode === $el && this.input.nextElementSibling || query(target, $el));
      }
    },
    update: function update() {
      var ref = this;
      var target = ref.target;
      var input = ref.input;

      if (!target) {
        return;
      }

      var option;
      var prop = isInput(target) ? 'value' : 'textContent';
      var prev = target[prop];
      var value = input.files && input.files[0] ? input.files[0].name : matches(input, 'select') && (option = $$('option', input).filter(function (el) {
        return el.selected;
      })[0]) // eslint-disable-line prefer-destructuring
      ? option.textContent : input.value;

      if (prev !== value) {
        target[prop] = value;
      }
    },
    events: [{
      name: 'change',
      handler: function handler() {
        this.$emit();
      }
    }, {
      name: 'reset',
      el: function el() {
        return closest(this.$el, 'form');
      },
      handler: function handler() {
        this.$emit();
      }
    }]
  }; // Deprecated

  var Gif = {
    update: {
      read: function read(data) {
        var inview = isInView(this.$el);

        if (!inview || data.isInView === inview) {
          return false;
        }

        data.isInView = inview;
      },
      write: function write() {
        this.$el.src = this.$el.src;
      },
      events: ['scroll', 'resize']
    }
  };
  var Margin = {
    props: {
      margin: String,
      firstColumn: Boolean
    },
    data: {
      margin: 'uk-margin-small-top',
      firstColumn: 'uk-first-column'
    },
    update: {
      read: function read(data) {
        var items = this.$el.children;
        var rows = [[]];

        if (!items.length || !isVisible(this.$el)) {
          return data.rows = rows;
        }

        data.rows = getRows(items);
        data.stacks = !data.rows.some(function (row) {
          return row.length > 1;
        });
      },
      write: function write(ref) {
        var this$1 = this;
        var rows = ref.rows;
        rows.forEach(function (row, i) {
          return row.forEach(function (el, j) {
            toggleClass(el, this$1.margin, i !== 0);
            toggleClass(el, this$1.firstColumn, j === 0);
          });
        });
      },
      events: ['resize']
    }
  };

  function getRows(items) {
    var rows = [[]];

    for (var i = 0; i < items.length; i++) {
      var el = items[i];
      var dim = getOffset(el);

      if (!dim.height) {
        continue;
      }

      for (var j = rows.length - 1; j >= 0; j--) {
        var row = rows[j];

        if (!row[0]) {
          row.push(el);
          break;
        }

        var leftDim = void 0;

        if (row[0].offsetParent === el.offsetParent) {
          leftDim = getOffset(row[0]);
        } else {
          dim = getOffset(el, true);
          leftDim = getOffset(row[0], true);
        }

        if (dim.top >= leftDim.bottom - 1 && dim.top !== leftDim.top) {
          rows.push([el]);
          break;
        }

        if (dim.bottom > leftDim.top) {
          if (dim.left < leftDim.left && !isRtl) {
            row.unshift(el);
            break;
          }

          row.push(el);
          break;
        }

        if (j === 0) {
          rows.unshift([el]);
          break;
        }
      }
    }

    return rows;
  }

  function getOffset(element, offset) {
    var assign;
    if (offset === void 0) offset = false;
    var offsetTop = element.offsetTop;
    var offsetLeft = element.offsetLeft;
    var offsetHeight = element.offsetHeight;

    if (offset) {
      assign = offsetPosition(element), offsetTop = assign[0], offsetLeft = assign[1];
    }

    return {
      top: offsetTop,
      left: offsetLeft,
      height: offsetHeight,
      bottom: offsetTop + offsetHeight
    };
  }

  var Grid = {
    "extends": Margin,
    mixins: [Class],
    name: 'grid',
    props: {
      masonry: Boolean,
      parallax: Number
    },
    data: {
      margin: 'uk-grid-margin',
      clsStack: 'uk-grid-stack',
      masonry: false,
      parallax: 0
    },
    computed: {
      length: function length(_, $el) {
        return $el.children.length;
      },
      parallax: function parallax(ref) {
        var parallax = ref.parallax;
        return parallax && this.length ? Math.abs(parallax) : '';
      }
    },
    connected: function connected() {
      this.masonry && addClass(this.$el, 'uk-flex-top uk-flex-wrap-top');
    },
    update: [{
      read: function read(ref) {
        var rows = ref.rows;

        if (this.masonry || this.parallax) {
          rows = rows.map(function (elements) {
            return sortBy(elements, 'offsetLeft');
          });

          if (isRtl) {
            rows.map(function (row) {
              return row.reverse();
            });
          }
        }

        var transitionInProgress = rows.some(function (elements) {
          return elements.some(Transition.inProgress);
        });
        var translates = false;
        var elHeight = '';

        if (this.masonry && this.length) {
          var height = 0;
          translates = rows.reduce(function (translates, row, i) {
            translates[i] = row.map(function (_, j) {
              return i === 0 ? 0 : toFloat(translates[i - 1][j]) + (height - toFloat(rows[i - 1][j] && rows[i - 1][j].offsetHeight));
            });
            height = row.reduce(function (height, el) {
              return Math.max(height, el.offsetHeight);
            }, 0);
            return translates;
          }, []);
          elHeight = maxColumnHeight(rows) + getMarginTop(this.$el, this.margin) * (rows.length - 1);
        }

        var padding = this.parallax && getPaddingBottom(this.parallax, rows, translates);
        return {
          padding: padding,
          rows: rows,
          translates: translates,
          height: !transitionInProgress ? elHeight : false
        };
      },
      write: function write(ref) {
        var stacks = ref.stacks;
        var height = ref.height;
        var padding = ref.padding;
        toggleClass(this.$el, this.clsStack, stacks);
        css(this.$el, 'paddingBottom', padding);
        height !== false && css(this.$el, 'height', height);
      },
      events: ['resize']
    }, {
      read: function read(ref) {
        var height$1 = ref.height;
        return {
          scrolled: this.parallax ? scrolledOver(this.$el, height$1 ? height$1 - height(this.$el) : 0) * this.parallax : false
        };
      },
      write: function write(ref) {
        var rows = ref.rows;
        var scrolled = ref.scrolled;
        var translates = ref.translates;

        if (scrolled === false && !translates) {
          return;
        }

        rows.forEach(function (row, i) {
          return row.forEach(function (el, j) {
            return css(el, 'transform', !scrolled && !translates ? '' : "translateY(" + ((translates && -translates[i][j]) + (scrolled ? j % 2 ? scrolled : scrolled / 8 : 0)) + "px)");
          });
        });
      },
      events: ['scroll', 'resize']
    }]
  };

  function getPaddingBottom(distance, rows, translates) {
    var column = 0;
    var max = 0;
    var maxScrolled = 0;

    for (var i = rows.length - 1; i >= 0; i--) {
      for (var j = column; j < rows[i].length; j++) {
        var el = rows[i][j];
        var bottom = el.offsetTop + height(el) + (translates && -translates[i][j]);
        max = Math.max(max, bottom);
        maxScrolled = Math.max(maxScrolled, bottom + (j % 2 ? distance : distance / 8));
        column++;
      }
    }

    return maxScrolled - max;
  }

  function getMarginTop(root, cls) {
    var nodes = toNodes(root.children);
    var ref = nodes.filter(function (el) {
      return hasClass(el, cls);
    });
    var node = ref[0];
    return toFloat(node ? css(node, 'marginTop') : css(nodes[0], 'paddingLeft'));
  }

  function maxColumnHeight(rows) {
    return Math.max.apply(Math, rows.reduce(function (sum, row) {
      row.forEach(function (el, i) {
        return sum[i] = (sum[i] || 0) + el.offsetHeight;
      });
      return sum;
    }, []));
  } // IE 11 fix (min-height on a flex container won't apply to its flex items)


  var FlexBug = isIE ? {
    props: {
      selMinHeight: String
    },
    data: {
      selMinHeight: false,
      forceHeight: false
    },
    computed: {
      elements: function elements(ref, $el) {
        var selMinHeight = ref.selMinHeight;
        return selMinHeight ? $$(selMinHeight, $el) : [$el];
      }
    },
    update: [{
      read: function read() {
        css(this.elements, 'height', '');
      },
      order: -5,
      events: ['resize']
    }, {
      write: function write() {
        var this$1 = this;
        this.elements.forEach(function (el) {
          var height = toFloat(css(el, 'minHeight'));

          if (height && (this$1.forceHeight || Math.round(height + boxModelAdjust('height', el, 'content-box')) >= el.offsetHeight)) {
            css(el, 'height', height);
          }
        });
      },
      order: 5,
      events: ['resize']
    }]
  } : {};
  var HeightMatch = {
    mixins: [FlexBug],
    args: 'target',
    props: {
      target: String,
      row: Boolean
    },
    data: {
      target: '> *',
      row: true,
      forceHeight: true
    },
    computed: {
      elements: function elements(ref, $el) {
        var target = ref.target;
        return $$(target, $el);
      }
    },
    update: {
      read: function read() {
        return {
          rows: (this.row ? getRows(this.elements) : [this.elements]).map(match)
        };
      },
      write: function write(ref) {
        var rows = ref.rows;
        rows.forEach(function (ref) {
          var heights = ref.heights;
          var elements = ref.elements;
          return elements.forEach(function (el, i) {
            return css(el, 'minHeight', heights[i]);
          });
        });
      },
      events: ['resize']
    }
  };

  function match(elements) {
    var assign;

    if (elements.length < 2) {
      return {
        heights: [''],
        elements: elements
      };
    }

    var ref = getHeights(elements);
    var heights = ref.heights;
    var max = ref.max;
    var hasMinHeight = elements.some(function (el) {
      return el.style.minHeight;
    });
    var hasShrunk = elements.some(function (el, i) {
      return !el.style.minHeight && heights[i] < max;
    });

    if (hasMinHeight && hasShrunk) {
      css(elements, 'minHeight', '');
      assign = getHeights(elements), heights = assign.heights, max = assign.max;
    }

    heights = elements.map(function (el, i) {
      return heights[i] === max && toFloat(el.style.minHeight).toFixed(2) !== max.toFixed(2) ? '' : max;
    });
    return {
      heights: heights,
      elements: elements
    };
  }

  function getHeights(elements) {
    var heights = elements.map(function (el) {
      return offset(el).height - boxModelAdjust('height', el, 'content-box');
    });
    var max = Math.max.apply(null, heights);
    return {
      heights: heights,
      max: max
    };
  }

  var HeightViewport = {
    mixins: [FlexBug],
    props: {
      expand: Boolean,
      offsetTop: Boolean,
      offsetBottom: Boolean,
      minHeight: Number
    },
    data: {
      expand: false,
      offsetTop: false,
      offsetBottom: false,
      minHeight: 0
    },
    update: {
      read: function read(ref) {
        var prev = ref.minHeight;

        if (!isVisible(this.$el)) {
          return false;
        }

        var minHeight = '';
        var box = boxModelAdjust('height', this.$el, 'content-box');

        if (this.expand) {
          this.$el.dataset.heightExpand = '';

          if ($('[data-height-expand]') !== this.$el) {
            return false;
          }

          minHeight = height(window) - (offsetHeight(document.documentElement) - offsetHeight(this.$el)) - box || '';
        } else {
          // on mobile devices (iOS and Android) window.innerHeight !== 100vh
          minHeight = 'calc(100vh';

          if (this.offsetTop) {
            var ref$1 = offset(this.$el);
            var top = ref$1.top;
            minHeight += top > 0 && top < height(window) / 2 ? " - " + top + "px" : '';
          }

          if (this.offsetBottom === true) {
            minHeight += " - " + offsetHeight(this.$el.nextElementSibling) + "px";
          } else if (isNumeric(this.offsetBottom)) {
            minHeight += " - " + this.offsetBottom + "vh";
          } else if (this.offsetBottom && endsWith(this.offsetBottom, 'px')) {
            minHeight += " - " + toFloat(this.offsetBottom) + "px";
          } else if (isString(this.offsetBottom)) {
            minHeight += " - " + offsetHeight(query(this.offsetBottom, this.$el)) + "px";
          }

          minHeight += (box ? " - " + box + "px" : '') + ")";
        }

        return {
          minHeight: minHeight,
          prev: prev
        };
      },
      write: function write(ref) {
        var minHeight = ref.minHeight;
        var prev = ref.prev;
        css(this.$el, {
          minHeight: minHeight
        });

        if (minHeight !== prev) {
          this.$update(this.$el, 'resize');
        }

        if (this.minHeight && toFloat(css(this.$el, 'minHeight')) < this.minHeight) {
          css(this.$el, 'minHeight', this.minHeight);
        }
      },
      events: ['resize']
    }
  };

  function offsetHeight(el) {
    return el && offset(el).height || 0;
  }

  var Svg = {
    args: 'src',
    props: {
      id: Boolean,
      icon: String,
      src: String,
      style: String,
      width: Number,
      height: Number,
      ratio: Number,
      "class": String,
      strokeAnimation: Boolean,
      focusable: Boolean,
      // IE 11
      attributes: 'list'
    },
    data: {
      ratio: 1,
      include: ['style', 'class', 'focusable'],
      "class": '',
      strokeAnimation: false
    },
    beforeConnect: function beforeConnect() {
      var this$1 = this;
      var assign;
      this["class"] += ' uk-svg';

      if (!this.icon && includes(this.src, '#')) {
        var parts = this.src.split('#');

        if (parts.length > 1) {
          assign = parts, this.src = assign[0], this.icon = assign[1];
        }
      }

      this.svg = this.getSvg().then(function (el) {
        this$1.applyAttributes(el);
        return this$1.svgEl = insertSVG(el, this$1.$el);
      }, noop);
    },
    disconnected: function disconnected() {
      var this$1 = this;

      if (isVoidElement(this.$el)) {
        attr(this.$el, 'hidden', null);
      }

      if (this.svg) {
        this.svg.then(function (svg) {
          return (!this$1._connected || svg !== this$1.svgEl) && _remove(svg);
        }, noop);
      }

      this.svg = this.svgEl = null;
    },
    update: {
      read: function read() {
        return !!(this.strokeAnimation && this.svgEl && isVisible(this.svgEl));
      },
      write: function write() {
        applyAnimation(this.svgEl);
      },
      type: ['resize']
    },
    methods: {
      getSvg: function getSvg() {
        var this$1 = this;
        return loadSVG(this.src).then(function (svg) {
          return parseSVG(svg, this$1.icon) || Promise.reject('SVG not found.');
        });
      },
      applyAttributes: function applyAttributes(el) {
        var this$1 = this;

        for (var prop in this.$options.props) {
          if (this[prop] && includes(this.include, prop)) {
            attr(el, prop, this[prop]);
          }
        }

        for (var attribute in this.attributes) {
          var ref = this.attributes[attribute].split(':', 2);
          var prop$1 = ref[0];
          var value = ref[1];
          attr(el, prop$1, value);
        }

        if (!this.id) {
          removeAttr(el, 'id');
        }

        var props = ['width', 'height'];
        var dimensions = [this.width, this.height];

        if (!dimensions.some(function (val) {
          return val;
        })) {
          dimensions = props.map(function (prop) {
            return attr(el, prop);
          });
        }

        var viewBox = attr(el, 'viewBox');

        if (viewBox && !dimensions.some(function (val) {
          return val;
        })) {
          dimensions = viewBox.split(' ').slice(2);
        }

        dimensions.forEach(function (val, i) {
          val = (val | 0) * this$1.ratio;
          val && attr(el, props[i], val);

          if (val && !dimensions[i ^ 1]) {
            removeAttr(el, props[i ^ 1]);
          }
        });
        attr(el, 'data-svg', this.icon || this.src);
      }
    }
  };
  var svgs = {};

  function loadSVG(src) {
    if (svgs[src]) {
      return svgs[src];
    }

    return svgs[src] = new Promise(function (resolve, reject) {
      if (!src) {
        reject();
        return;
      }

      if (startsWith(src, 'data:')) {
        resolve(decodeURIComponent(src.split(',')[1]));
      } else {
        ajax(src).then(function (xhr) {
          return resolve(xhr.response);
        }, function () {
          return reject('SVG not found.');
        });
      }
    });
  }

  function parseSVG(svg, icon) {
    if (icon && includes(svg, '<symbol')) {
      svg = parseSymbols(svg, icon) || svg;
    }

    svg = $(svg.substr(svg.indexOf('<svg')));
    return svg && svg.hasChildNodes() && svg;
  }

  var symbolRe = /<symbol(.*?id=(['"])(.*?)\2[^]*?<\/)symbol>/g;
  var symbols = {};

  function parseSymbols(svg, icon) {
    if (!symbols[svg]) {
      symbols[svg] = {};
      var match;

      while (match = symbolRe.exec(svg)) {
        symbols[svg][match[3]] = "<svg xmlns=\"http://www.w3.org/2000/svg\"" + match[1] + "svg>";
      }

      symbolRe.lastIndex = 0;
    }

    return symbols[svg][icon];
  }

  function applyAnimation(el) {
    var length = getMaxPathLength(el);

    if (length) {
      el.style.setProperty('--uk-animation-stroke', length);
    }
  }

  function getMaxPathLength(el) {
    return Math.ceil(Math.max.apply(Math, $$('[stroke]', el).map(function (stroke) {
      return stroke.getTotalLength && stroke.getTotalLength() || 0;
    }).concat([0])));
  }

  function insertSVG(el, root) {
    if (isVoidElement(root) || root.tagName === 'CANVAS') {
      attr(root, 'hidden', true);
      var next = root.nextElementSibling;
      return equals(el, next) ? next : after(root, el);
    } else {
      var last = root.lastElementChild;
      return equals(el, last) ? last : append(root, el);
    }
  }

  function equals(el, other) {
    return attr(el, 'data-svg') === attr(other, 'data-svg');
  }

  var closeIcon = "<svg width=\"14\" height=\"14\" viewBox=\"0 0 14 14\" xmlns=\"http://www.w3.org/2000/svg\"><line fill=\"none\" stroke=\"#000\" stroke-width=\"1.1\" x1=\"1\" y1=\"1\" x2=\"13\" y2=\"13\"/><line fill=\"none\" stroke=\"#000\" stroke-width=\"1.1\" x1=\"13\" y1=\"1\" x2=\"1\" y2=\"13\"/></svg>";
  var closeLarge = "<svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><line fill=\"none\" stroke=\"#000\" stroke-width=\"1.4\" x1=\"1\" y1=\"1\" x2=\"19\" y2=\"19\"/><line fill=\"none\" stroke=\"#000\" stroke-width=\"1.4\" x1=\"19\" y1=\"1\" x2=\"1\" y2=\"19\"/></svg>";
  var marker = "<svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><rect x=\"9\" y=\"4\" width=\"1\" height=\"11\"/><rect x=\"4\" y=\"9\" width=\"11\" height=\"1\"/></svg>";
  var navbarToggleIcon = "<svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><rect y=\"9\" width=\"20\" height=\"2\"/><rect y=\"3\" width=\"20\" height=\"2\"/><rect y=\"15\" width=\"20\" height=\"2\"/></svg>";
  var overlayIcon = "<svg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"><rect x=\"19\" y=\"0\" width=\"1\" height=\"40\"/><rect x=\"0\" y=\"19\" width=\"40\" height=\"1\"/></svg>";
  var paginationNext = "<svg width=\"7\" height=\"12\" viewBox=\"0 0 7 12\" xmlns=\"http://www.w3.org/2000/svg\"><polyline fill=\"none\" stroke=\"#000\" stroke-width=\"1.2\" points=\"1 1 6 6 1 11\"/></svg>";
  var paginationPrevious = "<svg width=\"7\" height=\"12\" viewBox=\"0 0 7 12\" xmlns=\"http://www.w3.org/2000/svg\"><polyline fill=\"none\" stroke=\"#000\" stroke-width=\"1.2\" points=\"6 1 1 6 6 11\"/></svg>";
  var searchIcon = "<svg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><circle fill=\"none\" stroke=\"#000\" stroke-width=\"1.1\" cx=\"9\" cy=\"9\" r=\"7\"/><path fill=\"none\" stroke=\"#000\" stroke-width=\"1.1\" d=\"M14,14 L18,18 L14,14 Z\"/></svg>";
  var searchLarge = "<svg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"><circle fill=\"none\" stroke=\"#000\" stroke-width=\"1.8\" cx=\"17.5\" cy=\"17.5\" r=\"16.5\"/><line fill=\"none\" stroke=\"#000\" stroke-width=\"1.8\" x1=\"38\" y1=\"39\" x2=\"29\" y2=\"30\"/></svg>";
  var searchNavbar = "<svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\"><circle fill=\"none\" stroke=\"#000\" stroke-width=\"1.1\" cx=\"10.5\" cy=\"10.5\" r=\"9.5\"/><line fill=\"none\" stroke=\"#000\" stroke-width=\"1.1\" x1=\"23\" y1=\"23\" x2=\"17\" y2=\"17\"/></svg>";
  var slidenavNext = "<svg width=\"14px\" height=\"24px\" viewBox=\"0 0 14 24\" xmlns=\"http://www.w3.org/2000/svg\"><polyline fill=\"none\" stroke=\"#000\" stroke-width=\"1.4\" points=\"1.225,23 12.775,12 1.225,1 \"/></svg>";
  var slidenavNextLarge = "<svg width=\"25px\" height=\"40px\" viewBox=\"0 0 25 40\" xmlns=\"http://www.w3.org/2000/svg\"><polyline fill=\"none\" stroke=\"#000\" stroke-width=\"2\" points=\"4.002,38.547 22.527,20.024 4,1.5 \"/></svg>";
  var slidenavPrevious = "<svg width=\"14px\" height=\"24px\" viewBox=\"0 0 14 24\" xmlns=\"http://www.w3.org/2000/svg\"><polyline fill=\"none\" stroke=\"#000\" stroke-width=\"1.4\" points=\"12.775,1 1.225,12 12.775,23 \"/></svg>";
  var slidenavPreviousLarge = "<svg width=\"25px\" height=\"40px\" viewBox=\"0 0 25 40\" xmlns=\"http://www.w3.org/2000/svg\"><polyline fill=\"none\" stroke=\"#000\" stroke-width=\"2\" points=\"20.527,1.5 2,20.024 20.525,38.547 \"/></svg>";
  var spinner = "<svg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" xmlns=\"http://www.w3.org/2000/svg\"><circle fill=\"none\" stroke=\"#000\" cx=\"15\" cy=\"15\" r=\"14\"/></svg>";
  var totop = "<svg width=\"18\" height=\"10\" viewBox=\"0 0 18 10\" xmlns=\"http://www.w3.org/2000/svg\"><polyline fill=\"none\" stroke=\"#000\" stroke-width=\"1.2\" points=\"1 9 9 1 17 9 \"/></svg>";
  var parsed = {};
  var icons = {
    spinner: spinner,
    totop: totop,
    marker: marker,
    'close-icon': closeIcon,
    'close-large': closeLarge,
    'navbar-toggle-icon': navbarToggleIcon,
    'overlay-icon': overlayIcon,
    'pagination-next': paginationNext,
    'pagination-previous': paginationPrevious,
    'search-icon': searchIcon,
    'search-large': searchLarge,
    'search-navbar': searchNavbar,
    'slidenav-next': slidenavNext,
    'slidenav-next-large': slidenavNextLarge,
    'slidenav-previous': slidenavPrevious,
    'slidenav-previous-large': slidenavPreviousLarge
  };
  var Icon = {
    install: install,
    "extends": Svg,
    args: 'icon',
    props: ['icon'],
    data: {
      include: ['focusable']
    },
    isIcon: true,
    beforeConnect: function beforeConnect() {
      addClass(this.$el, 'uk-icon');
    },
    methods: {
      getSvg: function getSvg() {
        var icon = getIcon(applyRtl(this.icon));

        if (!icon) {
          return Promise.reject('Icon not found.');
        }

        return Promise.resolve(icon);
      }
    }
  };
  var IconComponent = {
    args: false,
    "extends": Icon,
    data: function data(vm) {
      return {
        icon: hyphenate(vm.constructor.options.name)
      };
    },
    beforeConnect: function beforeConnect() {
      addClass(this.$el, this.$name);
    }
  };
  var Slidenav = {
    "extends": IconComponent,
    beforeConnect: function beforeConnect() {
      addClass(this.$el, 'uk-slidenav');
    },
    computed: {
      icon: function icon(ref, $el) {
        var icon = ref.icon;
        return hasClass($el, 'uk-slidenav-large') ? icon + "-large" : icon;
      }
    }
  };
  var Search = {
    "extends": IconComponent,
    computed: {
      icon: function icon(ref, $el) {
        var icon = ref.icon;
        return hasClass($el, 'uk-search-icon') && parents($el, '.uk-search-large').length ? 'search-large' : parents($el, '.uk-search-navbar').length ? 'search-navbar' : icon;
      }
    }
  };
  var Close = {
    "extends": IconComponent,
    computed: {
      icon: function icon() {
        return "close-" + (hasClass(this.$el, 'uk-close-large') ? 'large' : 'icon');
      }
    }
  };
  var Spinner = {
    "extends": IconComponent,
    connected: function connected() {
      var this$1 = this;
      this.svg.then(function (svg) {
        return this$1.ratio !== 1 && css($('circle', svg), 'strokeWidth', 1 / this$1.ratio);
      }, noop);
    }
  };

  function install(UIkit) {
    UIkit.icon.add = function (name, svg) {
      var obj;
      var added = isString(name) ? (obj = {}, obj[name] = svg, obj) : name;
      each(added, function (svg, name) {
        icons[name] = svg;
        delete parsed[name];
      });

      if (UIkit._initialized) {
        apply(document.body, function (el) {
          return each(UIkit.getComponents(el), function (cmp) {
            cmp.$options.isIcon && cmp.icon in added && cmp.$reset();
          });
        });
      }
    };
  }

  function getIcon(icon) {
    if (!icons[icon]) {
      return null;
    }

    if (!parsed[icon]) {
      parsed[icon] = $(icons[icon].trim());
    }

    return parsed[icon].cloneNode(true);
  }

  function applyRtl(icon) {
    return isRtl ? swap(swap(icon, 'left', 'right'), 'previous', 'next') : icon;
  }

  var Img = {
    args: 'dataSrc',
    props: {
      dataSrc: String,
      dataSrcset: Boolean,
      sizes: String,
      width: Number,
      height: Number,
      offsetTop: String,
      offsetLeft: String,
      target: String
    },
    data: {
      dataSrc: '',
      dataSrcset: false,
      sizes: false,
      width: false,
      height: false,
      offsetTop: '50vh',
      offsetLeft: 0,
      target: false
    },
    computed: {
      cacheKey: function cacheKey(ref) {
        var dataSrc = ref.dataSrc;
        return this.$name + "." + dataSrc;
      },
      width: function width(ref) {
        var width = ref.width;
        var dataWidth = ref.dataWidth;
        return width || dataWidth;
      },
      height: function height(ref) {
        var height = ref.height;
        var dataHeight = ref.dataHeight;
        return height || dataHeight;
      },
      sizes: function sizes(ref) {
        var sizes = ref.sizes;
        var dataSizes = ref.dataSizes;
        return sizes || dataSizes;
      },
      isImg: function isImg(_, $el) {
        return _isImg($el);
      },
      target: {
        get: function get(ref) {
          var target = ref.target;
          return [this.$el].concat(queryAll(target, this.$el));
        },
        watch: function watch() {
          this.observe();
        }
      },
      offsetTop: function offsetTop(ref) {
        var offsetTop = ref.offsetTop;
        return toPx(offsetTop, 'height');
      },
      offsetLeft: function offsetLeft(ref) {
        var offsetLeft = ref.offsetLeft;
        return toPx(offsetLeft, 'width');
      }
    },
    connected: function connected() {
      if (storage[this.cacheKey]) {
        setSrcAttrs(this.$el, storage[this.cacheKey] || this.dataSrc, this.dataSrcset, this.sizes);
      } else if (this.isImg && this.width && this.height) {
        setSrcAttrs(this.$el, getPlaceholderImage(this.width, this.height, this.sizes));
      }

      this.observer = new IntersectionObserver(this.load, {
        rootMargin: this.offsetTop + "px " + this.offsetLeft + "px"
      });
      requestAnimationFrame(this.observe);
    },
    disconnected: function disconnected() {
      this.observer.disconnect();
    },
    update: {
      read: function read(ref) {
        var this$1 = this;
        var image = ref.image;

        if (!image && document.readyState === 'complete') {
          this.load(this.observer.takeRecords());
        }

        if (this.isImg) {
          return false;
        }

        image && image.then(function (img) {
          return img && img.currentSrc !== '' && setSrcAttrs(this$1.$el, currentSrc(img));
        });
      },
      write: function write(data) {
        if (this.dataSrcset && window.devicePixelRatio !== 1) {
          var bgSize = css(this.$el, 'backgroundSize');

          if (bgSize.match(/^(auto\s?)+$/) || toFloat(bgSize) === data.bgSize) {
            data.bgSize = getSourceSize(this.dataSrcset, this.sizes);
            css(this.$el, 'backgroundSize', data.bgSize + "px");
          }
        }
      },
      events: ['resize']
    },
    methods: {
      load: function load(entries) {
        var this$1 = this; // Old chromium based browsers (UC Browser) did not implement `isIntersecting`

        if (!entries.some(function (entry) {
          return isUndefined(entry.isIntersecting) || entry.isIntersecting;
        })) {
          return;
        }

        this._data.image = getImage(this.dataSrc, this.dataSrcset, this.sizes).then(function (img) {
          setSrcAttrs(this$1.$el, currentSrc(img), img.srcset, img.sizes);
          storage[this$1.cacheKey] = currentSrc(img);
          return img;
        }, noop);
        this.observer.disconnect();
      },
      observe: function observe() {
        var this$1 = this;

        if (!this._data.image && this._connected) {
          this.target.forEach(function (el) {
            return this$1.observer.observe(el);
          });
        }
      }
    }
  };

  function setSrcAttrs(el, src, srcset, sizes) {
    if (_isImg(el)) {
      sizes && (el.sizes = sizes);
      srcset && (el.srcset = srcset);
      src && (el.src = src);
    } else if (src) {
      var change = !includes(el.style.backgroundImage, src);

      if (change) {
        css(el, 'backgroundImage', "url(" + escape(src) + ")");
        trigger(el, createEvent('load', false));
      }
    }
  }

  function getPlaceholderImage(width, height, sizes) {
    var assign;

    if (sizes) {
      assign = Dimensions.ratio({
        width: width,
        height: height
      }, 'width', toPx(sizesToPixel(sizes))), width = assign.width, height = assign.height;
    }

    return "data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"" + width + "\" height=\"" + height + "\"></svg>";
  }

  var sizesRe = /\s*(.*?)\s*(\w+|calc\(.*?\))\s*(?:,|$)/g;

  function sizesToPixel(sizes) {
    var matches;
    sizesRe.lastIndex = 0;

    while (matches = sizesRe.exec(sizes)) {
      if (!matches[1] || window.matchMedia(matches[1]).matches) {
        matches = evaluateSize(matches[2]);
        break;
      }
    }

    return matches || '100vw';
  }

  var sizeRe = /\d+(?:\w+|%)/g;
  var additionRe = /[+-]?(\d+)/g;

  function evaluateSize(size) {
    return startsWith(size, 'calc') ? size.substring(5, size.length - 1).replace(sizeRe, function (size) {
      return toPx(size);
    }).replace(/ /g, '').match(additionRe).reduce(function (a, b) {
      return a + +b;
    }, 0) : size;
  }

  var srcSetRe = /\s+\d+w\s*(?:,|$)/g;

  function getSourceSize(srcset, sizes) {
    var srcSize = toPx(sizesToPixel(sizes));
    var descriptors = (srcset.match(srcSetRe) || []).map(toFloat).sort(function (a, b) {
      return a - b;
    });
    return descriptors.filter(function (size) {
      return size >= srcSize;
    })[0] || descriptors.pop() || '';
  }

  function _isImg(el) {
    return el.tagName === 'IMG';
  }

  function currentSrc(el) {
    return el.currentSrc || el.src;
  }

  var key = '__test__';
  var storage; // workaround for Safari's private browsing mode and accessing sessionStorage in Blink

  try {
    storage = window.sessionStorage || {};
    storage[key] = 1;
    delete storage[key];
  } catch (e) {
    storage = {};
  }

  var Media = {
    props: {
      media: Boolean
    },
    data: {
      media: false
    },
    computed: {
      matchMedia: function matchMedia() {
        var media = toMedia(this.media);
        return !media || window.matchMedia(media).matches;
      }
    }
  };

  function toMedia(value) {
    if (isString(value)) {
      if (value[0] === '@') {
        var name = "breakpoint-" + value.substr(1);
        value = toFloat(getCssVar(name));
      } else if (isNaN(value)) {
        return value;
      }
    }

    return value && !isNaN(value) ? "(min-width: " + value + "px)" : false;
  }

  var Leader = {
    mixins: [Class, Media],
    props: {
      fill: String
    },
    data: {
      fill: '',
      clsWrapper: 'uk-leader-fill',
      clsHide: 'uk-leader-hide',
      attrFill: 'data-fill'
    },
    computed: {
      fill: function fill(ref) {
        var fill = ref.fill;
        return fill || getCssVar('leader-fill-content');
      }
    },
    connected: function connected() {
      var assign;
      assign = wrapInner(this.$el, "<span class=\"" + this.clsWrapper + "\">"), this.wrapper = assign[0];
    },
    disconnected: function disconnected() {
      unwrap(this.wrapper.childNodes);
    },
    update: {
      read: function read(ref) {
        var changed = ref.changed;
        var width = ref.width;
        var prev = width;
        width = Math.floor(this.$el.offsetWidth / 2);
        return {
          width: width,
          fill: this.fill,
          changed: changed || prev !== width,
          hide: !this.matchMedia
        };
      },
      write: function write(data) {
        toggleClass(this.wrapper, this.clsHide, data.hide);

        if (data.changed) {
          data.changed = false;
          attr(this.wrapper, this.attrFill, new Array(data.width).join(data.fill));
        }
      },
      events: ['resize']
    }
  };
  var Container = {
    props: {
      container: Boolean
    },
    data: {
      container: true
    },
    computed: {
      container: function container(ref) {
        var container = ref.container;
        return container === true && this.$container || container && $(container);
      }
    }
  };
  var active$1 = [];
  var Modal = {
    mixins: [Class, Container, Togglable],
    props: {
      selPanel: String,
      selClose: String,
      escClose: Boolean,
      bgClose: Boolean,
      stack: Boolean
    },
    data: {
      cls: 'uk-open',
      escClose: true,
      bgClose: true,
      overlay: true,
      stack: false
    },
    computed: {
      panel: function panel(ref, $el) {
        var selPanel = ref.selPanel;
        return $(selPanel, $el);
      },
      transitionElement: function transitionElement() {
        return this.panel;
      },
      bgClose: function bgClose(ref) {
        var bgClose = ref.bgClose;
        return bgClose && this.panel;
      }
    },
    beforeDisconnect: function beforeDisconnect() {
      if (this.isToggled()) {
        this.toggleNow(this.$el, false);
      }
    },
    events: [{
      name: 'click',
      delegate: function delegate() {
        return this.selClose;
      },
      handler: function handler(e) {
        e.preventDefault();
        this.hide();
      }
    }, {
      name: 'toggle',
      self: true,
      handler: function handler(e) {
        if (e.defaultPrevented) {
          return;
        }

        e.preventDefault();
        this.toggle();
      }
    }, {
      name: 'beforeshow',
      self: true,
      handler: function handler(e) {
        if (includes(active$1, this)) {
          return false;
        }

        if (!this.stack && active$1.length) {
          Promise.all(active$1.map(function (modal) {
            return modal.hide();
          })).then(this.show);
          e.preventDefault();
        } else {
          active$1.push(this);
        }
      }
    }, {
      name: 'show',
      self: true,
      handler: function handler() {
        var this$1 = this;

        if (width(window) - width(document) && this.overlay) {
          css(document.body, 'overflowY', 'scroll');
        }

        addClass(document.documentElement, this.clsPage);

        if (this.bgClose) {
          once(this.$el, 'hide', delayOn(document, 'click', function (ref) {
            var defaultPrevented = ref.defaultPrevented;
            var target = ref.target;
            var current = last(active$1);

            if (!defaultPrevented && current === this$1 && (!current.overlay || within(target, current.$el)) && !within(target, current.panel)) {
              current.hide();
            }
          }), {
            self: true
          });
        }

        if (this.escClose) {
          once(this.$el, 'hide', on(document, 'keydown', function (e) {
            var current = last(active$1);

            if (e.keyCode === 27 && current === this$1) {
              e.preventDefault();
              current.hide();
            }
          }), {
            self: true
          });
        }
      }
    }, {
      name: 'hidden',
      self: true,
      handler: function handler() {
        var this$1 = this;
        active$1.splice(active$1.indexOf(this), 1);

        if (!active$1.length) {
          css(document.body, 'overflowY', '');
        }

        if (!active$1.some(function (modal) {
          return modal.clsPage === this$1.clsPage;
        })) {
          removeClass(document.documentElement, this.clsPage);
        }
      }
    }],
    methods: {
      toggle: function toggle() {
        return this.isToggled() ? this.hide() : this.show();
      },
      show: function show() {
        var this$1 = this;

        if (this.container && this.$el.parentNode !== this.container) {
          append(this.container, this.$el);
          return new Promise(function (resolve) {
            return requestAnimationFrame(function () {
              return this$1.show().then(resolve);
            });
          });
        }

        return this.toggleElement(this.$el, true, animate$1(this));
      },
      hide: function hide() {
        return this.toggleElement(this.$el, false, animate$1(this));
      }
    }
  };

  function animate$1(ref) {
    var transitionElement = ref.transitionElement;
    var _toggle = ref._toggle;
    return function (el, show) {
      return new Promise(function (resolve, reject) {
        return once(el, 'show hide', function () {
          el._reject && el._reject();
          el._reject = reject;

          _toggle(el, show);

          var off = once(transitionElement, 'transitionstart', function () {
            once(transitionElement, 'transitionend transitioncancel', resolve, {
              self: true
            });
            clearTimeout(timer);
          }, {
            self: true
          });
          var timer = setTimeout(function () {
            off();
            resolve();
          }, toMs(css(transitionElement, 'transitionDuration')));
        });
      });
    };
  }

  var Modal$1 = {
    install: install$1,
    mixins: [Modal],
    data: {
      clsPage: 'uk-modal-page',
      selPanel: '.uk-modal-dialog',
      selClose: '.uk-modal-close, .uk-modal-close-default, .uk-modal-close-outside, .uk-modal-close-full'
    },
    events: [{
      name: 'show',
      self: true,
      handler: function handler() {
        if (hasClass(this.panel, 'uk-margin-auto-vertical')) {
          addClass(this.$el, 'uk-flex');
        } else {
          css(this.$el, 'display', 'block');
        }

        height(this.$el); // force reflow
      }
    }, {
      name: 'hidden',
      self: true,
      handler: function handler() {
        css(this.$el, 'display', '');
        removeClass(this.$el, 'uk-flex');
      }
    }]
  };

  function install$1(UIkit) {
    UIkit.modal.dialog = function (content, options) {
      var dialog = UIkit.modal(" <div class=\"uk-modal\"> <div class=\"uk-modal-dialog\">" + content + "</div> </div> ", options);
      dialog.show();
      on(dialog.$el, 'hidden', function () {
        return Promise.resolve(function () {
          return dialog.$destroy(true);
        });
      }, {
        self: true
      });
      return dialog;
    };

    UIkit.modal.alert = function (message, options) {
      options = assign({
        bgClose: false,
        escClose: false,
        labels: UIkit.modal.labels
      }, options);
      return new Promise(function (resolve) {
        return on(UIkit.modal.dialog(" <div class=\"uk-modal-body\">" + (isString(message) ? message : html(message)) + "</div> <div class=\"uk-modal-footer uk-text-right\"> <button class=\"uk-button uk-button-primary uk-modal-close\" autofocus>" + options.labels.ok + "</button> </div> ", options).$el, 'hide', resolve);
      });
    };

    UIkit.modal.confirm = function (message, options) {
      options = assign({
        bgClose: false,
        escClose: true,
        labels: UIkit.modal.labels
      }, options);
      return new Promise(function (resolve, reject) {
        var confirm = UIkit.modal.dialog(" <form> <div class=\"uk-modal-body\">" + (isString(message) ? message : html(message)) + "</div> <div class=\"uk-modal-footer uk-text-right\"> <button class=\"uk-button uk-button-default uk-modal-close\" type=\"button\">" + options.labels.cancel + "</button> <button class=\"uk-button uk-button-primary\" autofocus>" + options.labels.ok + "</button> </div> </form> ", options);
        var resolved = false;
        on(confirm.$el, 'submit', 'form', function (e) {
          e.preventDefault();
          resolve();
          resolved = true;
          confirm.hide();
        });
        on(confirm.$el, 'hide', function () {
          if (!resolved) {
            reject();
          }
        });
      });
    };

    UIkit.modal.prompt = function (message, value, options) {
      options = assign({
        bgClose: false,
        escClose: true,
        labels: UIkit.modal.labels
      }, options);
      return new Promise(function (resolve) {
        var prompt = UIkit.modal.dialog(" <form class=\"uk-form-stacked\"> <div class=\"uk-modal-body\"> <label>" + (isString(message) ? message : html(message)) + "</label> <input class=\"uk-input\" autofocus> </div> <div class=\"uk-modal-footer uk-text-right\"> <button class=\"uk-button uk-button-default uk-modal-close\" type=\"button\">" + options.labels.cancel + "</button> <button class=\"uk-button uk-button-primary\">" + options.labels.ok + "</button> </div> </form> ", options),
            input = $('input', prompt.$el);
        input.value = value;
        var resolved = false;
        on(prompt.$el, 'submit', 'form', function (e) {
          e.preventDefault();
          resolve(input.value);
          resolved = true;
          prompt.hide();
        });
        on(prompt.$el, 'hide', function () {
          if (!resolved) {
            resolve(null);
          }
        });
      });
    };

    UIkit.modal.labels = {
      ok: 'Ok',
      cancel: 'Cancel'
    };
  }

  var Nav = {
    "extends": Accordion,
    data: {
      targets: '> .uk-parent',
      toggle: '> a',
      content: '> ul'
    }
  };
  var Navbar = {
    mixins: [Class, FlexBug],
    props: {
      dropdown: String,
      mode: 'list',
      align: String,
      offset: Number,
      boundary: Boolean,
      boundaryAlign: Boolean,
      clsDrop: String,
      delayShow: Number,
      delayHide: Number,
      dropbar: Boolean,
      dropbarMode: String,
      dropbarAnchor: Boolean,
      duration: Number
    },
    data: {
      dropdown: '.uk-navbar-nav > li',
      align: !isRtl ? 'left' : 'right',
      clsDrop: 'uk-navbar-dropdown',
      mode: undefined,
      offset: undefined,
      delayShow: undefined,
      delayHide: undefined,
      boundaryAlign: undefined,
      flip: 'x',
      boundary: true,
      dropbar: false,
      dropbarMode: 'slide',
      dropbarAnchor: false,
      duration: 200,
      forceHeight: true,
      selMinHeight: '.uk-navbar-nav > li > a, .uk-navbar-item, .uk-navbar-toggle'
    },
    computed: {
      boundary: function boundary(ref, $el) {
        var boundary = ref.boundary;
        var boundaryAlign = ref.boundaryAlign;
        return boundary === true || boundaryAlign ? $el : boundary;
      },
      dropbarAnchor: function dropbarAnchor(ref, $el) {
        var dropbarAnchor = ref.dropbarAnchor;
        return query(dropbarAnchor, $el);
      },
      pos: function pos(ref) {
        var align = ref.align;
        return "bottom-" + align;
      },
      dropdowns: function dropdowns(ref, $el) {
        var dropdown = ref.dropdown;
        var clsDrop = ref.clsDrop;
        return $$(dropdown + " ." + clsDrop, $el);
      }
    },
    beforeConnect: function beforeConnect() {
      var ref = this.$props;
      var dropbar = ref.dropbar;
      this.dropbar = dropbar && (query(dropbar, this.$el) || $('+ .uk-navbar-dropbar', this.$el) || $('<div></div>'));

      if (this.dropbar) {
        addClass(this.dropbar, 'uk-navbar-dropbar');

        if (this.dropbarMode === 'slide') {
          addClass(this.dropbar, 'uk-navbar-dropbar-slide');
        }
      }
    },
    disconnected: function disconnected() {
      this.dropbar && _remove(this.dropbar);
    },
    update: function update() {
      var this$1 = this;
      this.$create('drop', this.dropdowns.filter(function (el) {
        return !this$1.getDropdown(el);
      }), assign({}, this.$props, {
        boundary: this.boundary,
        pos: this.pos,
        offset: this.dropbar || this.offset
      }));
    },
    events: [{
      name: 'mouseover',
      delegate: function delegate() {
        return this.dropdown;
      },
      handler: function handler(ref) {
        var current = ref.current;
        var active = this.getActive();

        if (active && active.toggle && !within(active.toggle.$el, current) && !active.tracker.movesTo(active.$el)) {
          active.hide(false);
        }
      }
    }, {
      name: 'mouseleave',
      el: function el() {
        return this.dropbar;
      },
      handler: function handler() {
        var active = this.getActive();

        if (active && !this.dropdowns.some(function (el) {
          return matches(el, ':hover');
        })) {
          active.hide();
        }
      }
    }, {
      name: 'beforeshow',
      capture: true,
      filter: function filter() {
        return this.dropbar;
      },
      handler: function handler() {
        if (!this.dropbar.parentNode) {
          after(this.dropbarAnchor || this.$el, this.dropbar);
        }
      }
    }, {
      name: 'show',
      capture: true,
      filter: function filter() {
        return this.dropbar;
      },
      handler: function handler(_, drop) {
        var $el = drop.$el;
        var dir = drop.dir;
        this.clsDrop && addClass($el, this.clsDrop + "-dropbar");

        if (dir === 'bottom') {
          this.transitionTo($el.offsetHeight + toFloat(css($el, 'marginTop')) + toFloat(css($el, 'marginBottom')), $el);
        }
      }
    }, {
      name: 'beforehide',
      filter: function filter() {
        return this.dropbar;
      },
      handler: function handler(e, ref) {
        var $el = ref.$el;
        var active = this.getActive();

        if (matches(this.dropbar, ':hover') && active && active.$el === $el) {
          e.preventDefault();
        }
      }
    }, {
      name: 'hide',
      filter: function filter() {
        return this.dropbar;
      },
      handler: function handler(_, ref) {
        var $el = ref.$el;
        var active = this.getActive();

        if (!active || active && active.$el === $el) {
          this.transitionTo(0);
        }
      }
    }],
    methods: {
      getActive: function getActive() {
        var ref = this.dropdowns.map(this.getDropdown).filter(function (drop) {
          return drop && drop.isActive();
        });
        var active = ref[0];
        return active && includes(active.mode, 'hover') && within(active.toggle.$el, this.$el) && active;
      },
      transitionTo: function transitionTo(newHeight, el) {
        var this$1 = this;
        var ref = this;
        var dropbar = ref.dropbar;
        var oldHeight = isVisible(dropbar) ? height(dropbar) : 0;
        el = oldHeight < newHeight && el;
        css(el, 'clip', "rect(0," + el.offsetWidth + "px," + oldHeight + "px,0)");
        height(dropbar, oldHeight);
        Transition.cancel([el, dropbar]);
        return Promise.all([Transition.start(dropbar, {
          height: newHeight
        }, this.duration), Transition.start(el, {
          clip: "rect(0," + el.offsetWidth + "px," + newHeight + "px,0)"
        }, this.duration)])["catch"](noop).then(function () {
          css(el, {
            clip: ''
          });
          this$1.$update(dropbar);
        });
      },
      getDropdown: function getDropdown(el) {
        return this.$getComponent(el, 'drop') || this.$getComponent(el, 'dropdown');
      }
    }
  };
  var Offcanvas = {
    mixins: [Modal],
    args: 'mode',
    props: {
      mode: String,
      flip: Boolean,
      overlay: Boolean
    },
    data: {
      mode: 'slide',
      flip: false,
      overlay: false,
      clsPage: 'uk-offcanvas-page',
      clsContainer: 'uk-offcanvas-container',
      selPanel: '.uk-offcanvas-bar',
      clsFlip: 'uk-offcanvas-flip',
      clsContainerAnimation: 'uk-offcanvas-container-animation',
      clsSidebarAnimation: 'uk-offcanvas-bar-animation',
      clsMode: 'uk-offcanvas',
      clsOverlay: 'uk-offcanvas-overlay',
      selClose: '.uk-offcanvas-close',
      container: false
    },
    computed: {
      clsFlip: function clsFlip(ref) {
        var flip = ref.flip;
        var clsFlip = ref.clsFlip;
        return flip ? clsFlip : '';
      },
      clsOverlay: function clsOverlay(ref) {
        var overlay = ref.overlay;
        var clsOverlay = ref.clsOverlay;
        return overlay ? clsOverlay : '';
      },
      clsMode: function clsMode(ref) {
        var mode = ref.mode;
        var clsMode = ref.clsMode;
        return clsMode + "-" + mode;
      },
      clsSidebarAnimation: function clsSidebarAnimation(ref) {
        var mode = ref.mode;
        var clsSidebarAnimation = ref.clsSidebarAnimation;
        return mode === 'none' || mode === 'reveal' ? '' : clsSidebarAnimation;
      },
      clsContainerAnimation: function clsContainerAnimation(ref) {
        var mode = ref.mode;
        var clsContainerAnimation = ref.clsContainerAnimation;
        return mode !== 'push' && mode !== 'reveal' ? '' : clsContainerAnimation;
      },
      transitionElement: function transitionElement(ref) {
        var mode = ref.mode;
        return mode === 'reveal' ? this.panel.parentNode : this.panel;
      }
    },
    events: [{
      name: 'click',
      delegate: function delegate() {
        return 'a[href^="#"]';
      },
      handler: function handler(ref) {
        var hash = ref.current.hash;
        var defaultPrevented = ref.defaultPrevented;

        if (!defaultPrevented && hash && $(hash, document.body)) {
          this.hide();
        }
      }
    }, {
      name: 'touchstart',
      passive: true,
      el: function el() {
        return this.panel;
      },
      handler: function handler(ref) {
        var targetTouches = ref.targetTouches;

        if (targetTouches.length === 1) {
          this.clientY = targetTouches[0].clientY;
        }
      }
    }, {
      name: 'touchmove',
      self: true,
      passive: false,
      filter: function filter() {
        return this.overlay;
      },
      handler: function handler(e) {
        e.cancelable && e.preventDefault();
      }
    }, {
      name: 'touchmove',
      passive: false,
      el: function el() {
        return this.panel;
      },
      handler: function handler(e) {
        if (e.targetTouches.length !== 1) {
          return;
        }

        var clientY = event.targetTouches[0].clientY - this.clientY;
        var ref = this.panel;
        var scrollTop = ref.scrollTop;
        var scrollHeight = ref.scrollHeight;
        var clientHeight = ref.clientHeight;

        if (clientHeight >= scrollHeight || scrollTop === 0 && clientY > 0 || scrollHeight - scrollTop <= clientHeight && clientY < 0) {
          e.cancelable && e.preventDefault();
        }
      }
    }, {
      name: 'show',
      self: true,
      handler: function handler() {
        if (this.mode === 'reveal' && !hasClass(this.panel.parentNode, this.clsMode)) {
          wrapAll(this.panel, '<div>');
          addClass(this.panel.parentNode, this.clsMode);
        }

        css(document.documentElement, 'overflowY', this.overlay ? 'hidden' : '');
        addClass(document.body, this.clsContainer, this.clsFlip);
        css(document.body, 'touch-action', 'pan-y pinch-zoom');
        css(this.$el, 'display', 'block');
        addClass(this.$el, this.clsOverlay);
        addClass(this.panel, this.clsSidebarAnimation, this.mode !== 'reveal' ? this.clsMode : '');
        height(document.body); // force reflow

        addClass(document.body, this.clsContainerAnimation);
        this.clsContainerAnimation && suppressUserScale();
      }
    }, {
      name: 'hide',
      self: true,
      handler: function handler() {
        removeClass(document.body, this.clsContainerAnimation);
        css(document.body, 'touch-action', '');
      }
    }, {
      name: 'hidden',
      self: true,
      handler: function handler() {
        this.clsContainerAnimation && resumeUserScale();

        if (this.mode === 'reveal') {
          unwrap(this.panel);
        }

        removeClass(this.panel, this.clsSidebarAnimation, this.clsMode);
        removeClass(this.$el, this.clsOverlay);
        css(this.$el, 'display', '');
        removeClass(document.body, this.clsContainer, this.clsFlip);
        css(document.documentElement, 'overflowY', '');
      }
    }, {
      name: 'swipeLeft swipeRight',
      handler: function handler(e) {
        if (this.isToggled() && endsWith(e.type, 'Left') ^ this.flip) {
          this.hide();
        }
      }
    }]
  }; // Chrome in responsive mode zooms page upon opening offcanvas

  function suppressUserScale() {
    getViewport().content += ',user-scalable=0';
  }

  function resumeUserScale() {
    var viewport = getViewport();
    viewport.content = viewport.content.replace(/,user-scalable=0$/, '');
  }

  function getViewport() {
    return $('meta[name="viewport"]', document.head) || append(document.head, '<meta name="viewport">');
  }

  var OverflowAuto = {
    mixins: [Class],
    props: {
      selContainer: String,
      selContent: String
    },
    data: {
      selContainer: '.uk-modal',
      selContent: '.uk-modal-dialog'
    },
    computed: {
      container: function container(ref, $el) {
        var selContainer = ref.selContainer;
        return closest($el, selContainer);
      },
      content: function content(ref, $el) {
        var selContent = ref.selContent;
        return closest($el, selContent);
      }
    },
    connected: function connected() {
      css(this.$el, 'minHeight', 150);
    },
    update: {
      read: function read() {
        if (!this.content || !this.container) {
          return false;
        }

        return {
          current: toFloat(css(this.$el, 'maxHeight')),
          max: Math.max(150, height(this.container) - (offset(this.content).height - height(this.$el)))
        };
      },
      write: function write(ref) {
        var current = ref.current;
        var max = ref.max;
        css(this.$el, 'maxHeight', max);

        if (Math.round(current) !== Math.round(max)) {
          trigger(this.$el, 'resize');
        }
      },
      events: ['resize']
    }
  };
  var Responsive = {
    props: ['width', 'height'],
    connected: function connected() {
      addClass(this.$el, 'uk-responsive-width');
    },
    update: {
      read: function read() {
        return isVisible(this.$el) && this.width && this.height ? {
          width: width(this.$el.parentNode),
          height: this.height
        } : false;
      },
      write: function write(dim) {
        height(this.$el, Dimensions.contain({
          height: this.height,
          width: this.width
        }, dim).height);
      },
      events: ['resize']
    }
  };
  var Scroll = {
    props: {
      duration: Number,
      offset: Number
    },
    data: {
      duration: 1000,
      offset: 0
    },
    methods: {
      scrollTo: function scrollTo(el) {
        var this$1 = this;
        el = el && $(el) || document.body;
        var docHeight = height(document);
        var winHeight = height(window);
        var target = offset(el).top - this.offset;

        if (target + winHeight > docHeight) {
          target = docHeight - winHeight;
        }

        if (!trigger(this.$el, 'beforescroll', [this, el])) {
          return;
        }

        var start = Date.now();
        var startY = window.pageYOffset;

        var step = function step() {
          var currentY = startY + (target - startY) * ease(clamp((Date.now() - start) / this$1.duration));
          scrollTop(window, currentY); // scroll more if we have not reached our destination

          if (currentY !== target) {
            requestAnimationFrame(step);
          } else {
            trigger(this$1.$el, 'scrolled', [this$1, el]);
          }
        };

        step();
      }
    },
    events: {
      click: function click(e) {
        if (e.defaultPrevented) {
          return;
        }

        e.preventDefault();
        this.scrollTo(escape(decodeURIComponent(this.$el.hash)).substr(1));
      }
    }
  };

  function ease(k) {
    return 0.5 * (1 - Math.cos(Math.PI * k));
  }

  var Scrollspy = {
    args: 'cls',
    props: {
      cls: String,
      target: String,
      hidden: Boolean,
      offsetTop: Number,
      offsetLeft: Number,
      repeat: Boolean,
      delay: Number
    },
    data: function data() {
      return {
        cls: false,
        target: false,
        hidden: true,
        offsetTop: 0,
        offsetLeft: 0,
        repeat: false,
        delay: 0,
        inViewClass: 'uk-scrollspy-inview'
      };
    },
    computed: {
      elements: function elements(ref, $el) {
        var target = ref.target;
        return target ? $$(target, $el) : [$el];
      }
    },
    update: [{
      write: function write() {
        if (this.hidden) {
          css(filter(this.elements, ":not(." + this.inViewClass + ")"), 'visibility', 'hidden');
        }
      }
    }, {
      read: function read(ref) {
        var this$1 = this;
        var update = ref.update;

        if (!update) {
          return;
        }

        this.elements.forEach(function (el) {
          var state = el._ukScrollspyState;

          if (!state) {
            state = {
              cls: data(el, 'uk-scrollspy-class') || this$1.cls
            };
          }

          state.show = isInView(el, this$1.offsetTop, this$1.offsetLeft);
          el._ukScrollspyState = state;
        });
      },
      write: function write(data) {
        var this$1 = this; // Let child components be applied at least once first

        if (!data.update) {
          this.$emit();
          return data.update = true;
        }

        this.elements.forEach(function (el) {
          var state = el._ukScrollspyState;

          var toggle = function toggle(inview) {
            css(el, 'visibility', !inview && this$1.hidden ? 'hidden' : '');
            toggleClass(el, this$1.inViewClass, inview);
            toggleClass(el, state.cls);
            trigger(el, inview ? 'inview' : 'outview');
            state.inview = inview;
            this$1.$update(el);
          };

          if (state.show && !state.inview && !state.queued) {
            state.queued = true;
            data.promise = (data.promise || Promise.resolve()).then(function () {
              return new Promise(function (resolve) {
                return setTimeout(resolve, this$1.delay);
              });
            }).then(function () {
              toggle(true);
              setTimeout(function () {
                return state.queued = false;
              }, 300);
            });
          } else if (!state.show && state.inview && !state.queued && this$1.repeat) {
            toggle(false);
          }
        });
      },
      events: ['scroll', 'resize']
    }]
  };
  var ScrollspyNav = {
    props: {
      cls: String,
      closest: String,
      scroll: Boolean,
      overflow: Boolean,
      offset: Number
    },
    data: {
      cls: 'uk-active',
      closest: false,
      scroll: false,
      overflow: true,
      offset: 0
    },
    computed: {
      links: function links(_, $el) {
        return $$('a[href^="#"]', $el).filter(function (el) {
          return el.hash;
        });
      },
      elements: function elements(ref) {
        var selector = ref.closest;
        return closest(this.links, selector || '*');
      },
      targets: function targets() {
        return $$(this.links.map(function (el) {
          return escape(el.hash).substr(1);
        }).join(','));
      }
    },
    update: [{
      read: function read() {
        if (this.scroll) {
          this.$create('scroll', this.links, {
            offset: this.offset || 0
          });
        }
      }
    }, {
      read: function read(data) {
        var this$1 = this;
        var scroll = window.pageYOffset + this.offset + 1;
        var max = height(document) - height(window) + this.offset;
        data.active = false;
        this.targets.every(function (el, i) {
          var ref = offset(el);
          var top = ref.top;
          var last = i + 1 === this$1.targets.length;

          if (!this$1.overflow && (i === 0 && top > scroll || last && top + el.offsetTop < scroll)) {
            return false;
          }

          if (!last && offset(this$1.targets[i + 1]).top <= scroll) {
            return true;
          }

          if (scroll >= max) {
            for (var j = this$1.targets.length - 1; j > i; j--) {
              if (isInView(this$1.targets[j])) {
                el = this$1.targets[j];
                break;
              }
            }
          }

          return !(data.active = $(filter(this$1.links, "[href=\"#" + el.id + "\"]")));
        });
      },
      write: function write(ref) {
        var active = ref.active;
        this.links.forEach(function (el) {
          return el.blur();
        });
        removeClass(this.elements, this.cls);

        if (active) {
          trigger(this.$el, 'active', [active, addClass(this.closest ? closest(active, this.closest) : active, this.cls)]);
        }
      },
      events: ['scroll', 'resize']
    }]
  };
  var Sticky = {
    mixins: [Class, Media],
    props: {
      top: null,
      bottom: Boolean,
      offset: String,
      animation: String,
      clsActive: String,
      clsInactive: String,
      clsFixed: String,
      clsBelow: String,
      selTarget: String,
      widthElement: Boolean,
      showOnUp: Boolean,
      targetOffset: Number
    },
    data: {
      top: 0,
      bottom: false,
      offset: 0,
      animation: '',
      clsActive: 'uk-active',
      clsInactive: '',
      clsFixed: 'uk-sticky-fixed',
      clsBelow: 'uk-sticky-below',
      selTarget: '',
      widthElement: false,
      showOnUp: false,
      targetOffset: false
    },
    computed: {
      offset: function offset(ref) {
        var offset = ref.offset;
        return toPx(offset);
      },
      selTarget: function selTarget(ref, $el) {
        var selTarget = ref.selTarget;
        return selTarget && $(selTarget, $el) || $el;
      },
      widthElement: function widthElement(ref, $el) {
        var widthElement = ref.widthElement;
        return query(widthElement, $el) || this.placeholder;
      },
      isActive: {
        get: function get() {
          return hasClass(this.selTarget, this.clsActive);
        },
        set: function set(value) {
          if (value && !this.isActive) {
            replaceClass(this.selTarget, this.clsInactive, this.clsActive);
            trigger(this.$el, 'active');
          } else if (!value && !hasClass(this.selTarget, this.clsInactive)) {
            replaceClass(this.selTarget, this.clsActive, this.clsInactive);
            trigger(this.$el, 'inactive');
          }
        }
      }
    },
    connected: function connected() {
      this.placeholder = $('+ .uk-sticky-placeholder', this.$el) || $('<div class="uk-sticky-placeholder"></div>');
      this.isFixed = false;
      this.isActive = false;
    },
    disconnected: function disconnected() {
      if (this.isFixed) {
        this.hide();
        removeClass(this.selTarget, this.clsInactive);
      }

      _remove(this.placeholder);

      this.placeholder = null;
      this.widthElement = null;
    },
    events: [{
      name: 'load hashchange popstate',
      el: window,
      handler: function handler() {
        var this$1 = this;

        if (!(this.targetOffset !== false && location.hash && window.pageYOffset > 0)) {
          return;
        }

        var target = $(location.hash);

        if (target) {
          fastdom.read(function () {
            var ref = offset(target);
            var top = ref.top;
            var elTop = offset(this$1.$el).top;
            var elHeight = this$1.$el.offsetHeight;

            if (this$1.isFixed && elTop + elHeight >= top && elTop <= top + target.offsetHeight) {
              scrollTop(window, top - elHeight - (isNumeric(this$1.targetOffset) ? this$1.targetOffset : 0) - this$1.offset);
            }
          });
        }
      }
    }],
    update: [{
      read: function read(ref, type) {
        var height = ref.height;

        if (this.isActive && type !== 'update') {
          this.hide();
          height = this.$el.offsetHeight;
          this.show();
        }

        height = !this.isActive ? this.$el.offsetHeight : height;
        this.topOffset = offset(this.isFixed ? this.placeholder : this.$el).top;
        this.bottomOffset = this.topOffset + height;
        var bottom = parseProp('bottom', this);
        this.top = Math.max(toFloat(parseProp('top', this)), this.topOffset) - this.offset;
        this.bottom = bottom && bottom - height;
        this.inactive = !this.matchMedia;
        return {
          lastScroll: false,
          height: height,
          margins: css(this.$el, ['marginTop', 'marginBottom', 'marginLeft', 'marginRight'])
        };
      },
      write: function write(ref) {
        var height = ref.height;
        var margins = ref.margins;
        var ref$1 = this;
        var placeholder = ref$1.placeholder;
        css(placeholder, assign({
          height: height
        }, margins));

        if (!within(placeholder, document)) {
          after(this.$el, placeholder);
          attr(placeholder, 'hidden', '');
        } // ensure active/inactive classes are applied


        this.isActive = this.isActive;
      },
      events: ['resize']
    }, {
      read: function read(ref) {
        var scroll = ref.scroll;
        if (scroll === void 0) scroll = 0;
        this.width = (isVisible(this.widthElement) ? this.widthElement : this.$el).offsetWidth;
        this.scroll = window.pageYOffset;
        return {
          dir: scroll <= this.scroll ? 'down' : 'up',
          scroll: this.scroll,
          visible: isVisible(this.$el),
          top: offsetPosition(this.placeholder)[0]
        };
      },
      write: function write(data, type) {
        var this$1 = this;
        var initTimestamp = data.initTimestamp;
        if (initTimestamp === void 0) initTimestamp = 0;
        var dir = data.dir;
        var lastDir = data.lastDir;
        var lastScroll = data.lastScroll;
        var scroll = data.scroll;
        var top = data.top;
        var visible = data.visible;
        var now = performance.now();
        data.lastScroll = scroll;

        if (scroll < 0 || scroll === lastScroll || !visible || this.disabled || this.showOnUp && type !== 'scroll') {
          return;
        }

        if (now - initTimestamp > 300 || dir !== lastDir) {
          data.initScroll = scroll;
          data.initTimestamp = now;
        }

        data.lastDir = dir;

        if (this.showOnUp && Math.abs(data.initScroll - scroll) <= 30 && Math.abs(lastScroll - scroll) <= 10) {
          return;
        }

        if (this.inactive || scroll < this.top || this.showOnUp && (scroll <= this.top || dir === 'down' || dir === 'up' && !this.isFixed && scroll <= this.bottomOffset)) {
          if (!this.isFixed) {
            if (Animation.inProgress(this.$el) && top > scroll) {
              Animation.cancel(this.$el);
              this.hide();
            }

            return;
          }

          this.isFixed = false;

          if (this.animation && scroll > this.topOffset) {
            Animation.cancel(this.$el);
            Animation.out(this.$el, this.animation).then(function () {
              return this$1.hide();
            }, noop);
          } else {
            this.hide();
          }
        } else if (this.isFixed) {
          this.update();
        } else if (this.animation) {
          Animation.cancel(this.$el);
          this.show();
          Animation["in"](this.$el, this.animation)["catch"](noop);
        } else {
          this.show();
        }
      },
      events: ['resize', 'scroll']
    }],
    methods: {
      show: function show() {
        this.isFixed = true;
        this.update();
        attr(this.placeholder, 'hidden', null);
      },
      hide: function hide() {
        this.isActive = false;
        removeClass(this.$el, this.clsFixed, this.clsBelow);
        css(this.$el, {
          position: '',
          top: '',
          width: ''
        });
        attr(this.placeholder, 'hidden', '');
      },
      update: function update() {
        var active = this.top !== 0 || this.scroll > this.top;
        var top = Math.max(0, this.offset);

        if (this.bottom && this.scroll > this.bottom - this.offset) {
          top = this.bottom - this.scroll;
        }

        css(this.$el, {
          position: 'fixed',
          top: top + "px",
          width: this.width
        });
        this.isActive = active;
        toggleClass(this.$el, this.clsBelow, this.scroll > this.bottomOffset);
        addClass(this.$el, this.clsFixed);
      }
    }
  };

  function parseProp(prop, ref) {
    var $props = ref.$props;
    var $el = ref.$el;
    var propOffset = ref[prop + "Offset"];
    var value = $props[prop];

    if (!value) {
      return;
    }

    if (isNumeric(value) && isString(value) && value.match(/^-?\d/)) {
      return propOffset + toPx(value);
    } else {
      return offset(value === true ? $el.parentNode : query(value, $el)).bottom;
    }
  }

  var Switcher = {
    mixins: [Togglable],
    args: 'connect',
    props: {
      connect: String,
      toggle: String,
      active: Number,
      swiping: Boolean
    },
    data: {
      connect: '~.uk-switcher',
      toggle: '> * > :first-child',
      active: 0,
      swiping: true,
      cls: 'uk-active',
      clsContainer: 'uk-switcher',
      attrItem: 'uk-switcher-item',
      queued: true
    },
    computed: {
      connects: function connects(ref, $el) {
        var connect = ref.connect;
        return queryAll(connect, $el);
      },
      toggles: function toggles(ref, $el) {
        var toggle = ref.toggle;
        return $$(toggle, $el);
      }
    },
    events: [{
      name: 'click',
      delegate: function delegate() {
        return this.toggle + ":not(.uk-disabled)";
      },
      handler: function handler(e) {
        e.preventDefault();
        this.show(toNodes(this.$el.children).filter(function (el) {
          return within(e.current, el);
        })[0]);
      }
    }, {
      name: 'click',
      el: function el() {
        return this.connects;
      },
      delegate: function delegate() {
        return "[" + this.attrItem + "],[data-" + this.attrItem + "]";
      },
      handler: function handler(e) {
        e.preventDefault();
        this.show(data(e.current, this.attrItem));
      }
    }, {
      name: 'swipeRight swipeLeft',
      filter: function filter() {
        return this.swiping;
      },
      el: function el() {
        return this.connects;
      },
      handler: function handler(ref) {
        var type = ref.type;
        this.show(endsWith(type, 'Left') ? 'next' : 'previous');
      }
    }],
    update: function update() {
      var this$1 = this;
      this.connects.forEach(function (list) {
        return this$1.updateAria(list.children);
      });
      var ref = this.$el;
      var children = ref.children;
      this.show(filter(children, "." + this.cls)[0] || children[this.active] || children[0]);
      this.swiping && css(this.connects, 'touch-action', 'pan-y pinch-zoom');
    },
    methods: {
      index: function index() {
        return !isEmpty(this.connects) && _index(filter(this.connects[0].children, "." + this.cls)[0]);
      },
      show: function show(item) {
        var this$1 = this;
        var ref = this.$el;
        var children = ref.children;
        var length = children.length;
        var prev = this.index();
        var hasPrev = prev >= 0;
        var dir = item === 'previous' ? -1 : 1;

        var toggle,
            active,
            next = _getIndex(item, children, prev);

        for (var i = 0; i < length; i++, next = (next + dir + length) % length) {
          if (!matches(this.toggles[next], '.uk-disabled *, .uk-disabled, [disabled]')) {
            toggle = this.toggles[next];
            active = children[next];
            break;
          }
        }

        if (!active || prev >= 0 && hasClass(active, this.cls) || prev === next) {
          return;
        }

        removeClass(children, this.cls);
        addClass(active, this.cls);
        attr(this.toggles, 'aria-expanded', false);
        attr(toggle, 'aria-expanded', true);
        this.connects.forEach(function (list) {
          if (!hasPrev) {
            this$1.toggleNow(list.children[next]);
          } else {
            this$1.toggleElement([list.children[prev], list.children[next]]);
          }
        });
      }
    }
  };
  var Tab = {
    mixins: [Class],
    "extends": Switcher,
    props: {
      media: Boolean
    },
    data: {
      media: 960,
      attrItem: 'uk-tab-item'
    },
    connected: function connected() {
      var cls = hasClass(this.$el, 'uk-tab-left') ? 'uk-tab-left' : hasClass(this.$el, 'uk-tab-right') ? 'uk-tab-right' : false;

      if (cls) {
        this.$create('toggle', this.$el, {
          cls: cls,
          mode: 'media',
          media: this.media
        });
      }
    }
  };
  var Toggle = {
    mixins: [Media, Togglable],
    args: 'target',
    props: {
      href: String,
      target: null,
      mode: 'list'
    },
    data: {
      href: false,
      target: false,
      mode: 'click',
      queued: true
    },
    computed: {
      target: function target(ref, $el) {
        var href = ref.href;
        var target = ref.target;
        target = queryAll(target || href, $el);
        return target.length && target || [$el];
      }
    },
    connected: function connected() {
      trigger(this.target, 'updatearia', [this]);
    },
    events: [{
      name: pointerEnter + " " + pointerLeave,
      filter: function filter() {
        return includes(this.mode, 'hover');
      },
      handler: function handler(e) {
        if (!isTouch(e)) {
          this.toggle("toggle" + (e.type === pointerEnter ? 'show' : 'hide'));
        }
      }
    }, {
      name: 'click',
      filter: function filter() {
        return includes(this.mode, 'click') || hasTouch && includes(this.mode, 'hover');
      },
      handler: function handler(e) {
        // TODO better isToggled handling
        var link;

        if (closest(e.target, 'a[href="#"], a[href=""]') || (link = closest(e.target, 'a[href]')) && (this.cls || !isVisible(this.target) || link.hash && matches(this.target, link.hash))) {
          e.preventDefault();
        }

        this.toggle();
      }
    }],
    update: {
      read: function read() {
        return includes(this.mode, 'media') && this.media ? {
          match: this.matchMedia
        } : false;
      },
      write: function write(ref) {
        var match = ref.match;
        var toggled = this.isToggled(this.target);

        if (match ? !toggled : toggled) {
          this.toggle();
        }
      },
      events: ['resize']
    },
    methods: {
      toggle: function toggle(type) {
        if (trigger(this.target, type || 'toggle', [this])) {
          this.toggleElement(this.target);
        }
      }
    }
  };

  function core(UIkit) {
    // core components
    UIkit.component('accordion', Accordion);
    UIkit.component('alert', Alert);
    UIkit.component('cover', Cover);
    UIkit.component('drop', Drop);
    UIkit.component('dropdown', Dropdown);
    UIkit.component('formCustom', FormCustom);
    UIkit.component('gif', Gif);
    UIkit.component('grid', Grid);
    UIkit.component('heightMatch', HeightMatch);
    UIkit.component('heightViewport', HeightViewport);
    UIkit.component('icon', Icon);
    UIkit.component('img', Img);
    UIkit.component('leader', Leader);
    UIkit.component('margin', Margin);
    UIkit.component('modal', Modal$1);
    UIkit.component('nav', Nav);
    UIkit.component('navbar', Navbar);
    UIkit.component('offcanvas', Offcanvas);
    UIkit.component('overflowAuto', OverflowAuto);
    UIkit.component('responsive', Responsive);
    UIkit.component('scroll', Scroll);
    UIkit.component('scrollspy', Scrollspy);
    UIkit.component('scrollspyNav', ScrollspyNav);
    UIkit.component('sticky', Sticky);
    UIkit.component('svg', Svg);
    UIkit.component('switcher', Switcher);
    UIkit.component('tab', Tab);
    UIkit.component('toggle', Toggle);
    UIkit.component('video', Video); // Icon components

    UIkit.component('close', Close);
    UIkit.component('marker', IconComponent);
    UIkit.component('navbarToggleIcon', IconComponent);
    UIkit.component('overlayIcon', IconComponent);
    UIkit.component('paginationNext', IconComponent);
    UIkit.component('paginationPrevious', IconComponent);
    UIkit.component('searchIcon', Search);
    UIkit.component('slidenavNext', Slidenav);
    UIkit.component('slidenavPrevious', Slidenav);
    UIkit.component('spinner', Spinner);
    UIkit.component('totop', IconComponent); // core functionality

    UIkit.use(Core);
  }

  UIkit.version = '3.2.1';
  core(UIkit);
  var Countdown = {
    mixins: [Class],
    props: {
      date: String,
      clsWrapper: String
    },
    data: {
      date: '',
      clsWrapper: '.uk-countdown-%unit%'
    },
    computed: {
      date: function date(ref) {
        var date = ref.date;
        return Date.parse(date);
      },
      days: function days(ref, $el) {
        var clsWrapper = ref.clsWrapper;
        return $(clsWrapper.replace('%unit%', 'days'), $el);
      },
      hours: function hours(ref, $el) {
        var clsWrapper = ref.clsWrapper;
        return $(clsWrapper.replace('%unit%', 'hours'), $el);
      },
      minutes: function minutes(ref, $el) {
        var clsWrapper = ref.clsWrapper;
        return $(clsWrapper.replace('%unit%', 'minutes'), $el);
      },
      seconds: function seconds(ref, $el) {
        var clsWrapper = ref.clsWrapper;
        return $(clsWrapper.replace('%unit%', 'seconds'), $el);
      },
      units: function units() {
        var this$1 = this;
        return ['days', 'hours', 'minutes', 'seconds'].filter(function (unit) {
          return this$1[unit];
        });
      }
    },
    connected: function connected() {
      this.start();
    },
    disconnected: function disconnected() {
      var this$1 = this;
      this.stop();
      this.units.forEach(function (unit) {
        return empty(this$1[unit]);
      });
    },
    events: [{
      name: 'visibilitychange',
      el: document,
      handler: function handler() {
        if (document.hidden) {
          this.stop();
        } else {
          this.start();
        }
      }
    }],
    update: {
      write: function write() {
        var this$1 = this;
        var timespan = getTimeSpan(this.date);

        if (timespan.total <= 0) {
          this.stop();
          timespan.days = timespan.hours = timespan.minutes = timespan.seconds = 0;
        }

        this.units.forEach(function (unit) {
          var digits = String(Math.floor(timespan[unit]));
          digits = digits.length < 2 ? "0" + digits : digits;
          var el = this$1[unit];

          if (el.textContent !== digits) {
            digits = digits.split('');

            if (digits.length !== el.children.length) {
              html(el, digits.map(function () {
                return '<span></span>';
              }).join(''));
            }

            digits.forEach(function (digit, i) {
              return el.children[i].textContent = digit;
            });
          }
        });
      }
    },
    methods: {
      start: function start() {
        var this$1 = this;
        this.stop();

        if (this.date && this.units.length) {
          this.$emit();
          this.timer = setInterval(function () {
            return this$1.$emit();
          }, 1000);
        }
      },
      stop: function stop() {
        if (this.timer) {
          clearInterval(this.timer);
          this.timer = null;
        }
      }
    }
  };

  function getTimeSpan(date) {
    var total = date - Date.now();
    return {
      total: total,
      seconds: total / 1000 % 60,
      minutes: total / 1000 / 60 % 60,
      hours: total / 1000 / 60 / 60 % 24,
      days: total / 1000 / 60 / 60 / 24
    };
  }

  var targetClass = 'uk-animation-target';
  var Animate = {
    props: {
      animation: Number
    },
    data: {
      animation: 150
    },
    computed: {
      target: function target() {
        return this.$el;
      }
    },
    methods: {
      animate: function animate(action) {
        var this$1 = this;
        addStyle();
        var children = toNodes(this.target.children);
        var propsFrom = children.map(function (el) {
          return getProps(el, true);
        });
        var oldHeight = height(this.target);
        var oldScrollY = window.pageYOffset;
        action();
        Transition.cancel(this.target);
        children.forEach(Transition.cancel);
        reset(this.target);
        this.$update(this.target);
        fastdom.flush();
        var newHeight = height(this.target);
        children = children.concat(toNodes(this.target.children).filter(function (el) {
          return !includes(children, el);
        }));
        var propsTo = children.map(function (el, i) {
          return el.parentNode && i in propsFrom ? propsFrom[i] ? isVisible(el) ? getPositionWithMargin(el) : {
            opacity: 0
          } : {
            opacity: isVisible(el) ? 1 : 0
          } : false;
        });
        propsFrom = propsTo.map(function (props, i) {
          var from = children[i].parentNode === this$1.target ? propsFrom[i] || getProps(children[i]) : false;

          if (from) {
            if (!props) {
              delete from.opacity;
            } else if (!('opacity' in props)) {
              var opacity = from.opacity;

              if (opacity % 1) {
                props.opacity = 1;
              } else {
                delete from.opacity;
              }
            }
          }

          return from;
        });
        addClass(this.target, targetClass);
        children.forEach(function (el, i) {
          return propsFrom[i] && css(el, propsFrom[i]);
        });
        css(this.target, 'height', oldHeight);
        scrollTop(window, oldScrollY);
        return Promise.all(children.map(function (el, i) {
          return propsFrom[i] && propsTo[i] ? Transition.start(el, propsTo[i], this$1.animation, 'ease') : Promise.resolve();
        }).concat(Transition.start(this.target, {
          height: newHeight
        }, this.animation, 'ease'))).then(function () {
          children.forEach(function (el, i) {
            return css(el, {
              display: propsTo[i].opacity === 0 ? 'none' : '',
              zIndex: ''
            });
          });
          reset(this$1.target);
          this$1.$update(this$1.target);
          fastdom.flush(); // needed for IE11
        }, noop);
      }
    }
  };

  function getProps(el, opacity) {
    var zIndex = css(el, 'zIndex');
    return isVisible(el) ? assign({
      display: '',
      opacity: opacity ? css(el, 'opacity') : '0',
      pointerEvents: 'none',
      position: 'absolute',
      zIndex: zIndex === 'auto' ? _index(el) : zIndex
    }, getPositionWithMargin(el)) : false;
  }

  function reset(el) {
    css(el.children, {
      height: '',
      left: '',
      opacity: '',
      pointerEvents: '',
      position: '',
      top: '',
      width: ''
    });
    removeClass(el, targetClass);
    css(el, 'height', '');
  }

  function getPositionWithMargin(el) {
    var ref = el.getBoundingClientRect();
    var height = ref.height;
    var width = ref.width;
    var ref$1 = position(el);
    var top = ref$1.top;
    var left = ref$1.left;
    top += toFloat(css(el, 'marginTop'));
    return {
      top: top,
      left: left,
      height: height,
      width: width
    };
  }

  var style;

  function addStyle() {
    if (style) {
      return;
    }

    style = append(document.head, '<style>').sheet;
    style.insertRule("." + targetClass + " > * {\n            margin-top: 0 !important;\n            transform: none !important;\n        }", 0);
  }

  var Filter = {
    mixins: [Animate],
    args: 'target',
    props: {
      target: Boolean,
      selActive: Boolean
    },
    data: {
      target: null,
      selActive: false,
      attrItem: 'uk-filter-control',
      cls: 'uk-active',
      animation: 250
    },
    computed: {
      toggles: {
        get: function get(ref, $el) {
          var attrItem = ref.attrItem;
          return $$("[" + this.attrItem + "],[data-" + this.attrItem + "]", $el);
        },
        watch: function watch() {
          this.updateState();
        }
      },
      target: function target(ref, $el) {
        var target = ref.target;
        return $(target, $el);
      },
      children: {
        get: function get() {
          return toNodes(this.target && this.target.children);
        },
        watch: function watch(list, old) {
          if (!isEqualList(list, old)) {
            this.updateState();
          }
        }
      }
    },
    events: [{
      name: 'click',
      delegate: function delegate() {
        return "[" + this.attrItem + "],[data-" + this.attrItem + "]";
      },
      handler: function handler(e) {
        e.preventDefault();
        this.apply(e.current);
      }
    }],
    connected: function connected() {
      var this$1 = this;
      this.updateState();

      if (this.selActive !== false) {
        var actives = $$(this.selActive, this.$el);
        this.toggles.forEach(function (el) {
          return toggleClass(el, this$1.cls, includes(actives, el));
        });
      }
    },
    methods: {
      apply: function apply(el) {
        this.setState(mergeState(el, this.attrItem, this.getState()));
      },
      getState: function getState() {
        var this$1 = this;
        return this.toggles.filter(function (item) {
          return hasClass(item, this$1.cls);
        }).reduce(function (state, el) {
          return mergeState(el, this$1.attrItem, state);
        }, {
          filter: {
            '': ''
          },
          sort: []
        });
      },
      setState: function setState(state, animate) {
        var this$1 = this;
        if (animate === void 0) animate = true;
        state = assign({
          filter: {
            '': ''
          },
          sort: []
        }, state);
        trigger(this.$el, 'beforeFilter', [this, state]);
        var ref = this;
        var children = ref.children;
        this.toggles.forEach(function (el) {
          return toggleClass(el, this$1.cls, !!matchFilter(el, this$1.attrItem, state));
        });

        var apply = function apply() {
          var selector = getSelector(state);
          children.forEach(function (el) {
            return css(el, 'display', selector && !matches(el, selector) ? 'none' : '');
          });
          var ref = state.sort;
          var sort = ref[0];
          var order = ref[1];

          if (sort) {
            var sorted = sortItems(children, sort, order);

            if (!isEqual(sorted, children)) {
              sorted.forEach(function (el) {
                return append(this$1.target, el);
              });
            }
          }
        };

        if (animate) {
          this.animate(apply).then(function () {
            return trigger(this$1.$el, 'afterFilter', [this$1]);
          });
        } else {
          apply();
          trigger(this.$el, 'afterFilter', [this]);
        }
      },
      updateState: function updateState() {
        var this$1 = this;
        fastdom.write(function () {
          return this$1.setState(this$1.getState(), false);
        });
      }
    }
  };

  function getFilter(el, attr) {
    return parseOptions(data(el, attr), ['filter']);
  }

  function mergeState(el, attr, state) {
    var filterBy = getFilter(el, attr);
    var filter = filterBy.filter;
    var group = filterBy.group;
    var sort = filterBy.sort;
    var order = filterBy.order;
    if (order === void 0) order = 'asc';

    if (filter || isUndefined(sort)) {
      if (group) {
        if (filter) {
          delete state.filter[''];
          state.filter[group] = filter;
        } else {
          delete state.filter[group];

          if (isEmpty(state.filter) || '' in state.filter) {
            state.filter = {
              '': filter || ''
            };
          }
        }
      } else {
        state.filter = {
          '': filter || ''
        };
      }
    }

    if (!isUndefined(sort)) {
      state.sort = [sort, order];
    }

    return state;
  }

  function matchFilter(el, attr, ref) {
    var stateFilter = ref.filter;
    if (stateFilter === void 0) stateFilter = {
      '': ''
    };
    var ref_sort = ref.sort;
    var stateSort = ref_sort[0];
    var stateOrder = ref_sort[1];
    var ref$1 = getFilter(el, attr);
    var filter = ref$1.filter;
    if (filter === void 0) filter = '';
    var group = ref$1.group;
    if (group === void 0) group = '';
    var sort = ref$1.sort;
    var order = ref$1.order;
    if (order === void 0) order = 'asc';
    return isUndefined(sort) ? group in stateFilter && filter === stateFilter[group] || !filter && group && !(group in stateFilter) && !stateFilter[''] : stateSort === sort && stateOrder === order;
  }

  function isEqualList(listA, listB) {
    return listA.length === listB.length && listA.every(function (el) {
      return ~listB.indexOf(el);
    });
  }

  function getSelector(ref) {
    var filter = ref.filter;
    var selector = '';
    each(filter, function (value) {
      return selector += value || '';
    });
    return selector;
  }

  function sortItems(nodes, sort, order) {
    return assign([], nodes).sort(function (a, b) {
      return data(a, sort).localeCompare(data(b, sort), undefined, {
        numeric: true
      }) * (order === 'asc' || -1);
    });
  }

  var Animations = {
    slide: {
      show: function show(dir) {
        return [{
          transform: _translate(dir * -100)
        }, {
          transform: _translate()
        }];
      },
      percent: function percent(current) {
        return translated(current);
      },
      translate: function translate(percent, dir) {
        return [{
          transform: _translate(dir * -100 * percent)
        }, {
          transform: _translate(dir * 100 * (1 - percent))
        }];
      }
    }
  };

  function translated(el) {
    return Math.abs(css(el, 'transform').split(',')[4] / el.offsetWidth) || 0;
  }

  function _translate(value, unit) {
    if (value === void 0) value = 0;
    if (unit === void 0) unit = '%';
    value += value ? unit : '';
    return isIE ? "translateX(" + value + ")" : "translate3d(" + value + ", 0, 0)"; // currently not translate3d in IE, translate3d within translate3d does not work while transitioning
  }

  function scale3d(value) {
    return "scale3d(" + value + ", " + value + ", 1)";
  }

  var Animations$1 = assign({}, Animations, {
    fade: {
      show: function show() {
        return [{
          opacity: 0
        }, {
          opacity: 1
        }];
      },
      percent: function percent(current) {
        return 1 - css(current, 'opacity');
      },
      translate: function translate(percent) {
        return [{
          opacity: 1 - percent
        }, {
          opacity: percent
        }];
      }
    },
    scale: {
      show: function show() {
        return [{
          opacity: 0,
          transform: scale3d(1 - .2)
        }, {
          opacity: 1,
          transform: scale3d(1)
        }];
      },
      percent: function percent(current) {
        return 1 - css(current, 'opacity');
      },
      translate: function translate(percent) {
        return [{
          opacity: 1 - percent,
          transform: scale3d(1 - .2 * percent)
        }, {
          opacity: percent,
          transform: scale3d(1 - .2 + .2 * percent)
        }];
      }
    }
  });

  function Transitioner(prev, next, dir, ref) {
    var animation = ref.animation;
    var easing = ref.easing;
    var _percent = animation.percent;
    var _translate2 = animation.translate;
    var show = animation.show;
    if (show === void 0) show = noop;
    var props = show(dir);
    var deferred = new Deferred();
    return {
      dir: dir,
      show: function show(duration, percent, linear) {
        var this$1 = this;
        if (percent === void 0) percent = 0;
        var timing = linear ? 'linear' : easing;
        duration -= Math.round(duration * clamp(percent, -1, 1));
        this.translate(percent);
        triggerUpdate(next, 'itemin', {
          percent: percent,
          duration: duration,
          timing: timing,
          dir: dir
        });
        triggerUpdate(prev, 'itemout', {
          percent: 1 - percent,
          duration: duration,
          timing: timing,
          dir: dir
        });
        Promise.all([Transition.start(next, props[1], duration, timing), Transition.start(prev, props[0], duration, timing)]).then(function () {
          this$1.reset();
          deferred.resolve();
        }, noop);
        return deferred.promise;
      },
      stop: function stop() {
        return Transition.stop([next, prev]);
      },
      cancel: function cancel() {
        Transition.cancel([next, prev]);
      },
      reset: function reset() {
        for (var prop in props[0]) {
          css([next, prev], prop, '');
        }
      },
      forward: function forward(duration, percent) {
        if (percent === void 0) percent = this.percent();
        Transition.cancel([next, prev]);
        return this.show(duration, percent, true);
      },
      translate: function translate(percent) {
        this.reset();

        var props = _translate2(percent, dir);

        css(next, props[1]);
        css(prev, props[0]);
        triggerUpdate(next, 'itemtranslatein', {
          percent: percent,
          dir: dir
        });
        triggerUpdate(prev, 'itemtranslateout', {
          percent: 1 - percent,
          dir: dir
        });
      },
      percent: function percent() {
        return _percent(prev || next, next, dir);
      },
      getDistance: function getDistance() {
        return prev && prev.offsetWidth;
      }
    };
  }

  function triggerUpdate(el, type, data) {
    trigger(el, createEvent(type, false, false, data));
  }

  var SliderAutoplay = {
    props: {
      autoplay: Boolean,
      autoplayInterval: Number,
      pauseOnHover: Boolean
    },
    data: {
      autoplay: false,
      autoplayInterval: 7000,
      pauseOnHover: true
    },
    connected: function connected() {
      this.autoplay && this.startAutoplay();
    },
    disconnected: function disconnected() {
      this.stopAutoplay();
    },
    update: function update() {
      attr(this.slides, 'tabindex', '-1');
    },
    events: [{
      name: 'visibilitychange',
      el: document,
      filter: function filter() {
        return this.autoplay;
      },
      handler: function handler() {
        if (document.hidden) {
          this.stopAutoplay();
        } else {
          this.startAutoplay();
        }
      }
    }],
    methods: {
      startAutoplay: function startAutoplay() {
        var this$1 = this;
        this.stopAutoplay();
        this.interval = setInterval(function () {
          return (!this$1.draggable || !$(':focus', this$1.$el)) && (!this$1.pauseOnHover || !matches(this$1.$el, ':hover')) && !this$1.stack.length && this$1.show('next');
        }, this.autoplayInterval);
      },
      stopAutoplay: function stopAutoplay() {
        this.interval && clearInterval(this.interval);
      }
    }
  };
  var SliderDrag = {
    props: {
      draggable: Boolean
    },
    data: {
      draggable: true,
      threshold: 10
    },
    created: function created() {
      var this$1 = this;
      ['start', 'move', 'end'].forEach(function (key) {
        var fn = this$1[key];

        this$1[key] = function (e) {
          var pos = getEventPos(e).x * (isRtl ? -1 : 1);
          this$1.prevPos = pos !== this$1.pos ? this$1.pos : this$1.prevPos;
          this$1.pos = pos;
          fn(e);
        };
      });
    },
    events: [{
      name: pointerDown,
      delegate: function delegate() {
        return this.selSlides;
      },
      handler: function handler(e) {
        if (!this.draggable || !isTouch(e) && hasTextNodesOnly(e.target) || closest(e.target, selInput) || e.button > 0 || this.length < 2) {
          return;
        }

        this.start(e);
      }
    }, {
      // Workaround for iOS 11 bug: https://bugs.webkit.org/show_bug.cgi?id=184250
      name: 'touchmove',
      passive: false,
      handler: 'move',
      delegate: function delegate() {
        return this.selSlides;
      }
    }, {
      name: 'dragstart',
      handler: function handler(e) {
        e.preventDefault();
      }
    }],
    methods: {
      start: function start() {
        var this$1 = this;
        this.drag = this.pos;

        if (this._transitioner) {
          this.percent = this._transitioner.percent();
          this.drag += this._transitioner.getDistance() * this.percent * this.dir;

          this._transitioner.cancel();

          this._transitioner.translate(this.percent);

          this.dragging = true;
          this.stack = [];
        } else {
          this.prevIndex = this.index;
        } // See above workaround notice


        var off = pointerMove !== 'touchmove' ? on(document, pointerMove, this.move, {
          passive: false
        }) : noop;

        this.unbindMove = function () {
          off();
          this$1.unbindMove = null;
        };

        on(window, 'scroll', this.unbindMove);
        on(document, pointerUp, this.end, true);
        css(this.list, 'userSelect', 'none');
      },
      move: function move(e) {
        var this$1 = this; // See above workaround notice

        if (!this.unbindMove) {
          return;
        }

        var distance = this.pos - this.drag;

        if (distance === 0 || this.prevPos === this.pos || !this.dragging && Math.abs(distance) < this.threshold) {
          return;
        }

        css(this.list, 'pointerEvents', 'none');
        e.cancelable && e.preventDefault();
        this.dragging = true;
        this.dir = distance < 0 ? 1 : -1;
        var ref = this;
        var slides = ref.slides;
        var ref$1 = this;
        var prevIndex = ref$1.prevIndex;
        var dis = Math.abs(distance);
        var nextIndex = this.getIndex(prevIndex + this.dir, prevIndex);
        var width = this._getDistance(prevIndex, nextIndex) || slides[prevIndex].offsetWidth;

        while (nextIndex !== prevIndex && dis > width) {
          this.drag -= width * this.dir;
          prevIndex = nextIndex;
          dis -= width;
          nextIndex = this.getIndex(prevIndex + this.dir, prevIndex);
          width = this._getDistance(prevIndex, nextIndex) || slides[prevIndex].offsetWidth;
        }

        this.percent = dis / width;
        var prev = slides[prevIndex];
        var next = slides[nextIndex];
        var changed = this.index !== nextIndex;
        var edge = prevIndex === nextIndex;
        var itemShown;
        [this.index, this.prevIndex].filter(function (i) {
          return !includes([nextIndex, prevIndex], i);
        }).forEach(function (i) {
          trigger(slides[i], 'itemhidden', [this$1]);

          if (edge) {
            itemShown = true;
            this$1.prevIndex = prevIndex;
          }
        });

        if (this.index === prevIndex && this.prevIndex !== prevIndex || itemShown) {
          trigger(slides[this.index], 'itemshown', [this]);
        }

        if (changed) {
          this.prevIndex = prevIndex;
          this.index = nextIndex;
          !edge && trigger(prev, 'beforeitemhide', [this]);
          trigger(next, 'beforeitemshow', [this]);
        }

        this._transitioner = this._translate(Math.abs(this.percent), prev, !edge && next);

        if (changed) {
          !edge && trigger(prev, 'itemhide', [this]);
          trigger(next, 'itemshow', [this]);
        }
      },
      end: function end() {
        off(window, 'scroll', this.unbindMove);
        this.unbindMove && this.unbindMove();
        off(document, pointerUp, this.end, true);

        if (this.dragging) {
          this.dragging = null;

          if (this.index === this.prevIndex) {
            this.percent = 1 - this.percent;
            this.dir *= -1;

            this._show(false, this.index, true);

            this._transitioner = null;
          } else {
            var dirChange = (isRtl ? this.dir * (isRtl ? 1 : -1) : this.dir) < 0 === this.prevPos > this.pos;
            this.index = dirChange ? this.index : this.prevIndex;

            if (dirChange) {
              this.percent = 1 - this.percent;
            }

            this.show(this.dir > 0 && !dirChange || this.dir < 0 && dirChange ? 'next' : 'previous', true);
          }
        }

        css(this.list, {
          userSelect: '',
          pointerEvents: ''
        });
        this.drag = this.percent = null;
      }
    }
  };

  function hasTextNodesOnly(el) {
    return !el.children.length && el.childNodes.length;
  }

  var SliderNav = {
    data: {
      selNav: false
    },
    computed: {
      nav: function nav(ref, $el) {
        var selNav = ref.selNav;
        return $(selNav, $el);
      },
      selNavItem: function selNavItem(ref) {
        var attrItem = ref.attrItem;
        return "[" + attrItem + "],[data-" + attrItem + "]";
      },
      navItems: function navItems(_, $el) {
        return $$(this.selNavItem, $el);
      }
    },
    update: {
      write: function write() {
        var this$1 = this;

        if (this.nav && this.length !== this.nav.children.length) {
          html(this.nav, this.slides.map(function (_, i) {
            return "<li " + this$1.attrItem + "=\"" + i + "\"><a href=\"#\"></a></li>";
          }).join(''));
        }

        toggleClass($$(this.selNavItem, this.$el).concat(this.nav), 'uk-hidden', !this.maxIndex);
        this.updateNav();
      },
      events: ['resize']
    },
    events: [{
      name: 'click',
      delegate: function delegate() {
        return this.selNavItem;
      },
      handler: function handler(e) {
        e.preventDefault();
        this.show(data(e.current, this.attrItem));
      }
    }, {
      name: 'itemshow',
      handler: 'updateNav'
    }],
    methods: {
      updateNav: function updateNav() {
        var this$1 = this;
        var i = this.getValidIndex();
        this.navItems.forEach(function (el) {
          var cmd = data(el, this$1.attrItem);
          toggleClass(el, this$1.clsActive, toNumber(cmd) === i);
          toggleClass(el, 'uk-invisible', this$1.finite && (cmd === 'previous' && i === 0 || cmd === 'next' && i >= this$1.maxIndex));
        });
      }
    }
  };
  var Slider = {
    mixins: [SliderAutoplay, SliderDrag, SliderNav],
    props: {
      clsActivated: Boolean,
      easing: String,
      index: Number,
      finite: Boolean,
      velocity: Number,
      selSlides: String
    },
    data: function data() {
      return {
        easing: 'ease',
        finite: false,
        velocity: 1,
        index: 0,
        prevIndex: -1,
        stack: [],
        percent: 0,
        clsActive: 'uk-active',
        clsActivated: false,
        Transitioner: false,
        transitionOptions: {}
      };
    },
    connected: function connected() {
      this.prevIndex = -1;
      this.index = this.getValidIndex(this.index);
      this.stack = [];
    },
    disconnected: function disconnected() {
      removeClass(this.slides, this.clsActive);
    },
    computed: {
      duration: function duration(ref, $el) {
        var velocity = ref.velocity;
        return speedUp($el.offsetWidth / velocity);
      },
      list: function list(ref, $el) {
        var selList = ref.selList;
        return $(selList, $el);
      },
      maxIndex: function maxIndex() {
        return this.length - 1;
      },
      selSlides: function selSlides(ref) {
        var selList = ref.selList;
        var selSlides = ref.selSlides;
        return selList + " " + (selSlides || '> *');
      },
      slides: {
        get: function get() {
          return $$(this.selSlides, this.$el);
        },
        watch: function watch() {
          this.$reset();
        }
      },
      length: function length() {
        return this.slides.length;
      }
    },
    events: {
      itemshown: function itemshown() {
        this.$update(this.list);
      }
    },
    methods: {
      show: function show(index, force) {
        var this$1 = this;
        if (force === void 0) force = false;

        if (this.dragging || !this.length) {
          return;
        }

        var ref = this;
        var stack = ref.stack;
        var queueIndex = force ? 0 : stack.length;

        var reset = function reset() {
          stack.splice(queueIndex, 1);

          if (stack.length) {
            this$1.show(stack.shift(), true);
          }
        };

        stack[force ? 'unshift' : 'push'](index);

        if (!force && stack.length > 1) {
          if (stack.length === 2) {
            this._transitioner.forward(Math.min(this.duration, 200));
          }

          return;
        }

        var prevIndex = this.index;
        var prev = hasClass(this.slides, this.clsActive) && this.slides[prevIndex];
        var nextIndex = this.getIndex(index, this.index);
        var next = this.slides[nextIndex];

        if (prev === next) {
          reset();
          return;
        }

        this.dir = getDirection(index, prevIndex);
        this.prevIndex = prevIndex;
        this.index = nextIndex;
        prev && trigger(prev, 'beforeitemhide', [this]);

        if (!trigger(next, 'beforeitemshow', [this, prev])) {
          this.index = this.prevIndex;
          reset();
          return;
        }

        var promise = this._show(prev, next, force).then(function () {
          prev && trigger(prev, 'itemhidden', [this$1]);
          trigger(next, 'itemshown', [this$1]);
          return new Promise(function (resolve) {
            fastdom.write(function () {
              stack.shift();

              if (stack.length) {
                this$1.show(stack.shift(), true);
              } else {
                this$1._transitioner = null;
              }

              resolve();
            });
          });
        });

        prev && trigger(prev, 'itemhide', [this]);
        trigger(next, 'itemshow', [this]);
        return promise;
      },
      getIndex: function getIndex(index, prev) {
        if (index === void 0) index = this.index;
        if (prev === void 0) prev = this.index;
        return clamp(_getIndex(index, this.slides, prev, this.finite), 0, this.maxIndex);
      },
      getValidIndex: function getValidIndex(index, prevIndex) {
        if (index === void 0) index = this.index;
        if (prevIndex === void 0) prevIndex = this.prevIndex;
        return this.getIndex(index, prevIndex);
      },
      _show: function _show(prev, next, force) {
        this._transitioner = this._getTransitioner(prev, next, this.dir, assign({
          easing: force ? next.offsetWidth < 600 ? 'cubic-bezier(0.25, 0.46, 0.45, 0.94)'
          /* easeOutQuad */
          : 'cubic-bezier(0.165, 0.84, 0.44, 1)'
          /* easeOutQuart */
          : this.easing
        }, this.transitionOptions));

        if (!force && !prev) {
          this._transitioner.translate(1);

          return Promise.resolve();
        }

        var ref = this.stack;
        var length = ref.length;
        return this._transitioner[length > 1 ? 'forward' : 'show'](length > 1 ? Math.min(this.duration, 75 + 75 / (length - 1)) : this.duration, this.percent);
      },
      _getDistance: function _getDistance(prev, next) {
        return this._getTransitioner(prev, prev !== next && next).getDistance();
      },
      _translate: function _translate(percent, prev, next) {
        if (prev === void 0) prev = this.prevIndex;
        if (next === void 0) next = this.index;

        var transitioner = this._getTransitioner(prev !== next ? prev : false, next);

        transitioner.translate(percent);
        return transitioner;
      },
      _getTransitioner: function _getTransitioner(prev, next, dir, options) {
        if (prev === void 0) prev = this.prevIndex;
        if (next === void 0) next = this.index;
        if (dir === void 0) dir = this.dir || 1;
        if (options === void 0) options = this.transitionOptions;
        return new this.Transitioner(isNumber(prev) ? this.slides[prev] : prev, isNumber(next) ? this.slides[next] : next, dir * (isRtl ? -1 : 1), options);
      }
    }
  };

  function getDirection(index, prevIndex) {
    return index === 'next' ? 1 : index === 'previous' ? -1 : index < prevIndex ? -1 : 1;
  }

  function speedUp(x) {
    return .5 * x + 300; // parabola through (400,500; 600,600; 1800,1200)
  }

  var Slideshow = {
    mixins: [Slider],
    props: {
      animation: String
    },
    data: {
      animation: 'slide',
      clsActivated: 'uk-transition-active',
      Animations: Animations,
      Transitioner: Transitioner
    },
    computed: {
      animation: function animation(ref) {
        var animation = ref.animation;
        var Animations = ref.Animations;
        return assign(animation in Animations ? Animations[animation] : Animations.slide, {
          name: animation
        });
      },
      transitionOptions: function transitionOptions() {
        return {
          animation: this.animation
        };
      }
    },
    events: {
      'itemshow itemhide itemshown itemhidden': function itemshowItemhideItemshownItemhidden(ref) {
        var target = ref.target;
        this.$update(target);
      },
      beforeitemshow: function beforeitemshow(ref) {
        var target = ref.target;
        addClass(target, this.clsActive);
      },
      itemshown: function itemshown(ref) {
        var target = ref.target;
        addClass(target, this.clsActivated);
      },
      itemhidden: function itemhidden(ref) {
        var target = ref.target;
        removeClass(target, this.clsActive, this.clsActivated);
      }
    }
  };
  var lightboxPanel = {
    mixins: [Container, Modal, Togglable, Slideshow],
    functional: true,
    props: {
      delayControls: Number,
      preload: Number,
      videoAutoplay: Boolean,
      template: String
    },
    data: function data() {
      return {
        preload: 1,
        videoAutoplay: false,
        delayControls: 3000,
        items: [],
        cls: 'uk-open',
        clsPage: 'uk-lightbox-page',
        selList: '.uk-lightbox-items',
        attrItem: 'uk-lightbox-item',
        selClose: '.uk-close-large',
        selCaption: '.uk-lightbox-caption',
        pauseOnHover: false,
        velocity: 2,
        Animations: Animations$1,
        template: "<div class=\"uk-lightbox uk-overflow-hidden\"> <ul class=\"uk-lightbox-items\"></ul> <div class=\"uk-lightbox-toolbar uk-position-top uk-text-right uk-transition-slide-top uk-transition-opaque\"> <button class=\"uk-lightbox-toolbar-icon uk-close-large\" type=\"button\" uk-close></button> </div> <a class=\"uk-lightbox-button uk-position-center-left uk-position-medium uk-transition-fade\" href=\"#\" uk-slidenav-previous uk-lightbox-item=\"previous\"></a> <a class=\"uk-lightbox-button uk-position-center-right uk-position-medium uk-transition-fade\" href=\"#\" uk-slidenav-next uk-lightbox-item=\"next\"></a> <div class=\"uk-lightbox-toolbar uk-lightbox-caption uk-position-bottom uk-text-center uk-transition-slide-bottom uk-transition-opaque\"></div> </div>"
      };
    },
    created: function created() {
      var $el = $(this.template);
      var list = $(this.selList, $el);
      this.items.forEach(function () {
        return append(list, '<li></li>');
      });
      this.$mount(append(this.container, $el));
    },
    computed: {
      caption: function caption(ref, $el) {
        var selCaption = ref.selCaption;
        return $('.uk-lightbox-caption', $el);
      }
    },
    events: [{
      name: pointerMove + " " + pointerDown + " keydown",
      handler: 'showControls'
    }, {
      name: 'click',
      self: true,
      delegate: function delegate() {
        return this.selSlides;
      },
      handler: function handler(e) {
        if (e.defaultPrevented) {
          return;
        }

        this.hide();
      }
    }, {
      name: 'shown',
      self: true,
      handler: function handler() {
        this.showControls();
      }
    }, {
      name: 'hide',
      self: true,
      handler: function handler() {
        this.hideControls();
        removeClass(this.slides, this.clsActive);
        Transition.stop(this.slides);
      }
    }, {
      name: 'hidden',
      self: true,
      handler: function handler() {
        this.$destroy(true);
      }
    }, {
      name: 'keyup',
      el: document,
      handler: function handler(e) {
        if (!this.isToggled(this.$el)) {
          return;
        }

        switch (e.keyCode) {
          case 37:
            this.show('previous');
            break;

          case 39:
            this.show('next');
            break;
        }
      }
    }, {
      name: 'beforeitemshow',
      handler: function handler(e) {
        if (this.isToggled()) {
          return;
        }

        this.draggable = false;
        e.preventDefault();
        this.toggleNow(this.$el, true);
        this.animation = Animations$1['scale'];
        removeClass(e.target, this.clsActive);
        this.stack.splice(1, 0, this.index);
      }
    }, {
      name: 'itemshow',
      handler: function handler(ref) {
        var target = ref.target;

        var i = _index(target);

        var ref$1 = this.getItem(i);
        var caption = ref$1.caption;
        css(this.caption, 'display', caption ? '' : 'none');
        html(this.caption, caption);

        for (var j = 0; j <= this.preload; j++) {
          this.loadItem(this.getIndex(i + j));
          this.loadItem(this.getIndex(i - j));
        }
      }
    }, {
      name: 'itemshown',
      handler: function handler() {
        this.draggable = this.$props.draggable;
      }
    }, {
      name: 'itemload',
      handler: function handler(_, item) {
        var this$1 = this;
        var source = item.source;
        var type = item.type;
        var alt = item.alt;
        this.setItem(item, '<span uk-spinner></span>');

        if (!source) {
          return;
        }

        var matches; // Image

        if (type === 'image' || source.match(/\.(jp(e)?g|png|gif|svg|webp)($|\?)/i)) {
          getImage(source).then(function (img) {
            return this$1.setItem(item, "<img width=\"" + img.width + "\" height=\"" + img.height + "\" src=\"" + source + "\" alt=\"" + (alt ? alt : '') + "\">");
          }, function () {
            return this$1.setError(item);
          }); // Video
        } else if (type === 'video' || source.match(/\.(mp4|webm|ogv)($|\?)/i)) {
          var video = $("<video controls playsinline" + (item.poster ? " poster=\"" + item.poster + "\"" : '') + " uk-video=\"" + this.videoAutoplay + "\"></video>");
          attr(video, 'src', source);
          once(video, 'error loadedmetadata', function (type) {
            if (type === 'error') {
              this$1.setError(item);
            } else {
              attr(video, {
                width: video.videoWidth,
                height: video.videoHeight
              });
              this$1.setItem(item, video);
            }
          }); // Iframe
        } else if (type === 'iframe' || source.match(/\.(html|php)($|\?)/i)) {
          this.setItem(item, "<iframe class=\"uk-lightbox-iframe\" src=\"" + source + "\" frameborder=\"0\" allowfullscreen></iframe>"); // YouTube
        } else if (matches = source.match(/\/\/.*?youtube(-nocookie)?\.[a-z]+\/watch\?v=([^&\s]+)/) || source.match(/()youtu\.be\/(.*)/)) {
          var id = matches[2];

          var setIframe = function setIframe(width, height) {
            if (width === void 0) width = 640;
            if (height === void 0) height = 450;
            return this$1.setItem(item, getIframe("https://www.youtube" + (matches[1] || '') + ".com/embed/" + id, width, height, this$1.videoAutoplay));
          };

          getImage("https://img.youtube.com/vi/" + id + "/maxresdefault.jpg").then(function (ref) {
            var width = ref.width;
            var height = ref.height; // YouTube default 404 thumb, fall back to low resolution

            if (width === 120 && height === 90) {
              getImage("https://img.youtube.com/vi/" + id + "/0.jpg").then(function (ref) {
                var width = ref.width;
                var height = ref.height;
                return setIframe(width, height);
              }, setIframe);
            } else {
              setIframe(width, height);
            }
          }, setIframe); // Vimeo
        } else if (matches = source.match(/(\/\/.*?)vimeo\.[a-z]+\/([0-9]+).*?/)) {
          ajax("https://vimeo.com/api/oembed.json?maxwidth=1920&url=" + encodeURI(source), {
            responseType: 'json',
            withCredentials: false
          }).then(function (ref) {
            var ref_response = ref.response;
            var height = ref_response.height;
            var width = ref_response.width;
            return this$1.setItem(item, getIframe("https://player.vimeo.com/video/" + matches[2], width, height, this$1.videoAutoplay));
          }, function () {
            return this$1.setError(item);
          });
        }
      }
    }],
    methods: {
      loadItem: function loadItem(index) {
        if (index === void 0) index = this.index;
        var item = this.getItem(index);

        if (item.content) {
          return;
        }

        trigger(this.$el, 'itemload', [item]);
      },
      getItem: function getItem(index) {
        if (index === void 0) index = this.index;
        return this.items[index] || {};
      },
      setItem: function setItem(item, content) {
        assign(item, {
          content: content
        });
        var el = html(this.slides[this.items.indexOf(item)], content);
        trigger(this.$el, 'itemloaded', [this, el]);
        this.$update(el);
      },
      setError: function setError(item) {
        this.setItem(item, '<span uk-icon="icon: bolt; ratio: 2"></span>');
      },
      showControls: function showControls() {
        clearTimeout(this.controlsTimer);
        this.controlsTimer = setTimeout(this.hideControls, this.delayControls);
        addClass(this.$el, 'uk-active', 'uk-transition-active');
      },
      hideControls: function hideControls() {
        removeClass(this.$el, 'uk-active', 'uk-transition-active');
      }
    }
  };

  function getIframe(src, width, height, autoplay) {
    return "<iframe src=\"" + src + "\" width=\"" + width + "\" height=\"" + height + "\" style=\"max-width: 100%; box-sizing: border-box;\" frameborder=\"0\" allowfullscreen uk-video=\"autoplay: " + autoplay + "\" uk-responsive></iframe>";
  }

  var Lightbox = {
    install: install$2,
    props: {
      toggle: String
    },
    data: {
      toggle: 'a'
    },
    computed: {
      toggles: {
        get: function get(ref, $el) {
          var toggle = ref.toggle;
          return $$(toggle, $el);
        },
        watch: function watch() {
          this.hide();
        }
      },
      items: function items() {
        return uniqueBy(this.toggles.map(toItem), 'source');
      }
    },
    disconnected: function disconnected() {
      this.hide();
    },
    events: [{
      name: 'click',
      delegate: function delegate() {
        return this.toggle + ":not(.uk-disabled)";
      },
      handler: function handler(e) {
        e.preventDefault();
        var src = data(e.current, 'href');
        this.show(findIndex(this.items, function (ref) {
          var source = ref.source;
          return source === src;
        }));
      }
    }],
    methods: {
      show: function show(index) {
        var this$1 = this;
        this.panel = this.panel || this.$create('lightboxPanel', assign({}, this.$props, {
          items: this.items
        }));
        on(this.panel.$el, 'hidden', function () {
          return this$1.panel = false;
        });
        return this.panel.show(index);
      },
      hide: function hide() {
        return this.panel && this.panel.hide();
      }
    }
  };

  function install$2(UIkit, Lightbox) {
    if (!UIkit.lightboxPanel) {
      UIkit.component('lightboxPanel', lightboxPanel);
    }

    assign(Lightbox.props, UIkit.component('lightboxPanel').options.props);
  }

  function toItem(el) {
    return ['href', 'caption', 'type', 'poster', 'alt'].reduce(function (obj, attr) {
      obj[attr === 'href' ? 'source' : attr] = data(el, attr);
      return obj;
    }, {});
  }

  var obj;
  var containers = {};
  var Notification = {
    functional: true,
    args: ['message', 'status'],
    data: {
      message: '',
      status: '',
      timeout: 5000,
      group: null,
      pos: 'top-center',
      clsClose: 'uk-notification-close',
      clsMsg: 'uk-notification-message'
    },
    install: install$3,
    computed: {
      marginProp: function marginProp(ref) {
        var pos = ref.pos;
        return "margin" + (startsWith(pos, 'top') ? 'Top' : 'Bottom');
      },
      startProps: function startProps() {
        var obj;
        return obj = {
          opacity: 0
        }, obj[this.marginProp] = -this.$el.offsetHeight, obj;
      }
    },
    created: function created() {
      if (!containers[this.pos]) {
        containers[this.pos] = append(this.$container, "<div class=\"uk-notification uk-notification-" + this.pos + "\"></div>");
      }

      var container = css(containers[this.pos], 'display', 'block');
      this.$mount(append(container, "<div class=\"" + this.clsMsg + (this.status ? " " + this.clsMsg + "-" + this.status : '') + "\"> <a href=\"#\" class=\"" + this.clsClose + "\" data-uk-close></a> <div>" + this.message + "</div> </div>"));
    },
    connected: function connected() {
      var this$1 = this;
      var obj;
      var margin = toFloat(css(this.$el, this.marginProp));
      Transition.start(css(this.$el, this.startProps), (obj = {
        opacity: 1
      }, obj[this.marginProp] = margin, obj)).then(function () {
        if (this$1.timeout) {
          this$1.timer = setTimeout(this$1.close, this$1.timeout);
        }
      });
    },
    events: (obj = {
      click: function click(e) {
        if (closest(e.target, 'a[href="#"],a[href=""]')) {
          e.preventDefault();
        }

        this.close();
      }
    }, obj[pointerEnter] = function () {
      if (this.timer) {
        clearTimeout(this.timer);
      }
    }, obj[pointerLeave] = function () {
      if (this.timeout) {
        this.timer = setTimeout(this.close, this.timeout);
      }
    }, obj),
    methods: {
      close: function close(immediate) {
        var this$1 = this;

        var removeFn = function removeFn() {
          trigger(this$1.$el, 'close', [this$1]);

          _remove(this$1.$el);

          if (!containers[this$1.pos].children.length) {
            css(containers[this$1.pos], 'display', 'none');
          }
        };

        if (this.timer) {
          clearTimeout(this.timer);
        }

        if (immediate) {
          removeFn();
        } else {
          Transition.start(this.$el, this.startProps).then(removeFn);
        }
      }
    }
  };

  function install$3(UIkit) {
    UIkit.notification.closeAll = function (group, immediate) {
      apply(document.body, function (el) {
        var notification = UIkit.getComponent(el, 'notification');

        if (notification && (!group || group === notification.group)) {
          notification.close(immediate);
        }
      });
    };
  }

  var _props = ['x', 'y', 'bgx', 'bgy', 'rotate', 'scale', 'color', 'backgroundColor', 'borderColor', 'opacity', 'blur', 'hue', 'grayscale', 'invert', 'saturate', 'sepia', 'fopacity', 'stroke'];
  var Parallax = {
    mixins: [Media],
    props: _props.reduce(function (props, prop) {
      props[prop] = 'list';
      return props;
    }, {}),
    data: _props.reduce(function (data, prop) {
      data[prop] = undefined;
      return data;
    }, {}),
    computed: {
      props: function props(properties, $el) {
        var this$1 = this;
        return _props.reduce(function (props, prop) {
          if (isUndefined(properties[prop])) {
            return props;
          }

          var isColor = prop.match(/color/i);
          var isCssProp = isColor || prop === 'opacity';
          var pos, bgPos, diff;
          var steps = properties[prop].slice(0);

          if (isCssProp) {
            css($el, prop, '');
          }

          if (steps.length < 2) {
            steps.unshift((prop === 'scale' ? 1 : isCssProp ? css($el, prop) : 0) || 0);
          }

          var unit = getUnit(steps);

          if (isColor) {
            var ref = $el.style;
            var color = ref.color;
            steps = steps.map(function (step) {
              return parseColor($el, step);
            });
            $el.style.color = color;
          } else if (startsWith(prop, 'bg')) {
            var attr = prop === 'bgy' ? 'height' : 'width';
            steps = steps.map(function (step) {
              return toPx(step, attr, this$1.$el);
            });
            css($el, "background-position-" + prop[2], '');
            bgPos = css($el, 'backgroundPosition').split(' ')[prop[2] === 'x' ? 0 : 1]; // IE 11 can't read background-position-[x|y]

            if (this$1.covers) {
              var min = Math.min.apply(Math, steps);
              var max = Math.max.apply(Math, steps);
              var down = steps.indexOf(min) < steps.indexOf(max);
              diff = max - min;
              steps = steps.map(function (step) {
                return step - (down ? min : max);
              });
              pos = (down ? -diff : 0) + "px";
            } else {
              pos = bgPos;
            }
          } else {
            steps = steps.map(toFloat);
          }

          if (prop === 'stroke') {
            if (!steps.some(function (step) {
              return step;
            })) {
              return props;
            }

            var length = getMaxPathLength(this$1.$el);
            css($el, 'strokeDasharray', length);

            if (unit === '%') {
              steps = steps.map(function (step) {
                return step * length / 100;
              });
            }

            steps = steps.reverse();
            prop = 'strokeDashoffset';
          }

          props[prop] = {
            steps: steps,
            unit: unit,
            pos: pos,
            bgPos: bgPos,
            diff: diff
          };
          return props;
        }, {});
      },
      bgProps: function bgProps() {
        var this$1 = this;
        return ['bgx', 'bgy'].filter(function (bg) {
          return bg in this$1.props;
        });
      },
      covers: function covers(_, $el) {
        return _covers($el);
      }
    },
    disconnected: function disconnected() {
      delete this._image;
    },
    update: {
      read: function read(data) {
        var this$1 = this;
        data.active = this.matchMedia;

        if (!data.active) {
          return;
        }

        if (!data.image && this.covers && this.bgProps.length) {
          var src = css(this.$el, 'backgroundImage').replace(/^none|url\(["']?(.+?)["']?\)$/, '$1');

          if (src) {
            var img = new Image();
            img.src = src;
            data.image = img;

            if (!img.naturalWidth) {
              img.onload = function () {
                return this$1.$emit();
              };
            }
          }
        }

        var image = data.image;

        if (!image || !image.naturalWidth) {
          return;
        }

        var dimEl = {
          width: this.$el.offsetWidth,
          height: this.$el.offsetHeight
        };
        var dimImage = {
          width: image.naturalWidth,
          height: image.naturalHeight
        };
        var dim = Dimensions.cover(dimImage, dimEl);
        this.bgProps.forEach(function (prop) {
          var ref = this$1.props[prop];
          var diff = ref.diff;
          var bgPos = ref.bgPos;
          var steps = ref.steps;
          var attr = prop === 'bgy' ? 'height' : 'width';
          var span = dim[attr] - dimEl[attr];

          if (span < diff) {
            dimEl[attr] = dim[attr] + diff - span;
          } else if (span > diff) {
            var posPercentage = dimEl[attr] / toPx(bgPos, attr, this$1.$el);

            if (posPercentage) {
              this$1.props[prop].steps = steps.map(function (step) {
                return step - (span - diff) / posPercentage;
              });
            }
          }

          dim = Dimensions.cover(dimImage, dimEl);
        });
        data.dim = dim;
      },
      write: function write(ref) {
        var dim = ref.dim;
        var active = ref.active;

        if (!active) {
          css(this.$el, {
            backgroundSize: '',
            backgroundRepeat: ''
          });
          return;
        }

        dim && css(this.$el, {
          backgroundSize: dim.width + "px " + dim.height + "px",
          backgroundRepeat: 'no-repeat'
        });
      },
      events: ['resize']
    },
    methods: {
      reset: function reset() {
        var this$1 = this;
        each(this.getCss(0), function (_, prop) {
          return css(this$1.$el, prop, '');
        });
      },
      getCss: function getCss(percent) {
        var ref = this;
        var props = ref.props;
        return Object.keys(props).reduce(function (css, prop) {
          var ref = props[prop];
          var steps = ref.steps;
          var unit = ref.unit;
          var pos = ref.pos;
          var value = getValue(steps, percent);

          switch (prop) {
            // transforms
            case 'x':
            case 'y':
              {
                unit = unit || 'px';
                css.transform += " translate" + ucfirst(prop) + "(" + toFloat(value).toFixed(unit === 'px' ? 0 : 2) + unit + ")";
                break;
              }

            case 'rotate':
              unit = unit || 'deg';
              css.transform += " rotate(" + (value + unit) + ")";
              break;

            case 'scale':
              css.transform += " scale(" + value + ")";
              break;
            // bg image

            case 'bgy':
            case 'bgx':
              css["background-position-" + prop[2]] = "calc(" + pos + " + " + value + "px)";
              break;
            // color

            case 'color':
            case 'backgroundColor':
            case 'borderColor':
              {
                var ref$1 = getStep(steps, percent);
                var start = ref$1[0];
                var end = ref$1[1];
                var p = ref$1[2];
                css[prop] = "rgba(" + start.map(function (value, i) {
                  value = value + p * (end[i] - value);
                  return i === 3 ? toFloat(value) : parseInt(value, 10);
                }).join(',') + ")";
                break;
              }
            // CSS Filter

            case 'blur':
              unit = unit || 'px';
              css.filter += " blur(" + (value + unit) + ")";
              break;

            case 'hue':
              unit = unit || 'deg';
              css.filter += " hue-rotate(" + (value + unit) + ")";
              break;

            case 'fopacity':
              unit = unit || '%';
              css.filter += " opacity(" + (value + unit) + ")";
              break;

            case 'grayscale':
            case 'invert':
            case 'saturate':
            case 'sepia':
              unit = unit || '%';
              css.filter += " " + prop + "(" + (value + unit) + ")";
              break;

            default:
              css[prop] = value;
          }

          return css;
        }, {
          transform: '',
          filter: ''
        });
      }
    }
  };

  function parseColor(el, color) {
    return css(css(el, 'color', color), 'color').split(/[(),]/g).slice(1, -1).concat(1).slice(0, 4).map(toFloat);
  }

  function getStep(steps, percent) {
    var count = steps.length - 1;
    var index = Math.min(Math.floor(count * percent), count - 1);
    var step = steps.slice(index, index + 2);
    step.push(percent === 1 ? 1 : percent % (1 / count) * count);
    return step;
  }

  function getValue(steps, percent, digits) {
    if (digits === void 0) digits = 2;
    var ref = getStep(steps, percent);
    var start = ref[0];
    var end = ref[1];
    var p = ref[2];
    return (isNumber(start) ? start + Math.abs(start - end) * p * (start < end ? 1 : -1) : +end).toFixed(digits);
  }

  function getUnit(steps) {
    return steps.reduce(function (unit, step) {
      return isString(step) && step.replace(/-|\d/g, '').trim() || unit;
    }, '');
  }

  function _covers(el) {
    var ref = el.style;
    var backgroundSize = ref.backgroundSize;
    var covers = css(css(el, 'backgroundSize', ''), 'backgroundSize') === 'cover';
    el.style.backgroundSize = backgroundSize;
    return covers;
  }

  var Parallax$1 = {
    mixins: [Parallax],
    props: {
      target: String,
      viewport: Number,
      easing: Number
    },
    data: {
      target: false,
      viewport: 1,
      easing: 1
    },
    computed: {
      target: function target(ref, $el) {
        var target = ref.target;
        return getOffsetElement(target && query(target, $el) || $el);
      }
    },
    update: {
      read: function read(ref, type) {
        var percent = ref.percent;
        var active = ref.active;

        if (type !== 'scroll') {
          percent = false;
        }

        if (!active) {
          return;
        }

        var prev = percent;
        percent = ease$1(scrolledOver(this.target) / (this.viewport || 1), this.easing);
        return {
          percent: percent,
          style: prev !== percent ? this.getCss(percent) : false
        };
      },
      write: function write(ref) {
        var style = ref.style;
        var active = ref.active;

        if (!active) {
          this.reset();
          return;
        }

        style && css(this.$el, style);
      },
      events: ['scroll', 'resize']
    }
  };

  function ease$1(percent, easing) {
    return clamp(percent * (1 - (easing - easing * percent)));
  } // SVG elements do not inherit from HTMLElement


  function getOffsetElement(el) {
    return el ? 'offsetTop' in el ? el : getOffsetElement(el.parentNode) : document.body;
  }

  var SliderReactive = {
    update: {
      write: function write() {
        if (this.stack.length || this.dragging) {
          return;
        }

        var index = this.getValidIndex(this.index);

        if (!~this.prevIndex || this.index !== index) {
          this.show(index);
        }
      },
      events: ['resize']
    }
  };

  function Transitioner$1(prev, next, dir, ref) {
    var center = ref.center;
    var easing = ref.easing;
    var list = ref.list;
    var deferred = new Deferred();
    var from = prev ? getLeft(prev, list, center) : getLeft(next, list, center) + bounds(next).width * dir;
    var to = next ? getLeft(next, list, center) : from + bounds(prev).width * dir * (isRtl ? -1 : 1);
    return {
      dir: dir,
      show: function show(duration, percent, linear) {
        if (percent === void 0) percent = 0;
        var timing = linear ? 'linear' : easing;
        duration -= Math.round(duration * clamp(percent, -1, 1));
        this.translate(percent);
        prev && this.updateTranslates();
        percent = prev ? percent : clamp(percent, 0, 1);
        triggerUpdate$1(this.getItemIn(), 'itemin', {
          percent: percent,
          duration: duration,
          timing: timing,
          dir: dir
        });
        prev && triggerUpdate$1(this.getItemIn(true), 'itemout', {
          percent: 1 - percent,
          duration: duration,
          timing: timing,
          dir: dir
        });
        Transition.start(list, {
          transform: _translate(-to * (isRtl ? -1 : 1), 'px')
        }, duration, timing).then(deferred.resolve, noop);
        return deferred.promise;
      },
      stop: function stop() {
        return Transition.stop(list);
      },
      cancel: function cancel() {
        Transition.cancel(list);
      },
      reset: function reset() {
        css(list, 'transform', '');
      },
      forward: function forward(duration, percent) {
        if (percent === void 0) percent = this.percent();
        Transition.cancel(list);
        return this.show(duration, percent, true);
      },
      translate: function translate(percent) {
        var distance = this.getDistance() * dir * (isRtl ? -1 : 1);
        css(list, 'transform', _translate(clamp(-to + (distance - distance * percent), -getWidth(list), bounds(list).width) * (isRtl ? -1 : 1), 'px'));
        this.updateTranslates();

        if (prev) {
          percent = clamp(percent, -1, 1);
          triggerUpdate$1(this.getItemIn(), 'itemtranslatein', {
            percent: percent,
            dir: dir
          });
          triggerUpdate$1(this.getItemIn(true), 'itemtranslateout', {
            percent: 1 - percent,
            dir: dir
          });
        }
      },
      percent: function percent() {
        return Math.abs((css(list, 'transform').split(',')[4] * (isRtl ? -1 : 1) + from) / (to - from));
      },
      getDistance: function getDistance() {
        return Math.abs(to - from);
      },
      getItemIn: function getItemIn(out) {
        if (out === void 0) out = false;
        var actives = this.getActives();
        var all = sortBy(slides(list), 'offsetLeft');

        var i = _index(all, actives[dir * (out ? -1 : 1) > 0 ? actives.length - 1 : 0]);

        return ~i && all[i + (prev && !out ? dir : 0)];
      },
      getActives: function getActives() {
        var left = getLeft(prev || next, list, center);
        return sortBy(slides(list).filter(function (slide) {
          var slideLeft = getElLeft(slide, list);
          return slideLeft >= left && slideLeft + bounds(slide).width <= bounds(list).width + left;
        }), 'offsetLeft');
      },
      updateTranslates: function updateTranslates() {
        var actives = this.getActives();
        slides(list).forEach(function (slide) {
          var isActive = includes(actives, slide);
          triggerUpdate$1(slide, "itemtranslate" + (isActive ? 'in' : 'out'), {
            percent: isActive ? 1 : 0,
            dir: slide.offsetLeft <= next.offsetLeft ? 1 : -1
          });
        });
      }
    };
  }

  function getLeft(el, list, center) {
    var left = getElLeft(el, list);
    return center ? left - centerEl(el, list) : Math.min(left, getMax(list));
  }

  function getMax(list) {
    return Math.max(0, getWidth(list) - bounds(list).width);
  }

  function getWidth(list) {
    return slides(list).reduce(function (right, el) {
      return bounds(el).width + right;
    }, 0);
  }

  function getMaxWidth(list) {
    return slides(list).reduce(function (right, el) {
      return Math.max(right, bounds(el).width);
    }, 0);
  }

  function centerEl(el, list) {
    return bounds(list).width / 2 - bounds(el).width / 2;
  }

  function getElLeft(el, list) {
    return (position(el).left + (isRtl ? bounds(el).width - bounds(list).width : 0)) * (isRtl ? -1 : 1);
  }

  function bounds(el) {
    return el.getBoundingClientRect();
  }

  function triggerUpdate$1(el, type, data) {
    trigger(el, createEvent(type, false, false, data));
  }

  function slides(list) {
    return toNodes(list.children);
  }

  var Slider$1 = {
    mixins: [Class, Slider, SliderReactive],
    props: {
      center: Boolean,
      sets: Boolean
    },
    data: {
      center: false,
      sets: false,
      attrItem: 'uk-slider-item',
      selList: '.uk-slider-items',
      selNav: '.uk-slider-nav',
      clsContainer: 'uk-slider-container',
      Transitioner: Transitioner$1
    },
    computed: {
      avgWidth: function avgWidth() {
        return getWidth(this.list) / this.length;
      },
      finite: function finite(ref) {
        var finite = ref.finite;
        return finite || Math.ceil(getWidth(this.list)) < bounds(this.list).width + getMaxWidth(this.list) + this.center;
      },
      maxIndex: function maxIndex() {
        if (!this.finite || this.center && !this.sets) {
          return this.length - 1;
        }

        if (this.center) {
          return last(this.sets);
        }

        css(this.slides, 'order', '');
        var max = getMax(this.list);
        var i = this.length;

        while (i--) {
          if (getElLeft(this.list.children[i], this.list) < max) {
            return Math.min(i + 1, this.length - 1);
          }
        }

        return 0;
      },
      sets: function sets(ref) {
        var this$1 = this;
        var sets = ref.sets;
        var width = bounds(this.list).width / (this.center ? 2 : 1);
        var left = 0;
        var leftCenter = width;
        var slideLeft = 0;
        sets = sets && this.slides.reduce(function (sets, slide, i) {
          var ref = bounds(slide);
          var slideWidth = ref.width;
          var slideRight = slideLeft + slideWidth;

          if (slideRight > left) {
            if (!this$1.center && i > this$1.maxIndex) {
              i = this$1.maxIndex;
            }

            if (!includes(sets, i)) {
              var cmp = this$1.slides[i + 1];

              if (this$1.center && cmp && slideWidth < leftCenter - bounds(cmp).width / 2) {
                leftCenter -= slideWidth;
              } else {
                leftCenter = width;
                sets.push(i);
                left = slideLeft + width + (this$1.center ? slideWidth / 2 : 0);
              }
            }
          }

          slideLeft += slideWidth;
          return sets;
        }, []);
        return !isEmpty(sets) && sets;
      },
      transitionOptions: function transitionOptions() {
        return {
          center: this.center,
          list: this.list
        };
      }
    },
    connected: function connected() {
      toggleClass(this.$el, this.clsContainer, !$("." + this.clsContainer, this.$el));
    },
    update: {
      write: function write() {
        var this$1 = this;
        $$("[" + this.attrItem + "],[data-" + this.attrItem + "]", this.$el).forEach(function (el) {
          var index = data(el, this$1.attrItem);
          this$1.maxIndex && toggleClass(el, 'uk-hidden', isNumeric(index) && (this$1.sets && !includes(this$1.sets, toFloat(index)) || index > this$1.maxIndex));
        });

        if (this.length && !this.dragging && !this.stack.length) {
          this._getTransitioner().translate(1);
        }
      },
      events: ['resize']
    },
    events: {
      beforeitemshow: function beforeitemshow(e) {
        if (!this.dragging && this.sets && this.stack.length < 2 && !includes(this.sets, this.index)) {
          this.index = this.getValidIndex();
        }

        var diff = Math.abs(this.index - this.prevIndex + (this.dir > 0 && this.index < this.prevIndex || this.dir < 0 && this.index > this.prevIndex ? (this.maxIndex + 1) * this.dir : 0));

        if (!this.dragging && diff > 1) {
          for (var i = 0; i < diff; i++) {
            this.stack.splice(1, 0, this.dir > 0 ? 'next' : 'previous');
          }

          e.preventDefault();
          return;
        }

        this.duration = speedUp(this.avgWidth / this.velocity) * (bounds(this.dir < 0 || !this.slides[this.prevIndex] ? this.slides[this.index] : this.slides[this.prevIndex]).width / this.avgWidth);
        this.reorder();
      },
      itemshow: function itemshow() {
        !isUndefined(this.prevIndex) && addClass(this._getTransitioner().getItemIn(), this.clsActive);
      },
      itemshown: function itemshown() {
        var this$1 = this;

        var actives = this._getTransitioner(this.index).getActives();

        this.slides.forEach(function (slide) {
          return toggleClass(slide, this$1.clsActive, includes(actives, slide));
        });
        (!this.sets || includes(this.sets, toFloat(this.index))) && this.slides.forEach(function (slide) {
          return toggleClass(slide, this$1.clsActivated, includes(actives, slide));
        });
      }
    },
    methods: {
      reorder: function reorder() {
        var this$1 = this;
        css(this.slides, 'order', '');

        if (this.finite) {
          return;
        }

        var index = this.dir > 0 && this.slides[this.prevIndex] ? this.prevIndex : this.index;
        this.slides.forEach(function (slide, i) {
          return css(slide, 'order', this$1.dir > 0 && i < index ? 1 : this$1.dir < 0 && i >= this$1.index ? -1 : '');
        });

        if (!this.center) {
          return;
        }

        var next = this.slides[index];
        var width = bounds(this.list).width / 2 - bounds(next).width / 2;
        var j = 0;

        while (width > 0) {
          var slideIndex = this.getIndex(--j + index, index);
          var slide = this.slides[slideIndex];
          css(slide, 'order', slideIndex > index ? -2 : -1);
          width -= bounds(slide).width;
        }
      },
      getValidIndex: function getValidIndex(index, prevIndex) {
        if (index === void 0) index = this.index;
        if (prevIndex === void 0) prevIndex = this.prevIndex;
        index = this.getIndex(index, prevIndex);

        if (!this.sets) {
          return index;
        }

        var prev;

        do {
          if (includes(this.sets, index)) {
            return index;
          }

          prev = index;
          index = this.getIndex(index + this.dir, prevIndex);
        } while (index !== prev);

        return index;
      }
    }
  };
  var SlideshowParallax = {
    mixins: [Parallax],
    data: {
      selItem: '!li'
    },
    computed: {
      item: function item(ref, $el) {
        var selItem = ref.selItem;
        return query(selItem, $el);
      }
    },
    events: [{
      name: 'itemshown',
      self: true,
      el: function el() {
        return this.item;
      },
      handler: function handler() {
        css(this.$el, this.getCss(.5));
      }
    }, {
      name: 'itemin itemout',
      self: true,
      el: function el() {
        return this.item;
      },
      handler: function handler(ref) {
        var type = ref.type;
        var ref_detail = ref.detail;
        var percent = ref_detail.percent;
        var duration = ref_detail.duration;
        var timing = ref_detail.timing;
        var dir = ref_detail.dir;
        Transition.cancel(this.$el);
        css(this.$el, this.getCss(getCurrent(type, dir, percent)));
        Transition.start(this.$el, this.getCss(isIn(type) ? .5 : dir > 0 ? 1 : 0), duration, timing)["catch"](noop);
      }
    }, {
      name: 'transitioncanceled transitionend',
      self: true,
      el: function el() {
        return this.item;
      },
      handler: function handler() {
        Transition.cancel(this.$el);
      }
    }, {
      name: 'itemtranslatein itemtranslateout',
      self: true,
      el: function el() {
        return this.item;
      },
      handler: function handler(ref) {
        var type = ref.type;
        var ref_detail = ref.detail;
        var percent = ref_detail.percent;
        var dir = ref_detail.dir;
        Transition.cancel(this.$el);
        css(this.$el, this.getCss(getCurrent(type, dir, percent)));
      }
    }]
  };

  function isIn(type) {
    return endsWith(type, 'in');
  }

  function getCurrent(type, dir, percent) {
    percent /= 2;
    return !isIn(type) ? dir < 0 ? percent : 1 - percent : dir < 0 ? 1 - percent : percent;
  }

  var Animations$2 = assign({}, Animations, {
    fade: {
      show: function show() {
        return [{
          opacity: 0,
          zIndex: 0
        }, {
          zIndex: -1
        }];
      },
      percent: function percent(current) {
        return 1 - css(current, 'opacity');
      },
      translate: function translate(percent) {
        return [{
          opacity: 1 - percent,
          zIndex: 0
        }, {
          zIndex: -1
        }];
      }
    },
    scale: {
      show: function show() {
        return [{
          opacity: 0,
          transform: scale3d(1 + .5),
          zIndex: 0
        }, {
          zIndex: -1
        }];
      },
      percent: function percent(current) {
        return 1 - css(current, 'opacity');
      },
      translate: function translate(percent) {
        return [{
          opacity: 1 - percent,
          transform: scale3d(1 + .5 * percent),
          zIndex: 0
        }, {
          zIndex: -1
        }];
      }
    },
    pull: {
      show: function show(dir) {
        return dir < 0 ? [{
          transform: _translate(30),
          zIndex: -1
        }, {
          transform: _translate(),
          zIndex: 0
        }] : [{
          transform: _translate(-100),
          zIndex: 0
        }, {
          transform: _translate(),
          zIndex: -1
        }];
      },
      percent: function percent(current, next, dir) {
        return dir < 0 ? 1 - translated(next) : translated(current);
      },
      translate: function translate(percent, dir) {
        return dir < 0 ? [{
          transform: _translate(30 * percent),
          zIndex: -1
        }, {
          transform: _translate(-100 * (1 - percent)),
          zIndex: 0
        }] : [{
          transform: _translate(-percent * 100),
          zIndex: 0
        }, {
          transform: _translate(30 * (1 - percent)),
          zIndex: -1
        }];
      }
    },
    push: {
      show: function show(dir) {
        return dir < 0 ? [{
          transform: _translate(100),
          zIndex: 0
        }, {
          transform: _translate(),
          zIndex: -1
        }] : [{
          transform: _translate(-30),
          zIndex: -1
        }, {
          transform: _translate(),
          zIndex: 0
        }];
      },
      percent: function percent(current, next, dir) {
        return dir > 0 ? 1 - translated(next) : translated(current);
      },
      translate: function translate(percent, dir) {
        return dir < 0 ? [{
          transform: _translate(percent * 100),
          zIndex: 0
        }, {
          transform: _translate(-30 * (1 - percent)),
          zIndex: -1
        }] : [{
          transform: _translate(-30 * percent),
          zIndex: -1
        }, {
          transform: _translate(100 * (1 - percent)),
          zIndex: 0
        }];
      }
    }
  });
  var Slideshow$1 = {
    mixins: [Class, Slideshow, SliderReactive],
    props: {
      ratio: String,
      minHeight: Number,
      maxHeight: Number
    },
    data: {
      ratio: '16:9',
      minHeight: false,
      maxHeight: false,
      selList: '.uk-slideshow-items',
      attrItem: 'uk-slideshow-item',
      selNav: '.uk-slideshow-nav',
      Animations: Animations$2
    },
    update: {
      read: function read() {
        var ref = this.ratio.split(':').map(Number);
        var width = ref[0];
        var height = ref[1];
        height = height * this.list.offsetWidth / width || 0;

        if (this.minHeight) {
          height = Math.max(this.minHeight, height);
        }

        if (this.maxHeight) {
          height = Math.min(this.maxHeight, height);
        }

        return {
          height: height - boxModelAdjust(this.list, 'content-box')
        };
      },
      write: function write(ref) {
        var height = ref.height;
        height > 0 && css(this.list, 'minHeight', height);
      },
      events: ['resize']
    }
  };
  var Sortable = {
    mixins: [Class, Animate],
    props: {
      group: String,
      threshold: Number,
      clsItem: String,
      clsPlaceholder: String,
      clsDrag: String,
      clsDragState: String,
      clsBase: String,
      clsNoDrag: String,
      clsEmpty: String,
      clsCustom: String,
      handle: String
    },
    data: {
      group: false,
      threshold: 5,
      clsItem: 'uk-sortable-item',
      clsPlaceholder: 'uk-sortable-placeholder',
      clsDrag: 'uk-sortable-drag',
      clsDragState: 'uk-drag',
      clsBase: 'uk-sortable',
      clsNoDrag: 'uk-sortable-nodrag',
      clsEmpty: 'uk-sortable-empty',
      clsCustom: '',
      handle: false
    },
    created: function created() {
      var this$1 = this;
      ['init', 'start', 'move', 'end'].forEach(function (key) {
        var fn = this$1[key];

        this$1[key] = function (e) {
          this$1.scrollY = window.pageYOffset;
          var ref = getEventPos(e, 'page');
          var x = ref.x;
          var y = ref.y;
          this$1.pos = {
            x: x,
            y: y
          };
          fn(e);
        };
      });
    },
    events: {
      name: pointerDown,
      passive: false,
      handler: 'init'
    },
    update: {
      write: function write() {
        if (this.clsEmpty) {
          toggleClass(this.$el, this.clsEmpty, isEmpty(this.$el.children));
        }

        css(this.handle ? $$(this.handle, this.$el) : this.$el.children, {
          touchAction: 'none',
          userSelect: 'none'
        });

        if (this.drag) {
          // clamp to viewport
          var ref = offset(window);
          var right = ref.right;
          var bottom = ref.bottom;
          offset(this.drag, {
            top: clamp(this.pos.y + this.origin.top, 0, bottom - this.drag.offsetHeight),
            left: clamp(this.pos.x + this.origin.left, 0, right - this.drag.offsetWidth)
          });
          trackScroll(this.pos);
        }
      }
    },
    methods: {
      init: function init(e) {
        var target = e.target;
        var button = e.button;
        var defaultPrevented = e.defaultPrevented;
        var ref = toNodes(this.$el.children).filter(function (el) {
          return within(target, el);
        });
        var placeholder = ref[0];

        if (!placeholder || defaultPrevented || button > 0 || isInput(target) || within(target, "." + this.clsNoDrag) || this.handle && !within(target, this.handle)) {
          return;
        }

        e.preventDefault();
        this.touched = [this];
        this.placeholder = placeholder;
        this.origin = assign({
          target: target,
          index: _index(placeholder)
        }, this.pos);
        on(document, pointerMove, this.move);
        on(document, pointerUp, this.end);
        on(window, 'scroll', this.scroll);

        if (!this.threshold) {
          this.start(e);
        }
      },
      start: function start(e) {
        this.drag = append(this.$container, this.placeholder.outerHTML.replace(/^<li/i, '<div').replace(/li>$/i, 'div>'));
        css(this.drag, assign({
          boxSizing: 'border-box',
          width: this.placeholder.offsetWidth,
          height: this.placeholder.offsetHeight,
          overflow: 'hidden'
        }, css(this.placeholder, ['paddingLeft', 'paddingRight', 'paddingTop', 'paddingBottom'])));
        attr(this.drag, 'uk-no-boot', '');
        addClass(this.drag, this.clsDrag, this.clsCustom);
        height(this.drag.firstElementChild, height(this.placeholder.firstElementChild));
        var ref = offset(this.placeholder);
        var left = ref.left;
        var top = ref.top;
        assign(this.origin, {
          left: left - this.pos.x,
          top: top - this.pos.y
        });
        addClass(this.placeholder, this.clsPlaceholder);
        addClass(this.$el.children, this.clsItem);
        addClass(document.documentElement, this.clsDragState);
        trigger(this.$el, 'start', [this, this.placeholder]);
        this.move(e);
      },
      move: function move(e) {
        if (!this.drag) {
          if (Math.abs(this.pos.x - this.origin.x) > this.threshold || Math.abs(this.pos.y - this.origin.y) > this.threshold) {
            this.start(e);
          }

          return;
        }

        this.$emit();
        var target = e.type === 'mousemove' ? e.target : document.elementFromPoint(this.pos.x - window.pageXOffset, this.pos.y - window.pageYOffset);
        var sortable = this.getSortable(target);
        var previous = this.getSortable(this.placeholder);
        var move = sortable !== previous;

        if (!sortable || within(target, this.placeholder) || move && (!sortable.group || sortable.group !== previous.group)) {
          return;
        }

        target = sortable.$el === target.parentNode && target || toNodes(sortable.$el.children).filter(function (element) {
          return within(target, element);
        })[0];

        if (move) {
          previous.remove(this.placeholder);
        } else if (!target) {
          return;
        }

        sortable.insert(this.placeholder, target);

        if (!includes(this.touched, sortable)) {
          this.touched.push(sortable);
        }
      },
      end: function end(e) {
        off(document, pointerMove, this.move);
        off(document, pointerUp, this.end);
        off(window, 'scroll', this.scroll);

        if (!this.drag) {
          if (e.type === 'touchend') {
            e.target.click();
          }

          return;
        }

        untrackScroll();
        var sortable = this.getSortable(this.placeholder);

        if (this === sortable) {
          if (this.origin.index !== _index(this.placeholder)) {
            trigger(this.$el, 'moved', [this, this.placeholder]);
          }
        } else {
          trigger(sortable.$el, 'added', [sortable, this.placeholder]);
          trigger(this.$el, 'removed', [this, this.placeholder]);
        }

        trigger(this.$el, 'stop', [this, this.placeholder]);

        _remove(this.drag);

        this.drag = null;
        var classes = this.touched.map(function (sortable) {
          return sortable.clsPlaceholder + " " + sortable.clsItem;
        }).join(' ');
        this.touched.forEach(function (sortable) {
          return removeClass(sortable.$el.children, classes);
        });
        removeClass(document.documentElement, this.clsDragState);
      },
      scroll: function scroll() {
        var scroll = window.pageYOffset;

        if (scroll !== this.scrollY) {
          this.pos.y += scroll - this.scrollY;
          this.scrollY = scroll;
          this.$emit();
        }
      },
      insert: function insert(element, target) {
        var this$1 = this;
        addClass(this.$el.children, this.clsItem);

        var insert = function insert() {
          if (target) {
            if (!within(element, this$1.$el) || isPredecessor(element, target)) {
              before(target, element);
            } else {
              after(target, element);
            }
          } else {
            append(this$1.$el, element);
          }
        };

        if (this.animation) {
          this.animate(insert);
        } else {
          insert();
        }
      },
      remove: function remove(element) {
        if (!within(element, this.$el)) {
          return;
        }

        css(this.handle ? $$(this.handle, element) : element, {
          touchAction: '',
          userSelect: ''
        });

        if (this.animation) {
          this.animate(function () {
            return _remove(element);
          });
        } else {
          _remove(element);
        }
      },
      getSortable: function getSortable(element) {
        return element && (this.$getComponent(element, 'sortable') || this.getSortable(element.parentNode));
      }
    }
  };

  function isPredecessor(element, target) {
    return element.parentNode === target.parentNode && _index(element) > _index(target);
  }

  var trackTimer;

  function trackScroll(ref) {
    var x = ref.x;
    var y = ref.y;
    clearTimeout(trackTimer);
    scrollParents(document.elementFromPoint(x - window.pageXOffset, y - window.pageYOffset)).some(function (scrollEl) {
      var scroll = scrollEl.scrollTop;
      var scrollHeight = scrollEl.scrollHeight;

      if (getScrollingElement() === scrollEl) {
        scrollEl = window;
        scrollHeight -= window.innerHeight;
      }

      var ref = offset(scrollEl);
      var top = ref.top;
      var bottom = ref.bottom;

      if (top < y && top + 30 > y) {
        scroll -= 5;
      } else if (bottom > y && bottom - 20 < y) {
        scroll += 5;
      }

      if (scroll > 0 && scroll < scrollHeight) {
        return trackTimer = setTimeout(function () {
          scrollTop(scrollEl, scroll);
          trackScroll({
            x: x,
            y: y
          });
        }, 10);
      }
    });
  }

  function untrackScroll() {
    clearTimeout(trackTimer);
  }

  var overflowRe = /auto|scroll/;

  function scrollParents(element) {
    var scrollEl = getScrollingElement();
    return parents$1(element, function (parent) {
      return parent === scrollEl || overflowRe.test(css(parent, 'overflow'));
    });
  }

  function parents$1(element, fn) {
    var parents = [];

    do {
      if (fn(element)) {
        parents.unshift(element);
      }
    } while (element && (element = element.parentElement));

    return parents;
  }

  function getScrollingElement() {
    return document.scrollingElement || document.documentElement;
  }

  var obj$1;
  var actives = [];
  var Tooltip = {
    mixins: [Container, Togglable, Position],
    args: 'title',
    props: {
      delay: Number,
      title: String
    },
    data: {
      pos: 'top',
      title: '',
      delay: 0,
      animation: ['uk-animation-scale-up'],
      duration: 100,
      cls: 'uk-active',
      clsPos: 'uk-tooltip'
    },
    beforeConnect: function beforeConnect() {
      this._hasTitle = hasAttr(this.$el, 'title');
      attr(this.$el, {
        title: '',
        'aria-expanded': false
      });
    },
    disconnected: function disconnected() {
      this.hide();
      attr(this.$el, {
        title: this._hasTitle ? this.title : null,
        'aria-expanded': null
      });
    },
    methods: {
      show: function show() {
        var this$1 = this;

        if (this.isActive() || !this.title) {
          return;
        }

        actives.forEach(function (active) {
          return active.hide();
        });
        actives.push(this);
        this._unbind = on(document, pointerUp, function (e) {
          return !within(e.target, this$1.$el) && this$1.hide();
        });
        clearTimeout(this.showTimer);
        this.showTimer = setTimeout(function () {
          this$1._show();

          this$1.hideTimer = setInterval(function () {
            if (!isVisible(this$1.$el)) {
              this$1.hide();
            }
          }, 150);
        }, this.delay);
      },
      hide: function hide() {
        if (!this.isActive() || matches(this.$el, 'input:focus')) {
          return;
        }

        actives.splice(actives.indexOf(this), 1);
        clearTimeout(this.showTimer);
        clearInterval(this.hideTimer);
        attr(this.$el, 'aria-expanded', false);
        this.toggleElement(this.tooltip, false);
        this.tooltip && _remove(this.tooltip);
        this.tooltip = false;

        this._unbind();
      },
      _show: function _show() {
        this.tooltip = append(this.container, "<div class=\"" + this.clsPos + "\" aria-expanded=\"true\" aria-hidden> <div class=\"" + this.clsPos + "-inner\">" + this.title + "</div> </div>");
        this.positionAt(this.tooltip, this.$el);
        this.origin = this.getAxis() === 'y' ? flipPosition(this.dir) + "-" + this.align : this.align + "-" + flipPosition(this.dir);
        this.toggleElement(this.tooltip, true);
      },
      isActive: function isActive() {
        return includes(actives, this);
      }
    },
    events: (obj$1 = {
      focus: 'show',
      blur: 'hide'
    }, obj$1[pointerEnter + " " + pointerLeave] = function (e) {
      if (isTouch(e)) {
        return;
      }

      e.type === pointerEnter ? this.show() : this.hide();
    }, obj$1[pointerDown] = function (e) {
      if (!isTouch(e)) {
        return;
      }

      this.isActive() ? this.hide() : this.show();
    }, obj$1)
  };
  var Upload = {
    props: {
      allow: String,
      clsDragover: String,
      concurrent: Number,
      maxSize: Number,
      method: String,
      mime: String,
      msgInvalidMime: String,
      msgInvalidName: String,
      msgInvalidSize: String,
      multiple: Boolean,
      name: String,
      params: Object,
      type: String,
      url: String
    },
    data: {
      allow: false,
      clsDragover: 'uk-dragover',
      concurrent: 1,
      maxSize: 0,
      method: 'POST',
      mime: false,
      msgInvalidMime: 'Invalid File Type: %s',
      msgInvalidName: 'Invalid File Name: %s',
      msgInvalidSize: 'Invalid File Size: %s Kilobytes Max',
      multiple: false,
      name: 'files[]',
      params: {},
      type: '',
      url: '',
      abort: noop,
      beforeAll: noop,
      beforeSend: noop,
      complete: noop,
      completeAll: noop,
      error: noop,
      fail: noop,
      load: noop,
      loadEnd: noop,
      loadStart: noop,
      progress: noop
    },
    events: {
      change: function change(e) {
        if (!matches(e.target, 'input[type="file"]')) {
          return;
        }

        e.preventDefault();

        if (e.target.files) {
          this.upload(e.target.files);
        }

        e.target.value = '';
      },
      drop: function drop(e) {
        stop(e);
        var transfer = e.dataTransfer;

        if (!transfer || !transfer.files) {
          return;
        }

        removeClass(this.$el, this.clsDragover);
        this.upload(transfer.files);
      },
      dragenter: function dragenter(e) {
        stop(e);
      },
      dragover: function dragover(e) {
        stop(e);
        addClass(this.$el, this.clsDragover);
      },
      dragleave: function dragleave(e) {
        stop(e);
        removeClass(this.$el, this.clsDragover);
      }
    },
    methods: {
      upload: function upload(files) {
        var this$1 = this;

        if (!files.length) {
          return;
        }

        trigger(this.$el, 'upload', [files]);

        for (var i = 0; i < files.length; i++) {
          if (this.maxSize && this.maxSize * 1000 < files[i].size) {
            this.fail(this.msgInvalidSize.replace('%s', this.maxSize));
            return;
          }

          if (this.allow && !match$1(this.allow, files[i].name)) {
            this.fail(this.msgInvalidName.replace('%s', this.allow));
            return;
          }

          if (this.mime && !match$1(this.mime, files[i].type)) {
            this.fail(this.msgInvalidMime.replace('%s', this.mime));
            return;
          }
        }

        if (!this.multiple) {
          files = [files[0]];
        }

        this.beforeAll(this, files);
        var chunks = chunk(files, this.concurrent);

        var upload = function upload(files) {
          var data = new FormData();
          files.forEach(function (file) {
            return data.append(this$1.name, file);
          });

          for (var key in this$1.params) {
            data.append(key, this$1.params[key]);
          }

          ajax(this$1.url, {
            data: data,
            method: this$1.method,
            responseType: this$1.type,
            beforeSend: function beforeSend(env) {
              var xhr = env.xhr;
              xhr.upload && on(xhr.upload, 'progress', this$1.progress);
              ['loadStart', 'load', 'loadEnd', 'abort'].forEach(function (type) {
                return on(xhr, type.toLowerCase(), this$1[type]);
              });
              this$1.beforeSend(env);
            }
          }).then(function (xhr) {
            this$1.complete(xhr);

            if (chunks.length) {
              upload(chunks.shift());
            } else {
              this$1.completeAll(xhr);
            }
          }, function (e) {
            return this$1.error(e);
          });
        };

        upload(chunks.shift());
      }
    }
  };

  function match$1(pattern, path) {
    return path.match(new RegExp("^" + pattern.replace(/\//g, '\\/').replace(/\*\*/g, '(\\/[^\\/]+)*').replace(/\*/g, '[^\\/]+').replace(/((?!\\))\?/g, '$1.') + "$", 'i'));
  }

  function chunk(files, size) {
    var chunks = [];

    for (var i = 0; i < files.length; i += size) {
      var chunk = [];

      for (var j = 0; j < size; j++) {
        chunk.push(files[i + j]);
      }

      chunks.push(chunk);
    }

    return chunks;
  }

  function stop(e) {
    e.preventDefault();
    e.stopPropagation();
  }

  UIkit.component('countdown', Countdown);
  UIkit.component('filter', Filter);
  UIkit.component('lightbox', Lightbox);
  UIkit.component('lightboxPanel', lightboxPanel);
  UIkit.component('notification', Notification);
  UIkit.component('parallax', Parallax$1);
  UIkit.component('slider', Slider$1);
  UIkit.component('sliderParallax', SlideshowParallax);
  UIkit.component('slideshow', Slideshow$1);
  UIkit.component('slideshowParallax', SlideshowParallax);
  UIkit.component('sortable', Sortable);
  UIkit.component('tooltip', Tooltip);
  UIkit.component('upload', Upload);
  {
    boot(UIkit);
  }
  return UIkit;
});
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../../../../../node_modules/timers-browserify/main.js */ "./node_modules/timers-browserify/main.js").setImmediate))

/***/ }),

/***/ "./resources/assets/frontend/assets/js/jquery-3.3.1.min.js":
/*!*****************************************************************!*\
  !*** ./resources/assets/frontend/assets/js/jquery-3.3.1.min.js ***!
  \*****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(module) {var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/*! c | (c) JS Foundation and other contributors | jquery.org/license */
!function (e, t) {
  "use strict";

  "object" == ( false ? undefined : _typeof(module)) && "object" == _typeof(module.exports) ? module.exports = e.document ? t(e, !0) : function (e) {
    if (!e.document) throw new Error("jQuery requires a window with a document");
    return t(e);
  } : t(e);
}("undefined" != typeof window ? window : this, function (e, t) {
  "use strict";

  var n = [],
      r = e.document,
      i = Object.getPrototypeOf,
      o = n.slice,
      a = n.concat,
      s = n.push,
      u = n.indexOf,
      l = {},
      c = l.toString,
      f = l.hasOwnProperty,
      p = f.toString,
      d = p.call(Object),
      h = {},
      g = function e(t) {
    return "function" == typeof t && "number" != typeof t.nodeType;
  },
      y = function e(t) {
    return null != t && t === t.window;
  },
      v = {
    type: !0,
    src: !0,
    noModule: !0
  };

  function m(e, t, n) {
    var i,
        o = (t = t || r).createElement("script");
    if (o.text = e, n) for (i in v) {
      n[i] && (o[i] = n[i]);
    }
    t.head.appendChild(o).parentNode.removeChild(o);
  }

  function x(e) {
    return null == e ? e + "" : "object" == _typeof(e) || "function" == typeof e ? l[c.call(e)] || "object" : _typeof(e);
  }

  var b = "3.3.1",
      w = function w(e, t) {
    return new w.fn.init(e, t);
  },
      T = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;

  w.fn = w.prototype = {
    jquery: "3.3.1",
    constructor: w,
    length: 0,
    toArray: function toArray() {
      return o.call(this);
    },
    get: function get(e) {
      return null == e ? o.call(this) : e < 0 ? this[e + this.length] : this[e];
    },
    pushStack: function pushStack(e) {
      var t = w.merge(this.constructor(), e);
      return t.prevObject = this, t;
    },
    each: function each(e) {
      return w.each(this, e);
    },
    map: function map(e) {
      return this.pushStack(w.map(this, function (t, n) {
        return e.call(t, n, t);
      }));
    },
    slice: function slice() {
      return this.pushStack(o.apply(this, arguments));
    },
    first: function first() {
      return this.eq(0);
    },
    last: function last() {
      return this.eq(-1);
    },
    eq: function eq(e) {
      var t = this.length,
          n = +e + (e < 0 ? t : 0);
      return this.pushStack(n >= 0 && n < t ? [this[n]] : []);
    },
    end: function end() {
      return this.prevObject || this.constructor();
    },
    push: s,
    sort: n.sort,
    splice: n.splice
  }, w.extend = w.fn.extend = function () {
    var e,
        t,
        n,
        r,
        i,
        o,
        a = arguments[0] || {},
        s = 1,
        u = arguments.length,
        l = !1;

    for ("boolean" == typeof a && (l = a, a = arguments[s] || {}, s++), "object" == _typeof(a) || g(a) || (a = {}), s === u && (a = this, s--); s < u; s++) {
      if (null != (e = arguments[s])) for (t in e) {
        n = a[t], a !== (r = e[t]) && (l && r && (w.isPlainObject(r) || (i = Array.isArray(r))) ? (i ? (i = !1, o = n && Array.isArray(n) ? n : []) : o = n && w.isPlainObject(n) ? n : {}, a[t] = w.extend(l, o, r)) : void 0 !== r && (a[t] = r));
      }
    }

    return a;
  }, w.extend({
    expando: "jQuery" + ("3.3.1" + Math.random()).replace(/\D/g, ""),
    isReady: !0,
    error: function error(e) {
      throw new Error(e);
    },
    noop: function noop() {},
    isPlainObject: function isPlainObject(e) {
      var t, n;
      return !(!e || "[object Object]" !== c.call(e)) && (!(t = i(e)) || "function" == typeof (n = f.call(t, "constructor") && t.constructor) && p.call(n) === d);
    },
    isEmptyObject: function isEmptyObject(e) {
      var t;

      for (t in e) {
        return !1;
      }

      return !0;
    },
    globalEval: function globalEval(e) {
      m(e);
    },
    each: function each(e, t) {
      var n,
          r = 0;

      if (C(e)) {
        for (n = e.length; r < n; r++) {
          if (!1 === t.call(e[r], r, e[r])) break;
        }
      } else for (r in e) {
        if (!1 === t.call(e[r], r, e[r])) break;
      }

      return e;
    },
    trim: function trim(e) {
      return null == e ? "" : (e + "").replace(T, "");
    },
    makeArray: function makeArray(e, t) {
      var n = t || [];
      return null != e && (C(Object(e)) ? w.merge(n, "string" == typeof e ? [e] : e) : s.call(n, e)), n;
    },
    inArray: function inArray(e, t, n) {
      return null == t ? -1 : u.call(t, e, n);
    },
    merge: function merge(e, t) {
      for (var n = +t.length, r = 0, i = e.length; r < n; r++) {
        e[i++] = t[r];
      }

      return e.length = i, e;
    },
    grep: function grep(e, t, n) {
      for (var r, i = [], o = 0, a = e.length, s = !n; o < a; o++) {
        (r = !t(e[o], o)) !== s && i.push(e[o]);
      }

      return i;
    },
    map: function map(e, t, n) {
      var r,
          i,
          o = 0,
          s = [];
      if (C(e)) for (r = e.length; o < r; o++) {
        null != (i = t(e[o], o, n)) && s.push(i);
      } else for (o in e) {
        null != (i = t(e[o], o, n)) && s.push(i);
      }
      return a.apply([], s);
    },
    guid: 1,
    support: h
  }), "function" == typeof Symbol && (w.fn[Symbol.iterator] = n[Symbol.iterator]), w.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "), function (e, t) {
    l["[object " + t + "]"] = t.toLowerCase();
  });

  function C(e) {
    var t = !!e && "length" in e && e.length,
        n = x(e);
    return !g(e) && !y(e) && ("array" === n || 0 === t || "number" == typeof t && t > 0 && t - 1 in e);
  }

  var E = function (e) {
    var t,
        n,
        r,
        i,
        o,
        a,
        s,
        u,
        l,
        c,
        f,
        p,
        d,
        h,
        g,
        y,
        v,
        m,
        x,
        b = "sizzle" + 1 * new Date(),
        w = e.document,
        T = 0,
        C = 0,
        E = ae(),
        k = ae(),
        S = ae(),
        D = function D(e, t) {
      return e === t && (f = !0), 0;
    },
        N = {}.hasOwnProperty,
        A = [],
        j = A.pop,
        q = A.push,
        L = A.push,
        H = A.slice,
        O = function O(e, t) {
      for (var n = 0, r = e.length; n < r; n++) {
        if (e[n] === t) return n;
      }

      return -1;
    },
        P = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
        M = "[\\x20\\t\\r\\n\\f]",
        R = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",
        I = "\\[" + M + "*(" + R + ")(?:" + M + "*([*^$|!~]?=)" + M + "*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + R + "))|)" + M + "*\\]",
        W = ":(" + R + ")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + I + ")*)|.*)\\)|)",
        $ = new RegExp(M + "+", "g"),
        B = new RegExp("^" + M + "+|((?:^|[^\\\\])(?:\\\\.)*)" + M + "+$", "g"),
        F = new RegExp("^" + M + "*," + M + "*"),
        _ = new RegExp("^" + M + "*([>+~]|" + M + ")" + M + "*"),
        z = new RegExp("=" + M + "*([^\\]'\"]*?)" + M + "*\\]", "g"),
        X = new RegExp(W),
        U = new RegExp("^" + R + "$"),
        V = {
      ID: new RegExp("^#(" + R + ")"),
      CLASS: new RegExp("^\\.(" + R + ")"),
      TAG: new RegExp("^(" + R + "|[*])"),
      ATTR: new RegExp("^" + I),
      PSEUDO: new RegExp("^" + W),
      CHILD: new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + M + "*(even|odd|(([+-]|)(\\d*)n|)" + M + "*(?:([+-]|)" + M + "*(\\d+)|))" + M + "*\\)|)", "i"),
      bool: new RegExp("^(?:" + P + ")$", "i"),
      needsContext: new RegExp("^" + M + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" + M + "*((?:-\\d)?\\d*)" + M + "*\\)|)(?=[^-]|$)", "i")
    },
        G = /^(?:input|select|textarea|button)$/i,
        Y = /^h\d$/i,
        Q = /^[^{]+\{\s*\[native \w/,
        J = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
        K = /[+~]/,
        Z = new RegExp("\\\\([\\da-f]{1,6}" + M + "?|(" + M + ")|.)", "ig"),
        ee = function ee(e, t, n) {
      var r = "0x" + t - 65536;
      return r !== r || n ? t : r < 0 ? String.fromCharCode(r + 65536) : String.fromCharCode(r >> 10 | 55296, 1023 & r | 56320);
    },
        te = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
        ne = function ne(e, t) {
      return t ? "\0" === e ? "\uFFFD" : e.slice(0, -1) + "\\" + e.charCodeAt(e.length - 1).toString(16) + " " : "\\" + e;
    },
        re = function re() {
      p();
    },
        ie = me(function (e) {
      return !0 === e.disabled && ("form" in e || "label" in e);
    }, {
      dir: "parentNode",
      next: "legend"
    });

    try {
      L.apply(A = H.call(w.childNodes), w.childNodes), A[w.childNodes.length].nodeType;
    } catch (e) {
      L = {
        apply: A.length ? function (e, t) {
          q.apply(e, H.call(t));
        } : function (e, t) {
          var n = e.length,
              r = 0;

          while (e[n++] = t[r++]) {
            ;
          }

          e.length = n - 1;
        }
      };
    }

    function oe(e, t, r, i) {
      var o,
          s,
          l,
          c,
          f,
          h,
          v,
          m = t && t.ownerDocument,
          T = t ? t.nodeType : 9;
      if (r = r || [], "string" != typeof e || !e || 1 !== T && 9 !== T && 11 !== T) return r;

      if (!i && ((t ? t.ownerDocument || t : w) !== d && p(t), t = t || d, g)) {
        if (11 !== T && (f = J.exec(e))) if (o = f[1]) {
          if (9 === T) {
            if (!(l = t.getElementById(o))) return r;
            if (l.id === o) return r.push(l), r;
          } else if (m && (l = m.getElementById(o)) && x(t, l) && l.id === o) return r.push(l), r;
        } else {
          if (f[2]) return L.apply(r, t.getElementsByTagName(e)), r;
          if ((o = f[3]) && n.getElementsByClassName && t.getElementsByClassName) return L.apply(r, t.getElementsByClassName(o)), r;
        }

        if (n.qsa && !S[e + " "] && (!y || !y.test(e))) {
          if (1 !== T) m = t, v = e;else if ("object" !== t.nodeName.toLowerCase()) {
            (c = t.getAttribute("id")) ? c = c.replace(te, ne) : t.setAttribute("id", c = b), s = (h = a(e)).length;

            while (s--) {
              h[s] = "#" + c + " " + ve(h[s]);
            }

            v = h.join(","), m = K.test(e) && ge(t.parentNode) || t;
          }
          if (v) try {
            return L.apply(r, m.querySelectorAll(v)), r;
          } catch (e) {} finally {
            c === b && t.removeAttribute("id");
          }
        }
      }

      return u(e.replace(B, "$1"), t, r, i);
    }

    function ae() {
      var e = [];

      function t(n, i) {
        return e.push(n + " ") > r.cacheLength && delete t[e.shift()], t[n + " "] = i;
      }

      return t;
    }

    function se(e) {
      return e[b] = !0, e;
    }

    function ue(e) {
      var t = d.createElement("fieldset");

      try {
        return !!e(t);
      } catch (e) {
        return !1;
      } finally {
        t.parentNode && t.parentNode.removeChild(t), t = null;
      }
    }

    function le(e, t) {
      var n = e.split("|"),
          i = n.length;

      while (i--) {
        r.attrHandle[n[i]] = t;
      }
    }

    function ce(e, t) {
      var n = t && e,
          r = n && 1 === e.nodeType && 1 === t.nodeType && e.sourceIndex - t.sourceIndex;
      if (r) return r;
      if (n) while (n = n.nextSibling) {
        if (n === t) return -1;
      }
      return e ? 1 : -1;
    }

    function fe(e) {
      return function (t) {
        return "input" === t.nodeName.toLowerCase() && t.type === e;
      };
    }

    function pe(e) {
      return function (t) {
        var n = t.nodeName.toLowerCase();
        return ("input" === n || "button" === n) && t.type === e;
      };
    }

    function de(e) {
      return function (t) {
        return "form" in t ? t.parentNode && !1 === t.disabled ? "label" in t ? "label" in t.parentNode ? t.parentNode.disabled === e : t.disabled === e : t.isDisabled === e || t.isDisabled !== !e && ie(t) === e : t.disabled === e : "label" in t && t.disabled === e;
      };
    }

    function he(e) {
      return se(function (t) {
        return t = +t, se(function (n, r) {
          var i,
              o = e([], n.length, t),
              a = o.length;

          while (a--) {
            n[i = o[a]] && (n[i] = !(r[i] = n[i]));
          }
        });
      });
    }

    function ge(e) {
      return e && "undefined" != typeof e.getElementsByTagName && e;
    }

    n = oe.support = {}, o = oe.isXML = function (e) {
      var t = e && (e.ownerDocument || e).documentElement;
      return !!t && "HTML" !== t.nodeName;
    }, p = oe.setDocument = function (e) {
      var t,
          i,
          a = e ? e.ownerDocument || e : w;
      return a !== d && 9 === a.nodeType && a.documentElement ? (d = a, h = d.documentElement, g = !o(d), w !== d && (i = d.defaultView) && i.top !== i && (i.addEventListener ? i.addEventListener("unload", re, !1) : i.attachEvent && i.attachEvent("onunload", re)), n.attributes = ue(function (e) {
        return e.className = "i", !e.getAttribute("className");
      }), n.getElementsByTagName = ue(function (e) {
        return e.appendChild(d.createComment("")), !e.getElementsByTagName("*").length;
      }), n.getElementsByClassName = Q.test(d.getElementsByClassName), n.getById = ue(function (e) {
        return h.appendChild(e).id = b, !d.getElementsByName || !d.getElementsByName(b).length;
      }), n.getById ? (r.filter.ID = function (e) {
        var t = e.replace(Z, ee);
        return function (e) {
          return e.getAttribute("id") === t;
        };
      }, r.find.ID = function (e, t) {
        if ("undefined" != typeof t.getElementById && g) {
          var n = t.getElementById(e);
          return n ? [n] : [];
        }
      }) : (r.filter.ID = function (e) {
        var t = e.replace(Z, ee);
        return function (e) {
          var n = "undefined" != typeof e.getAttributeNode && e.getAttributeNode("id");
          return n && n.value === t;
        };
      }, r.find.ID = function (e, t) {
        if ("undefined" != typeof t.getElementById && g) {
          var n,
              r,
              i,
              o = t.getElementById(e);

          if (o) {
            if ((n = o.getAttributeNode("id")) && n.value === e) return [o];
            i = t.getElementsByName(e), r = 0;

            while (o = i[r++]) {
              if ((n = o.getAttributeNode("id")) && n.value === e) return [o];
            }
          }

          return [];
        }
      }), r.find.TAG = n.getElementsByTagName ? function (e, t) {
        return "undefined" != typeof t.getElementsByTagName ? t.getElementsByTagName(e) : n.qsa ? t.querySelectorAll(e) : void 0;
      } : function (e, t) {
        var n,
            r = [],
            i = 0,
            o = t.getElementsByTagName(e);

        if ("*" === e) {
          while (n = o[i++]) {
            1 === n.nodeType && r.push(n);
          }

          return r;
        }

        return o;
      }, r.find.CLASS = n.getElementsByClassName && function (e, t) {
        if ("undefined" != typeof t.getElementsByClassName && g) return t.getElementsByClassName(e);
      }, v = [], y = [], (n.qsa = Q.test(d.querySelectorAll)) && (ue(function (e) {
        h.appendChild(e).innerHTML = "<a id='" + b + "'></a><select id='" + b + "-\r\\' msallowcapture=''><option selected=''></option></select>", e.querySelectorAll("[msallowcapture^='']").length && y.push("[*^$]=" + M + "*(?:''|\"\")"), e.querySelectorAll("[selected]").length || y.push("\\[" + M + "*(?:value|" + P + ")"), e.querySelectorAll("[id~=" + b + "-]").length || y.push("~="), e.querySelectorAll(":checked").length || y.push(":checked"), e.querySelectorAll("a#" + b + "+*").length || y.push(".#.+[+~]");
      }), ue(function (e) {
        e.innerHTML = "<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";
        var t = d.createElement("input");
        t.setAttribute("type", "hidden"), e.appendChild(t).setAttribute("name", "D"), e.querySelectorAll("[name=d]").length && y.push("name" + M + "*[*^$|!~]?="), 2 !== e.querySelectorAll(":enabled").length && y.push(":enabled", ":disabled"), h.appendChild(e).disabled = !0, 2 !== e.querySelectorAll(":disabled").length && y.push(":enabled", ":disabled"), e.querySelectorAll("*,:x"), y.push(",.*:");
      })), (n.matchesSelector = Q.test(m = h.matches || h.webkitMatchesSelector || h.mozMatchesSelector || h.oMatchesSelector || h.msMatchesSelector)) && ue(function (e) {
        n.disconnectedMatch = m.call(e, "*"), m.call(e, "[s!='']:x"), v.push("!=", W);
      }), y = y.length && new RegExp(y.join("|")), v = v.length && new RegExp(v.join("|")), t = Q.test(h.compareDocumentPosition), x = t || Q.test(h.contains) ? function (e, t) {
        var n = 9 === e.nodeType ? e.documentElement : e,
            r = t && t.parentNode;
        return e === r || !(!r || 1 !== r.nodeType || !(n.contains ? n.contains(r) : e.compareDocumentPosition && 16 & e.compareDocumentPosition(r)));
      } : function (e, t) {
        if (t) while (t = t.parentNode) {
          if (t === e) return !0;
        }
        return !1;
      }, D = t ? function (e, t) {
        if (e === t) return f = !0, 0;
        var r = !e.compareDocumentPosition - !t.compareDocumentPosition;
        return r || (1 & (r = (e.ownerDocument || e) === (t.ownerDocument || t) ? e.compareDocumentPosition(t) : 1) || !n.sortDetached && t.compareDocumentPosition(e) === r ? e === d || e.ownerDocument === w && x(w, e) ? -1 : t === d || t.ownerDocument === w && x(w, t) ? 1 : c ? O(c, e) - O(c, t) : 0 : 4 & r ? -1 : 1);
      } : function (e, t) {
        if (e === t) return f = !0, 0;
        var n,
            r = 0,
            i = e.parentNode,
            o = t.parentNode,
            a = [e],
            s = [t];
        if (!i || !o) return e === d ? -1 : t === d ? 1 : i ? -1 : o ? 1 : c ? O(c, e) - O(c, t) : 0;
        if (i === o) return ce(e, t);
        n = e;

        while (n = n.parentNode) {
          a.unshift(n);
        }

        n = t;

        while (n = n.parentNode) {
          s.unshift(n);
        }

        while (a[r] === s[r]) {
          r++;
        }

        return r ? ce(a[r], s[r]) : a[r] === w ? -1 : s[r] === w ? 1 : 0;
      }, d) : d;
    }, oe.matches = function (e, t) {
      return oe(e, null, null, t);
    }, oe.matchesSelector = function (e, t) {
      if ((e.ownerDocument || e) !== d && p(e), t = t.replace(z, "='$1']"), n.matchesSelector && g && !S[t + " "] && (!v || !v.test(t)) && (!y || !y.test(t))) try {
        var r = m.call(e, t);
        if (r || n.disconnectedMatch || e.document && 11 !== e.document.nodeType) return r;
      } catch (e) {}
      return oe(t, d, null, [e]).length > 0;
    }, oe.contains = function (e, t) {
      return (e.ownerDocument || e) !== d && p(e), x(e, t);
    }, oe.attr = function (e, t) {
      (e.ownerDocument || e) !== d && p(e);
      var i = r.attrHandle[t.toLowerCase()],
          o = i && N.call(r.attrHandle, t.toLowerCase()) ? i(e, t, !g) : void 0;
      return void 0 !== o ? o : n.attributes || !g ? e.getAttribute(t) : (o = e.getAttributeNode(t)) && o.specified ? o.value : null;
    }, oe.escape = function (e) {
      return (e + "").replace(te, ne);
    }, oe.error = function (e) {
      throw new Error("Syntax error, unrecognized expression: " + e);
    }, oe.uniqueSort = function (e) {
      var t,
          r = [],
          i = 0,
          o = 0;

      if (f = !n.detectDuplicates, c = !n.sortStable && e.slice(0), e.sort(D), f) {
        while (t = e[o++]) {
          t === e[o] && (i = r.push(o));
        }

        while (i--) {
          e.splice(r[i], 1);
        }
      }

      return c = null, e;
    }, i = oe.getText = function (e) {
      var t,
          n = "",
          r = 0,
          o = e.nodeType;

      if (o) {
        if (1 === o || 9 === o || 11 === o) {
          if ("string" == typeof e.textContent) return e.textContent;

          for (e = e.firstChild; e; e = e.nextSibling) {
            n += i(e);
          }
        } else if (3 === o || 4 === o) return e.nodeValue;
      } else while (t = e[r++]) {
        n += i(t);
      }

      return n;
    }, (r = oe.selectors = {
      cacheLength: 50,
      createPseudo: se,
      match: V,
      attrHandle: {},
      find: {},
      relative: {
        ">": {
          dir: "parentNode",
          first: !0
        },
        " ": {
          dir: "parentNode"
        },
        "+": {
          dir: "previousSibling",
          first: !0
        },
        "~": {
          dir: "previousSibling"
        }
      },
      preFilter: {
        ATTR: function ATTR(e) {
          return e[1] = e[1].replace(Z, ee), e[3] = (e[3] || e[4] || e[5] || "").replace(Z, ee), "~=" === e[2] && (e[3] = " " + e[3] + " "), e.slice(0, 4);
        },
        CHILD: function CHILD(e) {
          return e[1] = e[1].toLowerCase(), "nth" === e[1].slice(0, 3) ? (e[3] || oe.error(e[0]), e[4] = +(e[4] ? e[5] + (e[6] || 1) : 2 * ("even" === e[3] || "odd" === e[3])), e[5] = +(e[7] + e[8] || "odd" === e[3])) : e[3] && oe.error(e[0]), e;
        },
        PSEUDO: function PSEUDO(e) {
          var t,
              n = !e[6] && e[2];
          return V.CHILD.test(e[0]) ? null : (e[3] ? e[2] = e[4] || e[5] || "" : n && X.test(n) && (t = a(n, !0)) && (t = n.indexOf(")", n.length - t) - n.length) && (e[0] = e[0].slice(0, t), e[2] = n.slice(0, t)), e.slice(0, 3));
        }
      },
      filter: {
        TAG: function TAG(e) {
          var t = e.replace(Z, ee).toLowerCase();
          return "*" === e ? function () {
            return !0;
          } : function (e) {
            return e.nodeName && e.nodeName.toLowerCase() === t;
          };
        },
        CLASS: function CLASS(e) {
          var t = E[e + " "];
          return t || (t = new RegExp("(^|" + M + ")" + e + "(" + M + "|$)")) && E(e, function (e) {
            return t.test("string" == typeof e.className && e.className || "undefined" != typeof e.getAttribute && e.getAttribute("class") || "");
          });
        },
        ATTR: function ATTR(e, t, n) {
          return function (r) {
            var i = oe.attr(r, e);
            return null == i ? "!=" === t : !t || (i += "", "=" === t ? i === n : "!=" === t ? i !== n : "^=" === t ? n && 0 === i.indexOf(n) : "*=" === t ? n && i.indexOf(n) > -1 : "$=" === t ? n && i.slice(-n.length) === n : "~=" === t ? (" " + i.replace($, " ") + " ").indexOf(n) > -1 : "|=" === t && (i === n || i.slice(0, n.length + 1) === n + "-"));
          };
        },
        CHILD: function CHILD(e, t, n, r, i) {
          var o = "nth" !== e.slice(0, 3),
              a = "last" !== e.slice(-4),
              s = "of-type" === t;
          return 1 === r && 0 === i ? function (e) {
            return !!e.parentNode;
          } : function (t, n, u) {
            var l,
                c,
                f,
                p,
                d,
                h,
                g = o !== a ? "nextSibling" : "previousSibling",
                y = t.parentNode,
                v = s && t.nodeName.toLowerCase(),
                m = !u && !s,
                x = !1;

            if (y) {
              if (o) {
                while (g) {
                  p = t;

                  while (p = p[g]) {
                    if (s ? p.nodeName.toLowerCase() === v : 1 === p.nodeType) return !1;
                  }

                  h = g = "only" === e && !h && "nextSibling";
                }

                return !0;
              }

              if (h = [a ? y.firstChild : y.lastChild], a && m) {
                x = (d = (l = (c = (f = (p = y)[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] || [])[0] === T && l[1]) && l[2], p = d && y.childNodes[d];

                while (p = ++d && p && p[g] || (x = d = 0) || h.pop()) {
                  if (1 === p.nodeType && ++x && p === t) {
                    c[e] = [T, d, x];
                    break;
                  }
                }
              } else if (m && (x = d = (l = (c = (f = (p = t)[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] || [])[0] === T && l[1]), !1 === x) while (p = ++d && p && p[g] || (x = d = 0) || h.pop()) {
                if ((s ? p.nodeName.toLowerCase() === v : 1 === p.nodeType) && ++x && (m && ((c = (f = p[b] || (p[b] = {}))[p.uniqueID] || (f[p.uniqueID] = {}))[e] = [T, x]), p === t)) break;
              }

              return (x -= i) === r || x % r == 0 && x / r >= 0;
            }
          };
        },
        PSEUDO: function PSEUDO(e, t) {
          var n,
              i = r.pseudos[e] || r.setFilters[e.toLowerCase()] || oe.error("unsupported pseudo: " + e);
          return i[b] ? i(t) : i.length > 1 ? (n = [e, e, "", t], r.setFilters.hasOwnProperty(e.toLowerCase()) ? se(function (e, n) {
            var r,
                o = i(e, t),
                a = o.length;

            while (a--) {
              e[r = O(e, o[a])] = !(n[r] = o[a]);
            }
          }) : function (e) {
            return i(e, 0, n);
          }) : i;
        }
      },
      pseudos: {
        not: se(function (e) {
          var t = [],
              n = [],
              r = s(e.replace(B, "$1"));
          return r[b] ? se(function (e, t, n, i) {
            var o,
                a = r(e, null, i, []),
                s = e.length;

            while (s--) {
              (o = a[s]) && (e[s] = !(t[s] = o));
            }
          }) : function (e, i, o) {
            return t[0] = e, r(t, null, o, n), t[0] = null, !n.pop();
          };
        }),
        has: se(function (e) {
          return function (t) {
            return oe(e, t).length > 0;
          };
        }),
        contains: se(function (e) {
          return e = e.replace(Z, ee), function (t) {
            return (t.textContent || t.innerText || i(t)).indexOf(e) > -1;
          };
        }),
        lang: se(function (e) {
          return U.test(e || "") || oe.error("unsupported lang: " + e), e = e.replace(Z, ee).toLowerCase(), function (t) {
            var n;

            do {
              if (n = g ? t.lang : t.getAttribute("xml:lang") || t.getAttribute("lang")) return (n = n.toLowerCase()) === e || 0 === n.indexOf(e + "-");
            } while ((t = t.parentNode) && 1 === t.nodeType);

            return !1;
          };
        }),
        target: function target(t) {
          var n = e.location && e.location.hash;
          return n && n.slice(1) === t.id;
        },
        root: function root(e) {
          return e === h;
        },
        focus: function focus(e) {
          return e === d.activeElement && (!d.hasFocus || d.hasFocus()) && !!(e.type || e.href || ~e.tabIndex);
        },
        enabled: de(!1),
        disabled: de(!0),
        checked: function checked(e) {
          var t = e.nodeName.toLowerCase();
          return "input" === t && !!e.checked || "option" === t && !!e.selected;
        },
        selected: function selected(e) {
          return e.parentNode && e.parentNode.selectedIndex, !0 === e.selected;
        },
        empty: function empty(e) {
          for (e = e.firstChild; e; e = e.nextSibling) {
            if (e.nodeType < 6) return !1;
          }

          return !0;
        },
        parent: function parent(e) {
          return !r.pseudos.empty(e);
        },
        header: function header(e) {
          return Y.test(e.nodeName);
        },
        input: function input(e) {
          return G.test(e.nodeName);
        },
        button: function button(e) {
          var t = e.nodeName.toLowerCase();
          return "input" === t && "button" === e.type || "button" === t;
        },
        text: function text(e) {
          var t;
          return "input" === e.nodeName.toLowerCase() && "text" === e.type && (null == (t = e.getAttribute("type")) || "text" === t.toLowerCase());
        },
        first: he(function () {
          return [0];
        }),
        last: he(function (e, t) {
          return [t - 1];
        }),
        eq: he(function (e, t, n) {
          return [n < 0 ? n + t : n];
        }),
        even: he(function (e, t) {
          for (var n = 0; n < t; n += 2) {
            e.push(n);
          }

          return e;
        }),
        odd: he(function (e, t) {
          for (var n = 1; n < t; n += 2) {
            e.push(n);
          }

          return e;
        }),
        lt: he(function (e, t, n) {
          for (var r = n < 0 ? n + t : n; --r >= 0;) {
            e.push(r);
          }

          return e;
        }),
        gt: he(function (e, t, n) {
          for (var r = n < 0 ? n + t : n; ++r < t;) {
            e.push(r);
          }

          return e;
        })
      }
    }).pseudos.nth = r.pseudos.eq;

    for (t in {
      radio: !0,
      checkbox: !0,
      file: !0,
      password: !0,
      image: !0
    }) {
      r.pseudos[t] = fe(t);
    }

    for (t in {
      submit: !0,
      reset: !0
    }) {
      r.pseudos[t] = pe(t);
    }

    function ye() {}

    ye.prototype = r.filters = r.pseudos, r.setFilters = new ye(), a = oe.tokenize = function (e, t) {
      var n,
          i,
          o,
          a,
          s,
          u,
          l,
          c = k[e + " "];
      if (c) return t ? 0 : c.slice(0);
      s = e, u = [], l = r.preFilter;

      while (s) {
        n && !(i = F.exec(s)) || (i && (s = s.slice(i[0].length) || s), u.push(o = [])), n = !1, (i = _.exec(s)) && (n = i.shift(), o.push({
          value: n,
          type: i[0].replace(B, " ")
        }), s = s.slice(n.length));

        for (a in r.filter) {
          !(i = V[a].exec(s)) || l[a] && !(i = l[a](i)) || (n = i.shift(), o.push({
            value: n,
            type: a,
            matches: i
          }), s = s.slice(n.length));
        }

        if (!n) break;
      }

      return t ? s.length : s ? oe.error(e) : k(e, u).slice(0);
    };

    function ve(e) {
      for (var t = 0, n = e.length, r = ""; t < n; t++) {
        r += e[t].value;
      }

      return r;
    }

    function me(e, t, n) {
      var r = t.dir,
          i = t.next,
          o = i || r,
          a = n && "parentNode" === o,
          s = C++;
      return t.first ? function (t, n, i) {
        while (t = t[r]) {
          if (1 === t.nodeType || a) return e(t, n, i);
        }

        return !1;
      } : function (t, n, u) {
        var l,
            c,
            f,
            p = [T, s];

        if (u) {
          while (t = t[r]) {
            if ((1 === t.nodeType || a) && e(t, n, u)) return !0;
          }
        } else while (t = t[r]) {
          if (1 === t.nodeType || a) if (f = t[b] || (t[b] = {}), c = f[t.uniqueID] || (f[t.uniqueID] = {}), i && i === t.nodeName.toLowerCase()) t = t[r] || t;else {
            if ((l = c[o]) && l[0] === T && l[1] === s) return p[2] = l[2];
            if (c[o] = p, p[2] = e(t, n, u)) return !0;
          }
        }

        return !1;
      };
    }

    function xe(e) {
      return e.length > 1 ? function (t, n, r) {
        var i = e.length;

        while (i--) {
          if (!e[i](t, n, r)) return !1;
        }

        return !0;
      } : e[0];
    }

    function be(e, t, n) {
      for (var r = 0, i = t.length; r < i; r++) {
        oe(e, t[r], n);
      }

      return n;
    }

    function we(e, t, n, r, i) {
      for (var o, a = [], s = 0, u = e.length, l = null != t; s < u; s++) {
        (o = e[s]) && (n && !n(o, r, i) || (a.push(o), l && t.push(s)));
      }

      return a;
    }

    function Te(e, t, n, r, i, o) {
      return r && !r[b] && (r = Te(r)), i && !i[b] && (i = Te(i, o)), se(function (o, a, s, u) {
        var l,
            c,
            f,
            p = [],
            d = [],
            h = a.length,
            g = o || be(t || "*", s.nodeType ? [s] : s, []),
            y = !e || !o && t ? g : we(g, p, e, s, u),
            v = n ? i || (o ? e : h || r) ? [] : a : y;

        if (n && n(y, v, s, u), r) {
          l = we(v, d), r(l, [], s, u), c = l.length;

          while (c--) {
            (f = l[c]) && (v[d[c]] = !(y[d[c]] = f));
          }
        }

        if (o) {
          if (i || e) {
            if (i) {
              l = [], c = v.length;

              while (c--) {
                (f = v[c]) && l.push(y[c] = f);
              }

              i(null, v = [], l, u);
            }

            c = v.length;

            while (c--) {
              (f = v[c]) && (l = i ? O(o, f) : p[c]) > -1 && (o[l] = !(a[l] = f));
            }
          }
        } else v = we(v === a ? v.splice(h, v.length) : v), i ? i(null, a, v, u) : L.apply(a, v);
      });
    }

    function Ce(e) {
      for (var t, n, i, o = e.length, a = r.relative[e[0].type], s = a || r.relative[" "], u = a ? 1 : 0, c = me(function (e) {
        return e === t;
      }, s, !0), f = me(function (e) {
        return O(t, e) > -1;
      }, s, !0), p = [function (e, n, r) {
        var i = !a && (r || n !== l) || ((t = n).nodeType ? c(e, n, r) : f(e, n, r));
        return t = null, i;
      }]; u < o; u++) {
        if (n = r.relative[e[u].type]) p = [me(xe(p), n)];else {
          if ((n = r.filter[e[u].type].apply(null, e[u].matches))[b]) {
            for (i = ++u; i < o; i++) {
              if (r.relative[e[i].type]) break;
            }

            return Te(u > 1 && xe(p), u > 1 && ve(e.slice(0, u - 1).concat({
              value: " " === e[u - 2].type ? "*" : ""
            })).replace(B, "$1"), n, u < i && Ce(e.slice(u, i)), i < o && Ce(e = e.slice(i)), i < o && ve(e));
          }

          p.push(n);
        }
      }

      return xe(p);
    }

    function Ee(e, t) {
      var n = t.length > 0,
          i = e.length > 0,
          o = function o(_o, a, s, u, c) {
        var f,
            h,
            y,
            v = 0,
            m = "0",
            x = _o && [],
            b = [],
            w = l,
            C = _o || i && r.find.TAG("*", c),
            E = T += null == w ? 1 : Math.random() || .1,
            k = C.length;

        for (c && (l = a === d || a || c); m !== k && null != (f = C[m]); m++) {
          if (i && f) {
            h = 0, a || f.ownerDocument === d || (p(f), s = !g);

            while (y = e[h++]) {
              if (y(f, a || d, s)) {
                u.push(f);
                break;
              }
            }

            c && (T = E);
          }

          n && ((f = !y && f) && v--, _o && x.push(f));
        }

        if (v += m, n && m !== v) {
          h = 0;

          while (y = t[h++]) {
            y(x, b, a, s);
          }

          if (_o) {
            if (v > 0) while (m--) {
              x[m] || b[m] || (b[m] = j.call(u));
            }
            b = we(b);
          }

          L.apply(u, b), c && !_o && b.length > 0 && v + t.length > 1 && oe.uniqueSort(u);
        }

        return c && (T = E, l = w), x;
      };

      return n ? se(o) : o;
    }

    return s = oe.compile = function (e, t) {
      var n,
          r = [],
          i = [],
          o = S[e + " "];

      if (!o) {
        t || (t = a(e)), n = t.length;

        while (n--) {
          (o = Ce(t[n]))[b] ? r.push(o) : i.push(o);
        }

        (o = S(e, Ee(i, r))).selector = e;
      }

      return o;
    }, u = oe.select = function (e, t, n, i) {
      var o,
          u,
          l,
          c,
          f,
          p = "function" == typeof e && e,
          d = !i && a(e = p.selector || e);

      if (n = n || [], 1 === d.length) {
        if ((u = d[0] = d[0].slice(0)).length > 2 && "ID" === (l = u[0]).type && 9 === t.nodeType && g && r.relative[u[1].type]) {
          if (!(t = (r.find.ID(l.matches[0].replace(Z, ee), t) || [])[0])) return n;
          p && (t = t.parentNode), e = e.slice(u.shift().value.length);
        }

        o = V.needsContext.test(e) ? 0 : u.length;

        while (o--) {
          if (l = u[o], r.relative[c = l.type]) break;

          if ((f = r.find[c]) && (i = f(l.matches[0].replace(Z, ee), K.test(u[0].type) && ge(t.parentNode) || t))) {
            if (u.splice(o, 1), !(e = i.length && ve(u))) return L.apply(n, i), n;
            break;
          }
        }
      }

      return (p || s(e, d))(i, t, !g, n, !t || K.test(e) && ge(t.parentNode) || t), n;
    }, n.sortStable = b.split("").sort(D).join("") === b, n.detectDuplicates = !!f, p(), n.sortDetached = ue(function (e) {
      return 1 & e.compareDocumentPosition(d.createElement("fieldset"));
    }), ue(function (e) {
      return e.innerHTML = "<a href='#'></a>", "#" === e.firstChild.getAttribute("href");
    }) || le("type|href|height|width", function (e, t, n) {
      if (!n) return e.getAttribute(t, "type" === t.toLowerCase() ? 1 : 2);
    }), n.attributes && ue(function (e) {
      return e.innerHTML = "<input/>", e.firstChild.setAttribute("value", ""), "" === e.firstChild.getAttribute("value");
    }) || le("value", function (e, t, n) {
      if (!n && "input" === e.nodeName.toLowerCase()) return e.defaultValue;
    }), ue(function (e) {
      return null == e.getAttribute("disabled");
    }) || le(P, function (e, t, n) {
      var r;
      if (!n) return !0 === e[t] ? t.toLowerCase() : (r = e.getAttributeNode(t)) && r.specified ? r.value : null;
    }), oe;
  }(e);

  w.find = E, w.expr = E.selectors, w.expr[":"] = w.expr.pseudos, w.uniqueSort = w.unique = E.uniqueSort, w.text = E.getText, w.isXMLDoc = E.isXML, w.contains = E.contains, w.escapeSelector = E.escape;

  var k = function k(e, t, n) {
    var r = [],
        i = void 0 !== n;

    while ((e = e[t]) && 9 !== e.nodeType) {
      if (1 === e.nodeType) {
        if (i && w(e).is(n)) break;
        r.push(e);
      }
    }

    return r;
  },
      S = function S(e, t) {
    for (var n = []; e; e = e.nextSibling) {
      1 === e.nodeType && e !== t && n.push(e);
    }

    return n;
  },
      D = w.expr.match.needsContext;

  function N(e, t) {
    return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase();
  }

  var A = /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;

  function j(e, t, n) {
    return g(t) ? w.grep(e, function (e, r) {
      return !!t.call(e, r, e) !== n;
    }) : t.nodeType ? w.grep(e, function (e) {
      return e === t !== n;
    }) : "string" != typeof t ? w.grep(e, function (e) {
      return u.call(t, e) > -1 !== n;
    }) : w.filter(t, e, n);
  }

  w.filter = function (e, t, n) {
    var r = t[0];
    return n && (e = ":not(" + e + ")"), 1 === t.length && 1 === r.nodeType ? w.find.matchesSelector(r, e) ? [r] : [] : w.find.matches(e, w.grep(t, function (e) {
      return 1 === e.nodeType;
    }));
  }, w.fn.extend({
    find: function find(e) {
      var t,
          n,
          r = this.length,
          i = this;
      if ("string" != typeof e) return this.pushStack(w(e).filter(function () {
        for (t = 0; t < r; t++) {
          if (w.contains(i[t], this)) return !0;
        }
      }));

      for (n = this.pushStack([]), t = 0; t < r; t++) {
        w.find(e, i[t], n);
      }

      return r > 1 ? w.uniqueSort(n) : n;
    },
    filter: function filter(e) {
      return this.pushStack(j(this, e || [], !1));
    },
    not: function not(e) {
      return this.pushStack(j(this, e || [], !0));
    },
    is: function is(e) {
      return !!j(this, "string" == typeof e && D.test(e) ? w(e) : e || [], !1).length;
    }
  });
  var q,
      L = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;
  (w.fn.init = function (e, t, n) {
    var i, o;
    if (!e) return this;

    if (n = n || q, "string" == typeof e) {
      if (!(i = "<" === e[0] && ">" === e[e.length - 1] && e.length >= 3 ? [null, e, null] : L.exec(e)) || !i[1] && t) return !t || t.jquery ? (t || n).find(e) : this.constructor(t).find(e);

      if (i[1]) {
        if (t = t instanceof w ? t[0] : t, w.merge(this, w.parseHTML(i[1], t && t.nodeType ? t.ownerDocument || t : r, !0)), A.test(i[1]) && w.isPlainObject(t)) for (i in t) {
          g(this[i]) ? this[i](t[i]) : this.attr(i, t[i]);
        }
        return this;
      }

      return (o = r.getElementById(i[2])) && (this[0] = o, this.length = 1), this;
    }

    return e.nodeType ? (this[0] = e, this.length = 1, this) : g(e) ? void 0 !== n.ready ? n.ready(e) : e(w) : w.makeArray(e, this);
  }).prototype = w.fn, q = w(r);
  var H = /^(?:parents|prev(?:Until|All))/,
      O = {
    children: !0,
    contents: !0,
    next: !0,
    prev: !0
  };
  w.fn.extend({
    has: function has(e) {
      var t = w(e, this),
          n = t.length;
      return this.filter(function () {
        for (var e = 0; e < n; e++) {
          if (w.contains(this, t[e])) return !0;
        }
      });
    },
    closest: function closest(e, t) {
      var n,
          r = 0,
          i = this.length,
          o = [],
          a = "string" != typeof e && w(e);
      if (!D.test(e)) for (; r < i; r++) {
        for (n = this[r]; n && n !== t; n = n.parentNode) {
          if (n.nodeType < 11 && (a ? a.index(n) > -1 : 1 === n.nodeType && w.find.matchesSelector(n, e))) {
            o.push(n);
            break;
          }
        }
      }
      return this.pushStack(o.length > 1 ? w.uniqueSort(o) : o);
    },
    index: function index(e) {
      return e ? "string" == typeof e ? u.call(w(e), this[0]) : u.call(this, e.jquery ? e[0] : e) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1;
    },
    add: function add(e, t) {
      return this.pushStack(w.uniqueSort(w.merge(this.get(), w(e, t))));
    },
    addBack: function addBack(e) {
      return this.add(null == e ? this.prevObject : this.prevObject.filter(e));
    }
  });

  function P(e, t) {
    while ((e = e[t]) && 1 !== e.nodeType) {
      ;
    }

    return e;
  }

  w.each({
    parent: function parent(e) {
      var t = e.parentNode;
      return t && 11 !== t.nodeType ? t : null;
    },
    parents: function parents(e) {
      return k(e, "parentNode");
    },
    parentsUntil: function parentsUntil(e, t, n) {
      return k(e, "parentNode", n);
    },
    next: function next(e) {
      return P(e, "nextSibling");
    },
    prev: function prev(e) {
      return P(e, "previousSibling");
    },
    nextAll: function nextAll(e) {
      return k(e, "nextSibling");
    },
    prevAll: function prevAll(e) {
      return k(e, "previousSibling");
    },
    nextUntil: function nextUntil(e, t, n) {
      return k(e, "nextSibling", n);
    },
    prevUntil: function prevUntil(e, t, n) {
      return k(e, "previousSibling", n);
    },
    siblings: function siblings(e) {
      return S((e.parentNode || {}).firstChild, e);
    },
    children: function children(e) {
      return S(e.firstChild);
    },
    contents: function contents(e) {
      return N(e, "iframe") ? e.contentDocument : (N(e, "template") && (e = e.content || e), w.merge([], e.childNodes));
    }
  }, function (e, t) {
    w.fn[e] = function (n, r) {
      var i = w.map(this, t, n);
      return "Until" !== e.slice(-5) && (r = n), r && "string" == typeof r && (i = w.filter(r, i)), this.length > 1 && (O[e] || w.uniqueSort(i), H.test(e) && i.reverse()), this.pushStack(i);
    };
  });
  var M = /[^\x20\t\r\n\f]+/g;

  function R(e) {
    var t = {};
    return w.each(e.match(M) || [], function (e, n) {
      t[n] = !0;
    }), t;
  }

  w.Callbacks = function (e) {
    e = "string" == typeof e ? R(e) : w.extend({}, e);

    var t,
        n,
        r,
        i,
        o = [],
        a = [],
        s = -1,
        u = function u() {
      for (i = i || e.once, r = t = !0; a.length; s = -1) {
        n = a.shift();

        while (++s < o.length) {
          !1 === o[s].apply(n[0], n[1]) && e.stopOnFalse && (s = o.length, n = !1);
        }
      }

      e.memory || (n = !1), t = !1, i && (o = n ? [] : "");
    },
        l = {
      add: function add() {
        return o && (n && !t && (s = o.length - 1, a.push(n)), function t(n) {
          w.each(n, function (n, r) {
            g(r) ? e.unique && l.has(r) || o.push(r) : r && r.length && "string" !== x(r) && t(r);
          });
        }(arguments), n && !t && u()), this;
      },
      remove: function remove() {
        return w.each(arguments, function (e, t) {
          var n;

          while ((n = w.inArray(t, o, n)) > -1) {
            o.splice(n, 1), n <= s && s--;
          }
        }), this;
      },
      has: function has(e) {
        return e ? w.inArray(e, o) > -1 : o.length > 0;
      },
      empty: function empty() {
        return o && (o = []), this;
      },
      disable: function disable() {
        return i = a = [], o = n = "", this;
      },
      disabled: function disabled() {
        return !o;
      },
      lock: function lock() {
        return i = a = [], n || t || (o = n = ""), this;
      },
      locked: function locked() {
        return !!i;
      },
      fireWith: function fireWith(e, n) {
        return i || (n = [e, (n = n || []).slice ? n.slice() : n], a.push(n), t || u()), this;
      },
      fire: function fire() {
        return l.fireWith(this, arguments), this;
      },
      fired: function fired() {
        return !!r;
      }
    };

    return l;
  };

  function I(e) {
    return e;
  }

  function W(e) {
    throw e;
  }

  function $(e, t, n, r) {
    var i;

    try {
      e && g(i = e.promise) ? i.call(e).done(t).fail(n) : e && g(i = e.then) ? i.call(e, t, n) : t.apply(void 0, [e].slice(r));
    } catch (e) {
      n.apply(void 0, [e]);
    }
  }

  w.extend({
    Deferred: function Deferred(t) {
      var n = [["notify", "progress", w.Callbacks("memory"), w.Callbacks("memory"), 2], ["resolve", "done", w.Callbacks("once memory"), w.Callbacks("once memory"), 0, "resolved"], ["reject", "fail", w.Callbacks("once memory"), w.Callbacks("once memory"), 1, "rejected"]],
          r = "pending",
          i = {
        state: function state() {
          return r;
        },
        always: function always() {
          return o.done(arguments).fail(arguments), this;
        },
        "catch": function _catch(e) {
          return i.then(null, e);
        },
        pipe: function pipe() {
          var e = arguments;
          return w.Deferred(function (t) {
            w.each(n, function (n, r) {
              var i = g(e[r[4]]) && e[r[4]];
              o[r[1]](function () {
                var e = i && i.apply(this, arguments);
                e && g(e.promise) ? e.promise().progress(t.notify).done(t.resolve).fail(t.reject) : t[r[0] + "With"](this, i ? [e] : arguments);
              });
            }), e = null;
          }).promise();
        },
        then: function then(t, r, i) {
          var o = 0;

          function a(t, n, r, i) {
            return function () {
              var s = this,
                  u = arguments,
                  l = function l() {
                var e, l;

                if (!(t < o)) {
                  if ((e = r.apply(s, u)) === n.promise()) throw new TypeError("Thenable self-resolution");
                  l = e && ("object" == _typeof(e) || "function" == typeof e) && e.then, g(l) ? i ? l.call(e, a(o, n, I, i), a(o, n, W, i)) : (o++, l.call(e, a(o, n, I, i), a(o, n, W, i), a(o, n, I, n.notifyWith))) : (r !== I && (s = void 0, u = [e]), (i || n.resolveWith)(s, u));
                }
              },
                  c = i ? l : function () {
                try {
                  l();
                } catch (e) {
                  w.Deferred.exceptionHook && w.Deferred.exceptionHook(e, c.stackTrace), t + 1 >= o && (r !== W && (s = void 0, u = [e]), n.rejectWith(s, u));
                }
              };

              t ? c() : (w.Deferred.getStackHook && (c.stackTrace = w.Deferred.getStackHook()), e.setTimeout(c));
            };
          }

          return w.Deferred(function (e) {
            n[0][3].add(a(0, e, g(i) ? i : I, e.notifyWith)), n[1][3].add(a(0, e, g(t) ? t : I)), n[2][3].add(a(0, e, g(r) ? r : W));
          }).promise();
        },
        promise: function promise(e) {
          return null != e ? w.extend(e, i) : i;
        }
      },
          o = {};
      return w.each(n, function (e, t) {
        var a = t[2],
            s = t[5];
        i[t[1]] = a.add, s && a.add(function () {
          r = s;
        }, n[3 - e][2].disable, n[3 - e][3].disable, n[0][2].lock, n[0][3].lock), a.add(t[3].fire), o[t[0]] = function () {
          return o[t[0] + "With"](this === o ? void 0 : this, arguments), this;
        }, o[t[0] + "With"] = a.fireWith;
      }), i.promise(o), t && t.call(o, o), o;
    },
    when: function when(e) {
      var t = arguments.length,
          n = t,
          r = Array(n),
          i = o.call(arguments),
          a = w.Deferred(),
          s = function s(e) {
        return function (n) {
          r[e] = this, i[e] = arguments.length > 1 ? o.call(arguments) : n, --t || a.resolveWith(r, i);
        };
      };

      if (t <= 1 && ($(e, a.done(s(n)).resolve, a.reject, !t), "pending" === a.state() || g(i[n] && i[n].then))) return a.then();

      while (n--) {
        $(i[n], s(n), a.reject);
      }

      return a.promise();
    }
  });
  var B = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;
  w.Deferred.exceptionHook = function (t, n) {
    e.console && e.console.warn && t && B.test(t.name) && e.console.warn("jQuery.Deferred exception: " + t.message, t.stack, n);
  }, w.readyException = function (t) {
    e.setTimeout(function () {
      throw t;
    });
  };
  var F = w.Deferred();
  w.fn.ready = function (e) {
    return F.then(e)["catch"](function (e) {
      w.readyException(e);
    }), this;
  }, w.extend({
    isReady: !1,
    readyWait: 1,
    ready: function ready(e) {
      (!0 === e ? --w.readyWait : w.isReady) || (w.isReady = !0, !0 !== e && --w.readyWait > 0 || F.resolveWith(r, [w]));
    }
  }), w.ready.then = F.then;

  function _() {
    r.removeEventListener("DOMContentLoaded", _), e.removeEventListener("load", _), w.ready();
  }

  "complete" === r.readyState || "loading" !== r.readyState && !r.documentElement.doScroll ? e.setTimeout(w.ready) : (r.addEventListener("DOMContentLoaded", _), e.addEventListener("load", _));

  var z = function z(e, t, n, r, i, o, a) {
    var s = 0,
        u = e.length,
        l = null == n;

    if ("object" === x(n)) {
      i = !0;

      for (s in n) {
        z(e, t, s, n[s], !0, o, a);
      }
    } else if (void 0 !== r && (i = !0, g(r) || (a = !0), l && (a ? (t.call(e, r), t = null) : (l = t, t = function t(e, _t2, n) {
      return l.call(w(e), n);
    })), t)) for (; s < u; s++) {
      t(e[s], n, a ? r : r.call(e[s], s, t(e[s], n)));
    }

    return i ? e : l ? t.call(e) : u ? t(e[0], n) : o;
  },
      X = /^-ms-/,
      U = /-([a-z])/g;

  function V(e, t) {
    return t.toUpperCase();
  }

  function G(e) {
    return e.replace(X, "ms-").replace(U, V);
  }

  var Y = function Y(e) {
    return 1 === e.nodeType || 9 === e.nodeType || !+e.nodeType;
  };

  function Q() {
    this.expando = w.expando + Q.uid++;
  }

  Q.uid = 1, Q.prototype = {
    cache: function cache(e) {
      var t = e[this.expando];
      return t || (t = {}, Y(e) && (e.nodeType ? e[this.expando] = t : Object.defineProperty(e, this.expando, {
        value: t,
        configurable: !0
      }))), t;
    },
    set: function set(e, t, n) {
      var r,
          i = this.cache(e);
      if ("string" == typeof t) i[G(t)] = n;else for (r in t) {
        i[G(r)] = t[r];
      }
      return i;
    },
    get: function get(e, t) {
      return void 0 === t ? this.cache(e) : e[this.expando] && e[this.expando][G(t)];
    },
    access: function access(e, t, n) {
      return void 0 === t || t && "string" == typeof t && void 0 === n ? this.get(e, t) : (this.set(e, t, n), void 0 !== n ? n : t);
    },
    remove: function remove(e, t) {
      var n,
          r = e[this.expando];

      if (void 0 !== r) {
        if (void 0 !== t) {
          n = (t = Array.isArray(t) ? t.map(G) : (t = G(t)) in r ? [t] : t.match(M) || []).length;

          while (n--) {
            delete r[t[n]];
          }
        }

        (void 0 === t || w.isEmptyObject(r)) && (e.nodeType ? e[this.expando] = void 0 : delete e[this.expando]);
      }
    },
    hasData: function hasData(e) {
      var t = e[this.expando];
      return void 0 !== t && !w.isEmptyObject(t);
    }
  };
  var J = new Q(),
      K = new Q(),
      Z = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
      ee = /[A-Z]/g;

  function te(e) {
    return "true" === e || "false" !== e && ("null" === e ? null : e === +e + "" ? +e : Z.test(e) ? JSON.parse(e) : e);
  }

  function ne(e, t, n) {
    var r;
    if (void 0 === n && 1 === e.nodeType) if (r = "data-" + t.replace(ee, "-$&").toLowerCase(), "string" == typeof (n = e.getAttribute(r))) {
      try {
        n = te(n);
      } catch (e) {}

      K.set(e, t, n);
    } else n = void 0;
    return n;
  }

  w.extend({
    hasData: function hasData(e) {
      return K.hasData(e) || J.hasData(e);
    },
    data: function data(e, t, n) {
      return K.access(e, t, n);
    },
    removeData: function removeData(e, t) {
      K.remove(e, t);
    },
    _data: function _data(e, t, n) {
      return J.access(e, t, n);
    },
    _removeData: function _removeData(e, t) {
      J.remove(e, t);
    }
  }), w.fn.extend({
    data: function data(e, t) {
      var n,
          r,
          i,
          o = this[0],
          a = o && o.attributes;

      if (void 0 === e) {
        if (this.length && (i = K.get(o), 1 === o.nodeType && !J.get(o, "hasDataAttrs"))) {
          n = a.length;

          while (n--) {
            a[n] && 0 === (r = a[n].name).indexOf("data-") && (r = G(r.slice(5)), ne(o, r, i[r]));
          }

          J.set(o, "hasDataAttrs", !0);
        }

        return i;
      }

      return "object" == _typeof(e) ? this.each(function () {
        K.set(this, e);
      }) : z(this, function (t) {
        var n;

        if (o && void 0 === t) {
          if (void 0 !== (n = K.get(o, e))) return n;
          if (void 0 !== (n = ne(o, e))) return n;
        } else this.each(function () {
          K.set(this, e, t);
        });
      }, null, t, arguments.length > 1, null, !0);
    },
    removeData: function removeData(e) {
      return this.each(function () {
        K.remove(this, e);
      });
    }
  }), w.extend({
    queue: function queue(e, t, n) {
      var r;
      if (e) return t = (t || "fx") + "queue", r = J.get(e, t), n && (!r || Array.isArray(n) ? r = J.access(e, t, w.makeArray(n)) : r.push(n)), r || [];
    },
    dequeue: function dequeue(e, t) {
      t = t || "fx";

      var n = w.queue(e, t),
          r = n.length,
          i = n.shift(),
          o = w._queueHooks(e, t),
          a = function a() {
        w.dequeue(e, t);
      };

      "inprogress" === i && (i = n.shift(), r--), i && ("fx" === t && n.unshift("inprogress"), delete o.stop, i.call(e, a, o)), !r && o && o.empty.fire();
    },
    _queueHooks: function _queueHooks(e, t) {
      var n = t + "queueHooks";
      return J.get(e, n) || J.access(e, n, {
        empty: w.Callbacks("once memory").add(function () {
          J.remove(e, [t + "queue", n]);
        })
      });
    }
  }), w.fn.extend({
    queue: function queue(e, t) {
      var n = 2;
      return "string" != typeof e && (t = e, e = "fx", n--), arguments.length < n ? w.queue(this[0], e) : void 0 === t ? this : this.each(function () {
        var n = w.queue(this, e, t);
        w._queueHooks(this, e), "fx" === e && "inprogress" !== n[0] && w.dequeue(this, e);
      });
    },
    dequeue: function dequeue(e) {
      return this.each(function () {
        w.dequeue(this, e);
      });
    },
    clearQueue: function clearQueue(e) {
      return this.queue(e || "fx", []);
    },
    promise: function promise(e, t) {
      var n,
          r = 1,
          i = w.Deferred(),
          o = this,
          a = this.length,
          s = function s() {
        --r || i.resolveWith(o, [o]);
      };

      "string" != typeof e && (t = e, e = void 0), e = e || "fx";

      while (a--) {
        (n = J.get(o[a], e + "queueHooks")) && n.empty && (r++, n.empty.add(s));
      }

      return s(), i.promise(t);
    }
  });

  var re = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
      ie = new RegExp("^(?:([+-])=|)(" + re + ")([a-z%]*)$", "i"),
      oe = ["Top", "Right", "Bottom", "Left"],
      ae = function ae(e, t) {
    return "none" === (e = t || e).style.display || "" === e.style.display && w.contains(e.ownerDocument, e) && "none" === w.css(e, "display");
  },
      se = function se(e, t, n, r) {
    var i,
        o,
        a = {};

    for (o in t) {
      a[o] = e.style[o], e.style[o] = t[o];
    }

    i = n.apply(e, r || []);

    for (o in t) {
      e.style[o] = a[o];
    }

    return i;
  };

  function ue(e, t, n, r) {
    var i,
        o,
        a = 20,
        s = r ? function () {
      return r.cur();
    } : function () {
      return w.css(e, t, "");
    },
        u = s(),
        l = n && n[3] || (w.cssNumber[t] ? "" : "px"),
        c = (w.cssNumber[t] || "px" !== l && +u) && ie.exec(w.css(e, t));

    if (c && c[3] !== l) {
      u /= 2, l = l || c[3], c = +u || 1;

      while (a--) {
        w.style(e, t, c + l), (1 - o) * (1 - (o = s() / u || .5)) <= 0 && (a = 0), c /= o;
      }

      c *= 2, w.style(e, t, c + l), n = n || [];
    }

    return n && (c = +c || +u || 0, i = n[1] ? c + (n[1] + 1) * n[2] : +n[2], r && (r.unit = l, r.start = c, r.end = i)), i;
  }

  var le = {};

  function ce(e) {
    var t,
        n = e.ownerDocument,
        r = e.nodeName,
        i = le[r];
    return i || (t = n.body.appendChild(n.createElement(r)), i = w.css(t, "display"), t.parentNode.removeChild(t), "none" === i && (i = "block"), le[r] = i, i);
  }

  function fe(e, t) {
    for (var n, r, i = [], o = 0, a = e.length; o < a; o++) {
      (r = e[o]).style && (n = r.style.display, t ? ("none" === n && (i[o] = J.get(r, "display") || null, i[o] || (r.style.display = "")), "" === r.style.display && ae(r) && (i[o] = ce(r))) : "none" !== n && (i[o] = "none", J.set(r, "display", n)));
    }

    for (o = 0; o < a; o++) {
      null != i[o] && (e[o].style.display = i[o]);
    }

    return e;
  }

  w.fn.extend({
    show: function show() {
      return fe(this, !0);
    },
    hide: function hide() {
      return fe(this);
    },
    toggle: function toggle(e) {
      return "boolean" == typeof e ? e ? this.show() : this.hide() : this.each(function () {
        ae(this) ? w(this).show() : w(this).hide();
      });
    }
  });
  var pe = /^(?:checkbox|radio)$/i,
      de = /<([a-z][^\/\0>\x20\t\r\n\f]+)/i,
      he = /^$|^module$|\/(?:java|ecma)script/i,
      ge = {
    option: [1, "<select multiple='multiple'>", "</select>"],
    thead: [1, "<table>", "</table>"],
    col: [2, "<table><colgroup>", "</colgroup></table>"],
    tr: [2, "<table><tbody>", "</tbody></table>"],
    td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
    _default: [0, "", ""]
  };
  ge.optgroup = ge.option, ge.tbody = ge.tfoot = ge.colgroup = ge.caption = ge.thead, ge.th = ge.td;

  function ye(e, t) {
    var n;
    return n = "undefined" != typeof e.getElementsByTagName ? e.getElementsByTagName(t || "*") : "undefined" != typeof e.querySelectorAll ? e.querySelectorAll(t || "*") : [], void 0 === t || t && N(e, t) ? w.merge([e], n) : n;
  }

  function ve(e, t) {
    for (var n = 0, r = e.length; n < r; n++) {
      J.set(e[n], "globalEval", !t || J.get(t[n], "globalEval"));
    }
  }

  var me = /<|&#?\w+;/;

  function xe(e, t, n, r, i) {
    for (var o, a, s, u, l, c, f = t.createDocumentFragment(), p = [], d = 0, h = e.length; d < h; d++) {
      if ((o = e[d]) || 0 === o) if ("object" === x(o)) w.merge(p, o.nodeType ? [o] : o);else if (me.test(o)) {
        a = a || f.appendChild(t.createElement("div")), s = (de.exec(o) || ["", ""])[1].toLowerCase(), u = ge[s] || ge._default, a.innerHTML = u[1] + w.htmlPrefilter(o) + u[2], c = u[0];

        while (c--) {
          a = a.lastChild;
        }

        w.merge(p, a.childNodes), (a = f.firstChild).textContent = "";
      } else p.push(t.createTextNode(o));
    }

    f.textContent = "", d = 0;

    while (o = p[d++]) {
      if (r && w.inArray(o, r) > -1) i && i.push(o);else if (l = w.contains(o.ownerDocument, o), a = ye(f.appendChild(o), "script"), l && ve(a), n) {
        c = 0;

        while (o = a[c++]) {
          he.test(o.type || "") && n.push(o);
        }
      }
    }

    return f;
  }

  !function () {
    var e = r.createDocumentFragment().appendChild(r.createElement("div")),
        t = r.createElement("input");
    t.setAttribute("type", "radio"), t.setAttribute("checked", "checked"), t.setAttribute("name", "t"), e.appendChild(t), h.checkClone = e.cloneNode(!0).cloneNode(!0).lastChild.checked, e.innerHTML = "<textarea>x</textarea>", h.noCloneChecked = !!e.cloneNode(!0).lastChild.defaultValue;
  }();
  var be = r.documentElement,
      we = /^key/,
      Te = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
      Ce = /^([^.]*)(?:\.(.+)|)/;

  function Ee() {
    return !0;
  }

  function ke() {
    return !1;
  }

  function Se() {
    try {
      return r.activeElement;
    } catch (e) {}
  }

  function De(e, t, n, r, i, o) {
    var a, s;

    if ("object" == _typeof(t)) {
      "string" != typeof n && (r = r || n, n = void 0);

      for (s in t) {
        De(e, s, n, r, t[s], o);
      }

      return e;
    }

    if (null == r && null == i ? (i = n, r = n = void 0) : null == i && ("string" == typeof n ? (i = r, r = void 0) : (i = r, r = n, n = void 0)), !1 === i) i = ke;else if (!i) return e;
    return 1 === o && (a = i, (i = function i(e) {
      return w().off(e), a.apply(this, arguments);
    }).guid = a.guid || (a.guid = w.guid++)), e.each(function () {
      w.event.add(this, t, i, r, n);
    });
  }

  w.event = {
    global: {},
    add: function add(e, t, n, r, i) {
      var o,
          a,
          s,
          u,
          l,
          c,
          f,
          p,
          d,
          h,
          g,
          y = J.get(e);

      if (y) {
        n.handler && (n = (o = n).handler, i = o.selector), i && w.find.matchesSelector(be, i), n.guid || (n.guid = w.guid++), (u = y.events) || (u = y.events = {}), (a = y.handle) || (a = y.handle = function (t) {
          return "undefined" != typeof w && w.event.triggered !== t.type ? w.event.dispatch.apply(e, arguments) : void 0;
        }), l = (t = (t || "").match(M) || [""]).length;

        while (l--) {
          d = g = (s = Ce.exec(t[l]) || [])[1], h = (s[2] || "").split(".").sort(), d && (f = w.event.special[d] || {}, d = (i ? f.delegateType : f.bindType) || d, f = w.event.special[d] || {}, c = w.extend({
            type: d,
            origType: g,
            data: r,
            handler: n,
            guid: n.guid,
            selector: i,
            needsContext: i && w.expr.match.needsContext.test(i),
            namespace: h.join(".")
          }, o), (p = u[d]) || ((p = u[d] = []).delegateCount = 0, f.setup && !1 !== f.setup.call(e, r, h, a) || e.addEventListener && e.addEventListener(d, a)), f.add && (f.add.call(e, c), c.handler.guid || (c.handler.guid = n.guid)), i ? p.splice(p.delegateCount++, 0, c) : p.push(c), w.event.global[d] = !0);
        }
      }
    },
    remove: function remove(e, t, n, r, i) {
      var o,
          a,
          s,
          u,
          l,
          c,
          f,
          p,
          d,
          h,
          g,
          y = J.hasData(e) && J.get(e);

      if (y && (u = y.events)) {
        l = (t = (t || "").match(M) || [""]).length;

        while (l--) {
          if (s = Ce.exec(t[l]) || [], d = g = s[1], h = (s[2] || "").split(".").sort(), d) {
            f = w.event.special[d] || {}, p = u[d = (r ? f.delegateType : f.bindType) || d] || [], s = s[2] && new RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)"), a = o = p.length;

            while (o--) {
              c = p[o], !i && g !== c.origType || n && n.guid !== c.guid || s && !s.test(c.namespace) || r && r !== c.selector && ("**" !== r || !c.selector) || (p.splice(o, 1), c.selector && p.delegateCount--, f.remove && f.remove.call(e, c));
            }

            a && !p.length && (f.teardown && !1 !== f.teardown.call(e, h, y.handle) || w.removeEvent(e, d, y.handle), delete u[d]);
          } else for (d in u) {
            w.event.remove(e, d + t[l], n, r, !0);
          }
        }

        w.isEmptyObject(u) && J.remove(e, "handle events");
      }
    },
    dispatch: function dispatch(e) {
      var t = w.event.fix(e),
          n,
          r,
          i,
          o,
          a,
          s,
          u = new Array(arguments.length),
          l = (J.get(this, "events") || {})[t.type] || [],
          c = w.event.special[t.type] || {};

      for (u[0] = t, n = 1; n < arguments.length; n++) {
        u[n] = arguments[n];
      }

      if (t.delegateTarget = this, !c.preDispatch || !1 !== c.preDispatch.call(this, t)) {
        s = w.event.handlers.call(this, t, l), n = 0;

        while ((o = s[n++]) && !t.isPropagationStopped()) {
          t.currentTarget = o.elem, r = 0;

          while ((a = o.handlers[r++]) && !t.isImmediatePropagationStopped()) {
            t.rnamespace && !t.rnamespace.test(a.namespace) || (t.handleObj = a, t.data = a.data, void 0 !== (i = ((w.event.special[a.origType] || {}).handle || a.handler).apply(o.elem, u)) && !1 === (t.result = i) && (t.preventDefault(), t.stopPropagation()));
          }
        }

        return c.postDispatch && c.postDispatch.call(this, t), t.result;
      }
    },
    handlers: function handlers(e, t) {
      var n,
          r,
          i,
          o,
          a,
          s = [],
          u = t.delegateCount,
          l = e.target;
      if (u && l.nodeType && !("click" === e.type && e.button >= 1)) for (; l !== this; l = l.parentNode || this) {
        if (1 === l.nodeType && ("click" !== e.type || !0 !== l.disabled)) {
          for (o = [], a = {}, n = 0; n < u; n++) {
            void 0 === a[i = (r = t[n]).selector + " "] && (a[i] = r.needsContext ? w(i, this).index(l) > -1 : w.find(i, this, null, [l]).length), a[i] && o.push(r);
          }

          o.length && s.push({
            elem: l,
            handlers: o
          });
        }
      }
      return l = this, u < t.length && s.push({
        elem: l,
        handlers: t.slice(u)
      }), s;
    },
    addProp: function addProp(e, t) {
      Object.defineProperty(w.Event.prototype, e, {
        enumerable: !0,
        configurable: !0,
        get: g(t) ? function () {
          if (this.originalEvent) return t(this.originalEvent);
        } : function () {
          if (this.originalEvent) return this.originalEvent[e];
        },
        set: function set(t) {
          Object.defineProperty(this, e, {
            enumerable: !0,
            configurable: !0,
            writable: !0,
            value: t
          });
        }
      });
    },
    fix: function fix(e) {
      return e[w.expando] ? e : new w.Event(e);
    },
    special: {
      load: {
        noBubble: !0
      },
      focus: {
        trigger: function trigger() {
          if (this !== Se() && this.focus) return this.focus(), !1;
        },
        delegateType: "focusin"
      },
      blur: {
        trigger: function trigger() {
          if (this === Se() && this.blur) return this.blur(), !1;
        },
        delegateType: "focusout"
      },
      click: {
        trigger: function trigger() {
          if ("checkbox" === this.type && this.click && N(this, "input")) return this.click(), !1;
        },
        _default: function _default(e) {
          return N(e.target, "a");
        }
      },
      beforeunload: {
        postDispatch: function postDispatch(e) {
          void 0 !== e.result && e.originalEvent && (e.originalEvent.returnValue = e.result);
        }
      }
    }
  }, w.removeEvent = function (e, t, n) {
    e.removeEventListener && e.removeEventListener(t, n);
  }, w.Event = function (e, t) {
    if (!(this instanceof w.Event)) return new w.Event(e, t);
    e && e.type ? (this.originalEvent = e, this.type = e.type, this.isDefaultPrevented = e.defaultPrevented || void 0 === e.defaultPrevented && !1 === e.returnValue ? Ee : ke, this.target = e.target && 3 === e.target.nodeType ? e.target.parentNode : e.target, this.currentTarget = e.currentTarget, this.relatedTarget = e.relatedTarget) : this.type = e, t && w.extend(this, t), this.timeStamp = e && e.timeStamp || Date.now(), this[w.expando] = !0;
  }, w.Event.prototype = {
    constructor: w.Event,
    isDefaultPrevented: ke,
    isPropagationStopped: ke,
    isImmediatePropagationStopped: ke,
    isSimulated: !1,
    preventDefault: function preventDefault() {
      var e = this.originalEvent;
      this.isDefaultPrevented = Ee, e && !this.isSimulated && e.preventDefault();
    },
    stopPropagation: function stopPropagation() {
      var e = this.originalEvent;
      this.isPropagationStopped = Ee, e && !this.isSimulated && e.stopPropagation();
    },
    stopImmediatePropagation: function stopImmediatePropagation() {
      var e = this.originalEvent;
      this.isImmediatePropagationStopped = Ee, e && !this.isSimulated && e.stopImmediatePropagation(), this.stopPropagation();
    }
  }, w.each({
    altKey: !0,
    bubbles: !0,
    cancelable: !0,
    changedTouches: !0,
    ctrlKey: !0,
    detail: !0,
    eventPhase: !0,
    metaKey: !0,
    pageX: !0,
    pageY: !0,
    shiftKey: !0,
    view: !0,
    "char": !0,
    charCode: !0,
    key: !0,
    keyCode: !0,
    button: !0,
    buttons: !0,
    clientX: !0,
    clientY: !0,
    offsetX: !0,
    offsetY: !0,
    pointerId: !0,
    pointerType: !0,
    screenX: !0,
    screenY: !0,
    targetTouches: !0,
    toElement: !0,
    touches: !0,
    which: function which(e) {
      var t = e.button;
      return null == e.which && we.test(e.type) ? null != e.charCode ? e.charCode : e.keyCode : !e.which && void 0 !== t && Te.test(e.type) ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : e.which;
    }
  }, w.event.addProp), w.each({
    mouseenter: "mouseover",
    mouseleave: "mouseout",
    pointerenter: "pointerover",
    pointerleave: "pointerout"
  }, function (e, t) {
    w.event.special[e] = {
      delegateType: t,
      bindType: t,
      handle: function handle(e) {
        var n,
            r = this,
            i = e.relatedTarget,
            o = e.handleObj;
        return i && (i === r || w.contains(r, i)) || (e.type = o.origType, n = o.handler.apply(this, arguments), e.type = t), n;
      }
    };
  }), w.fn.extend({
    on: function on(e, t, n, r) {
      return De(this, e, t, n, r);
    },
    one: function one(e, t, n, r) {
      return De(this, e, t, n, r, 1);
    },
    off: function off(e, t, n) {
      var r, i;
      if (e && e.preventDefault && e.handleObj) return r = e.handleObj, w(e.delegateTarget).off(r.namespace ? r.origType + "." + r.namespace : r.origType, r.selector, r.handler), this;

      if ("object" == _typeof(e)) {
        for (i in e) {
          this.off(i, t, e[i]);
        }

        return this;
      }

      return !1 !== t && "function" != typeof t || (n = t, t = void 0), !1 === n && (n = ke), this.each(function () {
        w.event.remove(this, e, n, t);
      });
    }
  });
  var Ne = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,
      Ae = /<script|<style|<link/i,
      je = /checked\s*(?:[^=]|=\s*.checked.)/i,
      qe = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

  function Le(e, t) {
    return N(e, "table") && N(11 !== t.nodeType ? t : t.firstChild, "tr") ? w(e).children("tbody")[0] || e : e;
  }

  function He(e) {
    return e.type = (null !== e.getAttribute("type")) + "/" + e.type, e;
  }

  function Oe(e) {
    return "true/" === (e.type || "").slice(0, 5) ? e.type = e.type.slice(5) : e.removeAttribute("type"), e;
  }

  function Pe(e, t) {
    var n, r, i, o, a, s, u, l;

    if (1 === t.nodeType) {
      if (J.hasData(e) && (o = J.access(e), a = J.set(t, o), l = o.events)) {
        delete a.handle, a.events = {};

        for (i in l) {
          for (n = 0, r = l[i].length; n < r; n++) {
            w.event.add(t, i, l[i][n]);
          }
        }
      }

      K.hasData(e) && (s = K.access(e), u = w.extend({}, s), K.set(t, u));
    }
  }

  function Me(e, t) {
    var n = t.nodeName.toLowerCase();
    "input" === n && pe.test(e.type) ? t.checked = e.checked : "input" !== n && "textarea" !== n || (t.defaultValue = e.defaultValue);
  }

  function Re(e, t, n, r) {
    t = a.apply([], t);
    var i,
        o,
        s,
        u,
        l,
        c,
        f = 0,
        p = e.length,
        d = p - 1,
        y = t[0],
        v = g(y);
    if (v || p > 1 && "string" == typeof y && !h.checkClone && je.test(y)) return e.each(function (i) {
      var o = e.eq(i);
      v && (t[0] = y.call(this, i, o.html())), Re(o, t, n, r);
    });

    if (p && (i = xe(t, e[0].ownerDocument, !1, e, r), o = i.firstChild, 1 === i.childNodes.length && (i = o), o || r)) {
      for (u = (s = w.map(ye(i, "script"), He)).length; f < p; f++) {
        l = i, f !== d && (l = w.clone(l, !0, !0), u && w.merge(s, ye(l, "script"))), n.call(e[f], l, f);
      }

      if (u) for (c = s[s.length - 1].ownerDocument, w.map(s, Oe), f = 0; f < u; f++) {
        l = s[f], he.test(l.type || "") && !J.access(l, "globalEval") && w.contains(c, l) && (l.src && "module" !== (l.type || "").toLowerCase() ? w._evalUrl && w._evalUrl(l.src) : m(l.textContent.replace(qe, ""), c, l));
      }
    }

    return e;
  }

  function Ie(e, t, n) {
    for (var r, i = t ? w.filter(t, e) : e, o = 0; null != (r = i[o]); o++) {
      n || 1 !== r.nodeType || w.cleanData(ye(r)), r.parentNode && (n && w.contains(r.ownerDocument, r) && ve(ye(r, "script")), r.parentNode.removeChild(r));
    }

    return e;
  }

  w.extend({
    htmlPrefilter: function htmlPrefilter(e) {
      return e.replace(Ne, "<$1></$2>");
    },
    clone: function clone(e, t, n) {
      var r,
          i,
          o,
          a,
          s = e.cloneNode(!0),
          u = w.contains(e.ownerDocument, e);
      if (!(h.noCloneChecked || 1 !== e.nodeType && 11 !== e.nodeType || w.isXMLDoc(e))) for (a = ye(s), r = 0, i = (o = ye(e)).length; r < i; r++) {
        Me(o[r], a[r]);
      }
      if (t) if (n) for (o = o || ye(e), a = a || ye(s), r = 0, i = o.length; r < i; r++) {
        Pe(o[r], a[r]);
      } else Pe(e, s);
      return (a = ye(s, "script")).length > 0 && ve(a, !u && ye(e, "script")), s;
    },
    cleanData: function cleanData(e) {
      for (var t, n, r, i = w.event.special, o = 0; void 0 !== (n = e[o]); o++) {
        if (Y(n)) {
          if (t = n[J.expando]) {
            if (t.events) for (r in t.events) {
              i[r] ? w.event.remove(n, r) : w.removeEvent(n, r, t.handle);
            }
            n[J.expando] = void 0;
          }

          n[K.expando] && (n[K.expando] = void 0);
        }
      }
    }
  }), w.fn.extend({
    detach: function detach(e) {
      return Ie(this, e, !0);
    },
    remove: function remove(e) {
      return Ie(this, e);
    },
    text: function text(e) {
      return z(this, function (e) {
        return void 0 === e ? w.text(this) : this.empty().each(function () {
          1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || (this.textContent = e);
        });
      }, null, e, arguments.length);
    },
    append: function append() {
      return Re(this, arguments, function (e) {
        1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || Le(this, e).appendChild(e);
      });
    },
    prepend: function prepend() {
      return Re(this, arguments, function (e) {
        if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
          var t = Le(this, e);
          t.insertBefore(e, t.firstChild);
        }
      });
    },
    before: function before() {
      return Re(this, arguments, function (e) {
        this.parentNode && this.parentNode.insertBefore(e, this);
      });
    },
    after: function after() {
      return Re(this, arguments, function (e) {
        this.parentNode && this.parentNode.insertBefore(e, this.nextSibling);
      });
    },
    empty: function empty() {
      for (var e, t = 0; null != (e = this[t]); t++) {
        1 === e.nodeType && (w.cleanData(ye(e, !1)), e.textContent = "");
      }

      return this;
    },
    clone: function clone(e, t) {
      return e = null != e && e, t = null == t ? e : t, this.map(function () {
        return w.clone(this, e, t);
      });
    },
    html: function html(e) {
      return z(this, function (e) {
        var t = this[0] || {},
            n = 0,
            r = this.length;
        if (void 0 === e && 1 === t.nodeType) return t.innerHTML;

        if ("string" == typeof e && !Ae.test(e) && !ge[(de.exec(e) || ["", ""])[1].toLowerCase()]) {
          e = w.htmlPrefilter(e);

          try {
            for (; n < r; n++) {
              1 === (t = this[n] || {}).nodeType && (w.cleanData(ye(t, !1)), t.innerHTML = e);
            }

            t = 0;
          } catch (e) {}
        }

        t && this.empty().append(e);
      }, null, e, arguments.length);
    },
    replaceWith: function replaceWith() {
      var e = [];
      return Re(this, arguments, function (t) {
        var n = this.parentNode;
        w.inArray(this, e) < 0 && (w.cleanData(ye(this)), n && n.replaceChild(t, this));
      }, e);
    }
  }), w.each({
    appendTo: "append",
    prependTo: "prepend",
    insertBefore: "before",
    insertAfter: "after",
    replaceAll: "replaceWith"
  }, function (e, t) {
    w.fn[e] = function (e) {
      for (var n, r = [], i = w(e), o = i.length - 1, a = 0; a <= o; a++) {
        n = a === o ? this : this.clone(!0), w(i[a])[t](n), s.apply(r, n.get());
      }

      return this.pushStack(r);
    };
  });

  var We = new RegExp("^(" + re + ")(?!px)[a-z%]+$", "i"),
      $e = function $e(t) {
    var n = t.ownerDocument.defaultView;
    return n && n.opener || (n = e), n.getComputedStyle(t);
  },
      Be = new RegExp(oe.join("|"), "i");

  !function () {
    function t() {
      if (c) {
        l.style.cssText = "position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0", c.style.cssText = "position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%", be.appendChild(l).appendChild(c);
        var t = e.getComputedStyle(c);
        i = "1%" !== t.top, u = 12 === n(t.marginLeft), c.style.right = "60%", s = 36 === n(t.right), o = 36 === n(t.width), c.style.position = "absolute", a = 36 === c.offsetWidth || "absolute", be.removeChild(l), c = null;
      }
    }

    function n(e) {
      return Math.round(parseFloat(e));
    }

    var i,
        o,
        a,
        s,
        u,
        l = r.createElement("div"),
        c = r.createElement("div");
    c.style && (c.style.backgroundClip = "content-box", c.cloneNode(!0).style.backgroundClip = "", h.clearCloneStyle = "content-box" === c.style.backgroundClip, w.extend(h, {
      boxSizingReliable: function boxSizingReliable() {
        return t(), o;
      },
      pixelBoxStyles: function pixelBoxStyles() {
        return t(), s;
      },
      pixelPosition: function pixelPosition() {
        return t(), i;
      },
      reliableMarginLeft: function reliableMarginLeft() {
        return t(), u;
      },
      scrollboxSize: function scrollboxSize() {
        return t(), a;
      }
    }));
  }();

  function Fe(e, t, n) {
    var r,
        i,
        o,
        a,
        s = e.style;
    return (n = n || $e(e)) && ("" !== (a = n.getPropertyValue(t) || n[t]) || w.contains(e.ownerDocument, e) || (a = w.style(e, t)), !h.pixelBoxStyles() && We.test(a) && Be.test(t) && (r = s.width, i = s.minWidth, o = s.maxWidth, s.minWidth = s.maxWidth = s.width = a, a = n.width, s.width = r, s.minWidth = i, s.maxWidth = o)), void 0 !== a ? a + "" : a;
  }

  function _e(e, t) {
    return {
      get: function get() {
        if (!e()) return (this.get = t).apply(this, arguments);
        delete this.get;
      }
    };
  }

  var ze = /^(none|table(?!-c[ea]).+)/,
      Xe = /^--/,
      Ue = {
    position: "absolute",
    visibility: "hidden",
    display: "block"
  },
      Ve = {
    letterSpacing: "0",
    fontWeight: "400"
  },
      Ge = ["Webkit", "Moz", "ms"],
      Ye = r.createElement("div").style;

  function Qe(e) {
    if (e in Ye) return e;
    var t = e[0].toUpperCase() + e.slice(1),
        n = Ge.length;

    while (n--) {
      if ((e = Ge[n] + t) in Ye) return e;
    }
  }

  function Je(e) {
    var t = w.cssProps[e];
    return t || (t = w.cssProps[e] = Qe(e) || e), t;
  }

  function Ke(e, t, n) {
    var r = ie.exec(t);
    return r ? Math.max(0, r[2] - (n || 0)) + (r[3] || "px") : t;
  }

  function Ze(e, t, n, r, i, o) {
    var a = "width" === t ? 1 : 0,
        s = 0,
        u = 0;
    if (n === (r ? "border" : "content")) return 0;

    for (; a < 4; a += 2) {
      "margin" === n && (u += w.css(e, n + oe[a], !0, i)), r ? ("content" === n && (u -= w.css(e, "padding" + oe[a], !0, i)), "margin" !== n && (u -= w.css(e, "border" + oe[a] + "Width", !0, i))) : (u += w.css(e, "padding" + oe[a], !0, i), "padding" !== n ? u += w.css(e, "border" + oe[a] + "Width", !0, i) : s += w.css(e, "border" + oe[a] + "Width", !0, i));
    }

    return !r && o >= 0 && (u += Math.max(0, Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - o - u - s - .5))), u;
  }

  function et(e, t, n) {
    var r = $e(e),
        i = Fe(e, t, r),
        o = "border-box" === w.css(e, "boxSizing", !1, r),
        a = o;

    if (We.test(i)) {
      if (!n) return i;
      i = "auto";
    }

    return a = a && (h.boxSizingReliable() || i === e.style[t]), ("auto" === i || !parseFloat(i) && "inline" === w.css(e, "display", !1, r)) && (i = e["offset" + t[0].toUpperCase() + t.slice(1)], a = !0), (i = parseFloat(i) || 0) + Ze(e, t, n || (o ? "border" : "content"), a, r, i) + "px";
  }

  w.extend({
    cssHooks: {
      opacity: {
        get: function get(e, t) {
          if (t) {
            var n = Fe(e, "opacity");
            return "" === n ? "1" : n;
          }
        }
      }
    },
    cssNumber: {
      animationIterationCount: !0,
      columnCount: !0,
      fillOpacity: !0,
      flexGrow: !0,
      flexShrink: !0,
      fontWeight: !0,
      lineHeight: !0,
      opacity: !0,
      order: !0,
      orphans: !0,
      widows: !0,
      zIndex: !0,
      zoom: !0
    },
    cssProps: {},
    style: function style(e, t, n, r) {
      if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
        var i,
            o,
            a,
            s = G(t),
            u = Xe.test(t),
            l = e.style;
        if (u || (t = Je(s)), a = w.cssHooks[t] || w.cssHooks[s], void 0 === n) return a && "get" in a && void 0 !== (i = a.get(e, !1, r)) ? i : l[t];
        "string" == (o = _typeof(n)) && (i = ie.exec(n)) && i[1] && (n = ue(e, t, i), o = "number"), null != n && n === n && ("number" === o && (n += i && i[3] || (w.cssNumber[s] ? "" : "px")), h.clearCloneStyle || "" !== n || 0 !== t.indexOf("background") || (l[t] = "inherit"), a && "set" in a && void 0 === (n = a.set(e, n, r)) || (u ? l.setProperty(t, n) : l[t] = n));
      }
    },
    css: function css(e, t, n, r) {
      var i,
          o,
          a,
          s = G(t);
      return Xe.test(t) || (t = Je(s)), (a = w.cssHooks[t] || w.cssHooks[s]) && "get" in a && (i = a.get(e, !0, n)), void 0 === i && (i = Fe(e, t, r)), "normal" === i && t in Ve && (i = Ve[t]), "" === n || n ? (o = parseFloat(i), !0 === n || isFinite(o) ? o || 0 : i) : i;
    }
  }), w.each(["height", "width"], function (e, t) {
    w.cssHooks[t] = {
      get: function get(e, n, r) {
        if (n) return !ze.test(w.css(e, "display")) || e.getClientRects().length && e.getBoundingClientRect().width ? et(e, t, r) : se(e, Ue, function () {
          return et(e, t, r);
        });
      },
      set: function set(e, n, r) {
        var i,
            o = $e(e),
            a = "border-box" === w.css(e, "boxSizing", !1, o),
            s = r && Ze(e, t, r, a, o);
        return a && h.scrollboxSize() === o.position && (s -= Math.ceil(e["offset" + t[0].toUpperCase() + t.slice(1)] - parseFloat(o[t]) - Ze(e, t, "border", !1, o) - .5)), s && (i = ie.exec(n)) && "px" !== (i[3] || "px") && (e.style[t] = n, n = w.css(e, t)), Ke(e, n, s);
      }
    };
  }), w.cssHooks.marginLeft = _e(h.reliableMarginLeft, function (e, t) {
    if (t) return (parseFloat(Fe(e, "marginLeft")) || e.getBoundingClientRect().left - se(e, {
      marginLeft: 0
    }, function () {
      return e.getBoundingClientRect().left;
    })) + "px";
  }), w.each({
    margin: "",
    padding: "",
    border: "Width"
  }, function (e, t) {
    w.cssHooks[e + t] = {
      expand: function expand(n) {
        for (var r = 0, i = {}, o = "string" == typeof n ? n.split(" ") : [n]; r < 4; r++) {
          i[e + oe[r] + t] = o[r] || o[r - 2] || o[0];
        }

        return i;
      }
    }, "margin" !== e && (w.cssHooks[e + t].set = Ke);
  }), w.fn.extend({
    css: function css(e, t) {
      return z(this, function (e, t, n) {
        var r,
            i,
            o = {},
            a = 0;

        if (Array.isArray(t)) {
          for (r = $e(e), i = t.length; a < i; a++) {
            o[t[a]] = w.css(e, t[a], !1, r);
          }

          return o;
        }

        return void 0 !== n ? w.style(e, t, n) : w.css(e, t);
      }, e, t, arguments.length > 1);
    }
  });

  function tt(e, t, n, r, i) {
    return new tt.prototype.init(e, t, n, r, i);
  }

  w.Tween = tt, tt.prototype = {
    constructor: tt,
    init: function init(e, t, n, r, i, o) {
      this.elem = e, this.prop = n, this.easing = i || w.easing._default, this.options = t, this.start = this.now = this.cur(), this.end = r, this.unit = o || (w.cssNumber[n] ? "" : "px");
    },
    cur: function cur() {
      var e = tt.propHooks[this.prop];
      return e && e.get ? e.get(this) : tt.propHooks._default.get(this);
    },
    run: function run(e) {
      var t,
          n = tt.propHooks[this.prop];
      return this.options.duration ? this.pos = t = w.easing[this.easing](e, this.options.duration * e, 0, 1, this.options.duration) : this.pos = t = e, this.now = (this.end - this.start) * t + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), n && n.set ? n.set(this) : tt.propHooks._default.set(this), this;
    }
  }, tt.prototype.init.prototype = tt.prototype, tt.propHooks = {
    _default: {
      get: function get(e) {
        var t;
        return 1 !== e.elem.nodeType || null != e.elem[e.prop] && null == e.elem.style[e.prop] ? e.elem[e.prop] : (t = w.css(e.elem, e.prop, "")) && "auto" !== t ? t : 0;
      },
      set: function set(e) {
        w.fx.step[e.prop] ? w.fx.step[e.prop](e) : 1 !== e.elem.nodeType || null == e.elem.style[w.cssProps[e.prop]] && !w.cssHooks[e.prop] ? e.elem[e.prop] = e.now : w.style(e.elem, e.prop, e.now + e.unit);
      }
    }
  }, tt.propHooks.scrollTop = tt.propHooks.scrollLeft = {
    set: function set(e) {
      e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now);
    }
  }, w.easing = {
    linear: function linear(e) {
      return e;
    },
    swing: function swing(e) {
      return .5 - Math.cos(e * Math.PI) / 2;
    },
    _default: "swing"
  }, w.fx = tt.prototype.init, w.fx.step = {};
  var nt,
      rt,
      it = /^(?:toggle|show|hide)$/,
      ot = /queueHooks$/;

  function at() {
    rt && (!1 === r.hidden && e.requestAnimationFrame ? e.requestAnimationFrame(at) : e.setTimeout(at, w.fx.interval), w.fx.tick());
  }

  function st() {
    return e.setTimeout(function () {
      nt = void 0;
    }), nt = Date.now();
  }

  function ut(e, t) {
    var n,
        r = 0,
        i = {
      height: e
    };

    for (t = t ? 1 : 0; r < 4; r += 2 - t) {
      i["margin" + (n = oe[r])] = i["padding" + n] = e;
    }

    return t && (i.opacity = i.width = e), i;
  }

  function lt(e, t, n) {
    for (var r, i = (pt.tweeners[t] || []).concat(pt.tweeners["*"]), o = 0, a = i.length; o < a; o++) {
      if (r = i[o].call(n, t, e)) return r;
    }
  }

  function ct(e, t, n) {
    var r,
        i,
        o,
        a,
        s,
        u,
        l,
        c,
        f = "width" in t || "height" in t,
        p = this,
        d = {},
        h = e.style,
        g = e.nodeType && ae(e),
        y = J.get(e, "fxshow");
    n.queue || (null == (a = w._queueHooks(e, "fx")).unqueued && (a.unqueued = 0, s = a.empty.fire, a.empty.fire = function () {
      a.unqueued || s();
    }), a.unqueued++, p.always(function () {
      p.always(function () {
        a.unqueued--, w.queue(e, "fx").length || a.empty.fire();
      });
    }));

    for (r in t) {
      if (i = t[r], it.test(i)) {
        if (delete t[r], o = o || "toggle" === i, i === (g ? "hide" : "show")) {
          if ("show" !== i || !y || void 0 === y[r]) continue;
          g = !0;
        }

        d[r] = y && y[r] || w.style(e, r);
      }
    }

    if ((u = !w.isEmptyObject(t)) || !w.isEmptyObject(d)) {
      f && 1 === e.nodeType && (n.overflow = [h.overflow, h.overflowX, h.overflowY], null == (l = y && y.display) && (l = J.get(e, "display")), "none" === (c = w.css(e, "display")) && (l ? c = l : (fe([e], !0), l = e.style.display || l, c = w.css(e, "display"), fe([e]))), ("inline" === c || "inline-block" === c && null != l) && "none" === w.css(e, "float") && (u || (p.done(function () {
        h.display = l;
      }), null == l && (c = h.display, l = "none" === c ? "" : c)), h.display = "inline-block")), n.overflow && (h.overflow = "hidden", p.always(function () {
        h.overflow = n.overflow[0], h.overflowX = n.overflow[1], h.overflowY = n.overflow[2];
      })), u = !1;

      for (r in d) {
        u || (y ? "hidden" in y && (g = y.hidden) : y = J.access(e, "fxshow", {
          display: l
        }), o && (y.hidden = !g), g && fe([e], !0), p.done(function () {
          g || fe([e]), J.remove(e, "fxshow");

          for (r in d) {
            w.style(e, r, d[r]);
          }
        })), u = lt(g ? y[r] : 0, r, p), r in y || (y[r] = u.start, g && (u.end = u.start, u.start = 0));
      }
    }
  }

  function ft(e, t) {
    var n, r, i, o, a;

    for (n in e) {
      if (r = G(n), i = t[r], o = e[n], Array.isArray(o) && (i = o[1], o = e[n] = o[0]), n !== r && (e[r] = o, delete e[n]), (a = w.cssHooks[r]) && "expand" in a) {
        o = a.expand(o), delete e[r];

        for (n in o) {
          n in e || (e[n] = o[n], t[n] = i);
        }
      } else t[r] = i;
    }
  }

  function pt(e, t, n) {
    var r,
        i,
        o = 0,
        a = pt.prefilters.length,
        s = w.Deferred().always(function () {
      delete u.elem;
    }),
        u = function u() {
      if (i) return !1;

      for (var t = nt || st(), n = Math.max(0, l.startTime + l.duration - t), r = 1 - (n / l.duration || 0), o = 0, a = l.tweens.length; o < a; o++) {
        l.tweens[o].run(r);
      }

      return s.notifyWith(e, [l, r, n]), r < 1 && a ? n : (a || s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l]), !1);
    },
        l = s.promise({
      elem: e,
      props: w.extend({}, t),
      opts: w.extend(!0, {
        specialEasing: {},
        easing: w.easing._default
      }, n),
      originalProperties: t,
      originalOptions: n,
      startTime: nt || st(),
      duration: n.duration,
      tweens: [],
      createTween: function createTween(t, n) {
        var r = w.Tween(e, l.opts, t, n, l.opts.specialEasing[t] || l.opts.easing);
        return l.tweens.push(r), r;
      },
      stop: function stop(t) {
        var n = 0,
            r = t ? l.tweens.length : 0;
        if (i) return this;

        for (i = !0; n < r; n++) {
          l.tweens[n].run(1);
        }

        return t ? (s.notifyWith(e, [l, 1, 0]), s.resolveWith(e, [l, t])) : s.rejectWith(e, [l, t]), this;
      }
    }),
        c = l.props;

    for (ft(c, l.opts.specialEasing); o < a; o++) {
      if (r = pt.prefilters[o].call(l, e, c, l.opts)) return g(r.stop) && (w._queueHooks(l.elem, l.opts.queue).stop = r.stop.bind(r)), r;
    }

    return w.map(c, lt, l), g(l.opts.start) && l.opts.start.call(e, l), l.progress(l.opts.progress).done(l.opts.done, l.opts.complete).fail(l.opts.fail).always(l.opts.always), w.fx.timer(w.extend(u, {
      elem: e,
      anim: l,
      queue: l.opts.queue
    })), l;
  }

  w.Animation = w.extend(pt, {
    tweeners: {
      "*": [function (e, t) {
        var n = this.createTween(e, t);
        return ue(n.elem, e, ie.exec(t), n), n;
      }]
    },
    tweener: function tweener(e, t) {
      g(e) ? (t = e, e = ["*"]) : e = e.match(M);

      for (var n, r = 0, i = e.length; r < i; r++) {
        n = e[r], pt.tweeners[n] = pt.tweeners[n] || [], pt.tweeners[n].unshift(t);
      }
    },
    prefilters: [ct],
    prefilter: function prefilter(e, t) {
      t ? pt.prefilters.unshift(e) : pt.prefilters.push(e);
    }
  }), w.speed = function (e, t, n) {
    var r = e && "object" == _typeof(e) ? w.extend({}, e) : {
      complete: n || !n && t || g(e) && e,
      duration: e,
      easing: n && t || t && !g(t) && t
    };
    return w.fx.off ? r.duration = 0 : "number" != typeof r.duration && (r.duration in w.fx.speeds ? r.duration = w.fx.speeds[r.duration] : r.duration = w.fx.speeds._default), null != r.queue && !0 !== r.queue || (r.queue = "fx"), r.old = r.complete, r.complete = function () {
      g(r.old) && r.old.call(this), r.queue && w.dequeue(this, r.queue);
    }, r;
  }, w.fn.extend({
    fadeTo: function fadeTo(e, t, n, r) {
      return this.filter(ae).css("opacity", 0).show().end().animate({
        opacity: t
      }, e, n, r);
    },
    animate: function animate(e, t, n, r) {
      var i = w.isEmptyObject(e),
          o = w.speed(t, n, r),
          a = function a() {
        var t = pt(this, w.extend({}, e), o);
        (i || J.get(this, "finish")) && t.stop(!0);
      };

      return a.finish = a, i || !1 === o.queue ? this.each(a) : this.queue(o.queue, a);
    },
    stop: function stop(e, t, n) {
      var r = function r(e) {
        var t = e.stop;
        delete e.stop, t(n);
      };

      return "string" != typeof e && (n = t, t = e, e = void 0), t && !1 !== e && this.queue(e || "fx", []), this.each(function () {
        var t = !0,
            i = null != e && e + "queueHooks",
            o = w.timers,
            a = J.get(this);
        if (i) a[i] && a[i].stop && r(a[i]);else for (i in a) {
          a[i] && a[i].stop && ot.test(i) && r(a[i]);
        }

        for (i = o.length; i--;) {
          o[i].elem !== this || null != e && o[i].queue !== e || (o[i].anim.stop(n), t = !1, o.splice(i, 1));
        }

        !t && n || w.dequeue(this, e);
      });
    },
    finish: function finish(e) {
      return !1 !== e && (e = e || "fx"), this.each(function () {
        var t,
            n = J.get(this),
            r = n[e + "queue"],
            i = n[e + "queueHooks"],
            o = w.timers,
            a = r ? r.length : 0;

        for (n.finish = !0, w.queue(this, e, []), i && i.stop && i.stop.call(this, !0), t = o.length; t--;) {
          o[t].elem === this && o[t].queue === e && (o[t].anim.stop(!0), o.splice(t, 1));
        }

        for (t = 0; t < a; t++) {
          r[t] && r[t].finish && r[t].finish.call(this);
        }

        delete n.finish;
      });
    }
  }), w.each(["toggle", "show", "hide"], function (e, t) {
    var n = w.fn[t];

    w.fn[t] = function (e, r, i) {
      return null == e || "boolean" == typeof e ? n.apply(this, arguments) : this.animate(ut(t, !0), e, r, i);
    };
  }), w.each({
    slideDown: ut("show"),
    slideUp: ut("hide"),
    slideToggle: ut("toggle"),
    fadeIn: {
      opacity: "show"
    },
    fadeOut: {
      opacity: "hide"
    },
    fadeToggle: {
      opacity: "toggle"
    }
  }, function (e, t) {
    w.fn[e] = function (e, n, r) {
      return this.animate(t, e, n, r);
    };
  }), w.timers = [], w.fx.tick = function () {
    var e,
        t = 0,
        n = w.timers;

    for (nt = Date.now(); t < n.length; t++) {
      (e = n[t])() || n[t] !== e || n.splice(t--, 1);
    }

    n.length || w.fx.stop(), nt = void 0;
  }, w.fx.timer = function (e) {
    w.timers.push(e), w.fx.start();
  }, w.fx.interval = 13, w.fx.start = function () {
    rt || (rt = !0, at());
  }, w.fx.stop = function () {
    rt = null;
  }, w.fx.speeds = {
    slow: 600,
    fast: 200,
    _default: 400
  }, w.fn.delay = function (t, n) {
    return t = w.fx ? w.fx.speeds[t] || t : t, n = n || "fx", this.queue(n, function (n, r) {
      var i = e.setTimeout(n, t);

      r.stop = function () {
        e.clearTimeout(i);
      };
    });
  }, function () {
    var e = r.createElement("input"),
        t = r.createElement("select").appendChild(r.createElement("option"));
    e.type = "checkbox", h.checkOn = "" !== e.value, h.optSelected = t.selected, (e = r.createElement("input")).value = "t", e.type = "radio", h.radioValue = "t" === e.value;
  }();
  var dt,
      ht = w.expr.attrHandle;
  w.fn.extend({
    attr: function attr(e, t) {
      return z(this, w.attr, e, t, arguments.length > 1);
    },
    removeAttr: function removeAttr(e) {
      return this.each(function () {
        w.removeAttr(this, e);
      });
    }
  }), w.extend({
    attr: function attr(e, t, n) {
      var r,
          i,
          o = e.nodeType;
      if (3 !== o && 8 !== o && 2 !== o) return "undefined" == typeof e.getAttribute ? w.prop(e, t, n) : (1 === o && w.isXMLDoc(e) || (i = w.attrHooks[t.toLowerCase()] || (w.expr.match.bool.test(t) ? dt : void 0)), void 0 !== n ? null === n ? void w.removeAttr(e, t) : i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : (e.setAttribute(t, n + ""), n) : i && "get" in i && null !== (r = i.get(e, t)) ? r : null == (r = w.find.attr(e, t)) ? void 0 : r);
    },
    attrHooks: {
      type: {
        set: function set(e, t) {
          if (!h.radioValue && "radio" === t && N(e, "input")) {
            var n = e.value;
            return e.setAttribute("type", t), n && (e.value = n), t;
          }
        }
      }
    },
    removeAttr: function removeAttr(e, t) {
      var n,
          r = 0,
          i = t && t.match(M);
      if (i && 1 === e.nodeType) while (n = i[r++]) {
        e.removeAttribute(n);
      }
    }
  }), dt = {
    set: function set(e, t, n) {
      return !1 === t ? w.removeAttr(e, n) : e.setAttribute(n, n), n;
    }
  }, w.each(w.expr.match.bool.source.match(/\w+/g), function (e, t) {
    var n = ht[t] || w.find.attr;

    ht[t] = function (e, t, r) {
      var i,
          o,
          a = t.toLowerCase();
      return r || (o = ht[a], ht[a] = i, i = null != n(e, t, r) ? a : null, ht[a] = o), i;
    };
  });
  var gt = /^(?:input|select|textarea|button)$/i,
      yt = /^(?:a|area)$/i;
  w.fn.extend({
    prop: function prop(e, t) {
      return z(this, w.prop, e, t, arguments.length > 1);
    },
    removeProp: function removeProp(e) {
      return this.each(function () {
        delete this[w.propFix[e] || e];
      });
    }
  }), w.extend({
    prop: function prop(e, t, n) {
      var r,
          i,
          o = e.nodeType;
      if (3 !== o && 8 !== o && 2 !== o) return 1 === o && w.isXMLDoc(e) || (t = w.propFix[t] || t, i = w.propHooks[t]), void 0 !== n ? i && "set" in i && void 0 !== (r = i.set(e, n, t)) ? r : e[t] = n : i && "get" in i && null !== (r = i.get(e, t)) ? r : e[t];
    },
    propHooks: {
      tabIndex: {
        get: function get(e) {
          var t = w.find.attr(e, "tabindex");
          return t ? parseInt(t, 10) : gt.test(e.nodeName) || yt.test(e.nodeName) && e.href ? 0 : -1;
        }
      }
    },
    propFix: {
      "for": "htmlFor",
      "class": "className"
    }
  }), h.optSelected || (w.propHooks.selected = {
    get: function get(e) {
      var t = e.parentNode;
      return t && t.parentNode && t.parentNode.selectedIndex, null;
    },
    set: function set(e) {
      var t = e.parentNode;
      t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex);
    }
  }), w.each(["tabIndex", "readOnly", "maxLength", "cellSpacing", "cellPadding", "rowSpan", "colSpan", "useMap", "frameBorder", "contentEditable"], function () {
    w.propFix[this.toLowerCase()] = this;
  });

  function vt(e) {
    return (e.match(M) || []).join(" ");
  }

  function mt(e) {
    return e.getAttribute && e.getAttribute("class") || "";
  }

  function xt(e) {
    return Array.isArray(e) ? e : "string" == typeof e ? e.match(M) || [] : [];
  }

  w.fn.extend({
    addClass: function addClass(e) {
      var t,
          n,
          r,
          i,
          o,
          a,
          s,
          u = 0;
      if (g(e)) return this.each(function (t) {
        w(this).addClass(e.call(this, t, mt(this)));
      });
      if ((t = xt(e)).length) while (n = this[u++]) {
        if (i = mt(n), r = 1 === n.nodeType && " " + vt(i) + " ") {
          a = 0;

          while (o = t[a++]) {
            r.indexOf(" " + o + " ") < 0 && (r += o + " ");
          }

          i !== (s = vt(r)) && n.setAttribute("class", s);
        }
      }
      return this;
    },
    removeClass: function removeClass(e) {
      var t,
          n,
          r,
          i,
          o,
          a,
          s,
          u = 0;
      if (g(e)) return this.each(function (t) {
        w(this).removeClass(e.call(this, t, mt(this)));
      });
      if (!arguments.length) return this.attr("class", "");
      if ((t = xt(e)).length) while (n = this[u++]) {
        if (i = mt(n), r = 1 === n.nodeType && " " + vt(i) + " ") {
          a = 0;

          while (o = t[a++]) {
            while (r.indexOf(" " + o + " ") > -1) {
              r = r.replace(" " + o + " ", " ");
            }
          }

          i !== (s = vt(r)) && n.setAttribute("class", s);
        }
      }
      return this;
    },
    toggleClass: function toggleClass(e, t) {
      var n = _typeof(e),
          r = "string" === n || Array.isArray(e);

      return "boolean" == typeof t && r ? t ? this.addClass(e) : this.removeClass(e) : g(e) ? this.each(function (n) {
        w(this).toggleClass(e.call(this, n, mt(this), t), t);
      }) : this.each(function () {
        var t, i, o, a;

        if (r) {
          i = 0, o = w(this), a = xt(e);

          while (t = a[i++]) {
            o.hasClass(t) ? o.removeClass(t) : o.addClass(t);
          }
        } else void 0 !== e && "boolean" !== n || ((t = mt(this)) && J.set(this, "__className__", t), this.setAttribute && this.setAttribute("class", t || !1 === e ? "" : J.get(this, "__className__") || ""));
      });
    },
    hasClass: function hasClass(e) {
      var t,
          n,
          r = 0;
      t = " " + e + " ";

      while (n = this[r++]) {
        if (1 === n.nodeType && (" " + vt(mt(n)) + " ").indexOf(t) > -1) return !0;
      }

      return !1;
    }
  });
  var bt = /\r/g;
  w.fn.extend({
    val: function val(e) {
      var t,
          n,
          r,
          i = this[0];
      {
        if (arguments.length) return r = g(e), this.each(function (n) {
          var i;
          1 === this.nodeType && (null == (i = r ? e.call(this, n, w(this).val()) : e) ? i = "" : "number" == typeof i ? i += "" : Array.isArray(i) && (i = w.map(i, function (e) {
            return null == e ? "" : e + "";
          })), (t = w.valHooks[this.type] || w.valHooks[this.nodeName.toLowerCase()]) && "set" in t && void 0 !== t.set(this, i, "value") || (this.value = i));
        });
        if (i) return (t = w.valHooks[i.type] || w.valHooks[i.nodeName.toLowerCase()]) && "get" in t && void 0 !== (n = t.get(i, "value")) ? n : "string" == typeof (n = i.value) ? n.replace(bt, "") : null == n ? "" : n;
      }
    }
  }), w.extend({
    valHooks: {
      option: {
        get: function get(e) {
          var t = w.find.attr(e, "value");
          return null != t ? t : vt(w.text(e));
        }
      },
      select: {
        get: function get(e) {
          var t,
              n,
              r,
              i = e.options,
              o = e.selectedIndex,
              a = "select-one" === e.type,
              s = a ? null : [],
              u = a ? o + 1 : i.length;

          for (r = o < 0 ? u : a ? o : 0; r < u; r++) {
            if (((n = i[r]).selected || r === o) && !n.disabled && (!n.parentNode.disabled || !N(n.parentNode, "optgroup"))) {
              if (t = w(n).val(), a) return t;
              s.push(t);
            }
          }

          return s;
        },
        set: function set(e, t) {
          var n,
              r,
              i = e.options,
              o = w.makeArray(t),
              a = i.length;

          while (a--) {
            ((r = i[a]).selected = w.inArray(w.valHooks.option.get(r), o) > -1) && (n = !0);
          }

          return n || (e.selectedIndex = -1), o;
        }
      }
    }
  }), w.each(["radio", "checkbox"], function () {
    w.valHooks[this] = {
      set: function set(e, t) {
        if (Array.isArray(t)) return e.checked = w.inArray(w(e).val(), t) > -1;
      }
    }, h.checkOn || (w.valHooks[this].get = function (e) {
      return null === e.getAttribute("value") ? "on" : e.value;
    });
  }), h.focusin = "onfocusin" in e;

  var wt = /^(?:focusinfocus|focusoutblur)$/,
      Tt = function Tt(e) {
    e.stopPropagation();
  };

  w.extend(w.event, {
    trigger: function trigger(t, n, i, o) {
      var a,
          s,
          u,
          l,
          c,
          p,
          d,
          h,
          v = [i || r],
          m = f.call(t, "type") ? t.type : t,
          x = f.call(t, "namespace") ? t.namespace.split(".") : [];

      if (s = h = u = i = i || r, 3 !== i.nodeType && 8 !== i.nodeType && !wt.test(m + w.event.triggered) && (m.indexOf(".") > -1 && (m = (x = m.split(".")).shift(), x.sort()), c = m.indexOf(":") < 0 && "on" + m, t = t[w.expando] ? t : new w.Event(m, "object" == _typeof(t) && t), t.isTrigger = o ? 2 : 3, t.namespace = x.join("."), t.rnamespace = t.namespace ? new RegExp("(^|\\.)" + x.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, t.result = void 0, t.target || (t.target = i), n = null == n ? [t] : w.makeArray(n, [t]), d = w.event.special[m] || {}, o || !d.trigger || !1 !== d.trigger.apply(i, n))) {
        if (!o && !d.noBubble && !y(i)) {
          for (l = d.delegateType || m, wt.test(l + m) || (s = s.parentNode); s; s = s.parentNode) {
            v.push(s), u = s;
          }

          u === (i.ownerDocument || r) && v.push(u.defaultView || u.parentWindow || e);
        }

        a = 0;

        while ((s = v[a++]) && !t.isPropagationStopped()) {
          h = s, t.type = a > 1 ? l : d.bindType || m, (p = (J.get(s, "events") || {})[t.type] && J.get(s, "handle")) && p.apply(s, n), (p = c && s[c]) && p.apply && Y(s) && (t.result = p.apply(s, n), !1 === t.result && t.preventDefault());
        }

        return t.type = m, o || t.isDefaultPrevented() || d._default && !1 !== d._default.apply(v.pop(), n) || !Y(i) || c && g(i[m]) && !y(i) && ((u = i[c]) && (i[c] = null), w.event.triggered = m, t.isPropagationStopped() && h.addEventListener(m, Tt), i[m](), t.isPropagationStopped() && h.removeEventListener(m, Tt), w.event.triggered = void 0, u && (i[c] = u)), t.result;
      }
    },
    simulate: function simulate(e, t, n) {
      var r = w.extend(new w.Event(), n, {
        type: e,
        isSimulated: !0
      });
      w.event.trigger(r, null, t);
    }
  }), w.fn.extend({
    trigger: function trigger(e, t) {
      return this.each(function () {
        w.event.trigger(e, t, this);
      });
    },
    triggerHandler: function triggerHandler(e, t) {
      var n = this[0];
      if (n) return w.event.trigger(e, t, n, !0);
    }
  }), h.focusin || w.each({
    focus: "focusin",
    blur: "focusout"
  }, function (e, t) {
    var n = function n(e) {
      w.event.simulate(t, e.target, w.event.fix(e));
    };

    w.event.special[t] = {
      setup: function setup() {
        var r = this.ownerDocument || this,
            i = J.access(r, t);
        i || r.addEventListener(e, n, !0), J.access(r, t, (i || 0) + 1);
      },
      teardown: function teardown() {
        var r = this.ownerDocument || this,
            i = J.access(r, t) - 1;
        i ? J.access(r, t, i) : (r.removeEventListener(e, n, !0), J.remove(r, t));
      }
    };
  });
  var Ct = e.location,
      Et = Date.now(),
      kt = /\?/;

  w.parseXML = function (t) {
    var n;
    if (!t || "string" != typeof t) return null;

    try {
      n = new e.DOMParser().parseFromString(t, "text/xml");
    } catch (e) {
      n = void 0;
    }

    return n && !n.getElementsByTagName("parsererror").length || w.error("Invalid XML: " + t), n;
  };

  var St = /\[\]$/,
      Dt = /\r?\n/g,
      Nt = /^(?:submit|button|image|reset|file)$/i,
      At = /^(?:input|select|textarea|keygen)/i;

  function jt(e, t, n, r) {
    var i;
    if (Array.isArray(t)) w.each(t, function (t, i) {
      n || St.test(e) ? r(e, i) : jt(e + "[" + ("object" == _typeof(i) && null != i ? t : "") + "]", i, n, r);
    });else if (n || "object" !== x(t)) r(e, t);else for (i in t) {
      jt(e + "[" + i + "]", t[i], n, r);
    }
  }

  w.param = function (e, t) {
    var n,
        r = [],
        i = function i(e, t) {
      var n = g(t) ? t() : t;
      r[r.length] = encodeURIComponent(e) + "=" + encodeURIComponent(null == n ? "" : n);
    };

    if (Array.isArray(e) || e.jquery && !w.isPlainObject(e)) w.each(e, function () {
      i(this.name, this.value);
    });else for (n in e) {
      jt(n, e[n], t, i);
    }
    return r.join("&");
  }, w.fn.extend({
    serialize: function serialize() {
      return w.param(this.serializeArray());
    },
    serializeArray: function serializeArray() {
      return this.map(function () {
        var e = w.prop(this, "elements");
        return e ? w.makeArray(e) : this;
      }).filter(function () {
        var e = this.type;
        return this.name && !w(this).is(":disabled") && At.test(this.nodeName) && !Nt.test(e) && (this.checked || !pe.test(e));
      }).map(function (e, t) {
        var n = w(this).val();
        return null == n ? null : Array.isArray(n) ? w.map(n, function (e) {
          return {
            name: t.name,
            value: e.replace(Dt, "\r\n")
          };
        }) : {
          name: t.name,
          value: n.replace(Dt, "\r\n")
        };
      }).get();
    }
  });
  var qt = /%20/g,
      Lt = /#.*$/,
      Ht = /([?&])_=[^&]*/,
      Ot = /^(.*?):[ \t]*([^\r\n]*)$/gm,
      Pt = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
      Mt = /^(?:GET|HEAD)$/,
      Rt = /^\/\//,
      It = {},
      Wt = {},
      $t = "*/".concat("*"),
      Bt = r.createElement("a");
  Bt.href = Ct.href;

  function Ft(e) {
    return function (t, n) {
      "string" != typeof t && (n = t, t = "*");
      var r,
          i = 0,
          o = t.toLowerCase().match(M) || [];
      if (g(n)) while (r = o[i++]) {
        "+" === r[0] ? (r = r.slice(1) || "*", (e[r] = e[r] || []).unshift(n)) : (e[r] = e[r] || []).push(n);
      }
    };
  }

  function _t(e, t, n, r) {
    var i = {},
        o = e === Wt;

    function a(s) {
      var u;
      return i[s] = !0, w.each(e[s] || [], function (e, s) {
        var l = s(t, n, r);
        return "string" != typeof l || o || i[l] ? o ? !(u = l) : void 0 : (t.dataTypes.unshift(l), a(l), !1);
      }), u;
    }

    return a(t.dataTypes[0]) || !i["*"] && a("*");
  }

  function zt(e, t) {
    var n,
        r,
        i = w.ajaxSettings.flatOptions || {};

    for (n in t) {
      void 0 !== t[n] && ((i[n] ? e : r || (r = {}))[n] = t[n]);
    }

    return r && w.extend(!0, e, r), e;
  }

  function Xt(e, t, n) {
    var r,
        i,
        o,
        a,
        s = e.contents,
        u = e.dataTypes;

    while ("*" === u[0]) {
      u.shift(), void 0 === r && (r = e.mimeType || t.getResponseHeader("Content-Type"));
    }

    if (r) for (i in s) {
      if (s[i] && s[i].test(r)) {
        u.unshift(i);
        break;
      }
    }
    if (u[0] in n) o = u[0];else {
      for (i in n) {
        if (!u[0] || e.converters[i + " " + u[0]]) {
          o = i;
          break;
        }

        a || (a = i);
      }

      o = o || a;
    }
    if (o) return o !== u[0] && u.unshift(o), n[o];
  }

  function Ut(e, t, n, r) {
    var i,
        o,
        a,
        s,
        u,
        l = {},
        c = e.dataTypes.slice();
    if (c[1]) for (a in e.converters) {
      l[a.toLowerCase()] = e.converters[a];
    }
    o = c.shift();

    while (o) {
      if (e.responseFields[o] && (n[e.responseFields[o]] = t), !u && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)), u = o, o = c.shift()) if ("*" === o) o = u;else if ("*" !== u && u !== o) {
        if (!(a = l[u + " " + o] || l["* " + o])) for (i in l) {
          if ((s = i.split(" "))[1] === o && (a = l[u + " " + s[0]] || l["* " + s[0]])) {
            !0 === a ? a = l[i] : !0 !== l[i] && (o = s[0], c.unshift(s[1]));
            break;
          }
        }
        if (!0 !== a) if (a && e["throws"]) t = a(t);else try {
          t = a(t);
        } catch (e) {
          return {
            state: "parsererror",
            error: a ? e : "No conversion from " + u + " to " + o
          };
        }
      }
    }

    return {
      state: "success",
      data: t
    };
  }

  w.extend({
    active: 0,
    lastModified: {},
    etag: {},
    ajaxSettings: {
      url: Ct.href,
      type: "GET",
      isLocal: Pt.test(Ct.protocol),
      global: !0,
      processData: !0,
      async: !0,
      contentType: "application/x-www-form-urlencoded; charset=UTF-8",
      accepts: {
        "*": $t,
        text: "text/plain",
        html: "text/html",
        xml: "application/xml, text/xml",
        json: "application/json, text/javascript"
      },
      contents: {
        xml: /\bxml\b/,
        html: /\bhtml/,
        json: /\bjson\b/
      },
      responseFields: {
        xml: "responseXML",
        text: "responseText",
        json: "responseJSON"
      },
      converters: {
        "* text": String,
        "text html": !0,
        "text json": JSON.parse,
        "text xml": w.parseXML
      },
      flatOptions: {
        url: !0,
        context: !0
      }
    },
    ajaxSetup: function ajaxSetup(e, t) {
      return t ? zt(zt(e, w.ajaxSettings), t) : zt(w.ajaxSettings, e);
    },
    ajaxPrefilter: Ft(It),
    ajaxTransport: Ft(Wt),
    ajax: function ajax(t, n) {
      "object" == _typeof(t) && (n = t, t = void 0), n = n || {};
      var i,
          o,
          a,
          s,
          u,
          l,
          c,
          f,
          p,
          d,
          h = w.ajaxSetup({}, n),
          g = h.context || h,
          y = h.context && (g.nodeType || g.jquery) ? w(g) : w.event,
          v = w.Deferred(),
          m = w.Callbacks("once memory"),
          x = h.statusCode || {},
          b = {},
          T = {},
          C = "canceled",
          E = {
        readyState: 0,
        getResponseHeader: function getResponseHeader(e) {
          var t;

          if (c) {
            if (!s) {
              s = {};

              while (t = Ot.exec(a)) {
                s[t[1].toLowerCase()] = t[2];
              }
            }

            t = s[e.toLowerCase()];
          }

          return null == t ? null : t;
        },
        getAllResponseHeaders: function getAllResponseHeaders() {
          return c ? a : null;
        },
        setRequestHeader: function setRequestHeader(e, t) {
          return null == c && (e = T[e.toLowerCase()] = T[e.toLowerCase()] || e, b[e] = t), this;
        },
        overrideMimeType: function overrideMimeType(e) {
          return null == c && (h.mimeType = e), this;
        },
        statusCode: function statusCode(e) {
          var t;
          if (e) if (c) E.always(e[E.status]);else for (t in e) {
            x[t] = [x[t], e[t]];
          }
          return this;
        },
        abort: function abort(e) {
          var t = e || C;
          return i && i.abort(t), k(0, t), this;
        }
      };

      if (v.promise(E), h.url = ((t || h.url || Ct.href) + "").replace(Rt, Ct.protocol + "//"), h.type = n.method || n.type || h.method || h.type, h.dataTypes = (h.dataType || "*").toLowerCase().match(M) || [""], null == h.crossDomain) {
        l = r.createElement("a");

        try {
          l.href = h.url, l.href = l.href, h.crossDomain = Bt.protocol + "//" + Bt.host != l.protocol + "//" + l.host;
        } catch (e) {
          h.crossDomain = !0;
        }
      }

      if (h.data && h.processData && "string" != typeof h.data && (h.data = w.param(h.data, h.traditional)), _t(It, h, n, E), c) return E;
      (f = w.event && h.global) && 0 == w.active++ && w.event.trigger("ajaxStart"), h.type = h.type.toUpperCase(), h.hasContent = !Mt.test(h.type), o = h.url.replace(Lt, ""), h.hasContent ? h.data && h.processData && 0 === (h.contentType || "").indexOf("application/x-www-form-urlencoded") && (h.data = h.data.replace(qt, "+")) : (d = h.url.slice(o.length), h.data && (h.processData || "string" == typeof h.data) && (o += (kt.test(o) ? "&" : "?") + h.data, delete h.data), !1 === h.cache && (o = o.replace(Ht, "$1"), d = (kt.test(o) ? "&" : "?") + "_=" + Et++ + d), h.url = o + d), h.ifModified && (w.lastModified[o] && E.setRequestHeader("If-Modified-Since", w.lastModified[o]), w.etag[o] && E.setRequestHeader("If-None-Match", w.etag[o])), (h.data && h.hasContent && !1 !== h.contentType || n.contentType) && E.setRequestHeader("Content-Type", h.contentType), E.setRequestHeader("Accept", h.dataTypes[0] && h.accepts[h.dataTypes[0]] ? h.accepts[h.dataTypes[0]] + ("*" !== h.dataTypes[0] ? ", " + $t + "; q=0.01" : "") : h.accepts["*"]);

      for (p in h.headers) {
        E.setRequestHeader(p, h.headers[p]);
      }

      if (h.beforeSend && (!1 === h.beforeSend.call(g, E, h) || c)) return E.abort();

      if (C = "abort", m.add(h.complete), E.done(h.success), E.fail(h.error), i = _t(Wt, h, n, E)) {
        if (E.readyState = 1, f && y.trigger("ajaxSend", [E, h]), c) return E;
        h.async && h.timeout > 0 && (u = e.setTimeout(function () {
          E.abort("timeout");
        }, h.timeout));

        try {
          c = !1, i.send(b, k);
        } catch (e) {
          if (c) throw e;
          k(-1, e);
        }
      } else k(-1, "No Transport");

      function k(t, n, r, s) {
        var l,
            p,
            d,
            b,
            T,
            C = n;
        c || (c = !0, u && e.clearTimeout(u), i = void 0, a = s || "", E.readyState = t > 0 ? 4 : 0, l = t >= 200 && t < 300 || 304 === t, r && (b = Xt(h, E, r)), b = Ut(h, b, E, l), l ? (h.ifModified && ((T = E.getResponseHeader("Last-Modified")) && (w.lastModified[o] = T), (T = E.getResponseHeader("etag")) && (w.etag[o] = T)), 204 === t || "HEAD" === h.type ? C = "nocontent" : 304 === t ? C = "notmodified" : (C = b.state, p = b.data, l = !(d = b.error))) : (d = C, !t && C || (C = "error", t < 0 && (t = 0))), E.status = t, E.statusText = (n || C) + "", l ? v.resolveWith(g, [p, C, E]) : v.rejectWith(g, [E, C, d]), E.statusCode(x), x = void 0, f && y.trigger(l ? "ajaxSuccess" : "ajaxError", [E, h, l ? p : d]), m.fireWith(g, [E, C]), f && (y.trigger("ajaxComplete", [E, h]), --w.active || w.event.trigger("ajaxStop")));
      }

      return E;
    },
    getJSON: function getJSON(e, t, n) {
      return w.get(e, t, n, "json");
    },
    getScript: function getScript(e, t) {
      return w.get(e, void 0, t, "script");
    }
  }), w.each(["get", "post"], function (e, t) {
    w[t] = function (e, n, r, i) {
      return g(n) && (i = i || r, r = n, n = void 0), w.ajax(w.extend({
        url: e,
        type: t,
        dataType: i,
        data: n,
        success: r
      }, w.isPlainObject(e) && e));
    };
  }), w._evalUrl = function (e) {
    return w.ajax({
      url: e,
      type: "GET",
      dataType: "script",
      cache: !0,
      async: !1,
      global: !1,
      "throws": !0
    });
  }, w.fn.extend({
    wrapAll: function wrapAll(e) {
      var t;
      return this[0] && (g(e) && (e = e.call(this[0])), t = w(e, this[0].ownerDocument).eq(0).clone(!0), this[0].parentNode && t.insertBefore(this[0]), t.map(function () {
        var e = this;

        while (e.firstElementChild) {
          e = e.firstElementChild;
        }

        return e;
      }).append(this)), this;
    },
    wrapInner: function wrapInner(e) {
      return g(e) ? this.each(function (t) {
        w(this).wrapInner(e.call(this, t));
      }) : this.each(function () {
        var t = w(this),
            n = t.contents();
        n.length ? n.wrapAll(e) : t.append(e);
      });
    },
    wrap: function wrap(e) {
      var t = g(e);
      return this.each(function (n) {
        w(this).wrapAll(t ? e.call(this, n) : e);
      });
    },
    unwrap: function unwrap(e) {
      return this.parent(e).not("body").each(function () {
        w(this).replaceWith(this.childNodes);
      }), this;
    }
  }), w.expr.pseudos.hidden = function (e) {
    return !w.expr.pseudos.visible(e);
  }, w.expr.pseudos.visible = function (e) {
    return !!(e.offsetWidth || e.offsetHeight || e.getClientRects().length);
  }, w.ajaxSettings.xhr = function () {
    try {
      return new e.XMLHttpRequest();
    } catch (e) {}
  };
  var Vt = {
    0: 200,
    1223: 204
  },
      Gt = w.ajaxSettings.xhr();
  h.cors = !!Gt && "withCredentials" in Gt, h.ajax = Gt = !!Gt, w.ajaxTransport(function (t) {
    var _n, r;

    if (h.cors || Gt && !t.crossDomain) return {
      send: function send(i, o) {
        var a,
            s = t.xhr();
        if (s.open(t.type, t.url, t.async, t.username, t.password), t.xhrFields) for (a in t.xhrFields) {
          s[a] = t.xhrFields[a];
        }
        t.mimeType && s.overrideMimeType && s.overrideMimeType(t.mimeType), t.crossDomain || i["X-Requested-With"] || (i["X-Requested-With"] = "XMLHttpRequest");

        for (a in i) {
          s.setRequestHeader(a, i[a]);
        }

        _n = function n(e) {
          return function () {
            _n && (_n = r = s.onload = s.onerror = s.onabort = s.ontimeout = s.onreadystatechange = null, "abort" === e ? s.abort() : "error" === e ? "number" != typeof s.status ? o(0, "error") : o(s.status, s.statusText) : o(Vt[s.status] || s.status, s.statusText, "text" !== (s.responseType || "text") || "string" != typeof s.responseText ? {
              binary: s.response
            } : {
              text: s.responseText
            }, s.getAllResponseHeaders()));
          };
        }, s.onload = _n(), r = s.onerror = s.ontimeout = _n("error"), void 0 !== s.onabort ? s.onabort = r : s.onreadystatechange = function () {
          4 === s.readyState && e.setTimeout(function () {
            _n && r();
          });
        }, _n = _n("abort");

        try {
          s.send(t.hasContent && t.data || null);
        } catch (e) {
          if (_n) throw e;
        }
      },
      abort: function abort() {
        _n && _n();
      }
    };
  }), w.ajaxPrefilter(function (e) {
    e.crossDomain && (e.contents.script = !1);
  }), w.ajaxSetup({
    accepts: {
      script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
    },
    contents: {
      script: /\b(?:java|ecma)script\b/
    },
    converters: {
      "text script": function textScript(e) {
        return w.globalEval(e), e;
      }
    }
  }), w.ajaxPrefilter("script", function (e) {
    void 0 === e.cache && (e.cache = !1), e.crossDomain && (e.type = "GET");
  }), w.ajaxTransport("script", function (e) {
    if (e.crossDomain) {
      var t, _n2;

      return {
        send: function send(i, o) {
          t = w("<script>").prop({
            charset: e.scriptCharset,
            src: e.url
          }).on("load error", _n2 = function n(e) {
            t.remove(), _n2 = null, e && o("error" === e.type ? 404 : 200, e.type);
          }), r.head.appendChild(t[0]);
        },
        abort: function abort() {
          _n2 && _n2();
        }
      };
    }
  });
  var Yt = [],
      Qt = /(=)\?(?=&|$)|\?\?/;
  w.ajaxSetup({
    jsonp: "callback",
    jsonpCallback: function jsonpCallback() {
      var e = Yt.pop() || w.expando + "_" + Et++;
      return this[e] = !0, e;
    }
  }), w.ajaxPrefilter("json jsonp", function (t, n, r) {
    var i,
        o,
        a,
        s = !1 !== t.jsonp && (Qt.test(t.url) ? "url" : "string" == typeof t.data && 0 === (t.contentType || "").indexOf("application/x-www-form-urlencoded") && Qt.test(t.data) && "data");
    if (s || "jsonp" === t.dataTypes[0]) return i = t.jsonpCallback = g(t.jsonpCallback) ? t.jsonpCallback() : t.jsonpCallback, s ? t[s] = t[s].replace(Qt, "$1" + i) : !1 !== t.jsonp && (t.url += (kt.test(t.url) ? "&" : "?") + t.jsonp + "=" + i), t.converters["script json"] = function () {
      return a || w.error(i + " was not called"), a[0];
    }, t.dataTypes[0] = "json", o = e[i], e[i] = function () {
      a = arguments;
    }, r.always(function () {
      void 0 === o ? w(e).removeProp(i) : e[i] = o, t[i] && (t.jsonpCallback = n.jsonpCallback, Yt.push(i)), a && g(o) && o(a[0]), a = o = void 0;
    }), "script";
  }), h.createHTMLDocument = function () {
    var e = r.implementation.createHTMLDocument("").body;
    return e.innerHTML = "<form></form><form></form>", 2 === e.childNodes.length;
  }(), w.parseHTML = function (e, t, n) {
    if ("string" != typeof e) return [];
    "boolean" == typeof t && (n = t, t = !1);
    var i, o, a;
    return t || (h.createHTMLDocument ? ((i = (t = r.implementation.createHTMLDocument("")).createElement("base")).href = r.location.href, t.head.appendChild(i)) : t = r), o = A.exec(e), a = !n && [], o ? [t.createElement(o[1])] : (o = xe([e], t, a), a && a.length && w(a).remove(), w.merge([], o.childNodes));
  }, w.fn.load = function (e, t, n) {
    var r,
        i,
        o,
        a = this,
        s = e.indexOf(" ");
    return s > -1 && (r = vt(e.slice(s)), e = e.slice(0, s)), g(t) ? (n = t, t = void 0) : t && "object" == _typeof(t) && (i = "POST"), a.length > 0 && w.ajax({
      url: e,
      type: i || "GET",
      dataType: "html",
      data: t
    }).done(function (e) {
      o = arguments, a.html(r ? w("<div>").append(w.parseHTML(e)).find(r) : e);
    }).always(n && function (e, t) {
      a.each(function () {
        n.apply(this, o || [e.responseText, t, e]);
      });
    }), this;
  }, w.each(["ajaxStart", "ajaxStop", "ajaxComplete", "ajaxError", "ajaxSuccess", "ajaxSend"], function (e, t) {
    w.fn[t] = function (e) {
      return this.on(t, e);
    };
  }), w.expr.pseudos.animated = function (e) {
    return w.grep(w.timers, function (t) {
      return e === t.elem;
    }).length;
  }, w.offset = {
    setOffset: function setOffset(e, t, n) {
      var r,
          i,
          o,
          a,
          s,
          u,
          l,
          c = w.css(e, "position"),
          f = w(e),
          p = {};
      "static" === c && (e.style.position = "relative"), s = f.offset(), o = w.css(e, "top"), u = w.css(e, "left"), (l = ("absolute" === c || "fixed" === c) && (o + u).indexOf("auto") > -1) ? (a = (r = f.position()).top, i = r.left) : (a = parseFloat(o) || 0, i = parseFloat(u) || 0), g(t) && (t = t.call(e, n, w.extend({}, s))), null != t.top && (p.top = t.top - s.top + a), null != t.left && (p.left = t.left - s.left + i), "using" in t ? t.using.call(e, p) : f.css(p);
    }
  }, w.fn.extend({
    offset: function offset(e) {
      if (arguments.length) return void 0 === e ? this : this.each(function (t) {
        w.offset.setOffset(this, e, t);
      });
      var t,
          n,
          r = this[0];
      if (r) return r.getClientRects().length ? (t = r.getBoundingClientRect(), n = r.ownerDocument.defaultView, {
        top: t.top + n.pageYOffset,
        left: t.left + n.pageXOffset
      }) : {
        top: 0,
        left: 0
      };
    },
    position: function position() {
      if (this[0]) {
        var e,
            t,
            n,
            r = this[0],
            i = {
          top: 0,
          left: 0
        };
        if ("fixed" === w.css(r, "position")) t = r.getBoundingClientRect();else {
          t = this.offset(), n = r.ownerDocument, e = r.offsetParent || n.documentElement;

          while (e && (e === n.body || e === n.documentElement) && "static" === w.css(e, "position")) {
            e = e.parentNode;
          }

          e && e !== r && 1 === e.nodeType && ((i = w(e).offset()).top += w.css(e, "borderTopWidth", !0), i.left += w.css(e, "borderLeftWidth", !0));
        }
        return {
          top: t.top - i.top - w.css(r, "marginTop", !0),
          left: t.left - i.left - w.css(r, "marginLeft", !0)
        };
      }
    },
    offsetParent: function offsetParent() {
      return this.map(function () {
        var e = this.offsetParent;

        while (e && "static" === w.css(e, "position")) {
          e = e.offsetParent;
        }

        return e || be;
      });
    }
  }), w.each({
    scrollLeft: "pageXOffset",
    scrollTop: "pageYOffset"
  }, function (e, t) {
    var n = "pageYOffset" === t;

    w.fn[e] = function (r) {
      return z(this, function (e, r, i) {
        var o;
        if (y(e) ? o = e : 9 === e.nodeType && (o = e.defaultView), void 0 === i) return o ? o[t] : e[r];
        o ? o.scrollTo(n ? o.pageXOffset : i, n ? i : o.pageYOffset) : e[r] = i;
      }, e, r, arguments.length);
    };
  }), w.each(["top", "left"], function (e, t) {
    w.cssHooks[t] = _e(h.pixelPosition, function (e, n) {
      if (n) return n = Fe(e, t), We.test(n) ? w(e).position()[t] + "px" : n;
    });
  }), w.each({
    Height: "height",
    Width: "width"
  }, function (e, t) {
    w.each({
      padding: "inner" + e,
      content: t,
      "": "outer" + e
    }, function (n, r) {
      w.fn[r] = function (i, o) {
        var a = arguments.length && (n || "boolean" != typeof i),
            s = n || (!0 === i || !0 === o ? "margin" : "border");
        return z(this, function (t, n, i) {
          var o;
          return y(t) ? 0 === r.indexOf("outer") ? t["inner" + e] : t.document.documentElement["client" + e] : 9 === t.nodeType ? (o = t.documentElement, Math.max(t.body["scroll" + e], o["scroll" + e], t.body["offset" + e], o["offset" + e], o["client" + e])) : void 0 === i ? w.css(t, n, s) : w.style(t, n, i, s);
        }, t, a ? i : void 0, a);
      };
    });
  }), w.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "), function (e, t) {
    w.fn[t] = function (e, n) {
      return arguments.length > 0 ? this.on(t, null, e, n) : this.trigger(t);
    };
  }), w.fn.extend({
    hover: function hover(e, t) {
      return this.mouseenter(e).mouseleave(t || e);
    }
  }), w.fn.extend({
    bind: function bind(e, t, n) {
      return this.on(e, null, t, n);
    },
    unbind: function unbind(e, t) {
      return this.off(e, null, t);
    },
    delegate: function delegate(e, t, n, r) {
      return this.on(t, e, n, r);
    },
    undelegate: function undelegate(e, t, n) {
      return 1 === arguments.length ? this.off(e, "**") : this.off(t, e || "**", n);
    }
  }), w.proxy = function (e, t) {
    var n, r, i;
    if ("string" == typeof t && (n = e[t], t = e, e = n), g(e)) return r = o.call(arguments, 2), i = function i() {
      return e.apply(t || this, r.concat(o.call(arguments)));
    }, i.guid = e.guid = e.guid || w.guid++, i;
  }, w.holdReady = function (e) {
    e ? w.readyWait++ : w.ready(!0);
  }, w.isArray = Array.isArray, w.parseJSON = JSON.parse, w.nodeName = N, w.isFunction = g, w.isWindow = y, w.camelCase = G, w.type = x, w.now = Date.now, w.isNumeric = function (e) {
    var t = w.type(e);
    return ("number" === t || "string" === t) && !isNaN(e - parseFloat(e));
  },  true && !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_RESULT__ = (function () {
    return w;
  }).apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
  var Jt = e.jQuery,
      Kt = e.$;
  return w.noConflict = function (t) {
    return e.$ === w && (e.$ = Kt), t && e.jQuery === w && (e.jQuery = Jt), w;
  }, t || (e.jQuery = e.$ = w), w;
});
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../../../../../node_modules/webpack/buildin/module.js */ "./node_modules/webpack/buildin/module.js")(module)))

/***/ }),

/***/ "./resources/assets/frontend/assets/js/main.js":
/*!*****************************************************!*\
  !*** ./resources/assets/frontend/assets/js/main.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(jQuery) {/* ----------------- Start Document ----------------- */
(function ($) {
  "use strict";

  $(document).ready(function () {
    /*--------------------------------------------------*/

    /*  Mobile Menu - mmenu.js
    /*--------------------------------------------------*/
    $(function () {
      function mmenuInit() {
        var wi = $(window).width();

        if (wi <= '1099') {
          $(".mmenu-init").remove();
          $("#navigation").clone().addClass("mmenu-init").insertBefore("#navigation").removeAttr('id').removeClass('style-1 style-2').find('ul, div').removeClass('style-1 style-2').removeAttr('id');
          $(".mmenu-init").find("ul").addClass("mm-listview");
          $(".mmenu-init").find(".mobile-styles .mm-listview").unwrap();
          $(".mmenu-init").mmenu({
            "counters": true
          }, {
            // configuration
            offCanvas: {
              pageNodetype: "#wrapper"
            }
          });
          var mmenuAPI = $(".mmenu-init").data("mmenu");
          var $icon = $(".mmenu-trigger .hamburger");
          $(".mmenu-trigger").on('click', function () {
            mmenuAPI.open();
          });
        }

        $(".mm-next").addClass("mm-fullsubopen");
      }

      mmenuInit();
      $(window).resize(function () {
        mmenuInit();
      });
    });
    /*----------------------------------------------------*/

    /*  Sidebar Nav Submenus
    /*----------------------------------------------------*/

    $('.page-menu ul li a').on('click', function (e) {
      if ($(this).closest("li").children("ul").length) {
        if ($(this).closest("li").is(".active-submenu")) {
          $('.page-menu ul li').removeClass('active-submenu');
        } else {
          $('.page-menu ul li').removeClass('active-submenu');
          $(this).parent('li').addClass('active-submenu');
        }

        e.preventDefault();
      }
    });
    /*----------------------------------------------------*/

    /*  Back to Top
    /*----------------------------------------------------*/
    // Button

    function backToTop() {
      $('body').append('<div id="backtotop"><a href="#"><i class="fa fa-angle-up"></i></a></div>');
    }

    backToTop(); // Showing Button

    var pxShow = 100; // height on which the button will show

    var scrollSpeed = 500; // how slow / fast you want the button to scroll to top.

    $(window).scroll(function () {
      if ($(window).scrollTop() >= pxShow) {
        $("#backtotop").addClass('visible ');
      } else {
        $("#backtotop").removeClass('visible ');
      }
    });
    $('#backtotop a').on('click', function () {
      $('html, body').animate({
        scrollTop: 0
      }, scrollSpeed);
      return false;
    });
    /*--------------------------------------------------*/

    /*  NProgress
    /*-------------------------------------------------- */

    NProgress.start(); // start    

    NProgress.set(0.4); // To set a progress percentage, call .set(n), where n is a number between 0..1

    NProgress.inc(); // To increment the progress bar, just use .inc(). This increments it with a random amount. This will never get to 100%: use it for every image load (or similar).If you want to increment by a specific value, you can pass that as a parameter

    NProgress.configure({
      ease: 'ease',
      speed: 1000
    }); // Adjust animation settings using easing (a CSS easing string) and speed (in ms). (default: ease and 200)

    NProgress.configure({
      trickleSpeed: 800
    }); //Adjust how often to trickle/increment, in ms.

    NProgress.configure({
      showSpinner: true
    }); //Turn off loading spinner by setting it to false. (default: true)

    NProgress.configure({
      parent: '#wrapper'
    }); //specify this to change the parent container. (default: body)

    NProgress.done(); // end 
    // ------------------ End Document ------------------ //
  }(jQuery));
})(jQuery);
/*! NProgress (c) 2013, Rico Sta. Cruz
 *  http://ricostacruz.com/nprogress */


;

(function (factory) {
  if (false) {} else {
    this.NProgress = factory(this.jQuery);
  }
})(function ($) {
  var NProgress = {};
  NProgress.version = '0.1.2';
  var Settings = NProgress.settings = {
    minimum: 0.08,
    easing: 'ease',
    positionUsing: '',
    speed: 200,
    trickle: true,
    trickleRate: 0.02,
    trickleSpeed: 800,
    showSpinner: true,
    template: '<div class="bar" role="bar"><div class="peg"></div></div><div class="spinner" role="spinner"><div class="spinner-icon"></div></div>'
  };
  /**
   * Updates configuration.
   *
   *     NProgress.configure({
   *       minimum: 0.1
   *     });
   */

  NProgress.configure = function (options) {
    $.extend(Settings, options);
    return this;
  };
  /**
   * Last number.
   */


  NProgress.status = null;
  /**
   * Sets the progress bar status, where `n` is a number from `0.0` to `1.0`.
   *
   *     NProgress.set(0.4);
   *     NProgress.set(1.0);
   */

  NProgress.set = function (n) {
    var started = NProgress.isStarted();
    n = clamp(n, Settings.minimum, 1);
    NProgress.status = n === 1 ? null : n;
    var $progress = NProgress.render(!started),
        $bar = $progress.find('[role="bar"]'),
        speed = Settings.speed,
        ease = Settings.easing;
    $progress[0].offsetWidth;
    /* Repaint */

    $progress.queue(function (next) {
      // Set positionUsing if it hasn't already been set
      if (Settings.positionUsing === '') Settings.positionUsing = NProgress.getPositioningCSS(); // Add transition

      $bar.css(barPositionCSS(n, speed, ease));

      if (n === 1) {
        // Fade out
        $progress.css({
          transition: 'none',
          opacity: 1
        });
        $progress[0].offsetWidth;
        /* Repaint */

        setTimeout(function () {
          $progress.css({
            transition: 'all ' + speed + 'ms linear',
            opacity: 0
          });
          setTimeout(function () {
            NProgress.remove();
            next();
          }, speed);
        }, speed);
      } else {
        setTimeout(next, speed);
      }
    });
    return this;
  };

  NProgress.isStarted = function () {
    return typeof NProgress.status === 'number';
  };
  /**
   * Shows the progress bar.
   * This is the same as setting the status to 0%, except that it doesn't go backwards.
   *
   *     NProgress.start();
   *
   */


  NProgress.start = function () {
    if (!NProgress.status) NProgress.set(0);

    var work = function work() {
      setTimeout(function () {
        if (!NProgress.status) return;
        NProgress.trickle();
        work();
      }, Settings.trickleSpeed);
    };

    if (Settings.trickle) work();
    return this;
  };
  /**
   * Hides the progress bar.
   * This is the *sort of* the same as setting the status to 100%, with the
   * difference being `done()` makes some placebo effect of some realistic motion.
   *
   *     NProgress.done();
   *
   * If `true` is passed, it will show the progress bar even if its hidden.
   *
   *     NProgress.done(true);
   */


  NProgress.done = function (force) {
    if (!force && !NProgress.status) return this;
    return NProgress.inc(0.3 + 0.5 * Math.random()).set(1);
  };
  /**
   * Increments by a random amount.
   */


  NProgress.inc = function (amount) {
    var n = NProgress.status;

    if (!n) {
      return NProgress.start();
    } else {
      if (typeof amount !== 'number') {
        amount = (1 - n) * clamp(Math.random() * n, 0.1, 0.95);
      }

      n = clamp(n + amount, 0, 0.994);
      return NProgress.set(n);
    }
  };

  NProgress.trickle = function () {
    return NProgress.inc(Math.random() * Settings.trickleRate);
  };
  /**
   * (Internal) renders the progress bar markup based on the `template`
   * setting.
   */


  NProgress.render = function (fromStart) {
    if (NProgress.isRendered()) return $("#nprogress");
    $('html').addClass('nprogress-busy');
    var $el = $("<div id='nprogress'>").html(Settings.template);
    var perc = fromStart ? '-100' : toBarPerc(NProgress.status || 0);
    $el.find('[role="bar"]').css({
      transition: 'all 0 linear',
      transform: 'translate3d(' + perc + '%,0,0)'
    });
    if (!Settings.showSpinner) $el.find('[role="spinner"]').remove();
    $el.appendTo(document.body);
    return $el;
  };
  /**
   * Removes the element. Opposite of render().
   */


  NProgress.remove = function () {
    $('html').removeClass('nprogress-busy');
    $('#nprogress').remove();
  };
  /**
   * Checks if the progress bar is rendered.
   */


  NProgress.isRendered = function () {
    return $("#nprogress").length > 0;
  };
  /**
   * Determine which positioning CSS rule to use.
   */


  NProgress.getPositioningCSS = function () {
    // Sniff on document.body.style
    var bodyStyle = document.body.style; // Sniff prefixes

    var vendorPrefix = 'WebkitTransform' in bodyStyle ? 'Webkit' : 'MozTransform' in bodyStyle ? 'Moz' : 'msTransform' in bodyStyle ? 'ms' : 'OTransform' in bodyStyle ? 'O' : '';

    if (vendorPrefix + 'Perspective' in bodyStyle) {
      // Modern browsers with 3D support, e.g. Webkit, IE10
      return 'translate3d';
    } else if (vendorPrefix + 'Transform' in bodyStyle) {
      // Browsers without 3D support, e.g. IE9
      return 'translate';
    } else {
      // Browsers without translate() support, e.g. IE7-8
      return 'margin';
    }
  };
  /**
   * Helpers
   */


  function clamp(n, min, max) {
    if (n < min) return min;
    if (n > max) return max;
    return n;
  }
  /**
   * (Internal) converts a percentage (`0..1`) to a bar translateX
   * percentage (`-100%..0%`).
   */


  function toBarPerc(n) {
    return (-1 + n) * 100;
  }
  /**
   * (Internal) returns the correct CSS for changing the bar's
   * position given an n percentage, and speed and ease from Settings
   */


  function barPositionCSS(n, speed, ease) {
    var barCSS;

    if (Settings.positionUsing === 'translate3d') {
      barCSS = {
        transform: 'translate3d(' + toBarPerc(n) + '%,0,0)'
      };
    } else if (Settings.positionUsing === 'translate') {
      barCSS = {
        transform: 'translate(' + toBarPerc(n) + '%,0)'
      };
    } else {
      barCSS = {
        'margin-left': toBarPerc(n) + '%'
      };
    }

    barCSS.transition = 'all ' + speed + 'ms ' + ease;
    return barCSS;
  }

  return NProgress;
});
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ "./resources/assets/frontend/assets/js/mmenu.min.js":
/*!**********************************************************!*\
  !*** ./resources/assets/frontend/assets/js/mmenu.min.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(jQuery) {var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

;

(function (root, factory) {
  if (true) {
    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [__webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
  } else {}
})(this, function (jQuery) {
  /*
   * jQuery mmenu v6.1.8
   * @requires jQuery 1.7.0 or later
   *
   * mmenu.frebsite.nl
   *
   * Copyright (c) Fred Heusschen
   * www.frebsite.nl
   *
   * License: CC-BY-NC-4.0
   * http://creativecommons.org/licenses/by-nc/4.0/
   */
  !function (t) {
    function e() {
      t[n].glbl || (o = {
        $wndw: t(window),
        $docu: t(document),
        $html: t("html"),
        $body: t("body")
      }, s = {}, a = {}, r = {}, t.each([s, a, r], function (t, e) {
        e.add = function (t) {
          t = t.split(" ");

          for (var n = 0, i = t.length; n < i; n++) {
            e[t[n]] = e.mm(t[n]);
          }
        };
      }), s.mm = function (t) {
        return "mm-" + t;
      }, s.add("wrapper menu panels panel nopanel highest opened subopened navbar hasnavbar title btn prev next listview nolistview inset vertical selected divider spacer hidden fullsubopen noanimation"), s.umm = function (t) {
        return "mm-" == t.slice(0, 3) && (t = t.slice(3)), t;
      }, a.mm = function (t) {
        return "mm-" + t;
      }, a.add("parent child"), r.mm = function (t) {
        return t + ".mm";
      }, r.add("transitionend webkitTransitionEnd click scroll resize keydown mousedown mouseup touchstart touchmove touchend orientationchange"), t[n]._c = s, t[n]._d = a, t[n]._e = r, t[n].glbl = o);
    }

    var n = "mmenu",
        i = "6.1.8";

    if (!(t[n] && t[n].version > i)) {
      t[n] = function (t, e, n) {
        return this.$menu = t, this._api = ["bind", "getInstance", "initPanels", "openPanel", "closePanel", "closeAllPanels", "setSelected"], this.opts = e, this.conf = n, this.vars = {}, this.cbck = {}, this.mtch = {}, "function" == typeof this.___deprecated && this.___deprecated(), this._initAddons(), this._initExtensions(), this._initMenu(), this._initPanels(), this._initOpened(), this._initAnchors(), this._initMatchMedia(), "function" == typeof this.___debug && this.___debug(), this;
      }, t[n].version = i, t[n].addons = {}, t[n].uniqueId = 0, t[n].defaults = {
        extensions: [],
        initMenu: function initMenu() {},
        initPanels: function initPanels() {},
        navbar: {
          add: !0,
          title: "Menu",
          titleLink: "parent"
        },
        onClick: {
          setSelected: !0
        },
        slidingSubmenus: !0
      }, t[n].configuration = {
        classNames: {
          divider: "Divider",
          inset: "Inset",
          nolistview: "NoListview",
          nopanel: "NoPanel",
          panel: "Panel",
          selected: "Selected",
          spacer: "Spacer",
          vertical: "Vertical"
        },
        clone: !1,
        openingInterval: 25,
        panelNodetype: "ul, ol, div",
        transitionDuration: 400
      }, t[n].prototype = {
        getInstance: function getInstance() {
          return this;
        },
        initPanels: function initPanels(t) {
          this._initPanels(t);
        },
        openPanel: function openPanel(e, i) {
          if (this.trigger("openPanel:before", e), e && e.length && (e.is("." + s.panel) || (e = e.closest("." + s.panel)), e.is("." + s.panel))) {
            var r = this;
            if ("boolean" != typeof i && (i = !0), e.hasClass(s.vertical)) e.add(e.parents("." + s.vertical)).removeClass(s.hidden).parent("li").addClass(s.opened), this.openPanel(e.parents("." + s.panel).not("." + s.vertical).first()), this.trigger("openPanel:start", e), this.trigger("openPanel:finish", e);else {
              if (e.hasClass(s.opened)) return;
              var o = this.$pnls.children("." + s.panel),
                  l = o.filter("." + s.opened);
              if (!t[n].support.csstransitions) return l.addClass(s.hidden).removeClass(s.opened), e.removeClass(s.hidden).addClass(s.opened), this.trigger("openPanel:start", e), void this.trigger("openPanel:finish", e);
              o.not(e).removeClass(s.subopened);

              for (var d = e.data(a.parent); d;) {
                d = d.closest("." + s.panel), d.is("." + s.vertical) || d.addClass(s.subopened), d = d.data(a.parent);
              }

              o.removeClass(s.highest).not(l).not(e).addClass(s.hidden), e.removeClass(s.hidden), this.openPanelStart = function () {
                l.removeClass(s.opened), e.addClass(s.opened), e.hasClass(s.subopened) ? (l.addClass(s.highest), e.removeClass(s.subopened)) : (l.addClass(s.subopened), e.addClass(s.highest)), this.trigger("openPanel:start", e);
              }, this.openPanelFinish = function () {
                l.removeClass(s.highest).addClass(s.hidden), e.removeClass(s.highest), this.trigger("openPanel:finish", e);
              }, i && !e.hasClass(s.noanimation) ? setTimeout(function () {
                r.__transitionend(e, function () {
                  r.openPanelFinish.call(r);
                }, r.conf.transitionDuration), r.openPanelStart.call(r);
              }, r.conf.openingInterval) : (this.openPanelStart.call(this), this.openPanelFinish.call(this));
            }
            this.trigger("openPanel:after", e);
          }
        },
        closePanel: function closePanel(t) {
          this.trigger("closePanel:before", t);
          var e = t.parent();
          e.hasClass(s.vertical) && (e.removeClass(s.opened), this.trigger("closePanel", t)), this.trigger("closePanel:after", t);
        },
        closeAllPanels: function closeAllPanels(t) {
          this.trigger("closeAllPanels:before"), this.$pnls.find("." + s.listview).children().removeClass(s.selected).filter("." + s.vertical).removeClass(s.opened);
          var e = this.$pnls.children("." + s.panel),
              n = t && t.length ? t : e.first();
          this.$pnls.children("." + s.panel).not(n).removeClass(s.subopened).removeClass(s.opened).removeClass(s.highest).addClass(s.hidden), this.openPanel(n, !1), this.trigger("closeAllPanels:after");
        },
        togglePanel: function togglePanel(t) {
          var e = t.parent();
          e.hasClass(s.vertical) && this[e.hasClass(s.opened) ? "closePanel" : "openPanel"](t);
        },
        setSelected: function setSelected(t) {
          this.trigger("setSelected:before", t), this.$menu.find("." + s.listview).children("." + s.selected).removeClass(s.selected), t.addClass(s.selected), this.trigger("setSelected:after", t);
        },
        bind: function bind(t, e) {
          this.cbck[t] = this.cbck[t] || [], this.cbck[t].push(e);
        },
        trigger: function trigger() {
          var t = this,
              e = Array.prototype.slice.call(arguments),
              n = e.shift();
          if (this.cbck[n]) for (var i = 0, s = this.cbck[n].length; i < s; i++) {
            this.cbck[n][i].apply(t, e);
          }
        },
        matchMedia: function matchMedia(t, e, n) {
          var i = {
            yes: e,
            no: n
          };
          this.mtch[t] = this.mtch[t] || [], this.mtch[t].push(i);
        },
        _initAddons: function _initAddons() {
          this.trigger("initAddons:before");
          var e;

          for (e in t[n].addons) {
            t[n].addons[e].add.call(this), t[n].addons[e].add = function () {};
          }

          for (e in t[n].addons) {
            t[n].addons[e].setup.call(this);
          }

          this.trigger("initAddons:after");
        },
        _initExtensions: function _initExtensions() {
          this.trigger("initExtensions:before");
          var t = this;
          this.opts.extensions.constructor === Array && (this.opts.extensions = {
            all: this.opts.extensions
          });

          for (var e in this.opts.extensions) {
            this.opts.extensions[e] = this.opts.extensions[e].length ? "mm-" + this.opts.extensions[e].join(" mm-") : "", this.opts.extensions[e] && !function (e) {
              t.matchMedia(e, function () {
                this.$menu.addClass(this.opts.extensions[e]);
              }, function () {
                this.$menu.removeClass(this.opts.extensions[e]);
              });
            }(e);
          }

          this.trigger("initExtensions:after");
        },
        _initMenu: function _initMenu() {
          this.trigger("initMenu:before");
          this.conf.clone && (this.$orig = this.$menu, this.$menu = this.$orig.clone(), this.$menu.add(this.$menu.find("[id]")).filter("[id]").each(function () {
            t(this).attr("id", s.mm(t(this).attr("id")));
          })), this.opts.initMenu.call(this, this.$menu, this.$orig), this.$menu.attr("id", this.$menu.attr("id") || this.__getUniqueId()), this.$pnls = t('<div class="' + s.panels + '" />').append(this.$menu.children(this.conf.panelNodetype)).prependTo(this.$menu);
          var e = [s.menu];
          this.opts.slidingSubmenus || e.push(s.vertical), this.$menu.addClass(e.join(" ")).parent().addClass(s.wrapper), this.trigger("initMenu:after");
        },
        _initPanels: function _initPanels(e) {
          this.trigger("initPanels:before", e), e = e || this.$pnls.children(this.conf.panelNodetype);

          var n = t(),
              i = this,
              a = function a(e) {
            e.filter(this.conf.panelNodetype).each(function () {
              var e = i._initPanel(t(this));

              if (e) {
                i._initNavbar(e), i._initListview(e), n = n.add(e);
                var r = e.children("." + s.listview).children("li").children(i.conf.panelNodeType).add(e.children("." + i.conf.classNames.panel));
                r.length && a.call(i, r);
              }
            });
          };

          a.call(this, e), this.opts.initPanels.call(this, n), this.trigger("initPanels:after", n);
        },
        _initPanel: function _initPanel(t) {
          this.trigger("initPanel:before", t);
          if (t.hasClass(s.panel)) return t;
          if (this.__refactorClass(t, this.conf.classNames.panel, "panel"), this.__refactorClass(t, this.conf.classNames.nopanel, "nopanel"), this.__refactorClass(t, this.conf.classNames.vertical, "vertical"), this.__refactorClass(t, this.conf.classNames.inset, "inset"), t.filter("." + s.inset).addClass(s.nopanel), t.hasClass(s.nopanel)) return !1;
          var e = t.hasClass(s.vertical) || !this.opts.slidingSubmenus;
          t.removeClass(s.vertical);

          var n = t.attr("id") || this.__getUniqueId();

          t.removeAttr("id"), t.is("ul, ol") && (t.wrap("<div />"), t = t.parent()), t.addClass(s.panel + " " + s.hidden).attr("id", n);
          var i = t.parent("li");
          return e ? t.add(i).addClass(s.vertical) : t.appendTo(this.$pnls), i.length && (i.data(a.child, t), t.data(a.parent, i)), this.trigger("initPanel:after", t), t;
        },
        _initNavbar: function _initNavbar(e) {
          if (this.trigger("initNavbar:before", e), !e.children("." + s.navbar).length) {
            var i = e.data(a.parent),
                r = t('<div class="' + s.navbar + '" />'),
                o = t[n].i18n(this.opts.navbar.title),
                l = "";

            if (i && i.length) {
              if (i.hasClass(s.vertical)) return;
              if (i.parent().is("." + s.listview)) var d = i.children("a, span").not("." + s.next);else var d = i.closest("." + s.panel).find('a[href="#' + e.attr("id") + '"]');
              d = d.first(), i = d.closest("." + s.panel);
              var c = i.attr("id");

              switch (o = d.text(), this.opts.navbar.titleLink) {
                case "anchor":
                  l = d.attr("href");
                  break;

                case "parent":
                  l = "#" + c;
              }

              r.append('<a class="' + s.btn + " " + s.prev + '" href="#' + c + '" />');
            } else if (!this.opts.navbar.title) return;

            this.opts.navbar.add && e.addClass(s.hasnavbar), r.append('<a class="' + s.title + '"' + (l.length ? ' href="' + l + '"' : "") + ">" + o + "</a>").prependTo(e), this.trigger("initNavbar:after", e);
          }
        },
        _initListview: function _initListview(e) {
          this.trigger("initListview:before", e);

          var n = this.__childAddBack(e, "ul, ol");

          this.__refactorClass(n, this.conf.classNames.nolistview, "nolistview"), n.filter("." + this.conf.classNames.inset).addClass(s.nolistview);
          var i = n.not("." + s.nolistview).addClass(s.listview).children();
          this.__refactorClass(i, this.conf.classNames.selected, "selected"), this.__refactorClass(i, this.conf.classNames.divider, "divider"), this.__refactorClass(i, this.conf.classNames.spacer, "spacer");
          var r = e.data(a.parent);

          if (r && r.parent().is("." + s.listview) && !r.children("." + s.next).length) {
            var o = r.children("a, span").first(),
                l = t('<a class="' + s.next + '" href="#' + e.attr("id") + '" />').insertBefore(o);
            o.is("span") && l.addClass(s.fullsubopen);
          }

          this.trigger("initListview:after", e);
        },
        _initOpened: function _initOpened() {
          this.trigger("initOpened:before");
          var t = this.$pnls.find("." + s.listview).children("." + s.selected).removeClass(s.selected).last().addClass(s.selected),
              e = t.length ? t.closest("." + s.panel) : this.$pnls.children("." + s.panel).first();
          this.openPanel(e, !1), this.trigger("initOpened:after");
        },
        _initAnchors: function _initAnchors() {
          var e = this;
          o.$body.on(r.click + "-oncanvas", "a[href]", function (i) {
            var a = t(this),
                r = !1,
                o = e.$menu.find(a).length;

            for (var l in t[n].addons) {
              if (t[n].addons[l].clickAnchor.call(e, a, o)) {
                r = !0;
                break;
              }
            }

            var d = a.attr("href");
            if (!r && o && d.length > 1 && "#" == d.slice(0, 1)) try {
              var c = t(d, e.$menu);
              c.is("." + s.panel) && (r = !0, e[a.parent().hasClass(s.vertical) ? "togglePanel" : "openPanel"](c));
            } catch (h) {}

            if (r && i.preventDefault(), !r && o && a.is("." + s.listview + " > li > a") && !a.is('[rel="external"]') && !a.is('[target="_blank"]')) {
              e.__valueOrFn(e.opts.onClick.setSelected, a) && e.setSelected(t(i.target).parent());

              var f = e.__valueOrFn(e.opts.onClick.preventDefault, a, "#" == d.slice(0, 1));

              f && i.preventDefault(), e.__valueOrFn(e.opts.onClick.close, a, f) && e.opts.offCanvas && "function" == typeof e.close && e.close();
            }
          });
        },
        _initMatchMedia: function _initMatchMedia() {
          var t = this;
          this._fireMatchMedia(), o.$wndw.on(r.resize, function (e) {
            t._fireMatchMedia();
          });
        },
        _fireMatchMedia: function _fireMatchMedia() {
          for (var t in this.mtch) {
            for (var e = window.matchMedia && window.matchMedia(t).matches ? "yes" : "no", n = 0; n < this.mtch[t].length; n++) {
              this.mtch[t][n][e].call(this);
            }
          }
        },
        _getOriginalMenuId: function _getOriginalMenuId() {
          var t = this.$menu.attr("id");
          return this.conf.clone && t && t.length && (t = s.umm(t)), t;
        },
        __api: function __api() {
          var e = this,
              n = {};
          return t.each(this._api, function (t) {
            var i = this;

            n[i] = function () {
              var t = e[i].apply(e, arguments);
              return "undefined" == typeof t ? n : t;
            };
          }), n;
        },
        __valueOrFn: function __valueOrFn(t, e, n) {
          return "function" == typeof t ? t.call(e[0]) : "undefined" == typeof t && "undefined" != typeof n ? n : t;
        },
        __refactorClass: function __refactorClass(t, e, n) {
          return t.filter("." + e).removeClass(e).addClass(s[n]);
        },
        __findAddBack: function __findAddBack(t, e) {
          return t.find(e).add(t.filter(e));
        },
        __childAddBack: function __childAddBack(t, e) {
          return t.children(e).add(t.filter(e));
        },
        __filterListItems: function __filterListItems(t) {
          return t.not("." + s.divider).not("." + s.hidden);
        },
        __filterListItemAnchors: function __filterListItemAnchors(t) {
          return this.__filterListItems(t).children("a").not("." + s.next);
        },
        __transitionend: function __transitionend(t, e, n) {
          var i = !1,
              s = function s(n) {
            "undefined" != typeof n && n.target != t[0] || (i || (t.off(r.transitionend), t.off(r.webkitTransitionEnd), e.call(t[0])), i = !0);
          };

          t.on(r.transitionend, s), t.on(r.webkitTransitionEnd, s), setTimeout(s, 1.1 * n);
        },
        __getUniqueId: function __getUniqueId() {
          return s.mm(t[n].uniqueId++);
        }
      }, t.fn[n] = function (i, s) {
        e(), i = t.extend(!0, {}, t[n].defaults, i), s = t.extend(!0, {}, t[n].configuration, s);
        var a = t();
        return this.each(function () {
          var e = t(this);

          if (!e.data(n)) {
            var r = new t[n](e, i, s);
            r.$menu.data(n, r.__api()), a = a.add(r.$menu);
          }
        }), a;
      }, t[n].i18n = function () {
        var e = {};
        return function (n) {
          switch (_typeof(n)) {
            case "object":
              return t.extend(e, n), e;

            case "string":
              return e[n] || n;

            case "undefined":
            default:
              return e;
          }
        };
      }(), t[n].support = {
        touch: "ontouchstart" in window || navigator.msMaxTouchPoints || !1,
        csstransitions: function () {
          return "undefined" == typeof Modernizr || "undefined" == typeof Modernizr.csstransitions || Modernizr.csstransitions;
        }(),
        csstransforms: function () {
          return "undefined" == typeof Modernizr || "undefined" == typeof Modernizr.csstransforms || Modernizr.csstransforms;
        }(),
        csstransforms3d: function () {
          return "undefined" == typeof Modernizr || "undefined" == typeof Modernizr.csstransforms3d || Modernizr.csstransforms3d;
        }()
      };
      var s, a, r, o;
    }
  }(jQuery),
  /*
  * jQuery mmenu offCanvas add-on
  * mmenu.frebsite.nl
  *
  * Copyright (c) Fred Heusschen
  */
  function (t) {
    var e = "mmenu",
        n = "offCanvas";
    t[e].addons[n] = {
      setup: function setup() {
        if (this.opts[n]) {
          var s = this,
              a = this.opts[n],
              o = this.conf[n];
          r = t[e].glbl, this._api = t.merge(this._api, ["open", "close", "setPage"]), "object" != _typeof(a) && (a = {}), "top" != a.position && "bottom" != a.position || (a.zposition = "front"), a = this.opts[n] = t.extend(!0, {}, t[e].defaults[n], a), "string" != typeof o.pageSelector && (o.pageSelector = "> " + o.pageNodetype), this.vars.opened = !1;
          var l = [i.offcanvas];
          "left" != a.position && l.push(i.mm(a.position)), "back" != a.zposition && l.push(i.mm(a.zposition)), t[e].support.csstransforms || l.push(i["no-csstransforms"]), t[e].support.csstransforms3d || l.push(i["no-csstransforms3d"]), this.bind("initMenu:after", function () {
            var t = this;
            this.setPage(r.$page), this._initBlocker(), this["_initWindow_" + n](), this.$menu.addClass(l.join(" ")).parent("." + i.wrapper).removeClass(i.wrapper), this.$menu[o.menuInsertMethod](o.menuInsertSelector);
            var e = window.location.hash;

            if (e) {
              var s = this._getOriginalMenuId();

              s && s == e.slice(1) && setTimeout(function () {
                t.open();
              }, 1e3);
            }
          }), this.bind("initExtensions:after", function () {
            for (var t = [i.mm("widescreen"), i.mm("iconbar")], e = 0; e < t.length; e++) {
              for (var n in this.opts.extensions) {
                if (this.opts.extensions[n].indexOf(t[e]) > -1) {
                  !function (e, n) {
                    s.matchMedia(e, function () {
                      r.$html.addClass(t[n]);
                    }, function () {
                      r.$html.removeClass(t[n]);
                    });
                  }(n, e);
                  break;
                }
              }
            }
          }), this.bind("open:start:sr-aria", function () {
            this.__sr_aria(this.$menu, "hidden", !1);
          }), this.bind("close:finish:sr-aria", function () {
            this.__sr_aria(this.$menu, "hidden", !0);
          }), this.bind("initMenu:after:sr-aria", function () {
            this.__sr_aria(this.$menu, "hidden", !0);
          });
        }
      },
      add: function add() {
        i = t[e]._c, s = t[e]._d, a = t[e]._e, i.add("offcanvas slideout blocking modal background opening blocker page no-csstransforms3d"), s.add("style");
      },
      clickAnchor: function clickAnchor(t, e) {
        var s = this;

        if (this.opts[n]) {
          var a = this._getOriginalMenuId();

          if (a && t.is('[href="#' + a + '"]')) {
            if (e) return !0;
            var o = t.closest("." + i.menu);

            if (o.length) {
              var l = o.data("mmenu");
              if (l && l.close) return l.close(), s.__transitionend(o, function () {
                s.open();
              }, s.conf.transitionDuration), !0;
            }

            return this.open(), !0;
          }

          if (r.$page) return a = r.$page.first().attr("id"), a && t.is('[href="#' + a + '"]') ? (this.close(), !0) : void 0;
        }
      }
    }, t[e].defaults[n] = {
      position: "left",
      zposition: "back",
      blockUI: !0,
      moveBackground: !0
    }, t[e].configuration[n] = {
      pageNodetype: "div",
      pageSelector: null,
      noPageSelector: [],
      wrapPageIfNeeded: !0,
      menuInsertMethod: "prependTo",
      menuInsertSelector: "body"
    }, t[e].prototype.open = function () {
      if (this.trigger("open:before"), !this.vars.opened) {
        var t = this;
        this._openSetup(), setTimeout(function () {
          t._openFinish();
        }, this.conf.openingInterval), this.trigger("open:after");
      }
    }, t[e].prototype._openSetup = function () {
      var e = this,
          o = this.opts[n];
      this.closeAllOthers(), r.$page.each(function () {
        t(this).data(s.style, t(this).attr("style") || "");
      }), r.$wndw.trigger(a.resize + "-" + n, [!0]);
      var l = [i.opened];
      o.blockUI && l.push(i.blocking), "modal" == o.blockUI && l.push(i.modal), o.moveBackground && l.push(i.background), "left" != o.position && l.push(i.mm(this.opts[n].position)), "back" != o.zposition && l.push(i.mm(this.opts[n].zposition)), r.$html.addClass(l.join(" ")), setTimeout(function () {
        e.vars.opened = !0;
      }, this.conf.openingInterval), this.$menu.addClass(i.opened);
    }, t[e].prototype._openFinish = function () {
      var t = this;
      this.__transitionend(r.$page.first(), function () {
        t.trigger("open:finish");
      }, this.conf.transitionDuration), this.trigger("open:start"), r.$html.addClass(i.opening);
    }, t[e].prototype.close = function () {
      if (this.trigger("close:before"), this.vars.opened) {
        var e = this;
        this.__transitionend(r.$page.first(), function () {
          e.$menu.removeClass(i.opened);
          var a = [i.opened, i.blocking, i.modal, i.background, i.mm(e.opts[n].position), i.mm(e.opts[n].zposition)];
          r.$html.removeClass(a.join(" ")), r.$page.each(function () {
            t(this).attr("style", t(this).data(s.style));
          }), e.vars.opened = !1, e.trigger("close:finish");
        }, this.conf.transitionDuration), this.trigger("close:start"), r.$html.removeClass(i.opening), this.trigger("close:after");
      }
    }, t[e].prototype.closeAllOthers = function () {
      r.$body.find("." + i.menu + "." + i.offcanvas).not(this.$menu).each(function () {
        var n = t(this).data(e);
        n && n.close && n.close();
      });
    }, t[e].prototype.setPage = function (e) {
      this.trigger("setPage:before", e);
      var s = this,
          a = this.conf[n];
      e && e.length || (e = r.$body.find(a.pageSelector), a.noPageSelector.length && (e = e.not(a.noPageSelector.join(", "))), e.length > 1 && a.wrapPageIfNeeded && (e = e.wrapAll("<" + this.conf[n].pageNodetype + " />").parent())), e.each(function () {
        t(this).attr("id", t(this).attr("id") || s.__getUniqueId());
      }), e.addClass(i.page + " " + i.slideout), r.$page = e, this.trigger("setPage:after", e);
    }, t[e].prototype["_initWindow_" + n] = function () {
      r.$wndw.off(a.keydown + "-" + n).on(a.keydown + "-" + n, function (t) {
        if (r.$html.hasClass(i.opened) && 9 == t.keyCode) return t.preventDefault(), !1;
      });
      var t = 0;
      r.$wndw.off(a.resize + "-" + n).on(a.resize + "-" + n, function (e, n) {
        if (1 == r.$page.length && (n || r.$html.hasClass(i.opened))) {
          var s = r.$wndw.height();
          (n || s != t) && (t = s, r.$page.css("minHeight", s));
        }
      });
    }, t[e].prototype._initBlocker = function () {
      var e = this;
      this.opts[n].blockUI && (r.$blck || (r.$blck = t('<div id="' + i.blocker + '" class="' + i.slideout + '" />')), r.$blck.appendTo(r.$body).off(a.touchstart + "-" + n + " " + a.touchmove + "-" + n).on(a.touchstart + "-" + n + " " + a.touchmove + "-" + n, function (t) {
        t.preventDefault(), t.stopPropagation(), r.$blck.trigger(a.mousedown + "-" + n);
      }).off(a.mousedown + "-" + n).on(a.mousedown + "-" + n, function (t) {
        t.preventDefault(), r.$html.hasClass(i.modal) || (e.closeAllOthers(), e.close());
      }));
    };
    var i, s, a, r;
  }(jQuery),
  /*
  * jQuery mmenu scrollBugFix add-on
  * mmenu.frebsite.nl
  *
  * Copyright (c) Fred Heusschen
  */
  function (t) {
    var e = "mmenu",
        n = "scrollBugFix";
    t[e].addons[n] = {
      setup: function setup() {
        var s = this.opts[n];
        this.conf[n];
        r = t[e].glbl, t[e].support.touch && this.opts.offCanvas && this.opts.offCanvas.blockUI && ("boolean" == typeof s && (s = {
          fix: s
        }), "object" != _typeof(s) && (s = {}), s = this.opts[n] = t.extend(!0, {}, t[e].defaults[n], s), s.fix && (this.bind("open:start", function () {
          this.$pnls.children("." + i.opened).scrollTop(0);
        }), this.bind("initMenu:after", function () {
          this["_initWindow_" + n]();
        })));
      },
      add: function add() {
        i = t[e]._c, s = t[e]._d, a = t[e]._e;
      },
      clickAnchor: function clickAnchor(t, e) {}
    }, t[e].defaults[n] = {
      fix: !0
    }, t[e].prototype["_initWindow_" + n] = function () {
      var e = this;
      r.$docu.off(a.touchmove + "-" + n).on(a.touchmove + "-" + n, function (t) {
        r.$html.hasClass(i.opened) && t.preventDefault();
      });
      var s = !1;
      r.$body.off(a.touchstart + "-" + n).on(a.touchstart + "-" + n, "." + i.panels + "> ." + i.panel, function (t) {
        r.$html.hasClass(i.opened) && (s || (s = !0, 0 === t.currentTarget.scrollTop ? t.currentTarget.scrollTop = 1 : t.currentTarget.scrollHeight === t.currentTarget.scrollTop + t.currentTarget.offsetHeight && (t.currentTarget.scrollTop -= 1), s = !1));
      }).off(a.touchmove + "-" + n).on(a.touchmove + "-" + n, "." + i.panels + "> ." + i.panel, function (e) {
        r.$html.hasClass(i.opened) && t(this)[0].scrollHeight > t(this).innerHeight() && e.stopPropagation();
      }), r.$wndw.off(a.orientationchange + "-" + n).on(a.orientationchange + "-" + n, function () {
        e.$pnls.children("." + i.opened).scrollTop(0).css({
          "-webkit-overflow-scrolling": "auto"
        }).css({
          "-webkit-overflow-scrolling": "touch"
        });
      });
    };
    var i, s, a, r;
  }(jQuery),
  /*
  * jQuery mmenu screenReader add-on
  * mmenu.frebsite.nl
  *
  * Copyright (c) Fred Heusschen
  */
  function (t) {
    var e = "mmenu",
        n = "screenReader";
    t[e].addons[n] = {
      setup: function setup() {
        var a = this,
            o = this.opts[n],
            l = this.conf[n];
        r = t[e].glbl, "boolean" == typeof o && (o = {
          aria: o,
          text: o
        }), "object" != _typeof(o) && (o = {}), o = this.opts[n] = t.extend(!0, {}, t[e].defaults[n], o), o.aria && (this.bind("initAddons:after", function () {
          this.bind("initMenu:after", function () {
            this.trigger("initMenu:after:sr-aria");
          }), this.bind("initNavbar:after", function () {
            this.trigger("initNavbar:after:sr-aria", arguments[0]);
          }), this.bind("openPanel:start", function () {
            this.trigger("openPanel:start:sr-aria", arguments[0]);
          }), this.bind("close:start", function () {
            this.trigger("close:start:sr-aria");
          }), this.bind("close:finish", function () {
            this.trigger("close:finish:sr-aria");
          }), this.bind("open:start", function () {
            this.trigger("open:start:sr-aria");
          }), this.bind("open:finish", function () {
            this.trigger("open:finish:sr-aria");
          });
        }), this.bind("updateListview", function () {
          this.$pnls.find("." + i.listview).children().each(function () {
            a.__sr_aria(t(this), "hidden", t(this).is("." + i.hidden));
          });
        }), this.bind("openPanel:start", function (t) {
          var e = this.$menu.find("." + i.panel).not(t).not(t.parents("." + i.panel)),
              n = t.add(t.find("." + i.vertical + "." + i.opened).children("." + i.panel));
          this.__sr_aria(e, "hidden", !0), this.__sr_aria(n, "hidden", !1);
        }), this.bind("closePanel", function (t) {
          this.__sr_aria(t, "hidden", !0);
        }), this.bind("initPanels:after", function (e) {
          var n = e.find("." + i.prev + ", ." + i.next).each(function () {
            a.__sr_aria(t(this), "owns", t(this).attr("href").replace("#", ""));
          });

          this.__sr_aria(n, "haspopup", !0);
        }), this.bind("initNavbar:after", function (t) {
          var e = t.children("." + i.navbar);

          this.__sr_aria(e, "hidden", !t.hasClass(i.hasnavbar));
        }), o.text && (this.bind("initlistview:after", function (t) {
          var e = t.find("." + i.listview).find("." + i.fullsubopen).parent().children("span");

          this.__sr_aria(e, "hidden", !0);
        }), "parent" == this.opts.navbar.titleLink && this.bind("initNavbar:after", function (t) {
          var e = t.children("." + i.navbar),
              n = !!e.children("." + i.prev).length;

          this.__sr_aria(e.children("." + i.title), "hidden", n);
        }))), o.text && (this.bind("initAddons:after", function () {
          this.bind("setPage:after", function () {
            this.trigger("setPage:after:sr-text", arguments[0]);
          });
        }), this.bind("initNavbar:after", function (n) {
          var s = n.children("." + i.navbar),
              a = s.children("." + i.title).text(),
              r = t[e].i18n(l.text.closeSubmenu);
          a && (r += " (" + a + ")"), s.children("." + i.prev).html(this.__sr_text(r));
        }), this.bind("initListview:after", function (n) {
          var r = n.data(s.parent);

          if (r && r.length) {
            var o = r.children("." + i.next),
                d = o.nextAll("span, a").first().text(),
                c = t[e].i18n(l.text[o.parent().is("." + i.vertical) ? "toggleSubmenu" : "openSubmenu"]);
            d && (c += " (" + d + ")"), o.html(a.__sr_text(c));
          }
        }));
      },
      add: function add() {
        i = t[e]._c, s = t[e]._d, a = t[e]._e, i.add("sronly");
      },
      clickAnchor: function clickAnchor(t, e) {}
    }, t[e].defaults[n] = {
      aria: !0,
      text: !0
    }, t[e].configuration[n] = {
      text: {
        closeMenu: "Close menu",
        closeSubmenu: "Close submenu",
        openSubmenu: "Open submenu",
        toggleSubmenu: "Toggle submenu"
      }
    }, t[e].prototype.__sr_aria = function (t, e, n) {
      t.prop("aria-" + e, n)[n ? "attr" : "removeAttr"]("aria-" + e, n);
    }, t[e].prototype.__sr_text = function (t) {
      return '<span class="' + i.sronly + '">' + t + "</span>";
    };
    var i, s, a, r;
  }(jQuery);
  return true;
});
/*
 * jQuery mmenu counters add-on
 * mmenu.frebsite.nl
 *
 * Copyright (c) Fred Heusschen
 */


!function (t) {
  var e = "mmenu",
      n = "counters";
  t[e].addons[n] = {
    setup: function setup() {
      var s = this,
          d = this.opts[n];
      this.conf[n];

      if (c = t[e].glbl, "boolean" == typeof d && (d = {
        add: d,
        update: d
      }), "object" != _typeof(d) && (d = {}), d = this.opts[n] = t.extend(!0, {}, t[e].defaults[n], d), this.bind("initListview:after", function (e) {
        this.__refactorClass(t("em", e), this.conf.classNames[n].counter, "counter");
      }), d.add && this.bind("initListview:after", function (e) {
        var n;

        switch (d.addTo) {
          case "panels":
            n = e;
            break;

          default:
            n = e.filter(d.addTo);
        }

        n.each(function () {
          var e = t(this).data(a.parent);
          e && (e.children("em." + i.counter).length || e.prepend(t('<em class="' + i.counter + '" />')));
        });
      }), d.update) {
        var r = function r(e) {
          e = e || this.$pnls.children("." + i.panel), e.each(function () {
            var e = t(this),
                n = e.data(a.parent);

            if (n) {
              var c = n.children("em." + i.counter);
              c.length && (e = e.children("." + i.listview), e.length && c.html(s.__filterListItems(e.children()).length));
            }
          });
        };

        this.bind("initListview:after", r), this.bind("updateListview", r);
      }
    },
    add: function add() {
      i = t[e]._c, a = t[e]._d, s = t[e]._e, i.add("counter search noresultsmsg");
    },
    clickAnchor: function clickAnchor(t, e) {}
  }, t[e].defaults[n] = {
    add: !1,
    addTo: "panels",
    count: !1
  }, t[e].configuration.classNames[n] = {
    counter: "Counter"
  };
  var i, a, s, c;
}(jQuery);
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ "./resources/assets/frontend/assets/js/simplebar.js":
/*!**********************************************************!*\
  !*** ./resources/assets/frontend/assets/js/simplebar.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(global) {var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

/**
 * SimpleBar.js - v3.1.3
 * Scrollbars, simpler.
 * https://grsmto.github.io/simplebar/
 *
 * Made by Adrien Denat from a fork by Jonathan Nicol
 * Under MIT License
 */
(function (global, factory) {
  ( false ? undefined : _typeof(exports)) === 'object' && typeof module !== 'undefined' ? module.exports = factory() :  true ? !(__WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :
				__WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)) : (undefined);
})(this, function () {
  'use strict';

  var _isObject = function _isObject(it) {
    return _typeof(it) === 'object' ? it !== null : typeof it === 'function';
  };

  var _anObject = function _anObject(it) {
    if (!_isObject(it)) throw TypeError(it + ' is not an object!');
    return it;
  }; // 7.2.1 RequireObjectCoercible(argument)


  var _defined = function _defined(it) {
    if (it == undefined) throw TypeError("Can't call method on  " + it);
    return it;
  }; // 7.1.13 ToObject(argument)


  var _toObject = function _toObject(it) {
    return Object(_defined(it));
  }; // 7.1.4 ToInteger


  var ceil = Math.ceil;
  var floor = Math.floor;

  var _toInteger = function _toInteger(it) {
    return isNaN(it = +it) ? 0 : (it > 0 ? floor : ceil)(it);
  }; // 7.1.15 ToLength


  var min = Math.min;

  var _toLength = function _toLength(it) {
    return it > 0 ? min(_toInteger(it), 0x1fffffffffffff) : 0; // pow(2, 53) - 1 == 9007199254740991
  }; // true  -> String#at
  // false -> String#codePointAt


  var _stringAt = function _stringAt(TO_STRING) {
    return function (that, pos) {
      var s = String(_defined(that));

      var i = _toInteger(pos);

      var l = s.length;
      var a, b;
      if (i < 0 || i >= l) return TO_STRING ? '' : undefined;
      a = s.charCodeAt(i);
      return a < 0xd800 || a > 0xdbff || i + 1 === l || (b = s.charCodeAt(i + 1)) < 0xdc00 || b > 0xdfff ? TO_STRING ? s.charAt(i) : a : TO_STRING ? s.slice(i, i + 2) : (a - 0xd800 << 10) + (b - 0xdc00) + 0x10000;
    };
  };

  var at = _stringAt(true); // `AdvanceStringIndex` abstract operation
  // https://tc39.github.io/ecma262/#sec-advancestringindex


  var _advanceStringIndex = function _advanceStringIndex(S, index, unicode) {
    return index + (unicode ? at(S, index).length : 1);
  };

  var toString = {}.toString;

  var _cof = function _cof(it) {
    return toString.call(it).slice(8, -1);
  };

  var commonjsGlobal = typeof window !== 'undefined' ? window : typeof global !== 'undefined' ? global : typeof self !== 'undefined' ? self : {};

  function createCommonjsModule(fn, module) {
    return module = {
      exports: {}
    }, fn(module, module.exports), module.exports;
  }

  var _core = createCommonjsModule(function (module) {
    var core = module.exports = {
      version: '2.6.2'
    };
    if (typeof __e == 'number') __e = core; // eslint-disable-line no-undef
  });

  var _core_1 = _core.version;

  var _global = createCommonjsModule(function (module) {
    // https://github.com/zloirock/core-js/issues/86#issuecomment-115759028
    var global = module.exports = typeof window != 'undefined' && window.Math == Math ? window : typeof self != 'undefined' && self.Math == Math ? self // eslint-disable-next-line no-new-func
    : Function('return this')();
    if (typeof __g == 'number') __g = global; // eslint-disable-line no-undef
  });

  var _library = false;

  var _shared = createCommonjsModule(function (module) {
    var SHARED = '__core-js_shared__';
    var store = _global[SHARED] || (_global[SHARED] = {});
    (module.exports = function (key, value) {
      return store[key] || (store[key] = value !== undefined ? value : {});
    })('versions', []).push({
      version: _core.version,
      mode: _library ? 'pure' : 'global',
      copyright: 'Â© 2019 Denis Pushkarev (zloirock.ru)'
    });
  });

  var id = 0;
  var px = Math.random();

  var _uid = function _uid(key) {
    return 'Symbol('.concat(key === undefined ? '' : key, ')_', (++id + px).toString(36));
  };

  var _wks = createCommonjsModule(function (module) {
    var store = _shared('wks');

    var _Symbol = _global.Symbol;
    var USE_SYMBOL = typeof _Symbol == 'function';

    var $exports = module.exports = function (name) {
      return store[name] || (store[name] = USE_SYMBOL && _Symbol[name] || (USE_SYMBOL ? _Symbol : _uid)('Symbol.' + name));
    };

    $exports.store = store;
  }); // getting tag from 19.1.3.6 Object.prototype.toString()


  var TAG = _wks('toStringTag'); // ES3 wrong here


  var ARG = _cof(function () {
    return arguments;
  }()) == 'Arguments'; // fallback for IE11 Script Access Denied error

  var tryGet = function tryGet(it, key) {
    try {
      return it[key];
    } catch (e) {
      /* empty */
    }
  };

  var _classof = function _classof(it) {
    var O, T, B;
    return it === undefined ? 'Undefined' : it === null ? 'Null' // @@toStringTag case
    : typeof (T = tryGet(O = Object(it), TAG)) == 'string' ? T // builtinTag case
    : ARG ? _cof(O) // ES3 arguments fallback
    : (B = _cof(O)) == 'Object' && typeof O.callee == 'function' ? 'Arguments' : B;
  };

  var builtinExec = RegExp.prototype.exec; // `RegExpExec` abstract operation
  // https://tc39.github.io/ecma262/#sec-regexpexec

  var _regexpExecAbstract = function _regexpExecAbstract(R, S) {
    var exec = R.exec;

    if (typeof exec === 'function') {
      var result = exec.call(R, S);

      if (_typeof(result) !== 'object') {
        throw new TypeError('RegExp exec method returned something other than an Object or null');
      }

      return result;
    }

    if (_classof(R) !== 'RegExp') {
      throw new TypeError('RegExp#exec called on incompatible receiver');
    }

    return builtinExec.call(R, S);
  }; // 21.2.5.3 get RegExp.prototype.flags


  var _flags = function _flags() {
    var that = _anObject(this);

    var result = '';
    if (that.global) result += 'g';
    if (that.ignoreCase) result += 'i';
    if (that.multiline) result += 'm';
    if (that.unicode) result += 'u';
    if (that.sticky) result += 'y';
    return result;
  };

  var nativeExec = RegExp.prototype.exec; // This always refers to the native implementation, because the
  // String#replace polyfill uses ./fix-regexp-well-known-symbol-logic.js,
  // which loads this file before patching the method.

  var nativeReplace = String.prototype.replace;
  var patchedExec = nativeExec;
  var LAST_INDEX = 'lastIndex';

  var UPDATES_LAST_INDEX_WRONG = function () {
    var re1 = /a/,
        re2 = /b*/g;
    nativeExec.call(re1, 'a');
    nativeExec.call(re2, 'a');
    return re1[LAST_INDEX] !== 0 || re2[LAST_INDEX] !== 0;
  }(); // nonparticipating capturing group, copied from es5-shim's String#split patch.


  var NPCG_INCLUDED = /()??/.exec('')[1] !== undefined;
  var PATCH = UPDATES_LAST_INDEX_WRONG || NPCG_INCLUDED;

  if (PATCH) {
    patchedExec = function exec(str) {
      var re = this;
      var lastIndex, reCopy, match, i;

      if (NPCG_INCLUDED) {
        reCopy = new RegExp('^' + re.source + '$(?!\\s)', _flags.call(re));
      }

      if (UPDATES_LAST_INDEX_WRONG) lastIndex = re[LAST_INDEX];
      match = nativeExec.call(re, str);

      if (UPDATES_LAST_INDEX_WRONG && match) {
        re[LAST_INDEX] = re.global ? match.index + match[0].length : lastIndex;
      }

      if (NPCG_INCLUDED && match && match.length > 1) {
        // Fix browsers whose `exec` methods don't consistently return `undefined`
        // for NPCG, like IE8. NOTE: This doesn' work for /(.?)?/
        // eslint-disable-next-line no-loop-func
        nativeReplace.call(match[0], reCopy, function () {
          for (i = 1; i < arguments.length - 2; i++) {
            if (arguments[i] === undefined) match[i] = undefined;
          }
        });
      }

      return match;
    };
  }

  var _regexpExec = patchedExec;

  var _fails = function _fails(exec) {
    try {
      return !!exec();
    } catch (e) {
      return true;
    }
  }; // Thank's IE8 for his funny defineProperty


  var _descriptors = !_fails(function () {
    return Object.defineProperty({}, 'a', {
      get: function get() {
        return 7;
      }
    }).a != 7;
  });

  var document$1 = _global.document; // typeof document.createElement is 'object' in old IE

  var is = _isObject(document$1) && _isObject(document$1.createElement);

  var _domCreate = function _domCreate(it) {
    return is ? document$1.createElement(it) : {};
  };

  var _ie8DomDefine = !_descriptors && !_fails(function () {
    return Object.defineProperty(_domCreate('div'), 'a', {
      get: function get() {
        return 7;
      }
    }).a != 7;
  }); // 7.1.1 ToPrimitive(input [, PreferredType])
  // instead of the ES6 spec version, we didn't implement @@toPrimitive case
  // and the second argument - flag - preferred type is a string


  var _toPrimitive = function _toPrimitive(it, S) {
    if (!_isObject(it)) return it;
    var fn, val;
    if (S && typeof (fn = it.toString) == 'function' && !_isObject(val = fn.call(it))) return val;
    if (typeof (fn = it.valueOf) == 'function' && !_isObject(val = fn.call(it))) return val;
    if (!S && typeof (fn = it.toString) == 'function' && !_isObject(val = fn.call(it))) return val;
    throw TypeError("Can't convert object to primitive value");
  };

  var dP = Object.defineProperty;
  var f = _descriptors ? Object.defineProperty : function defineProperty(O, P, Attributes) {
    _anObject(O);

    P = _toPrimitive(P, true);

    _anObject(Attributes);

    if (_ie8DomDefine) try {
      return dP(O, P, Attributes);
    } catch (e) {
      /* empty */
    }
    if ('get' in Attributes || 'set' in Attributes) throw TypeError('Accessors not supported!');
    if ('value' in Attributes) O[P] = Attributes.value;
    return O;
  };
  var _objectDp = {
    f: f
  };

  var _propertyDesc = function _propertyDesc(bitmap, value) {
    return {
      enumerable: !(bitmap & 1),
      configurable: !(bitmap & 2),
      writable: !(bitmap & 4),
      value: value
    };
  };

  var _hide = _descriptors ? function (object, key, value) {
    return _objectDp.f(object, key, _propertyDesc(1, value));
  } : function (object, key, value) {
    object[key] = value;
    return object;
  };

  var hasOwnProperty = {}.hasOwnProperty;

  var _has = function _has(it, key) {
    return hasOwnProperty.call(it, key);
  };

  var _redefine = createCommonjsModule(function (module) {
    var SRC = _uid('src');

    var TO_STRING = 'toString';
    var $toString = Function[TO_STRING];
    var TPL = ('' + $toString).split(TO_STRING);

    _core.inspectSource = function (it) {
      return $toString.call(it);
    };

    (module.exports = function (O, key, val, safe) {
      var isFunction = typeof val == 'function';
      if (isFunction) _has(val, 'name') || _hide(val, 'name', key);
      if (O[key] === val) return;
      if (isFunction) _has(val, SRC) || _hide(val, SRC, O[key] ? '' + O[key] : TPL.join(String(key)));

      if (O === _global) {
        O[key] = val;
      } else if (!safe) {
        delete O[key];

        _hide(O, key, val);
      } else if (O[key]) {
        O[key] = val;
      } else {
        _hide(O, key, val);
      } // add fake Function#toString for correct work wrapped methods / constructors with methods like LoDash isNative

    })(Function.prototype, TO_STRING, function toString() {
      return typeof this == 'function' && this[SRC] || $toString.call(this);
    });
  });

  var _aFunction = function _aFunction(it) {
    if (typeof it != 'function') throw TypeError(it + ' is not a function!');
    return it;
  }; // optional / simple context binding


  var _ctx = function _ctx(fn, that, length) {
    _aFunction(fn);

    if (that === undefined) return fn;

    switch (length) {
      case 1:
        return function (a) {
          return fn.call(that, a);
        };

      case 2:
        return function (a, b) {
          return fn.call(that, a, b);
        };

      case 3:
        return function (a, b, c) {
          return fn.call(that, a, b, c);
        };
    }

    return function ()
    /* ...args */
    {
      return fn.apply(that, arguments);
    };
  };

  var PROTOTYPE = 'prototype';

  var $export = function $export(type, name, source) {
    var IS_FORCED = type & $export.F;
    var IS_GLOBAL = type & $export.G;
    var IS_STATIC = type & $export.S;
    var IS_PROTO = type & $export.P;
    var IS_BIND = type & $export.B;
    var target = IS_GLOBAL ? _global : IS_STATIC ? _global[name] || (_global[name] = {}) : (_global[name] || {})[PROTOTYPE];
    var exports = IS_GLOBAL ? _core : _core[name] || (_core[name] = {});
    var expProto = exports[PROTOTYPE] || (exports[PROTOTYPE] = {});
    var key, own, out, exp;
    if (IS_GLOBAL) source = name;

    for (key in source) {
      // contains in native
      own = !IS_FORCED && target && target[key] !== undefined; // export native or passed

      out = (own ? target : source)[key]; // bind timers to global for call from export context

      exp = IS_BIND && own ? _ctx(out, _global) : IS_PROTO && typeof out == 'function' ? _ctx(Function.call, out) : out; // extend global

      if (target) _redefine(target, key, out, type & $export.U); // export

      if (exports[key] != out) _hide(exports, key, exp);
      if (IS_PROTO && expProto[key] != out) expProto[key] = out;
    }
  };

  _global.core = _core; // type bitmap

  $export.F = 1; // forced

  $export.G = 2; // global

  $export.S = 4; // static

  $export.P = 8; // proto

  $export.B = 16; // bind

  $export.W = 32; // wrap

  $export.U = 64; // safe

  $export.R = 128; // real proto method for `library`

  var _export = $export;

  _export({
    target: 'RegExp',
    proto: true,
    forced: _regexpExec !== /./.exec
  }, {
    exec: _regexpExec
  });

  var SPECIES = _wks('species');

  var REPLACE_SUPPORTS_NAMED_GROUPS = !_fails(function () {
    // #replace needs built-in support for named groups.
    // #match works fine because it just return the exec results, even if it has
    // a "grops" property.
    var re = /./;

    re.exec = function () {
      var result = [];
      result.groups = {
        a: '7'
      };
      return result;
    };

    return ''.replace(re, '$<a>') !== '7';
  });

  var SPLIT_WORKS_WITH_OVERWRITTEN_EXEC = function () {
    // Chrome 51 has a buggy "split" implementation when RegExp#exec !== nativeExec
    var re = /(?:)/;
    var originalExec = re.exec;

    re.exec = function () {
      return originalExec.apply(this, arguments);
    };

    var result = 'ab'.split(re);
    return result.length === 2 && result[0] === 'a' && result[1] === 'b';
  }();

  var _fixReWks = function _fixReWks(KEY, length, exec) {
    var SYMBOL = _wks(KEY);

    var DELEGATES_TO_SYMBOL = !_fails(function () {
      // String methods call symbol-named RegEp methods
      var O = {};

      O[SYMBOL] = function () {
        return 7;
      };

      return ''[KEY](O) != 7;
    });
    var DELEGATES_TO_EXEC = DELEGATES_TO_SYMBOL ? !_fails(function () {
      // Symbol-named RegExp methods call .exec
      var execCalled = false;
      var re = /a/;

      re.exec = function () {
        execCalled = true;
        return null;
      };

      if (KEY === 'split') {
        // RegExp[@@split] doesn't call the regex's exec method, but first creates
        // a new one. We need to return the patched regex when creating the new one.
        re.constructor = {};

        re.constructor[SPECIES] = function () {
          return re;
        };
      }

      re[SYMBOL]('');
      return !execCalled;
    }) : undefined;

    if (!DELEGATES_TO_SYMBOL || !DELEGATES_TO_EXEC || KEY === 'replace' && !REPLACE_SUPPORTS_NAMED_GROUPS || KEY === 'split' && !SPLIT_WORKS_WITH_OVERWRITTEN_EXEC) {
      var nativeRegExpMethod = /./[SYMBOL];
      var fns = exec(_defined, SYMBOL, ''[KEY], function maybeCallNative(nativeMethod, regexp, str, arg2, forceStringMethod) {
        if (regexp.exec === _regexpExec) {
          if (DELEGATES_TO_SYMBOL && !forceStringMethod) {
            // The native String method already delegates to @@method (this
            // polyfilled function), leasing to infinite recursion.
            // We avoid it by directly calling the native @@method method.
            return {
              done: true,
              value: nativeRegExpMethod.call(regexp, str, arg2)
            };
          }

          return {
            done: true,
            value: nativeMethod.call(str, regexp, arg2)
          };
        }

        return {
          done: false
        };
      });
      var strfn = fns[0];
      var rxfn = fns[1];

      _redefine(String.prototype, KEY, strfn);

      _hide(RegExp.prototype, SYMBOL, length == 2 // 21.2.5.8 RegExp.prototype[@@replace](string, replaceValue)
      // 21.2.5.11 RegExp.prototype[@@split](string, limit)
      ? function (string, arg) {
        return rxfn.call(string, this, arg);
      } // 21.2.5.6 RegExp.prototype[@@match](string)
      // 21.2.5.9 RegExp.prototype[@@search](string)
      : function (string) {
        return rxfn.call(string, this);
      });
    }
  };

  var max = Math.max;
  var min$1 = Math.min;
  var floor$1 = Math.floor;
  var SUBSTITUTION_SYMBOLS = /\$([$&`']|\d\d?|<[^>]*>)/g;
  var SUBSTITUTION_SYMBOLS_NO_NAMED = /\$([$&`']|\d\d?)/g;

  var maybeToString = function maybeToString(it) {
    return it === undefined ? it : String(it);
  }; // @@replace logic


  _fixReWks('replace', 2, function (defined, REPLACE, $replace, maybeCallNative) {
    return [// `String.prototype.replace` method
    // https://tc39.github.io/ecma262/#sec-string.prototype.replace
    function replace(searchValue, replaceValue) {
      var O = defined(this);
      var fn = searchValue == undefined ? undefined : searchValue[REPLACE];
      return fn !== undefined ? fn.call(searchValue, O, replaceValue) : $replace.call(String(O), searchValue, replaceValue);
    }, // `RegExp.prototype[@@replace]` method
    // https://tc39.github.io/ecma262/#sec-regexp.prototype-@@replace
    function (regexp, replaceValue) {
      var res = maybeCallNative($replace, regexp, this, replaceValue);
      if (res.done) return res.value;

      var rx = _anObject(regexp);

      var S = String(this);
      var functionalReplace = typeof replaceValue === 'function';
      if (!functionalReplace) replaceValue = String(replaceValue);
      var global = rx.global;

      if (global) {
        var fullUnicode = rx.unicode;
        rx.lastIndex = 0;
      }

      var results = [];

      while (true) {
        var result = _regexpExecAbstract(rx, S);

        if (result === null) break;
        results.push(result);
        if (!global) break;
        var matchStr = String(result[0]);
        if (matchStr === '') rx.lastIndex = _advanceStringIndex(S, _toLength(rx.lastIndex), fullUnicode);
      }

      var accumulatedResult = '';
      var nextSourcePosition = 0;

      for (var i = 0; i < results.length; i++) {
        result = results[i];
        var matched = String(result[0]);
        var position = max(min$1(_toInteger(result.index), S.length), 0);
        var captures = []; // NOTE: This is equivalent to
        //   captures = result.slice(1).map(maybeToString)
        // but for some reason `nativeSlice.call(result, 1, result.length)` (called in
        // the slice polyfill when slicing native arrays) "doesn't work" in safari 9 and
        // causes a crash (https://pastebin.com/N21QzeQA) when trying to debug it.

        for (var j = 1; j < result.length; j++) {
          captures.push(maybeToString(result[j]));
        }

        var namedCaptures = result.groups;

        if (functionalReplace) {
          var replacerArgs = [matched].concat(captures, position, S);
          if (namedCaptures !== undefined) replacerArgs.push(namedCaptures);
          var replacement = String(replaceValue.apply(undefined, replacerArgs));
        } else {
          replacement = getSubstitution(matched, S, position, captures, namedCaptures, replaceValue);
        }

        if (position >= nextSourcePosition) {
          accumulatedResult += S.slice(nextSourcePosition, position) + replacement;
          nextSourcePosition = position + matched.length;
        }
      }

      return accumulatedResult + S.slice(nextSourcePosition);
    }]; // https://tc39.github.io/ecma262/#sec-getsubstitution

    function getSubstitution(matched, str, position, captures, namedCaptures, replacement) {
      var tailPos = position + matched.length;
      var m = captures.length;
      var symbols = SUBSTITUTION_SYMBOLS_NO_NAMED;

      if (namedCaptures !== undefined) {
        namedCaptures = _toObject(namedCaptures);
        symbols = SUBSTITUTION_SYMBOLS;
      }

      return $replace.call(replacement, symbols, function (match, ch) {
        var capture;

        switch (ch.charAt(0)) {
          case '$':
            return '$';

          case '&':
            return matched;

          case '`':
            return str.slice(0, position);

          case "'":
            return str.slice(tailPos);

          case '<':
            capture = namedCaptures[ch.slice(1, -1)];
            break;

          default:
            // \d\d?
            var n = +ch;
            if (n === 0) return match;

            if (n > m) {
              var f = floor$1(n / 10);
              if (f === 0) return match;
              if (f <= m) return captures[f - 1] === undefined ? ch.charAt(1) : captures[f - 1] + ch.charAt(1);
              return match;
            }

            capture = captures[n - 1];
        }

        return capture === undefined ? '' : capture;
      });
    }
  });

  var dP$1 = _objectDp.f;
  var FProto = Function.prototype;
  var nameRE = /^\s*function ([^ (]*)/;
  var NAME = 'name'; // 19.2.4.2 name

  NAME in FProto || _descriptors && dP$1(FProto, NAME, {
    configurable: true,
    get: function get() {
      try {
        return ('' + this).match(nameRE)[1];
      } catch (e) {
        return '';
      }
    }
  }); // @@match logic

  _fixReWks('match', 1, function (defined, MATCH, $match, maybeCallNative) {
    return [// `String.prototype.match` method
    // https://tc39.github.io/ecma262/#sec-string.prototype.match
    function match(regexp) {
      var O = defined(this);
      var fn = regexp == undefined ? undefined : regexp[MATCH];
      return fn !== undefined ? fn.call(regexp, O) : new RegExp(regexp)[MATCH](String(O));
    }, // `RegExp.prototype[@@match]` method
    // https://tc39.github.io/ecma262/#sec-regexp.prototype-@@match
    function (regexp) {
      var res = maybeCallNative($match, regexp, this);
      if (res.done) return res.value;

      var rx = _anObject(regexp);

      var S = String(this);
      if (!rx.global) return _regexpExecAbstract(rx, S);
      var fullUnicode = rx.unicode;
      rx.lastIndex = 0;
      var A = [];
      var n = 0;
      var result;

      while ((result = _regexpExecAbstract(rx, S)) !== null) {
        var matchStr = String(result[0]);
        A[n] = matchStr;
        if (matchStr === '') rx.lastIndex = _advanceStringIndex(S, _toLength(rx.lastIndex), fullUnicode);
        n++;
      }

      return n === 0 ? null : A;
    }];
  }); // 22.1.3.31 Array.prototype[@@unscopables]


  var UNSCOPABLES = _wks('unscopables');

  var ArrayProto = Array.prototype;
  if (ArrayProto[UNSCOPABLES] == undefined) _hide(ArrayProto, UNSCOPABLES, {});

  var _addToUnscopables = function _addToUnscopables(key) {
    ArrayProto[UNSCOPABLES][key] = true;
  };

  var _iterStep = function _iterStep(done, value) {
    return {
      value: value,
      done: !!done
    };
  };

  var _iterators = {}; // fallback for non-array-like ES3 and non-enumerable old V8 strings
  // eslint-disable-next-line no-prototype-builtins

  var _iobject = Object('z').propertyIsEnumerable(0) ? Object : function (it) {
    return _cof(it) == 'String' ? it.split('') : Object(it);
  }; // to indexed object, toObject with fallback for non-array-like ES3 strings


  var _toIobject = function _toIobject(it) {
    return _iobject(_defined(it));
  };

  var max$1 = Math.max;
  var min$2 = Math.min;

  var _toAbsoluteIndex = function _toAbsoluteIndex(index, length) {
    index = _toInteger(index);
    return index < 0 ? max$1(index + length, 0) : min$2(index, length);
  }; // false -> Array#indexOf
  // true  -> Array#includes


  var _arrayIncludes = function _arrayIncludes(IS_INCLUDES) {
    return function ($this, el, fromIndex) {
      var O = _toIobject($this);

      var length = _toLength(O.length);

      var index = _toAbsoluteIndex(fromIndex, length);

      var value; // Array#includes uses SameValueZero equality algorithm
      // eslint-disable-next-line no-self-compare

      if (IS_INCLUDES && el != el) while (length > index) {
        value = O[index++]; // eslint-disable-next-line no-self-compare

        if (value != value) return true; // Array#indexOf ignores holes, Array#includes - not
      } else for (; length > index; index++) {
        if (IS_INCLUDES || index in O) {
          if (O[index] === el) return IS_INCLUDES || index || 0;
        }
      }
      return !IS_INCLUDES && -1;
    };
  };

  var shared = _shared('keys');

  var _sharedKey = function _sharedKey(key) {
    return shared[key] || (shared[key] = _uid(key));
  };

  var arrayIndexOf = _arrayIncludes(false);

  var IE_PROTO = _sharedKey('IE_PROTO');

  var _objectKeysInternal = function _objectKeysInternal(object, names) {
    var O = _toIobject(object);

    var i = 0;
    var result = [];
    var key;

    for (key in O) {
      if (key != IE_PROTO) _has(O, key) && result.push(key);
    } // Don't enum bug & hidden keys


    while (names.length > i) {
      if (_has(O, key = names[i++])) {
        ~arrayIndexOf(result, key) || result.push(key);
      }
    }

    return result;
  }; // IE 8- don't enum bug keys


  var _enumBugKeys = 'constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf'.split(','); // 19.1.2.14 / 15.2.3.14 Object.keys(O)


  var _objectKeys = Object.keys || function keys(O) {
    return _objectKeysInternal(O, _enumBugKeys);
  };

  var _objectDps = _descriptors ? Object.defineProperties : function defineProperties(O, Properties) {
    _anObject(O);

    var keys = _objectKeys(Properties);

    var length = keys.length;
    var i = 0;
    var P;

    while (length > i) {
      _objectDp.f(O, P = keys[i++], Properties[P]);
    }

    return O;
  };

  var document$2 = _global.document;

  var _html = document$2 && document$2.documentElement; // 19.1.2.2 / 15.2.3.5 Object.create(O [, Properties])


  var IE_PROTO$1 = _sharedKey('IE_PROTO');

  var Empty = function Empty() {
    /* empty */
  };

  var PROTOTYPE$1 = 'prototype'; // Create object with fake `null` prototype: use iframe Object with cleared prototype

  var _createDict = function createDict() {
    // Thrash, waste and sodomy: IE GC bug
    var iframe = _domCreate('iframe');

    var i = _enumBugKeys.length;
    var lt = '<';
    var gt = '>';
    var iframeDocument;
    iframe.style.display = 'none';

    _html.appendChild(iframe);

    iframe.src = 'javascript:'; // eslint-disable-line no-script-url
    // createDict = iframe.contentWindow.Object;
    // html.removeChild(iframe);

    iframeDocument = iframe.contentWindow.document;
    iframeDocument.open();
    iframeDocument.write(lt + 'script' + gt + 'document.F=Object' + lt + '/script' + gt);
    iframeDocument.close();
    _createDict = iframeDocument.F;

    while (i--) {
      delete _createDict[PROTOTYPE$1][_enumBugKeys[i]];
    }

    return _createDict();
  };

  var _objectCreate = Object.create || function create(O, Properties) {
    var result;

    if (O !== null) {
      Empty[PROTOTYPE$1] = _anObject(O);
      result = new Empty();
      Empty[PROTOTYPE$1] = null; // add "__proto__" for Object.getPrototypeOf polyfill

      result[IE_PROTO$1] = O;
    } else result = _createDict();

    return Properties === undefined ? result : _objectDps(result, Properties);
  };

  var def = _objectDp.f;

  var TAG$1 = _wks('toStringTag');

  var _setToStringTag = function _setToStringTag(it, tag, stat) {
    if (it && !_has(it = stat ? it : it.prototype, TAG$1)) def(it, TAG$1, {
      configurable: true,
      value: tag
    });
  };

  var IteratorPrototype = {}; // 25.1.2.1.1 %IteratorPrototype%[@@iterator]()

  _hide(IteratorPrototype, _wks('iterator'), function () {
    return this;
  });

  var _iterCreate = function _iterCreate(Constructor, NAME, next) {
    Constructor.prototype = _objectCreate(IteratorPrototype, {
      next: _propertyDesc(1, next)
    });

    _setToStringTag(Constructor, NAME + ' Iterator');
  }; // 19.1.2.9 / 15.2.3.2 Object.getPrototypeOf(O)


  var IE_PROTO$2 = _sharedKey('IE_PROTO');

  var ObjectProto = Object.prototype;

  var _objectGpo = Object.getPrototypeOf || function (O) {
    O = _toObject(O);
    if (_has(O, IE_PROTO$2)) return O[IE_PROTO$2];

    if (typeof O.constructor == 'function' && O instanceof O.constructor) {
      return O.constructor.prototype;
    }

    return O instanceof Object ? ObjectProto : null;
  };

  var ITERATOR = _wks('iterator');

  var BUGGY = !([].keys && 'next' in [].keys()); // Safari has buggy iterators w/o `next`

  var FF_ITERATOR = '@@iterator';
  var KEYS = 'keys';
  var VALUES = 'values';

  var returnThis = function returnThis() {
    return this;
  };

  var _iterDefine = function _iterDefine(Base, NAME, Constructor, next, DEFAULT, IS_SET, FORCED) {
    _iterCreate(Constructor, NAME, next);

    var getMethod = function getMethod(kind) {
      if (!BUGGY && kind in proto) return proto[kind];

      switch (kind) {
        case KEYS:
          return function keys() {
            return new Constructor(this, kind);
          };

        case VALUES:
          return function values() {
            return new Constructor(this, kind);
          };
      }

      return function entries() {
        return new Constructor(this, kind);
      };
    };

    var TAG = NAME + ' Iterator';
    var DEF_VALUES = DEFAULT == VALUES;
    var VALUES_BUG = false;
    var proto = Base.prototype;
    var $native = proto[ITERATOR] || proto[FF_ITERATOR] || DEFAULT && proto[DEFAULT];
    var $default = $native || getMethod(DEFAULT);
    var $entries = DEFAULT ? !DEF_VALUES ? $default : getMethod('entries') : undefined;
    var $anyNative = NAME == 'Array' ? proto.entries || $native : $native;
    var methods, key, IteratorPrototype; // Fix native

    if ($anyNative) {
      IteratorPrototype = _objectGpo($anyNative.call(new Base()));

      if (IteratorPrototype !== Object.prototype && IteratorPrototype.next) {
        // Set @@toStringTag to native iterators
        _setToStringTag(IteratorPrototype, TAG, true); // fix for some old engines


        if (!_library && typeof IteratorPrototype[ITERATOR] != 'function') _hide(IteratorPrototype, ITERATOR, returnThis);
      }
    } // fix Array#{values, @@iterator}.name in V8 / FF


    if (DEF_VALUES && $native && $native.name !== VALUES) {
      VALUES_BUG = true;

      $default = function values() {
        return $native.call(this);
      };
    } // Define iterator


    if ((!_library || FORCED) && (BUGGY || VALUES_BUG || !proto[ITERATOR])) {
      _hide(proto, ITERATOR, $default);
    } // Plug for library


    _iterators[NAME] = $default;
    _iterators[TAG] = returnThis;

    if (DEFAULT) {
      methods = {
        values: DEF_VALUES ? $default : getMethod(VALUES),
        keys: IS_SET ? $default : getMethod(KEYS),
        entries: $entries
      };
      if (FORCED) for (key in methods) {
        if (!(key in proto)) _redefine(proto, key, methods[key]);
      } else _export(_export.P + _export.F * (BUGGY || VALUES_BUG), NAME, methods);
    }

    return methods;
  }; // 22.1.3.4 Array.prototype.entries()
  // 22.1.3.13 Array.prototype.keys()
  // 22.1.3.29 Array.prototype.values()
  // 22.1.3.30 Array.prototype[@@iterator]()


  var es6_array_iterator = _iterDefine(Array, 'Array', function (iterated, kind) {
    this._t = _toIobject(iterated); // target

    this._i = 0; // next index

    this._k = kind; // kind
    // 22.1.5.2.1 %ArrayIteratorPrototype%.next()
  }, function () {
    var O = this._t;
    var kind = this._k;
    var index = this._i++;

    if (!O || index >= O.length) {
      this._t = undefined;
      return _iterStep(1);
    }

    if (kind == 'keys') return _iterStep(0, index);
    if (kind == 'values') return _iterStep(0, O[index]);
    return _iterStep(0, [index, O[index]]);
  }, 'values'); // argumentsList[@@iterator] is %ArrayProto_values% (9.4.4.6, 9.4.4.7)


  _iterators.Arguments = _iterators.Array;

  _addToUnscopables('keys');

  _addToUnscopables('values');

  _addToUnscopables('entries');

  var ITERATOR$1 = _wks('iterator');

  var TO_STRING_TAG = _wks('toStringTag');

  var ArrayValues = _iterators.Array;
  var DOMIterables = {
    CSSRuleList: true,
    // TODO: Not spec compliant, should be false.
    CSSStyleDeclaration: false,
    CSSValueList: false,
    ClientRectList: false,
    DOMRectList: false,
    DOMStringList: false,
    DOMTokenList: true,
    DataTransferItemList: false,
    FileList: false,
    HTMLAllCollection: false,
    HTMLCollection: false,
    HTMLFormElement: false,
    HTMLSelectElement: false,
    MediaList: true,
    // TODO: Not spec compliant, should be false.
    MimeTypeArray: false,
    NamedNodeMap: false,
    NodeList: true,
    PaintRequestList: false,
    Plugin: false,
    PluginArray: false,
    SVGLengthList: false,
    SVGNumberList: false,
    SVGPathSegList: false,
    SVGPointList: false,
    SVGStringList: false,
    SVGTransformList: false,
    SourceBufferList: false,
    StyleSheetList: true,
    // TODO: Not spec compliant, should be false.
    TextTrackCueList: false,
    TextTrackList: false,
    TouchList: false
  };

  for (var collections = _objectKeys(DOMIterables), i = 0; i < collections.length; i++) {
    var NAME$1 = collections[i];
    var explicit = DOMIterables[NAME$1];
    var Collection = _global[NAME$1];
    var proto = Collection && Collection.prototype;
    var key;

    if (proto) {
      if (!proto[ITERATOR$1]) _hide(proto, ITERATOR$1, ArrayValues);
      if (!proto[TO_STRING_TAG]) _hide(proto, TO_STRING_TAG, NAME$1);
      _iterators[NAME$1] = ArrayValues;
      if (explicit) for (key in es6_array_iterator) {
        if (!proto[key]) _redefine(proto, key, es6_array_iterator[key], true);
      }
    }
  }

  var $at = _stringAt(true); // 21.1.3.27 String.prototype[@@iterator]()


  _iterDefine(String, 'String', function (iterated) {
    this._t = String(iterated); // target

    this._i = 0; // next index
    // 21.1.5.2.1 %StringIteratorPrototype%.next()
  }, function () {
    var O = this._t;
    var index = this._i;
    var point;
    if (index >= O.length) return {
      value: undefined,
      done: true
    };
    point = $at(O, index);
    this._i += point.length;
    return {
      value: point,
      done: false
    };
  }); // call something on iterator step with safe closing on error


  var _iterCall = function _iterCall(iterator, fn, value, entries) {
    try {
      return entries ? fn(_anObject(value)[0], value[1]) : fn(value); // 7.4.6 IteratorClose(iterator, completion)
    } catch (e) {
      var ret = iterator['return'];
      if (ret !== undefined) _anObject(ret.call(iterator));
      throw e;
    }
  }; // check on default Array iterator


  var ITERATOR$2 = _wks('iterator');

  var ArrayProto$1 = Array.prototype;

  var _isArrayIter = function _isArrayIter(it) {
    return it !== undefined && (_iterators.Array === it || ArrayProto$1[ITERATOR$2] === it);
  };

  var _createProperty = function _createProperty(object, index, value) {
    if (index in object) _objectDp.f(object, index, _propertyDesc(0, value));else object[index] = value;
  };

  var ITERATOR$3 = _wks('iterator');

  var core_getIteratorMethod = _core.getIteratorMethod = function (it) {
    if (it != undefined) return it[ITERATOR$3] || it['@@iterator'] || _iterators[_classof(it)];
  };

  var ITERATOR$4 = _wks('iterator');

  var SAFE_CLOSING = false;

  try {
    var riter = [7][ITERATOR$4]();

    riter['return'] = function () {
      SAFE_CLOSING = true;
    };
  } catch (e) {
    /* empty */
  }

  var _iterDetect = function _iterDetect(exec, skipClosing) {
    if (!skipClosing && !SAFE_CLOSING) return false;
    var safe = false;

    try {
      var arr = [7];
      var iter = arr[ITERATOR$4]();

      iter.next = function () {
        return {
          done: safe = true
        };
      };

      arr[ITERATOR$4] = function () {
        return iter;
      };

      exec(arr);
    } catch (e) {
      /* empty */
    }

    return safe;
  };

  _export(_export.S + _export.F * !_iterDetect(function (iter) {}), 'Array', {
    // 22.1.2.1 Array.from(arrayLike, mapfn = undefined, thisArg = undefined)
    from: function from(arrayLike
    /* , mapfn = undefined, thisArg = undefined */
    ) {
      var O = _toObject(arrayLike);

      var C = typeof this == 'function' ? this : Array;
      var aLen = arguments.length;
      var mapfn = aLen > 1 ? arguments[1] : undefined;
      var mapping = mapfn !== undefined;
      var index = 0;
      var iterFn = core_getIteratorMethod(O);
      var length, result, step, iterator;
      if (mapping) mapfn = _ctx(mapfn, aLen > 2 ? arguments[2] : undefined, 2); // if object isn't iterable or it's array with default iterator - use simple case

      if (iterFn != undefined && !(C == Array && _isArrayIter(iterFn))) {
        for (iterator = iterFn.call(O), result = new C(); !(step = iterator.next()).done; index++) {
          _createProperty(result, index, mapping ? _iterCall(iterator, mapfn, [step.value, index], true) : step.value);
        }
      } else {
        length = _toLength(O.length);

        for (result = new C(length); length > index; index++) {
          _createProperty(result, index, mapping ? mapfn(O[index], index) : O[index]);
        }
      }

      result.length = index;
      return result;
    }
  });

  function _classCallCheck(instance, Constructor) {
    if (!(instance instanceof Constructor)) {
      throw new TypeError("Cannot call a class as a function");
    }
  }

  function _defineProperties(target, props) {
    for (var i = 0; i < props.length; i++) {
      var descriptor = props[i];
      descriptor.enumerable = descriptor.enumerable || false;
      descriptor.configurable = true;
      if ("value" in descriptor) descriptor.writable = true;
      Object.defineProperty(target, descriptor.key, descriptor);
    }
  }

  function _createClass(Constructor, protoProps, staticProps) {
    if (protoProps) _defineProperties(Constructor.prototype, protoProps);
    if (staticProps) _defineProperties(Constructor, staticProps);
    return Constructor;
  }

  function _defineProperty(obj, key, value) {
    if (key in obj) {
      Object.defineProperty(obj, key, {
        value: value,
        enumerable: true,
        configurable: true,
        writable: true
      });
    } else {
      obj[key] = value;
    }

    return obj;
  }

  function _objectSpread(target) {
    for (var i = 1; i < arguments.length; i++) {
      var source = arguments[i] != null ? arguments[i] : {};
      var ownKeys = Object.keys(source);

      if (typeof Object.getOwnPropertySymbols === 'function') {
        ownKeys = ownKeys.concat(Object.getOwnPropertySymbols(source).filter(function (sym) {
          return Object.getOwnPropertyDescriptor(source, sym).enumerable;
        }));
      }

      ownKeys.forEach(function (key) {
        _defineProperty(target, key, source[key]);
      });
    }

    return target;
  }

  var scrollbarWidth = createCommonjsModule(function (module, exports) {
    /*! scrollbarWidth.js v0.1.3 | felixexter | MIT | https://github.com/felixexter/scrollbarWidth */
    (function (root, factory) {
      {
        module.exports = factory();
      }
    })(commonjsGlobal, function () {
      function scrollbarWidth() {
        if (typeof document === 'undefined') {
          return 0;
        }

        var body = document.body,
            box = document.createElement('div'),
            boxStyle = box.style,
            width;
        boxStyle.position = 'absolute';
        boxStyle.top = boxStyle.left = '-9999px';
        boxStyle.width = boxStyle.height = '100px';
        boxStyle.overflow = 'scroll';
        body.appendChild(box);
        width = box.offsetWidth - box.clientWidth;
        body.removeChild(box);
        return width;
      }

      return scrollbarWidth;
    });
  });
  /**
   * lodash (Custom Build) <https://lodash.com/>
   * Build: `lodash modularize exports="npm" -o ./`
   * Copyright jQuery Foundation and other contributors <https://jquery.org/>
   * Released under MIT license <https://lodash.com/license>
   * Based on Underscore.js 1.8.3 <http://underscorejs.org/LICENSE>
   * Copyright Jeremy Ashkenas, DocumentCloud and Investigative Reporters & Editors
   */

  /** Used as the `TypeError` message for "Functions" methods. */

  var FUNC_ERROR_TEXT = 'Expected a function';
  /** Used as references for various `Number` constants. */

  var NAN = 0 / 0;
  /** `Object#toString` result references. */

  var symbolTag = '[object Symbol]';
  /** Used to match leading and trailing whitespace. */

  var reTrim = /^\s+|\s+$/g;
  /** Used to detect bad signed hexadecimal string values. */

  var reIsBadHex = /^[-+]0x[0-9a-f]+$/i;
  /** Used to detect binary string values. */

  var reIsBinary = /^0b[01]+$/i;
  /** Used to detect octal string values. */

  var reIsOctal = /^0o[0-7]+$/i;
  /** Built-in method references without a dependency on `root`. */

  var freeParseInt = parseInt;
  /** Detect free variable `global` from Node.js. */

  var freeGlobal = _typeof(commonjsGlobal) == 'object' && commonjsGlobal && commonjsGlobal.Object === Object && commonjsGlobal;
  /** Detect free variable `self`. */

  var freeSelf = (typeof self === "undefined" ? "undefined" : _typeof(self)) == 'object' && self && self.Object === Object && self;
  /** Used as a reference to the global object. */

  var root = freeGlobal || freeSelf || Function('return this')();
  /** Used for built-in method references. */

  var objectProto = Object.prototype;
  /**
   * Used to resolve the
   * [`toStringTag`](http://ecma-international.org/ecma-262/7.0/#sec-object.prototype.tostring)
   * of values.
   */

  var objectToString = objectProto.toString;
  /* Built-in method references for those with the same name as other `lodash` methods. */

  var nativeMax = Math.max,
      nativeMin = Math.min;
  /**
   * Gets the timestamp of the number of milliseconds that have elapsed since
   * the Unix epoch (1 January 1970 00:00:00 UTC).
   *
   * @static
   * @memberOf _
   * @since 2.4.0
   * @category Date
   * @returns {number} Returns the timestamp.
   * @example
   *
   * _.defer(function(stamp) {
   *   console.log(_.now() - stamp);
   * }, _.now());
   * // => Logs the number of milliseconds it took for the deferred invocation.
   */

  var now = function now() {
    return root.Date.now();
  };
  /**
   * Creates a debounced function that delays invoking `func` until after `wait`
   * milliseconds have elapsed since the last time the debounced function was
   * invoked. The debounced function comes with a `cancel` method to cancel
   * delayed `func` invocations and a `flush` method to immediately invoke them.
   * Provide `options` to indicate whether `func` should be invoked on the
   * leading and/or trailing edge of the `wait` timeout. The `func` is invoked
   * with the last arguments provided to the debounced function. Subsequent
   * calls to the debounced function return the result of the last `func`
   * invocation.
   *
   * **Note:** If `leading` and `trailing` options are `true`, `func` is
   * invoked on the trailing edge of the timeout only if the debounced function
   * is invoked more than once during the `wait` timeout.
   *
   * If `wait` is `0` and `leading` is `false`, `func` invocation is deferred
   * until to the next tick, similar to `setTimeout` with a timeout of `0`.
   *
   * See [David Corbacho's article](https://css-tricks.com/debouncing-throttling-explained-examples/)
   * for details over the differences between `_.debounce` and `_.throttle`.
   *
   * @static
   * @memberOf _
   * @since 0.1.0
   * @category Function
   * @param {Function} func The function to debounce.
   * @param {number} [wait=0] The number of milliseconds to delay.
   * @param {Object} [options={}] The options object.
   * @param {boolean} [options.leading=false]
   *  Specify invoking on the leading edge of the timeout.
   * @param {number} [options.maxWait]
   *  The maximum time `func` is allowed to be delayed before it's invoked.
   * @param {boolean} [options.trailing=true]
   *  Specify invoking on the trailing edge of the timeout.
   * @returns {Function} Returns the new debounced function.
   * @example
   *
   * // Avoid costly calculations while the window size is in flux.
   * jQuery(window).on('resize', _.debounce(calculateLayout, 150));
   *
   * // Invoke `sendMail` when clicked, debouncing subsequent calls.
   * jQuery(element).on('click', _.debounce(sendMail, 300, {
   *   'leading': true,
   *   'trailing': false
   * }));
   *
   * // Ensure `batchLog` is invoked once after 1 second of debounced calls.
   * var debounced = _.debounce(batchLog, 250, { 'maxWait': 1000 });
   * var source = new EventSource('/stream');
   * jQuery(source).on('message', debounced);
   *
   * // Cancel the trailing debounced invocation.
   * jQuery(window).on('popstate', debounced.cancel);
   */


  function debounce(func, wait, options) {
    var lastArgs,
        lastThis,
        maxWait,
        result,
        timerId,
        lastCallTime,
        lastInvokeTime = 0,
        leading = false,
        maxing = false,
        trailing = true;

    if (typeof func != 'function') {
      throw new TypeError(FUNC_ERROR_TEXT);
    }

    wait = toNumber(wait) || 0;

    if (isObject(options)) {
      leading = !!options.leading;
      maxing = 'maxWait' in options;
      maxWait = maxing ? nativeMax(toNumber(options.maxWait) || 0, wait) : maxWait;
      trailing = 'trailing' in options ? !!options.trailing : trailing;
    }

    function invokeFunc(time) {
      var args = lastArgs,
          thisArg = lastThis;
      lastArgs = lastThis = undefined;
      lastInvokeTime = time;
      result = func.apply(thisArg, args);
      return result;
    }

    function leadingEdge(time) {
      // Reset any `maxWait` timer.
      lastInvokeTime = time; // Start the timer for the trailing edge.

      timerId = setTimeout(timerExpired, wait); // Invoke the leading edge.

      return leading ? invokeFunc(time) : result;
    }

    function remainingWait(time) {
      var timeSinceLastCall = time - lastCallTime,
          timeSinceLastInvoke = time - lastInvokeTime,
          result = wait - timeSinceLastCall;
      return maxing ? nativeMin(result, maxWait - timeSinceLastInvoke) : result;
    }

    function shouldInvoke(time) {
      var timeSinceLastCall = time - lastCallTime,
          timeSinceLastInvoke = time - lastInvokeTime; // Either this is the first call, activity has stopped and we're at the
      // trailing edge, the system time has gone backwards and we're treating
      // it as the trailing edge, or we've hit the `maxWait` limit.

      return lastCallTime === undefined || timeSinceLastCall >= wait || timeSinceLastCall < 0 || maxing && timeSinceLastInvoke >= maxWait;
    }

    function timerExpired() {
      var time = now();

      if (shouldInvoke(time)) {
        return trailingEdge(time);
      } // Restart the timer.


      timerId = setTimeout(timerExpired, remainingWait(time));
    }

    function trailingEdge(time) {
      timerId = undefined; // Only invoke if we have `lastArgs` which means `func` has been
      // debounced at least once.

      if (trailing && lastArgs) {
        return invokeFunc(time);
      }

      lastArgs = lastThis = undefined;
      return result;
    }

    function cancel() {
      if (timerId !== undefined) {
        clearTimeout(timerId);
      }

      lastInvokeTime = 0;
      lastArgs = lastCallTime = lastThis = timerId = undefined;
    }

    function flush() {
      return timerId === undefined ? result : trailingEdge(now());
    }

    function debounced() {
      var time = now(),
          isInvoking = shouldInvoke(time);
      lastArgs = arguments;
      lastThis = this;
      lastCallTime = time;

      if (isInvoking) {
        if (timerId === undefined) {
          return leadingEdge(lastCallTime);
        }

        if (maxing) {
          // Handle invocations in a tight loop.
          timerId = setTimeout(timerExpired, wait);
          return invokeFunc(lastCallTime);
        }
      }

      if (timerId === undefined) {
        timerId = setTimeout(timerExpired, wait);
      }

      return result;
    }

    debounced.cancel = cancel;
    debounced.flush = flush;
    return debounced;
  }
  /**
   * Creates a throttled function that only invokes `func` at most once per
   * every `wait` milliseconds. The throttled function comes with a `cancel`
   * method to cancel delayed `func` invocations and a `flush` method to
   * immediately invoke them. Provide `options` to indicate whether `func`
   * should be invoked on the leading and/or trailing edge of the `wait`
   * timeout. The `func` is invoked with the last arguments provided to the
   * throttled function. Subsequent calls to the throttled function return the
   * result of the last `func` invocation.
   *
   * **Note:** If `leading` and `trailing` options are `true`, `func` is
   * invoked on the trailing edge of the timeout only if the throttled function
   * is invoked more than once during the `wait` timeout.
   *
   * If `wait` is `0` and `leading` is `false`, `func` invocation is deferred
   * until to the next tick, similar to `setTimeout` with a timeout of `0`.
   *
   * See [David Corbacho's article](https://css-tricks.com/debouncing-throttling-explained-examples/)
   * for details over the differences between `_.throttle` and `_.debounce`.
   *
   * @static
   * @memberOf _
   * @since 0.1.0
   * @category Function
   * @param {Function} func The function to throttle.
   * @param {number} [wait=0] The number of milliseconds to throttle invocations to.
   * @param {Object} [options={}] The options object.
   * @param {boolean} [options.leading=true]
   *  Specify invoking on the leading edge of the timeout.
   * @param {boolean} [options.trailing=true]
   *  Specify invoking on the trailing edge of the timeout.
   * @returns {Function} Returns the new throttled function.
   * @example
   *
   * // Avoid excessively updating the position while scrolling.
   * jQuery(window).on('scroll', _.throttle(updatePosition, 100));
   *
   * // Invoke `renewToken` when the click event is fired, but not more than once every 5 minutes.
   * var throttled = _.throttle(renewToken, 300000, { 'trailing': false });
   * jQuery(element).on('click', throttled);
   *
   * // Cancel the trailing throttled invocation.
   * jQuery(window).on('popstate', throttled.cancel);
   */


  function throttle(func, wait, options) {
    var leading = true,
        trailing = true;

    if (typeof func != 'function') {
      throw new TypeError(FUNC_ERROR_TEXT);
    }

    if (isObject(options)) {
      leading = 'leading' in options ? !!options.leading : leading;
      trailing = 'trailing' in options ? !!options.trailing : trailing;
    }

    return debounce(func, wait, {
      'leading': leading,
      'maxWait': wait,
      'trailing': trailing
    });
  }
  /**
   * Checks if `value` is the
   * [language type](http://www.ecma-international.org/ecma-262/7.0/#sec-ecmascript-language-types)
   * of `Object`. (e.g. arrays, functions, objects, regexes, `new Number(0)`, and `new String('')`)
   *
   * @static
   * @memberOf _
   * @since 0.1.0
   * @category Lang
   * @param {*} value The value to check.
   * @returns {boolean} Returns `true` if `value` is an object, else `false`.
   * @example
   *
   * _.isObject({});
   * // => true
   *
   * _.isObject([1, 2, 3]);
   * // => true
   *
   * _.isObject(_.noop);
   * // => true
   *
   * _.isObject(null);
   * // => false
   */


  function isObject(value) {
    var type = _typeof(value);

    return !!value && (type == 'object' || type == 'function');
  }
  /**
   * Checks if `value` is object-like. A value is object-like if it's not `null`
   * and has a `typeof` result of "object".
   *
   * @static
   * @memberOf _
   * @since 4.0.0
   * @category Lang
   * @param {*} value The value to check.
   * @returns {boolean} Returns `true` if `value` is object-like, else `false`.
   * @example
   *
   * _.isObjectLike({});
   * // => true
   *
   * _.isObjectLike([1, 2, 3]);
   * // => true
   *
   * _.isObjectLike(_.noop);
   * // => false
   *
   * _.isObjectLike(null);
   * // => false
   */


  function isObjectLike(value) {
    return !!value && _typeof(value) == 'object';
  }
  /**
   * Checks if `value` is classified as a `Symbol` primitive or object.
   *
   * @static
   * @memberOf _
   * @since 4.0.0
   * @category Lang
   * @param {*} value The value to check.
   * @returns {boolean} Returns `true` if `value` is a symbol, else `false`.
   * @example
   *
   * _.isSymbol(Symbol.iterator);
   * // => true
   *
   * _.isSymbol('abc');
   * // => false
   */


  function isSymbol(value) {
    return _typeof(value) == 'symbol' || isObjectLike(value) && objectToString.call(value) == symbolTag;
  }
  /**
   * Converts `value` to a number.
   *
   * @static
   * @memberOf _
   * @since 4.0.0
   * @category Lang
   * @param {*} value The value to process.
   * @returns {number} Returns the number.
   * @example
   *
   * _.toNumber(3.2);
   * // => 3.2
   *
   * _.toNumber(Number.MIN_VALUE);
   * // => 5e-324
   *
   * _.toNumber(Infinity);
   * // => Infinity
   *
   * _.toNumber('3.2');
   * // => 3.2
   */


  function toNumber(value) {
    if (typeof value == 'number') {
      return value;
    }

    if (isSymbol(value)) {
      return NAN;
    }

    if (isObject(value)) {
      var other = typeof value.valueOf == 'function' ? value.valueOf() : value;
      value = isObject(other) ? other + '' : other;
    }

    if (typeof value != 'string') {
      return value === 0 ? value : +value;
    }

    value = value.replace(reTrim, '');
    var isBinary = reIsBinary.test(value);
    return isBinary || reIsOctal.test(value) ? freeParseInt(value.slice(2), isBinary ? 2 : 8) : reIsBadHex.test(value) ? NAN : +value;
  }

  var lodash_throttle = throttle;
  /**
   * lodash (Custom Build) <https://lodash.com/>
   * Build: `lodash modularize exports="npm" -o ./`
   * Copyright jQuery Foundation and other contributors <https://jquery.org/>
   * Released under MIT license <https://lodash.com/license>
   * Based on Underscore.js 1.8.3 <http://underscorejs.org/LICENSE>
   * Copyright Jeremy Ashkenas, DocumentCloud and Investigative Reporters & Editors
   */

  /** Used as the `TypeError` message for "Functions" methods. */

  var FUNC_ERROR_TEXT$1 = 'Expected a function';
  /** Used as references for various `Number` constants. */

  var NAN$1 = 0 / 0;
  /** `Object#toString` result references. */

  var symbolTag$1 = '[object Symbol]';
  /** Used to match leading and trailing whitespace. */

  var reTrim$1 = /^\s+|\s+$/g;
  /** Used to detect bad signed hexadecimal string values. */

  var reIsBadHex$1 = /^[-+]0x[0-9a-f]+$/i;
  /** Used to detect binary string values. */

  var reIsBinary$1 = /^0b[01]+$/i;
  /** Used to detect octal string values. */

  var reIsOctal$1 = /^0o[0-7]+$/i;
  /** Built-in method references without a dependency on `root`. */

  var freeParseInt$1 = parseInt;
  /** Detect free variable `global` from Node.js. */

  var freeGlobal$1 = _typeof(commonjsGlobal) == 'object' && commonjsGlobal && commonjsGlobal.Object === Object && commonjsGlobal;
  /** Detect free variable `self`. */

  var freeSelf$1 = (typeof self === "undefined" ? "undefined" : _typeof(self)) == 'object' && self && self.Object === Object && self;
  /** Used as a reference to the global object. */

  var root$1 = freeGlobal$1 || freeSelf$1 || Function('return this')();
  /** Used for built-in method references. */

  var objectProto$1 = Object.prototype;
  /**
   * Used to resolve the
   * [`toStringTag`](http://ecma-international.org/ecma-262/7.0/#sec-object.prototype.tostring)
   * of values.
   */

  var objectToString$1 = objectProto$1.toString;
  /* Built-in method references for those with the same name as other `lodash` methods. */

  var nativeMax$1 = Math.max,
      nativeMin$1 = Math.min;
  /**
   * Gets the timestamp of the number of milliseconds that have elapsed since
   * the Unix epoch (1 January 1970 00:00:00 UTC).
   *
   * @static
   * @memberOf _
   * @since 2.4.0
   * @category Date
   * @returns {number} Returns the timestamp.
   * @example
   *
   * _.defer(function(stamp) {
   *   console.log(_.now() - stamp);
   * }, _.now());
   * // => Logs the number of milliseconds it took for the deferred invocation.
   */

  var now$1 = function now$1() {
    return root$1.Date.now();
  };
  /**
   * Creates a debounced function that delays invoking `func` until after `wait`
   * milliseconds have elapsed since the last time the debounced function was
   * invoked. The debounced function comes with a `cancel` method to cancel
   * delayed `func` invocations and a `flush` method to immediately invoke them.
   * Provide `options` to indicate whether `func` should be invoked on the
   * leading and/or trailing edge of the `wait` timeout. The `func` is invoked
   * with the last arguments provided to the debounced function. Subsequent
   * calls to the debounced function return the result of the last `func`
   * invocation.
   *
   * **Note:** If `leading` and `trailing` options are `true`, `func` is
   * invoked on the trailing edge of the timeout only if the debounced function
   * is invoked more than once during the `wait` timeout.
   *
   * If `wait` is `0` and `leading` is `false`, `func` invocation is deferred
   * until to the next tick, similar to `setTimeout` with a timeout of `0`.
   *
   * See [David Corbacho's article](https://css-tricks.com/debouncing-throttling-explained-examples/)
   * for details over the differences between `_.debounce` and `_.throttle`.
   *
   * @static
   * @memberOf _
   * @since 0.1.0
   * @category Function
   * @param {Function} func The function to debounce.
   * @param {number} [wait=0] The number of milliseconds to delay.
   * @param {Object} [options={}] The options object.
   * @param {boolean} [options.leading=false]
   *  Specify invoking on the leading edge of the timeout.
   * @param {number} [options.maxWait]
   *  The maximum time `func` is allowed to be delayed before it's invoked.
   * @param {boolean} [options.trailing=true]
   *  Specify invoking on the trailing edge of the timeout.
   * @returns {Function} Returns the new debounced function.
   * @example
   *
   * // Avoid costly calculations while the window size is in flux.
   * jQuery(window).on('resize', _.debounce(calculateLayout, 150));
   *
   * // Invoke `sendMail` when clicked, debouncing subsequent calls.
   * jQuery(element).on('click', _.debounce(sendMail, 300, {
   *   'leading': true,
   *   'trailing': false
   * }));
   *
   * // Ensure `batchLog` is invoked once after 1 second of debounced calls.
   * var debounced = _.debounce(batchLog, 250, { 'maxWait': 1000 });
   * var source = new EventSource('/stream');
   * jQuery(source).on('message', debounced);
   *
   * // Cancel the trailing debounced invocation.
   * jQuery(window).on('popstate', debounced.cancel);
   */


  function debounce$1(func, wait, options) {
    var lastArgs,
        lastThis,
        maxWait,
        result,
        timerId,
        lastCallTime,
        lastInvokeTime = 0,
        leading = false,
        maxing = false,
        trailing = true;

    if (typeof func != 'function') {
      throw new TypeError(FUNC_ERROR_TEXT$1);
    }

    wait = toNumber$1(wait) || 0;

    if (isObject$1(options)) {
      leading = !!options.leading;
      maxing = 'maxWait' in options;
      maxWait = maxing ? nativeMax$1(toNumber$1(options.maxWait) || 0, wait) : maxWait;
      trailing = 'trailing' in options ? !!options.trailing : trailing;
    }

    function invokeFunc(time) {
      var args = lastArgs,
          thisArg = lastThis;
      lastArgs = lastThis = undefined;
      lastInvokeTime = time;
      result = func.apply(thisArg, args);
      return result;
    }

    function leadingEdge(time) {
      // Reset any `maxWait` timer.
      lastInvokeTime = time; // Start the timer for the trailing edge.

      timerId = setTimeout(timerExpired, wait); // Invoke the leading edge.

      return leading ? invokeFunc(time) : result;
    }

    function remainingWait(time) {
      var timeSinceLastCall = time - lastCallTime,
          timeSinceLastInvoke = time - lastInvokeTime,
          result = wait - timeSinceLastCall;
      return maxing ? nativeMin$1(result, maxWait - timeSinceLastInvoke) : result;
    }

    function shouldInvoke(time) {
      var timeSinceLastCall = time - lastCallTime,
          timeSinceLastInvoke = time - lastInvokeTime; // Either this is the first call, activity has stopped and we're at the
      // trailing edge, the system time has gone backwards and we're treating
      // it as the trailing edge, or we've hit the `maxWait` limit.

      return lastCallTime === undefined || timeSinceLastCall >= wait || timeSinceLastCall < 0 || maxing && timeSinceLastInvoke >= maxWait;
    }

    function timerExpired() {
      var time = now$1();

      if (shouldInvoke(time)) {
        return trailingEdge(time);
      } // Restart the timer.


      timerId = setTimeout(timerExpired, remainingWait(time));
    }

    function trailingEdge(time) {
      timerId = undefined; // Only invoke if we have `lastArgs` which means `func` has been
      // debounced at least once.

      if (trailing && lastArgs) {
        return invokeFunc(time);
      }

      lastArgs = lastThis = undefined;
      return result;
    }

    function cancel() {
      if (timerId !== undefined) {
        clearTimeout(timerId);
      }

      lastInvokeTime = 0;
      lastArgs = lastCallTime = lastThis = timerId = undefined;
    }

    function flush() {
      return timerId === undefined ? result : trailingEdge(now$1());
    }

    function debounced() {
      var time = now$1(),
          isInvoking = shouldInvoke(time);
      lastArgs = arguments;
      lastThis = this;
      lastCallTime = time;

      if (isInvoking) {
        if (timerId === undefined) {
          return leadingEdge(lastCallTime);
        }

        if (maxing) {
          // Handle invocations in a tight loop.
          timerId = setTimeout(timerExpired, wait);
          return invokeFunc(lastCallTime);
        }
      }

      if (timerId === undefined) {
        timerId = setTimeout(timerExpired, wait);
      }

      return result;
    }

    debounced.cancel = cancel;
    debounced.flush = flush;
    return debounced;
  }
  /**
   * Checks if `value` is the
   * [language type](http://www.ecma-international.org/ecma-262/7.0/#sec-ecmascript-language-types)
   * of `Object`. (e.g. arrays, functions, objects, regexes, `new Number(0)`, and `new String('')`)
   *
   * @static
   * @memberOf _
   * @since 0.1.0
   * @category Lang
   * @param {*} value The value to check.
   * @returns {boolean} Returns `true` if `value` is an object, else `false`.
   * @example
   *
   * _.isObject({});
   * // => true
   *
   * _.isObject([1, 2, 3]);
   * // => true
   *
   * _.isObject(_.noop);
   * // => true
   *
   * _.isObject(null);
   * // => false
   */


  function isObject$1(value) {
    var type = _typeof(value);

    return !!value && (type == 'object' || type == 'function');
  }
  /**
   * Checks if `value` is object-like. A value is object-like if it's not `null`
   * and has a `typeof` result of "object".
   *
   * @static
   * @memberOf _
   * @since 4.0.0
   * @category Lang
   * @param {*} value The value to check.
   * @returns {boolean} Returns `true` if `value` is object-like, else `false`.
   * @example
   *
   * _.isObjectLike({});
   * // => true
   *
   * _.isObjectLike([1, 2, 3]);
   * // => true
   *
   * _.isObjectLike(_.noop);
   * // => false
   *
   * _.isObjectLike(null);
   * // => false
   */


  function isObjectLike$1(value) {
    return !!value && _typeof(value) == 'object';
  }
  /**
   * Checks if `value` is classified as a `Symbol` primitive or object.
   *
   * @static
   * @memberOf _
   * @since 4.0.0
   * @category Lang
   * @param {*} value The value to check.
   * @returns {boolean} Returns `true` if `value` is a symbol, else `false`.
   * @example
   *
   * _.isSymbol(Symbol.iterator);
   * // => true
   *
   * _.isSymbol('abc');
   * // => false
   */


  function isSymbol$1(value) {
    return _typeof(value) == 'symbol' || isObjectLike$1(value) && objectToString$1.call(value) == symbolTag$1;
  }
  /**
   * Converts `value` to a number.
   *
   * @static
   * @memberOf _
   * @since 4.0.0
   * @category Lang
   * @param {*} value The value to process.
   * @returns {number} Returns the number.
   * @example
   *
   * _.toNumber(3.2);
   * // => 3.2
   *
   * _.toNumber(Number.MIN_VALUE);
   * // => 5e-324
   *
   * _.toNumber(Infinity);
   * // => Infinity
   *
   * _.toNumber('3.2');
   * // => 3.2
   */


  function toNumber$1(value) {
    if (typeof value == 'number') {
      return value;
    }

    if (isSymbol$1(value)) {
      return NAN$1;
    }

    if (isObject$1(value)) {
      var other = typeof value.valueOf == 'function' ? value.valueOf() : value;
      value = isObject$1(other) ? other + '' : other;
    }

    if (typeof value != 'string') {
      return value === 0 ? value : +value;
    }

    value = value.replace(reTrim$1, '');
    var isBinary = reIsBinary$1.test(value);
    return isBinary || reIsOctal$1.test(value) ? freeParseInt$1(value.slice(2), isBinary ? 2 : 8) : reIsBadHex$1.test(value) ? NAN$1 : +value;
  }

  var lodash_debounce = debounce$1;
  /**
   * lodash (Custom Build) <https://lodash.com/>
   * Build: `lodash modularize exports="npm" -o ./`
   * Copyright jQuery Foundation and other contributors <https://jquery.org/>
   * Released under MIT license <https://lodash.com/license>
   * Based on Underscore.js 1.8.3 <http://underscorejs.org/LICENSE>
   * Copyright Jeremy Ashkenas, DocumentCloud and Investigative Reporters & Editors
   */

  /** Used as the `TypeError` message for "Functions" methods. */

  var FUNC_ERROR_TEXT$2 = 'Expected a function';
  /** Used to stand-in for `undefined` hash values. */

  var HASH_UNDEFINED = '__lodash_hash_undefined__';
  /** `Object#toString` result references. */

  var funcTag = '[object Function]',
      genTag = '[object GeneratorFunction]';
  /**
   * Used to match `RegExp`
   * [syntax characters](http://ecma-international.org/ecma-262/7.0/#sec-patterns).
   */

  var reRegExpChar = /[\\^$.*+?()[\]{}|]/g;
  /** Used to detect host constructors (Safari). */

  var reIsHostCtor = /^\[object .+?Constructor\]$/;
  /** Detect free variable `global` from Node.js. */

  var freeGlobal$2 = _typeof(commonjsGlobal) == 'object' && commonjsGlobal && commonjsGlobal.Object === Object && commonjsGlobal;
  /** Detect free variable `self`. */

  var freeSelf$2 = (typeof self === "undefined" ? "undefined" : _typeof(self)) == 'object' && self && self.Object === Object && self;
  /** Used as a reference to the global object. */

  var root$2 = freeGlobal$2 || freeSelf$2 || Function('return this')();
  /**
   * Gets the value at `key` of `object`.
   *
   * @private
   * @param {Object} [object] The object to query.
   * @param {string} key The key of the property to get.
   * @returns {*} Returns the property value.
   */

  function getValue(object, key) {
    return object == null ? undefined : object[key];
  }
  /**
   * Checks if `value` is a host object in IE < 9.
   *
   * @private
   * @param {*} value The value to check.
   * @returns {boolean} Returns `true` if `value` is a host object, else `false`.
   */


  function isHostObject(value) {
    // Many host objects are `Object` objects that can coerce to strings
    // despite having improperly defined `toString` methods.
    var result = false;

    if (value != null && typeof value.toString != 'function') {
      try {
        result = !!(value + '');
      } catch (e) {}
    }

    return result;
  }
  /** Used for built-in method references. */


  var arrayProto = Array.prototype,
      funcProto = Function.prototype,
      objectProto$2 = Object.prototype;
  /** Used to detect overreaching core-js shims. */

  var coreJsData = root$2['__core-js_shared__'];
  /** Used to detect methods masquerading as native. */

  var maskSrcKey = function () {
    var uid = /[^.]+$/.exec(coreJsData && coreJsData.keys && coreJsData.keys.IE_PROTO || '');
    return uid ? 'Symbol(src)_1.' + uid : '';
  }();
  /** Used to resolve the decompiled source of functions. */


  var funcToString = funcProto.toString;
  /** Used to check objects for own properties. */

  var hasOwnProperty$1 = objectProto$2.hasOwnProperty;
  /**
   * Used to resolve the
   * [`toStringTag`](http://ecma-international.org/ecma-262/7.0/#sec-object.prototype.tostring)
   * of values.
   */

  var objectToString$2 = objectProto$2.toString;
  /** Used to detect if a method is native. */

  var reIsNative = RegExp('^' + funcToString.call(hasOwnProperty$1).replace(reRegExpChar, '\\$&').replace(/hasOwnProperty|(function).*?(?=\\\()| for .+?(?=\\\])/g, '$1.*?') + '$');
  /** Built-in value references. */

  var splice = arrayProto.splice;
  /* Built-in method references that are verified to be native. */

  var Map$1 = getNative(root$2, 'Map'),
      nativeCreate = getNative(Object, 'create');
  /**
   * Creates a hash object.
   *
   * @private
   * @constructor
   * @param {Array} [entries] The key-value pairs to cache.
   */

  function Hash(entries) {
    var index = -1,
        length = entries ? entries.length : 0;
    this.clear();

    while (++index < length) {
      var entry = entries[index];
      this.set(entry[0], entry[1]);
    }
  }
  /**
   * Removes all key-value entries from the hash.
   *
   * @private
   * @name clear
   * @memberOf Hash
   */


  function hashClear() {
    this.__data__ = nativeCreate ? nativeCreate(null) : {};
  }
  /**
   * Removes `key` and its value from the hash.
   *
   * @private
   * @name delete
   * @memberOf Hash
   * @param {Object} hash The hash to modify.
   * @param {string} key The key of the value to remove.
   * @returns {boolean} Returns `true` if the entry was removed, else `false`.
   */


  function hashDelete(key) {
    return this.has(key) && delete this.__data__[key];
  }
  /**
   * Gets the hash value for `key`.
   *
   * @private
   * @name get
   * @memberOf Hash
   * @param {string} key The key of the value to get.
   * @returns {*} Returns the entry value.
   */


  function hashGet(key) {
    var data = this.__data__;

    if (nativeCreate) {
      var result = data[key];
      return result === HASH_UNDEFINED ? undefined : result;
    }

    return hasOwnProperty$1.call(data, key) ? data[key] : undefined;
  }
  /**
   * Checks if a hash value for `key` exists.
   *
   * @private
   * @name has
   * @memberOf Hash
   * @param {string} key The key of the entry to check.
   * @returns {boolean} Returns `true` if an entry for `key` exists, else `false`.
   */


  function hashHas(key) {
    var data = this.__data__;
    return nativeCreate ? data[key] !== undefined : hasOwnProperty$1.call(data, key);
  }
  /**
   * Sets the hash `key` to `value`.
   *
   * @private
   * @name set
   * @memberOf Hash
   * @param {string} key The key of the value to set.
   * @param {*} value The value to set.
   * @returns {Object} Returns the hash instance.
   */


  function hashSet(key, value) {
    var data = this.__data__;
    data[key] = nativeCreate && value === undefined ? HASH_UNDEFINED : value;
    return this;
  } // Add methods to `Hash`.


  Hash.prototype.clear = hashClear;
  Hash.prototype['delete'] = hashDelete;
  Hash.prototype.get = hashGet;
  Hash.prototype.has = hashHas;
  Hash.prototype.set = hashSet;
  /**
   * Creates an list cache object.
   *
   * @private
   * @constructor
   * @param {Array} [entries] The key-value pairs to cache.
   */

  function ListCache(entries) {
    var index = -1,
        length = entries ? entries.length : 0;
    this.clear();

    while (++index < length) {
      var entry = entries[index];
      this.set(entry[0], entry[1]);
    }
  }
  /**
   * Removes all key-value entries from the list cache.
   *
   * @private
   * @name clear
   * @memberOf ListCache
   */


  function listCacheClear() {
    this.__data__ = [];
  }
  /**
   * Removes `key` and its value from the list cache.
   *
   * @private
   * @name delete
   * @memberOf ListCache
   * @param {string} key The key of the value to remove.
   * @returns {boolean} Returns `true` if the entry was removed, else `false`.
   */


  function listCacheDelete(key) {
    var data = this.__data__,
        index = assocIndexOf(data, key);

    if (index < 0) {
      return false;
    }

    var lastIndex = data.length - 1;

    if (index == lastIndex) {
      data.pop();
    } else {
      splice.call(data, index, 1);
    }

    return true;
  }
  /**
   * Gets the list cache value for `key`.
   *
   * @private
   * @name get
   * @memberOf ListCache
   * @param {string} key The key of the value to get.
   * @returns {*} Returns the entry value.
   */


  function listCacheGet(key) {
    var data = this.__data__,
        index = assocIndexOf(data, key);
    return index < 0 ? undefined : data[index][1];
  }
  /**
   * Checks if a list cache value for `key` exists.
   *
   * @private
   * @name has
   * @memberOf ListCache
   * @param {string} key The key of the entry to check.
   * @returns {boolean} Returns `true` if an entry for `key` exists, else `false`.
   */


  function listCacheHas(key) {
    return assocIndexOf(this.__data__, key) > -1;
  }
  /**
   * Sets the list cache `key` to `value`.
   *
   * @private
   * @name set
   * @memberOf ListCache
   * @param {string} key The key of the value to set.
   * @param {*} value The value to set.
   * @returns {Object} Returns the list cache instance.
   */


  function listCacheSet(key, value) {
    var data = this.__data__,
        index = assocIndexOf(data, key);

    if (index < 0) {
      data.push([key, value]);
    } else {
      data[index][1] = value;
    }

    return this;
  } // Add methods to `ListCache`.


  ListCache.prototype.clear = listCacheClear;
  ListCache.prototype['delete'] = listCacheDelete;
  ListCache.prototype.get = listCacheGet;
  ListCache.prototype.has = listCacheHas;
  ListCache.prototype.set = listCacheSet;
  /**
   * Creates a map cache object to store key-value pairs.
   *
   * @private
   * @constructor
   * @param {Array} [entries] The key-value pairs to cache.
   */

  function MapCache(entries) {
    var index = -1,
        length = entries ? entries.length : 0;
    this.clear();

    while (++index < length) {
      var entry = entries[index];
      this.set(entry[0], entry[1]);
    }
  }
  /**
   * Removes all key-value entries from the map.
   *
   * @private
   * @name clear
   * @memberOf MapCache
   */


  function mapCacheClear() {
    this.__data__ = {
      'hash': new Hash(),
      'map': new (Map$1 || ListCache)(),
      'string': new Hash()
    };
  }
  /**
   * Removes `key` and its value from the map.
   *
   * @private
   * @name delete
   * @memberOf MapCache
   * @param {string} key The key of the value to remove.
   * @returns {boolean} Returns `true` if the entry was removed, else `false`.
   */


  function mapCacheDelete(key) {
    return getMapData(this, key)['delete'](key);
  }
  /**
   * Gets the map value for `key`.
   *
   * @private
   * @name get
   * @memberOf MapCache
   * @param {string} key The key of the value to get.
   * @returns {*} Returns the entry value.
   */


  function mapCacheGet(key) {
    return getMapData(this, key).get(key);
  }
  /**
   * Checks if a map value for `key` exists.
   *
   * @private
   * @name has
   * @memberOf MapCache
   * @param {string} key The key of the entry to check.
   * @returns {boolean} Returns `true` if an entry for `key` exists, else `false`.
   */


  function mapCacheHas(key) {
    return getMapData(this, key).has(key);
  }
  /**
   * Sets the map `key` to `value`.
   *
   * @private
   * @name set
   * @memberOf MapCache
   * @param {string} key The key of the value to set.
   * @param {*} value The value to set.
   * @returns {Object} Returns the map cache instance.
   */


  function mapCacheSet(key, value) {
    getMapData(this, key).set(key, value);
    return this;
  } // Add methods to `MapCache`.


  MapCache.prototype.clear = mapCacheClear;
  MapCache.prototype['delete'] = mapCacheDelete;
  MapCache.prototype.get = mapCacheGet;
  MapCache.prototype.has = mapCacheHas;
  MapCache.prototype.set = mapCacheSet;
  /**
   * Gets the index at which the `key` is found in `array` of key-value pairs.
   *
   * @private
   * @param {Array} array The array to inspect.
   * @param {*} key The key to search for.
   * @returns {number} Returns the index of the matched value, else `-1`.
   */

  function assocIndexOf(array, key) {
    var length = array.length;

    while (length--) {
      if (eq(array[length][0], key)) {
        return length;
      }
    }

    return -1;
  }
  /**
   * The base implementation of `_.isNative` without bad shim checks.
   *
   * @private
   * @param {*} value The value to check.
   * @returns {boolean} Returns `true` if `value` is a native function,
   *  else `false`.
   */


  function baseIsNative(value) {
    if (!isObject$2(value) || isMasked(value)) {
      return false;
    }

    var pattern = isFunction(value) || isHostObject(value) ? reIsNative : reIsHostCtor;
    return pattern.test(toSource(value));
  }
  /**
   * Gets the data for `map`.
   *
   * @private
   * @param {Object} map The map to query.
   * @param {string} key The reference key.
   * @returns {*} Returns the map data.
   */


  function getMapData(map, key) {
    var data = map.__data__;
    return isKeyable(key) ? data[typeof key == 'string' ? 'string' : 'hash'] : data.map;
  }
  /**
   * Gets the native function at `key` of `object`.
   *
   * @private
   * @param {Object} object The object to query.
   * @param {string} key The key of the method to get.
   * @returns {*} Returns the function if it's native, else `undefined`.
   */


  function getNative(object, key) {
    var value = getValue(object, key);
    return baseIsNative(value) ? value : undefined;
  }
  /**
   * Checks if `value` is suitable for use as unique object key.
   *
   * @private
   * @param {*} value The value to check.
   * @returns {boolean} Returns `true` if `value` is suitable, else `false`.
   */


  function isKeyable(value) {
    var type = _typeof(value);

    return type == 'string' || type == 'number' || type == 'symbol' || type == 'boolean' ? value !== '__proto__' : value === null;
  }
  /**
   * Checks if `func` has its source masked.
   *
   * @private
   * @param {Function} func The function to check.
   * @returns {boolean} Returns `true` if `func` is masked, else `false`.
   */


  function isMasked(func) {
    return !!maskSrcKey && maskSrcKey in func;
  }
  /**
   * Converts `func` to its source code.
   *
   * @private
   * @param {Function} func The function to process.
   * @returns {string} Returns the source code.
   */


  function toSource(func) {
    if (func != null) {
      try {
        return funcToString.call(func);
      } catch (e) {}

      try {
        return func + '';
      } catch (e) {}
    }

    return '';
  }
  /**
   * Creates a function that memoizes the result of `func`. If `resolver` is
   * provided, it determines the cache key for storing the result based on the
   * arguments provided to the memoized function. By default, the first argument
   * provided to the memoized function is used as the map cache key. The `func`
   * is invoked with the `this` binding of the memoized function.
   *
   * **Note:** The cache is exposed as the `cache` property on the memoized
   * function. Its creation may be customized by replacing the `_.memoize.Cache`
   * constructor with one whose instances implement the
   * [`Map`](http://ecma-international.org/ecma-262/7.0/#sec-properties-of-the-map-prototype-object)
   * method interface of `delete`, `get`, `has`, and `set`.
   *
   * @static
   * @memberOf _
   * @since 0.1.0
   * @category Function
   * @param {Function} func The function to have its output memoized.
   * @param {Function} [resolver] The function to resolve the cache key.
   * @returns {Function} Returns the new memoized function.
   * @example
   *
   * var object = { 'a': 1, 'b': 2 };
   * var other = { 'c': 3, 'd': 4 };
   *
   * var values = _.memoize(_.values);
   * values(object);
   * // => [1, 2]
   *
   * values(other);
   * // => [3, 4]
   *
   * object.a = 2;
   * values(object);
   * // => [1, 2]
   *
   * // Modify the result cache.
   * values.cache.set(object, ['a', 'b']);
   * values(object);
   * // => ['a', 'b']
   *
   * // Replace `_.memoize.Cache`.
   * _.memoize.Cache = WeakMap;
   */


  function memoize(func, resolver) {
    if (typeof func != 'function' || resolver && typeof resolver != 'function') {
      throw new TypeError(FUNC_ERROR_TEXT$2);
    }

    var memoized = function memoized() {
      var args = arguments,
          key = resolver ? resolver.apply(this, args) : args[0],
          cache = memoized.cache;

      if (cache.has(key)) {
        return cache.get(key);
      }

      var result = func.apply(this, args);
      memoized.cache = cache.set(key, result);
      return result;
    };

    memoized.cache = new (memoize.Cache || MapCache)();
    return memoized;
  } // Assign cache to `_.memoize`.


  memoize.Cache = MapCache;
  /**
   * Performs a
   * [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
   * comparison between two values to determine if they are equivalent.
   *
   * @static
   * @memberOf _
   * @since 4.0.0
   * @category Lang
   * @param {*} value The value to compare.
   * @param {*} other The other value to compare.
   * @returns {boolean} Returns `true` if the values are equivalent, else `false`.
   * @example
   *
   * var object = { 'a': 1 };
   * var other = { 'a': 1 };
   *
   * _.eq(object, object);
   * // => true
   *
   * _.eq(object, other);
   * // => false
   *
   * _.eq('a', 'a');
   * // => true
   *
   * _.eq('a', Object('a'));
   * // => false
   *
   * _.eq(NaN, NaN);
   * // => true
   */

  function eq(value, other) {
    return value === other || value !== value && other !== other;
  }
  /**
   * Checks if `value` is classified as a `Function` object.
   *
   * @static
   * @memberOf _
   * @since 0.1.0
   * @category Lang
   * @param {*} value The value to check.
   * @returns {boolean} Returns `true` if `value` is a function, else `false`.
   * @example
   *
   * _.isFunction(_);
   * // => true
   *
   * _.isFunction(/abc/);
   * // => false
   */


  function isFunction(value) {
    // The use of `Object#toString` avoids issues with the `typeof` operator
    // in Safari 8-9 which returns 'object' for typed array and other constructors.
    var tag = isObject$2(value) ? objectToString$2.call(value) : '';
    return tag == funcTag || tag == genTag;
  }
  /**
   * Checks if `value` is the
   * [language type](http://www.ecma-international.org/ecma-262/7.0/#sec-ecmascript-language-types)
   * of `Object`. (e.g. arrays, functions, objects, regexes, `new Number(0)`, and `new String('')`)
   *
   * @static
   * @memberOf _
   * @since 0.1.0
   * @category Lang
   * @param {*} value The value to check.
   * @returns {boolean} Returns `true` if `value` is an object, else `false`.
   * @example
   *
   * _.isObject({});
   * // => true
   *
   * _.isObject([1, 2, 3]);
   * // => true
   *
   * _.isObject(_.noop);
   * // => true
   *
   * _.isObject(null);
   * // => false
   */


  function isObject$2(value) {
    var type = _typeof(value);

    return !!value && (type == 'object' || type == 'function');
  }

  var lodash_memoize = memoize;
  /**
   * A collection of shims that provide minimal functionality of the ES6 collections.
   *
   * These implementations are not meant to be used outside of the ResizeObserver
   * modules as they cover only a limited range of use cases.
   */

  /* eslint-disable require-jsdoc, valid-jsdoc */

  var MapShim = function () {
    if (typeof Map !== 'undefined') {
      return Map;
    }
    /**
     * Returns index in provided array that matches the specified key.
     *
     * @param {Array<Array>} arr
     * @param {*} key
     * @returns {number}
     */


    function getIndex(arr, key) {
      var result = -1;
      arr.some(function (entry, index) {
        if (entry[0] === key) {
          result = index;
          return true;
        }

        return false;
      });
      return result;
    }

    return (
      /** @class */
      function () {
        function class_1() {
          this.__entries__ = [];
        }

        Object.defineProperty(class_1.prototype, "size", {
          /**
           * @returns {boolean}
           */
          get: function get() {
            return this.__entries__.length;
          },
          enumerable: true,
          configurable: true
        });
        /**
         * @param {*} key
         * @returns {*}
         */

        class_1.prototype.get = function (key) {
          var index = getIndex(this.__entries__, key);
          var entry = this.__entries__[index];
          return entry && entry[1];
        };
        /**
         * @param {*} key
         * @param {*} value
         * @returns {void}
         */


        class_1.prototype.set = function (key, value) {
          var index = getIndex(this.__entries__, key);

          if (~index) {
            this.__entries__[index][1] = value;
          } else {
            this.__entries__.push([key, value]);
          }
        };
        /**
         * @param {*} key
         * @returns {void}
         */


        class_1.prototype["delete"] = function (key) {
          var entries = this.__entries__;
          var index = getIndex(entries, key);

          if (~index) {
            entries.splice(index, 1);
          }
        };
        /**
         * @param {*} key
         * @returns {void}
         */


        class_1.prototype.has = function (key) {
          return !!~getIndex(this.__entries__, key);
        };
        /**
         * @returns {void}
         */


        class_1.prototype.clear = function () {
          this.__entries__.splice(0);
        };
        /**
         * @param {Function} callback
         * @param {*} [ctx=null]
         * @returns {void}
         */


        class_1.prototype.forEach = function (callback, ctx) {
          if (ctx === void 0) {
            ctx = null;
          }

          for (var _i = 0, _a = this.__entries__; _i < _a.length; _i++) {
            var entry = _a[_i];
            callback.call(ctx, entry[1], entry[0]);
          }
        };

        return class_1;
      }()
    );
  }();
  /**
   * Detects whether window and document objects are available in current environment.
   */


  var isBrowser = typeof window !== 'undefined' && typeof document !== 'undefined' && window.document === document; // Returns global object of a current environment.

  var global$1 = function () {
    if (typeof global !== 'undefined' && global.Math === Math) {
      return global;
    }

    if (typeof self !== 'undefined' && self.Math === Math) {
      return self;
    }

    if (typeof window !== 'undefined' && window.Math === Math) {
      return window;
    } // eslint-disable-next-line no-new-func


    return Function('return this')();
  }();
  /**
   * A shim for the requestAnimationFrame which falls back to the setTimeout if
   * first one is not supported.
   *
   * @returns {number} Requests' identifier.
   */


  var requestAnimationFrame$1 = function () {
    if (typeof requestAnimationFrame === 'function') {
      // It's required to use a bounded function because IE sometimes throws
      // an "Invalid calling object" error if rAF is invoked without the global
      // object on the left hand side.
      return requestAnimationFrame.bind(global$1);
    }

    return function (callback) {
      return setTimeout(function () {
        return callback(Date.now());
      }, 1000 / 60);
    };
  }(); // Defines minimum timeout before adding a trailing call.


  var trailingTimeout = 2;
  /**
   * Creates a wrapper function which ensures that provided callback will be
   * invoked only once during the specified delay period.
   *
   * @param {Function} callback - Function to be invoked after the delay period.
   * @param {number} delay - Delay after which to invoke callback.
   * @returns {Function}
   */

  function throttle$1(callback, delay) {
    var leadingCall = false,
        trailingCall = false,
        lastCallTime = 0;
    /**
     * Invokes the original callback function and schedules new invocation if
     * the "proxy" was called during current request.
     *
     * @returns {void}
     */

    function resolvePending() {
      if (leadingCall) {
        leadingCall = false;
        callback();
      }

      if (trailingCall) {
        proxy();
      }
    }
    /**
     * Callback invoked after the specified delay. It will further postpone
     * invocation of the original function delegating it to the
     * requestAnimationFrame.
     *
     * @returns {void}
     */


    function timeoutCallback() {
      requestAnimationFrame$1(resolvePending);
    }
    /**
     * Schedules invocation of the original function.
     *
     * @returns {void}
     */


    function proxy() {
      var timeStamp = Date.now();

      if (leadingCall) {
        // Reject immediately following calls.
        if (timeStamp - lastCallTime < trailingTimeout) {
          return;
        } // Schedule new call to be in invoked when the pending one is resolved.
        // This is important for "transitions" which never actually start
        // immediately so there is a chance that we might miss one if change
        // happens amids the pending invocation.


        trailingCall = true;
      } else {
        leadingCall = true;
        trailingCall = false;
        setTimeout(timeoutCallback, delay);
      }

      lastCallTime = timeStamp;
    }

    return proxy;
  } // Minimum delay before invoking the update of observers.


  var REFRESH_DELAY = 20; // A list of substrings of CSS properties used to find transition events that
  // might affect dimensions of observed elements.

  var transitionKeys = ['top', 'right', 'bottom', 'left', 'width', 'height', 'size', 'weight']; // Check if MutationObserver is available.

  var mutationObserverSupported = typeof MutationObserver !== 'undefined';
  /**
   * Singleton controller class which handles updates of ResizeObserver instances.
   */

  var ResizeObserverController =
  /** @class */
  function () {
    /**
     * Creates a new instance of ResizeObserverController.
     *
     * @private
     */
    function ResizeObserverController() {
      /**
       * Indicates whether DOM listeners have been added.
       *
       * @private {boolean}
       */
      this.connected_ = false;
      /**
       * Tells that controller has subscribed for Mutation Events.
       *
       * @private {boolean}
       */

      this.mutationEventsAdded_ = false;
      /**
       * Keeps reference to the instance of MutationObserver.
       *
       * @private {MutationObserver}
       */

      this.mutationsObserver_ = null;
      /**
       * A list of connected observers.
       *
       * @private {Array<ResizeObserverSPI>}
       */

      this.observers_ = [];
      this.onTransitionEnd_ = this.onTransitionEnd_.bind(this);
      this.refresh = throttle$1(this.refresh.bind(this), REFRESH_DELAY);
    }
    /**
     * Adds observer to observers list.
     *
     * @param {ResizeObserverSPI} observer - Observer to be added.
     * @returns {void}
     */


    ResizeObserverController.prototype.addObserver = function (observer) {
      if (!~this.observers_.indexOf(observer)) {
        this.observers_.push(observer);
      } // Add listeners if they haven't been added yet.


      if (!this.connected_) {
        this.connect_();
      }
    };
    /**
     * Removes observer from observers list.
     *
     * @param {ResizeObserverSPI} observer - Observer to be removed.
     * @returns {void}
     */


    ResizeObserverController.prototype.removeObserver = function (observer) {
      var observers = this.observers_;
      var index = observers.indexOf(observer); // Remove observer if it's present in registry.

      if (~index) {
        observers.splice(index, 1);
      } // Remove listeners if controller has no connected observers.


      if (!observers.length && this.connected_) {
        this.disconnect_();
      }
    };
    /**
     * Invokes the update of observers. It will continue running updates insofar
     * it detects changes.
     *
     * @returns {void}
     */


    ResizeObserverController.prototype.refresh = function () {
      var changesDetected = this.updateObservers_(); // Continue running updates if changes have been detected as there might
      // be future ones caused by CSS transitions.

      if (changesDetected) {
        this.refresh();
      }
    };
    /**
     * Updates every observer from observers list and notifies them of queued
     * entries.
     *
     * @private
     * @returns {boolean} Returns "true" if any observer has detected changes in
     *      dimensions of it's elements.
     */


    ResizeObserverController.prototype.updateObservers_ = function () {
      // Collect observers that have active observations.
      var activeObservers = this.observers_.filter(function (observer) {
        return observer.gatherActive(), observer.hasActive();
      }); // Deliver notifications in a separate cycle in order to avoid any
      // collisions between observers, e.g. when multiple instances of
      // ResizeObserver are tracking the same element and the callback of one
      // of them changes content dimensions of the observed target. Sometimes
      // this may result in notifications being blocked for the rest of observers.

      activeObservers.forEach(function (observer) {
        return observer.broadcastActive();
      });
      return activeObservers.length > 0;
    };
    /**
     * Initializes DOM listeners.
     *
     * @private
     * @returns {void}
     */


    ResizeObserverController.prototype.connect_ = function () {
      // Do nothing if running in a non-browser environment or if listeners
      // have been already added.
      if (!isBrowser || this.connected_) {
        return;
      } // Subscription to the "Transitionend" event is used as a workaround for
      // delayed transitions. This way it's possible to capture at least the
      // final state of an element.


      document.addEventListener('transitionend', this.onTransitionEnd_);
      window.addEventListener('resize', this.refresh);

      if (mutationObserverSupported) {
        this.mutationsObserver_ = new MutationObserver(this.refresh);
        this.mutationsObserver_.observe(document, {
          attributes: true,
          childList: true,
          characterData: true,
          subtree: true
        });
      } else {
        document.addEventListener('DOMSubtreeModified', this.refresh);
        this.mutationEventsAdded_ = true;
      }

      this.connected_ = true;
    };
    /**
     * Removes DOM listeners.
     *
     * @private
     * @returns {void}
     */


    ResizeObserverController.prototype.disconnect_ = function () {
      // Do nothing if running in a non-browser environment or if listeners
      // have been already removed.
      if (!isBrowser || !this.connected_) {
        return;
      }

      document.removeEventListener('transitionend', this.onTransitionEnd_);
      window.removeEventListener('resize', this.refresh);

      if (this.mutationsObserver_) {
        this.mutationsObserver_.disconnect();
      }

      if (this.mutationEventsAdded_) {
        document.removeEventListener('DOMSubtreeModified', this.refresh);
      }

      this.mutationsObserver_ = null;
      this.mutationEventsAdded_ = false;
      this.connected_ = false;
    };
    /**
     * "Transitionend" event handler.
     *
     * @private
     * @param {TransitionEvent} event
     * @returns {void}
     */


    ResizeObserverController.prototype.onTransitionEnd_ = function (_a) {
      var _b = _a.propertyName,
          propertyName = _b === void 0 ? '' : _b; // Detect whether transition may affect dimensions of an element.

      var isReflowProperty = transitionKeys.some(function (key) {
        return !!~propertyName.indexOf(key);
      });

      if (isReflowProperty) {
        this.refresh();
      }
    };
    /**
     * Returns instance of the ResizeObserverController.
     *
     * @returns {ResizeObserverController}
     */


    ResizeObserverController.getInstance = function () {
      if (!this.instance_) {
        this.instance_ = new ResizeObserverController();
      }

      return this.instance_;
    };
    /**
     * Holds reference to the controller's instance.
     *
     * @private {ResizeObserverController}
     */


    ResizeObserverController.instance_ = null;
    return ResizeObserverController;
  }();
  /**
   * Defines non-writable/enumerable properties of the provided target object.
   *
   * @param {Object} target - Object for which to define properties.
   * @param {Object} props - Properties to be defined.
   * @returns {Object} Target object.
   */


  var defineConfigurable = function defineConfigurable(target, props) {
    for (var _i = 0, _a = Object.keys(props); _i < _a.length; _i++) {
      var key = _a[_i];
      Object.defineProperty(target, key, {
        value: props[key],
        enumerable: false,
        writable: false,
        configurable: true
      });
    }

    return target;
  };
  /**
   * Returns the global object associated with provided element.
   *
   * @param {Object} target
   * @returns {Object}
   */


  var getWindowOf = function getWindowOf(target) {
    // Assume that the element is an instance of Node, which means that it
    // has the "ownerDocument" property from which we can retrieve a
    // corresponding global object.
    var ownerGlobal = target && target.ownerDocument && target.ownerDocument.defaultView; // Return the local global object if it's not possible extract one from
    // provided element.

    return ownerGlobal || global$1;
  }; // Placeholder of an empty content rectangle.


  var emptyRect = createRectInit(0, 0, 0, 0);
  /**
   * Converts provided string to a number.
   *
   * @param {number|string} value
   * @returns {number}
   */

  function toFloat(value) {
    return parseFloat(value) || 0;
  }
  /**
   * Extracts borders size from provided styles.
   *
   * @param {CSSStyleDeclaration} styles
   * @param {...string} positions - Borders positions (top, right, ...)
   * @returns {number}
   */


  function getBordersSize(styles) {
    var positions = [];

    for (var _i = 1; _i < arguments.length; _i++) {
      positions[_i - 1] = arguments[_i];
    }

    return positions.reduce(function (size, position) {
      var value = styles['border-' + position + '-width'];
      return size + toFloat(value);
    }, 0);
  }
  /**
   * Extracts paddings sizes from provided styles.
   *
   * @param {CSSStyleDeclaration} styles
   * @returns {Object} Paddings box.
   */


  function getPaddings(styles) {
    var positions = ['top', 'right', 'bottom', 'left'];
    var paddings = {};

    for (var _i = 0, positions_1 = positions; _i < positions_1.length; _i++) {
      var position = positions_1[_i];
      var value = styles['padding-' + position];
      paddings[position] = toFloat(value);
    }

    return paddings;
  }
  /**
   * Calculates content rectangle of provided SVG element.
   *
   * @param {SVGGraphicsElement} target - Element content rectangle of which needs
   *      to be calculated.
   * @returns {DOMRectInit}
   */


  function getSVGContentRect(target) {
    var bbox = target.getBBox();
    return createRectInit(0, 0, bbox.width, bbox.height);
  }
  /**
   * Calculates content rectangle of provided HTMLElement.
   *
   * @param {HTMLElement} target - Element for which to calculate the content rectangle.
   * @returns {DOMRectInit}
   */


  function getHTMLElementContentRect(target) {
    // Client width & height properties can't be
    // used exclusively as they provide rounded values.
    var clientWidth = target.clientWidth,
        clientHeight = target.clientHeight; // By this condition we can catch all non-replaced inline, hidden and
    // detached elements. Though elements with width & height properties less
    // than 0.5 will be discarded as well.
    //
    // Without it we would need to implement separate methods for each of
    // those cases and it's not possible to perform a precise and performance
    // effective test for hidden elements. E.g. even jQuery's ':visible' filter
    // gives wrong results for elements with width & height less than 0.5.

    if (!clientWidth && !clientHeight) {
      return emptyRect;
    }

    var styles = getWindowOf(target).getComputedStyle(target);
    var paddings = getPaddings(styles);
    var horizPad = paddings.left + paddings.right;
    var vertPad = paddings.top + paddings.bottom; // Computed styles of width & height are being used because they are the
    // only dimensions available to JS that contain non-rounded values. It could
    // be possible to utilize the getBoundingClientRect if only it's data wasn't
    // affected by CSS transformations let alone paddings, borders and scroll bars.

    var width = toFloat(styles.width),
        height = toFloat(styles.height); // Width & height include paddings and borders when the 'border-box' box
    // model is applied (except for IE).

    if (styles.boxSizing === 'border-box') {
      // Following conditions are required to handle Internet Explorer which
      // doesn't include paddings and borders to computed CSS dimensions.
      //
      // We can say that if CSS dimensions + paddings are equal to the "client"
      // properties then it's either IE, and thus we don't need to subtract
      // anything, or an element merely doesn't have paddings/borders styles.
      if (Math.round(width + horizPad) !== clientWidth) {
        width -= getBordersSize(styles, 'left', 'right') + horizPad;
      }

      if (Math.round(height + vertPad) !== clientHeight) {
        height -= getBordersSize(styles, 'top', 'bottom') + vertPad;
      }
    } // Following steps can't be applied to the document's root element as its
    // client[Width/Height] properties represent viewport area of the window.
    // Besides, it's as well not necessary as the <html> itself neither has
    // rendered scroll bars nor it can be clipped.


    if (!isDocumentElement(target)) {
      // In some browsers (only in Firefox, actually) CSS width & height
      // include scroll bars size which can be removed at this step as scroll
      // bars are the only difference between rounded dimensions + paddings
      // and "client" properties, though that is not always true in Chrome.
      var vertScrollbar = Math.round(width + horizPad) - clientWidth;
      var horizScrollbar = Math.round(height + vertPad) - clientHeight; // Chrome has a rather weird rounding of "client" properties.
      // E.g. for an element with content width of 314.2px it sometimes gives
      // the client width of 315px and for the width of 314.7px it may give
      // 314px. And it doesn't happen all the time. So just ignore this delta
      // as a non-relevant.

      if (Math.abs(vertScrollbar) !== 1) {
        width -= vertScrollbar;
      }

      if (Math.abs(horizScrollbar) !== 1) {
        height -= horizScrollbar;
      }
    }

    return createRectInit(paddings.left, paddings.top, width, height);
  }
  /**
   * Checks whether provided element is an instance of the SVGGraphicsElement.
   *
   * @param {Element} target - Element to be checked.
   * @returns {boolean}
   */


  var isSVGGraphicsElement = function () {
    // Some browsers, namely IE and Edge, don't have the SVGGraphicsElement
    // interface.
    if (typeof SVGGraphicsElement !== 'undefined') {
      return function (target) {
        return target instanceof getWindowOf(target).SVGGraphicsElement;
      };
    } // If it's so, then check that element is at least an instance of the
    // SVGElement and that it has the "getBBox" method.
    // eslint-disable-next-line no-extra-parens


    return function (target) {
      return target instanceof getWindowOf(target).SVGElement && typeof target.getBBox === 'function';
    };
  }();
  /**
   * Checks whether provided element is a document element (<html>).
   *
   * @param {Element} target - Element to be checked.
   * @returns {boolean}
   */


  function isDocumentElement(target) {
    return target === getWindowOf(target).document.documentElement;
  }
  /**
   * Calculates an appropriate content rectangle for provided html or svg element.
   *
   * @param {Element} target - Element content rectangle of which needs to be calculated.
   * @returns {DOMRectInit}
   */


  function getContentRect(target) {
    if (!isBrowser) {
      return emptyRect;
    }

    if (isSVGGraphicsElement(target)) {
      return getSVGContentRect(target);
    }

    return getHTMLElementContentRect(target);
  }
  /**
   * Creates rectangle with an interface of the DOMRectReadOnly.
   * Spec: https://drafts.fxtf.org/geometry/#domrectreadonly
   *
   * @param {DOMRectInit} rectInit - Object with rectangle's x/y coordinates and dimensions.
   * @returns {DOMRectReadOnly}
   */


  function createReadOnlyRect(_a) {
    var x = _a.x,
        y = _a.y,
        width = _a.width,
        height = _a.height; // If DOMRectReadOnly is available use it as a prototype for the rectangle.

    var Constr = typeof DOMRectReadOnly !== 'undefined' ? DOMRectReadOnly : Object;
    var rect = Object.create(Constr.prototype); // Rectangle's properties are not writable and non-enumerable.

    defineConfigurable(rect, {
      x: x,
      y: y,
      width: width,
      height: height,
      top: y,
      right: x + width,
      bottom: height + y,
      left: x
    });
    return rect;
  }
  /**
   * Creates DOMRectInit object based on the provided dimensions and the x/y coordinates.
   * Spec: https://drafts.fxtf.org/geometry/#dictdef-domrectinit
   *
   * @param {number} x - X coordinate.
   * @param {number} y - Y coordinate.
   * @param {number} width - Rectangle's width.
   * @param {number} height - Rectangle's height.
   * @returns {DOMRectInit}
   */


  function createRectInit(x, y, width, height) {
    return {
      x: x,
      y: y,
      width: width,
      height: height
    };
  }
  /**
   * Class that is responsible for computations of the content rectangle of
   * provided DOM element and for keeping track of it's changes.
   */


  var ResizeObservation =
  /** @class */
  function () {
    /**
     * Creates an instance of ResizeObservation.
     *
     * @param {Element} target - Element to be observed.
     */
    function ResizeObservation(target) {
      /**
       * Broadcasted width of content rectangle.
       *
       * @type {number}
       */
      this.broadcastWidth = 0;
      /**
       * Broadcasted height of content rectangle.
       *
       * @type {number}
       */

      this.broadcastHeight = 0;
      /**
       * Reference to the last observed content rectangle.
       *
       * @private {DOMRectInit}
       */

      this.contentRect_ = createRectInit(0, 0, 0, 0);
      this.target = target;
    }
    /**
     * Updates content rectangle and tells whether it's width or height properties
     * have changed since the last broadcast.
     *
     * @returns {boolean}
     */


    ResizeObservation.prototype.isActive = function () {
      var rect = getContentRect(this.target);
      this.contentRect_ = rect;
      return rect.width !== this.broadcastWidth || rect.height !== this.broadcastHeight;
    };
    /**
     * Updates 'broadcastWidth' and 'broadcastHeight' properties with a data
     * from the corresponding properties of the last observed content rectangle.
     *
     * @returns {DOMRectInit} Last observed content rectangle.
     */


    ResizeObservation.prototype.broadcastRect = function () {
      var rect = this.contentRect_;
      this.broadcastWidth = rect.width;
      this.broadcastHeight = rect.height;
      return rect;
    };

    return ResizeObservation;
  }();

  var ResizeObserverEntry =
  /** @class */
  function () {
    /**
     * Creates an instance of ResizeObserverEntry.
     *
     * @param {Element} target - Element that is being observed.
     * @param {DOMRectInit} rectInit - Data of the element's content rectangle.
     */
    function ResizeObserverEntry(target, rectInit) {
      var contentRect = createReadOnlyRect(rectInit); // According to the specification following properties are not writable
      // and are also not enumerable in the native implementation.
      //
      // Property accessors are not being used as they'd require to define a
      // private WeakMap storage which may cause memory leaks in browsers that
      // don't support this type of collections.

      defineConfigurable(this, {
        target: target,
        contentRect: contentRect
      });
    }

    return ResizeObserverEntry;
  }();

  var ResizeObserverSPI =
  /** @class */
  function () {
    /**
     * Creates a new instance of ResizeObserver.
     *
     * @param {ResizeObserverCallback} callback - Callback function that is invoked
     *      when one of the observed elements changes it's content dimensions.
     * @param {ResizeObserverController} controller - Controller instance which
     *      is responsible for the updates of observer.
     * @param {ResizeObserver} callbackCtx - Reference to the public
     *      ResizeObserver instance which will be passed to callback function.
     */
    function ResizeObserverSPI(callback, controller, callbackCtx) {
      /**
       * Collection of resize observations that have detected changes in dimensions
       * of elements.
       *
       * @private {Array<ResizeObservation>}
       */
      this.activeObservations_ = [];
      /**
       * Registry of the ResizeObservation instances.
       *
       * @private {Map<Element, ResizeObservation>}
       */

      this.observations_ = new MapShim();

      if (typeof callback !== 'function') {
        throw new TypeError('The callback provided as parameter 1 is not a function.');
      }

      this.callback_ = callback;
      this.controller_ = controller;
      this.callbackCtx_ = callbackCtx;
    }
    /**
     * Starts observing provided element.
     *
     * @param {Element} target - Element to be observed.
     * @returns {void}
     */


    ResizeObserverSPI.prototype.observe = function (target) {
      if (!arguments.length) {
        throw new TypeError('1 argument required, but only 0 present.');
      } // Do nothing if current environment doesn't have the Element interface.


      if (typeof Element === 'undefined' || !(Element instanceof Object)) {
        return;
      }

      if (!(target instanceof getWindowOf(target).Element)) {
        throw new TypeError('parameter 1 is not of type "Element".');
      }

      var observations = this.observations_; // Do nothing if element is already being observed.

      if (observations.has(target)) {
        return;
      }

      observations.set(target, new ResizeObservation(target));
      this.controller_.addObserver(this); // Force the update of observations.

      this.controller_.refresh();
    };
    /**
     * Stops observing provided element.
     *
     * @param {Element} target - Element to stop observing.
     * @returns {void}
     */


    ResizeObserverSPI.prototype.unobserve = function (target) {
      if (!arguments.length) {
        throw new TypeError('1 argument required, but only 0 present.');
      } // Do nothing if current environment doesn't have the Element interface.


      if (typeof Element === 'undefined' || !(Element instanceof Object)) {
        return;
      }

      if (!(target instanceof getWindowOf(target).Element)) {
        throw new TypeError('parameter 1 is not of type "Element".');
      }

      var observations = this.observations_; // Do nothing if element is not being observed.

      if (!observations.has(target)) {
        return;
      }

      observations["delete"](target);

      if (!observations.size) {
        this.controller_.removeObserver(this);
      }
    };
    /**
     * Stops observing all elements.
     *
     * @returns {void}
     */


    ResizeObserverSPI.prototype.disconnect = function () {
      this.clearActive();
      this.observations_.clear();
      this.controller_.removeObserver(this);
    };
    /**
     * Collects observation instances the associated element of which has changed
     * it's content rectangle.
     *
     * @returns {void}
     */


    ResizeObserverSPI.prototype.gatherActive = function () {
      var _this = this;

      this.clearActive();
      this.observations_.forEach(function (observation) {
        if (observation.isActive()) {
          _this.activeObservations_.push(observation);
        }
      });
    };
    /**
     * Invokes initial callback function with a list of ResizeObserverEntry
     * instances collected from active resize observations.
     *
     * @returns {void}
     */


    ResizeObserverSPI.prototype.broadcastActive = function () {
      // Do nothing if observer doesn't have active observations.
      if (!this.hasActive()) {
        return;
      }

      var ctx = this.callbackCtx_; // Create ResizeObserverEntry instance for every active observation.

      var entries = this.activeObservations_.map(function (observation) {
        return new ResizeObserverEntry(observation.target, observation.broadcastRect());
      });
      this.callback_.call(ctx, entries, ctx);
      this.clearActive();
    };
    /**
     * Clears the collection of active observations.
     *
     * @returns {void}
     */


    ResizeObserverSPI.prototype.clearActive = function () {
      this.activeObservations_.splice(0);
    };
    /**
     * Tells whether observer has active observations.
     *
     * @returns {boolean}
     */


    ResizeObserverSPI.prototype.hasActive = function () {
      return this.activeObservations_.length > 0;
    };

    return ResizeObserverSPI;
  }(); // Registry of internal observers. If WeakMap is not available use current shim
  // for the Map collection as it has all required methods and because WeakMap
  // can't be fully polyfilled anyway.


  var observers = typeof WeakMap !== 'undefined' ? new WeakMap() : new MapShim();
  /**
   * ResizeObserver API. Encapsulates the ResizeObserver SPI implementation
   * exposing only those methods and properties that are defined in the spec.
   */

  var ResizeObserver =
  /** @class */
  function () {
    /**
     * Creates a new instance of ResizeObserver.
     *
     * @param {ResizeObserverCallback} callback - Callback that is invoked when
     *      dimensions of the observed elements change.
     */
    function ResizeObserver(callback) {
      if (!(this instanceof ResizeObserver)) {
        throw new TypeError('Cannot call a class as a function.');
      }

      if (!arguments.length) {
        throw new TypeError('1 argument required, but only 0 present.');
      }

      var controller = ResizeObserverController.getInstance();
      var observer = new ResizeObserverSPI(callback, controller, this);
      observers.set(this, observer);
    }

    return ResizeObserver;
  }(); // Expose public methods of ResizeObserver.


  ['observe', 'unobserve', 'disconnect'].forEach(function (method) {
    ResizeObserver.prototype[method] = function () {
      var _a;

      return (_a = observers.get(this))[method].apply(_a, arguments);
    };
  });

  var index = function () {
    // Export existing implementation if available.
    if (typeof global$1.ResizeObserver !== 'undefined') {
      return global$1.ResizeObserver;
    }

    return ResizeObserver;
  }();

  var canUseDOM = !!(typeof window !== 'undefined' && window.document && window.document.createElement);
  var canUseDom = canUseDOM;

  var SimpleBar = /*#__PURE__*/function () {
    function SimpleBar(element, options) {
      var _this = this;

      _classCallCheck(this, SimpleBar);

      this.onScroll = function () {
        if (!_this.scrollXTicking) {
          window.requestAnimationFrame(_this.scrollX);
          _this.scrollXTicking = true;
        }

        if (!_this.scrollYTicking) {
          window.requestAnimationFrame(_this.scrollY);
          _this.scrollYTicking = true;
        }
      };

      this.scrollX = function () {
        if (_this.axis.x.isOverflowing) {
          _this.showScrollbar('x');

          _this.positionScrollbar('x');
        }

        _this.scrollXTicking = false;
      };

      this.scrollY = function () {
        if (_this.axis.y.isOverflowing) {
          _this.showScrollbar('y');

          _this.positionScrollbar('y');
        }

        _this.scrollYTicking = false;
      };

      this.onMouseEnter = function () {
        _this.showScrollbar('x');

        _this.showScrollbar('y');
      };

      this.onMouseMove = function (e) {
        _this.mouseX = e.clientX;
        _this.mouseY = e.clientY;

        if (_this.axis.x.isOverflowing || _this.axis.x.forceVisible) {
          _this.onMouseMoveForAxis('x');
        }

        if (_this.axis.y.isOverflowing || _this.axis.y.forceVisible) {
          _this.onMouseMoveForAxis('y');
        }
      };

      this.onMouseLeave = function () {
        _this.onMouseMove.cancel();

        if (_this.axis.x.isOverflowing || _this.axis.x.forceVisible) {
          _this.onMouseLeaveForAxis('x');
        }

        if (_this.axis.y.isOverflowing || _this.axis.y.forceVisible) {
          _this.onMouseLeaveForAxis('y');
        }

        _this.mouseX = -1;
        _this.mouseY = -1;
      };

      this.onWindowResize = function () {
        // Recalculate scrollbarWidth in case it's a zoom
        _this.scrollbarWidth = scrollbarWidth();

        _this.hideNativeScrollbar();
      };

      this.hideScrollbars = function () {
        _this.axis.x.track.rect = _this.axis.x.track.el.getBoundingClientRect();
        _this.axis.y.track.rect = _this.axis.y.track.el.getBoundingClientRect();

        if (!_this.isWithinBounds(_this.axis.y.track.rect)) {
          _this.axis.y.scrollbar.el.classList.remove(_this.classNames.visible);

          _this.axis.y.isVisible = false;
        }

        if (!_this.isWithinBounds(_this.axis.x.track.rect)) {
          _this.axis.x.scrollbar.el.classList.remove(_this.classNames.visible);

          _this.axis.x.isVisible = false;
        }
      };

      this.onPointerEvent = function (e) {
        var isWithinBoundsY, isWithinBoundsX;
        _this.axis.x.scrollbar.rect = _this.axis.x.scrollbar.el.getBoundingClientRect();
        _this.axis.y.scrollbar.rect = _this.axis.y.scrollbar.el.getBoundingClientRect();

        if (_this.axis.x.isOverflowing || _this.axis.x.forceVisible) {
          isWithinBoundsX = _this.isWithinBounds(_this.axis.x.scrollbar.rect);
        }

        if (_this.axis.y.isOverflowing || _this.axis.y.forceVisible) {
          isWithinBoundsY = _this.isWithinBounds(_this.axis.y.scrollbar.rect);
        } // If any pointer event is called on the scrollbar


        if (isWithinBoundsY || isWithinBoundsX) {
          // Preventing the event's default action stops text being
          // selectable during the drag.
          e.preventDefault(); // Prevent event leaking

          e.stopPropagation();

          if (e.type === 'mousedown') {
            if (isWithinBoundsY) {
              _this.onDragStart(e, 'y');
            }

            if (isWithinBoundsX) {
              _this.onDragStart(e, 'x');
            }
          }
        }
      };

      this.drag = function (e) {
        var eventOffset;
        var track = _this.axis[_this.draggedAxis].track;
        var trackSize = track.rect[_this.axis[_this.draggedAxis].sizeAttr];
        var scrollbar = _this.axis[_this.draggedAxis].scrollbar;
        e.preventDefault();
        e.stopPropagation();

        if (_this.draggedAxis === 'y') {
          eventOffset = e.pageY;
        } else {
          eventOffset = e.pageX;
        } // Calculate how far the user's mouse is from the top/left of the scrollbar (minus the dragOffset).


        var dragPos = eventOffset - track.rect[_this.axis[_this.draggedAxis].offsetAttr] - _this.axis[_this.draggedAxis].dragOffset; // Convert the mouse position into a percentage of the scrollbar height/width.

        var dragPerc = dragPos / track.rect[_this.axis[_this.draggedAxis].sizeAttr]; // Scroll the content by the same percentage.

        var scrollPos = dragPerc * _this.contentEl[_this.axis[_this.draggedAxis].scrollSizeAttr]; // Fix browsers inconsistency on RTL

        if (_this.draggedAxis === 'x') {
          scrollPos = _this.isRtl && SimpleBar.getRtlHelpers().isRtlScrollbarInverted ? scrollPos - (trackSize + scrollbar.size) : scrollPos;
          scrollPos = _this.isRtl && SimpleBar.getRtlHelpers().isRtlScrollingInverted ? -scrollPos : scrollPos;
        }

        _this.contentEl[_this.axis[_this.draggedAxis].scrollOffsetAttr] = scrollPos;
      };

      this.onEndDrag = function (e) {
        e.preventDefault();
        e.stopPropagation();
        document.removeEventListener('mousemove', _this.drag);
        document.removeEventListener('mouseup', _this.onEndDrag);
      };

      this.el = element;
      this.flashTimeout;
      this.contentEl;
      this.offsetEl;
      this.maskEl;
      this.globalObserver;
      this.mutationObserver;
      this.resizeObserver;
      this.scrollbarWidth;
      this.minScrollbarWidth = 20;
      this.options = _objectSpread({}, SimpleBar.defaultOptions, options);
      this.classNames = _objectSpread({}, SimpleBar.defaultOptions.classNames, this.options.classNames);
      this.isRtl;
      this.axis = {
        x: {
          scrollOffsetAttr: 'scrollLeft',
          sizeAttr: 'width',
          scrollSizeAttr: 'scrollWidth',
          offsetAttr: 'left',
          overflowAttr: 'overflowX',
          dragOffset: 0,
          isOverflowing: true,
          isVisible: false,
          forceVisible: false,
          track: {},
          scrollbar: {}
        },
        y: {
          scrollOffsetAttr: 'scrollTop',
          sizeAttr: 'height',
          scrollSizeAttr: 'scrollHeight',
          offsetAttr: 'top',
          overflowAttr: 'overflowY',
          dragOffset: 0,
          isOverflowing: true,
          isVisible: false,
          forceVisible: false,
          track: {},
          scrollbar: {}
        }
      };
      this.recalculate = lodash_throttle(this.recalculate.bind(this), 64);
      this.onMouseMove = lodash_throttle(this.onMouseMove.bind(this), 64);
      this.hideScrollbars = lodash_debounce(this.hideScrollbars.bind(this), this.options.timeout);
      this.onWindowResize = lodash_debounce(this.onWindowResize.bind(this), 64, {
        leading: true
      });
      SimpleBar.getRtlHelpers = lodash_memoize(SimpleBar.getRtlHelpers); // getContentElement is deprecated

      this.getContentElement = this.getScrollElement;
      this.init();
    }
    /**
     * Static properties
     */

    /**
     * Helper to fix browsers inconsistency on RTL:
     *  - Firefox inverts the scrollbar initial position
     *  - IE11 inverts both scrollbar position and scrolling offset
     * Directly inspired by @KingSora's OverlayScrollbars https://github.com/KingSora/OverlayScrollbars/blob/master/js/OverlayScrollbars.js#L1634
     */


    _createClass(SimpleBar, [{
      key: "init",
      value: function init() {
        // Save a reference to the instance, so we know this DOM node has already been instancied
        this.el.SimpleBar = this; // We stop here on server-side

        if (canUseDom) {
          this.initDOM();
          this.scrollbarWidth = scrollbarWidth();
          this.recalculate();
          this.initListeners();
        }
      }
    }, {
      key: "initDOM",
      value: function initDOM() {
        var _this2 = this; // make sure this element doesn't have the elements yet


        if (Array.from(this.el.children).filter(function (child) {
          return child.classList.contains(_this2.classNames.wrapper);
        }).length) {
          // assume that element has his DOM already initiated
          this.wrapperEl = this.el.querySelector(".".concat(this.classNames.wrapper));
          this.contentEl = this.el.querySelector(".".concat(this.classNames.content));
          this.offsetEl = this.el.querySelector(".".concat(this.classNames.offset));
          this.maskEl = this.el.querySelector(".".concat(this.classNames.mask));
          this.placeholderEl = this.el.querySelector(".".concat(this.classNames.placeholder));
          this.heightAutoObserverWrapperEl = this.el.querySelector(".".concat(this.classNames.heightAutoObserverWrapperEl));
          this.heightAutoObserverEl = this.el.querySelector(".".concat(this.classNames.heightAutoObserverEl));
          this.axis.x.track.el = this.el.querySelector(".".concat(this.classNames.track, ".").concat(this.classNames.horizontal));
          this.axis.y.track.el = this.el.querySelector(".".concat(this.classNames.track, ".").concat(this.classNames.vertical));
        } else {
          // Prepare DOM
          this.wrapperEl = document.createElement('div');
          this.contentEl = document.createElement('div');
          this.offsetEl = document.createElement('div');
          this.maskEl = document.createElement('div');
          this.placeholderEl = document.createElement('div');
          this.heightAutoObserverWrapperEl = document.createElement('div');
          this.heightAutoObserverEl = document.createElement('div');
          this.wrapperEl.classList.add(this.classNames.wrapper);
          this.contentEl.classList.add(this.classNames.content);
          this.offsetEl.classList.add(this.classNames.offset);
          this.maskEl.classList.add(this.classNames.mask);
          this.placeholderEl.classList.add(this.classNames.placeholder);
          this.heightAutoObserverWrapperEl.classList.add(this.classNames.heightAutoObserverWrapperEl);
          this.heightAutoObserverEl.classList.add(this.classNames.heightAutoObserverEl);

          while (this.el.firstChild) {
            this.contentEl.appendChild(this.el.firstChild);
          }

          this.offsetEl.appendChild(this.contentEl);
          this.maskEl.appendChild(this.offsetEl);
          this.heightAutoObserverWrapperEl.appendChild(this.heightAutoObserverEl);
          this.wrapperEl.appendChild(this.heightAutoObserverWrapperEl);
          this.wrapperEl.appendChild(this.maskEl);
          this.wrapperEl.appendChild(this.placeholderEl);
          this.el.appendChild(this.wrapperEl);
        }

        if (!this.axis.x.track.el || !this.axis.y.track.el) {
          var track = document.createElement('div');
          var scrollbar = document.createElement('div');
          track.classList.add(this.classNames.track);
          scrollbar.classList.add(this.classNames.scrollbar);

          if (!this.options.autoHide) {
            scrollbar.classList.add(this.classNames.visible);
          }

          track.appendChild(scrollbar);
          this.axis.x.track.el = track.cloneNode(true);
          this.axis.x.track.el.classList.add(this.classNames.horizontal);
          this.axis.y.track.el = track.cloneNode(true);
          this.axis.y.track.el.classList.add(this.classNames.vertical);
          this.el.appendChild(this.axis.x.track.el);
          this.el.appendChild(this.axis.y.track.el);
        }

        this.axis.x.scrollbar.el = this.axis.x.track.el.querySelector(".".concat(this.classNames.scrollbar));
        this.axis.y.scrollbar.el = this.axis.y.track.el.querySelector(".".concat(this.classNames.scrollbar));
        this.el.setAttribute('data-simplebar', 'init');
      }
    }, {
      key: "initListeners",
      value: function initListeners() {
        var _this3 = this; // Event listeners


        if (this.options.autoHide) {
          this.el.addEventListener('mouseenter', this.onMouseEnter);
        }

        ['mousedown', 'click', 'dblclick', 'touchstart', 'touchend', 'touchmove'].forEach(function (e) {
          _this3.el.addEventListener(e, _this3.onPointerEvent, true);
        });
        this.el.addEventListener('mousemove', this.onMouseMove);
        this.el.addEventListener('mouseleave', this.onMouseLeave);
        this.contentEl.addEventListener('scroll', this.onScroll); // Browser zoom triggers a window resize

        window.addEventListener('resize', this.onWindowResize); // MutationObserver is IE11+

        if (typeof MutationObserver !== 'undefined') {
          // create an observer instance
          this.mutationObserver = new MutationObserver(function (mutations) {
            mutations.forEach(function (mutation) {
              if (mutation.target === _this3.el || !_this3.isChildNode(mutation.target) || mutation.addedNodes.length || mutation.removedNodes.length) {
                _this3.recalculate();
              }
            });
          }); // pass in the target node, as well as the observer options

          this.mutationObserver.observe(this.el, {
            attributes: true,
            childList: true,
            characterData: true,
            subtree: true
          });
        }

        this.resizeObserver = new index(this.recalculate);
        this.resizeObserver.observe(this.el);
      }
    }, {
      key: "recalculate",
      value: function recalculate() {
        var isHeightAuto = this.heightAutoObserverEl.offsetHeight <= 1;
        this.elStyles = window.getComputedStyle(this.el);
        this.isRtl = this.elStyles.direction === 'rtl';
        this.contentEl.style.padding = "".concat(this.elStyles.paddingTop, " ").concat(this.elStyles.paddingRight, " ").concat(this.elStyles.paddingBottom, " ").concat(this.elStyles.paddingLeft);
        this.contentEl.style.height = isHeightAuto ? 'auto' : '100%';
        this.placeholderEl.style.width = "".concat(this.contentEl.scrollWidth, "px");
        this.placeholderEl.style.height = "".concat(this.contentEl.scrollHeight, "px");
        this.wrapperEl.style.margin = "-".concat(this.elStyles.paddingTop, " -").concat(this.elStyles.paddingRight, " -").concat(this.elStyles.paddingBottom, " -").concat(this.elStyles.paddingLeft);
        this.axis.x.track.rect = this.axis.x.track.el.getBoundingClientRect();
        this.axis.y.track.rect = this.axis.y.track.el.getBoundingClientRect(); // Set isOverflowing to false if scrollbar is not necessary (content is shorter than offset)

        this.axis.x.isOverflowing = (this.scrollbarWidth ? this.contentEl.scrollWidth : this.contentEl.scrollWidth - this.minScrollbarWidth) > Math.ceil(this.axis.x.track.rect.width);
        this.axis.y.isOverflowing = (this.scrollbarWidth ? this.contentEl.scrollHeight : this.contentEl.scrollHeight - this.minScrollbarWidth) > Math.ceil(this.axis.y.track.rect.height); // Set isOverflowing to false if user explicitely set hidden overflow

        this.axis.x.isOverflowing = this.elStyles.overflowX === 'hidden' ? false : this.axis.x.isOverflowing;
        this.axis.y.isOverflowing = this.elStyles.overflowY === 'hidden' ? false : this.axis.y.isOverflowing;
        this.axis.x.forceVisible = this.options.forceVisible === "x" || this.options.forceVisible === true;
        this.axis.y.forceVisible = this.options.forceVisible === "y" || this.options.forceVisible === true;
        this.axis.x.scrollbar.size = this.getScrollbarSize('x');
        this.axis.y.scrollbar.size = this.getScrollbarSize('y');
        this.axis.x.scrollbar.el.style.width = "".concat(this.axis.x.scrollbar.size, "px");
        this.axis.y.scrollbar.el.style.height = "".concat(this.axis.y.scrollbar.size, "px");
        this.positionScrollbar('x');
        this.positionScrollbar('y');
        this.toggleTrackVisibility('x');
        this.toggleTrackVisibility('y');
        this.hideNativeScrollbar();
      }
      /**
       * Calculate scrollbar size
       */

    }, {
      key: "getScrollbarSize",
      value: function getScrollbarSize() {
        var axis = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'y';
        var contentSize = this.scrollbarWidth ? this.contentEl[this.axis[axis].scrollSizeAttr] : this.contentEl[this.axis[axis].scrollSizeAttr] - this.minScrollbarWidth;
        var trackSize = this.axis[axis].track.rect[this.axis[axis].sizeAttr];
        var scrollbarSize;

        if (!this.axis[axis].isOverflowing) {
          return;
        }

        var scrollbarRatio = trackSize / contentSize; // Calculate new height/position of drag handle.

        scrollbarSize = Math.max(~~(scrollbarRatio * trackSize), this.options.scrollbarMinSize);

        if (this.options.scrollbarMaxSize) {
          scrollbarSize = Math.min(scrollbarSize, this.options.scrollbarMaxSize);
        }

        return scrollbarSize;
      }
    }, {
      key: "positionScrollbar",
      value: function positionScrollbar() {
        var axis = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'y';
        var contentSize = this.contentEl[this.axis[axis].scrollSizeAttr];
        var trackSize = this.axis[axis].track.rect[this.axis[axis].sizeAttr];
        var hostSize = parseInt(this.elStyles[this.axis[axis].sizeAttr], 10);
        var scrollbar = this.axis[axis].scrollbar;
        var scrollOffset = this.contentEl[this.axis[axis].scrollOffsetAttr];
        scrollOffset = axis === 'x' && this.isRtl && SimpleBar.getRtlHelpers().isRtlScrollingInverted ? -scrollOffset : scrollOffset;
        var scrollPourcent = scrollOffset / (contentSize - hostSize);
        var handleOffset = ~~((trackSize - scrollbar.size) * scrollPourcent);
        handleOffset = axis === 'x' && this.isRtl && SimpleBar.getRtlHelpers().isRtlScrollbarInverted ? handleOffset + (trackSize - scrollbar.size) : handleOffset;
        scrollbar.el.style.transform = axis === 'x' ? "translate3d(".concat(handleOffset, "px, 0, 0)") : "translate3d(0, ".concat(handleOffset, "px, 0)");
      }
    }, {
      key: "toggleTrackVisibility",
      value: function toggleTrackVisibility() {
        var axis = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'y';
        var track = this.axis[axis].track.el;
        var scrollbar = this.axis[axis].scrollbar.el;

        if (this.axis[axis].isOverflowing || this.axis[axis].forceVisible) {
          track.style.visibility = 'visible';
          this.contentEl.style[this.axis[axis].overflowAttr] = 'scroll';
        } else {
          track.style.visibility = 'hidden';
          this.contentEl.style[this.axis[axis].overflowAttr] = 'hidden';
        } // Even if forceVisible is enabled, scrollbar itself should be hidden


        if (this.axis[axis].isOverflowing) {
          scrollbar.style.visibility = 'visible';
        } else {
          scrollbar.style.visibility = 'hidden';
        }
      }
    }, {
      key: "hideNativeScrollbar",
      value: function hideNativeScrollbar() {
        this.offsetEl.style[this.isRtl ? 'left' : 'right'] = this.axis.y.isOverflowing || this.axis.y.forceVisible ? "-".concat(this.scrollbarWidth || this.minScrollbarWidth, "px") : 0;
        this.offsetEl.style.bottom = this.axis.x.isOverflowing || this.axis.x.forceVisible ? "-".concat(this.scrollbarWidth || this.minScrollbarWidth, "px") : 0; // If floating scrollbar

        if (!this.scrollbarWidth) {
          var paddingDirection = [this.isRtl ? 'paddingLeft' : 'paddingRight'];
          this.contentEl.style[paddingDirection] = this.axis.y.isOverflowing || this.axis.y.forceVisible ? "calc(".concat(this.elStyles[paddingDirection], " + ").concat(this.minScrollbarWidth, "px)") : this.elStyles[paddingDirection];
          this.contentEl.style.paddingBottom = this.axis.x.isOverflowing || this.axis.x.forceVisible ? "calc(".concat(this.elStyles.paddingBottom, " + ").concat(this.minScrollbarWidth, "px)") : this.elStyles.paddingBottom;
        }
      }
      /**
       * On scroll event handling
       */

    }, {
      key: "onMouseMoveForAxis",
      value: function onMouseMoveForAxis() {
        var axis = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'y';
        this.axis[axis].track.rect = this.axis[axis].track.el.getBoundingClientRect();
        this.axis[axis].scrollbar.rect = this.axis[axis].scrollbar.el.getBoundingClientRect();
        var isWithinScrollbarBoundsX = this.isWithinBounds(this.axis[axis].scrollbar.rect);

        if (isWithinScrollbarBoundsX) {
          this.axis[axis].scrollbar.el.classList.add(this.classNames.hover);
        } else {
          this.axis[axis].scrollbar.el.classList.remove(this.classNames.hover);
        }

        if (this.isWithinBounds(this.axis[axis].track.rect)) {
          this.showScrollbar(axis);
          this.axis[axis].track.el.classList.add(this.classNames.hover);
        } else {
          this.axis[axis].track.el.classList.remove(this.classNames.hover);
        }
      }
    }, {
      key: "onMouseLeaveForAxis",
      value: function onMouseLeaveForAxis() {
        var axis = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'y';
        this.axis[axis].track.el.classList.remove(this.classNames.hover);
        this.axis[axis].scrollbar.el.classList.remove(this.classNames.hover);
      }
    }, {
      key: "showScrollbar",

      /**
       * Show scrollbar
       */
      value: function showScrollbar() {
        var axis = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'y';
        var scrollbar = this.axis[axis].scrollbar.el;

        if (!this.axis[axis].isVisible) {
          scrollbar.classList.add(this.classNames.visible);
          this.axis[axis].isVisible = true;
        }

        if (this.options.autoHide) {
          this.hideScrollbars();
        }
      }
      /**
       * Hide Scrollbar
       */

    }, {
      key: "onDragStart",

      /**
       * on scrollbar handle drag movement starts
       */
      value: function onDragStart(e) {
        var axis = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'y';
        var scrollbar = this.axis[axis].scrollbar.el; // Measure how far the user's mouse is from the top of the scrollbar drag handle.

        var eventOffset = axis === 'y' ? e.pageY : e.pageX;
        this.axis[axis].dragOffset = eventOffset - scrollbar.getBoundingClientRect()[this.axis[axis].offsetAttr];
        this.draggedAxis = axis;
        document.addEventListener('mousemove', this.drag);
        document.addEventListener('mouseup', this.onEndDrag);
      }
      /**
       * Drag scrollbar handle
       */

    }, {
      key: "getScrollElement",

      /**
       * Getter for original scrolling element
       */
      value: function getScrollElement() {
        return this.contentEl;
      }
    }, {
      key: "removeListeners",
      value: function removeListeners() {
        var _this4 = this; // Event listeners


        if (this.options.autoHide) {
          this.el.removeEventListener('mouseenter', this.onMouseEnter);
        }

        ['mousedown', 'click', 'dblclick', 'touchstart', 'touchend', 'touchmove'].forEach(function (e) {
          _this4.el.removeEventListener(e, _this4.onPointerEvent);
        });
        this.el.removeEventListener('mousemove', this.onMouseMove);
        this.el.removeEventListener('mouseleave', this.onMouseLeave);
        this.contentEl.removeEventListener('scroll', this.onScroll);
        window.removeEventListener('resize', this.onWindowResize);
        this.mutationObserver && this.mutationObserver.disconnect();
        this.resizeObserver.disconnect(); // Cancel all debounced functions

        this.recalculate.cancel();
        this.onMouseMove.cancel();
        this.hideScrollbars.cancel();
        this.onWindowResize.cancel();
      }
      /**
       * UnMount mutation observer and delete SimpleBar instance from DOM element
       */

    }, {
      key: "unMount",
      value: function unMount() {
        this.removeListeners();
        this.el.SimpleBar = null;
      }
      /**
       * Recursively walks up the parent nodes looking for this.el
       */

    }, {
      key: "isChildNode",
      value: function isChildNode(el) {
        if (el === null) return false;
        if (el === this.el) return true;
        return this.isChildNode(el.parentNode);
      }
      /**
       * Check if mouse is within bounds
       */

    }, {
      key: "isWithinBounds",
      value: function isWithinBounds(bbox) {
        return this.mouseX >= bbox.left && this.mouseX <= bbox.left + bbox.width && this.mouseY >= bbox.top && this.mouseY <= bbox.top + bbox.height;
      }
    }], [{
      key: "getRtlHelpers",
      value: function getRtlHelpers() {
        var dummyDiv = document.createElement('div');
        dummyDiv.innerHTML = '<div class="hs-dummy-scrollbar-size"><div style="height: 200%; width: 200%; margin: 10px 0;"></div></div>';
        var scrollbarDummyEl = dummyDiv.firstElementChild;
        document.body.appendChild(scrollbarDummyEl);
        var dummyContainerChild = scrollbarDummyEl.firstElementChild;
        scrollbarDummyEl.scrollLeft = 0;
        var dummyContainerOffset = SimpleBar.getOffset(scrollbarDummyEl);
        var dummyContainerChildOffset = SimpleBar.getOffset(dummyContainerChild);
        scrollbarDummyEl.scrollLeft = 999;
        var dummyContainerScrollOffsetAfterScroll = SimpleBar.getOffset(dummyContainerChild);
        return {
          // determines if the scrolling is responding with negative values
          isRtlScrollingInverted: dummyContainerOffset.left !== dummyContainerChildOffset.left && dummyContainerChildOffset.left - dummyContainerScrollOffsetAfterScroll.left !== 0,
          // determines if the origin scrollbar position is inverted or not (positioned on left or right)
          isRtlScrollbarInverted: dummyContainerOffset.left !== dummyContainerChildOffset.left
        };
      }
    }, {
      key: "initHtmlApi",
      value: function initHtmlApi() {
        this.initDOMLoadedElements = this.initDOMLoadedElements.bind(this); // MutationObserver is IE11+

        if (typeof MutationObserver !== 'undefined') {
          // Mutation observer to observe dynamically added elements
          this.globalObserver = new MutationObserver(function (mutations) {
            mutations.forEach(function (mutation) {
              Array.from(mutation.addedNodes).forEach(function (addedNode) {
                if (addedNode.nodeType === 1) {
                  if (addedNode.hasAttribute('data-simplebar')) {
                    !addedNode.SimpleBar && new SimpleBar(addedNode, SimpleBar.getElOptions(addedNode));
                  } else {
                    Array.from(addedNode.querySelectorAll('[data-simplebar]')).forEach(function (el) {
                      !el.SimpleBar && new SimpleBar(el, SimpleBar.getElOptions(el));
                    });
                  }
                }
              });
              Array.from(mutation.removedNodes).forEach(function (removedNode) {
                if (removedNode.nodeType === 1) {
                  if (removedNode.hasAttribute('data-simplebar')) {
                    removedNode.SimpleBar && removedNode.SimpleBar.unMount();
                  } else {
                    Array.from(removedNode.querySelectorAll('[data-simplebar]')).forEach(function (el) {
                      el.SimpleBar && el.SimpleBar.unMount();
                    });
                  }
                }
              });
            });
          });
          this.globalObserver.observe(document, {
            childList: true,
            subtree: true
          });
        } // Taken from jQuery `ready` function
        // Instantiate elements already present on the page


        if (document.readyState === 'complete' || document.readyState !== 'loading' && !document.documentElement.doScroll) {
          // Handle it asynchronously to allow scripts the opportunity to delay init
          window.setTimeout(this.initDOMLoadedElements);
        } else {
          document.addEventListener('DOMContentLoaded', this.initDOMLoadedElements);
          window.addEventListener('load', this.initDOMLoadedElements);
        }
      } // Helper function to retrieve options from element attributes

    }, {
      key: "getElOptions",
      value: function getElOptions(el) {
        var options = Array.from(el.attributes).reduce(function (acc, attribute) {
          var option = attribute.name.match(/data-simplebar-(.+)/);

          if (option) {
            var key = option[1].replace(/\W+(.)/g, function (x, chr) {
              return chr.toUpperCase();
            });

            switch (attribute.value) {
              case 'true':
                acc[key] = true;
                break;

              case 'false':
                acc[key] = false;
                break;

              case undefined:
                acc[key] = true;
                break;

              default:
                acc[key] = attribute.value;
            }
          }

          return acc;
        }, {});
        return options;
      }
    }, {
      key: "removeObserver",
      value: function removeObserver() {
        this.globalObserver.disconnect();
      }
    }, {
      key: "initDOMLoadedElements",
      value: function initDOMLoadedElements() {
        document.removeEventListener('DOMContentLoaded', this.initDOMLoadedElements);
        window.removeEventListener('load', this.initDOMLoadedElements);
        Array.from(document.querySelectorAll('[data-simplebar]')).forEach(function (el) {
          if (!el.SimpleBar) new SimpleBar(el, SimpleBar.getElOptions(el));
        });
      }
    }, {
      key: "getOffset",
      value: function getOffset(el) {
        var rect = el.getBoundingClientRect();
        return {
          top: rect.top + (window.pageYOffset || document.documentElement.scrollTop),
          left: rect.left + (window.pageXOffset || document.documentElement.scrollLeft)
        };
      }
    }]);

    return SimpleBar;
  }();
  /**
   * HTML API
   * Called only in a browser env.
   */


  SimpleBar.defaultOptions = {
    autoHide: true,
    forceVisible: false,
    classNames: {
      content: 'simplebar-content',
      offset: 'simplebar-offset',
      mask: 'simplebar-mask',
      wrapper: 'simplebar-wrapper',
      placeholder: 'simplebar-placeholder',
      scrollbar: 'simplebar-scrollbar',
      track: 'simplebar-track',
      heightAutoObserverWrapperEl: 'simplebar-height-auto-observer-wrapper',
      heightAutoObserverEl: 'simplebar-height-auto-observer',
      visible: 'simplebar-visible',
      horizontal: 'simplebar-horizontal',
      vertical: 'simplebar-vertical',
      hover: 'simplebar-hover'
    },
    scrollbarMinSize: 25,
    scrollbarMaxSize: 0,
    timeout: 1000
  };

  if (canUseDom) {
    SimpleBar.initHtmlApi();
  }

  return SimpleBar;
});
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../../../../../node_modules/webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js")))

/***/ }),

/***/ "./resources/assets/frontend/js/frontend_dashboard.js":
/*!************************************************************!*\
  !*** ./resources/assets/frontend/js/frontend_dashboard.js ***!
  \************************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _assets_js_framework_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./../assets/js/framework.js */ "./resources/assets/frontend/assets/js/framework.js");
/* harmony import */ var _assets_js_framework_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_assets_js_framework_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _assets_js_jquery_3_3_1_min_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./../assets/js/jquery-3.3.1.min.js */ "./resources/assets/frontend/assets/js/jquery-3.3.1.min.js");
/* harmony import */ var _assets_js_jquery_3_3_1_min_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_assets_js_jquery_3_3_1_min_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _assets_js_mmenu_min_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./../assets/js/mmenu.min.js */ "./resources/assets/frontend/assets/js/mmenu.min.js");
/* harmony import */ var _assets_js_mmenu_min_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_assets_js_mmenu_min_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _assets_js_simplebar_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./../assets/js/simplebar.js */ "./resources/assets/frontend/assets/js/simplebar.js");
/* harmony import */ var _assets_js_simplebar_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_assets_js_simplebar_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _assets_js_main_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./../assets/js/main.js */ "./resources/assets/frontend/assets/js/main.js");
/* harmony import */ var _assets_js_main_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_assets_js_main_js__WEBPACK_IMPORTED_MODULE_4__);






/***/ }),

/***/ "./resources/assets/frontend/scss/frontend_dashboard.scss":
/*!****************************************************************!*\
  !*** ./resources/assets/frontend/scss/frontend_dashboard.scss ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/scss/pages/blog/blog_article.scss":
/*!************************************************************!*\
  !*** ./resources/assets/scss/pages/blog/blog_article.scss ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/scss/pages/blog/blog_home.scss":
/*!*********************************************************!*\
  !*** ./resources/assets/scss/pages/blog/blog_home.scss ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/scss/pages/blog/blog_menu.scss":
/*!*********************************************************!*\
  !*** ./resources/assets/scss/pages/blog/blog_menu.scss ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/scss/pages/cart/cart.scss":
/*!****************************************************!*\
  !*** ./resources/assets/scss/pages/cart/cart.scss ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/scss/pages/category/category.scss":
/*!************************************************************!*\
  !*** ./resources/assets/scss/pages/category/category.scss ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/scss/pages/course/course.scss":
/*!********************************************************!*\
  !*** ./resources/assets/scss/pages/course/course.scss ***!
  \********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/scss/pages/home/home.scss":
/*!****************************************************!*\
  !*** ./resources/assets/scss/pages/home/home.scss ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/scss/pages/pay/pay.scss":
/*!**************************************************!*\
  !*** ./resources/assets/scss/pages/pay/pay.scss ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/scss/pages/teacher/teacher.scss":
/*!**********************************************************!*\
  !*** ./resources/assets/scss/pages/teacher/teacher.scss ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/scss/pages/unistyle/unistyle.scss":
/*!************************************************************!*\
  !*** ./resources/assets/scss/pages/unistyle/unistyle.scss ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/scss/pages/user/user.scss":
/*!****************************************************!*\
  !*** ./resources/assets/scss/pages/user/user.scss ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** multi ./resources/assets/frontend/js/frontend_dashboard.js ./resources/assets/frontend/scss/frontend_dashboard.scss ./resources/assets/scss/pages/home/home.scss ./resources/assets/scss/pages/category/category.scss ./resources/assets/scss/pages/course/course.scss ./resources/assets/scss/pages/teacher/teacher.scss ./resources/assets/scss/pages/pay/pay.scss ./resources/assets/scss/pages/cart/cart.scss ./resources/assets/scss/pages/user/user.scss ./resources/assets/scss/pages/blog/blog_home.scss ./resources/assets/scss/pages/blog/blog_menu.scss ./resources/assets/scss/pages/blog/blog_article.scss ./resources/assets/scss/pages/unistyle/unistyle.scss ***!
  \************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\xampp\htdocs\unimind\resources\assets\frontend\js\frontend_dashboard.js */"./resources/assets/frontend/js/frontend_dashboard.js");
__webpack_require__(/*! C:\xampp\htdocs\unimind\resources\assets\frontend\scss\frontend_dashboard.scss */"./resources/assets/frontend/scss/frontend_dashboard.scss");
__webpack_require__(/*! C:\xampp\htdocs\unimind\resources\assets\scss\pages\home\home.scss */"./resources/assets/scss/pages/home/home.scss");
__webpack_require__(/*! C:\xampp\htdocs\unimind\resources\assets\scss\pages\category\category.scss */"./resources/assets/scss/pages/category/category.scss");
__webpack_require__(/*! C:\xampp\htdocs\unimind\resources\assets\scss\pages\course\course.scss */"./resources/assets/scss/pages/course/course.scss");
__webpack_require__(/*! C:\xampp\htdocs\unimind\resources\assets\scss\pages\teacher\teacher.scss */"./resources/assets/scss/pages/teacher/teacher.scss");
__webpack_require__(/*! C:\xampp\htdocs\unimind\resources\assets\scss\pages\pay\pay.scss */"./resources/assets/scss/pages/pay/pay.scss");
__webpack_require__(/*! C:\xampp\htdocs\unimind\resources\assets\scss\pages\cart\cart.scss */"./resources/assets/scss/pages/cart/cart.scss");
__webpack_require__(/*! C:\xampp\htdocs\unimind\resources\assets\scss\pages\user\user.scss */"./resources/assets/scss/pages/user/user.scss");
__webpack_require__(/*! C:\xampp\htdocs\unimind\resources\assets\scss\pages\blog\blog_home.scss */"./resources/assets/scss/pages/blog/blog_home.scss");
__webpack_require__(/*! C:\xampp\htdocs\unimind\resources\assets\scss\pages\blog\blog_menu.scss */"./resources/assets/scss/pages/blog/blog_menu.scss");
__webpack_require__(/*! C:\xampp\htdocs\unimind\resources\assets\scss\pages\blog\blog_article.scss */"./resources/assets/scss/pages/blog/blog_article.scss");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\unimind\resources\assets\scss\pages\unistyle\unistyle.scss */"./resources/assets/scss/pages/unistyle/unistyle.scss");


/***/ })

/******/ });