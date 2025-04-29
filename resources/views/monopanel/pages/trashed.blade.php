@extends('layouts.monopanel')

@section('content')
    <div class="container-fluid">
        <h4 class="mb-4">{{ __('panel.pages') }} / Çöp Kutusu</h4>



        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ __('panel.title') }}</th>
                            <th>{{ __('panel.slug') }}</th>
                            <th>{{ __('panel.deleted_at') }}</th>
                            <th>{{ __('panel.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($pages as $page)
                            <tr>
                                <td>{{ $page->id }}</td>
                                <td>{{ $page->title }}</td>
                                <td>{{ $page->slug }}</td>
                                <td>{{ $page->deleted_at->format('d.m.Y H:i') }}</td>
                                <td>
                                    <form action="{{ route('pages.restore', $page->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm">
                                            Geri Yükle
                                        </button>
                                    </form>

                                    <form action="{{ route('pages.forceDelete', $page->id) }}" method="POST" class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Kalıcı Sil
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Çöp kutusunda hiç sayfa yok.</td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    {{ $pages->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
