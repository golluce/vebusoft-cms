<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Page;
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

    public function store(Request $request)
    {
        try {
            $rules  = [
                'title' => 'required|min:3',
                'slug' => 'nullable|unique:pages,slug',
            ];

            // Validation
            $request->validate($rules , [
                'title.required' => 'Başlık alanı zorunludur.',
                'slug.unique' => 'Bu URL zaten var.',
            ]);

            $data = $request->all();
            if (empty($data['slug'])) {
                $data['slug'] = Str::slug($data['title']);
            }
            $originalSlug = $data['slug'];
            $count = 1;
            while (Page::where('slug', $data['slug'])->exists()) {
                $data['slug'] = $originalSlug . '-' . $count++;
            }

            // Sayfayı oluşturuyoruz
            $page = Page::create([
                'title' => $data['title'],
                'slug' => $data['slug'],
                'content' => null,
                'meta_title' => $data['meta_title'] ?? null,
                'meta_description' => $data['meta_description'] ?? null,
                'seo_keywords' => !empty($data['seo_keywords']) ? implode(',', (array) $data['seo_keywords']) : null,
                'status' => $data['status'] ?? 0,
            ]);

            if ($request->input('action') === 'save_and_edit') {
                return redirect()->route('pages.edit', $page->id)->with('success', 'Sayfa kaydedildi, düzenlemeye devam edebilirsiniz.');
            }

            return redirect()->route('pages.index')->with('success', 'Sayfa başarıyla kaydedildi.');

        } catch (\Exception $e) {
            // Hata durumunda
            return redirect()->back()->with('error', 'Sayfa kaydedilemedi, lütfen tekrar deneyin. Nedeni: ' . $e->getMessage());
        }
    }


    public function show(Page $page)
    {
        //
    }

    public function edit(Page $page)
    {
        return view('monopanel.pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'nullable|unique:pages,slug,' . $page->id,
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

        $page->update([
            'title' => $data['title'],
            'slug' => $data['slug'],
            'content' => null,
            'meta_title' => $data['meta_title'] ?? null,
            'meta_description' => $data['meta_description'] ?? null,
            'seo_keywords' => !empty($data['seo_keywords']) ? implode(',', (array) $data['seo_keywords']) : null,
            'status' => $data['status'] ?? 0,
        ]);

        if ($request->input('action') === 'save_and_edit') {
            return redirect()->route('pages.edit', $page->id)
                ->with('success', 'Sayfa güncellendi, düzenlemeye devam edebilirsiniz.');
        }

        return redirect()->route('pages.index')
            ->with('success', 'Sayfa başarıyla güncellendi.');
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'Sayfa silindi.');
    }

    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');

        if (!empty($ids)) {
            Page::whereIn('id', $ids)->delete();
            return redirect()->back()->with('success', 'Seçilen sayfalar başarıyla silindi.');
        }

        return redirect()->back()->with('error', 'Lütfen silmek için en az bir sayfa seçin.');
    }
}
