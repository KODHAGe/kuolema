import bricks from 'bricks.js';

export default {
  init() {
    // JavaScript to be fired on the home page
    const width = $(window).width();
    const sizes = [
      { columns: 1, gutter: 20 },
      { mq: '576px', columns: 2, gutter: 20 },
      { mq: '1024px', columns: 3, gutter: 20 },
    ];

    let instance;

    $.fn.almComplete = function () {
      instance = bricks({
        container: '.alm-ajax',
        packed: 'data-packed',
        sizes,
        position: true,
      });
      instance.pack();
      instance.resize(true);
      setTimeout(() => {
        instance.pack();
      }, 500);
    };

    window.addEventListener('resize', () => {
      if ($(window).width() !== width) {
        instance.pack();
      }
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
