<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Surat Perjanjian</title>
    <link href="/css/style.css" rel='stylesheet' type='text/css' />
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="/css/custcss.css" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"> </script>
    <link href="/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
</head>
<body onload="window.print()">
<div class="surat" style="margin: 20px">
    <div class="header-surat">
        <center>
            <h1><b>Surat Perjanjian Akad</b></h1>
            <p><b>Akad Murabahah</b></p>
            <p><b>BMT Muhajirin</b></p>

            <p>Nomor Surat : BMT/Muhajirin/<?php $tgl=date('d-m-y'); echo $tgl?>  </p>

        </center>
        <hr style="border-color: #000000">
    </div>
    <div class="body-surat">
        <div class="pengantar-header">
            <br>
            <center>
                <p style="margin-left: 100px; margin-right: 100px">
                    <i>
                        ".hai orang-orang yang beriman, janganlah kalian saling memakan
                        (mengambil) harta sesamamu dengan jalan batil kecuali dengan jalan perniagaan yang berlaku dengan sukarela diantaramu"
                        (Qs.An – Nissa’(4):29)
                    </i>
                </p><br>
                <p style="margin-left: 100px; margin-right: 100px">
                    <i>
                        Dari Saad bin Abi Waqqash, bahwa Nabi Muhammad saw bersabda: "Kami pernah menyewakan tanah
                        dengan (bayaran) hasil pertaniannya, maka Rasulullah melarang kami melakukan hal tersebut dan
                        memerintahkan agar kami menyewakannya dengan emas atau perak."
                        (H.R. Abu Dawud)
                    </i>
                </p><br>
            </center>
            <br>
            <p style="text-indent: 30px; text-align: justify">
                Dengan berlindung kepada Allah dan senantiasa memohon RahmatNya.
                Akad ini dibuat dan ditandatangani pada hari : &nbsp; <?php $tgl=date('l,d-m-y'); echo $tgl?> &nbsp;tempat :BMT Muhajirin
                oleh para pihak sebagai berikut :
            </p>
        </div>
        <?php
        $no_rekening = 1;
        foreach ($tampil_akad->result() as $value) {
        ?>
        <br>
        <div class="pengenal-pihak-pertama">
            <p style="text-indent: 30px; text-align: justify">
                Nama : <?php echo $value->username; ?>,&nbsp; Dalam hal ini berwenang bertindak untuk dan atas nama BMT Muhajirin yang berkedudukan dan berkantor di Cimanggis untuk selanjutnya disebut PIHAK I.
            </p>
        </div>
        <div class="pihak-kedua">
            <p style="text-indent: 30px; text-align: justify">
                Nama : <?php echo $value->nama; ?>, dengan No identitas <?php echo $value->nomor_identitas; ?> yang dalam hal ini telah  bertindak untuk dan atas nama pribadi/diri sendiri, yang untuk selanjutnya disebut PIHAK II .
            </p>
        </div>
        <br>
        <br>
        <div class="keterangan-akad" style="margin-left: 30px; margin-right: 30px; text-align: justify">
            <p>
                Kedua belah pihak bertindak dalam kedudukannya masing-masing sebagaimana tersebut di atas, telah sepakat melakukan perjanjian
                jual beli Murabahah yang terikat dengan ketentuan dan syarat-syarat sebagai berikut:
            </p>

        </div>
        <br><br><br><br><br><br><br><br><br><br>
        <div class="pasal-akad">
            <div class="pasal-1" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                <center>
                    <h3><b>Pasal 1</b></h3>
                    <p><b>Jual Beli</b></p>
                </center>
                <ol>
                    <li>
                        PIHAK I menjual barang kepada PIHAK II berupa barang/barang-barang yang tercantum dalam lampiran yang merupakan bagian yang tidak terpisahkan
                        dari akad perjanjian ini, sebesar: <?php echo number_format($value->jumlah_permohonan_pembiayaan,2,',','.') ; ?> dengan perincian
                        harga pokok sebesar: Rp<?php echo number_format($value->total_pembiayaan,2,',','.'); ?>
                    </li>
                </ol>
            </div>
            <br><br>
            <div class="pasal-2" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                <center>
                    <h3><b>Pasal 2</b></h3>
                    <p><b>Sistem, Jangka Waktu Pembayaran Kembali dan Biaya-biaya</b></p>
                </center>
                <ol>
                    <li>
                        PIHAK II sepakat untuk membeli barang sebagaimana tersebut pada pasal 1 dengan ketentuan-ketentuan sebagai berikut :
                    </li>
                    <li>
                        Sistem pembayaran adalah angsuran / jatuh tempo
                    </li>
                    <li>
                        Tata cara pembayaran diatur dalam lembar tersendiri
                        yang merupakan bagian yang melekat dan tidak terpisahkan dari perjanjian ini.
                    </li>
                    <li>
                        Jangka waktu pembayaran adalah <?php echo $value->jangka_waktu; ?> bulan oleh karena itu perjanjian jual beli ini berlaku sejak tanggal ditandatanganinya. Adapun
                        pelunasan pembayaran dapat dilakukan sebelum jatuh tempo atau selambat-lambatnya akan jatuh tempo pada<?php echo $value->jatuh_tempo; ?> .
                    </li>
                    <li>
                        Wajib membayar seluruh kewajiban yang muncul akibat adanya perjanjian jual beli ini sampai dengan lunas sebagaimana mestinya kepada PIHAK I.
                    </li>
                    <li>
                        Dalam hal pembayaran yang dilakukan PIHAK II sesuai kesepakatan jatuh pada hari ahad atau hari libur
                        umum atau hari bukan hari kerja lainnya, maka pembayaran dilakukan sebelum hari tersebut .
                    </li>
                    <li>
                        Dalam hal terjadi kelalaian dalam hal membayar seperti apa yang diperjanjikan PIHAK II sebagaimana bunyi perjanjian ini, maka segala ongkos penagihan,
                        termasuk juga biaya kuasa dari PIHAK I, harus dipikul dan dibeLKSan serta dibayar oleh PIHAK II.
                    </li>
                </ol>
            </div>
            <br><br>
            <div class="pasal-3" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                <center>
                    <h3><b>Pasal 3</b></h3>
                    <p><b>Pengutamaan Pembayaran</b></p>
                </center>
                <p>
                    PIHAK II akan melakukan angsuran sesuai dengan kesepakatan sebagaimana bunyi pasal 2 berikut tata cara pembayarannya
                    secara tertib dan teratur dan akan lebih mengutamakan kewajiban pembayaran ini daripada pembayaran kepada pihak lain.
                </p>
            </div>
            <br><br>
            <div class="pasal-4" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                <center>
                    <h3><b>Pasal 4</b></h3>
                    <p><b>Pengakuan Utang dan Pernyataan Jaminan</b></p>
                </center>
                <ol>
                    <li>
                        Berkaitan dengan jual-beli ini,selama harga Pihak I sebagaimana dimaksud Pasal 2 ayat 3 belum dilunasi oleh anggota kepada dari PIHAK I, maka anggota dengan ini mengaku berutang kepada dari PIHAK I, sebagaimana dari PIHAK I menerima
                        pengakuan utang tersebut dari anggota sebesar harga atau sisa harga yang belum dibayar lunas oleh anggota.
                    </li>
                    <li>
                        Untuk menjamin keamanan dan terpenuhinya akad sebagaiman perjanjian jual-beli ini, maka PIHAK II menyerahkan jaminan.
                    </li>
                    <li>
                        PIHAK II menyerahkan <?php echo $value->jaminan; ?>dengan nomor <?php echo $value->nomor_jaminan; ?> sebagaimana jaminan dengan akad jual-beli yang telah disepakati.
                    </li>
                    <li>
                        Obyek jaminan tetap menjadi milik PIHAK II dan obyek jaminan tersebut dapat dikuasakan penyimpanannya pada PIHAK I.
                    </li>
                    <li>
                        Apabila PIHAK II berkehendak menggunakan obyek jaminan tersebut, maka PIHAK I dapat menyerahkan obyek jaminan kepada PIHAK II dan PIHAK II berkewajiban untuk memelihara obyek jaminan tersebut dengan sebaik-baiknya dan melakukan semua tindakan yang diperlukan untuk pemeliharaan dan perbaikan atas obyek jaminan atas biaya
                        dan tanggungan PIHAK II sendiri serta membayar pajak, retribusi dan beban lainnya yang berkaitan dengan itu.
                    </li>
                    <li>
                        Apabila bagian dan atau seluruhnya dari obyek jaminan tersebut rusak, hilang atau diantara obyek jaminan tersebut tidak dapat dipergunakan lagi, maka PIHAK II dengan ini mengikatkan diri untuk mengganti bagian dan atau seluruhnya
                        dari obyek jaminan sejenis dan atau setara nilainya dari yang digantikan serta disetujui oleh PIHAK I.
                    </li>
                    <li>
                        PIHAK II tidak berhak melakukan penjaminan ulang atas obyek jaminan dan tidak diperkenankan membeLKSan dengan cara apapun, menggadaikan atau menjual atau mengalihkan obyek
                        jaminan kepada pihak lain tanpa persetujuan tertulis terlebih dahulu dari PIHAK I.
                    </li>
                    <li>
                        8. PIHAK II bersedia bertanggung jawab untuk melepaskan hak atas jaminan tersebut pada Pasal 3 ayat 3 kepada PIHAK I,
                        apabila PIHAK II selama tiga periode angsuran tidak memenuhi angsuran tidak memenuhi kewajibannya untuk mengangsur
                        sebagaimana diatur pada Pasal 2 perjanjian ini. Dengan ini PIHAK I memiliki hak terhadap barang tersebut dengan tanpa
                        sesuatu yang dikecualikan untuk menarik jaminan dan atau untuk menjualnya kepada pihak manapun untuk melunasi kewajiban PIHAK II.
                        Kelebihan nilai jual jaminan dengan nilai pinjaman dikembalikan pada PIHAK II.
                    </li>
                </ol>
            </div>
            <br><br>
            <div class="pasal-5" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                <center>
                    <h3><b>Pasal 5</b></h3>
                    <p><b>Keadaan Memaksa (Force Majeure)</b></p>
                </center>
                <ol>
                    <li>
                        1. Apabila terjadi keterlambatan atau kegagalan salah satu pihak untuk memenuhi kewajiban sebagaiman tercantum dalam perjanjian ini yang disebabkan oleh karena keadaan yang memaksa seperti bencana alam, huruhara, dan sabotase, dan tidak
                        dapat dihindari dengan melakukan tindakan sepatutnya, maka kerugian yang diakibatkan tersebut ditanggung oleh PIHAK I.
                    </li>
                    <li>
                        2. Dalam hal terjadi keadaan memaksa, pihak yang mengalami peristiwa yang dikategorikan keadaan memaksa wajib memberitahukan secara tertulis tentang hal tersebut kepada pihak lainnya dengan melampirkan bukti secukupnya dari kepolisian atau instansi yang
                        berwenang mengenai kejadian memaksa tersebut selambat-lambatnya 14 hari terhitung sejak keadaan memaksa tersebut.
                    </li>
                    <li>
                        3. Apabila dalam waktu 30 hari sejak diterimanya pemberitahuan sebagaimana ayat 2 tersebut belum atau tidak ada tangggapan dari pihak yang menerima pemberitahuan,
                        maka adanya peristiwa tersebut dianggap telah disetujui oleh pihak tersebut.
                    </li>
                    <li>
                        4. Apabila keadaan memaksa tersebut mengakibatkan kegagalan dalam pelaksanaan ketentuan-ketentuan dalam perjanjian ini selama 3 bulan,
                        maka perjanjian ini dapat diakhiri dengan suatu perjanjian antara para pihak.
                    </li>
                </ol>
            </div>
            <br><br>
            <div class="pasal-6" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                <center>
                    <h3><b>Pasal 6</b></h3>
                    <p><b>Addendum</b></p>
                </center>
                <ol>
                    <li>
                        Kedua belah pihak telah bersepakat, bahwa segala sesuatu yang belum diatur dalam akad ini, akan diatur dalam addendum-addendum dan atau surat-surat dan atau
                        lampiran-lampiran yang akan dibuat dan menjadi bagian yang tidak terpisahkan dari perjanjian ini.
                    </li>
                </ol>
            </div>
            <br><br>
            <div class="pasal-7" style="margin-left: 30px; margin-right: 30px; text-align: justify">
                <center>
                    <h3><b>Pasal 7</b></h3>
                    <p><b>Domisili Hukum</b></p>
                </center>
                <p>
                    Tentang akad ini dan segala akibatnya, para pihak memilih domisili hukum yang tetap dan
                    tidak berubah di kantor Pengadilan Agama Terdekat.
                </p>
            </div>
            <br><br>
        <div class="pengesahan" style="margin-top: 300px">
            <div class="row">
                <div class="ttd-pihak-pertama" style="float: left; margin-left: 100px">
                    <center>
                        <p><b>PIHAK PERTAMA</b></p>
                        <p style="margin-top: 120px"><?php echo $value->username; ?></p>
                    </center>
                </div>
                <div class="ttd-pihak-kedua" style="float: right; margin-right: 100px">
                    <center>
                        <p><b>PIHAK KEDUA</b></p>
                        <p style="margin-top: 120px"> <?php echo $value->nama; ?></p>
                    </center>
                </div>
            </div>
            <br><br><br>
        </div>
            <?php $no_rekening++;  } ?>
    </div>
</div>
</body>
</html>