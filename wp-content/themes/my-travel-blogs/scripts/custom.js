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
      var $quickViewProduct = $('#quickViewProduct');
      var $products = $('.products');

      $products.find('.item .product-image').on('click', function (e) {
        e.preventDefault();
        var $item = $(this).parents('.item');
        var $gallery = $item.find('.product-gallery');
        var $meta = $item.find('.product-meta').clone();

        var $quickViewGallery = $quickViewProduct.find('.product-gallery');

        if ($quickViewGallery.length) {
          var id = $quickViewGallery.data('id');
          var $item = $products.find('.item[data-id="' + id + '"]');
          $item.find('');

          $item.append($quickViewGallery.addClass('hidden'));
        }

        $quickViewProduct.html('');
        $quickViewProduct.append($gallery.removeClass('hidden'));
        $quickViewProduct.append($meta.removeClass('hidden'));
        toggleNav($sidenav, true);
      });

      $sidenav.find('.close').on('click', function () {
        toggleNav($sidenav, false, 1000);
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
      this.$container.on('click', '.item-toggle', function (e) {
        e.preventDefault();
        var $this = $(this);
        var varietyId = $this.data('variety-id');
        self.select(varietyId);
      });

      this.$container.on('click', '.product-image', function (e) {
        e.preventDefault();
        self.selectImage($(this));
      });

      this.select(this.$container.find('.badge.item-toggle').first().data('variety-id'));
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
        slidesToScroll: 4,
        slidesToShow: 4,
        vertical: true
      });
    },
    selectImage: function ($image) {
      if (this.imgLoading) { return; }

      var self = this;

      this.$container.find('.product-image').removeClass('active');
      $image.addClass('active');
      this.$productMainImage.find('.loader').removeClass('hidden');
      this.$productMainImage.find('img').remove();
      var $img = $('<img />').attr('src', $image.data('url'));

      this.imgLoading = true;
      $img.on('load', function () {
        self.$productMainImage.find('.loader').addClass('hidden');
        self.$productMainImage.append($img);
        self.imgLoading = false;
      });
    }
  }

  $(document).ready(function () {
    initContactForm();
    initCarousels();
    QuickView.init();
    var productDetail = new ProductDetail($('#productDetail'));
  });

}(jQuery));