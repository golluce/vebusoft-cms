@extends('layouts.monopanel')

@section('', 'Sayfa Oluştur')

@section('content')
    <form action="{{ route('pages.store') }}" method="POST" id="mainForm">
        @csrf
        <div class="row">
            <div class="col-xxl-10">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card- mb-0 flex-grow-1 text-muted">Sayfalar</h4>
                    </div>
                    <div class="card-body">
                        <div class="live-preview">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3 input-group-v ">
                                        <label for="title" class="form-label">Başlık</label>
                                        <input type="text" name="title" class="form-control" id="title"
                                               value="{{ old('title') }}" placeholder="Başlık Giriniz">

                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <div class="input-group">
                                            <span class="input-group-text">{{ request()->getHost() }}/</span>
                                            <input type="text" name="slug" class="form-control" id="slug"
                                                   value="{{ old('slug') }}">

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
                            <div class="existed-seo-meta hidden">
                                <span class="page-title-seo" id="meta_title_preview"></span>
                                <div class="page-url-meta ws-nm">
                                    <p>{{ request()->getHost() }}/<span id="meta_link_preview"></span></p>
                                    <span style="color: #70757a;">{{ now()->format('d.m.Y') }} - </span>
                                    <span id="meta_description_preview"></span>
                                </div>

                            </div>
                        </div>
                        <div id="seoFields" class="d-none">
                            <hr>
                            <div class="mb-3">
                                <label for="meta_title" class="form-label">SEO Başlık</label>
                                <input type="text" class="form-control" name="meta_title" id="meta_title"
                                       value="{{ old('meta_title') }}" maxlength="70">
                                <small id="metaTitleCount" class="text-muted">70 karakter kaldı</small>
                            </div>
                            <div class="mb-3">
                                <label for="meta_description" class="form-label">SEO Açıklama</label>
                                <textarea class="form-control" name="meta_description" id="meta_description" rows="3"
                                          maxlength="160">{{ old('meta_description') }}</textarea>
                                <small id="metaDescriptionCount" class="text-muted">160 karakter kaldı</small>
                            </div>
                            <div class="mb-3">
                                <label for="seo_keywords" class="form-label">SEO Anahtar Kelimeler</label>
                                <input type="text" class="form-control" name="seo_keywords" id="seo_keywords"
                                       value="{{ old('seo_keywords') }}">
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
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="icon icon-tabler icon-tabler-device-floppy"
                                     width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                     fill="none"
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
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-transfer-in"
                                     width="24"
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
                    <h4 class="card-  flex-grow-1 text-muted">Durum</h4>
                    <hr>
                    <select class="form-select mb-3" name="status">
                        <option selected="selected" value="1">Yayında</option>
                        <option value="2">Taslak</option>
                        <option value="0">Bekliyor</option>
                    </select>
                </div>
            </div> <!-- end col -->
        </div>
    </form>

@endsection


