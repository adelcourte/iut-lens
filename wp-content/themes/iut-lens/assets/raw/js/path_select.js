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