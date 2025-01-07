<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Pages / Register - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Update Profile Account</h5>
                                        <p class="text-center small">Enter your personal details to update account</p>
                                    </div>
                                    <form class="row g-3 needs-validation" novalidate method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-12">
                                            <label for="profile" class="form-label">Profile Picture</label>
                                            <!-- Image preview -->
                                            <div id="image-preview"
                                                style="width: 100px; height: 100px; border-radius: 50%; overflow: hidden; border: 2px solid #ddd;">
                                                <img id="preview-avatar" src="{{ asset($profile->profile) }}"
                                                    alt="{{ $profile->profile }}"
                                                    style="width: 100%; height: 100%; object-fit: cover;">
                                            </div>
                                            <!-- File input -->
                                            <input type="file" id="profile-input" name="profile" class="form-control mt-2"
                                                accept="image/*">
                                        </div>
                                        <div class="col-12">
                                            <label for="yourName" class="form-label">Your Name</label>
                                            <input type="text" name="name" class="form-control" id="yourName"
                                                value="{{ old('name') ?? $profile->name }}">
                                            <div class="invalid-feedback">Please, enter your name!</div>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="facebook" class="form-label">Facebook Link</label>
                                            <input type="url" name="facebook" class="form-control" id="facebook"
                                                value="{{ old('facebook') ?? $profile->facebook }}">
                                            <div class="invalid-feedback">Please, enter your facebook Link!</div>
                                            @error('facebook')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="linkend" class="form-label">Your Linkend</label>
                                            <input type="url" name="linkend" class="form-control" id="linkend"
                                                value="{{ old('linkend') ?? $profile->linkend }}">
                                            <div class="invalid-feedback">Please, enter your linkend!</div>
                                            @error('linkend')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="yourEmail" class="form-label">Your Email</label>
                                            <input type="email" name="email" class="form-control" id="yourEmail"
                                                value="{{ old('email') ?? $profile->email }}">
                                            <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="about_me" class="form-label">About me</label>
                                            <input type="text" name="about" class="form-control" id="about_me"
                                                value="{{ old('about') ?? $profile->about_me }}">
                                            <div class="invalid-feedback">Please enter a valid about me!</div>
                                            @error('about')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                id="yourPassword"                                                 value="{{ old('password') ?? $profile->password }}">
                                            <div class="invalid-feedback">Please enter your password!</div>
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Update Account</button>
                                        </div>
                                        <div class="col-lg-4">
                                            <p class="small mb-0">If your already Update? <a
                                                    href="{{ route('dashboard') }}">Go back</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('backend/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>

</body>

</html>
