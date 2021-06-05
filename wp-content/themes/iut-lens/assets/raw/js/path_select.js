/**
 * Fake Path select asset.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package {iut_lens}
 * @version 1.0.0
 */
window.addEventListener('load', () => {
    // Get the select field for Course's paths
    let select = document.getElementById('path_select')

    // If that select exists = if the course has several paths
    if(select) {
        // Get all the carousels = get all the paths
        let carousels = Array.from(document.getElementsByClassName('carousel'))
        // Create an array to stock elements aside from DOM
        let putaway = []

        // The first carousel is displayed = the default path is displayed
        carousels[0].style.display = 'flex'

        // Put all the other carousels in an array and delete them from DOM = hide the other paths
        for(i=1;i<carousels.length;i++) {
            putaway.push({
                id: carousels[i].id,
                carousel: carousels[i]
            })

            carousels[i].remove()
        }

        // Load the event listener of the carousel
        carousel_listener(carousels[0])

        // Whenever the select value changes = whenever the user chooses another path to see
        select.addEventListener('change', () => {
            // Get the current carousel = get the current path
            let current_carousel = Array.from(document.getElementsByClassName('carousel'))[0]
            let carousel = ''
            let carousels_container = document.getElementById('carousels_container')

            current_carousel.style.display = 'none'

            putaway.push({
                id: current_carousel.id,
                carousel: current_carousel
            })

            current_carousel.remove()

            for(j=0;j<putaway.length;j++) {
                if(putaway[j]['id'] == select.value) {
                    carousel = putaway[j]['carousel']
                    putaway.splice(j, 1) 
                }
            }

            carousel.style.display = 'flex'
            carousels_container.appendChild(carousel)

            carousel_listener(carousel)
        })
    }
})