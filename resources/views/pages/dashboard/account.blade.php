@extends('layouts.dashboard')

@section('title')
    Sipaling Skrispi | Detail
@endsection

@section('content')
    <div class="section-content section-dashboard-home" data-aos="fade-up">
        <div class="container-fluid">
            <div class="dashboard-heading">
                <h2 class="dashboard-title">My Account</h2>
                <p class="dashboard-subtitle">Update your current profile</p>
            </div>

            <div class="dashboard-content">
                <div class="row d-flex justify-content-center">
                    <div class="col-6">
                        <form action="{{ route('update-account') }}" method="POST" enctype="multipart/form-data}}">
                            @method('PUT')
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Your Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="{{ $user->name }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email">Your Email</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                    value="{{ $user->email }}" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" id="password" name="password"
                                                    placeholder="Abaikan Jika Tidak Ingin Mengubah Password" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-right">
                                            <button type="submit" class="btn btn-success px-5">
                                                Save Now
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
    <script src="/vendor/vue/vue.js"></script>

    <script>
        function setStatus(status) {
            document.getElementById('statusInput').value = status;
            document.getElementById('myForm').submit();
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#faculty-dd').on('change', function() {
                var idFaculty = this.value;
                $("#major-dd").html('');
                $.ajax({
                    url: "{{ url('api/fetch-majors') }}",
                    type: "POST",
                    data: {
                        faculty_id: idFaculty,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#major-dd').html('<option value=""> -Pilih Jurusan- </option>');
                        $.each(result.majors, function(key, value) {
                            $("#major-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        })
    </script>
@endpush
