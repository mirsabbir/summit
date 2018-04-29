<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Course;

class CourseComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $courses;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(Course $courses)
    {
        // Dependencies automatically resolved by service container...
        $this->courses = $courses;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('courses', Course::all());
    }
}