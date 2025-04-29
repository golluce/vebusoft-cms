@extends('layouts.monopanel')

@section('title', 'Sayfa Düzenle')

@section('content')
    <ul class="nav nav-tabs" id="pageEditTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="edit-tab" data-bs-toggle="tab" data-bs-target="#edit" type="button" role="tab">
                Sayfa Düzenle
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="revisions-tab" data-bs-toggle="tab" data-bs-target="#revisions" type="button" role="tab">
                Geçmiş Revizyonlar
            </button>
        </li>
    </ul>

    <div class="tab-content pt-3">
        <div class="tab-pane fade show active" id="edit" role="tabpanel">
            <form action="{{ route('pages.update', $page->id) }}" method="POST" id="mainForm">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xxl-10">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card- mb-0 flex-grow-1 text-muted">Sayfalar</h4>
                            </div><!-- end card header -->

                            <div class="card-body">
                                <div class="live-preview">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-3 input-group-v ">
                                                <label for="title" class="form-label">Başlık</label>
                                                <input type="text" name="title" class="form-control input-group-flat" id="title"
                                                       value="{{ old('title', $page->title) }}"  placeholder="Başlık Giriniz" >
                                            </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <div class="input-group">
                                                    <span class="input-group-text">{{ request()->getHost() }}/</span> <!-- id kaldırıldı -->
                                                    <input type="text"  name="slug" class="form-control" id="slug"  value="{{ old('slug', $page->slug) }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card- mb-0 flex-grow-1">Arama Motoru Optimizasyonu</h4>
                                <div class="flex-shrink-0">
                                    <div class="form-check form-switch form-switch-right form-switch-md">
                                        <label for="seoToggle" class="form-label text-muted">SEO Meta Düzenle</label>
                                        <input class="form-check-input" type="checkbox" id="seoToggle">
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="seo-preview">
                                    <p class="default-seo-description ">
                                        Sitenizi Google gibi arama motorlarında bulunabilir kılmak için meta başlık ve
                                        açıklamayı ayarlayın
                                    </p>
                                    <div class="existed-seo-meta ">
                                        <span class="page-title-seo" id="meta_title_preview">{{ $page->meta_title ?? $page->title }}</span>
                                        <div class="page-url-meta ws-nm">
                                            <p>{{ request()->getHost() }}/<span id="meta_link_preview">{{ $page->slug }}</span></p>
                                            <span style="color: #70757a;">{{ $page->created_at }} - </span>
                                            <span id="meta_description_preview">{{ $page->meta_description }}</span>
                                        </div>

                                    </div>
                                </div>
                                <div id="seoFields" class="{{ empty($page->meta_title) && empty($page->meta_description) && empty($page->seo_keywords) ? 'd-none' : '' }}">
                                    <hr>
                                    <div class="mb-3">
                                        <label for="meta_title" class="form-label">SEO Başlık</label>
                                        <input type="text" class="form-control" name="meta_title" id="meta_title" value="{{ old('meta_title', $page->meta_title) }}" maxlength="70">
                                        <small id="metaTitleCount" class="text-muted">70 karakter kaldı</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="meta_description" class="form-label">SEO Açıklama</label>
                                        <textarea class="form-control" name="meta_description" id="meta_description" rows="3" maxlength="160">{{ old('meta_description', $page->meta_description) }}</textarea>
                                        <small id="metaDescriptionCount" class="text-muted">160 karakter kaldı</small>
                                    </div>
                                    <div class="mb-3">
                                        <label for="seo_keywords" class="form-label">SEO Anahtar Kelimeler</label>
                                        <input type="text" class="form-control" name="seo_keywords" id="seo_keywords" value="{{ old('seo_keywords', $page->seo_keywords) }}" >
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div> <!-- end col -->

                    <div class="col-xxl-2">
                        <div class="card card-body">
                            <h4 class="card-  flex-grow-1 text-muted">İşlemler</h4>
                            <hr>
                            <div class="saved">
                                <button class="btn btn-primary" type="submit" value="save_and_edit" name="action">
                            <span class="icon-tabler-wrapper icon-left">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy"
                                     width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                  <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                  <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                  <path d="M14 4l0 4l-6 0l0 -4"></path>
                                </svg>
                            </span>
                                    Kaydet ve Düzenle
                                </button>
                                <button class="btn btn-light" type="submit" value="save" name="action">
                            <span class="icon-tabler-wrapper icon-left">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-transfer-in" width="24"
                                     height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round">
                                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                  <path d="M4 18v3h16v-14l-8 -4l-8 4v3"></path>
                                  <path d="M4 14h9"></path>
                                  <path d="M10 11l3 3l-3 3"></path>
                                </svg>
                            </span>
                                    Kaydet
                                </button>
                            </div>
                        </div>
                        <div class="card card-body">
                            <h4 class="card- flex-grow-1 text-muted">Durum</h4>
                            <hr>
                            <select class="form-select mb-3" name="status">
                                <option value="1" {{ old('status', $page->status) == 1 ? 'selected' : '' }}>Yayında</option>
                                <option value="2" {{ old('status', $page->status) == 2 ? 'selected' : '' }}>Taslak</option>
                                <option value="0" {{ old('status', $page->status) == 0 ? 'selected' : '' }}>Bekliyor</option>
                            </select>
                        </div>
                    </div> <!-- end col -->
                </div>
            </form>
        </div>

        <!-- Geçmiş Revizyonlar -->
        <div class="tab-pane fade" id="revisions" role="tabpanel">
            <div class="row">
                <div class="col-lg-10 ">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Revizyonlar</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="listjs-table" id="customerList">


                                <div class="table-responsive table-card mt-3 mb-1">

                                    <table class="table align-middle table-nowrap" id="globalTable">
                                        <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Başlık</th>
                                            <th>Slug</th>
                                            <th>Tarih</th>
                                            <th>İşlem</th>
                                        </tr>
                                        </thead>
                                        <tbody class="list form-check-all">
                                        @foreach ($revisions as $revision)
                                            <tr>
                                                <td>{{ $revision->id }}</td>
                                                <td>{{ $revision->title }}</td>
                                                <td>{{ $revision->slug }}</td>
                                                <td>{{ $revision->created_at->format('d.m.Y H:i') }}</td>
                                                <td>
                                                    <form action="{{ route('pages.revision-restore', [$page->id, $revision->id]) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary btn-sm">Geri Yükle</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>

                                    </table>

                                    @if($revisions->isEmpty())
                                        <div style="display: block">
                                            <div class="text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                <h5 class="mt-2">Sonuç bulunamadı!</h5>
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
        </div>
    </div>

@endsection

