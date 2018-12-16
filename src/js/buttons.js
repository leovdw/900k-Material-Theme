module.exports = function() {
  var btns_primary = document.querySelectorAll('.button.button-primary'),
      btns         = document.querySelectorAll('.button:not(.button-primary)');
      btn_page     = document.querySelectorAll('.page-title-action , .plugin-action-buttons li:nth-child(1) a');

  if (btns_primary) {
    for (var i = 0; i < btns_primary.length; i++) {

      if (btns_primary[i].classList) {
        var btns_primary_length = btns_primary[i].classList.length;

        while (btns_primary[i].classList.length > 0) {
          btns_primary[i].classList.remove(btns_primary[i].classList[0]);
        }
      }

      btns_primary[i].classList.add('mdc-button', 'mdc-button--raised', 'mdc-ripple-upgraded');
      mdc.ripple.MDCRipple.attachTo(btns_primary[i]);
    }
  }

  if (btns) {
    for (var i = 0; i < btns.length; i++) { 
        if (btns[i].classList) {
          var btns_length = btns[i].classList.length;

          while (btns[i].classList.length > 0) {
            btns[i].classList.remove(btns[i].classList[0]);
          }
        }

        btns[i].classList.add('mdc-button','mdc-ripple-upgraded');
        mdc.ripple.MDCRipple.attachTo(btns[i]);
    }
  }

  if (btn_page) {
    for (var i = 0; i < btn_page.length; i++) {

        if (btn_page[i].classList) {
          var btn_page_length = btn_page[i].classList.length;

          while (btn_page[i].classList.length > 0) {
            btn_page[i].classList.remove(btn_page[i].classList[0]);
          }
        }

        btn_page[i].classList.add('mdc-button','mdc-button--outlined' , 'mdc-ripple-upgraded');
        mdc.ripple.MDCRipple.attachTo(btn_page[i]);
    }
  }
}
