<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Management</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-light py-5">

<div class="container">
  <div class="card shadow rounded-4">
    <div class="card-body">
      <h1 class="card-title mb-4">Users</h1>

      <!-- Nav Tabs -->
      <ul class="nav nav-tabs mb-4" id="userTabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active load-tab" id="users-tab"
            data-bs-toggle="tab"
            data-bs-target="#user-tab-content"
            type="button"
            role="tab"
            data-url="{{ route('admin.users') }}"
            aria-selected="true">
            Users
          </button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link load-tab" id="add-user-tab"
            data-bs-toggle="tab"
            data-bs-target="#user-tab-content"
            type="button"
            role="tab"
            data-url="{{ route('admin.users') }}"
            aria-selected="false">
            Add New User
          </button>
        </li>
      </ul>

      <!-- Content Area -->
      <div id="user-tab-content" class="p-4 bg-white rounded-3 border" style="min-height: 200px;">
        <div class="text-center p-5">Loading...</div>
      </div>

    </div>
  </div>
</div>

<script>
$(document).ready(function() {
  function loadTabContent(url) {
    $('#user-tab-content').html('<div class="text-center p-5">Loading...</div>');

    $.ajax({
      url: url,
      type: 'GET',
      success: function(response) {
        $('#user-tab-content').html(response);
      },
      error: function() {
        $('#user-tab-content').html('<div class="text-danger">Failed to load content.</div>');
      }
    });
  }

  // Load default active tab content
  var defaultUrl = $('.nav-link.active').data('url');
  if (defaultUrl) {
    loadTabContent(defaultUrl);
  }

  // Handle tab clicks
  $('.load-tab').on('click', function() {
    var url = $(this).data('url');
    loadTabContent(url);
  });
});
</script>

</body>
</html>
