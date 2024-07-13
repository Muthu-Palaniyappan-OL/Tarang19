(function ($) {

	var $window = $(window),
		$body = $('body'),
		$wrapper = $('#wrapper'),
		$header = $('#header'),
		$footer = $('#footer'),
		$main = $('#main'),
		$greenscreen = $('#greenscreen'),
		$shipwreck = $('#shipwreck'),
		$adzap = $('#adzap'),
		$blockandtackle = $('#blockandtackle'),
		$channelsurfing = $('#channelsurfing'),
		$jam = $('#jam'),
		$fifa = $('#fifa'),
		$basketball = $('#basketball'),
		$futsal = $('#futsal'),
		$cricket = $('#cricket'),
		$carnaticmusic = $('#carnaticmusic'),
		$shortfilm = $('#shortfilm'),
		$photography = $('#photography'),
		$spinayarn = $('#spinayarn'),
		$punsandstandupcomedy = $('#punsandstandupcomedy'),
		$treasurehunt = $('#treasurehunt'),
		$monoacting = $('#monoacting'),
		$stepup = $('#stepup'),
		$band = $('#band'),
		$memes = $('#memes'),
		$fi = $('#fi'),
		$se = $('#se'),
		$countdown = $('#countdown')
	$countdownh = $('#countdownh')
	$startingintro = $('#startingintro'),
		$startingintro2 = $('#startingintro2'),
		$moviereviews = $('#moviereviews'),
		$creativewriting = $('#creativewriting'),
		$punaaku = $('#punaaku'),
		$main_articles = $main.children('article');

	breakpoints({
		xlarge: ['1281px', '1680px'],
		large: ['981px', '1280px'],
		medium: ['737px', '980px'],
		small: ['481px', '736px'],
		xsmall: ['361px', '480px'],
		xxsmall: [null, '360px']
	});

	$footer.hide()
	$se.hide();
	$countdown.hide();
	$countdownh.hide();
	$fi.hide();

	$window.on('load', function () {
		setTimeout(function () {
			$startingintro.show();
			$fi.show();
		}, 1)
		setTimeout(function () {
			$fi.remove();
			$se.show();
		}, 2000)
		window.setTimeout(function () {
			$se.remove();
			$startingintro.remove();
			$body.removeClass('is-preload');
		}, 4000);
		window.setTimeout(function () {
			$countdown.show();
			$footer.show();
			$countdownh.show();
		}, 4501);
	});

	if (browser.name == 'ie') {

		var flexboxFixTimeoutId;

		$window.on('resize.flexbox-fix', function () {

			clearTimeout(flexboxFixTimeoutId);

			flexboxFixTimeoutId = setTimeout(function () {

				if ($wrapper.prop('scrollHeight') > $window.height())
					$wrapper.css('height', 'auto');
				else
					$wrapper.css('height', '100vh');

			}, 250);

		}).triggerHandler('resize.flexbox-fix');

	}

	var $nav = $header.children('nav'),
		$nav_li = $nav.find('li');

	if ($nav_li.length % 2 == 0) {

		$nav.addClass('use-middle');
		$nav_li.eq(($nav_li.length / 2)).addClass('is-middle');

	}

	// Main.
	var delay = 325,
		locked = false;

	// Methods.
	$main._show = function (id, initial) {

		var $article = $main_articles.filter('#' + id);

		if ($article.length == 0)
			return;

		if (locked || (typeof initial != 'undefined' && initial === true)) {

			$body.addClass('is-switching');

			$body.addClass('is-article-visible');

			$main_articles.removeClass('active');

			$header.hide();
			$footer.hide();

			$main.show();
			$article.show();

			$article.addClass('active');

			locked = false;

			setTimeout(function () {
				$body.removeClass('is-switching');
			}, (initial ? 1000 : 0));

			return;

		}

		locked = true;

		if ($body.hasClass('is-article-visible')) {

			var $currentArticle = $main_articles.filter('.active');

			$currentArticle.removeClass('active');

			setTimeout(function () {

				$currentArticle.hide();

				$article.show();

				setTimeout(function () {

					$article.addClass('active');

					$window
						.scrollTop(0)
						.triggerHandler('resize.flexbox-fix');

					setTimeout(function () {
						locked = false;
					}, delay);

				}, 25);

			}, delay);

		} else {

			$body
				.addClass('is-article-visible');

			setTimeout(function () {

				$header.hide();
				$footer.hide();

				// Show main, article.
				$main.show();
				$article.show();

				// Activate article.
				setTimeout(function () {

					$article.addClass('active');

					// Window stuff.
					$window
						.scrollTop(0)
						.triggerHandler('resize.flexbox-fix');

					// Unlock.
					setTimeout(function () {
						locked = false;
					}, delay);

				}, 25);

			}, delay);

		}

	};

	$main._hide = function (addState) {

		var $article = $main_articles.filter('.active');

		// Article not visible? Bail.
		if (!$body.hasClass('is-article-visible'))
			return;

		// Add state?
		if (typeof addState != 'undefined' &&
			addState === true)
			history.pushState(null, null, '#');

		// Handle lock.

		// Already locked? Speed through "hide" steps w/o delays.
		if (locked) {

			$body.addClass('is-switching');

			$article.removeClass('active');

			$article.hide();
			$main.hide();

			$footer.show();
			$header.show();

			$body.removeClass('is-article-visible');

			locked = false;

			$body.removeClass('is-switching');

			$window
				.scrollTop(0)
				.triggerHandler('resize.flexbox-fix');

			return;

		}

		locked = true;

		$article.removeClass('active');

		setTimeout(function () {

			$article.hide();
			$main.hide();

			$footer.show();
			$header.show();

			setTimeout(function () {

				$body.removeClass('is-article-visible');

				$window
					.scrollTop(0)
					.triggerHandler('resize.flexbox-fix');

				setTimeout(function () {
					locked = false;
				}, delay);

			}, 25);

		}, delay);


	};

	$main_articles.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = '';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});

	$greenscreen.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});
	$shipwreck.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});
	$adzap.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});
	$blockandtackle.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});
	$channelsurfing.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});
	$jam.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});
	$fifa.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});
	$basketball.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});
	$futsal.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});
	$cricket.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});
	$carnaticmusic.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});

	$shortfilm.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});

	$photography.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});

	$spinayarn.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});

	$punsandstandupcomedy.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});

	$treasurehunt.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});

	$monoacting.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});

	$stepup.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});

	$band.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});

	$moviereviews.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});

	$memes.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});

	$creativewriting.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});
	$punaaku.each(function () {

		var $this = $(this);

		$('<div class="close">Close</div>')
			.appendTo($this)
			.on('click', function () {
				location.hash = 'events';
			});

		$this.on('click', function (event) {
			event.stopPropagation();
		});

	});


	$body.on('click', function (event) {

		if ($body.hasClass('is-article-visible'))
			$main._hide(true);

	});

	$window.on('keyup', function (event) {

		switch (event.keyCode) {

			case 27:

				if ($body.hasClass('is-article-visible'))
					$main._hide(true);

				break;

			default:
				break;

		}

	});

	$window.on('hashchange', function (event) {

		if (location.hash == '' ||
			location.hash == '#') {

			event.preventDefault();
			event.stopPropagation();

			$main._hide();

		} else if ($main_articles.filter(location.hash).length > 0) {

			event.preventDefault();
			event.stopPropagation();

			$main._show(location.hash.substr(1));

		}

	});

	if ('scrollRestoration' in history)
		history.scrollRestoration = 'manual';
	else {

		var oldScrollPos = 0,
			scrollPos = 0,
			$htmlbody = $('html,body');

		$window
			.on('scroll', function () {

				oldScrollPos = scrollPos;
				scrollPos = $htmlbody.scrollTop();

			})
			.on('hashchange', function () {
				$window.scrollTop(oldScrollPos);
			});

	}


	$main.hide();
	$main_articles.hide();

	if (location.hash != '' &&
		location.hash != '#')
		$window.on('load', function () {
			$main._show(location.hash.substr(1), true);
		});
	$("input[required]").parent("label").addClass("required");


	var target_date = new Date("June 20, 2019 08:00:00").getTime();

	var days, hours, minutes, seconds;

	var countdown = document.getElementById('countdown');

	setInterval(function () {

		var current_date = new Date().getTime();
		var seconds_left = (target_date - current_date) / 1000;

		// do some time calculations
		days = parseInt(seconds_left / 86400);
		seconds_left = seconds_left % 86400;

		hours = parseInt(seconds_left / 3600);
		seconds_left = seconds_left % 3600;

		minutes = parseInt(seconds_left / 60);
		seconds = parseInt(seconds_left % 60);

		countdown.innerHTML = '<span class="days">' + days + ' <label>Days</label></span> <span class="hours">' + hours + ' <label>Hours</label></span> <span class="minutes">' +
			minutes + ' <label>Minutes</label></span> <span class="seconds">' + seconds + ' <label>Seconds</label></span>';

	}, 1000);


})(jQuery);
