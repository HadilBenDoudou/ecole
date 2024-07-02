/**
 * Copyright (c) Tiny Technologies, Inc. All rights reserved.
 * Licensed under the LGPL or a commercial license.
 * For LGPL see License.txt in the project root for license information.
 * For commercial licenses see https://www.tiny.cloud/
 *
 * Version: 5.7.0 (2021-02-10)
 */
!function(){"use strict";var n,t,e,o,r=tinymce.util.Tools.resolve("tinymce.PluginManager"),u=tinymce.util.Tools.resolve("tinymce.util.Tools"),i=function(n,t){var e,o=n.dom,r=n.selection.getSelectedBlocks();r.length&&(e=o.getAttrib(r[0],"dir"),u.each(r,function(n){o.getParent(n.parentNode,'*[dir="'+t+'"]',o.getRoot())||o.setAttrib(n,"dir",e!==t?t:null)}),n.nodeChanged())},c=function(n){return function(){return n}},f=c(!1),d=c(!0),l=function(){return m},m=(n=function(n){return n.isNone()},{fold:function(n,t){return n()},is:f,isSome:f,isNone:d,getOr:e=function(n){return n},getOrThunk:t=function(n){return n()},getOrDie:function(n){throw new Error(n||"error: getOrDie called on none.")},getOrNull:c(null),getOrUndefined:c(undefined),or:e,orThunk:t,map:l,each:function(){},bind:l,exists:f,forall:d,filter:l,equals:n,equals_:n,toArray:function(){return[]},toString:c("none()")}),a=function(e){var n=c(e),t=function(){return r},o=function(n){return n(e)},r={fold:function(n,t){return t(e)},is:function(n){return e===n},isSome:d,isNone:f,getOr:n,getOrThunk:n,getOrDie:n,getOrNull:n,getOrUndefined:n,or:t,orThunk:t,map:function(n){return a(n(e))},each:function(n){n(e)},bind:o,exists:o,forall:o,filter:function(n){return n(e)?r:m},toArray:function(){return[e]},toString:function(){return"some("+e+")"},equals:function(n){return n.is(e)},equals_:function(n,t){return n.fold(f,function(n){return t(e,n)})}};return r},s={some:a,none:l,from:function(n){return null===n||n===undefined?m:a(n)}},g=function(n){return!(null===(t=n)||t===undefined);var t},h=(o="function",function(n){return typeof n===o}),v=function(n){if(null===n||n===undefined)throw new Error("Node cannot be null or undefined");return{dom:n}},y={fromHtml:function(n,t){var e=(t||document).createElement("div");if(e.innerHTML=n,!e.hasChildNodes()||1<e.childNodes.length)throw console.error("HTML does not have a single root node",n),new Error("HTML must have a single root node");return v(e.childNodes[0])},fromTag:function(n,t){var e=(t||document).createElement(n);return v(e)},fromText:function(n,t){var e=(t||document).createTextNode(n);return v(e)},fromDom:v,fromPoint:function(n,t,e){return s.from(n.dom.elementFromPoint(t,e)).map(v)}},p=("undefined"!=typeof window||Function("return this;")(),function(t){return function(n){return n.dom.nodeType===t}}),T=p(3),N=p(9),D=p(11),w=h(Element.prototype.attachShadow)&&h(Node.prototype.getRootNode)?function(n){return y.fromDom(n.dom.getRootNode())}:function(n){return N(n)?n:(t=n,y.fromDom(t.dom.ownerDocument));var t},O=function(n){var t,e=w(n);return D(t=e)&&g(t.dom.host)?s.some(e):s.none()},C=function(n){return y.fromDom(n.dom.host)},S=function(n){var t=T(n)?n.dom.parentNode:n.dom;if(t===undefined||null===t||null===t.ownerDocument)return!1;var e,o,r=t.ownerDocument;return O(y.fromDom(t)).fold(function(){return r.body.contains(t)},(e=S,o=C,function(n){return e(o(n))}))},L=function(n,t){return(e=n).style!==undefined&&h(e.style.getPropertyValue)?n.style.getPropertyValue(t):"";var e},R=function(n){return"rtl"===(e="direction",o=(t=n).dom,""!==(r=window.getComputedStyle(o).getPropertyValue(e))||S(t)?r:L(o,e))?"rtl":"ltr";var t,e,o,r},A=function(t,o){return function(e){var n=function(n){var t=y.fromDom(n.element);e.setActive(R(t)===o)};return t.on("NodeChange",n),function(){return t.off("NodeChange",n)}}};r.add("directionality",function(n){var t,e;(t=n).addCommand("mceDirectionLTR",function(){i(t,"ltr")}),t.addCommand("mceDirectionRTL",function(){i(t,"rtl")}),(e=n).ui.registry.addToggleButton("ltr",{tooltip:"Left to right",icon:"ltr",onAction:function(){return e.execCommand("mceDirectionLTR")},onSetup:A(e,"ltr")}),e.ui.registry.addToggleButton("rtl",{tooltip:"Right to left",icon:"rtl",onAction:function(){return e.execCommand("mceDirectionRTL")},onSetup:A(e,"rtl")})})}();