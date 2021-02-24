/**
 * Fake Links asset.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package {iut_lens}
 * @version 1.0.0
 */
window.addEventListener('load', () => {
    Array.from(document.querySelectorAll("[data-fl]")).forEach($link =>
        $link.addEventListener("click", () => {
            let t = $link.getAttribute("target")
            let u

            try {
                u = decodeURIComponent(window.atob($link.getAttribute("data-fl")))
            } catch (e) {
                u = $link.getAttribute("data-fl")
            }

            if (u && !u.startsWith("#")) {
                window.open(u, t ? t : "_self")
            }
        })
    )
})
/**
 * Rellax asset.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package {iut_lens}
 * @version 1.0.0
 */
window.addEventListener('load', () => {
    var rellax = new Rellax('.rellax');
});
/**
 * Side menu asset.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package {iut_lens}
 * @version 1.0.0
 */
window.addEventListener('load', () => {
    if(side_menu = document.getElementById('side_menu')) {
        anchors = document.querySelectorAll('.anchor');
        
        anchors.forEach(anchor => {
            var a = document.createElement('a');
            var title = document.createTextNode(anchor.dataset.title);
            a.appendChild(title);
            a.id = anchor.id.concat('_link');
            a.href = '#'.concat(anchor.id);
            a.classList.add('mgv-0_5', 'text-black', 'small', 'anchor_link', 'h-text-blue');

            side_menu.appendChild(a);
        })
    }
})
/**
 * Swiper asset.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package {iut_lens}
 * @version 1.0.0
 */
window.onload = function() {
    var swiper = new Swiper('.swiper-speech', {
        speed: 600,
        parallax: true,
        
        pagination: {
            el: '.swiper-speech__pagination',
            type: 'fraction',
        },

        navigation: {
          nextEl: '.swiper-speech__next',
          prevEl: '.swiper-speech__prev',
        },
      });
}