<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Notifications\InvoicePaid;

class SampleController extends Controller
{
    public function index()
    {
        // ユーザーデータを取得したつもり
        $user = new User([
            'name'  => 'Test User',
            'email' => 'test_user@example.com',
        ]);

        // 通知
        $user->notify(new InvoicePaid());
    }
}
