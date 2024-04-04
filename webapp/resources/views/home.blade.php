@extends('layouts.main_layout')

 
@section('body')
  <!-- Background Image Start -->
  <div class="background-image user-select-none">
    <img src="image/b.png" style="width: 100%; height: 100%; position: absolute; top: 0; left: 0; z-index: -1;">
  </div>
  <!-- Background Image End -->

  <!-- Logo Image Start-->
  <div class="image-on-top user-select-none">
    <img src="image/load_locate_new.png">
  </div>

  <div class="home-body">
    <div class="testimonials-section" style="">
      <h1>Testimonials</h1>
    </div>
  
    <div class="hstack gap-3">
      <div class="card mb-3" style="max-width: 670px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="image/mikhael.jpeg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <p class="card-text"><small class="text-body-secondary">September 15, 2023</small></p>
              <h5 class="card-title">Mikhael Janugrah Pakpahan</h5>
              <p class="card-text">Saya pernah kehilangan sebuah tumbler. Tumbler saya yang kehilangan tersebut berciri-ciri memiliki warna hitam, tutupnya bewarna hitam, dibawah tutup nya bewarna pink, dan memiliki tali bewarna pink. Tumbler saya hilang di GD 724 pada tanggal 13 September 2023. Lalu pada tanggal 14 September saya telah menemukan tumbler saya berkat website Load Locate. Terimakasih website Load Locate.</p>
              
            </div>
          </div>
        </div>
      </div>
  
      
      <div class="card mb-3" style="max-width: 670px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="image/fritz.jpeg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <p class="card-text"><small class="text-body-secondary">September 16, 2023</small></p>
              <h5 class="card-title">Fritz Kevin Manurung</h5>
              <p class="card-text">Saya pernah kehilangan sebuah payung. Payung saya yang kehilangan bewarna luar pink dan dalam hitam dengan gagang bewrna hitam. Payung saya hilang di Kantin Baru tengah pada tanggal 14 September 2023. Lalu pada tanggal 15 September saya telah menemukan payung saya berkat website Load Locate. Terimakasih website Load Locate</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  
    
    <nav aria-label="Page navigation example">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      </ul>
    </nav>
    
    </div>

@endsection