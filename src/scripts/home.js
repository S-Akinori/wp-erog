import $ from './jquery'
import { adjustMainPadding } from './modules/adjustMainPadding'
import {Swiper} from './modules/swiper'
import { toggleMenu } from './modules/toggleMenu'

$(function() {
  adjustMainPadding();
  toggleMenu();
})