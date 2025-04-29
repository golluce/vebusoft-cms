<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use App\Models\Revision;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('created_at', 'desc')->paginate(10); // Buraya paginate ekledim
        return view('monopanel.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('monopanel.pages.create');
    }

    public function store(PageRequest $request)
    {

        try {
                $data = $request->validated();
            if (empty($data['slug'])) {
                $data['slug'] = Str::slug($data['title']);
            }
            $originalSlug = $data['slug'];
            $count = 1;
            while (Page::where('slug', $data['slug'])->exists()) {
                $data['slug'] = $originalSlug . '-' . $count++;
            }

            $page = Page::create([
                'title' => $data['title'],
                'slug' => $data['slug'],
                'content' => null,
                'meta_title' => $data['meta_title'] ?? null,
                'meta_description' => $data['meta_description'] ?? null,
                'seo_keywords' => !empty($data['seo_keywords']) ? implode(',', (array)$data['seo_keywords']) : null,
                'status' => $data['status'] ?? 0,
            ]);

            if ($request->input('action') === 'save_and_edit') {
                return redirect()->route('pages.edit', $page->id)->with('success', 'Sayfa kaydedildi, düzenlemeye devam edebilirsiniz.');
            }

            return redirect()->route('pages.index')->with('success', 'Sayfa başarıyla kaydedildi.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Sayfa kaydedilemedi. Nedeni: ' . $e->getMessage());
        }
    }


    public function show(Page $page)
    {
        //
    }
    public function restoreRevision(Page $page, Revision $revision)
    {
        $page->update([
            'title' => $revision->title,
            'slug' => $revision->slug,
            'content' => $revision->content,
            'meta_title' => $revision->meta_title,
            'meta_description' => $revision->meta_description,
            'seo_keywords' => $revision->seo_keywords,
        ]);

        return redirect()->route('pages.edit', $page->id)->with('success', 'Geçmiş revizyon başarıyla geri yüklendi.');
    }


    public function edit(Page $page)
    {
        $revisions = \App\Models\Revision::where('model_type', Page::class)
            ->where('model_id', $page->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('monopanel.pages.edit', compact('page', 'revisions'));
    }


    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'nullable|unique:pages,slug,' . $page->id,
            'meta_title' => 'nullable',
            'meta_description' => 'nullable',
        ]);

        $data = $request->all();

        if (empty($data['slug'])) {
            $data['slug'] = Str::slug($data['title']);
        }

        $originalSlug = $data['slug'];
        $count = 1;
        while (Page::where('slug', $data['slug'])->where('id', '!=', $page->id)->exists()) {
            $data['slug'] = $originalSlug . '-' . $count++;
        }

        try {

           Revision::create([
                'model_type' => Page::class,
                'model_id' => $page->id,
                'title' => $page->title,
                'slug' => $page->slug,
                'content' => $page->content,
                'meta_title' => $page->meta_title,
                'meta_description' => $page->meta_description,
                'seo_keywords' => $page->seo_keywords,
            ]);
            $revisions = Revision::where('model_type', Page::class)
                ->where('model_id', $page->id)
                ->orderBy('created_at', 'desc')
                ->skip(10) // İlk 10 kaydı bırak
                ->take(PHP_INT_MAX) // Geri kalanları seç
                ->get();

            foreach ($revisions as $rev) {
                $rev->delete();
            }


            $page->update([
                'title' => $data['title'],
                'slug' => $data['slug'],
                'content' => $data['content'] ?? null,
                'meta_title' => $data['meta_title'] ?? null,
                'meta_description' => $data['meta_description'] ?? null,
                'seo_keywords' => !empty($data['seo_keywords']) ? implode(',', (array) $data['seo_keywords']) : null,
                'status' => $data['status'] ?? 0,
            ]);

            if ($request->input('action') === 'save_and_edit') {
                return redirect()->route('pages.edit', $page->id)->with('success', 'Sayfa güncellendi, düzenlemeye devam edebilirsiniz.');
            }

            return redirect()->route('pages.index')->with('success', 'Sayfa başarıyla güncellendi.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Sayfa güncellenemedi. Nedeni: ' . $e->getMessage());
        }
    }



    public function trashed()
    {
        $pages = Page::onlyTrashed()->orderBy('deleted_at', 'desc')->paginate(10);

        return view('monopanel.pages.trashed', compact('pages'));
    }


    public function restore($id)
    {
        $page = Page::onlyTrashed()->findOrFail($id);
        $page->restore();

        return redirect()->route('pages.trashed')->with('success', 'Sayfa başarıyla geri yüklendi.');
    }

    public function forceDelete($id)
    {
        $page = Page::onlyTrashed()->findOrFail($id);
        $page->forceDelete();

        return redirect()->route('pages.trashed')->with('success', 'Sayfa kalıcı olarak silindi.');
    }


    public function destroy(Page $page)
    {
        try {
            $page->delete();
            return redirect()->route('pages.index')->with('success', 'Sayfa silindi.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Sayfa kaydedilemedi. Nedeni: ' . $e->getMessage());
        }
    }

    public function bulkDelete(PageRequest $request)
    {
        try {
            $ids = $request->input('ids');

            if (!empty($ids)) {
                Page::whereIn('id', $ids)->delete();
                return redirect()->back()->with('success', 'Seçilen sayfalar başarıyla silindi.');
            }

            return redirect()->back()->with('error', 'Lütfen silmek için en az bir sayfa seçin.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Sayfa kaydedilemedi. Nedeni: ' . $e->getMessage());
        }
    }
}
