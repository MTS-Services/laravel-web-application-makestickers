<?php

namespace App\Http\Controllers\Backend\UserDashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
   public function AccountSettings()
   {
       return view('backend.user.UserDashboard.AccountSettings');
   }
   public function AddressBook()
   {
       return view('backend.user.UserDashboard.AddressBook');
   }
   public function ManageSavedCreditCards()
   {
       return view('backend.user.UserDashboard.ManageSavedCreditCards');
   }
   public function MyFavoriteDesigns()
   {
       return view('backend.user.UserDashboard.MyFavoriteDesigns');
   }
   public function OrderHistory()
   {
       return view('backend.user.UserDashboard.OrderHistory');
   }
}
