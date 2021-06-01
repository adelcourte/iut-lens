/**
 * Popup asset.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package {iut_lens}
 * @version 1.0.0
 */
window.addEventListener('load', () => {
    let video_popup_button = document.getElementById('video_popup_button')
    let video_popup = document.getElementById('video_popup')
    let video_dark_overlay = document.getElementById('video_dark_overlay')

    video_popup_button.addEventListener('click', () => {
        video_popup.style.visibility = 'visible'
        video_popup.style.opacity = '1'

        video_dark_overlay.style.visibility = 'visible'
        video_dark_overlay.style.opacity = '1'
    })

    video_dark_overlay.addEventListener('click', () => {
        video_popup.style.visibility = 'hidden'
        video_popup.style.opacity = '0'

        video_dark_overlay.style.visibility = 'hidden'
        video_dark_overlay.style.opacity = '0'
    })
})