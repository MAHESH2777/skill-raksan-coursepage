$(document).ready(function (e) {
	var t = $(window).innerHeight(),
		o = $(window).innerWidth(),
		n = $(".header").innerHeight() + $(".footer").innerHeight();
	$(".main_body").innerHeight(t - 116), $(".footer").show();
	var c = 4;
	$(".load_2").css({
		width: "188px",
		transition: c + "s ease-in-out"
	}), setTimeout(function () {
		$(".loading_wrap").hide()
	}, 4e3);
	var i = ["raksan_startup_01.jpg", "raksan_startup_02.jpg", "raksan_startup_03.jpg"],
		r = i[Math.floor(Math.random() * i.length)],
		l = "images/";
	$(".landing_body").css({
		"background-image": "url(" + l + r + ")"
	});
	var s = $(this).height() - 50;
	$(".main_body .default_slot .outer_block:first-of-type").css({
		"margin-top": -s
	}), $(".main_body .default_slot .outer_block:nth-of-type(2)").css({
		"margin-top": s + s
	}), $(".main_body .default_slot").css({
		visibility: "visible"
	}), setTimeout(function () {
		$(".main_body .default_slot .outer_block:first-of-type").css({
			"margin-top": 0,
			transition: "1s ease-in-out"
		}), $(".main_body .default_slot .outer_block:nth-of-type(2)").css({
			"margin-top": 0,
			transition: "1s ease-in-out"
		})
	}), 801 > o && ($(this).width() - 50, setTimeout(function () {})), $('.outer_block[name="products_block"]').click(function () {
		setTimeout(function () {
			new Swiper(".pr_slider", {
				slidesPerView: 1,
				loop: !0,
				speed: 400,
				nextButton: ".next",
				prevButton: ".prev",
				autoHeight: !0
			})
		}, 1e3)
	}), $(".content_block, .content_left").css({
		height: t - 228 + "px"
	}), 801 > o && $(".content_block, .content_left").css({
		height: t - 40 + "px"
	}), $(".content_inner_block").css({
		height: t - 248 + "px"
	}), $(".our_team_block .tab_content").height($(".content_inner_block").height()), $(".pos_popup").height($(".content_inner_block").height() - 12), $(".tab_content").height($(".content_inner_block").height() - 0), $(document).on("click", ".outer_block", function () {
		$(this).find(".block_content").addClass("active_block"), $(".block_content").not($(this).find(".block_content")).removeClass("active_block");
		var e = $(this).height() - 50;
		o > 801 && ($(".main_body .default_slot .outer_block:first-of-type").addClass("top_block"), $(".main_body .default_slot .outer_block:nth-of-type(2)").addClass("bottom_block"), $(".main_body .default_slot .outer_block:first-of-type").css({
			"margin-top": -e,
			transition: "1s ease-in-out"
		}), $(".main_body .default_slot .outer_block:nth-of-type(2)").css({
			"margin-top": e + e,
			transition: "1s ease-in-out"
		}));
		var n = $(this).attr("name");
		$(".content_block").css({
			height: t - 228 + "px"
		}), 801 > o && ($(".content_block").css({
			height: t - 40 + "px"
		}), $(".mobile_blocks").fadeOut()), $("." + n).slideDown(), $(".content_block").not($(".content_block." + n)).slideUp(), setTimeout(function () {
			$("." + n).css({
				"z-index": 4
			})
		}, 1700), $(".content_block").not($(".content_block." + n)).css({
			"z-index": 2
		}), $(".mgmt_popup").hide(), $(".v_tabs ul li:first-child").click()
	}), $(".mob_menu li").click(function () {
		$("#nav-icon3").click()
	}), $(".m_about").click(function () {
		$('.outer_block[name="about_block"]').click()
	}), $(".m_cap").click(function () {
		$('.outer_block[name="capabilities_block"]').click()
	}), $(".m_pr").click(function () {
		$('.outer_block[name="products_block"]').click()
	}), $(".m_cl").click(function () {
		$('.outer_block[name="clients_block"]').click()
	}), $(".m_km").click(function () {
		$('.outer_block[name="cteam_block"]').click()
	}), $(".m_ot").click(function () {
		$('.outer_block[name="our_team_block"]').click()
	}), $(".m_car").click(function () {
		$('.outer_block[name="careers_block"]').click()
	}), $(".m_con").click(function () {
		$('.outer_block[name="contact_block"]').click()
	}), $(".close_page").click(function (e) {
		e.preventDefault(), $(".content_block").hide(), $(".block_content").removeClass("active_block"), $(".main_body .default_slot .outer_block:first-of-type").removeClass("top_block"), $(".main_body .default_slot .outer_block:nth-of-type(2)").removeClass("bottom_block"), $(".main_body .default_slot .outer_block:first-of-type").css({
			"margin-top": 0,
			transition: "1s ease-in-out"
		}), $(".main_body .default_slot .outer_block:nth-of-type(2)").css({
			"margin-top": 0,
			transition: "1s ease-in-out"
		}), 801 > o && $(".mobile_blocks").fadeIn()
	}), $(".v_tabs ul li").click(function () {
		var e = $(this).attr("name");
		$(this).addClass("active_tab"), $(this).parents(".content_block ").find(".v_tabs ul li").not($(this)).removeClass("active_tab"), "funatraksan" == e && $(".v_tabs ul li:first-child").addClass("active_tab"), $("." + e).show(), $(this).parents(".content_block ").find(".tab_content").not($(".tab_content." + e)).hide()
	}), $(".mgmt_list li").click(function () {
		var e = $(this).attr("name");
		$("." + e).slideDown(), $(".close_block").hide(), $(".close_block.close_popup").show(), $(".tab_content.c_team").css({
			overflow: "hidden"
		}), $(".tab_content.c_team").mCustomScrollbar("destroy"), 801 > o && ($(".mgmt_list").hide(), $(".mgmt_popup").css({
			position: "relative"
		}))
	}), $(".pos_list li").click(function () {
		var e = $(this).attr("name");
		$("." + e).slideDown(800), $(".close_block").hide(), $(".close_block.close_popup").show(), $(".tab_content.open_positions").css({
			overflow: "hidden"
		}), $(".tab_content.open_positions").mCustomScrollbar("destroy"), 801 > o && ($(".pos_list").hide(), $(".mgmt_popup").css({
			position: "relative"
		}))
	}), $(".close_popup").click(function (e) {
		e.preventDefault(), $(".mgmt_popup").slideUp(), $(".pos_popup").slideUp(), $(".close_block").show(), $(".close_block.close_popup").hide(), $(".tab_content.c_team").css({
			overflow: "auto"
		}), $(".tab_content").mCustomScrollbar("destroy"), o > 801 && $(".tab_content.c_team, .tab_content.open_positions").mCustomScrollbar({
			autoHideScrollbar: !0,
			theme: "minimal-dark"
		}), 801 > o && ($(".mgmt_list").show(), $(".pos_list").show(), $(".mgmt_popup").css({
			position: "absolute"
		}))
	}), $(".privacy_popup").click(function () {
		$(".privacy_policy_content").show(), 801 > o && $(".main_body").hide()
	}), $(".privacy_popup_close,.popup_mask").click(function () {
		$(".privacy_policy_content").hide(), 801 > o && $(".main_body").show()
	}), $(".tc_popup").click(function () {
		$(".tc_content").show(), 801 > o && $(".main_body").hide()
	}), $(".tc_close, .popup_mask").click(function () {
		$(".tc_content").hide(), 801 > o && $(".main_body").show()
	}), $(".job_apply").click(function () {
		$(".careers_content").show(), 801 > o && $(".main_body").hide()
	}), $(".careers_close, .popup_mask").click(function () {
		$(".careers_content").hide(), 801 > o && $(".main_body").show()
	}), $(".feedback").click(function () {
		$(".feedback_content").show(), 801 > o && $(".main_body").hide()
	}), $(".feedback_close, .popup_mask").click(function () {
		$(".feedback_content").hide(), 801 > o && $(".main_body").show()
	}), o > 801 && $(".content_block.capabilities_block, .content_inner_block,.tab_content.c_team, .pos_popup, .mgmt_popup, .popup_gen_main").mCustomScrollbar({
		autoHideScrollbar: !0,
		scrollInertia: 60,
		theme: "minimal-dark"
	}), 801 > o && $(".content_block.capabilities_block, .content_inner_block,.tab_content.c_team, .pos_popup, .mgmt_popup, .popup_gen_main").css({
		overflow: "auto"
	}), 801 > o && ($(".content_block").innerHeight(t - 160), $(".content_inner_block").innerHeight(t - 160), $(".our_team_block .tab_content").height($(".content_inner_block").height() - 100)), 760 > o && ($(".content_inner_block").css({
		height: t - 162 + "px"
	}), $(".main_body").innerHeight(t - (n + 5))), 639 > o && ($(".content_inner_block").css({
		height: t - 216 + "px"
	}), $(".main_body").innerHeight(t - (n + 10))), 639 > o && $(".gallery").flipping_gallery({}), $(".gallery").on("swipeleft", function () {
		return $(".gallery").flipBackward(), !1
	}), $(".gallery").on("swiperight", function () {
		return $(".gallery").flipForward(), !1
	}), $(".mobile_blocks .prev").on("click", function () {
		return $(".gallery").flipBackward(), !1
	}), $(".mobile_blocks .next").on("click", function () {
		return $(".gallery").flipForward(), !1
	}), $(window).on("orientationchange", function () {
		location.reload()
	});
	var a = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
		m = /^\+?([0-9]{2,3})?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
	$("#contact-form").submit(function (e) {
		e.preventDefault();
		e.stopPropagation();
		$("#contact-form .field-error").removeClass("field-error");
		var t = $.trim($("#contact-form #fullName").val());
		if ("" == t || null == t) return $("#contact-form #fullName").addClass("field-error").focus(), !1;
		var o = $("#contact-form #mobile").val();
		if ("" == $.trim(o) || null === o) return $("#contact-form #mobile").addClass("field-error").focus(), !1;
		if (!m.test(o)) return $("#contact-form #mobile").addClass("field-error").focus(), !1;
		var n = $.trim($("#contact-form #email").val());
		if ("" == n || null === n) return $("#contact-form #email").addClass("field-error").focus(), !1;
		if (!a.test(n)) return $("#contact-form #email").addClass("field-error").focus(), !1;
		var mathPart_1 = parseInt($("#mathfirstnum").val(), 10);
		var mathPart_2 = parseInt($("#mathsecondnum").val(), 10);
		var correctMathSolution = parseInt((mathPart_1 + mathPart_2), 10);
		var inputHumanAns = $("#humanCheckCaptchaInput").val();
		
		if(correctMathSolution!=inputHumanAns){
			return $("#contact-form #humanCheckCaptchaInput").addClass("field-error").focus(), !1;
		}
		
		var c = $("#contact-form").serialize();
		$.ajax({
			type: "POST",
			url: "contactFormSubmit.php",
			data: c,
			cache: !1,
			success: function (e) {
				document.getElementById("contact-form").reset(), $(".contact_msg.succ_msg").show(), setTimeout(function () {
					$(".contact_msg.succ_msg").hide()
				}, 3e4)
			},
			error: function (e) {
				alert(e)
			}
		})
	}), $("#contact-form2").submit(function (e) {
		e.preventDefault(), $("#contact-form2 .field-error").removeClass("field-error");
		var t = $.trim($("#contact-form2 #fullName").val());
		if ("" == t || null == t) return $("#contact-form2 #fullName").addClass("field-error").focus(), !1;
		var o = $("#contact-form2 #mobile").val();
		if ("" == $.trim(o) || null === o) return $("#contact-form2 #mobile").addClass("field-error").focus(), !1;
		if (!m.test(o)) return $("#contact-form2 #mobile").addClass("field-error").focus(), !1;
		var n = $.trim($("#contact-form2 #email").val());
		if ("" == n || null === n) return $("#contact-form2 #email").addClass("field-error").focus(), !1;
		if (!a.test(n)) return $("#contact-form2 #email").addClass("field-error").focus(), !1;
		
		var mathPart_2 = parseInt($("#mathfirstnum1").val(), 10);
		var mathPart_3 = parseInt($("#mathsecondnum1").val(), 10);
		var correctMathSolution1 = parseInt((mathPart_2 + mathPart_3), 10);
		var inputHumanAns1 = $("#humanCheckCaptchaInput1").val();
		
		if(correctMathSolution1!=inputHumanAns1){
			return $("#contact-form2 #humanCheckCaptchaInput1").addClass("field-error").focus(), !1;
		}
		
		var c = $("#contact-form2").serialize();
		$.ajax({
			type: "POST",
			url: "contactFormSubmit.php",
			data: c,
			cache: !1,
			success: function (e) {
				document.getElementById("contact-form2").reset(), $(".feedback_msg_p.succ_msg").show(), setTimeout(function () {
					$(".feedback_msg_p.succ_msg").hide()
				}, 3e4)
			},
			error: function (e) {
				alert(e)
			}
		})
	}), $("#sendResumeForm").submit(function (e) {
		e.preventDefault(), $("#sendResumeForm .field-error").removeClass("field-error");
		var t = $.trim($("#sendResumeForm #fullName").val());
		if ("" == t || null == t) return $("#sendResumeForm #fullName").addClass("field-error").focus(), !1;
		var o = $("#sendResumeForm #mobile").val();
		if ("" == $.trim(o) || null === o) return $("#sendResumeForm #mobile").addClass("field-error").focus(), !1;
		if (!m.test(o)) return $("#sendResumeForm #mobile").addClass("field-error").focus(), !1;
		var n = $.trim($("#sendResumeForm #email").val());
		if ("" == n || null === n) return $("#sendResumeForm #email").addClass("field-error").focus(), !1;
		if (!a.test(n)) return $("#sendResumeForm #email").addClass("field-error").focus(), !1;
		var c = $.trim($("#sendResumeForm #attc-file").val());
		if ("" == c || null == c) return $("#sendResumeForm #attc-file").addClass("field-error").focus(), !1;
		var i = {
			url: "jobPostSubmit.php",
			beforeSend: function () {},
			success: function (e) {
				document.getElementById("sendResumeForm").reset(), $(".career_msg.succ_msg").show(), setTimeout(function () {
					$(".career_msg.succ_msg").hide()
				}, 3e4)
			},
			error: function (e) {
				alert(e)
			}
		};
		return $("#sendResumeForm").ajaxSubmit(i), !1
	}), $("#applySendResumeForm").submit(function () {
		$("#applySendResumeForm .field-error").removeClass("field-error");
		var e = $.trim($("#applySendResumeForm #fullName").val());
		if ("" == e || null == e) return $("#applySendResumeForm #fullName").addClass("field-error").focus(), !1;
		var t = $("#applySendResumeForm #mobile").val();
		if ("" == $.trim(t) || null === t) return $("#applySendResumeForm #mobile").addClass("field-error").focus(), !1;
		if (!m.test(t)) return $("#applySendResumeForm #mobile").addClass("field-error").focus(), !1;
		var o = $.trim($("#applySendResumeForm #email").val());
		if ("" == o || null === o) return $("#applySendResumeForm #email").addClass("field-error").focus(), !1;
		if (!a.test(o)) return $("#applySendResumeForm #email").addClass("field-error").focus(), !1;
		var n = $.trim($("#applySendResumeForm #attc-file").val());
		if ("" == n || null == n) return $("#applySendResumeForm #attc-file").addClass("field-error").focus(), !1;
		var c = {
			url: "jobPostSubmit.php",
			beforeSend: function () {},
			success: function (e) {
				document.getElementById("applySendResumeForm").reset(), $(".career_msg_p.succ_msg").show(), setTimeout(function () {
					$(".career_msg_p.succ_msg").hide()
				}, 3e4)
			},
			error: function (e) {
				alert(e)
			}
		};
		return $("#applySendResumeForm").ajaxSubmit(c), !1
	}), $("#nav-icon3").click(function () {
		$(this).toggleClass("open"), $(this).hasClass("open") ? $(".mob_menu").css({
			width: "100%",
			transition: "0.2s ease-in-out"
		}) : $(".mob_menu").css({
			width: "0",
			transition: "0.2s ease-in-out"
		})
	})
});