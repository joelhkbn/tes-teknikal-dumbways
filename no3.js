var nomorBaris = 5,
  segitiga,
  mulai,
  berhenti

// n merupakan nomor baris
// a adalah array 2-D yang terdiri dari isi baris

function pascal_function(n, a) {
  if (n < 2) return a

  var barisSebelumnya = a[a.length - 1]
  var curRow = [1]

  for (var i = 1; i < barisSebelumnya.length; i++) {
    curRow[i] = barisSebelumnya[i] + barisSebelumnya[i - 1]
  }
  curRow.push(1)
  a.push(curRow)

  return pascal_function(n - 1, a) // memanggil fungsi secara rekursif
}

var segitiga = pascal_function(nomorBaris, [[1]])

for (var i = 0; i < segitiga.length; i++) console.log(segitiga[i] + '\n')
