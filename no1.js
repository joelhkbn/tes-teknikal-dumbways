// merotasi string

function printRotatedString(str) {
  var n = str.length
  var sb = str

  // menggabungkan string
  sb += str

  // mengambil karakter per karakter untuk dirotasi dan dimulai dari 0
  for (var i = 0; i < n; i++) {
    for (var j = 0; j != n; j++) document.write(sb.charAt(i + j))
    document.write('<br>')
  }
}

var str = 'father'
printRotatedString(str)
