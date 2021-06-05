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

        // Load the carousel event listener
        carousel_listener(carousels[0])

        // Whenever the select value changes = whenever the user chooses another path to see
        select.addEventListener('change', () => {
            // Get the current carousel = get the current path
            let current_carousel = Array.from(document.getElementsByClassName('carousel'))[0]
            // Prepare the new carousel
            let carousel = ''
            // Get the carousel container for the carousel switch part
            let carousels_container = document.getElementById('carousels_container')

            // First, hide the current carousel
            current_carousel.style.display = 'none'

            // Second, add the current carousel to the putaway array
            putaway.push({
                id: current_carousel.id,
                carousel: current_carousel
            })

            // Third, remove the current carousel
            current_carousel.remove()

            // Fourth, find the new carousel to display
            for(j=0;j<putaway.length;j++) {
                if(putaway[j]['id'] == select.value) {
                    carousel = putaway[j]['carousel']
                    putaway.splice(j, 1) 
                }
            }

            // Fifth, display the new carousel
            carousel.style.display = 'flex'
            carousels_container.appendChild(carousel)

            // Finally, load the carousel event listener
            carousel_listener(carousel)
        })
    }
})