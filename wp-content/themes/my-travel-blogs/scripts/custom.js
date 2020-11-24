(function ($) {

  /** Contact Form */
  function initContactForm() {
    var $contactFormRecipient = $('#contactFormRecipient');
    var $contactFormSubject = $('#contactFormSubject');

    $contactFormRecipient.prepend($('<option value="">Select a subject</option>'));
    $contactFormRecipient.val('');

    $contactFormRecipient.on('change', function () {
      $contactFormSubject.val($(this).val());
    });
  }

  /** Carousels */
  function initCarousels() {
    // First carousel on the page (hero)
    var $carousel = $('.owl-carousel:first');

    // Add wrapper to slides to help with flexbox align center
    $carousel.find('.sa_hover_container').wrapInner('<div class="carousel_wrap"></div>');

    // Add wave
    var $wave = $('<div class="wave"></div>');

    // Add wrapper to carousel for extra css hook
    var $carouselWrapper = $('<div class="carousel_wrapper"></div>');
    $carousel.wrap($carouselWrapper);
    $carousel.parents('.carousel_wrapper').append($wave);
  }

  /** QuickView */
  var QuickView = (function () {
    function init() {
      var $sidenav = $('#sidenav');
      var $body = $('body');
      var $quickViewProduct = $('#quickViewProduct');
      var $products = $('.products');

      $products.find('.item .product-image').on('click', function (e) {
        e.preventDefault();
        var $item = $(this).parents('.item');
        // var $gallery = $item.find('.product-gallery');
        var $meta = $item.find('.product-quickview-info').clone();

        /*         var $quickViewGallery = $quickViewProduct.find('.product-gallery');
        
                if ($quickViewGallery.length) {
                  var id = $quickViewGallery.data('id');
                  var $item = $products.find('.item[data-id="' + id + '"]');
                  $item.find('');
        
                  $item.append($quickViewGallery.addClass('hidden'));
                }
         */
        $quickViewProduct.html('');
        // $quickViewProduct.append($gallery.removeClass('hidden'));
        $quickViewProduct.append($meta.removeClass('hidden'));

        var productMeta = new ProductMeta($quickViewProduct, {
          onSelect: function (varietyId) {
            var $carousel = $quickViewProduct.find('.product-carousel[data-variety-id="' + varietyId + '"]');

            // destroy slider instance if one exists
            if ($carousel.hasClass('slick-slider')) {
              $carousel.slick('unslick');
            }

            // initialize carousel
            $carousel.slick({
              arrows: false,
              dots: true,
              infinite: false,
              slidesToScroll: 1,
              slidesToShow: 1,
            });
          }
        });

        toggleNav($sidenav, true);
      });

      $sidenav.find('.close').on('click', function () {
        toggleNav($sidenav, false);
      });

      $body.on('click', function (e) {
        if ($sidenav.hasClass('open')) {

          if ($(e.target).closest('#sidenav, .product-image').length === 0) {
            toggleNav($sidenav, false);
          }
        }
      });
    }

    function toggleNav($ele, isOpen) {
      if (isOpen) {
        $ele.addClass('open');
      } else {
        $ele.removeClass('open');
      }
    }

    return {
      init: init
    }
  })();


  /** Product meta */
  var ProductMeta = function ($container, opts) {
    this.$container = $($container);
    opts = opts || {};
    this.config = opts = {
      initial: (typeof opts.initial === 'number') ? opts.initial : 0,
      onSelect: (typeof opts.onSelect === 'function') ? opts.onSelect : function () { },
    };
    this.current = this.config.initial;
    this.init();
  };
  ProductMeta.prototype = {
    init: function () {
      var self = this;
      this.$container.on('click', '.item-toggle', function (e) {
        e.preventDefault();
        var $this = $(this);
        var varietyId = $this.data('variety-id');
        self.select(varietyId);
      });

      // select initial item
      this.select($(this.$container.find('.badge.item-toggle')[this.config.initial]).data('variety-id'));
    },
    select: function (varietyId) {
      this.$container.find('.item-toggle').removeClass('active');
      this.$container.find('.item-toggle').filter(function () {
        return $(this).data('variety-id') === varietyId
      }).addClass('active');

      this.$container.find('.product-variety').addClass('hidden');
      this.$container.find('.product-variety').filter(function () {
        return $(this).data('variety-id') === varietyId
      }).removeClass('hidden');

      this.config.onSelect(varietyId);
    }
  };

  /** Product detail */
  var ProductDetail = function ($container) {
    this.$container = $($container);
    this.$productMainImage = this.$container.find('#productMainImage');
    this.imgLoading = false;
    this.init();
  };
  ProductDetail.prototype = {
    init: function () {
      var self = this;

      this.$container.on('click', '.product-carousel .product-image', function (e) {
        e.preventDefault();
        self.selectImage($(this));
      });

      var productMeta = new ProductMeta(this.$container, {
        onSelect: function (varietyId) {
          self.select(varietyId);
        }
      });

      this.select(this.$container.find('.badge.item-toggle').first().data('variety-id'));
    },
    select: function (varietyId) {
      var $carousel = this.$container.find('.product-carousel[data-variety-id="' + varietyId + '"]');
      var $carouselImages = $carousel.find('.product-image');

      this.selectImage($carouselImages.first());

      // destroy slider instance if one exists
      if ($carousel.hasClass('slick-slider')) {
        $carousel.slick('unslick');
      }

      // initialize carousel
      $carousel.slick({
        infinite: false,
        slidesToScroll: 1,
        slidesToShow: 3,
        vertical: true
      });
    },
    selectImage: function ($image) {
      if (this.imgLoading) { return; }

      var self = this;

      if ($image.length) {
        this.$container.find('.product-image').removeClass('active');
        $image.addClass('active');
        this.$productMainImage.find('.loader').removeClass('hidden');
        this.$productMainImage.find('img').remove();

        var $img = $('<img />').attr('src', $image.data('url'));
        this.imgLoading = true;
        $img.on('load', function () {
          self.$productMainImage.find('.loader').addClass('hidden');
          self.$productMainImage.append($img.addClass('mx-auto'));
          self.imgLoading = false;
        });
      } else {
        self.$productMainImage.find('.loader').addClass('hidden');
      }
    }
  }

  function popupWindow(url, windowName, win, w, h) {
    var y = win.top.outerHeight / 2 + win.top.screenY - (h / 2);
    var x = win.top.outerWidth / 2 + win.top.screenX - (w / 2);
    return win.open(url, windowName, `toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=${w}, height=${h}, top=${y}, left=${x}`);
  }

  function initNewWindowLinks() {
    $('#body').on('click', '.open-new-window', function (e) {
      e.preventDefault();
      popupWindow($(this).attr('href'), 'newWindow', window, 500, 500);
    });
  }

  /** Product filters */
  var ProductFilters = function ($container) {
    this.$container = $($container);
    this.$submit = this.$container.find('.submit');
    this.$cancel = this.$container.find('.cancel');
    this.$search = this.$container.find('.search');
    this.filters = {};
    this.baseUrl = location.origin + location.pathname;
    this.init();
  };
  ProductFilters.prototype = {
    init: function () {
      var self = this;

      this.$container.find('.active-filters .badge.active').each(function() {
        var filterVals = self.getVals($(this));
        self.add(filterVals.filter, filterVals.value);
      });

      this.$container.find('.badge.apply').on('click', function(e) {
        e.preventDefault();
        self.toggle($(this));
      });

      this.$container.find('.active-filters .remove').on('click', function(e) {
        e.preventDefault();
        var $filter = $(this).parent();
        var filterVals = self.getVals($filter);
        self.remove(filterVals.filter, filterVals.value);
        self.submit();
      });

      this.$submit.on('click', this.submit.bind(this));
      this.$cancel.on('click', this.cancel.bind(this));
      this.$search.on('submit', this.search.bind(this));
    },
    search: function(e) {
      if (e) { e.preventDefault(); }
      var val = this.$search.find('input').val();

      // only allow one search term
      this.filters['search'] = [];

      if (val) {
        this.add('search', val);
      } else {
        this.remove('search', val);
      }
      this.submit();
    },
    submit: function(e) {
      if (e) { e.preventDefault(); }
      var queryParams = this.getQueryParams();

      if (queryParams) {
        this.goTo(this.baseUrl + queryParams);
      } else if (window.location.search) {
        this.cancel();
      }
    },
    cancel: function(e) {
      if (e) { e.preventDefault(); }
      this.goTo(this.baseUrl);
    },
    goTo: function(url) {
      window.location.href = url;
    },
    getQueryParams: function() {
      var params = '';
      for (var filter in this.filters) {
        var isArray = filter !== 'search';
        for (var i = 0; i < this.filters[filter].length; i++) {
          var prepend = params.indexOf('?') > -1 ? '&' : '?';
          params += prepend + filter;
          // if (isArray) {
            params += '[]';
          // }
          params += '=' + this.filters[filter][i];
        }
      }
      return params;
    },
    toggle: function($filter) {
      var filterVals = this.getVals($filter);
      var filter = filterVals.filter;
      var value = filterVals.value;

      if ($filter.hasClass('active')) {
        $filter.removeClass('active');
        this.remove(filter, value);
      } else {
        $filter.addClass('active');
        this.add(filter, value);
      }
    },
    add: function(filter, value) {
      if (!this.filters[filter]) {
        this.filters[filter] = [];
      }
      this.filters[filter].push(value);
    },
    remove: function(filter, value) {
      const index = this.filters[filter].indexOf(value);
      this.filters[filter].splice(index, 1);
    },
    getVals: function ($filter) {
      var filter = $filter.data('filter');
      var value = $filter.data('value');

      return {
        filter: filter,
        value: value
      };
    }
  };

  function initProductDetail($container) {
    var productDetail = new ProductDetail($container);
  }

  function initProductListing($container) {
    $container.find('.products .item').each(function () {
      var productMeta = new ProductMeta($(this));
    });
    var productFilters = new ProductFilters($container.find('.filters'));
  }

  $(document).ready(function () {
    // Contact Form
    initContactForm();

    // Carousels
    initCarousels();

    // Popup windows
    initNewWindowLinks();

    // Product listing
    var $productListing = $('#productListing');
    if ($productListing.length) {
      initProductListing($productListing);
    }

    // Product Detail
    var $productDetail = $('#productDetail');
    if ($productDetail.length) {
      initProductDetail($productDetail);
    }

    // Quick View
    QuickView.init();
  });

}(jQuery));