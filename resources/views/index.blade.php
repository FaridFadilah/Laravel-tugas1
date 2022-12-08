@extends("layout.parent")
@section("icon", asset('img/favicon.png'))


@section('content')
  @php 
    $user = [
        [
            "nama" => fake()->name(),
            "foto" => "https://loremflickr.com/320/240?random=1",
            "bio" => fake()->paragraph(2),
            "active" => true,
            "alamat" => fake()->address(),
            "role" => "user"
        ],
        [
            "nama" => fake()->name(),
            "foto" => "https://loremflickr.com/320/240?random=2",
            "bio" => fake()->paragraph(2),
            "active" => false,
            "alamat" => fake()->address(),
            "role" => "user"
        ],
        [
            "nama" => fake()->name(),
            "foto" => "https://loremflickr.com/320/240?random=3",
            "bio" => fake()->paragraph(2),
            "active" => true,
            "alamat" => fake()->address(),
            "role" => "user"
        ],
        [
            "nama" => fake()->name(),
            "foto" => "https://loremflickr.com/320/240?random=4",
            "bio" => fake()->paragraph(2),
            "active" => false,
            "alamat" => fake()->address(),
            "role" => "user"
        ],
        [
            "nama" => fake()->name(),
            "foto" => "https://loremflickr.com/320/240?random=5",
            "bio" => fake()->paragraph(2),
            "active" => true,
            "alamat" => fake()->address(),
            "role" => "user"
        ],
        [
            "nama" => fake()->name(),
            "foto" => "https://loremflickr.com/320/240?random=6",
            "bio" => fake()->paragraph(2),
            "active" => true,
            "alamat" => fake()->address(),
            "role" => "user"
    ],
        [
            "nama" => fake()->name(),
            "foto" => "https://loremflickr.com/320/240?random=7",
            "bio" => fake()->paragraph(2),
            "active" => true,
            "alamat" => fake()->address(),
            "role" => "user"
        ],
        [
            "nama" => fake()->name(),
            "foto" => "https://loremflickr.com/320/240?random=8",
            "bio" => fake()->paragraph(2),
            "active" => true,
            "alamat" => fake()->address(),
            "role" => "admin"
    ],
        [
            "nama" => fake()->name(),
            "foto" => "https://loremflickr.com/320/240?random=9",
            "bio" => fake()->paragraph(2),
            "active" => false,
            "alamat" => fake()->address(),
            "role" => "admin"
    ],
        [
            "nama" => fake()->name(),
            "foto" => "https://loremflickr.com/320/240?random=10",
            "bio" => fake()->paragraph(2),
            "active" => true,
            "alamat" => fake()->address(),
            "role" => "admin"
        ]
    ];
    $filter = [
      "active" => true,
      "role" => $role
        ];
  @endphp
  <div class="container">
    <div class="">
      <h3>Pilih filter</h1>
      <form action="{{ route('/') }}">

      </form>
    </div>
    <div class="d-flex gap-4 flex-wrap py-5">
    @foreach($user as $data)
      @if($filter['role'] == $data['role'])
        @include( "component.card" , $data)
        @endif
        @include( "component.card" , $data)
    @endforeach
    </div>
  </div>

@endsection