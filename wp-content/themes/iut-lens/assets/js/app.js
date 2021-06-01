/**
 * Carousel asset.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package {iut_lens}
 * @version 1.0.0
 */
window.addEventListener('load', () => {
    slides = Array.from(document.getElementsByClassName('carousel__slides__slide'))

    height = 0
    for(i=0;i<slides.length;i++) {
        if(slides[i].offsetHeight > height) {
            height = slides[i].offsetHeight
        }
    }

    Array.from(document.getElementsByClassName('carousel__slides'))[0].style.height = height + 'px'



    Array.from(document.getElementsByClassName('carousel__header__link')).forEach(link =>
        link.addEventListener('click', () => {
            cat = link.dataset.cat

            if(link.classList.contains('active') == false) {
                links = Array.from(document.getElementsByClassName('carousel__header__link')).forEach(link_remove =>
                    link_remove.classList.remove('active')
                )
                link.classList.add('active')
            }

            slides.forEach(slide =>
                slide.classList.remove('visible')
            )

            for(i=0;i<slides.length;i++) {
                if(slides[i].dataset.cat == cat) {
                    slide = slides[i]
                }
            }

            slide.classList.add('visible')
        })
    )
})
/**
 * Dropdowns asset.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package {iut_lens}
 * @version 1.0.0
 */
window.addEventListener('load', () => {
    Array.from(document.getElementsByClassName('dropdown')).forEach(dropdown =>
        dropdown.addEventListener('click', () => {
            if(dropdown.classList.contains('closed')) {
                dropdown.classList.remove('closed')
            } else {
                dropdown.classList.add('closed')
            }
        })
    )
})
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
 * Popup asset.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package {iut_lens}
 * @version 1.0.0
 */
window.addEventListener('load', () => {
    let video_popup_button = document.getElementById('video_popup_button')
    let video_popup = document.getElementById('video_popup')
    let video_dark_overlay = document.getElementById('video_dark_overlay')

    video_popup_button.addEventListener('click', () => {
        video_popup.style.visibility = 'visible'
        video_popup.style.opacity = '1'

        video_dark_overlay.style.visibility = 'visible'
        video_dark_overlay.style.opacity = '1'
    })

    video_dark_overlay.addEventListener('click', () => {
        video_popup.style.visibility = 'hidden'
        video_popup.style.opacity = '0'

        video_dark_overlay.style.visibility = 'hidden'
        video_dark_overlay.style.opacity = '0'
    })
})
/**
 * Progress Bar asset.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package {iut_lens}
 * @version 1.0.0
 */

window.addEventListener('load', () => {
    if(progress_bar_advance = document.getElementById('progress_bar_advance')) {
        progress_bar_advance.style.width = "0%";
        window.addEventListener('scroll', () => {
            var winScroll = document.body.scrollTop || document.documentElement.scrollTop;;
            var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            var scrolled = (winScroll / height) * 100;
            progress_bar_advance.style.width = scrolled + "%";
        });
    }
});
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
    if(side_nav = document.getElementById('side_nav')) {
        row = Array.from(document.getElementsByClassName('row'))[0]
        left = parseInt(getComputedStyle(row).getPropertyValue('margin-left'), 10) + 30 + 'px'
        console.log(left)
        side_nav.style.left = left;
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