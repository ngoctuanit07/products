<?php

namespace App\Http\Controllers;

use App\Mail\OrderSuccessEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function sendOrderSuccessEmail(Request $request)
    {
        // Xử lý logic đặt hàng thành công

        // Gửi email thông báo
        $userEmail = $request->input('email');
        Mail::to($userEmail)->send(new OrderSuccessEmail());

        return response()->json(['message' => 'Order success email sent']);
    }
}
