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

        window.addEventListener('scroll', () => {
            // get scroll position
            var scroll_Y = window.scrollY;

            // Get side menu links
            links = document.querySelectorAll('.anchor_link');

            for(i=0;i<links.length;i++) {
                // Get Y position of anchor pointed by the link
                anchor_Y = anchors[i].getBoundingClientRect().top;

                // Get Y position of next anchor or footer if no more anchors
                if(anchors[i+1]) {
                    anchor_Y_next = anchors[i+1].getBoundingClientRect().top;
                } else {
                    anchor_Y_next = document.getElementById('footer').getBoundingClientRect().top;
                }

                // If we are inside after the start of a section and dind't reach the next one
                if(scroll_Y >= anchor_Y && scroll_Y < anchor_Y_next) {
                    links[i].classList.remove('text-black');
                    links[i].classList.add('text-blue');
                } else {
                    links[i].classList.remove('text-blue');
                    links[i].classList.add('text-black');
                }
            }
        })
    }
})