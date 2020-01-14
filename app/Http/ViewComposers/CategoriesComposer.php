<?php


namespace App\Http\ViewComposers;


use App\Sevices\PostServiceInterface;
use Illuminate\View\View;

class CategoriesComposer
{
    protected $categories;

    public function __construct(PostServiceInterface $postService)
    {
        // Dependencies automatically resolved by service container...
        $this->categories = $postService->getCategories();
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('allCatigories', $this->categories);
    }
}