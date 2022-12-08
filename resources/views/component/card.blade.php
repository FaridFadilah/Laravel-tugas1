
        <div class="card" style="width: 18rem;">
          <img src="{{ $data['foto'] }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $data['nama'] }} <span style="color: red">({{ $data['role'] }})</span> </h5>
            <p class="card-text">{{ $data["bio"] }}</p>
            <p href="#" style="color: red" class="">{{ $data['active'] ? "active" : "deactive" }}</p>
          </div>
        </div>