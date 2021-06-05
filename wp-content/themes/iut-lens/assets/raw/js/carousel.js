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
        alert('hello')
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