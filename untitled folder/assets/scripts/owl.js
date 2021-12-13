jQuery(document).ready(function ($) {
  let owlWrapper = $(".owl-carousel");

  owlWrapper.owlCarousel({
    autoplay: false,
    margin: 26,
    // dots: false,
    loop: true,
    rewind: false,

    mouseDrag: true,
    touchDrag: true,
    pullDrag: true,
    freeDrag: false,

    stagePadding: 0,

    // merge: false,
    // mergeFit: true,
    autoWidth: false,

    startPosition: 0,
    rtl: false,
    nav: true,
    responsive: {
      0: {
        items: 2,
        slideBy: 2,
      },
      600: {
        items: 2,
        slideBy: 2,
      },
      800: {
        items: 3,
        slideBy: 3,
      },
      1000: {
        items: 4,
        slideBy: 4,
      },
    },
    smartSpeed: 250,
    fluidSpeed: false,
    dragEndSpeed: false,

    responsiveRefreshRate: 200,
    responsiveBaseElement: window,

    fallbackEasing: "swing",

    info: false,

    nestedItemSelector: false,
    itemElement: "div",
    stageElement: "div",

    refreshClass: "owl-refresh",
    loadedClass: "owl-loaded",
    loadingClass: "owl-loading",
    rtlClass: "owl-rtl",
    responsiveClass: "owl-responsive",
    dragClass: "owl-drag",
    itemClass: "owl-item",
    stageClass: "owl-stage",
    stageOuterClass: "owl-stage-outer",
    grabClass: "owl-grab",
    autoHeight: false,
    lazyLoad: true,
  });

  $(".next").click(function () {
    owl.trigger("owl.next");
  });
  $(".prev").click(function () {
    owl.trigger("owl.prev");
  });
});
