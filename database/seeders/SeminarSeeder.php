<?php

namespace Database\Seeders;

use App\Models\Seminar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeminarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seminar = [
            [
                'nama_seminar' => 'Seminar Bimbingan dan Konseling',
                'tanggal_seminar' => '2010-03-10',
                'waktu_seminar' => '14:00',
                'foto_sampul' => 'test.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => '<p><strong>Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.</strong></p>

<p>Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.<br />
Peserta wajib mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.</p>

<p>Pada pelatihan ini peserta akan mempelajari :</p>

<ol>
	<li>Implementasi Kurikulum Merdeka dalam Layanan Bimbingan dan Konseling&nbsp;</li>
	<li>Penyusunan Program Bimbingan dan Konseling</li>
	<li>Strategi Layanan Bimbingan dan Konseling</li>
	<li>Layanan Peminatan dan Perencanaan Individual</li>
	<li>Evaluasi, Pelaporan, dan Tindak Lanjut</li>
</ol>

<p>Setelah mengikuti pelatihan ini, peserta diharapkan mampu Membuat Media Pembelajaran Berbasis Artificial Intelligence. Pelatihan ini akan berlangsung selama 5 hari.&nbsp;</p>

<p>Setelah mendaftar, silakan gabung ke grup diskusi Pelatihan dengan cara scan QRCode atau klik<em>&nbsp;l</em><em>ink</em>&nbsp;berikut :&nbsp;</p>',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Seminar Media Pembelajaran Berbasis Artificial Intelligence',
                'tanggal_seminar' => '2024-09-11',
                'waktu_seminar' => '14:00',
                'foto_sampul' => 'test2.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => '<p><strong>Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.</strong></p>

<p>Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.<br />
Peserta wajib mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.</p>

<p>Pada pelatihan ini peserta akan mempelajari :</p>

<ol>
	<li>Artificial Intelligent (AI) dalam Pembelajaran</li>
	<li>Pembuatan Presentasi Multimedia pembelajaran Berbasis AI</li>
	<li>Pembuatan Video Pembelajaran Berbasis AI</li>
	<li>Pembuatan Asesmen Pembelajaran Berbasis AI</li>
</ol>

<p>Setelah mengikuti pelatihan ini, peserta diharapkan mampu Membuat Media Pembelajaran Berbasis Artificial Intelligence. Pelatihan ini akan berlangsung selama 5 hari.&nbsp;</p>',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Seminar Publikasi Ilmiah (Introduction)',
                'tanggal_seminar' => '2024-03-12',
                'waktu_seminar' => '14:00',
                'foto_sampul' => 'test3.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => '<p><strong>Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.</strong></p>

<p>Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.<br />
Peserta diharapkan mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 5 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.</p>',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Seminar Anti Perundungan (Anti- Bullying) dan Kekerasan Terhadap Murid',
                'tanggal_seminar' => '2010-03-13',
                'waktu_seminar' => '14:00',
                'foto_sampul' => 'test4.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => '<p><strong>Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.</strong></p>

<p>Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.<br />
Peserta dapat mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 4 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.</p>

<p><strong>Anti Perundungan (Anti- Bullying) dan Kekerasan Terhadap Murid</strong></p>

<p><strong>Sasaran</strong></p>

<p>Sasaran dari pelatihan ini adalah tenga pendidik dan kependidikan, wali dari peserta didik, dan masyarakat umum yang memerlukan dan berkeinginan untuk meningkatkan pemahaman dan keterampilan dalam mencegah serta menanggapi perundungan dan kekerasan pada peserta didik</p>

<p><strong>⁠Tujuan</strong></p>

<p>Tujuan dari pelatihan ini adalah meningkatkan pemahaman peserta terhadap fenomena perundungan dan kekerasan, sambil memberikan strategi yang efektif dalam mencegah, mendeteksi, dan menanggapi situasi tersebut di konteks pendidikan.<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></p>

<p><strong>⁠Latar Belakang</strong></p>

<p>Pelatihan ini diselenggarakan sebagai tanggapan terhadap meningkatnya kasus perundungan dan kekerasan di kalangan peserta didik. Hal ini mendasari kebutuhan akan pendidikan yang lebih mendalam bagi para profesional pendidikan.<strong>&nbsp;&nbsp;</strong></p>',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Seminar Implementasi Kurikulum Merdeka',
                'tanggal_seminar' => '2010-03-13',
                'waktu_seminar' => '14:00',
                'foto_sampul' => 'test4.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
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
            ],
            [
                'nama_seminar' => 'Seminar Karya Tulis Ilmiah bagi Penghulu dan Penyuluh',
                'tanggal_seminar' => '2010-03-14',
                'waktu_seminar' => '14:00',
                'foto_sampul' => 'test5.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
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
            ],
            [
                'nama_seminar' => 'Seminar Kewirausahaan dan Ekonomi Kreatif di Pesantren',
                'tanggal_seminar' => '2010-03-15',
                'waktu_seminar' => '14:00',
                'foto_sampul' => 'test6.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => '<p><strong>Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.</strong></p>

<p>Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.<br />
Peserta wajib mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.</p>

<p><strong>Pada pelatihan ini, peserta akan mempelajari :&nbsp;</strong></p>

<ol>
	<li>Best Practice Kewirausahaan dan Ekonomi Kreatif di Pesantren</li>
	<li>Entrepreneurship MIndset : Dra. Budi Lestari, M.Pd</li>
	<li>Business Skill : Dr. Fatma Widyastuti, S.Pd., M.Ed</li>
	<li>Business Plan : Achmad Subkhan, S.H.I., M.S.I.</li>
	<li>Marketing Mix : Dra. Hj. Ngamilah, M.S.I</li>
	<li>Akuntansi dan Manajemen Keuangan : Dr. Hj. Siti Rokhanah, M.Ag.</li>
</ol>

<p>Sasaran Pelatihan : pengelola pondok pesantren, santri/santriwati, alumni pondok pesantren.</p>

<p>Tujuan Pelatihan : Untuk menginternalisasi nilai, sikap dan keterampilan kewirausahaan di lingkungan pondok pesantren dengan pengelolaan modern.&nbsp;</p>

<p><strong>Latar Belakang Pelatihan</strong></p>

<p>Pondok pesantren sebagai pusat pendidikan Islam sering memainkan peran krusial dalam membentuk karakter dan pengetahuan para santri. Dengan memahami pentingnya pengembangan ekonomi di tingkat komunitas, pesantren-pesantren modern mulai menyelenggarakan pelatihan kewirausahaan dan ekonomi kreatif. Langkah ini dilakukan untuk memberdayakan santri dan masyarakat sekitarnya agar mampu menghadapi tantangan ekonomi serta menciptakan lapangan kerja. Pelatihan tersebut bertujuan membangun keterampilan bisnis, pengetahuan manajemen, dan kreativitas dalam rangka mendukung pembangunan ekonomi lokal. Dengan demikian, pesantren bukan hanya tempat pendidikan agama, tetapi juga menjadi motor penggerak ekonomi yang berkelanjutan di wilayahnya.</p>',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Seminar Numerasi : Ide Praktis Pembelajaran dan Permainan Numerik',
                'tanggal_seminar' => '2010-03-16',
                'waktu_seminar' => '14:00',
                'foto_sampul' => 'test7.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => '<p><strong>Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama. Pelatihan ini akan berlangsung selama 5 hari.&nbsp;</strong></p>

<p>Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.<br />
Peserta wajib mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.</p>

<p><strong>Pada pelatihan ini peserta akan mempelajari :</strong></p>

<p>A. Numerasi di mana-mana:</p>

<p>1. Pengantar Penguatan Numerasi dalam Kurikulum Merdeka</p>

<p>2. Pendekatan Numerasi Lintas Kurikulum</p>

<p>3. Numerasi di Lingkungan Sekitar</p>

<p>B. Ide-Ide Praktis Penggunaan Alat Matematika</p>

<p>1. Numerasi Berbasis Alat Elektronik</p>

<p>2. Numerasi Berbasis Alat Non Elektronik</p>

<p>C. Permainan Kaya Numerasi</p>

<p>1. Permainan Berbasis Digital Kaya Numerasi&nbsp;</p>

<p>2. Permainan Berbasis Non Digital Kaya Numerasi</p>',
                'link' => null,
                'status' => 1,
            ],
        ];
        Seminar::insert($seminar);
    }
}
