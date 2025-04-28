<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::latest()->get();
        return view('monopanel.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monopanel.pages.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validationRules = [
            'title' => 'required|min:3',
            'slug' => 'nullable|unique:pages,slug',
        ];

        $data = $request->all();

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
            'seo_keywords' => !empty($data['seo_keywords']) ? implode(',', (array) $data['seo_keywords']) : null,
            'status' => $data['status'] ?? 0,
        ]);

        if ($request->input('action') === 'save_and_edit') {
            return redirect()->route('pages.edit', $page->id)->with('success', 'Sayfa kaydedildi, düzenlemeye devam edebilirsiniz.');
        }

        return redirect()->route('pages.index')->with('success', 'Sayfa başarıyla kaydedildi.');
    }


    /**
     * Display the specified resource.
     *
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('monopanel.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
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



    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Page $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('pages.index')->with('success', 'Sayfa silindi.');
    }

}
