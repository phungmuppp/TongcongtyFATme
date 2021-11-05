//giải phương trình bậc nhất
function giaiPTBacNhat(a, b) {
  if (a == 0) {
    if (b == 0) {
      alert("Phương trình vô số nghiệm");
    } else {
      alert("Phương trình vô nghiệm");
    }
  } else {
    alert("Phương trình có nghiệm x = " + -b / a);
  }
}
//xuất ra các số nguyên tố nhỏ hơn n
function nguyenTo(n) {
  var kq = "";
  for (var i = 2; i < n; i++) {
    var check = true;
    for (var j = 2; j < i; j++) {
      if (i % j == 0) {
        check = false;
        break;
      }
    }
    if (check) {
      kq += i + " ";
    }
  }
  return kq;
}
//viết ra "Phụng đẹp trai" 100 lần
function phuongDepTrai() {
  var kq = "";
  for (var i = 0; i < 100; i++) {
    kq += "Phụng đẹp trai ";
  }
  return kq;
}
//tìm số lớn nhất trong mảng
function max(arr) {
  var max = arr[0];
  for (var i = 1; i < arr.length; i++) {
    if (arr[i] > max) {
      max = arr[i];
    }
  }
  return max;
}
//sắp sếp qsort
function qsort(arr) {
  if (arr.length <= 1) {
    return arr;
  }
  var pivot = arr[0];
  var left = [];
  var right = [];
  for (var i = 1; i < arr.length; i++) {
    if (arr[i] < pivot) {
      left.push(arr[i]);
    } else {
      right.push(arr[i]);
    }
  }
  return qsort(left).concat(pivot, qsort(right));
}