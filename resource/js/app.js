function runAllForms() {
	$.fn.slider && $(".slider").slider(), $.fn.select2 && $("select.select2").each(function() {
		var e = $(this),
		t = e.attr("data-select-width") || "100%";
		e.select2({
			allowClear: !0,
			width: t
		}), e = null
	}), $.fn.mask && $("[data-mask]").each(function() {
		var e = $(this),
		t = e.attr("data-mask") || "error...",
		a = e.attr("data-mask-placeholder") || "X";
		e.mask(t, {
			placeholder: a
		}), e = null
	}), $.fn.autocomplete && $("[data-autocomplete]").each(function() {
		var e = $(this),
		t = e.data("autocomplete") || ["The", "Quick", "Brown", "Fox", "Jumps", "Over", "Three", "Lazy", "Dogs"];
		e.autocomplete({
			source: t
		}), e = null
	}), $.fn.datepicker && $(".datepicker").each(function() {
		var e = $(this),
		t = e.attr("data-dateformat") || "dd.mm.yy";
		e.datepicker({
			dateFormat: t,
			prevText: '<i class="fa fa-chevron-left"></i>',
			nextText: '<i class="fa fa-chevron-right"></i>'
		}), e = null
	}), $("button[data-loading-text]").on("click", function() {
		var e = $(this);
		e.button("loading"), setTimeout(function() {
			e.button("reset"), e = null
		}, 3e3)
	})
}

function runAllCharts() {
	if ($.fn.sparkline) {
		var e, t, a, o, n, i, r, l, s, d, c, h, u, p, f, g, m, v, b, k, w, C, y, x, _, S, A, j, D, R, M, T, L, W, F, B, E, z, N, P, O, U, q, I, J, Y, H, Q, V, X, K, G, Z, ee, te, ae, oe, ne, ie, re, le, se, de, ce, he, ue, pe, fe, ge, me, ve, $e;
		$(".sparkline:not(:has(>canvas))").each(function() {
			var be = $(this),
			ke = be.data("sparkline-type") || "bar";
			if ("bar" == ke && (e = be.data("sparkline-bar-color") || be.css("color") || "#0000f0", t = be.data("sparkline-height") || "26px", a = be.data("sparkline-barwidth") || 5, o = be.data("sparkline-barspacing") || 2, n = be.data("sparkline-negbar-color") || "#A90329", i = be.data("sparkline-barstacked-color") || ["#A90329", "#0099c6", "#98AA56", "#da532c", "#4490B1", "#6E9461", "#990099", "#B4CAD3"], be.sparkline("html", {
				barColor: e,
				type: ke,
				height: t,
				barWidth: a,
				barSpacing: o,
				stackedBarColor: i,
				negBarColor: n,
				zeroAxis: "false"
			}), be = null), "line" == ke && (t = be.data("sparkline-height") || "20px", ee = be.data("sparkline-width") || "90px", r = be.data("sparkline-line-color") || be.css("color") || "#0000f0", l = be.data("sparkline-line-width") || 1, s = be.data("fill-color") || "#c0d0f0", d = be.data("sparkline-spot-color") || "#f08000", c = be.data("sparkline-minspot-color") || "#ed1c24", h = be.data("sparkline-maxspot-color") || "#f08000", u = be.data("sparkline-highlightspot-color") || "#50f050", p = be.data("sparkline-highlightline-color") || "f02020", f = be.data("sparkline-spotradius") || 1.5, thisChartMinYRange = be.data("sparkline-min-y") || "undefined", thisChartMaxYRange = be.data("sparkline-max-y") || "undefined", thisChartMinXRange = be.data("sparkline-min-x") || "undefined", thisChartMaxXRange = be.data("sparkline-max-x") || "undefined", thisMinNormValue = be.data("min-val") || "undefined", thisMaxNormValue = be.data("max-val") || "undefined", thisNormColor = be.data("norm-color") || "#c0c0c0", thisDrawNormalOnTop = be.data("draw-normal") || !1, be.sparkline("html", {
				type: "line",
				width: ee,
				height: t,
				lineWidth: l,
				lineColor: r,
				fillColor: s,
				spotColor: d,
				minSpotColor: c,
				maxSpotColor: h,
				highlightSpotColor: u,
				highlightLineColor: p,
				spotRadius: f,
				chartRangeMin: thisChartMinYRange,
				chartRangeMax: thisChartMaxYRange,
				chartRangeMinX: thisChartMinXRange,
				chartRangeMaxX: thisChartMaxXRange,
				normalRangeMin: thisMinNormValue,
				normalRangeMax: thisMaxNormValue,
				normalRangeColor: thisNormColor,
				drawNormalOnTop: thisDrawNormalOnTop
			}), be = null), "pie" == ke && (g = be.data("sparkline-piecolor") || ["#B4CAD3", "#4490B1", "#98AA56", "#da532c", "#6E9461", "#0099c6", "#990099", "#717D8A"], m = be.data("sparkline-piesize") || 90, v = be.data("border-color") || "#45494C", b = be.data("sparkline-offset") || 0, be.sparkline("html", {
				type: "pie",
				width: m,
				height: m,
				tooltipFormat: '<span style="color: {{color}}">&#9679;</span> ({{percent.1}}%)',
				sliceColors: g,
				borderWidth: 1,
				offset: b,
				borderColor: v
			}), be = null), "box" == ke && (k = be.data("sparkline-width") || "auto", w = be.data("sparkline-height") || "auto", C = be.data("sparkline-boxraw") || !1, y = be.data("sparkline-targetval") || "undefined", x = be.data("sparkline-min") || "undefined", _ = be.data("sparkline-max") || "undefined", S = be.data("sparkline-showoutlier") || !0, A = be.data("sparkline-outlier-iqr") || 1.5, j = be.data("sparkline-spotradius") || 1.5, D = be.css("color") || "#000000", R = be.data("fill-color") || "#c0d0f0", M = be.data("sparkline-whis-color") || "#000000", T = be.data("sparkline-outline-color") || "#303030", L = be.data("sparkline-outlinefill-color") || "#f0f0f0", W = be.data("sparkline-outlinemedian-color") || "#f00000", F = be.data("sparkline-outlinetarget-color") || "#40a020", be.sparkline("html", {
				type: "box",
				width: k,
				height: w,
				raw: C,
				target: y,
				minValue: x,
				maxValue: _,
				showOutliers: S,
				outlierIQR: A,
				spotRadius: j,
				boxLineColor: D,
				boxFillColor: R,
				whiskerColor: M,
				outlierLineColor: T,
				outlierFillColor: L,
				medianColor: W,
				targetColor: F
			}), be = null), "bullet" == ke) {
				var we = be.data("sparkline-height") || "auto";
				B = be.data("sparkline-width") || 2, E = be.data("sparkline-bullet-color") || "#ed1c24", z = be.data("sparkline-performance-color") || "#3030f0", N = be.data("sparkline-bulletrange-color") || ["#d3dafe", "#a8b6ff", "#7f94ff"], be.sparkline("html", {
					type: "bullet",
					height: we,
					targetWidth: B,
					targetColor: E,
					performanceColor: z,
					rangeColors: N
				}), be = null
			}
			"discrete" == ke && (P = be.data("sparkline-height") || 26, O = be.data("sparkline-width") || 50, U = be.css("color"), q = be.data("sparkline-line-height") || 5, I = be.data("sparkline-threshold") || "undefined", J = be.data("sparkline-threshold-color") || "#ed1c24", be.sparkline("html", {
				type: "discrete",
				width: O,
				height: P,
				lineColor: U,
				lineHeight: q,
				thresholdValue: I,
				thresholdColor: J
			}), be = null), "tristate" == ke && (Y = be.data("sparkline-height") || 26, H = be.data("sparkline-posbar-color") || "#60f060", Q = be.data("sparkline-negbar-color") || "#f04040", V = be.data("sparkline-zerobar-color") || "#909090", X = be.data("sparkline-barwidth") || 5, K = be.data("sparkline-barspacing") || 2, G = be.data("sparkline-zeroaxis") || !1, be.sparkline("html", {
				type: "tristate",
				height: Y,
				posBarColor: Z,
				negBarColor: Q,
				zeroBarColor: V,
				barWidth: X,
				barSpacing: K,
				zeroAxis: G
			}), be = null), "compositebar" == ke && (t = be.data("sparkline-height") || "20px", ee = be.data("sparkline-width") || "100%", a = be.data("sparkline-barwidth") || 3, l = be.data("sparkline-line-width") || 1, r = be.data("data-sparkline-linecolor") || "#ed1c24", Z = be.data("data-sparkline-barcolor") || "#333333", be.sparkline(be.data("sparkline-bar-val"), {
				type: "bar",
				width: ee,
				height: t,
				barColor: Z,
				barWidth: a
			}), be.sparkline(be.data("sparkline-line-val"), {
				width: ee,
				height: t,
				lineColor: r,
				lineWidth: l,
				composite: !0,
				fillColor: !1
			}), be = null), "compositeline" == ke && (t = be.data("sparkline-height") || "20px", ee = be.data("sparkline-width") || "90px", te = be.data("sparkline-bar-val"), ae = be.data("sparkline-bar-val-spots-top") || null, oe = be.data("sparkline-bar-val-spots-bottom") || null, ne = be.data("sparkline-line-width-top") || 1, ie = be.data("sparkline-line-width-bottom") || 1, re = be.data("sparkline-color-top") || "#333333", le = be.data("sparkline-color-bottom") || "#ed1c24", se = be.data("sparkline-spotradius-top") || 1.5, de = be.data("sparkline-spotradius-bottom") || se, d = be.data("sparkline-spot-color") || "#f08000", ce = be.data("sparkline-minspot-color-top") || "#ed1c24", he = be.data("sparkline-maxspot-color-top") || "#f08000", ue = be.data("sparkline-minspot-color-bottom") || ce, pe = be.data("sparkline-maxspot-color-bottom") || he, fe = be.data("sparkline-highlightspot-color-top") || "#50f050", ge = be.data("sparkline-highlightline-color-top") || "#f02020", me = be.data("sparkline-highlightspot-color-bottom") || fe, thisHighlightLineColor2 = be.data("sparkline-highlightline-color-bottom") || ge, ve = be.data("sparkline-fillcolor-top") || "transparent", $e = be.data("sparkline-fillcolor-bottom") || "transparent", be.sparkline(te, {
				type: "line",
				spotRadius: se,
				spotColor: d,
				minSpotColor: ce,
				maxSpotColor: he,
				highlightSpotColor: fe,
				highlightLineColor: ge,
				valueSpots: ae,
				lineWidth: ne,
				width: ee,
				height: t,
				lineColor: re,
				fillColor: ve
			}), be.sparkline(be.data("sparkline-line-val"), {
				type: "line",
				spotRadius: de,
				spotColor: d,
				minSpotColor: ue,
				maxSpotColor: pe,
				highlightSpotColor: me,
				highlightLineColor: thisHighlightLineColor2,
				valueSpots: oe,
				lineWidth: ie,
				width: ee,
				height: t,
				lineColor: le,
				composite: !0,
				fillColor: $e
			}), be = null)
		})
}
$.fn.easyPieChart && $(".easy-pie-chart").each(function() {
	var e = $(this),
	t = e.css("color") || e.data("pie-color"),
	a = e.data("pie-track-color") || "rgba(0,0,0,0.04)",
	o = parseInt(e.data("pie-size")) || 25;
	e.easyPieChart({
		barColor: t,
		trackColor: a,
		scaleColor: !1,
		lineCap: "butt",
		lineWidth: parseInt(o / 8.5),
		animate: 1500,
		rotate: -90,
		size: o,
		onStep: function(e, t, a) {
			$(this.el).find(".percent").text(Math.round(a))
		}
	}), e = null
})
}

function setup_widgets_desktop() {
	$.fn.jarvisWidgets && enableJarvisWidgets && $("#widget-grid").jarvisWidgets({
		grid: "article",
		widgets: ".jarviswidget",
		localStorage: localStorageJarvisWidgets,
		deleteSettingsKey: "#deletesettingskey-options",
		settingsKeyLabel: "Reset settings?",
		deletePositionKey: "#deletepositionkey-options",
		positionKeyLabel: "Reset position?",
		sortable: sortableJarvisWidgets,
		buttonsHidden: !1,
		toggleButton: !0,
		toggleClass: "fa fa-minus | fa fa-plus",
		toggleSpeed: 200,
		onToggle: function() {},
		deleteButton: !0,
		deleteMsg: "Warning: This action cannot be undone!",
		deleteClass: "fa fa-times",
		deleteSpeed: 200,
		onDelete: function() {},
		editButton: !0,
		editPlaceholder: ".jarviswidget-editbox",
		editClass: "fa fa-cog | fa fa-save",
		editSpeed: 200,
		onEdit: function() {},
		colorButton: !0,
		fullscreenButton: !0,
		fullscreenClass: "fa fa-expand | fa fa-compress",
		fullscreenDiff: 3,
		onFullscreen: function() {},
		customButton: !1,
		customClass: "folder-10 | next-10",
		customStart: function() {
			alert("Hello you, this is a custom button...")
		},
		customEnd: function() {
			alert("bye, till next time...")
		},
		buttonOrder: "%refresh% %custom% %edit% %toggle% %fullscreen% %delete%",
		opacity: 1,
		dragHandle: "> header",
		placeholderClass: "jarviswidget-placeholder",
		indicator: !0,
		indicatorTime: 600,
		ajax: !0,
		timestampPlaceholder: ".jarviswidget-timestamp",
		timestampFormat: "Last update: %m%/%d%/%y% %h%:%i%:%s%",
		refreshButton: !0,
		refreshButtonClass: "fa fa-refresh",
		labelError: "Sorry but there was a error:",
		labelUpdated: "Last Update:",
		labelRefresh: "Refresh",
		labelDelete: "Delete widget:",
		afterLoad: function() {},
		rtl: !1,
		onChange: function() {},
		onSave: function() {},
		ajaxnav: $.navAsAjax
	})
}

function setup_widgets_mobile() {
	enableMobileWidgets && enableJarvisWidgets && setup_widgets_desktop()
}

function loadScript(e, t) {
	if (jsArray[e]) debugState && root.root.console.log("This script was already loaded %c: " + e, debugStyle_warning);
	else {
		var a = jQuery.Deferred(),
		o = document.getElementsByTagName("body")[0],
		n = document.createElement("script");
		n.type = "text/javascript", n.src = e, n.onload = function() {
			a.resolve()
		}, o.appendChild(n), jsArray[e] = a.promise()
	}
	jsArray[e].then(function() {
		"function" == typeof t && t()
	})
}

function checkURL() {
	var e = location.href.split("#").splice(1).join("#");
	if (!e) try {
		var t = window.document.URL;
		t && t.indexOf("#", 0) > 0 && t.indexOf("#", 0) < t.length + 1 && (e = t.substring(t.indexOf("#", 0) + 1))
	} catch (e) {}
	if (container = $("#content"), e) {
		$("nav li.active").removeClass("active"), $('nav li:has(a[href="' + e + '"])').addClass("active");
		var a = $('nav a[href="' + e + '"]').attr("title");
		document.title = a || document.title, debugState && root.console.log("Page title: %c " + document.title, debugStyle_green), loadURL(e + location.search, container)
	} else {
		var o = $('nav > ul > li:first-child > a[href!="#"]');
		window.location.hash = o.attr("href"), o = null
	}
}

function loadURL(e, t) {
	debugState && root.root.console.log("Loading URL: %c" + e, debugStyle), $.ajax({
		type: "GET",
		url: e,
		dataType: "html",
		cache: !0,
		beforeSend: function() {
			if ($.navAsAjax && $(".google_maps")[0] && t[0] == $("#content")[0]) {
				var e = $(".google_maps"),
				a = 0;
				e.each(function() {
					a++;
					var t = document.getElementById(this.id);
					a == e.length + 1 || (t && t.parentNode.removeChild(t), debugState && root.console.log("Destroying maps.........%c" + this.id, debugStyle_warning))
				}), debugState && root.console.log("✔ Google map instances nuked!!!")
			}
			if ($.navAsAjax && $(".dataTables_wrapper")[0] && t[0] == $("#content")[0]) {
				var o = $.fn.dataTable.fnTables(!0);
				$(o).each(function() {
					0 != $(this).find(".details-control").length ? ($(this).find("*").addBack().off().remove(), $(this).dataTable().fnDestroy()) : $(this).dataTable().fnDestroy()
				}), debugState && root.console.log("✔ Datatable instances nuked!!!")
			}
			if ($.navAsAjax && $.intervalArr.length > 0 && t[0] == $("#content")[0] && enableJarvisWidgets) {
				for (; $.intervalArr.length > 0;) clearInterval($.intervalArr.pop());
					debugState && root.console.log("✔ All JarvisWidget intervals cleared")
			}
			if ($.navAsAjax && t[0] == $("#content")[0] && enableJarvisWidgets && $("#widget-grid")[0] && ($("#widget-grid").jarvisWidgets("destroy"), debugState && root.console.log("✔ JarvisWidgets destroyed")), $.navAsAjax && t[0] == $("#content")[0]) {
				if ("function" == typeof pagedestroy) try {
					pagedestroy(), debugState && root.console.log("✔ Pagedestroy()")
				} catch (e) {
					pagedestroy = void 0, debugState && root.console.log("! Pagedestroy() Catch Error")
				}
				$.fn.sparkline && $("#content .sparkline")[0] && ($("#content .sparkline").sparkline("destroy"), debugState && root.console.log("✔ Sparkline Charts destroyed!")), $.fn.easyPieChart && $("#content .easy-pie-chart")[0] && ($("#content .easy-pie-chart").easyPieChart("destroy"), debugState && root.console.log("✔ EasyPieChart Charts destroyed!")), $.fn.select2 && $("#content select.select2")[0] && ($("#content select.select2").select2("destroy"), debugState && root.console.log("✔ Select2 destroyed!")), $.fn.mask && $("#content [data-mask]")[0] && ($("#content [data-mask]").unmask(), debugState && root.console.log("✔ Input Mask destroyed!")), $.fn.datepicker && $("#content .datepicker")[0] && ($("#content .datepicker").off(), $("#content .datepicker").remove(), debugState && root.console.log("✔ Datepicker destroyed!")), $.fn.slider && $("#content .slider")[0] && ($("#content .slider").off(), $("#content .slider").remove(), debugState && root.console.log("✔ Bootstrap Slider destroyed!"))
			}
			pagefunction = null, t.removeData().html(""), t.html('<h1 class="ajax-loading-animation"><i class="fa fa-cog fa-spin"></i> Loading...</h1>'), t[0] == $("#content")[0] && ($("body").find("> *").filter(":not(" + ignore_key_elms + ")").empty().remove(), drawBreadCrumb(), $("html").animate({
				scrollTop: 0
			}, "fast"))
		},
		success: function(e) {
			t.css({
				opacity: "0.0"
			}).html(e).delay(50).animate({
				opacity: "1.0"
			}, 300), e = null, t = null
		},
		error: function(a, o, n, i) {
			t.html('<h4 class="ajax-loading-error"><i class="fa fa-warning txt-color-orangeDark"></i> Error requesting <span class="txt-color-red">' + e + "</span>: " + a.status + ' <span style="text-transform: capitalize;">' + n + "</span></h4>")
		},
		async: !0
	})
}

function drawBreadCrumb(e) {
	var t = $("nav li.active > a"),
	a = t.length;
	bread_crumb.empty(), bread_crumb.append($("<li>Home</li>")), t.each(function() {
		bread_crumb.append($("<li></li>").html($.trim($(this).clone().children(".badge").remove().end().text()))), --a || (document.title = bread_crumb.find("li:last-child").text())
	}), void 0 != e && $.each(e, function(e, t) {
		bread_crumb.append($("<li></li>").html(t)), document.title = bread_crumb.find("li:last-child").text()
	})
}

function pageSetUp() {
	"desktop" === thisDevice ? ($("[rel=tooltip], [data-rel=tooltip]").tooltip(), $("[rel=popover], [data-rel=popover]").popover(), $("[rel=popover-hover], [data-rel=popover-hover]").popover({
		trigger: "hover"
	}), setup_widgets_desktop(), runAllCharts(), runAllForms()) : ($("[rel=popover], [data-rel=popover]").popover(), $("[rel=popover-hover], [data-rel=popover-hover]").popover({
		trigger: "hover"
	}), runAllCharts(), setup_widgets_mobile(), runAllForms())
}

function getParam(e) {
	var t = "[\\?&]" + (e = e.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]")) + "=([^&#]*)",
	a = new RegExp(t).exec(window.location.href);
	return null == a ? "" : a[1]
}
$.intervalArr = [];
var calc_navbar_height = function() {
	var e = null;
	return $("#header").length && (e = $("#header").height()), null === e && (e = $('<div id="header"></div>').height()), null === e ? 49 : e
},
navbar_height = calc_navbar_height,
shortcut_dropdown = $("#shortcut"),
bread_crumb = $("#ribbon ol.breadcrumb"),
topmenu = !1,
thisDevice = null,
ismobile = /iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()),
jsArray = {},
initApp = function(e) {
	return e.addDeviceType = function() {
		return ismobile ? ($.root_.addClass("mobile-detected"), thisDevice = "mobile", fastClick ? ($.root_.addClass("needsclick"), FastClick.attach(document.body), !1) : void 0) : ($.root_.addClass("desktop-detected"), thisDevice = "desktop", !1)
	}, e.menuPos = function() {
		($.root_.hasClass("menu-on-top") || "top" == localStorage.getItem("sm-setmenu")) && (topmenu = !0, $.root_.addClass("menu-on-top"))
	}, e.SmartActions = function() {
		var e = {
			userLogout: function(e) {
				function t() {
					window.location = e.attr("href")
				}
				$.SmartMessageBox({
					title: "<i class='fas fa-sign-out-alt txt-color-orangeDark'></i> Logout <span class='txt-color-orangeDark'><strong>" + $("#show-shortcut").text() + "</strong></span> ?",
					content: e.data("logout-msg") || "You can improve your security further after logging out by closing this opened browser",
					buttons: "[No][Yes]"
				}, function(e) {
					"Yes" == e && ($.root_.addClass("animated fadeOutUp"), setTimeout(t, 1e3))
				})
			},
			resetWidgets: function(e) {
				$.SmartMessageBox({
					title: "<i class='fa fa-refresh' style='color:green'></i> Clear Local Storage",
					content: e.data("reset-msg") || "Would you like to RESET all your saved widgets and clear LocalStorage?1",
					buttons: "[No][Yes]"
				}, function(e) {
					"Yes" == e && localStorage && (localStorage.clear(), location.reload())
				})
			},
			launchFullscreen: function(e) {
				$.root_.hasClass("full-screen") ? ($.root_.removeClass("full-screen"), document.exitFullscreen ? document.exitFullscreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitExitFullscreen && document.webkitExitFullscreen()) : ($.root_.addClass("full-screen"), e.requestFullscreen ? e.requestFullscreen() : e.mozRequestFullScreen ? e.mozRequestFullScreen() : e.webkitRequestFullscreen ? e.webkitRequestFullscreen() : e.msRequestFullscreen && e.msRequestFullscreen())
			},
			minifyMenu: function(e) {
				$.root_.hasClass("menu-on-top") || ($.root_.toggleClass("minified"), $.root_.removeClass("hidden-menu"), $("html").removeClass("hidden-menu-mobile-lock"), e.effect("highlight", {}, 500))
			},
			toggleMenu: function() {
				$.root_.hasClass("menu-on-top") ? $.root_.hasClass("menu-on-top") && $(window).width() < 979 && ($("html").toggleClass("hidden-menu-mobile-lock"), $.root_.toggleClass("hidden-menu"), $.root_.removeClass("minified")) : ($("html").toggleClass("hidden-menu-mobile-lock"), $.root_.toggleClass("hidden-menu"), $.root_.removeClass("minified"))
			},
			toggleShortcut: function() {
				function e() {
					shortcut_dropdown.animate({
						height: "hide"
					}, 300, "easeOutCirc"), $.root_.removeClass("shortcut-on")
				}
				shortcut_dropdown.is(":visible") ? e() : (shortcut_dropdown.animate({
					height: "show"
				}, 200, "easeOutCirc"), $.root_.addClass("shortcut-on")), shortcut_dropdown.find("a").click(function(t) {
					t.preventDefault(), window.location = $(this).attr("href"), setTimeout(e, 300)
				}), $(document).mouseup(function(t) {
					shortcut_dropdown.is(t.target) || 0 !== shortcut_dropdown.has(t.target).length || e()
				})
			}
		};
		$.root_.on("click", '[data-action="userLogout"]', function(t) {
			var a = $(this);
			e.userLogout(a), t.preventDefault(), a = null
		}), $.root_.on("click", '[data-action="resetWidgets"]', function(t) {
			var a = $(this);
			e.resetWidgets(a), t.preventDefault(), a = null
		}), $.root_.on("click", '[data-action="launchFullscreen"]', function(t) {
			e.launchFullscreen(document.documentElement), t.preventDefault()
		}), $.root_.on("click", '[data-action="minifyMenu"]', function(t) {
			var a = $(this);
			e.minifyMenu(a), t.preventDefault(), a = null
		}), $.root_.on("click", '[data-action="toggleMenu"]', function(t) {
			e.toggleMenu(), t.preventDefault()
		}), $.root_.on("click", '[data-action="toggleShortcut"]', function(t) {
			e.toggleShortcut(), t.preventDefault()
		})
	}, e.leftNav = function() {
		topmenu || $("nav ul").jarvismenu({
			accordion: menu_accordion || !0,
			speed: menu_speed || !0,
			closedSign: '<em class="far fa-plus-square"></em>',
			openedSign: '<em class="far fa-minus-square"></em>'
		})
	}, e.domReadyMisc = function() {
		$("#search-mobile").click(function() {
			$.root_.addClass("search-mobile")
		}), $("#cancel-search-js").click(function() {
			$.root_.removeClass("search-mobile")
		}), $("#activity").click(function(e) {
			var t = $(this);
			t.find(".badge").hasClass("bg-color-red") && (t.find(".badge").removeClassPrefix("bg-color-"), t.find(".badge").text("0")), t.next(".ajax-dropdown").is(":visible") ? (t.next(".ajax-dropdown").fadeOut(150), t.removeClass("active")) : (t.next(".ajax-dropdown").fadeIn(150), t.addClass("active"));
			t.next(".ajax-dropdown").find(".btn-group > .active > input").attr("id");
			t = null, e.preventDefault()
		}), $('input[name="activity"]').change(function() {
			var e = $(this);
			url = e.attr("id"), container = $(".ajax-notifications"), loadURL(url, container), e = null
		}), $(document).mouseup(function(e) {
			$(".ajax-dropdown").is(e.target) || 0 !== $(".ajax-dropdown").has(e.target).length || ($(".ajax-dropdown").fadeOut(150), $(".ajax-dropdown").prev().removeClass("active"))
		}), $("button[data-btn-loading]").on("click", function() {
			var e = $(this);
			e.button("loading"), setTimeout(function() {
				e.button("reset")
			}, 3e3)
		}), $this = $("#activity > .badge"), parseInt($this.text()) > 0 && ($this.addClass("bg-color-red bounceIn animated"), $this = null)
	}, e.mobileCheckActivation = function() {
		$(window).width() < 979 ? ($.root_.addClass("mobile-view-activated"), $.root_.removeClass("minified")) : $.root_.hasClass("mobile-view-activated") && $.root_.removeClass("mobile-view-activated"), debugState && console.log("mobileCheckActivation")
	}, e
}({});
initApp.addDeviceType(), initApp.menuPos(), jQuery(document).ready(function() {
	initApp.SmartActions(), initApp.leftNav(), initApp.domReadyMisc()
}),
function(e, t, a) {
	function o() {
		n = t[l](function() {
			i.each(function() {
				var t, a, o = e(this),
				n = e.data(this, d);
				try {
					t = o.width()
				} catch (e) {
					t = o.width
				}
				try {
					a = o.height()
				} catch (e) {
					a = o.height
				}
				t === n.w && a === n.h || o.trigger(s, [n.w = t, n.h = a])
			}), o()
		}, r[c])
	}
	var n, i = e([]),
	r = e.resize = e.extend(e.resize, {}),
	l = "setTimeout",
	s = "resize",
	d = s + "-special-event",
	c = "delay";
	r[c] = throttle_delay, r.throttleWindow = !0, e.event.special[s] = {
		setup: function() {
			if (!r.throttleWindow && this[l]) return !1;
			var t = e(this);
			i = i.add(t);
			try {
				e.data(this, d, {
					w: t.width(),
					h: t.height()
				})
			} catch (a) {
				e.data(this, d, {
					w: t.width,
					h: t.height
				})
			}
			1 === i.length && o()
		},
		teardown: function() {
			if (!r.throttleWindow && this[l]) return !1;
			var t = e(this);
			i = i.not(t), t.removeData(d), i.length || clearTimeout(n)
		},
		add: function(t) {
			function o(t, o, i) {
				var r = e(this),
				l = e.data(this, d);
				l.w = o !== a ? o : r.width(), l.h = i !== a ? i : r.height(), n.apply(this, arguments)
			}
			if (!r.throttleWindow && this[l]) return !1;
			var n;
			if (e.isFunction(t)) return n = t, o;
			n = t.handler, t.handler = o
		}
	}
}(jQuery, this), $("#main").resize(function() {
	initApp.mobileCheckActivation()
});
var ie = function() {
	for (var e = 3, t = document.createElement("div"), a = t.getElementsByTagName("i"); t.innerHTML = "\x3c!--[if gt IE " + ++e + "]><i></i><![endif]--\x3e", a[0];);
		return e > 4 ? e : void 0
}();
if ($.fn.extend({
	jarvismenu: function(e) {
		var t = {
			accordion: "true",
			speed: 200,
			closedSign: "[+]",
			openedSign: "[-]"
		},
		a = $.extend(t, e),
		o = $(this);
		o.find("li").each(function() {
			0 !== $(this).find("ul").length && ($(this).find("a:first").append("<b class='collapse-sign'>" + a.closedSign + "</b>"), "#" == $(this).find("a:first").attr("href") && $(this).find("a:first").click(function() {
				return !1
			}))
		}), o.find("li.active").each(function() {
			$(this).parents("ul").slideDown(a.speed), $(this).parents("ul").parent("li").find("b:first").html(a.openedSign), $(this).parents("ul").parent("li").addClass("open")
		}), o.find("li a").click(function() {
			0 !== $(this).parent().find("ul").length && (a.accordion && ($(this).parent().find("ul").is(":visible") || (parents = $(this).parent().parents("ul"), visible = o.find("ul:visible"), visible.each(function(e) {
				var t = !0;
				parents.each(function(a) {
					if (parents[a] == visible[e]) return t = !1, !1
				}), t && $(this).parent().find("ul") != visible[e] && $(visible[e]).slideUp(a.speed, function() {
					$(this).parent("li").find("b:first").html(a.closedSign), $(this).parent("li").removeClass("open")
				})
		}))), $(this).parent().find("ul:first").is(":visible") && !$(this).parent().find("ul:first").hasClass("active") ? $(this).parent().find("ul:first").slideUp(a.speed, function() {
				$(this).parent("li").removeClass("open"), $(this).parent("li").find("b:first").delay(a.speed).html(a.closedSign)
			}) : $(this).parent().find("ul:first").slideDown(a.speed, function() {
				$(this).parent("li").addClass("open"), $(this).parent("li").find("b:first").delay(a.speed).html(a.openedSign)
			}))
		})
	}
}), jQuery.fn.doesExist = function() {
	return jQuery(this).length > 0
}, $.navAsAjax || $(".google_maps")) {
	var gMapsLoaded = !1;
	window.gMapsCallback = function() {
		gMapsLoaded = !0, $(window).trigger("gMapsLoaded")
	}, window.loadGoogleMaps = function() {
		if (gMapsLoaded) return window.gMapsCallback();
		var e = document.createElement("script");
		e.setAttribute("type", "text/javascript"), e.setAttribute("src", "https://maps.google.com/maps/api/js?sensor=false&callback=gMapsCallback"), (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(e)
	}
}
$.navAsAjax && ($("nav").length && checkURL(), $(document).on("click", 'nav a[href!="#"]', function(e) {
	e.preventDefault();
	var t = $(e.currentTarget);
	t.parent().hasClass("active") || t.attr("target") || ($.root_.hasClass("mobile-view-activated") ? ($.root_.removeClass("hidden-menu"), $("html").removeClass("hidden-menu-mobile-lock"), window.setTimeout(function() {
		window.location.search ? window.location.href = window.location.href.replace(window.location.search, "").replace(window.location.hash, "") + "#" + t.attr("href") : window.location.hash = t.attr("href")
	}, 150)) : window.location.search ? window.location.href = window.location.href.replace(window.location.search, "").replace(window.location.hash, "") + "#" + t.attr("href") : window.location.hash = t.attr("href"))
}), $(document).on("click", 'nav a[target="_blank"]', function(e) {
	e.preventDefault();
	var t = $(e.currentTarget);
	window.open(t.attr("href"))
}), $(document).on("click", 'nav a[target="_top"]', function(e) {
	e.preventDefault();
	var t = $(e.currentTarget);
	window.location = t.attr("href")
}), $(document).on("click", 'nav a[href="#"]', function(e) {
	e.preventDefault()
}), $(window).on("hashchange", function() {
	checkURL()
})), $("body").on("click", function(e) {
	$('[rel="popover"], [data-rel="popover"]').each(function() {
		$(this).is(e.target) || 0 !== $(this).has(e.target).length || 0 !== $(".popover").has(e.target).length || $(this).popover("hide")
	})
}), $("body").on("hidden.bs.modal", ".modal", function() {
	$(this).removeData("bs.modal")
});