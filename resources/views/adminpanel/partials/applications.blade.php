<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Application with Dynamic Tabs</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-light py-5">

<div class="container">
  <div class="card shadow rounded-4">
    <div class="card-body">
      <h1 class="card-title mb-4">Application</h1>

      <!-- Nav Tabs -->
      <ul class="nav nav-tabs mb-4" id="appTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active load-tab" id="edit-tab" 
            data-bs-toggle="tab" 
            data-bs-target="#tab-content" 
            type="button" 
            role="tab" 
            data-url="{{ route('launchpad') }}" 
            aria-selected="true">
            List App
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link load-tab" id="all-tab" 
            data-bs-toggle="tab" 
            data-bs-target="#tab-content" 
            type="button" 
            role="tab" 
            data-url="{{ route('admin.products') }}" 
            aria-selected="false">
            All Apps
          </button>
        </li>
      </ul>

      <!-- Content Area -->
      <div id="tab-content" class="p-4 bg-white rounded-3 border" style="min-height: 200px;">
        <!-- Content will be loaded here -->
        <div class="text-center p-5">Loading...</div>
      </div>

    </div>
  </div>
</div>

<script>
$(document).ready(function() {
  function loadTabContent(url) {
    $('#tab-content').html('<div class="text-center p-5">Loading...</div>');

    $.ajax({
      url: url,
      type: 'GET',
      success: function(response) {
        $('#tab-content').html(response);
      },
      error: function() {
        $('#tab-content').html('<div class="text-danger">Failed to load content.</div>');
      }
    });
  }

  // Load the default active tab content on page load
  var defaultUrl = $('.nav-link.active').data('url');
  if (defaultUrl) {
    loadTabContent(defaultUrl);
  }

  // Handle tab click
  $('.load-tab').on('click', function() {
    var url = $(this).data('url');
    loadTabContent(url);
  });
});
</script>

</body>
</html>
