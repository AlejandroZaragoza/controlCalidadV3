/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************!*\
  !*** ./resources/js/assets/navbar.js ***!
  \***************************************/
$("#search-addon").click(function (e) {
  underContruction();
});
$('#buscadorGlobal').keypress(function (event) {
  if (event.key == 'Enter' || event.keyCode == 13) {
    underContruction();
  }
});

function underContruction() {
  var html = '<video autoplay loop><source src="video/underConstruction.mp4" type="video/mp4">Tu navegador no soporta la opcion de video.</video>';
  Swal.fire({
    title: 'En contruccion...',
    html: html,
    allowOutsideClick: false,
    allowEscapeKey: false,
    width: '50%',
    confirmButtonText: 'Enterado...',
    confirmButtonColor: '#4f4e4e'
  }).then(function (result) {
    if (result.isConfirmed) {
      $("#buscadorGlobal").val('');
    }
  });
}
/******/ })()
;