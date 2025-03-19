// Array produkToko
let produkToko = [
    { id: 1, nama: "Laptop", harga: 7000000, stok: 5 },
    { id: 2, nama: "Mouse", harga: 200000, stok: 10 },
    { id: 3, nama: "Keyboard", harga: 350000, stok: 7 },
  ];
  console.log('-----------------------------------------------')
  // Fungsi untuk menambahkan produk baru
  function tambahProduk(nama, harga, stok) {
    let idBaru = produkToko.length + 1;
    produkToko.push({ id: idBaru, nama: nama, harga: harga, stok: stok });
    console.log(`Produk "${nama}" berhasil ditambahkan.`);
  }
  
  // Fungsi untuk menghapus produk berdasarkan id
  function hapusProduk(id) {
    let index = produkToko.findIndex((produk) => produk.id === id);
    if (index !== -1) {
      let namaProduk = produkToko[index].nama;
      produkToko.splice(index, 1);
      console.log(`Produk dengan id ${id} ("${namaProduk}") berhasil dihapus.`);
    } else {
      console.log(`Produk dengan id ${id} tidak ditemukan.`);
    }
  }
  
  // Fungsi untuk menampilkan daftar produk
  function tampilkanProduk() {
    console.log("Daftar Produk:");
    produkToko.forEach((produk) => {
      console.log(
        `ID: ${produk.id}, Nama: ${produk.nama}, Harga: ${produk.harga}, Stok: ${produk.stok}`
      );
    });
  }
  
  // Contoh penggunaan
  tampilkanProduk();
  console.log('-----------------------------------------------')
  tambahProduk("Monitor", 2500000, 3);
  tampilkanProduk();
  console.log('-----------------------------------------------')
  hapusProduk(2);
  tampilkanProduk();
  console.log('-----------------------------------------------')