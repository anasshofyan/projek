// emenambil elemen-elemen yang dibutuhkan
var keyword = document.getElementById('keyword');
var btnWishlist = document.getElementById('btn-wishlist');
var container = document.getElementById('container');


// btnCari.addEventListener('mouseover', function () {
// 	alert('berhasil');
// });

// console.log(xhr.responseText);
// responseText apapun isi dari sumber nya di buka

// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function(){

	//buat objek ajax
	var xhr = new XMLHttpRequest();
	// cek kesiapan ajax nya 
	// 4 sumber objek ready
	// 200 sumber  ok
	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status == 200){
			container.innerHTML = xhr.responseText;
		}
	}
	// eksekusi ajax
	// membuka koneksi ajax ( open )
	// method mau apa, get atau post,
	// paremeter kedua, sumber dari mana
	// paremeter ketiga mau syncronous atau asyncronous
	// mengakses file sumber php dengan menyertkan keyword
	xhr.open('GET', 'ajax/product.php?keyword=' + keyword.value, true);
	// menjalankan ajax nya  
	xhr.send();
});