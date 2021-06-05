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