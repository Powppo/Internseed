@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
<link href='https://unpkg.com/css.gg@2.0.0/icons/css/arrow-right.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://use.fontawesome.com/f59bcd8580.js"></script>
<link rel="stylesheet" href="css/forums.css" type="text/css">
<script src="public/js/option.js"></script>
@section('content')
<div class="flex-container">
  <!-- Button trigger modal -->
  <button type="button" class="btnpost" data-bs-toggle="modal" data-bs-target="#ModalPost">POST</button>
  <!-- Modal -->
  <div class="modal fade" id="ModalPost" tabindex="-1" aria-labelledby="ModalPostLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalPostLabel">Buat post</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <textarea placeholder="Bagikan pemikiran Anda, atau mintalah saran dari profesional lain"></textarea>
        </div>
        <div class="modal-footer">
          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #00000;">Close</button> -->
          <button type="button" class="btn btn-primary" style="background-color: #FFD55A;">Post</button>
        </div>
      </div>
    </div>
  </div>
  <!-- postingan -->
  <div class="large-card-container">
    <div class="card large-card">
      <div class="icon-text-button">
        <img src="images/User.png">
        <h4>Nama </h4>
        <div class="dropdown">
          <button class="dropbtn">&#9776;</button>
          <div class="dropdown-content">
            <a href="#">Edit</a>
            <a href="#">Hapus</a>
          </div>
        </div>
      </div>
      <p>I want to expand my skill set and domain knowledge in AI design. I'm currently learning Python 3, PAIR-with Google, AI Engineer + Machine Learning w/ Azure. What else should I add to this list? I would love to hear your thoughts. </p>
      <div class="icon-text">
        <button type="button" class="btncomment" data-bs-toggle="modal" data-bs-target="#ModalComment">
          <i class="fa-regular fa-comment"></i>
        </button>
        <!-- Modal -->
        <div class="modal fade" id="ModalComment" tabindex="-1" aria-labelledby="ModalCommentLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <div class="modal-title" id="ModalComment">
                  <img src="images/User.png">
                  <h5>Nama</h5>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="card card-comment">
                <span> I want to expand my skill set and domain knowledge in AI design. I'm currently learning Python 3, PAIR-with Google, AI Engineer + Machine Learning w/ Azure. What else should I add to this list? I would love to hear your thoughts. blablabla: </span>
              </div>
              <div class="modal-body1">
                <textarea placeholder="Berikan komentar Anda"></textarea>
              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color: #00000;">Close</button> -->
                <button type="button" class="btn btn-primary" style="background-color: #FFD55A;">Post</button>
              </div>
            </div>
          </div>
        </div>
        <p>Comment</p>
      </div>
    </div>
    <div class="card large-card">
      <div class="icon-text-button">
        <img src="images/User.png">
        <h4>Nama</h4>
        <div class="dropdown">
          <button class="dropbtn">&#9776;</button>
          <div class="dropdown-content">
            <a href="#">Edit</a>
            <a href="#">Hapus</a>
          </div>
        </div>
      </div>
      <p>I want to expand my skill set and domain knowledge in AI design. I'm currently learning Python 3, PAIR-with Google, AI Engineer + Machine Learning w/ Azure. What else should I add to this list? I would love to hear your thoughts. </p>
      <div class="icon-text">
        <i class="fa-regular fa-comment"></i>
        <span>Comment</span>
      </div>
    </div>
    <div class="card large-card">
      <div class="icon-text-button">
        <img src="images/User.png">
        <h4>Nama</h4>
        <div class="dropdown">
          <button class="dropbtn">&#9776;</button>
          <div class="dropdown-content">
            <a href="#">Edit</a>
            <a href="#">Hapus</a>
          </div>
        </div>
      </div>
      <p>I want to expand my skill set and domain knowledge in AI design. I'm currently learning Python 3, PAIR-with Google, AI Engineer + Machine Learning w/ Azure. What else should I add to this list? I would love to hear your thoughts. </p>
      <div class="icon-text">
        <i class="fa-regular fa-comment"></i>
        <span>Comment</span>
      </div>
    </div>
  </div>
  <!-- card-rekomendasi -->
  <div class="card small-card">
    <h4>Rekomendasi Topik</h4>
    <p class="yellow-paragraph">Lihat lebih banyak <i class="gg-arrow-right"></i>
    </p>
    <!-- Card di dalam card rekomendasi -->
    <div class="nested-card">
      <div class="content">
        <img src="images/User.png" alt="User Image">
        <div class="text-container">
          <h5>Consulting</h5>
          <p1>A community for Consulting professionals across...</p1>
        </div>
      </div>
      <div class="button-container">
        <a href="/lihat" , class="btnview">Lihat</a>
        <button class="btnfollow" onclick="changeText(this)">Ikuti <script>
            function changeText(button) {
              if (button.innerText === "Ikuti") {
                button.innerText = "Diikuti";
                button.style.backgroundColor = "#FFD55A";
                button.style.border = "1px solid #FFD55A"; // Memperbaiki nilai border
                button.style.color = "#ffffff";
              } else {
                button.innerText = "Ikuti";
                button.style.backgroundColor = "#ffffff";
                button.style.border = "1px solid #000000"; // Memperbaiki nilai border
                button.style.color = "#000000";
              }
            }
          </script>
        </button>
      </div>
    </div>
    <div class="nested-card">
      <div class="content">
        <img src="images/User.png" alt="User Image">
        <div class="text-container">
          <h5>Consulting</h5>
          <p1>A community for Consulting professionals across...</p1>
        </div>
      </div>
      <div class="button-container">
        <a href="/lihat" , class="btnview">Lihat</a>
        <button class="btnfollow" onclick="changeText(this)">Ikuti</button>
        <script>
          function changeText(button) {
            if (button.innerText === "Ikuti") {
              button.innerText = "Diikuti";
              button.style.backgroundColor = "#FFD55A";
              button.style.border = "#FFD55A";
              button.style.color = "#ffffff";
            } else {
              button.innerText = "Ikuti";
              button.style.backgroundColor = "#ffffff";
              button.style.border = "#000000";
              button.style.color = "#000000";
            }
          }
        </script>
      </div>
    </div>
    <div class="nested-card">
      <div class="content">
        <img src="images/User.png" alt="User Image">
        <div class="text-container">
          <h5>Consulting</h5>
          <p1>A community for Consulting professionals across...</p1>
        </div>
      </div>
      <div class="button-container">
        <a href="/lihat" , class="btnview">Lihat</a>
        <button class="btnfollow" onclick="changeText(this)">Ikuti</button>
        <script>
          function changeText(button) {
            if (button.innerText === "Ikuti") {
              button.innerText = "Diikuti";
              button.style.backgroundColor = "#FFD55A";
              button.style.border = "#FFD55A";
              button.style.color = "#ffffff";
            } else {
              button.innerText = "Ikuti";
              button.style.backgroundColor = "#ffffff";
              button.style.border = "#000000";
              button.style.color = "#000000";
            }
          }
        </script>
      </div>
    </div>
  </div>
</div> @endsection