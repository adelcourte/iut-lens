/**
 * Parallax asset.
 *
 * @author Antoine Delcourte <antoine.delcourte@gmail.com>
 * @package {iut_lens}
 * @version 1.0.0
 */
window.addEventListener('load', () => {
    var student_1 = document.getElementById('student_1')
    student_1.style.scrollBehavior = 'smooth'
    student_1.style.top = '150px'
    student_1.style.transition = '0s ease-in-out'
    var top = student_1.offsetTop

    if(student_1) {
        window.addEventListener('scroll', () => {
            var value = window.scrollY

            student_1.style.top = (value*0.25) + top + 'px'
        })
    }
})