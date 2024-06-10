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
                'nama_seminar' => 'Latihan Jogging',
                'tanggal_awal' => '2010-03-10',
                'tanggal_akhir' => '2010-04-10',
                'foto_sampul' => 'test.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => 'Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.
                                        
                                        Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.
                                        
                                        Peserta dapat mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 4 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.
                                        
                                        NAMA PELATIHAN : PELATIHAN  MEDIA PENYULUHAN BERBASIS TEKNOLOGI INFORMASI DAN KOMUNIKASI (TIK)
                                        
                                        Kompetensi Teknis  : Penguasaan media penyuluhan dalam pelaksanaan tugas sebagai Penyuluh Agama
                                        
                                        Sasaran Pelatihan : Penyuluh Agama
                                        
                                        Tujuan Pelatihan :  Meningkatkan kompetensi Fungsional Penyuluh dalam membuat media penyuluhan dengan menggunakan TIK
                                        
                                        Latar belakang Pelatihan : Era digital ini merupakan era percepatan teknologi, seluruh ASN harus memiliki literasi digital di Era transformasi digital ini, seluruh staf pemerintahan atau ASN harus paham digital. Salah satunya adalah para penyuluh agama Kementerian Agama yang memiliki tupoksi yang sangat penting dalam menyampaikan hal-hal bagi masyarakat Indonesia. Penyuluh Agama yang memiliki kompetensi membuat media berbasis TIK sangat diperlukan agar dapat memberikan pemahaman yang masif dan komprehensif kepada Masyarakat dengan memanfaatkan TIK. 
                                        
                                        Mengapa harus ikuti Seminar ini : Seminar ini sangat dibutuhkan untuk meningkatkan keterampilan digital penyuluh agar dapat menyediakan media penyuluhan yang lebih atraktif dan inovatif serta dapat meningkatkan efisiensi dan produktivitas para penyuluh dalam membuat media penyuluhan.
                                        
                                        Penyusunan Materi Penyuluhan Berbasis TIK : Media Eka Putra, M.Ag.
                                        Pembuatan Blog bagi Penyuluh : El Azadivon Fhelsi, S.Si., M.Biomed.
                                        Pembuatan Media Penyuluhan Berbasis Android : Suryadi, M.Si.
                                        Publikasi Konten Video di Media Digital : Rivana Upitasari, S.E., M.M.',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Latihan Jogging 2',
                'tanggal_awal' => '2010-03-11',
                'tanggal_akhir' => '2010-04-11',
                'foto_sampul' => 'test2.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => 'Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.
                                        
                                        Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.
                                        
                                        Peserta dapat mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 4 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.
                                        
                                        NAMA PELATIHAN : PELATIHAN  MEDIA PENYULUHAN BERBASIS TEKNOLOGI INFORMASI DAN KOMUNIKASI (TIK)
                                        
                                        Kompetensi Teknis  : Penguasaan media penyuluhan dalam pelaksanaan tugas sebagai Penyuluh Agama
                                        
                                        Sasaran Pelatihan : Penyuluh Agama
                                        
                                        Tujuan Pelatihan :  Meningkatkan kompetensi Fungsional Penyuluh dalam membuat media penyuluhan dengan menggunakan TIK
                                        
                                        Latar belakang Pelatihan : Era digital ini merupakan era percepatan teknologi, seluruh ASN harus memiliki literasi digital di Era transformasi digital ini, seluruh staf pemerintahan atau ASN harus paham digital. Salah satunya adalah para penyuluh agama Kementerian Agama yang memiliki tupoksi yang sangat penting dalam menyampaikan hal-hal bagi masyarakat Indonesia. Penyuluh Agama yang memiliki kompetensi membuat media berbasis TIK sangat diperlukan agar dapat memberikan pemahaman yang masif dan komprehensif kepada Masyarakat dengan memanfaatkan TIK. 
                                        
                                        Mengapa harus ikuti Seminar ini : Seminar ini sangat dibutuhkan untuk meningkatkan keterampilan digital penyuluh agar dapat menyediakan media penyuluhan yang lebih atraktif dan inovatif serta dapat meningkatkan efisiensi dan produktivitas para penyuluh dalam membuat media penyuluhan.
                                        
                                        Penyusunan Materi Penyuluhan Berbasis TIK : Media Eka Putra, M.Ag.
                                        Pembuatan Blog bagi Penyuluh : El Azadivon Fhelsi, S.Si., M.Biomed.
                                        Pembuatan Media Penyuluhan Berbasis Android : Suryadi, M.Si.
                                        Publikasi Konten Video di Media Digital : Rivana Upitasari, S.E., M.M.',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Latihan Jogging 3',
                'tanggal_awal' => '2010-03-12',
                'tanggal_akhir' => '2010-04-12',
                'foto_sampul' => 'test3.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => 'Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.
                                        
                                        Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.
                                        
                                        Peserta dapat mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 4 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.
                                        
                                        NAMA PELATIHAN : PELATIHAN  MEDIA PENYULUHAN BERBASIS TEKNOLOGI INFORMASI DAN KOMUNIKASI (TIK)
                                        
                                        Kompetensi Teknis  : Penguasaan media penyuluhan dalam pelaksanaan tugas sebagai Penyuluh Agama
                                        
                                        Sasaran Pelatihan : Penyuluh Agama
                                        
                                        Tujuan Pelatihan :  Meningkatkan kompetensi Fungsional Penyuluh dalam membuat media penyuluhan dengan menggunakan TIK
                                        
                                        Latar belakang Pelatihan : Era digital ini merupakan era percepatan teknologi, seluruh ASN harus memiliki literasi digital di Era transformasi digital ini, seluruh staf pemerintahan atau ASN harus paham digital. Salah satunya adalah para penyuluh agama Kementerian Agama yang memiliki tupoksi yang sangat penting dalam menyampaikan hal-hal bagi masyarakat Indonesia. Penyuluh Agama yang memiliki kompetensi membuat media berbasis TIK sangat diperlukan agar dapat memberikan pemahaman yang masif dan komprehensif kepada Masyarakat dengan memanfaatkan TIK. 
                                        
                                        Mengapa harus ikuti Seminar ini : Seminar ini sangat dibutuhkan untuk meningkatkan keterampilan digital penyuluh agar dapat menyediakan media penyuluhan yang lebih atraktif dan inovatif serta dapat meningkatkan efisiensi dan produktivitas para penyuluh dalam membuat media penyuluhan.
                                        
                                        Penyusunan Materi Penyuluhan Berbasis TIK : Media Eka Putra, M.Ag.
                                        Pembuatan Blog bagi Penyuluh : El Azadivon Fhelsi, S.Si., M.Biomed.
                                        Pembuatan Media Penyuluhan Berbasis Android : Suryadi, M.Si.
                                        Publikasi Konten Video di Media Digital : Rivana Upitasari, S.E., M.M.',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Latihan Jogging 4',
                'tanggal_awal' => '2010-03-13',
                'tanggal_akhir' => '2010-04-13',
                'foto_sampul' => 'test4.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => 'Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.
                                        
                                        Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.
                                        
                                        Peserta dapat mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 4 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.
                                        
                                        NAMA PELATIHAN : PELATIHAN  MEDIA PENYULUHAN BERBASIS TEKNOLOGI INFORMASI DAN KOMUNIKASI (TIK)
                                        
                                        Kompetensi Teknis  : Penguasaan media penyuluhan dalam pelaksanaan tugas sebagai Penyuluh Agama
                                        
                                        Sasaran Pelatihan : Penyuluh Agama
                                        
                                        Tujuan Pelatihan :  Meningkatkan kompetensi Fungsional Penyuluh dalam membuat media penyuluhan dengan menggunakan TIK
                                        
                                        Latar belakang Pelatihan : Era digital ini merupakan era percepatan teknologi, seluruh ASN harus memiliki literasi digital di Era transformasi digital ini, seluruh staf pemerintahan atau ASN harus paham digital. Salah satunya adalah para penyuluh agama Kementerian Agama yang memiliki tupoksi yang sangat penting dalam menyampaikan hal-hal bagi masyarakat Indonesia. Penyuluh Agama yang memiliki kompetensi membuat media berbasis TIK sangat diperlukan agar dapat memberikan pemahaman yang masif dan komprehensif kepada Masyarakat dengan memanfaatkan TIK. 
                                        
                                        Mengapa harus ikuti Seminar ini : Seminar ini sangat dibutuhkan untuk meningkatkan keterampilan digital penyuluh agar dapat menyediakan media penyuluhan yang lebih atraktif dan inovatif serta dapat meningkatkan efisiensi dan produktivitas para penyuluh dalam membuat media penyuluhan.
                                        
                                        Penyusunan Materi Penyuluhan Berbasis TIK : Media Eka Putra, M.Ag.
                                        Pembuatan Blog bagi Penyuluh : El Azadivon Fhelsi, S.Si., M.Biomed.
                                        Pembuatan Media Penyuluhan Berbasis Android : Suryadi, M.Si.
                                        Publikasi Konten Video di Media Digital : Rivana Upitasari, S.E., M.M.',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Latihan Jogging 4',
                'tanggal_awal' => '2010-03-13',
                'tanggal_akhir' => '2010-04-13',
                'foto_sampul' => 'test4.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => 'Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.
                                        
                                        Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.
                                        
                                        Peserta dapat mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 4 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.
                                        
                                        NAMA PELATIHAN : PELATIHAN  MEDIA PENYULUHAN BERBASIS TEKNOLOGI INFORMASI DAN KOMUNIKASI (TIK)
                                        
                                        Kompetensi Teknis  : Penguasaan media penyuluhan dalam pelaksanaan tugas sebagai Penyuluh Agama
                                        
                                        Sasaran Pelatihan : Penyuluh Agama
                                        
                                        Tujuan Pelatihan :  Meningkatkan kompetensi Fungsional Penyuluh dalam membuat media penyuluhan dengan menggunakan TIK
                                        
                                        Latar belakang Pelatihan : Era digital ini merupakan era percepatan teknologi, seluruh ASN harus memiliki literasi digital di Era transformasi digital ini, seluruh staf pemerintahan atau ASN harus paham digital. Salah satunya adalah para penyuluh agama Kementerian Agama yang memiliki tupoksi yang sangat penting dalam menyampaikan hal-hal bagi masyarakat Indonesia. Penyuluh Agama yang memiliki kompetensi membuat media berbasis TIK sangat diperlukan agar dapat memberikan pemahaman yang masif dan komprehensif kepada Masyarakat dengan memanfaatkan TIK. 
                                        
                                        Mengapa harus ikuti Seminar ini : Seminar ini sangat dibutuhkan untuk meningkatkan keterampilan digital penyuluh agar dapat menyediakan media penyuluhan yang lebih atraktif dan inovatif serta dapat meningkatkan efisiensi dan produktivitas para penyuluh dalam membuat media penyuluhan.
                                        
                                        Penyusunan Materi Penyuluhan Berbasis TIK : Media Eka Putra, M.Ag.
                                        Pembuatan Blog bagi Penyuluh : El Azadivon Fhelsi, S.Si., M.Biomed.
                                        Pembuatan Media Penyuluhan Berbasis Android : Suryadi, M.Si.
                                        Publikasi Konten Video di Media Digital : Rivana Upitasari, S.E., M.M.',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Latihan Jogging 5',
                'tanggal_awal' => '2010-03-14',
                'tanggal_akhir' => '2010-04-14',
                'foto_sampul' => 'test5.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => 'Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.
                                        
                                        Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.
                                        
                                        Peserta dapat mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 4 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.
                                        
                                        NAMA PELATIHAN : PELATIHAN  MEDIA PENYULUHAN BERBASIS TEKNOLOGI INFORMASI DAN KOMUNIKASI (TIK)
                                        
                                        Kompetensi Teknis  : Penguasaan media penyuluhan dalam pelaksanaan tugas sebagai Penyuluh Agama
                                        
                                        Sasaran Pelatihan : Penyuluh Agama
                                        
                                        Tujuan Pelatihan :  Meningkatkan kompetensi Fungsional Penyuluh dalam membuat media penyuluhan dengan menggunakan TIK
                                        
                                        Latar belakang Pelatihan : Era digital ini merupakan era percepatan teknologi, seluruh ASN harus memiliki literasi digital di Era transformasi digital ini, seluruh staf pemerintahan atau ASN harus paham digital. Salah satunya adalah para penyuluh agama Kementerian Agama yang memiliki tupoksi yang sangat penting dalam menyampaikan hal-hal bagi masyarakat Indonesia. Penyuluh Agama yang memiliki kompetensi membuat media berbasis TIK sangat diperlukan agar dapat memberikan pemahaman yang masif dan komprehensif kepada Masyarakat dengan memanfaatkan TIK. 
                                        
                                        Mengapa harus ikuti Seminar ini : Seminar ini sangat dibutuhkan untuk meningkatkan keterampilan digital penyuluh agar dapat menyediakan media penyuluhan yang lebih atraktif dan inovatif serta dapat meningkatkan efisiensi dan produktivitas para penyuluh dalam membuat media penyuluhan.
                                        
                                        Penyusunan Materi Penyuluhan Berbasis TIK : Media Eka Putra, M.Ag.
                                        Pembuatan Blog bagi Penyuluh : El Azadivon Fhelsi, S.Si., M.Biomed.
                                        Pembuatan Media Penyuluhan Berbasis Android : Suryadi, M.Si.
                                        Publikasi Konten Video di Media Digital : Rivana Upitasari, S.E., M.M.',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Latihan Jogging 6',
                'tanggal_awal' => '2010-03-15',
                'tanggal_akhir' => '2010-04-15',
                'foto_sampul' => 'test6.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => 'Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.
                                        
                                        Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.
                                        
                                        Peserta dapat mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 4 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.
                                        
                                        NAMA PELATIHAN : PELATIHAN  MEDIA PENYULUHAN BERBASIS TEKNOLOGI INFORMASI DAN KOMUNIKASI (TIK)
                                        
                                        Kompetensi Teknis  : Penguasaan media penyuluhan dalam pelaksanaan tugas sebagai Penyuluh Agama
                                        
                                        Sasaran Pelatihan : Penyuluh Agama
                                        
                                        Tujuan Pelatihan :  Meningkatkan kompetensi Fungsional Penyuluh dalam membuat media penyuluhan dengan menggunakan TIK
                                        
                                        Latar belakang Pelatihan : Era digital ini merupakan era percepatan teknologi, seluruh ASN harus memiliki literasi digital di Era transformasi digital ini, seluruh staf pemerintahan atau ASN harus paham digital. Salah satunya adalah para penyuluh agama Kementerian Agama yang memiliki tupoksi yang sangat penting dalam menyampaikan hal-hal bagi masyarakat Indonesia. Penyuluh Agama yang memiliki kompetensi membuat media berbasis TIK sangat diperlukan agar dapat memberikan pemahaman yang masif dan komprehensif kepada Masyarakat dengan memanfaatkan TIK. 
                                        
                                        Mengapa harus ikuti Seminar ini : Seminar ini sangat dibutuhkan untuk meningkatkan keterampilan digital penyuluh agar dapat menyediakan media penyuluhan yang lebih atraktif dan inovatif serta dapat meningkatkan efisiensi dan produktivitas para penyuluh dalam membuat media penyuluhan.
                                        
                                        Penyusunan Materi Penyuluhan Berbasis TIK : Media Eka Putra, M.Ag.
                                        Pembuatan Blog bagi Penyuluh : El Azadivon Fhelsi, S.Si., M.Biomed.
                                        Pembuatan Media Penyuluhan Berbasis Android : Suryadi, M.Si.
                                        Publikasi Konten Video di Media Digital : Rivana Upitasari, S.E., M.M.',
                'link' => null,
                'status' => 1,
            ],
            [
                'nama_seminar' => 'Latihan Jogging 7',
                'tanggal_awal' => '2010-03-16',
                'tanggal_akhir' => '2010-04-16',
                'foto_sampul' => 'test7.png',
                'deskripsi_singkat' => 'Seminar ini akan membahas strategi dan teknik efektif untuk meningkatkan keterampilan komunikasi di tempat kerja. Peserta akan belajar bagaimana membangun hubungan yang baik dengan rekan kerja, atasan, dan klien melalui komunikasi yang jelas dan efektif. Selain itu, Seminar ini juga akan membahas cara mengatasi konflik komunikasi dan meningkatkan kepercayaan dalam berkomunikasi di lingkungan kerja. Jika Anda ingin menjadi seorang komunikator yang lebih baik dan sukses di tempat kerja, Seminar ini cocok untuk Anda!',
                'deskripsi_lengkap' => 'Selamat datang di Pelatihan Mandiri Bersertifikat Kementerian Agama.
                                        
                                        Pelatihan di Pintar berbasis MOOC (Massive Open Online Course) dilakukan secara Asynchronous dan full online, sehingga tidak ada jadwal Zoom ataupun tatap muka.
                                        
                                        Peserta dapat mendaftar dan melakukan pelatihan sampai selesai secara mandiri. Pelatihan dilaksanakan selama 4 hari, dapat dilakukan kapanpun dan dimanapun sesuai dengan kebutuhan peserta selama masih dalam periode pelaksanaan pelatihan.
                                        
                                        NAMA PELATIHAN : PELATIHAN  MEDIA PENYULUHAN BERBASIS TEKNOLOGI INFORMASI DAN KOMUNIKASI (TIK)
                                        
                                        Kompetensi Teknis  : Penguasaan media penyuluhan dalam pelaksanaan tugas sebagai Penyuluh Agama
                                        
                                        Sasaran Pelatihan : Penyuluh Agama
                                        
                                        Tujuan Pelatihan :  Meningkatkan kompetensi Fungsional Penyuluh dalam membuat media penyuluhan dengan menggunakan TIK
                                        
                                        Latar belakang Pelatihan : Era digital ini merupakan era percepatan teknologi, seluruh ASN harus memiliki literasi digital di Era transformasi digital ini, seluruh staf pemerintahan atau ASN harus paham digital. Salah satunya adalah para penyuluh agama Kementerian Agama yang memiliki tupoksi yang sangat penting dalam menyampaikan hal-hal bagi masyarakat Indonesia. Penyuluh Agama yang memiliki kompetensi membuat media berbasis TIK sangat diperlukan agar dapat memberikan pemahaman yang masif dan komprehensif kepada Masyarakat dengan memanfaatkan TIK. 
                                        
                                        Mengapa harus ikuti Seminar ini : Seminar ini sangat dibutuhkan untuk meningkatkan keterampilan digital penyuluh agar dapat menyediakan media penyuluhan yang lebih atraktif dan inovatif serta dapat meningkatkan efisiensi dan produktivitas para penyuluh dalam membuat media penyuluhan.
                                        
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
