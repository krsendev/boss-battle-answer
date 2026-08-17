# Boss Battle

Repository latihan untuk memperbaiki repository Git yang sangat berantakan.

## Masalah Awal
- Password tersimpan di source code
- `node_modules` sebanyak 4.000 file terlacak 
- Branch `fitur-lama` tertinggal
- Banyak commit menggunakan pesan `update`
- Tidak terdapat README
- Tidak terdapat `.gitignore`
- Tidak mempunyai tag version

## Perbaikan
- Password dihapus dari source code
- Password dipindahkan ke environment variable
- `node_modules` dikeluarkan dari pelacakan
- `.gitignore` ditambahkan
- Branch `fitur-lama` dihapus karena sudah tidak relevan
- Membuat script pemeriksaan password
- Histori repository dirapikan menjadi satu commit final
- Membuat tag `v1.0`
