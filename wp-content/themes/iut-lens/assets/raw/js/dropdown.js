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