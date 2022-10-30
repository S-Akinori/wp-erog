export const adjustMainPadding = () => {
  const paddingTop = $('header').height();
  $('main').css('padding-top', paddingTop + 'px')
}