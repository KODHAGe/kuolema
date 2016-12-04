/* eslint-disable prefer-template */
export default {
  init() {
    // JavaScript to be fired on all pages
    const image = $('.alignnone');
    $(window).scroll(() => {
      if (image) {
        const scrolled = $(window).scrollTop();
        const parallax = -(scrolled * 0.1);
        image.css('top', (parallax + 50) + 'px');
      }
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
