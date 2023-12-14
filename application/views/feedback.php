<div class="content">
    <style>
.judul-feedback {
  font-family: Arial, sans-serif;
  font-weight: bold;
  color: #333; /* Warna teks */
  background-color: #f9f9f9; /* Warna latar belakang */
  padding: 10px; /* Ruang di sekitar teks */
  border-radius: 5px; /* Sudut elemen */
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Bayangan */
  text-align: center; /* Posisi teks */
}

       .feedback-list {
    display: grid;
    gap: 20px;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
}

.feedback-item {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.user-info {
    font-weight: bold;
    margin-bottom: 10px;
}

.pesan {
    background-color: #f2f2f2;
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 15px;
}

.feedback-content p {
    margin: 0;
}

.feedback-content p:last-child {
    margin-bottom: 10px;
}

.rating {
    display: flex;
    align-items: center;
}

.rating .star {
    font-size: 24px;
    color: #aaa;
    transition: color 0.3s ease-in-out;
    margin-right: 5px;
}

.rating .filled {
    color: gold;
}

/* Animasi ketika rating diberikan */
.rating:hover .star {
    color: gold;
}
    </style>
    <center>
    <h2 class="judul-feedback">--Daftar Ulasan--</h2>
    </center>
    <br>
    <br>
    <div class="feedback-list">
        <?php if (!empty($feedback_list)) : ?>
            <?php foreach ($feedback_list as $feedback) : ?>
                <div class="feedback-item">
                    <div class="user-info">
                        <strong>Nama:</strong> <?php echo $feedback['nama_user']; ?><br>
                        <strong>Email:</strong> <?php echo $feedback['email']; ?><br>
                    </div>
                    <div class="feedback-content">
                        <p><strong>Pesan:</strong> <?php echo $feedback['pesan']; ?></p>
                        <div class="rating">
                            <?php
                            $rating = $feedback['rating'];
                            for ($i = 1; $i <= 5; $i++) {
                                if ($i <= $rating) {
                                    echo '<span class="star filled">&#9733;</span>';
                                } else {
                                    echo '<span class="star">&#9734;</span>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>Tidak ada data feedback saat ini.</p>
        <?php endif; ?>
    </div>
</div>
