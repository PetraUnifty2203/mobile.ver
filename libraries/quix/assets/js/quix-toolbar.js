!function(e,i,s){function o(){var i=Cookies.get("qx-device"),s=e(".qx-devices li");s.removeClass("active"),e('.qx-devices li[data-device="'+i+'"]').addClass("active")}function v(i){var s=Cookies.get("qx-device"),o=e(".qx-responsive-preview__window"),v={desktop:"calc(100% - 0px)",tablet:"768px",phone:"480px"};e("html").removeClass("qx-responsive-preview__"+i),e("html").addClass("qx-responsive-preview__"+s),o.css("width",v[s])}e(function(){e("html").addClass("qx-responsive-preview-active");var i="";v(i),o(),e(".qx-devices li").on("click",function(){var i=e(this).data("device"),s=Cookies.get("qx-device");Cookies.set("qx-device",i),v(s),o()})})}(window.jQuery,window,document);