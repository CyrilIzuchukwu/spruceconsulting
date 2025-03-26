<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\ContactInformation;
use App\Models\Inquiry;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::composer('*', function ($view) {

            $contact = ContactInformation::first();
            $view->with('contact', $contact);

            $testimonialView = Testimonial::all();
            $view->with('testimonialView', $testimonialView);



            $inquiryCount = Inquiry::count();
            $view->with('inquiryCount', $inquiryCount);


            $subAdminCount = User::Where('role_as', "2")->count();
            $view->with('subAdminCount', $subAdminCount);

            $superAdminCount = User::Where('role_as', "1")->count();
            $view->with('superAdminCount', $superAdminCount);

            $testimonialCount = Testimonial::count();
            $view->with('testimonialCount', $testimonialCount);


            $blogCount = Blog::count();
            $view->with('blogCount', $blogCount);


            $serviceCount = Service::count();
            $view->with('serviceCount', $serviceCount);



            $teamCount = Team::count();
            $view->with('teamCount', $teamCount);





            // blogs in home page
            $homeBlogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
            $view->with('homeBlogs', $homeBlogs);


            // main blog page view
            $blogBlogs = Blog::orderBy('created_at', 'desc')->paginate(6);
            $view->with('blogBlogs', $blogBlogs);


            $services = Service::all();
            $view->with('services', $services);


            $oursTeams = Team::all();
            $view->with('oursTeams', $oursTeams);
        });
    }
}
