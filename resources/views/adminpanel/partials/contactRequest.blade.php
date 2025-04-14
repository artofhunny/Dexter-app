<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Requests</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold text-gray-700">📩 Contact Requests</h2>
            <a href="{{ url()->previous() }}" class="text-white bg-blue-500 px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                Back
            </a>
        </div>
        

        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">Name</th>
                    <th class="border p-2">Email</th>
                    <th class="border p-2">App Name</th>
                    <th class="border p-2">Phone</th>
                    <th class="border p-2">Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($requests as $request)
                    <tr class="border">
                        <td class="border p-2">{{ $request->full_name }}</td>
                        <td class="border p-2">{{ $request->email }}</td>
                        <td class="border p-2">{{ $request->app_name }}</td>
                        <td class="border p-2">{{ $request->phone }}</td>
                        <td class="border p-2">{{ $request->message }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if($requests->isEmpty())
            <p class="text-gray-500 mt-4">No contact requests found.</p>
        @endif
    </div>

</body>
</html>
