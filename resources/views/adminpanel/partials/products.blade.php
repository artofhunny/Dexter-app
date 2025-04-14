{{-- <h2>Product List</h2>
<table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->app_name }}</td>
                <td>{{ $product->app_category }}</td>
                <td>
                    <a class="btn btn-primary btn-sm edit-product" data-id="{{ $product->id }}">
                        Edit
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table> --}}


<h2 class="mb-4">Product List</h2>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->app_name }}</td>
                            <td>{{ $product->app_category }}</td>
                            <td>
                                <!-- Edit Link with Route -->
                                {{-- {{ route('admin.editApp', $product->id) }} --}}
                                <a href="{{ route('admin.app.edit', $product->id) }}" class="btn btn-primary btn-sm">

                                
                                
                                <!-- Optional: View Link -->
                                {{-- <a href="{{ route('apps.show', $product->id) }}" class="btn btn-info btn-sm ms-1"> --}}
                                    {{-- <i class="fas fa-eye"></i> View --}}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
