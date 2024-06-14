<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelatihan;

class PelatihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pelatihan = [
            [
                'nama_pelatihan' => 'Pelatihan Lesson Study di Era Digital',
                'tanggal_awal' => '2010-03-10',
                'tanggal_akhir' => '2010-04-10',
                'foto_sampul' => 'test.png',
                'deskripsi_singkat' => 'Pelatihan ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Pelatihan ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, pelatihan ini cocok untuk Anda!',
                'deskripsi_lengkap' => '<p><strong>Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.</strong></p>

                                        <p>Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.<br />
                                        Peserta wajib mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan. Pelatihan ini akan berlangsung selama 5 hari.&nbsp;</p>

                                        <p>Dipelatihan ini peserta akan mempelajari :&nbsp;</p>

                                        <ol>
                                            <li>Konsep&nbsp;<em>Lesson Study</em><em>&nbsp;for Learning Community</em></li>
                                            <li>Strategi, Pendekatan Model, dan Media Pembelajaran dalam&nbsp;<em>Lesson Study</em></li>
                                            <li>Penyusunan&nbsp;<em>Plan&nbsp;</em>dalam&nbsp;<em>Lesson Study</em></li>
                                            <li>Penyusunan Laporan<em>&nbsp;Lesson Study</em></li>
                                        </ol>',
                'link' => null,
                'status' => 1,
                'harga_pelatihan' => '20000',
            ],
            [
                'nama_pelatihan' => 'Pelatihan Berbagi Cerita Inovasi Madrasah',
                'tanggal_awal' => '2010-03-11',
                'tanggal_akhir' => '2010-04-11',
                'foto_sampul' => 'test2.png',
                'deskripsi_singkat' => 'Pelatihan ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Pelatihan ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, pelatihan ini cocok untuk Anda!',
                'deskripsi_lengkap' => '<p><strong>⁠Kompetensi Teknis Pelatihan</strong>: melalui pelatihan ini diharapakan pelatihan ini peserta memiliki wawasan tentang inovasi yang dapat dilakukan disatuan Pendidikan masing-masing, dan dapat berbagi praktik baik dan menularkan pada yang lain.</p>',
                'link' => null,
                'status' => 1,
                'harga_pelatihan' => '15000',
            ],
            [
                'nama_pelatihan' => 'Pelatihan Media Penyuluhan Agama berbasis TIK',
                'tanggal_awal' => '2010-03-12',
                'tanggal_akhir' => '2010-04-12',
                'foto_sampul' => 'test3.png',
                'deskripsi_singkat' => 'Pelatihan ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Pelatihan ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, pelatihan ini cocok untuk Anda!',
                'deskripsi_lengkap' => '<p><strong>Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.</strong></p>

                                        <p>Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.<br />
                                        Peserta dapat mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 4 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.</p>

                                        <p><strong>NAMA PELATIHAN : PELATIHAN&nbsp; MEDIA PENYULUHAN BERBASIS TEKNOLOGI INFORMASI DAN KOMUNIKASI (TIK)</strong></p>

                                        <p>Kompetensi Teknis&nbsp; : Penguasaan media penyuluhan dalam pelaksanaan tugas sebagai Penyuluh Agama</p>

                                        <p>Sasaran Pelatihan : Penyuluh Agama</p>

                                        <p>Tujuan Pelatihan :&nbsp; Meningkatkan kompetensi Fungsional Penyuluh dalam membuat media penyuluhan dengan menggunakan TIK</p>

                                        <p>Latar belakang Pelatihan :&nbsp;</p>

                                        <p>Era digital ini merupakan era percepatan teknologi, seluruh ASN harus memiliki literasi digital di Era transformasi digital ini, seluruh staf pemerintahan atau ASN harus paham digital. Salah satunya adalah para penyuluh agama Kementerian Agama yang memiliki tupoksi yang sangat penting dalam menyampaikan hal-hal bagi masyarakat Indonesia. Penyuluh Agama yang memiliki kompetensi membuat media berbasis TIK sangat diperlukan agar dapat memberikan pemahaman yang masif dan komprehensif kepada Masyarakat dengan memanfaatkan TIK.&nbsp;</p>

                                        <p>Mengapa harus ikuti pelatihan ini :&nbsp;</p>

                                        <p>Pelatihan ini sangat dibutuhkan untuk meningkatkan keterampilan digital penyuluh agar dapat menyediakan media penyuluhan yang lebih atraktif dan inovatif serta dapat meningkatkan efisiensi dan produktivitas para penyuluh dalam membuat media penyuluhan.</p>

                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                    <p>NO</p>
                                                    </td>
                                                    <td>
                                                    <p>MATERI</p>
                                                    </td>
                                                    <td>
                                                    <p>NARASUMBER</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    <p>1</p>
                                                    </td>
                                                    <td>
                                                    <p>Penyusunan Materi Penyuluhan Berbasis TIK&nbsp;</p>
                                                    </td>
                                                    <td>
                                                    <p>Media Eka Putra, M.Ag.</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    <p>2</p>
                                                    </td>
                                                    <td>
                                                    <p>Pembuatan&nbsp;<em>Blog</em>&nbsp;bagi Penyuluh</p>
                                                    </td>
                                                    <td>
                                                    <p>El Azadivon Fhelsi, S.Si., M.Biomed.</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    <p>3</p>
                                                    </td>
                                                    <td>
                                                    <p>Pembuatan Media Penyuluhan Berbasis Android</p>
                                                    </td>
                                                    <td>
                                                    <p>Suryadi, M.Si.</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    <p>4</p>
                                                    </td>
                                                    <td>
                                                    <p>Publikasi Konten Video di Media Digital.</p>
                                                    </td>
                                                    <td>
                                                    <p>Rivana Upitasari, S.E., M.M.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>',
                'link' => null,
                'status' => 1,
                'harga_pelatihan' => '25000',
            ],
            [
                'nama_pelatihan' => 'Pelatihan Deteksi Dini: Metodologi Deteksi Dini Potensi Konflik',
                'tanggal_awal' => '2010-03-13',
                'tanggal_akhir' => '2010-04-13',
                'foto_sampul' => 'test4.png',
                'deskripsi_singkat' => 'Pelatihan ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Pelatihan ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, pelatihan ini cocok untuk Anda!',
                'deskripsi_lengkap' => '<p><strong>Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.</strong></p>

<p>Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.<br />
Peserta diharapkan mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 5 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.</p>

<p><strong>DETAIL PELATIHAN :</strong></p>

<p><strong>NAMA MODUL :&nbsp; TAHAPAN DAN SISTEM DETEKSI DINI KONFLIK</strong></p>

<ul>
	<li><strong>Sasaran</strong></li>
</ul>

<p>Penyuluh agama, dosen, Karyawan Kementerian Agama</p>

<ul>
	<li>⁠<strong>Tujuan</strong></li>
</ul>

<p>Meningkatkan kapasitas pegawai Kementerian Agama, baik dari level penyuluh, dosen PTKN dan seluruh staf dan karyawan Kementerian Agama untuk menjalankan amanah UU No.7 Tahun 2012 Tentang Penanganan Konflik Sosial, terutama dalam fungsinya membangun sistem Deteksi Dini untuk mencegah terjadinya konflik sosial berbasis keagamaan.&nbsp;&nbsp;</p>

<ul>
	<li>⁠<strong>Latar Belakang</strong></li>
</ul>

<p>Kementerian Agama diberikan amanah oleh Undang-Undang No.7 Tahun 2012 tentang Penanganan Konflik Sosial dan PP No.2 Tahun 2025 tentang Peraturan Pelaksanaan UU No.2 Tahun 2012 untuk melakukan serangkaian kerja pencegahan konflik sosial. Untuk itu, dibutuhkan peningkatan kapasitas kelembagaan dan kepegawaian agar lebih sensitif dan lebih peka terhadap kondisi sosial keagamaan masyarakat di tempat mereka berada. Salah satu rangkaian kerja tersebut adalah membangun sistem deteksi dini (Early Warning System).&nbsp;</p>

<p>Penyusunan Sistem Deteksi Dini Konflik Sosial Religiosity Index berangkat dari landasan pemikiran tersebut. Sesuai dengan arahan PP No.7 Tahun 2012, Sistem Deteksi Dini dan Cegah Dini konflik meliputi:</p>

<ol>
	<li>penelitian dan pemetaan wilayah potensi Konflik dan/atau daerah Konflik;</li>
	<li>Penyampaian data dan informasi mengenai Konflik secara cepat dan akurat;</li>
	<li>Penyelenggaraan pendidikan dan pelatihan;</li>
	<li>Peningkatan dan pemanfaatan modal sosial; dan</li>
	<li>Penguatan dan pemanfaatan fungsi intelijen sesuai dengan ketentuan peraturan perundang-undangan.</li>
</ol>

<p>Pelatihan ini menjadi bagian dari pelaksanaan salah satu kegiatan Sistem Deteksi Dini dan Cegah Dini pada poin C yaitu Penyelenggaraan pendidikan dan pelatihan.&nbsp;</p>

<ul>
	<li>⁠<strong>Kompetensi Teknis Pelatihan&nbsp;</strong></li>
</ul>

<p>Pelatihan akan melalui 7 seksi pelatihan Sistem Deteksi Dini Religiosity Index. Pelatihan tersebut terdiri dari video pemaparan materi, ujian di setiap seksi pelatihan, modul dan materi presentasi untuk bahan bacaan.</p>

<ul>
	<li>⁠<strong>Kurikulum/Struktur Program Deteksi Dini</strong></li>
</ul>

<p>Pada tahap ketiga ini, peserta akan mempelajari lebih lanjut tentang level konflik, siklus konflik, dimensi dan indikator pembentuk sistem deteksi dini konflik, skala radikalisasi, sinyak deteksi dini konflik, dan instrumen yang akan digunakan. Berikut di bawah ini materi kurikulum modul 3:</p>

<ol>
	<li>Kementerian Agama dan Sistem Deteksi Dini Konflik</li>
	<li>Lima Level Konflik</li>
	<li>Siklus Resolusi Konflik</li>
	<li>Dimensi dan Indikator Sistem Deteksi Dini Konflik</li>
	<li>Empat Skala Radikalisasi</li>
	<li>Sinyak Deteksi Dini Konflik</li>
	<li>Instrumen Deteksi Dini</li>
</ol>',
                'link' => null,
                'status' => 1,
                'harga_pelatihan' => '10000',
            ],
            [
                'nama_pelatihan' => 'Pelatihan Relevansi Kurikulum Pondok Pesantren di Era Digital',
                'tanggal_awal' => '2010-03-13',
                'tanggal_akhir' => '2010-04-13',
                'foto_sampul' => 'test4.png',
                'deskripsi_singkat' => 'Pelatihan ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Pelatihan ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, pelatihan ini cocok untuk Anda!',
                'deskripsi_lengkap' => '<p><strong>Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.</strong></p>

<p>Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.<br />
Peserta diharapkan mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 5 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.</p>',
                'link' => null,
                'status' => 1,
                'harga_pelatihan' => '15000',
            ],
            [
                'nama_pelatihan' => 'Pelatihan Karya Tulis Ilmiah bagi Penghulu dan Penyuluh',
                'tanggal_awal' => '2010-03-14',
                'tanggal_akhir' => '2010-04-14',
                'foto_sampul' => 'test5.png',
                'deskripsi_singkat' => 'Pelatihan ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Pelatihan ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, pelatihan ini cocok untuk Anda!',
                'deskripsi_lengkap' => '<p><strong>Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.</strong></p>

<p>Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.<br />
Peserta wajib mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.</p>

<p><strong>Dalam pelatihan ini peserta akan mempelajari :</strong></p>

<ol>
	<li>Karya Tulis Ilmiah sebagai Pengembangan Profesi</li>
	<li>Sistematika Karya Tulis Ilmiah dan Tata Bahasa Indonesia dalam Penyusunan KTI</li>
	<li>Teknik Analisis Data</li>
	<li>Penyusunan Karya Tulis Ilmiah</li>
	<li>Media Publikasi</li>
</ol>

<p>Setelah mengikuti pelatihan ini, peserta diharapkan mampu memahami dan menyusun Karya Tulis Ilmiah sesuai kaidah. Pelatihan ini akan dilaksanakan selama 5 hari.</p>',
                'link' => null,
                'status' => 1,
                'harga_pelatihan' => '20000',
            ],
            [
                'nama_pelatihan' => 'Pelatihan Literasi : Pembelajaran Terdiferensiasi dengan Keterampilan Membaca Dekoding dan Pemahaman',
                'tanggal_awal' => '2010-03-15',
                'tanggal_akhir' => '2010-04-15',
                'foto_sampul' => 'test6.png',
                'deskripsi_singkat' => 'Pelatihan ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Pelatihan ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, pelatihan ini cocok untuk Anda!',
                'deskripsi_lengkap' => '<p><strong>Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama. Pelatihan ini akan berlangsung selama 5 hari.&nbsp;</strong></p>

<p>Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.<br />
Peserta wajib mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.</p>

<p><strong>Pada pelatihan ini peserta akan mempelajari :</strong></p>

<p>- Strategi belajar membaca di kelas awal<br />
- Pengelolaan kelas dalam kegiatan membaca bersama<br />
- Penerapan kegiatan terdiferensiasi dalam kegiatan membaca terbimbing<br />
- Pengelolaan kelas dalam kegiatan membaca terbimbing<br />
- Buku Berjenjang</p>',
                'link' => null,
                'status' => 1,
                'harga_pelatihan' => '10000',
            ],
            [
                'nama_pelatihan' => 'Pelatihan Implementasi Kurikulum Merdeka',
                'tanggal_awal' => '2010-03-16',
                'tanggal_akhir' => '2010-04-16',
                'foto_sampul' => 'test7.png',
                'deskripsi_singkat' => 'Pelatihan ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Pelatihan ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, pelatihan ini cocok untuk Anda!',
                'deskripsi_lengkap' => '<p><strong>Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.</strong></p>

<p>Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.<br />
Peserta diharapkan mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanaan selama 5 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.</p>

<p>Setelah mengikuti pelatihan ini, peserta diharapkan mampu mengimplementasikan Kurikulum Merdeka di Madrasah.&nbsp;</p>

<p>Pada pelatihan ini peserta akan mempelajari :</p>

<ol>
	<li>Perubahan Paradigma Pendidikan Madrasah</li>
	<li>Pembelajaran Berdiferensiasi (Pengelolaan Pembelajaran pada Kurikulum Merdeka)</li>
	<li>Asesmen Pembelajaran pada Kurikulum Merdeka</li>
	<li>Proyek Penguatan Profil Pelajar Pancasila dan Profil Pelajar Rahmatan Lil&#39;alamin (P5 PPRA)</li>
	<li>Penyusunan Kurikulum Operasional Madrasah (KOM)&nbsp;</li>
	<li>Teknik Coaching dan Mentoring</li>
</ol>',
                'link' => null,
                'status' => 1,
                'harga_pelatihan' => '20000',
            ],
        ];
        Pelatihan::insert($pelatihan);
    }
}
