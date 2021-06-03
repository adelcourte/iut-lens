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