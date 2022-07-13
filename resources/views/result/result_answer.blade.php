@extends('utama.header')
@section('content')
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet" />
    <div class="container body-color">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="heading">
                    <h1 class="heading__text">Result</h1>
                    {{ $academic }}
                </div>
                <form class="form-result">


                    <div class="quiz-form__quiz">
                        <p class="quiz-form__question">
                            @if ($academic == 1 && $aktivitas == 1 && $prestasi == 1 && $personal_brand == 1 && $komunikasi == 1)
                                <form class="form-result">
                                    <p class="result_question">
                                        Halo, <b>{{ $jawaban->guestss->full_name }}</b>
                                        <br><br>
                                        Terima kasih telah memilih ALL-in Eduspace Scholarship Questionnaire sebagai langkah
                                        awal
                                        mengatur
                                        strategi kesiapan pendaftaran beasiswamu.
                                        <br><br>
                                        Setelah menjawab beberapa soal, kami menilai bahwa persiapan beasiswamu telah pada
                                        tahap
                                        ‘Ready’.
                                    </p>
                                </form>
                            @elseif ($academic == 0 && $aktivitas == 0 && $prestasi == 0 && $personal_brand == 0 && $komunikasi == 0)
                                <form class="form-result">
                                    <p class="result_question">
                                        Halo, <b>{{ $jawaban->guestss->full_name }}</b>
                                        <br><br>
                                        Terima kasih telah memilih ALL-in Eduspace Scholarship Questionnaire sebagai langkah
                                        awal
                                        mengatur
                                        strategi kesiapan pendaftaran beasiswamu.
                                        <br><br>
                                        Setelah menjawab beberapa soal, kami menilai bahwa persiapan beasiswamu telah pada
                                        tahap
                                        ‘Not
                                        Ready’, sehingga kami memberikan beberapa saran untuk meningkatkan kesiapanmu dalam
                                        mendaftarkan
                                        diri untuk beasiswa, antara lain:
                                    </p>
                                </form>
                            @elseif ($academic == 0 || $aktivitas == 0 || $prestasi == 0 || $personal_brand == 0 || $komunikasi == 0)
                                <form class="form-result">
                                    <p class="result_question">
                                        Halo, <b>{{ $jawaban->guestss->full_name }}</b>
                                        <br><br>
                                        Terima kasih telah memilih ALL-in Eduspace Scholarship Questionnaire sebagai langkah
                                        awal
                                        mengatur
                                        strategi kesiapan pendaftaran beasiswamu.
                                        <br><br>
                                        Setelah menjawab beberapa soal, kami menilai bahwa persiapan beasiswamu telah pada
                                        tahap
                                        ‘Not
                                        Ready’
                                        dengan beberapa catatan, antara lain:
                                    </p>
                                </form>
                            @endif
                        <div>
                            <canvas id="myChart"></canvas>
                        </div>

                        @if ($academic == 1 && $aktivitas == 1 && $prestasi == 1 && $personal_brand == 1 && $komunikasi == 1)
                            <form class="form-result">

                                <p class="quiz-form__question">Namun, akan lebih maksimal apabila kamu tetap
                                    mengembangkan
                                    profil
                                    kamu menyesuaikan dengan
                                    kriteria-kriteria beasiswa yang akan kamu daftarkan, seperti:</p>
                                <ul>
                                    <li class="quiz-form__question2">
                                        <p>
                                            Mempersiapkan nilai yang baik untuk tes standarisasi (SAT/ACT/IB Level/A
                                            Level/EJU/sejenisnya).
                                        </p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="quiz-form__question2">
                                        <p>
                                            Mempersiapkan nilai yang baik untuk tes bahasa (TOEFL, IELTS, TELC, JLPT,
                                            dan
                                            sejenisnya).
                                        </p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="quiz-form__question2">
                                        <p>
                                            Mempersiapkan essay yang baik, kreatif, dan menarik.
                                        </p>
                                    </li>
                                </ul>

                                <p class="quiz-form__question">Serta hal-hal lainnya yang dapat mendukung persiapan
                                    beasiswamu
                                </p>
                            </form>
                        @endif

                        @if ($academic == 0)
                            <form class="form-result">
                                <br>
                                <p class="quiz-form__question"><b>Poin akademikmu</b> belum menyentuh angka minimum dari
                                    questionnaire ini, sehingga:</p>
                                <ul>
                                    <li class="quiz-form__question2">
                                        <p>
                                            Apabila kamu belum berada pada tahun terakhir sekolahmu, pastikan kamu
                                            bersungguh-bersungguh untuk
                                            menaikan atau mempertahankan nilai dan mendapatkan atau mempertahankan
                                            ranking
                                            (apabila
                                            sekolahmu
                                            memiliki sistem ranking)
                                        </p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="quiz-form__question2">
                                        <p>
                                            Apabila sulit bagimu untuk melakukan poin sebelumnya atau kamu telah berada
                                            dalam
                                            tahun
                                            terakhir
                                            sekolahmu, pertimbangkan dan manfaatkan peluang-peluang lain seperti
                                            pengalaman-pengalaman
                                            kepemimpinan atau pengembangan kemampuan
                                        </p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="quiz-form__question2">
                                        <p>
                                            Akan sangat membantu apabila kamu menyiapkan dan mengikuti tes-tes
                                            standarisasi,
                                            seperti
                                            SAT/ACT/IB Level/A Level/EJU/sejenisnya sebagai ‘nilai bonus’ dalam seleksi
                                            berkas
                                        </p>
                                    </li>
                                </ul>
                            </form>
                            <br>
                        @endif

                        @if ($aktivitas == 0)
                            <form class="form-result">
                                <br>
                                <p class="quiz-form__question"><b>Poin aktivitas/kegiatanmu </b> belum menyentuh angka
                                    minimum
                                    dari
                                    questionnaire ini, sehingga:</p>
                                <ul>
                                    <li class="quiz-form__question2">
                                        <p>
                                            Ikutilah dan perbanyaklah kegiatan-kegiatan yang mendukung pengembangan diri
                                            dan
                                            kepemimpinan, seperti:
                                        </p>
                                    <li class="quiz-form__question3">
                                        <p>Extracurricular.</p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Kepengurusan/kepanitiaan.</p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Volunteer</p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Internship/part-time.</p>
                                    </li>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="quiz-form__question2">
                                        <p>
                                            Inisiasikan suatu project yang memiliki manfaat untuk sekitar, seperti:
                                        </p>
                                    <li class="quiz-form__question3">
                                        <p>Komunitas/organisasi.</p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Kampanye isu-isu yang menjadi beban pemikiranmu.</p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Proyek pemecahan masalah di sekitarmu melalui ilmu sains dan sosial
                                        <p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Inovasi alat-alat yang dapat mempermudah kegiatan manusia.</p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Inovasi karya seni</p>
                                    </li>
                                    </li>
                                </ul>
                            </form>
                            <br>
                        @endif

                        @if ($personal_brand == 0)
                            <form class="form-result">
                                <br>
                                <p class="quiz-form__question"><b>Poin personal brandmu</b> belum menyentuh angka
                                    minimum
                                    dari
                                    questionnaire ini, sehingga:</p>
                                <ul>
                                    <li class="quiz-form__question2">
                                        <p>
                                            Cobalah untuk mengeksplorasi hal-hal yang mendukung pengembangan diri,
                                            pendidikan
                                            dan
                                            karirmu, seperti:
                                        </p>
                                    <li class="quiz-form__question3">
                                        <p>Jurusan yang kamu minati.</p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Universitas yang menurutmu metode pembelajaran dan lingkungannya mendukung
                                            kegiatan
                                            pembelajaranmu.</p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Kemampuan-kemampuan non akademik, seperti: seni, olahraga, dan sejenisnya.
                                        </p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Dan sebagainya.</p>
                                    </li>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="quiz-form__question2">
                                        <p>
                                            Beberapa jenis media yang dapat digunakan untuk mengembangkan poin-poin
                                            diatas
                                            adalah:
                                        </p>
                                    <li class="quiz-form__question3">
                                        <p>Menghadiri campus/major expo.</p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Mengikuti kegiatan pelatihan/les.</p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Mengikuti short courses/bootcamp.
                                        <p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Dan sebagainya.</p>
                                    </li>
                                    </li>
                                </ul>
                            </form>
                            <br>
                        @endif

                        @if ($prestasi == 0)
                            <form class="form-result">
                                <br>
                                <p class="quiz-form__question"><b>Poin prestasimu</b> belum menyentuh angka
                                    minimum
                                    dari
                                    questionnaire ini, sehingga:</p>
                                <ul>
                                    <li class="quiz-form__question2">
                                        <p>
                                            Cobalah dan ikutilah kegiatan-kegiatan lomba/konferensi/ajang pemilihan
                                            figur
                                            generasi
                                            muda,
                                            seperti:
                                        </p>
                                    <li class="quiz-form__question3">
                                        <p>Lomba/olimpiade, mulai tingkat sekolah hingga internasional.</p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Konferensi, seperti: Model United Nations, Summits, dan sejenisnya.</p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Ajang pemilihan figur generasi muda, seperti: Duta Bahasa, Duta Hukum, Abang
                                            None,
                                            dan
                                            sejenisnya.</p>
                                    </li>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="quiz-form__question2">
                                        <p>
                                            Apabila kamu merasa tidak memungkinkan untuk menjalankan poin sebelumnya,
                                            pertimbangkan
                                            dan
                                            manfaatkan peluang-peluang lain seperti pelatihan, program loka-karya untuk
                                            mengembangkan skill mu.
                                        </p>
                                    </li>
                                </ul>
                            </form>
                            <br>
                        @endif

                        @if ($komunikasi == 0)
                            <form class="form-result">
                                <br>
                                <p class="quiz-form__question"><b>Poin communication skillsmu </b> belum menyentuh angka
                                    minimum
                                    dari questionnaire ini, sehingga:</p>
                                <ul>
                                    <li class="quiz-form__question2">
                                        <p>
                                            Persiapkan diri untuk mengikuti tes bahasa yang nilainya akan dibutuhkan
                                            dalam
                                            pendaftaran, seperti TOEFL, IELTS, TELC, JLPT, dan sejenisnya
                                        </p>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="quiz-form__question2">
                                        <p>
                                            Persiapkan diri untuk mengikuti interview, dengan:
                                        </p>
                                    <li class="quiz-form__question3">
                                        <p>Pelajari pertanyaan-pertanyaan apa saja yang sekiranya akan ditanyakan dalam
                                            umumnya
                                            sesi
                                            interview beasiswa.</p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Kenali metode/cara menjawab pertanyaan dengan baik, seperti: STAR Method dan
                                            sejenisnya.
                                        </p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Gunakan interview simulation/ajak orang lain untuk melatihmu menjawab
                                            pertanyaan-pertanyaan dalam
                                            sesi interview.
                                        </p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Pastikan kamu mengenal dirimu dengan baik dan fasih dengan bahasa yang
                                            digunakan
                                            dalam
                                            interview
                                            untuk memudahkanmu menjawab pertanyaan-pertanyaan yang ada.</p>
                                    </li>
                                    </li>
                                </ul>
                                <ul>
                                    <li class="quiz-form__question2">
                                        <p>
                                            Persiapkan diri untuk menulis sebuah essay yang baik dan sesuai kebutuhan,
                                            dengan:
                                        </p>
                                    <li class="quiz-form__question3">
                                        <p>Mengenali kriteria essay yang baik dimata pemberi beasiswa.</p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Sesuaikan tema essay dengan tema yang diminta.</p>
                                    </li>
                                    <li class="quiz-form__question3">
                                        <p>Gunakan bahasa yang baik dan mudah dicerna, namun tetap menarik untuk dibaca.
                                        <p>
                                    </li>
                                    </li>
                                </ul>
                            </form>
                            <br>
                        @endif

                        <p class="result_question">
                            Sebagai pendaftar beasiswa, kamu perlu ingat bahwa sainganmu tidaklah sedikit sehingga
                            membutuhkan
                            ekstra usaha untuk membuatmu lebih unggul daripada pendaftar lainnya. Tetaplah semangat dan good
                            luck!
                        </p>
                        </p>
                        <div class="row tombol">
                            <div class="col-md-12">
                                <input class="submit" type="button" onclick="location.href='/'" value="Selesai" />
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var akademik = "{{ $academic == 1 ? 'rgb(98,198,153,0.7)' : 'rgb(254,119,123)' }}";
        var aktivitas = "{{ $aktivitas == 1 ? 'rgb(98,198,153,0.7)' : 'rgb(254,119,123)' }}";
        var prestasi = "{{ $prestasi == 1 ? 'rgb(98,198,153,0.7)' : 'rgb(254,119,123)' }}";
        var personal_brand = "{{ $personal_brand == 1 ? 'rgb(98,198,153,0.7)' : 'rgb(254,119,123)' }}";
        var komunikasi = "{{ $komunikasi == 1 ? 'rgb(98,198,153,0.7)' : 'rgb(254,119,123)' }}";
        // alert(akademik);

        const labels = [
            'Akademik',
            'Aktivitas',
            'Prestasi',
            'Personal Brand',
            'Komunikasi'
        ];

        const data = {
            labels: labels,
            datasets: [{
                label: 'Hasil Kuesioner',
                data: [{{ $bbb['academic'] }}, {{ $bbb['aktivitas'] }}, {{ $bbb['prestasi'] }},
                    {{ $bbb['personal_brand'] }}, {{ $bbb['komunikasi'] }}
                ],
                backgroundColor: [
                    akademik,
                    aktivitas,
                    prestasi,
                    personal_brand,
                    komunikasi
                ],
                borderWidth: 1
            }]
        };


        const config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 30
                    }
                }
            },
        };


        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>
@endsection
