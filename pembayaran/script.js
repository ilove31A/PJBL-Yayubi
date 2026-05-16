// ============================================================
// script.js – Catering Yayubi | Loading Pembayaran
// ============================================================

// Durasi tiap state (millisecond)
var LOADING_MS = 2500;   // lama spinner berputar
var PROCESS_MS = 1800;   // lama check icon tampil

// Fungsi ganti state
function showState(id) {
  ['stateLoading', 'stateProcess', 'stateSuccess'].forEach(function(s) {
    var el = document.getElementById(s);
    if (el) el.classList.remove('active');
  });
  var target = document.getElementById(id);
  if (target) target.classList.add('active');
}

// Auto flow: spinner → check → sukses
setTimeout(function() {
  showState('stateProcess');

  setTimeout(function() {
    showState('stateSuccess');
  }, PROCESS_MS);

}, LOADING_MS);
