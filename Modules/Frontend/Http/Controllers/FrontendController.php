<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('frontend::index');
    }
    public function about()
    {
        return view('frontend::about');
    }
    public function blog()
    {
        return view('frontend::blog');
    }
    public function blogDetail()
    {
        return view('frontend::blog-detail');
    } 
    public function contact()
    {
        return view('frontend::contact');
    }
    public function productDetails()
    {
        return view('frontend::product-details');
    }
    public function products()
    {
        return view('frontend::products');
    }

    public function NewsEvent()
    {
        return view('frontend::news-event');
    }
    public function newsDetails()
    {
        return view('frontend::news-details');
    } 
    public function policy()
    {
        return view('frontend::policy');
    } 
    public function productGroups()
    {
        return view('frontend::product-groups');
    }
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('frontend::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('frontend::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('frontend::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
