<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gellary;
use App\Models\Page;
use App\Models\Review;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $adminsCount = getRecordCount(Admin::class);
        $contactsCount = getRecordCount(Contact::class);
        $galleriesCount = getRecordCount(Gellary::class);
        $servicesCount = getRecordCount(Service::class);
        $categoriesCount = getRecordCount(Category::class);
        $pagesCount = getRecordCount(Page::class);
        $reviewsCount = getRecordCount(Review::class);
        return view('admin.index', compact('adminsCount', 'contactsCount', 'galleriesCount', 'servicesCount', 'categoriesCount', 'pagesCount', 'reviewsCount'));
    }
}
