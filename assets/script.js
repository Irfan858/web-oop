var tombolTop = document.getElementById('tblTop');
var isi = document.getElementsByTagName('isi')[0];
window.onscroll = function () { //Menampilkan dan menyembunyikan tombol kembali ke atas
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
    tombolTop.style.display = "block";
  } else {
    tombolTop.style.display = "none";
  }
};
