(function ($) {

  /** Contact Form */
  function initContactForm() {
    var $contactFormRecipient = $('#contactFormRecipient');
    var $contactFormSubject = $('#contactFormSubject');

    $contactFormRecipient.prepend($('<option value="">Select a subject</option>'));
    $contactFormRecipient.val('');

    $contactFormRecipient.on('change', function() {
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

      $products.find('.item .product-image').on('click', function(e) {
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

      $sidenav.find('.close').on('click', function() {
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
  function initProductDetail() {
    var $productDetail = $('#productDetail');
  }

  $(document).ready(function() {
    initContactForm();
    initCarousels();
    initProductDetail();
    QuickView.init();
  });

}(jQuery));