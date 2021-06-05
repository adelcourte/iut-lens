/**
 * Carousel asset.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package {iut_lens}
 * @version 1.0.0
 */
window.addEventListener('load', () => {
    carousels = Array.from(document.getElementsByClassName('carousel'))
    if(carousels.length == 1) {
        carousel_listener(carousels[0])
    }
})

/*function carousels_listener(){
    carousels = Array.from(document.getElementsByClassName('carousel'))
    for(i=0;i<carousels.length;i++) {
        slides = Array.from(carousels[i].getElementsByClassName('carousel__slides__slide'))
    
        height = slides[0].offsetHeight
    
        Array.from(document.getElementsByClassName('carousel__slides'))[0].style.height = height + 'px'
        Array.from(document.getElementsByClassName('carousel__header__link'))[0].classList.add('active')
    
    
    
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
    
                height = slide.offsetHeight
                document.getElementsByClassName('carousel__slides')[0].style.height = height + 'px'
            })
        )
    }
}*/

function carousel_listener(carousel) {
    let slides_container = Array.from(carousel.getElementsByClassName('carousel__slides'))[0]
    let slides = Array.from(carousel.getElementsByClassName('carousel__slides__slide'))
    let links = Array.from(carousel.getElementsByClassName('carousel__header__link'))
    let height = slides[0].offsetHeight

    slides_container.style.height = height + 'px'
    links[0].classList.add('active')

    links.forEach(link =>
        link.addEventListener('click', () => {
            cat = link.dataset.cat
    
            if(link.classList.contains('active') == false) {
                links.forEach(link_remove =>
                    link_remove.classList.remove('active')
                )
                link.classList.add('active')
            }

            slides.forEach(slide =>
                slide.classList.remove('visible')
            )

            let slide = ''
            for(i=0;i<slides.length;i++) {
                if(slides[i].dataset.cat == cat) {
                    slide = slides[i]
                }
            }

            slide.classList.add('visible')
            height = slide.offsetHeight
            slides_container.style.height = height + 'px'
        })
    )
}
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
            
            let carousel_slides = Array.from(document.getElementsByClassName('carousel__slides__slide'))
            if(carousel_slides) {
                let height = 0
                let current_slide = ''

                for(i=0;i<carousel_slides.length;i++) {
                    if(carousel_slides[i].classList.contains('visible')) {
                        height = carousel_slides[i].offsetHeight
                        current_slide = carousel_slides[i]
                    }
                }

                new_height = height + 'px'
                document.getElementsByClassName('carousel__slides')[0].style.height = new_height
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
 * Fake Path select asset.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package {iut_lens}
 * @version 1.0.0
 */
window.addEventListener('load', () => {
    select = document.getElementById('path_select')
    if(select) {
        carousels = Array.from(document.getElementsByClassName('carousel'))
        carousels[0].style.display = 'flex'
        carousels_listener()

        select.addEventListener('change', () => {
            carousels[0].style.display = 'none'
            carousels[0].classList.remove('carousel')
            carousel = document.getElementById(select.value)
            carousel.classList.add('carousel')
            carousel.style.display = 'flex'
            carousels_listener()
        })
    }
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

    if(video_popup) {
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
    }
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