<div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
    <h1>Admin Dashboard</h1>

    <h2>Data Material</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">Jenis</th>
                <th class="px-4 py-2">Stok</th>
                <th class="px-4 py-2">Update</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($materials as $material)
                <tr>
                    <td class="px-4 py-2">{{ $material->type }}</td>
                    <td class="px-4 py-2">
                        <form method="POST" action="{{ route('admin.updateStock') }}">
                            @csrf
                            <input type="number" name="stock" value="{{ old('stock', $material->stock) }}" class="border p-2">
                            <input type="hidden" name="id" value="{{ $material->id }}">
                            <button type="submit" class="bg-blue-500 text-white p-2 rounded">Update</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
