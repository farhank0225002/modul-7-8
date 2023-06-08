function hitungLuas() {
  var panjang = parseFloat(document.getElementById("input-panjang").value);
  var lebar = parseFloat(document.getElementById("input-lebar").value);

  if (isNaN(panjang) || isNaN(lebar)) {
    document.getElementById("hasil-luas").innerHTML = "Masukkan nilai panjang dan lebar yang valid.";
  } else {
    var luas = panjang * lebar;
    document.getElementById("hasil-luas").innerHTML = "Luas: " + luas;
  }
}
