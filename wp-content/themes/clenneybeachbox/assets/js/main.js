// Modal
/* form validation plugin */
$.fn.goValidate = function () {
	var $form = this,
		$inputs = $form.find('input:text');

	var validators = {
		name: {
			regex: /^[A-Za-z]{3,}$/
		},
		email: {
			regex: /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/
		},
		phone: {
			regex: /^[2-9]\d{2}-\d{3}-\d{4}$/,
		}
	};
	var validate = function (klass, value) {
		var isValid = true,
			error = '';

		if (!value && /required/.test(klass)) {
			error = 'This field is required';
			isValid = false;
		} else {
			klass = klass.split(/\s/);
			$.each(klass, function (i, k) {
				if (validators[k]) {
					if (value && !validators[k].regex.test(value)) {
						isValid = false;
						error = validators[k].error;
					}
				}
			});
		}
		return {
			isValid: isValid,
			error: error
		};
	};
	var showError = function ($input) {
		var klass = $input.attr('class'),
			value = $input.val(),
			test = validate(klass, value);

		$input.removeClass('invalid');
		$('#form-error').addClass('hide');

		if (!test.isValid) {
			$input.addClass('invalid');

			if (typeof $input.data('shown') == 'undefined' || $input.data('shown') == false) {
				$input.popover('show');
			}

		} else {
			$('#form-success').addClass('hide');
			$input.popover('hide');
		}
	};

	$inputs.keyup(function () {
		showError($(this));
	});

	$inputs.on('shown.bs.popover', function () {
		$(this).data('shown', true);
	});

	$inputs.on('hidden.bs.popover', function () {
		$(this).data('shown', false);
	});

	$form.submit(function (e) {

		$inputs.each(function () {
			/* test each input */
			if ($(this).is('.required') || $(this).hasClass('invalid')) {
				showError($(this));
			}
		})



		if ($form.find('input.invalid').length) {
			/* form is not valid */
			e.preventDefault();
			$('#form-error').toggleClass('hide');
		} else {
			$('#form-success').toggleClass('hide');
			setTimeout(function () {
				$('#myModal').modal('hide');
			}, 2000);
		}



	});
	return this;
};
$('form').goValidate();
// End of Modal
//





// 💪💪💪 CONTACT JS 💪💪💪💪💪💪💪💪💪💪💪💪💪💪💪
//
$(function () {
	$('#contact-form').goValidate();

	$('#contact-form').on('submit', function (e) {
		if (!e.isDefaultPrevented()) {
			var url = 'email.php';

			$.ajax({
				type: 'POST',
				url: url,
				data: $(this).serialize(),
				success: function () {
					return false;
				}

			});
			return false;
		}
	});
});
//
// 💪💪💪💪💪💪💪💪💪 END CONTACT JS 💪💪💪💪💪
//







//
// 💪💪💪 SCROLL TO TOP 💪💪💪💪💪💪💪💪💪💪💪💪
//
var scrolltotop = {
	setting: {
		startline: 100,
		scrollto: 0,
		scrollduration: 1e3,
		fadeduration: [500, 100]
	},
	controlHTML: '<img src="./wp-content/themes/clenneybeachbox/assets/images/up-arrow.svg" />',
	controlattrs: {
		offsetx: 100,
		offsety: 75
	},
	anchorkeyword: '#top',
	state: {
		isvisible: !1,
		shouldvisible: !1
	},
	scrollup: function () {
		this.cssfixedsupport || this.$control.css({
			opacity: 0
		});
		var t = isNaN(this.setting.scrollto) ? this.setting.scrollto : parseInt(this.setting.scrollto);
		t = 'string' == typeof t && 1 == jQuery('#' + t).length ? jQuery('#' + t).offset().top : 0, this.$body.animate({
			scrollTop: t
		}, this.setting.scrollduration);
	},
	keepfixed: function () {
		var t = jQuery(window),
			o = t.scrollLeft() + t.width() - this.$control.width() - this.controlattrs.offsetx,
			s = t.scrollTop() + t.height() - this.$control.height() - this.controlattrs.offsety;
		this.$control.css({
			left: o + 'px',
			top: s + 'px'
		});
	},
	togglecontrol: function () {
		var t = jQuery(window).scrollTop();
		this.cssfixedsupport || this.keepfixed(), this.state.shouldvisible = t >= this.setting.startline ? !0 : !1, this.state.shouldvisible && !this.state.isvisible ? (this.$control.stop().animate({
			opacity: 1
		}, this.setting.fadeduration[0]), this.state.isvisible = !0) : 0 == this.state.shouldvisible && this.state.isvisible && (this.$control.stop().animate({
			opacity: 0
		}, this.setting.fadeduration[1]), this.state.isvisible = !1);
	},
	init: function () {
		jQuery(document).ready(function (t) {
			var o = scrolltotop,
				s = document.all;
			o.cssfixedsupport = !s || s && 'CSS1Compat' == document.compatMode && window.XMLHttpRequest, o.$body = t(window.opera ? 'CSS1Compat' == document.compatMode ? 'html' : 'body' : 'html,body'), o.$control = t('<div id="topcontrol">' + o.controlHTML + '</div>').css({
				position: o.cssfixedsupport ? 'fixed' : 'absolute',
				bottom: o.controlattrs.offsety,
				right: o.controlattrs.offsetx,
				opacity: 0,
				cursor: 'pointer'
			}).attr({
				title: 'Scroll to Top'
			}).click(function () {
				return o.scrollup(), !1;
			}).appendTo('body'), document.all && !window.XMLHttpRequest && '' != o.$control.text() && o.$control.css({
				width: o.$control.width()
			}), o.togglecontrol(), t('a[href="' + o.anchorkeyword + '"]').click(function () {
				return o.scrollup(), !1;
			}), t(window).bind('scroll resize', function (t) {
				o.togglecontrol();
			});
		});
	}
};
scrolltotop.init();
jQuery(document).ready(function ($) {
	if (localStorage.getItem('advertOnce') !== 'false') {}
	$('#advert-once .advert-button').on('click', function () {
		$('#advert-once').hide();
	});
});




//
// 💪💪💪💪💪💪 END SCROLL TO TOP 💪💪💪💪💪
//


// Date Picker 
$(function () {
	$('#datepicker').datepicker({
		duration: 600
	});
});
$(function () {
	$('#datepicker1').datepicker({
		duration: 600
	});
});
// End of Date Picker


// This adds link to Contact Us main menu item
jQuery(document).ready(function ($) {
	// Adding Bootstrap Modal to WordPress Menu
	$('.launch-contact-modal').find('a').attr('data-toggle', 'modal');
	$('.launch-contact-modal').find('a').attr('data-target', '#myModal');
});