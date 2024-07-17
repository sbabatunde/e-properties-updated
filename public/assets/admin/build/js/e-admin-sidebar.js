// <!-- IMPORT CDNJS JQUERY -->
    $('.sideBar').click(function() {
        $('aside').toggleClass('close')
    })
console.log('test')
    $('.menu').click(function() {
        $(this).siblings('.menu').removeClass('active')
        $(this).addClass('active')

        $(this).next().siblings('.menu-dropdown').children('.sub-menu').slideUp()
        $(this).next('.menu-dropdown').children('.sub-menu').slideToggle()

        $(this).next().siblings('.menu-dropdown').children('.sub-menu').children('.menu').removeClass('active')
    })