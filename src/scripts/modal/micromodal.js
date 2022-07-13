import MicroModal from 'micromodal';
import Inputmask from 'inputmask';
import LazyLoad from "vanilla-lazyload";
window.addEventListener('load', function() {
    const lazyLoadInstance = new LazyLoad();
    MicroModal.init();

    const scroll = new SmoothScroll('a[data-scroll]', {
        speed: 200
    });

    if (document.querySelector('.phone-mask')) {
        const selectors = document.querySelectorAll('.phone-mask');
        selectors.forEach(selector => {
            const im = new Inputmask({
                mask: "+7 (999) 999-99-99",
                showMaskOnHover: false
            });
            im.mask(selector);
        })
    }
})
