(function(){var o,l;return o=window.jQuery||require("jquery"),o.propHooks.scrollTop=o.propHooks.scrollLeft={get:function(o,l){var t=null;return"HTML"!==o.tagName&&"BODY"!==o.tagName||("scrollLeft"===l?t=window.scrollX:"scrollTop"===l&&(t=window.scrollY)),null==t&&(t=o[l]),t}},o.Tween.propHooks.scrollTop=o.Tween.propHooks.scrollLeft={get:function(l){return o.propHooks.scrollTop.get(l.elem,l.prop)},set:function(o){"HTML"===o.elem.tagName||"BODY"===o.elem.tagName?(o.options.bodyScrollLeft=o.options.bodyScrollLeft||window.scrollX,o.options.bodyScrollTop=o.options.bodyScrollTop||window.scrollY,"scrollLeft"===o.prop?o.options.bodyScrollLeft=Math.round(o.now):"scrollTop"===o.prop&&(o.options.bodyScrollTop=Math.round(o.now)),window.scrollTo(o.options.bodyScrollLeft,o.options.bodyScrollTop)):o.elem.nodeType&&o.elem.parentNode&&(o.elem[o.prop]=o.now)}},l={config:{duration:400,easing:"swing",callback:null,durationMode:"each",offsetTop:0,offsetLeft:0},configure:function(t){return o.extend(l.config,t||{}),this},scroll:function(t,e){var r,n,s,c,i,p,f,a,d,u,g,h,T,w,m,L,b;return r=t.pop(),n=r.$container,s=r.$target,c=o("<span/>").css({position:"absolute",top:"0px",left:"0px"}),i=n.css("position"),n.css({position:"relative"}),c.appendTo(n),u=c.offset().top,g=s.offset().top,h=g-u-parseInt(e.offsetTop,10),T=c.offset().left,w=s.offset().left,m=w-T-parseInt(e.offsetLeft,10),p=n.prop("scrollTop"),f=n.prop("scrollLeft"),c.remove(),n.css({position:i}),L={},b=function(){return 0===t.length?"function"==typeof e.callback&&e.callback():l.scroll(t,e),!0},e.onlyIfOutside&&(a=p+n.height(),d=f+n.width(),p<h&&h<a&&(h=p),f<m&&m<d&&(m=f)),h!==p&&(L.scrollTop=h),m!==f&&(L.scrollLeft=m),n.prop("scrollHeight")===n.height()&&delete L.scrollTop,n.prop("scrollWidth")===n.width()&&delete L.scrollLeft,null!=L.scrollTop||null!=L.scrollLeft?n.animate(L,{duration:e.duration,easing:e.easing,complete:b}):b(),!0},fn:function(t){var e,r,n,s;e=[];var c=o(this);if(0===c.length)return this;for(r=o.extend({},l.config,t),n=c.parent(),s=n.get(0);1===n.length&&s!==document.body&&s!==document;){var i,p;i="visible"!==n.css("overflow-y")&&s.scrollHeight!==s.clientHeight,p="visible"!==n.css("overflow-x")&&s.scrollWidth!==s.clientWidth,(i||p)&&(e.push({$container:n,$target:c}),c=n),n=n.parent(),s=n.get(0)}return e.push({$container:o("html"),$target:c}),"all"===r.durationMode&&(r.duration/=e.length),l.scroll(e,r),this}},o.ScrollTo=o.ScrollTo||l,o.fn.ScrollTo=o.fn.ScrollTo||l.fn,l}).call(this);