<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Energeek | Buat Lamaran</title>

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('lte/plugins/fontawesome-free/css/all.min.css') }} ">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset ('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('lte/dist/css/adminlte.min.css') }}">

  <link rel="stylesheet" href="{{ asset ('lte/plugins/select2/css/select2.min.css') }}">

</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a>Energeek</a>
  </div>

  <div class="card card-primary">
    <div class="card-body">
      <p class="login-box-msg">Apply Lamaran</p>
        <form action="../../index.html" method="post">
        <div class="form-group">
        <label for="name"> Nama Lengkap</label>
          <input type="text" name="fullname" class="form-control" placeholder="Cth: Jonathan Akbar">
        </div>
        <div class="form-group">
        <label for="jabatan"> Jabatan</label>
        <select name="jabatan" class="form-control select2" style="width: 100%;">
        @foreach($data['jobs'] as $job)
            <option value="{{ $job->id }}">{{ $job->name }}</option>
        @endforeach
        </select>
        </div>
        <div class="form-group">
        <label for="telepon"> Telepon</label>
          <input type="text" name="telepon" class="form-control" placeholder="Cth:089123456788">
        </div>
        <div class="form-group">
        <label for="name"> Email</label>
          <input type="text" name="fullname" class="form-control" placeholder="Cth: jonathanaktbar@gmail.com">
        </div>
        <div class="form-group">
        <label for="tahun_lahir"> Tahun Lahir </label>
        <select name="tahun_lahir" class="form-control select2" style="width: 100%;">
        @php
        $currentYear = date("Y");
        for ($i = $currentYear; $i >= 1900; $i--) {
        echo "<option value=\"$i\">$i</option>";
        }
        @endphp
        </select>
        </div>
        <div class="form-group">
        <label for="skill"> Jabatan</label>
        <select name="skill" class="select2" multiple="multiple" data-placeholder="Pilih Skill" style="width: 100%;">
        @foreach($data['skills'] as $skill)
            <option value="{{ $skill->id }}">{{ $skill->name }}</option>
        @endforeach
        </select>
        </div>
          <!-- /.col -->
          <div>
            <button type="submit" class="btn btn-primary btn-block">Apply</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset ('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('lte/dist/js/adminlte.min.js')}}"></script>

<script src="{{ asset ('lte/plugins/select2/js/select2.full.min.js')}}"></script>
</body>
<script>
  $(function () {
    $('.select2').select2()
  }
  );
</script>
</html>
