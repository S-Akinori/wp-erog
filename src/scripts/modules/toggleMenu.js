export const toggleMenu = (className = '.js-menu-button', targetClass = '.js-header-menu') => {
  $(className).on('click', () => {
    $(targetClass).slideToggle();
    $('body').toggleClass('overflow-hidden')
  })
}