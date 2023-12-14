<style>
  

.feedback-form {
  width: 60%;
  margin: 50px auto;
  padding: 30px;
  background-color: #fff;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
  color: #333;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #666;
}

input[type="text"],
input[type="email"],
textarea {
  width: calc(100% - 12px);
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  transition: border-color 0.3s ease;
}

input[type="text"]:focus,
input[type="email"]:focus,
textarea:focus {
  outline: none;
  border-color: #3498db;
}

.btn-submit {
  padding: 12px 20px;
  border: none;
  border-radius: 5px;
  background-color: #3498db;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn-submit:hover {
  background-color: #2980b9;
}

.rating {
  font-size: 36px;
}

.rating .star {
  cursor: pointer;
  color: #ccc;
}

.rating .star:hover,
.rating .star.active {
  color: #ffcc00;
}

</style>

<div class="content">
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Berikan Ulasan Anda
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            <a href="<?= site_url('pay')?>" class="btn btn-primary shadow-md mr-2">Kembali</a>

        </div>
    </div>
    <br>
    <br>
    <div class="feedback-form">
  
  <h2>Beri Kami Feedback</h2>
  <form action="<?= site_url('feedback/simpan_feedback') ?>" method="post">
  <div class="mb-5">
  <label for="post-form-7" class="form-label">Customer Name <small class="text-danger">*</small></label>
    <input type="text" class="form-control" id="name" name="name" value="<?php echo $this->session->userdata('nama_user') ?>" autocomplete="off" readonly>
  </div>                                     

  <div class="mb-5">
    <label for="post-form-7" class="form-label">Email Address <small class="text-danger">*</small></label>
    <input type="email" id="email" name="email" class="form-control" value="<?php echo $this->session->userdata('email') ?>" autocomplete="off" readonly>
  </div>

    <div class="form-group">
      <label for="pesan">Pesan:</label>
      <textarea id="pesan" name="pesan" rows="4" required></textarea>
    </div>
    <center>
    <div class="form-group">
      <label for="rating">Rating:</label><br>
      <div class="rating">
      <input type="hidden" name="rating" id="rating_value">
      <span id="rating_percentage">0%</span>
        <span class="star" data-value="1">&#9733;</span>
        <span class="star" data-value="2">&#9733;</span>
        <span class="star" data-value="3">&#9733;</span>
        <span class="star" data-value="4">&#9733;</span>
        <span class="star" data-value="5">&#9733;</span>
      </div>
    </div>
</center>
    

    <center><button type="submit" class="btn-submit">Kirim Feedback</button></center>
  </form>
  
</div>
</div>
<script>
const stars = document.querySelectorAll('.rating .star');
const ratingValue = document.getElementById('rating_value');
const ratingPercentage = document.getElementById('rating_percentage');

stars.forEach(star => {
  star.addEventListener('click', () => {
    const value = parseInt(star.dataset.value);
    ratingValue.value = value;
    
    // Melakukan operasi perhitungan rating menjadi persentase
    const percentage = (value / stars.length) * 100;
    ratingPercentage.textContent = `${percentage}%`;

    stars.forEach(s => {
      if (parseInt(s.dataset.value) <= value) {
        s.classList.add('active');
      } else {
        s.classList.remove('active');
      }
    });
  });
});
</script>
