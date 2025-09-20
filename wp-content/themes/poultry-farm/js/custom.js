jQuery(function($){
  "use strict";
    jQuery('.gb_navigation > ul').superfish({
    delay:       500,
    animation:   {opacity:'show',height:'show'},
    speed:       'fast'
  });
});

function poultry_farm_gb_Menu_open() {
  jQuery(".side_gb_nav").addClass('show');
}
function poultry_farm_gb_Menu_close() {
  jQuery(".side_gb_nav").removeClass('show');
}

jQuery('.gb_toggle').click(function () {
  poultry_farm_Keyboard_loop(jQuery('.side_gb_nav'));
});

function poultry_farm_search_show() {
	jQuery(".external-search").addClass('show');
	jQuery(".external-search").fadeIn();
}
jQuery( ".search-container-button").on("click", poultry_farm_search_show);

function poultry_farm_search_hide() {
	jQuery(".external-search").removeClass('show');
	jQuery(".external-search").fadeOut();
}
jQuery( ".search-container-button-close").on("click", poultry_farm_search_hide);

// Search header

jQuery('.search-container-button-close').on('keydown', function (es) {
  if (jQuery("this:focus") && (es.which === 9)) {
    es.preventDefault();
    jQuery(this).blur();
    jQuery('.internal-search form input').focus();
  }
});

jQuery('.internal-search form input').on('keydown', function (eventser) {
  if (eventser.shiftKey && eventser.keyCode == 9) {
    eventser.preventDefault();
    jQuery(this).blur();
    jQuery('.search-container-button-close').focus()
  }
});

var poultry_farm_Keyboard_loop = function (elem) {
  var poultry_farm_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');
  var poultry_farm_firstTabbable = poultry_farm_tabbable.first();
  var poultry_farm_lastTabbable = poultry_farm_tabbable.last();
  poultry_farm_firstTabbable.focus();

  poultry_farm_lastTabbable.on('keydown', function (e) {
    if ((e.which === 9 && !e.shiftKey)) {
      e.preventDefault();
      poultry_farm_firstTabbable.focus();
    }
  });

  poultry_farm_firstTabbable.on('keydown', function (e) {
    if ((e.which === 9 && e.shiftKey)) {
      e.preventDefault();
      poultry_farm_lastTabbable.focus();
    }
  });

  elem.on('keyup', function (e) {
    if (e.keyCode === 27) {
      elem.hide();
    };
  });
};


document.addEventListener('DOMContentLoaded', function () {
  var preloader = document.getElementById('preloader');

  if (preloader) {  // Check if the element exists before trying to manipulate it
      var duration = 4000; // 10 seconds

      setTimeout(function () {
          preloader.style.display = 'none';
      }, duration);
  }
});

document.addEventListener('DOMContentLoaded', function () {
  // Get the header element
  var header = document.getElementById('middle-header');

  // Get the initial offset of the header
  var headerOffset = header.offsetTop;

  // Function to handle scroll events
  function handleScroll() {
      var sticky_setting = jQuery('#middle-header').attr('data-sticky');
      if (window.pageYOffset > headerOffset) {
          // Add the "sticky" class when scrolling down
          if(sticky_setting == 1) {
            header.classList.add('sticky');
          }
      } else {
          // Remove the "sticky" class when scrolling up
          if(sticky_setting == 1) {
            header.classList.remove('sticky');
          }
      }
  }
  // Attach the scroll event listener
  window.onscroll = handleScroll;

});

/* Custom Cursor
 **-----------------------------------------------------*/
const poultry_farm_customCursor = {
  init: function () {
    this.poultry_farm_customCursor();
  },
  isVariableDefined: function (el) {
    return typeof el !== "undefined" && el !== null;
  },
  select: function (selectors) {
    return document.querySelector(selectors);
  },
  selectAll: function (selectors) {
    return document.querySelectorAll(selectors);
  },
  poultry_farm_customCursor: function () {
    const poultry_farm_cursorDot = this.select(".cursor-point");
    const poultry_farm_cursorOutline = this.select(".cursor-point-outline");
    if (this.isVariableDefined(poultry_farm_cursorDot) && this.isVariableDefined(poultry_farm_cursorOutline)) {
      const cursor = {
        delay: 8,
        _x: 0,
        _y: 0,
        endX: window.innerWidth / 2,
        endY: window.innerHeight / 2,
        cursorVisible: true,
        cursorEnlarged: false,
        $dot: poultry_farm_cursorDot,
        $outline: poultry_farm_cursorOutline,

        init: function () {
          this.dotSize = this.$dot.offsetWidth;
          this.outlineSize = this.$outline.offsetWidth;
          this.setupEventListeners();
          this.animateDotOutline();
        },

        updateCursor: function (e) {
          this.cursorVisible = true;
          this.toggleCursorVisibility();
          this.endX = e.clientX;
          this.endY = e.clientY;
          this.$dot.style.top = `${this.endY}px`;
          this.$dot.style.left = `${this.endX}px`;
        },

        setupEventListeners: function () {
          window.addEventListener("load", () => {
            this.cursorEnlarged = false;
            this.toggleCursorSize();
          });

          poultry_farm_customCursor.selectAll("a, button").forEach((el) => {
            el.addEventListener("mouseover", () => {
              this.cursorEnlarged = true;
              this.toggleCursorSize();
            });
            el.addEventListener("mouseout", () => {
              this.cursorEnlarged = false;
              this.toggleCursorSize();
            });
          });

          document.addEventListener("mousedown", () => {
            this.cursorEnlarged = true;
            this.toggleCursorSize();
          });
          document.addEventListener("mouseup", () => {
            this.cursorEnlarged = false;
            this.toggleCursorSize();
          });

          document.addEventListener("mousemove", (e) => {
            this.updateCursor(e);
          });

          document.addEventListener("mouseenter", () => {
            this.cursorVisible = true;
            this.toggleCursorVisibility();
            this.$dot.style.opacity = 1;
            this.$outline.style.opacity = 1;
          });

          document.addEventListener("mouseleave", () => {
            this.cursorVisible = false;
            this.toggleCursorVisibility();
            this.$dot.style.opacity = 0;
            this.$outline.style.opacity = 0;
          });
        },

        animateDotOutline: function () {
          this._x += (this.endX - this._x) / this.delay;
          this._y += (this.endY - this._y) / this.delay;
          this.$outline.style.top = `${this._y}px`;
          this.$outline.style.left = `${this._x}px`;

          requestAnimationFrame(this.animateDotOutline.bind(this));
        },

        toggleCursorSize: function () {
          if (this.cursorEnlarged) {
            this.$dot.style.transform = "translate(-50%, -50%) scale(0.75)";
            this.$outline.style.transform = "translate(-50%, -50%) scale(1.6)";
          } else {
            this.$dot.style.transform = "translate(-50%, -50%) scale(1)";
            this.$outline.style.transform = "translate(-50%, -50%) scale(1)";
          }
        },

        toggleCursorVisibility: function () {
          if (this.cursorVisible) {
            this.$dot.style.opacity = 1;
            this.$outline.style.opacity = 1;
          } else {
            this.$dot.style.opacity = 0;
            this.$outline.style.opacity = 0;
          }
        },
      };
      cursor.init();
    }
  },
};
poultry_farm_customCursor.init();

//scrollToTop

const poultry_farm_scrollToTop = {
  scrollToTop: {
    init() {
      this.button = document.getElementById("scrollToTopBtn");
      const svg = document.getElementById("progressCircle");
      this.circle = svg?.querySelector("circle");

      if (!this.button || !this.circle) return;

      this.radius = this.circle.r.baseVal.value;
      this.circumference = 2 * Math.PI * this.radius;

      this.circle.style.strokeDasharray = `${this.circumference}`;
      this.circle.style.strokeDashoffset = this.circumference;

      window.addEventListener("scroll", this.handleScroll.bind(this));
      this.button.addEventListener("click", this.scrollToTop.bind(this));
    },

    handleScroll() {
      const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;

      this.button.style.display = scrollTop > 100 ? "flex" : "none";
      requestAnimationFrame(this.updateProgress.bind(this));
    },

    scrollToTop() {
      window.scrollTo({ top: 0, behavior: "smooth" });
    },

    updateProgress() {
      if (!this.circle) return;

      const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
      const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      const progress = scrollTop / scrollHeight;

      const offset = this.circumference * (1 - progress);
      this.circle.style.strokeDashoffset = offset;
    }
  }
};
document.addEventListener("DOMContentLoaded", () => poultry_farm_scrollToTop .scrollToTop.init());