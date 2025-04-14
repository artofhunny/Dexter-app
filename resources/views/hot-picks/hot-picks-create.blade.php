<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hot Picks</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Select2 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>

<div class="container py-4">
  <div class="card">
    <div class="card-header bg-danger text-white">
      <h2 class="mb-0">Select Hot Picks</h2>
    </div>

    <div class="card-body">
      <form action="{{ route('hot-picks.store') }}" method="POST">
        @csrf

        <div class="row">
          @foreach($positions as $position)
            <div class="col-md-4 mb-4">
              <div class="card h-100 {{ $position == 1 ? 'big-card' : '' }}">
                <div class="card-header bg-light">
                  <h4 class="mb-0">
                    @if ($position == 1)
                      Position #{{ $position }} Big Card
                    @else
                      Position #{{ $position }}
                    @endif
                  </h4>
                </div>
                <div class="card-body">
                  <select name="positions[{{ $position-1 }}]" class="form-control select2">
                    <option value="">-- Select App --</option>
                    @foreach($hotPickApps as $app)
                      <option value="{{ $app->id }}"
                        @isset($currentHotPicks[$position])
                          @if($currentHotPicks[$position]->app_id == $app->id)
                            selected
                          @endif
                        @endisset
                      >
                        {{ $app->app_name }}
                      </option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <div class="form-group mt-4">
          <button type="submit" class="btn btn-danger btn-lg">
            <i class="fa-solid fa-floppy-disk"></i> Save Hot Picks
          </button>
        </div>

      </form>
    </div>
  </div>
</div>

<!-- jQuery + Select2 + Bootstrap -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
  $(document).ready(function() {
    $('.select2').select2({
      placeholder: "Select an app",
      allowClear: true
    });
  });
</script>

<style>
  .select2-container--default .select2-selection--single {
    height: 38px;
    padding: 6px 12px;
    border: 1px solid #ced4da;
  }

  .big-card {
    transform: scale(1.05);
    border: 2px solid #dc3545; /* Bootstrap Danger Color */
  }
</style>

</body>
</html>
