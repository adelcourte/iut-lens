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