@extends('layouts.monopanel')

@section('title', 'Sayfalar')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Sayfalar</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="listjs-table" id="customerList">
                        <div class="row g-4 mb-3">
                            <div class="col-sm-auto">
                                <div class="d-flex align-items-center gap-2">
                                    <a href="{{ route('pages.create') }}" class="btn btn-success add-btn">
                                        <i class="ri-add-line align-bottom me-1"></i>Oluştur
                                    </a>

                                    <form method="POST" action="{{ route('pages.bulk-delete') }}">
                                        @csrf
                                        <button type="submit" id="bulkDeleteButton" class="btn btn-danger" style="display:none;">
                                            <i class="ri-delete-bin-2-line"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">
                                    <div class="search-box ms-2">
                                        <input type="text" class="form-control search" placeholder="Arama Yap">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive table-card mt-3 mb-1">

                            <table class="table align-middle table-nowrap" id="globalTable">
                                <thead class="table-light">
                                <tr>
                                    <th scope="col" style="width: 50px;">
                                        <div class="form-check">
                                            <input class="form-check-input selectBox" type="checkbox" id="checkAll" value="option">
                                        </div>
                                    </th>
                                    <th class="sort" data-sort="title">Başlık</th>
                                    <th class="sort"  data-sort="status" style="width: 130px">Durum</th>
{{--                                    <th title="Diller" style="width: 150px">--}}
{{--                                            <?php  foreach (languages('data') as  $language){   ?>--}}
{{--                                        <img src="<?=ADMIN_FOLDER?>/model/languages/flags/<?=$language['lang_code']?>.svg" title="<?=$language['lang_name']?>" class="flags" style="height: 16px" alt="<?=$language['lang_name']?>">--}}
{{--                                    <?php } ?>--}}
                                    <th data-sort="action" style="width: 130px;">İşlemler</th>
                                </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                @foreach($pages as $page)
                                <tr>
                                    <td><input type="checkbox" name="ids[]" value="{{ $page->id }}" class="selectBox form-check-input"></td>

                                    <td class="title"><a href="{{ route('pages.edit', $page) }}" class="fw-medium link-primary">{{ $page->title }}</a></td>
                                    @php
                                        $badge = $page->getStatusBadge();
                                    @endphp

                                    <td>
                                        <span class="badge bg-{{ $badge['color'] }}">{{ $badge['text'] }}</span>
                                    </td>
{{--                                    <td class="lang lang_list">--}}
{{--                                            <?php foreach (posts_langs($post['lang_ref_id'], lang_is_default('lang_code')) as $posts_lang){ ?>--}}
{{--                                            <?php if (lang_is_default('lang_code')  == $posts_lang['lang']) {?>--}}
{{--                                        <a data-bs-toggle="tooltip" href="<?=ADMIN_URL?>/<?=$model?>/edit/<?=$posts_lang['id']?>" aria-label="<?=table_lang_tooltip?> <?=lang_name($posts_lang['lang'])?>" data-bs-original-title="<?=lang_name($posts_lang['lang'])?><?=table_lang_tooltip?> ">--}}
{{--                                            <i class="bx bx-check"></i>--}}
{{--                                        </a>--}}
{{--                                        <?php }else{ ?>--}}
{{--                                        <a data-bs-toggle="tooltip" href="<?=ADMIN_URL?>/<?=$model?>/edit/<?=$posts_lang['id']?>" aria-label="<?=table_lang_tooltip?>" data-bs-original-title="<?=lang_name($posts_lang['lang'])?><?=table_lang_tooltip?> ">--}}
{{--                                            <i class="bx bx-edit"></i>--}}
{{--                                        </a>--}}
{{--                                        <?php } ?>--}}
{{--                                        <?php } ?>--}}
{{--                                    </td>--}}
                                    <td>
                                        <div class="d-flex gap-2">
                                            <div class="edit">
                                                <a href="{{ route('pages.edit', $page) }}" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Düzenle">
                                                    <i class="bx bx-edit edit_icon" style=""></i>
                                                </a>
                                            </div>
                                            <div class="remove">
                                                <form action="{{ route('pages.destroy', $page) }}" method="POST" class="delete-form">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="bx bx-trash trash_icon btn-delete"></button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>

                            </table>

                            @if($pages->isEmpty())
                                <div style="display: block">
                                    <div class="text-center">
                                        <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                        <h5 class="mt-2">Sonuç bulunamadı!</h5>
                                        <p class="text-muted mb-0">Gidiğiniz kayıtlar burada görünecek</p>
                                    </div>
                                </div>
                            @endif
                            @if ($pages->hasPages())
                                <div class="d-flex justify-content-end mt-3">
                                    <div class="pagination-wrap hstack gap-2">

                                        {{-- Geri Butonu --}}
                                        @if ($pages->onFirstPage())
                                            <a class="page-item pagination-prev disabled" href="javascript:void(0);">Geri</a>
                                        @else
                                            <a class="page-item pagination-prev" href="{{ $pages->previousPageUrl() }}">Geri</a>
                                        @endif

                                        {{-- Sayfa Numaraları --}}
                                        <ul class="pagination listjs-pagination mb-0">
                                            @foreach ($pages->getUrlRange(1, $pages->lastPage()) as $page => $url)
                                                <li class="{{ $pages->currentPage() == $page ? 'active' : '' }}">
                                                    <a class="page" href="{{ $url }}" data-i="{{ $page }}" data-page="{{ $pages->perPage() }}">{{ $page }}</a>
                                                </li>
                                            @endforeach
                                        </ul>

                                        {{-- İleri Butonu --}}
                                        @if ($pages->hasMorePages())
                                            <a class="page-item pagination-next" href="{{ $pages->nextPageUrl() }}">İleri</a>
                                        @else
                                            <a class="page-item pagination-next disabled" href="javascript:void(0);">İleri</a>
                                        @endif

                                    </div>
                                </div>
                            @endif

                        </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection
