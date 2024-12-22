
<div class="col-md-3 card shadow-lg border-light" style="width: 16rem; border-radius: 12px;">
  <img src="{{ $image }}" class="card-img-top ms-auto" style="width: 100%; height: 140px; object-fit: cover; border-top-left-radius: 12px; border-top-right-radius: 12px;" alt="">
  <div class="card-body">
      <h5 class="card-title mt-2 mb-3" style="font-size: 1.2rem; font-weight: bold; color: #333;">{{ $title }}</h5><hr>
      <h6 class="card-subtitle mb-2 d-block text-muted" style="font-size: 0.9rem; color: #666;">
          <strong>Date de diffusion :</strong>
          <p style="margin-top:10px;">{{ $date }}</p>
      </h6>
      <h6>
        <strong style="color: red;font-size:22px;font-family:Verdana, Geneva, Tahoma, sans-serif">{{ $tiketprice }}$</strong>
      </h6><hr>
      <a href="/banque/form-payment-ticket/{{$id}}" class="btn btn-dark w-100" style="margin-top: auto;margin-bottom:0px">Payer le billet</a>
  </div>
</div>