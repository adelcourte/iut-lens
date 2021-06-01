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