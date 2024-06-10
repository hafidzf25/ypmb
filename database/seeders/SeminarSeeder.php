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
                'foto_sampul' => 'test.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => 'Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.
                                        
                                        Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.
                                        
                                        Peserta dapat mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 4 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.
                                        
                                         Pada pelatihan ini peserta akan mempelajari :

                                        1. Implementasi Kurikulum Merdeka dalam Layanan Bimbingan dan Konseling 
                                        2. Penyusunan Program Bimbingan dan Konseling
                                        3. Strategi Layanan Bimbingan dan Konseling
                                        4. Layanan Peminatan dan Perencanaan Individual
                                        5. Evaluasi, Pelaporan, dan Tindak Lanjut
                                        
                                        Setelah mengikuti pelatihan ini, peserta diharapkan mampu Membuat Media Pembelajaran Berbasis Artificial Intelligence. Pelatihan ini akan berlangsung selama 5 hari. 
                                        
                                        Mengapa harus ikuti Seminar ini : Seminar ini sangat dibutuhkan untuk meningkatkan keterampilan digital penyuluh agar dapat menyediakan media penyuluhan yang lebih atraktif dan inovatif serta dapat meningkatkan efisiensi dan produktivitas para penyuluh dalam membuat media penyuluhan.
                                        
                                        Penyusunan Materi Penyuluhan Berbasis TIK : Media Eka Putra, M.Ag.
                                        Pembuatan Blog bagi Penyuluh : El Azadivon Fhelsi, S.Si., M.Biomed.
                                        Pembuatan Media Penyuluhan Berbasis Android : Suryadi, M.Si.
                                        Publikasi Konten Video di Media Digital : Rivana Upitasari, S.E., M.M.',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Seminar Media Pembelajaran Berbasis Artificial Intelligence',
                'tanggal_seminar' => '2024-09-11',
                'foto_sampul' => 'test2.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => 'Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.
                                        
                                        Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.
                                        
                                        Peserta dapat mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 4 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.
                                        
                                        Pada pelatihan ini peserta akan mempelajari :

                                        1. Artificial Intelligent (AI) dalam Pembelajaran
                                        2. Pembuatan Presentasi Multimedia pembelajaran Berbasis AI
                                        3. Pembuatan Video Pembelajaran Berbasis AI
                                        4. Pembuatan Asesmen Pembelajaran Berbasis AI
                                        
                                        Setelah mengikuti pelatihan ini, peserta diharapkan mampu Membuat Media Pembelajaran Berbasis Artificial Intelligence. Pelatihan ini akan berlangsung selama 5 hari. 

                                        Mengapa harus ikuti Seminar ini : Seminar ini sangat dibutuhkan untuk meningkatkan keterampilan digital penyuluh agar dapat menyediakan media penyuluhan yang lebih atraktif dan inovatif serta dapat meningkatkan efisiensi dan produktivitas para penyuluh dalam membuat media penyuluhan.
                                        
                                        Penyusunan Materi Penyuluhan Berbasis TIK : Media Eka Putra, M.Ag.
                                        Pembuatan Blog bagi Penyuluh : El Azadivon Fhelsi, S.Si., M.Biomed.
                                        Pembuatan Media Penyuluhan Berbasis Android : Suryadi, M.Si.
                                        Publikasi Konten Video di Media Digital : Rivana Upitasari, S.E., M.M.',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Seminar Publikasi Ilmiah (Introduction)',
                'tanggal_seminar' => '2024-03-12',
                'foto_sampul' => 'test3.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => 'Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.
                                        
                                        Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.
                                        
                                       Peserta diharapkan mendaftar dan melakukan pelatihan sampai selesai secara mandiri. 
                                       Pelatihan dilaksanakan selama 5 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.
                                        
                                       Mengapa harus ikuti Seminar ini : Seminar ini sangat dibutuhkan untuk meningkatkan keterampilan digital penyuluh agar dapat menyediakan media penyuluhan yang lebih atraktif dan inovatif serta dapat meningkatkan efisiensi dan produktivitas para penyuluh dalam membuat media penyuluhan.
                                        
                                        Penyusunan Materi Penyuluhan Berbasis TIK : Media Eka Putra, M.Ag.
                                        Pembuatan Blog bagi Penyuluh : El Azadivon Fhelsi, S.Si., M.Biomed.
                                        Pembuatan Media Penyuluhan Berbasis Android : Suryadi, M.Si.
                                        Publikasi Konten Video di Media Digital : Rivana Upitasari, S.E., M.M.',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Seminar Anti Perundungan (Anti- Bullying) dan Kekerasan Terhadap Murid',
                'tanggal_seminar' => '2010-03-13',
                'foto_sampul' => 'test4.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => 'Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.
                                        
                                        Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.
                                        
                                       Peserta dapat mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 4 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.

                                        Anti Perundungan (Anti- Bullying) dan Kekerasan Terhadap Murid

                                        Sasaran

                                        Sasaran dari pelatihan ini adalah tenga pendidik dan kependidikan, wali dari peserta didik, dan masyarakat umum yang memerlukan dan berkeinginan untuk meningkatkan pemahaman dan keterampilan dalam mencegah serta menanggapi perundungan dan kekerasan pada peserta didik

                                        ⁠Tujuan

                                        Tujuan dari pelatihan ini adalah meningkatkan pemahaman peserta terhadap fenomena perundungan dan kekerasan, sambil memberikan strategi yang efektif dalam mencegah, mendeteksi, dan menanggapi situasi tersebut di konteks pendidikan.                 

                                        ⁠Latar Belakang

                                        Pelatihan ini diselenggarakan sebagai tanggapan terhadap meningkatnya kasus perundungan dan kekerasan di kalangan peserta didik. Hal ini mendasari kebutuhan akan pendidikan yang lebih mendalam bagi para profesional pendidikan.  

 
                                        
                                        Mengapa harus ikuti Seminar ini : Seminar ini sangat dibutuhkan untuk meningkatkan keterampilan digital penyuluh agar dapat menyediakan media penyuluhan yang lebih atraktif dan inovatif serta dapat meningkatkan efisiensi dan produktivitas para penyuluh dalam membuat media penyuluhan.
                                        
                                        Penyusunan Materi Penyuluhan Berbasis TIK : Media Eka Putra, M.Ag.
                                        Pembuatan Blog bagi Penyuluh : El Azadivon Fhelsi, S.Si., M.Biomed.
                                        Pembuatan Media Penyuluhan Berbasis Android : Suryadi, M.Si.
                                        Publikasi Konten Video di Media Digital : Rivana Upitasari, S.E., M.M.',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Seminar Implementasi Kurikulum Merdeka',
                'tanggal_seminar' => '2010-03-13',
                'foto_sampul' => 'test4.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => 'Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.
                                        
                                        Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.
                                        
                                        Peserta dapat mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 5 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.
                                        Setelah mengikuti pelatihan ini, peserta diharapkan mampu mengimplementasikan Kurikulum Merdeka di Madrasah. 

                                        Pada pelatihan ini peserta akan mempelajari :

                                        1.Perubahan Paradigma Pendidikan Madrasah
                                        2.Pembelajaran Berdiferensiasi (Pengelolaan Pembelajaran pada Kurikulum Merdeka)
                                        3.Asesmen Pembelajaran pada Kurikulum Merdeka
                                        4.Proyek Penguatan Profil Pelajar Pancasila dan Profil Pelajar Rahmatan Lil alamin (P5 PPRA) 
                                        5.Penyusunan Kurikulum Operasional Madrasah (KOM) 
                                        6.Teknik Coaching dan Mentoring
                                        
                                        Mengapa harus ikuti Seminar ini : Seminar ini sangat dibutuhkan untuk meningkatkan keterampilan digital penyuluh agar dapat menyediakan media penyuluhan yang lebih atraktif dan inovatif serta dapat meningkatkan efisiensi dan produktivitas para penyuluh dalam membuat media penyuluhan.
                                        
                                        Penyusunan Materi Penyuluhan Berbasis TIK : Media Eka Putra, M.Ag.
                                        Pembuatan Blog bagi Penyuluh : El Azadivon Fhelsi, S.Si., M.Biomed.
                                        Pembuatan Media Penyuluhan Berbasis Android : Suryadi, M.Si.
                                        Publikasi Konten Video di Media Digital : Rivana Upitasari, S.E., M.M.',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Seminar Karya Tulis Ilmiah bagi Penghulu dan Penyuluh',
                'tanggal_seminar' => '2010-03-14',
                'foto_sampul' => 'test5.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => 'Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.
                                        
                                        Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.
                                        
                                        Peserta dapat mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 4 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.
                                        
                                        Dalam pelatihan ini peserta akan mempelajari :

                                        1.Karya Tulis Ilmiah sebagai Pengembangan Profesi
                                        2.Sistematika Karya Tulis Ilmiah dan Tata Bahasa Indonesia dalam Penyusunan KTI
                                        3.Teknik Analisis Data
                                        4.Penyusunan Karya Tulis Ilmiah
                                        5.Media Publikasi
                                        
                                        Setelah mengikuti pelatihan ini, peserta diharapkan mampu memahami dan menyusun Karya Tulis Ilmiah sesuai kaidah. Pelatihan ini akan dilaksanakan selama 5 hari
                                        
                                        Mengapa harus ikuti Seminar ini : Seminar ini sangat dibutuhkan untuk meningkatkan keterampilan digital penyuluh agar dapat menyediakan media penyuluhan yang lebih atraktif dan inovatif serta dapat meningkatkan efisiensi dan produktivitas para penyuluh dalam membuat media penyuluhan.
                                        
                                        Penyusunan Materi Penyuluhan Berbasis TIK : Media Eka Putra, M.Ag.
                                        Pembuatan Blog bagi Penyuluh : El Azadivon Fhelsi, S.Si., M.Biomed.
                                        Pembuatan Media Penyuluhan Berbasis Android : Suryadi, M.Si.
                                        Publikasi Konten Video di Media Digital : Rivana Upitasari, S.E., M.M.',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Seminar Kewirausahaan dan Ekonomi Kreatif di Pesantren',
                'tanggal_seminar' => '2010-03-15',
                'foto_sampul' => 'test6.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => 'Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.
                                        
                                        Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.
                                        
                                        Peserta dapat mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 4 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.
                                        
                                       Pada pelatihan ini, peserta akan mempelajari : 

                                        Best Practice Kewirausahaan dan Ekonomi Kreatif di Pesantren

                                        1.Entrepreneurship MIndset : Dra. Budi Lestari, M.Pd
                                        2.Business Skill : Dr. Fatma Widyastuti, S.Pd., M.Ed
                                        3.Business Plan : Achmad Subkhan, S.H.I., M.S.I.
                                        4.Marketing Mix : Dra. Hj. Ngamilah, M.S.I
                                        5.Akuntansi dan Manajemen Keuangan : Dr. Hj. Siti Rokhanah, M.Ag.


                                        Sasaran Pelatihan : pengelola pondok pesantren, santri/santriwati, alumni pondok pesantren.

                                        Tujuan Pelatihan : Untuk menginternalisasi nilai, sikap dan keterampilan kewirausahaan di lingkungan pondok pesantren dengan pengelolaan modern. 

                                        Latar Belakang Pelatihan

                                        Pondok pesantren sebagai pusat pendidikan Islam sering memainkan peran krusial dalam membentuk karakter dan pengetahuan para santri. Dengan memahami pentingnya pengembangan ekonomi di tingkat komunitas, pesantren-pesantren modern mulai menyelenggarakan pelatihan kewirausahaan dan ekonomi kreatif. Langkah ini dilakukan untuk memberdayakan santri dan masyarakat sekitarnya agar mampu menghadapi tantangan ekonomi serta menciptakan lapangan kerja. Pelatihan tersebut bertujuan membangun keterampilan bisnis, pengetahuan manajemen, dan kreativitas dalam rangka mendukung pembangunan ekonomi lokal. Dengan demikian, pesantren bukan hanya tempat pendidikan agama, tetapi juga menjadi motor penggerak ekonomi yang berkelanjutan di wilayahnya.

                                        

                                        Pelatihan ini akan berlangsung selama 5 hari. 
                                        
                                        Mengapa harus ikuti Seminar ini : Seminar ini sangat dibutuhkan untuk meningkatkan keterampilan digital penyuluh agar dapat menyediakan media penyuluhan yang lebih atraktif dan inovatif serta dapat meningkatkan efisiensi dan produktivitas para penyuluh dalam membuat media penyuluhan.
                                        
                                        Penyusunan Materi Penyuluhan Berbasis TIK : Media Eka Putra, M.Ag.
                                        Pembuatan Blog bagi Penyuluh : El Azadivon Fhelsi, S.Si., M.Biomed.
                                        Pembuatan Media Penyuluhan Berbasis Android : Suryadi, M.Si.
                                        Publikasi Konten Video di Media Digital : Rivana Upitasari, S.E., M.M.',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Seminar Numerasi : Ide Praktis Pembelajaran dan Permainan Numerik',
                'tanggal_seminar' => '2010-03-16',
                'foto_sampul' => 'test7.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => 'Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.
                                        
                                        Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.
                                        
                                        Peserta dapat mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 4 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.
                                        
                                        Pada pelatihan ini peserta akan mempelajari :

                                            A. Numerasi di mana-mana:

                                            1. Pengantar Penguatan Numerasi dalam Kurikulum Merdeka

                                            2. Pendekatan Numerasi Lintas Kurikulum

                                            3. Numerasi di Lingkungan Sekitar

                                            B. Ide-Ide Praktis Penggunaan Alat Matematika

                                            1. Numerasi Berbasis Alat Elektronik

                                            2. Numerasi Berbasis Alat Non Elektronik

                                            C. Permainan Kaya Numerasi

                                            1. Permainan Berbasis Digital Kaya Numerasi 

                                            2. Permainan Berbasis Non Digital Kaya Numerasi
                                            Penyusunan Materi Penyuluhan Berbasis TIK : Media Eka Putra, M.Ag.
                                            Pembuatan Blog bagi Penyuluh : El Azadivon Fhelsi, S.Si., M.Biomed.
                                            Pembuatan Media Penyuluhan Berbasis Android : Suryadi, M.Si.
                                            Publikasi Konten Video di Media Digital : Rivana Upitasari, S.E., M.M.',
                'link' => null,
                'status' => 1,
            ],
        ];
        Seminar::insert($seminar);
    }
}
