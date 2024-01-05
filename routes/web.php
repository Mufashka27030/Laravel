<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('homepage',
    [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view ('aboutpage',
    [
        "title" => "About",
        "name" => "Muhammad Nabil",
        "email" => "Muhammadnabil@gmail.com",
        "image" => "Picture.jpg"
    ]);

    });

Route::get('/posts', function () {

    return view ('postspage',[
    [
        "title" => "Posts",
        "posts" => [
        [
        "title" => "Graphic Design",
        "slug" => "Graphic-Design",
        "author" => "Muhammad Nabil",
        "body" => "Desain grafis adalah suatu bentuk komunikasi yang dilakukan secara visual. Desain grafis akan memanfaatkan suatu gambar sebagai media dalam penyampaian pesan. Informasi yang disampaikan di dalamnya akan dilakukan seefektif mungkin.
                   Desain grafis berasal dari dua kata, yaitu kata desain dan kata grafis. Desain adalah suatu metode perancangan estetika. Metode perancangan ini didasarkan pada kreativitas.
                   Sedangkan grafis memiliki arti ilmu dari sebuah perancangan titik, maupun garis. Maka hal itu akan membentuk sebuah gambar, yang bisa memberikan informasi serta berhubungan dengan proses percetakan.
                   Maka bisa ditarik kesimpulan bahwa desain grafis adalah ilmu yang mengandalkan sebuah kreatifitas dalam menciptakan suatu rancangan yang berbentuk gambar. Tujuan akhirnya adalah sebagai kepentingan dari percetakan.
                   Desain grafis adalah salah satu bentuk seni lukis yang memiliki beberapa tujuan. Seperti untuk mengatur atau menciptakan elemen rupa. Contohnya foto, ilustrasi, tulisan dan garis di atas sebuah media.
                   Hal ini ditujukan untuk sebuah produksi. Selain itu, akan dikomunikasikan juga sebagai sebuah pesan. Bentuk dari seni desain grafis nantinya akan dibuat oleh graphic designer.
                   Graphic designer adalah orang yang memiliki spesialisasi dalam menginterpretasikan pesan dalam bentuk gambar. Dengan kata lain, seorang graphic designer adalah seorang komunikator visual. Tugasnya untuk menciptakan konsep visual secara manual, atau dapat menggunakan software komputer.
                   Mereka akan mengkomunikasikan sebuah ide untuk membuat sebuah inspirasi. Kemudian pesan tersebut akan diinformasikan melalui seni visual. Seperti tulisan, gambar dan grafik."

        ],
        [

        "title" => "Website",
        "slug" => "Website",
        "author" => "Muhammad Nabil",
        "body" => "Website adalah serangkaian halaman web berisi informasi yang terhubung satu sama lain dan
                   diakses melalui internet. Pada era digital saat ini, website telah menjadi salah satu elemen
                   penting di dalam kehidupan manusia.
                   Bagi pengunjung, website memberikan akses yang mudah dan cepat untuk mencari informasi,
                   membeli produk, atau mendapat pengalaman baru. Sedangkan bagi pelaku bisnis,
                   website dapat meningkatkan branding perusahaan serta memfasilitasi penjualan
                   produk secara online."

        ]
      ]
    ]
  ]);
});

Route::get('/posts/{slug}', function () {

    return view ('postspage',[
    [
        "title" => "Posts",
        "posts" => [
        [
        "title" => "Graphic Design",
        "slug" => "Graphic-Design",
        "author" => "Muhammad Nabil",
        "body" => "Desain grafis adalah suatu bentuk komunikasi yang dilakukan secara visual. Desain grafis akan memanfaatkan suatu gambar sebagai media dalam penyampaian pesan. Informasi yang disampaikan di dalamnya akan dilakukan seefektif mungkin.
                   Desain grafis berasal dari dua kata, yaitu kata desain dan kata grafis. Desain adalah suatu metode perancangan estetika. Metode perancangan ini didasarkan pada kreativitas.
                   Sedangkan grafis memiliki arti ilmu dari sebuah perancangan titik, maupun garis. Maka hal itu akan membentuk sebuah gambar, yang bisa memberikan informasi serta berhubungan dengan proses percetakan.
                   Maka bisa ditarik kesimpulan bahwa desain grafis adalah ilmu yang mengandalkan sebuah kreatifitas dalam menciptakan suatu rancangan yang berbentuk gambar. Tujuan akhirnya adalah sebagai kepentingan dari percetakan.
                   Desain grafis adalah salah satu bentuk seni lukis yang memiliki beberapa tujuan. Seperti untuk mengatur atau menciptakan elemen rupa. Contohnya foto, ilustrasi, tulisan dan garis di atas sebuah media.
                   Hal ini ditujukan untuk sebuah produksi. Selain itu, akan dikomunikasikan juga sebagai sebuah pesan. Bentuk dari seni desain grafis nantinya akan dibuat oleh graphic designer.
                   Graphic designer adalah orang yang memiliki spesialisasi dalam menginterpretasikan pesan dalam bentuk gambar. Dengan kata lain, seorang graphic designer adalah seorang komunikator visual. Tugasnya untuk menciptakan konsep visual secara manual, atau dapat menggunakan software komputer.
                   Mereka akan mengkomunikasikan sebuah ide untuk membuat sebuah inspirasi. Kemudian pesan tersebut akan diinformasikan melalui seni visual. Seperti tulisan, gambar dan grafik."

        ],
        [

        "title" => "Website",
        "slug" => "Website",
        "author" => "Muhammad Nabil",
        "body" => "Website adalah serangkaian halaman web berisi informasi yang terhubung satu sama lain dan
                   diakses melalui internet. Pada era digital saat ini, website telah menjadi salah satu elemen
                   penting di dalam kehidupan manusia.
                   Bagi pengunjung, website memberikan akses yang mudah dan cepat untuk mencari informasi,
                   membeli produk, atau mendapat pengalaman baru. Sedangkan bagi pelaku bisnis,
                   website dapat meningkatkan branding perusahaan serta memfasilitasi penjualan
                   produk secara online."

                ]
            ]
        ]
    ]);

    $new_post = [];
    foreach ($posts as $post){
     if($post["slug"] === $slug){
        $new_post = $post;
     }}
     return view('post',[
        "title" => "Single Post",
        "post" => $new_post
   ]);





});


//     $new_post = [];
//     foreach ($blog_posts as $post){
//      if($post["slug"] === '$slug'){
//         $new_post = $post;
//      }}
//      return view('post',[
//         "title" => "Single Post",
//         "post" => $new_post
//    ]);

//     ]);


// });




