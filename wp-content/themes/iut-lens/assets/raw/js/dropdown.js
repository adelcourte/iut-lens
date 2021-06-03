/**
 * Dropdowns asset.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package {iut_lens}
 * @version 1.0.0
 */
window.addEventListener('load', () => {
    height = document.getElementsByClassName('carousel__slides')[0].offsetHeight

    Array.from(document.getElementsByClassName('dropdown')).forEach(dropdown =>
        dropdown.addEventListener('click', () => {
            if(dropdown.classList.contains('closed')) {
                dropdown.classList.remove('closed')
            } else {
                dropdown.classList.add('closed')
            }
            
            carousel_slides = Array.from(document.getElementsByClassName('carousel__slides__slide'))
            if(carousel_slides) {
                height_addition = 0
                new_height = 0
                dropdowns = Array.from(document.getElementsByClassName('dropdown'))

                for(i=0;i<dropdowns.length;i++) {
                    if(dropdowns[i].classList.contains('closed') == false) {
                        height_addition += dropdowns[i].getElementsByClassName('dropdown__content')[0].offsetHeight
                    }
                }

                new_height = height + height_addition + 'px'
                document.getElementsByClassName('carousel__slides')[0].style.height = new_height
            }
        })
    )
})