@extends('layouts.panel')

@section('content')
    <h1 class="text-xl font-bold mb-4">📄 Sayfalar</h1>

    <table class="w-full table-auto border">
        <thead>
        <tr>
            <th class="border p-2">Başlık</th>
            <th class="border p-2">Durum</th>
            <th class="border p-2">İşlem</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pages as $page)
            <tr>
                <td class="border p-2">{{ $page->title }}</td>
                <td class="border p-2">{{ $page->status ? '🟢 Aktif' : '🔴 Pasif' }}</td>
                <td class="border p-2">
                    <a href="#" class="text-blue-600 hover:underline">Düzenle</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
