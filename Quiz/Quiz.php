<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Quiz</title>
  <link rel="stylesheet" href="Quiz.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
</head>
<body>
  <div class="quiz-container">
    <div class="flashcard">
      <div id="progress">1/10</div>
      <h2 id="question">What is the main purpose of creating a budget?</h2>
      <div class="options">
        <button class="option" data-option="A">A. To limit how much fun you can have</button>
        <button class="option" data-option="B">B. To keep track of how much money others spend</button>
        <button class="option" data-option="C">C. To control your finances and reach your goals</button>
        <button class="option" data-option="D">D. To calculate taxes at the end of the year</button>
      </div>
      <button class="check-button">Next</button>
    </div>
  </div>

  <script>
    const questions = [
      {
        question: "Apa tujuan utama dari digital marketing untuk UMKM?",
        options: {
          A: "Meningkatkan biaya operasional",
          B: "Mengurangi kualitas produk",
          C: "Menjangkau lebih banyak pelanggan secara online",
          D: "Menghindari persaingan"
        },
        answer: "C"
      },
      {
        question: "Platform media sosial apa yang paling sering digunakan UMKM di Indonesia untuk promosi produk?",
        options: {
          A: "LinkedIn",
          B: "Twitter",
          C: "TikTok",
          D: "Instagram"
        },
        answer: "D"
      },
      {
        question: "Apa keuntungan menggunakan content marketing untuk UMKM?",
        options: {
          A: "Mengurangi jumlah pelanggan",
          B: "Menurunkan ranking pencarian",
          C: "Meningkatkan kepercayaan dan loyalitas pelanggan",
          D: "Membuat pelanggan bingung"
        },
        answer: "C"
      },
      {
        question: "Apa fungsi dari SEO (Search Engine Optimization)?",
        options: {
          A: "Mengurangi kecepatan website",
          B: "Membuat konten menjadi viral",
          C: "Meningkatkan visibilitas website di mesin pencari",
          D: "Menambah follower secara otomatis"
        },
        answer: "C"
      },
      {
        question: "Manakah dari berikut ini adalah contoh strategi digital marketing yang efektif untuk UMKM?",
        options: {
          A: "Mendistribusikan brosur di jalan",
          B: "Membuat iklan di TV nasional",
          C: "Menggunakan email marketing untuk pelanggan tetap",
          D: "Menunggu pelanggan datang sendiri"
        },
        answer: "C"
      },
      {
        question: "Apa yang dimaksud dengan “engagement” di media sosial?",
        options: {
          A: "Jumlah pengeluaran iklan",
          B: "Tingkat interaksi pengguna terhadap konten",
          C: "Waktu loading halaman",
          D: "Lama pelanggan membaca konten"
        },
        answer: "B"
      },
      {
        question: "Apa manfaat menggunakan WhatsApp Business untuk UMKM?",
        options: {
          A: "Membatasi komunikasi dengan pelanggan",
          B: "Menyimpan file besar",
          C: "Menyediakan komunikasi yang lebih personal dan cepat",
          D: "Menghindari feedback pelanggan"
        },
        answer: "C"
      },
      {
        question: "Apa arti dari “call-to-action” (CTA) dalam digital marketing?",
        options: {
          A: "Ajakan untuk meninggalkan halaman",
          B: "Perintah untuk membayar iklan",
          C: "Ajakan agar pelanggan melakukan tindakan tertentu",
          D: "Promosi produk kompetitor"
        },
        answer: "C"
      },
      {
        question: "Mengapa penting bagi UMKM memiliki website sendiri?",
        options: {
          A: "Untuk mengikuti tren",
          B: "Agar terlihat lebih mahal",
          C: "Untuk memberikan informasi, meningkatkan kredibilitas, dan mempermudah transaksi",
          D: "Untuk membingungkan pelanggan"
        },
        answer: "C"
      },
      {
        question: "Strategi iklan digital mana yang memungkinkan UMKM menargetkan audiens spesifik berdasarkan usia, lokasi, dan minat?",
        options: {
          A: "Billboard konvensional",
          B: "Iklan baris di koran",
          C: "Facebook Ads / Google Ads",
          D: "Spanduk jalanan"
        },
        answer: "C"
      }
    ];

    let current = 0;
    let score = 0;

    const questionEl = document.getElementById("question");
    const optionBtns = document.querySelectorAll(".option");
    const progress = document.getElementById("progress");
    const checkBtn = document.querySelector(".check-button");

    function loadQuestion() {
      const q = questions[current];
      questionEl.textContent = q.question;
      progress.textContent = `${current + 1}/${questions.length}`;
      optionBtns.forEach(btn => {
        btn.textContent = `${btn.dataset.option}. ${q.options[btn.dataset.option]}`;
        btn.classList.remove("selected");
      });
    }

    optionBtns.forEach(btn => {
      btn.addEventListener("click", (e) => {
        optionBtns.forEach(btn => btn.classList.remove("selected"));
        e.target.classList.add("selected");
      });
    });

    checkBtn.addEventListener("click", () => {
      const selectedBtn = document.querySelector(".option.selected");
      if (!selectedBtn) return; // Prevent proceeding if no option is selected

      const selectedOption = selectedBtn.dataset.option;
      if (selectedOption === questions[current].answer) {
        score++;
      }

      current++;
      if (current < questions.length) {
        loadQuestion();
      } else {
        window.location.href = `Result.php?score=${score}&total=${questions.length}`;
      }
    });

    loadQuestion(); // Initial load of the first question
  </script>
</body>
</html>