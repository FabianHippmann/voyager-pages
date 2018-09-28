<?php

namespace Pvtl\VoyagerPages\Http\Controllers;

use Pvtl\VoyagerPages\Page;
use Illuminate\Http\Request;
use Pvtl\VoyagerPages\Http\Controllers\Controller;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class PageController extends Controller
{
    /**
     * This is the module's view path that can be overriden
     */
    protected $viewPath = 'voyager-pages';

    /**
     * Route: Gets a single page and passes data to a view
     *
     * @param string $slug
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPage($slug = 'home')
    {
        $request = request();
        $page = Page::withTranslation()->where('slug', '=', $slug)->firstOrFail();

        return $this->makeResponse($request, "{$this->viewPath}::modules.pages.default", [
            'page' => $page,
        ], (new PageResource($post->load('authorId'))));
    }
}
