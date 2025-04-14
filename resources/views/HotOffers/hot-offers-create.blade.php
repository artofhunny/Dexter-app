
<div class="container">
    <h1>Create Hot Offer</h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <form action="{{ route('saveSelectedApps') }}" method="POST">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="border rounded-lg p-4 shadow">
                <h2>Card 1</h2>
                <div class="mb-4">
                    <label for="card_1_app_1" class="block">Select App 1</label>
                    <select name="card_1_app_1" id="card_1_app_1" class="w-full">
                        <option value="">-- Select App --</option>
                        @foreach($apps as $app)
                            <option value="{{ $app->id }}">{{ $app->app_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="card_1_app_2" class="block">Select App 2</label>
                    <select name="card_1_app_2" id="card_1_app_2" class="w-full">
                        <option value="">-- Select App --</option>
                        @foreach($apps as $app)
                            <option value="{{ $app->id }}">{{ $app->app_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="card_1_app_3" class="block">Select App 3</label>
                    <select name="card_1_app_3" id="card_1_app_3" class="w-full">
                        <option value="">-- Select App --</option>
                        @foreach($apps as $app)
                            <option value="{{ $app->id }}">{{ $app->app_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="border rounded-lg p-4 shadow">
                <h2>Card 2</h2>
                <div class="mb-4">
                    <label for="card_2_app_1" class="block">Select App 1</label>
                    <select name="card_2_app_1" id="card_2_app_1" class="w-full">
                        <option value="">-- Select App --</option>
                        @foreach($apps as $app)
                            <option value="{{ $app->id }}">{{ $app->app_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="card_2_app_2" class="block">Select App 2</label>
                    <select name="card_2_app_2" id="card_2_app_2" class="w-full">
                        <option value="">-- Select App --</option>
                        @foreach($apps as $app)
                            <option value="{{ $app->id }}">{{ $app->app_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="card_2_app_3" class="block">Select App 3</label>
                    <select name="card_2_app_3" id="card_2_app_3" class="w-full">
                        <option value="">-- Select App --</option>
                        @foreach($apps as $app)
                            <option value="{{ $app->id }}">{{ $app->app_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="border rounded-lg p-4 shadow">
                <h2>Card 3</h2>
                <div class="mb-4">
                    <label for="card_3_app_1" class="block">Select App 1</label>
                    <select name="card_3_app_1" id="card_3_app_1" class="w-full">
                        <option value="">-- Select App --</option>
                        @foreach($apps as $app)
                            <option value="{{ $app->id }}">{{ $app->app_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="card_3_app_2" class="block">Select App 2</label>
                    <select name="card_3_app_2" id="card_3_app_2" class="w-full">
                        <option value="">-- Select App --</option>
                        @foreach($apps as $app)
                            <option value="{{ $app->id }}">{{ $app->app_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="card_3_app_3" class="block">Select App 3</label>
                    <select name="card_3_app_3" id="card_3_app_3" class="w-full">
                        <option value="">-- Select App --</option>
                        @foreach($apps as $app)
                            <option value="{{ $app->id }}">{{ $app->app_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Create Hot Offer</button>
        
    </form>
</div>
